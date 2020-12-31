<?php
$message = empty($message) ? $this->session->flashdata('message') : $message;
$error   = empty($error) ? $this->session->flashdata('error') : $error;
?>
<div class="row">
<?php if (!empty($message)) { ?>
  <div class='alert alert-success'><?=$message;?> </div>
<?php } elseif (!empty($error)) {  ?>
  <div class='alert alert-danger'><?=$error;?></div>
<?php } ?>
  <div class='alert alert-danger alert-form-error' style='display:none;'></div>
</div>
<div class="row edit-prize">
  <div class="col-md-12">
    <h2><a href="/admin/prizelist/edit/<?php echo $prize->prize_list_id?>">Prize List</a> &gt; Edit &gt; Prize</h2>
    <form action="/admin/prizelist/edit/prize/<?php echo $prize->id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <input type="hidden" name="id" value="<?php echo $prize->id?>">
      <fieldset>
        <label for="display_name">Display Name</label><input type="text" id="display_name" name="display_name" value="<?php echo $prize->display_name?>">
        <label for="display_amount">Display Amount (PPL)</label><input id="display_amount" type="text" name="display_amount" value="<?php echo $prize->display_amount?>">
        <label for="actual_amount">Actual Amount (Flat)</label><input id="actual_amount" type="text" name="actual_amount" value="<?php echo $prize->actual_amount?>">
        <div class="form-actions">
          <input type="submit"  class="btn btn-info btn-edit-prize-submit ">
        </div>
      </fieldset>
    </form>
  </div>
</div>
