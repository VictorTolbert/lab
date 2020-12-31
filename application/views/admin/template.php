<?php $this->load->view('admin/header'); ?>

<?php
$program = $this->session->userdata('program');

if (! empty($program)) {
    $this->load->view('admin/programs/subtabs', ['program' => $program]);
} ?>

<?php $this->load->view($view); ?>
<?php $this->load->view('admin/footer'); ?>
