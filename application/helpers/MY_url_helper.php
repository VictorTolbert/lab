<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * CodeIgniter URL Helpers
 *
 * @package    CodeIgniter
 * @subpackage  Helpers
 * @category  Helpers
 * @author    Epic Labs
 */

 /*********************************************************************************************************************
   Redirect to login. If user was attempting t access a page within our domain, redirect them after login
 *********************************************************************************************************************/

if (! function_exists('login_redirect')) {
    /**
     * Saves the link to redirect to after login in session, and redirects to login
     *
     */
    function login_redirect($save_to_flash = true, $login_url = 'auth/login')
    {
        $CI     =& get_instance();

        $redirect = (stristr(current_url(), base_url())) ? current_url() : base_url();

        if ($save_to_flash) {
            $CI->session->set_userdata('post_login_url', $redirect);
        }

        redirect($login_url);
    }
}

/*********************************************************************************************************************

  Asset url helper

*********************************************************************************************************************/

if (! function_exists('asset_url')) {
    function asset_url($file_path)
    {
        //Ex. js/script.js or css/styles.css

        $CI =& get_instance();

        $CI->config->load('urls');

        $file_path = (substr($file_path, 0) === '/') ? $file_path : '/' . $file_path;

        return site_url($CI->config->item('assets_folder') . $file_path);
    }
}

/*********************************************************************************************************************

  User uploaded files url helper

*********************************************************************************************************************/

if (! function_exists('user_file_url')) {
    function user_file_url($file_name)
    {
        //Ex. js/script.js or css/styles.css
        $CI =& get_instance();

        $CI->config->load('urls');

        $file_name = (substr($file_path, 0) === '/') ? $file_name : '/' . $file_name;

        return site_url($CI->config->item('user_files_folder') . $file_name);
    }
}


/*********************************************************************************************************************

  User uploaded files url helper

*********************************************************************************************************************/

if (! function_exists('vimeo_url')) {
    function vimeo_url($video_location)
    {
        if (! preg_match('/vimeo/', $video_location) && ! empty($video_location)) {
            $video_url = 'http://vimeo.com/' . $video_location;
        } elseif (! empty($video_location)) {
            $video_url = $video_location;
        } else {
            $video_url = "";
        }

        return $video_url;
    }
}

if (! function_exists('s3_url')) {
    function s3_url($file_name)
    {
        $CI =& get_instance();

        $CI->config->load('aws', true);

        $file_name = (substr($file_path, 0) === '/') ? $file_name : '/' . $file_name;

        return $CI->config->item('s3_url', 'aws') . $file_name;
    }
}

if (! function_exists('cloudfront_url')) {
    function cloudfront_url($file_name, $player_formatted = false)
    {
        $CI =& get_instance();

        $CI->config->load('aws', true);

        if (empty($player_formatted)) {
            $file_name = (substr($file_path, 0) === '/') ? $file_name : '/' . $file_name;
            return $CI->config->item('cloudfront_rtmp_url', 'aws') . $file_name;
        } else {
            return $CI->config->item('cloudfront_rtmp_url', 'aws') . '/cfx/st/mp4:' . $file_name;
        }
    }
}

if (! function_exists('attach_ga_campaign_query')) {
    function attach_ga_campaign_query($url, $name, $additional_params = null)
    {
        // Get a reference to the controller object
        $CI = get_instance();

        $CI->load->model('referrer_model');

        $referrer = $CI->referrer_model->get_by('name', $name);

        $campaign_params = [
            'utm_source'   => $referrer->source,
            'utm_medium'   => $referrer->medium,
            'utm_content'  => $referrer->content,
            'utm_campaign' => $referrer->campaign,
        ];

        $url_params = (is_array($additional_params)) ? array_merge($campaign_params, $additional_params) : $campaign_params;

        $campaign_query = http_build_query($url_params);

        return "$url?$campaign_query";
    }
}

if (! function_exists('reattach_ga_campaign_query')) {
    function reattach_ga_campaign_query($url)
    {
        // Get a reference to the controller object
        if (empty($_GET['utm_source'])) {
            return $url;
        } else {
            $campaign_query = http_build_query($_GET);

            return "$url?$campaign_query";
        }
    }
}

if (! function_exists('login_background')) {
    function login_background()
    {
        if (strpos($_SERVER['HTTP_HOST'], 'book') !== false) {
            return asset_url('images/bookfit_login_bg.jpg');
        } else {
            return asset_url('images/dash_login_bg.jpg');
        }
    }
}

/**
 * Generates unsubscribe link for inclusion in emails
 *
 * @param $unsubscribe_code - unique unsubscribe code based on user email
 * @return - returns HTML link to unsubscribe page
 */
if (! function_exists('unsubscribe_link')) {
    function unsubscribe_link($unsubscribe_code)
    {
        $unsubscribe_link = '<a href="' . site_url('/email-preferences?hash=' . $unsubscribe_code) . '">Unsubscribe</a>';

        return $unsubscribe_link;
    }
}

if (! function_exists('get_titan_url')) {
    function get_titan_url($path)
    {
        return site_url('/v3/' . $path);
    }
}


if (! function_exists('get_titan_admin_url')) {
    function get_titan_admin_url($path)
    {
        return getenv('TITAN_ADMIN_URL') . $path;
    }
}
