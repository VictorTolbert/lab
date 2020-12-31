<a name="load_students"></a>
<h3>Load Student and Teacher List</h3>

<?php
if (count($program->groups) > 0) {
  echo form_open_multipart('groups/populate', [ 'class' => 'form-horizontal' ]);

  echo form_hidden('redirect_back', current_url());

  $repop_val = $this->session->flashdata('group_id_val');
  $field_val = ( empty($repop_val) ) ? 0 : $repop_val;
  echo '<div class="form-group">';
  echo form_label('Group', 'group_id', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  echo form_dropdown('group_id', $groups_dropdown, $field_val);
  echo $this->session->flashdata('group_id_error');
  echo '</div></div>';

  echo bootstrap_field_val('file', 'userfile', 'Student/Teacher List', '', '&nbsp;' . $this->session->flashdata('upload_errors'));

  echo '<div class="form-actions">';
  echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
  echo '</div>';

  echo form_close();

  if ($populated_groups) {
    // Form allowing groups to be emptied of data. 45843181
    echo '<h3>Delete Group Participants</h3>
      <p>This function can be used to "roll back" an incorrect import.</p>';

    echo form_open('groups/rollback', [ 'id' => 'group-rollback', 'class' => 'form-horizontal' ]);

    echo '<div class="form-group">';
    echo form_label('Group', 'group_id', [ 'class' => 'control-label' ]);
    echo '<div class="controls">';
    echo form_dropdown('group_id', $populated_groups, 0);
    echo '</div></div>';

    echo '<div class="form-actions">';
    echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-danger', 'value' => 'Delete Participants' ]);
    echo '</div>';

    echo form_close();
  }
} else {
  echo '<p>You must have at least one group in order to import students and teachers.</p>';
}
?>
