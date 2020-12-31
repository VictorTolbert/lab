<div class="row">
  <div class="row col-md-12">
    <div class="col-md-8 col-sm-10 col-md-offset-3 col-sm-offset-2">
      <h4>Users > Edit User > <?= "{$user->first_name} {$user->last_name}" ?>
        <?php if($user->email): ?>
          <?php if($self): ?>
            <a href="<?= site_url('/admin/users/change_password'); ?>" class="btn btn-default">
              Change Password
            </a>
          <?php else: ?>
            <a href="<?= site_url('/admin/users/reset_password/' . $user->id); ?>" class="btn btn-default">
              Reset Password
            </a>
          <?php endif; ?>
        <?php endif; ?>
        <? if($can_delete_user): ?>
          <a class="btn btn-danger" href="/admin/user/get_delete_message/<?= $user->id ?>" id="delete-user"><i class="glyphicon glyphicon-trash"></i> Delete</a>
          <input type="hidden" id="url-delete-user" value="/admin/user/delete/<?= $user->id; ?>" />
          <input type="hidden" id="url-delete-message" value="/admin/user/get_delete_message/<?= $user->id ?>" />
        <? endif; ?>
      </h4>
    </div>
    <br>
    <div class="container col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-2">

  <?php
      $warning = empty($warning) ? $this->session->flashdata('warning') : $warning;
  if (! empty($success)) {
    echo "<div class='alert alert-success'>$success</div>";
  } elseif (! empty($warning)) {
    echo "<div class='alert alert-danger'>$warning</div>";
  }

  if (!$user || $user->deleted == 1) {
    ?>
    <div class="alert alert-danger deleted-user-notification" role="alert">THIS USER HAS BEEN DELETED</div>
    <?php
  } // End If User Null

    echo form_open_multipart('users/edit/' . $user->id, [ 'class' => '' ]);

    $field_val = ( empty($_POST['first_name']) ) ? $user->first_name : $this->input->post('first_name');
    echo bootstrap_field_val('text', 'first_name', 'First Name', $field_val, form_error('first_name'));
    $field_val = ( empty($_POST['last_name']) ) ? $user->last_name : $this->input->post('last_name');
    echo bootstrap_field_val('text', 'last_name', 'Last Name', $field_val, form_error('last_name'));
    $field_val = ( empty($_POST['email']) ) ? $user->email : $this->input->post('email');
    echo bootstrap_field_val('text', 'email', 'Email', $field_val, form_error('email'));
  ?>
    <div class="form-group">
    <label class="control-label" for="dob">Date of Birth</label>
    <div class="controls container">
      <?php
      $month = $this->input->post("dob_month") ?: (empty($user->dob) ? '' : substr($user->dob, 5, 2));
      $day   = $this->input->post("dob_day") ?: (empty($user->dob) ? '' : substr($user->dob, 8));
      $year  = $this->input->post("dob_year") ?: (empty($user->dob) ? '' : substr($user->dob, 0, 4));
      ?>
      <div class="margin-left-neg-30">
        <div class="col-md-1 col-sm-2 col-xs-3"><?= month_dropdown(['name' => 'dob_month', 'id' => 'dob-month'], $month); ?></div>
        <div class="col-md-1 col-sm-2 col-xs-3"><?= day_dropdown(['name' => 'dob_day', 'id' => 'dob-day'], $day); ?></div>
        <div class="col-md-1 col-sm-2 col-xs-3"><?= year_dropdown(['name' => 'dob_year', 'id' => 'dob-year'], $year, date("Y"), 91); ?></div>
        <div class="col-md-1 col-sm-2 col-xs-3"><?= form_error("dob_month") . form_error("dob_day") . form_error("dob_year"); ?></div>
      </div>
    </div>
    </div>
    <?php
    $field_val = ( empty($_POST['user_type']) ) ? $user->user_groups : $_POST['user_type'];
    if (is_sys_admin()) {
      ?>
      <div class="form-group" id="user-groups">
        <span class="help-block"><a href="#" id="reveal-groups">User Groups (click to reveal)</a></span>
        <div class="controls">
        <?php
        $group_chunk = array_chunk($user_groups, 15, true);
        foreach ($group_chunk as $group_col) {
          echo "<div class='col-md-4'>";
          foreach ($group_col as $group_id => $label) {
            $checked = !empty($field_val[$group_id]) ? 'checked' : '';
            echo '<label class="checkbox">';
            echo '<input type="checkbox" name="user_type[]" ' . $checked . ' value="' . $group_id . '">';
            echo $label;
            echo '</label>';
          }

          echo "</div>";
        }

        echo '</div>';
        echo '</div>';
        echo form_error('user_type');
    }

    $field_val = ( empty($_POST['address']) ) ? $user->address : $this->input->post('address');
    echo bootstrap_field_val('text', 'address', 'Street Address', $field_val, form_error('address'));
    $field_val = ( empty($_POST['city']) ) ? $user->city : $this->input->post('city');
    echo bootstrap_field_val('text', 'city', 'City', $field_val, form_error('city'));
    $field_val = ( empty($_POST['state']) ) ? $user->state : $this->input->post('state');
    echo bootstrap_field_val('text', 'state', 'State', $field_val, form_error('state'));
    $field_val = ( empty($_POST['zip']) ) ? $user->zip : $this->input->post('zip');
    echo bootstrap_field_val('text', 'zip', 'Zip/postal code', $field_val, form_error('zip'));
    $field_val = ( empty($_POST['country']) ) ? $user->country : $this->input->post('country');
    echo bootstrap_field_val('text', 'country', 'Country', $field_val, form_error('country'));
    $field_val = ( empty($_POST['phone']) ) ? $user->phone : $this->input->post('phone');
    echo bootstrap_field_val('text', 'phone', 'Phone', $field_val, form_error('phone'));
    ?>
  <?php

  if (!empty($classroom_id)) {
    echo form_hidden('orig_classroom_id', $classroom_id);
    $field_val = ( empty($_POST['classroom_id']) ) ? $classroom_id : $this->input->post('classroom_id');
    echo '<div class="form-group">';
    echo form_label('Classroom', 'classroom_id', [ 'class' => 'control-label' ]);
    echo '<div class="controls">';
    echo form_dropdown('classroom_id', $classrooms, $field_val);
    echo '</div></div>';
  }

  if ($is_student_or_teacher && !is_sys_admin()) {
    foreach ($user->user_groups as $user_group_id => $user_group_name) {
      echo '<input type="hidden" name="user_type[]" value="'.$user_group_id.'" />';
    }

    $field_val = ( empty($_POST['user_group_toggle']) ) ? $user_group_toggle : $this->input->post('user_group_toggle');
    echo '<div class="form-group">';
    echo form_label('User Group', 'user_group_toggle', ['class'    => 'control-label']);
    echo '<div class="controls">';
    $extras = [];
    if (is_org_admin()) {
      $extras = ['disabled' => 'disabled'];
    }

    echo form_dropdown(
      'user_group_toggle',
      $student_teacher_user_groups,
      $field_val,
      $extras
    );
    echo '</div></div>';
  }

  $field_val = ( empty($_POST['flagging_mode_id']) ) ? $user->flagging_mode_id : $this->input->post('flagging_mode_id');
  echo '<div class="form-group">';
  echo form_label('User Flagging Mode', 'flagging_mode_id', [ 'class' => 'control-label' ]);
  echo '<div class="controls">';
  $extras = [];
  if (is_org_admin()) {
    $extras = ['disabled' => 'disabled'];
  }

    echo form_dropdown(
      'flagging_mode_id',
      $user_flagging_modes,
      $field_val,
      $extras
    );
    echo '</div></div>';

    $field_val = ( empty($_POST['block_collection_reminder']) ) ? $user->block_collection_reminder : $this->input->post('block_collection_reminder');
    echo '<div class="form-group">';
    echo form_label('Block Collection Reminder', 'block_collection_reminder', [ 'class' => 'control-label' ]);
    echo '<div class="controls">';
    echo form_hidden('block_collection_reminder', '0');
    $extras = [];
    if (is_org_admin()) {
      $extras = ['disabled' => 'disabled'];
    }

    echo form_checkbox(
      'block_collection_reminder',
      '1',
      (bool)$field_val,
      $extras
    );
    echo '</div></div>';

    $field_val = ( empty($_POST['waiver_signed']) ) ? $user->waiver_signed : $this->input->post('waiver_signed');
    echo '<div class="form-group">';
    echo form_label('Paper Waiver Signed', 'waiver_signed', [ 'class' => 'control-label' ]);
    echo '<div class="controls">';
    $extras = [];
    if (is_org_admin()) {
      $extras = ['disabled' => 'disabled'];
    }

    echo form_checkbox(
      'waiver_signed',
      '1',
      (bool)$field_val,
      $extras
    );
    echo '</div></div>';

    if ($is_student_or_teacher) {
      $field_val = ( empty($_POST['allow_pay_later_override']) ) ? $participant->allow_pay_later_override : $this->input->post('allow_pay_later_override');
      echo '<div class="form-group">';
      echo form_label('Override Online Payments Only', 'allow_pay_later_override', ['class' => 'control-label']);
      echo '<div class="controls">';
      $extras = [];
      if (is_org_admin()) {
        $extras = ['disabled' => 'disabled'];
      }

      echo form_checkbox(
        'allow_pay_later_override',
        '1',
        (bool)$field_val,
        $extras
      );

      echo '</div></div>';
    }

    if (is_sys_admin()) {
      $field_val = ( empty($_POST['active']) ) ? $user->active : $this->input->post('active');
      echo '<div class="form-group">';
      echo form_label('Active', 'active', ['class' => 'control-label']);
      echo '<div class="controls">';
      echo form_checkbox('active', '1', (bool)$field_val, ['disabled' => 'disabled']);
      echo '</div></div>';
    }

    echo '<div class="form-actions">';
    echo form_submit(['name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit']);
    echo '</div>';
    echo form_close();
    ?>

      </div>
    </div>
</div>
<div class="modal fade" style="display:none;" id="delete-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Are you sure you want to PERMANENTLY delete this user and data associated with this user including pledges, waiver agreement, and profile information?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" id = 'delete-cancel' class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Delete User</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" style="display:none;" id="delete-confirm-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3>User Deleted!</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

