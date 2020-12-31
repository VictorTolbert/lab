<?
if ($error) {
  echo "<div class='alert alert-danger'>{$error}</div>";
} elseif ($this->session->flashdata('error')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('error')}</div>";
} elseif ($success) {
  echo "<div class='alert alert-success'>{$success}</div>";
}
?>
<div class="row col-md-12">
  <div class="tab-content">
    <div class="tab-pane active col-md-12" id="pledge">
      <div class="col-md-12">
        <h3>Sponsor Thank You Email - <em>After Collection #2</em></h3>
        <div>
          <a href="/admin/programs/dashboard/<?= $program_id;?>">Back to Program</a> &nbsp;
        </div>
        <hr />
        <div id="sponsor-follow-up-wrapper col-md-12">
          <?
          echo $this->session->flashdata('success');
          echo form_open(
            'admin/programs/communication/sponsor-follow-up/'.$program_id,
            ['class' => 'form-horizontal',
                               'id' => 'sponsor-follow-up-form'
            ]
          );
          $field_val = (empty($_POST['subject'])) ? $subject : $this->input->post('subject');
          echo bootstrap_field_val(
            'text', 'subject', 'Subject', $field_val,
            form_error('subject'), null, null, null, 'size="112" id="subject"'
          );
          echo '<div class="letter-body-container">';
          $field_val = (empty($_POST['body'])) ? $body : $this->input->post('body');
          echo bootstrap_textarea_val('body', 'Email Body', $field_val, form_error('body'));
          echo '</div>';
          echo '<div class="form-actions">';
          echo '<a href="/admin/programs/dashboard/'.$program_id.'" class="btn btn-default">Cancel</a> &nbsp;';
          echo '<a href="#send-email-confirmation" data-toggle="modal"' .
               'class="btn btn-info">' .
               'Send Email' .
               '</a>';
          echo form_close();
          ?>
        </div>
        <div id="send-email-confirmation" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">&times;</button>
                <h3>Send Sponsor Thank You Email Emails</h3>
              </div>
              <div class="modal-body">
                <h5>Are you sure you want to send this email to all sponsors in this program?</h5>
                <p>If yes, then click Send Emails.</p>
              </div>
              <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
                <a href="#" id="confirm-send" class="btn btn-danger">Send Emails</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <? $this->load->view('admin/programs/partials/email_notification_history'); ?>
  </div>
</div>
