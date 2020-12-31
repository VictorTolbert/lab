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
  echo form_open(
    "/admin/programs/labels_pdf/$program_id",
    ['method' => 'get',
               'target' => '_blank',
               'class' => 'form-horizontal']
  );

  echo bootstrap_field_val(
    'text', 'top_margin', 'Set Top Margin', '', '', '',
    '(mm) — Adjusts vertical position of labels on the sheet.'
  );
  ?>
<div class="form-actions">
    <?php echo form_submit(
      [ 'name' => 'submit',
                                   'class' => 'btn btn-primary',
                                   'value' => 'Print Labels (PDF)' ]
    ); ?>
            <a href="/admin/programs" class="btn btn-default">Cancel</a>
        </div>
  <?php
  echo form_close();
  ?>

<p>
Or: <a href="/admin/programs/labels_print/<?php echo $program_id; ?>"
target="_blank" class="btn btn-sm">Print as HTML</a>
</p>

<table class="table table-striped">
<thead>
<tr>
    <th>Grade</th> <th>Classroom</th> <th>Students</th> <th>Pages</th>
</tr>
</thead>
<tbody>
  <?php
  $students = 0;
  $pages    = 0;
  foreach($classrooms as $c): ?>
            <tr>
                <td><?php echo $c->grade_name; ?></td>
                <td><?php echo $c->name; ?></td>
                <td><?php echo $c->count;
                  $students += $c->count; ?></td>
                <td><?php echo ceil($c->count / $labels_per_page);
                  $pages += ceil($c->count / $labels_per_page); ?></td>
            </tr>
          <?php
  endforeach;
  ?>
<tr>
    <td><strong>Total</strong></td>
    <td><strong><?php echo $students; ?></strong></td>
    <td><strong><?php echo $pages; ?></strong></td>
    </tr>
    </tbody>
</table>
<?php     endif; ?>
