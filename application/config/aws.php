<?php

defined('BASEPATH') or exit('No direct script access allowed');

$CI =& get_instance();
$CI->load->library('environment_variable_decrypt');

// AWS security credentials
if (ENVIRONMENT == 'development' || ENVIRONMENT == 'stage') {
    $config['access_key'] = $CI->environment_variable_decrypt->get_decrypted('AWS_ACCESS_KEY');
    $config['access_secret'] = $CI->environment_variable_decrypt->get_decrypted('AWS_ACCESS_SECRET');
}

$config['bucket'] = getenv('S3_BUCKET');
$config['s3_url'] = getenv('S3_URL');
