<?php echo $site_header; ?>
<div class="container">
	<form class="form" action="<?php echo base_url();?>form/<?php echo $view;?>agreement" method="post">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>

			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center"><?php echo ucfirst($view);?> Agreement - Get Started </h1>
				<h2 class="text-center">Enter Your Email Address</h2>
				<div class="top20">
					<div class="col-sm-8 col-sm-offset-2 well">
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="email" name="email" placeholder="Your Email" value="<?php echo set_value('email', $email);?>">
							<span class="text-danger align-center"><?php echo form_error('email'); ?></span>
						</div>
						 <div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Next <i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<input type="hidden" name="id_people_encoded" value="<?php echo $user['id_people_encoded'];?>">
		<input type="hidden" name="id_church_encoded" value="<?php echo $id_church_encoded;?>">
		<input type="hidden" name="id_affiliate_encoded" value="<?php echo $id_affiliate_encoded;?>">
		<input type="hidden" name="c" value="<?php echo $id_church_encoded;?>">
		<input type="hidden" name="a" value="<?php echo $id_affiliate_encoded;?>">
		<input type="hidden" name="r" value="<?php echo url_enc(base_url().'form/'.$view.'agreement');?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>

<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->