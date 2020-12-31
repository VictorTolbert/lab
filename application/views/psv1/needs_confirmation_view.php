<?php echo $site_header; ?>
<div class="container">
	
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Thank you!</h1>
				<div class="top20 text-center">
					<?= $content;?>

				</div>
				<div class="top60">
				</div>
			</div>
		</div>
	
</div>

<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->