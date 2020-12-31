<?php if(count($prizes_dropdown) > 0 && empty($error_message)): ?>
  <div class="form-set">
    <div class='alert alert-danger alert-error-prize-list-selection' style="display:none;">You must select a Prize List</div>
    <h3>Prize Badges</h3>

    <?php if(count($groups_dropdown) > 1): ?>
      <form class="form-inline">
        <?= form_label('Add prizes to which group?', 'group_id'); ?>
        <?= form_dropdown('group_id', $groups_dropdown, 0); ?>
      </form>
    <?php endif; ?>

    <form class="form-inline add-form" method="POST" action="/admin/prizes/add/<?= $program->id; ?>">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <?= form_label('Add Individual Prize', 'prize_id'); ?>
        <select name="prize_id" class="form-control">
          <?php foreach($prizes_dropdown as $prize): ?>
            <option value="<?= xss_filter($prize->id) ?>"><?= xss_filter($prize->name) ?></option>
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
        </div>

        <div>
          <select id="activity-rewards" name="activity_reward" class="form-control" style="margin-top: 10px;">
            <option value="">Activity Reward</option>
            <?php foreach($user_activities as $activity): ?>
              <option value="<?= xss_filter($activity->id) ?>"><?= xss_filter($activity->name) ?></option>
            <?php endforeach ?>
          </select>
          <br>
          <?= form_hidden('enable_badge', 1); ?>
          <?= form_error('enable_badge'); ?>
          <br>
          <div class="form-group" id="badge_description">
            <input type="text" placeholder="Provide a short description of the action required to earn this prize." name="badge_description" class="form-control" size="75" required>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Add Activity Reward</button>
        <br>
        <br>
    </form>
  </div>
<?php endif; ?>
