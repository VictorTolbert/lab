<!-- Header Section -->
<?php echo $site_header; ?>
<div class="container col-sm-12">
	<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20 text-center">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
	<div class="row top10">
		<div class="container">
			<h1 class="text-center">Temporary Family Relief Support</h1>
			<?php echo $this->session->flashdata('msg'); ?>
			<?php 
				if(!empty($content['body'])){ 
					echo $content['body']; 
				}else{
			?>
			<div class="row top40">
				<div class="col-sm-5 col-xs-12">
					<div class="ltp-video-wrapper border-light-gray">
						<iframe src="https://player.vimeo.com/video/341030944?api=1&player_id=resources-vimeo-player" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="resources-vimeo-player"></iframe>
					</div>
				</div>
				<div class="col-sm-7 col-xs-12">
					<p class=" top20">Thank you for opening your home to serve vulnerable children!</p>
					<p class="">We would welcome the opportunity to build a care community around your family. Please be aware that there are often more families in need than we available care communities to fill those needs.</p>
					<p class="">Care community volunteers typically live within 20 minutes of the family being served. Because we are relying on volunteers who are close to your home it can take some time for us to coordinate a team, so please be patient as we work to serve your family.</p>
					<p class="">We are honored to serve these amazing families serving in the hard places whenever possible.</p>
					<p class=""><strong><em>If you are requesting a care community on behalf of a family in need, then please respect their privacy by using the <a href="<?php echo base_url();?>needs/refercc">refer a family page here</a>.</em></strong></p>
				</div>
			</div>
				<?php }?>
			
		</div>
		
		
		<div class="panel panel-container col-sm-10 col-sm-offset-1">
			<div class="row">
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>families/saverequestcc" method="post" style="padding: 20px;">
					<fieldset>
						<legend>Contact Info</legend>
						<input type="hidden" name="foster_parent_0_id_role" value="20">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Name</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="foster_parent_0_name_first" id="foster_parent_0_name_first" value="<?php echo set_value('foster_parent_0_name_first');?>" placeholder="First name" required>
								 <span class="text-danger"><?php echo form_error('foster_parent_0_name_first'); ?></span>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 xs-top10">
								<input type="text" class="form-control" name="foster_parent_0_name_last" id="foster_parent_0_name_last" value="<?php echo set_value('foster_parent_0_name_last');?>" placeholder="Last name" required>
								 <span class="text-danger"><?php echo form_error('foster_parent_0_name_last'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Email</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="email" class="form-control" name="foster_parent_0_people_email_primary" id="foster_parent_0_people_email_primary" value="<?php echo set_value('foster_parent_0_people_email_primary');?>" placeholder="Your email address" required>
								<span class="text-danger"><?php echo form_error('foster_parent_0_people_email_primary'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="foster_parent_0_people_phone_mobile" id="foster_parent_0_people_phone_mobile" value="<?php echo  format_phone(set_value('foster_parent_0_people_phone_mobile'));?>" placeholder="Mobile phone number" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Church (if applicable)</label>
							
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church');?>" placeholder="Home Church" data-idtarget="id_home_church">
								<input type="hidden" name="id_church_home" id="id_home_church" value="">
								<span class="text-danger"><?php echo form_error('home_church'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Home Address</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php $item['use_proper_address'] = 1;?>
								<input type="text" id="place_address" name="place_address" class="form-control input-md input-select-on-focus" placeholder="Enter your full home address" value="<?php echo set_value('place_address');?>">
								<input type="hidden" name="place_street_number" id="place_street_number" value="<?= set_value('place_street_number');?>">
								<input type="hidden" name="place_street" id="place_street" value="<?= set_value('place_street');?>">
								<input type="hidden" name="place_city" id="place_city" value="<?= set_value('place_city');?>">
								<input type="hidden" name="place_state" id="place_state" value="<?= set_value('place_state');?>">
								<input type="hidden" name="place_zip" id="place_zip" value="<?= set_value('place_zip');?>">
								<input type="hidden" name="place_county" id="place_county" value="<?= set_value('place_county');?>">
								<input type="hidden" name="place_country" id="place_country" value="<?= set_value('place_country');?>">
								<input type="hidden" name="place_lat" id="place_lat" value="<?= set_value('place_lat');?>">
								<input type="hidden" name="place_lng" id="place_lng" value="<?= set_value('place_lng');?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Current Family Status</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<select name="current_foster_status" class="input-form input-lg">
									<option value="Considering">We are considering fostering</option>
									<option value="Kinship">We are caring for kin</option>
									<option value="Taking classes">We are taking classes</option>
									<option value="Waiting for placement">We are waiting for a placement</option>
									<option value="Has active placement">We have an active placement</option>
									<option value="Pursuing adoption">We are pursuing adoption</option>
									<option value="Has adopted">We have adopted</option>
									<option value="A family in need">We are simply a family in need</option>
								</select>
							</div>
						</div>
					</fieldset>
					<?php if(1 == 2){?>
					<fieldset>
						<legend>Your Address</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_street_1" id="family_address_street_1" value="<?php echo set_value('family_address_street_1', $this->website_model->display_format_address_street($item['family_address_street_1']));?>" placeholder="Street address" required>
								<span class="text-danger"><?php echo form_error('family_address_street_1'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Apt or Unit #</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_street_2" id="family_address_street_2" value="<?php echo set_value('family_address_street_2', $item['family_address_street_2']);?>" placeholder="Suite, apartment nuber, or unit">
								<span class="text-danger"><?php echo form_error('family_address_street_2'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_city" id="family_address_city" value="<?php echo set_value('family_address_city',$this->website_model->display_format_address_city($item['family_address_city']));?>" placeholder="City" required>
								<span class="text-danger"><?php echo form_error('family_address_city'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_state" id="family_address_state" value="<?php echo set_value('family_address_state', $item['family_address_state']);?>" placeholder="State" required>
								<input type="hidden" name="family_address_state_abbrev" id="address_state_abbrev" value="<?php echo $item['family_address_state'];?>">
								<span class="text-danger"><?php echo form_error('family_address_state'); ?></span>
								
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Zipcode</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_zip" id="family_address_zip" value="<?php echo set_value('family_address_zip', $item['family_address_zip']);?>" placeholder="Zip code" required>
								<span class="text-danger"><?php echo form_error('family_address_zip'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Current Family Status</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<select name="current_foster_status" class="input-form input-lg">
									<option value="Considering">We are considering fostering</option>
									<option value="Kinship">We are caring for kin</option>
									<option value="Taking classes">We are taking classes</option>
									<option value="Waiting for placement">We are waiting for a placement</option>
									<option value="Has active placement">We have an active placement</option>
									<option value="Pursuing adoption">We are pursuing adoption</option>
									<option value="Has adopted">We have adopted</option>
									<option value="A family in need">We are simply a family in need</option>
								</select>
							</div>
						</div>
					</fieldset>
				<?php }?>
					<fieldset>
						<legend>How can we help?</legend>
						<div class="col-sm-10 col-sm-offset-1"><label class="">Please give us a short summary of your top 5 most pressing needs.</label></div>
						<?php for($i=0; $i < 5; $i++){
								$arr_placeholders	= array('example: Meals for the family', 'example: Groceries', 'example: Transportation help', 'example: Virtual tutoring', 'example: Other needs');
							?>
							<div class="hidden-sm hidden-md hidden-lg col-xs-12 xs-top10">
								<label class="">Need <?= $i + 1;?></label>
							</div>
							<div class="form-group">
								<div class="col-sm-6 col-sm-offset-2 col-xs-12 top10">
									<input type="text" class="form-control" name="sub_need_name[<?= $i;?>]" id="sub_need_name_<?= $i;?>" value="" placeholder="<?= $arr_placeholders[$i];?>">
									<span class="text-danger"><?php echo form_error('needs_input_'.$i); ?></span>
								</div>
								<div class="col-sm-3 col-xs-12 xs-top10 top10">
									<?php echo $this->website_model->input_menu_statuses('sub_need_recurrence['.$i.']', '', 'sub_need_recurrence'.$i, 'form-control', array('required' => 0, 'show_recurring_only' => 1, 'view' => 'edit_need_recurrence')) ;?>
									<span class="text-danger"><?php echo form_error('sub_need_input_'.$i); ?></span>
								</div>
							</div>
						<?php }?>
						<div class="col-sm-10 col-sm-offset-1 xs-top30"><label class="">Please tell us other ways you could benefit from support.</label></div>
						<div class="form-group">
							<div class="col-sm-9 col-xs-12 col-sm-offset-2 top10">
								<textarea class="form-control input-lg" cols="10" rows="10" placeholder="(optional)" name="reason_for_support"></textarea>
								<span class="text-danger"><?php echo form_error('reason_for_support'); ?></span>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Helpful Info</legend>
						<div class="col-sm-10 col-sm-offset-1"><label class="">How did you hear about <?php echo $_SESSION['affiliate']['affiliate_name'];?> or The Care Community Model?</label></div>
						<div class="form-group">
							<div class="col-sm-9 col-xs-12 col-sm-offset-2 top10">
								<textarea class="form-control input-lg" cols="10" rows="10" placeholder="(optional)" name="how_you_learned_about_us"></textarea>
								<span class="text-danger"><?php echo form_error('how_you_learned_about_us'); ?></span>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Family Agreement</legend>
						<p>This agreement must be signed by caregiver(s) who head the household of an Supported Family that desire to be served through a participating Temporary Care Community (TCC). You are under no obligation to have a TCC. It is entirely voluntary and cannot affect any case plan that may be place. You may choose to end the TCC at any time.
						</p>

						<p>The Supported Family agrees to the following when being served by a TCC:</p>
						<ol>
						<li><strong>Child Assistance</strong>: The Supported Family’s consent is required for all volunteers engaging with any child in the Supported Family’s care. The volunteer must communicate and receive approval from caregiver for all virtual appointments and activities planned via phone calls or video chats. Video chats should always be in clear view and audible to caregiver(s). The Supported Family has the right to refuse any volunteer.
						</li>

						<li><strong>Financial Assistance</strong>: Giving money directly to a family under any circumstances is strictly forbidden by this program. Money will be paid directly to service providers such as grocery stores or restaurants. Volunteers will consult their Program Coordinator in cases of uncertainty or special requests.</li>

						<li><strong>Food Provision</strong>: Families may request varying types of food provision including gift cards, grocery shopping, and delivery services. It is important to note volunteers agree to give what they are able and should never go beyond their means to serve. Food provision will be limited to a maximum of one week’s groceries, one gift card, one delivery, or two frozen or homemade meal provisions per week.</li>

						<li><strong>Confidentiality</strong>: Volunteers agree to keep all information and family background confidential during the time of service and beyond. Volunteers will not post photos on social media or any details of the family or their situation. Unless given specific permission from the Supported Family, no personal or specific information may be shared outside the Temporary Care Community (TCC). Volunteers will exercise care and discretion when sharing information about the Supported Family with children who are part of the TCC, using only general information and informing children of the need for keeping information private.</li>

						<li><strong>Safety:</strong> During Covid-19, the Supported Family as well as the volunteers should follow all protocols set out by the CDC, state and local guidelines. It is up to the discretion of each person involved what type of contact (such as dropping off a homemade meal) if any will be allowed.

						</li>
						</ol>

						<p>I understand and agree to the above responsibilities and terms of service for TCC Supported Families.</p>
						<div class="form-group">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="text" class="form-control" name="agree_signature" id="agree_signature" value="<?php echo set_value('agree_signature');?>" placeholder="Your full name as signature" required>
								<span class="text-danger"><?php echo form_error('agree_signature'); ?></span>
							</div>
						</div>
					</fieldset>
						
				<div class="ln_solid top40"></div>
				<div class="form-group">
					<div class="col-sm-6 col-xs-12 col-sm-offset-3">
						<p class="text-center">By submitting this form I understand that my data will be used only for establishing a care community around my family and used in accordance with the terms of this website's <a href="<?=base_url();?>privacy-policy" target="_blank">privacy policy</a>.
						</p>
					</div>
				</div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-3 text-center">				  
				  <button type="submit" class="btn btn-success btn-lg btn-submit" name="save" value="1">Save</button>
				</div>
			  </div>
				<input type="hidden" name="source" value="needs" />
				<input type="hidden" name="id_agreement_encoded" value="<?php echo url_enc(2);?>">
				<input type="hidden" name="need_type" value="cc_request_family_tcc" />
				<input type="hidden" name="id_affiliate" value="<?php echo url_enc($this->affiliates_model->get_active_affiliate_id());?>" />
				<input type="hidden" name="need_orig" value="<?php echo url_enc($id_need_orig);?>" />
				<input type="hidden" name="r" value="<?php echo url_enc(base_url().'needs/saverequestcc');?>" />
				<input type="hidden" name="t" value="<?php echo $t;?>" />
				<input type="text" name="phone" style="visibility: hidden;" placeholder="Phone Number"/>
				<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
			  </form>
			</div><!--/.row-->
		</div>
	</div>
</div>	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
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
	
	$('#family_address_state').autocomplete({
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
</body>
</html>