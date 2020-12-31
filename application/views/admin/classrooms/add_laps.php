<div class="row">
<div class="col-md-12">
  <?php
  if ($success) {
    echo "<div class='alert alert-success'>{$success}</div>";
  } elseif ($error) {
    echo "<div class='alert alert-danger'>{$error}</div>";
  } elseif ($warn) {
    echo "<div class='alert alert-warn'>{$warn}</div>";
  }

  if (form_error('laps[]')) {
    echo "<div class='alert alert-danger'>" . form_error('laps[]') . "</div>";
  }

  ?>
  <div id="autofill_lap_error" class="alert alert-danger hidden"></div>
  <? if ($program_pledge_settings->flat_donate_only === '1') { ?>
    <h2><?=ucfirst($unit_data->name_plural)?> cannot be entered because the program is set to flat donation only.</h2>
  <? } else { ?>
    <h2><?= $title ?: 'Participants'?></h2>
    <? if ($subtitle) { ?>
      <p><?= $subtitle ?></p>
    <? } ?>
    <?php if ($form_action_url) { ?>
      <form id ="laps-form" action="<?=$form_action_url?>" method="post">
    <?php } else { ?>
      <form id ="laps-form" action="/admin/classes/add_laps/<?= $class_id;?>" method="post">
    <?php } ?>
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <table id="users-laps-table" class="table table-striped table-bordered dataTable">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th class="text-capitalize"> <?=$unit_data->name_plural?>
            <? if (! $this->ion_auth->is_org_admin() && !$hide_autofill) { ?>
              <i class="fa fa-info-circle" data-toggle="tooltip" title="Autofilling will not include teachers. Participants with laps already entered will not be autofilled."></i>
              <input type="text" name="autofill_laps" size="10">
              <span id="button_autofill_laps" class="btn btn-primary btn-xs text-capitalize" min="0" max="35">Fill <?=$unit_data->name_plural?></span>
            <? } ?>
              <button type="submit" id="button_sav_laps" class="btn btn-warning btn-xs text-capitalize">Save <?=$unit_data->name_plural?></button>
            </th>
            <th>Grade</th>
            <th>Class</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach ($participants as $i => $part): ?>
          <tr>
            <td><?= $part->first_name; ?></td>
            <td><?= empty($part->isTeacher) ? $part->last_name : $part->last_name . ' = (T)'; ?></td>
            <td>
              <input
                type="text"
                data-participant-type="<?= empty($part->isTeacher) ? '' : 'teacher'; ?>"
                name="laps[<?= $part->id;?>]" id="laps" class='laps'
                oninput="setShowModalToFalse()"
                value="<?php
                if (empty($_POST['laps'][$part->id]) && empty($part->id)) {
                  echo $part->laps;
                } elseif (empty($_POST['laps'][$part->id])) {
                  echo $part->laps;
                } else {
                  echo $_POST['laps'][$part->id];
                }?>" />
            </td>
            <td><?= $part->grade_name; ?></td>
            <td><?= $part->class; ?></td>
          </tr>
        <?php endforeach;?>
        </tbody>

        <tfoot>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th class="text-capitalize"><?=$unit_data->name_plural?>
              <button type="submit" id="button_sav_laps" class="btn btn-warning btn-xs text-capitalize">Save <?=$unit_data->name_plural?></button>
              <?= form_error('laps[]'); ?>
            </th>
            <th>Grade</th>
            <th>Class</th>
          </tr>
        </tfoot>
      </table>
    </form>
  <? } ?>
</div><!--/span-->
</div><!-- /row -->

<?php $this->load->view('admin/programs/partials/autofill_laps_modal'); ?>
