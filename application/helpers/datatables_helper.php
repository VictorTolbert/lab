<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Get a users user groups
 *
 * Return an array of users user group names
 *
 * @access public
 * @return string
 */

if (! function_exists('get_users_user_groups')) {
    function get_users_user_groups($user_id, $external = 1)
    {
        $CI =& get_instance();

        $CI->db->select('name')
            ->from('user_groups')
            ->join('users_user_groups', 'users_user_groups.group_id = user_groups.id')
            ->where('users_user_groups.user_id', $user_id);

        if (! empty($external)) {
            $CI->db->where('type', 'External');
        }

        $user_groups = $CI->db->get()->result();

        $prepped = '';

        foreach ($user_groups as $g) {
            $prepped .= "{$g->name},";
        }

        $prepped = substr_replace($prepped, '', -1);
        return $prepped;
    }
}
