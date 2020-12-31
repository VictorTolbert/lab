<!-- Header Section -->
<?php echo $site_header;

$random 		= rand(1,2);
//$event_started	= false;

if(empty($user['people_email_primary'])){
	$user['people_email_primary'] = null;
}
if(empty($user['name_first'])){
	$user['name_first'] = null;
}

?>
<div class="" style=" background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/families/hero_families_<?= $random;?>.jpg'); background-position: top center; min-height: 500px;">
	<div class=" col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block top40" style="max-height: 100px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">This Event Will Start Shortly</h1>';}?>
		<div class="col-sm-12 main container container-<?= $env_scope;?>">
			<div class="row1">
			<div class="well col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
				
				<?php 
					echo '<h3 class="text-center">'.$event['event_name'].'</h3>';
					/*
					if(empty($_SESSION['user_timezone_offset'])){
						echo '<div id="ajax-target-event-times"><h4 class="text-center">'.date_offset('m/d/Y', $event['event_date_start']).'  '.date_offset('g:i A', $event['event_date_start'], null, null,$event['event_time_zone']).' - '.date_offset('g:i A', $event['event_date_end'], null, null,$event['event_time_zone']).' '.$this->events_model->get_tz_abbrev($event['event_time_zone']).'</h4></div>';
					}else{
						echo '<h4 class="text-center">'.date_offset('m/d/Y', $event['event_date_start']).'  '.date_offset('g:i A', $event['event_date_start']).' - '.date_offset('g:i A', $event['event_date_end']).'</h4>';	
					}
					*/
					
					echo '<div id="ajax-target-event-times"><h4 class="text-center">'.simple_date_offset('m/d/Y', $event['event_date_start'], $event['event_time_zone']).'  '.simple_date_offset('g:i A', $event['event_date_start'], $event['event_time_zone']).' - '.simple_date_offset('g:i A', $event['event_date_end'], $event['event_time_zone']).' '.$this->events_model->get_tz_abbrev($event['event_time_zone']).'</h4></div>';
					
					//echo  $event['event_date_start'];
					if(empty($_SESSION['event_attendee']['id_people'])){
						if(!empty($rsvp['name_first'])){
							echo '<h3 class="text-center">Welcome '.$rsvp['name_first'].'!<br /><br /><small><a href="'.base_url().'events/virtual_event/?clear_session=1&e='.url_enc($event['id_event']).'">Not '.$rsvp['name_first'].'? Click here.</a></small></h3>';
							echo '<p class="text-center"><a href="'.base_url().'events/save_check_in?r='.url_enc($rsvp['id_rsvp']).'&e='.url_enc($event['id_event']).'" class="btn btn-primary">Click to Check-in</a></p>';
						}else{
							echo '<form class="form form-horizontal blockui" action="'.base_url().'events/save_check_in" method="post">';
							echo '<p class="text-center">Please check-in to the event by entering your first name and email address below.</p><p class="text-center"><small>If you have already RSVPed for this event, then please use the same email address that you used with your RSVP.</small></p>';
							echo '<div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
									<div class="form-group">
										<input type="text" name="name_first" id="name_first" value="'.format_name($user['name_first']).'" class="form-control" placeholder="Enter your first name only" required>
									</div>
									<div class="form-group">
										<input type="text" name="email" id="email" value="'.format_email($user['people_email_primary']).'" class="form-control" placeholder="Enter your email address" required>
									</div>
									
									<button type="submit" class="btn btn-primary center-block">Check-in</button>
								</div>';
							echo '<input type="hidden" value="'.url_enc($event['id_event']).'" name="e">';
							echo '<input type="hidden" value="'.url_enc($user['id_people']).'" name="p" id="p">';
							echo '</form>';
						}
					}else{
						echo '<div class="col-sm-12 col-xs-12">';
						if(!empty($content['body'])){ 
							echo $content['body']; 
						}elseif($event_in_progress){
							echo '<p class="text-center">The event has started  - please click the button below to join the event.</p>';
							echo '<p class="text-center"><a class="btn btn-default" href="'.$redirect.'">Join Event</a></p>';
						}else{
							echo '<p class="text-center">The event has not started yet - please wait...</p>';
							echo '<p class="text-center">You will be automatically redirected to the event in:<br /><strong><span id="clock"></span></strong><br /><small>The event begins '.date_offset('l, F jS, Y g:ia', $event['event_date_start'], $event['event_time_zone']).' '.$this->events_model->get_tz_abbrev($event['event_time_zone']).' </small></p>';
						}
						echo '</div>';
					}
					
					if(!empty($_SESSION['event_attendee']['id_people']) && !empty($event['virtual_event_type'])){
						echo '<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 well top30 xs-top30">';
						echo '<h2 class="text-center">Is Your Device Ready?</h2>';
						switch(strtolower($event['virtual_event_type'])){
							case 'pshosted':
								echo '<div class="row"><p> To have the best event experience we highly recommend using the latest version of Firefox or Chrome. Other web browsers have been known to have issues and will not provide the best event experience for you.</p></div>';
							break;
							case 'zoom':
								echo '<div class="row1"><p class="text-center"><img src="'.base_url().'img/zoom_logo.png" class="center-block img-responsive" style="max-height: 80px;"></p>';
								echo '<div class="row1"><p class="text-center">This event will take place on Zoom, so please make sure that you have zoom installed before entering the event.</p></div>';
								echo '<div class="row1">';
								echo '<div class="col-sm-4 text-center"><a class="btn btn-primary btn-block" href="https://zoom.us/support/download" target="_blank"><i class="fas fa-desktop"></i> Desktop Downloads</a></div>';
								echo '<div class="col-sm-4 text-center"><a class="btn btn-primary btn-block" href="https://itunes.apple.com/us/app/id546505307" target="_blank"><i class="fab fa-apple"></i> Download in App Store</a></div>';
								echo '<div class="col-sm-4 text-center"><a class="btn btn-primary" href="https://play.google.com/store/apps/details?id=us.zoom.videomeetings" target="_blank"><i class="fab fa-google-play"></i> Download in Google Play</a></div>';
								echo '</div>';
							break;
						}
						echo '</div>';		
					}
				?>
			
			</div>
		</div>
	</div>
	<?php 
		if(!empty($_GET['test_redirect'])){
			echo '<div class="col-sm-12 col-xs-12"><p class="text-center"><a href="#" class="btn btn-default btn-test">Test Timer Redirect</a></p><p class="text-center"><a href="'.$redirect.'?test_redirect=1" class="btn btn-default">Test Redirect</a></p>';
			echo '</div>';
		}
	?>
