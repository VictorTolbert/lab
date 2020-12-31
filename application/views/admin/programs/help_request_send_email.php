<div class="row">
    <div class="tab-content">
        <div class="tab-pane active" id="pledge">
            <div class="col-md-12">
                <?php
                if (!empty($error_message)) {
                  echo "<div class='alert alert-danger'>{$error_message}</div>";
                }
                ?>
                <h3>Help Requests > Send Email > <?php echo $ticket['requester']?>
                    (on behalf of Participant: <?php echo $ticket['student_name'] ?>)</h2>
                <div>
                    <a href="/admin/programs/help_requests/<?php echo $program->id; ?>">Back to Help Requests</a>
                </div>
                <hr />
                <?php
                if ($ticket['status'] === Zendesk_model::CLOSED_STATUS) {
                  echo "<p>This help request has been closed, meaning that the help request is complete and can't be reopened. </p>" .
                        "<p>If needed, you can create a new help requests for closed requests.</p>";
                } elseif ($ticket['status'] === Zendesk_model::SOLVED_STATUS) {
                    '<p>This help request has been solved.  Please change this help request to "open" or "pending" before sending an email.</p>';
                } else {
                    echo form_open('/admin/programs/help_requests/send-email/' . $ticket['id'] .'/' . $program->id, ['class' => 'form-horizontal']);

                    // EMAIL TYPE
                    $field_val = ( empty($_POST['email_type']) ) ? $default_email_type : $_POST['email_type'];
                    echo '<div class="form-group">';
                    echo form_label('Message Type', 'email_type', [ 'class' => 'control-label' ]);
                    echo '<div class="controls">';
                    echo form_dropdown('email_type', $email_types, $field_val, ' id="select_email_type" ');
                    echo form_error('email_type');
                    echo '</div></div>';

                    // FROM field
                    $field_val = ( empty($_POST['from']) ) ? $default_from : $this->input->post('from');
                    echo bootstrap_field_val('text', 'from', 'From', $field_val, form_error('from'), 'extended_input', null, null, ' readonly="readonly"');

                    // TO field
                    $field_val = ( empty($_POST['to']) ) ? $default_to : $this->input->post('to');
                    echo bootstrap_field_val('text', 'to', 'To', $field_val, form_error('to'), 'extended_input', null, null, ' readonly="readonly"');

                    // SUBJECT field
                    $field_val = ( empty($_POST['subject']) ) ? $default_subject : $this->input->post('subject');
                    echo bootstrap_field_val('text', 'subject', 'Subject', $field_val, form_error('subject'), 'extended_input', null, null, ' ');

                    // MESSAGE textarea
                    echo '<div class="letter-body-container">';
                    $field_val = ( empty($_POST['body']) ) ? $default_body : $this->input->post('body');
                    echo bootstrap_textarea_val('body', 'Body', $field_val, form_error('body'));
                    echo '</div>';

                    // SUBMIT buttons
                    echo '<div class="form-actions">';
                    echo '<a href="/admin/programs/help_requests/send-email/'.$ticket['id'].'/'.$program->id.'" class="btn btn-default">Cancel</a> &nbsp;';
                    echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Send Email' ]);
                    echo '</div>';

                    echo form_close();
                }
                ?>
            </div><!--/pledge div (same format as pledge email even though for sending help request response)-->
        </div>
    </div>
</div>
