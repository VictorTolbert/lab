<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$this->website_model->display_format_people_name_last($item['name_last']);
}
if(empty($item['id_people'])){
	$name .= ' New '.ucfirst($people_unit);
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

$has_history						= false;
$spouse_class 					= 'hide';
$spouse_button_class		= '';
if(!empty($item['name_spouse_last'])){
	$spouse_class 				= '';
	$spouse_button_class 	= 'hide';
}

 $upload_btn_text				= 'Add Profile Picture';
 
 $id_people_encoded			= '';
 
if(!empty($item['id_people_encoded'])){
	$id_people_encoded		= $item['id_people_encoded'];
}
$random = rand(1,2);
?>
<div class="hero-image" style=" background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/families/hero_families_<?= $random;?>.jpg'); background-position: top center; min-height: 500px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">Update Your Info</h1>';}?>
		<?php 
			switch($role_scope){
				case 'community_family':
					echo '<p class="text-center">Thank you for allowing us the opportunity to serve your family.</p>';
					echo '<p class="text-center">Please take 2-3 minutes to update your info below and ensure that we have the most current information so we can best serve your family.</p>';
				break;
				default:
					echo '<p class="text-center">Thank you for serving families with vulnerable children in your community!</p>';
					echo '<p class="text-center">Please take 2-3 minutes to update your info below and ensure that we have the most current information so we can help you serve stronger.</p>';
				break;
			}?>
		
	 </div>
</div>
	
<div class="col-sm-12 main container container-<?= $env_scope;?>">	
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
			</div>
			<div class="row">
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>people/save" method="post" autocomplete="off">
					
					<fieldset>
						<legend>Contact Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="name_first" id="name_first" value="<?php echo set_value('name_first', $item['name_first']);?>" placeholder="First name" required="required">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="name_last" id="name_last" value="<?php echo set_value('name_last', $this->website_model->display_format_people_name_last($item));?>" placeholder="Last name" required="required">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church">
									<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>">
									<span class="text-danger"><?php echo form_error('home_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_email_primary" id="people_email_primary" value="<?php echo set_value('people_email_primary', $this->website_model->display_format_email($item['people_email_primary']));?>" placeholder="Primary email address" autocomplete="new-password" <?php if(!empty($item['people_email_primary'])){ echo 'required';}?>>
								</div>
							</div>
							<?php if(!$card_entry_view){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_email_secondary" id="people_email_secondary" value="<?php echo set_value('people_email_secondary', $this->website_model->display_format_email($item['people_email_secondary']));?>" placeholder="Secondary email address" autocomplete="new-password">
								</div>
							</div>
							<?php }?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_phone_mobile" id="people_phone_mobile" value="<?php echo  format_phone(set_value('people_phone_mobile', $item['people_phone_mobile']));?>" placeholder="Mobile phone number">
								</div>
							</div>
							<?php if(!$card_entry_view){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_phone_home" id="people_phone_home" value="<?php echo  format_phone(set_value('people_phone_home', $item['people_phone_home']));?>" placeholder="Home phone number (optional)">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Work Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_phone_office" id="people_phone_office" value="<?php echo  format_phone(set_value('people_phone_office', $item['people_phone_office']));?>" placeholder="Office phone number (optional)">
								</div>
							</div>
							<?php }?>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_street_1" id="address_street_1" value="<?php echo set_value('address_street_1', $this->website_model->display_format_address_street($item['address_street_1']));?>" placeholder="Street address">
									<span class="text-danger"><?php echo form_error('address_street_1'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Apt or Unit #</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_street_2" id="address_street_2" value="<?php echo set_value('address_street_2', $item['address_street_2']);?>" placeholder="Suite, apartment nuber, or unit">
									<span class="text-danger"><?php echo form_error('address_street_2'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_city" id="address_city" value="<?php echo set_value('address_city',$this->website_model->display_format_address_city($item['address_city']));?>" placeholder="City">
									<span class="text-danger"><?php echo form_error('address_city'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_state" id="address_state" value="<?php echo set_value('address_state', $item['address_state']);?>" placeholder="State">
									<input type="hidden" name="address_state_abbrev" id="address_state_abbrev" value="<?php echo $item['address_state'];?>">
									<span class="text-danger"><?php echo form_error('address_state'); ?></span>
									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_zip" id="address_zip" value="<?php echo set_value('address_zip', $item['address_zip']);?>" placeholder="Zip code">
									<span class="text-danger"><?php echo form_error('address_zip'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">County</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_county" id="address_county" value="<?php echo set_value('address_county', $item['address_county']);?>" placeholder="County">
									<span class="text-danger"><?php echo form_error('address_county'); ?></span>
								</div>
							</div>
						</fieldset>
						<?php if(!$card_entry_view && 1 == 2){?>
						<fieldset>
							<legend>Password</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								  <input type="password" class="form-control" name="password" id="password" placeholder="leave blank to remain unchanged" autocomplete="new-password">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Password Confirm</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="leave blank to remain unchanged" autocomplete="new-password">
								</div>
							</div>
						</fieldset>
						<?php }?>
					<fieldset>
						<legend>Your Role</legend>
						<div class="col-sm-6 col-sm-offset-1">
							<h4 >What is your <em><strong>primary</strong></em> role on the advocate team at your church?</h4>
							<ul class="list-unstyled">
								<li class="top10"><input name="id_role" type="radio" class="" value="720" <?= $checked[720];?> required> I am the only advocate or I lead an advocate team at my church campus.</li>
								<li class="top10"><input name="id_role" type="radio" class="" value="730" <?= $checked[730];?> required> I am the only advocate or I lead an advocate team at my church.</li>
								<li class="top10"><input name="id_role" type="radio" class="" value="710" <?= $checked[710];?> required> I am a member of the advocate team at my church.</li>
							</ul>
						</div>							
					</fieldset>
					<fieldset>
						<legend>Profile Picture</legend>	
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center">
								<div id="profile-img-holder">
							<?php if(!empty($item['id_people'])){
											$img									= $this->people_model->get_avatar_filename($item);
										}
										if(!empty($img)){
											$upload_btn_text				= 'Change Profile Picture';
								?>
									
										<img src="<?php echo $img;?>" class="center-block img-responsive img-circle" width="200px" height="200px">
							<?php }else{
										$upload_btn_text				= 'Add Profile Picture';
								?>
										<i class="fa fa-user-circle fa-5x" aria-hidden="true"  class="center-block img-responsive img-circle" style="font-size: 150px; margin:20px"></i>
							<?php }?>
								</div>
								<div id="profile-img-croppie-holder" class="hide">
								</div>
								<div id="profile-img-controls" >
									<div class="row" >
										<button class="btn btn-default btn-sm hide" id="rotate-left" data-rotate="-90"><i class="fa fa-rotate-left"></i></button>
										<button class="btn btn-default btn-sm hide" id="rotate-right" data-rotate="90"><i class="fa fa-rotate-right"></i></button>
									</div>
									<div class="row top10">
										<button class="btn btn-success upload-result hide" id="btn-upload-result" data-url="<?php echo base_url();?>upload/imageprofile?pe=<?php echo $id_people_encoded;?>">Save Profile Picture</button>
										<label for="file-upload" class="custom-file-upload btn btn-primary" id="btn-upload">
											<i class="fa fa-image"></i> <span id="btn-upload-text"><?php echo $upload_btn_text;?>
										</label>
										<input id="file-upload" type="file"  accept="image/*;capture=camera" style="visibility: hidden;"/>
									</div>
								</div>	
							</div>
						</fieldset>
						
						
				<?php if(empty($item['agree_'.$role_scope.'_sign_date'])){ ?>
					<fieldset>
						<legend><?= ucfirst($people_unit);?> Agreement</legend>
						<div class="top20">
							<?php 
								if(!empty($_SESSION['affiliate']['affiliate_agree_'.$role_scope])){ 
									echo $this->website_model->format_copy($_SESSION['affiliate']['affiliate_agree_'.$role_scope]); 
								}else{
									echo $this->website_model->format_copy($_SESSION['affiliates'][1]['affiliate_agree_'.$role_scope]);
								}?>
								<p>A representative of the supported family must digitally sign this agreement by entering their full name below and clicking 'Save'.</p>
								<p>By signing this agreement you are also agreeing to adibe by the <a href="<?php echo base_url();?>terms" target="_blank">Terms of Service</a> for this website.</p>
						</div>
						<div class="col-sm-6 col-xs-12 col-sm-offset-3 top20">
							
							<input type="text" class="form-control" name="agree_family_sign_name" id="agree_family_sign_name" placeholder="Your Full Name As Signature" required>
						</div>
					</fieldset>
					<input type="hidden" name="agreement_type" value="<?=$role_scope;?>">
				<?php }?>
				
				<?php if($role_scope == 'advocate'){ ?>
					<fieldset>
						<legend>Additional Permission</legend>
						<p>We would like to save you some time by sending periodic emails to your volunteers for info update requests on your behalf.</p>
						<p>These emails will have your name and email address attached to them so your volunteers will recognize the sender and be more likely to respond to the information update request.</p>
						<p>This information will be strictly used to maintain the accuracy of your volunteer data. We, in no way will solicit your volunteers for donations or anything unrelated to a request for their data to be updated in Promise Serves.</p>
						<p>If you select "yes" below then you are giving your consent to let us send these emails on your behalf. Please note that we may still send information update requests to your volunteers from Promise Serves, but they will not be attached to your email address or name.</p>
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-12">You may send emails on my behalf</label>
							<div class="col-sm-3 col-xs-12">
								<input type="checkbox" name="auth_send_behalf" class="btn-switch" value="1" <?php if(!empty($item['auth_send_behalf'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<input type="hidden" name="auth_send_behalf_prev" value="<?php echo $item['auth_send_behalf'];?>">
								<span class="text-danger"><?php echo form_error('auth_send_behalf'); ?></span>
							</div>
						</div>	
					</fieldset>
				<?php }?>
						
				<div class="ln_solid"></div>					
				<div class="form-group">
					<div class="col-sm-12 col-xs-12 top30 text-center">
						<button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
					</div>
				</div>
				<input type="hidden" name="id_people_encoded" id="id_people_encoded" value="<?php echo $item['id_people_encoded'];?>" />
				<input type="hidden" name="posted" value="people" />
				<input type="hidden" name="r" value="<?php echo $redirect;?>" />
				<input type="hidden" name="count_assignments" id="count_assignments" value="0">
				<input type="hidden" name="role_scope" id="role_scope" value="<?php echo $role_scope;?>">
				<input type="hidden" name="role_scope_single" id="role_scope_single" value="advocate">
				<input type="hidden" name="people_state" id="people_state" value="<?php echo $edit_state;?>">
				<?php if(empty($item['id_people'])){ echo '<input type="hidden" name="assign[assignment_type][0]" value="'.$default_assignment_type.'">';}?>
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->

<?php echo $site_footer; ?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/moment.js" type="text/javascript" ></script>
<script src="<?php echo base_url();?>js/bootstrap-datetimepicker.js" type="text/javascript" ></script>
<script>

$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});
$(document).ready(function() {
	$('.pick-date').datetimepicker({
		format: 'MM/DD/YYYY'
	});
	$('.pick-time').datetimepicker({
		format: 'h:mm A'
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
			if(!!$('#id_church_add')){
				if($('#id_church_add').val() < 1){
					$('#id_church_add option[value='+suggestion.data+']').attr('selected','selected');
				}
			}
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
 
$('.form-horizontal').validate();
</script>
</body>
</html>