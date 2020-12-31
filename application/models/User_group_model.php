<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class User_group_model extends MY_Model
{
    // Define default set of group IDs so that we do not need to find
    // by string.
    const SYSADMIN              = 1000; // System Administrator
    const ADMIN                 = 1; // Administrator
    const MEMBERS               = 2; // General User
    const STUDENTS              = 3; // Student/Participants
    const SPONSORS              = 4; // Sponsors
    const PARENTS               = 5; // Parents
    const PTA                   = 6; // PTA members
    const TEACHERS              = 7; // Teachers
    const VOLUNTEERS            = 8; // Volunteers
    const EDITORS               = 9; // Content Editors
    const DEVELOPERS            = 10; // Developers
    const API_USERS             = 270;
    const ORG_ADMIN             = 50; // Org/School Admins
    const ORG_ADMIN_COLLECTIONS = 1020; // sign in for schools to share for collections

    protected $soft_delete = true;

    public $_table        = 'user_groups';
    public $before_delete = [ 'delete_relationships' ];

    /*********************************************************************************************************************
      Get the user groups prepped for a drop down menu
    *********************************************************************************************************************/
    public function for_dropdown($extra_selector = false, $populated_only = false)
    {
        if ($populated_only === true) {
            $group_ids = $this->db->select('group_id')->group_by('group_id')->get('users_user_groups')->result();

            array_walk(
                $group_ids,
                function (&$val) {
                    $val = $val->group_id;
                }
            );

            $groups = $this->db->order_by('type')->order_by('description')->where_in('id', $group_ids)->get('user_groups')->result();
        } else {
            $groups = $this->user_group_model->order_by('type')->order_by('description')->get_all();
        }

        foreach ($groups as $g) {
            $prepped[$g->id] = empty($g->description) ? "[{$g->type}] {$g->name}" : "[{$g->type}] {$g->description}";
        }

        //If $extra_selector is TRUE, include a "helper" entry in the array at key 0

        if ($extra_selector) {
            $prepped[0] = 'User Group';
        }

        return $prepped;
    }

    public function get_names_dropdown($external_group_types = true)
    {
        $this->db->select('DISTINCT(name)')->order_by('type');
        if ($external_group_types === false) {
            $this->db->where('type', 'External');
        }

        $groups = $this->db->get($this->_table)->result();

        foreach ($groups as $g) {
            $prepped[] = $g->name;
        }

        return $prepped;
    }

    /*********************************************************************************************************************
        Get the teams for a particular user
    *********************************************************************************************************************/
    public function get_teams_for_user($user_id)
    {
        return $this->db->query(
            "SELECT `id` FROM `user_groups`
				JOIN `users_user_groups` ON `users_user_groups`.`group_id` = `user_groups`.`id`
				AND `users_user_groups`.`user_id` = '{$user_id}'
				AND `user_groups`.`type` = 'Team'"
        )->result_array();
    }

    /*********************************************************************************************************************
        Get the user groups of type Team
    *********************************************************************************************************************/
    public function field_teams_dropdown($extra_selector = false)
    {
        $teams = $this->order_by('name')->get_many_by('type', 'team');

        foreach ($teams as $t) {
            $prepped[$t->id] = $t->name;
        }

        if ($extra_selector) {
            $prepped[0] = 'Team';
        }

        return $prepped;
    }

    /*********************************************************************************************************************
        Get the user teams prepped for a drop down menu. Field Teams only!
    *********************************************************************************************************************/
    public function for_dropdown_teams($extra_selector = false)
    {
        $groups = $this->order_by('type')->get_many_by('type', 'Team');

        foreach ($groups as $g) {
            $prepped[$g->id] = empty($g->description) ? $g->name : $g->description;
        }

        //If $extra_selector is TRUE, include a "helper" entry in the array at key 0

        if ($extra_selector) {
            $prepped[0] = 'Select Team';
            asort($prepped);
        }

        return $prepped;
    }

    /*********************************************************************************************************************
      Get users for a particular group
    *********************************************************************************************************************/
    public function get_users($group_id, $limit = 15, $offset = 0)
    {
        $sql = 'SELECT `users_user_groups`.`group_id`, `users`.`id`, `users`.`email`, `users`.`first_name`, `users`.`last_name`
              FROM `users`
                   JOIN `users_user_groups` ON `users_user_groups`.`user_id` = `users`.`id`
              WHERE (NOT `deleted` OR `deleted` IS NULL)
                    AND `users_user_groups`.`group_id` = ?
              ORDER BY last_name, first_name
              LIMIT ?,?';

        $params = [ $group_id, (int)$offset, $limit ];

        $result = $this->db->query($sql, $params)->result();

        return $result;
    }

    /*********************************************************************************************************************
        Get users for a particular group
    *********************************************************************************************************************/
    public function get_team_members($group_id, $for_dropdown = false)
    {
        $sql = "SELECT `users_user_groups`.`group_id`, `users`.`id`, `users`.`first_name`, `users`.`last_name`
              FROM `users_user_groups`
              LEFT JOIN `users` on (`users_user_groups`.`user_id` = `users`.`id`)
              WHERE `users_user_groups`.`group_id` = ?
              ORDER BY `users`.`first_name`";

        $params = [ $group_id ];

        $result = $this->db->query($sql, $params)->result();

        if ($for_dropdown === false) {
            return $result;
        } else {
            foreach ($result as $r) {
                $options[$r->id] = "{$r->first_name} {$r->last_name}";
            }

            return $options;
        }
    }

    /*********************************************************************************************************************
      Count number of users in group
    *********************************************************************************************************************/

    public function count_in_group($group_id)
    {
        // Must join to `users` table, because without an FK constraint,
        // the child keys may not reference existing user entities. --toby
        $sql = 'SELECT COUNT(*) AS rows
              FROM `users_user_groups`
                   JOIN users ON users.id = users_user_groups.user_id
              WHERE (NOT `deleted` OR `deleted` IS NULL)
                    AND `users_user_groups`.`group_id` = ?';

        return $this->db->query($sql, [ $group_id ])->row()->rows;
    }

    /*********************************************************************************************************************
        Insert new groups only (from Salesforce)
    *********************************************************************************************************************/
    public function insert_new_only($groups)
    {
        $ids = [];

        foreach ($groups as $row) {
            $exists = $this->get_by('salesforce_id', $row->Id);

            $row = $this->translate_sf_tk($row);
            $row['type'] = (empty($row['salesforce_id'])) ? '' : 'team';

            if (empty($exists)) {
                $group_id = $this->insert($row);
                $ids[] = $group_id;
            } elseif (! empty($row['salesforce_id'])) {
                $this->update_by('salesforce_id', $row['salesforce_id'], $row);
            }
        }

        return $ids;
    }

    /*********************************************************************************************************************
        Does the insert many, but first eliminates those groups that already exist
    *********************************************************************************************************************/
    public function translate_sf_tk($sf_group)
    {
        unset($sf_group->attributes);

        $field_names = [
            'Id' => 'salesforce_id',
            'Name' => 'name',
            'VanaHCM__Department_Name__c' => 'name',
            'VanaHCM__Description_Department__c' => 'description',
        ];

        foreach ($sf_group as $k => $v) {
            $tk_group[$field_names[$k]] = $v;
        }

        return $tk_group;
    }

    /*********************************************************************************************************************
        Get page
    *********************************************************************************************************************/
    public function get_page($limit, $offset)
    {
        $this->db->where('deleted !=', '1')->or_where('deleted', null);

        return $this->db->get($this->_table, $limit, $offset)->result();
    }

    /*********************************************************************************************************************
        Delete user-user_group relationships when deleting a user group
    *********************************************************************************************************************/
    protected function delete_relationships($group)
    {
        $this->db->where('group_id', $group)->delete('users_user_groups');

        return $group;
    }

    /*********************************************************************************************************************
        Get all the types of user groups
        These types are a made up data point that really has no programmatic bearing. The data for these isn't
        normalized, it's just a text field in the row. Should their importance increase, we'll refactor the DB
        to have its own user_group_types table.
    *********************************************************************************************************************/
    public function types_for_dropdown($extra_selector = false)
    {
        $group_types = $this->db->select('type')->group_by('type')->get('user_groups')->result();

        foreach ($group_types as $g) {
            $prepped[$g->type] = $g->type;
        }

        // If $extra_selector is TRUE, include a "helper" entry in the array at key 0
        if ($extra_selector) {
            $prepped[0] = 'Type';
        }

        return $prepped;
    }


    /**
     * Update user_group-users relationships
     */
    public function update_relationships()
    {
        $user_groups = $this->db->select('id, salesforce_id')->where('salesforce_id !=', '')->where('deleted !=', 1)->get('user_groups')->result();

        foreach ($user_groups as $ug) {
            $users = $this->db->select('id', 'active')->where('salesforce_team_id', $ug->salesforce_id)->or_where('salesforce_profile_id', $ug->salesforce_id)->get('users')->result();

            foreach ($users as $u) {
                if ($u->active == 1) {
                    $relationship = $this->db->where('user_id', $u->id)->where('group_id', $ug->id)->get('users_user_groups')->row();

                    if (empty($relationship)) {
                        $this->db->insert('users_user_groups', ['user_id' => $u->id, 'group_id' => $ug->id]);
                    }
                }
            }
        }
    }

    /**
     * Return whether the user belongs to given group(s).
     * @param int $user_id
     * @param array|int $group_id
     * @return bool
     */
    public function has_user_group($user_id, $group_id)
    {
        $result = $this->db->select('COUNT(*) AS in_groups')
            ->where('user_id', $user_id)
            ->where_in('group_id', (array)$group_id)
            ->get('users_user_groups')
            ->result();

        return $result[0]->in_groups > 0;
    }

    /*
     * Return team for the current user
     */
    public function get_current_user_teams()
    {
        $current_user = $this->ion_auth->user()->row()->id;
        $teams = $this->get_teams_for_user($current_user);
        $teams_list = [];

        if (count($teams) >= 1) {
            foreach ($teams as $team) {
                array_push($teams_list, $team['id']);
            }

            return $teams_list;
        } else {
            return null;
        }
    }

    /**
     * Returns group ID by group name lookup
     * @param string $user_group_name - name of user group
     */
    public function user_group_id($user_group_name)
    {
        return $this->db->select('id')->where('name', $user_group_name)->get('user_groups')->row()->id;
    }
}
