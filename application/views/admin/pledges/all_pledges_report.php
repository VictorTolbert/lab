<div class="row">
  <div class="col-md-12" id="report-container">
    <table class="table table-striped table-bordered report-compact" id="class-pledge-report">
      <thead>
        <tr class="report-header report-header-compact">
          <th colspan="17">
            <div id="report-title">
              <?php echo $program->name  . ' All Pledges Report - '. date('m/d/Y g:i:sA'); ?>
            </div>
          </th>
        </tr>
        <tr>
          <th>Participant</th>
          <th>Grade</th>
          <th>Class</th>
          <th>ID</th>
          <th>Sponsor First Name</th>
          <th>Sponsor Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>State</th>
          <th>Country</th>
          <th>Sponsor Type</th>
          <th>Pledge</th>
          <th>Type</th>
          <th>Status</th>
          <th>Laps</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($all_pledges as $row): ?>
          <tr>
            <td><?php echo $row->participant_name ?></td>
            <td><?php echo $row->grade ?></td>
            <td><?php echo $row->class ?></td>
            <td><?php echo $row->participant_user_id ?></td>
            <td><?php echo $row->sponsor_first_name ?></td>
            <td><?php echo $row->sponsor_last_name ?></td>
            <td><?php echo $row->email ?></td>
            <td><?php echo $row->phone ?></td>
            <td><?php echo $row->state ?></td>
            <td><?php echo $row->country ?></td>
            <td><?php echo $row->sponsor_type ?></td>
            <td><?php echo $row->amount ?></td>
            <td><?php echo $row->pledge_type_name ?></td>
            <td><?php echo $row->status ?></td>
            <td><?php echo $row->laps ?></td>
            <td><?php echo $row->total_est ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
