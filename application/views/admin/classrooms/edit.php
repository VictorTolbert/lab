<?php
$team_member_code = !empty($classroom->team_member_code) ? substr($classroom->team_member_code, 0, 4) . '-' . substr($classroom->team_member_code, 4, 8) : null;
$team_leader_code = !empty($classroom->team_leader_code) ? substr($classroom->team_leader_code, 0, 4) . '-' . substr($classroom->team_leader_code, 4, 8) : null;
$pledge_meter     = !empty($classroom->pledge_meter) ? $classroom->pledge_meter : '0.00';
?>
<div class="row">
  <div class="col-md-6 classroom-edit" id="prize-edit">

    <h2>Classroom > Edit > <?php echo $classroom->name;?></h2>

    <?php
        echo $this->session->flashdata('success');

        echo form_open_multipart('admin/classes/update/' . $classroom->id, [ 'class' => 'form-horizontal' ]);

    ?>
        <? $field_val = ( empty($_POST['name']) ) ? $classroom->name : $this->input->post('name'); ?>
        <div class="form-group">
          <label class='col-sm-2 control-label' for='name'>Name</label>
          <div class="col-sm-6">
            <input name='name' class='form-control' value='<?= $field_val ?>'>
          </div>
          <?= form_error('name'); ?>
        </div>

        <? $field_val = ( empty($_POST['grade_id']) ) ? $classroom->grade_id : $this->input->post('grade_id'); ?>
        <div class="form-group">
          <label class='col-sm-2 control-label' for='grade_id'>Grade</label>
          <div class="col-sm-6">
            <?= form_dropdown('grade_id', $grades, $field_val); ?>
          </div>
        </div>

        <? $field_val = ( empty($_POST['number_of_participants']) ) ? $classroom->number_of_participants : $this->input->post('number_of_participants'); ?>
        <div class="form-group">
          <label class='col-sm-2 control-label' for='number_of_participants'># of students</label>
          <div class="col-sm-6">
            <input name='number_of_participants' class='form-control' value='<?= $field_val ?>'>
          </div>
          <?= form_error('number_of_participants'); ?>
        </div>

        <div class="form-group">
          <label class='col-sm-2 control-label' for='pledge_meter'>Pledge O' Meter Goal</label>
          <div class="col-sm-6 input-group">
            <span class="input-group-addon">$</span>
            <input class="form-control numeric" id="pledge-meter" name="pledge_meter" type="text" value="<?= $pledge_meter ?>" placeholder="Pledge O'Meter Goal">
          </div>
        <?php

        if ($program_pledge_settings->flat_donate_only) {
          echo '<span class="help-block">*Total amount</span>';
        } else {
          echo '<span class="help-block">*per lap</span>';
        }

        if (form_error('pledge_meter')) {
          echo '<span class="help-block" id="pledge-meter-help" style ="margin-left:215px;color:#b94a48;">The pledge goal must be numeric.</span>';
        }

        ?>
        </div>

        <div class="form-group">
          <label class='col-sm-2 control-label' for='team_member_code'>Student Registration Code</label>
          <div class="col-sm-6">
            <input name='team_member_code' readonly value='<?= $team_member_code ?>' class='form-control' value='<?= $field_val ?>'>
          </div>
          <?= form_error('team_member_code'); ?>
        </div>

        <div class="form-group">
          <label class='col-sm-2 control-label' for='team_leader_code'>Teacher Registration Code</label>
          <div class="col-sm-6">
            <input name='team_leader_code' readonly value='<?= $team_leader_code ?>' class='form-control' value='<?= $field_val ?>'>
          </div>
          <?= form_error('team_leader_code'); ?>
        </div>

        <div class="alert alert-success alert-classroom-delete-success" style="display:none">This classroom has been deleted</div>
        <div class="alert alert-danger alert-classroom-delete-failed-participants" style="display:none">This class has participants, it cannot be deleted!</div>
        <div class="alert alert-danger alert-classroom-delete-failed-payments" style="display:none">This class has payments, it cannot be deleted!</div>

        <div class="form-actions">
          <?php
            echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-info btn-update', 'value' => 'Update' ]);
            echo "<a class='btn btn-danger btn-delete-class' data-classroom-id='$classroom->id'><i class='glyphicon glyphicon-trash'></i> Delete</a>";
            echo form_close();
          ?>
        </div>
  </div>
</div>
