<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Amazons3 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('aws3');
	}

	public function test_addbucket($name)
	{
		$return = $this->aws3->addBucket($name);
		// var_dump($return);
	}

	public function index()
	{
		$this->my_template->loadAdmin('view_aws', array('error' => ''));
	}


	public function upload()
	{
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (! $this->upload->do_upload()) {
			$error = array('error' => $this->upload->display_errors());

			$this->my_template->loadAdmin('view_aws', $error);
		} else {
			$image_data = $this->upload->data();
			$image_data['file_name'] = $this->aws3->sendFile('roomrangers', $_FILES['userfile']);
			$data = array('upload_data' => $image_data['file_name']);

			$this->my_template->loadAdmin('view_aws', $data);
		}
	}
}
