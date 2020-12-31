<?php
if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif (isset($error_message) && ! empty($error_message)) {
  echo "<div class='alert alert-danger'>{$error_message}</div>";
} elseif ($this->session->flashdata('merchant_message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('merchant_message')}</div>";
  if ($this->session->flashdata('online_payments_error')) {
    echo "<div class='alert alert-danger'>{$this->session->flashdata('online_payments_error')}</div>";
  }
} elseif ($this->session->flashdata('merchant_error_message')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('merchant_error_message')}</div>";
}

if (empty($merchant)) {
  echo "<div class='alert alert-danger'>There is a problem with the merchant account for your school. Please check your school merchant account settings.</div>";
}
?>

<?php
if (!empty($merchant)) {
  echo '<h3 class="center">Program Merchant</h3>';
  echo form_open('/admin/programs/merchant/edit/' . $program->id, ['class' => 'col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3']);
  echo '<div class="form-group">';
  echo form_label('Online Payments', 'online_payment_enabled', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->online_payment_enabled) ? true : false;
  echo form_checkbox('online_payment_enabled', 1, $field_val);
  echo form_error('online_payment_enabled');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Online Payments Required', 'online_payment_required', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->online_payment_required) ? true : false;
  echo form_checkbox('online_payment_required', 1, $field_val);
  echo form_error('online_payment_required');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Promote Pay Online Now', 'promote_pay_online', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->promote_pay_online) ? true : false;
  echo form_checkbox('promote_pay_online', 1, $field_val);
  echo form_error('online_payment_check');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Hold Online Payments', 'hold_online_payments', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->hold_online_payments) ? true : false;
  echo form_checkbox('hold_online_payments', 1, $field_val);
  echo form_error('hold_online_payments');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Sponsor Convenience Fee', 'sponsor_convenience_fee', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->sponsor_convenience_fee) ? $program->sponsor_convenience_fee : '2.00';
  echo form_input(['name' => 'sponsor_convenience_fee', 'value' => $field_val]);
  echo form_error('sponsor_convenience_fee');
  echo 'Sponsors pay this fee when they pay for online pledges.';
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('School Processing Fee', 'school_processing_fee', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->school_processing_fee) ? $program->school_processing_fee : '0.00';
  echo form_input(['name' => 'school_processing_fee', 'value' => $field_val]);
  echo form_error('school_processing_fee');
  echo 'The School Organization pays this fee for the sponsors UNLESS the "Online Processing fee" is added below and the sponsor chooses to pay the fee.';
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Online Processing Fee', 'optional_sponsor_fee', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->optional_sponsor_fee) ? $program->optional_sponsor_fee : '0.00';
  echo form_input(['name' => 'optional_sponsor_fee', 'value' => $field_val]);
  echo form_error('optional_sponsor_fee');
  echo 'It gives the sponsor the choice to cover the fee.  You are REQUIRED to add fee to "school processing fee" above as well.';
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('School ID Reporting (Do Not Check)', 'filter_merchant_report_by_school', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $field_val = !empty($program->filter_merchant_report_by_school) ? true : false;
  echo form_checkbox('filter_merchant_report_by_school', 1, $field_val);
  echo '</div></div>';

  echo '<div class="form-actions">';
  echo form_submit(['name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Update']);
  echo '<a class="btn btn-default" href="/admin/programs/merchant-log/' . $program->id . '" >View Transaction Logs</a>';
  echo '</div>';
  echo form_close();
}
?>
