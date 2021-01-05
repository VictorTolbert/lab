<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function show($page = 'home')
    {
        // if (! $this->ion_auth->logged_in()) {
        //     redirect('auth/login');
        // }

        // if (! $this->ion_auth->is_admin()) {
        //     $this->session->set_flashdata('message', 'You must be an admin to view this page');
        //     redirect('posts/inddex');
        // }

        if (! file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        # single group (by name)

        // $group = 'gangstas';
        // if (! $this->ion_auth->in_group($group)) {
        //     $this->session->set_flashdata('message', 'You must be a gangsta to view this page');
        //     redirect('posts');
        // }

        // $this->load->library('ion_auth');


        // $hash = md5(implode('.', $request->only(['html', 'css', 'config', 'version'])));
        // array_merge()


        // $raw = '22. 11. 1968';
        // $start = DateTime::createFromFormat('d. m. Y', $raw);
        // d($start->format('Y-m-d'));

        // $end = clone $start;
        // $end->add(new DateInterval('P1M6D'));
        // $diff = $end->diff($start);
        // d($diff->format('%m month, %d days (total: %a days)'));

        $data['title'] = ucfirst($page);
        $data['keywords'] = $this->config->item('site_keywords');

        $this->load->view('layouts/hello_bar');
        $this->load->view('layouts/header');
        $this->load->view('layouts/nav');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('layouts/footer');
        $this->load->view('layouts/developer_toolbar');
    }

    public function upload_class_file()
    {
        $this->load->config('aws', true);
        $this->load->library('upload');
        $this->load->library('CSV');

        $s3_class_list_loc = $this->config->item('s3_class_lists', 'aws');

        $this->upload->set_allowed_types('csv');

        $programId = !empty($_POST['program_id']) ? $_POST['program_id'] : null;
        $groupId   = !empty($_POST['group_id']) ? $_POST['group_id'] : null;

        if ($this->upload->do_upload_s3('userfile', $s3_class_list_loc)) {
            $fileInfo           = $this->upload->data();
            $class_endpoint     = s3_url($s3_class_list_loc . $this->upload->data('file_name'));
            $importData         = $this->csv->process_csv($class_endpoint);
            $data['fileInfo']   = $fileInfo;
            $data['importData'] = $importData;
            $data['status']     = 'success';
        } else {
            $data['status'] = 'failed';
        }

        echo json_encode($data);
    }
}
