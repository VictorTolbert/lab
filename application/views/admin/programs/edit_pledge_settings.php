<div class="row">
    <div class="tab-content">
        <div class="tab-pane active" id="program">
            <div class="col-md-12">
                <?php
                if (isset($message) && ! empty($message)) {
                  echo "<div class='alert alert-success'>{$message}</div>";
                } elseif (isset($error_message) && ! empty($error_message)) {
                    echo "<div class='alert alert-danger'>{$error_message}</div>";
                } elseif ($this->session->flashdata('message')) {
                  echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
                }

                echo $this->session->flashdata('success');
                ?>
                <h3>Pledge Flagging Settings</h3>
                <?php
                    echo form_open('/admin/programs/pledges/settings/' . $program_pledge_settings->program_id, [ 'class' => 'form-horizontal' ]);

                    $field_val = ( empty($_POST['flag_high_donation']) ) ? $program_pledge_settings->flag_high_donation : $this->input->post('flag_high_donation');
                    echo bootstrap_field_val('text', 'flag_high_donation', 'High Donation', $field_val, form_error('flag_high_donation'), null, null, null, 'maxlength="6"');

                    $field_val = ( empty($_POST['flag_high_cumulative_per_period']) ) ? $program_pledge_settings->flag_high_cumulative_per_period : $this->input->post('flag_high_cumulative_per_period');
                    echo bootstrap_field_val('text', 'flag_high_cumulative_per_period', 'Cumulative Pledge Amount', $field_val, form_error('flag_high_cumulative_per_period'), null, null, null, 'maxlength="6"');

                    $field_val = ( empty($_POST['flag_high_quantity_per_period']) ) ? $program_pledge_settings->flag_high_quantity_per_period : $this->input->post('flag_high_quantity_per_period');
                    echo bootstrap_field_val('text', 'flag_high_quantity_per_period', 'Pledges In Period', $field_val, form_error('flag_high_quantity_per_period'), null, null, null, 'maxlength="3"');

                    echo '<div class="form-actions">';
                    echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Submit' ]);
                    echo '</div>';

                    echo form_close();
                ?>

              </div><!--/program-->
            </div>
