<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (! function_exists('get_affiliate_current_merchant')) {
    // Returns the merchant type from the affiliate, unless one is already provided
    // Override of merchant type is necessary because on form errors, the currently
    // edited merchant type must be displayed for error presentation


    function get_affiliate_current_merchant($affiliate_id, $merchant_type = '')
    {
        if (empty($merchant_type)) {
            $CI = get_instance();

            $affiliate_query = $CI->db->select('merchant_type')->where('id', $affiliate_id)->get('affiliates')->row();

            return $affiliate_query->merchant_type;
        } else {
            return $merchant_type;
        }
    }
}
