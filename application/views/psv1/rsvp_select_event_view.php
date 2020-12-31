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
				<h1 class="text-center">RSVP - Select an Event</h1>
				<div class="top20 xs-top30"></div>
					<?php 
						if(!empty($events)){
							$i =0;
							foreach($events as $cur){
								$cur_address	= $cur['event_address_street'].',  '.$cur['event_address_city'].', '.$cur['event_address_state'].' '.$cur['event_address_zip'];
								$cur_church		= $this->churches_model->get_church_name($cur);
								if(!empty($cur['event_location_detail'])){
									$cur_location		= $cur['event_location_detail'];
								}else{
									$cur_location = $cur_address;
								}
								if($i == 1){
									$striped = 'row-striped';
								}else{
									$striped = '';
								}
								echo '<div class="row '.$striped.'"><div class="col-xs-3 col-sm-3 col-md-2 text-center"><div class="col-xs-12 cal-date-wrapper"><h3 class="display-4"><span class="badge badge-secondary">'.format_date($cur['event_date_start'], 'cal_date_only').'</span></h3><h2>'.strtoupper(format_date($cur['event_date_start'], 'cal_month_abrev', $cur['event_time_zone'])).'</h2></div></div><div class="col-xs-9 col-md-10"><h2 class="text-center">'.$this->events_model->get_event_name($cur).'</h2><ul class="list-inline text-center"><li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.format_date($cur['event_date_start'], 'dotw', $cur['event_time_zone']).'</li><li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> '.format_date($cur['event_date_start'], 'time', $cur['event_time_zone']).'</li>';
								if(!empty($cur['is_virtual'])){
									$cur_location	= 'Hosted online';
								}
								if(!empty($cur_location)){ 
									echo '<li class="list-inline-item"><i class="fa fa-map-marker" aria-hidden="true"></i> '.$cur_location.' </li>';
								}
								echo '<i class="fa fa-child"></i> '.$this->events_model->get_childcare_text_short($cur).'</li>
		</ul><div class="top20 col-xs-8 col-xs-offset-2 col-sm-3 col-sm-offset-4 xs-top10"><a href="'.base_url().'rsvp/?e='.url_enc($cur['id_event']).'" class="btn btn-primary center-block">Select</a></p></div></div></div>'."\r\n\r\n";
								$i = 1 - $i;
							}
						}else{
							echo '<div class="row"><h3 class="text-center">No upcoming events found!</h3></div>';
						}
					?>
				</div>
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