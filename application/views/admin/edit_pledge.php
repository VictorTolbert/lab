<?php
$pledge_deleted      = Pledge_model::status_deleted($pledge->status);
$pledge_paid         = Pledge_model::status_paid($pledge->status);
$pledge_paid_pending = Pledge_model::status_paid_pending($pledge->status);
$pledge_confirmed    = Pledge_model::status_confirmed($pledge->status);
$pledge_pending      = Pledge_model::status_pending($pledge->status);
?>
<div class="row">
    <div class="col-md-12">

      <?php
      if (isset($message) && ! empty($message)) {
        echo "<div class='alert alert-success'>{$message}</div>";
      } elseif (isset($error_message) && ! empty($error_message)) {
        echo "<div class='alert alert-danger'>{$error_message}</div>";
      } elseif ($this->session->flashdata('message')) {
        echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
      }
      ?>
      <ul class="breadcrumb">
          <li><a href="/admin/programs/dashboard/<?php echo $program->id; ?>"><?php echo $program->name; ?></a> <span class="divider">/</span></li>
          <li><a href="/admin/programs/pledges/<?php echo $program->id; ?>">Pledges</a><span class="divider">/</span></li>
          <li>Edit <?php echo $pledge->participant; ?> Pledge (id #<?php echo $pledge->id;?>)</li>
      </ul>

      <div>
        <a href="/admin/users/profile/<?php echo $pledge->participant_user_id; ?>">
          View Participant
        </a> &nbsp;
        <?php if (!$pledge_deleted and !$pledge_paid or is_sys_admin()) { ?>
            <a class="btn btn-danger detail" data-action="delete-entity" data-itemtype="pledge"
              href="<?php echo site_url("admin/pledges/delete/".$pledge->id)?>">
              <i class="glyphicon glyphicon-trash"></i>
               Delete
            </a>
        <?php } ?>

        <?php if ($pledge_pending) { ?>
            <a class="btn btn-success" data-action="confirm_pledge"
              href="<?php echo site_url("admin/pledges/confirm/".$pledge->id)?>">
              <i class="glyphicon glyphicon-ok-sign"></i>
               Confirm
            </a>
        <?php } ?>
        <?php if (!$pledge_pending && !$pledge_paid && !$pledge_paid_pending) { ?>
            <a class="btn btn-warning" data-action="set_pending_pledge"
               href="<?php echo site_url("admin/pledges/set-pending/".$pledge->id)?>">
            <i class="glyphicon glyphicon-ok-sign"></i> Change Pledge to Pending</a>
        <?php } ?>
        <a id="send_payment_request_btn" class="btn btn-success" data-action="send_payment_request" href="#payment_request_email_modal" data-toggle="modal">
          <i class="glyphicon glyphicon-envelope"></i> Email Payment Request
        </a>
      </div>

      <hr />

      <div class="container col-md-4">
      <?php

      $paid_input_status      = ($pledge_paid || (! $is_sys_admin && ($pledge_paid_pending || $has_payment_scheduled))) ? 'readonly="readonly"' : '';
      $paid_select_status     = ($pledge_paid || (! $is_sys_admin && ($pledge_paid_pending || $has_payment_scheduled))) ? 'hideElem' : '';
      $paid_readonly_status   = ($pledge_paid || (! $is_sys_admin && ($pledge_paid_pending || $has_payment_scheduled))) ? '' : 'hideElem';
      $participant_id_display = ($pledge->family_pledge_id) ? 'readonly="readonly"' : null;

      echo $this->session->flashdata('success');

      echo form_open('admin/pledges/update/' . $pledge->id, [ 'class' => '', 'id' => 'edit_pledge_form']);

      echo form_hidden('sponsor_id', $sponsor->id);
      echo form_hidden('pledge_id', $pledge->id);
      echo form_hidden('status', $pledge->status);
      echo form_hidden('pledge_laps', $pledge->laps);
      echo form_hidden('default_num_laps', $default_num_laps);
      echo form_hidden('business_sponsor_type_id', $business_sponsor_type_id);

      echo '<div id="pledge_id_wrapper">';
      echo bootstrap_field_val('text', 'pledge_id', 'Pledge ID', $pledge->id, null, null, null, null, 'readonly="readonly"');
      echo '</div>';

      if ($is_sys_admin) {
        echo '<div id="participant_id_wrapper">';
        echo bootstrap_field_val('text', 'participant_user_id', 'Participant User ID', $pledge->participant_user_id, form_error('participant_user_id'), null, null, null, $participant_id_display);
        echo '</div>';
      }

      echo '<div id="family_pledge_id_wrapper">';
      echo bootstrap_field_val('text', 'family_pledge_id', 'Family Pledge ID', $pledge->family_pledge_id, null, null, null, null, 'readonly="readonly"');
      echo '</div>';

      $field_val = ( empty($_POST['type']) ) ? $pledge->type : $_POST['type'];
      echo '<div class="form-group '.$paid_select_status.'">';
      echo form_label('Type', 'type', [ 'class' => 'control-label' ]);
      echo '<div class="controls">';
      echo form_dropdown('type', $pledge_types['options'], $field_val, 'id="edit_pledge_type" ');
      echo form_error('type');
      echo '</div></div>';

      echo '<div id="pledge_type_readonly_wrapper" class="'.$paid_readonly_status.'">';
      $field_val = $pledge_types['options'][$field_val];
      echo bootstrap_field_val('text', 's_pledge_type_readonly', 'Type', $field_val, null, null, null, null, 'id="s_pledge_type_readonly" readonly="readonly"');
      echo '</div>';

      $field_val = ( empty($_POST['amount']) ) ? $pledge->amount : $this->input->post('amount');
      echo bootstrap_field_val('text', 'amount', 'Amount', $field_val, form_error('amount'), null, null, null, 'id="edit_pledge_amt" '.$paid_input_status);


      echo '<div id="total_amount_wrapper">';
      $field_val = ( empty($_POST['total_amount']) ) ? '' : $this->input->post('total_amount');
      echo bootstrap_field_val('text', 'total_amount', 'Total Amount', $field_val, form_error('total_amount'), null, null, null, 'readonly="readonly"');
      echo '</div>';

      $field_val = $pledge_statuses[$pledge->status];
      echo bootstrap_field_val(
        'text', 'status_text', 'Status', $field_val,
        null, null, null, null, 'readonly="readonly"'
      );

      $field_val = ( empty($_POST['substatus']) ) ? $pledge->substatus : $_POST['substatus'];
      echo '<div class="form-group">';
      echo form_label('Substatus', 'substatus', [ 'class' => 'control-label' ]);
      echo '<div class="controls">';
      echo form_dropdown('substatus', $pledge_substatuses, $field_val);
      echo form_error('substatus');
      echo '</div></div>';

      echo bootstrap_field_val(
        'text', 'ts_entered', 'Entered on',
        $pledge->ts_entered_tz, form_error('ts_entered'),
        null, $pledge->tz_known, null, 'disabled="disabled"'
      );

      $field_val = $this->input->post('ts_confirmed') ?: $pledge->ts_confirmed_tz;
      echo bootstrap_field_val(
        'text', 'ts_confirmed', 'Confirmed on',
        $field_val, form_error('ts_confirmed'),
        'datepicker', $pledge->tz_known
      );

      echo bootstrap_field_val(
        'text', 'entered_location', 'Entered Location',
        $pledge->entered_location, null,
        null, null, null, 'disabled="disabled"'
      );

      echo bootstrap_field_val(
        'text', 'referrer', 'Referred From',
        $pledge->referrer, null,
        null, null, null, 'disabled="disabled"'
      );

      echo bootstrap_field_val(
        'text', 'classroom', 'Classroom',
        $pledge->class, form_error('classroom'),
        null, null, null, 'disabled="disabled"'
      );

      //Sponsor info
      $field_val = ( empty($_POST['sponsor_type']) ) ? $pledge->sponsor_type : $_POST['sponsor_type'];
      echo '<div class="form-group">';
      echo form_label('Sponsor Type', 'sponsor_type', [ 'class' => 'control-label' ]);
      echo '<div class="controls">';
      echo form_dropdown('sponsor_type', $sponsor_types, $field_val);
      echo form_error('sponsor_type');
      echo '</div></div>';


      echo "<div id='business-row' class='row " . $business_display_class . "'>";
      echo "<div class='col-sm-12'>";
      echo "<div id='show_business_pledge_fields' class='panel panel-default bottom-10'>";
      echo "<div class='panel-heading text-center'>";
      echo "Business Information";
      echo "</div>";
      echo "<div class='panel-body'>";
      $field_val = ( empty($_POST['business_name']) ) ? $pledge->business_name : $this->input->post('business_name');
      echo bootstrap_field_val('text', 'business_name', 'Business Name', $field_val, form_error('business_name'), 'bottom-10', null, null, 'maxlength="50" placeholder="Business Name" ' . $business_name_required);

      $field_val = ( empty($_POST['business_website']) ) ? $pledge->business_website : $this->input->post('business_website');
      echo bootstrap_field_val('text', 'business_website', 'Business Website', $field_val, form_error('business_website'), 'form-control', null, null, 'maxlength="50" placeholder="Business Website"');
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";

      $field_val = ( empty($_POST['first_name']) ) ? $sponsor->first_name : $this->input->post('first_name');
      echo bootstrap_field_val('text', 'first_name', 'First Name', $field_val, form_error('first_name'));

      $field_val = ( empty($_POST['last_name']) ) ? $sponsor->last_name : $this->input->post('last_name');
      echo bootstrap_field_val('text', 'last_name', 'Last Name', $field_val, form_error('last_name'));

      $field_val = ( empty($_POST['email']) ) ? $sponsor->email : $this->input->post('email');
      echo bootstrap_field_val('text', 'email', 'Email/Username', $field_val, form_error('email'));

      $field_val = ( empty($_POST['phone']) ) ? $sponsor->phone : $this->input->post('phone');
      echo bootstrap_field_val('text', 'phone', 'Phone', $field_val, form_error('phone'));

      $field_val = ( empty($_POST['address']) ) ? $sponsor->address : $this->input->post('address');
      echo bootstrap_field_val('text', 'address', 'Address', $field_val, form_error('address'));

      $field_val = ( empty($_POST['city']) ) ? $sponsor->city : $this->input->post('city');
      echo bootstrap_field_val('text', 'city', 'City', $field_val, form_error('city'));

      $field_val = ( empty($_POST['state']) ) ? $sponsor->state : $_POST['state'];
      echo '<div class="form-group">';
      echo form_label('State', 'state', [ 'class' => 'control-label' ]);
      echo '<div class="controls">';
      echo form_dropdown('state', $states, $field_val);
      echo form_error('state');
      echo '</div></div>';

      $field_val = ( empty($_POST['zip']) ) ? $sponsor->zip : $this->input->post('zip');
      echo bootstrap_field_val('text', 'zip', 'Zip Code', $field_val, form_error('zip'));

      $field_val = ( empty($_POST['country']) ) ? $sponsor->country : $_POST['country'];
      echo '<div class="form-group">';
      echo form_label('country', 'Country', [ 'class' => 'control-label' ]);
      echo '<div class="controls">';
      echo form_dropdown('country', $countries, $field_val);
      echo form_error('country');
      echo '</div></div>';

      $field_val = ( empty($_POST['entered_by']) ) ? $pledge->entered_by : $this->input->post('entered_by');
      echo bootstrap_field_val('text', 'entered_by', 'Entered by', $field_val, form_error('entered_by'), null, null, null, 'disabled="disabled"');

      $field_val = ( empty($_POST['ip_address']) ) ? $pledge->ip_address : $this->input->post('ip_address');
      echo bootstrap_field_val('text', 'ip_address', 'IP Address', $field_val, form_error('ip_address'), null, null, null, 'disabled="disabled"');

      $field_val = ( empty($_POST['updated_by']) ) ? $pledge->updated_by : $this->input->post('updated_by');
      echo bootstrap_field_val('text', 'updated_by', 'Updated by', $field_val, form_error('updated_by'), null, null, null, 'disabled="disabled"');

      echo bootstrap_field_val(
        'text', 'ts_updated', 'Last Updated',
        $pledge->ts_updated_tz, form_error('ts_updated'),
        null, $pledge->tz_known, null, 'disabled="disabled"'
      );

      echo '<div class="form-actions">';
      echo form_submit([ 'name' => 'submit_btn', 'class' => 'btn btn-info', 'value' => 'Update' ]);
      echo '</div>';

      echo form_close();

      ?>

    <div id="payment_request_email_modal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Email Confirmation?</h3>
          </div>
          <div class="modal-body">
            <h5>Are you sure you want to send this parent a payment request email?</h5>
          </div>
          <div class="modal-footer">
            <a href="#" id="cancel_payment_request_email" class="btn btn-default">Cancel</a>
            <a href="#" id="confirm_payment_request_email" class="btn btn-primary">Send Email</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
