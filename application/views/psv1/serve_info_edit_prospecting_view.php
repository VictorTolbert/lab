<?php echo $site_header;

$card_entry_view = true;
$simple_form 		= false;
$required_address	= '';
if(!empty($event['show_simple_form'])){
	$simple_form 		= true;
}
if(!empty($event['required_address'])){
	$required_address 		= 'required';
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
			<h1 class="text-center">Please Complete The Form Below</h1>
			<fieldset>
			<legend>Contact Info</legend>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xs-10">First Name</label>
					<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
						<input type="text" class="form-control" name="name_first" id="name_first" value="<?php echo $item['name_first'];?>" placeholder="First name" required="true">
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
						<input type="text" class="form-control" name="address_street_1" id="address_street_1" value="<?php echo set_value('address_street_1', $item['address_street_1']);?>" placeholder="Street address" <?=$required_address;?>>
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
						<input type="text" class="form-control" name="address_city" id="address_city" value="<?php echo set_value('address_city', $item['address_city']);?>" placeholder="City" <?=$required_address;?>>
						<span class="text-danger"><?php echo form_error('address_city'); ?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xs-10">State</label>
					<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
						<input type="text" class="form-control" name="address_state" id="address_state" value="<?php echo set_value('address_state', $item['address_state']);?>" placeholder="State" <?=$required_address;?>>
						<input type="hidden" name="address_state_abbrev" id="address_state_abbrev" value="<?php echo $item['address_state'];?>">
						<span class="text-danger"><?php echo form_error('address_state'); ?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xs-10">Zip</label>
					<div class=" col-sm-9 col-xs-10 col-xs-offset-1 col-sm-offset-0">
						<input type="text" class="form-control" name="address_zip" id="address_zip" value="<?php echo set_value('address_zip', $item['address_zip']);?>" placeholder="Zip code" <?=$required_address;?>>
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
			<?php if(!$card_entry_view && !$simple_form){?>
			<div class="rowtop30"></div>	
			<fieldset class="top30">
				<legend>Notes or comments</legend>
				<textarea name="msg_body_0" id="msg_body_0" class="form-control" rows="5" placeholder="Optional - for additional information you wish to share."></textarea>
				<input type="hidden" name="count_messages" value="1" >
				<input type="hidden" name="id_msg_assignment_0" value="" >
				<input type="hidden" name="id_msg_0" value="" >
			</fieldset>
			<?php }?>
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
</script>

<!-- /top navigation -->