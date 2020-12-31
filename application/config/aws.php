<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

$CI =& get_instance();
$CI->load->library('environment_variable_decrypt');
// AWS security credentials
if (ENVIRONMENT == 'development' || ENVIRONMENT == 'stage') {
    $config['access_key']    = $CI->environment_variable_decrypt->get_decrypted('AWS_ACCESS_KEY');
    $config['access_secret'] = $CI->environment_variable_decrypt->get_decrypted('AWS_ACCESS_SECRET');
}
// buckets separated for CDN style hosting and streaming
// bucket_streaming is cloudfront backed
$config['bucket']                   = getenv('S3_BUCKET');
$config['s3_url']                   = getenv('S3_URL');
$config['s3_microsites']            = 'microsites/';
$config['s3_prizes']                = 'prizes/';
$config['s3_prize_video_images']    = 'prize_video_images/';
$config['s3_user_profile_images']   = 'user_profile_images/';
$config['s3_class_lists']           = 'class_lists/';
$config['s3_program_logos']         = 'program_logos/';
$config['s3_program_sponsor_logos'] = 'sponsor_logos/';
$config['s3_video_url']             = getenv('S3_VIDEO_URL');

$config['cloudfront_bucket']        = getenv('CLOUDFRONT_BUCKET');
$config['cloudfront_rtmp_url']      = getenv('CLOUDFRONT_URL');
$config['cloudfront_prizes']        = 'prizes/';
