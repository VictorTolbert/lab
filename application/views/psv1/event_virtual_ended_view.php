<!-- Header Section -->
<?php echo $site_header;

$random = rand(1,2);
?>
<div class="hero-image" style=" background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/families/hero_families_<?= $random;?>.jpg'); background-position: top center; min-height: 500px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">This Event Has Ended</h1>';}?>
		<div class="col-sm-12 main container container-<?= $env_scope;?>">
		<div class="row top10">
			<div class="container">
				<div class="well col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
					<?php if(!empty($content['body'])){ 
							echo $content['body']; 
						}else{
							if(!empty($event)){
								echo '<h3 class="text-center">'.$event['event_name'].'</h3>';
								echo '<h5 class="text-center">'.date_offset('m/d/Y', $event['event_date_start']).'  '.date_offset('g:i A', $event['event_date_start']).' - '.date_offset('g:i A', $event['event_date_end']).' ' .$this->events_model->get_tz_abbrev($event).'</h5>';
							}
							echo '<p class="text-center">Sorry, but this event has ended.</p><p class="text-center">If you are interested in finding other virtual events then please click the button below.</p>';
							echo '<p class="text-center"><a class="btn btn-default" href="'.base_url().'rsvp/?e=0&event_format=virtual">View Upcoming Virtual Events</a></p>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
	

    
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>