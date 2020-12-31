<?php

class Customers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        // $this->load->database();
    }

    public function index()
    {
        $query = $this->db->get("customers");
        $data['customers'] = $query->result();

        $this->load->helper('url');
        $this->load->view('customers/index', $data);
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->view('customers/create');
    }

    public function store()
    {
        $this->load->model('customer_model');

        $data = [
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
        ];

        $this->customer_model->insert($data);

        $query = $this->db->get("customers");
        $data['records'] = $query->result();

        $this->load->view('customers/show', $data);
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update($id)
    {
        $this->load->model('customer_model');

        $data = [
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
        ];

        $old_id = $this->input->post('old_id');
        $this->customer_model->update($data, $old_id);

        $query = $this->db->get("customers");
        $data['records'] = $query->result();

        $this->load->view('customers/show', $data);
    }

    public function destroy($id)
    {
        $this->load->model('customer_model');
        $id = $this->uri->segment('3');
        $this->customer_model->delete($id);

        $query = $this->db->get("customers");
        $data['records'] = $query->result();

        $this->load->view('customers/show', $data);
    }

    public function update_customer_view()
    {
        $this->load->helper('form');

        $id = $this->uri->segment('3');
        $query = $this->db->get_where("customers", array("id" => $id));
        $data['records'] = $query->result();
        $data['old_id'] = $id;

        $this->load->view('customers/edit', $data);
    }
}
