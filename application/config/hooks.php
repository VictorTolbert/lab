<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['pre_system'][] = array(
    'class'    => 'site_offline_hook',
    'function' => 'is_offline',
    'filename' => 'site_offline_hook.php',
    'filepath' => 'hooks',
);

$hook['pre_system'][] = array(
   'class'    => 'Whoops_hook',
   'function' => 'bootWhoops',
   'filename' => 'whoops_hook.php',
   'filepath' => 'hooks',
   'params'   => array(),
);
