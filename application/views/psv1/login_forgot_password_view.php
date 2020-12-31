<?php echo $site_header; ?>
<div class="container">
	<form role="form" action="<?php echo base_url();?>forgotpassword?key=<?php echo $key;?>" method="post" id="login-form"> 
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>

			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Password Reset</h1>
				<h2 class="text-center">Enter Your Email Address</h2>
				<div class="top20">
					<div class="col-sm-8 col-sm-offset-2 well">
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="email" name="email" placeholder="Your Email" value="<?php echo set_value('email', $email);?>">
							<span class="text-danger align-center"><?php echo form_error('email'); ?></span>
						</div>
						<div class="form-group <?php echo $class_first_name;?>">
							<input type="text" class="form-control input-lg" id="name_first" name="name_first" placeholder="Your First Name" value="<?php echo set_value('name_first');?>">
							<span class="text-danger align-center"><?php echo form_error('name_first'); ?></span>
						</div>
						
						 <div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-next" name="btn-next"><i class="fa fa-envelope"></i><span id="btn-next-text"> Send Reset Instructions</span> </button>
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
		<?php if(!empty($people['id_people'])){?>
			<input type="hidden" name="id_people_encoded" value="<?php echo $user['id_people_encoded'];?>">
		<?php }?>
	</form>
</div>

<!-- Footer -->
<?php echo $site_footer;?>
