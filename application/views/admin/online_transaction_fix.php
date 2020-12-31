<h3 class="center">Fix Online Transactions</h3>
<?php
if (!empty($message)) {
  echo "<div class='alert'>{$message}</div>";
}

if (!empty($payments_updated)) {
  echo '<div class="alert">';
  echo 'The following transactions were created/updated:<br/>';
  echo '<ol>';
  foreach ($payments_updated as $payment_updated) {
    echo '<li>Order: ' . $payment_updated['order_attempted'] . ' Status: ' . $payment_updated['status'] . '</li>';
  }

    echo '</ol>';
    echo '</div>';
}
?>
<?php
    echo form_open_multipart('online_transactions/generate', [ 'class' => 'well' ]);
    echo '<p>Download Online Payment Records for a Date Range (leave second Date blank to perform same day)</p>';
    echo bootstrap_field_val('text', 'start_date', 'Start Date', null, form_error('start_date'), 'online-payment-record-datepicker');
    echo bootstrap_field_val('text', 'end_date', 'End Date', null, null, 'online-payment-record-datepicker');

    echo '<div class="form-actions">';
    echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Submit' ]);
    echo '</div>';

    echo form_close();
    echo form_open_multipart('online_transactions/fix', [ 'class' => 'well' ]);
?>
<p>Upload a file containing transaction order IDs to perform fixes.</p>
<label class="btn btn-default btn-file">Online Transaction Order ID List
  <input type="file" name="userfile" style="display:none;"/>
</label>
<div>
  <?= $this->session->flashdata('upload_errors'); ?>
</div>
<?php
    echo '<div class="form-actions">';
    echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Submit' ]);
    echo '</div>';

    echo form_close();

    $transaction_count = 0;
if (!empty($confirm_fixes)) {
  foreach ($confirm_fixes as $fix) {
    if (!empty($fix->transaction)) {
      $transaction_count++;
      echo '<h3>' . $transaction_count . '.</h3>';
      echo '<table class="table table-bordered table-condensed">';
        echo '<thead>';
          echo '<tr>';
            echo '<th>Order ID</th>';
            echo '<th>Order Time</th>';
            echo '<th>Status</th>';
            echo '<th>Terminal</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Amount</th>';
          echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
          echo '<tr>';
            echo '<td>' . $fix->transaction->order_id . '</td>';
            echo '<td>' . $fix->transaction->order_time . '</td>';
            echo '<td>' . $fix->transaction->status . '</td>';
            echo '<td>' . $fix->transaction->terminal . '</td>';
            echo '<td>' . $fix->transaction->first_name . '</td>';
            echo '<td>' . $fix->transaction->last_name . '</td>';
            echo '<td>' . $fix->transaction->amount . '</td>';
          echo '</tr>';
        echo '</tbody>';
      echo '</table>';

      echo '<table class="table table-striped table-bordered">';
        echo '<thead>';
          echo '<tr>';
            echo '<th>Pledge ID</th>';
            echo '<th>Program ID</th>';
            echo '<th>Amount</th>';
          echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
      foreach ($fix->pledges as $pledge) {
        echo '<tr>';
        echo '<td>' . $pledge->id . '</td>';
        echo '<td>' . $pledge->program_id . '</td>';
        echo '<td>' . $pledge->amount . '</td>';
        echo '</tr>';
      }

        echo '</tbody>';
      echo '</table>';
    } else {
      echo '<h3>No transaction record found for ID: ' . $fix->requested_order_id . '.</h3>';
    }
  }
}
?>
