<?php
if ($error) {
  echo "<div class='alert alert-danger'>{$error}</div>";
} elseif ($success) {
  echo "<div class='alert alert-success'>{$success}</div>";
}
?>
<div class="row">
  <div class="tab-content">
    <div class="tab-pane active" id="pledge">
      <div class="col-md-12">
        <h3>Participant Report</h3>
        <hr />
        <div id="participant_report_form">
          <?= $this->session->flashdata('success'); ?>
          <form action="/admin/programs/report/participant-csv" class="col-md-4" method="post" accept-charset="utf-8">
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="form-group">
              <select class="form-control" name="semester" class="semester req">
                <option selected disabled>Semester</option>
                <?php foreach ($semesters as $key => $semester): ?>
                  <option value="<?= $key; ?>"><?= $semester; ?></option>
                <?php endforeach; ?>
              </select>
              <span class="help-inline">
                <?= form_error('semester'); ?>
              </span>
            </div>
            <?= form_submit([ 'name' => 'submit', 'class' => 'btn btn-info', 'value' => 'Generate Report' ]); ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

