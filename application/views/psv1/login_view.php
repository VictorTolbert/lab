<!-- Header Section -->
<?php echo $site_header; ?>

<div class="container section-internal container-login-view" id="login">
	<?php echo $this->session->flashdata('msg'); ?>
	<div class="container">
		<div class="row login">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
				<form role="form" action="<?php echo base_url();?>login" method="post" id="login-form"> 
				  <div class="form-group text-center">
					<div class="logo">
						<img src="<?php echo base_url();?>img/ltp_logo_black.png" width="192" height="80">
					</div>
				  </div>
				  <div class="form-group">
					<p class="align-center">Live The Promise<br />Log In</p>
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control input-lg" id="email" name="email" placeholder="Your Email" value="<?php echo set_value('email', $email);?>">
					<span class="text-danger align-center"><?php echo form_error('email'); ?></span>
				  </div>
				  <div class="form-group">
					
					<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" value="<?php set_value('password');?>">
					<span class="text-danger align-center"><?php echo form_error('password'); ?></span>
				  </div>
				  <div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-sign-in"></i> Log In</button>
				  </div>
				  <div class="form-group last-row">
					<label class="checklabel">
						<input type="checkbox"> Remember me
					</label>
					<a href="<?php echo base_url();?>forgotpassword" class="pull-right">Forgot password</a>
				  </div>
				  <?php if(!empty($r)){?>
					<input type="hidden" name="r" id="r" value="<?php echo $r;?>">
				  <?php }?>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Footer Section -->
<?php echo $site_footer; ?>
<script type="text/javascript" src="<?php echo base_url();?>js/login.js"></script>
</body>
</html>