<?php
if ($this->session->flashdata('success')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('success')}</div>";
} elseif ($this->session->flashdata('error')) {
  echo "<div class='alert alert-danger'>{$this->session->flashdata('error')}</div>";
}
?>
<h3>Programs <?= isset($extra_title) ? $extra_title : ''; ?></h3>
<a id="syncwithsalesforcebutton" href="/admin/sync-programs-salesforce" class="btn btn-default hide disable-onclick">
  <i class="glyphicon glyphicon-download"></i> sync with salesforce
</a>
<table id="programs-table" class="table table-striped">
  <thead>
    <tr>
      <th class="actions">Actions</th>
      <th>Help</th>
      <th notSearchable="true">To Do</th>
      <th>Event Name</th>
      <th>CC</th>
      <th class="max-110">Semester</th>
      <th class="max-110">Team</th>
      <th class="max-140">Program Owner</th>
      <th class="min-100">Pep Rally</th>
      <th class="min-100">Fun Run</th>
    </tr>
  </thead>
  <tbody> </tbody>
</table>
