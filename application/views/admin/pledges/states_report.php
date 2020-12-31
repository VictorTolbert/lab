<div class="row">
  <div class="col-md-12" id="report-container">
    <table class="table table-striped table-bordered report-compact" id="class-pledge-report">
      <thead>
        <tr class="report-header report-header-compact">
          <th colspan="15">
            <div id="report-title">Pledges by State Report - <?php echo date('m/d/Y g:i:sA'); ?></div>
            <div id="class-name"><? echo $program->name ?></div>
          </th>
        </tr>
        <tr>
          <th>State</th>
          <th>Pledges</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($states as $state): ?>
          <tr>
            <td><?php echo $state['state'];?></td>
            <td><?php echo $state['count'];?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
