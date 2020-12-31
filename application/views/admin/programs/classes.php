<?php
if ($this->session->flashdata('success')) {
   echo "<div class='alert alert-success'>{$this->session->flashdata('success')}</div>";
}?>
<h3>Classes</h3>
<a class="btn btn-success" href="/admin/programs/add_class/<?= $program->id; ?>">Add a Class</a>
<a class="btn btn-success" href="/admin/programs/upload_classes/<?= $program->id; ?>" >Upload Class List</a>
<a class="btn btn-success text-capitalize"
  data-toggle="tooltip"
  title="Add missing <?=$unit_data->name_plural?> for all classes"
  href="/admin/program/add_missing_units/<?= $program->id; ?>">Add All Missing <?=$unit_data->name_plural?></a>
<table id="classes-table" class="table table-striped">
  <thead>
    <tr>
      <th class="actions">Actions</th><th>Grade</th> <th>Class Name</th> <th># Participants</th></th><th>Teacher Registration Code</th><th># Missing <?= $unit_data->name_plural ?></th>
    </tr>
  </thead>
  <tbody></tbody>
</table>
