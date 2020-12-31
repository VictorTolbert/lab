<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


function image_upload($file_field, $upload_dir, $allowed_types = 'gif|jpg|jpeg|jpe|png')
{
    $CI =& get_instance();
    $CI->config->load('urls');
    $CI->load->library('upload');

    $upload_dir = (substr($upload_dir, 0) === '/') ? $upload_dir : '/' . $upload_dir;

    if (! isset($upload_dir) || empty($upload_dir)) {
        $upload_dir = $CI->config->item('user_files_folder');
    } elseif (! preg_match('/^\.\.\/.*$/', $upload_dir)) {
        $upload_dir = $CI->config->item('user_files_folder') . $upload_dir;
    }

    $config['file_name'] = substr(md5(mt_rand()), 0, 8) . '_' . $_FILES[$file_field]['name'];
    $config['upload_path'] = realpath($upload_dir);
    $config['allowed_types'] = $allowed_types;
    $config['max_size'] = '512';
    $config['overwrite'] = false;
    $config['encrypt_name'] = false;

    $CI->upload->initialize($config);

    if (! $CI->upload->do_upload($file_field)) {
        $status = ['uploaded' => false, 'errors' => $CI->upload->display_errors()];
    } else {
        $file_data = $CI->upload->data();
        $status    = ['uploaded' => true, 'file_name' => $file_data["file_name"]];
    }

    return $status;
}
