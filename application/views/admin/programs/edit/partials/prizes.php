<?php
if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif (isset($error_message) && ! empty($error_message)) {
  echo "<div class='alert alert-danger'>{$error_message}</div>";
} elseif ($this->session->flashdata('prize_message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('prize_message')}</div>";
} elseif ($this->session->flashdata('prize_error_message')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('prize_error_message')}</div>";
} elseif ($this->session->flashdata('prize_message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('prize_message')}</div>";
}

  echo $this->session->flashdata('prize_success');
?>
<div class="form-set">
  <div class='alert alert-danger alert-error-prize-list-selection' style="display:none;">You must select a Prize List</div>
  <h3>Add Prizes</h3>
  <?php if(count($groups_dropdown) > 1): ?>
    <form class="form-inline">
      <?= form_label('Add prizes to which group?', 'group_id'); ?>
      <?= form_dropdown('group_id', $groups_dropdown, 0); ?>
    </form>
  <?php endif; ?>
  <?php if(count($prizes_dropdown) > 0 && empty($error_message)): ?>
    <div class="row">
      <?php
        $message = empty($message) ? $this->session->flashdata('message') : $message;
        $error   = empty($error) ? $this->session->flashdata('error') : $error;
      if (!empty($message)) {
        echo "<div class='alert alert-success'>".xss_filter($message)."</div>";
      } elseif (!empty($error)) {
        echo "<div class='alert alert-danger'>".xss_filter($error)."</div>";
      }
      ?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form class="form-inline list-add-form" method="POST" action="/admin/prizes/add/prizelist/<?= $program->id; ?>">
          <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          <?= form_label('Add Prize list', 'prize_list_id'); ?>
          <?= form_dropdown('prize_list_id', $prizes_list_dropdown, 0, 'required'); ?>
          <input type="hidden" name="group_id" value="0">
          <button class="btn btn-default disabled" type="submit" disabled>Add Prize List</button>
        </form>
        <form class="form-inline add-form" method="POST" action="/admin/prizes/add/<?= $program->id; ?>">
          <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          <?= form_label('Add Individual Prize', 'prize_id'); ?>
          <select name="prize_id" class="form-control">
            <?php foreach($prizes_dropdown as $prize): ?>
              <option value="<?= $prize->id ?>"><?= xss_filter($prize->name) ?></option>
            <?php endforeach ?>
          </select>
          <br/>
          <?= form_hidden('redirect_back', current_url()); ?>
          <input type="hidden" value="" name="prize_id" />
          <input type="hidden" value="<?= $program->id; ?>" name="program_id" />
          <input type="hidden" value="<?= xss_filter($group_id); ?>" name="group_id" />
          <div class="prize-add-fields">
            <input type="text" class="form-control" disabled="disabled" value="" name="name" placeholder="Name" />
            <input type="text" class="form-control" disabled="disabled" value="" name="inventory_code" placeholder="Inventory Code" />
            <a href="#prizePictureModal" role="button" class="btn btn-default show-prize-img" data-toggle="modal">Picture</a>
            <input type="text" class="form-control" value="" name="display_name" placeholder="Display Name" />
            <input type="text" class="form-control reward" value="" name="display_amount" placeholder="Display Amount (PPL)" />
            <input type="text" class="form-control reward" value="" name="actual_amount" placeholder="Actual Amount (Flat)" />
            <input type="text" class="form-control reward" value="" name="quantity" placeholder="Number of Pledges" />
            <span class="reward">
              <?= form_dropdown('period_ordinal', $periods_dropdown, 0, 'id="period-select"'); ?>
            </span>
          </div>

          <br>
          <button type="submit" class="btn btn-default">Add Prize</button>
          <br><br>
      </form>
      <div id="prizePictureModal" class="modal fade col-md-6 col-md-offset-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
    <?php
        $this->load->view('admin/programs/edit/partials/activity_reward');
    ?>
<div class="row">
  <div class="col-md-12">
    <table id="edit-prizes-table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th class="actions">Actions</th>
          <th>Group</th>
          <th>Prize Name</th>
          <th>Inventory Code</th>
          <th>Picture</th>
          <th>Display Name</th>
          <th>Display Amount (PPL)</th>
          <th>Actual Amount (Flat)</th>
          <th>Number of Pledges</th>
          <th>Pledge Period</th>
        </tr>
      </thead>
      <tbody id="added-prizes-list">
      <?php
      foreach($bound_prizes as $prize):
        echo "<tr class='pool-prize' data-id='$prize->prize_id'>";
        echo "<td><a class='btn btn-sm btn-warning' href='/admin/prizes/edit/program/{$program->id}/{$prize->prize_id}'><i class='glyphicon glyphicon-pencil'></i> Edit</a> ";
        echo "<a class='btn btn-sm btn-danger' href='/admin/prizes/delete/program/{$program->id}/{$prize->prize_id}'><i class='glyphicon glyphicon-trash'></i> Delete</a> </td>";
        echo "<td>{$prize->gname}</td>";
        echo "<td>{$prize->pname}</td>";
        echo "<td>{$prize->inventory_code}</td>";
        echo "<td><a href='#prizePictureModal' data-img='{$prize->picture}' role='button' class='btn btn-default show-prize-img' data-toggle='modal'>Picture</a></td>";
        echo "<td>{$prize->display_name}</td>";
        $display_amount = ($prize->quantity) ? 'N/A' : $prize->display_amount;
        echo "<td>{$display_amount}</td>";
        $actual_amount = ($prize->quantity) ? 'N/A' : $prize->actual_amount;
        echo "<td>{$actual_amount}</td>";
        $quantity = ($prize->quantity) ? $prize->quantity : 'N/A';
        echo "<td>{$quantity}</td>";
        $period = intval($prize->pledge_period_ordinal) > 0 ? $prize->pledge_period_ordinal : "None";
        echo "<td>" . $period . "</td>";
        echo "</tr>";
      endforeach;
      ?>
      </tbody>
    </table>
    </div>
  </div>
    <?php
  else:
    if (!empty($error_message)) {
      echo '<p>Program must have at least one group in order to manage prizes.</p>';
    } else {
      echo '<p>Program must have at least one prize in order to manage prizes.</p>';
    }
  endif;
  ?>
