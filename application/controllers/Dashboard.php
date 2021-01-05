<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Auth_Controller
{
    public function index()
    {
        $this->render('dashboard/index_view');
    }

    public function show()
    {
        $data['title'] = 'Dashboard';

        // $affiliate_id = $this->affiliate_model->get_active_affiliate_id();

        $advocate_roles = array(
            PROMOTER,
            TRAINER,
            DATA_TRACKER,
            SHEPARD,
            CAMPUS_ADVOCATE,
            CHURCH_ADVOCATE,
            LEAD_ADVOCATE,
            MULTI_CHURCH_LEADER,
        );

        $staff_roles = array(
            STAFF_EMPLOYEE,
            STAFF_TRAINER,
            STAFF_PRODUCER,
            STAFF_MANAGER,
        );

        // d(in_array($role, $staff_roles));

        // $this->load->view('layouts/dashboard_header');
        // $this->load->view('layouts/nav');
        // $this->load->view('dashboard', $data);
        $this->render('dashboard/index_view');
        // $this->load->view('layouts/footer');
    }
}
