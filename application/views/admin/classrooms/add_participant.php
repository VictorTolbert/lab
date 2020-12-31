<div class="row">
  <h2 class="text-center">Classroom > Add Participant<?= $classroom ? ' > ' . $classroom->name : ''; ?></h2>
  <div class="col-sm-4 col-sm-offset-4" id="prize-edit">
    <?
    if ($this->session->flashdata('success')) {
      echo "<div class='alert alert-success'>{$this->session->flashdata('success')}</div>";
    } elseif ($this->session->flashdata('error')) {
      echo "<div class='alert alert-danger'>{$this->session->flashdata('error')}</div>";
    }

    echo form_open_multipart('admin/classes/add_participant/' . ($classroom->id ?: 0) . '/' . $program_id, [ 'class' => 'form-horizontal m-bot-10' ]);
    ?>
      <? $field_val = ( empty($_POST['first_name']) ) ? '' : $this->input->post('first_name'); ?>
      <div class="form-group">
        <label class='col-sm-4 control-label' for='first_name'>First Name</label>
        <div class="col-sm-8">
          <input name='first_name' class='form-control' value='<?= $field_val ?>'>
        </div>
        <?= form_error('first_name'); ?>
      </div>
      <? $field_val = ( empty($_POST['last_name']) ) ? '' : $this->input->post('last_name'); ?>
      <div class="form-group">
        <label class='col-sm-4 control-label' for='last_name'>Last Name</label>
        <div class="col-sm-8">
          <input name='last_name' class='form-control' value='<?= $field_val ?>'>
        </div>
        <?= form_error('last_name'); ?>
      </div>

      <div class="form-group">
        <label class="col-sm-4 control-label" for="type">Participant Type</label>
        <div class="col-sm-8">
        <?= form_dropdown('type', ['Student' => 'Student', 'Teacher' => 'Teacher'], $field_val); ?>
        </div>
      </div>

      <?= form_hidden('orig_classroom_id', $classroom_id); ?>
      <? $field_val = ( empty($_POST['classroom_id']) ) ? $classroom_id : $this->input->post('classroom_id'); ?>
      <div class="form-group">
        <label class='col-sm-4 control-label' for='classroom_id'>Classroom</label>
        <div class="col-sm-8">
          <?= form_dropdown('classroom_id', $classrooms, $field_val); ?>
        </div>
      </div>

      <?= form_submit([ 'name' => 'submit', 'class' => 'center-block btn btn-info', 'value' => 'Submit' ]); ?>
    <?= form_close(); ?>
  </div>
</div>
