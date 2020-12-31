<h3>Synced Programs!</h3>
<?php
  echo "<ol>";
foreach ($programs_updated as $program) {
  echo "<li>";
  echo $program->name;
  echo "</li>";
}

  echo "</ol>";
?>
