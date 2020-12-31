<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (! function_exists('url_to_id')) {
    function video_url_to_id($url)
    {
        if (preg_match('/\bvimeo.com\b/', $url)) {
            $vimeo_path       = parse_url($url, PHP_URL_PATH);
            $vimeo_path_parts = explode('/', $vimeo_path);
            $path_length      = count($vimeo_path_parts);
            $vimeo_id         = $vimeo_path_parts[$path_length - 1];

            if (ctype_digit($vimeo_id)) {
                $embed['hash']   = $vimeo_id;
                $embed['source'] = 'vimeo';
            } else {
                $embed = false;
            }
        } else {
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);

            if ($matches) {
                $embed['hash']   = $matches[1];
                $embed['source'] = 'youtube';
            } else {
                $embed = false;
            }
        }

        $embed['original_url'] = $url;

        return $embed;
    }
}
