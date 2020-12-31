<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User_Model extends MY_Model
{
    public $_table         = 'users';

    protected $soft_delete = true;

    /**
     * Default support reply e-mail, advised by Todd.
     * @var string
     */
    const SUPPORT_EMAIL           = 'support@boosterthon.com';
    const SUPPORT_NAME            = 'Boosterthon Support';
    const NO_REPLY_EMAIL          = 'noreply@boosterthon.com';
    const NO_REPLY_NAME           = 'Boosterthon';
    const TECH_BOOSTER_EMAIL      = 'techlogs@boosterthon.com';
    const UNSUBSCRIBE_ENCRYPT_KEY = 'ENWEOS!$V'; // ENV variable one day
    const UNSUBSCRIBE_HMAC        = '3ac2b7a75171408bc437a6f10bc0ea87eb97c8f66717f4044536358d075d7b49'; // ENV variable one day

  public $before_delete = [ 'delete_relationships' ];

    // Flagging user_type as a school
    public $is_school = false;


    /**
     * Gets all users and their groups
     */
    public function get_users()
    {
        $this->load->model('user_group_model');

        $groups = $this->user_group_model->get_all();

        $reduce_groups = [];

        foreach ($groups as $g) {
            $reduce_groups[$g->id] = $g->description;
        }

        $sql = "SELECT `users_user_groups`.user_id, `users_user_groups`.`group_id`, users.*
                FROM `users_user_groups`
                LEFT JOIN `users` on (`users_user_groups`.`user_id` = `users`.`id`)";

        $users = $this->db->query($sql)->result();

        $combined_users = [];

        foreach ($users as $u) {
            if (! isset($combined_users[$u->id])) {
                $u->groups              = [ $u->group_id => $reduce_groups[$u->group_id] ];
                $combined_users[$u->id] = $u;
            } else { //This user already added to the combined array, append the group name to the $u->groups
                $combined_users[$u->id]->groups[$u->group_id] = $reduce_groups[$u->group_id];
            }
        }

        return $combined_users;
    }


    /**
     * select a participant by a field and value
     * @param type $field
     * @param type $value
     * @return type
     */
    public function get_participant_by($field, $value)
    {
        $result = $this->db->from('participants')
      ->where($field, $value)
      ->get()->result();
        return $result[0];
    }


    /**
     * Get a user and its user groups
     */
    public function get_with_groups($user_id)
    {
        $user = $this->get($user_id);

        if ($user) {
            $user_groups = $this->db->query(
                'SELECT `user_groups`.`name`, `user_groups`.`id`
                  FROM `user_groups`
                  JOIN `users_user_groups` ON ( `user_groups`.`id` = `users_user_groups`.`group_id` )
                  WHERE `users_user_groups`.`user_id` = ?',
                $user_id
            )
                            ->result_array();

            $user->user_groups = [];
            foreach ($user_groups as $ug) {
                $user->user_groups[$ug['id']] = $ug['name'];
            }
        }

        return $user;
    }


    /**
     * Register users from Salesforce
     */
    public function insert_new_only($users, $origin)
    {
        $this->load->model('user_group_model');

        foreach ($users as $row) {
            $is_new_user = false;
            $sf_id_user  = null;
            $email_user  = null;

            if (strtolower($row->attributes->type) == 'contact') {
                $sf_id_user = $this->with_deleted()->get_by('salesforce_contact_id', $row->Id);
                $origin     = 'sf_contact';
            } elseif (strtolower($row->attributes->type) == 'vanahcm__worker__c') {
                $sf_id_user = $this->with_deleted()->get_by('salesforce_user_id', $row->VanaHCM__User__c);
                $email_user = $this->with_deleted()->get_by('email', $row->VanaHCM__Email_Address_Worker__c);
                $origin     = 'sf_vanahcm';
            }

            $user = $this->translate_sf_tk($row, $origin);

            $user_metadata           = $user;
            $user_metadata['origin'] = $origin;
            // Remove SF specific authentication details
            unset($user_metadata['password']);
            $user_metadata['username'] = $user_metadata['email'];

            // Register a new user via ion auth, obtain user_id in any case for update
            // Pass an empty array as metadata since we are not using the separate table scheme built into Ion Auth
            if ($sf_id_user) {
                $user_id = $sf_id_user->id;
            } elseif ($email_user) {
                $user_id = $email_user->id;
            } else {
                $user_id     = $this->ion_auth->register($user['email'], $user['password'], $user['email'], []);
                $is_new_user = true;
            }

            //if email and salesforce users are not the same change email user's email and deactivate
            $this->handle_sf_sync_user_duplicate($sf_id_user, $email_user);

            $this->update($user_id, $user_metadata);

            //If the user is part of a field team, we can automatically assign them to that group
            if (!empty($user['salesforce_team_id']) && $user['active'] === 1) {
                $this->add_to_group($user_id, $user['salesforce_team_id']);
                // assign them to the admin group of lockerroom as well
                $this->load->model('user_group_model');
                $this->add_to_group($user_id, User_group_model::ADMIN);
                if ($is_new_user) {
                    // Newly registered user, send password email
                    $template_data['password'] = $user['password'];
                    $klass                     = $this;
                    $result                    = $this->email_user_pass(
                        $user['email'],
                        $template_data,
                        function ($template_data) use ($klass) {
                            return $klass->load->view('email/password_reset', $template_data, true);
                        }
                    );
                }
            }

            if ($user['active'] === 0) {
                $this->remove_users_user_groups($user_id);
            }

            $ids[] = $user_id;
        }

        return $ids;
    }


    private function remove_users_user_groups($user_id)
    {
        if (!empty($user_id) && $user_id > 0) {
            $this->db->where(['user_id' => $user_id])->delete('users_user_groups');
        }
    }


    /**
     * disable user that is not the salesforce user for an email being synced from salesforce
     * this will allow the user with the salesforce id to obtain the email from salesforce
     *
     * @param [type] $sf_id_user this is a user object from the database
     * @param [type] $email_user this is a user object from the database
     * @return void
     */
    private function handle_sf_sync_user_duplicate($sf_id_user, $email_user)
    {
        if ($sf_id_user && $email_user) {
            if ($sf_id_user->id !== $email_user->id) {
                $email_user_updates = [
          'username' => $email_user->email . '_sf_sync',
          'email' => $email_user->email . '_sf_sync',
          'active' => false,
        ];
                $this->update($email_user->id, $email_user_updates);
                $this->remove_users_user_groups($email_user->id);
                log_message('error', 'salesforce user sync was forced to handle a user conflict with the email ' . $email_user->email . 'and the salesforce id ' . $sf_id_user->salesforce_user_id . 'the non salesforce user has been deactivated and their credentials have been altered.');
            }
        }
    }


    /**
     * Translate SF fields to TK fields
     */
    public function translate_sf_tk($sf_user, $origin = 'sf_contact')
    {
        unset($sf_user->attributes);

        $field_names = [
      'Id'                                   => ($origin == 'sf_contact') ? 'salesforce_contact_id' : 'salesforce_worker_id',
      'VanaHCM__User__c'                     => 'salesforce_user_id',
      'VanaHCM__Department__c'               => 'salesforce_team_id',
      'VanaHCM__Last_Name__c'                => 'last_name',
      'LastName'                             => 'last_name',
      'VanaHCM__First_Name__c'               => 'first_name',
      'FirstName'                            => 'first_name',
      'VanaHCM__Email_Address_Worker__c'     => 'email',
      'VanaHCM__Worker_Status_Current_WA__c' => 'active',
      'Email'                                => 'email'
    ];

        foreach ($sf_user as $k => $v) {
            if ($field_names[$k] === 'active') {
                $v = strtolower($v) === 'terminated' ? 0 : 1;
            }

            $tk_user[$field_names[$k]] = $v;
        }

        $tk_user['password'] = $this->create_password();

        return $tk_user;
    }


    /**
     * Quick-create a user with minimal input
     *
     * @param [type] $user_info
     * @return void
     */
    public function register($user_info)
    {

    // Leave the password field blank, because setting one would
        // disable code login. 49882607

        $user_info['password'] = isset($user_info['password']) ? $user_info['password'] : '';

        //Pass an empty array as metadata since we are not using the separate table scheme built into Ion Auth
        $user_id = $this->ion_auth->register($user_info['email'], $user_info['password'], $user_info['email'], []);

        if (is_array($user_info['groups'])) { //Full registration, establish relationship to selected groups
            foreach ($user_info['groups'] as $g) {
                $this->add_to_group($user_id, $g);
            }
        }

        unset($user_info['email'], $user_info['password'], $user_info['groups']);

        $this->update($user_id, $user_info);

        return $user_id;
    }


    /**
     * Insert a user/group relationship (i.e. add a user to a group)
     * Group ID can be a TK id or a SF id. If the latter, we try to translate it
     *
     * @param [type] $user_id
     * @param [type] $group_id
     * @return void
     */
    public function add_to_group($user_id, $group_id)
    {
        $this->load->model('user_group_model');

        // If this is an SF group ID, resolve the Locker group
        if (!is_numeric($group_id)) {
            $group_id = $this->user_group_model->get_by('salesforce_id', $group_id)->id;
        }

        if (!empty($group_id)) {
            $relationship = ['user_id' => $user_id, 'group_id' => $group_id];

            //Check whether the relationship already exists
            $exists = $this->db->where('user_id', $relationship['user_id'])
        ->where('group_id', $relationship['group_id'])
        ->get('users_user_groups')->row();

            if (!empty($exists)) {
                return $exists;
            }

            return $this->db->insert('users_user_groups', $relationship);
        }

        return false;
    }


    /**
     * Undocumented function
     * Update groups
     * Pass an array of groups. If the user belongs to any groups outside the array, remove the relationship
     */
    public function update_groups($user_id, array $groups)
    {
        $current_groups = $this->db->select('group_id')
                               ->where('user_id', $user_id)
                               ->get('users_user_groups')->result();

        foreach ($current_groups as $g) { //Compile an array with the current group IDs
            $current_groups_arr[] = $g->group_id;
        }

        $delete_groups = array_diff($current_groups_arr, $groups);

        //Only delete if there's something to delete, otherwise what's the point :)

        if (count($delete_groups) > 0) {
            return $this->db->where_in('group_id', $delete_groups)
                  ->where('user_id', $user_id)
                  ->delete('users_user_groups');
        }

        return false; //Nothing to update
    }


    /**
     * Toggles between student and teacher groups
     * @param $user_groups - current groups the user has
     * @param $new_group - new student / teacher group
     * @return Array $new_groups - returns set of new group ids
     */
    public function toggle_student_teacher($current_user_groups, $new_group_id)
    {
        $toggle = [User_group_model::TEACHERS, User_group_model::STUDENTS];

        unset($toggle[array_search($new_group_id, $toggle)]);
        $group_to_remove = array_values($toggle);

        unset($current_user_groups[array_search($group_to_remove[0], $current_user_groups)]);
        array_push($current_user_groups, $new_group_id);
        return $current_user_groups;
    }


    /**
     * Create password
     */
    public function create_password($length = 7)
    {
        $chars    = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!?.@#$%*';
        $rand_max = strlen($chars);
        $rand_min = 1;

        for ($i = 0; $i <= $length; $i++) {
            $password .= substr($chars, rand($rand_min, $rand_max), 1);
        }

        return $password;
    }


    /**
     * Search for user, create if not exist.
     * Currently only used to create pledge sponsor users.
     *
     * @param [type] $user_info
     * @return void
     */
    public function check_user($user_info)
    {
        //check if empty email
        if (empty($user_info->email)) {
            //set user email to default anonymous user value
            $user_info->email = 'anonymous_user';
        }

        //check if user exists
        $data = $this->get_by('email', $user_info->email);

        if ($data) { //if exists
            $user_info->id = $data->id;

            return $user_info;
        } else { //if does not exist
            $this->load->model('program_model');

            $insert_array = [   'first_name'        => $user_info->first_name ,
                   'last_name'        => $user_info->last_name ,
                   'phone'            => $user_info->phone ,
                   'email'            => $user_info->email ,
                   'username'            => $user_info->email ,
                   'state'            => $user_info->state ,
                   'country'            => $user_info->country ,
                   'company'            => $user_info->business_name ,
                   'fr_code'            => $this->program_model->generate_fr_code() ,
                   'active'            => 1
       ];

            $this->db->insert('users', $insert_array);

            $user_info->id = $this->db->insert_id();

            return $user_info;
        }
    }


    /**
     * Search users table
     */
    public function search($term)
    {
        $this->load->library('sphinxclient');
        $this->sphinxclient->SetServer('23.23.55.131', 34543); //Only during dev

        $query = $this->sphinxclient->Query($term, 'users_index');
        if ($query['matches']) {
            $result_ids = array_keys($query['matches']);
        }

        if ($result_ids) {
            $result = $this->db->select('id, first_name, last_name, email')
                         ->where_in('id', $result_ids)
                         ->get('users')
                         ->result();

            return $result;
        }

        return false;
    }


    public function get_page($limit, $offset)
    {
        return $this->db->where('deleted !=', '1')
                    ->or_where('deleted', null)
                    ->order_by('last_name, first_name')
                    ->get($this->_table, $limit, $offset)
                    ->result();
    }


    /**
     * Corresponding count function for get_page(). Returns count of
     * non-deleted users.
     *
     * @return int
     */
    public function user_count()
    {
        $result = $this->db->select('COUNT(*) AS users')
                       ->where('deleted !=', '1')
                       ->or_where('deleted', null)
                       ->get($this->_table)
                       ->result();
        return $result[0]->users;
    }


    /**
     * Delete user-user_group relationships when deleting a user
     */
    public function delete_relationships($user)
    {
        $this->db->where('user_id', $user)->delete('users_user_groups');

        return $user;
    }


    /**
     * Find users that could need to get a profile id from SF
     */
    public function user_needs_profile()
    {
        $return_value = $this->db->select('id, salesforce_user_id')->where('salesforce_user_id !=', '')->where('salesforce_profile_id IS NULL')->get('users')->result();

        return $return_value;
    }


    /**
     * Create teacher
     * They can have initial login with code, just like a student.
     * Needs first name, last name
     * add relationships to members and teachers
     */
    public function create_teacher($last_name, $first_name, $classroom_id = '', $temp=false)
    {
        $this->load->model('program_model');
        $this->load->model('user_group_model');
        $this->load->model('classroom_model');

        $user_info['active']     = 1;
        $user_info['fr_code']    = $this->program_model->generate_fr_code();
        $user_info['last_name']  = $last_name;
        $user_info['first_name'] = $first_name;
        $user_info['username']   = '';
        $user_info['password']   = '';
        $user_info['created_on'] = time();
        if ($temp) {
            $user_info['reg_code_temp_user'] = 1;
        }

        $this->db->trans_start();

        $teacher_id = $this->insert($user_info);
        $this->load->model('user_profile_model');
        $user_profile_info['user_id'] = $teacher_id;
        $user_profile_info['created'] = date('Y-m-d H:i:s');
        $this->user_profile_model->insert($user_profile_info);

        $this->add_to_group($teacher_id, User_group_model::TEACHERS);
        $this->add_to_group($teacher_id, User_group_model::MEMBERS);

        if (!$temp && $classroom_id !== '') {
            $class           = $this->db->get_where('classrooms', ['id' => $classroom_id])->row();
            $class->class_id = $class->id;
            if (!$this->classroom_model->add_teacher_to_class($class, $teacher_id)) {
                return false;
            }

            $this->db->insert(
                'participants',
                [
            'classroom_id' => $classroom_id,
            'user_id'      => $teacher_id ]
            );
        }

        $this->db->trans_complete();
        return $teacher_id;
    }


    /**
     * Create student
     * We create a user, but also add them to the participants table
     */
    public function create_student($last_name, $first_name, $classroom_id, $temp=false)
    {
        $this->load->model('program_model');
        $this->load->model('user_group_model');
        $this->load->model('user_profile_model');

        $user_info['active']     = 1;
        $user_info['fr_code']    = $this->program_model->generate_fr_code();
        $user_info['last_name']  = $last_name;
        $user_info['first_name'] = $first_name;
        $user_info['username']   = '';
        $user_info['password']   = '';
        $user_info['created_on'] = time();
        if ($temp) {
            $user_info['reg_code_temp_user'] = 1;
        }

        $student_id = $this->insert($user_info);
        $this->load->model('user_profile_model');
        $user_profile_info['user_id'] = $student_id;
        $user_profile_info['created'] = date('Y-m-d H:i:s');
        $this->user_profile_model->insert($user_profile_info);

        $this->add_to_group($student_id, User_group_model::STUDENTS);
        $this->add_to_group($student_id, User_group_model::MEMBERS);

        //Add student to the participants table
        if (!$temp) {
            $this->db->insert('participants', [ 'classroom_id' => $classroom_id, 'user_id' => $student_id ]);
        }

        return $student_id;
    }


    /**
     * Create temp user as student or teacher based on registration code
     * If $reg_code = 00000000 create temp student only for parent registration
     *
     * @param string $reg_code Assumed valid
     * @resturn object|bool $reg_code_info including new attribute 'temp_user_id'
     *                      | false if registration code not found
     */
    public function create_temp_user_by_reg_code($reg_code)
    {
        if (is_numeric($reg_code) && (int)$reg_code === 00000000) {
            //        create temp user for he new fake user
            $reg_code_info               = new stdClass();
            $reg_code_info->temp_user_id = $this->user_model->create_student('', '', '', true);
            $reg_code_info->parent_reg   = true;
            return $reg_code_info;
        } else {
            $this->load->model('classroom_model');
            $reg_code_info = $this->classroom_model->reg_code_info($reg_code);
            if ($reg_code_info) {
                if ($reg_code_info->is_team_leader) {
                    $reg_code_info->temp_user_id = $this->user_model->create_teacher(
                        '',
                        '',
                        $reg_code_info->class_id,
                        true
                    );
                } else {
                    $reg_code_info->temp_user_id = $this->user_model->create_student(
                        '',
                        '',
                        $reg_code_info->class_id,
                        true
                    );
                }

                return $reg_code_info;
            }
        }

        return false;
    }


    /**
     * create temp user as a student based on program registration code
     *
     * @param type $reg_code
     * @return type
     */
    public function create_temp_user_by_prog_reg_code($reg_code)
    {
        $this->load->model('program_model');
        $reg_code_info = $this->program_model->reg_code_info($reg_code);
        if ($reg_code_info) {
            $reg_code_info->temp_user_id = $this->user_model->create_student(
                '',
                '',
                $reg_code_info->class_id,
                true
            );
            return $reg_code_info;
        }
    }


    /**
     * Create parent with given identity, or return existing parent id
     * and update record (if email matched). Fields are assumed to be valid.
     * Sepcial business logic when dealing with admin users - see code
     *
     * @param string $last_name
     * @param string $first_name
     * @param string $email  Identifies an existing user (but beware, can match multiple users)
     * @param string $phone
     * @param string $phone
     * @param string $dob
     * @param string $password=null optional if password needs to be set
     * @param string $current_email=null optional if parent already exists
     * @resturn string $parent_id updated or created / may be false if email already exists
     */
    public function create_parent($last_name, $first_name, $email, $phone, $dob, $password=null, $current_email=null)
    {
        $this->load->model('program_model');
        $this->load->model('user_group_model');

        $record = [
        'last_name'  => $last_name,
        'first_name' => $first_name,
        'email'      => $email,
        'phone'      => $phone,
        'dob'        => $dob
    ];
        //check for existing record based on current email
        if (!empty($current_email)) {
            $email_to_match = $current_email;
        } else {
            $email_to_match = $email;
        }

        $matched = $this->get_by('email', $email_to_match);
        if ($matched) {
            if (!empty($current_email) && $email !== $current_email) { //check if email exists
                if ($this->get_by('email', $email)) {
                    return false;
                }
            }

            if (!empty($matched->username) && !empty($matched->password)) {
                $is_admin = $this->ion_auth->in_group(User_group_model::ADMIN);
                if ($is_admin) {
                    $record = [ //don't overwrite existing data for admin users if it exists
                  'last_name'  => $matched->last_name ?: $last_name,
                  'first_name' => $matched->first_name ?: $first_name,
                  'email'      => $matched->email,
                  'phone'      => $matched->phone ?: $phone,
                  'dob'        => $matched->dob ?: $dob,
          ];
                } else {
                    $record = [ //overwrite existing data for non admin users
                  'last_name'  => $last_name,
                  'first_name' => $first_name,
                  'email'      => $email,
                  'username'   => $email,
                  'phone'      => $phone,
                  'dob'        => $dob,
          ];
                }

                if (empty($matched->fr_code)) {
                    $record['fr_code'] = $this->program_model->generate_fr_code();
                }

                $this->session->set_userdata('parent_registered_with_password', true);
            } elseif (empty($matched->username) && empty($matched->password)) {
                $this->load->model('ion_auth_model');
                $record['username'] = $matched->email;
                $record['password'] = $this->ion_auth_model->hash_password($password);
            }

            $this->add_to_group($matched->id, User_group_model::PARENTS);
            $this->add_to_group($matched->id, User_group_model::MEMBERS);
            $this->update($matched->id, $record);
            $this->session->set_userdata('participant_registered', true);
            return $matched->id;
        } else {
            $this->load->model('ion_auth_model');
            $user_id = $this->ion_auth->register($email, $password, $email, []);
            if ($user_id) {
                $this->session->set_userdata('participant_registered', true);
            }

            $record['active']     = 1;
            $record['fr_code']    = $this->program_model->generate_fr_code();
            $record['created_on'] = time();
            $this->update($user_id, $record);
            $this->add_to_group($user_id, User_group_model::PARENTS);
            $this->add_to_group($user_id, User_group_model::MEMBERS);
            return $user_id;
        }
    }


    public function create_org_admin($first_name, $last_name, $email, $school_id)
    {
        $this->load->model('program_model');
        $this->load->model('user_group_model');
        $this->load->model('organization_administrator_model');

        $user_info['active']     = 1;
        $user_info['last_name']  = $last_name;
        $user_info['first_name'] = $first_name;
        $user_info['email']      = $email;
        $user_info['username']   = $email;
        $user_info['created_on'] = time();

        // check for dupe email
        $exists = $this->get_by('email', $user_info['email']);
        if (empty($exists) || $this->is_school) {
            $org_admin_id = $this->insert($user_info);

            //attach the newly created id for the return
            $user_info['id'] = $org_admin_id;

            $this->add_to_group($org_admin_id, User_group_model::ORG_ADMIN);

            // add to organization administrator table to track by school
            $org_admin_data = ['user_id' => $org_admin_id, 'school_id' => $school_id];
            $this->organization_administrator_model->insert($org_admin_data);
        } else {
            if (!stripos($exists->email, '@boosterthon.com') !== false) {
                // add to organization administrator table to track by school
                $exists_in_school = $this->db->where('user_id', $exists->id)
          ->where('school_id', $school_id)
          ->get('organization_administrators')->result();

                $org_admin_data = ['user_id' => $exists->id, 'school_id' => $school_id];

                $org_admin_member = $this->user_group_model
          ->has_user_group($exists->id, User_group_model::ORG_ADMIN);

                if (empty($org_admin_member)) {
                    $org_admin_member_data = ['user_id' => $exists->id,
            'group_id' => User_group_model::ORG_ADMIN];
                    $this->db->insert('users_user_groups', $org_admin_member_data);
                }

                if (empty($exists_in_school)) {
                    $this->organization_administrator_model->insert($org_admin_data);
                } else {
                    $user_info['error'] = 'Organization administrator is already a member of this school.';
                }
            } else {
                $user_info['error'] = '<strong>Oops!</strong> Team members cannot be organization admins.';
            }
        }

        return $user_info;
    }


    /**
     * create an org_admin and then give them another role restricting access
     */
    public function create_collection_org_admin($first_name, $last_name, $email, $school_id)
    {
        $new_user = $this->create_org_admin($first_name, $last_name, $email, $school_id);
        $this->load->model('user_group_model');
        return $this->add_to_group($new_user['id'], User_group_model::ORG_ADMIN_COLLECTIONS);
    }


    public function parents_of_student($student_id)
    {
        return $this->db->select(
            [
        'id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'fr_code',
        'password',
        'dob',
        'email_opt_out',
      ]
        )
    ->from('users')
    ->join('students_parents', 'users.id = students_parents.parent_id')
    ->where('students_parents.student_id', $student_id)
    ->get()
    ->result();
    }


    /**
     * Return multiple students' parents, if any.
     *
     * @param array $student_ids
     * @result array of parent stdClass Objects
     */
    public function student_parents($student_ids)
    {
        return $this->db->select(
            'users.id, fr_code as parent_fr_code, email as parent_email,
        students_parents.student_id'
        )
      ->from('users')
      ->join('students_parents', 'users.id = students_parents.parent_id')
      ->where_in('students_parents.student_id', $student_ids)
      ->get()
      ->result();
    }


    public function get_children_for_parent($parent_id)
    {
        return $this->db->select('stp.student_id as id, u.first_name, u.last_name, u.deleted')
                ->from('students_parents AS stp')
                ->join('users AS u', 'stp.student_id = u.id', 'left')
                ->where('stp.parent_id', $parent_id)->get()->result();
    }


    public function get_student_participants_for_parent($parent_id)
    {
        return $this->db->select('stp.student_id as id')
                ->from('students_parents AS stp')
                ->join('participants', 'participants.user_id = stp.student_id')
                ->join('users AS u', 'stp.student_id = u.id')
                ->join('users_user_groups', 'users_user_groups.user_id = participants.user_id AND users_user_groups.group_id != ' . User_group_model::TEACHERS)
                ->where('stp.parent_id', $parent_id)
                ->where('u.deleted', 0)->limit(1)->get()->result();
    }


    public function get_group_id_by_user_id($user_id)
    {
        return $this->db->select('groups.id')
      ->from('users')
      ->join('participants', 'participants.user_id = users.id', 'left')
      ->join('classrooms', 'classrooms.id = participants.classroom_id', 'left')
      ->join('groups', 'groups.id = classrooms.group_id', 'left')
      ->where('users.id', $user_id)->get()->first_row()->id;
    }


    public function get_participants_for_parent($parent_id, $program_id = null)
    {
        $where_array = [
      'students_parents.parent_id' => $parent_id,
      'programs.archived' => 0,
      'users.deleted' => 0
    ];

        if ($program_id) {
            $where_array['programs.id'] = $program_id;
        }

        return $this->db->select(
            [
        'participants.user_id',
        'users.first_name',
        'users.last_name',
        'users.fr_code',
        'groups.program_id AS program_id',
        'participants.family_pledging_enabled',
        'groups.id AS group_id',
        'user_profiles.image_name',
        'user_profiles.video_url',
        'programs.due_date',
      ]
        )
    ->from('students_parents')
    ->join('users', 'users.id = students_parents.student_id')
    ->join('participants', 'users.id = participants.user_id')
    ->join('classrooms', 'participants.classroom_id = classrooms.id')
    ->join('groups', 'classrooms.group_id = groups.id')
    ->join('programs', 'programs.id = groups.program_id')
    ->join('user_profiles', 'user_profiles.user_id = users.id')
    ->where($where_array)
    ->get()->result();
    }


    /**
     * returns true if the student id is for the parent
     *
     * @param [type] $parent_id
     * @param [type] $student_id
     * @return boolean
     */
    public function is_my_participant($parent_id, $participant_user_id)
    {
        $participant = $this->db->select('parent_id', 'student_id')
      ->from('students_parents')
      ->where(
          [
          'student_id' => $participant_user_id,
          'parent_id' => $parent_id
        ]
      )
      ->get()->row();
        return $participant ? true : false;
    }


    /**
     * validates that a participant can be safely deleted
     *
     * @param [type] $participant_user_id
     * @return boolean
     */
    public function can_delete_participant($participant_user_id)
    {
        //check for pledges
        $pledges = $this->pledge_model->get_pledges_for_edit_by_student($participant_user_id);
        //check for payments
        $this->load->model('payment_model');
        $payments = $this->payment_model->has_payments($participant_user_id);

        if ($pledges || $payments) {
            return false;
        } else {
            return true;
        }
    }


    /**
     * this funciton is designed to be used by a logged in parent to delete one of their participants
     *
     * @param [type] $participant_user_id
     * @return void
     */
    public function delete_participant($participant_user_id)
    {
        $this->load->model('classroom_model');
        $is_deleted             = false;
        $parent_id              = $this->session->userdata('user_id');
        $is_my_participant      = $this->is_my_participant($parent_id, $participant_user_id);
        $can_delete_participant = $this->can_delete_participant($participant_user_id);
        if ($is_my_participant && $can_delete_participant) {
            $this->load->model('user_group_model');
            $this->load->model('participant_model');
            $deleted_user = $this->participant_model->get_by('user_id', $participant_user_id);
            $this->update($participant_user_id, ['deleted' => 1]);
            //get non-deleted participants for parent
            $program_id   = $this->classroom_model->get_program_id($deleted_user->classroom_id);
            $participants = $this->user_model->get_participants_for_parent($parent_id, $program_id);
            if (count($participants) == 1 && $deleted_user->family_pledging_enabled == '1') {
                $this->set_family_pledging(0, $parent_id, $program_id);
            }

            // If user is a teacher, remove from a classroom
            if ($this->user_group_model->has_user_group($participant_user_id, User_group_model::TEACHERS)) {
                $classes = $this->classroom_model->get_classes_for_teacher($participant_user_id);

                if (!empty($classes)) {
                    foreach ($classes as $class) {
                        $this->classroom_model->remove_teacher_fr_class($class, $participant_user_id);
                    }
                }
            }

            $is_deleted = true;
        }

        return $is_deleted;
    }


    public function attach_num_alerts_to($participants)
    {
        foreach ($participants as $participant) {
            $alerts = 0;

            //only alert is prize alert at the moment so it is all based on this alert otherwise we need to count all alerts
            $this->load->model('prize_model');
            if ($this->prize_model->new_prize_available_by_student($participant->user_id, $participant->program_id, $participant->group_id)) {
                $alerts++;
            }

            $this->load->model('prize_bound_student_model', 'model');
            $facebook_prize = $this->model->should_show_facebook_prize_alert($participant->user_id);
            if ($facebook_prize) {
                $alerts++;
            }

            $this->load->model('potential_sponsor_model');
            $potential_sponsor_enrolled_activity_prize = $this->potential_sponsor_model->
        should_show_easy_email_enrollment_alert($participant->user_id, $this->student_parents($participant->user_id)->id);
            if ($potential_sponsor_enrolled_activity_prize) {
                $alerts++;
            }

            $potential_sponsor_enrolled_activity_prize_1 = $this->potential_sponsor_model->
        should_show_easy_email_enrollment_alert_1($participant->user_id, $this->student_parents($participant->user_id)->id);
            if ($potential_sponsor_enrolled_activity_prize_1) {
                $alerts++;
            }

            $potential_sponsor_enrolled_activity_prize_2 = $this->potential_sponsor_model->
        should_show_easy_email_enrollment_alert_2($participant->user_id, $this->student_parents($participant->user_id)->id);
            if ($potential_sponsor_enrolled_activity_prize_2) {
                $alerts++;
            }

            $potential_sponsor_enrolled_activity_prize_3 = $this->potential_sponsor_model->
        should_show_easy_email_enrollment_alert_3($participant->user_id, $this->student_parents($participant->user_id)->id);
            if ($potential_sponsor_enrolled_activity_prize_3) {
                $alerts++;
            }

            $potential_sponsor_enrolled_activity_prize_4 = $this->potential_sponsor_model->
        should_show_easy_email_enrollment_alert_4($participant->user_id, $this->student_parents($participant->user_id)->id);
            if ($potential_sponsor_enrolled_activity_prize_4) {
                $alerts++;
            }

            $potential_sponsor_enrolled_activity_prize_5 = $this->potential_sponsor_model->
        should_show_easy_email_enrollment_alert_5($participant->user_id, $this->student_parents($participant->user_id)->id);
            if ($potential_sponsor_enrolled_activity_prize_5) {
                $alerts++;
            }

            $potential_sponsor_enrolled_activity_prize_6 = $this->potential_sponsor_model->
        should_show_easy_email_enrollment_alert_6($participant->user_id, $this->student_parents($participant->user_id)->id);
            if ($potential_sponsor_enrolled_activity_prize_6) {
                $alerts++;
            }

            $this->load->model('custom_program_alerts_model');
            $custom_program_alerts = $this->custom_program_alerts_model->get_active_alerts($participant->program_id);
            $alerts               += count($custom_program_alerts);

            $text_share_prizes = $this->model->should_show_text_share_prize_alert($participant->user_id);
            $alerts           += count($text_share_prizes);

            $participant->num_alerts = $alerts;
        }

        return $participants;
    }


    /**
     * Determine whether a student has completed secondary registration. 43486953
     */
    public function student_registered($student_id)
    {
        $user    = $this->get($student_id);
        $parents = $this->student_parents($student_id);

        // Check for mandatory information and at least one parent.
        // (It is assumed that fields have all been validated already
        // and that a parent records are valid.)
        return $user->first_name && $user->last_name && $parents;
    }


    /**
     * Update student registration info, including parents.
     * Assumed valid.
     *
     * @param int $student_id
     * @param array $data fields to update
     * @param array $reg_code_info optional param used for completing user
     *              creation upon registration via registration code
     * @return boolean/int true if success|false if parent email already exist|0 if teacher limit reached
     */
    public function save_student_profile($student_id, array $data, $reg_code_info=null)
    {
        $this->db->trans_start();

        // Deal with student's fields (name, dob, gender)
        $copa_dob = $data["dob_year"].'-'.$data["dob_month"].'-'.$data["dob_day"];
        $updated  = [
        'dob'        => $data['dob'] ? date('Y-m-d', strtotime($data['dob'])) : null,
        'gender'     => $data['gender'],
        'registered' => 1,
    ];
        if ($data["dob_year"] && $data["dob_month"] && $data["dob_day"]) {
            $updated['waiver_dob'] = $copa_dob;
        }

        if (!empty($data['first_name']) && !empty($data['last_name'])) {
            $updated['first_name'] = $data['first_name'];
            $updated['last_name']  = $data['last_name'];
        }

        $parent                   = $this->get_by('id', $data['parent_id']);
        $allow_pay_later_override = $parent->requested_pay_later_override;

        // complete student/teacher user creation process if via registration code
        if ($reg_code_info) {
            $updated['reg_code_temp_user'] = 0;

            $this->load->model('prize_bound_model');
            if (!$reg_code_info->is_team_leader) {
                $this->db->insert(
                    'participants',
                    [
          'classroom_id' => $data['classroom_id'], 'user_id' => $student_id, 'allow_pay_later_override' => $allow_pay_later_override ]
                );

                $this->prize_bound_model->allocate_prizes_retroactive_student($student_id);
            } else { // handle teacher (team leader)
                if (!empty($reg_code_info->class_id)) {
                    $this->load->model('classroom_model');
                    if (!$this->classroom_model->add_teacher_to_class($reg_code_info, $student_id)) {
                        return 0;
                    }

                    $this->db->insert(
                        'participants',
                        ['classroom_id' => $reg_code_info->class_id, 'user_id' => $student_id ]
                    );

                    $this->prize_bound_model->allocate_prizes_retroactive_student($student_id);
                }
            }
        }

        $this->update($student_id, $updated);

        // Handle parent
        if (! empty($data['parent_email'])) {
            $parent_id = $this->create_parent(
                $data['parent_last_name'],
                $data['parent_first_name'],
                $data['parent_email'],
                $data['parent_phone'],
                $copa_dob,
                $data['parent_password'],
                $data['parent_current_email']
            );
            if ($parent_id === false) { // email already exists
                return false;
            }

            $this->db->delete(
                'students_parents',
                [
          'student_id' => $student_id,
          'parent_id'  => $data['parent_id']
        ]
            );
            if ($student_id != $parent_id) {
                $this->db->insert(
                    'students_parents',
                    [
            'student_id' => $student_id,
            'parent_id'  => $parent_id
          ]
                );
            }
        }

        $this->db->trans_complete();
        return true;
    }


    public function get_family_pledging_participants_by_participant_id($participant_id)
    {
        $this->load->model('students_parent_model');
        $this->load->model('program_model');

        $parent_id = $this->students_parent_model->get_parent_by_student($participant_id);
        $program   = $this->program_model->get_program_by_user_id($participant_id);

        if ($parent_id && $program) {
            return $this->get_family_pledging_participants($parent_id, $program[0]->id);
        }

        return false;
    }


    public function get_family_pledging_participants($parent_id, $program_id)
    {
        $this->load->model('user_group_model');

        return $this->db
      ->select(
          [
          'participants.user_id',
          'users_user_groups.group_id'
        ]
      )
      ->from('participants')
      ->join('students_parents', 'students_parents.student_id = participants.user_id')
      ->join('classrooms', 'classrooms.id = participants.classroom_id')
      ->join('groups', 'groups.id = classrooms.group_id')
      ->join('users_user_groups', 'users_user_groups.user_id = participants.user_id AND users_user_groups.group_id = ' . User_group_model::TEACHERS, 'left')
      ->where(
          [
          'students_parents.parent_id' => $parent_id,
          'groups.program_id'          => $program_id,
        ]
      )
      ->get()
      ->result();
    }


    public function set_family_pledging($enabled, $parent_id, $program_id)
    {
        $participants = $this->get_family_pledging_participants($parent_id, $program_id);

        foreach ($participants as $participant) {
            $data = ['family_pledging_enabled' => $enabled];
            if ($participant->group_id != User_group_model::TEACHERS) {
                $this->db->where('user_id', $participant->user_id)->update('participants', $data);
            }
        }
    }


    /**
     * Update sponsor or parent info
     * Assumed valid.
     *
     * @param int $user_id
     * @param array $data fields to update
     * @return boolean true if success|false if email already exists|0 if data error
     */
    public function save_sponsor_profile(array $data)
    {
        $dob = $data["dob_year"].'-'.$data["dob_month"].'-'.$data["dob_day"];
        if (!empty($data["email"]) && !empty($data["current_email"])) {
            // will update sponsor info based on current business rules - see create_parent()
            $update_id = $this->create_parent(
                $data["last_name"],
                $data["first_name"],
                $data["email"],
                $data["phone"],
                $dob,
                $data["password"],
                $data["current_email"]
            );
            if ($update_id === false) { // email already exists
                return false;
            }
        } else {
            log_message(
                'error',
                'Data validation problem in user_model->save_sponsor_profile!' . "\n" .
        'empty $data["email"] = ' . $data["email"] . "\n" .
        ' AND/OR empty $data["current_email"] = ' . $data["current_email"]
            );
            return 0;
        }

        return true;
    }


    public function user_exists_by_email($email)
    {
        return $this->get_by('email', $email)->id;
    }


    public function participant_exists_by_fr_code($fr_code)
    {
        $this->load->model('user_group_model');
        $user_id = $this->get_by('fr_code', $fr_code)->id;
        return $this->user_group_model->has_user_group(
            $user_id,
            [
      User_group_model::STUDENTS,
      User_group_model::TEACHERS]
        );
    }


    public function save_student_personalization()
    {
        return true;
    }


    /**
     * Determine whether a student has accepted the terms of service/ waiver
     */
    public function student_waivered($student_id)
    {
        $user = $this->get($student_id);
        return $user->waiver_signed;
    }


    /**
     * Saves student terms / click thru waiver. Step 1 of registration process.
     * Assumed valid.
     *
     * @param int $student_id
     * @param array $data fields to update
     */
    public function save_student_waiver($student_id, array $data)
    {
        $updated = [
          'waiver_signed' => $data['waiver'],
          'waiver_ts'    => date("Y-m-d H:i:s")
    ];

        $this->update($student_id, $updated);
    }


    /**
     * Get all users that own at least one program. If "all" is true, return all field people
     *
     * @param boolean $all
     * @param boolean $dropdown
     * @return void
     */
    public function get_field_people($dropdown = false)
    {
        $field_peeps = $this->db->select('users.id, users.first_name, users.last_name')
                            ->from('users')->join('programs', 'users.id = owner_id')
                            ->order_by('last_name')->get()->result();

        if ($dropdown) {
            //Weird behavior. If I leave the quotes out, it marks the 0 and "me" entries as "selected"
            $prepped = [ "0" => 'Filter by team member', 'me' => 'My Programs' ];

            foreach ($field_peeps as $fp) {
                $prepped[$fp->id] = "{$fp->last_name}, {$fp->first_name}";
            }

            return $prepped;
        }

        return $field_peeps;
    }


    /**
     * Admin reset password of any user
     *
     * @param int $user_id
     * @param callback|null $template  If not null, a callback which returns the template. Its single argument is array of view parameters.
     * @return array|false  If user exists, array with 'password' and 'sent' keys; otherwise false
     */
    public function admin_reset_pass($user_id, $template)
    {
        $this->load->model('ion_auth_model');

        $user = $this->get($user_id);
        if ($user) {
            $password = $this->create_password();

            $hashed_pass = $this->ion_auth_model->hash_password($password);

            $this->update($user_id, [ 'password' => $hashed_pass ]);

            $result = ['password' => $password];
            if ($template) {
                $klass  = $this;
                $result = $this->email_user_pass(
                    $user->email,
                    $result,
                    function ($result) use ($klass) {
                        return $klass->load->view('email/password_reset', $result, true);
                    }
                );
            }

            return $result;
        }

        return false;
    }


    public function email_user_pass($email, $data, $template)
    {
        $email_result = $this->send_email(
            $email,
            'Boosterthon FunRun: New account password',
            $template($data)
        );
        $data['sent'] = $email && $email_result;

        return $data;
    }


    public function reset_all_user_passwords()
    {
        $users = $this->get_many_by('salesforce_user_id is not null', null, false);
        $klass = $this;
        foreach ($users as $user) {
            $this->admin_reset_pass(
                $user->id,
                function ($data) use ($klass) {
                    return $klass->load->view('email/password_reset', $data, true);
                }
            );
        }
    }


    /**
     * Validate array of email addresses.
     *
     * @param array $emails  Recipient email addresses
     * @return bool True if all emails are valid. False if one or more are invalid
     */
    public function validate_email_addresses($emails)
    {
        foreach ($emails as $email) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
        }

        return (empty($emails)) ? false : true;
    }


    /**
     * Send email (as No Reply).
     *
     * @param string $email  Recipient email address
     * @param string $subject
     * @param string $body
     * @param bool $async=TRUE set to False if async queueing is NOT desired
     * @return bool True if mail was sent or queued(if $async); otherwise false
     */
    public function send_email(
        $emails,
        $subject,
        $body,
        $async=true,
        $from_name = self::NO_REPLY_NAME,
        $bcc = '',
        $cc = '',
        $from_email=self::NO_REPLY_EMAIL
    ) {
        $email_addresses_validated = (is_array($emails)) ? $this->validate_email_addresses($emails) : filter_var($emails, FILTER_VALIDATE_EMAIL);

        if (!$email_addresses_validated) {
            $defective_email_msg = "Recipient empty for email with \n subject: " . $subject . "\n\n Body:\n" . $body;
            log_message('error', 'User Recipient Email Missing Error: ' . $defective_email_msg);
            return false;
        }

        $email_result = false;
        $this->load->library('email');
        $from = [
      'email' => $from_email,
      'name'  => $from_name
    ];

        $subject = htmlspecialchars_decode($subject);
        $body    = $this->split_link_href_for_email($body);

        $email_to_queue = $this->email
      ->from($from['email'], $from['name'])
      ->reply_to($from['email'], $from['name'])
      ->to($emails)
      ->bcc($bcc)
      ->cc($cc)
      ->subject($subject)
      ->message($body);
        if (!$async) {
            $email_result = $this->email->send();
        } elseif ($async) {
            $this->load->model('rabbitmq_model');
            $email_result = $this->rabbitmq_model->queue_email($email_to_queue);
        }

        if (!$email_result) {
            log_message('error', 'Email: ' . $this->email->print_debugger());
        }

        return $email_result;
    }


    /**
     * This moves href to new line for emails.
     * Amazon SES currently has a bug with dot stuffing in emails that this should mitigate.
     *
     * @param String $body
     * @return String
     */
    private function split_link_href_for_email(String $body)
    {
        return preg_replace('/ href="([^>]*)"([^>]*)>/', "\nhref=\"\$1\"\$2\n>", $body);
    }


    /**
     * Generates an token for a given user
     *
     * @param [type] $email
     * @return void
     */
    public function auth_token($email)
    {
        $this->load->model('user_group_model');

        $user_id = $this->get_by('email', $email)->id;

        if ($this->ion_auth->in_group(User_group_model::API_USERS, $user_id)) {
            $api_token = md5($user_id . time() . rand(0, 1));
            $this->update($user_id, [ 'api_token' => $api_token ]);

            return $api_token;
        }

        return false;
    }


    /**
     * checks if the user id is the same as the logged in user
     *
     * @param [type] $user_id
     * @return boolean
     */
    public function is_my_user_id($user_id)
    {
        return $user_id === $this->ion_auth->user()->row()->id;
    }


    public function is_participant_of_my_school($user_id)
    {
        $current_user_id = $this->ion_auth->user()->row()->id;
        $result          = $this->db->select('participants.user_id')->from('participants')
      ->join('classrooms', 'classrooms.id = participants.classroom_id')
      ->join('groups', 'groups.id = classrooms.group_id')
      ->join('programs', 'programs.id = groups.program_id')
      ->join('organization_administrators', 'programs.school_id = organization_administrators.school_id')
      ->where(
          [
          'participants.user_id'                => $user_id,
          'organization_administrators.user_id' => $current_user_id,
        ]
      )
      ->get()
      ->result();
        return count($result) > 0;
    }


    /**
     * Verifies the token and returns a user id
     * /api/auth
     */
    public function verify_token($token)
    {
        $user_id = $this->get_by('api_token', $token)->id;

        if ($user_id) {
            return $user_id;
        } else {
            return false;
        }
    }


    /**
     * Get special URLs for specified user, create if they don't exist.
     *
     * @param int $user_id
     * @return array
     */
    public function get_special_urls($user_id, $url_base = "/a/s/", $additional_params = [])
    {
        $needs_urls = $this->needs_special_url($user_id);

        $this->create_special_urls($user_id, $needs_urls);

        $urls = $this->db->where('user_id', $user_id)
                    ->join('referrers', 'referrers.id = referrer_id')
                    ->get('special_urls')
                    ->result();

        $has_hero_video                          = $this->has_hero_video($user_id);
        $referrers_names_for_tracking_hero_video = [ 'Email_Video' => 'Email',
                                                      'Facebook_Video' => 'Facebook',
                                                      'Link_Video' => 'Link',
                                                      'SMS_Video' => 'SMS' ];
        // re-key the result array by type of referrer
        $result = [];

        foreach ($urls as $row) {
            $hero_video_referrer_name_for_tracking_hero_video = array_search($row->name, $referrers_names_for_tracking_hero_video);

            $needs_hero_video_tracking_special_url = $has_hero_video && ! empty($hero_video_referrer_name_for_tracking_hero_video);

            if ($needs_hero_video_tracking_special_url) {
                $array_of_names = array_map(
                    function ($element) {
                        return $element->name;
                    },
                    $urls
                );

                $key      = array_search($hero_video_referrer_name_for_tracking_hero_video, $array_of_names);
                $row->url = site_url($url_base . $urls[ $key ]->short_key . '/' . implode("/", $additional_params));
            } else {
                $row->url = site_url($url_base . $row->short_key . '/' . implode("/", $additional_params));
            }

            $result[$row->name] = $row;
        }

        return $result;
    }


    private function create_special_urls($user_id, $needs_urls, $looped = 0)
    {
        foreach ($needs_urls as $row) {
            $slug = $row->slug ?: sha1($user_id . '~' . $row->id . '~' . rand());
            // Take 6 bytes of hash, base64-encode to URL-safe 8 character key.
            $short_key = strtoupper(bin2hex(openssl_random_pseudo_bytes(8)));

            $data = [
        'slug'      => $slug,
        'short_key' => $short_key
      ];

            if ($row->user_id) {
                $this->db->where('user_id', $user_id)
          ->where('referrer_id', $row->id)
          ->update('special_urls', $data);
            } else {
                $data['user_id']     = $user_id;
                $data['referrer_id'] = $row->id;
                try {
                    $this->db->insert('special_urls', $data);
                } catch (Exception $e) {
                    //if trying more than 5 times and fails go ahead and fail
                    if ($looped > 5) {
                        throw $e;
                    }

                    //try to create this special url again
                    $this->create_special_urls($user_id, [$row], $looped + 1);
                }
            }
        }
    }


    private function needs_special_url($user_id)
    {
        $needs_urls = $this->db
      ->query(
          'SELECT referrers.id, user_id, slug, short_key
        FROM referrers
        LEFT JOIN special_urls ON special_urls.referrer_id = referrers.id
        AND special_urls.user_id = ?
        WHERE `special_urls`.`user_id` IS NULL
        OR slug IS NULL
        OR short_key IS NULL',
          [$user_id]
      )
      ->result();

        return $needs_urls;
    }


    /**
     * Get by ref_code
     *
     * @param [type] $slug
     * @return void
     */
    public function get_by_ref_code($slug)
    {
        return $this->db
      ->select(
          '
        users.id,
        users.first_name,
        users.last_name,
        participants.family_pledging_enabled
        '
      )
      ->from('users')
      ->join('special_urls', 'special_urls.user_id = users.id')
      ->join('participants', 'participants.user_id = special_urls.user_id')
      ->where('special_urls.slug', $slug)
      ->where('users.deleted', 0)
      ->get()
      ->row();
    }


    /**
     * Get long referrer code from short key.
     *
     * @param string $short_key from URL
     * @return string|null  Full referrer slug value corresponding to key
     */
    public function get_slug_by_short_key($short_key)
    {
        $result = $this->db->select('slug')
                       ->from('special_urls')
                       ->where('short_key', $short_key)
                       ->get()
                       ->result();
        return $result ? $result[0]->slug : null;
    }


    /**
     * Undocumented function
     *
     * @param [type] $short_key
     * @return void
     */
    public function get_slug_and_referrer_by_short_key($short_key)
    {
        $result = $this->db->select('slug, source, medium, content, campaign')
          ->from('special_urls')
          ->where('short_key', $short_key)
          ->join('referrers', 'referrer_id = referrers.id')
          ->get()
          ->row();
        return $result;
    }


    /**
     *
     * SELECT special_urls.referrer_id, special_urls.slug, referrers.name
     * FROM special_urls
     * INNER JOIN referrers ON referrers.id=special_urls.referrer_id
     * WHERE special_urls.slug="b2d404d7f8ffe1ef50f62ea5935df26aff8f2f5f";
     *
     * @param type $long_key
     * @return referrer type
     */
    public function get_referrer_name_by_long_key($long_key)
    {
        $result = $this->db->select('special_urls.referrer_id,special_urls.slug,referrers.name')
                      ->from('special_urls')
                      ->join('referrers', 'referrers.id=special_urls.referrer_id', 'inner')
                      ->where('special_urls.slug', $long_key)
                      ->get();
        return $result->row('name');
    }


    public function get_short_key_by_slug($slug)
    {
        $result = $this->db->select('special_urls.short_key')
                      ->from('special_urls')
                      ->where('special_urls.slug', $slug)
                      ->get();
        return $result->row('short_key');
    }


    public function get_possible_referrers()
    {
        $this->db->select('name');
        $result = $this->db->get('referrers')->result();
        return $result;
    }


    /**
     * Get sponsor types
     *
     * @param [type] $for_dropdown
     * @return void
     */
    public function sponsor_types($for_dropdown = null)
    {
        $sponsor_types = $this->db->get('sponsor_types')->result();

        if ($for_dropdown) {
            $return_value[0] = '-Select a Sponsor Type-';

            foreach ($sponsor_types as $sponsor_type) {
                $return_value[$sponsor_type->id] = $sponsor_type->sponsor_type;
            }
        } else {
            $return_value = $sponsor_types;
        }

        return $return_value;
    }


    /**
     * Check whether a user is a Booster team member
     */
    public function is_team_member($user_id)
    {

    //Group ID's based on Group types considered part of the Booster team
        // Also includes Group ID's of admin and sys admin "superuser" groups
        $subquery = "SELECT `user_groups`.`id` FROM `user_groups`
      WHERE type LIKE 'Team'
      OR `user_groups`.`id`
      IN (" . User_group_model::ADMIN . "," .
      User_group_model::SYSADMIN . ")";

        $query = "SELECT `users_user_groups`.`user_id` FROM `users_user_groups`
      JOIN `user_groups` ON `users_user_groups`.`group_id` = `user_groups`.`id`
      AND `user_groups`.`id` IN ( {$subquery} )
      AND `users_user_groups`.`user_id` = '{$user_id}'
      LIMIT 1";

        return ($this->db->query($query)->num_rows() > 0) ? true : false;
    }


    public function is_my_participant_by_fr($participant_user_fr)
    {
        $parts             = $this->db->select('fr_code')
          ->from('students_parents')
          ->where('students_parents.parent_id', $this->session->userdata('user_id'))
          ->join('users', 'users.id = students_parents.student_id')
          ->where('users.fr_code', $participant_user_fr)->get()->row();
        $is_my_participant = (! empty($parts));
        return $is_my_participant;
    }


    public function get_user_profile_lite($user_id)
    {
        //first_name last_name name email phone
        return $this->db->select(
            [
      'users.id',
      'users.first_name',
      'users.last_name',
      'CONCAT(users.first_name, " ", users.last_name) as name',
      'users.email',
      'users.phone']
        )
    ->from('users')
    ->where('users.id', $user_id)
    ->get()
    ->row_array();
    }


    /**
     * Get user profile.
     *
     * @param int $user_id
     * @param int $classroom_id student classroom id override used in registration
     *                          when classroom hasn't been assigned yet
     * @return array|null  Array of fields, or null if user doesn't exist or has no program
     */
    public function get_user_profile($user_id, $classroom_id = null)
    {
        if ($classroom_id == 'default') {
            return null;
        }

        if ($classroom_id) {
            $classroom_id_join = $classroom_id;
        } else {
            $classroom_id_join = 'participants.classroom_id';
        }

        $query = $this->db
      ->select(
          'CONCAT(users.first_name, " ", users.last_name) AS name,
        users.first_name, users.last_name, users.email, users.phone, users.dob, users.fr_code,
        schools.name AS school,
        GROUP_CONCAT(DISTINCT
                    IF(RIGHT(user_groups.description, 1) = "S",
                        LEFT(user_groups.description,
                            CHAR_LENGTH(user_groups.description)-1),
                        user_groups.description)
                    SEPARATOR " | ") AS roles,
        participants.classroom_id,
        students_parents.parent_id,
        classrooms.name AS classroom,
        grades.name AS grade,
        programs.id AS program_id,
        programs.total_raised_goal AS total_goal,
        programs.client_goal AS school_goal,
        programs.payee,
        programs.due_date,
        groups.id AS group_id,
        DATE_FORMAT(programs.pep_rally,"%b %d %Y") AS pep_rally, DATE_FORMAT(programs.fun_run,"%b %d %Y") AS fun_run,
        laps,
        user_profiles.pledge_page_text AS personal_pledge_page_text,
        user_profiles.video_url AS personal_video_url,
        user_profiles.image_name AS personal_image_name,
        user_profiles.pledge_goal AS personal_pledge_goal,
        user_profiles.pledge_page_text AS personal_pledge_text,
        programs.event_name,
        participants.family_pledging_enabled,
        users.id as user_id,
        programs.salesforce_id as programSalesforceId,
        schools.salesforce_id as schoolSalesforceId,
        programs.team_id as teamId,
        programs.semester as semester,
        programs.service_level as serviceLevel,
        case when users.id %2 !=0 then "odd" else "even" end AS evenOddParent,
        users.id as parentUserId,
        programs.fun_run as funRun',
          false
      )
      ->from('users')
      ->join('user_profiles', 'user_profiles.user_id = users.id', 'left')
      ->join('users_user_groups', 'users_user_groups.user_id = users.id AND users_user_groups.group_id <> 2', 'left')
      ->join('user_groups', 'user_groups.id = users_user_groups.group_id', 'left')
      ->join('participants', 'participants.user_id = users.id', 'left')
      ->join('classrooms', "$classroom_id_join = classrooms.id", 'left')
      ->join('grades', 'classrooms.grade_id = grades.id', 'left')
      ->join('groups', 'classrooms.group_id = groups.id', 'left')
      // Get a parent's program. A parent user is related to a program
      // via any of their children in a program. 50040083
      ->join('students_parents', 'students_parents.parent_id = users.id or students_parents.student_id = users.id', 'left') // May give > 1 row
      ->join('participants AS ChildParticipant', 'ChildParticipant.user_id = students_parents.student_id', 'left')
      ->join('classrooms AS ChildClass', 'ChildParticipant.classroom_id = ChildClass.id', 'left')
      ->join('groups AS ChildGroup', 'ChildClass.group_id = ChildGroup.id', 'left')
      // Ditto for sponsor. Take an arbitrary pledge.
      ->join('pledges', 'pledges.user_id = users.id', 'left')
      // Now stuff related to PROGRAM.
      ->join('programs', 'programs.id = COALESCE(groups.program_id, ChildGroup.program_id, pledges.program_id)', 'left')
      ->join('schools', 'programs.school_id = schools.id', 'left')
      ->where('users.id', $user_id)
      ->get();
        $result = $query->row_array();
        return $result;
    }


    public function get_sponsored_participants($user_id)
    {
        if ($user_id) {
            $query                = $this->db->query(
                "
          SELECT DISTINCT(pledges.participant_user_id)
            FROM pledges
            JOIN users on pledges.participant_user_id = users.id
            JOIN programs on pledges.program_id = programs.id
            WHERE pledges.user_id = $user_id
            AND programs.archived = 0
            AND NOT users.deleted
          UNION DISTINCT
          SELECT DISTINCT(students_parents.student_id) as participant_user_id
            FROM students_parents
            JOIN users on students_parents.student_id = users.id
            JOIN participants on students_parents.student_id = participants.user_id
            JOIN classrooms on participants.classroom_id = classrooms.id
            JOIN groups on classrooms.group_id = groups.id
            JOIN programs on groups.program_id = programs.id
            WHERE students_parents.parent_id = $user_id
            AND programs.archived = 0
            AND NOT users.deleted"
            );
            $array_result         = $query->result_array();
            $participant_user_ids = [];
            foreach ($array_result as $user) {
                $participant_user_ids[] = $user['participant_user_id'];
            }

            return $participant_user_ids;
        }

        return [];
    }


    /**
     * Get mini user profile.
     *
     * @param int $user_id
     * @return array|null  Array of fields, or null if user doesn't exist or has no program
     */
    public function get_mini_user_profile($user_ids)
    {
        $this->db->select(
            'CASE users_user_groups.group_id
      WHEN ' . User_group_model::TEACHERS . ' THEN true
      ELSE false
      END AS is_teacher,
      CONCAT(users.first_name, " ", LEFT(users.last_name, 1), "." ) AS name,
      users.id,
      users.first_name, users.last_name, users.email, users.fr_code, users.phone,
      classrooms.name as classroom_name,
      classrooms.id as classroom_id,
      grades.name as grade,
      schools.name AS school,
      programs.fun_run,
      programs.name as program_name,
      programs.id as program_id,
      programs.payee,
      students_parents.parent_id,
      special_urls.short_key,
      user_profiles.pledge_page_text AS personal_pledge_page_text,
      user_profiles.video_url AS personal_video_url,
      user_profiles.image_name AS personal_image_name,
      user_profiles.pledge_goal AS personal_pledge_goal,
      user_profiles.pledge_page_text AS personal_pledge_text,
      participants.family_pledging_enabled,
      programs.event_name',
            false
        )
    ->from('users')
    ->join('user_profiles', 'user_profiles.user_id = users.id', 'left')
    ->join('participants', 'participants.user_id = users.id', 'left')
    ->join('students_parents', 'students_parents.student_id = users.id', 'left')
    ->join('special_urls', 'special_urls.user_id = users.id and special_urls.referrer_id = 4', 'left')
    ->join('classrooms', "participants.classroom_id = classrooms.id", 'left')
    ->join('grades', "classrooms.grade_id = grades.id", 'left')
    ->join('groups', 'classrooms.group_id = groups.id', 'left')
    ->join('programs', 'programs.id = groups.program_id', 'left')
    ->join('schools', 'programs.school_id = schools.id', 'left')
    ->join(
        'users_user_groups',
        'users_user_groups.user_id = users.id AND users_user_groups.group_id = '. User_group_model::TEACHERS,
        'left'
    );

        if (!is_array($user_ids)) {
            $this->db->where('users.id', $user_ids);
            return $this->db->get()->row_array();
        }

        $this->db->where_in('users.id', $user_ids);
        $this->db->order_by("programs.fun_run", "desc");

        return $this->db->get()->result();
    }


    /**
     * Login link for user.
     *
     * @param object $user_row
     * @return string  Login URL for this user
     */
    public function login_link($user_row, $dashboard_redirect = false)
    {
        $login_url  = '/auth/login/' . $user_row->fr_code;
        $login_url .= !empty($dashboard_redirect) ? '/1' : '';
        return site_url($login_url);
    }


    /**
     * Paynow link for user.
     *
     * @param object $user_row
     * @return string  Paynow URL for users
     */
    public function paynow_login_link($user_row)
    {
        $login_url = '/auth/login/' . $user_row->fr_code . '/0/0/0/paynow';

        return site_url($login_url);
    }


    /**
     * Datatable ajax function to return a program's payments. 42804625
     */
    public function ajax_get_notes($user_id)
    {
        $this->load->library('datatables');

        $this->datatables->select('id, note, created, last_updated')
    ->from('users_notes')
    ->where('user_id', $user_id)
    ->edit_column('note', "<div class='edit' id='$2'>$1</div>", 'note, id')
    ->edit_column(
        'id',
        '<a class="btn btn-danger btn-mini delete-note" data-note_id="$1" href="#"><i class="glyphicon glyphicon-trash"></i> Delete</a>',
        'id'
    );

        return $this->datatables->generate();
    }


    /**
     * Functions for adding/updating/delete users notes
     * @param text $note
     * @param id $note_id
     */
    public function add_note($note)
    {
        $note['created'] = date('Y-m-d H:i:s');
        return $this->db->insert('users_notes', $note);
    }


    public function delete_note($note_id)
    {
        return $this->db->delete('users_notes', ['id' => $note_id]);
    }


    public function update_note($note_id, $note)
    {
        return $this->db->where(['id' => $note_id])->update('users_notes', $note);
    }


    /**
     * Get basic user info (id, first_name, last_name)
     * @param int $user_id
     */
    public function get_basics($user_id)
    {
        return $this->db->select('first_name, last_name, id')->where('users.id', $user_id)->from($this->_table)->get()->row_array();
    }


    /**
     * Gets one field from the user table instead of the entire profile
     *
     * @param int $user_id
     * @param string $field_name
     * @return string
     */
    public function get_one_field($user_id, $field_name)
    {
        if (empty($user_id) or empty($field_name)) {
            return "";
        }

        return $this->db
          ->select($field_name)
          ->where('id', $user_id)
          ->from('users')
          ->get()
          ->row()
          ->$field_name;
    }


    /**
     * Returns an email address for a user
     *
     * @param int $user_id
     * @return string
     */
    public function get_email($user_id)
    {
        return $this->get_one_field($user_id, 'email');
    }


    /**
     * Datatable ajax function to return all users
     *
     * @return void
     */
    public function ajax_get_users()
    {
        $this->load->library('datatables');
        $this->load->helper('datatables_helper');
        $this->datatables->select(
            'users.id,
                                  users.first_name,
                                  users.last_name,
                                  users.email'
        )
      ->from('users')
      ->where('users.first_name IS NOT NULL')
      ->where('users.last_name IS NOT NULL')
      ->edit_column(
          'users.id',
          '<a class="btn btn-primary btn-mini" data-user_id="$1"
                      href="/admin/users/edit/$1">
                       <i class="glyphicon glyphicon-eye-open"></i> Edit
                   </a>
               ',
          'users.id'
      );
        return $this->datatables->generate();
    }


    /**
     * Returns funrun.com status reflecting how far a student has gotten into the login flow
     */
    public function get_student_funrun_status($student_id)
    {
        $status        = '';
        $has_logged_in = $this->has_logged_in($student_id);

        if ($has_logged_in) {
            $status = 'Registration';

            $has_registered = $this->student_registered($student_id);

            if ($has_registered) {
                $status = 'Logged On';
            }
        }

        return $status;
    }


    /**
     * Boolean: Returns whether user logged in
     */
    public function has_logged_in($user_id)
    {
        $logged_in = false;

        $last_login = $this->get_by(['id' => $user_id, 'last_login !=' => 'NULL'])->last_login;

        if ($last_login) {
            $logged_in = true;
        }

        return $logged_in;
    }


    public function sync_team_admin_group()
    {
        $this->load->model('user_group_model');
        $users = $this->get_many_by('salesforce_team_id !=', '');
        foreach ($users as $user) {
            $this->add_to_group($user->id, User_group_model::ADMIN);
        }
    }


    public function retrieve_access_code($email)
    {
        $this->db->select('fr_code')
             ->where('email', $email);

        $query  = $this->db->get('users');
        $result = $query->result();
        return $result[0]->fr_code;
    }


    private function get_student_fr_code($email)
    {
        $students = [];
        $this->db->select('student_id')
             ->from('users')
             ->join('students_parents', 'users.id = students_parents.parent_id')
             ->where('email', $email);
        $query = $this->db->get();

        foreach ($query->result() as $student_id) {
            array_push($students, $this->get_student_info_by_id($student_id->student_id));
        }

        return $students;
    }


    /**
     * Get fr code based on id
     *
     * @param type $id
     * @return type
     */
    public function get_fr_code($id)
    {
        $result = $this->get_student_info_by_id($id);
        return $result->fr_code;
    }


    private function get_student_info_by_id($id)
    {
        $this->db->select('fr_code, first_name,last_name')
             ->where('id', $id);

        $query  = $this->db->get('users');
        $result = $query->result();

        return $result[0];
    }


    public function send_access_email($email, $fr_code, $type)
    {
        if ($type == 'teacher' || $type == 'sponsor') {
            $subject = "Lost Access Code From Boosterthon";

            $message = "Thank you for requesting your access code to funrun.com.
                        You may log in by clicking <a href=" .base_url().">here</a>.  Your access code is {$fr_code}";
        } elseif ($type == 'parent') {
            $students = $this->get_student_fr_code($email);
            $subject  = "Lost Access Code From Boosterthon";

            $message = "Thank you for requesting your access code to funrun.com.
                         You may log in by clicking <a href=" .base_url().">here</a>.  Your family page access code is {$fr_code}.
                         You can also log into your student's specific page. ";
            foreach ($students as $student) {
                $message .= "{$student->first_name} {$student->last_name} - {$student->fr_code}  ";
            }
        }

        return $this->send_email(
            $email,
            $subject,
            $message
        );
    }


    public function check_org_school_permission($user_id, $schools)
    {
        $this->load->model('user_group_model');
        // determine group membership, to query based on type for school
        $users_result = false;
        if ($this->user_group_model->has_user_group($user_id, User_group_model::STUDENTS) ||
    $this->user_group_model->has_user_group($user_id, User_group_model::TEACHERS)) {
            $users_result = $this->participant_in_school($user_id, $schools);
        } elseif ($this->user_group_model->has_user_group($user_id, User_group_model::SPONSORS)) {
            $users_result = $this->sponsor_in_school($user_id, $schools);
        } elseif ($this->user_group_model->has_user_group($user_id, User_group_model::PARENTS)) {
            $users_result = $this->parent_in_school($user_id, $schools);
        } else {
            return false;
        }

        return !empty($users_result);
    }


    public function participant_in_school($user_id, $school)
    {
        $this->db->select('schools.id')->from('schools')
    ->join('programs', 'programs.school_id = schools.id')
    ->join('groups', 'groups.program_id  = programs.id')
    ->join('classrooms', 'classrooms.group_id  = groups.id')
    ->join('participants', 'participants.classroom_id = classrooms.id')
    ->where('participants.user_id', $user_id);

        if (!is_array($school)) {
            $this->db->where('schools.id', $school);
        } else {
            $this->db->where_in('schools.id', $school);
        }

        return $this->db->get()->result();
    }


    public function sponsor_in_school($user_id, $school)
    {
        $this->db->select('schools.id')->from('schools')
    ->join('programs', 'programs.school_id = schools.id')
    ->join('pledges', 'pledges.program_id  = programs.id')
    ->where('pledges.user_id', $user_id);

        if (!is_array($school)) {
            $this->db->where('schools.id', $school);
        } else {
            $this->db->where_in('schools.id', $school);
        }

        return $this->db->get()->result();
    }


    public function parent_in_school($user_id, $school)
    {
        $this->db->select('schools.id')->from('schools')
    ->join('programs', 'programs.school_id = schools.id')
    ->join('groups', 'groups.program_id  = programs.id')
    ->join('classrooms', 'classrooms.group_id  = groups.id')
    ->join('participants', 'participants.classroom_id = classrooms.id')
    ->join('students_parents', 'students_parents.student_id = participants.user_id')
    ->where('students_parents.parent_id', $user_id);

        if (!is_array($school)) {
            $this->db->where('schools.id', $school);
        } else {
            $this->db->where_in('schools.id', $school);
        }

        return $this->db->get()->result();
    }


    private function get_unsubscribe_encryption_options()
    {
        return [
      'key'         => User_model::UNSUBSCRIBE_ENCRYPT_KEY,
      'cipher'      => 'aes-128',
      'mode'        => 'cbc',
      'hmac_digest' => 'sha256',
      'hmac_key'    => User_model::UNSUBSCRIBE_HMAC
    ];
    }


    /**
     * Generates unsubscribe code based off of user email
     *
     * @param $email - user email address
     * @return - returns encrypted unsubscribe code
     */
    public function get_user_unsubscribe_code($email)
    {
        $this->load->library('encryption');
        $encrypted_email  = $this->encryption->encrypt(
            $email,
            $this->get_unsubscribe_encryption_options()
        );
        $unsubscribe_code = urlencode(base64_encode($encrypted_email));

        return $unsubscribe_code;
    }


    /**
     * Decrypts email hash used for unsubscribe email links
     *
     * @param $hash - encrypted email address
     * @return $email - decrypted email address
     */
    public function decrypt_unsubscribe_code($hash, $skip_user_check = false)
    {
        $email = null;
        $this->load->library('encryption');
        $url_decoded_string = base64_decode($hash);
        $orig_code          = $url_decoded_string;
        $decrypted_email    = $this->encryption->decrypt(
            $orig_code,
            $this->get_unsubscribe_encryption_options()
        ); // CodeIgniter will not allow /,=,+ in the URL (encrypt library generates these)

        if ($skip_user_check == true) {
            return $decrypted_email;
        }

        if ($decrypted_email) {
            // Check if user exists in the system
            $user_exists = $this->db->select('id')->from('users')
        ->where('email', $decrypted_email)->get()->result();

            if ($user_exists) {
                $email = $decrypted_email;
            }
        }

        return $email;
    }


    /**
     * Returns a message if the user can't get deleted
     *
     * @param int $user_id
     */
    public function get_delete_user_message($user_id)
    {
        $this->load->model('pledge_model');
        $this->load->model('user_group_model');
        $this->load->model('payment_model');

        $user_obj = $this->user_model->get($user_id);

        if (empty($user_id) or empty($user_obj)) {
            return 'Invalid User.';
        }

        if ($user_id == $this->ion_auth->user()->row()->id) {
            return 'Users cannot delete themselves.';
        }

        $pledges  = $this->pledge_model->get_associated_pledge_count($user_id);
        $payments = $this->payment_model->get_student_collection_total($user_id);

        if (!empty($pledges) or !empty($payments)) {
            return 'We cannot delete this user because there are linked pledges and/or payments.';
        }

        $is_parent = $this->user_group_model->has_user_group($user_id, User_group_model::PARENTS);

        if ($is_parent) {
            $children = $this->get_children_for_parent($user_id);
            foreach ($children as $child) {
                if (!$child->deleted) {
                    return 'We cannot delete this user because they are a parent';
                }
            }
        }

        return '';
    }


    /**
     * Deletes a user
     * @param int $user_id
     * @return array
     */
    public function delete_user($user_id)
    {
        $message = $this->get_delete_user_message($user_id);

        if ($message) {
            return ['success' => false, 'message' => $message];
        }

        $this->update($user_id, ['deleted' => 1]);

        return ['success' => true, 'message' => 'This user was successfully deleted.'];
    }


    /**
     * removes special characters from
     * the end of a fist_name or last_name
     * inside of the post object.
     *
     * @return void
     */
    public function clean_participant_post()
    {
        //pattern for matching characers not allowed
        $patternBegin = '/^[\s\!\#\$\%&\'\*\+\-\/\ = \?\^\_\`\[\{\|\}\]\~\\\;\.\_\-]+/';
        $patternEnd   = '/[\s\!\#\$\%&\'\*\+\-\/\ = \?\^\_\`\[\{\|\}\]\~\\\;\.\_\-]+$/';

        //clean first name
        if ($this->input->post('first_name')) {
            $_POST['first_name'] = preg_replace($patternBegin, '', $this->input->post('first_name'));
            $_POST['first_name'] = preg_replace($patternEnd, '', $this->input->post('first_name'));
        }

        //clean last name
        if ($this->input->post('last_name')) {
            $_POST['last_name'] = preg_replace($patternBegin, '', $this->input->post('last_name'));
            $_POST['last_name'] = preg_replace($patternEnd, '', $this->input->post('last_name'));
        }
    }


    /**
     * Updates a user's address
     *
     * @param int $id
     * @param array $data
     * @param boolean $overwrite
     * @return boolean
     */
    public function update_address($id, $data, $overwrite=false)
    {
        $user = $this->get_by('id', $id);

        if (empty($user)) {
            return false;
        }

        $updates = [];
        if ($overwrite or (empty($user->address))) {
            $updates['address'] = $data['address'];
        }

        if ($overwrite or empty($user->city)) {
            $updates['city'] = $data['city'];
        }

        if ($overwrite or empty($user->state)) {
            $updates['state'] = $data['state'];
        }

        if ($overwrite or empty($user->zip)) {
            $updates['zip'] = $data['zip'];
        }

        if (!empty($updates)) {
            $this->update($id, $updates);
        }

        return true;
    }


    /**
     * Returns the data required to send the notification to parents when the
     * laps were entered more than x number of hours.
     *
     * @param int $hours
     * @return array
     */
    public function get_parent_laps_notification($hours = 2)
    {
        $query = '
      SELECT
        student.first_name as student_first_name,
        CONCAT(student.first_name," ",student.last_name) as student_name,
        student.id as student_id,
        student.laps,
        parent.id as parent_id,
        parent.first_name as parent_first_name,
        CONCAT(parent.first_name," ",parent.last_name) as parent_name,
        parent.email,
        parent.email_opt_out,
        parent.fr_code,
        student.fr_code as student_fr_code,
        schools.name as school_name,
        programs.event_name,
        programs.unit_id,
        groups.program_id,
        special_urls.short_key
      FROM users as student
        JOIN students_parents
          on student.id = students_parents.student_id
        JOIN users as parent
          on parent.id = students_parents.parent_id
        JOIN participants
          on participants.user_id = student.id
        JOIN classrooms
          on classrooms.id = participants.classroom_id
        JOIN groups
          on groups.id = classrooms.group_id
        JOIN programs
          on programs.id = groups.program_id
        JOIN schools
          on schools.id = programs.school_id
        JOIN special_urls
          on special_urls.user_id = student.id
      WHERE
        NOT(student.deleted) AND
        NOT(parent.deleted) AND
        NOT(parent.email_opt_out) AND
        special_urls.referrer_id = 4 AND
        (student.ts_laps_entered < DATE_SUB(NOW(), INTERVAL 1 HOUR) AND student.ts_laps_entered > DATE_SUB(NOW(), INTERVAL ' . $hours . ' HOUR))
      ORDER BY student.ts_laps_entered
    ';

        return $this->db->query($query)->result_array();
    }


    public function get_parent_laps_for_edit($parent_id)
    {
        $parent_students = $this->db->select(
            '
        student.first_name as first_name,
        student.last_name as last_name,
        student.laps,
        programs.event_name,
        programs.fun_run,
        programs.unit_id,
        groups.program_id,
        student.id as student_id'
        )
      ->from('participants')
      ->join('users as student', 'participants.user_id = student.id')
      ->join('students_parents', 'student.id=students_parents.student_id')
      ->join('users as parent', 'parent.id = students_parents.parent_id')
      ->join('classrooms', 'classrooms.id = participants.classroom_id')
      ->join('groups', 'groups.id = classrooms.group_id')
      ->join('programs', 'programs.id = groups.program_id')
      ->where('student.deleted', 0)
      ->where('parent.deleted', 0)
      ->where('programs.archived', 0)
      ->where('student.ts_laps_entered !=', '0000-00-00 00:00:00')
      ->where('student.laps is not null')
      ->where('parent.id', $parent_id)
      ->get()->result_array();

        $this->load->library('booster_api');
        $parent_students_by_program = [];

        foreach ($parent_students as $student) {
            $student['unit_data']                                 = $this->booster_api->get_unit_data($student['unit_id'])->data;
            $event_date                                           = new DateTime($student['fun_run']);
            $student['event_date']                                = $event_date->format('m/d/Y');
            $parent_students_by_program[$student['event_name']][] = $student;
        }

        return $parent_students_by_program;
    }


    /**
     * Retruns the list of students with no pledges with accounts
     * created xxx hours ago.
     *
     * @param int $hours
     * @return array
     */
    public function get_parent_no_pledge($hours=24)
    {
        $this->load->model('pledge_model');
        $this->load->helper('sponsor_participant_helper');

        $pledges   = [];
        $from_hour = $hours * 3600;
        $to_hour   = ($hours + 1) * 3600;

        $this->db->select(
            '
        student.first_name as student_first_name,
        student.last_name as student_last_name,
        parent.first_name as parent_first_name,
        parent.email,
        parent.email_opt_out,
        parent.fr_code,
        programs.event_name,
        programs.unit_id,
        program_pledge_settings.flat_donate_only,
        groups.program_id,
        user_profiles.video_url,
        student.id as student_id,
        parent.id as parent_id,
        microsites.funds_raised_for,
        IFNULL(COUNT(pledges.id),\'0\') as pledge_total'
        )
      ->from('participants')
      ->join('users as student', 'participants.user_id = student.id')
      ->join('students_parents', 'student.id=students_parents.student_id')
      ->join('users as parent', 'parent.id = students_parents.parent_id')
      ->join('classrooms', 'classrooms.id = participants.classroom_id')
      ->join('groups', 'groups.id = classrooms.group_id')
      ->join('programs', 'programs.id = groups.program_id')
      ->join('user_profiles', 'user_profiles.user_id = student.id', 'left')
      ->join('pledges', 'pledges.participant_user_id = student.id AND pledges.deleted=\'0\'', 'left')
      ->join('microsites', 'microsites.program_id = programs.id')
      ->join('program_pledge_settings', 'program_pledge_settings.program_id = programs.id')
      ->where('student.deleted', 0)
      ->where('parent.deleted', 0)
      ->where('parent.email_opt_out', 0)
      ->where('programs.parent_email_prompts', 1)
      ->where('UNIX_TIMESTAMP() - student.created_on >=', $from_hour)
      ->where('UNIX_TIMESTAMP() - student.created_on <', $to_hour)
      ->group_by('student.id,parent.id')
      ->having('pledge_total = 0')
      ->order_by('groups.program_id,student.created_on');

        $results = $this->db->get()->result_array();

        foreach ($results as $i => $row) {
            if (false == array_key_exists($row['parent_id'], $pledges)) {
                $pledges[$row['parent_id']] = $this->pledge_model->get_sponsor_pledges_for_payment($row['parent_id'], false, false);
            }

            $this->load->model('potential_sponsor_model');

            $potential_sponsors = $this->potential_sponsor_model->get_potential_sponsors($row['student_id'], $row['parent_id']);

            $sorted_sponsors = get_sorted_sponsors($row['parent_id'], $pledges[$row['parent_id']], $row['student_id'], $potential_sponsors);

            $results[$i]['previous_sponsors'] = $sorted_sponsors['previous_sponsors'];

            $urls = $this->user_model->get_special_urls($row['student_id']);

            $results[$i]['student_pledge_url'] = $urls['24_no_pledge_email']->url;
        }

        return $results;
    }


    public function has_profile_image($id)
    {
        $has_profile_image = $this->db->select('image_name')
      ->where([ 'user_id' => $id, 'image_name !=' => 'NULL' ])
      ->get('user_profiles')->num_rows();
        return $has_profile_image ? true : false;
    }


    public function has_hero_video($id)
    {
        $has_url = $this->db->select('video_url')
      ->where([ 'user_id' => $id, 'video_url !=' => 'NULL' ])
      ->get('user_profiles')->num_rows();
        return $has_url ? true : false;
    }


    public function clean_user_email_addresses($table='users', $field = 'email')
    {
        if (getenv('APPLICATION_ENV') !== 'development' && getenv('APPLICATION_ENV') !== 'stage') {
            redirect('/');
            die;
        }

        $limit  = 25000;
        $offset = 0;
        set_time_limit(600);
        do {
            $result = $this->db->select([ 'id', 'CONCAT("boosterthontest+gen_",`id`,"@gmail.com") as ' . $field ])
              ->from($table)
              ->where($field . ' NOT LIKE "boosterthontest+%@gmail.com"')
              ->where($field . ' NOT LIKE "%@funrun.com"')
              ->where($field . ' NOT LIKE "%@boosterthon.com"')
              ->where($field . ' !=', '')
              ->limit($limit, $offset)
              ->get()->result();
            if ($result) {
                $this->db->update_batch($table, $result, 'id');
            }
        } while (count($result) == $limit);
    }


    public function does_email_exist($email_addr)
    {
        return (bool)$this->get_by('email', $email_addr)->id ? true : false;
    }


    /**
     * Return a list of participants and associated parents 72 hrs after
     * registering a participant, to email if the participant has not
     * created a video, profile image, and has 0 laps
     *
     * @return object
     */
    public function getStudentStarPromptList()
    {
        return $this->db
      ->select(
          '
        DISTINCT(users.id),
        users.first_name AS participant_first_name,
        users.last_name AS participant_last_name,
        parent.fr_code AS url_code,
        parent.first_name AS parent_first_name,
        parent.email AS parent_email,
        programs.event_name,
        programs.unit_id
        '
      )
      ->from('users')
      ->join('user_profiles', 'user_profiles.user_id = users.id')
      ->join('students_parents', 'students_parents.student_id = users.id')
      ->join('users AS parent', 'parent.id = students_parents.parent_id')
      ->join('participants', 'participants.user_id = users.id')
      ->join('classrooms', 'classrooms.id = participants.classroom_id')
      ->join('groups', 'groups.id = classrooms.group_id')
      ->join('programs', 'programs.id = groups.program_id')
      ->join('pledges', 'pledges.participant_user_id = users.id')
      ->where('user_profiles.video_url IS NULL AND user_profiles.image_name IS NULL AND users.laps IS NULL')
      ->where('users.created_on  < ' . strtotime('-3 days') . ' AND users.created_on  > ' . strtotime('-4 days'))
      ->where('programs.parent_email_prompts = 1')
      ->where('programs.ssv_disabled = 0')
      ->get()
      ->result();
    } // End getStudentStarPromptList


    /**
     * Return a list of participants and associated parent 24 hrs after
     * registering a participant, to email if the participant has not
     * shared on facebook, has at least 1 pledge, has 0 laps
     * and the program hasn't opted out of parent_email_prompts
     *
     * @return object
     */
    public function getFacebookPromptList()
    {
        return $this->db->select(
            '
      DISTINCT(participant.id),
      participant.first_name AS participant_first_name,
      participant.last_name AS participant_last_name,
      parent.fr_code AS url_code,
      parent.first_name AS parent_first_name,
      parent.email AS parent_email,
      programs.id AS program_id,
      programs.event_name
      '
        )
    ->from('users AS participant')
    ->join('students_parents', 'students_parents.student_id = participant.id')
    ->join('users AS parent', 'parent.id = students_parents.parent_id')
    ->join('participants', 'participants.user_id = participant.id')
    ->join('classrooms', 'classrooms.id = participants.classroom_id')
    ->join('groups', 'groups.id = classrooms.group_id')
    ->join('programs', 'programs.id = groups.program_id')
    ->join('pledges', 'pledges.participant_user_id = participant.id')
    ->where('participant.laps IS NULL')
    ->where('participant.created_on  < ' . strtotime('-1 days') . ' AND participant.created_on  > ' . strtotime('-2 days'))
    ->where('programs.parent_email_prompts = 1')
    ->where('participant.id NOT IN (SELECT `user_id` FROM `user_activity_history` WHERE activity_id = 1 AND user_id = participant.id)', null, false)
    ->get()
    ->result();
    } // End getFacebookPromptList


    /**
     * will return NULL if no user found
     */
    public function get_non_collection_user_name($user_id)
    {
        $result = $this->db->select(['CONCAT(first_name, " ", last_name) as name', 'email'])
            ->from('users')
            ->where('id', $user_id)
            ->get()->row();
        if ((bool)strpos($result->email, '@boosterschool') === true) {
            return null;
        }

        return $result->name;
    }


    public function get_ee_sponsors_user_id($profile, $participants)
    {
        $program_pledge_settings = $this->program_pledge_settings_model->get_pledge_settings($profile['program_id']);
        $ee_sponsors_user_id     = $profile['user_id'];
        if ($profile['family_pledging_enabled'] == '1' && $program_pledge_settings->family_pledging_enabled == '1') {
            foreach ($participants as $participant) {
                if ($participant->program_id == $profile['program_id']) {
                    $ee_sponsors_user_id = $participant->user_id;
                    break;
                }
            }
        }

        return $ee_sponsors_user_id;
    }


    /**
     * determines if the current logged in user can attempt to delete the user_id passed in
     *
     * this function does not run checks on if this user has other reasons it can not be
     * deleted e.g. pledges/payments/prizes attached to user
     **/
    public function can_delete_user($user_id)
    {
        //allow sysadmins to delete everyone
        if ($this->ion_auth->in_group(User_group_model::SYSADMIN)) {
            return true;
        }

        if ($this->ion_auth->in_group(User_group_model::ADMIN) ||
       $this->ion_auth->in_group(User_group_model::ORG_ADMIN)) {
            $is_teacher = $this->user_group_model->has_user_group($user_id, User_group_model::TEACHERS);
            $is_student = $this->user_group_model->has_user_group($user_id, User_group_model::STUDENTS);
            if ($is_student && ! $is_teacher) {
                return true;
            }
        }

        return false;
    }


    public function get_participants_for_program($program_id, $limit = 10)
    {
        $participants = $this->db->select(
            [
        'program_id',
        'group_id',
        'user_id',
        'first_name',
        'last_name',
        'fr_code',
        'family_pledging_enabled',
        '"fake" as image_name',
        '"fake" as video_url',
        'due_date',
        '0 as num_alerts',
      ]
        )
    ->from('users')
    ->join('participants', 'participants.user_id = users.id')
    ->join('classrooms', 'classrooms.id = participants.classroom_id')
    ->join('groups', 'groups.id = classrooms.group_id')
    ->where(
        [
        'program_id'    => $program_id,
        'users.deleted' => 0,
      ]
    )
    ->limit($limit)
    ->get()->result();
        return $participants;
    }


    public function remove_laps($participant_id)
    {
        $new_lap_data = [
      'laps' => null,
      'laps_modified_by_user_id' => null,
      'laps_modified_ts' => null,
    ];

        $update_result = $this->update($participant_id, $new_lap_data);
    }


    public function set_laps($participant_id, $laps, $laps_age = 0, $editor_user_id = 0)
    {
        if ($participant_id) {
            $modified_ts  = date('Y-m-d H:i:s', strtotime("-$laps_age day", strtotime(date('Y-m-d H:i:s'))));
            $new_lap_data = [
        'laps' => $laps,
        'laps_modified_by_user_id' => $editor_user_id,
        'laps_modified_ts' => $modified_ts,
        'ts_laps_entered' => $modified_ts,
      ];

            $this->load->model('user_model');

            $this->update($participant_id, $new_lap_data);
        }
    }


    public function award_facebook_share($participant_id)
    {
        $this->load->model('program_model');
        $this->load->model('program_pledge_settings_model');

        $program_id                      = $this->program_model->get_program_id_by_user_id($participant_id);
        $participant_profile             = $this->get_user_profile($participant_id);
        $program_family_pledging_enabled = $this->program_pledge_settings_model->get_pledge_settings($program_id)->family_pledging_enabled;
        $is_family_pledging_enabled      = is_family_pledging_enabled($participant_profile, $program_family_pledging_enabled);

        if ($is_family_pledging_enabled) {
            $participants = $this->get_family_pledging_participants_by_participant_id($participant_id);
        } else {
            $participants = [$this->get_participant_by('user_id', $participant_id)];
        }

        foreach ($participants as $participant) {
            // update facebook activity reward to delivered on student
            $this->load->model('prize_bound_student_model');
            $this->prize_bound_student_model->giveaway_facebook_share_prize($participant->user_id);

            // Save Record of this Activity
            $this->load->model('user_activity_history_model');
            $this->user_activity_history_model->insertRecord(1, $participant->user_id);
        }
    }
}
