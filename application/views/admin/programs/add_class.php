<div class="row">
  <div class="col-md-6 classroom-add">
    <h3>Add a  Class</h3>
    <? if($data['success']): ?>
      <div class="alert"><?= $data['success'] ?></div>
    <? endif; ?>
    <?php echo form_open('/admin/programs/add_class/'.$program_id, ['class' => 'form-horizontal']); ?>
      <input type="hidden" name ="program_id" value ="<?php echo $program_id;  ?>">
      <div class="form-group">
        <label class='col-sm-2 control-label' for='class_name'>Class Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Class Name" name="class_name">
        </div>
        <?= form_error('class_name'); ?>
      </div>

      <div class="form-group">
        <label class='col-sm-2 control-label' for='number_of_participants'># of Students</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="# of Students" name="number_of_participants">
        </div>
        <?= form_error('number_of_participants'); ?>
      </div>

      <div class="form-group">
        <label class='col-sm-2 control-label' for='pledge_meter'>Pledge O' Meter Goal</label>
        <div class="col-sm-6 input-group">
          <span class="input-group-addon">$</span>
          <input class="form-control numeric" id="pledge-meter" name="pledge_meter" type="text" value="<?= $pledge_meter ?>" placeholder="Pledge O'Meter Goal">
        </div>
        <?= form_error('pledge_meter') ?>
      </div>

      <div class="form-group">
        <label class='col-sm-2 control-label' for='grades'>Grade</label>
        <div class="col-sm-6">
          <?= form_dropdown('grades', $grades); ?>
        </div>
      </div>

      <div class="form-group">
        <label class='col-sm-2 control-label' for='groups'>Group</label>
        <div class="col-sm-6">
          <?= form_dropdown('groups', $classes); ?>
        </div>
      </div>

      <div class="form-actions">
        <?= form_submit(['name' => 'submit', 'class' => 'btn btn-info btn-update', 'value' => 'Add Class']); ?>
      </div>
    <?= form_close(); ?>
  </div>
</div>
