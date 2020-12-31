<?php

class Jwplayer
{
    private $ci;
    private $_endpoint;
    private $_key;
    private $_secret;
    private $_version = '1.4';

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->config('jwplayer', true);
        $this->_endpoint = $this->ci->config->item('endpoint', 'jwplayer');
        $this->_key = $this->ci->config->item('key', 'jwplayer');
        $this->_secret = $this->ci->config->item('secret', 'jwplayer');
    }


    /* JW Platform list call
     *
     * @param array
     * @return array result from call to BT
     */
    public function get_videos($args = [], $video_key_only = false)
    {
        $result_limit = 500;
        $result       = $this->call("/videos/list", $args);
        $total_videos = $result["total"];
        $video_result = [];

        // this will iterate the API result limit to assemble one set
        if ($result["status"] == "ok" && $total_videos > 0) {
            $iterations = 10;
            $offset     = 0;

            for ($i = 0; $i < $iterations; $i++) {
                $args["result_limit"]  = $result_limit;
                $args["result_offset"] = $offset;
                $offset               += $result_limit;
                $result                = $this->call("/videos/list", $args);
                if ($result["status"] == "ok") {
                    foreach ($result["videos"] as $vid) {
                        $video_result[] = $video_key_only ? $vid["key"] : $vid;
                    }
                } elseif ($result["code"] == "RateLimitExceeded") {
                    // attempt to sleep through rate limit
                    sleep(30);
                }
            }
        }

        return $video_result;
    }


    public function delete_videos($video_keys)
    {
        $video_keys = is_array($video_keys) ? implode($video_keys, ",") : $video_keys;
        $delete_result = $this->call("/videos/delete", ['video_key' => $video_keys]);

        if (! empty($delete_result["status"]) && $delete_result["status"] == "ok") {
            return $delete_result["videos"];
        } else {
            log_message('error', 'Hero JW Player delete - Bad Response: ' . print_r($delete_result, true));
            return [];
        }
    }


    // RFC 3986 complient rawurlencode()
    // Only required for phpversion() <= 5.2.7RC1
    // See http://www.php.net/manual/en/function.rawurlencode.php#86506
    private function _urlencode($input)
    {
        if (is_array($input)) {
            return array_map(['_urlencode'], $input);
        } elseif (is_scalar($input)) {
            return str_replace('+', ' ', str_replace('%7E', '~', rawurlencode($input)));
        } else {
            return '';
        }
    }


    // Sign API call arguments
    private function _sign($args)
    {
        ksort($args);
        $sbs = "";
        foreach ($args as $key => $value) {
            if ($sbs != "") {
                $sbs .= "&";
            }

            // Construct Signature Base String
            $sbs .= $this->_urlencode($key) . "=" . $this->_urlencode($value);
        }

        // Add shared secret to the Signature Base String and generate the signature
        $signature = sha1($sbs . $this->_secret);

        return $signature;
    }


    // Add required api_* arguments


    private function _args($args)
    {
        $args['api_nonce']     = str_pad(mt_rand(0, 99999999), 8, STR_PAD_LEFT);
        $args['api_timestamp'] = time();

        $args['api_key'] = $this->_key;

        if (! array_key_exists('api_format', $args)) {
            // Use the serialised PHP format,
            // otherwise use format specified in the call() args.
            $args['api_format'] = 'php';
        }

        // Add API kit version
        $args['api_kit'] = 'php-' . $this->_version;

        // Sign the array of arguments
        $args['api_signature'] = $this->_sign($args);

        return $args;
    }


    // Construct call URL


    public function call_url($call, $args=[])
    {
        $url = $this->_endpoint . $call . '?' . http_build_query($this->_args($args), "", "&");
        return $url;
    }


    // Make an API call


    public function call($call, $args=[])
    {
        $url = $this->call_url($call, $args);

        $response = null;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        $response = curl_exec($curl);
        curl_close($curl);

        //@codingStandardsIgnoreLine
        $unserialized_response = @unserialize($response);

        return $unserialized_response ? $unserialized_response : $response;
    }


    /**
     * creates a jwplayer embed url
     *
     * @param string $video_id
     * @return string
     */
    public function convert_url_to_embed($video_id)
    {
        if ($video_id) {
            $embed_url = $this->ci->config->item('jwplayer_base_url') . $video_id . '-' . $this->ci->config->item('jwplayer_config') . '.html';
            return $embed_url;
        }

        return false;
    }
}
