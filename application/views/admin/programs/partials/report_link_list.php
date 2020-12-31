<? if ($reports): ?>
<h4>Previous Reports</h4>
  <? foreach ($reports as $report): ?>
<div>Created: <?= date('m/d/Y h:m:s A', strtotime($report->created_on)) ?> <a target="_blank" href="/admin/programs/get-s3-report/<?= $program->id ?>/<?= $report->id ?>"><?= $report->filename ?></a></div>
  <? endforeach; ?>
<? endif; ?>
