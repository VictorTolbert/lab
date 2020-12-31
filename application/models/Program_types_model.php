<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Program_Types_Model extends MY_Model
{
    public function get_all()
    {
        $program_type_query = $this->db->get('program_types');
        return $program_type_query->result_array();
    }
}
