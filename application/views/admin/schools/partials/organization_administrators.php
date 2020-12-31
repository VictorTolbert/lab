<h3>Collection Volunteer</h3>
<?php
if ($this->session->flashdata('success')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('success')}</div>";
}

if ($this->session->flashdata('fail')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('fail')}</div>";
}
?>
<div class='alert alert-success hidden'>Success</div>
<div class='alert alert-danger hidden'>An error has occurred</div>
<div>
  <div><span><strong>Username:  </strong></span><span><?php echo $school->id; ?></span></div>
  <div><span><strong>Password:  </strong></span><a href="<?php echo base_url('users/give_new_password/'.$school->id); ?>" class='btn btn-warning'>Reset Password</a></div>
</div>
<h3>Locker Administrators</h3>
<?php $this->load->view('admin/schools/partials/new_organization_administrator'); ?>
<div class="row">
  <div class="col-md-12">
    <table id="org-admins-table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th class="actions">Actions</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Receive Task Emails</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>
