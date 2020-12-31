<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


/*
| -------------------------------------------------------------------------
| File upload class preferences
| -------------------------------------------------------------------------
|
*/

$config['upload_path']                 = '../uploads/';
$config['allowed_types']               = 'gif|jpg|jpeg|png';
$config['overwrite']                   = false;
$config['max_size']                    = '5120';
$config['max_width']                   = '0';
$config['max_height']                  = '0';
$config['max_filename']                = '0';
$config['encrypt_name']                = true;
$config['remove_spaces']               = true;
$config['sponsor_logos_allowed_count'] = getenv('SPONSOR_LOGOS_ALLOWED_COUNT');
