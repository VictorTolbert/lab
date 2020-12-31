<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Description of Hero_Video
 *
 * @author Daniel
 */
class Hero_Video
{
    private $_api_key;
    private $_api_pass;
    private $_post_url;


    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->config('hero_video', true);
        $this->_api_key  = $this->ci->config->item('api_key', 'hero_video');
        $this->_api_pass = $this->ci->config->item('api_pass', 'hero_video');
        $this->_post_url = $this->ci->config->item('post_url', 'hero_video');
    }


    /**
     * Helper function courtesy of https://github.com/guzzle/guzzle/blob/3a0787217e6c0246b457e637ddd33332efea1d2a/src/Guzzle/Http/Message/PostFile.php#L90
     *
     * @param [type] $filename
     * @param [type] $contentType
     * @param [type] $postname
     * @return void
     */
    private function getCurlValue($filename, $contentType, $postname)
    {
        // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
        // See: https://wiki.php.net/rfc/curl-file-upload
        if (function_exists('curl_file_create')) {
            return curl_file_create($filename, $contentType, $postname);
        }

        // Use the old style if using an older version of PHP
        $value = "@{$filename};filename=" . $postname;
        if ($contentType) {
            $value .= ';type=' . $contentType;
        }

        return $value;
    }


    /**
     * Sends the image to the hero video server
     *
     * @param type $image_path file path to image
     * @param type $id_participant id of participant (user_id)
     * @param type $name_participant name of participant
     * @param type $name_school name of school or event
     * @return type boolean pass or fail
     */
    public function create_video_from_image($image_path, $user_id, $participant_name, $event_name)
    {
        $data = [
      'image_file' => $image_path,
      'id_participant' => $user_id,
      'participant_name' => $participant_name,
      'school_name' => $event_name,
      'api_key' => $this->_api_key,
      'api_pass' => $this->_api_pass,
      'callback' => base_url('api/hero_video/'),
    ];

        $curl_handler = curl_init();
        $options      = [
            CURLOPT_URL => $this->_post_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLINFO_HEADER_OUT => true, //Request header
            CURLOPT_HEADER => true, //Return header
            CURLOPT_SSL_VERIFYPEER => false, //Don't veryify server certificate
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl_handler, $options);
        $result      = curl_exec($curl_handler);
        $header_size = curl_getinfo($curl_handler, CURLINFO_HEADER_SIZE);
        $body        = substr($result, $header_size);
        curl_close($curl_handler);
        return $this->_validate_response($body);
    }


    /**
     * decides if response was a success or failure
     * if success returns the response as an object
     *
     * example response
     * {"status":202,
     * "response":"Image upload success",
     * "error":"",
     * "id_job":"8",
     * "date_submit":1425332550,
     * "estimated_completion":0}
     *
     * @param type $response
     * @return boolean
     */
    private function _validate_response($response)
    {
        $res_obj = json_decode($response);
        if ($res_obj->response === 'Image upload success') {
            return $res_obj;
        } else {
            return false;
        }
    }


    /**
     * matches hero video statuses to bootstrap statuses
     */
    public function get_status_types()
    {
        return ['image_provided' => 'default',
            'initializing' => 'info',
            'blended' => 'primary',
            'compression' => 'primary',
            'upload_to_ovp' => 'primary',
            'completed' => 'success',
            'failed' => 'danger',
            'canceled' => 'warning'];
    }


    public function get_hero_video_statuses()
    {
        // Replace all of this with api call that retrieves
        // hero_video_statuses_array in json and decodes it
        $hero_video_statuses = $this->get_fake_video_statuses();

        return $hero_video_statuses;
    }


    private function get_fake_video_statuses()
    {
        $hero_video_statuses = [];

        //create fake item
        $hero_video                      = new stdClass;
        $hero_video->id                  = 1;
        $hero_video->user_id             = 1;
        $hero_video->status              = 'image_provided';
        $hero_video->message             = 'Molestiae adipisci et sint nesciunt.';
        $hero_video->progress            = 1;
        $hero_video->retry_count         = 0;
        $hero_video->timestamps          = [
      'image_provided' => '2016-06-24T03:59:31.409Z',
      'initializing' => '2016-08-30T10:04:03.104Z',
      'blended' => '2017-01-15T06:27:01.744Z',
      'compression' => '2016-11-16T08:30:32.936Z',
      'upload_to_ovp' => '2016-04-17T18:19:14.637Z',
      'completed' => '2016-09-18T19:35:18.378Z',
      'failed' => '2017-01-03T09:51:24.538Z',
      'canceled' => '2016-07-20T12:24:54.981Z'
    ];
        $hero_video->job_duration        = 3600;
        $hero_video->processing_duration = 3000;
        $hero_video->video_link          = 'fake_video_link';
        $hero_video->instance_id         = 'fake_instance_id';
        $hero_video->agent_id            = 'fake_agent_id';

        array_push($hero_video_statuses, $hero_video);
        $hero_video->id      = 2;
        $hero_video2         = clone $hero_video;
        $hero_video2->status = 'initializing';
        array_push($hero_video_statuses, $hero_video2);
        $hero_video->id      = 3;
        $hero_video3         = clone $hero_video;
        $hero_video3->status = 'blended';
        array_push($hero_video_statuses, $hero_video3);
        $hero_video->id      = 4;
        $hero_video4         = clone $hero_video;
        $hero_video4->status = 'compression';
        array_push($hero_video_statuses, $hero_video4);
        $hero_video->id      = 5;
        $hero_video5         = clone $hero_video;
        $hero_video5->status = 'upload_to_ovp';
        array_push($hero_video_statuses, $hero_video5);
        $hero_video->id      = 6;
        $hero_video6         = clone $hero_video;
        $hero_video6->status = 'completed';
        array_push($hero_video_statuses, $hero_video6);
        $hero_video->id      = 7;
        $hero_video7         = clone $hero_video;
        $hero_video7->status = 'failed';
        array_push($hero_video_statuses, $hero_video7);
        $hero_video->id      = 8;
        $hero_video8         = clone $hero_video;
        $hero_video8->status = 'canceled';
        array_push($hero_video_statuses, $hero_video8);

        return $hero_video_statuses;
    }
}
