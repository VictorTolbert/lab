<?php
$groups = get_groups_for_program($program->id);
?>

<div id="deliver-confirm-modal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Ready to deliver prizes?</h3>
        <h5>Please view and print the current prize delivery report. This will also mark all the prizes as "Delivered". "Delivered" prizes will not show up on this report next time.</h5>

        <?php if(program_has_giveaway_prizes($program->id)): ?>
          <?php
          if (!empty($groups)) {
            ?>
            <div id="group-checkboxes" class="text-center mb-2">
              <div class="w-auto inline">
            <?php
            foreach ($groups as $group) {
              ?>
              <div class="text-left"><input type="checkbox" class="prize-report-group" name="prize_delivery_report_groups" value="<?= xss_filter($group->id); ?>" <?= count($groups) === 1 ? 'CHECKED="CHECKED"' : '' ?>> <?= xss_filter($group->name); ?></div>
              <?php
            }
            ?>  
              </div>
          </div>
            <?php
          }
          ?>
          <a href="#" target="_blank" class="btn btn-lg btn-info" id="view-pdf">
            View Report and Deliver Prizes
          </a>
          <h5 class="red">Don't forget to print!</h5>
        <?php else: ?>
          <h5 class="red">There are currently no prizes that need to be delivered.</h5>
        <?php endif; ?>
        <p></p>
        <h4>Need a previous prize delivery report?</h4>
        <h5>You can view and print previous delivery reports (or undo an accidental delivery).</h5>
        <a class="btn btn-lg btn-inverse"
          href="/admin/programs/delivered-prizes/<?php echo $program->id?>">
            View Prize Delivery History
        </a>
      </div>
      <div class="modal-footer">
       <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
      </div>
    </div>
  </div>
</div>

<div id="deliver-disabled-modal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Please reach out to your Boosterthon representative if you need access to the prize reports.</h5>
      </div>
      <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
      </div>
    </div>
  </div>
</div>
