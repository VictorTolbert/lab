<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function show($page = 'home')
    {
        if (! file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('layouts/site_header');
        $this->load->view('layouts/site_navbar');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('layouts/site_footer');
    }
}
