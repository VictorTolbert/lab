<div class="row">
  <div class="col-md-12" id="report-container">
    <div id="class-pledges-report">
      <?php
      foreach ($class_pledges_report as $class) {
        ?>
        <table class="table table-striped table-bordered report-compact" id="class-pledge-report">
          <thead>
            <tr class="report-header report-header-compact">
              <th colspan="15">
                <div id="report-title">Classroom Pledges Report - <?= date('m/d/Y g:i:sA'); ?></div>
                <div id="class-name"><?= $class->grade_name.': '.$class->name?></div>
                <div class="sub-row">
                  <div class="sub-row-desc">
                    This report lists all students in your class who have been registered on <?=get_program_domain($program->unit_id)?>
                  </div>
                </div>
                <div class="sub-row">
                  <div id="report-program-reg-code">Program Registration Code: <span><?= $program->registration_code ?></span></div>
                </div>
              </th>
            </tr>
            <tr>
              <th class="participant_name">Name</th>
              <th class="pledge_flat">Video</th>
              <th class="pledge_flat">Flat</th>
              <th class="pledge_ppl">PPU</th>
              <th class="num_pledges"># of Pledges</th>
              <th class="total_ppl">Total (PPU)</th>
              <th class="participant_laps"><span class="text-capitalize"><?=$unit_data->name_plural?><span> (Unit)</th>
              <th class="amt_pledged">Amount Pledged</th>
              <th class="amt_pledged">Amount Scheduled</th>
              <th class="amt_collected">Amount Collected</th>
              <th class="amt_outstanding">Amount Outstanding</th>
              <th class="pending_pledges">Pending Pledges (PPU)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $num_pledges       = 0;
            $total_ppl         = 0.00;
            $total_amt         = 0.00;
            $total_scheduled   = 0.00;
            $total_collected   = 0.00;
            $total_outstanding = 0.00;
            $total_pending     = 0.00;
            foreach ($class->participants as $part) {
              ?>
              <tr>
                <td>
                  <?= $part->user_group_id == User_group_model::TEACHERS ? '<strong>*</strong>' : ''; ?>
                  <?= $part->first_name . ' ' . $part->last_name; ?>
                </td>
                <td><?= $part->video_url ? 'Yes' : 'No'; ?></td>
                <td><?= ($part->flat_amount) ? '$'.number_format($part->flat_amount, 2) : ''?></td>
                <td><?= ($part->ppl_amount) ? '$'.number_format($part->ppl_amount, 2) : ''?></td>
                <td><?= $part->total_pledges?></td>
                <td><?= ($part->total_ppl) ? '$'.number_format($part->total_ppl, 2) : '' ?></td>
                <td><?= $part->laps?></td>
                <td><?= ((int)$part->total_amount) ? '$'.$part->total_amount : ''; ?></td>
                <td><?= ((int)$part->total_scheduled_amount) ? '$'.$part->total_scheduled_amount : ''; ?></td>
                <td><?= ($part->collected_amount) ? '$'.number_format($part->collected_amount, 2) : ''; ?></td>
                <td>
                  <?php
                  $temp_total_amt = bcsub(bcsub($part->total_amount, $part->collected_amount, 2), $part->total_scheduled_amount, 2);
                  echo ($temp_total_amt && $temp_total_amt > 0) ? '$'.$temp_total_amt : ''; ?>
                </td>
                <td><?= ((int)$part->ppl_pending_total) ? '$'.number_format($part->ppl_pending_total, 2) : '' ?></td>
              </tr>
              <?php
              $num_pledges      += $part->total_pledges;
              $total_ppl         = ($part->total_ppl) ? bcadd($total_ppl, $part->total_ppl, 2) : $total_ppl;
              $total_amt         = ($part->total_amount) ? bcadd($total_amt, $part->total_amount, 2) : $total_amt;
              $total_scheduled   = ($part->total_scheduled_amount) ? bcadd($total_scheduled, $part->total_scheduled_amount, 2) : $total_scheduled;
              $total_collected   = ($part->collected_amount) ? bcadd($total_collected, $part->collected_amount, 2) : $total_collected;
              $total_outstanding = ($temp_total_amt && $temp_total_amt > 0) ? bcadd($total_outstanding, $temp_total_amt, 2) : $total_outstanding;
              $total_pending     = ($part->ppl_pending_total) ? bcadd($total_pending, $part->ppl_pending_total, 2) : $total_pending;
            } ?>
            <tfoot class="totals">
              <tr>
                <th>Total</th>
                <th></th>
                <th></th>
                <th></th>
                <th><?= ($num_pledges) ? $num_pledges : '' ?></th>
                <th><?= ($total_ppl) ? '$'.number_format($total_ppl, 2) : ''?></th>
                <th></th>
                <th><?= ((int)$total_amt) ? '$'.number_format($total_amt, 2) : '' ?></th>
                <th><?= ((int)$total_scheduled) ? '$'.number_format($total_scheduled, 2) : '' ?></th>
                <th><?= ($total_collected) ? '$'.number_format($total_collected, 2) : ''?></th>
                <th><?= ($total_outstanding) ? '$'.number_format($total_outstanding, 2) : '' ?></th>
                <th><?= ($total_pending != 0) ? '$'.number_format($total_pending, 2) : ''?></th>
                </tr>
              </tr>
            </tfoot>
          </tbody>
        </table>
        <div id="class-pledge-o-meter">
          Pledge-o-Meter Total: <strong><?= ($total_ppl) ? number_format($total_ppl, 1) : '0'?></strong>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