</div>
</div>
</div>
	

    
<!-- Footer Section -->

<?php echo $site_footer; ?>

<?php 
	$event_date			= date('Y/m/d H:i', ($event['event_date_start'] - $event['virtual_early_start']));
	$event_date_test 	= date_offset('Y/m/d H:i:s', time()+30);
?>
<script src="<?php echo base_url();?>js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url();?>js/moment-timezone.js"></script>
<script>
$(document).ready(function() {
	
	$('#email').on('change', function(){
		$('#p').val('');
	});
	$('#name_first').on('change', function(){
		$('#p').val('');
	});
	
	var event_start = moment.tz("<?php echo $event_date;?>", "<?php echo $event['event_time_zone'];?>");
	//console.log(event_start.toDate());
	$('#clock').countdown(event_start.toDate(), function(event) {
	  $(this).html(event.strftime('%D days %H:%M:%S'));
	}).on('finish.countdown', function() {
		window.location = '<?php echo $redirect;?>';
	});
});
</script>
<?php 
	if(!empty($user['id_people']) && $user['id_people'] == 101){
?>
	<script>
	$('.btn-test').click(function(e){
		e.preventDefault();
		var event_test_start = moment.tz("<?php echo $event_date_test;?>", "<?php echo $event['event_time_zone'];?>");
		$('#clock').countdown(event_test_start.toDate(), function(event_test) {	
		  $(this).html(event_test.strftime('%D days %H:%M:%S'));
		}).on('finish.countdown', function() {
			window.location = '<?php echo $redirect;?>?test_redirect=1';
		});
	});
	</script>
<?php }?>
</body>
</html>