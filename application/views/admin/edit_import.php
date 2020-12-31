
          <div class="row">
            <div class="col-md-12">

              <h2>Populate Group > Verify Data</h2>

              <?php

              if (! empty($message)) {
                echo "<div class='alert alert-warning'>{$message}</div>";
              }

              if($dupe_teachers):
                echo form_open('groups/preview_import/' . $import_id);
                echo form_hidden('column_formats', serialize($column_formats));
                ?>
            <h3>Teacher name clashes</h3>

            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Teacher</th>
                        <th>Student Classes</th>
                        <th>How to resolve</th>
                        <th>Set Grade</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                foreach ($dupe_teachers as $key => $teacher) {
                  $policy_dropdown = form_dropdown(
                    'policy_'.$key,
                    ['merge' => 'Same teacher, but has classrooms in multiple grades',
                          'force' => 'Same teacher, but combine in a single class (specify grade)',
                          ''      => 'Different teachers with same name']
                  );
                  $grades_dropdown = form_dropdown('grade_'.$key, $grades, '');
                  echo "<tr class='error'>
                                          <td>{$teacher['name']}</td>
                                          <td>", implode(', ', $teacher['classes']), "</td>
                                          <td>$policy_dropdown</td>
                                          <td>$grades_dropdown</td>
                                      </tr>\n";
                }
                ?>
                    </tbody>
                    </table>
                <?php
                echo form_submit(
                  [ 'class' => 'btn btn-primary',
                                       'value' => 'Preview Again' ]
                );
                echo form_close();
              endif;

              if($imported_rows && !$dupe_teachers):
                echo form_open('groups/finish_import/' . $import_id);
                echo form_hidden('column_formats', serialize($column_formats));
                echo form_hidden('dupe_teacher_policy', serialize($dupe_teacher_policy));
                ?>
              <h3>Summary by Grade</h3>

              <table class="table table-condensed table-hover">
              <thead>
                  <tr class="info">
                      <th>Grade</th>
                      <th>Students</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                ksort($grade_counts, SORT_NUMERIC);
                foreach ($grade_counts as $grade => $count) {
                  echo "<tr>
                                    <td>", $grades[$grade], "</td>
                                    <td>$count</td>
                                </tr>\n";
                }
                ?>
                  <tr>
                      <th><strong>Total</strong></th>
                      <th><strong><?php echo count($imported_rows); ?></strong></th>
                  </tr>
              </tbody>
              </table>

                <?php
                echo form_submit(
                  [ 'class' => 'btn btn-primary',
                                       'value' => 'Complete Import' ]
                );
                echo form_close();

                ?>

              <h3>Students to be Imported</h3>

              <table class="table table-condensed table-striped table-hover">
              <thead>
                  <tr class="info">
                      <th>Grade</th>
                      <th>Teacher</th>
                      <th>Student</th>
                  </tr>
              </thead>
              <tbody>

                <?php
                foreach ($imported_rows as $fields) {
                  echo "<tr>
                          <td>{$grades[$fields['grade_id']]}</td>
                          <td>{$fields['teacher_last']}, {$fields['teacher_first']}</td>
                          <td>{$fields['student_last']}, {$fields['student_first']}</td>
                      </tr>\n";
                }
                ?>
              </tbody>
              </table>
                <?php
              endif;

              if($failed_rows):
                ?>
              <h3>Rows with errors</h3>

              <table class="table table-condensed table-hover">
              <thead>
                  <tr>
                  <td>#</td>
                  <td>Problem</td>
                  <?php
                  foreach ($header as $col) {
                      echo "<td>$col</td>";
                  }
                  ?>
                  </tr>
                  </thead>

                  <tbody>
                  <?php
                  foreach ($failed_rows as $row_num => $row) {
                      echo "<tr class='error'>
                                        <td>$row_num</td>
                                        <td>{$row['error']}</td>";
                    foreach ($row['row'] as $col) {
                      echo "<td>$col</td>";
                    }

                      echo "</tr>\n";

                     // If no rows were imported, something must be
                     // seriously wrong with the layout. Just report
                     // the first failed row.
                    if (!$imported_rows) {
                      break;
                    }
                  }
                  ?>
                  </tbody>
                  </table>
                <?php
              endif;
              ?>
          </div>
      </div>
