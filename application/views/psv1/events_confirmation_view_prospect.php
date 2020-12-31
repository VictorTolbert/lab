<?php echo $site_header; ?>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 top20">
			<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
		</div>
	</div>
	<div class="row top10">
	<?php echo $this->session->flashdata('msg'); ?>
		<div class="col-sm-10 col-sm-offset-1">
			<h1 class="text-center">Thank you!</h1>
			<div class="top20">
				<p>Thank you for your interest in Live The Promise.</p> 

				 <p>We will be in touch soon with more infomation about upcoming awareness and orientation events.</p>
				 <p>If you have any questions in the meantime please feel free to reach out to <?php echo $this->events_model->get_event_contact_name($event);?> at <?php echo '<a href="mailto:'.$event['event_contact_email'].'">'.$event['event_contact_email'].'</a>';?>
			</div>
		</div>
	</div>
</div>



<!-- top navigation -->
<?php echo $site_footer;?>
<script>
window.setTimeout(function() {
    window.location.href = '<?php echo $redirect;?>';
}, 5000);


</script>

<!-- /top navigation -->