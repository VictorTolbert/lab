<h1 class="col-md-12 center">System Alerts</h1>

<form class="col-md-12 system-alerts-form" method="post" action="<?= site_url('/admin/system-alert') ?>">
  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
  <input type="hidden" name="alert_name" value="main_system_alert">
<?
if ($success_message || $this->session->flashdata('success_message')) { ?>
  <div class="alert alert-success">
    <?= $success_message ?>
    <?= $this->session->flashdata('success_message') ?>
  </div>
<? }

if ($error_message || $this->session->flashdata('error_message')) { ?>
  <div class="alert alert-danger">
    <?= $error_message ?>
    <?= $this->session->flashdata('error_message') ?>
  </div>
<? } ?>
  <div class="jumbotron container">
    <p><strong>Select the location(s) where you would like the alert to appear.</strong></p>
    <div class="row">
      <div class="col-xs-12 col-md-3">
        <input type="checkbox" name="system_alert_locations[home_page]" value="home/dashboard" <?php echo !empty($system_alert_with_locations['system_alert_locations']['home_page']) ? 'checked' : '' ?>>
        <label for="system_alert_locations['home_page']">Home Page</label>
        <input type="checkbox" name="system_alert_locations[student_dashboard]" value="student/dashboard" <?php echo !empty($system_alert_with_locations['system_alert_locations']['student_dashboard']) ? 'checked' : '' ?>>
        <label for="system_alert_locations['student_dashboard']">Student Dashboard</label>
      </div>
      <div class="col-xs-12 col-md-3">
      <input type="checkbox" name="system_alert_locations[public_dashboard]" value="sponsor/(:any)" <?php echo !empty($system_alert_with_locations['system_alert_locations']['public_dashboard']) ? 'checked' : '' ?>>
      <label for="system_alert_locations[public_dashboard]">Public Dashboard</label>
        <input type="checkbox" name="system_alert_locations[admin]" value="^admin" <?php echo !empty($system_alert_with_locations['system_alert_locations']['admin']) ? 'checked' : '' ?>>
        <label for="system_alert_locations[admin]">Locker</label>
      </div>
    </div>
    <div class="form-group">
      <label for="color_theme">Select A Color For The Alert</label>
      <div class="controls">
      <input class="form-control" type='text' name="alert_color" id="input_color_theme" value="<?= ($system_alert_with_locations['alert_color']) ? $system_alert_with_locations['alert_color'] : '#f2dede'?>"/>
    </div>
    <div>
      <p>System alerts will be used to alert all of our public users if a system wide error occurs.</p>
      <textarea class="col-12" name="alert_message" id="systemAlert" cols="30" rows="10"><?php echo ($system_alert_with_locations['alert_message']) ?: ''; ?></textarea>
      <p class="system-alert-character-counter">Max Character Limit: <span>500</span></p>
    </div>
    <div>
      <input type="submit" value="Submit" class="btn btn-primary">
      <a href="<?php echo site_url('admin/delete-system-alert/main_system_alert'); ?>" class="btn btn-danger">Remove Alert</a>
    </div>
  </div>
</form>
