<?php echo $site_header; ?>
<div class="container">
	<form class="form" action="<?php echo base_url();?>form/savevolunteeragreement" method="post">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Thank you!</h1>
				<div class="top20">
					<p>Thank you for signing the volunteer agreement. Your Promise advocate or team leader will let you know if there is any other information needed.</p> 
			
					 <p>Thank you for serving!</p>
					 <p class="text-center">
					 <a href="<?php echo base_url();?>form/volunteeragreement?flushsession=1" class="btn btn-primary btn-lg">Sign Out</a>

				</div>
			</div>
		</div>
	</form>
</div>

<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->