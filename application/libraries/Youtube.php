<?php

class Youtube
{
    /**
     * pulls out the youtube video_id and creates a youtube embed url
     * @param type $youtube_video_url
     * @return string
     */
    public function convert_url_to_embed($youtube_video_url)
    {
        if ($youtube_video_url) {
            $youtube_video_id = $this->get_youtube_video_id($youtube_video_url);

            $CI =& get_instance();

            $embed_url        = $CI->config->item('youtube_base_url') . $youtube_video_id;

            return $embed_url;
        }

        return false;
    }


    public function get_youtube_video_id($youtube_video_url)
    {
        if ($youtube_video_url) {
            $temp = explode("?v=", $youtube_video_url); // For videos like http://www.youtube.com/watch?v=...
            if (empty($temp[1])) {
                $youtube_video_url = trim($youtube_video_url, '/');
                $url_chunks        = explode("/", $youtube_video_url); // For videos like http://www.youtube.com/watch/v/..
                $temp              = end($url_chunks);
            } else {
                $temp = $temp[1];
            }

            $params_array     = explode("&", $temp); // Deleting any other params

            $youtube_video_id = $params_array[0];
        }

        return $youtube_video_id;
    }
}
