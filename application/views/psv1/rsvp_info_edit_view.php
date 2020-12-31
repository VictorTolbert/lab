<?php echo $site_header;

$card_entry_view 	= false;
$cur_address		= $event['event_address_street'].',  '.$event['event_address_city'].', '.$event['event_address_state'].' '.$event['event_address_zip'];
$cur_church			= $this->churches_model->get_church_name($event);
if(!empty($event['event_location_detail'])){
	$cur_location		= $event['event_location_detail'];
}else{
	$cur_location = $cur_address;
}

$additional_info		= false;
if(!empty($event['show_count_adults'])){
	$additional_info	= true;
}
if(!empty($event['show_count_kids'])){
	$additional_info	= true;
}
if(!empty($event['show_ages_kids'])){
	$additional_info	= true;
}
if(!empty($event['show_count_meals_adults'])){
	$additional_info	= true;
}
if(!empty($event['show_count_meals_kids'])){
	$additional_info	= true;
}

$address_type = 'home';
if($event['id_event'] == 3100){
	$address_type = 'mailing';	
}

?>
<div class="container page-rsvp-info-edit">
	<form class="form form-horizontal form-label-left" action="<?php echo base_url();?>rsvp/save" method="post">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 top20">
				<?php 
				if(!empty($event['params']['event_logo']['url'])){
					$img = correct_img_path($event['params']['event_logo']['url']);
				}
				if(does_file_exist($img)){
					
				
				}else{
					
					$img = base_url().'img/affiliates/'.$this->affiliates_model->get_active_affiliate_id().'/logo_large.png';
				}
				?>
				<img id="masthead-affiliate-logo" src="<?php echo $img;?>" class="img-responsive center-block">
			</div>
		</div>
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
					
					if(!empty($event['event_desc'])){ 
						echo '<div class="row top10 text-center">'.$this->website_model->format_copy($event['event_desc']).'</div>';
					}
				?>
			</div>
		</div>
			
			<fieldset class="top20">
				<legend>RSVP Contact Info</legend>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">First name</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="name_first" id="name_first" value="<?php echo set_value('name_first', $item['name_first']);?>" placeholder="First name" required="true">
							<span class="text-danger"><?php echo form_error('name_first'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Last name</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control input-block" name="name_last" id="name_last" value="<?php echo set_value('name_last', $this->website_model->display_format_people_name_last($item['name_last']));?>" placeholder="Last name" required="true">
							<span class="text-danger"><?php echo form_error('name_last'); ?></span>
						</div>
					</div>	
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Home church</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church" data-idtarget="id_home_church">
							<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>" data-idtarget="id_home_church">
							<span class="text-danger"><?php echo form_error('home_church'); ?></span>
						</div>
					</div>					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary email</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="people_email_primary" id="people_email_primary" value="<?php echo set_value('people_email_primary', $item['people_email_primary']);?>" placeholder="Primary email address" required="true">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="phone" class="form-control" name="people_phone_mobile" id="people_phone_mobile" value="<?php echo set_value('people_phone_mobile', $item['people_phone_mobile']);?>" placeholder="Mobile phone number" >
						</div>
					</div>
					<?php if(!empty($event['rsvp_show_address'])){ ?>	
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
									<?php $item['use_proper_address'] = 1;?>
									<input type="text" id="place_address" name="place_address" class="form-control input-md input-select-on-focus" placeholder="Please enter your <?= $address_type;?> address" value="<?= set_value('address_full', !empty($item['place_street_number']) ? $this->website_model->get_full_address($item) : null);?>" required >
									<input type="hidden" name="place_street_number" id="place_street_number" value="<?= set_value('place_street_number', !empty($item['place_street_number']) ? $item['place_street_number'] : null);?>">
									<input type="hidden" name="place_street" id="place_street" value="<?= set_value('place_street', !empty($item['place_street']) ? $item['place_street'] : null);?>">
									<input type="hidden" name="address_city" id="place_city" value="<?= set_value('place_city', !empty($item['place_city'])  ? $item['place_city'] : null);?>">
									<input type="hidden" name="place_county" id="place_county" value="<?= set_value('place_county', !empty($item['place_county'])  ? $item['place_county'] : null);?>">
									<input type="hidden" name="place_country" id="place_country" value="<?= set_value('place_country', !empty($item['place_country'])  ? $item['place_country'] : null);?>">
									<input type="hidden" name="place_state" id="place_state" value="<?= set_value('place_state', !empty($item['place_state'])  ? $item['place_state'] : null);?>">
									<input type="hidden" name="place_zip" id="place_zip" value="<?= set_value('place_zip', !empty($item['place_zip'])  ? $item['place_zip'] : null);?>">
									<input type="hidden" name="place_lat" id="place_lat" value="<?= set_value('place_lat', !empty($item['place_lat'])  ? $item['place_lat'] : null);?>">
									<input type="hidden" name="place_lng" id="place_lng" value="<?= set_value('place_lng', !empty($item['place_lng'])  ? $item['place_lng'] : null);?>">
									<input type="hidden" name="place_id_provider" id="place_id_provider" value="<?= set_value('place_id_provider', !empty($item['place_id_provider']) ? $item['place_id_provider'] : null);?>">
							</div>
						</div>
					<?php }?>
					<?php if(!empty($event['show_tshirt_sizes'])){ ?>	
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">T-Shirt Size</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<?php echo $this->website_model->input_menu_statuses('param_rsvp[tshirt_size]', set_value('param_rsvp[tshirt_size]'), 'tshirt_size', 'form-control', array('view' => 'list_tshirts', 'required' => 1));?>
							</div>
						</div>
					<?php }?>
					<?php if(!empty($event['id_event']) && $event['id_event'] == 3100){ ?>	
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Select a Breakout Session</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<select class="form-control" name="param_rsvp[breakout_session]" id="breakout_session" required >
									<option value="breakout_refueling_your_fam">Refueling your FAM</option>
									<option value="breakout_celebrate_relaunch">Celebrating Volunteers and Re-launching Care Communities</option>
									<option value="breakout_foster_stronger">Foster Stronger (closed group)</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-1 col-xs-12">
								<p>We hope this event is truly refueling for you. To help us best prepare for our time together, we’d like to hear how you’re doing as it relates to your FAM(s).</p>
								<p><strong>Which phrase best describes your current “tank”?</strong></p>
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Fueled & ready to go</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<label for="fueld_and_ready_to_go"></label>
								<input type="radio" class="top10" name="param_rsvp[current_tank]" required id="fueled_and_ready_to_go" value="fueled_and_ready_to_go">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Could use a small boost</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<label for="small_boost"></label>
								<input type="radio" class="top10" name="param_rsvp[current_tank]" required id="small_boost" value="small_boost">
							</div>
								
									
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Need to fill up</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<label for="need_to_fill_up"></label>
								<input type="radio" class="top10" name="param_rsvp[current_tank]" required id="need_to_fill_up" value="need_to_fill_up">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Running on empty</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<label for="running_on_empty"></label>
								<input type="radio" class="top10" name="param_rsvp[current_tank]" required id="running_on_empty" value="running_on_empty">
							</div>	
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Completely out of gas</label>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<label for="out_of_gas"></label>
								<input type="radio" class="top10" name="param_rsvp[current_tank]" required id="out_of_gas" value="out_of_gas">
							</div>	
						</div>
					<?php }?>
				</fieldset>
				<?php if(!empty($additional_info)){?>
				<fieldset>
					<legend>Additional Info</legend>
				
				
					<?php if(!empty($event['show_count_adults'])){ ?>	
						<div class="form-group">
							<label class="control-label col-md-6 col-sm-6 col-xs-12">Number of adults attending <small>(Counting Yourself)</small></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="count_adults" id="count_adults" value="<?php echo set_value('count_adults', $rsvp['count_adults']);?>" placeholder="Total number of adults, counting yourself" required="true">
							</div>
						</div>
					<?php }?>				
					<?php if(!empty($event['show_count_kids'])){ ?>	
						<div class="form-group">
							<label class="control-label col-md-6 col-sm-6 col-xs-12">Number of children who need childcare</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="count_kids" id="count_kids" value="<?php echo set_value('count_kids', $rsvp['count_kids']);?>" placeholder="Total number of kids who need childcare" required="true">
							</div>
						</div>
					<?php }?>
					<?php if(!empty($event['show_ages_kids'])){ ?>	
						<div class="form-group">
							<label class="control-label col-md-6 col-sm-6 col-xs-12">Children's Ages</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="ages_kids" id="ages_kids" value="<?php echo set_value('ages_kids', $rsvp['ages_kids']);?>" placeholder="Please list the ages of the children attending" required="true">
							</div>
						</div>
					<?php }?>				
					<?php if(!empty($event['show_count_meals_adults'])){ ?>	
						<div class="form-group">
							<label class="control-label col-md-6 col-sm-6 col-xs-12">Number of adults who will need a meal</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="count_meals_adults" id="count_meals_adults" value="<?php echo set_value('count_meals_adults', $rsvp['count_meals_adults']);?>" placeholder="The number of adults who will be eating at the event" required="true">
							</div>
						</div>
					<?php }?>
					<?php if(!empty($event['show_count_meals_kids'])){ ?>	
						<div class="form-group">
							<label class="control-label col-md-6 col-sm-6 col-xs-12">Number of children who will need a meal</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="count_meals_kids" id="count_meals_kids" value="<?php echo set_value('count_meals_kids', $rsvp['count_meals_kids']);?>" placeholder="The number of children who will be eating at the event" required="true">
							</div>
						</div>
					<?php }?>
				<?php }?>
				
				<div class="form-group hp-field">
					<label class="control-label col-md-6 col-sm-6 col-xs-12">Fax Number</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="hp_p686_<?php echo md5(microtime());?>" value="" placeholder="Fax Number - Required" class="hp_field">
					</div>
				</div>
				<div class="top30"></div>	

					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg center-block" name="save" value="1">Next <i class="fa fa-chevron-right"></i></button>
					</div>
				</fieldset>
		
		<input type="hidden" name="id_rsvp" value="<?php echo $rsvp['id_rsvp'];?>">
		<input type="hidden" name="assignment_type" value="people_to_event">
		<input type="hidden" name="count_assignments" value="1">
		<input type="hidden" name="id_event_encoded" value="<?php echo $event['id_event_encoded'];?>">	
		<input type="hidden" name="event_type" value="<?php echo $event['event_type'];?>">
		<input type="hidden" name="id_church" value="<?php echo $event['id_church'];?>">
		<input type="hidden" name="t" value="<?php echo $t;?>">
		<input type="hidden" name="event_attendee_status" value="rsvp_only">
		<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>



<!-- top navigation -->
<?php echo $site_footer;?>
<script>

$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});

