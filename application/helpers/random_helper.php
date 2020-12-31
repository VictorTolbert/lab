<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


function random_alphanumeric($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}


function generate_secure_random_string($size)
{
    return random_bytes((int) $size);
}
