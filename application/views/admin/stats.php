<?php
  echo '<div class="row">';

if ($this->session->userdata('message')) {
  echo '<div class="alert alert-success">' . $this->session->userdata('message') . '</div>';
}

  echo '</div>';

  echo '<div class="row">';
  echo '<div class="col-md-12">';


  echo '<h2 class="center m-bot-10">Add New Unit Type</h2>';
  echo form_open('/admin_stats/add_unit_type', ['class' => 'col-md-4 col-md-offset-4']);

  echo '<div class="form-group">';
  echo form_label('Title', 'title', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_input(['name' => 'title'], '', ['class' => 'w-100', 'required' => 'required', 'maxlength' => '25']);
  echo form_error('title');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Name (e.g. "lap")', 'name', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_input(['name' => 'name'], '', ['class' => 'w-100', 'required' => 'required', 'maxlength' => '25']);
  echo form_error('name');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Name Plural', 'name_plural', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_input(['name' => 'name_plural'], '', ['class' => 'w-100', 'required' => 'required', 'maxlength' => '25']);
  echo form_error('name_plural');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Multiplier Internal', 'multiplier_internal', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_input(['type' => 'number', 'name' => 'multiplier_internal'], '', ['class' => 'w-100', 'required' => 'required']);
  echo form_error('multiplier_internal');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Default Multiplier', 'default_multiplier', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_input(['type' => 'number', 'name' => 'default_multiplier'], '', ['class' => 'w-100', 'required' => 'required']);
  echo form_error('default_multiplier');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Default Lower Limit', 'default_lower_limit', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_input(['type' => 'number', 'name' => 'default_lower_limit'], '', ['class' => 'w-100', 'required' => 'required']);
  echo form_error('default_lower_limit');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Default Upper Limit', 'default_upper_limit', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_input(['type' => 'number', 'name' => 'default_upper_limit'], '', ['class' => 'w-100', 'required' => 'required']);
  echo form_error('default_upper_limit');
  echo '</div></div>';

  echo '<div class="form-group">';
  echo form_label('Image', 'unit_image_id', ['class' => 'control-label m-top-20']);
  echo '<div class="controls">';
  echo form_dropdown('unit_image_id', $program_unit_type_images, null);
  echo '</div></div>';


  echo form_button(['type' => 'submit', 'content' => 'Submit', 'value' => 'Submit', 'class' => 'btn btn-primary m-top-20']);
  echo form_close();
  echo '</div>';
