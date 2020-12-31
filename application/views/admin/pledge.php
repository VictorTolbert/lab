<div class="row">
  <div class="col-md-12">
        <?php
        $heading = ( empty($pledge_type) ) ? "<h2>Pledges</h2>" : "<h2>Pledges > {$pledge_type}</h2>";
        echo $heading; ?> <div class="col-md-12"> <div class="col-md-3"> <?php

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
    echo form_open('pledges/filtered_results', [ 'id' => 'filter_pledges', 'class' => 'span12' ]);
    echo form_dropdown('program_id', $programs, $selected_program_id, 'id="filter_pledges_by_program"');
    echo form_dropdown('status_id', $pledge_statuses, $selected_status_id, 'id="pledge_statuses"');
    echo form_dropdown('substatus_id', $substatuses, $selected_substatus_id, 'id="filter_pledges_by_substatus"');
    echo form_submit([ 'name' => 'submit_filter', 'class' => 'btn btn-info', 'value' => 'Filter Pledges' ]);
    echo form_close();
  ?>
  </div>

</div>



  <div class="col-md-12">

    <?php

    if (isset($message) && ! empty($message)) {
      echo "<div class='alert alert-success'>{$message}</div>";
    } elseif (isset($error_message) && ! empty($error_message)) {
      echo "<div class='alert alert-danger'>{$error_message}</div>";
    }


        echo set_table([ $table_data ], $table_header);

    ?>

    <div class="col-md-6">
    <h2>Notes</h2>

    <?php
    foreach ($notes as $n) {
      echo "<h4>{$n->username} @ {$n->created_at}</h4>";
      echo $n->content;
      echo '<hr />';
    }

    ?>

    </div>

  </div><!--/span12-->

  </div><!-- span12 -->

</div><!-- /row -->

