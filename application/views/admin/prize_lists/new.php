<?php
$message = empty($message) ? $this->session->flashdata('message') : $message;
$error   = empty($error) ? $this->session->flashdata('error') : $error;
?>
<h3 class="center">New Prize List</h3>
<div class="row">
<?php if (!empty($message)) { ?>
  <div class='alert alert-success'><?= xss_filter($message);?> </div>
<?php } elseif (!empty($error)) {  ?>
  <div class='alert alert-danger'><?= xss_filter($error);?></div>
<?php } ?>
</div>

<div class="row">
  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
    <form method="POST" action="/admin/prizelist/new" class="add-form">
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <fieldset>
        <?= form_label('Prize List Name', 'prize_list_name'); ?>
        <input id = "prize_list_name" type="text" class="form-control" required value="" name="display_name" placeholder="" /><br>
        <br/>
        <button class ="btn btn-info" type="submit">Submit</button>
      </fieldset>
    </form>
  </div>
</div>
