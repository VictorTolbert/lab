<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bootstrap extends CI_Controller
{
	public function show($page = 'home')
    {
        if (! file_exists(APPPATH . 'views/bootstrap/pages/' . $page . '.php')) {
            show_404();
        }

        $data['title'] = ucfirst($page);
        $data['keywords'] = $this->config->item('site_keywords');

        $this->load->view('layouts/bootstrap_site_header');
        $this->load->view('pages/bootstrap/' . $page, $data);
    }
}
