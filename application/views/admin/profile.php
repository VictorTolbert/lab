<?php
if ($this->session->flashdata('success')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('success')}</div>";
}
?>
<h2><?= $user->first_name.' '.$user->last_name ?></h2>
<ul class="breadcrumb">
    <li><a href="/admin/programs/">Programs</a> <span class="divider">/</span></li>
    <li><a href="/admin/programs/dashboard/<?php echo $program->id; ?>"><?php echo $program->name; ?></a> <span class="divider">/</span></li>
    <li><?php echo "{$user->first_name} {$user->last_name}"; ?></li>
</ul>

<?php

if (isset($message) && ! empty($message)) {
  echo "<div class='alert alert-success'>{$message}</div>";
} elseif (isset($error_message) && ! empty($error_message)) {
  echo "<div class='alert alert-danger'>{$error_message}</div>";
} elseif ($this->session->flashdata('message')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
}

?>

<p>
    <a class="btn btn-warning" href="/admin/users/edit/<?php echo $user->id; ?>">
        <i class="glyphicon glyphicon-pencil"></i> Edit
    </a>
    <?php if ($user_group != 'teacher') { ?>
    <a class="btn btn-success" href="/admin/payments/edit/<?php echo $program->id; ?>/<?php echo $user->id; ?>">
        <i class="glyphicon glyphicon-plus-sign"></i> Add $
    </a>
    <?php } ?>
    <a class="btn btn-success" href="/admin/pledges/new/<?php echo $user->id; ?>">
        <i class="glyphicon glyphicon-plus-sign"></i> Pledge(s)
    </a>
    <a class="btn btn-success" href="/admin/users/notes/<?php echo $user->id; ?>">
        <i class="glyphicon glyphicon-plus-sign"></i> Note(s)
    </a>
    <?php if ($user_group != 'teacher') { ?>
    <a class="btn btn-success" href="/admin/pledges/send-email/<?php echo $user->id; ?>">
        <i class="glyphicon glyphicon-plus-sign"></i> Send
    </a>
    <?php } ?>
    <?php if (empty($user->waiver_signed)) { ?>
    <a class="btn btn-warning waiver-signed" user-id="<?php echo $user->id; ?>">
        <i class="glyphicon glyphicon-plus-sign"></i> Paper Waiver Signed
    </a>
    <?php } ?>
</p>
<? if ($user_group == 'student') { ?>
<h3>Student Information</h3>
<? } elseif ($user_group == 'teacher') { ?>
  <h2>Teacher Information</h2>
<? } ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Participant</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo "{$user->first_name} {$user->last_name}"; ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th>Class</th>
            <th>Grade</th>
            <th>Access Code</th>
            <th>Laps</th>
            <th>Click Through Waiver</th>
        </tr>
        <tr>
            <td><?php echo $profile['classroom']; ?></td>
            <td><?php echo $profile['grade']; ?></td>
            <td><?php echo $user->fr_code; ?></td>
            <td><?php echo $user->laps; ?></td>
            <td><?php echo $user->waiver_ts; ?></td>
        </tr>
    </tbody>
</table>
<?php
if ($user_group == 'student') {
  echo "<h3>Parent Information</h3>";
  if ($parent): ?>
    <table id="user-parent-table" class="table table-striped">
        <thead>
            <tr>
                <th class="actions">Actions</th>
                <th>Parent</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
          <tr>
              <td>
                  <a href="/admin/users/edit/<?php echo $parent->id; ?>"
                     class="btn btn-xs btn-warning">Edit
                  </a>
              </td>
              <td><?php echo "{$parent->first_name} {$parent->last_name}"; ?></td>
              <td><?php echo $parent->email; ?></td>
              <td><?=($parent->phone) ? "<a href='tel:$parent->phone'>(".substr($parent->phone, 0, 3).") ".substr($parent->phone, 3, 3)."-".substr($parent->phone, 6) . "</a>" : null;?></td>
          </tr>
        </tbody>
    </table>
    <?php
  else:
    ?>
    <div class="alert">
        This student has not yet provided parent information.
    </div>
    <?php
  endif;
}
?>

