<?php
if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif (isset($error_message) && ! empty($error_message)) {
  echo "<div class='alert alert-danger'>{$error_message}</div>";
} elseif ($this->session->flashdata('message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
} elseif ($this->session->flashdata('program_error_message')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('program_error_message')}</div>";
} elseif ($program_error_message) {
  echo "<div class='alert alert-danger'>{$program_error_message}</div>";
} elseif ($this->session->flashdata('program_message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('program_message')}</div>";
} elseif ($program_message) {
  echo "<div class='alert alert-success'>{$program_message}</div>";
}


?>

  <h3 class="center">Program Details</h3>

  <?php
  echo form_open('programs/update/' . $program->id, [ 'class' => 'col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3' ]);

  $field_val = ( empty($_POST['team_id']) ) ? $program->team_id : $_POST['team_id'];
  echo '<div class="form-group">';
  echo form_label('Team', 'team_id', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  echo form_dropdown('team_id', $teams, $field_val, 'disabled="disabled"');
  echo form_error('team_id');
  echo '</div></div>';

  $field_val = ( empty($_POST['owner_id']) ) ? $program->owner_id : $_POST['owner_id'];
  echo '<div class="form-group">';
  echo form_label('Program Owner', 'owner_id', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  echo form_dropdown('owner_id', $team_members, $field_val, 'disabled="disabled"');
  echo form_error('owner_id');
  echo '</div></div>';

  echo bootstrap_field_val('text', 'pledging_start', 'Pledging Start Date', $program->pledging_start, form_error('pledging_start'), null, null, null, 'disabled="disabled"');

  echo bootstrap_field_val('text', 'pledging_end', 'Pledging End Date', $program->pledging_end, form_error('pledging_end'), null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['pep_rally']) ) ? simple_date($program->pep_rally) : $this->input->post('pep_rally');
  echo bootstrap_field_val('text', 'pep_rally', 'Pep Rally Date', $field_val, form_error('pep_rally', true), null, null, null, 'disabled="disabled"');

  echo bootstrap_field_val('text', 'registration_code', 'Program Registration Code', $program->registration_code, form_error('registration_code'), null, null, null, 'disabled="disabled"');

  if ($can_edit_fun_run) {
    $field_val = empty($_POST['fun_run']) ? $program->fun_run : $this->input->post('fun_run');
    echo bootstrap_field_val('text', 'fun_run', 'Fun Run Date', $field_val, form_error('fun_run', true), null, null, null, '');
  } else {
    $field_val = empty($_POST['fun_run']) ? simple_date($program->fun_run) : $this->input->post('fun_run');
    echo bootstrap_field_val('text', 'fun_run', 'Fun Run Date', $field_val, form_error('fun_run', true), null, null, null, 'disabled="disabled"');
  }

  $field_val = ( empty($_POST['event_name']) ) ? $program->event_name : htmlspecialchars($this->input->post('event_name'));
  echo bootstrap_field_val('text', 'event_name', 'Event Name', $field_val, form_error('event_name', true), null, null, null, '');

  $field_val = empty($program->service_level) ? 'Funrun Live' : $program->service_level;
  echo bootstrap_field_val('text', 'service_level', 'Service Level', $field_val, null, null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['payee']) ) ? $program->payee : $this->input->post('payee');
  echo bootstrap_field_val('text', 'payee', 'Payable to', $field_val, form_error('payee'));

  $field_val = ( empty($_POST['due_date']) ) ? simple_date($program->due_date) : $this->input->post('due_date');
  echo bootstrap_field_val('text', 'due_date', 'Due Date', $field_val, form_error('due_date'), 'due-date-datepicker');

  $field_val = ( empty($_POST['total_raised_goal']) ) ? $program->total_raised_goal : $this->input->post('total_raised_goal');
  $field_val = $field_val ? number_format(str_replace(',', '', $field_val)) : '';
  ?>
  <div class="form-group">
    <label for="total_raised_goal">Total Raised Goal</label>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input name="total_raised_goal" class="form-control" type="text" value="<?php echo $field_val; ?>"/>
    </div> *Total Collected Pledges
  </div>
<?php
  $field_val = ( empty($_POST['client_percent']) ) ? $program->client_percent : $this->input->post('client_percent');
  echo bootstrap_field_val(
    'text', 'client_percent', 'Predicted Client %', $field_val, form_error('client_percent'),
    null, null, null, null, ' *Predicted % of total funds raised that the client will keep.'
  );

  $field_val = ( empty($_POST['client_goal']) ) ? $program->client_goal : $this->input->post('client_goal');
  $field_val = $field_val ? number_format($field_val) : '';
  ?>
    <div class="form-group">
      <label for="client_goal">Client Goal</label>
      <div class="input-group">
          <span class="input-group-addon">$</span>
          <input name="client_goal" class="form-control" type="text" value="<?php echo $field_val; ?>" disabled="disabled"/>
      </div>  *Total Raised Goal X Predicted Client %  (Calculated once submitted).
    </div>
<?php
  $field_val = ( empty($_POST['teacher_party']) ) ? simple_date($program->teacher_party, true) : $this->input->post('teacher_party');
  echo bootstrap_field_val('text', 'teacher_party', 'Teacher Party Date', $field_val, form_error('teacher_party', true), null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['teacher_party_location']) ) ? $program->teacher_party_location : $this->input->post('teacher_party_location');
  echo bootstrap_field_val('text', 'teacher_party_location', 'Teacher Party Location', $field_val, form_error('teacher_party_location'), null, null, null, 'disabled="disabled"');

  $field_val = ( empty($_POST['preprogram_fr']) ) ? $program->preprogram_fr : $this->input->post('preprogram_fr');
  echo bootstrap_field_val('text', 'preprogram_fr', 'Preprogram F&R', $field_val, form_error('preprogram_fr'), 'span4', null, '%', 'disabled="disabled"');

  $field_val = ( empty($_POST['parent_membership']) ) ? $program->parent_membership : $this->input->post('parent_membership');
  echo bootstrap_field_val('text', 'parent_membership', 'Parent Membership', $field_val, form_error('parent_membership'), 'span4', null, '%', 'disabled="disabled"');

  $field_val = ( empty($_POST['unit_id']) ) ? $program->unit_id : $_POST['unit_id'];
  echo '<div class="form-group">';
  echo form_label('Unit Type', 'unit_id', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  echo form_dropdown('unit_id', $program_unit_types, $field_val);
  echo '</div></div>';

if ($this->ion_auth->in_group([User_group_model::SYSADMIN])) {
  ?> 
      <div class="program-unit-range"><legend>Unit Range</legend>
    <?php
    $field_val = ( empty($_POST['unit_range_low']) ) ? $program->unit_range_low : $this->input->post('unit_range_low');
    echo bootstrap_field_val('text', 'unit_range_low', 'Range Low', $field_val, form_error('unit_range_low'), null, null, null);

    $field_val = ( empty($_POST['unit_range_high']) ) ? $program->unit_range_high : $this->input->post('unit_range_high');
    echo bootstrap_field_val('text', 'unit_range_high', 'Range High', $field_val, form_error('unit_range_high'), null, null, null);

    $field_val = ( empty($_POST['unit_max_charge']) ) ? $program->unit_max_charge : $this->input->post('unit_max_charge');
    echo bootstrap_field_val('text', 'unit_max_charge', 'Max Charge', $field_val, form_error('unit_max_charge'), null, null, null);

    $field_val = ( empty($_POST['no_units_entered_default']) ) ? $program->no_units_entered_default : $this->input->post('no_units_entered_default');
    echo bootstrap_field_val('text', 'no_units_entered_default', 'No Units Entered Charge', $field_val, form_error('no_units_entered_default'), null, null, null);

    $field_val = ( empty($_POST['unit_estimated_average']) ) ? $program->unit_estimated_average : $this->input->post('unit_estimated_average');
    echo bootstrap_field_val('text', 'unit_estimated_average', 'Estimated Average', $field_val, form_error('unit_estimated_average'), null, null, null);

    $field_val = ( empty($_POST['unit_flat_conversion']) ) ? $program->unit_flat_conversion : $this->input->post('unit_flat_conversion');
    echo bootstrap_field_val('text', 'unit_flat_conversion', 'Flat Conversion', $field_val, form_error('unit_flat_conversion'), null, null, null);
    ?> 
      </div>
    <?php
}

  $field_val = ( empty($_POST['collection_type']) ) ? $program->collection_type : $_POST['collection_type'];
  echo '<div class="form-group">';
  echo form_label('Collection Type', 'collection_type', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  echo form_dropdown('collection_type', $collection_types, $field_val);
  echo '</div></div>';

  $field_val = ( empty($_POST['archived']) ) ? $program->archived : $this->input->post('archived');
  echo '<div class="form-group">';
  echo form_checkbox('archived', '1', (bool)$field_val);
  echo form_label('Archive', 'archived', [ 'class' => 'control-label' ]);
  echo '<div class="form-label-desc">';
  echo '*Parents and sponsors cannot view participants and pledges linked to this program.';
  echo '</div></div>';

  $field_val = ( empty($_POST['florida_prepaid']) ) ? $florida_prepaid : $this->input->post('florida_prepaid');
  echo '<div class="form-group">';
  echo form_checkbox('florida_prepaid', '1', (bool)$field_val);
  echo form_label('Florida Prepaid', 'florida_prepaid', [ 'class' => 'control-label' ]);
  echo '</div>';

  $field_val = ( empty($_POST['good_grains']) ) ? $good_grains : $this->input->post('good_grains');
  echo '<div class="form-group">';
  echo form_checkbox('good_grains', '1', (bool)$field_val);
  echo form_label('Good Grains', 'good_grains', [ 'class' => 'control-label' ]);
  echo '</div>';

  $field_val = ( empty($_POST['parent_email_prompts']) ) ? $program->parent_email_prompts : $this->input->post('parent_email_prompts');
  echo '<div class="form-group">';
  echo form_checkbox('parent_email_prompts', '1', (bool)$field_val);
  echo form_label('Parent Email Prompts', 'parent_email_prompts', [ 'class' => 'control-label' ]);
  echo '</div>';

  $field_val = $program->restrict_access_prize_reports;
  echo '<div class="form-group">';
  echo form_checkbox('restrict_access_prize_reports', '1', (bool)$field_val);
  echo form_label('Restrict Access to Prize Reports', 'restrict_access_prize_reports', [ 'class' => 'control-label' ]);
  echo '</div>';

  $field_val = $program->show_corporate_matching_widget;
  echo '<div class="form-group">';
  echo form_checkbox('show_corporate_matching_widget', '1', (bool)$field_val);
  echo form_label('Show Corporate Matching Widget', 'show_corporate_matching_widget', [ 'class' => 'control-label' ]);
  echo '</div>';

  $field_val = $program->hide_teacher_action_steps;
  echo '<div class="form-group">';
  echo form_checkbox('hide_teacher_action_steps', '1', (bool)$field_val);
  echo form_label('Hide Teacher Action Steps', 'hide_teacher_action_steps', [ 'class' => 'control-label' ]);
  echo '</div>';

  $field_val = $program->hide_teacher_incentives;
  echo '<div class="form-group">';
  echo form_checkbox('hide_teacher_incentives', '1', (bool)$field_val);
  echo form_label('Hide Teacher Incentives', 'hide_teacher_incentives', [ 'class' => 'control-label' ]);
  echo '</div>';

  $field_val = $program->ssv_disabled;
  echo '<div class="form-group">';
  echo form_checkbox('ssv_disabled', '1', (bool)$field_val);
  echo form_label('Disable Student Star Video', 'ssv_disabled', [ 'class' => 'control-label' ]);
  echo '<div class="form-label-desc">';
  echo 'The Student Star Video will not be created for all users in this program.';
  echo '</div></div>';

  $field_val = $program->require_address;
  echo '<div class="form-group">';
  echo form_checkbox('require_address', '1', (bool)$field_val);
  echo form_label('Require Address to Register', 'require_address', [ 'class' => 'control-label' ]);
  echo '<div class="form-label-desc">';
  echo 'Require users to provide an address during registration.';
  echo '</div></div>';

  $field_val = (bool)$program->custom_url;
  echo '<div class="form-group">';
  echo form_checkbox('enable_direct_give', '1', $field_val);
  echo form_label('Enable Direct Give', 'enable_direct_give', [ 'class' => 'control-label' ]);
  echo '<div class="form-label-desc">';
  echo 'Enables users to access a custom page for direct give.';
  echo '</div></div>';

  $field_val = ( empty($_POST['custom_url']) ) ? $program->custom_url : $this->input->post('custom_url');
  $hidden    = (bool)$program->custom_url ? '' : 'hidden';
  $required  = (bool)$program->custom_url ? 'required="required"' : '';
  $error     = (bool)form_error('custom_url') ? 'error' : '';
  echo '<div class="' . $hidden . '" id="direct-give-custom-url">';

  echo '<div class="form-group ' . $error .'">';
  echo '<label for="custom_url">Direct Give Custom URL</label>';
  echo '<div class="input-group">';
  echo '<span class="input-group-addon">give.mybooster.com/</span>';
  echo '<input type="text" placeholder="customurl" name="custom_url" value="' . $field_val . '" class="form-control " maxlength="40"' . $required . '>';
  echo '</div>';
if (form_error('custom_url')) {
  echo form_error('custom_url');
}

  echo '</div>';
  echo '</div>';

  $field_val = (bool)$program->enable_on_behalf_of_payments;
  $hidden    = (bool)$program->custom_url ? '' : 'hidden';
  echo '<div class="form-group ' . $hidden . '" id="on-behalf-of">';
  echo form_checkbox('enable_on_behalf_of_payments', '1', $field_val);
  echo form_label('Giving On Behalf Of', 'enable_on_behalf_of_payments', [ 'class' => 'control-label' ]);
  echo '<div class="form-label-desc">';
  echo 'Pledges are made on behalf of a participant.';
  echo '</div></div>';

  echo '<div class="form-actions">';
  echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
  echo '</div>';

  echo form_close();
?>
