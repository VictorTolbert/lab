<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin | Print Code Labels | <?php echo $program->name; ?></title>
      <link href="<?php echo asset_url(auto_version('css/admin_styles.css')); ?>" rel="stylesheet">
  </head>

  <body>
    <table class="labels">
        <tbody>
<?php
        $labels_per_row = 3;
        echo '<tr>';
foreach ($classrooms as $key => $classroom) {
  $grade_name = $classroom->grade_name;
  if (strcasecmp($grade_name, 'Kindergarten') == 0) {
    $grade_name = 'K';
  } elseif (strcasecmp($grade_name, 'Pre-k') == 0) {
    $grade_name = 'PK';
  }

  if ($labelType == 'leader') {
    $code = !empty($classroom->team_leader_code) ? substr($classroom->team_leader_code, 0, 4) . '-' . substr($classroom->team_leader_code, 4, 8) : null;
  } elseif ($labelType == 'member') {
    $code = !empty($classroom->team_member_code) ? substr($classroom->team_member_code, 0, 4) . '-' . substr($classroom->team_member_code, 4, 8) : null;
  }

  for ($i = 0; $i < $labels_per_page; $i++) {
    if ($labelType == 'member' && $i % $labels_per_row == 0) {
         echo '</tr><tr>';
    } elseif ($labelType == 'leader' && $key % $labels_per_row == 0) {
         echo '</tr><tr>';
    }

    echo "<td>{$classroom->name} - {$grade_name} - {$classroom->abbreviation} <br>";
    echo get_program_domain($program->unit_id);
    if ($labelType == 'member') {
       echo "<div class='code'>Code:  $code </td></div>";
    } elseif ($labelType == 'leader') {
       echo "<div class='code'>Teacher:  $code <br></div><strong>NOT</strong> for students</td> ";
    }
  }
}

        echo '</tr>';


?>
        </tbody>
    </table>
</body>
