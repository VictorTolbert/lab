<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Program_Model extends MY_Model
{
    public $_table = 'programs';
    public $before_delete  = ['delete_relationships'];

    protected $soft_delete = true;

    const UNIT_ID_FUNRUN   = 1;
    const UNIT_ID_BOOKFIT  = 2;
    const UNIT_GOLDEN_RULE = 4;
    const UNIT_LAPS_PRO    = 10;
    const UNIT_EVENTS_BASH = 11;
    const UNIT_ACTIVITY    = 14;

    /**
     * Get all programs and related program groups
     *
     * @return void
     */
    public function full_programs()
    {

         // back to this after we get all program info from SF
        $programs = $this->db->get('programs')
            ->join('program_groups', 'programs.id = groups.program_id')
            ->order_by('sf_id')
            ->get()
            ->result();

        return $programs;
    }

    /**
     * Find the program id given the registration code
     * @param string $registration_code
     * @return int program id
     */
    public function check_registration_code_id($registration_code)
    {
        $program = $this->db->select('id')
            ->from('programs')
            ->where('registration_code', $registration_code)
            ->where('archived = 0')
            ->get()->result();

        if (! empty($program[0]->id)) {
            return $program[0]->id;
        }

        return false;
    }

    public function has_prize_report_permission($program_id)
    {
        $data['program'] = $this->get_report_permissions($program_id);

        if ($data['program']->restrict_access_prize_reports
          && $this->ion_auth->in_group(User_group_model::ORG_ADMIN)) {
            return false;
        }

        return true;
    }


    public function get_report_permissions($program_id)
    {
        $restrict_access_prize_reports = $this->db->select('restrict_access_prize_reports')
          ->from('programs')
          ->where('id', $program_id)
          ->get()->row();

        return $restrict_access_prize_reports;
    }


    /**
     * generate registration info from program registration code
     *
     * @param type $registration_code program registration code
     * @return boolean
     */
    public function reg_code_info($registration_code)
    {
        $this->load->model('classroom_model');

        $rand_classroom = $this->db->select('classrooms.id')
            ->from('classrooms')
            ->join('groups', 'groups.id = classrooms.group_id')
            ->join('programs', 'groups.program_id = programs.id')
            ->where(['programs.registration_code' => $registration_code])
            ->get()
            ->row();

        if (! empty($rand_classroom)) {
            $reg_code_info = $this->classroom_model->get_full_classroom($rand_classroom->id, true, true);
        } else {
            return false;
        }

        $reg_code_info[0]->class_id = 'default';

        if (! empty($reg_code_info)) {
            $reg_code_info[0]->is_team_leader = false;

            return $reg_code_info[0];
        }

        return false;
    }


    /**
     * HACK: Datatables requires a query to be run to return an empty table.
     * Do not remove until datatables is removed from the app OR a better way is found to return an empty result set.
     */
    private function generate_empty_datatables_result()
    {
        $this->datatables->select('programs.id');
        $this->datatables->from('programs');
        $this->datatables->where(true, false);

        return $this->datatables->generate();
    }


    /*
     * Datatable ajax function to return all programs with filtering
     * @param $teams array  a list of teams to constrain by
     * @param $school_id string  limit by school, only called for org admin
     */
    public function ajax_get_programs($teams = [], $school_id = '')
    {
        $this->load->library('datatables');
        $this->load->model('user_group_model');

        // Validating if the user has the required permissions to view programs
        if (empty($teams) && empty(trim($school_id))) {
            return $this->generate_empty_datatables_result();
        } elseif ($this->ion_auth->in_group(User_group_model::ORG_ADMIN) === false && empty($teams) && ! empty($school_id)) {
            // Not a KDM, and not a part of a team, so return an empty dataset
            return $this->generate_empty_datatables_result();
        }

        $this->datatables->select('programs.id');

        if (empty($school_id)) {
            $this->datatables->select('programs.open_help as help');
            $this->datatables->select('CONCAT(\'<a href="/admin/programs/todos/\', programs.id,\'">\',COUNT(program_todos.id),\'</a>\') as todo');
        }

        $this->datatables->select('programs.event_name as event_name ');

        $this->datatables->select(
            "CASE "
          . "WHEN (braintree_merchants.approval_status='approved' AND programs.online_payment_enabled=1) "
          . "THEN 'On' "
          . "WHEN (braintree_merchants.approval_status='approved') "
          . "THEN 'Ready' "
          . "ELSE '' "
          . "END"
        );

        $this->datatables->select('programs.semester');

        if (empty($school_id)) {
            $this->datatables->select(
                "user_groups.name as teamname, CONCAT(users.first_name, ' ', users.last_name) as participant",
                false
            );
        }

        $this->datatables->select('DATE_FORMAT(programs.pep_rally,"%b %d %Y") AS pep_rally, DATE_FORMAT(programs.fun_run,"%b %d %Y") AS fun_run', false)
            ->from('programs')
            ->join('schools', 'schools.id = programs.school_id')
            ->join('user_groups', 'programs.team_id = user_groups.id')
            ->join('users', 'programs.owner_id = users.id')
            ->join('braintree_merchants', 'braintree_merchants.school_id = programs.school_id', 'left')
            ->join('program_todos', 'program_todos.program_id = programs.id', 'left');

        if (empty($school_id)) {
            $edit_options  = '<a class="btn btn-xs btn-primary" href="/admin/programs/dashboard/$1"><i class="glyphicon glyphicon-eye-open"></i> View</a> ';
            $edit_options .= '<a class="btn btn-xs btn-warning" id="edit_$1; " data-id="$1" href="/admin/programs/edit/$1 "><i class="glyphicon glyphicon-pencil"></i> Edit</a> ';
        } else {
            $edit_options = '<a class="btn btn-xs btn-primary" href="/admin/programs/dashboard/$1"><i class="glyphicon glyphicon-eye-open"></i> View</a> ';
            $this->datatables->where('schools.id', $school_id);
        }

        $this->datatables->edit_column('programs.id', $edit_options, 'programs.id');

        if (! empty($teams)) {
            $teams = '(' . implode(',', $teams) . ')';
            $this->datatables->where('team_id in', $teams, false);
        }

        $this->datatables->group_by('programs.id');

        return $this->datatables->generate();
    }


    /**
     * Datatable ajax function to return a program's pledges.
     * @param int $program_id id of program to get pledges
     * @param array $status_array_not_in array of status ids to disclude pledges
     * @return type
     */
    public function ajax_get_pledges($program_id, $status_array_not_in = null)
    {
        return $this->get_pledges($program_id, false, $status_array_not_in);
    }


    /**
     * Datatable ajax function to return a program's student participants
     */
    public function ajax_get_students($program_id, $status_id = null)
    {
        $this->load->library('datatables');

        $this->datatables->select('id, first_name, last_name, grade_name, class, fr_code, group_name, note_date')
            ->from('(select @program_id:=' . $program_id . ' p) parm , view_program_student_parts')
            ->edit_column(
                'id',
                '<a class="btn btn-primary btn-xs" data-user_id="$1" href="/admin/users/profile/$1">
					<i class="glyphicon glyphicon-eye-open"></i> View
					</a>
					<a class="btn btn-warning btn-xs" data-user_id="$1" href="/admin/users/edit/$1">
						<i class="glyphicon glyphicon-pencil"></i> Edit
					</a>
					<a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/payments/edit/' . $program_id . '/$1">
						<i class="glyphicon glyphicon-plus-sign"></i> Add $
					</a>
					<a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/pledges/new/$1">
						<i class="glyphicon glyphicon-plus-sign"></i> Pledge(s)
					</a>
					<a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/users/notes/$1">
						<i class="glyphicon glyphicon-plus-sign"></i>Note(s)
					</a>',
                'id'
            );

        if (! empty($status_id)) {
            $this->datatables->where(
                "(SELECT COUNT(*) from `pledges`
					WHERE `pledges`.`pledge_status_id` = {$status_id}
					AND `pledges`.`deleted` != 1
					AND `pledges`.`participant_user_id` = `view_program_student_parts`.`id`) >",
                0,
                false
            );
        }

        return $this->datatables->generate();
    }


    public function filter_by_program_id($participants, $program_id, $show_family_pledging, $current_participant_user_id)
    {
        $program_participants = [];
        foreach ($participants as $participant) {
            if ($participant->program_id == $program_id) {
                if (($show_family_pledging && $participant->family_pledging_enabled === '1') || ($participant->user_id == $current_participant_user_id)) {
                    array_push($program_participants, $participant);
                }
            }
        }

        return $program_participants;
    }


    public function get_class_pledge_o_meters($id, $classroom_goal = false)
    {
        $this->load->model('pledge_model');
        $this->load->model('program_pledge_settings_model');

        if ($classroom_goal) {
            $this->load->model('classroom_model');
            $program_id                      = $this->classroom_model->get_program_id($id);
            $classroom_name                  = $this->classroom_model->get_classroom_name_from_class_id($id);
            $classrooms_pledged_where_clause = [
        'classrooms.id' => $id,
        'pledges.deleted' => 0,
        'classrooms.deleted' => 0
      ];
        } else {
            $program_id                      = $id;
            $classrooms_pledged_where_clause = [
        'pledges.program_id' => $program_id,
        'pledges.deleted' => 0,
        'classrooms.deleted' => 0
      ];
        }

        $program              = $this->get($program_id);
        $unit_flat_conversion = (int)$program->unit_flat_conversion;
        $pledge_settings_obj  = $this->program_pledge_settings_model->get_pledge_settings($program_id);
        $flat_type_id         = Pledge_Model::FLAT_TYPE;

        if ((int)$pledge_settings_obj->flat_donate_only === 1) {
            $sum = 'sum(
                CASE pledges.pledge_type_id
                  WHEN '.$flat_type_id.' THEN pledges.amount
                  ELSE pledges.amount * '.$unit_flat_conversion.'
                END
              )';
        } else {
            $sum = 'sum(
        CASE pledges.pledge_type_id
          WHEN '.$flat_type_id.' THEN pledges.amount / '.$unit_flat_conversion.'
          ELSE pledges.amount
        END
      )';
        }

        $pledge_statuses = [
      Pledge_model::PAID_PENDING_STATUS,
      Pledge_model::PAID_STATUS,
      Pledge_model::CONFIRMED_STATUS,
    ];

        $classrooms_pledged = $this->db
      ->select(
          [
          'classrooms.id',
          'classrooms.name',
          $sum.' as total'
        ]
      )
      ->from('pledges')
      ->join('participants', 'participants.user_id = pledges.participant_user_id')
      ->join('classrooms', 'participants.classroom_id = classrooms.id')
      ->where(
          $classrooms_pledged_where_clause
      )
      ->where_in('pledges.pledge_status_id', $pledge_statuses)
      ->group_by('classrooms.id')
      ->order_by('total', 'desc')
      ->get()->result();

        if (!$classroom_goal) {
            $classroom_ids        = array_map(
                function ($classroom) {
                    return $classroom->id;
                },
                $classrooms_pledged
            );
            $classrooms_no_pledge = $this->db
        ->select(
            [
            'classrooms.id',
            'classrooms.name',
            0
          ]
        )
        ->from('classrooms')
        ->join('groups', 'groups.program_id = ' . $program_id . ' AND classrooms.group_id = groups.id')
        ->where(['classrooms.deleted' => 0])
        ->where_not_in('classrooms.id', $classroom_ids)
        ->order_by('classrooms.name')
        ->get()->result();
            $classrooms         = array_merge($classrooms_pledged, $classrooms_no_pledge);
        } else {
            $classroom_goal_data = (object)['id' => $id, 'name' => 'Classroom Goal', 'total' => $classroom_goal, 'color' => '#192461'];
            $classroom_name      = ($classroom_name) ? $classroom_name : 'Classroom Progress';
            $classrooms_pledged  = ($classrooms_pledged) ? $classrooms_pledged : [(object)['id' => $id, 'name' => $classroom_name, 'total' => 0]];
            $classrooms          = array_merge([$classroom_goal_data], $classrooms_pledged);
        }

        $ret                  = new stdClass();
        $ret->categories      = array_map(
            function ($classroom) {
                return $classroom->name;
            },
            $classrooms
        );
        $ret->series          = [];
        $ret->series[]        = new stdClass();
        $ret->series[0]->data = array_reduce(
            $classrooms,
            function ($data, $classroom) {
                if ($classroom->color) {
                    $data[] = ["y" => ceil(floatval($classroom->total)), "color" => $classroom->color];
                } else {
                    $data[] = ceil(floatval($classroom->total));
                }

                return $data;
            },
            []
        );

        return $ret;
    }


    public function get_participant_count_by_grade($program_id, $grade_id)
    {
        $count = $this->db->select('count(*) as count')
      ->from('classrooms')
      ->join('groups', 'classrooms.group_id = groups.id')
      ->join('participants', 'classrooms.id = participants.classroom_id', 'right')
      ->join('users', 'users.id = participants.user_id')
      ->where(
          [
          'classrooms.grade_id' => $grade_id,
          'groups.program_id' => $program_id,
          'users.deleted' => 0,
          'classrooms.deleted' => 0
        ]
      )->limit(1)
      ->get()->row()->count;
        return $count;
    }


    public function ajax_get_participants($program_id, $status_id = null)
    {
        $this->load->library('datatables');

        $this->datatables
      ->select(
          'id,
        first_name,
        last_name,
        grade_name,
        class,
        fr_code,
        note_date'
      )
      ->from('(select @program_id:=' . $program_id . ' p) parm , view_program_parts')
      ->edit_column(
          'id',
          '<a class="btn btn-primary btn-xs" data-user_id="$1" href="/admin/users/profile/$1">
          <i class="glyphicon glyphicon-eye-open"></i> View
        </a>
        <a class="btn btn-warning btn-xs" data-user_id="$1" href="/admin/users/edit/$1">
            <i class="glyphicon glyphicon-pencil"></i> Edit
        </a>
        <a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/payments/edit/'.$program_id.'/$1">
            <i class="glyphicon glyphicon-plus-sign"></i> Add $
        </a>
        <a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/pledges/new/$1">
            <i class="glyphicon glyphicon-plus-sign"></i> Pledge(s)
        </a>
        <a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/users/notes/$1">
            <i class="glyphicon glyphicon-plus-sign"></i>Note(s)
        </a>',
          'id'
      );

        if (!empty($status_id)) {
            $this->datatables->where(
                "(SELECT COUNT(*) from `pledges`
        WHERE `pledges`.`pledge_status_id` = {$status_id}
        AND `pledges`.`deleted` != 1
        AND `pledges`.`participant_user_id` = `view_program_parts`.`id`) >",
                0,
                false
            );
        }

        return $this->datatables->generate();
    }


    public function get_participants_no_units($program_id)
    {
        $missing_laps = [];

        if ($this->get_missing_laps($program_id) > 0) {
            $this->load->library('datatables');
            $this->load->helper('datatables_helper');
            $this->load->model('pledge_model');

            $missing_laps = $this->db->select(
                [
          'view_program_students.id',
          'first_name',
          'last_name',
          'grade_name',
          'class',
          'fr_code',
          'user_groups.name',
          'group_name',
          'laps',
          'view_program_students.program_id'
          ]
            )
      ->from('view_program_students')
      ->join('users_user_groups', 'users_user_groups.user_id = view_program_students.id')
      ->join('pledges', 'pledges.participant_user_id = view_program_students.id', 'left')
      ->join(
          'user_groups',
          'users_user_groups.group_id = user_groups.id AND user_groups.type = "External"'
      )
      ->where('view_program_students.program_id', $program_id)
      ->where('view_program_students.laps IS NULL')
      ->where('pledges.pledge_type_id', Pledge_Model::PPL_TYPE)
      ->where_in('pledge_status_id', [Pledge_Model::CONFIRMED_STATUS , Pledge_Model::PENDING_STATUS, Pledge_Model::PAID_PENDING_STATUS])
      ->where('pledges.deleted', '0')
      ->group_by('view_program_students.id')
      ->order_by('last_name', 'asc')->get()->result();
        }

        return $missing_laps;
    }


    /**
     * Datatable ajax function to return a program's student participants for
     * the public collect page
     */
    public function ajax_get_students_collect($program_id)
    {
        $program = $this->get($program_id);
        if (!$program) {
            return null;
        }

        $key = $program->collection_refer_key;
        $this->load->library('datatables');
        $this->datatables->select(
            'id,
                                    first_name,
                                    last_name,
                                    grade_name,
                                    class,
                                    classroom_id'
        )

                     ->from('(select @program_id:=' . $program_id . ' p) parm , view_program_student_parts')
                    ->edit_column(
                        'id',
                        '<a class="btn btn-success btn-xs" data-user_id="$1" href="/programs/collect_payment/'.$key.'/$1/$2">
                                            <i class="glyphicon glyphicon-plus-sign"></i> Add $
                                        </a>',
                        'classroom_id,id'
                    );
        return $this->datatables->generate();
    }


    /**
     * Datatable ajax function to return a program's teacher participants
     */
    public function ajax_get_teachers($program_id)
    {
        $this->load->library('datatables');

        $this->datatables->select(
            'id,
                                    first_name,
                                    last_name,
                                    grade_name as gr_name,
                                    class as clname,
                                    fr_code,
                                    group_name as grname'
        )
                     ->from('view_program_teacher_parts')
                     ->where('program_id', $program_id)
                    ->edit_column(
                        'id',
                        '<a class="btn btn-primary btn-xs" data-user_id="$1" href="/admin/users/profile/$1">
                                            <i class="glyphicon glyphicon-eye-open"></i> View
                                        </a>
                                        <a class="btn btn-warning btn-xs" data-user_id="$1" href="/admin/users/edit/$1">
                                            <i class="glyphicon glyphicon-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/payments/edit/'.$program_id.'/$1">
                                            <i class="glyphicon glyphicon-plus-sign"></i> Add $
                                        </a>
                                        <a class="btn btn-success btn-xs" data-user_id="$1" href="/admin/pledges/new/$1">
                                            <i class="glyphicon glyphicon-plus-sign"></i> Pledge(s)
                                        </a>',
                        'id'
                    );

        return $this->datatables->generate();
    }


    public function get_sponsors($program_id)
    {
        return $this->db->select(
            [
        'users.id',
        'users.first_name',
        'users.last_name',
        'users.email',
        'users.phone',
        'users.fr_code',
        'users.email_opt_out'
      ]
        )
    ->from('users')
    ->join('pledges', 'pledges.user_id = users.id')
    ->where('pledges.program_id', $program_id)
    ->where('users.deleted', 0)
    ->group_by('users.id')
    ->get()->result();
    }


    /**
     * Datatable ajax function to return a program's sponsors. 47994477
     */
    public function ajax_get_sponsors($program_id)
    {
        $this->load->library('datatables');

        $this->datatables->select(
            "users.id, users.first_name, users.last_name,
                                    users.email, mask_telephone(users.phone, '(###) ###-####') as phone,
                                    users.fr_code"
        )
                     ->from('users')
                     ->join('pledges', 'pledges.user_id = users.id')
                     ->where('pledges.program_id', $program_id)
                     ->where('users.deleted', 0)
                     ->group_by('users.id')
                    ->edit_column(
                        'users.id',
                        '<a class="btn btn-primary btn-xs" data-user_id="$1" href="/admin/users/view_pledgees/$1">
                                            <i class="glyphicon glyphicon-eye-open"></i> View
                                        </a>
                                        <a class="btn btn-warning btn-xs" data-user_id="$1" href="/admin/users/edit/$1">
                                            <i class="glyphicon glyphicon-pencil"></i> Edit
                                        </a>',
                        'users.id'
                    );

        return $this->datatables->generate();
    }


    /**
     * Datatable ajax function to return a program's parents. 47997279
     */
    public function ajax_get_parents($program_id)
    {
        $this->load->library('datatables');

        $this->datatables->select("users.id, users.first_name, users.last_name, users.email, mask_telephone(users.phone, '(###) ###-####') as phone, users.fr_code, groups.name")
                     ->from('users')
                     ->join('students_parents', 'students_parents.parent_id = users.id')
                     ->join('participants', 'participants.user_id = students_parents.student_id')
                     ->join('classrooms', 'participants.classroom_id = classrooms.id')
                     ->join('grades', 'classrooms.grade_id = grades.id')
                     ->join('groups', 'classrooms.group_id = groups.id')
                     ->where('groups.program_id', $program_id)
                     ->where('users.deleted', 0)
                     ->group_by('users.id')
                    ->edit_column(
                        'users.id',
                        ' <a class="btn btn-primary btn-xs" data-user_id="$1" href="/admin/users/view_pledgees/$1">
                                            <i class="glyphicon glyphicon-eye-open"></i> View
                                        </a>
                                        <a class="btn btn-warning btn-xs" data-user_id="$1" href="/admin/users/edit/$1">
                                            <i class="glyphicon glyphicon-pencil"></i> Edit
                                        </a>',
                        'users.id'
                    );

        return $this->datatables->generate();
    }


    /**
     * Datatable ajax function to return a program's payments. 42804625
     */
    public function ajax_get_payments($program_id)
    {
        $this->load->library('datatables');
        $this->load->helper('program_data_helper');

        $this->datatables->select('view_program_payments.id')
    ->select('CONVERT_TZ(created_at, "SYSTEM", schools.timezone) as created_at', false)
    ->select('view_program_payments.last_first_name')
    ->select('view_program_payments.type')
    ->select('view_program_payments.amount')
    ->select('view_program_payments.check_number')
    ->select('view_program_payments.note')
    ->select('view_program_payments.student_id')
    ->select('view_program_payments.program_id')
    ->from('view_program_payments')
    ->join('programs', 'program_id = programs.id')
    ->join('schools', 'programs.school_id = schools.id')
    ->where('program_id', $program_id)
    ->group_by('view_program_payments.id')
    ->edit_column(
        'id',
        '$1',
        '$this->build_payment_edit_delete_links(view_program_payments.id, view_program_payments.student_id, view_program_payments.program_id, view_program_payments.type)'
    );

        return $this->datatables->generate();
    }


    /*********************************************************************************************************************

    Datatable ajax function to return a program's classrooms

    *********************************************************************************************************************/


    public function ajax_get_classrooms($program_id)
    {
        $this->load->library('datatables');
        $this->load->library('booster_api');

        $unit_id   = $this->get_unit_id_from_program_id($program_id);
        $unit_data = $this->booster_api->get_unit_data($unit_id)->data;

        $this->datatables->select(
            'classrooms.id, grades.name as grade_name, classrooms.name,
        classrooms.number_of_participants,classrooms.team_leader_code,
        (
          SELECT COUNT(id) missing_laps
          FROM view_program_students
          WHERE program_id = '.$program_id.'
          AND classroom_id = classrooms.id
          AND laps is null
        ), classrooms.team_leader_code'
        )
       ->from('classrooms')
       ->join('grades', 'classrooms.grade_id = grades.id')
       ->join('groups', 'classrooms.group_id = groups.id')
       ->join('programs', 'groups.program_id = programs.id')
       ->where('programs.id', $program_id)
       ->where('classrooms.deleted', 0)
      ->edit_column(
          'classrooms.id',
          '<a class="btn btn-primary btn-mini" data-classroom_id="$1" href="/admin/classes/$1"><i class="glyphicon glyphicon-eye-open"></i> View</a>
           <a class="btn btn-warning btn-mini" id="edit_$1" data-action="edit_user" data-user_id="$1" href="/admin/classes/edit/$1"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
           <a class="btn btn-success btn-mini" data-user_id="$1" href="/admin/classes/add_participant/$1">
                                            <i class="glyphicon glyphicon-plus-sign"></i> Add Participant</a>
           <a class="btn btn-success btn-mini" data-user_id="$1" href="/admin/classes/add_laps/$1">
                                            <i class="glyphicon glyphicon-plus-sign"></i> Add ' . ucwords($unit_data->name_plural) . '</a>',
          'classrooms.id'
      );

        return $this->datatables->generate();
    }


    /**
     * This is a non-logged-in action, so we don't want to use real ID
     * in the URL.
     * @param string $key  Program's collection page referral key
     */
    public function ajax_get_class_collect($key)
    {
        $program = $this->get_by('collection_refer_key', $key);
        if (!$program) {
            return null;
        }

        $this->load->library('datatables');

        $this->datatables->select(
            'class_name,
                    grade_name,
                    SUM(envelope),
                    SUM(pledged),
                    SUM(collected),
                    SUM(outstanding),
                    classroom_id'
        )
             ->from('view_program_collection')
             ->where([ 'program_id' => $program->id, 'add_to_envelope' => 1 ])
             ->group_by('classroom_id')
            ->edit_column(
                'classroom_id',
                '<a class="btn btn-inverse btn-mini" data-classroom_id="$1"
                           href="/programs/collect_students/'.$key.'/$1">
                            <i class="glyphicon glyphicon-eye-open"></i> View Participants</a>
                        </a>',
                'classroom_id'
            );

        return $this->datatables->generate();
    }


    /**
    * Wrapper for Collection/Pledge Totals for Program Collections page build.
    * @param int $program_id
    * @return array of collection/pledge totals per class & totals for program
    */
    public function get_collect_pledge_totals_per_class($program_id)
    {
        return $this->get_collections($program_id);
    }


    /**
    * Wrapper for Collection/Pledge Totals for A Class's Collections page build.
    * @param int $program_id
    * @param int $class_id
    * @param string $key
    * @return array collection/pledge totals per participant & totals for class
    */
    public function get_collect_pledge_totals_for_class($program_id, $class_id, $key)
    {
        return $this->get_collections($program_id, $class_id, $key);
    }


    /**
     * create json for pledge graph from collection data
     * @param type $collections
     * @return type
     */
    public function get_program_pledge_and_payment_totals_from_collections($collections)
    {
        $ret                       = new stdClass();
        $pledges_and_payments      = new stdClass();
        $ret->pledges_and_payments = $pledges_and_payments;

        //create data for the chart
        $series         = [];
        $pending_pledge = $this->get_chart_obj(
            'Pending Pledges',
            [ (double)str_replace(',', '', $collections['pending_pledge']), null ],
            0,
            '#f7a35c'
        );
        array_push($series, $pending_pledge);
        $confirmed_pledge = $this->get_chart_obj(
            'Confirmed Pledges',
            [ (double)str_replace(',', '', $collections['confirmed_pledge']), null ],
            1,
            '#7cb5ec'
        );
        array_push($series, $confirmed_pledge);
        $payment_scheduled_pledge = $this->get_chart_obj(
            'Payment Scheduled Pledges',
            [ (double)str_replace(',', '', $collections['payment_scheduled_pledge']), null ],
            2,
            '#90ed7d'
        );
        array_push($series, $payment_scheduled_pledge);
        $paid_pledge = $this->get_chart_obj(
            'Paid Online Pledges',
            [ (double)str_replace(',', '', $collections['paid_pledge']), null ],
            3,
            '#29751a'
        );
        array_push($series, $paid_pledge);
        $cash_payments = $this->get_chart_obj(
            'Cash Payments',
            [ null, (double)str_replace(',', '', $collections['cash_total']) ],
            5,
            '#e4d354'
        );
        array_push($series, $cash_payments);
        $check_payments = $this->get_chart_obj(
            'Check Payments',
            [ null, (double)str_replace(',', '', $collections['check_total']) ],
            6,
            '#434348'
        );
        array_push($series, $check_payments);
        $scheduled_payments = $this->get_chart_obj(
            'Payments Scheduled',
            [ null, (double)str_replace(',', '', $collections['scheduled_total']) ],
            7,
            '#90ed7d'
        );
        array_push($series, $scheduled_payments);
        $credit_card_payments = $this->get_chart_obj(
            'Credit Card Payments',
            [ null, (double)str_replace(',', '', $collections['cc_total']) ],
            8,
            '#29751a'
        );
        array_push($series, $credit_card_payments);
        $ret->pledges_and_payments->series = $series;

        //set chart category labels
        $categories                            = ['Pledges', 'Payments'];
        $ret->pledges_and_payments->categories = $categories;
        $ret->non_pending_pledges              = str_replace(',', '', $collections['paid_pledge']) + str_replace(',', '', $collections['payment_scheduled_pledge']) + str_replace(',', '', $collections['confirmed_pledge']);
        $ret->all_pledges                      = str_replace(',', '', $ret->non_pending_pledges) + str_replace(',', '', $collections['pending_pledge']);

        return json_encode($ret);
    }


    /**
     * create chart data object for the series
     * @param type $name Name for data type
     * @param array $data array of values
     * @param type $legend_index index for chart legend
     * @return \stdClass
     */
    public function get_chart_obj($name, $data, $legend_index, $color)
    {
        $chart_obj              = new stdClass();
        $chart_obj->name        = $name;
        $chart_obj->data        = $data;
        $chart_obj->legendIndex = $legend_index;
        $chart_obj->color       = $color;
        return $chart_obj;
    }


    public function get_merchant_deposit_summary_data($ts_start, $ts_end)
    {
        $date_start          = date('Y-m-d', $ts_start);
        $date_end            = date('Y-m-d', $ts_end);
        $school_id_reporting = true;
        $this->load->library('braintree_payments');
        $school_id_objects = $this->db->select('schools.id')
                                  ->from('schools')
                                  ->join('programs', 'programs.school_id = schools.id')
                                  ->where('filter_merchant_report_by_school', 1)->get()->result();
        $school_ids        = [];
        foreach ($school_id_objects as $school_id_object) {
            $school_ids[] = $school_id_object->id;
        }

        $merchant               = $this->db->where('school_id', $school_ids[0])->get('braintree_merchants')->row();
        $braintree_query_result = $this->braintree_payments->get_merchant_transactions(
            [$merchant->braintree_merchant_id],
            $school_ids,
            $school_id_reporting,
            $date_start,
            $date_end
        );
        return $braintree_query_result;
    }


    public function validate_has_pledging_start($program_id)
    {
        $pledging_start = $this->db->select('pledging_start')->from('programs')->where('id', $program_id)->get()->row()->pledging_start;
        return ((boolean)$pledging_start);
    }


    /**
     * Collection and Pledge Totals used in Program Collections page build.
     * -also used in Collections for Class page build using optional params:
     *  $class_id/$key gives coll/pledge totals participant for single class
     * @param int $program_id
     * @param int $class_id (optional - requires $key also if used)
     * @param string $key (optional - requires $class_id also if used)
     * @return array of collection/pledge total results & totals/program or class
     */
    private function get_collections($program_id, $class_id=null, $key=null, $participants_only =false)
    {
        $this->load->driver('cache', ['adapter' => 'redis', 'backup' => 'file']);
        if (!$class_id && !$key && !$participants_only) {
            $collections['data'] = $this->cache->get('program_collections_by_class_' . $program_id);
            if (! $collections['data']) {
                $collections['data'] = $this->get_collections_per_class($program_id);
                $this->cache->save(
                    'program_collections_by_class_'.$program_id,
                    $collections['data'],
                    25
                ); //# of seconds to keep in cache before stale
            }

            $class_pledge_totals = $this->cache->get('class_pledge_totals_'.$program_id);
            if (! $class_pledge_totals) {
                $class_pledge_totals = $this->get_pledge_totals_per_or_for_class($program_id);
                $this->cache->save(
                    'class_pledge_totals_' . $program_id,
                    $class_pledge_totals,
                    300
                );
            }
        } elseif ($participants_only) { //for all participants in program (caching not needed
            $collections['data'] = $this->get_collections_for_participants($program_id);
            $class_pledge_totals = $this->get_pledge_totals_per_or_for_class(
                $program_id,
                null,
                $participants_only = true
            );
        } else {//for single class to get collection & pledge totals / participant
            $collections['data'] = $this->cache->get('class_collections_by_participant_'.$program_id.'_'.$class_id);
            if (! $collections['data']) {
                $collections['data'] = $this->get_collections_for_class($key, $class_id);
                $this->cache->save(
                    'class_collections_by_participant_' . $program_id . '_' . $class_id,
                    $collections['data'],
                    30
                );
            }

            $class_pledge_totals = $this->cache->get('class_pledge_totals_'.$program_id.'_'.$class_id);
            if (! $class_pledge_totals) {
                $class_pledge_totals = $this->get_pledge_totals_per_or_for_class(
                    $program_id,
                    $class_id
                );
                $this->cache->save(
                    'class_pledge_totals_' . $program_id . '_' . $class_id,
                    $class_pledge_totals,
                    90
                );
            }
        }

        foreach ($collections['data'] as $collection) {
            foreach ($class_pledge_totals as $key => $class_pledge_total) {
                if (!$class_id && !$participants_only) {
                    if ($class_pledge_total->class_id == $collection->class_id) {
                        $collection->confirmed_pledge         = $class_pledge_total->confirmed_pledge;
                        $collection->paid_pledge              = $class_pledge_total->paid_pledge;
                        $collection->pending_pledge           = $class_pledge_total->pending_pledge;
                        $collection->payment_scheduled_pledge = $class_pledge_total->payment_scheduled_pledge;

                        $collection->pledged   = $class_pledge_total->pledged;
                        $collection->scheduled = $class_pledge_total->scheduled;
                        unset($class_pledge_totals[$key]);
                        continue;
                    }
                } elseif ($class_id || $participants_only) {
                    if ($class_pledge_total->participant_user_id == $collection->student_id) {
                        $collection->confirmed_pledge         = $class_pledge_total->confirmed_pledge;
                        $collection->paid_pledge              = $class_pledge_total->paid_pledge;
                        $collection->pending_pledge           = $class_pledge_total->pending_pledge;
                        $collection->payment_scheduled_pledge = $class_pledge_total->payment_scheduled_pledge;

                        $collection->pledged   = $class_pledge_total->pledged;
                        $collection->scheduled = $class_pledge_total->scheduled;
                        unset($class_pledge_totals[$key]);
                        continue;
                    }
                }
            }

            if (empty($collection->confirmed_pledge)) {
                $collection->confirmed_pledge = number_format(0, 2);
            }

            if (empty($collection->paid_pledge)) {
                $collection->paid_pledge = number_format(0, 2);
            }

            if (empty($collection->pending_pledge)) {
                $collection->pending_pledge = number_format(0, 2);
            }

            if (empty($collection->payment_scheduled_pledge)) {
                $collection->payment_scheduled_pledge = number_format(0, 2);
            }

            if (empty($collection->pledged)) {
                $collection->pledged = number_format(0, 2);
            }

            if (empty($collection->scheduled)) {
                $collection->scheduled = number_format(0, 2);
            }

            $outstanding             = $collection->pledged - $collection->collected;
            $collection->outstanding = $outstanding >= 0 ? $outstanding : 0;
            if ($collection->scheduled) {
                $collection->outstanding        -= $collection->scheduled;
                $collections['scheduled_total'] += $collection->scheduled;
                $collection->scheduled           = number_format($collection->scheduled, 2, '.', ',');
            }

            $collections['confirmed_pledge']         += $collection->confirmed_pledge;
            $collections['paid_pledge']              += $collection->paid_pledge;
            $collections['pending_pledge']           += $collection->pending_pledge;
            $collections['payment_scheduled_pledge'] += $collection->payment_scheduled_pledge;

            $collections['pledged_total']     += $collection->pledged;
            $collections['collected_total']   += $collection->collected;
            $collections['outstanding_total'] += $collection->outstanding;
            $collections['cc_total']          += $collection->cc;
            $collections['cash_total']        += $collection->cash;
            $collections['check_total']       += $collection->check;
            $collections['cmg_total']         += $collection->cmg;
            $collections['today_total']       += $collection->today;

            //format vals
            $collection->pledged = number_format($collection->pledged, 2, '.', ',');
            if ($collection->outstanding <= 0) {
                $collection->outstanding = number_format(0, 2);
            }

            $collection->outstanding = number_format($collection->outstanding, 2, '.', ',');
            $collection->collected   = number_format($collection->collected, 2, '.', ',');
            $collection->cc          = number_format($collection->cc, 2, '.', ',');
            $collection->cash        = number_format($collection->cash, 2, '.', ',');
            $collection->check       = number_format($collection->check, 2, '.', ',');
            $collection->cmg         = number_format($collection->cmg, 2, '.', ',');
            $collection->today       = number_format($collection->today, 2, '.', ',');
        }

        //format totals
        $collections['confirmed_pledge']         = number_format($collections['confirmed_pledge'], 2, '.', ',');
        $collections['paid_pledge']              = number_format($collections['paid_pledge'], 2, '.', ',');
        $collections['pending_pledge']           = number_format($collections['pending_pledge'], 2, '.', ',');
        $collections['payment_scheduled_pledge'] = number_format($collections['payment_scheduled_pledge'], 2, '.', ',');

        $collections['pledged_total']     = number_format($collections['pledged_total'], 2, '.', ',');
        $collections['collected_total']   = number_format($collections['collected_total'], 2, '.', ',');
        $collections['outstanding_total'] = number_format($collections['outstanding_total'], 2, '.', ',');
        if ($collections['outstanding_total'] <= 0) {
            $collections['outstanding_total'] = number_format(0, 2);
        }

        $collections['cc_total']        = number_format($collections['cc_total'], 2, '.', ',');
        $collections['cash_total']      = number_format($collections['cash_total'], 2, '.', ',');
        $collections['scheduled_total'] = number_format($collections['scheduled_total'], 2, '.', ',');
        $collections['check_total']     = number_format($collections['check_total'], 2, '.', ',');
        $collections['cmg_total']       = number_format($collections['cmg_total'], 2, '.', ',');
        $collections['today_total']     = number_format($collections['today_total'], 2, '.', ',');
        return $collections;
    }


    /**
    * Collection Totals for above method, to use in Collections page build.
    * @param int $program_id
    * @param int $classroom_id (optional - not used now but maybe useful later)
    */ //was get_class_collect_totals


    public function get_collections_per_class($program_id, $classroom_id=null)
    {
        $dirty_collections    = $this->_get_dirty_collections($program_id, $classroom_id);
        $collections          = $this->_filter_deleted_collections($dirty_collections);
        $collections_by_class = $this->_reduce_collections_by_class($collections);
        return $collections_by_class;
    }


    private function _reduce_collections_by_class($collections)
    {
        $today            = date('Y-m-d', time());
        $collection_types = ["cash", "cc", "check", "cmg"];
        return array_reduce(
            $collections,
            function ($collections_by_class, $collection) use ($today, $collection_types) {
                //initialize class collection object
                if (! $collections_by_class[$collection->classroom_id]) {
                    $collections_by_class[$collection->classroom_id]           = new stdClass();
                    $collections_by_class[$collection->classroom_id]->class_id = $collection->class_id;
                    $collections_by_class[$collection->classroom_id]->class    = $collection->class;
                    $collections_by_class[$collection->classroom_id]->grade    = $collection->grade;
                    foreach ($collection_types as $collection_type) {
                        if (!$collections_by_class[$collection->classroom_id]->$collection_type > 0) {
                            //@codingStandardsIgnoreLine
                            $collections_by_class[$collection->classroom_id]->$collection_type = 0;
                        }
                    }
                }

                //sum collected
                $collections_by_class[$collection->classroom_id]->collected += $collection->split_amount;

                //sum amounts by type
                $type                                                    = $collection->type ?: 'cc';
                $collections_by_class[$collection->classroom_id]->$type += $collection->split_amount;

                //sum collection for today
                $date_match = preg_match("/$today/", $collection->created_at);
                if ($date_match &&
          $collection->manual_classroom_id == $collection->classroom_id &&
          in_array($collection->type, ['cash', 'check']) &&
          $collection->add_to_envelope == true) {
                    $collections_by_class[$collection->classroom_id]->today += $collection->payment_amount;
                }

                return $collections_by_class;
            },
            []
        );
    }


    private function _filter_deleted_collections($dirty_collections)
    {
        return array_filter(
            $dirty_collections,
            function ($collection) {
                if ($collection->pay_deleted == true ||
          $collection->split_deleted == true ||
          $collection->manual_deleted == true ||
          $collection->online_deleted == true) {
                    return false;
                }

                return true;
            }
        );
    }


    /**
    * The collections are dirty because they include deleted
    **/
    private function _get_dirty_collections($program_id, $classroom_id=null)
    {
        $this->db->select(
            'classrooms.id AS class_id,
        classrooms.name as class,
        classrooms.id as classroom_id,
        grades.name as grade,
        split.amount as split_amount,
        payments.amount as payment_amount,
        payments.created_at,
        manual_payments.type,
        manual_payments.classroom_id as manual_classroom_id,
        add_to_envelope,
        split.deleted as split_deleted,
        payments.deleted as pay_deleted,
        online_payments.deleted as online_deleted,
        manual_payments.deleted as manual_deleted',
            false
        )
    ->from('classrooms')
    ->join('grades', 'classrooms.grade_id = grades.id')
    ->join('groups', 'classrooms.group_id = groups.id')
    ->join('participants', 'participants.classroom_id = classrooms.id')
    ->join('payments_students AS split', 'split.student_id = participants.user_id', 'left')
    ->join('payments', 'payments.id = split.payment_id', 'left')
    ->join('manual_payments', 'manual_payments.payment_id = payments.id', 'left')
    ->join('online_payments', 'online_payments.payment_id = payments.id', 'left')
    ->where('groups.program_id', $program_id);

        // loop and remove deleted results
        if ($classroom_id) {
            $this->db->where('classrooms.id', $classroom_id);
        }

        $dirty_collections = $this->db->order_by('grades.id, class')->get()->result();
        return $dirty_collections;
    }


    /**
    * Pledge Totals for above method, to use in Program Collections page build.
    *   - also used in Collections for Class page build using optional param:
    *     $classroom_id allows for pledge totals by participant for single class
    * @param int $program_id
    * @param int $classroom_id (optional)
    */
    public function get_pledge_totals_per_or_for_class($program_id, $classroom_id=null, $participants_only =false)
    {
        $this->load->model('pledge_model');
        $statuses = Pledge_model::get_pledged_statuses();

        $ret = $this->db->query(
            'SELECT
      classroom_id AS class_id,
      participant_user_id AS participant_user_id,
      sum(
        CASE pledge_status_id
          WHEN 2 #confirmed
            THEN total_est
            ELSE 0
        END
      ) AS confirmed_pledge,
      sum(
        CASE pledge_status_id
          WHEN 3 #paid
            THEN total_est
            ELSE 0
        END
      ) AS paid_pledge,
      sum(
        CASE pledge_status_id
          WHEN 4 #pending
            THEN total_est
            ELSE 0
        END
      ) AS pending_pledge,
      sum(
        CASE pledge_status_id
          WHEN 8 #payment scheduled
            THEN total_est
            ELSE 0
        END
      ) AS payment_scheduled_pledge,
      SUM(total_est) AS pledged,
      SUM(CASE WHEN pledge_status_id = '.Pledge_Model::PAID_PENDING_STATUS.' THEN total_est ELSE 0 END) AS scheduled
      FROM view_program_pledges
      WHERE (pledge_status_id IN( ' . implode(",", $statuses) . ' ))
      AND program_id = ' . $program_id .
      ($classroom_id ? ' AND classroom_id = ' . $classroom_id : '') . '
      GROUP BY program_id' .
        (! $participants_only ? ', classroom_id' : '') .
        ($classroom_id || $participants_only ? ', participant_user_id' : ''),
            false
        )->result();

        return $ret;
    }


    /**
    * Collection Totals for above method, to use in Collections reminder Letter.
    * @param int $program_id
    * @param int $classroom_id (optional - not used now but maybe useful later)
    */ //was get_class_collect_totals


    public function get_collections_for_participants($program_id)
    {
        $this->load->model('pledge_model');

        $collections = $this->db->query(
            'SELECT
        CONCAT(IFNULL(CONCAT(users.first_name, " "), ""), users.last_name) AS participant_name,
        users.fr_code,
        users.block_collection_reminder,
        users.laps,
        p.user_id AS student_id,
        p.id AS participant_user_id,
        classrooms.id AS classroom_id,
        classrooms.NAME AS class,
        grades.NAME AS grade_name,
        split.amount as split_amount,
        payments.amount as payment_amount,
        payments.created_at,
        manual_payments.type,
        manual_payments.classroom_id as manual_classroom_id,
        add_to_envelope,
        split.deleted as split_deleted,
        payments.deleted as pay_deleted,
        online_payments.deleted as online_deleted,
        manual_payments.deleted as manual_deleted
        FROM classrooms
        JOIN grades ON classrooms.grade_id = grades.id
        JOIN groups ON classrooms.group_id = groups.id
        JOIN participants AS p ON p.classroom_id = classrooms.id
        JOIN users ON users.id = p.user_id
        LEFT JOIN payments_students AS split ON split.student_id = p.user_id
        LEFT JOIN payments ON payments.id = split.payment_id
        LEFT JOIN manual_payments  ON manual_payments.payment_id = payments.id
        LEFT JOIN online_payments  ON online_payments.payment_id = payments.id
        WHERE groups.program_id = ' . $program_id . '
        AND users.last_name IS NOT NULL
        ORDER BY grades.id, class,
        SUBSTR(LTRIM(participant_name), LOCATE(" ",LTRIM(participant_name)))
        '
        )->result();

        // loop and remove deleted results
        $collections_user           = [];
        $collections_delete_cleaned = [];
        foreach ($collections as $collect) {
            if ($collect->pay_deleted == true || $collect->split_deleted == true ||
        $collect->manual_deleted == true || $collect->online_deleted == true) {
                continue;
            }

            $collections_user[$collect->student_id]["participant_name"]          = $collect->participant_name;
            $collections_user[$collect->student_id]["fr_code"]                   = $collect->fr_code;
            $collections_user[$collect->student_id]["block_collection_reminder"] = $collect->block_collection_reminder;
            $collections_user[$collect->student_id]["laps"]                      = $collect->laps;
            $collections_user[$collect->student_id]["student_id"]                = $collect->student_id;
            $collections_user[$collect->student_id]["participant_user_id"]       = $collect->participant_user_id;
            $collections_user[$collect->student_id]["class"]                     = $collect->class;
            $collections_user[$collect->student_id]["grade_name"]                = $collect->grade_name;
            $collections_user[$collect->student_id]["collected"]                += $collect->split_amount;
            $collection_types                                                    = ["cash", "cc", "check", "cmg"];
            foreach ($collection_types as $t) {
                if (!$collections_user[$collect->student_id][$t] > 0) {
                    $collections_user[$collect->student_id][$t] = 0;
                }
            }

            switch ($collect->type) {
        case 'cash':
          $collections_user[$collect->student_id]["cash"] += $collect->split_amount;
          break;
        case 'cc':
          $collections_user[$collect->student_id]["cc"] += $collect->split_amount;
          break;
        case 'check':
          $collections_user[$collect->student_id]["check"] += $collect->split_amount;
          break;
        case 'cmg':
          $collections_user[$collect->student_id]["cmg"] += $collect->split_amount;
          break;
        default:
          break;
      }

            $now        = date('Y-m-d', time());
            $date_match = preg_match("/$now/", $collect_created_at);
            if ($date_match &&
        $collect->manual_classroom_id == $collect->student_id &&
        ($collect->type == "cash" || $collect->type == "check")
        && $collect->add_to_envelope == true) {
                $collections_user[$collect->student_id]["today"] += $collect->split_amount;
            }

            // got a sum of collections one time for this student because
            // it was doing a sub select of total_est and the query fails
            // if more than 1 result is present - this just sums it one time
            if (empty($collections_user[$collect->student_id]["scheduled"])) {
                $collections_user[$collect->student_id]["scheduled"] = 0;
                $scheduled                                           = $this->db->select("SUM(total_est) as total")->from("view_program_pledges")
          ->where("participant_user_id", $collect->student_id)
          ->where("pledge_status_id", Pledge_model::PAID_PENDING_STATUS)
          ->get()->row();
                $scheduled_total                                     = !empty($scheduled->total) ? (float)$scheduled->total : 0;
                $collections_user[$collect->student_id]["scheduled"] = $scheduled_total;
            }
        }

        // return to object for callers
        $collections_by_user = [];
        foreach ($collections_user as $collection_user) {
            $collections_by_user[] = (object)$collection_user;
        }

        return $collections_by_user;
    }


    /**
    * Collection Totals for above method, to use in Collections page build.
    * @param int $program_id
    * @param int $classroom_id (optional - not used now but maybe useful later)
    */ //was get_class_collect_students


    public function get_collections_for_class($key, $classroom_id)
    {
        $program = $this->get_by('collection_refer_key', $key);
        if (!$program) {
            return null;
        }

        $results = $this->db->query(
            '
      SELECT
        p.user_id AS student_id,
        CONCAT(IFNULL(concat(users.first_name, " "), ""), users.last_name) AS student_first_last,
        p.classroom_id as class_id,
        IFNULL(SUM(vpp.split_amount),0) AS collected,
        IFNULL(SUM(IF(("CC" = vpp.type),vpp.split_amount,0.00)),0) AS cc,
        IFNULL(SUM(IF(("CASH" = vpp.type),vpp.split_amount,0.00)),0) AS cash,
        IFNULL(SUM(IF(("CHECK" = vpp.type),vpp.split_amount,0.00)),0) AS `check`,
        IFNULL(SUM(IF(("CMG" = vpp.type),vpp.split_amount,0.00)),0) AS `cmg`,
        SUM(IF(CURDATE() = DATE(vpp.entered_date) AND vpp.classroom_id = p.classroom_id  AND  vpp.type != "CC" AND vpp.add_to_envelope = 1, vpp.amount, 0.00)) AS today
       FROM participants as p
       JOIN users ON users.id = p.user_id
       LEFT JOIN view_program_payments AS vpp
        ON vpp.program_id = ' . $program->id . '
        AND vpp.student_id = p.user_id
       WHERE p.classroom_id = ' . $classroom_id . '
       AND users.last_name IS NOT NULL
       AND users.deleted != 1
       GROUP BY p.user_id
       ORDER by users.last_name'
        )->result();

        return $results;
    }


    /**
     * This is a non-logged-in action, so we don't want to use real ID
     * in the URL.
     * @param string $key  Program's collection page referral key
     * @param int $classroom_id
     */
    public function ajax_get_class_collect_students($key, $classroom_id)
    {
        $program = $this->get_by('collection_refer_key', $key);
        if (!$program) {
            return null;
        }

        $this->load->library('datatables');

        $this->datatables->select(
            'CONCAT(users.first_name, " ", users.last_name) AS student_name,
               SUM(envelope) AS envelope,
               SUM(pledged) AS pledged,
               SUM(collected) AS collected,
               SUM(outstanding) AS outstanding,
               participant_user_id',
            false /* prevent CI from mangling query */
        )
       ->from('view_program_collection')
       ->join('users', 'users.id = participant_user_id')
       ->where('classroom_id', $classroom_id)
          ->where('users.first_name !=', '')
          ->where('users.last_name !=', '')
             ->where('add_to_envelope', 1)
       ->group_by('participant_user_id')
      ->edit_column(
          'participant_user_id',
          '<a class="btn btn-success btn-mini" data-student_id="$1"
                 href="/programs/collect_payment/'.$key.'/'.$classroom_id.'/$1">
                     <i class="glyphicon glyphicon-plus-sign"></i> Add $
                 </a>',
          'participant_user_id'
      );

        return $this->datatables->generate();
    }


    /**
    * Get program id for classrooms
    *
    * @param int $class_id
    * @return int program_id
    */
    public function get_program_for_class($class_id)
    {
        return $this->db->select('programs.*')
      ->from('programs')
      ->join('groups', 'programs.id = groups.program_id')
      ->join('classrooms', 'classrooms.group_id = groups.id')
      ->where('classrooms.id', $class_id)->get()->row();
    }


    /**
      * Get all classrooms in given program, with participant counts.
      *
      * @param int $program_id
      * @return array
      */
    public function get_classrooms_in_program($program_id)
    {
        return $this->db->select('COUNT(*) AS count, classrooms.group_id, classrooms.id, grades.name AS grade_name, classrooms.name')
                    ->from('participants')
                    ->join('classrooms', 'classrooms.id = participants.classroom_id')
                    ->join('grades', 'classrooms.grade_id = grades.id')
                    ->join('groups', 'groups.id = classrooms.group_id')
                    ->where('groups.program_id', $program_id)
                    ->where('classrooms.deleted', 0)
                    ->group_by('classrooms.id')
                    ->order_by('group_id')
                    ->order_by('classrooms.grade_id')
                    ->order_by('classrooms.name')
                    ->get()
                    ->result();
    }


    /**
     * Get all classrooms in given program, WITHOUT participant counts.
     *
     * @param int $program_id
     * @return array
     */
    public function get_classrooms_without_counts_in_program($program_id)
    {
        return $this->db->select(
            ['classrooms.group_id',
      'classrooms.id',
      'grades.name AS grade_name',
      'classrooms.name',
      'classrooms.team_leader_code',
      'classrooms.team_member_code',
      'programs.registration_code']
        )
    ->from('classrooms')
    ->join('grades', 'classrooms.grade_id = grades.id')
    ->join('groups', 'groups.id = classrooms.group_id')
    ->join('programs', 'programs.id = groups.program_id')
    ->where('groups.program_id', $program_id)
    ->where('classrooms.deleted', 0)
    ->group_by('classrooms.id')
    ->order_by('group_id')
    ->order_by('classrooms.grade_id')
    ->order_by('classrooms.name')
    ->get()
    ->result();
    }


    public function get_classrooms_with_school_abbreviation($program_id)
    {
        return $this->db->select('classrooms.group_id, classrooms.id, grades.name AS grade_name, classrooms.name, classrooms.team_leader_code, classrooms.team_member_code, schools.abbreviation')
    ->from('classrooms')
    ->join('grades', 'classrooms.grade_id = grades.id')
    ->join('groups', 'groups.id = classrooms.group_id')
    ->join('programs', 'groups.program_id = programs.id')
    ->join('schools', 'schools.id = programs.school_id')
    ->where('groups.program_id', $program_id)
    ->where('classrooms.deleted', 0)
    ->group_by('classrooms.id')
    ->order_by('group_id')
    ->order_by('classrooms.grade_id')
    ->order_by('classrooms.name')
    ->get()
    ->result();
    }


    /**
     * Get the classroom for a user in given program
     *
     * @param int $program_id
     * @return array
     */
    public function get_classroom_for_user_in_program($user_id, $program_id)
    {
        return $this->db->select('classrooms.id, classrooms.name')
    ->from('participants')
    ->join('classrooms', 'classrooms.id = participants.classroom_id')
    ->join('groups', 'groups.id = classrooms.group_id')
    ->where('groups.program_id', $program_id)
    ->where('participants.user_id', $user_id)
    ->get()
    ->result();
    }


    public function get_classrooms_dropdown_in_program($program_id)
    {
        $classrooms = $this->get_classrooms_without_counts_in_program($program_id);
        foreach ($classrooms as $c) {
            $prepped[$c->id] = ($c->grade_name == "Other") ? "{$c->name}" : "{$c->grade_name} {$c->name}";
        }

        return $prepped;
    }


    public function update_classroom($user_id, $orig_classroom_id, $classroom_id)
    {
        if ($orig_classroom_id == 'default') {
            $orig_classroom_id = 0;
        }

        $this->db->set('classroom_id', $classroom_id);
        $this->db->where('classroom_id', $orig_classroom_id);
        $this->db->where('user_id', $user_id);
        return $this->db->update('participants');
    }


    public function has_participant_in_program($participants, $program_id, $my_user_id)
    {
        foreach ($participants as $participant) {
            if ($participant->program_id == $program_id && $participant->user_id != $my_user_id) {
                $is_teacher = $this->user_group_model->has_user_group($participant->user_id, User_group_model::TEACHERS);
                if (! $is_teacher) {
                    return true;
                }
            }
        }

        return false;
    }


    /**
     * Get all students participating in given program.
     *
     * @param int $program_id
     * @param int $class_id (optional) Restrict to this classroom
     * @return array
     */
    public function get_students_in_program($program_id, $class_id=null)
    {
        $query = $this->db->select(
            'view_program_students.id, first_name,
          last_name, fr_code, classroom_id, grade_id, grade_name, class,
          user_group_id, user_groups.name as user_group_name,
          schools.abbreviation'
        )
        ->from('view_program_students')
        ->join('programs', 'programs.id = program_id')
        ->join('schools', 'schools.id = programs.school_id')
        ->join('user_groups', 'user_group_id = user_groups.id')
        ->where('program_id', $program_id);

        if ($class_id) {
            $query->where('classroom_id', $class_id);
        }

        return $query->order_by('group_id')
    ->order_by('grade_id')
    ->order_by('grade_name')
    ->order_by('classroom_id')
    ->order_by('user_groups.name', 'desc')
    ->order_by('last_name')
    ->order_by('first_name')
    ->get()
    ->result();
    }


    /**
     * Gets teachers in a given program
     * @param type $program_id
     */
    public function get_teachers_in_program($program_id)
    {
        $query = $this->db->select('u.id as user_id, u.first_name, u.last_name, c.name')
                        ->from('users as u')
                        ->join('participants as p', 'p.user_id = u.id')
                        ->join('users_user_groups as uug', 'uug.user_id = u.id and uug.group_id = 7')
                        ->join('classrooms as c', 'c.id = p.classroom_id')
                        ->join('groups as g', 'g.id = c.group_id')
                        ->where('g.program_id', $program_id);
        return $query->get()->result();
    }


    public function is_user_a_teacher_in_program($program_id, $user_id)
    {
        $this->load->model('user_model');

        $result       = false;
        $participants = $this->user_model->get_participants_for_parent($user_id, $program_id);
        $teachers     = $this->get_teachers_in_program($program_id);

        if (!empty($teachers) && !empty($participants)) {
            $my_participant_ids = [];

            foreach ($participants as $participant) {
                $my_participant_ids[] = $participant->user_id;
            }

            foreach ($teachers as $teacher) {
                if (in_array($teacher->user_id, $my_participant_ids)) {
                    $result = true;
                    break;
                }
            }
        }

        return $result;
    }


    /**
     * Gets teachers in program with respective pledge totals
     * @param $program_id - ID of program
     */
    public function get_teachers_with_pledge_totals($program_id)
    {
        $this->load->model('user_group_model');
        $this->load->model('pledge_model');

        $this->db->select(
            '
        CONCAT(IFNULL(concat(teachers.first_name, " "), ""), teachers.last_name) AS teacher_first_last,
        parents.email,
        (
          SELECT TRUNCATE(SUM(p.total_est), 2)
          FROM view_program_pledges p
          WHERE participant_user_id = teachers.id
          AND
              (p.pledge_status_id = ' . Pledge_model::CONFIRMED_STATUS . ' OR
               p.pledge_status_id = ' . Pledge_model::PAID_STATUS .  ' OR
               p.pledge_status_id = ' . Pledge_model::PAID_PENDING_STATUS . ' OR
               p.pledge_status_id = ' . Pledge_model::PENDING_STATUS . ')
        ) as amount',
            false
        );
        $this->db->from('view_program_students as teachers');
        $this->db->join('students_parents as sp', 'sp.student_id = teachers.id', 'left');
        $this->db->join('users as parents', 'parents.id = sp.parent_id', 'left');
        $this->db->where('teachers.program_id', $program_id);
        $this->db->where('teachers.user_group_id', User_group_model::TEACHERS);
        $this->db->group_by("teachers.id");
        $this->db->order_by('teachers.first_name ASC, teachers.last_name ASC');
        return $this->db->get()->result_array();
    }


    /**
     * finds the number of participants for a given program that have pledges
     * @param type $program_id
     * @return num number of participants with pledges for a program
     */
    private function _participant_num_with_pledges($program_id)
    {
        $num_with_pledges = $this->db->distinct('participant_user_id')
    ->from('view_program_pledges')
    ->where_in('pledge_status_id', Pledge_model::get_pledged_statuses())
    ->where('program_id', $program_id)
    ->group_by('participant_user_id')
    ->count_all_results();
        return $num_with_pledges;
    }


    /**
     * Returns school-based stats based on participants
     *
     * @param type $program_id
     * @return \stdClass
     */
    public function get_program_school_stats($program_id)
    {
        $participant_stats                   = new stdClass();
        $participant_stats->num_participants = $this->db->select('1')
      ->from('view_program_students')
      ->where('program_id', $program_id)
      ->count_all_results();

        $participant_stats->num_logged_in = $this->db->select('1')
      ->from('view_program_students')
      ->where('program_id', $program_id)
      ->where('login_status !=', 'NULL')
      ->count_all_results();

        $participant_stats->num_with_pledges = $this->_participant_num_with_pledges($program_id);

        if (!empty($participant_stats->num_participants)) {
            $participant_stats->pct_logged_in    = ($participant_stats->num_logged_in / $participant_stats->num_participants) * 100;
            $participant_stats->pct_with_pledges = ($participant_stats->num_with_pledges / $participant_stats->num_participants) * 100;
        }

        $this->db->select_sum('laps')
      ->from('view_program_students')
      ->where('program_id', $program_id)
      ->where('laps >', '0');
        $query                         = $this->db->get();
        $participant_stats->total_laps = $query->row()->laps;

        $participant_stats->num_with_laps = $this->db->select('1')
      ->from('view_program_students')
      ->where('program_id', $program_id)
      ->where('laps >', '0')
      ->count_all_results();

        $this->db->select_avg('laps')
      ->from('view_program_students')
      ->where('program_id', $program_id)
      ->where('laps >', '0');
        $query                       = $this->db->get();
        $participant_stats->avg_laps = $query->row()->laps;

        $participant_stats->num_students = $this->db->select('1')
      ->from('(select @program_id:=' . $program_id . ' p) parm , view_program_student_parts')
      ->count_all_results();

        $participant_stats->num_students_logged_in = $this->db->select('1')
      ->from('(select @program_id:=' . $program_id . ' p) parm , view_program_student_parts')
      ->where('login_status !=', 'NULL')
      ->count_all_results();

        $this->load->model('pledge_model');
        $row = $this->db->query(
            '
      SELECT COUNT(*) AS `num_students_with_pledges`
      FROM (
        SELECT
          pledges.participant_user_id
        FROM pledges
          JOIN users
            ON users.id = pledges.participant_user_id
          LEFT JOIN users_user_groups
            ON users_user_groups.user_id = pledges.participant_user_id
        WHERE NOT(pledges.deleted)
        AND pledges.program_id = ' . $program_id . '
        AND pledges.pledge_status_id IN(' . Pledge_model::CONFIRMED_STATUS . ',' .
      Pledge_model::PAID_STATUS . ',' . Pledge_model::PAID_PENDING_STATUS .
      ',' . Pledge_model::PENDING_STATUS . ')
        AND users_user_groups.group_id = ' . User_group_model::STUDENTS . '
        GROUP BY pledges.participant_user_id
      ) distinct_students'
        )->row_array();

        $participant_stats->num_students_with_pledges = $row['num_students_with_pledges'];

        if (!empty($participant_stats->num_students)) {
            $participant_stats->pct_students_logged_in    = ($participant_stats->num_students_logged_in / $participant_stats->num_students) * 100;
            $participant_stats->pct_students_with_pledges = ($participant_stats->num_students_with_pledges / $participant_stats->num_students) * 100;
        }

        return $participant_stats;
    }


    /**
     * Get all students participating in given program,
     * as well as "anonymous" labels/codes.
     *
     * @param int $program_id
     * @param int $class_id (optional) Restrict to this classroom
     * @return array
     */
    //@codingStandardsIgnoreLine
    public function get_students_in_program_for_labels($program_id, $class_id=null)
    {
        $class_cond = $class_id ? 'AND classroom_id = ?' : '';

        return $this->db->query(
            "
        SELECT users.id, first_name, last_name, fr_code, laps,
          grades.name AS grade_name,
          classroom_id,
          classrooms.name AS class,
          classrooms.grade_id,
          classrooms.group_id,
          groups.program_id,
          groups.name AS group_name,
          schools.abbreviation
        FROM participants AS Labels
          JOIN users        ON users.id = Labels.user_id
          JOIN classrooms   ON classrooms.id = classroom_id
          JOIN groups       ON groups.id = classrooms.group_id
          JOIN grades       ON classrooms.grade_id = grades.id
          JOIN programs     ON programs.id = program_id
          JOIN schools      ON schools.id = programs.school_id
        WHERE NOT users.deleted
          AND program_id = ?
          $class_cond
        ORDER BY group_id, grade_id, grades.name, classroom_id,
          user_id <> classrooms.teacher_id,          -- Put teacher first
          last_name IS NULL AND first_name IS NULL,  -- Put anons last
          last_name, first_name",
            func_get_args()
        )
    ->result();
    }


    public function get_program_owner($program_id)
    {
        $program_owner = $this->db->query(
            "SELECT
        `programs`.`owner_id` as user_id,
        `users`.`first_name`,
        `users`.`last_name`,
        `users`.`email`
        FROM `programs`
        JOIN `users` ON `users`.`id` = `programs`.`owner_id`
        AND `programs`.`id` =  '{$program_id}'"
        )->row();
        return $program_owner;
    }


    /**
     * Simple getter for collection_refer_key of a program
     * @param type $program_id id of program
     * @return type collection_refer_key
     */
    public function get_collection_refer_key($program_id)
    {
        $query = $this->db->select('collection_refer_key')
            ->from($this->_table)
            ->where('id', $program_id)->get()->result();
        return $query[0]->collection_refer_key;
    }


    public function basic_program($program_id)
    {
        $program = $this->db->query(
            "SELECT `programs`.*,
        `schools`.`id` as school_id,
        `schools`.`name` as school_name,
        `user_groups`.`name` as team_name,
        CONCAT(`users`.`first_name`, ' ', `users`.`last_name`
                ) as owner,
        unit_id
        FROM `programs`
        JOIN `schools` ON `schools`.`id` = `programs`.`school_id`
        JOIN `user_groups` ON `user_groups`.`id` = `programs`.`team_id`
        JOIN `users` ON `users`.`id` = `programs`.`owner_id`
        AND `programs`.`id` =  '{$program_id}'"
        )->row();
        $this->load->model('group_model');
        $only_groups     = true;
        $program->groups = $this->group_model->groups_for_program($program_id, $only_groups);

        return $program;
    }


    public function full_program($program_id, $get_pledges = false)
    {
        $this->load->model('pledge_model');
        $this->load->model('microsite_model');

        $program = $this->basic_program($program_id);

        $program->microsite = $this->microsite_model->get_for_display($program_id);

        $program->pledge_periods = $this->get_periods($program_id, true);

        if ($get_pledges) {
            $program->pledges = $this->pledge_model->get_page(10000, 0, null, null, $program_id);
        }

        return $program;
    }


    /**
     * Inserts new programs
     *
     * @param [type] $programs
     * @param [type] $program_type_id
     * @return Array
     */
    public function insert_new_only($programs, $program_type_id = null)
    {
        $ids = [];
        foreach ($programs as $row) {
            $exists = $this->get_by('salesforce_id', $row->Id);

            if (empty($exists)) {
                $row = $this->translate_sf_tk($row);

                $next_id = $this->get_next_id();
                $hex     = sha1($next_id . '~' . rand());
                // Take 6 bytes of hash, base64-encode to URL-safe 8 character key.
                $key = strtr(base64_encode(pack('H*', substr($hex, 0, 12))), '+/', '-_');

                $row['collection_refer_key'] = $key;
                $row['registration_code']    = $this->generate_program_registration_code();

                if (!empty($program_type_id)) {
                    $row['program_type_id'] = $program_type_id;
                }

                $id = $this->insert($row);
                // Set up initial pledge periods
                if (!empty($row['pep_rally'])) {
                    $this->set_pledge_periods($id);
                }

                $this->load->model('program_pledge_settings_model');
                $this->program_pledge_settings_model->insert_new_pledge_settings($id);

                array_push($ids, $id);
            }
        }

        return $ids;
    }


    /**
     * Translate SF program fields to TK field names
     *
     * @param mixed $sf_program
     * @param mixed $program_type_id
     * @return Array
     */
    public function translate_sf_tk($sf_program, $program_type_id = null)
    {
        unset($sf_program->attributes);

        //The array contains terms for programs and groups

        $field_names = [
      'Id' => 'salesforce_id',
      'Name' => 'name',
      'Opportunity__c' => 'sf_opportunity_id',
      'First_Pep_Rally__c' => 'pep_rally',
      'Last_Fun_Run__c' => 'fun_run',
      'Team__c' => 'salesforce_team_id',
      'Semester__c' => 'semester',
      'Account__c' => 'sf_school_id',
      'OwnerId' => 'sf_owner_id',
      'Projected_Gross_Raised__c' => 'projected_raised',
      'Target_Pledged__c' => 'pledge_target',
      'Service_Level__c' => 'service_level'
    ];

        foreach ($sf_program as $k => $v) {
            if ($field_names[$k]) {
                $tk_program[$field_names[$k]] = $v;
            }
        }

        if (!empty($program_type_id)) {
            $tk_program['program_type_id'] = $program_type_id;
        }

        //Add relational fields
        $this->load->model('user_group_model');

        $tk_program['team_id'] = $this->user_group_model->get_by('name', $tk_program['salesforce_team_id'])->id;

        return $this->get_relationships($tk_program);
    }


    /**
     * Get a list of all the opportunities in the programs table
     */
    public function get_opportunities()
    {
        return $this->db->select('sf_opportunity_id as id')->from($this->_table)->get()->result();
    }


    /**
     * Get a list of all the schools's SF id's in the programs table
     */
    public function get_sf_schools()
    {
        return $this->db->select('sf_school_id as id')
    ->from($this->_table)
    ->get()->result();
    }


    /**
     * Get a list of IDs of all programs
     */
    public function get_ids($program_id = null)
    {
        $this->db->select('id, salesforce_id')
    ->from($this->_table);

        if (!empty($program_id)) {
            $this->db->where('id', $program_id);
        }

        return $this->db->get()->result();
    }


    /**
     * Get a locker ID from salesforce ID
     */
    public function get_locker_id_from_salesforce_id($salesforce_id)
    {
        $this->db->select('id')
    ->from($this->_table)
    ->where('salesforce_id', $salesforce_id);

        $program = $this->db->get()->row();
        return ($program) ? $program->id : false;
    }


    /*********************************************************************************************************************

      Get program info with school name (for main program menu display)

    *********************************************************************************************************************/


    public function get_with_school($limit = 0, $offset = 0)
    {
        if ($limit > 0) {
            $this->db->limit($limit, $offset);
        }

        return $this->db->select('id, name, semester__c as semester')->from($this->_table)->result();
    }


    /*********************************************************************************************************************

        Generate random AND unique strings for the program codes

    *********************************************************************************************************************/


    public function generate_fr_code($qty = 1)
    {
        if ($qty > 1) {
            for ($i = 0; $i <= $qty; $i++) {
                $codes[] = $this->generate_fr_code();
            }

            return $codes;
        } else {
            $alpha_seed = ['A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z'];
            $num_seed   = [1,2,3,4,5,6,7,8,9];

            do {
                $alpha_picks = [
          rand(0, 23), rand(0, 23), rand(0, 23),
          rand(0, 23), rand(0, 23), rand(0, 23)
        ];
                $num_picks   = [
          rand(0, 8), rand(0, 8), rand(0, 8),
          rand(0, 8)
        ];

                # Force AA1-AA1-AA1-1 format
                $code = $alpha_seed[$alpha_picks[0]] .
          $alpha_seed[$alpha_picks[1]] .
          $num_seed[$num_picks[0]] .
          $alpha_seed[$alpha_picks[2]] .
          $alpha_seed[$alpha_picks[3]] .
          $num_seed[$num_picks[1]] .
          $alpha_seed[$alpha_picks[4]] .
          $alpha_seed[$alpha_picks[5]] .
          $num_seed[$num_picks[2]] .
          $num_seed[$num_picks[3]];
            } while ($this->db->select('id')->from('users')->where('fr_code', $code)->get()->row() !== null);

            return $code;
        }
    }


    public function generate_program_registration_code()
    {
        $num_seed = [1,2,3,4,5,6,7,8,9];

        do {
            $num_picks = [
        rand(0, 8), rand(0, 8), rand(0, 8),
        rand(0, 8), rand(0, 8), rand(0, 8)
      ];

            # Forcing ###-###
            $code = $num_seed[$num_picks[0]] .
        $num_seed[$num_picks[1]] .
        $num_seed[$num_picks[2]] .
        $num_seed[$num_picks[3]] .
        $num_seed[$num_picks[4]] .
        $num_seed[$num_picks[5]];
        } while (count($this->db->select('id')->from('programs')->where('registration_code', $code)->get()->row()) > 0);

        return $code;
    }


    /*********************************************************************************************************************

        Delete program relationships
        Deletes users-programs

    *********************************************************************************************************************/


    public function delete_relationships($program)
    {

    //The programs_students relationships are created on student load (the dreaded CSV!)
        $this->db->where('program_id', $program)->delete('programs_students');

        return $program;
    }


    /**
     * Get program's respective school and owner
     *
     * @param [type] $program
     * @return Array
     */
    public function get_relationships($program)
    {
        $this->load->model('user_model');
        $this->load->model('school_model');

        //Check the OwnerId/sf_owner_id received from SF, tie it to a TK user
        $program['owner_id']  = $this->user_model->get_by('salesforce_user_id', $program['sf_owner_id'])->id;
        $program['school_id'] = $this->school_model->get_by('salesforce_id', $program['sf_school_id'])->id;

        return $program;
    }


    /*********************************************************************************************************************

        Search programs and groups

    *********************************************************************************************************************/


    public function search($term)
    {
        $this->load->library('sphinxclient');
        $this->sphinxclient->SetServer('23.23.55.131', 34543); //Only during dev

        $query = $this->sphinxclient->Query($term, 'programs_index');

        $result_ids = array_keys($query['matches']);

        if (! empty($result_ids)) {
            $result = $this->db->select('id, name, semester')
                         ->where_in('id', $result_ids)
                         ->get('programs')
                         ->result();
        }

        return $result;
    }


    /**
     * Find students matching partial name, in given program.
     * Uses MySQL, not Sphinx.
     *
     * @param int $program_id
     * @param string $terms  Search terms as entered in quicksearch
     * @return array
     */
    public function student_search($project_id, $terms)
    {
        $words = preg_split('/\s+/', str_replace(',', ' ', $terms));
        if (count($words) >= 2) {
            return $this->db->query(
                'SELECT view_program_students.id, first_name, last_name, classrooms.grade_id,
                               classrooms.name as class_name
                        FROM view_program_students
                        JOIN classrooms
                          ON classrooms.id = view_program_students.classroom_id
                        WHERE program_id = ?
                        ORDER BY GREATEST((first_name LIKE ?) + (last_name LIKE ?),
                                          (last_name LIKE ?) + (first_name LIKE ?)) DESC
                        LIMIT 25',
                [$project_id, $words[0].'%', $words[1].'%', $words[0].'%', $words[1].'%']
            )->result();
        } elseif (count($words) == 1) {
            return $this->db->query(
                'SELECT view_program_students.id, first_name, last_name, classrooms.grade_id,
                               classrooms.name as class_name
                        FROM view_program_students
                        JOIN classrooms
                          ON classrooms.id = view_program_students.classroom_id
                        WHERE program_id = ?
                        ORDER BY last_name LIKE ? OR first_name LIKE ? DESC
                        LIMIT 25',
                [$project_id, $words[0].'%', $words[0].'%']
            )->result();
        } else {
            return [];
        }
    }


    /*********************************************************************************************************************

        Semester dropdown
        Yes, data isn't normalized. Another victim of GIGO. Maybe fix it up on a future refactor.

    *********************************************************************************************************************/


    public function semester_dropdown($extra_selector = false)
    {
        $query     = "SELECT DISTINCT `semester` from `programs` where semester IS NOT NULL ORDER BY `semester`";
        $semesters = $this->db->query($query)->result();

        foreach ($semesters as $s) {
            $prepped[$s->semester] = $s->semester;
        }

        //If $extra_selector is TRUE, include a "helper" entry in the array at key 0

        if ($extra_selector) {
            $prepped[0] = 'Semester';
        }

        return $prepped;
    }


    /*********************************************************************************************************************

        Count rows

    *********************************************************************************************************************/


    public function count_rows($semester = false, $team_id = false, $user_id = false)
    {
        if ($semester) {
            $this->db->like('semester', $semester);
        }

        if ($team_id) {
            $this->db->where('team_id', $team_id);
        }

        if ($user_id) {
            $this->db->where('owner_id', $user_id);
        }

        return $this->db->count_all_results('programs');
    }


    /*********************************************************************************************************************

        Get programs for a given team
        Active option will return programs that are happening this week

    *********************************************************************************************************************/


    public function get_programs_for_team($team_id, $active = null)
    {
        if ($active) {
            $date       = new DateTime('last sunday');
            $week       = new DateInterval('P7D');
            $start_date = $date->format('Y-m-d H:i:s');
            $date->add($week);
            $end_date = $date->format('Y-m-d H:i:s');

            $this->db->select('name, id')
                    ->where('team_id', $team_id)
                    ->where('fun_run >=', $start_date)
                    ->where('fun_run <=', $end_date)
                    ->from($this->_table)
                    ->get()
                    ->result();

            return $this->db->select('name, id')
                    ->where('team_id', $team_id)
                    ->where('fun_run >=', $start_date)
                    ->where('fun_run <=', $end_date)
                    ->from($this->_table)
                    ->get()
                    ->result();
        } else {
            return $this->db->query("SELECT `name`, `id` FROM `programs` WHERE `team_id` = '{$team_id}' ")->result();
        }
    }


    /**
     * https://local.boosterthon.com/admin/prizes/delete/program/1/1
     */
    public function has_program_edit_privilege($program_id)
    {
        $user_id = $this->ion_auth->user()->row()->id;
        $team_id = $this->db->select('team_id')->from('programs')->where('programs.id', $program_id)
      ->get()
      ->row()->team_id;
        return $this->ion_auth->in_group($team_id, $user_id);
    }


    /**
     * Get programs for a team member or the currently logged in team member in dropdown format
     *
     * @param [type] $user_id
     * @return void
     */
    public function get_programs_for_team_dropdown($user_id = null)
    {
        $this->load->model('user_group_model');

        $user_id = ! $team_id ? $this->ion_auth->user()->row()->id : $user_id;

        $users_teams = $this->user_group_model->get_teams_for_user($user_id);

        foreach ($users_teams as $ut) {
            $programs = $this->get_programs_for_team($ut['id']);

            foreach ($programs as $p) {
                $team_programs[$p->id] = $p->name;
            }
        }

        $team_programs[0] = 'Program';

        return $team_programs;
    }


    /**
     * Get all programs sponsor or parent is assocaited with based on pledges or
     * child associations
     * @param $sponsor_or_parent_id  user id of sponsor or parenrt
     * @return array of programs with id and name
     */
    public function get_programs_for_sponsor_or_parent($sponsor_or_parent_id)
    {
        $programs_result = $this->db->query(
            '
    -- Get all programs directly related to this sponsor/parent user pledges
    SELECT
      DISTINCT(pledges.program_id) as id,
      programs.name,
      programs.online_payment_enabled,
      programs.sponsor_convenience_fee,
      programs.school_processing_fee,
      programs.optional_sponsor_fee,
      programs.event_name
    FROM pledges
    JOIN programs ON pledges.program_id = programs.id
    WHERE user_id = ' . $sponsor_or_parent_id . '
    AND programs.archived = 0

    UNION

    -- Also get all programs that any of this sponsor`s/parent`s
    -- children are associated with.
    SELECT
      DISTINCT(programs.id),
      programs.name,
      programs.online_payment_enabled,
      programs.sponsor_convenience_fee,
      programs.school_processing_fee,
      programs.optional_sponsor_fee,
      programs.event_name
    FROM programs
      JOIN groups ON groups.program_id = programs.id
      JOIN classrooms ON classrooms.group_id = groups.id
      JOIN participants ON participants.classroom_id = classrooms.id
      JOIN students_parents ON students_parents.student_id = participants.user_id
    WHERE students_parents.parent_id = ' . $sponsor_or_parent_id . '
    AND programs.archived = 0'
        )->result();

        $programs_reduced = array_reduce(
            $programs_result,
            function ($programs, $program) {
                $programs[$program->id] = $program;
                return $programs;
            },
            []
        );
        return $programs_reduced;
    }


    public function get_name_by_id($program_id)
    {
        return $this->db->select('name')
    ->where('id', $program_id)
    ->get('programs')->row();
    }


    /*********************************************************************************************************************

        Get program pledge periods

    *********************************************************************************************************************/


    public function get_periods($program_id, $for_table = null, $for_dropdown = null)
    {
        if ($for_table) {
            $query = "SELECT `id`, `ordinal`, `delivery_ts`,
                              DATE_FORMAT(`delivery_ts`, '%W %M %D') as start_date,
                              DATE_FORMAT(`delivery_ts`, '%h:%i %p') as start_time
                              FROM `pledge_periods`
                              WHERE `program_id` = ?
                              ORDER BY `ordinal`";

            $result = $this->db->query($query, $program_id)->result_array();

            foreach ($result as &$r) {
                $r['actions'] = '<div class="form-inline">' . form_input(['name' => 'delivery_ts', 'value' => date('m/d/y H:i', strtotime($r['delivery_ts'])), 'class' => 'datepicker-pledge-periods form-control', 'style' => 'margin-top:0px; margin-bottom:0px;']) .
        '<a class="btn btn-success update_delivery_ts" href="' . site_url("admin/programs/periods/set_ts/{$r['id']}") . '"><i class="glyphicon glyphicon-ok"></i> Update</a> ';

                if (end($result) === $r) {
                    $r['actions'] .= '<a class="btn btn-danger detail" data-action="delete-entity" href="' . site_url("admin/programs/periods/delete/{$r['id']}") . '"><i class="glyphicon glyphicon-trash"></i> Delete</a></div>';
                }

                unset($r['id'], $r['delivery_ts']);
            }

            //Get the start of the the pledging season to show at the top of the table
            $query = "SELECT 0 as period, `pledging_start`, DATE_FORMAT(`pledging_start`, '%W %M %D') as pledging_start_date,
                             DATE_FORMAT(`pledging_start`, '%h:%i %p') as pledging_start_time
                      FROM `programs` WHERE `programs`.`id` = ?";

            $pledging_start = $this->db->query($query, $program_id)->row();

            //I know it's ugly, but it needs to fit in the "table" helper, which wasn't meant for mixing results from different queries
            $pledging_start_row[0] = 'N/A';
            $pledging_start_row[1] = 'N/A';
            $pledging_start_row[2] = 'N/A';
            $pledging_start_row[3] = '<div class="form-inline">' . form_input(
                ['name' => 'pledging_start',
                                                  'value' => date('m/d/y H:i', strtotime($pledging_start->pledging_start)),
                                                  'class' => 'datepicker-pledge-periods form-control',
                                                  'style' => 'margin-top:0px; margin-bottom:0px;']
            )
                               . '<a class="btn btn-warning update_pledging_start"
                                           href="' . site_url("admin/programs/update_pledging_start/{$program_id}") . '">
                                            <i class="glyphicon glyphicon-ok"></i>
                                            Update Pledging Start Time
                                        </a></div>';

            array_unshift($result, $pledging_start_row);

            return $result;
        } elseif ($for_dropdown) {
            $result = $this->db->select('id, ordinal')->where('program_id', $program_id)->get('pledge_periods')->result();
            foreach ($result as $r) {
                $return_value[$r->id] = $r->ordinal;
            }

            return $return_value;
        }

        return $this->db->where('program_id', $program_id)->get('pledge_periods')->result();
    }


    /*********************************************************************************************************************

          Set default pledge periods for a program
          $program should be the first period in the series

    *********************************************************************************************************************/


    public function set_pledge_periods($program_id, DateTime $period = null, DateInterval $cutoff_time = null, $period_quantity = null)
    {
        $program = $this->get($program_id);

        $fun_run_date = $program->fun_run;

        //Get a reference start date and create a DateTime object based on it
        if (!$period) {
            $period = new DateTime($program->pep_rally);
        }

        //Set the start of pledging period for the program one week earlier than the first delivery date
    $pledging_start = new DateTime($period->format('Y-m-d H:i:s')); //Start of pledging period is Pep Rally day

    $query = ("UPDATE `programs` SET `pledging_start` = '{$pledging_start->format('Y-m-d H:i:s')}'
                WHERE `id` = '{$program_id}'");

        $this->db->query($query);

        //Proceed working on the actual periods

        //If they pass the time in the $period object, this is not necessary
        if ($cutoff_time) {
            $cutoff_time = new DateInterval($cutoff_time);
            $period->add($cutoff_time);
        } elseif ($period->format('H:i:s') == '00:00:00') {
            //No time passed in initial period

            $this->load->model('meta_model');
            $cutoff_time = new DateInterval($this->meta_model->get('default_pledge_period_time'));
            $period->add($cutoff_time);
        }

        //Create the periods, making sure Friday-Sunday counts as a single period
        if (! $period_quantity) {
            $this->load->model('meta_model');
            $period_quantity = $this->meta_model->get('default_period_quantity');
        }

        for ($i = 1; $i <= $period_quantity; $i++) {
            //Period starts on Pep Rally + 1
        $add_days = $period->format('D') === 'Fri' ? 'P3D' : 'P1D'; //Skip weekend on default setup
        $period->add(new DateInterval($add_days));

            //Skip Fun Run date
            if ($period->format('Y-m-d') == date('Y-m-d', strtotime($fun_run_date))) {
                $period->add(new DateInterval('P1D'));
            }

            $periods[] = ['delivery_ts' => $period->format('Y-m-d H:i:s'),
                                'ordinal' => $i,
                                'program_id' => $program_id];
        }

        //Destroy any existing periods
        $this->db->where('program_id', $program_id)->delete('pledge_periods');
        $this->db->insert_batch('pledge_periods', $periods);
        $last_period = count($periods) - 1;
        $this->update_pledging_end($program_id, $periods[$last_period]['delivery_ts']);
    }


    /*********************************************************************************************************************

         Modify the start of pledging time

     *********************************************************************************************************************/


    public function update_pledging_start($program_id, DateTime $new_start_ts)
    {
        $dates_info = $this->db->select(['pledging_start','pep_rally'])
          ->from('programs')
          ->where('id', $program_id)->get()->row();

        $earliest_start_ts = new DateTime($dates_info->pep_rally);
        $earliest_start_ts->sub(new DateInterval('P21D'));

        if ($earliest_start_ts > $new_start_ts) {
            $pep_rally_ts      = new DateTime($dates_info->pep_rally);
            $result['status']  = false;
            $result['message'] = 'Pledging period cannot start earlier than 21 days before Pep Rally.  Pep Rally Date:  ' . $pep_rally_ts->format('m-d-Y'); //Messages used for AJAXING BS

            return $result;
        } else {
            $this->db->where('id', $program_id)
            ->update('programs', [ 'pledging_start' => $new_start_ts->format('Y-m-d H:i:s') ]);

            //check if first delivery is before new start date and update if neccessary
            $this->_update_pledge_period_from($new_start_ts, $program_id);

            $result['status']  = true;
            $result['message'] = 'Pledging period start updated.';

            return $result;
        }
    }


    private function _update_pledge_period_from($new_start_ts, $program_id)
    {
        $first_pledge_period = $this->db->select(['pledge_periods.*','programs.pledging_start','programs.pep_rally'])
          ->from('pledge_periods')
          ->join('programs', 'pledge_periods.program_id = programs.id')
          ->where([ 'pledge_periods.program_id' => $program_id, 'ordinal' => 1 ])
          ->get()->row();
        if ($first_pledge_period) {
            $first_delivery_ts = new DateTime($first_pledge_period->delivery_ts);
            if ($this->_should_update_deliver_dates($new_start_ts, $first_delivery_ts)) {
                $this->update_period($first_pledge_period->id, $new_start_ts->add(new DateInterval('P1D'))->format('Y-m-d H:i:s'));
            }
        }
    }


    private function _should_update_deliver_dates($new_start_ts, $first_delivery_ts)
    {
        return ($new_start_ts->diff($first_delivery_ts)->d < 1 || $new_start_ts > $first_delivery_ts);
    }


    /**
     * Modify the delivery time for a period
     *
     * @param [type] $period_id
     * @param [type] $delivery_ts
     * @return void
     */
    public function update_period($period_id, $delivery_ts)
    {

    //The only validation we need to do is to make sure the timestamp isn't earlier than the pep rally minus 7 days, or the previous
        //pledge period.
        //If it overlaps with the following pledge period, simply move those out of the way

        $period = $this->db->from('pledge_periods')
      ->select(
          [
          'pledge_periods.*',
          'programs.pep_rally',
        ]
      )
      ->join('programs', "pledge_periods.program_id = programs.id and pledge_periods.id = {$period_id}")
      ->get()->row();

        $earliest_date    = new DateTime($period->pep_rally);
        $before_pep_rally = new DateInterval('P7D');
        $earliest_date->sub($before_pep_rally);
        $delivery_ts = new DateTime(date('Y-m-d H:i:s', strtotime($delivery_ts)));

        if ($earliest_date > $delivery_ts) {
            $result['status']  = false;
            $result['message'] = 'Delivery time cannot be earlier than 7 days before Pep Rally'; //Messages used for AJAXING BS

            return $result;
        } else { //Everything checks out, let's update this sucker, then push the upcoming periods if necessary
            //Check previous pledge period, only if ordinal isn't #1
            if ($period->ordinal > 1) {
                $previous_ordinal = $period->ordinal - 1;

                $query           = "SELECT `delivery_ts` FROM `pledge_periods` WHERE `program_id` = '{$period->program_id}' AND `ordinal` = '{$previous_ordinal}'";
                $previous_period = $this->db->query($query)->row();

                if ($previous_period->delivery_ts > $delivery_ts) {
                    $result['status']  = false;
                    $result['message'] = "Delivery time cannot be earlier than previous delivery date and time";
                } else {
                    $update_data = ['delivery_ts' => $delivery_ts->format('Y-m-d H:i:s')];
                    $this->db->where('id', $period_id)->update('pledge_periods', $update_data);

                    $result['status']  = true;
                    $result['message'] = "Pledge interval updated successfully";

                    //Push periods if necessary
                    $this->push_periods($period_id);
                }
            } else {
                $update_data = ['delivery_ts' => $delivery_ts->format('Y-m-d H:i:s')];
                $this->db->where('id', $period_id)->update('pledge_periods', $update_data);
                //Push periods if necessary
                $this->push_periods($period_id);

                $result['status']  = true;
                $result['message'] = "Pledge interval updated successfully";
            }

            $this->update_pledging_end_if_last_period($period);
            $this->load->model('prize_bound_model');
            $this->prize_bound_model->update_prizes_bound_pledge_period($period->program_id);

            return $result;
        }
    }


    /**
     * Updates the pledging end date of the program if the pledge period changed is the last pledge period
     * @param Object PledgePeriod
     */
    protected function update_pledging_end_if_last_period($period)
    {
        $last_period = $this->db->select('*')
      ->from('pledge_periods')
      ->where('program_id', $period->program_id)
      ->order_by('ordinal', 'desc')
      ->limit(1)->get()->row();

        if ($last_period->id === $period->id) {
            //update program.pledging_end = $period->deliver_ts
            $this->update_pledging_end($period->program_id, $last_period->delivery_ts);
        }
    }


    /**
     * Updated the pledging end date on the program
     * @param DateTime pledging end
     */
    protected function update_pledging_end($program_id, $date)
    {
        $update_data = ['pledging_end' => (new DateTime($date))->format('Y-m-d H:i:s')];
        $this->db->where('id', $program_id)->update('programs', $update_data);
    }


    /*
     * Push delivery dates if a period runs over subsequent ones
     *
     * @param int $period_id
     * @return void
     */
    protected function push_periods($period_id)
    {
        $query  = "SELECT * FROM `pledge_periods` WHERE `id` = {$period_id}";
        $period = $this->db->query($query)->row();

        //Get subsequent periods
        $query = "SELECT * FROM `pledge_periods` WHERE `ordinal` > '{$period->ordinal}' AND `program_id` = '{$period->program_id}' ";

        $next_periods = $this->db->query($query)->result();

        $current_period = new DateTime($period->delivery_ts);

        $time_shift = new DateInterval('P1D'); //Shift by 1 day

        foreach ($next_periods as $np) { //Shift periods only if they overlap, leave alone otherwise
            $next_delivery = new DateTime($np->delivery_ts);

            if ($current_period >= $next_delivery || $current_period->diff($next_delivery)->d < 1) { //Overlap or less than 1D diff
                $current_period->add($time_shift);

                while ($current_period->format('D') == 'Sat' || $current_period->format('D') == 'Sun') { //Skip weekends on domino effect
                    $current_period->add($time_shift);
                }

                $update_data = ['delivery_ts' => $current_period->format('Y-m-d H:i:s')];

                $this->db->where('id', $np->id)->update('pledge_periods', $update_data);
            }
        }
    }


    /*********************************************************************************************************************

        Delete Period

    *********************************************************************************************************************/


    public function delete_period($period_id)
    {
        $program_id     = $this->db->query("SELECT `program_id` FROM `pledge_periods` WHERE `id` = '{$period_id}'")->row()->program_id;
        $last_period_id = $this->db->query("SELECT `id` FROM `pledge_periods` WHERE `program_id` = $program_id ORDER BY `ordinal` desc")->row()->id;

        if ($last_period_id === $period_id) {
            $period = $this->db->query("DELETE FROM `pledge_periods` WHERE `id` = '{$period_id}'");
        } else {
            return false;
        }

        $this->reorder_periods($program_id);

        $this->load->model('prize_bound_model');
        $this->prize_bound_model->update_prizes_bound_pledge_period($program_id);

        return true;
    }


    /**
     * New Period
     *
     * @param [type] $program_id
     * @param [type] $delivery_date
     * @return void
     */
    public function new_period($program_id, $delivery_date)
    {
        $delivery_date = date('Y-m-d H:i:s', strtotime($delivery_date));
        $repeated_time = $this->db->query(
            "SELECT `id`, `ordinal` FROM `pledge_periods`
                                            WHERE `delivery_ts` = '{$delivery_date}'
                                            AND `program_id` = '{$program_id}'"
        )->row();

        $pledge_period_start = $this->db->query(
            "SELECT `pledging_start` FROM `programs`
                                                  WHERE `id` = '{$program_id}'"
        )->row()->pledging_start;

        if ($repeated_time) {
            $return_value = ['status' => false, 'message' => "That time and date is already taken by period #{$repeated_time->ordinal}"];
        } elseif ($delivery_date < $pledge_period_start) {
            $return_value = ['status' => false, 'message' => "Delivery time must be later than beginning of pledging period (first row)"];
        } else {
            $insert_data = ['delivery_ts' => $delivery_date, 'program_id' => $program_id];
            $new_period  = $this->db->insert('pledge_periods', $insert_data);
            $new_period  = $this->db->insert_id();

            $this->reorder_periods($program_id);
            $this->push_periods($new_period);

            $return_value = ['message' => 'Period Added', 'status' => true];
        }

        $this->load->model('prize_bound_model');
        $this->prize_bound_model->update_prizes_bound_pledge_period($program_id);

        return $return_value;
    }


    /*********************************************************************************************************************

        Reorder Periods

    *********************************************************************************************************************/


    protected function reorder_periods($program_id)
    {
        $periods = $this->db->select('*')
              ->from('pledge_periods')
              ->where('program_id', $program_id)
              ->order_by('delivery_ts')->get()->result();

        if (count($periods) == 0) {
            $this->update_pledging_end($program_id, '1970-01-01 00:00:00');
        }

        $i = 1;
        foreach ($periods as $op) {
            $this->db->query("UPDATE `pledge_periods` SET `ordinal` = ? WHERE `id` = ?", [$i, $op->id]);
            if (count($periods) == $i) {
                $this->update_pledging_end($program_id, $op->delivery_ts);
            }

            $i++;
        }

        return true;
    }


    // number of days left in most recent pledge period


    public function period_days_left($program_id)
    {
        $days = $this->db->select('DATEDIFF(DATE(delivery_ts), CURDATE()) AS days_left')
                      ->from('pledge_periods')
                      ->where('program_id', $program_id)
                      ->where('delivery_ts >= CURDATE()')
                      ->get()->row()->days_left;

        if (empty($days)) {
            return 0;
        }

        return $days;
    }


    public function funrun_days_left($program_id, $allow_negative_days = false)
    {
        $days = $this->db->select('DATEDIFF(DATE(fun_run), CURDATE()) AS days_left')
                      ->from('programs')
                      ->where('id', $program_id);

        if (! $allow_negative_days) {
            $days = $days->where('fun_run >= CURDATE()');
        }

        $days = $days->get()->row()->days_left;

        if (empty($days)) {
            return 0;
        }

        return $days;
    }


    /**
     *
     * @param type $program_id
     * @param type $program_data
     * @param type $outstanding_amt
     * @return type
     */
    public function get_program_collection_reminder($program_id, $program_data, $outstanding_amt)
    {
        $this->load->model('pledge_model');
        $participants_only = true;
        $collections       = $this->get_collections($program_id, null, null, $participants_only);
        $students          = $collections['data'];
        $statuses          = implode(",", Pledge_model::get_pledged_statuses());
        $pledges_sql       = '
    SELECT
      participant_user_id,
      participant_name,
      sponsor_name,
      amount,
      pledge_type,
      IF (total > 0, total, total_est) as total
    FROM view_program_pledges
    WHERE program_id = '.$program_id.'
    AND pledge_status_id IN (' . $statuses . ')
    ORDER BY participant_user_id,
             SUBSTR(LTRIM(sponsor_name), LOCATE(" ",LTRIM(sponsor_name)))';

        $all_pledges        = $this->db->query($pledges_sql)->result();
        $all_pledges_sorted = [];
        foreach ($all_pledges as $pledge) {
            $all_pledges_sorted[$pledge->participant_user_id][] = $pledge;
        }

        unset($all_pledges);

        $payments_sql = '
      SELECT  student_id as participant_user_id,
        CONCAT(IFNULL(concat(first_name, " "), ""), last_name) AS payer_name,
        amount,
        `type`,
        check_number,
        split_amount as collected,
        IF (amount <> split_amount, 1, 0) AS split
      FROM view_program_payments
      WHERE program_id = '.$program_id.'
      ORDER BY student_id,
        SUBSTR(LTRIM(payer_name), LOCATE(" ",LTRIM(payer_name)))';

        $all_payments        = $this->db->query($payments_sql)->result();
        $all_payments_sorted = [];
        foreach ($all_payments as $payment) {
            $all_payments_sorted[$payment->participant_user_id][] = $payment;
        }

        unset($all_payments);

        $scheduled_sql = '
      SELECT participant_user_id,
      sponsor_name AS payer_name,
      total_est as amount
      FROM view_program_pledges
      WHERE program_id = ' . $program_id . '
        AND pledge_status_id = ' . Pledge_Model::PAID_PENDING_STATUS . '
      ORDER BY participant_user_id,sponsor_name
    ';

        $all_scheduled        = $this->db->query($scheduled_sql)->result();
        $all_scheduled_sorted = [];
        foreach ($all_scheduled as $scheduled) {
            $all_scheduled_sorted[$scheduled->participant_user_id][] = $scheduled;
        }

        unset($all_scheduled);

        $student_ids = [];
        foreach ($students as $index => $student) {
            if (str_replace(',', '', $student->outstanding) < $outstanding_amt ||
          $student->block_collection_reminder == 1) {
                unset($students[$index]);
                continue;
            }

            $student_ids[$index] = $student->student_id;

            $student->payments           = [];
            $student->pledges            = [];
            $student->scheduled_payments = [];

            if (array_key_exists($student->student_id, $all_payments_sorted)) {
                $student->payments = $all_payments_sorted[$student->student_id];
            }

            if (array_key_exists($student->student_id, $all_pledges_sorted)) {
                $student->pledges = $all_pledges_sorted[$student->student_id];
            }

            $student->program = $program_data;
            if (array_key_exists($student->student_id, $all_scheduled_sorted)) {
                $student->scheduled_payments = $all_scheduled_sorted[$student->student_id];
            }
        }

        if (!empty($student_ids)) {
            $this->load->model('students_parent_model');
            $parents = $this->students_parent_model->get_parents_from_student_ids($student_ids);

            foreach ($students as $i => $student) {
                foreach ($parents as $p_index => $parent) {
                    if ($parent->student_id == $student->student_id) {
                        $students[$i]->parent_fr_code = $parent->parent_fr_code;
                        $students[$i]->parent_email   = $parent->parent_email;
                        unset($parents[$p_index]);
                        continue;
                    }
                }
            }
        }

        return $students;
    }


    public function get_collection_reminder_program_info($program_id)
    {
        $this->load->model('pledge_model');
        $this->load->model('online_pending_payment_model');
        $this->load->driver('cache', ['adapter' => 'redis', 'backup' => 'file']);
        //@codingStandardsIgnoreLine
        if (!$program = $this->cache->get(
            'collection_reminder_program_info_'.$program_id
        )) {
            //not in cache, so do stuff to generate collection_reminder_program_info
            $program_collected_total_sql = "
        SELECT
          IFNULL(SUM(split_amount),0) as collected
        FROM view_program_payments
        WHERE program_id = " . $program_id;

            $paid_collected = $this->db->query($program_collected_total_sql)->row()->collected;

            $pending_collected = $this->online_pending_payment_model->get_program_collection($program_id);

            $program_collected = $paid_collected + $pending_collected;

            $statuses = Pledge_model::get_pledged_statuses();

            $program_pledge_total_sql = "
        SELECT
          IFNULL(SUM(total_est),0) AS pledged,
          programs.payee,
          programs.due_date,
          schools.`name`,
          programs.event_name,
          programs.sponsor_convenience_fee
        FROM view_program_pledges AS vpp
        JOIN programs ON
          programs.id = " . $program_id . "
        JOIN schools ON programs.school_id = schools.id
        WHERE `pledge_status_id` IN(" . implode(",", $statuses) .")
        AND vpp.program_id = " . $program_id;

            $program = $this->db->query($program_pledge_total_sql)->row();
            if (empty($program->pledged)) {
                $pct_collected = 0;
            } else {
                $pct_collected = ($program_collected / $program->pledged) * 100;
            }

            $program->total_pct_collected = number_format($pct_collected, 0) . '%';

            $this->cache->save(
                'collection_reminder_program_info_'.$program_id,
                $program,
                90
            );
        }

        return $program;
    }


    public function get_program_id_by_user_id($user_id)
    {
        $result = $this->db
        ->select('program_id')
        ->get_where('view_program_students', ['id' => $user_id ])
        ->result();

        return !empty($result) ? $result[0]->program_id : false;
    }


    public function get_event_name_by_user_id($user_id)
    {
        $result = $this->db
            ->select('event_name')
            ->from('programs')
            ->join('groups', 'programs.id = groups.program_id')
            ->join('classrooms', 'groups.id = classrooms.group_id')
            ->join('participants', 'participants.classroom_id = classrooms.id')
            ->where('participants.user_id', $user_id)
            ->get()->result();
        if (count($result)) {
            return $result[0]->event_name;
        } else {
            return false;
        }
    }


    public function get_program_by_user_id($user_id)
    {
        $this->db->select('*')
      ->join('programs', 'view_program_students.program_id = programs.id')
      ->where('view_program_students.id', $user_id);

        $query = $this->db->get('view_program_students');

        return $query->result();
    }


    public function get_programs_pledge_summary_by_semester($semester, $previous_semester = '', $test_program = false)
    {
        ini_set('max_execution_time', 300);
        $this->load->model('pledge_model');
        $this->load->model('user_group_model');
        $this->load->model('program_todos_model');
        $this->load->config('salesforce', true);

        //Pending Pledges are not included on this because it affects the total_est
        //and total_est is used used to calculate GM bonuses
        $statuses = [
      Pledge_model::CONFIRMED_STATUS,
      Pledge_model::PAID_STATUS,
      Pledge_model::PAID_PENDING_STATUS
    ];

        // Test by getting summaries for Home Test 2014-2-Fall
        $id_specifier  = '';
        $program_where = '';
        if ($test_program) {
            $test_sf_id    = $this->config->item('program_test_salesforce_id', 'salesforce');
            $program_where = 'programs.salesforce_id = "' . $test_sf_id . '"';
            $id_specifier  = 'SELECT id FROM programs WHERE ' . $program_where;
        } else {
            $program_where = 'semester ' .
        ($semester == 'all' ? 'LIKE "%" ' : '= "'.$semester.'"') .
        (!empty($previous_semester) ? ' OR semester = "'.$previous_semester.'"' : '');
            $id_specifier  = 'SELECT id FROM programs WHERE ' . $program_where;
        }

        $programs_query = '
      SELECT
        programs.`name`            AS program_name,
        programs.semester,
        programs.salesforce_id,
        programs.fun_run,
        SUM(
          (pledges.amount *
            CASE pledge_types.`name`
              WHEN "PPL"
                THEN IF((ISNULL(users.laps) OR (users.laps = 0)),
                  pledge_types.multiplier_average,
                  users.laps)
              WHEN "Flat"
                THEN 1
            END
          )
        )                        AS total_est,
        programs.id   AS program_id,
        programs.sponsor_convenience_fee,
        programs.school_processing_fee,
        programs.online_payment_enabled,
        COUNT(
          DISTINCT
            CASE users_user_groups.group_id
              WHEN 3
                THEN pledges.participant_user_id
            END
        )                       AS student_part_count
      FROM pledges
        JOIN users
          ON users.id = pledges.participant_user_id
        LEFT JOIN users_user_groups
          ON users_user_groups.user_id = pledges.participant_user_id
          AND users_user_groups.group_id IN ('. User_group_model::STUDENTS . ',' .
                                                User_group_model::TEACHERS . ')
        JOIN programs
          ON programs.id = pledges.program_id
        JOIN pledge_types
          ON pledge_types.id = pledges.pledge_type_id
      WHERE NOT(pledges.deleted)
      AND pledges.program_id IN(' . $id_specifier . ')
      AND pledges.pledge_status_id IN(' . implode(",", $statuses) . ' )
      GROUP BY pledges.program_id
      ORDER BY semester, fun_run, program_name';

        $programs = $this->db->query($programs_query)->result();

        $student_counts = $this->db->query(
            'SELECT
      COUNT(id) AS total_students,
      COUNT(
        DISTINCT
          CASE
            WHEN waiver_ts IS NOT NULL
            THEN
              (CASE user_group_id
                WHEN ' . User_group_model::STUDENTS . '
                  THEN id
                ELSE null
                END
              )
            ELSE null
            END
      ) AS registered_students,
      program_id
      FROM view_program_students
      WHERE program_id IN (' . $id_specifier . ')
      AND user_group_id = 3
      GROUP BY program_id'
        )->result();

        $student_count = [];
        foreach ($student_counts as $i => $count) {
            $student_count[$count->program_id]['total_students']      = $count->total_students;
            $student_count[$count->program_id]['registered_students'] = $count->registered_students;
        }

        $total_students_from_classes = $this->db->query(
            'SELECT
      groups.program_id,
      SUM(classrooms.number_of_participants) AS total_students_from_classes
      FROM classrooms
      JOIN grades ON grades.id =  classrooms.grade_id
      JOIN groups ON groups.id =  classrooms.group_id
      WHERE groups.program_id IN (' . $id_specifier . ')
      AND NOT(classrooms.deleted)
      GROUP BY groups.program_id'
        )->result();

        foreach ($total_students_from_classes as $i => $count) {
            $total_students_from_classes[$count->program_id] = $count->total_students_from_classes;
        }

        $cc_payments_result = $this->db->query(
            'SELECT round(sum(split_amount),2) AS total, program_id '
      . 'FROM view_program_payments '
      . 'WHERE type = \'CC\' '
      . 'AND program_id '
      . 'IN (' . $id_specifier . ') '
      . 'group by program_id'
        )->result();
        $cc_payments        = [];
        foreach ($cc_payments_result as $i => $cc_payment) {
            $cc_payments[$cc_payment->program_id] = $cc_payment->total;
        }

        $program_todos        = [];
        $program_todo_results = $this->db->select('program_id,todo_label')
            ->from('program_todos')
            ->join('programs', 'programs.id = program_todos.program_id')
            ->where($program_where)
            ->get()->result();
        foreach ($program_todo_results as $program_todo) {
            $program_todos[$program_todo->program_id][$program_todo->todo_label] = 1;
        }

        $todo_fields = Program_todos_model::get_programs_summary_report_fields();

        foreach ($programs as $i => $program) {
            $programs[$i]->total_students              = $student_count[$program->program_id]['total_students'];
            $programs[$i]->registered_students         = $student_count[$program->program_id]['registered_students'];
            $programs[$i]->total_students_from_classes = $total_students_from_classes[$program->program_id];
            $programs[$i]->cc_payments                 = $cc_payments[$program->program_id];

            $has_todo = array_key_exists($program->program_id, $program_todos);
            foreach ($todo_fields as $todo => $header) {
                if ($has_todo and array_key_exists($todo, $program_todos[$program->program_id])) {
                    //@codingStandardsIgnoreLine
                    $programs[$i]->$todo = 'No';
                } else {
                    //@codingStandardsIgnoreLine
                    $programs[$i]->$todo = 'Yes';
                }
            }
        }

        return $programs;
    }


    public function get_programs_by_semester($semester)
    {
        $programs = $this->db->query(
            '
      SELECT id FROM programs
      WHERE semester ' .
      ($semester == 'all' ? 'LIKE "%" ' : '= "'.$semester.'"')
        )->result();
        return $programs;
    }


    public function get_collections_summary($program_id)
    {
        $this->load->model('pledge_model');
        $oustandingClause = $oustanding ? 'Having outstanding > 0' : '';
        return $this->db->query(
            '
      SELECT
      CONCAT(IFNULL(CONCAT(users.first_name, " "), ""), users.last_name)
        AS participant_name,
      classrooms.`name` AS class,
      grades.`name` AS grade_name,
      TRUNCATE(
        (ppl_amount * IF(pt.laps = 0 OR pt.laps IS NULL, 30, pt.laps))
        + flat_amount, 2) AS pledged,
      SUM(split.amount) AS collected,
      IFNULL(TRUNCATE((ppl_scheduled_amount * IF(pt.laps = 0 OR pt.laps IS NULL, 30, pt.laps)) + flat_scheduled_amount, 2), 0) AS scheduled,
      IFNULL(TRUNCATE(( (ppl_amount - ppl_scheduled_amount) * IF(pt.laps = 0 OR pt.laps IS NULL, 30, pt.laps)) + flat_amount - flat_scheduled_amount, 2), 0) - IFNULL(SUM(split.amount),0) AS outstanding,
      parents.first_name AS parent_first_name,
      parents.last_name AS parent_last_name,
      parents.email AS parent_email,
      parents.phone AS parent_phone
      FROM classrooms
        JOIN grades ON classrooms.grade_id = grades.id
        JOIN groups ON classrooms.group_id = groups.id
        JOIN participants AS p ON p.classroom_id = classrooms.id
        JOIN users ON users.id = p.user_id
        LEFT JOIN payments_students AS split ON split.student_id = p.user_id
        LEFT JOIN payments ON payments.id = split.payment_id
        LEFT JOIN (
          SELECT
            SUM(amount * (pl.pledge_type_id = '. Pledge_model::PPL_TYPE . ' AND
              (pl.pledge_status_id = ' . Pledge_model::CONFIRMED_STATUS . ' OR
               pl.pledge_status_id = ' . Pledge_model::PAID_STATUS . ' OR
               pl.pledge_status_id = ' . Pledge_model::PAID_PENDING_STATUS . ' )
              )) AS ppl_amount,
            SUM(amount * (pl.pledge_type_id = '. Pledge_model::FLAT_TYPE . ' AND
              (pl.pledge_status_id = ' . Pledge_model::CONFIRMED_STATUS . ' OR
               pl.pledge_status_id = ' . Pledge_model::PAID_STATUS .  ' OR
               pl.pledge_status_id = ' . Pledge_model::PAID_PENDING_STATUS . ' )
              )) AS flat_amount,
            SUM(amount * (pl.pledge_type_id = '. Pledge_model::PPL_TYPE . ' AND
              pl.pledge_status_id = ' . Pledge_model::PAID_PENDING_STATUS . '
              )) AS ppl_scheduled_amount,
            SUM(amount * (pl.pledge_type_id = '. Pledge_model::FLAT_TYPE . ' AND
              pl.pledge_status_id = ' . Pledge_model::PAID_PENDING_STATUS . '
              )) AS flat_scheduled_amount,
            SUM((pl.pledge_status_id = ' . Pledge_model::CONFIRMED_STATUS . ' OR
              pl.pledge_status_id = ' . Pledge_model::PAID_STATUS .  ' OR
              pl.pledge_status_id = ' . Pledge_model::PAID_PENDING_STATUS . ' )
              ) AS total_pledges,
            pl.participant_user_id,
            users.laps
          FROM pledges as pl
            JOIN users ON pl.participant_user_id = users .id
          WHERE pl.program_id  = ' . $program_id . '
          AND pl.deleted = 0
          GROUP BY pl.participant_user_id
        )	AS pt ON pt.participant_user_id = p.user_id -- pt is pledge_totals
        LEFT JOIN  (
          SELECT sp.student_id, users.first_name, users.last_name, users.email, users.phone
          FROM students_parents AS sp
          LEFT JOIN users
            ON sp.parent_id =  users.id
          WHERE sp.student_id IN(
              SELECT id
              FROM view_program_students WHERE program_id = ' . $program_id . '
              )
          GROUP BY sp.student_id
        ) AS parents ON parents.student_id = p.user_id
      WHERE groups.program_id = ' . $program_id . '
      AND users.last_name IS NOT NULL
      AND NOT users.deleted
      AND (split.deleted = 0 OR split.deleted IS NULL)
      AND (payments.deleted = 0 OR payments.deleted IS NULL)
      GROUP BY p.user_id
      ' . $oustandingClause . '
      ORDER BY outstanding DESC'
        )->result();
    }


    /**
     * return boolean based on if they are assigned to that program
     *
     * @param [type] $program_id
     * @param [type] $schools
     * @return void
     */
    public function check_org_school_permission($program_id, $schools)
    {
        if ($schools) {
            $program_result = $this->db->select('programs.id')->from('programs')
        // check_org_school_permission gets passed a collection_refer_key
        // instead of ID from collection link in program's locker admin dashboard
        ->where('programs.id', $program_id)
        ->where_in('programs.school_id', $schools)

        // check_org_school_permission gets passed a collection_refer_key
        // instead of ID from collection link in program's locker admin dashboard
        ->or_where('programs.collection_refer_key', $program_id)
        ->where_in('programs.school_id', $schools)
        ->get()->result();
            return !empty($program_result);
        }

        return false;
    }


    /**
     * Returns program_id by pledge id lookup
     * @param string $pledge_id
     * @return string program_id
     */
    public function get_program_for_pledge($pledge_id)
    {
        return $this->db->select('program_id')
                    ->where('id', $pledge_id)
                    ->get('pledges')->row()->program_id;
    }


    public function unpaid_sponsor_follow_up($program_id, $alternate = false, $email_notification_update_id = null)
    {
        $this->load->model('manual_payment_model');
        $this->load->model('pledge_model');
        //query program for unpaid sponsors to email
        $data['program'] = $this->get($program_id);
        $unpaid_parents  = $this->manual_payment_model
      ->get_unpaid_manual_payment_parents_by_program($program_id);

        if (!empty($unpaid_parents)) {
            $this->pledge_model->unpaid_sponsor_payment_notify($unpaid_parents, $program_id, $alternate, $email_notification_update_id);
        }
    }


    public function parent_collection_letter($program_id, $email_notification_update_id = null)
    {
        $this->load->model('manual_payment_model');
        $this->load->model('pledge_model');
        //query program for unpaid sponsors to email
        $data['program'] = $this->get($program_id);
        $unpaid_parents  = $this->manual_payment_model
      ->get_unpaid_manual_payment_parents_by_program($program_id);

        if (!empty($unpaid_parents)) {
            $this->pledge_model->unpaid_sponsor_payment_notify($unpaid_parents, $program_id, false, $email_notification_update_id);
        }
    }


    public function sponsor_follow_up($program_id, $data)
    {
        $this->load->model('user_model');
        $this->load->library('email_template');
        $this->db->reconnect();
        $sponsors        = $this->get_sponsors($program_id);
        $recipient_count = 0;
        foreach ($sponsors as $sponsor) {
            if (!$sponsor->email_opt_out) {
                if (!empty($sponsor->email)) {
                    $subject                  = $data['subject'];
                    $login_url                = $this->user_model->paynow_login_link($sponsor);
                    $survey_url               = $this->determine_survey_url($program_id, $sponsor->id);
                    $participant_list         = $this->generate_pledgee_markup($sponsor, $program_id);
                    $data['send_body']        = str_replace(
                        [
              "$[SPONSOR_FIRST_NAME]",
              "$[PARTICIPANT_NAMES]",
              "{School Name}",
              "$[SPONSOR_LOGIN_URL]",
              "$[SURVEY_LINK]",
              "$[SPONSOR_PAYMENT_LINK]"
            ],
                        [
              $sponsor->first_name,
              $participant_list,
              $data['school']->name,
              "<a href='$login_url'>$login_url</a>",
              "<a href='$survey_url'>here</a>",
              "<a href='$login_url'>$login_url</a>"
            ],
                        $data['body']
                    );
                    $data['unsubscribe_code'] = '';
                    $unsubscribe_code         = $this->user_model->get_user_unsubscribe_code($sponsor->email);
                    if (!empty($unsubscribe_code)) {
                        $data['unsubscribe_code'] = $unsubscribe_code;
                    } else {
                        log_message(
                            'error',
                            '********** ERROR - In sponsor follow up email ' .
              '- data[unsubscribe_code] IS EMPTY ************ for sponsor:' .
              print_r($sponsor, true)
                        );
                    }

                    $this->load->model('microsite_model');
                    $microsite    = $this->microsite_model->get_for_display($program_id);
                    $email_config = [
            'color' => $microsite->color_theme,
            'title' => $data['event_name'],
            'image' => $microsite->school_image_name,
            'unsubscribe' => $data['unsubscribe_code']
          ];
                    $this->email_template->set_config($email_config);
                    $this->email_template->send(
                        $sponsor->email,
                        $subject,
                        $this->load->view('email/admin/sponsor_follow_up', $data, true),
                        $data['event_name']
                    );
                    $recipient_count++;
                } else {// error check empty email
                    log_message(
                        'error',
                        '********** ERROR - In sponsor follow up email ' .
            '- sponsor->email IS EMPTY ************ for sponsor:' .
            print_r($sponsor, true)
                    );
                }
            }
        }

        $this->load->model('email_notification_model');
        $this->email_notification_model->update_recipient_count(
            $data['email_notification_update_id'],
            $recipient_count
        );
    }


    /**
     * determines the survey url if they are a sponsor or a parent for a particular program
     * if they are both a sponsor and a parent it returns the parent survey url
     *
     * @param [type] $program_id
     * @param [type] $user_id
     * @return void
     */
    private function determine_survey_url($program_id, $user_id)
    {
        $this->config->load('urls');
        $parent_survey_url    = $this->config->item('parent_survey_url') . '?programid=' . $program_id;
        $sponsor_survey_url   = $this->config->item('sponsor_survey_url') . '?programid=' . $program_id;
        $participants         = $this->user_model->get_participants_for_parent($user_id);
        $program_participants = array_filter(
            $participants,
            function ($participant) use ($program_id) {
                return $participant->program_id === $program_id;
            }
        );
        $survey_url           = $program_participants ? $parent_survey_url : $sponsor_survey_url;
        return $survey_url;
    }


    public function generate_pledgee_markup($sponsor, $program_id)
    {
        $this->load->model('pledge_model');
        $pledgees = $this->pledge_model->get_sponsor_pledgees($sponsor->id, $program_id);

        $pledgee_list = "<ul>";
        foreach ($pledgees as $pledgee) {
            $pledgee_list .= "<li>{$pledgee->name}</li>";
        }

        $pledgee_list .= "</ul>";

        return $pledgee_list;
    }


    public function collection_reminder($coll_data)
    {
        $this->load->model('user_model');

        $recipient_count = 0;
        foreach ($coll_data['coll_reminder'] as $student) {
            $coll_data['student'] = $student;
            $subject              = $coll_data['event_name'].' Pledges Due: $' . $student->outstanding;
            if (!empty($student->parent_email)) {
                $coll_data['unsubscribe_code'] = '';
                $unsubscribe_code              = $this->user_model->get_user_unsubscribe_code($student->parent_email);
                if (!empty($unsubscribe_code)) {
                    $coll_data['unsubscribe_code'] = $unsubscribe_code;
                } else {
                    log_message(
                        'error',
                        '********** ERROR - In collection reminder email ' .
            '- coll_data[unsubscribe_code] IS EMPTY ************ for student:' .
            print_r($student, true)
                    );
                }

                $this->user_model->send_email(
                    $student->parent_email,
                    $subject,
                    $this->load->view('email/admin/collection_reminder', $coll_data, true),
                    true,
                    $coll_data['event_name']
                );
                $recipient_count++;
            } else {
                log_message(
                    'error',
                    '********** ERROR - In collection reminder email ' .
          '- student->parent_email IS EMPTY ************ for student:' .
          print_r($student, true)
                );
            }
        }

        $this->load->model('email_notification_model');
        $this->email_notification_model->update_recipient_count(
            $coll_data['email_notification_update_id'],
            $recipient_count
        );
    }


    /**
     * Returns the list of pledges for the specified program
     * only returns deleted pledges where the $show_deleted param is set
     *
     * @param int $program_id
     * @param int $show_deleted (optional)
     * @param array $status_array_not_in (optional) array of statuses you don't want selected
     * @return object
     */
    private function get_pledges($program_id, $show_deleted = false, $status_array_not_in = null)
    {
        $view_name = 'view_program_pledges';

        if ($show_deleted == true) {
            $view_name .= '_deleted';
        }

        $this->load->library('datatables');
        $this->load->helper('program_data_helper');

        $include_delete_link = !($pledge_paid || (is_sys_admin() || (!$pledge_paid_pending && !$has_payment_scheduled)));

        $this->datatables->select(
            $view_name . '.id AS selectable_id, ' .
      $view_name . '.id ,
      participant_name,
      class,
      amount,
      pledge_type_short,
      range_est,
      DATE_FORMAT(STR_TO_DATE(ts_entered_tz, "%c/%d/%y %h:%i %p"), "%c/%d/%y %H:%i") as ts_entered_tz,
      status,
      CASE pledge_substatuses.name
        WHEN "no_substatus"
        THEN ""
        ELSE pledge_substatuses.name
      END,
      CONCAT(pledge_sponsors.first_name, " ", pledge_sponsors.last_name),
      participant_user_id',
            false
        )
                  ->from($view_name)
                  ->join('pledge_sponsors', 'pledge_sponsor_id = pledge_sponsors.id', 'left')
                  ->join('sponsor_types', 'sponsor_types.id = sponsor_type_id', 'left')
                  ->join('pledge_substatuses', 'pledge_substatus_id = pledge_substatuses.id', 'left')
                  ->where($view_name . '.program_id', $program_id)
                  ->unset_column('participant_user_id')
                  ->edit_column('selectable_id', '<input type="checkbox" value="$1" name="multiple_pledges[]" class="multiple_pledges">', 'selectable_id')
                  ->edit_column(
                      $view_name . '.id',
                      '$1',
                      '$this->build_pledge_action_links('.$view_name . '.id, participant_user_id, status)'
                  );
        if ($status_array_not_in) {
            $this->datatables->where_not_in('pledge_status_id', $status_array_not_in);
        }

        return $this->datatables->generate();
    }


    public function ajax_get_pledges_deleted($program_id)
    {
        return $this->get_pledges($program_id, true);
    }


    /**
     * Formats JSON for program pledge & payment totals chart
     *
     * @param Int - $program_id - ID of program
     */
    public function get_program_pledge_and_payment_totals($program_id, $classroom_id =0)
    {
        $this->load->model('pledge_model');
        $this->load->model('payment_model');
        $pledges_payments_totals = [];
        $confirmed_paid_pledges  = null;
        $pending_pledges         = null;
        $check_payments          = null;
        $credit_payments         = null;
        $cash_payments           = null;

        $pledges_payments_totals['pledges_and_payments']                 = (object)[];
        $pledges_payments_totals['pledges_and_payments']->series         = [];
        $pledges_payments_totals['pledges_and_payments']->pledge_o_meter = null;
        $pledges_payments_totals['pledges_and_payments']->categories     = ['Pledges','Payments'];

        $statuses = Pledge_model::get_pledged_statuses();

        // Retrieve and calculate pledge totals
        $pledge_totals = $this->pledge_model->get_program_pledge_totals_by_status($program_id, $statuses, $classroom_id);

        // Retrieve and calculate payment totals
        $payment_totals = $this->payment_model->get_program_payment_totals($program_id, $classroom_id);

        if (!empty($pledge_totals) || !empty($payment_totals)) {
            if (!empty($pledge_totals)) {
                $paid_pledges                                                    = (float)$pledge_totals[Pledge_model::STRING_PAID];
                $payment_scheduled_pledges                                       = (float)$pledge_totals[Pledge_model::STRING_PAID_PENDING];
                $confirmed_pledges                                               = (float)$pledge_totals[Pledge_model::STRING_CONFIRMED];
                $pending_pledges                                                 = (float)$pledge_totals[Pledge_model::STRING_PENDING];
                $pledges_payments_totals['pledges_and_payments']->pledge_o_meter = $pledge_totals['pledge_o_meter'];
            }

            if (!empty($payment_totals)) {
                $credit_payments                                                 = (float)$payment_totals['CC'];
                $payment_scheduled_payments                                      = $payment_scheduled_pledges;
                $cash_payments                                                   = (float)$payment_totals['cash'];
                $check_payments                                                  = (float)$payment_totals['check'];
                $cmg_payments                                                    = (float)$payment_totals['cmg'];
                $pledges_payments_totals['pledges_and_payments']->payment_totals = $payment_totals;
            }

            // Creation of array / object model expected by highcharts after JSON
            // encoding. All five categories need to be set to retain consistency
            // in the legend colors
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Pending Pledges',
          'data' => [$pending_pledges, null],
          'legendIndex' => 0,
          'color' => '#f7a35c'
        ]
            );

            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Confirmed Pledges',
          'data' => [$confirmed_pledges, null],
          'legendIndex' => 1,
          'color' => '#7cb5ec'
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Payment Scheduled Pledges',
          'data' => [$payment_scheduled_pledges, null],
          'legendIndex' => 2,
          'color' => '#90ed7d'
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Paid Online Pledges',
          'data' => [$paid_pledges, null],
          'legendIndex' => 3,
          'color' => '#29751a'
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Cash Payments',
          'data' => [null, $cash_payments],
          'legendIndex' => 5,
          'color' => '#e4d354'
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Check Payments',
          'data' => [null, $check_payments],
          'legendIndex' => 6,
          'color' => '#434348'
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Payment Scheduled Payments',
          'data' => [null, $payment_scheduled_payments],
          'legendIndex' => 7,
          'color' => '#90ed7d'
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Credit Card Payments',
          'data' => [null, $credit_payments],
          'legendIndex' => 8,
          'color' => '#29751a'
        ]
            );
        }

        return json_encode($pledges_payments_totals);
    }


    /**
     * Formats JSON for program pledge & payment totals chart
     *
     * @param Int - $program_id - ID of program
     */
    public function get_program_pledge_and_payment_by_class($program_id, $period_ordinal)
    {
        $this->load->model('pledge_model');
        $this->load->model('payment_model');
        $pledges_payments_totals                                     = [];
        $pledges_payments_totals['pledges_and_payments']             = (object)[];
        $pledges_payments_totals['pledges_and_payments']->series     = [];
        $pledges_payments_totals['pledges_and_payments']->categories = [];
        $classroom_confirmed_paid                                    = [];
        $classroom_pending                                           = [];
        $classroom_paid                                              = [];
        $classroom_payment_scheduled                                 = [];
        $classroom_confirmed                                         = [];
        $classroom_cc                                                = [];
        $classroom_cash                                              = [];
        $classroom_check                                             = [];
        $classroom_cmg                                               = [];
        $classroom_names                                             = [];
        $classroom_total_payments                                    = [];
        $statuses                                                    = Pledge_model::get_pledged_statuses();
        $totals                                                      = [];
        $pledge_totals                                               = [];
        $payment_totals                                              = [];
        $pledge_o_meter_totals                                       = [];

        // Retrieve and calculate pledge totals
        $pledge_totals = $this->pledge_model
      ->get_program_pledge_totals_by_class($program_id, $statuses, $period_ordinal);

        if (!isset($period_ordinal)) {
            // Retrieve and calculate payment totals
            $payment_totals = $this->payment_model
      ->get_program_payment_totals_by_class($program_id, $period_ordinal);
        }

        $payment_totals_by_type = $this->payment_model
      ->get_program_payment_totals($program_id);

        $totals = array_replace_recursive($pledge_totals, $payment_totals);

        if (!empty($totals)) {
            foreach ($totals as $key => $total) {
                $sort['grade_id'][$key]      = $total['grade_id'];
                $sort['pledge_totals'][$key] = (float)$total[Pledge_model::STRING_CONFIRMED] + (float)$total[Pledge_model::STRING_PAID] + (float)$total[Pledge_model::STRING_PAID_PENDING];
                $sort['teacher'][$key]       = $total['classroom'];
            }

            array_multisort(
                $sort['grade_id'],
                SORT_ASC,
                $sort['pledge_totals'],
                SORT_DESC,
                $sort['teacher'],
                SORT_ASC,
                $totals
            );
        }

        if (!empty($totals)) {
            foreach ($totals as $classroom_id => $classroom) {
                array_push($classroom_pending, (float)$classroom[Pledge_model::STRING_PENDING]);
                array_push($classroom_paid, (float)$classroom[Pledge_model::STRING_PAID]);
                array_push($classroom_payment_scheduled, (float)$classroom[Pledge_model::STRING_PAID_PENDING]);
                array_push($classroom_confirmed, (float)$classroom[Pledge_model::STRING_CONFIRMED]);

                array_push($classroom_cc, (float)$classroom['CC']);
                array_push($classroom_cash, (float)$classroom['cash']);
                array_push($classroom_check, (float)$classroom['check']);
                array_push($classroom_cmg, (float)$classroom['cmg']);

                array_push($classroom_names, $classroom['grade']." - ".$classroom['classroom']);

                array_push(
                    $classroom_total_payments,
                    ((float)$classroom['CC'] + (float)$classroom['cash'] + (float)$classroom['check'])
                );

                array_push($pledge_o_meter_totals, round($classroom['ppl_total'] + $classroom['flat_total'], 1));
            }

            if (!empty($classroom_names)) {
                $pledges_payments_totals['pledges_and_payments']->categories = $classroom_names;
            }

            if (!empty($payment_totals_by_type)) {
                $pledges_payments_totals['pledges_and_payments']->payment_totals = $payment_totals_by_type;
            }

            if (!empty($classroom_total_payments)) {
                $pledges_payments_totals['pledges_and_payments']->classroom_total_payments = $classroom_total_payments;
            }

            if (!empty($pledge_o_meter_totals)) {
                $pledges_payments_totals['pledges_and_payments']->pledge_o_meter_totals = $pledge_o_meter_totals;
            }

            // Creation of array / object model expected by highcharts after JSON
            // encoding. All five categories need to be set to retain consistency
            // in the legend colors
            if (!isset($period_ordinal)) {
                array_push(
                    $pledges_payments_totals['pledges_and_payments']->series,
                    (object)[
            'name' => 'Cash Payments',
            'data' => $classroom_cash,
            'legendIndex' => 5,
            'stack' => 'payments',
            'color' => '#e4d354'
          ]
                );
                array_push(
                    $pledges_payments_totals['pledges_and_payments']->series,
                    (object)[
            'name' => 'Check Payments',
            'data' => $classroom_check,
            'legendIndex' => 6,
            'stack' => 'payments',
            'color' => '#434348'
          ]
                );
                array_push(
                    $pledges_payments_totals['pledges_and_payments']->series,
                    (object)[
            'name' => 'Payment Scheduled',
            'data' => $classroom_payment_scheduled,
            'legendIndex' => 7,
            'stack' => 'payments',
            'color' => '#90ed7d'
          ]
                );
                array_push(
                    $pledges_payments_totals['pledges_and_payments']->series,
                    (object)[
            'name' => 'Credit Card Payments',
            'data' => $classroom_cc,
            'legendIndex' => 8,
            'stack' => 'payments',
            'color' => '#29751a'
          ]
                );
            }

            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Pending Pledges',
          'data' => $classroom_pending,
          'legendIndex' => 0,
          'stack' => 'pledges',
          'color' => '#f7a35c',
          'index' => 0
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Confirmed Pledges',
          'data' => $classroom_confirmed,
          'legendIndex' => 1,
          'stack' => 'pledges',
          'color' => '#7cb5ec',
          'index' => 1
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Payment Scheduled Pledges',
          'data' => $classroom_payment_scheduled,
          'legendIndex' => 2,
          'stack' => 'pledges',
          'color' => '#90ed7d',
          'index' => 2
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Paid Online Pledges',
          'data' => $classroom_paid,
          'legendIndex' => 3,
          'stack' => 'pledges',
          'color' => '#29751a',
          'index' => 3
        ]
            );
        }

        return json_encode($pledges_payments_totals);
    }


    /**
     * Formats JSON for program pledge & payment totals chart by pledge period
     *
     * @param Int - $program_id - ID of program
     */
    public function get_pledge_totals_by_period($program_id, $ordinal)
    {
        $this->load->model('pledge_model');
        $this->load->model('payment_model');
        $pledges_payments_totals   = [];
        $pending_pledges           = null;
        $confirmed_pledges         = null;
        $payment_scheduled_pledges = null;
        $paid_pledges              = null;

        $pledges_payments_totals['pledges_and_payments']             = (object)[];
        $pledges_payments_totals['pledges_and_payments']->series     = [];
        $pledges_payments_totals['pledges_and_payments']->categories = ['Pledges','Payments'];

        $statuses = Pledge_model::get_pledged_statuses();

        // Retrieve and calculate pledge totals
        $pledge_totals = $this->pledge_model
      ->get_program_pledge_totals_by_period($program_id, $statuses, $ordinal);

        if (!empty($pledge_totals)) {
            $pending_pledges           = (float)$pledge_totals[Pledge_model::STRING_PENDING];
            $confirmed_pledges         = (float)$pledge_totals[Pledge_model::STRING_CONFIRMED];
            $payment_scheduled_pledges = (float)$pledge_totals[Pledge_model::STRING_PAID_PENDING];
            $paid_pledges              = (float)$pledge_totals[Pledge_model::STRING_PAID];

            // Creation of array / object model expected by highcharts after JSON
            // encoding. All five categories need to be set to retain consistency
            // in the legend colors
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Pending Pledges',
          'data' => [$pending_pledges],
          'legendIndex' => 0
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Confirmed Pledges',
          'data' => [$confirmed_pledges],
          'legendIndex' => 1
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Payment Scheduled Pledges',
          'data' => [$payment_scheduled_pledges],
          'legendIndex' => 2
        ]
            );
            array_push(
                $pledges_payments_totals['pledges_and_payments']->series,
                (object)[
          'name' => 'Paid Online Pledges',
          'data' => [$paid_pledges],
          'legendIndex' => 3
        ]
            );
        }

        return json_encode($pledges_payments_totals);
    }


    /**
     * Returns the online payment enabled flag
     *
     * @param int $program_id
     * @return int
     */
    public function online_payment_enabled($program_id)
    {
        if (empty($program_id)) {
            return 0;
        }

        return $this->db->select('online_payment_enabled')
      ->from('programs')
      ->where('id', $program_id)
      ->get()->row()->online_payment_enabled;
    }


    /**
     * Returns data for lap counter report
     *
     * @param $program_id - ID of program
     */
    public function get_program_lap_counter_report($program_id)
    {
        $records_per_page = 40;
        $report           = [];

        $classes = $this->get_classrooms_in_program($program_id);
        $this->load->model('school_model');
        $school                = $this->school_model->school_for_program($program_id);
        $report['school_name'] = $school->name;

        if (!empty($classes)) {
            foreach ($classes as $class) {
                $class->participants = [];
                $participants        = $this->program_model
          ->get_students_in_program($program_id, $class->id);
                $participant_count   = count($participants);

                // Page results for ease of view rendering
                if (!empty($participants)) {
                    if ($participant_count <= $records_per_page) {
                        array_push($class->participants, $participants);
                    } else {
                        $n_pages = ceil(($participant_count / $records_per_page));
                        for ($i = 0; $i < $n_pages; $i++) {
                            array_push(
                                $class->participants,
                                array_slice(
                                    $participants,
                                    ($i * $records_per_page),
                                    $records_per_page
                                )
                            );
                        }
                    }
                }
            }
        }

        $report['classes'] = $classes;

        return $report;
    }


    public function get_program_id_by_pledge_period_id($pledge_period_id)
    {
        return $this->db->select('program_id')
      ->from('pledge_periods')
      ->where('id', $pledge_period_id)
      ->get()
      ->row()->program_id;
    }


    /**
     * Returns program missing laps if at least one participant has laps
     * @param $program_id - ID of program
     * @return Int - count of participants missing laps
     */
    public function get_missing_laps($program_id)
    {
        $num_participants_missing_laps = 0;
        $laps_entered                  = $this->db->select('1')
                ->from('view_program_students')
                ->where('program_id', $program_id)
                ->where('laps is not null')
                ->count_all_results();

        if ($laps_entered) {
            $num_participants_missing_laps = $this->db->select('1')
                ->from('view_program_students')
                ->where('program_id', $program_id)
                ->where('laps is null')
                ->count_all_results();
        }

        return $num_participants_missing_laps;
    }


    /**
     * Updates the Event Name for a Synced Program
     *
     * @param int $program_id
     * @return boolean
     */
    public function reconcile_event_name($program_id)
    {
        if (empty($program_id)) {
            return false;
        }

        $this->db->query(
            '
      UPDATE programs p
      SET event_name=(
        SELECT IF(name IS NOT NULL,CONCAT(name," Fun Run"),NULL)
        FROM schools
        WHERE id = p.school_id
      )
      WHERE (p.event_name IS NULL or p.event_name = "")
      AND p.id = ' . $program_id
        );
        return true;
    }


    public function get_better_funds_raised_for_text($program_id)
    {
        $this->load->model('microsite_model');
        return $this->microsite_model->get_better_funds_raised_for_text($program_id);
    }


    /**
     * Converts the data to csv format for export
     *
     * @param type $semester
     * @return array
     */
    public function get_programs_pledge_summary_by_semester_csv($semester)
    {
        if (empty($semester)) {
            return [];
        }

        $csv               = [];
        $program_summaries = $this->get_programs_pledge_summary_by_semester($semester);
        $this->load->model('program_todos_model');
        $todo_fields = Program_todos_model::get_programs_summary_report_fields();

        $headers   = array_merge(
            ['Program', 'Semester', 'SF ID', 'Run Date',
        'Pledged', 'Total Students', 'Registered Students Online',
        "Student's in system", 'Pledged Students', '$/Student',
        '$/Pledged Student', 'CC Payments'],
            array_values($todo_fields)
        );
        $headers[] = 'Online Payments On';
        $headers[] = 'School Processing Fee';
        $headers[] = 'Sponsor Convenience Fee';

        $csv[] = $headers;

        foreach ($program_summaries as $row) {
            $row_for_csv = [
          $row->program_name,
          $row->semester,
          $row->salesforce_id,
          substr($row->fun_run, 0, -9),
          number_format($row->total_est, 2),
          $row->total_students_from_classes, // Total Students
          $row->registered_students, // Registered Students Online
          $row->total_students,
          $row->student_part_count,
          $row->total_students ? '$'.number_format($row->total_est / $row->total_students, 2) : 0.00,
          $row->student_part_count ? '$'.number_format($row->total_est / $row->student_part_count, 2) : 0.00,
          $row->cc_payments ? '$' . number_format($row->cc_payments, 2) : '$0.00'
        ];
            foreach ($todo_fields as $todo => $header) {
                $row_for_csv[] = $row->$todo;
            }

            $row_for_csv[] = $row->online_payment_enabled ? 'Yes' : 'No';
            $row_for_csv[] = $row->school_processing_fee;
            $row_for_csv[] = $row->sponsor_convenience_fee;

            $csv[] = $row_for_csv;
        }

        return $csv;
    }


    /**
     * Undocumented function
     *
     * @param string $semester
     * @param string $delivery_method
     * @param integer $chunk_size
     * @param boolean $enable_logs
     * @param boolean $test_program
     * @return void
     */
    public function update_salesforce_programs_summary_by_semester(
        $semester,
        $delivery_method = 'sync',
        $chunk_size = 1,
        $enable_logs = false,
        $test_program = false
    ) {
        $this->load->library('salesforce_library');
        $this->load->model('rabbitmq_model');

        $successful_sync_count    = 0;
        $previous_semester        = $this->get_previous_semester($semester);
        $program_pledge_summaries = $this->get_programs_pledge_summary_by_semester($semester, $previous_semester, $test_program);

        log_message('error', "update_salesforce_programs_summary_by_semester count: " . count($program_pledge_summaries));

        $program_salesforce_objects = $this->transform_to_salesforce_programs($program_pledge_summaries);

        switch ($delivery_method) {
      case 'sync':
        $successful_sync_count += $this->salesforce_library->update_programs_chunk($program_salesforce_objects, $chunk_size);
        log_message(
            'error',
            "update_salesforce_programs_summary_by_semester success count: "
          . $successful_sync_count
          . " of " . count($program_pledge_summaries)
        );
        break;
      case 'queue':
        $program_objects_chunks = array_chunk($program_salesforce_objects, $chunk_size);
        foreach ($program_objects_chunks as $program_objects_chunk) {
            $this->rabbitmq_model->queue_model_method(
                'program_model',
                'update_to_salesforce',
                $program_objects_chunk
            );
        }
        break;
      case 'echo':
        echo json_encode($program_salesforce_objects, JSON_PRETTY_PRINT);
        break;
      default:
        $this->salesforce_library->update_programs_chunk($program_salesforce_objects, $chunk_size);
        break;
    }

        if ($enable_logs) {
            foreach ($program_salesforce_objects as $program_salesforce_object) {
                log_message('error', 'update_salesforce_programs_summary_by_semester: ' . json_encode($program_salesforce_object));
            }
        }
    }


    private function transform_to_salesforce_programs($program_pledge_summaries)
    {
        $todo_salesforce_fields = Program_todos_model::get_programs_summary_report_salesforce_fields();

        $program_salesforce_objects = [];
        foreach ($program_pledge_summaries as $row) {
            $program_salesforce_object                                   = new StdClass();
            $program_salesforce_object->Id                               = $row->salesforce_id;
            $program_salesforce_object->Total_Pledge_Locker_Sync__c      = (float)number_format($row->total_est, 2, '.', '');
            $program_salesforce_object->Students_Locker__c               = (int)$row->total_students_from_classes;
            $program_salesforce_object->Num_of_logged_on_participants__c = (int)$row->registered_students;
            $program_salesforce_object->Students_Pledged__c              = (int)$row->student_part_count;
            $program_salesforce_object->Credit_Card_Amount_Locker__c     = $row->cc_payments ? (float)number_format($row->cc_payments, 2, '.', '') : (float)'0.00';
            $program_salesforce_object->Credit_Card_Status_Activated__c  = $row->online_payment_enabled ? true : false;
            $program_salesforce_object->Service_Fee_Amount__c            = (float)$row->school_processing_fee;
            $program_salesforce_object->Convenience_Fee_Amount__c        = (float)$row->sponsor_convenience_fee;
            $program_salesforce_object->Students_in_System__c            = (float)$row->total_students;
            foreach ($todo_salesforce_fields as $todo => $salesforce_field) {
                $program_salesforce_object->$salesforce_field = $row->$todo;
            }

            array_push($program_salesforce_objects, $program_salesforce_object);
        }

        return $program_salesforce_objects;
    }


    /**
     * Undocumented function
     *
     * @param Array $program_salesforce_object
     * @return Integer this is the count of successful syncs
     */
    public function update_to_salesforce($program_salesforce_objects)
    {
        $this->load->library('salesforce_library');
        return $this->salesforce_library->update_programs($program_salesforce_objects);
    }


    public function send_program_summary_by_semester($semester, $receipt)
    {
        $this->load->model('rabbitmq_model');
        $semester          = '';
        $program_summaries = $this->get_programs_pledge_summary_by_semester_csv($semester);
        $fname             = '/tmp/programs-summary-report-' . $semester . '.csv';
        $out               = fopen($fname, 'w');

        fputcsv($out, ['stuff']);
        foreach ($program_summaries as $row) {
            fputcsv($out, $row);
        }

        $this->load->model('user_model');
        $this->email->from(
            User_model::NO_REPLY_EMAIL,
            User_model::NO_REPLY_NAME
        )
      ->to($receipt)
      ->subject('Program Summary Report - ' . $semester)
      ->attach($fname)
      ->send();

        fclose($out);
        unset($fname);
    }


    /*
     * Get previous semester
     * @param $current_semester string ("2015-02-Fall")
     * @return string, null on no result
     */


    public function get_previous_semester($current_semester)
    {
        $semesters = $this->db->distinct("semester")
      ->order_by("semester")->get("programs")->result_array();

        foreach ($semesters as $position => $semester) {
            if ($semester['semester'] == $current_semester) {
                $previous = $position - 1;
                if (isset($semesters[$previous])) {
                    return $semesters[$previous]['semester'];
                }
            }
        }
    }


    public function complete_top_prize_todos($program_id)
    {
        $data = ['has_delivered_top_prizes' => 1];
        $this->db->where('id', $program_id);
        $this->db->update('programs', $data);
    }


    public function complete_teacher_prize_todos($program_id)
    {
        $data = ['has_delivered_teacher_prizes' => 1];
        $this->db->where('id', $program_id);
        $this->db->update('programs', $data);
    }


    /**
     * Retrieve all Unit Types
     * NOTE: Here is where we will check the caching layer for Units before we hit the API again
     * @return object
     */
    public function get_all_program_unit_types()
    {
        $this->load->library('booster_api');

        $unit_types = $this->booster_api->get_unit_data();

        return $unit_types;
    }


    /**
     * Assemble Unit Types for Display in UI Dropdown ( id => Title For Display )
     * @return array key value pair of each unit ID and its display title
     */
    public function get_program_units_for_ui_select()
    {
        $unit_types     = $this->get_all_program_unit_types();
        $unit_types_out = [];

        foreach ($unit_types->data as $unit) {
            $unit_types_out[$unit->id] = $unit->title;
        }

        return $unit_types_out;
    }


    public function get_unit_id_from_program_id($program_id)
    {
        return $this->db->select('unit_id')
                    ->get_where('programs', ['id' => $program_id])
                    ->row()
                    ->unit_id;
    }


    public function attach_program_nav_bar_data_to(&$data)
    {
        $this->load->model('program_todos_model');
        $this->load->model('pledge_model');
        $data['program_todos_count']        = $this->program_todos_model->get_todos_count($data['program']->id);
        $data['student_with_pending_count'] = $this->pledge_model->count_students_with_pending($data['program']->id);
        $data['prize_report_permission']    = $this->has_prize_report_permission($data['program']->id);
    }


    // This is called via rabbit mq for eventual syncing of programs
    // from SF, via the SF library


    public function sync_salesforce_program($program_sf_id)
    {
        $this->load->library("force_igniter");
        $this->force_igniter->upsert_program($program_sf_id);
    }


    public function generate_merchant_deposit_report($program_id, $date_start, $date_end)
    {
        $this->load->library('braintree_payments');
        $program         = $this->get($program_id);
        $data['program'] = $program;
        $merchant        = $this->db->where('school_id', $program->school_id)
      ->get('braintree_merchants')->row();

        $deposits = $this->braintree_payments->
      get_merchant_deposits($merchant->braintree_merchant_id, $program->school_id, $program->filter_merchant_report_by_school, $date_start, $date_end);

        $data['show_settlement']      = ($data['program']->school_processing_fee > 0.00) ? true : false;
        $data['optional_sponsor_fee'] = $program->optional_sponsor_fee;

        $data = array_merge($data, $deposits);

        $data['view'] = 'admin/programs/reports/braintree_deposits_pledge_amount';

        $report_data = $this->load->view('admin/template_report', $data, true);
        $wkhtmltopdf = sha1(md5(microtime()));
        $this->load->library('wkhtmltopdf', [], $wkhtmltopdf);
        $this->$wkhtmltopdf->addPage($report_data);

        $merch_report_filename = "$program->id-merchant-deposits-$date_start-$date_end.pdf";
        $merch_report_filepath = sys_get_temp_dir() . "/$merch_report_filename";

        if ($this->$wkhtmltopdf->saveAs($merch_report_filepath)) {
            $this->load->model('s3_report_model');
            $this->s3_report_model->create_merchant_deposit_report($program->id, $merch_report_filename);
        }
    }


    public function generate_giving_market_certificate_report($program_id, $date_start, $date_end)
    {
        $this->load->library('booster_api');
        $this->load->model('pledge_model');

        $program = $this->get($program_id);

        $data['class_pledges_report'] = $this->pledge_model->get_class_pledges($program_id, $class_id, false, $date_start, $date_end, false);
        $data['program']              = $this->basic_program($program_id);
        $data['view']                 = 'admin/pledges/giving_market_credits_report';
        $data['unit_data']            = $this->booster_api->get_unit_data($data['program']->unit_id)->data;

        $report_data = $this->load->view('admin/template_report', $data, true);
        $wkhtmltopdf = sha1(md5(microtime()));
        $options     = ['orientation' => 'landscape', 'margin-top' => '2mm', 'margin-bottom' => '2mm'];

        $this->load->library('wkhtmltopdf', $options, $wkhtmltopdf);
        $this->$wkhtmltopdf->addPage($report_data);

        $certificate_report_filename = "$program->id-giving-market-certificates-$date_start-$date_end.pdf";
        $certificate_report_filepath = sys_get_temp_dir() . "/$certificate_report_filename";

        if ($this->$wkhtmltopdf->saveAs($certificate_report_filepath)) {
            $this->load->model('s3_report_model');
            $this->s3_report_model->create_giving_market_certificate_report($program->id, $certificate_report_filename);
        }
    }


    public function generate_merchant_transaction_report($program_id, $school_id_reporting, $date_start, $date_end)
    {
        $this->load->library('braintree_payments');
        $program  = $this->get($program_id);
        $merchant = $this->db->where('school_id', $program->school_id)->get('braintree_merchants')->row();

        $braintree_query_result = $this->braintree_payments->
    get_merchant_transactions([$merchant->braintree_merchant_id], [$program->school_id], $school_id_reporting, $date_start, $date_end);

        $merch_report_filename = "braintree_merchant_transactions_{$program_id}.csv";
        $merch_report_filepath = sys_get_temp_dir() . "/$merch_report_filename";
        $out                   = fopen($merch_report_filepath, 'w');
        $report_headers        = [
      'disbursement_date' => 'Disbursement Date',
      'settlement_amount' => 'Settlement Amount',
      'service_fee' => 'Braintree Service Fee',
      'merchant_amount' => 'Merchant Deposit Amount',
      'merchant_account_id' => 'Merchant Account',
      'type' => 'Transaction Type',
      'status' => 'Transaction Status',
      'created_at_date' => 'Created Date',
      'settlement_date' => 'Settlement Date',
      'refunded_transaction_id' => 'Refunded Transaction ID',
      'card_type' => 'Card Type',
      'card_last_four' => 'Last Four of Credit Card',
      'cardholder_name' => 'Cardholder Name',
      'card_expiration' => 'Expiration Date',
      'card_location' => 'Credit Card Customer Location',
      'cust_email' => 'Customer Email',
      'cust_phone' => 'Customer Phone',
      'billing_first_name' => 'Billing First Name',
      'billing_last_name' => 'Billing Last Name',
      'billing_address' => 'Billing Street Address',
      'billing_city' => 'Billing City (Locality)',
      'billing_state' => 'Billing State/Province (Region)',
      'billing_zip' => 'Billing Postal Code',
      'billing_country' => 'Billing Country',
      'order_id' => 'Order ID',
      'transaction_id' => 'Transaction ID'];

        fputcsv($out, array_values($report_headers));

        if (!empty($braintree_query_result)) {
            foreach ($braintree_query_result['transactions'] as $row) {
                $report_row = [];
                foreach ($report_headers as $field_name => $field_header) {
                    $report_row[] = $row[$field_name];
                }

                fputcsv($out, $report_row);
            }
        }

        // this might need to move below push to s3
        fclose($out);

        $this->load->model('s3_report_model');
        $this->s3_report_model->create_merchant_transaction_report($program->id, $merch_report_filename);
    }


    public function get_student_no_pledge_report_data($program_id)
    {
        return $this->db->select(
            '
              CONCAT(student.first_name, " ", student.last_name) AS participant_name,
              parent.first_name AS parent_first_name,
              parent.last_name AS parent_last_name,
              parent.email AS parent_email,
              mask_telephone(parent.phone, "(###) ###-####") AS parent_phone,
              classrooms.name AS class,
              grades.name AS grade_name,
              IFNULL(COUNT(pledges.id), "0") AS pledge_total
            '
        )
            ->from('participants')
              ->join('users AS student', 'participants.user_id = student.id')
              ->join('students_parents', 'student.id=students_parents.student_id')
              ->join('users AS parent', 'parent.id = students_parents.parent_id')
              ->join('classrooms', 'classrooms.id = participants.classroom_id')
              ->join('grades', 'grades.id = classrooms.grade_id')
              ->join('groups', 'groups.id = classrooms.group_id')
              ->join('users_user_groups', 'users_user_groups.user_id = student.id')
              ->join('programs', 'programs.id = groups.program_id')
              ->join('pledges', 'pledges.participant_user_id = student.id AND pledges.deleted=0', 'LEFT')
            ->where('programs.id', $program_id)
            ->where('users_user_groups.group_id <> 7 AND users_user_groups.group_id <> 2') // Exclude Teachers From Results
            ->where('student.deleted', 0)
            ->where('parent.deleted', 0)
            ->having('pledge_total = 0')
            ->group_by('student.id,parent.id')
            ->order_by('grades.id, classrooms.name, student.last_name')
            ->get()
            ->result();
    }


    public function get_override_text_for_view($program, $defaultText)
    {
        $this->load->model('program_pledge_settings_model');
        $this->load->model('school_model');
        $this->load->model('microsite_model');

        $school             = $this->school_model->school_for_program($program->id);
        $microsite          = $this->microsite_model->get_by('program_id', $program->id);
        $program_unit_id    = $program->unit_id;
        $program_event_name = $program->event_name;
        $school_name        = $school->name;

        $dbOverrideText = $microsite->overview_text_override;
        $unitTypes      = $this->get_all_program_unit_types();
        $rootDomain     = get_program_domain($program_unit_id);

        $pledge_settings = $this->program_pledge_settings_model->get_pledge_settings($program->id);

        if (is_string($dbOverrideText) && trim($dbOverrideText) !== '') {
            $textForView = $dbOverrideText;
        } else {
            $unitPlural = '';

            foreach ($unitTypes->data as $unitType) {
                if ($unitType->id == $program_unit_id) {
                    $unitPlural = $unitType->name_plural;
                    break;
                }
            }

            if ($pledge_settings->flat_donate_only) {
                $unit_range_string = $unitPlural;
            } else {
                $unit_range_string = $program->unit_range_low . ' to ' . $program->unit_range_high . ' '. $unitPlural;
            }

            // Insert event name + units + school name + domain name
            $textForView = $defaultText;
            $textForView = str_replace(':event_name', $program_event_name, $textForView);
            $textForView = str_replace(':unit_range_string', $unit_range_string, $textForView);
            $textForView = str_replace(':root_domain', $rootDomain, $textForView);
            $textForView = str_replace(':school_name', $school_name, $textForView);
        }

        return $textForView;
    }


    public function get_thank_you_override_text_for_view($microsite, $program_event_name, $defaultText)
    {
        $dbOverrideText = $microsite->thank_you_text_override;
        $unitTypes      = $this->get_all_program_unit_types();
        if (is_string($dbOverrideText) && trim($dbOverrideText) !== '') {
            $textForView = $dbOverrideText;
        } else {
            $textForView = $defaultText;
            $textForView = str_replace(':event_name', $program_event_name, $textForView);
        }

        return $textForView;
    }


    public function can_edit_fun_run()
    {
        if ($this->ion_auth->in_group([User_group_model::SYSADMIN]) &&
      in_array(ENVIRONMENT, ['stage', 'development'])) {
            return true;
        }

        return false;
    }


    public function check_unique_custom_url($url, $program_id = null)
    {
        $this->db->where('custom_url', $url);
        if ($program_id) {
            $this->db->where_not_in('id', (int)$program_id);
        }

        return $this->db->get('programs')->num_rows();
    }


    public function update_sponsor_logos($program_id, $sponsor_logo_home_dashboard = 0, $sponsor_logo_pledge_page = 0)
    {
        $this->db->where('id', (int)$program_id);
        $this->db->update(
            'programs',
            [
        'display_sponsor_logos_on_home_dashboard' => (int)$sponsor_logo_home_dashboard,
        'display_sponsor_logos_on_pledge_page' => (int)$sponsor_logo_pledge_page
      ]
        );
    }
}
