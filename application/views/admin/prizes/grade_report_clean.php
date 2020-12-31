<?php foreach($grade_prize_report as $grade => $prizes): ?>
  <table class="table table-striped table-bordered">
    <thead>
      <tr class="report-header">
        <th colspan=2>
          <div id="class-name">Grade: <?php echo $grade ?></div>
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
        <th>Prize</th>
        <th>Students</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($prizes as $prize => $student) {
        $student_list = implode(', ', $student);
        echo "<tr>";
          echo "<td class='name'>" . $prize . "</td>";
          echo "<td>";
            echo $student_list;
          echo "</td>";
        echo "</tr>";
      } ?>
    </tbody>
  </table>
<?php endforeach; ?>
