<ul class="breadcrumb">
  <li><?= ($program_list_link) ? '<a href="'.$program_list_link.'">Programs</a>' : 'Programs'?></li>
  <li><?= ($class_list_link) ? '<a href="'.$class_list_link.'">'.$program->name.'</a>' : $program->name ?></li>
  <li><?= ($student_list_link) ? '<a href="'.$student_list_link.'">Class: '.$class->name.' '.$class->gr_name.'</a>' : 'Class: '.$class->name.' '.$class->gr_name ?></li>
  <li><?= "{$student->first_name} {$student->last_name}"; ?></li>
</ul>
<div class="modal fade" style="display:none;" id="collection-exceeding-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h4>Payment Amount Higher Than Pledged</h4></div>
      <div class="modal-body">
        <h5>
          The payment you are about to enter will make the total amount collected greater than the amount pledged.  Please double check the amounts of all entered payments.  If this amount is correct, add a pledge to the participant so they can earn a prize.
        </h5>
        <h1 class="center"><span class="over-amount label label-warning"></span></h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-info submit" data-dismiss="modal">Enter Payment</button>
      </div>
    </div>
  </div>
</div>

<?
if (!empty($splits)) {
  $payment = $splits[0];
  echo form_open(
    $edit_program_student_url . '/' . $payment->id,
    ['class' => 'form-inline', 'id' => 'payment-form']
  );
} else {
  echo form_open($action. "#paymentDetails", ['class' => 'form-inline', 'id' => 'payment-form']);
}
?>
<h3>
  Add Payments &gt; <?= "{$student->first_name} {$student->last_name}"; ?>
  <a href="<?= $choose_student_url; ?>" class="btn btn-default btn-sm">
    Choose another participant
  </a>
</h3>
<hr>
<div class="row">
  <div class="container">
    <ul class="list-inline pledge-sums">
      <li class="form-group col-lg-2 col-lg-offset-1 col-sm-6 col-md-5ths col-xs-12">
        <span class="input-group">
          <span class="input-group-addon input-group-blue-bg">Envelope $</span>
          <input class="numeric form-control" id="envelope-amount" type="text" disabled="disabled"
                    value="<?= $history['envelopePennies']; ?>">
        </span>
      </li>
      <li class="form-group col-lg-2 col-sm-6 col-md-5ths col-xs-12">
        <span class="input-group">
          <span class="input-group-addon">Pledge $</span>
          <input class="numeric form-control" id="pledge-amount" type="text" disabled="disabled"
                    value="<?= $pledged; ?>">
        </span>
      </li>
      <li class="form-group has-success col-lg-2 col-sm-6 col-md-5ths col-xs-12">
        <span class="input-group">
          <span class="input-group-addon">Collected $</span>
          <input class="numeric form-control" id="collected-amount" type="text" disabled="disabled"
                value="<?= $history['collectedPennies']; ?>">
        </span>
      </li>
      <li class="form-group has-success col-sm-6 col-lg-2 col-md-5ths col-xs-12">
        <span class="input-group">
          <span class="input-group-addon">Scheduled $</span>
          <input class="numeric form-control" id="scheduled-amount" type="text" disabled="disabled"
                value="<?= $scheduled; ?>">
        </span>
      </li>
      <li class="form-group has-warning col-lg-2 col-sm-6 col-md-5ths col-xs-12">
        <span class="input-group">
          <span class="input-group-addon">Outstanding $</span>
          <input class="numeric  form-control" id="outstanding-amount" type="text"
                value="<?= $outstanding ?>" disabled="disabled">
        </span>
      </li>
    </ul>
  </div>
</div>
<hr>
<? if($history['collectedPennies'] / 100 > $pledged): ?>
  <div class="alert">
    Collected an amount greater than pledged.
  </div>
