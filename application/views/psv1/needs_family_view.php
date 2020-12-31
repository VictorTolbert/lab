<!-- Header Section -->
<?php echo $site_header; ?>
<div class="container col-sm-12">
	<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20 text-center">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
			</div>
		</div>
	<div class="row top10">
		<h1 class="text-center">Refer a Family</h1>
		<h2 class="text-center">Enter Family Information to Request a Care Community</h2>
		<?php echo $this->session->flashdata('msg'); ?>
		<div class="panel panel-container col-sm-10 col-sm-offset-1">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>families/save" method="post" style="padding: 40px;">
					<fieldset>
						<legend>Support Groups</legend>
						<?php if(1 ==2){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="family_name" id="family_name" value="<?php echo set_value('family_name', $this->website_model->display_format_family_name($item));?>" placeholder="Family name (e.g. Smith Family)">
									<span class="text-danger"><?php echo form_error('family_name'); ?></span>
								</div>
							</div>
						
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('family_state', set_value('family_state', $item['family_state']), 'family_state', 'input-lg', array('view' => 'edit_family', 'required' => 1));?>
								</div>
							</div>
						<?php } ?>	
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Church</label>
								
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church" data-idtarget="id_home_church">
									<input type="hidden" name="id_church_home" id="id_home_church" value="<?php echo $item['id_church_home'];?>">
									<span class="text-danger"><?php echo form_error('home_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Agency</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_agencies('id_agency', set_value('id_agency', $item['id_agency']), 'id_agency', 'input-lg') ;?>
								</div>
							</div>
							<?php if(1 ==2){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Case Worker Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="case_worker_name" id="case_worker_name" value="<?php echo set_value('case_worker_name', $item['case_worker_name']);?>" placeholder="Case worker full name">
									<span class="text-danger"><?php echo form_error('case_worker_name'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Case Worker Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="case_worker_phone" id="case_worker_phone" value="<?php echo set_value('case_worker_phone', $item['case_worker_phone']);?>" placeholder="Case worker phone number">
									<span class="text-danger"><?php echo form_error('case_worker_phone'); ?></span>
								</div>
							</div>
							<?php }?>
						</fieldset>
						<fieldset>
							<?php 
								$parent_count	= count($item['foster_parents']);
								if($parent_count < 2 ){
									$parent_count = 2;
								}
								for($i =0; $i < $parent_count; $i++){
									$cur_parent		= $item['foster_parents'][$i];
									if(empty($cur_parent['id_role'])){$cur_parent['id_role'] =20;}
									$pronoun =  ucfirst($this->families_model->get_foster_parent_pronoun($cur_parent['id_role']));
							?>
							<legend>Foster <?php echo $pronoun;?> Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster <?php echo $pronoun;?> Name</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_parent_<?= $i;?>_name_first" id="foster_parent_<?= $i;?>_name_first" value="<?php echo set_value('foster_parent_'.$i.'_name_first', $cur_parent['name_first']);?>" placeholder="First name">
									 <span class="text-danger"><?php echo form_error('foster_parent_'.$i.'_name_first'); ?></span>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_parent_<?= $i;?>_name_last" id="foster_parent_<?= $i;?>_name_last" value="<?php echo set_value('foster_parent_'.$i.'_name_last',  $this->website_model->display_format_people_name_last($cur_parent['name_last']));?>" placeholder="Last name">
									 <span class="text-danger"><?php echo form_error('foster_parent_'.$i.'_name_last'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Role</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('foster_parent_'.$i.'_id_role', set_value('foster_mom_id_role', $cur_parent['id_role']), 'foster_parent_'.$i.'_id_role', 'input-lg', array('view' => 'edit_family_member_role'));?>
									<span class="text-danger"><?php echo form_error('foster_parent_'.$i.'_id_role'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="email" class="form-control" name="foster_parent_<?= $i;?>_people_email_primary" id="foster_parent_<?= $i;?>_people_email_primary" value="<?php echo set_value('foster_parent_'.$i.'_people_email_primary', $this->website_model->display_format_email($cur_parent['people_email_primary']));?>" placeholder="Primary email address">
									<span class="text-danger"><?php echo form_error('foster_parent_'.$i.'_people_email_primary'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="email" class="form-control" name="foster_parent_<?= $i;?>_people_email_secondary" id="foster_parent_<?= $i;?>_people_email_secondary" value="<?php echo set_value('foster_parent_'.$i.'_people_email_secondary', $this->website_model->display_format_email($cur_parent['people_email_secondary']));?>" placeholder="Secondary email address">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_parent_<?= $i;?>_people_phone_mobile" id="foster_parent_<?= $i;?>_people_phone_mobile" value="<?php echo  format_phone(set_value('foster_parent_'.$i.'_people_phone_mobile', $cur_parent['people_phone_mobile']));?>" placeholder="Mobile phone number">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_parent_<?= $i;?>_people_phone_home" id="foster_parent_<?= $i;?>_people_phone_home" value="<?php echo  format_phone(set_value('foster_parent_'.$i.'_people_phone_home', $cur_parent['people_phone_home']));?>" placeholder="Home phone number (optional)">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Work Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_parent_<?= $i;?>_people_phone_office" id="foster_parent_<?= $i;?>_people_phone_office" value="<?php echo  format_phone(set_value('foster_parent_'.$i.'_people_phone_office', $cur_parent['people_phone_office']));?>" placeholder="Office phone number (optional)">
								</div>
							</div>
							<input type="hidden" name="foster_parent_<?= $i;?>_id_people_encoded" value="<?php echo $cur_parent['id_people_encoded'];?>" />
							<input type="hidden" name="foster_parent_<?= $i;?>_id_assignment" value="<?php echo $cur_parent['id_assignment'];?>" />
						</fieldset>
							<?php 
								}
								?>
						<fieldset>
							<legend>Family Address</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="family_address_street_1" id="family_address_street_1" value="<?php echo set_value('family_address_street_1', $this->website_model->display_format_address_street($item['family_address_street_1']));?>" placeholder="Street address">
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
									<input type="text" class="form-control" name="family_address_city" id="family_address_city" value="<?php echo set_value('family_address_city',$this->website_model->display_format_address_city($item['family_address_city']));?>" placeholder="City">
									<span class="text-danger"><?php echo form_error('family_address_city'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="family_address_state" id="family_address_state" value="<?php echo set_value('family_address_state', $item['family_address_state']);?>" placeholder="State">
									<input type="hidden" name="family_address_state_abbrev" id="address_state_abbrev" value="<?php echo $item['family_address_state'];?>">
									<span class="text-danger"><?php echo form_error('family_address_state'); ?></span>
									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="family_address_zip" id="family_address_zip" value="<?php echo set_value('family_address_zip', $item['family_address_zip']);?>" placeholder="Zip code">
									<span class="text-danger"><?php echo form_error('family_address_zip'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">County</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="family_address_county" id="family_address_county" value="<?php echo set_value('family_address_county', $item['family_address_county']);?>" placeholder="County">
									<span class="text-danger"><?php echo form_error('family_address_county'); ?></span>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Requestor's Information</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Your First Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="requestor_name_first" id="requestor_name_first" value="<?php echo set_value('requestor_name_first', $item['requestor_name_first']);?>" placeholder="Requestor's first name" required>
									<span class="text-danger"><?php echo form_error('requestor_name_first'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Last Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="requestor_name_last" id="requestor_name_last" value="<?php echo set_value('requestor_name_last', $item['requestor_name_last']);?>" placeholder="Requestor's last name" required>
									<span class="text-danger"><?php echo form_error('requestor_name_last'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Phone Number</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="requestor_phone" id="requestor_phone" value="<?php echo set_value('requestor_phone', $item['requestor_phone']);?>" placeholder="Requestor's phone number" required>
									<span class="text-danger"><?php echo form_error('requestor_phone'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="requestor_email" id="requestor_email" value="<?php echo set_value('requestor_email', $item['requestor_email']);?>" placeholder="Requestor's email address" required>
									<span class="text-danger"><?php echo form_error('requestor_email'); ?></span>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Additional Info <small>(If known)</small></legend>
							<div class="form-group">
								<label class="control-label col-sm-6 col-xs-12">Has either parent previously served on a Care Community?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="previously_served_on_cc" class="btn-switch" value="1" <?php if(!empty($item['previously_served_on_cc'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<span class="text-danger"><?php echo form_error('previously_served_on_cc'); ?></span>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-6 col-xs-12">Has this family previously fostered?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="previously_fostered" class="btn-switch" value="1" <?php if(!empty($item['previously_fostered'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<span class="text-danger"><?php echo form_error('family_food_allergies'); ?></span>
								</div>
							</div>	
							
							<div class="form-group">
								<label class="control-label col-sm-6 col-xs-12">Did the church play any part in recruiting this Foster Family?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="recruited_by_church" class="btn-switch" value="1" <?php if(!empty($item['recruited_by_church'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									 <span class="text-danger"><?php echo form_error('recruited_by_church'); ?></span>
								</div>
							</div>
							<div class="row top40">
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Recruiting Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo  $this->website_model->input_menu_churches('id_church_recruited', $item['id_church_recruited'] , 'id_church_recruited', 'input-lg', $item) ;?>
									<span class="text-danger"><?php echo form_error('id_church_recruited'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Adoption Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('status_adoption', set_value('status_adoption', $item['status_adoption']), 'status_adoption', 'input-lg', array('view' => 'status_adoption'));?>
									<input type="hidden" name="status_adoption_prev" value="<?php echo $item['status_adoption'];?>">
									<input type="hidden" name="recruited_by_church_prev" value="<?php echo $item['recruited_by_church'];?>">
									<input type="hidden" name="previously_served_on_cc_prev" value="<?php echo $item['previously_served_on_cc'];?>">
								</div>
							</div>							
						</fieldset>
						
				<div class="ln_solid top40"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				  
				  <button type="submit" class="btn btn-success btn-lg btn-submit" name="save" value="1">Save</button>
				</div>
			  </div>
			  <input type="hidden" name="id_family_encoded" value="<?php echo $item['id_family_encoded'];?>" />
			  <input type="hidden" name="posted" value="family" />
			  <input type="hidden" name="source" value="needs" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'needs/familysaveconfirmation');?>" />
			  <input type="hidden" name="t" value="<?php echo $t;?>" />
			  <input type="text" name="phone" style="visibility: hidden;" placeholder="Phone Number"/>
			  <input type="hidden" name="count_assignments_kids" id="count_assignments_kids" value="<?php echo $item['count_assignments_kids'];?>">
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
	
	$('#address_state').autocomplete({
		lookup: allstates,
		onSelect: function (suggestion) {
			$('#address_state_abbrev').val(suggestion.data);
		}
	});
});
</script>
</body>
</html>