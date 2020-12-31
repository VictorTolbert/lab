<div class="row">
  <div class="col-md-12" id="report-container">
    <?php foreach($grade_prize_report as $grade => $prizes): ?>
      <table class="table table-striped table-bordered">
        <tbody>
          <tr class="report-header">
            <td colspan=2>
              <div id="class-name">Grade: <?php echo $grade_dict[$grade] ?></div>
              <div id="booster-logo"></div>
              <?php if (empty($timestamped)): ?>
              <div id="report-title">Prize Delivery Report - <?php echo date('m/d/Y g:i:sA'); ?></div>
              <div id="report-legend">(P) means pending. We are awaiting pledge confirmation. Do not deliver.</div>
              <?php else: ?>
              <div id="report-title">Prize Delivery Report - <?php echo $timestamped ?></div>
              <?php endif; ?>
            </td>
          </tr>
          <tr>
            <td><strong>Name</strong></td>
            <td><strong>Prizes</strong></td>
          </tr>
          <?php
          foreach ($prizes as $student => $prize_data) {
            $sort_data = [];
            foreach ($prize_data as $key => $row) {
              $sort_data[$key] = $row['amount'];
            }

            array_multisort($sort_data, SORT_ASC, $prize_data);
            echo "<tr>";
              $student_detail = "{$prize_data[0]['student']} ({$prize_data[0]['classroom']},{$prize_data[0]['grade']})";
              echo "<td class='name'>" . $student_detail . "</td>";
              echo "<td>";
                echo "<ol class='report-prize-list'>";
                  $list_items = 0;
            foreach ($prize_data as $prize) {
              echo "<li><span class='empty-check'></span>" . $prize['name'] . "</li>";
            }

                echo "</ol>";
              echo "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
      <?php
      if (!empty($prize_report_totals[$grade]) && !isset($timestamped)) {
        ?>
      <div class="inventory_list">
        <h5>Inventory List</h5>
          <table class="table-striped">
            <thead>
              <tr>
                <th >Prize List</th>
                <th class="prize_count">Giveaway</th>
                <th class="prize_count">Pending</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $n_prizes   = count($prize_report_totals[$grade]);
              $col1_count = ceil($n_prizes / 2);
              $count      = 1;

              foreach ($prize_report_totals[$grade] as $totals) {
                ?>
                <tr>
                  <td class="prize_name"><?php echo $totals->prize_name ?></td>
                  <td class="prize_count"><?php echo $totals->giveaway ?></td>
                  <td class="prize_count"><?php echo $totals->pending ?></td>
                </tr>
                <?php

                //Create second column at the halfway point
                if ($count == $col1_count) {
                  ?>
                </tbody>
              </table>
              <table class="table-striped">
                <thead>
                  <tr>
                  <th>Prize List</th>
                  <th class="prize_count">Giveaway</th>
                  <th class="prize_count">Pending</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                }

                $count++;
              }
              ?>
            </tbody>
          </table>
          <div class="separator"></div>
      </div>
        <?php
      }
    endforeach; ?>
  </div>
</div>
