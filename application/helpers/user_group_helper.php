<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (! function_exists('get_user_group')) {
    function get_user_group($user_id = 0)
    {
        // Get a reference to the controller object
        $CI         = get_instance();
        $user_group = '';
        if ($CI->ion_auth->in_group(User_group_model::STUDENTS, $user_id)) {
            $user_group = User_group_model::STUDENTS;
        } elseif ($CI->ion_auth->in_group(User_group_model::TEACHERS, $user_id)) {
            $user_group = User_group_model::TEACHERS;
        } elseif ($CI->ion_auth->in_group(User_group_model::SPONSORS, $user_id)) {
            $user_group = User_group_model::SPONSORS;
        } elseif ($CI->ion_auth->in_group(User_group_model::PARENTS, $user_id)) {
            $user_group = User_group_model::PARENTS;
        }

        return $user_group;
    }
}
