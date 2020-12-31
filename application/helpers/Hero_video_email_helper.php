<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * This helper is to allow for easy creation and sending of the hero video
 * email that is sent out to the parents when the video has been complted
 * and is ready to be shared.
 */

class Hero_Video_Email
{
    protected $ci;

    protected $participant_user_id;
    protected $user_id;
    protected $program_id;

    protected $user_first_name;
    protected $user_email_address;
    protected $participant_first_name;
    protected $event_name;

    protected $public_pledge_link;

    protected $sms_link;
    protected $facebook_link;
    protected $email_link;

    protected $unsubscribe_code;

    protected $email_view = 'email/parent/hero_video_ready';


    public function __construct($participant_user_id)
    {
        //load models
        $this->ci =& get_instance();
        $this->ci->load->model('user_model');
        $this->ci->load->model('program_model');
        $this->ci->load->model('students_parent_model');

        //set participant information
        $this->participant_user_id    = $participant_user_id;
        $participant_user             = $this->ci->user_model->get($participant_user_id);
        $this->participant_first_name = $participant_user->first_name;
        $this->event_name             = $this->ci->program_model->get_event_name_by_user_id($participant_user_id);
        $special_urls                 = $this->ci->user_model->get_special_urls($participant_user_id);

        $this->sms_link           = $special_urls['SMS']->url;
        $this->facebook_link      = $special_urls['Facebook']->url;
        $this->email_link         = $special_urls['Email']->url;
        $this->public_pledge_link = $special_urls['Link']->url;

        //set user information
        $parent_user_id           = $this->ci->students_parent_model->get_parent_by_student($participant_user_id);
        $user                     = $this->ci->user_model->get($parent_user_id);
        $this->user_email_address = $user->email;
        $this->user_first_name    = $user->first_name;
        $this->unsubscribe_code   = $this->ci->user_model->get_user_unsubscribe_code($this->user_email_address);
    }


    /**
     * creates a href shtring for mailto to share
     * @param type $participant_first_name
     * @param type $event_name
     * @param type $email_link
     * @return string
     */
    private function create_email_link_mailto($participant_first_name, $event_name, $email_link)
    {
        $mail   = "subject={$participant_first_name} made a video for "
      . "{$event_name}!&body=Friends and Family,%0D%0A%0D%0A{$participant_first_name} "
      . "is participating in the {$event_name} and made a fun video! {$participant_first_name} "
      . "is excited to learn more about fitness, leadership, and character and "
      . "then complete 30 - 35 laps at the {$event_name}.%0D%0A%0D%0AWill you please pledge "
      . "{$participant_first_name} to help raise needed funds?%0D%0A%0D%0AGo "
      . "here to watch the video and pledge: {$email_link}";
        $mailto = 'mailto:?' . $mail;
        return $mailto;
    }


    /**
     * returns the string you need to populate an href to share by sms
     * @param type $participant_first_name
     * @param type $event_name
     * @param type $sms_url
     * @return type
     */
    private function create_sms_href($participant_first_name, $event_name, $sms_url)
    {
        return "sms:?&body={$participant_first_name} is participating in the "
      . "{$event_name}! consider pledging to help our school? {$sms_url}";
    }


    /**
     * returns the user's, teacher or parent, first name
     * @return type
     */
    public function get_user_first_name()
    {
        return $this->user_first_name ? $this->user_first_name : '';
    }


    /**
     * returns the participant's first name
     * @return type
     */
    public function get_participant_first_name()
    {
        return $this->participant_first_name ? $this->participant_first_name : '';
    }


    /**
     * returns the event name of the participant
     * @return type
     */
    public function get_event_name()
    {
        return $this->event_name;
    }


    /**
     * returns sms share link
     * @return type
     */
    public function get_sms_link()
    {
        return $this->sms_link ? $this->sms_link : '';
    }


    /**
     * returns facebook share link
     * @return type
     */
    public function get_facebook_link()
    {
        return $this->facebook_link ? $this->facebook_link : '';
    }


    /**
     * returns email share link
     * @return type
     */
    public function get_email_link()
    {
        return $this->email_link ? $this->email_link : '';
    }


    /**
     * returns the link to the participants public pledge page
     * @return type
     */
    public function get_public_pledge_link()
    {
        return $this->public_pledge_link ? $this->public_pledge_link : '';
    }


    /**
     * returns the subject of the email
     * @param type $email_data
     * @return type
     */
    protected function get_subject($email_data)
    {
        return $email_data['participant_first_name'] . '\'s Student Star video!';
    }


    /**
     * returns the body of the email
     * @param type $email_data
     * @return type
     */
    protected function get_body($email_data)
    {
        return $this->ci->load->view($this->email_view, $email_data, true);
    }


    protected function get_unsubscribe_code()
    {
        return $this->unsubscribe_code;
    }


    /**
     * returns the data object required for populating the view of the email
     */
    protected function get_email_data()
    {
        return [
        'participant_first_name' => $this->get_participant_first_name(),
        'user_first_name' => $this->get_user_first_name(),
        'public_pledge_link' => $this->get_public_pledge_link(),
        'email_link_mailto' => $this->create_email_link_mailto(
            $this->get_participant_first_name(),
            $this->get_event_name(),
            $this->get_email_link()
        ),
        'sms_link_href' => $this->create_sms_href(
            $this->get_participant_first_name(),
            $this->get_event_name(),
            $this->get_sms_link()
        ),
        'facebook_link' => $this->get_facebook_link(),
        'event_name' => $this->get_event_name(),
        'unsubscribe_code' => $this->get_unsubscribe_code(),
    ];
    }


    /**
     * send the email
     */
    public function send()
    {
        $email_address = $this->user_email_address;
        $email_data    = $this->get_email_data();
        $body          = $this->get_body($email_data);
        $subject       = $this->get_subject($email_data);
        $async         = true;
        $this->ci->user_model->send_email(
            $email_address,
            $subject,
            $body,
            $async,
            $this->event_name
        );
    }
}
