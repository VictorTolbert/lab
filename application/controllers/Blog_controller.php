<?php

class Blog_controller extends CI_Controller
{
    public function index()
    {
        $this->load->model('blog');

        $data['query'] = $this->blog->get_last_ten_entries();

        $this->load->view('blog', $data);
    }
    public function store()
    {
        $this->load->model('blog');

        // $query = $this->db->get('mytable');  // Produces: SELECT * FROM mytable
        // $query = $this->db->get('mytable', 10, 20);

        // $sql = $this->db->get_compiled_select('mytable');
        // echo $sql;

        // echo $this->db->limit(10,20)->get_compiled_select('mytable', FALSE);
        // echo $this->db->select('title, content, date')->get_compiled_select();

        // $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);

        // $this->db->select('title, content, date');
        // $query = $this->db->get('mytable');

        // $this->db->select('(SELECT SUM(payments.amount) FROM payments WHERE payments.invoice_id=4) AS amount_paid', FALSE);
        // $query = $this->db->get('mytable');

        // $something = isset($_POST['something']) ? $_POST['something'] : NULL;
        $something = $this->input->post('something');
        // $this->input->post();
        // $this->input->get();
        // $this->input->cookie();
        // $this->input->server();
        // $this->input->post('some_data');
        // $this->input->post(NULL, TRUE); // returns all POST items with XSS filter
        // $this->input->post(NULL, FALSE); // returns all POST items without XSS filter
        // $this->input->post(array('field1', 'field2'));
        // $this->input->get('some_data', TRUE);
        // $this->input->get(NULL, TRUE); // returns all GET items with XSS filter
        // $this->input->get(NULL, FALSE); // returns all GET items without XSS filtering
        // $this->input->get(array('field1', 'field2'), TRUE);
        // $this->input->post_get('some_data', TRUE);
        // $this->input->cookie('some_cookie');
        // $this->input->cookie(array('some_cookie', 'some_cookie2'));
        // $cookie = array(
        //     'name'   => 'The Cookie Name',
        //     'value'  => 'The Value',
        //     'expire' => '86500',
        //     'domain' => '.some-domain.com',
        //     'path'   => '/',
        //     'prefix' => 'myprefix_',
        //     'secure' => true
        // );

        // $this->input->set_cookie($cookie);
        // echo $this->input->ip_address();
        // $this->input->valid_ip($ip)
        // echo $this->input->user_agent();
        // $headers = $this->input->request_headers();
        // $this->input->get_request_header('some-header', TRUE);
        // $this->input->is_ajax_request();

        // echo $this->input->method();

        $this->load->view('blog', $data);
    }
}
