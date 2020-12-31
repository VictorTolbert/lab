<?php $errors = $this->session->flashdata('merchant_error_message'); ?>
<div class="container row col-md-6">
<form action="/admin/schools/merchant/edit/<?php echo $school->id?>" method="post" class="">
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
  <input type="hidden" name="merchant_type" value="veracity">
  <fieldset>
    <legend>Veracity Merchant Details</legend>
    <div class="form-group <?php echo form_error('terminal_number') ? 'error' : ''; ?>">
      <label for="terminal_number" class="control-label">Terminal Number:</label>
      <div class="controls">
        <input type="text" name="terminal_number"
          value="<?php echo $this->input->post('terminal_number') ? $this->input->post('terminal_number') : $veracity_merchant->terminal_number; ?>">
        <span class="help-inline">
          <?php echo form_error('terminal_number') ?: 'Seven-digit Terminal Number e.g. 1231234'; ?>
        </span>
      </div>
    </div>
    <div class="form-group <?php echo form_error('secure_net_id') ? 'error' : ''; ?>">
      <label for="secure_net_id" class="control-label">Terminal ID:</label>
      <div class="controls">
        <input type="text" name="secure_net_id"
          value="<?php echo $this->input->post('secure_net_id') ? $this->input->post('secure_net_id') : $veracity_merchant->secure_net_id; ?>">
        <span class="help-inline">
          <?php echo form_error('secure_net_id') ?: 'Four-digit Terminal ID e.g. 1234'; ?>
        </span>
      </div>
    </div>
    <div class="form-group <?php echo form_error('secure_net_key') ? 'error' : ''; ?>">
      <label for="secure_net_key" class="control-label">Terminal Secret:</label>
      <div class="controls">
        <input type="text" name="secure_net_key"
          value="<?php echo $this->input->post('secure_net_key') ? $this->input->post('secure_net_key') : $veracity_merchant->secure_net_key; ?>">
        <span class="help-inline">
          <?php echo form_error('secure_net_key') ?: 'Terminal secret'; ?>
        </span>
      </div>
    </div>
    <div class="form-group <?php echo form_error('terminal_username') ? 'error' : ''; ?>">
      <label for="terminal_username" class="control-label">Terminal Username:</label>
      <div class="controls">
        <input type="text" name="terminal_username"
          value="<?php echo $this->input->post('terminal_username') ? $this->input->post('terminal_username') : $veracity_merchant->terminal_username; ?>">
        <span class="help-inline">
          <?php echo form_error('terminal_username'); ?>
        </span>
      </div>
    </div>
    <div class="form-group <?php echo form_error('terminal_password') ? 'error' : ''; ?>">
      <label for="terminal_password" class="control-label">Terminal Password:</label>
      <div class="controls">
        <input type="text" name="terminal_password"
          value="<?php echo $this->input->post('terminal_password') ? $this->input->post('terminal_password') : $veracity_merchant->terminal_password; ?>">
        <span class="help-inline">
          <?php echo form_error('terminal_password'); ?>
        </span>
      </div>
    </div>
    <div class="form-group <?php echo form_error('terminal_link') ? 'error' : ''; ?>">
      <label for="terminal_link" class="control-label">Terminal Link:</label>
      <div class="controls">
        <input type="text" name="terminal_link"
          value="<?php echo $this->input->post('terminal_link') ? $this->input->post('terminal_link') : $veracity_merchant->terminal_link; ?>">
        <span class="help-inline">
          <?php echo form_error('terminal_link') ?: 'Precede with https://'; ?>
        </span>
      </div>
    </div>
    <div class="form-actions">
    <input type="submit" class="btn btn-info" value="<?php echo !empty($veracity_merchant) ? 'Update' : 'Submit' ?>">
    <a class="btn btn-default" href="/admin/schools/test-merchant/<?php echo $school->id ?>" >Test Merchant Account</a>
    </div>
  </fieldset>
</form>
</div>
