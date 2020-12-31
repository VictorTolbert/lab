<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (! function_exists('is_sys_admin')) {
    function is_sys_admin()
    {
        // Get a reference to the controller object
        $CI = get_instance();

        $CI->load->model('user_group_model');

        if ($CI->ion_auth->in_group(User_group_model::SYSADMIN)) {
            return true;
        }

        return false;
    }
}

if (! function_exists('is_org_admin')) {
    function is_org_admin()
    {
        // Get a reference to the controller object
        $CI = get_instance();
        $CI->load->model('user_group_model');

        if ($CI->ion_auth->in_group(User_group_model::ORG_ADMIN)) {
            return true;
        }

        return false;
    }
}

if (! function_exists('is_org_admin_without_student_participant')) {
    function is_org_admin_without_student_participant()
    {
        // Get a reference to the controller object
        $CI = get_instance();
        $CI->load->model('user_model');
        $CI->load->model('user_group_model');

        if ($CI->ion_auth->in_group(User_group_model::ORG_ADMIN)) {
            $parent_id    = $CI->ion_auth->get_current_user_id();
            $participants = $CI->user_model->get_student_participants_for_parent($parent_id);

            if (is_array($participants) && !empty($participants)) {
                return false;
            } else {
                return true;
            }
        }

        return false;
    }
}

if (! function_exists('is_org_admin_collections')) {
    function is_org_admin_collections()
    {
        // Get a reference to the controller object
        $CI = get_instance();
        $CI->load->model('user_group_model');
        if ($CI->ion_auth->in_group(User_group_model::ORG_ADMIN_COLLECTIONS)) {
            return true;
        }

        return false;
    }
}

if (! function_exists('is_admin')) {
    function is_admin()
    {
        // Get a reference to the controller object
        $CI = get_instance();
        $CI->load->model('user_group_model');
        if ($CI->ion_auth->in_group(User_group_model::ADMIN)) {
            return true;
        }

        return false;
    }
}

if (! function_exists('program_has_giveaway_prizes')) {
    function program_has_giveaway_prizes($program_id)
    {
        $CI = get_instance();
        $CI->load->model('prize_bound_student_model');

        return $CI->prize_bound_student_model->program_has_giveaway_prizes($program_id);
    }
}

if (! function_exists('program_has_braintree')) {
    function program_has_braintree($program)
    {
        $CI = get_instance();

        $merchant = $CI->db->where('school_id', $program->school_id)->get('braintree_merchants')->row();

        if (! empty($merchant) && $merchant->status == 'active' && !empty($program->online_payment_enabled)) {
            return true;
        } else {
            return false;
        }

        return $CI->prize_bound_student_model->program_has_giveaway_prizes($program_id);
    }
}

if (! function_exists('get_groups_for_program')) {
    function get_groups_for_program($program_id)
    {
        $CI = get_instance();
        $CI->load->model('group_model');

        return $CI->group_model->groups_for_program($program_id, true);
    }
}

if (! function_exists('team_member_has_program_access')) {
    function team_member_has_program_access(int $program_id)
    {
        $CI = get_instance();
        $CI->load->model('program_model');

        if (is_admin()) {
            $program = $CI->program_model->get($program_id);

            // Check that program has team_id value set
            if ($program->team_id !== null) {
                $CI->load->model('user_group_model');
                $CI->load->model('organization_administrator_model');

                $user_group_team_ids = $CI->user_group_model->get_current_user_teams();

                // Check that current user has permissions to access to the program
                if (in_array($program->team_id, $user_group_team_ids)) {
                    return true;
                }
            }
        }

        return false;
    }
}