<? endif; ?>
<?php
if ($payment) {
  if (!empty($pledges)) { ?>
  <legend>Pledges Linked To This Payment</legend>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Pledge ID</th>
          <th>Pledge Amount</th>
          <th>Status</th>
          <th>Sponsor Name</th>
          <th>Completed On</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?
        foreach ($pledges as $pledge) {
          $pledge_deleted      = Pledge_model::status_deleted($pledge->status);
          $pledge_paid         = Pledge_model::status_paid($pledge->status);
          $pledge_paid_pending = Pledge_model::status_paid_pending($pledge->status);
          $pledge_pending      = Pledge_model::status_pending($pledge->status);
          echo '<tr>';
          echo "<td>$pledge->id</td>";
          echo "<td>$pledge->amount</td>";
          echo "<td>$pledge->status</td>";
          echo "<td>$pledge->first_name $pledge->last_name</td>";
          echo "<td>$pledge->ts_completed</td>";
          echo "<td>"; ?>
          <?php if ((!$pledge_paid_pending) || ($is_sysadmin and $pledge_paid_pending)) { ?>
        <a href="<?php echo site_url('admin/pledges/edit/'.$pledge->id); ?>"
          class="btn btn-xs btn-warning">Edit
        </a>
          <?php } ?>

          <?php if ((!$pledge_deleted && !$pledge_paid and !$pledge_paid_pending) || ($is_sysadmin && $pledge_paid_pending)) { ?>
        <a class="btn btn-xs btn-danger detail" data-itemtype="pledge" data-action="delete-entity" href="<?php echo site_url("admin/pledges/delete/".$pledge->id)?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
          <?php } ?>

          <?php if ($pledge_pending) { ?>
        <a class="btn btn-xs btn-success" data-action="confirm_pledge" href="<?php echo site_url("admin/pledges/confirm/".$pledge->id)?>"><i class="glyphicon glyphicon-ok-sign"></i> Confirm</a>
          <?php } ?>

          <?php
          echo "</td>";
          echo '</tr>';
        } ?>
      </tbody>
    </table>
    <?php
  }
} ?>
<?
if($history['payments']):
  ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th class='numeric'>Today's Envelope (<?= $envelope_date; ?>)</th>
        <th>Date / Time</th>
        <th class='numeric'>Payment</th>
        <th class='numeric'>Collected</th>
        <th>Type</th>
        <th>Check #</th>
        <th>Name</th>
        <th>Entered By</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?
      foreach ($history['payments'] as $row) {
        echo "<tr", $row->envelope ? ' class="info"' : '', ">
              <td class='numeric'>{$row->envelope}</td>
              <td>{$row->created_at}</td>
              <td class='numeric'>{$row->amount}</td>
              <td class='numeric'>{$row->split_amount}</td>
              <td>{$row->type}</td>
              <td>{$row->check_number}</td>
              <td>{$row->payer_name}</td>
              <td>{$row->entered_by_name}</td>
              <td class='actions'>";
        if ($row->type != 'CC' || is_sys_admin()) {
          echo "<a class='btn btn-warning btn-xs' href='$edit_program_student_url/{$row->id}'>
                <i class='glyphicon glyphicon-pencil'></i> Edit
                </a>
                <a class='btn btn-danger btn-xs delete-payment' href='#delete-payment-{$row->id}'>
                <i class='glyphicon glyphicon-trash'></i> Delete
                </a>";
        }

        echo "</td></tr>";
      } ?>
    </tbody>
  </table>
  <?
else:
  ?>
  <div class="alert">
    No payments have yet been assigned to this student.
  </div>
  <?
endif; ?>
<? $type = $this->input->post('type') ?: $payment->type; ?>
<hr>
<fieldset>
  <legend id="paymentDetails">Payment details</legend>
  <div class="row col-md-12 admin-payments-page">
    <ul class="list-inline input-groups-list">
      <li class="m-bot-10 input-group col-md-3 <?= form_error('amount') ? 'error' : ''; ?>">
        <div class="payments-table-row">
          <label class="input-group-addon" for="amount">Payment $</label>
          <input class="numeric form-control" name="amount" id="amount" type="text" maxlength="11"
                 value="<?= $this->input->post('amount') ?: $payment->amount; ?>">
        </div>
        <div class="payments-table-row">
          <span class="help-inline"><?= form_error('amount'); ?></span>
        </div>
      </li>
      <li class="m-bot-10 input-group col-md-3 <?= form_error('type') ? 'error' : ''; ?>">
        <div class="payments-table-row">
          <label class="input-group-addon" for="payment_type">Payment Type</label>
          <?= populated_dropdown(
            'payment_type',
            [
             'name' => 'type',
             'id' => 'type'
            ],
            '',
            $this->input->post('type') ?: $payment->type
          ); ?>
        </div>
        <div class="payments-table-row">
           <span class="help-inline"><?= form_error('type'); ?></span>
        </div>
      </li>
      <li class="m-bot-10 input-group col-md-3 <?= form_error('check_number') ? 'error' : ''; ?>">
      <div class="payments-table-row">
          <label class="input-group-addon" for="check_number">Check #</label>
          <input class="form-control" name="check_number" id="check_number" type="text" maxlength="20"
                 value="<?= $this->input->post('check_number') ?: $payment->check_number; ?>">
        </div>
        <div class="payments-table-row">
          <span class="help-inline"><?= form_error('check_number'); ?></span>
        </div>
      </li>
      <li class="m-bot-10 input-group col-md-3 <?= form_error('entered_by_name') ? 'error' : ''; ?>">
        <div class="payments-table-row">
          <label class="input-group-addon" for="entered_by_name">Entered By</label>
          <input class="form-control" name="entered_by_name" id="entered_by_name" type="text" maxlength="20"
                 value="<?= $logged_in_user_name; ?>">
        </div>
        <div class="payments-table-row">
          <span class="help-inline"><?= form_error('entered_by_name'); ?></span>
        </div>
      </li>
      <li class="m-bot-10 input-group col-md-3">
        <label class="input-group-addon" for="note">Note</label>
        <input class="form-control" name="note" id="note" type="text" maxlength="400"
               value="<?= $this->input->post('note') ?: $payment->note; ?>">
      </li>
    </ul>
  </div>
