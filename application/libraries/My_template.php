<?php

defined('BASEPATH') OR exit('Tidak boleh ngakses langsung mas bro !');

/**
 * Description of My_template
 *
 * @author wahyu widodo
 */
class My_template
{
    public $template_data = array();

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    public function loadAdmin($viewname = '', $view_data = array(), $return = false)
    {
        $this->set('contents', $this->ci->load->view($viewname, $view_data, true));
        $this->ci->load->view('admin_template', $this->template_data, $return);
    }
}
