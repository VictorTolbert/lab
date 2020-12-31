<?php echo $site_header; ?>
<div class="wrapper" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>');">
<div class="container">
	<form class="form" action="<?php echo base_url();?>login" method="post">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="row top60">
		<?php echo $this->session->flashdata('msg'); ?>

			<div class="col-sm-10 col-sm-offset-1">
				<div class="col-sm-8 col-sm-offset-2 well">
					<h1 class="text-center">Welcome Back</h1>
					<h2 class="text-center">Enter Your Password</h2>
					
					<?php echo $this->session->flashdata('msg'); ?>
					
					<div class="top20">
						<div class="form-group">
							<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Enter your password" value="<?php echo set_value('password', $password);?>">
							<span class="text-danger align-center"><?php echo form_error('password'); ?></span>
						</div>
						 <div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Login <i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" class="form-control input-lg" id="email" name="email" placeholder="Your Email" value="<?php echo set_value('email', $email);?>">
		<input type="hidden" name="id_people_encoded" value="<?php echo $user['id_people_encoded'];?>">
		<input type="hidden" name="bypass_login" id="bypass_login" value="0">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
		<?php if(!empty($r)){?>
			<input type="hidden" name="r" id="r" value="<?php echo $r;?>">
		  <?php }?>
		 
		  <?php if(!empty($ralt)){?>
		<div class="form-group">
			<div class="row text-center"><br />
				<a href="<?php echo base_url();?>serve/?bypass_login=1" class="btn btn-default" name="btn_bypass_login" id="btn-bypass-login">Continue as New Volunteer</a>
			</div>
		</div>
		<?php }?>
	</form>
</div>
</div>


<?php 
	if(!$this->security_model->has_gdpr_cookie()){
		echo $this->security_model->make_gdpr_accost();
	}
?>
<!-- footer navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->