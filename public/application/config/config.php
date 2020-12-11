<?php
defined('BASEPATH') or exit('No direct script access allowed');

$allowed_domains = array(
    'promiserves-lab.test',
    'promiseserves-lab.test',
    'promiserves-labs.test',
    'promiseserves-labs.test'
);
$default_domain  = 'lab.test';

if (in_array($_SERVER['HTTP_HOST'], $allowed_domains, true)) {
    $domain = $_SERVER['HTTP_HOST'];
} else {
    $domain = $default_domain;
}

if (! empty($_SERVER['HTTPS'])) {
    $config['base_url'] = 'https://'.$domain;
} else {
    $config['base_url'] = 'http://'.$domain;
}


$config['index_page'] = '';
$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = false;
$config['subclass_prefix'] = 'MY_';
// $config['composer_autoload'] = false;
$config['composer_autoload'] = FCPATH . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = false;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = false;
$config['encryption_key'] = '';
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = sys_get_temp_dir();
$config['sess_match_ip'] = false;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = false;
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= false;
$config['cookie_httponly'] 	= false;
$config['csrf_protection'] = false;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = true;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = false;
$config['time_reference'] = 'local';
$config['proxy_ips'] = '';

// Site Config
$config['site_name'] = '';
$congig['site_primary_color'] = '#F00';
$config['site_code'] = 'ps';
$config['site_codename'] = 'Frontier';
$config['site_description'] = 'Equipping churches to serve stronger + longer';
$config['site_affiliates'] = array(
    'lab',
    'ps',
    'sps',
    'ema',
);
$config['site_keywords'] = array(
    'JavaScript',
    'CSS',
    'HTML',
    'Design Systems',
    'PHP',
    'Laravel',
    'Ruby',
    'Python',
    'Shell',
    'User Interface Engineering',
    'Frontend',
    'Frameworks',
    'Vue.js',
    'React',
    'Nuxt',
    'Tailwind',
);
