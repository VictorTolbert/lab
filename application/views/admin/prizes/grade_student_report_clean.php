<?php foreach($grade_prize_report as $grade => $prizes): ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr class="report-header">
        <th colspan=2>
          <div id="class-name">Grade: <?php echo $grade_dict[$grade] ?></div>
          <div id="booster-logo"></div>
          <?php if (empty($timestamped)): ?>
          <div id="report-title">Prize Delivery Report - <?php echo date('m/d/Y g:i:sA'); ?></div>
          <div id="report-legend">(P) means pending. We are awaiting pledge confirmation. Do not deliver.</div>
          <?php else: ?>
          <div id="report-title">Prize Delivery Report - <?php echo $timestamped ?></div>
          <?php endif; ?>
        </th>
      </tr>
      <tr>
        <th>Name</th>
        <th>Prizes</th>
      </tr>
    </thead>
    <tbody>
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
      } ?>
    </tbody>
  </table>
<?php endforeach; ?>
