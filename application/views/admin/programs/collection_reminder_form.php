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
        <h3>Parent Collection Letter and Email - <em>After Collections 1 & 2</em></h3>
        <div>
          <a href="/admin/programs/dashboard/<?=$program_id?>">Back to Program</a> &nbsp;
        </div>
        <hr />
        <div id="collection_reminder" class="col-md-12">
          <?php
          if ($outstanding_amount_high) {
            echo '<div class="alert">There are no students with outstanding amounts this high.</div>';
          } ?>
          <?=$this->session->flashdata('success')?>
          <?=form_open('admin/programs/communication/collection-reminder/'.$program_id, [ 'class' => '', 'id' => 'collection_reminder_form']); ?>
          <?php $field_val = ( empty($_POST['outstanding_amount']) ) ? $def_outstanding_amt : $this->input->post('outstanding_amount'); ?>
          <?=bootstrap_field_val('text', 'outstanding_amount', 'Outstanding Amount', $field_val, form_error('outstanding_amount'), null, null, null, 'id="edit_pledge_amt" '.$paid_input_status);?>
          <div class="letter-body-container">
            <?php $field_val = ( empty($_POST['body']) ) ? $def_body : $this->input->post('body'); ?>
            <?=bootstrap_textarea_val('body', 'Letter Body', $field_val, form_error('body'));?>
          </div>
          <br>
          <div class="row">
            <div class="form-actions col-md-12">
              <a href="/admin/programs/dashboard/<?=$program_id?>" class="btn btn-default">Cancel</a>
              <?=form_submit([ 'class' => 'btn btn-info  collection-reminder-form-btn', 'value' => 'Print']);?>
              <a href="#send_email_modal" data-toggle="modal" class="btn btn-info collection-reminder-form-btn">Send Emails</a>
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
                <h3>Send Parent Collection Letter and Email - <em>After Collections 1 & 2</em> Emails</h3>
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
