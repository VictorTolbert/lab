<?php if (!empty($braintree_merchant->status)): ?>
  <div class="list-group">
    <div class="list-group-item">
      <h4 class="list-group-item-heading">Submission Status:
        <?php
          $status_label = $braintree_merchant->status == 'active' ? 'label-success' : 'label-danger';
          echo "<span class='label {$status_label}'>
          {$braintree_merchant->status}</span>";
        ?>
      </h4>
    </div>
    <?php if (!empty($braintree_merchant->approval_status)): ?>
      <div class="list-group-item">
        <h4 class="list-group-item-heading">Approval Status:
          <?php
            $approval_label = $braintree_merchant->approval_status == 'approved' ? 'label-success' : 'label-danger';
            echo "<span class='label {$approval_label}'>
            {$braintree_merchant->approval_status}</span>";
          ?>
        </h4>
        <?php if (!empty($braintree_merchant->error_message) ||
          !empty($braintree_merchant->errors)): ?>
          <div class="list-group-item-text">
            <strong>Reason:</strong>
              <?php echo ucfirst($braintree_merchant->error_message); ?>
          </div>
          <div class="list-group-item-text">
            <strong>Errors:</strong>
            <ul>
              <?php
              $bt_errors = explode(',', $braintree_merchant->errors);
              foreach($bt_errors as $bt_error):
                echo "<li>{$bt_error}</li>";
              endforeach;
              ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>
