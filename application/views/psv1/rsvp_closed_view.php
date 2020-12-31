<?php echo $site_header; ?>
<div class="container page-rsvp-select-event">
	<form class="form" action="<?php echo base_url();?>serve" method="post">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?= $header_image;?>" class="img-responsive center-block">
			</div>
		</div>
		<div class="col-xs-12 top10">
		<?php echo $this->session->flashdata('msg'); ?>

			<div class="col-sm-10 col-sm-offset-1">
				<div class="row top10">
					<?php echo $this->session->flashdata('msg'); ?>
					<h2 class="text-center"><?php echo $this->events_model->get_event_name($event);?></h2>
					<?php if(empty($event['hide_change_event'])){?>
						<p class="text-center"><a href="<?php echo base_url();?>rsvp/?e=0">[Change Event]</a></p>
					<?php }?>
					<div class="col-sm-10 col-sm-offset-1">
						<?php 
							echo '<ul class="list-inline text-center">';
							echo '<li class="list-inline-item"><i class="fas fa-calendar-o" aria-hidden="true"></i> '.format_date($event['event_date_start'], 'long_date',$event['event_time_zone'], 1).'</li>
									<li class="list-inline-item"><i class="fas fa-clock-o" aria-hidden="true"></i> '.format_date($event['event_date_start'], 'time', $event['event_time_zone'], 1).' '.$this->events_model->standardize_tz($event).'</li>';
							if(!empty($event['is_virtual'])){
								$cur_location	= 'Hosted online';
							}
							if(!empty($cur_location)){ 
								echo '<li class="list-inline-item"><i class="fas fa-map-marker" aria-hidden="true"></i> '.$cur_location.' </li>';
							}
							if(empty($event['is_virtual'])){
								echo '<i class="fas fa-child"></i> '.$this->events_model->get_childcare_text_short($event).'</li></ul>';
							}
							
						?>
					</div>
				</div>
				<h1 class="text-center">RSVP Event Registration Closed</h1>
				<p class="text-center"><strong>Sorry, but this event can no longer accept RSVPs.</strong></p>
				
			</div>
		</div>
		
		<input type="hidden" name="id_people_encoded" value="<?php echo $user['id_people_encoded'];?>">
	</form>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this affiliate?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->