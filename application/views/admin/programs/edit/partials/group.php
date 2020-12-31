<?php
if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif (isset($error_message) && ! empty($error_message)) {
  echo "<div class='alert alert-danger'>{$error_message}</div>";
} elseif ($this->session->flashdata('message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
} elseif ($this->session->flashdata('groups_error_message')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('groups_error_message')}</div>";
} elseif ($this->session->flashdata('message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
}

  echo $this->session->flashdata('group_success');
?>

<a name="groups"></a>
<h3 class="center">Group Details</h3>

<?php


foreach ($program->groups as $g) {
  echo form_open("groups/update/{$g->id}#groups", [ 'class' => 'col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3' ]);

  echo form_hidden('program_id', $program->id);

  $field_val = ( empty($_POST['name']) ) ? $g->name : $this->input->post('name');
  echo bootstrap_field_val('text', 'name', 'Name', $field_val, form_error('name'), null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['group_level']) ) ? $g->group_level_id : $_POST['group_level'];
  echo '<div class="form-group">';
  echo form_label('Level', 'group_level', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  echo form_dropdown('group_level', $group_levels, $field_val, 'disabled="disabled"');
  echo form_error('group_level');
  echo '</div></div>';

  $field_val = ( empty($_POST['point_person']) ) ? $g->point_person_id : $_POST['point_person'];
  echo '<div class="form-group">';
  echo form_label('Group Owner', 'point_person', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  echo form_dropdown('point_person', $team_members, $field_val, 'disabled="disabled"');
  echo form_error('point_person');
  echo '</div></div>';

  $field_val = ( empty($_POST['pep_rally']) ) ? simple_date($g->pep_rally) : $this->input->post('pep_rally');
  echo bootstrap_field_val('text', 'pep_rally', 'Pep Rally Date', $field_val, form_error('pep_rally'), null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['fun_run']) ) ? simple_date($g->fun_run) : $this->input->post('fun_run');
  echo bootstrap_field_val('text', 'fun_run', 'Fun Run Date', $field_val, form_error('fun_run'), null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['due_date']) ) ? simple_date($g->due_date) : $this->input->post('due_date');
  echo bootstrap_field_val('text', 'due_date', 'Due Date', $field_val, form_error('due_date'), null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['preprogram_students']) ) ? $g->preprogram_students : $this->input->post('preprogram_students');
  echo bootstrap_field_val('text', 'preprogram_students', 'Preprogram Students', $field_val, form_error('preprogram_students'), 'span2', null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['preprogram_faculty']) ) ? $g->preprogram_faculty : $this->input->post('preprogram_faculty');
  echo bootstrap_field_val('text', 'preprogram_faculty', 'Preprogram Faculty', $field_val, form_error('preprogram_faculty'), 'span2', null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['preprogram_homerooms']) ) ? $g->preprogram_homerooms : $this->input->post('preprogram_homerooms');
  echo bootstrap_field_val('text', 'preprogram_homerooms', 'Preprogram Homerooms', $field_val, form_error('preprogram_homerooms'), 'span2', null, null, 'disabled="disabled"');

  echo '<div class="form-actions">';
  echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
  echo '</div>';

  echo form_close();
}
?>
