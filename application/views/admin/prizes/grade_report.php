<div class="row">
  <div class="col-md-12" id="report-container">
    <?php foreach($grade_prize_report as $grade => $prizes): ?>
      <table class="table table-striped table-bordered">
        <tbody>
          <tr class="report-header">
            <td colspan=4>
              <div id="class-name">Grade: <?php echo $grade ?></div>
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
            <td><strong>Prize</strong></td>
            <td class="report_counts"><strong>#</strong></td>
            <td class="report_counts"><strong>(P)</strong></td>
            <td><strong>Students</strong></td>
          </tr>
          <?php
          foreach ($prizes as $prize => $student) {
            $student_list = implode(', ', $student);
            echo "<tr>";
              echo "<td class='name'>" . $prize . "</td>";
              echo "<td class='report_counts'>".get_prize_student_count($student)."</td>";
              echo "<td class='report_counts'>".count(preg_grep("/\(P\)/", $student))."</td>";
              echo "<td>";
                echo $student_list;
              echo "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    <?php endforeach; ?>
  </div>
</div>
