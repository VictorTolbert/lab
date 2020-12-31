<?php

class Tester extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        //  Path to simple_html_dom
        include APPPATH . 'third_party/simple_html_dom.php';
    }

    public function index()
    {

        //  Create object of Simple_html_dom class
        $html = new Simple_html_dom;

        //  Use Simple_html_dom class function load_file
        $html->load_file('http://www.google.com');

        //  Use Simple_html_dom class function
        foreach ($html->find('img') as $element) {
            echo $element->src . '<br>';
        }
    }
}
