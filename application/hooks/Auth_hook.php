<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Auth_Hook
{
    protected $CI;
    protected $allowed_groups = [];

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    /*********************************************************************************************************************
    It does the login check/redirection routine for all URL's containing 'admin'
    *********************************************************************************************************************/
    public function admin_auth_check()
    {
        //Find out whether this is an admin screen
        $segments = $this->CI->uri->segment_array();

        // controllers that require authentication
        $auth_array = [
            'admin',
        ];

        //methods allowed without authentication inside authenticated controllers
        $methods_allowed = [
              'pledges' => ['validate', 'validate_edit', 'validate_pledge'],  //public pledge page pledging
              'programs' => ['shirts'],
        ];

        if ($segments[1] === 'api' && $segments[2] === 'report' && ! $this->CI->input->is_cli_request()) {
            if ($this->report_api_auth_check($segments) === false) {
                return show_404();
            }
        }

        if (in_array($segments[1], $auth_array) && ! $this->CI->input->is_cli_request()) {
            if (! $this->CI->ion_auth->is_admin() && ! $this->CI->ion_auth->is_org_admin()) {
                //Log unauthorized attempt to access page
                if ($segments[2] && $methods_allowed[$segments[1]] && in_array($segments[2], $methods_allowed[$segments[1]])) {
                    return true;
                }

                login_redirect(true, 'auth/login_email');
            } elseif ($this->CI->ion_auth->is_org_admin()) {
                //get the segments after a reroute - notice uri->rsegment_array()
                $rsegments = $this->CI->uri->rsegment_array();
                $this->CI->load->library('org_admin_security');
                $authorized = $this->CI->org_admin_security->authorize($rsegments);
                if (! $authorized) {
                    $this->CI->session->set_flashdata(
                        'admin_message',
                        'Sorry, you are not authorized to access that page.'
                    );

                    redirect('/admin/schools');
                }
            }
        }
    }


    public function report_api_auth_check($segments)
    {
        $report_name = $segments[3];
        $access_token_user_id = $segments[4];
        $access_token = $segments[5];

        $this->CI->load->library('Report_api/Authenticator', [$access_token_user_id, $access_token]);
        $this->CI->load->library('Report_api/Authorize_factory');

        if ($this->CI->authenticator->isAuthenticated() === false) {
            return false;
        }

        try {
            $authorizer = $this->CI->authorize_factory->get($report_name, $this->CI->authenticator->getAuthId(), array_slice($segments, 5));
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return false;
        }

        return $authorizer->isAuthorized();
    }
}
