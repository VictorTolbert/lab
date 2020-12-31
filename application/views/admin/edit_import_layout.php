
          <div class="row">
            <div class="col-md-12">

              <h2>Populate Group > Verify Data</h2>

              <?php

              if (! empty($message)) {
                echo "<div class='alert alert-warning'>{$message}</div>";
              }

              if($import_data):
                echo form_open('groups/preview_import/' . $import_id);
                echo form_hidden('redirect_back', $redirect_back);
                ?>

              <table class="table table-condensed table-hover">
              <thead>
              <tr class="info">
                <?php
                $header  = array_shift($import_data);
                $formats = array_flip(array_map('strtolower', $format_dropdown));
                // Take at most 8 columns of header
                foreach (array_slice($header, 0, 8) as $col_number => $col_name) {
                  // Match predefined aliases. 50743685
                  $col_name = strtolower(trim($col_name));
                  if (isset($field_aliases[$col_name])) {
                    $col_name = $field_aliases[$col_name];
                  }

                  if (isset($formats[$col_name])) {
                    // If a column heading matches one of the known format labels,
                    // select it automatically.
                    $matched_format = $formats[$col_name];
                  } else {
                    $matched_format = 0;
                  }

                  echo '<td>
                                      <h4>', ucwords($col_name), '</h4>',
                          form_dropdown(
                            'column_format_'.$col_number,
                            $format_dropdown,
                            $matched_format
                          ),
                     '</td>';
                }
                ?>
              </tr>
              </thead>
            <tbody>

                <?php
                // Show up to three sample rows
                $sample = array_slice($import_data, 0, 3);
                foreach ($sample as $row) {
                  echo '<tr>';
                  foreach ($row as $col) {
                    echo "<td>$col</td>";
                  }

                  echo '</tr>';
                }
                ?>
            </tbody>
              </table>
              <p>(Only the first <?php echo count($sample); ?> rows of the file are shown.)</p>

                <?php
                echo form_submit(
                  [ 'class' => 'btn btn-primary',
                                       'value' => 'Preview Import' ]
                );
                echo form_close();
              endif;
              ?>
          </div>
      </div>
