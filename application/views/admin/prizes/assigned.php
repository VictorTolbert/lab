<h3><?php echo $header ?></h3>
<div class="row">
  <?php
  if ($this->session->flashdata('message')) {
    echo "<div class='alert alert-success'>{$this->session->flashdata('message')}</div>";
  }

  if ($this->session->flashdata('error')) {
    echo "<div class='alert alert-danger'>{$this->session->flashdata('error')}</div>";
  }
  ?>
</div>
<?php echo form_hidden('program_id', $program->id) ?>
<?php echo form_hidden('filtered_status', "") ?>
<div class="row assigned-options">
  <div class="col-md-12">
    <p>In order to view and deliver current prizes, please go to reports tab.</p>
  </div>
</div>
<div class="row assigned-options">
  <div class="col-md-12">
    <p>To download previous delivery reports or undo an accidental mass delivery:</p>
    <a class="btn btn-medium btn-default"
      href="/admin/programs/delivered-prizes/<?php echo $program->id?>">
        View Prize Delivery History
    </a>
  </div>
</div>
<div class="row assigned-options">
  <div class="col-md-12">
    <p>
      You can select prize(s) in the table below (by clicking the row) and mark them as delivered.<br/>
      It will <strong>not</strong> show up on the delivery report.<br/>
      If you Undo Delivery it will show up on the current Prize Delivery Reports.
    </p>
    <div class="form-group" id="prize-status-actions">
      <label></label>
      <button class="btn btn-medium btn-info" id="update-selected-delivered">Mark as Delivered</button>
      <button class="btn btn-medium btn-warning" id="update-selected-giveaway" data-toggle="modal" data-target="#giveaway-modal">Undo Delivery</button>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="assigned-prizes" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Update</th>
          <th>Display Amount</th>
          <th class="prize-status">Prize Status</th>
          <th>Status Time</th>
          <th>Prize Name</th>
          <th>Student Name</th>
          <th>Class Name</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
    <div class="modal fade" id="report-option-deliver-modal" style="display:none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Current Prize Delivery Reports</h3>
          </div>
          <div class="modal-body">
            <p>Delivery by Class by Studentss
              <a class="btn btn-info" target="_blank" href="/admin/prizes/report/class-prize-pdf/<?php echo $program->id ?>">PDF</a>
            </p>
            <p>Delivery by Grade by Prize
              <a class="btn btn-info" target="_blank" href="/admin/prizes/report/grade-prize-pdf/<?php echo $program->id ?>">PDF</a>
            </p>
            <p>Delivery by Grade by Student
              <a class="btn btn-info" target="_blank" href="/admin/prizes/report/grade-student-prize-pdf/<?php echo $program->id ?>">PDF</a>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="modal fade" id="giveaway-modal" style="display:none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Are you sure? This action cannot be undone.</h3>
      </div>
      <div class="modal-body">
        <p>
          This will <strong>UNDO</strong> delivery of the selected prizes.
        </p>
        <p>
          They will appear on the current prize delivery reports along with any other undelivered prizes.
        </p>
        <p>
          If you do not fully understand the action you are about to take, please ask for help.
        </p>
        <p>Thank you!</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="giveaway-modal-confirm" class="btn btn-danger">
          I understand this cannot be undone or fixed. I am sure.
        </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('admin/programs/partials/prize_report_modals'); ?>
