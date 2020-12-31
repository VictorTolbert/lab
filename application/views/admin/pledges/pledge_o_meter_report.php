<div class="row">
  <div class="col-md-12" id="report-container">
    <table id="pledge-o-meter-report" class="table table-striped table-bordered report-compact">
      <thead>
        <tr class="report-header report-header-compact">
          <th colspan="9">
            <div id="report-title">
              <?php echo 'Team Pledge-O-Meter Report - ' . $program->name  . ' - ' . date('m/d/Y g:i:sA'); ?>
            </div>
          </th>
        </tr>
        <tr>
          <th>Teacher</th>
          <th>Grade</th>
          <th>Pledge-O-Meter (PPL)</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pledges_by_class as $row): ?>
          <tr>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['grade'] ?></td>
            <td><?php echo $row['ppl'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