$(document).ready( function() {
	
    var allchurches = [
	<?php 
		$i = 0;
		foreach($churches as $cur){
			$cur['show_church_city_state']			= 1;
			echo  "{data: '".$cur['id_church']."',	value: '".addslashes($this->churches_model->get_church_name($cur))."'},\r\n";
		}?>
    ];
 
  $('#home_church').autocomplete({
		lookup: allchurches,
		onSelect: function (suggestion) {
			$('#id_home_church').val(suggestion.data);
		}
	});
	
	 var allstates = [
	<?php 
		$i = 0;
		
		foreach($us_states as $key => $val){
			echo  "{data: '".$key."',	value: '".addslashes($val. ' ('.$key.')')."'},\r\n";
		}?>
    ];
	
	$('#address_state').autocomplete({
		lookup: allstates,
		onSelect: function (suggestion) {
			$('#address_state_abbrev').val(suggestion.data);
		}
	});
	
	
});


function signup_gmap_initialize() {
	var input = document.getElementById('place_address');
	var autocomplete = new google.maps.places.Autocomplete(input);
	google.maps.event.addListener(autocomplete, 'place_changed', function () {
		var place = autocomplete.getPlace();
		ps_parse_gmap_place_values(place);
		
	});
}

google.maps.event.addDomListener(window, 'load', signup_gmap_initialize);

</script>

<!-- /top navigation -->