<ul class="breadcrumb">
    <li> Programs <span class="divider">/</span></li>
    <li> <a href="<?php echo $class_list_link; ?>"><?php echo $program->name; ?></a><span class="divider">/</span></li>
    <li>Class: <?php echo "{$class->name} ($class->grade)"; ?></li>
</ul>

<h3><?php echo $school->name; ?></h3>

<div id="total_pledges_payments_graph" data-classroom-id="<?php echo $class->id ?>" data-chart-title="Total Pledges and Payments" 
<?php if ($pledges_payments) { ?>
data-results='<?php echo $pledges_payments; ?>'
<?php } ?>     
></div>

<?php
if ($organization_admin) {
  ?>
  <p>
  <a class="btn btn-success" href="<?php echo site_url("admin/classes/add_participant/".$class->id) ?>" id="add-participant"><i class="glyphicon glyphicon-ok-sign"></i> Add Participant</a>
  </p>
  <?php
}
?>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Student</th>
        <th class="actions">Actions</th>
        <th>Pledged</th>
        <th>Collected $</th>
        <th>Payments Scheduled</th>
        <th>Outstanding</th>
        <th>CC</th>
        <th>Cash</th>
        <th>Check</th>
        <? if ($cmg_total !== "0.00") { ?>
          <th>CMG</th>
        <? } ?>
        <th>Today's Envelope</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($collections as $collection): ?>
        <tr>
          <td><?php echo $collection->student_first_last ?></td>
          <td>
            <?php $student_add_funds_url = "/programs/collect_payment/$key/$collection->class_id/$collection->student_id"; ?>
            <a class="btn btn-success btn-xs" href="<?php echo $student_add_funds_url ?>">
              <i class="glyphicon glyphicon-plus-sign"></i> Add $
            </a>
          </td>
          <td><?php echo $collection->pledged ?></td>
          <td><?php echo $collection->collected ?></td>
          <td><?php echo $collection->scheduled ?></td>
          <td><?php echo $collection->outstanding ?></td>
          <td><?php echo $collection->cc ?></td>
          <td><?php echo $collection->cash ?></td>
          <td><?php echo $collection->check ?></td>
          <? if ($cmg_total !== "0.00") { ?>
            <td><?php echo $collection->cmg ?></td>
          <? } ?>
          <td><?php echo $collection->today ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <th>Total:</th>
        <th/>
        <th><?php echo $pledged_total; ?></th>
        <th><?php echo $collected_total; ?></th>
        <th><?php echo $scheduled_total; ?></th>
        <th><?php echo $outstanding_total; ?>*</th>
        <th><?php echo $cc_total; ?></th>
        <th><?php echo $cash_total; ?></th>
        <th><?php echo $check_total; ?></th>
        <? if ($cmg_total !== "0.00") { ?>
          <th><?php echo $cmg_total; ?></th>
        <? } ?>
        <th><?php echo $today_total; ?></th>
        <th></th>
      </tr>
    </tfoot>
</table>

<?php $this->load->view('admin/payment_scheduled_note'); ?>