<h3>Pledge stats</h3>

    <div class="row">
      <div class="container col-md-12 col-md-offset-1">
        <ul class="list-inline">
            <li class="form-group col-md-2">
                <span class="input-group">
                    <span class="input-group-addon">Confirmed $</span>
                    <input class="numeric form-control" type="text" value="<?= $pledge_stats->confirmed_est; ?>" disabled>
                </span>
            </li>
            <li class="form-group col-md-2">
                <span class="input-group">
                    <span class="input-group-addon">Pending $</span>
                    <input class="numeric form-control" type="text" value="<?= $pledge_stats->pending_est; ?>" disabled>
                </span>
            </li>
            <li class="form-group has-info col-md-2">
                <span class="input-group">
                    <span class="input-group-addon input-group-blue-bg">Total $</span>
                    <input class="numeric form-control" type="text" value="<?= $pledge_stats->pledged; ?>" disabled>
                </span>
            </li>
            <li class="form-group has-success col-md-2">
                <span class="input-group">
                    <span class="input-group-addon">Collected $</span>
                    <input class="numeric form-control" type="text" value="<?= $pledge_stats->collected; ?>" disabled>
                </span>
            </li>
            <li class="form-group has-warning col-md-2">
                <span class="input-group">
                    <span class="input-group-addon">Outstanding $</span>
                    <input class="numeric form-control" type="text" value="<?php echo $pledge_stats->outstanding; ?>" disabled>
                </span>
            </li>
        </ul>
      </div>
    </div>
    <?php $this->load->view('admin/payment_scheduled_note'); ?>
<?php if($pledges): ?>
<h3>Pledges and Payments</h3>
  <?php if ($pending_pledge_count > 0): ?>
    <a class="btn  btn-success" href="/admin/pledges/confirm-all/<?php echo $user->id .'/'.$program->id; ?>">
       <i class="glyphicon glyphicon-ok-sign"></i> Confirm All Pledges
    </a>
  <?php endif; ?>
    <table id="user-pledge-table" class="table table-striped">
        <thead>
            <tr>
                <th class="actions">Actions</th>
                <th>Sponsor Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Entered <?php echo $pledges[0]->tz_known; ?></th>
                <th>Status</th>
                <th>Sub Status</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($pledges as $pledge): ?>
            <tr>
                <td>
                  <?php
                    $pledge_deleted      = Pledge_model::status_deleted($pledge->status);
                    $pledge_paid         = Pledge_model::status_paid($pledge->status);
                    $pledge_paid_pending = Pledge_model::status_paid_pending($pledge->status);
                    $pledge_pending      = Pledge_model::status_pending($pledge->status);
                  ?>

                  <?php if ((!$pledge_paid_pending) or ($is_sysadmin and $pledge_paid_pending)) { ?>
                  <a href="/admin/pledges/edit/<?php echo $pledge->id; ?>"
                    class="btn btn-xs btn-warning">Edit
                  </a>
                  <?php } ?>

                  <?php if ((!$pledge_deleted and !$pledge_paid and !$pledge_paid_pending) or ($is_sysadmin and $pledge_paid_pending)) { ?>
                  <a class="btn btn-xs btn-danger detail" data-itemtype="pledge" data-action="delete-entity" href="<?php echo site_url("admin/pledges/delete/".$pledge->id)?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                  <?php } ?>

                  <?php if ($pledge_pending) { ?>
                  <a class="btn btn-xs btn-success" data-action="confirm_pledge" href="<?php echo site_url("admin/pledges/confirm/".$pledge->id)?>"><i class="glyphicon glyphicon-ok-sign"></i> Confirm</a>
                  <?php } ?>
                </td>
                <td><?php echo $pledge->sponsor_name; ?></td>
                <td><?=($pledge->sponsor_phone) ? "<a href='tel:$parent->phone'>(".substr($pledge->sponsor_phone, 0, 3).") ".substr($pledge->sponsor_phone, 3, 3)."-".substr($pledge->sponsor_phone, 6) . "</a>" : null;?></td>
                <td><?php echo $pledge->sponsor_email; ?></td>
                <td><?php echo $pledge->amount; ?></td>
                <td><?php echo $pledge->pledge_type; ?></td>
                <td><?php echo $pledge->ts_entered_tz; ?></td>
                <td><?php echo $pledge->status; ?></td>
                <td><?php echo $pledge->substatus; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div class="alert">
        This <?php echo $user_group ?> currently has no pledges.
    </div>
<?php endif; ?>

  <h3>Notes</h3>

  <a class="btn btn-success btn-xs" data-user_id="<?php echo $user->id ?>"
     href="/admin/users/notes/<?php echo $user->id ?>">
        <i class="glyphicon glyphicon-plus-sign"></i>Note(s)
    </a>

  <table id="notes-table" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th class="actions">Actions</th>
        <th>Note</th>
        <th>Created</th>
        <th>Last Updated</th>
      </tr>
    </thead>
    <tbody></tbody>
    <tfoot>
      <tr>
        <th>Actions</th>
        <th>Note</th>
        <th>Created</th>
        <th>Last Updated</th>
      </tr>
    </tfoot>
  </table>
