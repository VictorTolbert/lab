<?php echo $site_header; ?>
<div class="hero-image" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/error/hero_error_3.jpg'); background-position: center; min-height: 700px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center top40">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center top40">Thank You!</h1>';}?>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>
		<div class="col-sm-10 col-sm-offset-1">
				<div class="top20">
				<?php if(!empty($event['event_type']) && ($event['event_type'] == 'event_prospecting' || $event['event_type'] == 'event_prospect_kiosk')){?>
					<p class="text-center">Thank you for expressing your interest to help families who are providing a home for vulnerable children.</p> <p>We will be in touch shortly!</p>
				<?php }else{?>
					<p class="text-center">Thank you for attending the event and expressing your interest to help vulnerable children who are in the foster care system.</p> 
					
					 <p>If you have any questions please feel free to reach out to <?php echo $this->events_model->get_event_contact_name($event);?> at <?php echo '<a href="mailto:'.$event['event_contact_email'].'">'.$event['event_contact_email'].'</a>';?>
				<?php } ?>
				</div>
			</div>
		</div>
	 </div>
	 
</div>
<?php if(!empty($event['event_type']) && $event['event_type'] == 'event_prospect_kiosk' && !empty($event['id_event'])){?>
	<script>
		window.setTimeout(function() {	location.href = "<?php echo base_url();?>serve/?e=<?php echo url_enc($event['id_event']);?>";}, 3000);
	</script>
<?php }?>
<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->