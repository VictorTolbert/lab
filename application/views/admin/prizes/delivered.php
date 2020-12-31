<h3>Prizes Delivered to <?php echo $program->name ?></h3>
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
<table id="delivered-prizes" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th class="actions">Actions</th>
      <th>Time of Delivery</th>
      <th>Number of Prizes</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>
<div class="modal fade" id="giveaway-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Are you sure? This action cannot be undone.</h3>
      </div>
      <div class="modal-body">
        <p>
          This will <strong>UNDO</strong> delivery of <span class="prize-count"></span> delivered on <span class="timestamp"></span>.
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
        <button type="button" id="giveaway-modal-confirm" class="btn btn-danger" onclick="Prizes_Delivered.show_giveaway_additional_confirm(event)">
          I understand this cannot be undone or fixed. I am sure.
        </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="giveaway-additional-confirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3>I understand this cannot be undone or fixed.</h3>
        <h3>I am sure.</h3>
      </div>
      <div class="modal-footer">
        <button type="button" id="giveaway-additional-confirm-agree" class="btn btn-danger" onclick="Prizes_Delivered.update_prize_status_and_hide_modals(event)">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="giveaway-status">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h3>Prize Update Status</h3></div>
      <div class="modal-body">
        <div class="status-spinner">
          <h4>Updating Prizes</h4>
          <img src="<?php echo asset_url('img/loading.gif') ?>"/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="giveaway-status-confirm">Ok</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="report-option-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h3>Previous Prize Delivery Reports</h3></div>
      <div class="modal-body">
        <p>Delivery by Class by Student
          <a class="btn btn-info" target="_blank" href="" id="prize-by-class-pdf">PDF</a>
        </p>
        <p>Delivery by Grade by Prize
          <a class="btn btn-info" target="_blank" href="" id="prize-by-grade-pdf">PDF</a>
        </p>
        <p>Delivery by Grade by Student
          <a class="btn btn-info" target="_blank" href="" id="prize-by-grade-student-pdf">PDF</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="giveaway-status">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h3>Prize Update Status</h3></div>
      <div class="modal-body">
        <div class="status-spinner">
          <h4>Updating Prizes</h4>
          <img src="<?php echo asset_url('img/loading.gif') ?>"/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="giveaway-status-confirm">Ok</button>
      </div>
    </div>
  </div>
</div>
