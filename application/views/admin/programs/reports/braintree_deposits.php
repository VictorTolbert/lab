<div class="row">
  <div class="col-md-12" id="report-container">
    <table class="table table-striped table-bordered report-compact">
      <thead>
        <tr class="report-header report-header-compact">
          <th colspan="<?php echo ($show_settlement) ? "3" : "2"?>">
            <div id="report-title">
              <?php echo $program->name . ' Merchant Deposits ' . date('m/d/Y g:i:sA') ?>
            </div>
            <?php if ($show_settlement) { ?>
            <div id="report-subtitle">
            NOTE: Use the Merchant Deposit Amount for invoicing when the sponsors pay the Sponsor Convenience Fee.
            Use the Sponsor Payment Amount when the school organization pays the School Processing Fee. The difference
            between these amounts is what Booster keeps to cover the processing cost of the online transactions.
            </div>
            <?php } ?>
          </th>
        </tr>
        <tr>
          <th width="34%">Disbursement Date</th>
          <th width="33%">Merchant Amount</th>
          <?php if ($show_settlement) { ?>
          <th width="33%">Sponsor Payment Amount</th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach($transactions as $transaction): ?>
          <tr>
            <td><?php echo $transaction['disbursement_date_formatted']; ?></td>
            <td><?php echo number_format($transaction['merchant_amount'], 2, '.', ','); ?></td>
            <?php if ($show_settlement) { ?>
            <td><?php echo number_format($transaction['settlement_amount'], 2, '.', ','); ?></td>
            <?php } ?>
          </tr>
        <?php endforeach; ?>
        <tr><td></td><td></td></tr>
        <tr>
          <td><strong>Total:</strong></td>
          <td><?php echo number_format($deposit_total, 2, '.', ','); ?></td>
          <?php if ($show_settlement) { ?>
          <td><?php echo number_format($settlement_total, 2, '.', ','); ?></td>
          <?php } ?>
        </tr>
        <tr>
          <td></td>
          <td><strong>Invoice amount when sponsors pay Sponsor Convenience Fee</strong></td>
          <?php if ($show_settlement) { ?>
          <td><strong>Invoice amount when school pays School Processing Fee</strong></td>
          <?php } ?>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<? if (!empty($refunds['transactions'])): ?>
<div class="row report-refunds">
  <div class="col-md-12">
    <table class="table table-striped table-bordered report-compact">
      <thead>
        <tr>
          <th>Refund Transaction ID</th>
          <th>Refund Amount</th>
        </tr>
      </thead>
      <tbody>
        <?
        foreach ($refunds['transactions'] as $refund):
          ?>
        <tr>
          <td><?= $refund['id'] ?></td>
          <td><?= number_format($refund['amount'], 2, '.', ','); ?></td>
        </tr>
        <? endforeach; ?>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>*Refund After Disbursement:</strong></td>
          <td><?= number_format($refunds['total'], 2, '.', ','); ?></td>
        </tr>
      </tbody>
    </table>
    <p class="report-refunds-explanation">*These funds have been refunded from the Booster account because these transactions have already been disbursed into your bank account. You will be invoiced for the amount displayed above.</p>
  </div>
</div>
<? endif; ?>
