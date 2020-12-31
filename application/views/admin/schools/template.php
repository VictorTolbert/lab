<?php $this->load->view('admin/header'); ?>

<?php $this->load->view('admin/schools/subtabs'); ?>

<?php $this->load->view($view); ?>

<?php $this->load->view('admin/footer'); ?>

<?php $this->load->view('admin/schools/org_admin_footer'); ?>

<input type="hidden" value="<?php echo $sub_tab ?>" id="set-tab">
