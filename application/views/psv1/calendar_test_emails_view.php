<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_ids								= array();
$in_active									= array();
$in_potential								= array();
$past_served_possible_count 	= 0;
$name = '<small></small>';

$update_button_showed		= false;
?>
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>calendar">
						Calendar
					</a>
				</li>
				<li class="active">Test Calendar Event Emails</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Test Calendar Event Emails</h1>
				
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>calendar/send_upcoming_event_reminder" method="post" id="form-calendar-test-emails">
					<?php echo $this->session->flashdata('msg'); ?>
					<fieldset>
						<legend>Select options for test email</legend>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Select an event</label>
								<div class="col-sm-4 col-xs-12">
									<select name="id_event" class="form-control input-lg" required>
										<option value="">Select an event</option>
										<?php if(!empty($events)){
												foreach($events as $cur){
													echo '<option value="'.url_enc($cur['id_event']).'">'.$cur['event_name'].' - '.date_offset('m/d/Y g:iA', $cur['event_date_start'], $cur['event_time_zone']).'</option>';
												}
										}?>
									</select> 
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Select recipient</label>
								<div class="col-sm-4 col-xs-12">
									<select name="id_people" class="form-control input-lg" required>
										<option value="<?= url_enc($user['id_people']);?>">Me (<?= $user['people_email_primary'];?>)</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Select reminder round</label>
								<div class="col-sm-4 col-xs-12">
									<select name="round" class="form-control input-lg">
										<option value="0">1st Reminder Email</option>
										<option value="1">2nd Reminder Email</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="row top20">
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Send <i class="fa fa-paper-plane"></i></button>
							</div>
						</div>
						
					</fieldset>
					
					<input type="hidden" name="mode" value="test">
				</form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>
	$(document).ready(function() {
		var gmap_input 			= document.getElementById('manage-meal-events-place-address');
		google.maps.event.clearInstanceListeners(gmap_input);
		var gmap_input_autocomplete 	= new google.maps.places.Autocomplete(gmap_input);

		google.maps.event.addListener(gmap_input_autocomplete, 'place_changed', function () {
			var place = gmap_input_autocomplete.getPlace();
			document.getElementById('manage-meal-events-place-id-place').value = '';
			document.getElementById('manage-meal-events-place-street-number').value = place.address_components[0].long_name;
			document.getElementById('manage-meal-events-place-street').value = place.address_components[1].long_name;
			document.getElementById('manage-meal-events-place-city').value = place.address_components[2].long_name;
			document.getElementById('manage-meal-events-place-state').value = place.address_components[4].short_name;
			document.getElementById('manage-meal-events-place-zip').value = place.address_components[6].long_name;
			document.getElementById('manage-meal-events-place-county').value = place.address_components[3].short_name;
			document.getElementById('manage-meal-events-place-country').value = place.address_components[5].short_name;
			document.getElementById('manage-meal-events-place-lat').value = place.geometry.location.lat();
			document.getElementById('manage-meal-events-place-lng').value = place.geometry.location.lng();
			document.getElementById('manage-meal-events-place-id-provider').value = place.place_id;
			
		});
	});
</script>
</body>
</html>