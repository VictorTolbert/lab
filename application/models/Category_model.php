<?php

class Category_model extends MY_Model
{
	public $_table = 'categories';

    public function __construct()
    {

		// $this->has_many['posts'] = 'Post_model';
		// $this->load->database();
		// parent::__construct();

		$this->table = 'categories';
		$this->primary_key = 'id';
		// $this->has_one['post'] = 'Post_model';
		$this->has_many['posts'] = 'Post_model';

		parent::__construct();
    }

    public function get_categories()
    {
        $this->db->order_by('name');
        $query = $this->db->get('categories');

        return $query->result_array();
    }

    public function create_category()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'user_id' => $this->session->userdata('user_id'),
        );

        return $this->db->insert('categories', $data);
    }

    public function get_category($id)
    {
        $query = $this->db->get_where('categories', array('id' => $id));

        return $query->row();
    }

    public function delete_category($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('categories');

        return true;
    }
}
