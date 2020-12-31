<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php $browser = get_users_web_browser(); ?>

<?= $browser['name'] ?><br>
<?= ellipsify('This is a longer than expected string', 16) ?><br>
<?= get_remote_file_size('http://cominex.net/assets/img/background.jpg') ?><br>
<?= relative_time('2020-11-17T12:00:00') ?><br>
<?= relative_time('2020-12-25T12:00:00') ?><br>
<?= get_week_of_month(date("d", strtotime('2020-12-12T12:00:00'))) ?><br>
<?= get_subdomain() ?><br>
<?= convert_seconds_to_human_time(6000) ?><br>
<?= slugify('This is How we do it') ?><br>
<?= stringify('as333d#$!#-+5') ?><br>
<?= url_enc('http://google.com?q=search&foo=bar') ?><br>
<?= url_dec('aHR0cDovL2dvb2dsZS5jb20%2FcT1zZWFyY2gmZm9vPWJhcg') ?><br>
<?= config_item('language') ?><br>

<code>in_arrayi('foo', ['foo', 'bar', 'baz'])</code>: <?= in_arrayi('foo', ['foo', 'bar', 'baz']) ?>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', false, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
