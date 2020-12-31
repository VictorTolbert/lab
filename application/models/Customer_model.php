<?php

class Customer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        if ($this->db->insert('customers', $data)) {
            return true;
        }
    }

    public function delete($id)
    {
        if ($this->db->delete('customers', 'id=' . $id)) {
            return true;
        }
    }

    public function update($data, $old_id)
    {
        $this->db->set($data);
        $this->db->where('id', $old_id);
        $this->db->update('customers', $data);
    }
}
