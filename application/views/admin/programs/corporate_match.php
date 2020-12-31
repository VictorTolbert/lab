<h3>Corporate Match</h3>

<?php
if ($this->session->flashdata('success')) {
  echo "<div class='alert alert-success'>{$this->session->flashdata('success')}</div>";
}

if ($message) {
  echo "<div class='alert alert-message'>{$message}</div>";
}

if ($this->session->flashdata('error')) {
  echo "<div class='alert alert-message'>{$this->session->flashdata('error')}</div>";
}

echo "<iframe class='matchWindowHeight' src='" . $cmg_table_url . "' frameborder='0' width='100%'></iframe>";
?>
