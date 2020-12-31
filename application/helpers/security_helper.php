<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (strpos($_SERVER['REQUEST_URI'], '../') !== false) {
    show_error('Forbidden Request', 403);
}

if (! function_exists('xss_filter')) {
    function xss_filter($str)
    {
        return htmlentities($str, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
}


if (! function_exists('xss_json')) {
    function xss_json($obj)
    {
        return json_encode($obj, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS);
    }
}
