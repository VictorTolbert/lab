<div class="row">
  <div class="col-md-12" id="report-container">
    <table class="table table-striped table-bordered report-compact">
      <thead>
        <tr class="report-header report-header-compact">
          <th colspan="9">
            <div id="report-title">
              <?php echo 'Team Summary Report (By Class) - ' . $program->name  . ' - ' . date('m/d/Y g:i:sA'); ?>
            </div>
          </th>
        </tr>
        <tr>
          <th>Class</th>
          <th>Grade</th>
          <th>Pledge O Meter</th>
          <th>Registered Teachers</th>
          <th>Total Students</th>
          <th>Registered Students</th>
          <th>% Registered Students</th>
          <th>Pledged Students</th>
          <th>% Pledged Students</th>
          <th>Tasks Completed</th>
          <th>Amount</th>
          <th>Collected</th>
          <th>Scheduled</th>
          <th>Outstanding</th>
          <th>10%</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pledges_by_class as $row): ?>
          <tr>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['grade'] ?></td>
            <td><?php echo $row['ppl'] ?></td>
            <td><?php echo $row['registered_teachers'] ?></td>
            <td><?php echo $row['num_participants'] ?></td>
            <td><?php echo $row['num_reg_participants']  ?></td>
            <td><?php echo $row['reg_parts_percent'] ?></td>
            <td><?php echo $row['num_pledged_participants'] ?></td>
            <td><?php echo $row['pledged_parts_percent']  ?></td>
            <td><?php echo $row['tasks_completed']  ?></td>
            <td><?php echo $row['total_amount'] ?></td>
            <td><?php echo $row['collected']  ?></td>
            <td><?php echo $row['scheduled']  ?></td>
            <td><?php echo $row['outstanding']  ?></td>
            <td><?php echo $row['ten_percent'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <table class="table table-striped table-bordered report-compact">
      <thead>
        <tr class="report-header report-header-compact">
          <th colspan="8">
            <div id="report-title">
              <?php echo 'Team Summary Report (By Grade) - ' . $program->name  . ' - ' . date('m/d/Y g:i:sA'); ?>
            </div>
          </th>
        </tr>
        <tr>
          <th>Grade</th>
          <th>Class</th>
          <th>Pledge O Meter</th>
          <th>Registered Teachers</th>
          <th>Total Students</th>
          <th>Registered Students</th>
          <th>% Registered Students</th>
          <th>Pledged Students</th>
          <th>% Pledged Students</th>
          <th>Tasks Completed</th>
          <th>Amount</th>
          <th>Collected</th>
          <th>Scheduled</th>
          <th>Outstanding</th>
          <th>10%</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pledges_by_grade as $row): ?>
          <tr>
            <td><?php echo $row['grade'] ?></td>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['ppl'] ?></td>
            <td><?php echo $row['registered_teachers']  ?></td>
            <td><?php echo $row['num_participants'] ?></td>
            <td><?php echo $row['num_reg_participants']  ?></td>
            <td><?php echo $row['reg_parts_percent'] ?></td>
            <td><?php echo $row['num_pledged_participants'] ?></td>
            <td><?php echo $row['pledged_parts_percent']  ?></td>
            <td><?php echo $row['tasks_completed']  ?></td>
            <td><?php echo $row['total_amount'] ?></td>
            <td><?php echo $row['collected']  ?></td>
            <td><?php echo $row['scheduled']  ?></td>
            <td><?php echo $row['outstanding']  ?></td>
            <td><?php echo $row['ten_percent'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
