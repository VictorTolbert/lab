<h3>Participants</h3>
<div class="col-md-6">
  <input id="status_id" value="<?= $status_id ? $status_id : ''; ?>" type="hidden"/>
  <? $this->session->unset_userdata(['student_pending_only']); ?>
  <a id="toggle_student_pending_pledge_button" class="btn btn-info">
    <i class="glyphicon glyphicon-ok-sign glyphicon"></i> <span>Show Only Participants With Pending Pledges</span>
  </a>
  <a class="btn btn-success" href="<?= site_url('admin/classes/add_participant/0/' . $program_id); ?>">
    <i class="glyphicon glyphicon-plus-sign"></i> Add Participant
  </a>
</div>
<br/><br/>
<table id="data-table" class="table table-striped table-program-students">
  <thead>
    <tr>
      <th class="actions">Actions</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Grade</th>
      <th>Teacher</th>
      <th>Access Code</th>
      <th>Note</th>
    </tr>
  </thead>
<tbody></tbody>
</table>
