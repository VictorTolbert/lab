<?php
if ($this->session->flashdata('admin_success')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('admin_success')}</div>";
} elseif ($this->session->flashdata('admin_error')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('admin_error')}</div>";
}
?>

<form action="/admin/schools/create-organization-administrator/<?php echo $school->id?>"
method="post" class="form-inline">
  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
  <input class="form-control" type="text" name="first_name" placeholder="First Name"
    value="<?php echo $this->input->post('first_name') ? $this->input->post('first_name') : $veracity_merchant->first_name; ?>">
  <input class="form-control" type="text" name="last_name" placeholder="Last Name"
    value="<?php echo $this->input->post('last_name') ? $this->input->post('last_name') : $veracity_merchant->last_name; ?>">
  <input class="form-control" type="text" name="email" placeholder="Email"
    value="<?php echo $this->input->post('email') ? $this->input->post('email') : $veracity_merchant->email; ?>">
  <input type="submit" class="btn btn-info" value="Submit">
</form>
