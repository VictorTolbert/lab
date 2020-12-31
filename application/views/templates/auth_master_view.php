<?php defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('templates/_partials/auth_master_header_view'); ?>

<?= $the_view_content ?>

<?php $this->load->view('templates/_partials/auth_master_footer_view'); ?>
