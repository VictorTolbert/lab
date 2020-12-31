<?php foreach($class_prize_report as $classroom => $prizes): ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr class="report-header">
        <th colspan=2>
          <div id="class-name">Class: <?php echo get_class_grade($classroom, $grade_dict) ?></div>
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
          echo "<td class='name'>" . $prize_data[0]['student'] . "</td>";
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
<?php endforeach; ?>
