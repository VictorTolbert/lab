<div class="row">
  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
    <h2 class="center">Prizes > Edit</h2>
    <?php
    if ($this->session->flashdata('message')) {
      echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
    }

    if ($this->session->flashdata('error')) {
      echo "<div class='alert alert-danger'>{$this->session->flashdata('error')}</div>";
    }

    if ($this->session->flashdata('return_url')) {
      echo "<a href='{$this->session->flashdata('return_url')}'>Return to Prize Manager</a>";
    }

    echo form_open_multipart('/admin/prizes/bound/update');
    echo form_hidden('id', $prize->pbid);
    echo form_hidden('prize_id', $prize->prize_id);
    echo form_hidden('activity_reward', $prize->activity_reward);
    echo form_hidden('group_id', $group_id);
    echo form_hidden('program_id', $program_id);
    ?>
    <fieldset>
      <div class="form-group">
        <label for="display_name">Display Name</label>
        <input type="text" name="display_name" value="<?= $prize->display_name; ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="display_amount">Display Amount (PPL)</label>
        <input type="text" name="display_amount" value="<?= $prize->display_amount; ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="actual_amount">Actual Amount (Flat)</label>
        <input type="text" name="actual_amount" value="<?= $prize->actual_amount; ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" value="<?= $prize->quantity; ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="pledge_period">Pledge Period</label>
        <?= form_dropdown('period_ordinal', $periods_dropdown, $prize->pledge_period_ordinal ?: 0); ?>
      </div>
      <input type="submit" name="update" value="Update" class="btn btn-info">
    </fieldset>
  </div>
</div>