</fieldset>
<hr>
<fieldset>
  <legend>Payer details</legend>
  <div class="row">
    <div class="col-md-12">
      <ul class="list-inline">
        <li class="m-bot-10 input-group col-md-3 <?= form_error('first_name') ? 'error' : ''; ?>">
          <div class="payments-table-row">
            <label class="input-group-addon" for="first_name" class="control-label">First Name</label>
            <input class="form-control" name="first_name" id="first_name" type="text" maxlength="50"
                   value="<?= $this->input->post('first_name') ?: $payment->first_name; ?>">
          </div>
          <div class="payments-table-row">
            <span class="help-inline"><?= form_error('first_name'); ?></span>
          </div>
        </li>
        <li class="m-bot-10 input-group col-md-3 <?= form_error('last_name') ? 'error' : ''; ?>">
          <div class="payments-table-row">
            <label class="input-group-addon" for="last_name" class="control-label">Last Name</label>
            <input class="form-control" name="last_name" id="last_name" type="text" maxlength="50"
                  value="<?= $this->input->post('last_name') ?: $payment->last_name; ?>">
          </div>
          <div class="payments-table-row">
            <span class="help-inline"><?= form_error('last_name'); ?></span>
          </div>
        </li>
        <? if($program->collection_type == 'donor_base'): ?>
          <li class="m-bot-10 input-group col-md-2 <?= form_error('phone') ? 'error' : ''; ?>">
            <div class="payments-table-row">
              <label class="input-group-addon" for="phone" class="control-label">Phone</label>
              <input class="form-control" name="phone" id="phone" type="text" maxlength="20"
                    value="<?= $this->input->post('phone') ?: $payment->phone; ?>">
            </div>
            <div class="payments-table-row">
              <span class="help-inline"><?= form_error('phone'); ?></span>
            </div>
          </li>
        <? endif; ?>
        <? if($program->collection_type == 'donor_base'): ?>
          <li class="m-bot-10 input-group col-md-3 <?= form_error('address') ? 'error' : ''; ?>">
            <div class="payments-table-row">
              <label class="input-group-addon" for="address" class="control-label">Address</label>
              <input class="form-control" name="address" id="address" type="text" maxlength="200"
                    value="<?= $this->input->post('address') ?: $payment->address; ?>">
            </div>
            <div class="payments-table-row">
              <span class="help-inline"><?= form_error('address'); ?></span>
            </div>
          </li>
          <li class="m-bot-10 input-group col-md-3 <?= form_error('city') ? 'error' : ''; ?>">
            <div class="payments-table-row">
              <label class="input-group-addon" for="city" class="control-label">City</label>
              <input class="form-control" name="city" id="city" type="text" maxlength="50"
                    value="<?= $this->input->post('city') ?: $payment->city; ?>">
            </div>
            <div class="payments-table-row">
              <span class="help-inline"><?= form_error('city'); ?></span>
            </div>
          </li>
          <li class="m-bot-10 input-group col-md-3 <?= form_error('state') ? 'error' : ''; ?>">
            <label class="input-group-addon" for="state" class="control-label">State</label>
            <?= populated_dropdown(
              'state',
              ['name' => 'state', 'id' => 'state'],
              '',
              $this->input->post('state') ?: $payment->state
            ); ?>
            <span class="help-inline"><?= form_error('state'); ?></span>
          </li>
          <li class="m-bot-10 input-group col-md-3 <?= form_error('zip') ? 'error' : ''; ?>">
            <div class="payments-table-row">
              <label class="input-group-addon" for="zip" class="control-label">Zip</label>
              <input class="form-control" name="zip" id="zip" type="text" maxlength="10"
                    value="<?= $this->input->post('zip') ?: $payment->zip; ?>">
            </div>
            <div class="payments-table-row">
              <span class="help-inline"><?= form_error('zip'); ?></span>
            </div>
          </li>
        <? endif; ?>
        <li class="form-group col-md-12 <?= form_error('receipt') ? 'error' : ''; ?>">
          <div class="payments-table-row">
            <label for="receipt" class="control-label">Donor Requests Receipt</label>
            <input class="form-control" name="receipt" id="receipt" type="checkbox"
                  value="1" <?= ($payment->receipt) ? 'checked="checked"' : ''?>>
          </div>
          <div class="payments-table-row">
            <span class="help-inline"><?= form_error('receipt'); ?></span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</fieldset>
