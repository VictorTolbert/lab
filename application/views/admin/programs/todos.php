<div id="program_todos_container">
  <?php if (count($todos) == 0) { ?>
  <div class="alert alert-info">There are no alerts </div>
  <?php } ?>

  <?php if (array_key_exists('total_raised_goal', $todos)) { ?>
  <div class="alert alert-danger">Add a Total Raised Goal to the program. <a href="<?php echo site_url("admin/programs/edit/" . $program_id);?>">Click here.</a></div>
  <?php } ?>

  <?php if (array_key_exists('missing_video', $todos)) { ?>
  <div class="alert alert-danger">Add a School Video to the program. <a href="<?php echo site_url("admin/programs/edit/" . $program_id . "#content");?>">Click here.</a></div>
  <?php } ?>

  <?php if (array_key_exists('missing_payee', $todos)) { ?>
  <div class="alert alert-danger">Add school or organization in the "Payable To" field for the program. <a href="<?php echo site_url("admin/programs/edit/" . $program_id);?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('funds_raised_for_picture', $todos)) { ?>
  <div class="alert alert-danger">Add a Funds Raised For image to the program. <a href="<?php echo site_url("admin/programs/edit/" . $program_id . "#content");?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('funds_raised_for_desc', $todos)) { ?>
  <div class="alert alert-danger">Add a Funds Raised For description to the program. <a href="<?php echo site_url("admin/programs/edit/" . $program_id . "#content");?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('missing_laps', $todos) && $days_to_fun_run <= 0) { ?>
  <div class="alert alert-danger"><?php echo $todos['missing_laps']; ?> Participants in this program are missing laps. <a href="<?php echo site_url("admin/program/add_missing_units/" . $program_id);?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('parent_collection_letter', $todos)) { ?>
  <div class="alert alert-danger">Please send out "Parent Collection Letter and Email - <em>Follow Up Day</em>". <a href="<?php echo site_url("/admin/programs/communication/parent-collection-letter/" . $program_id); ?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('reminder_followup_day', $todos)) { ?>
  <div class="alert alert-danger">Please send out "Parent Collection Letter and Email - <em>After Collections 1 & 2</em>". <a href="<?php echo site_url("admin/programs/communication/collection-reminder/" . $program_id);?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('reminder_after_first', $todos)) { ?>
  <div class="alert alert-danger">Please send out "Sponsor Thank You Email - <em>After Collections 1 & 2</em>" to parents after the first count. <a href="<?php echo site_url("admin/programs/communication/collection-reminder/" . $program_id);?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('sponsor_followup', $todos)) { ?>
  <div class="alert alert-danger">Please send out "Sponsor Thank You Email - <em>After Collection #2</em>" Emails. <a href="<?php echo site_url("admin/programs/communication/sponsor-follow-up/" . $program_id);?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('unpaid_sponsor_follow_up_email_1', $todos)) { ?>
  <div class="alert alert-danger">Please send out "Unpaid Sponsor Payment Request - <em>After Collection #1</em>" after cash and checks have been entered at the first collection. <a href="<?php echo site_url("/admin/programs/communication/unpaid-sponsor-follow-up/" . $program_id); ?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('unpaid_sponsor_follow_up_email_2', $todos)) { ?>
  <div class="alert alert-danger">Please send out "Unpaid Sponsor Payment Request - <em>After Collection #2</em>" after cash and checks have been entered at the first collection. <a href="<?php echo site_url("/admin/programs/communication/unpaid-sponsor-follow-up/" . $program_id . "/1"); ?>">Click here. </a></div>
  <?php } ?>

  <?php if (array_key_exists('top_prize_delivery', $todos)) { ?>
  <div class="alert alert-danger">Deliver top student prizes. <a href="#top_prize_modal" data-toggle="modal" >Done.</a></div>
  <div id="top_prize_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3>Are you sure?</h3>
        </div>
        <div class="modal-body">
          <p>clicking this will remove this todo from this program indefinitely.</p>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-danger">No</a>
          <a href="<?php echo site_url("programs/complete_top_prize_todo_for_program/" . $program_id . "/top_prize_delivery");?>" class="btn btn-primary">Yes</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php if (array_key_exists('teacher_prize_delivery', $todos)) { ?>
  <div class="alert alert-danger">Deliver teacher prizes. <a href="#teacher_prize_modal" data-toggle="modal" >Done.</a></div>
  <div id="teacher_prize_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3>Are you sure?</h3>
        </div>
        <div class="modal-body">
          <p>clicking this will remove this todo from this program indefinitely.</p>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-danger">No</a>
          <a href="<?php echo site_url("programs/complete_teacher_prize_todo_for_program/" . $program_id . "/teacher_prize_delivery");?>" class="btn btn-primary">Yes</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php if (array_key_exists('', $todos)) { ?>
  <div class="alert alert-danger">  <a href="<?php echo site_url("");?>">Click here. </a></div>
  <?php } ?>
</div>
