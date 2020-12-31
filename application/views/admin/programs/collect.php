<h3><?= $school->name; ?></h3>
<div id="total_pledges_payments_graph"
  data-program-id="<?= $program->id ?>"
  data-chart-title="Total Pledges and Payments"
  <?php if ($pledges_payments) { ?>
    data-results='<?= $pledges_payments; ?>'
  <?php } ?> >
</div>
<div id="collect_view_row">
  <strong> View By: </strong>
  <a href="#" id="view_by_class_btn" class="btn btn-default disabled">Class</a>
  <a href="#" id="view_by_students_btn" class="btn btn-default">Students</a>
</div>
<div id="view_by_class">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Class</th>
        <th>Grade</th>
        <th class="actions">Actions</th>
        <th>Pledged</th>
        <th class="text-nowrap">Collected $</th>
        <th class="text-nowrap">Payments Scheduled</th>
        <th>Outstanding</th>
        <th>CC</th>
        <th>Cash</th>
        <th>Check</th>
        <? if ($cmg_total !== "0.00") { ?>
          <th>CMG</th>
        <? } ?>
        <th class="text-nowrap">Today's Envelope</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($collections as $collection): ?>
        <tr>
          <td><?= $collection->class ?></td>
          <td><?= $collection->grade ?></td>
          <td>
            <?php $class_collect_url = "/programs/collect_students/$key/$collection->class_id"; ?>
            <a class="btn btn-primary btn-xs" href="<?= $class_collect_url ?>">
              <i class="glyphicon glyphicon-eye-open"></i> View Participants</a>
            </a>
          </td>
          <td><?= $collection->pledged ?></td>
          <td><?= $collection->collected ?></td>
          <td><?= $collection->scheduled ?></td>
          <td><?= $collection->outstanding ?></td>
          <td><?= $collection->cc ?></td>
          <td><?= $collection->cash ?></td>
          <td><?= $collection->check ?></td>
          <? if ($cmg_total !== "0.00") { ?>
            <td><?= $collection->cmg ?></td>
          <? } ?>
          <td><?= $collection->today ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <th>Total:</th>
        <th></th>
        <th></th>
        <th><?= $pledged_total; ?></th>
        <th><?= $collected_total; ?></th>
        <th><?= $scheduled_total; ?></th>
        <th><?= $outstanding_total; ?>*</th>
        <th><?= $cc_total; ?><span class="red">*</span></th>
        <th><?= $cash_total; ?></th>
        <th><?= $check_total; ?></th>
        <? if ($cmg_total !== "0.00") { ?>
          <th><?= $cmg_total; ?></th>
        <? } ?>
        <th><?= $today_total; ?></th>
      </tr>
    </tfoot>
</table>
<div class="center">
<?= $last_collection ?>
</div>
<div class="row"><span class="red">* Please use credit card deposit report for the invoice amount.</span></div>
<?php $this->load->view('admin/payment_scheduled_note'); ?>
</div>

<div id="view_by_students" class="hide">
<table id="data-table" class="table table-striped table-program-students">
    <thead>
      <tr>
        <th class="max-100 actions">Actions</th>
        <th class="">First Name</th>
        <th class="">Last Name</th>
        <th class="">Grade</th>
        <th class="">Teacher</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