<hr>
<fieldset>
  <legend>Payment split</legend>
  <?
  $last_split = 1;
  foreach (range(1, $max_splits) as $idx) {
    if (array_key_exists($idx - 1, $splits)) {
      $last_split = $idx;
    }
  }

  foreach(range(1, $max_splits) as $idx):
    ?>
    <div class="row col-md-12" id="split-<?= $idx; ?>"
      <?= $idx <= $last_split ? '' : 'style="display:none"'; ?>>
      <ul class="list-inline">
        <li class="col-md-4 m-bot-10">
          <span class="input-group">
            <span class="input-group-addon"><?= $idx; ?></span>
            <input type="text" name="split_amount_<?= $idx; ?>"
                value="<?= empty($splits[$idx - 1]->split_amount) ? '' : $splits[$idx - 1]->split_amount; ?>"
                class="numeric split-amount form-control"
                id="split-amount-<?= $idx; ?>"
                placeholder="Partial amount" />
          </span>
        </li>
        <li class="form-group col-md-4">
          <input type="text" name="student_<?= $idx; ?>"
              value="<?= empty($splits[$idx - 1]->student_first_last) ? ( $idx == 1 ? "{$student->first_name} {$student->last_name}" : '' ) : $splits[$idx - 1]->student_first_last; ?>"
              class="student-search form-control" id="student-search-<?= $idx; ?>"
              placeholder="Student name search"<?= $idx === 1 ? ' disabled="disabled"' : ''; ?>/>
          <input type="hidden" class="form-control" name="student_id_<?= $idx; ?>"
              value="<?= empty($splits[$idx - 1]->student_id) ? ( $idx == 1 ? "{$student->id}" : '' ) : $splits[$idx - 1]->student_id; ?>"
              class="student-search-id" id="student-search-id-<?= $idx; ?>"/>
        </li>
      </ul>
    </div>
    <?
  endforeach;
  ?>
  <div class="row col-md-12">
    <ul class="list-inline">
      <li class="form-group col-md-4" id="total-group">
        <span class="input-group">
          <span class="input-group-addon">Total $</span>
          <input class="numeric form-control" id="split-total" type="text" disabled="disabled" value="">
        </span>
        <span class="help-block" id="total-help"></span>
      </li>
      <li class="form-group col-md-4">
        <div class="controls">
          <a href="#" id="add-split" class="btn btn-default">+ Add Split</a>
        </div>
      </li>
    </ul>
  </div>
  <? if($split_errors): ?>
    <div class="alert">
      <?= implode('<br>', $split_errors); ?>
    </div>
  <? endif; ?>
</fieldset>
<hr>
<div class="form-actions">
  <? if($payment): ?>
    <input  type="submit" value="Update Payment" class="btn btn-info btn-sm collection-submit-btn">
    <a href="<?= $edit_program_student_url; ?>" class="btn btn-default">Cancel</a>
    <?php if (is_sys_admin() || $type != "CC"): ?>
    <a class='btn btn-danger delete-payment' href='#delete-payment-<?php echo $payment->id ?>'>Delete Payment</a>
    <?php endif; ?>
  <? else: ?>
    <input type="submit" value="Enter Payment" id="payment-submit-btn" class="btn btn-info collection-submit-btn">
    <a href="<?= $choose_student_url; ?>" class="btn btn-default">Cancel</a>
  <? endif; ?>
</div>
<?
echo form_close();
// Setup delete payment forms for submission from JavaScript
foreach ($history['payments'] as $row) {
  echo form_open(
    $delete_program_student_url,
    ['id' => 'delete-payment-'.$row->id]
  ), form_hidden('payment_id', $row->id), form_close();
}
