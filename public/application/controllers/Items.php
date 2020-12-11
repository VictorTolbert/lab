<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
    public $items;

    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Item');

        $this->model = new Item;
    }

    /**
     * Display Data this method.
     *
     * @return Response
    */
    public function index()
    {
        $data['data'] = $this->model->get_items();

        $this->load->view('theme/header');
        $this->load->view('items/index', $data);
        $this->load->view('theme/footer');
    }

    /**
     * Show Details this method.
     *
     * @return Response
    */
    public function show($id)
    {
        $item = $this->model->find_item($id);

        $this->load->view('theme/header');
        $this->load->view('items/show', array('item' => $item));
        $this->load->view('theme/footer');
    }


    /**
     * Create from display on this method.
     *
     * @return Response
    */
    public function create()
    {
        $this->load->view('theme/header');
        $this->load->view('items/create');
        $this->load->view('theme/footer');
    }

    /**
     * Store Data from this method.
     *
     * @return Response
    */
    public function store()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errors', validation_errors());

            redirect(base_url('items/create'));
        } else {
            $this->model->insert_item();

            redirect(base_url('items'));
        }
    }

    /**
     * Edit Data from this method.
     *
     * @return Response
    */
    public function edit($id)
    {
        $item = $this->model->find_item($id);

        $this->load->view('theme/header');
        $this->load->view('items/edit', array('item'=>$item));
        $this->load->view('theme/footer');
    }

    /**
     * Update Data from this method.
     *
     * @return Response
    */
    public function update($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errors', validation_errors());

            redirect(base_url('items/edit/'.$id));
        } else {
            $this->model->update_item($id);

            redirect(base_url('items'));
        }
    }

    /**
     * Delete Data from this method.
     *
     * @return Response
    */
    public function delete($id)
    {
        $item = $this->model->delete_item($id);

        redirect(base_url('items'));
    }
}
