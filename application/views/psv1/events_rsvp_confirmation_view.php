<?php echo $site_header; ?>
<?php 
		
		
		$map_url = 'https://www.google.com/maps/place/'.urlencode($event['event_address_street']).'+'.urlencode($event['event_address_city']).'+'.urlencode($event['event_address_state']).'+'.urlencode($event['event_address_zip']);
		
?>
<div class="container">
	<form class="form" action="<?php echo base_url();?>form/savevolunteeragreement" method="post">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php //echo $this->session->flashdata('msg'); ?>
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Thank you!</h1>
				<div class="top20">
					<p class="text-center">Thank you for registering for the event. You should receive an email with all of the event details below.</p> 
					<p class="text-center">We look forward to seeing you at the event!</p> 
					
					<div class="well col-xs-10 col-xs-offset-1">
						<fieldset>
							<legend>Event Details - <?php echo $this->events_model->get_event_name($event);?></legend>
								<ul class="list-unstyled event-details-list">
									<li class="top20"><i class="fas fa-calendar-o"></i> <?php echo format_date($event['event_date_start'], 'long_date');?></li>
									<li class="top20"><i class="fas fa-clock-o"></i> <?php echo format_date($event['event_date_start'], 'time', $event['event_time_zone'], 1).' '.$this->events_model->standardize_tz($event['event_time_zone']);?></li>
									<?php 
										if(!empty($event['is_virtual'])){
											echo '<li class="top20"><i class="fas fa-map-marker" aria-hidden="true"></i> Hosted online';
										}else{
											echo '<li class="top20"><i class="fas fa-map-marker" aria-hidden="true"></i> '.$event['event_address_street'].',  '.$event['event_address_city'].', '.$event['event_address_state'].' '.$event['event_address_zip'].' <a href="'.$map_url.'" target="_blank"><small>[view on map]</small></a></li>';
										}
									?>
									<?php if(empty($event['is_virtual'])){?>
										<li class="top20"><i class="fas fa-child"></i> <?php echo $this->events_model->get_childcare_text($event);?></li>
									<?php }?>
									<li class="top20"></li>
								</ul>
						</fieldset>
					</div>
					<div class="col-xs-10 col-xs-offset-1">
			
					 <p>If you have any questions please feel free to reach out to <?php echo $this->events_model->get_event_contact_name($event);?> at <?php echo '<a href="mailto:'.$event['event_contact_email'].'">'.$event['event_contact_email'].'</a>';?></p>
					 </div>

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