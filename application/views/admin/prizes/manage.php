<div class="row form-set">
  <div class="col-md-12">
    <h3 class="col-md-12"><?php echo $header ?></h3>
    <?php if (count($groups_dropdown) > 1): ?>
      <form class="form-inline">
        <?php echo form_label('Manage Group Prize Pool', 'group_id'); ?>
        <?php echo form_dropdown('group_id', $groups_dropdown, 0); ?>
      </form>
    <?php endif; ?>
    <?php if(count($prizes_dropdown) > 0): ?>
      <div class="row">
        <?php
          $message = empty($message) ? $this->session->flashdata('message') : $message;
          $error   = empty($error) ? $this->session->flashdata('error') : $error;
        if (!empty($message)) {
          echo "<div class='alert alert-success'>{$message}</div>";
        } elseif (!empty($error)) {
          echo "<div class='alert alert-danger'>{$error}</div>";
        }
        ?>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline add-form" method="POST" action="<?php echo current_url() ?>">
          <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <?php echo form_label('Add Prize to Pool', 'prize_id'); ?>
            <select id="prize-select" name="prize_id">
            <?php foreach($prizes_dropdown as $prize): ?>
              <option value="<?php echo $prize->id ?>"><?php echo $prize->name ?></option>
            <?php endforeach ?>
            </select>
            <input type="hidden" value="" id="prize_is_activity_reward" name="prize_is_activity_reward" />
            <br/>
            <?php echo form_hidden('redirect_back', current_url()); ?>
            <input type="hidden" value="" name="prize_id" />
            <input type="hidden" value="<?php echo $program_id; ?>" name="program_id" />
            <input type="hidden" value="<?php echo $group_id; ?>" name="group_id" />
            <span class="prize-add-fields">
              <input type="text" class="input-medium" disabled="disabled" value="" name="name" placeholder="Name" />
              <input type="text" class="input-medium" disabled="disabled" value="" name="inventory_code" placeholder="Inventory Code" />
              <a href="#prizePictureModal" role="button" class="btn btn-default" data-toggle="modal">Picture</a>
              <input type="text" class="input-medium" value="" name="display_name" placeholder="Display Name" />
              <input type="text" class="input-medium reward" value="" name="display_amount" placeholder="Display Amount (PPL)" />
              <input type="text" class="input-medium reward" value="" name="actual_amount" placeholder="Actual Amount (Flat)" />
              <span class="reward">
                <?php echo form_dropdown('period_ordinal', $periods_dropdown, 0, 'id="period-select"'); ?>
              </span>
              <?php
                $this->load->config('activity_rewards', true);
                $activity_rewards = $this->config('rewards', 'activity_rewards')
              ?>
              <select name="activity_reward" id="activity-rewards">
                <option value="">Activity Reward</option>
                <?php foreach($activity_rewards as $code => $reward): ?>
                  <option value="<?php echo $code ?>"><?php echo $reward ?></option>
                <?php endforeach ?>
              </select>
            </select>
              <button type="submit" class="btn btn-default" id="add-group-prize">Add Prize</button>
            </span>
          </form>
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
      <div class="row">
        <div class="col-md-11">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Group</th>
                <th>Prize Name</th>
                <th>Inventory Code</th>
                <th>Picture</th>
                <th>Display Name</th>
                <th>Display Amount (PPL)</th>
                <th>Actual Amount (Flat)</th>
                <th>Pledge Period</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="added-prizes-list">
            <?php
            foreach($bound_prizes as $prize):
              echo "<tr class='pool-prize' data-id='$prize->prize_id'>";
              echo "<td>{$prize->gname}</td>";
              echo "<td>{$prize->pname}</td>";
              echo "<td>{$prize->inventory_code}</td>";
              echo "<td><a href='#prizePictureModal' data-img='{$prize->picture}' role='button' class='btn btn-default show-prize-img' data-toggle='modal'>Picture</a></td>";
              echo "<td>{$prize->display_name}</td>";
              echo "<td>{$prize->display_amount}</td>";
              echo "<td>{$prize->actual_amount}</td>";
              $period = intval($prize->pledge_period_ordinal) > 0 ? $prize->pledge_period_ordinal : "None";
              echo "<td>" . $period . "</td>";
              echo "<td><a class='btn btn-xs btn-warning' href='{$current_url}/{$prize->prize_id}'><i class='glyphicon glyphicon-pencil'></i> Edit</a>";
              echo "<a class='btn btn-xs btn-danger' href='{$delete_url}{$prize->prize_id}'><i class='glyphicon glyphicon-trash'></i> Delete</a></td>";
              echo "</tr>";
            endforeach;
            ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php
    else:
      echo '<p>You must have at least one prize in order to add prizes.</p>';
    endif;
    ?>
  </div> <!-- group prizes -->
</div>

