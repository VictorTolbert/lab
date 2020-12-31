<h2>Program > Print Labels > <?php echo $program->name; ?></h2>

<?php
if (!empty($message)) {
  echo "<div class='alert alert-danger'><pre>$message</pre></div>";
}

if(!empty($classrooms)):
  ?>

<p>
Below is a summary of what will be printed.
</p>

  <?php
  echo form_open("/admin/programs/code_labels_pdf/$program_id", ['method' => 'get', 'target' => '_blank', 'class' => 'form-horizontal']);

  echo bootstrap_field_val('text', 'top_margin', 'Set Top Margin', '', '', '', '(mm) — Adjusts vertical position of labels on the sheet.');
  ?>
<div class="form-actions">
  <?php echo form_submit([ 'name' => 'submit', 'class' => 'btn btn-primary',  'value' => 'Print Labels (PDF)' ]); ?>
<a href="/admin/programs" class="btn btn-default">Cancel</a>
</div>
  <?php  echo form_close(); ?>

<p>
Or: <a href="/admin/programs/code_labels_print/<?php echo $program_id; ?>"  target="_blank" class="btn btn-sm">Print as HTML</a>
</p>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Grade</th> <th>Classroom</th> <th>Student Registration Code </th> <th>Teacher Registration Code</th><th>Pages</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $pages              = 0;
    $numberOfClassrooms = 0;
    foreach ($classrooms as $c) {
      $c->team_leader_code = !empty($c->team_leader_code) ? substr($c->team_leader_code, 0, 4) . '-' . substr($c->team_leader_code, 4, 8) : null;
      $c->team_member_code = !empty($c->team_member_code) ? substr($c->team_member_code, 0, 4) . '-' . substr($c->team_member_code, 4, 8) : null;
      $numberOfClassrooms++;
      ?>
      <tr>
        <td><?=$c->grade_name?></td>
        <td><?=$c->name?></td>
        <td><?=$c->team_member_code?></td>
        <td><?=$c->team_leader_code?></td>
        <td><?=ceil($numberOfClassrooms / 30)?></td>
      </tr>
    <?php } ?>
    <tr>
      <td><strong>Total</strong></td>
      <td><strong><?php echo $numberOfClassrooms; ?></strong></td>
      <td></td>
      <td></td>
      <td><strong><?=ceil($numberOfClassrooms / 30)?></strong></td>
    </tr>
  </tbody>
</table>
<?php     endif; ?>
