<?php
$message = empty($message) ? $this->session->flashdata('message') : $message;
$error   = empty($error) ? $this->session->flashdata('error') : $error;
?>

<div class="row">
  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <h2 class="center">Prize List</h2>
    <?php if (!empty($message)) { ?>
      <div class='alert alert-success'><?= $message; ?> </div>
    <?php } elseif (!empty($error)) {  ?>
      <div class='alert alert-danger'><?= $error; ?></div>
    <?php } ?>
    <? if (is_sys_admin()): ?>
      <a href ='/admin/prizelist/new'>Add Prize List</a>
    <? endif; ?>
    <table class="table table-striped table-bordered">
      <?php foreach ($prize_lists as $prize_list) { ?>
        <tr>
          <td class="lh-md"><?= $prize_list->display_name?></td>
          <? if (is_sys_admin()): ?>
            <td class = 'prize-list-item'>
              <a href ='/admin/prizelist/edit/<?= $prize_list->id; ?>' class='btn btn-warning'><i class="glyphicon glyphicon-pencil"></i>Edit</a>
              <a href ='/admin/prizelist/delete/<?= $prize_list->id; ?>' class='btn btn-danger'><i class="glyphicon glyphicon-trash"></i>Delete</a>
            </td>
          <? endif; ?>
        </tr>
      <?php } ?>
      <tr></tr>
    </table>
  </div>
</div>
