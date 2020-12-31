<div class="col-md-10 col-md-offset-4">
<?php
if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif (isset($error_message) && ! empty($error_message)) {
  echo "<div class='alert alert-danger'>{$error_message}</div>";
} elseif ($this->session->flashdata('message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
}
?>

<h2>School > Edit > <?php echo $school->name;?></h2>
<div class="container col-md-4">
<?php

echo $this->session->flashdata('success');

echo form_open('schools/update/' . $school->id, [ 'class' => 'form-horizontal' ]);

$field_val = ( empty($_POST['name']) ) ? $school->name : $this->input->post('name');
echo bootstrap_field_val('text', 'name', 'name', $field_val, form_error('name'));

$field_val = ( empty($_POST['address']) ) ? $school->address : $this->input->post('address');
echo bootstrap_field_val('text', 'address', 'Address', $field_val, form_error('address'), null, null, null, 'disabled="disabled"');

$field_val = ( empty($_POST['city']) ) ? $school->city : $this->input->post('city');
echo bootstrap_field_val('text', 'city', 'City', $field_val, form_error('city'), null, null, null, 'disabled="disabled"');

$field_val = ( empty($_POST['state']) ) ? $school->state : $this->input->post('state');
echo '<div class="form-group">';
echo form_label('State', 'state', [ 'class' => 'control-label' ]);
echo '<div class="controls">';
echo form_dropdown('state', state_array(), $field_val, 'disabled="disabled"');
echo '</div></div>';

$field_val = ( empty($_POST['zip']) ) ? $school->zip : $this->input->post('zip');
echo bootstrap_field_val('text', 'zip', 'Zip Code', $field_val, form_error('zip'), null, null, null, 'disabled="disabled"');
?>

<div class="form-group <?php echo form_error('timezone', true) ? 'error' : ''; ?>">
  <label class="control-label" for="timezone">US Timezone</label>
  <div class="controls">
    <?php echo populated_dropdown(
      'timezone', $attr, '', $this->input->post('timezone') ?: (!empty($school->timezone) ? $school->timezone : ($zip ? $zip->timezone : ''))
    ); ?>
      <span class="help-inline">
        <?php echo form_error('timezone', true); ?>
      </span>
  </div>
</div>

<?php
$field_val = ( empty($_POST['county']) ) ? $school->county : $this->input->post('county');
echo bootstrap_field_val('text', 'county', 'County', $field_val, form_error('county'), null, null, null, 'disabled="disabled"');
?>

<div class="form-group <?php echo form_error('country', true) ? 'error' : ''; ?>">
    <label class="control-label" for="country">Country</label>
    <div class="controls">
      <?php echo populated_dropdown('country', ["disabled" => "disabled"], ['US'], $this->input->post('country') ?: $school->country); ?>
      <span class="help-inline">
        <?php echo form_error('country', true); ?>
      </span>
    </div>
</div>

<?php
$field_val = ( empty($_POST['abbreviation']) ) ? $school->abbreviation : $this->input->post('abbreviation');
echo bootstrap_field_val('text', 'abbreviation', 'Abbreviation/initials', $field_val, form_error('abbreviation'));

echo '<div class="form-actions">';
echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
echo '</div>';

echo form_close();

?>
</div>
</div>