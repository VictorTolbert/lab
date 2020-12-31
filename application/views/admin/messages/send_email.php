<div class="row">
  <div class="tab-content">
    <div class="tab-pane active" id="pledge">
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
        <div class="col-md-4 col-md-offset-4">
          <h3>Pledge > Send Email > <?= $message_info->student->first_name.' '.$message_info->student->last_name ?> (Student ID #<?= $participant_user_id?>)</h2>
          <div>
            <a href="/admin/users/profile/<?= $participant_user_id; ?>">Back to View Student</a>
          </div>
          <hr />
          <?php
          if (!empty($message_info->pledges)) {
            echo $this->session->flashdata('success');
            echo form_open('admin/pledges/send-email/'.$participant_user_id, ['class' => 'form-horizontal']);

            // STUDENT ID field
            echo form_hidden('participant_user_id', $participant_user_id);

            // EMAIL TYPE
            $field_val = empty($_POST['email_type']) ? $default_email_type : $_POST['email_type'];
            echo '<div class="form-group">';
            echo form_label('Message Type', 'email_type', ['class' => 'control-label']);
            echo '<div class="controls">';
            echo form_dropdown('email_type', $email_types, $field_val, ' id="select_email_type" ');
            echo form_error('email_type');
            echo '</div></div>';

            // FROM field
            $field_val  = empty($_POST['from']) ? $default_from : $_POST['from'];
            $errorClass = form_error('from') ? ' error' : '';
            echo '<div class="form-group '.$errorClass.'">';
            echo form_label('From', 'from', ['class' => 'control-label']);
            echo '<div class="controls">';
            echo form_dropdown('from', $from_addresses, $field_val, ' id="select_from" class="extended_input" ');
            echo form_error('from');
            echo '</div></div>';

            //REPLY_TO field
            $field_val  = empty($_POST['reply_to']) ? $default_from : $_POST['reply_to'];
            $errorClass = form_error('reply_to') ? ' error' : '';
            echo '<div class="form-group '.$errorClass.'">';
            echo form_label('Reply To', 'reply_to', ['class' => 'control-label']);
            echo '<div class="controls">';
            echo form_dropdown('reply_to', $reply_to_addresses, $field_val, ' id="select_from" class="extended_input" ');
            echo form_error('reply_to');
            echo '</div></div>';

            // TO field
            $field_val = empty($_POST['to']) ? $default_to : $this->input->post('to');
            echo bootstrap_field_val('text', 'to', 'To', $field_val, form_error('to'), null, null, null, ' readonly="readonly"');

            // SUBJECT field
            $field_val = empty($_POST['subject']) ? $default_subject : $this->input->post('subject');
            echo bootstrap_field_val('text', 'subject', 'Subject', $field_val, form_error('subject'), null, null, null, ' ');

            // MESSAGE textarea
            echo '<div class="letter_body_containter">';
            $field_val = empty($_POST['body']) ? $default_body : $this->input->post('body');
            echo bootstrap_textarea_val('body', 'Body', $field_val, form_error('body'));
            echo '</div>';

            // SUBMIT buttons
            echo '<div class="m-left-neg-15">';
            echo '<a href="/admin/users/profile/'.$participant_user_id.'" class="btn btn-default">Cancel</a> &nbsp;';
            echo form_submit(['name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Send Email']);
            echo '</div>';

            echo form_close();
          } else {
            echo '<p>This student does not have any pledges, there are no pledges to confirm.</p>';
          }
          ?>
          <br><br>
        </div>
      </div><!--/pledge-->
    </div>
  </div>
</div>
