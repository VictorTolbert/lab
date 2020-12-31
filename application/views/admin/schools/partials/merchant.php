<h3>School Merchant Settings</h3>
<? if (!empty($merchant_message)) { ?>
  <div class='alert alert-success'><?=$merchant_message?></div>
<? } ?>

<? if (!empty($merchant_warning)) { ?>
  <div class='alert alert-warning'><?=$merchant_warning?></div>
<? } ?>

<? if (!empty($merchant_error)) { ?>
  <div class='alert alert-danger'><?=$merchant_error?></div>
<? } ?>

<div id="braintree-edit">
  <? $this->load->view('admin/schools/partials/braintree_merchant_edit'); ?>
</div>
