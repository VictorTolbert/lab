<!-- Header Section -->
<?php echo $site_header; ?>
<div class="container col-sm-12">
	<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20 text-center">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
			</div>
		</div>
	<div class="row top10">
		<div class="container">
			<h1 class="text-center">Court Ordered Care Community Request</h1>
			<?php echo $this->session->flashdata('msg'); ?>
			<p class="text-center">We are happy to help serve the bio family who is under this court order.</p>
			<p class="text-center">Please complete the form below and the churches who are nearest to this family will be notified of the request to establish a care community.</p>
		</div>
		
		
		<div class="panel panel-container col-sm-10 col-sm-offset-1">
			<div class="row">
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>needs/saverequestcc" method="post" style="padding: 20px;">
					<fieldset>
						<legend>Court Info</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Name</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="requestor_name_first" id="requestor_name_first" value="<?php echo set_value('bio_parent_0_name_first');?>" placeholder="First name" required>
								 <span class="text-danger"><?php echo form_error('requestor_name_first'); ?></span>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="requestor_name_last" id="requestor_name_last" value="<?php echo set_value('requestor_name_last');?>" placeholder="Last name" required>
								 <span class="text-danger"><?php echo form_error('requestor_name_last'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Phone</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="requestor_phone" id="requestor_phone" value="<?php echo set_value('requestor_phone');?>" placeholder="Phone Number" required>
								 <span class="text-danger"><?php echo form_error('requestor_name_first'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Email</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="requestor_email" id="requestor_email" value="<?php echo set_value('requestor_email');?>" placeholder="Email address" required>
								 <span class="text-danger"><?php echo form_error('requestor_name_first'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">County of Court</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="requestor_county" id="requestor_county" value="<?php echo set_value('requestor_county');?>" placeholder="County" required>
								 <span class="text-danger"><?php echo form_error('requestor_name_first'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Judge's Name</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="requestor_judge_name" id="requestor_judge_name" value="<?php echo set_value('requestor_judge_name');?>" placeholder="Judge's full name" required>
								 <span class="text-danger"><?php echo form_error('requestor_judge_name'); ?></span>
							</div>
						</div>
							
					</fieldset>
					<fieldset>
						<legend>Family Primary Contact</legend>
						<input type="hidden" name="foster_parent_0_id_role" value="20">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent Name</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="bio_parent_0_name_first" id="bio_parent_0_name_first" value="<?php echo set_value('bio_parent_0_name_first');?>" placeholder="First name" required>
								 <span class="text-danger"><?php echo form_error('bio_parent_0_name_first'); ?></span>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="bio_parent_0_name_last" id="bio_parent_0_name_last" value="<?php echo set_value('bio_parent_0_name_last');?>" placeholder="Last name" required>
								 <span class="text-danger"><?php echo form_error('bio_parent_0_name_last'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Email</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="email" class="form-control" name="bio_parent_0_people_email_primary" id="bio_parent_0_people_email_primary" value="<?php echo set_value('bio_parent_0_people_email_primary');?>" placeholder="Your email address" required>
								<span class="text-danger"><?php echo form_error('bio_parent_0_people_email_primary'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="bio_parent_0_people_phone_mobile" id="bio_parent_0_people_phone_mobile" value="<?php echo  format_phone(set_value('bio_parent_0_people_phone_mobile'));?>" placeholder="Mobile phone number" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Church (if applicable)</label>
							
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church');?>" placeholder="Home Church" data-idtarget="id_home_church">
								<input type="hidden" name="id_church_home" id="id_home_church" value="">
								<span class="text-danger"><?php echo form_error('home_church'); ?></span>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Family Address</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_street_1" id="family_address_street_1" value="<?php echo set_value('family_address_street_1');?>" placeholder="Street address" required>
								<span class="text-danger"><?php echo form_error('family_address_street_1'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Apt or Unit #</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_street_2" id="family_address_street_2" value="<?php echo set_value('family_address_street_2');?>" placeholder="Suite, apartment nuber, or unit">
								<span class="text-danger"><?php echo form_error('family_address_street_2'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_city" id="family_address_city" value="<?php echo set_value('family_address_city');?>" placeholder="City" required>
								<span class="text-danger"><?php echo form_error('family_address_city'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_state" id="family_address_state" value="<?php echo set_value('family_address_state');?>" placeholder="State" required>
								<input type="hidden" name="family_address_state_abbrev" id="address_state_abbrev" value="">
								<span class="text-danger"><?php echo form_error('family_address_state'); ?></span>
								
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Zipcode</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="family_address_zip" id="family_address_zip" value="<?php echo set_value('family_address_zip');?>" placeholder="Zip code" required>
								<span class="text-danger"><?php echo form_error('family_address_zip'); ?></span>
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
			  <input type="hidden" name="need_type" value="cc_request_court" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'needs/confirmation/ccrequestcourt');?>" />
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
</script>
</body>
</html>