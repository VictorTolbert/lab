<!-- Header Section -->
<?php echo $site_header;

$random 		= rand(1,2);
//$event_started	= false;

?>
<div class="hero-image" style=" background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/families/hero_families_<?= $random;?>.jpg'); background-position: top center; min-height: 500px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">This Event Will Start Shortly</h1>';}?>
		<div class="col-sm-12 main container container-<?= $env_scope;?>">
		<div class="row top10">
			<div class="container">
				<div class="well col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
					<form class="form form-horizontal" action="<?= base_url();?>/event/save_check_in" method="post">
					<?php 
						if(!empty($rsvp['name_first'])){
							echo '<h3>Welcome '.format_name($rsvp['name_first'].'!<br /><small><a href="'.base_url().'events/virtual_event_waiting_room/?clear_session=1&e='.url_enc($event['id_event']).'">Not '.$rsvp['name_first'].'? Click here.</a></small></h3>';
						}else{
							echo '<h3>Welcome!</h3>';
							echo '<p class="text-center">Please check-in to the event by entering your email address below.<br /><small>If you have already RSVPed for this event, then please use the same email address that you used with your RSVP.</small></p>';
							echo '<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1"> <div class="form-group"><input type="email" name="people_email_primary" class="form-control" placeholder="Enter your email address"></div><button type="submit" class="btn btn-primary">Check-in</button></div>';
							echo '<input type="hidden" value="'.url_enc($event['id_event']).'" name="id_event_encoded">';
						}
						echo '<div class="col-sm-12 col-xs-12">';
						if(!empty($content['body'])){ 
							echo $content['body']; 
						}elseif($event_started){
							echo '<p class="text-center">The event has started  - please click the button below to join the event.</p>';
							echo '<p class="text-center"><a class="btn btn-default" href="'.$redirect.'">Join Event</a></p>';
						}else{
							echo '<p class="text-center">The event has not started yet - please wait...</p>';
							echo '<p class="text-center">You will be automatically redirected to the event in:<br /><strong><span id="clock"></span></strong><br /><small>The event begins '.simple_date_offset('l, F jS, Y g:ia', $event['event_date_start'], $event['event_time_zone']).' '.$this->events_model->get_tz_abbrev($event['event_time_zone']).' </small></p>';
						}
						echo '</div>';
					?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
	
<?php 
	if(!empty($_GET['test_redirect'])){
		echo '<a href="" class="btn btn-default btn-test">Test Redirect</a>';
	}
?>
    
<!-- Footer Section -->

<?php echo $site_footer; ?>
<?php 
	$event_date			= date_offset('Y/m/d H:i', ($event['event_date_start'] - $event['virtual_early_start']), $event['event_time_zone']);
	$event_date_test 	= date_offset('Y/m/d H:i:s', time()+20, $event['event_time_zone']);
?>
<script src="<?php echo base_url();?>js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url();?>js/moment-timezone.js"></script>
<script>
$(document).ready(function() {
	moment.tz("<?php echo $event_date;?>", "<?php echo $event['event_time_zone'];?>");
	$('#clock').countdown('<?= $event_date;?>', function(event) {
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
		$('#clock').countdown('<?= $event_date_test;?>', function(event) {
		  $(this).html(event.strftime('%D days %H:%M:%S'));
		}).on('finish.countdown', function() {
			window.location = '<?php echo $redirect;?>';
		});
	});
	</script>
<?php }?>


</body>
</html>