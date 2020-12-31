<div class="row">
              <h3>Pledges</h3>
              <div class="col-md-12"><!-- pledges for group -->

                      <div class="col-md-3">
                        <?php

                          echo '<a class="btn btn-danger" href="' . site_url("admin/pledges/delete/multiple") . '" id="delete-multiple"><i class="glyphicon glyphicon-trash"></i> Delete Selected</a> ';
                          echo '<a class="btn btn-success" href="' . site_url("admin/pledges/confirm/multiple") . '" id="confirm-multiple"><i class="glyphicon glyphicon-ok-sign"></i> Confirm Selected</a>';

                        ?>
                      </div>

                      <div class="col-md-3">
                        <?php

                              echo form_open('', [ 'id' => 'pledge_search', 'class' => 'form-search span3' ]);
                              echo '<div class="input-group">';
                              echo form_input([ 'name' => 'term', 'placeholder' => 'Search pledges', 'class' => 'search-query' ]);
                              echo '<button name="submit_search" class="btn btn-default" id="submit_search" type="submit">Search</button>';
                              echo '</div>';
                              echo form_close();
                        ?>
                      </div>

                      <div class="col-md-12">
                      <?php
                        echo form_open('/admin/programs/dashboard/' . $program->id, [ 'id' => 'filter_pledges', 'class' => 'span12' ]);
                        echo form_dropdown('status_id', $pledge_statuses, $selected_status_id, 'id="pledge_statuses"');
                        echo form_dropdown('substatus_id', $substatuses, $selected_substatus_id, 'id="filter_pledges_by_substatus"');
                        echo form_submit([ 'name' => 'submit_filter', 'class' => 'btn btn-info', 'value' => 'Filter Pledges' ]);
                        echo form_close();
                      ?>
                      </div>

                <?php

                  echo set_table($pledges, $table_header, true);

                ?>

              </div>

              <?php  echo $pagination; ?>
            </div><!-- pledges row -->