<?php

class Book_model extends MY_Model
{
    // protected $return_type = 'array';
    // protected $soft_delete = TRUE;
    //     $this->book_model->get_by('user_id', 1);
    //     -> SELECT * FROM books WHERE user_id = 1 AND deleted = 0
    //     $this->book_model->with_deleted()->get_by('user_id', 1);
    //     -> SELECT * FROM books WHERE user_id = 1
    //     $this->book_model->only_deleted()->get_by('user_id', 1);
    //     -> SELECT * FROM books WHERE user_id = 1 AND deleted = 1
    // protected $soft_delete_key = 'book_deleted_status'; // default: deleted

    public $before_create = array( 'timestamps', 'data_process(name)'  );

    public $before_update = array( 'data_process(date)' );

    protected function timestamps($book)
    {
        $book['created_at'] = $book['updated_at'] = date('Y-m-d H:i:s');
        return $book;
    }

    protected function data_process($row)
    {
        $row[$this->callback_parameters[0]] = $this->_process($row[$this->callback_parameters[0]]);

        return $row;
    }

    private function _process($row)
    {
        print_r($row);
    }
}
