<div class="row">
  <div class="col-md-12" id="report-container">
    <table class="table table-striped table-bordered report-compact">
      <thead>
        <tr class="report-header report-header-compact">
          <th colspan="4">
            <img src="<?= asset_url('/images/boosterthon_star_mobile.png') ?>" style="width: 75px; display: block; margin: 0 auto;" alt="">
            <div id="report-title">
              <?= $program->name . ' Merchant Deposits ' . date('m/d/Y g:i:sA') ?>
            </div>
          </th>
        </tr>
        <tr>
          <th width="25%">Disbursement Date</th>
          <th width="25%">Paid Pledges*</th>
          <th width="25%">Organization Fees Withheld**</th>
          <th width="25%">Deposited</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($transactions as $transaction): ?>
          <tr>
            <td><?= $transaction['disbursement_date_formatted']; ?></td>
            <td>$<?= number_format($transaction['pledged_amount'], 2, '.', ','); ?></td>
            <td>$<?= number_format($transaction['pledged_amount'] - $transaction['merchant_amount'], 2, '.', ',') ?></td>
            <td>$<?= number_format($transaction['merchant_amount'], 2, '.', ','); ?></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td></td>
          <td><strong>Invoice Amount</strong></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><strong>Total:</strong></td>
          <td>$<?= number_format($pledged_total, 2, '.', ','); ?></td>
          <td>$<?= number_format($pledged_total - $deposit_total, 2, '.', ','); ?></td>
          <td>$<?= number_format($deposit_total, 2, '.', ','); ?></td>
        </tr>
      </tbody>
    </table>
    <div class="text-right">
      <p><strong>Invoice Amount: $<?= number_format($pledged_total, 2, '.', ','); ?></strong></p>
    </div>
  </div>
</div>
<? if ($optional_sponsor_fee != 0): ?>
<div class="row">
  <div class="col-md-12">
    <div><p>*Paid Pledges reflect the total amount of pledges paid by sponsors in each batch deposit.</p></div>
    <div><p>**These fees were paid by the Organization due to the sponsor choosing not to cover the fee. The fees were withheld from your deposit: $<?= number_format($pledged_total - $deposit_total, 2, '.', ',') ?>.</p></div>
    <div class="pad-bottom"><p>Number of sponsors who opted out of convenience fee: <?= $num_sponsors_opt_out ?></p></div>
  </div>
</div>
<? endif; ?>
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
          <td>$<?= number_format($refund['amount'], 2, '.', ','); ?></td>
        </tr>
        <? endforeach; ?>
        <tr>
          <td><strong>*Refund After Disbursement:</strong></td>
          <td>$<?= number_format($refunds['total'], 2, '.', ','); ?></td>
        </tr>
      </tbody>
    </table>
    <p class="report-refunds-explanation">*These funds have been refunded from the Booster account because these transactions have already been disbursed into your bank account. You will be invoiced for the amount displayed above.</p>
  </div>
</div>
<? endif; ?>
