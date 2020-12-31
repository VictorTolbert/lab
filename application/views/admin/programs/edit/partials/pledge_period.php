<?php
if ($this->session->flashdata('pledge_period_message')) {
  echo "<div class='alert alert-success pledge-period-delete-result'>{$this->session->flashdata('pledge_period_message')}</div>";
}
?>
<a name="pledge-periods"></a>

<?php
  //Pledge periods table
  $table_header = [ 'Period #', 'Delivery Date/Time', 'Delivery Time', 'Update Delivery Time/Date' ];
  echo set_table($program->pledge_periods, $table_header);

  //New pledge form
  //
  echo '<h3>New Pledge Period</h3>';
  echo form_open('admin/programs/periods/new/', [ 'class' => '', 'id' => 'new_period' ]);
  echo form_hidden('action', 'add_new_pledge_period');
  echo form_hidden('program_id', $program->id);

  $field_val = ( empty($_POST['delivery_date']) ) ? $g->delivery_date : $this->input->post('delivery_date');
  echo bootstrap_field_val('text', 'delivery_date', 'Delivery Date', $field_val, form_error('delivery_date'), 'span5 datepicker-pledge-periods');

  echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);

  echo form_close();
?>
