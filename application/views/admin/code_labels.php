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
        $labels_per_page = 30;
        $labels_per_row  = 3;
        // Show Team Member Codes First
        echo '<tr>';
foreach ($classrooms as $key => $classroom) {
  $classroom->team_member_code = !empty($classroom->team_member_code) ? substr($classroom->team_member_code, 0, 4) . '-' . substr($classroom->team_member_code, 4, 8) : null;
  $classroom->grade_name       = ($classroom->grade_name == 'Kindergarten') ? 'K' : $classroom->grade_name;
  $classroom->grade_name       = ($classroom->grade_name == 'Pre-k') ? 'PK' : $classroom->grade_name;
  for ($i = 0; $i < $labels_per_page; $i++) {
    if ($i % $labels_per_row == 0) {
         echo '</tr><tr>';
    }

    echo "<td>{$classroom->name} - {$classroom->grade_name} - {$classroom->abbreviation} <br>";
    echo "www.funrun.com<br>";
    echo "<div class='code'>Code:  $classroom->team_member_code </td></div>";
  }
}

        echo '</tr>';

        // Show Team Leaders Codes Last
        echo '<tr>';
foreach ($classrooms as $key => $classroom) {
  $classroom->team_leader_code = !empty($classroom->team_leader_code) ? substr($classroom->team_leader_code, 0, 4) . '-' . substr($classroom->team_leader_code, 4, 8) : null;
  $classroom->grade_name       = ($classroom->grade_name == 'Kindergarten') ? 'K' : $classroom->grade_name;
  $classroom->grade_name       = ($classroom->grade_name == 'Pre-k') ? 'PK' : $classroom->grade_name;
  if ($key % $labels_per_row == 0) {
    echo '</tr><tr>';
  }

  echo "<td>{$classroom->name} - {$classroom->grade_name} - {$classroom->abbreviation} <br>";
  echo "www.funrun.com<br>";
  echo "<div class='code'>Teacher:  $classroom->team_leader_code <br></div><strong>NOT</strong> for students</td> ";
}

        echo '</tr>';
?>
        </tbody>
    </table>
</body>
