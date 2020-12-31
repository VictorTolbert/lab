<?php echo $site_header; ?>
<div class="container">
	<form class="form" action="<?php echo base_url();?>form/savevolunteeragreement" method="post">
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
					<p>Thank you for attending the training event and expressing your interest to help vulnerable children who are in the foster care system.</p> 
					 <p>The next step will be for us to find a foster family that will be the best fit for you based on your selected interests and location. We will be in touch as soon as we find a family that is a good fit for you.</p>
					 <p>If you have any questions in the meantime please feel free to reach out to <?php echo $this->events_model->get_event_contact_name($event);?> at <?php echo '<a href="mailto:'.$event['event_contact_email'].'">'.$event['event_contact_email'].'</a>';?>

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