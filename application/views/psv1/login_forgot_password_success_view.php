<?php echo $site_header; ?>
<div class="container">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
			<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
		</div>
	</div>
	<div class="row top10">
	<?php echo $this->session->flashdata('msg'); ?>

		<div class="col-sm-10 col-sm-offset-1">
			<h1 class="text-center">Password Reset Email Sent!</h1>
			
			<div class="top20">
				<div class="col-sm-8 col-sm-offset-2 well">
					<p class="text-center">Please wait up to 3 minutes to receive the email.</p><p class="text-center"> If you do not receive it make sure to check your SPAM.</p> 
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php echo $site_footer;?>
