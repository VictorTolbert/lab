<?php echo $site_header;

$card_entry_view = true;
$simple_form 		= false;
if(!empty($event['show_simple_form'])){
	$simple_form 		= true;
}
 ?>
<div class="container">
	<form class="form form-horizontal form-label-left" action="<?php echo base_url();?>people/save" method="post">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<h1 class="text-center">Please Update Your Information</h1>
			<fieldset>
				<legend>Contact Info</legend>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">First Name</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="name_first" id="name_first" value="<?php echo set_value('name_first', $item['name_first']);?>" placeholder="First name" required="true">
							<span class="text-danger"><?php echo form_error('name_first'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Last Name</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="name_last" id="name_last" value="<?php echo set_value('name_last', $this->website_model->display_format_people_name_last($item['name_last']));?>" placeholder="Last name" required="true">
							<span class="text-danger"><?php echo form_error('name_last'); ?></span>
						</div>
					</div>	
					<div class="form-group">
							<label class="control-label col-sm-3 col-xs-10">Home Church</label>
							<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
								<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church" data-idtarget="id_home_church">
								<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>">
								<span class="text-danger"><?php echo form_error('home_church'); ?></span>
							</div>
						</div>					
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Primary Email</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="people_email_primary" id="people_email_primary" value="<?php echo set_value('people_email_primary', $item['people_email_primary']);?>" placeholder="Primary email address" required="true">
						</div>
					</div>
					<?php if(!$card_entry_view && !$simple_form){?>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Secondary Email</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="people_email_secondary" id="people_email_secondary" value="<?php echo set_value('people_email_secondary', $item['people_email_secondary']);?>" placeholder="Secondary email address">
						</div>
					</div>
					<?php }?>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Mobile Phone</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="people_phone_mobile" id="people_phone_mobile" value="<?php echo format_phone(set_value('people_phone_mobile', $item['people_phone_mobile']));?>" placeholder="Mobile phone number">
						</div>
					</div>
					<?php if(!$card_entry_view && !$simple_form){?>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Home Phone</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="people_phone_home" id="people_phone_home" value="<?php echo format_phone(set_value('people_phone_home', $item['people_phone_home']));?>" placeholder="Home phone number (optional)">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Work Phone</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="people_phone_office" id="people_phone_office" value="<?php echo format_phone(set_value('people_phone_office', $item['people_phone_office']));?>" placeholder="Office phone number (optional)">
						</div>
					</div>
					<?php }?>
					<?php if(!$simple_form){?>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Address</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="address_street_1" id="address_street_1" value="<?php echo set_value('address_street_1', $item['address_street_1']);?>" placeholder="Street address">
							<span class="text-danger"><?php echo form_error('address_street_1'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Apt or Unit #</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="address_street_2" id="address_street_2" value="<?php echo set_value('address_street_2', $item['address_street_2']);?>" placeholder="Suite, apartment nuber, or unit" >
							<span class="text-danger"><?php echo form_error('address_street_2'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">City</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="address_city" id="address_city" value="<?php echo set_value('address_city', $item['address_city']);?>" placeholder="City" >
							<span class="text-danger"><?php echo form_error('address_city'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">State</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="address_state" id="address_state" value="<?php echo set_value('address_state', $item['address_state']);?>" placeholder="State">
							<input type="hidden" name="address_state_abbrev" id="address_state_abbrev" value="<?php echo $item['address_state'];?>">
							<span class="text-danger"><?php echo form_error('address_state'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Zip</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="address_zip" id="address_zip" value="<?php echo set_value('address_zip', $item['address_zip']);?>" placeholder="Zip code">
							<span class="text-danger"><?php echo form_error('address_zip'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">County where I live</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
							<input type="text" class="form-control" name="address_county" id="address_county" value="<?php echo set_value('address_county', $item['address_county']);?>" placeholder="County">
							<span class="text-danger"><?php echo form_error('address_county'); ?></span>
						</div>
					</div>
					<?php }?>
				</fieldset>
				<div class="rowtop30"></div>	
				<?php if(1 == 2){?>
				<fieldset>
					<legend>Password</legend>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Password</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
						  <input type="password" class="form-control" name="password" id="password" placeholder="leave blank to remain unchanged">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xs-10">Password Confirm</label>
						<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
						<input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="leave blank to remain unchanged">
						</div>
					</div>
				</fieldset>
				<div class="row top30"></div>	
				<?php }?>
				<fieldset class="top30">
					<legend>
						<?php 
							if($event['event_type'] == 'event_awareness'){
								echo 'Please contact me with more information about:';
							}else{ 
								echo 'Areas of interest';
							}
							$house_img = base_url().'img/care_community_house_text_bg.png';
							
							if(does_file_exist( base_url().'img/affiliates/'.$this->affiliates_model->get_active_affiliate_id().'/care_community_house_text_bg.png')){
								$house_img =  base_url().'img/affiliates/'.$this->affiliates_model->get_active_affiliate_id().'/care_community_house_text_bg.png';
							}
							
							$legend_img	 = base_url().'img/care_community_legend.png';
							if(does_file_exist( base_url().'img/affiliates/'.$this->affiliates_model->get_active_affiliate_id().'/care_community_legend.png')){
								$legend_img =  base_url().'img/affiliates/'.$this->affiliates_model->get_active_affiliate_id().'/care_community_legend.png';
							}
							?>
					</legend>
					<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2 ltp-care-community-model-interests" style="background-image: url('<?= $house_img;?>')">
						<div class="ltp-quadrant ltp-quadrant-tl">	
							<input type="checkbox" name="interest_family_helper" value="1" class="ltp-quadrant-checkbox-tl ltp-quadrant-input" <?php if(!empty($item['interest_family_helper'])){echo 'checked="checked"';}?> style="transform: scale(1.1);">
							<input type="hidden" name="interest_family_helper_prev" value="<?php echo $item['interest_family_helper'];?>">
						</div>
						<div class="ltp-quadrant ltp-quadrant-tr">
							<input type="checkbox" name="interest_child_mentor" value="1" class="ltp-quadrant-checkbox-tr ltp-quadrant-input" <?php if(!empty($item['interest_child_mentor'])){echo 'checked="checked"';}?> style="transform: scale(1.1);">
							<input type="hidden" name="interest_child_mentor_prev" value="<?php echo $item['interest_child_mentor'];?>">
						</div>
						<div class="ltp-quadrant ltp-quadrant-bl">
							<input type="checkbox" name="interest_team_leader" value="1" class="ltp-quadrant-checkbox-bl ltp-quadrant-input" <?php if(!empty($item['interest_team_leader'])){echo 'checked="checked"';}?> style="transform: scale(1.1);">
							<input type="hidden" name="interest_team_leader_prev" value="<?php echo $item['interest_team_leader'];?>">
						</div>
						<div class="ltp-quadrant ltp-quadrant-br">
							<input type="checkbox" name="interest_interim_caregiver" value="1" class="ltp-quadrant-checkbox-br ltp-quadrant-input" <?php if(!empty($item['interest_interim_caregiver'])){echo 'checked="checked"';}?> style="transform: scale(1.1);">
							<input type="hidden" name="interest_interim_caregiver_prev" value="<?php echo $item['interest_interim_caregiver'];?>">
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2 top40">				
						<img src="<?php echo $legend_img;?>" class="img-responsive center-block">
					</div>
				</fieldset>
				<fieldset class="top30">
				<legend>Other Interests</legend>
					<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2 top30">
					<?php 
							$arr_bypass		= array('interest_child_mentor', 'interest_family_helper','interest_team_leader','interest_care_community', 'interest_interim_caregiver');
							foreach($checkboxes as $cur_key => $cur_name){
								if(!in_array($cur_key, $arr_bypass)){
				
						?>
						<div class="form-group">
							<div class="col-sm-3 col-xs-4">
								<input type="checkbox" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success" name="<?php echo $cur_key;?>" class="" value="1" <?php echo $checked[$cur_key];?>>
								<input type="hidden" name="<?php echo $cur_key;?>_prev" value="<?php echo $item[$cur_key];?>">
							</div>
							<div class="col-sm-9 col-xs-8">
								<?php echo $cur_name;?>
							</div>
						</div>
				<?php 		}
						}?>
				<?php if(!empty($event['show_care_portal_option'])){
						$checked['interest_care_portal'] = '';
						if(!empty($item['interest_care_portal'])){
							$checked['interest_care_portal'] = 'checked';
						}
								
								
					?>	
						<div class="form-group">
							<div class="col-sm-3 col-xs-4">
								<input type="checkbox" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success" name="interest_care_portal" class="" value="1" <?php echo $checked['interest_care_portal'];?>>
								<input type="hidden" name="interest_care_portal_prev" value="<?php echo $item['interest_care_portal'];?>">
							</div>
							<div class="col-sm-9 col-xs-8">
								<img src="<?php echo base_url();?>img/logo_care_portal.png" class="float-left" style="max-height: 42px;"> <span class="text-left">CarePortal</span>
							</div>
						</div>
				<?php }?>
					</div>
				</fieldset>	
			<div class="row top30"></div>	
		<?php if($event['event_type'] == 'event_awareness' && !empty($upcoming_orientation_events)){?>
				<fieldset id="event-rsvp-wrapper">
					<legend>Register for an upcoming volunteer orientation event</legend>
					<table class="table table-responsive table-striped ">
						<thead>
							<tr>
								<th>Event Name</th>
								<th class="hidden-xs">Event Type</th>
								<th>Date</th>
								<th>Attend?</th>
							</tr>
						</thead>
						<tbody>
							<?php 
									foreach($upcoming_orientation_events as $cur){
											echo '<tr><td>'.$this->events_model->get_event_name($cur).'</td><td class="hidden-xs">'.$this->events_model->get_event_type($cur).'</td><td>'.format_date($cur['event_date_start']).'</td><td class="col-xs-2"><input type="radio" class="btn-switch"  data-haschildcare="'.$cur['has_childcare'].'" data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success" name="id_event_rsvp"  class="" value="'.url_enc($cur['id_event']).'"></td></tr>';
									}
								?>
						</tbody>
					</table>
					<div id="guest-wrapper" class="hide col-xs-10 col-xs-offset-1">
						<div class="form-group">
							<div class="col-sm-4 col-xs-8">
								Number of adults (counting yourself)
							</div>
							<div class="col-sm-3 col-xs-4">
								<input type="text" class="form-control"  name="count_adults" id="count_adults" value="1" placeholder="">
							</div>
						</div>
					</div>
						<div id="childcare-wrapper" class="hide col-xs-10 col-xs-offset-1">
							<div class="form-group">
								<div class="col-sm-4 col-xs-8">
									Childcare - Number of children
								</div>
								<div class="col-sm-3 col-xs-4">
									<input type="text" class="form-control"  name="count_kids" id="count-kids" value="" placeholder="Number of children who need childcare">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-xs-8">
									Childcare - Ages of children
								</div>
								<div class="col-sm-3 col-xs-4">
									<input type="text" class="form-control" name="ages_kids" id="ages-kids" value="" placeholder="Number of children who need childcare">
								</div>
							</div>
						</div>
				</fieldset>
		<?php }?>
			<fieldset class="top30">
				<legend>Notes or comments</legend>
				<textarea name="msg_body_0" id="msg_body_0" class="form-control" rows="5" placeholder="Optional - for additional information you wish to share."></textarea>
				<input type="hidden" name="count_messages" value="1" >
				<input type="hidden" name="id_msg_assignment_0" value="" >
				<input type="hidden" name="id_msg_0" value="" >
			</fieldset>
			<div class="row top30"></div>	
				<fieldset>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg center-block" name="save" value="1">Next <i class="fa fa-chevron-right"></i></button>
					</div>
				</fieldset>
	
		</div>
		<input type="hidden" name="id_people_encoded" value="<?php echo $user['id_people_encoded'];?>">
		<input type="hidden" name="assignment_type" value="people_to_event">
		<input type="hidden" name="count_assignments" value="1">
		<input type="hidden" name="id_event_encoded" value="<?php echo $event['id_event_encoded'];?>">	
		<input type="hidden" name="event_type" value="<?php echo $event['event_type'];?>">
		<input type="hidden" name="id_church" value="<?php echo $event['id_church'];?>">
		<input type="hidden" name="event_attendee_status" value="responded_event">
		<input type="hidden" name="orientation_event_complete_status" value="<?php echo $event['orientation_event_complete_status'];?>">
		<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>



<!-- top navigation -->
<?php echo $site_footer;?>
<script>

$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
	
	$('input[name="id_event_rsvp"]').on('switchChange.bootstrapSwitch', function(event, state) {
		var haschildcare = $(this).data('haschildcare');
		$('#guest-wrapper').removeClass('hide');
		
		if(haschildcare == 1){
			$('#childcare-wrapper').removeClass('hide');
		}else{
			$('#childcare-wrapper').addClass('hide');
		}
	});
});


$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
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
			autoSelectFirst: true,
			onSelect: function (suggestion) {
				$('#id_home_church').val(suggestion.value);
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
</script>

<!-- /top navigation -->