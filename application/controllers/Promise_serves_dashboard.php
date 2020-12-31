<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        $this->load->helper(array('form','url','site'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();

        date_default_timezone_set('UTC');

        // $this->website_model->require_login();
        $this->security_model->secure_resource(1);
    }

    public function index()
    {
        $got = $this->input->get();
        $view = 'dashboard_advocate_view';
        $data = array();
        $data['community_ids'] = array();
        $data['use_notifications'] = 0;

        if (! empty($_SESSION['data']['controller']['dashboard']) && empty($data['force_update']) && 1 == 2) {
            $data = $_SESSION['data']['controller']['dashboard'];
        } else {
            $limiter = $this->website_model->set_limiter_sessions();

            $data['view_limiter'] = $limiter;
            $data['user'] = $_SESSION['logged_in'];
            $data['needs'] = array();

            $template_version = get_site_template();
            $data['nav_active'] = $this->website_model->get_active_nav_items();
            $data['template_version'] = $template_version;
            $data['t'] = get_submitted_by_human_challenge();

            if (! empty($data['user'])) {
                $data['dash']['team'] = $this->dashboard_model->get_dashboard_active_community_team_members($data['user']);
            } else {
                $data['dash']['team'] = array();
            }

            $data['content'] = array();

            $data['img_base'] = get_img_base();
            $data['css_base'] = get_css_base();
            $data['site_body_tag'] = '<body class="ltp-body" id="">';

            $data['role_scope'] = 'staff';
            $data = $this->website_model->get_role_scope_objects($data);

            $data['site_sidebar'] = $this->load->view('site_' . $template_version . '_sidebar_view', $data, true);
            $data['site_header'] = $this->load->view('site_' . $template_version . '_header_view', $data, true);
            $data['site_footer'] = $this->load->view('site_' . $template_version . '_footer_view', $data, true);

            $get_access_level = $this->security_model->get_active_access_level();

            // Override for Catie Todaro
            if ($data['user']['id_people'] == 222) {
                $get_access_level = 85;
            }

            // override for Ty
            if ($data['user']['id_people'] == 283) {
                $get_access_level = 96;
            }

            switch ($get_access_level) {
                case 1:
                case 10:
                    // For prospects of all kinds
                    $view = 'dashboard_prospect_volunteer_view';
                break;
                case 15:
                    // Families
                    $data['communities'] = $this->communities_model->get_communities(
                        array(
                            'id_families' => $data['user']['id_families'],
                            'view' => 'by_family',
                            'debug' => get_req('debug'),
                            'status' => 'active',
                            'order' => 'c.date_start',
                            'order_dir' => 'ASC',
                        )
                    );
                    if (! empty($data['communities'][0]['id_community'])) {
                        foreach ($data['communities'] as $cur) {
                            $data['community_ids'][] = $cur['id_community'];
                        }

                        $data['needs'] = $this->needs_model->get_needs(
                            array(
                                'community_ids' => $data['community_ids'],
                                'debug' => 0,
                                'with_assignments' => 1,
                            )
                        );
                    }

                    $view = 'dashboard_family_view';
                break;
                case 18:
                    // Triage Volunteers
                    $community_ids = $this->people_model->get_persons_active_care_community_ids(
                        array(
                            'id_people' => $data['user']['id_people'],
                        )
                    );

                    if (empty($community_ids)) {
                        $data['volunteer_awaiting_team'] = 1;
                    }

                    $view = 'dashboard_triage_volunteer_view';
                break;
                case 30:
                case 20:
                    // Volunteers
                    $data['communities'] = $this->communities_model->get_communities(
                        array(
                            'id_volunteer' => $data['user']['id_people'],
                            'view' => 'by_volunteer',
                            'debug' => get_req('debug'),
                            'status' => 'active',
                            'order' => 'c.date_start',
                            'order_dir' => 'ASC',
                        )
                    );

                    if (! empty($data['communities'][0]['id_community'])) {
                        foreach ($data['communities'] as $cur) {
                            $data['community_ids'][] = $cur['id_community'];
                        }

                        $data['needs'] = $this->needs_model->get_needs(
                            array(
                                'community_ids' => $data['community_ids'],
                                'debug'=> 0,
                                'with_assignments' => 1,
                            )
                        );
                    }

                    $cal_sess = $this->calendar_model->get_calendar_session_limiters();

                    if (empty($cal_sess['id_affiliate'])) {
                        $_SESSION['calendar']['id_communities'] = $data['communities'];
                        $_SESSION['calendar']['id_affiliate'] = $this->affiliates_model->get_active_affiliate_id();
                    }

                    if ($data['user']['people_email_primary'] == 'strawser.brian@gmail.com') {
                        //	dds($_SESSION);
                    }

                    $view = 'dashboard_volunteer_view';
                break;
                case 35:
                    // Team Leaders
                    $data['communities'] = $this->communities_model->get_communities(
                        array(
                            'id_team_leader' => $data['user']['id_people'],
                            'view' => 'by_team_leader',
                            'debug' => get_req('debug'),
                            'status' => 'active',
                            'order' => 'c.date_start',
                            'order_dir' => 'ASC',
                        )
                    );

                    if (! empty($data['communities'][0]['id_community'])) {
                        foreach ($data['communities'] as $cur) {
                            $data['community_ids'][] = $cur['id_community'];
                        }

                        $data['needs'] = $this->needs_model->get_needs(
                            array(
                                'community_ids' => $data['community_ids'],
                                'debug' => 0,
                                'with_assignments' => 1,
                            )
                        );
                    }

                    $view = 'dashboard_team_leader_view';
                break;
                case 60:
                case 65:
                    // Advocates
                    $cal_sess = $this->calendar_model->get_calendar_session_limiters();

                    if (empty($cal_sess['id_affiliate'])) {
                        $_SESSION['calendar']['id_affiliate'] = $this->affiliates_model->get_active_affiliate_id();
                    }

                    if (empty($cal_sess['id_church'])) {
                        $_SESSION['calendar']['id_church'] = $data['user']['id_home_church'];
                    }

                    $data['communities'] = $this->communities_model->get_communities(
                        array(
                            'id_advocate' => $data['user']['id_people'],
                            'view' => 'activeadvocatecommunities',
                            'debug' => get_req('debug'),
                            'order' => 'c.date_start',
                            'order_dir' => 'ASC',
                        )
                    );

                    if (! empty($data['communities'][0]['id_community'])) {
                        foreach ($data['communities'] as $cur) {
                            $data['community_ids'][] = $cur['id_community'];
                        }

                        $data['needs'] = $this->needs_model->get_needs(
                            array(
                                'community_ids' => $data['community_ids'],
                                'debug'=> 0,
                                'with_assignments' => 1,
                            )
                        );
                    }


                    $data['church_communities']	= $this->communities_model->get_communities(
                        array(
                            'id_church' => $data['user']['id_home_church'],
                            'view' => 'activeadvocatecommunities',
                            'debug' => get_req('debug'),
                            'order' => 'c.date_start',
                            'order_dir' => 'ASC',
                        )
                    );

                break;
                case 66:
                case 70:
                    // Lead Advocates / Church Staff
                    if (! empty($data['user']['id_home_church'])) {
                        $data['id_church_use'] = $data['user']['id_home_church'];
                    }

                    if (! empty($data['user']['id_home_church'])) {
                        $data['id_church_use'] = $data['user']['id_church_parent'];
                    }

                    $cal_sess = $this->calendar_model->get_calendar_session_limiters();

                    if (empty($cal_sess['id_affiliate'])) {
                        $_SESSION['calendar']['id_affiliate'] = $this->affiliates_model->get_active_affiliate_id();
                    }

                    if (empty($cal_sess['id_church']) && ! empty($data['id_church_use'])) {
                        $_SESSION['calendar']['id_church'] = $data['id_church_use'];
                    }

                    $data['communities'] = $this->communities_model->get_communities(
                        array(
                            'id_advocate' => $data['user']['id_people'],
                            'view' => 'activeadvocatecommunities',
                            'id_church' => $data['id_church_use'],
                            'debug' => get_req('debug'),
                            'order' => 'c.community_name',
                            'order_dir' => 'ASC',
                        )
                    );

                    if (! empty($data['communities'][0]['id_community'])) {
                        foreach ($data['communities'] as $cur) {
                            $data['community_ids'][] = $cur['id_community'];
                        }

                        $data['needs'] = $this->needs_model->get_needs(
                            array(
                                'community_ids' => $data['community_ids'],
                                'debug' => 0,
                                'with_assignments' => 1,
                            )
                        );
                    }


                    $data['church_communities']	= $this->communities_model->get_communities(
                        array(
                            'id_church' => $data['id_church_use'],
                            'view' => 'activeadvocatecommunities',
                            'debug' => get_req('debug'),
                            'order' => 'c.date_start',
                            'order_dir' => 'ASC',
                        )
                    );

                break;
                case 85:
                    // manager
                    // Check for staff who are also advocates
                    if ($this->security_model->user_has_advocate_access()) {
                        $data['communities'] = $this->communities_model->get_communities(
                            array(
                                'id_advocate' => $data['user']['id_people'],
                                'view' => 'activeadvocatecommunities',
                                'debug' => get_req('debug'),
                                'order' => 'c.date_start',
                                'bypass_affiliate' => 1,
                                'order_dir' => 'ASC',
                            )
                        );

                        if (! empty($data['communities'][0]['id_community'])) {
                            foreach ($data['communities'] as $cur) {
                                $data['community_ids'][] = $cur['id_community'];
                            }

                            $data['needs'] = $this->needs_model->get_needs(
                                array(
                                    'community_ids' => $data['community_ids'],
                                    'debug' => 0,
                                    'with_assignments' => 1,
                                )
                            );
                        }
                    }

                    $view = 'dashboard_manager_view';
                break;
                case 95:
                case 80:
                    // staff
                    // Check for staff who are also advocates
                    if ($this->security_model->user_has_advocate_access()) {
                        $data['communities'] = $this->communities_model->get_communities(
                            array(
                                'id_advocate' => $data['user']['id_people'],
                                'view' => 'activeadvocatecommunities',
                                'debug' => get_req('debug'),
                                'order' => 'c.date_start',
                                'bypass_affiliate' => 1,
                                'order_dir' => 'ASC',
                            )
                        );

                        if (! empty($data['communities'][0]['id_community'])) {
                            foreach ($data['communities'] as $cur) {
                                $data['community_ids'][] = $cur['id_community'];
                            }

                            $data['needs'] = $this->needs_model->get_needs(array('community_ids' => $data['community_ids'], 'debug'=> 0, 'with_assignments' => 1));
                        }
                    }

                break;
                case 96:
                    // leadershis
                    // Check for staff who are also advocates
                    if ($this->security_model->user_has_advocate_access()) {
                        $data['communities'] = $this->communities_model->get_communities(
                            array(
                                'id_advocate' => $data['user']['id_people'],
                                'view' => 'activeadvocatecommunities',
                                'debug' => get_req('debug'),
                                'order' => 'c.date_start',
                                'bypass_affiliate' => 1,
                                'order_dir' => 'ASC',
                            )
                        );

                        if (! empty($data['communities'][0]['id_community'])) {
                            foreach ($data['communities'] as $cur) {
                                $data['community_ids'][] = $cur['id_community'];
                            }

                            $data['needs'] = $this->needs_model->get_needs(
                                array(
                                    'community_ids'=> $data['community_ids'],
                                    'debug' => 0,
                                    'with_assignments' => 1,
                                )
                            );
                        }
                    }

                    $view = 'dashboard_leadership_view';
                break;
            }
        }

        $this->load->view($view, $data);

        // Free up memory
        $data = null;
        $communities = null;
        $got = null;
        $template_version = null;

        unset($data);
        unset($communities);
        unset($got);
    }

    public function sandbox()
    {
        $r = $this->people_model->get_people_near_place(
            array(
                'lat' => '33.97615460',
                'lng' => '-84.13824710',
                'assignment_type' => 'people_to_church',
                'role_scope' => 'community_volunteer',
            )
        );

        dds($r);
    }

    public function ajax_make_quick_link($vars = null)
    {
        $type = get_req('type', 'refer-family');
        $r = array('st' => 1, 'html' => '');
        $text = '';
        $link = '';

        switch (strtolower($type)) {
            case 'refer-family':
                $text = '<p class="text-center">Below you will find the link used to <strong>refer a family for care</strong>. This link is to be sent to the person referring the family only (not the family requesting care.</p><p class="text-center">Please use the <em>Request Care</em> link to send directly to families who wish to request care.</p>';
                $link = base_url() . 'refer-family';
            break;
            case 'request-care-community':
            case 'request-cc':
                $text = '<p class="text-center">Below you will find the link used for a <strong>family to directly request care</strong>.</p><p class="text-center"p>To protect the family\'s prvacy, please make sure that only the family fills this form out.</p>';
                $link = base_url() . 'request-care-community';
            break;
        }

        $r['html'] = $text;
        $r['html'] .= '<p class="text-center"><strong><span id="modal-copyrsvp-link"><a href="' . $link . '" target="_blank">' . $link . '</a></span></strong></p>';
        $r['html'] .= '<p class="text-center"><button id="modal-copy-ajax-' . $type . '-btn-copy" class="btn btn-default btn-modal-copy-to-clipboard" data-clipboard-text="' . $link . '"><i class="fa fa-clipboard" aria-hidden="true"></i> Copy Link</button></p>';

        $r['html'] .= "<script>new ClipboardJS('.btn-modal-copy-to-clipboard', { container: document.getElementById('modalnotify') });</script>";

        echo json_encode($r);
        unset($r);
        die();
    }


    public function ajax_make_quick_howto($vars = null)
    {
        $r = array('st' => 1, 'html' => '');

        $r['html'] = '<div class="col-xs-12 col-sm-12 ps-dash-quick-howto"><div class="row">';
        $r['html'] .= '<div class="col-xs-12 col-sm-6">';
        $r['html'] .= '<ul class="list-unstyled">';
        $r['html'] .= '<li><i class="fas fa-question"></i> How do I invite team members to join Promise Serves?</li>';
        $r['html'] .= '<li><i class="fas fa-question"></i> <a href="http://ps.localhost/resources/view/how-to-refer-families-for-support">How do I refer families for support?</a></li>';
        $r['html'] .= '<li><i class="fas fa-question"></i> How do I refer families for support?</li>';
        $r['html'] .= '</ul>';
        $r['html'] .= '</div>';
        $r['html'] .= '</div></div>';

        echo json_encode($r);
        unset($r);
        die();
    }

    public function ajax_make_map_status($vars = null)
    {
        $vars['view'] = ! empty($vars['view']) ? $vars['view'] : get_req('view');
        $r = $this->dashboard_model->get_dashboard_leadership_map_status($vars);

        echo json_encode($r);
        die();
    }
}
