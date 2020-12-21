<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resumes extends CI_Controller
{
    public function show()
    {
        $this->load->view('resumes/show');
    }
}
