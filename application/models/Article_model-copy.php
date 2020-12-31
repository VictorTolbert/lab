<?php

class Article_model_copy extends MY_Model
{
    public function select($fields)
    {
        $this->db->select($fields);
        return $row = $this->get(2);
    }
    //SELECT `title` FROM (`articles`) WHERE `id` = 2


    // $data['added_on'] = $row['updated_on'] = date('Y-m-d H:i:s');
    // $data['updated_on'] = date('Y-m-d H:i:s');

    // public $before_create = array( '_create_timestamp' );
    // public $before_update = array( '_update_timestamp' );

    protected function _create_timestamp($data)
    {
        $data['added_on'] = $data['updated_on'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function _update_timestamp($data)
    {
        $data['updated_on'] = date('Y-m-d H:i:s');
        return $data;
    }
}
