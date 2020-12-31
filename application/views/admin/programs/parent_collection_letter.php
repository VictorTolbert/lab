<?php
if ($error) {
  echo "<div class='alert alert-danger'>{$error}</div>";
} elseif ($success) {
  echo "<div class='alert alert-success'>{$success}</div>";
}
?>
<div class="tab-content">
  <div class="tab-pane active" id="pledge">
    <div class="row">
      <div class="col-md-12">
        <h3>Parent Collection Letter and Email - <em>Follow Up Day</em></h3>
        <div>
          <a href="/admin/programs/dashboard/<?=$program_id?>">Back to Program</a> &nbsp;
        </div>
        <hr />
        <div id="collection_reminder" class="col-md-12">
          <?=$this->session->flashdata('success')?>
          <?=form_open('admin/programs/communication/collection-reminder/'.$program_id, [ 'class' => '', 'id' => 'parent_collection_email_form']); ?>
          <input type="hidden" name='parent_collection_letter' value="follow_up_day">
          <?php $field_val = ( empty($_POST['outstanding_amount']) ) ? $default_outstanding_amt : $this->input->post('outstanding_amount'); ?>
          <?=bootstrap_field_val('text', 'outstanding_amount', 'Outstanding Amount', $field_val, form_error('outstanding_amount'), null, null, null, 'id="edit_pledge_amt" '.$paid_input_status);?>
          <div class="letter-body-container">
            <?php $field_val = ( empty($_POST['body']) ) ? $default_body : $this->input->post('body'); ?>
            <?=bootstrap_textarea_val('body', 'Letter Body', $field_val, form_error('body'));?>
          </div>
          <br>
          <div class="row">
            <div class="form-actions col-md-12">
              <a href="/admin/programs/dashboard/<?=$program_id?>" class="btn btn-default">Cancel</a>
              <?=form_submit([ 'class' => 'btn btn-info  follow-up-day-form-btn', 'value' => 'Print']);?>
              <a href="#send_email_modal" data-toggle="modal" class="btn btn-info follow-up-day-form-btn">Send Email</a>
            </div>
          </div>
          <?=form_close()?>
        </div> <!-- end #collection_reminder_form -->
        <!-- send email modal -->
        <div id="send_email_modal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Send Parent Collection Letter - <em>Follow Up Day</em> Emails</h3>
              </div>
              <div class="modal-body">
                <h5>Are you sure you want to do that?</h5>
                <p>If yes, then click Send Emails.</p>
              </div>
              <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
                <a href="#" id="confirm_send" class="btn btn-danger">Send Emails</a>
              </div>
            </div>
          </div>
        </div> <!-- end #send_email_modal -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <? $this->load->view('admin/programs/partials/email_notification_history'); ?>
      </div>
    </div>
  </div>
</div>
