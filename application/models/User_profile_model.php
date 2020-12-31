<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
* Name:  User Profile Model
*
* Author:  David Rothman
*            dkrothman@gmail.com
*             @dkrothman
*
* Created:  12.03.2013
*
*/

class User_profile_model extends MY_Model
{
    const DEFAULT_PPL_PLEDGE_GOAL  = 10;
    const DEFAULT_FLAT_PLEDGE_GOAL = 300;

    public $_table = 'user_profiles';
    public $belongs_to = [ 'user' => [ 'model' => 'user_model' ] ];

    protected $soft_delete     = true;
    protected $soft_delete_key = 'deleted';


    /**
     * Save Student Personalization for public pledge
     * @param $student_id user id of student
     * @param array $data
     * @param bool $image_name hashed uploaded image name
     * @return $update_id if successful
     */
    public function save_student_personalization($student_id, array $data)
    {
        $updated = [
            'pledge_page_text' => $data['pledge_page_text'] ?: null,
        ];

        return $this->update_by(['user_id' => $student_id], $updated);
    }


    /**
     * save video url for a student on their profile
     * @param type $student_id
     * @param type $video_url
     * @return type
     */
    public function save_student_video($user_id, $video_url)
    {
        $video_url = $video_url ?: null;

        $updated   = [
              'video_url' => $video_url,
              'video_url_orig' => $video_url,
        ];

        return $this->update_by(['user_id' => $user_id], $updated);
    }


    public function get_profile_with_user($user_id)
    {
        return $this->db->select('*')
                 ->from('users')
                 ->join('user_profiles', 'users.id = user_profiles.user_id')
                 ->where('users.id', $user_id)
                 ->get()->row();
    }


    /**
     * Save Participant Pledge Goal
     * @param $user_id of participant
     * @param array $data
     * @return $update_id if successful
     */
    public function save_user_pledge_goal($user_id, array $data, $flat_donate_only)
    {
        $pledge_goal_amount = ($flat_donate_only) ? self::DEFAULT_FLAT_PLEDGE_GOAL : self::DEFAULT_PPL_PLEDGE_GOAL;

        $updated = [
            'pledge_goal' => $data['pledge_goal'] ?: $pledge_goal_amount,
        ];

        return $this->update_by(['user_id' => $user_id], $updated);
    }


    /**
     * Remove Student Personalization image and video url
     * @param int $student_id user id of student
     * @param string  $path to pic
     * @return int $update_id if successful
     */
    public function remove_pic_and_video($user_id, $path)
    {
        $this->aws_s3->delete_image($path);
        $this->load->library('student_star_api');
        $this->student_star_api->cancel_jobs_by($user_id);

        $result = $this->db->where('user_id', $user_id)->update($this->_table, ['image_name' => null, 'video_url' => null]);

        try {
            $this->scrape_facebook($user_id);
        } catch (\Exception $e) {
            // No catch needed
            unset($e);
        }

        return $result;
    }


    /**
     * This is called to clear the cached content in OpenGraph/Facebook
     *
     * @return void
     */
    private function scrape_facebook($user_id)
    {
        $CI = & get_instance();
        $this->load->model('user_model');
        $CI->load->config('facebook', true);
        $special_urls = $this->user_model->get_special_urls($user_id);

        $data = [
            'id' => $special_urls['Facebook']->url,
            'scrape' => true,
            'access_token' => $CI->config->item('facebook_access_token', 'facebook'),
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com');
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_exec($ch);
        curl_close($ch);
    }


    /**
     * Updates student profile pic & removes old one
     * @param $user_id - id of user
     * @param $new_img_name - name of new image file
     * @param $old_img_path - path to old image (remove)
     */
    public function update_pic($user_id, $new_img_name, $old_path=null)
    {
        if ($old_path) {
            $this->aws_s3->delete_image($old_path);
        }

        $result = $this->db->where('user_id', $user_id)->update($this->_table, ['image_name' => $new_img_name]);

        try {
            $this->scrape_facebook($user_id);
        } catch (\Exception $e) {
            // No catch needed
            unset($e);
        }

        return $result;
    }
}
