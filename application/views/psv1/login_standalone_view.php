<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Promise Serves</title>
	<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="ltp-frontend ltp-body" style="padding-top: 0px;">
<div class="wrapper" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>')">
<div class="container" style="padding-top: 10%;">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="<?php echo base_url();?>login" method="post" id="login-form"> 
					<div class="form-group text-center">
						<div class="logo">
							<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;" height="150">
						</div>
						<?php if(!empty($view)){
								switch(strtolower($view)){
									case 'ltp':
										echo '<div class="row"><div class="alert alert-info well col-sm-10 col-sm-offset-1 col-xs-12"><p class="text-center".Welcome to the Promise Serves Advocate Resources Login!</p><p class="text-center">If you already have a Promise Serves account then please login below.</p><p class="text-center">If you do not have a Promise Serves account then please contact your regional manager or affiliate contact so they can create an account for you.</p></div></div>';
									break;
								}
							}	
						?>
					  </div>
						<fieldset>
						<?php echo $this->session->flashdata('msg'); ?>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="<?php echo $email;?>">
								<span class="text-danger align-center"><?php echo form_error('email'); ?></span>
							</div>
							<div class="form-group <?php echo $class_first_name;?>">
								<input type="text" class="form-control input-lg" id="name_first" name="name_first" placeholder="Your First Name" value="<?php echo set_value('name_first');?>">
								<span class="text-danger align-center"><?php echo form_error('name_first'); ?></span>
							</div>
							<div class="form-group">
								<?php if(!empty($_GET['passreset'])){ ?>
									<input type="password" id="password" style="position: fixed; top: -999999999999px;" placeholder="Password" name="pass" tabindex="-1">
								<?php }?>
								<input class="form-control" placeholder="Password" name="password" type="password" value="" <?php if(!empty($_GET['passreset'])){ echo 'autocomplete="new-password"';}?>>
								<span class="text-danger align-center"><?php echo form_error('password'); ?></span>
								<br />
								<p class="text-center"><small><a href="<?php echo base_url();?>forgotpassword">Forgot Password? Click here to reset it.</a></small></p>
								<br />
							</div>
							<?php if($this->security_model->has_gdpr_cookie()){?>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="1">Remember me for 90 days on this device
								</label>
							</div>
							<?php }?>
							<div class="row text-center top20"><input type="submit" value="Login" class="btn btn-primary"></div>
							 <?php if(!empty($r)){?>
								<input type="hidden" name="r" id="r" value="<?php echo $r;?>">
							  <?php }?>
							  
							  <?php if(!empty($ralt)){?>
							<div class="form-group">
								<div class="row text-center"><br />
									<a href="<?php echo $ralt;?>" class="btn btn-default">Bypass Login</a>
								</div>
							</div>
							<?php }?>
							  
						</fieldset>
					</form>
					
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</div><!-- /.container -->	
</div>
<!------ GRPR Cookie --->
<?php 
	if(!$this->security_model->has_gdpr_cookie()){
		echo $this->security_model->make_gdpr_accost();
	}
?>
</body>
<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script>
	$('#login-form').on('submit', function(){
		$('#password').remove();
	});
	$(document).ready(function(){
		$('#ltp-gdpr-accept').click(function(){
			$.ajax({
				url: '//'+window.location.hostname+'/home/setgdprcookie',
				type: "GET",
				success: function(ajaxdata) {
					console.log(ajaxdata);
					var result = JSON.parse(ajaxdata);
					if(result.st == 1){
						/* $('#ltp-gdpr-accost').slideDown('slow');*/
						$('#ltp-gdpr-accost').hide();
					}
				}
			});
		});
	});
	
</script>
</html>