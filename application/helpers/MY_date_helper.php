<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (! function_exists('simple_date')) {
    function simple_date($date_string, $time = null)
    {
        $format = ($time) ? 'm/d/y H:i' : 'm/d/Y';
        return (empty($date_string)) ? '' : date($format, strtotime($date_string));
    }
}

if (! function_exists('mysql_date')) {
    function mysql_date($date_string)
    {
        return (empty($date_string)) ? '' : date('Y-m-d H:i:s', strtotime($date_string));
    }
}
