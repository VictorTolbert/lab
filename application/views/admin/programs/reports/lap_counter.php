<div id="lap_report">
  <?php
  if (!empty($report['classes'])) {
    foreach ($report['classes'] as $class) {
      ?>
    <div class="lap_report_classroom">
      <?php
      if (!empty($class->participants)) {
        foreach ($class->participants as $page) {
          ?>
          <div id="lap_report_header">
          <div id="class-name"><?php echo $report['school_name'] ?><br /><?php echo $class->grade_name.': '.$class->name?></div>
          </div>
          <div class="lap_report_page">
          <table>
            <thead>
              <tr>
                <th rowspan=2 class="participant_name">Student Name</th>
                <th colspan=4 class="text-center"><?php echo xss_filter(ucwords($unit->name_plural)); ?> Completed</th>
                <th rowspan=2 class='text-center absent'>Did Not Participate</th>
              </tr>
              <tr>
                <th class="text-center" colspan=3>(Please Circle One)</th>
                <th class="text-center">Other</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $n_participants = count($page);
            $col1_count     = ceil($n_participants / 2);
            $count          = 1;

            // Render two columns, first column with equal (even total) or one more
            // row (odd total) than the second column per requirements.
            // WKHTMLTOPDF is incompatible with several layouts and CSS3 styles,
            // so tables still need to be used.
            foreach ($page as $participant) {
              ?>
              <tr>
                <td class="participant_name">
                  <?=trim($participant->first_name . ' ' . $participant->last_name);?>
                  <?= ($participant->user_group_name == 'teachers') ? ' = (T)' : ''?>
                </td>
                <td class="text-center">35+</td>
                <td class="text-center">34&nbsp;&nbsp;</td>
                <td class="text-center">33&nbsp;&nbsp;</td>
                <td class="participant_laps" style="width: 100px;"></td>
                <td class='text-center'><div class='checkbox-visual'></div>
              </tr>
              <?php
              $count++;
            }
            ?>
            </tbody>
            </table>
            </div>
            <?php
        } // End particpants loop
      } else {
        ?>
        <div class="lap_report_page">
          <p class="message">Sorry, there are no participants in this class.</p>
        </div>
        <?php
      }
      ?>
    </div>
      <?php
    }
  } else {
    ?>
    <div class="lap_report_page">
      <p class="message">Sorry, there are no classes in this program.</p>
    </div>
    <?php
  }
  ?>
</div>
