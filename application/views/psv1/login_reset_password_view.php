<?php echo $site_header; ?>
<div class="container">
	<form role="form" action="<?php echo base_url();?>resetpassword?p=<?php echo url_enc($id_people);?>&key=<?php echo $key;?>" method="post" id="login-form"> 
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>

			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Password Reset</h1>
				<h2 class="text-center">Enter a new password</h2>
				<div class="top20">
					<div class="col-sm-8 col-sm-offset-2 well">
						<div class="form-group">
							<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" value="<?php set_value('password');?>">
							<span class="text-danger align-center"><?php echo form_error('password'); ?></span>
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" id="password_confirm" name="password_confirm" placeholder="Confirm Password" value="<?php set_value('password');?>">
							<span class="text-danger align-center"><?php echo form_error('password_confirm'); ?></span>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-circle-o-notch"></i> Reset</button>
						</div>
						<div class="form-group hide" id="wrapper-bypass">
							<div class="row text-center"><br /><br />
								<button type="submit" class="btn btn-default" name="btn_bypass_login" id="btn-bypass-login">Bypass Login</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if(!empty($r)){?>
			<input type="hidden" name="r" id="r" value="<?php echo url_enc($r);?>">
		<?php }?>
	</form>
</div>

<!-- Footer -->
<?php echo $site_footer;?>
