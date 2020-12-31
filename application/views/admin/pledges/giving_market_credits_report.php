<div class="row">
  <div class="col-md-12" id="report-container">
    <div id="class-pledges-report" class="report-compact">
      <?
      foreach ($class_pledges_report as $class) {
        ?>
        <table class="giving-market-table">
          <tbody>
            <tr class="report-header-compact">
              <th colspan="3">
                <div id="report-title">Giving Market Credits - <?= date('m/d/Y g:i:sA'); ?></div>
                <div id="class-name"><?= $class->grade_name.': '.$class->name?></div>
                <div class="sub-row">
                  <div class="sub-row-desc">
                    This sheet lists all participants along with their credits.
                  </div>
                </div>
              </th>
            </tr>
            <? if (count($class->participants)) { ?>
              <tr>
            <? } ?>
            <? foreach ($class->participants as $index => $part) { ?>
                <td class="certificate">
                  <div class="flex-container">
                    <div class="part-info-container">
                      <div class="part-info">
                        <strong><?= $part->first_name . ' ' . $part->last_name; ?></strong>
                        <strong class="amount"><?= ((int)$part->total_amount) ? '$' . str_replace('.00', '', $part->total_amount) : '$0'; ?></strong>
                      </div>
                    </div>
                  </div>
                  <span class="certificate-date"><? echo date('m/d/Y'); ?></span>
                </td>
              <? if ($part === end($class->participants) && ($index % 3 == 2)) { ?>
              </tr>
              <? } elseif ($part === end($class->participants) && ($index % 3 == 1)) { ?>
                <td></td>
              </tr>
              <? } elseif ($part === end($class->participants) && ($index % 3) == 0) { ?>
                <td></td>
                <td></td>
              </tr>
              <? } elseif ($index % 3 == 2) { ?>
              </tr>
              <tr>
              <? } ?>
            <? } ?>
          </tbody>
        </table>
        <?
      }
      ?>
    </div>
  </div>
</div>
