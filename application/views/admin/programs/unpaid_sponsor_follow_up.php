<?= $this->session->flashdata('success'); ?>
<div class="row col-md-12">
  <div class="tab-content">
    <div class="tab-pane active col-md-12" id="pledge">
      <div class="col-md-12">
      <h3>Unpaid Sponsor Payment Request - <em>After Collection <?= $alternate_header ?></em></h3>
        <div>
          <a href="/admin/programs/dashboard/<?= $program_id;?>">Back to Program</a> &nbsp;
        </div>
        <hr />
        <div id="sponsor-follow-up-wrapper col-md-12">
          <p>
            Only send this email right after you entered all cash and check collections on hand. This will send to an email to the sponsor of all unpaid pledges of participants that do not have any cash or checks collected.
          </p>
          <h4>Sample Email Text</h4>
          <p><strong>Subject: <?= $unpaid_subject ?></strong></p>
          <div>
            <p>(Sponsor First Name),</p>

            <p>Thank you for supporting (Participant Name) in the (Event Name)!</p>

            <p>You’re receiving this email because our system is telling us you haven’t paid your pledge yet. (Student first name) completed (unit type)! Based on your pledge, your donation to the (payee) is $(pledge total).</p>
<?php if ($program->online_payment_enabled && !$program->online_payment_required) { ?>
            <p>You can fulfill your pledge in two ways:</p>
            <ol>
              <li>
                Online - 
<?php } else { ?>
            <p>
<?php } ?>
<?php if ($program->online_payment_enabled || $program->online_payment_required) { ?>
                Click the link below to easily and securely pay your pledge now.
<?php } ?>
<?php if ($program->online_payment_enabled && !$program->online_payment_required) { ?>
                <br/>- or -<br/>
              </li>
              <li>By cash or check - 
<?php } else { ?>
              </p><p>
<?php } ?>
<?php if (!$program->online_payment_required) { ?>
                Make checks payable to...
<?php } ?>
<?php if ($program->online_payment_enabled && !$program->online_payment_required) { ?>
              </li>
            </ol>
<?php } else { ?>
            </p>
<?php } ?>
            <p>
            Please ignore this email if you’ve already paid. If you have any questions about your payment, please let us know by clicking "help" in the menu: here.
            </p>

            <p>
              Thanks again for supporting (Participant Name) in the (Event Name)!
            </p>

          </div>
          <?
          echo form_open(
            'admin/programs/communication/unpaid-sponsor-follow-up/'.$program_id,
            [
              'class' => 'form-horizontal',
              'id' => 'sponsor-follow-up-form'
            ]
          );
          ?>
          <input type="hidden" value="stuff"/>
          <div class="form-actions">
          <a href="/admin/programs/dashboard/<?= $program_id ?>" class="btn btn-default">Cancel</a> &nbsp;
          <a href="#send-email-confirmation" data-toggle="modal" class="btn btn-info">Send Emails</a>
          <?= form_close(); ?>
        </div>
        <div id="send-email-confirmation" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">&times;</button>
                <h3>Send Unpaid Sponsor Payment Request - <em>After Collection <?= $alternate_header ?></em> Emails</h3>
              </div>
              <div class="modal-body">
                <h5>Are you sure you want to send this email to all sponsors in this program?</h5>
                <p>If yes, then click Send Emails.</p>
              </div>
              <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
                <a href="/admin/programs/communication/send-unpaid-sponsor-follow-up/<?= $program_id ?>/<?= $alternate ?>" class="btn btn-danger">Send Emails</a>
                </a>
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
