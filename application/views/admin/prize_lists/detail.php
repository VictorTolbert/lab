<?php
$message = empty($message) ? $this->session->flashdata('message') : $message;
$error   = empty($error) ? $this->session->flashdata('error') : $error;
$header  = !empty($prizeList) ? "Manage Prize List: $prizeList->display_name" : "New Prize List";
?>
<h3 class="center"><?= xss_filter($header); ?></h3>
<?php if (count($prizes_dropdown) > 0 && empty($error_message)) { ?>
  <div class="form-set">
    <div class="row">
      <div class="col-md-8">
        <?php if (!empty($message)) { ?>
          <div class='alert alert-success'><?= xss_filter($message); ?></div>
        <?php } elseif (!empty($error)) {  ?>
          <div class='alert alert-danger'><?= xss_filter($error); ?></div>
        <?php } ?>
          <div class='alert alert-danger alert-form-error' style='display:none;'></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-12">
        <form class="form-inline well center list-add-form" method="POST" action="/admin/prizelist/update/<?= $prizeList->id ?>">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          <?= form_label('Prize List Name', 'prize_list_name'); ?>
          <input id = "prize_list_name" type="text" class="form-control" required value="<?= xss_filter($prizeList->display_name) ?>" name="prize_list_name" placeholder="Prize List Name" />
          <button class ="btn btn-primary prize-list-update-btn" type = "submit">Update</button>
        </form>
        <div class="panel panel-default">
          <div class="panel-heading"><strong>Add Prize to Prize List</strong></div>
          <div class="panel-body">
            <form class="form-inline add-form" method="POST" action="/admin/prizelist/add/<?= $prizeList->id?>">
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
              <select name="prize_id" class="form-control">
                <?php foreach ($prizes_dropdown as $prize) { ?>
                  <option value="<?= $prize->id ?>"><?= xss_filter($prize->name) ?></option>
                <?php } ?>
              </select>
              <input type="hidden" value="" name="prize_id" />
              <input type="hidden" value="<?= $prizeList->id?>" name="prize_list_id" />
              <input type="text" class="form-control" disabled="disabled" value="" name="name" placeholder="Name" />
              <input type="text" class="form-control" disabled="disabled" value="" name="inventory_code" placeholder="Inventory Code" />
              <a href="#prizePictureModal" role="button" class="btn btn-default" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i> Picture</a>
              <input type="text" class="form-control" value="" name="display_name" placeholder="Display Name" />
              <input type="text" class="form-control" value="" name="display_amount" placeholder="Display Amount (PPL)" />
              <input type="text" class="form-control" value="" name="actual_amount" placeholder="Actual Amount (Flat)" />
              <br />
              <br />
              <button type="submit" class="btn btn-primary pull-right" id="add-group-prize" class="add-group-prize"><i class="glyphicon glyphicon-plus"></i> Add Prize</button>
            </form>
          </div>
        </div>
        <div id="prizePictureModal" class="modal col-md-6 col-md-offset-3 fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel">Prize Image</h3>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Prize Name</th>
            <th>Inventory Code</th>
            <th>Picture</th>
            <th>Display Name</th>
            <th>Display Amount (PPL)</th>
            <th>Actual Amount (Flat)</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="added-prizes-list">
          <?php foreach ($bound_prizes as $prize) { ?>
            <tr class="pool-prize" data-id="<?= $prize->prize_id; ?>">
              <td class="lh-md"><?= xss_filter($prize->pname); ?></td>
              <td class="lh-md"><?= xss_filter($prize->inventory_code); ?></td>
              <td><a href="#prizePictureModal" data-img="<?= xss_filter($prize->picture); ?>" role="button" class="btn btn-default show-prize-img" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i> Picture</a></td>
              <td class="lh-md"><?= xss_filter($prize->display_name); ?></td>
              <td class="lh-md"><?= xss_filter($prize->display_amount); ?></td>
              <td class="lh-md"><?= xss_filter($prize->actual_amount); ?></td>
              <td><a class="btn btn-warning" href="/admin/prizelist/edit/prize/<?= $prize->id; ?>"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
              &nbsp;<a class="btn btn-danger" href="/admin/prizelist/delete/prize/<?= $prize->prize_list_id; ?>/<?= $prize->id; ?>"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
} else {
  if (!empty($error_message)) {
    echo '<p>PrizeList must have at least one group in order to manage prizes.</p>';
  } else {
    echo '<p>PrizeList must have at least one prize in order to manage prizes.</p>';
  }
}
?>
