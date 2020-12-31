<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$this->website_model->display_format_people_name_last($item);
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

?>
	
	<div class="col-sm-12 main container-fluid">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>volunteers/list">
						Volunteers 
					</a>
				</li>
				<li class="active"><?php echo $action.' '.ucfirst($people_unit);?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Volunteer<?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
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
						<h2 class="text-center" style="margin: 5px;"><?php echo $item['name_first'].' '.$this->website_model->display_format_people_name_last($item['name_last']);?></h2>
					</div>	
				</div>
				<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
			</div>
			<div class="row">
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>people/save" method="post" autocomplete="off" id="form_edit_volunteer">
					<fieldset>
						<legend>Contact Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="name_first" id="name_first" value="<?php echo set_value('name_first', $item['name_first']);?>" placeholder="First name" required="required">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name<?php if(1 == 2){?><br /><small class="<?php echo $spouse_button_class;?>"><a  href="#" id="btn_add_spouse">[Add Spouse]</a></small><?php }?></label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="name_last" id="name_last" value="<?php echo set_value('name_last', $this->website_model->display_format_people_name_last($item));?>" placeholder="Last name" required="required">
								</div>
							</div>
							<?php if(1 == 2){?>
							<div class="form-group <?php echo $spouse_class;?>" id="spouse_name_wrapper_first">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Spouse First Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="name_spouse_first" id="name_spouse_first" value="<?php echo set_value('name_spouse_first', $item['name_spouse_first']);?>" placeholder="Spouse first name">
								</div>
							</div>
							<div class="form-group <?php echo $spouse_class;?>" id="spouse_name_wrapper_last">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Spouse Last Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="name_spouse_last" id="name_spouse_last" value="<?php echo set_value('name_spouse_last',$this->website_model->display_format_people_name_last($item['name_spouse_last']));?>" placeholder="Spouse last name">
								</div>
							</div>
							<?php }?>
							<?php if($this->security_model->user_has_access(60)){ ?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('people_state', set_value('people_state', $item['people_state']), 'people_state', 'input-lg', array('view' => 'edit_volunteer', 'required' =>1));?>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control autocomplete-church ps-user-entered-church" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church" data-idtarget="id_home_church">
									<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>" >
									<span class="text-danger"><?php echo form_error('home_church'); ?></span>
								</div>
							</div>
							<?php }?>
							<?php if($this->security_model->user_has_access(80) || ($this->security_model->user_has_access(60) && count($this->security_model->get_admin_church_id_array()) > 1)){ 
									/*
									$id_church_add = $_SESSION['view_limiter']['id_church'];
									if(!empty($item['id_church_add'])){
										$id_church_add = $item['id_church_add'];
									}elseif(!empty($item['id_home_church'])){
										$id_church_add = $item['id_home_church'];
									}
									*/
							?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Assigned Church <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="For volunteers that may not have a home church but need to be grouped with a specific church.<br /><br /> This is required if no home church is selected."></i></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<?php echo  $this->website_model->input_menu_churches('id_church_add', set_value('id_church_add', $item['id_church_add']) , 'id_church_add', 'form-control input-lg', array('required' => 1, 'include_parent_church_ids' => 0, 'church_add_view' => 1)) ;?>
								</div>
							</div>
							<?php }?>
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
							<?php if($this->affiliates_model->get_affiliate_param(array('param_name' => 'signup_request_occupation'))){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="occupation" id="occupation" value="<?php echo  set_value('occupation', $item['occupation']);?>" placeholder="Occupation">
									</div>
								</div>
							<?php }?>
							
							<?php if(empty($item['id_people'])){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php echo $this->places_model->make_input_address_lookup_field($item);?>
									</div>
								</div>
							<?php }else{?>
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
									<input type="text" class="form-control ps-assist-zip" name="address_zip" id="address_zip" value="<?php echo set_value('address_zip', $item['address_zip']);?>" placeholder="Zip code">
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
							<?php }?>
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
						<?php if($this->security_model->user_has_access(60)){ ?>	
						<fieldset>
							<legend>Volunteer Eligibility</legend>
							
							<?php if(empty($item['vol_agree_sign_name'])){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-6 col-xs-6">
										Signed Volunteer Agreement?
									</label>
									<div class="col-md-3">
										<input type="checkbox" name="quick_entry_vol_agreement" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success"  value="1" >
									</div>
									
								</div>
							<?php }else{?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-6 col-xs-6">Signed Agreement On: <?php echo date_offset('M d, Y', $item['vol_agree_sign_date']);?></label>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<a class="btn btn-default" href="<?php echo base_url();?>form/volunteeragreement/<?php echo $item['id_people_encoded'];?>/?show_print=1" target="_blank">View / Print Agreement</a>
									</div>
								</div>
							<?php }?>
							<?php if(empty($item['cert_church_approval'])){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-6 col-xs-6">
										Has Applicable Church Approval?
									</label>
									<div class="col-md-3">
										<input type="checkbox" name="cert_church_approval" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success"  value="1" >
									</div>
									
								</div>
							<?php }else{?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-6 col-xs-6">Has Church Volunteer Approval</label>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<i class="fas fa-check-circle fa-2x"></i>
									</div>
								</div>
							<?php }?>
						</fieldset>
						<?php } ?>
						
						<div class="ln_solid"><hr /></div>					
						<div class="form-group">
							<?php echo $this->website_model->make_edit_buttons(array('url_cancel' => $url_cancel, 'url_redirect' => $url_redirect)); ?>
						</div>
					<?php if($this->security_model->user_has_access(60)){ ?>	
						<div class="top30"></div>
						<?php echo $this->people_model->build_people_edit_assignment_tables(array('id_people' => $item['id_people'])); ?>						
						<fieldset>
							<legend>Interests</legend>
							<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
							<?php echo $this->people_model->make_interest_checkboxes($checkboxes, $checked, $item);?>
							</div>
						</fieldset>
						<?php if(1==1){?>
						<fieldset>
							<legend>Volunteer Compliance</legend>
							<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
							<?php 
								$custom_compliance = $this->people_model->build_custom_compliance_checkboxes(array('people' => $item));
																
								if(!empty($custom_compliance)){
									echo $custom_compliance;
								}else{?>
								
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Affiliate Training Completed</label>
										<div class="col-sm-4 col-xs-12">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
												<?php 
														$cur_exp_date = '';
														if($item['cert_training_affiliate'] > 0 ){
															$cur_exp_date = date('m/d/Y', $item['cert_training_affiliate']);
														}
												?>
												<input type="text" class="form-control date pick-date" name="cert_training_affiliate" id="cert_training_affiliate" value="<?php echo set_value('cert_training_affiliate', $cur_exp_date);?>" placeholder="Date Completed">
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('cert_training_affiliate'); ?></span>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Agency Training Completed</label>
										<div class="col-sm-4 col-xs-12">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
												<?php 
														$cur_exp_date = '';
														if($item['cert_training_agency'] > 0 ){
															$cur_exp_date = date('m/d/Y', $item['cert_training_agency']);
														}
												?>
												<input type="text" class="form-control date pick-date" name="cert_training_agency" id="cert_training_agency" value="<?php echo set_value('cert_training_agency', $cur_exp_date);?>" placeholder="Date Completed">
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('cert_training_agency'); ?></span>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Church Training Completed</label>
										<div class="col-sm-4 col-xs-12">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
												<?php 
														$cur_exp_date = '';
														if($item['cert_training_church'] > 0 ){
															$cur_exp_date = date('m/d/Y', $item['cert_training_church']);
														}
												?>
												<input type="text" class="form-control date pick-date" name="cert_training_church" id="cert_training_church" value="<?php echo set_value('cert_training_church', $cur_exp_date);?>" placeholder="Date Completed">
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('cert_training_church'); ?></span>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Agency Background Check Completed</label>
										<div class="col-sm-4 col-xs-12">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
												<?php 
														$cur_exp_date = '';
														if($item['cert_bg_check_agency'] > 0 ){
															$cur_exp_date = date('m/d/Y', $item['cert_bg_check_agency']);
														}
												?>
												<input type="text" class="form-control date pick-date" name="cert_bg_check_agency" id="cert_bg_check_agency" value="<?php echo set_value('cert_bg_check_agency', $cur_exp_date);?>" placeholder="Date Completed">
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('cert_bg_check_agency'); ?></span>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Church Background Check Completed</label>
										<div class="col-sm-4 col-xs-12">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
												<?php 
														$cur_exp_date = '';
														if($item['cert_bg_check_church'] > 0 ){
															$cur_exp_date = date('m/d/Y', $item['cert_bg_check_church']);
														}
												?>
												<input type="text" class="form-control date pick-date" name="cert_bg_check_church" id="cert_bg_check_church" value="<?php echo set_value('cert_bg_check_church', $cur_exp_date);?>" placeholder="Date Completed">
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('cert_bg_check_church'); ?></span>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Fingerprints Completed</label>
										<div class="col-sm-4 col-xs-12">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
												<?php 
														$cur_exp_date = '';
														if($item['cert_fingerprints'] > 0 ){
															$cur_exp_date = date('m/d/Y', $item['cert_fingerprints']);
														}
												?>
												<input type="text" class="form-control date pick-date" name="cert_fingerprints" id="cert_fingerprints" value="<?php echo set_value('cert_fingerprints', $cur_exp_date);?>" placeholder="Date Completed">
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('cert_fingerprints'); ?></span>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">CPR Expiration Date</label>
										<div class="col-sm-4 col-xs-12">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
												<?php 
														$cur_exp_date = '';
														if($item['cert_cpr_date_expire'] > 0 ){
															$cur_exp_date = date('m/d/Y', $item['cert_cpr_date_expire']);
														}
												?>
												<input type="text" class="form-control date pick-date" name="cert_cpr_date_expire" id="cert_cpr_date_expire" value="<?php echo set_value('cert_cpr_date_expire', $cur_exp_date);?>" placeholder="Expiration Date">
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('has_cert_cpr'); ?></span>
									</div>							
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Has been approved by agency to babysit?</label>
										<div class="col-sm-4 col-xs-12">
											<input type="checkbox" name="has_cert_mentor" class="btn-switch" value="1" <?php if(!empty($item['has_cert_mentor'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
											<span class="text-danger"><?php echo form_error('has_cert_mentor'); ?></span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-5 col-xs-12">Which Agency?</label>
										<div class="col-sm-4 col-xs-12">
											<?php echo $this->website_model->input_menu_agencies('cert_mentor_agency_ids', $item['cert_mentor_agency_ids'] , 'cert_mentor_agency_ids', 'form-control input-lg', $item) ;?>
											<span class="text-danger"><?php echo form_error('cert_mentor_agency_ids'); ?></span>
										</div>
									</div>
								
							<?php } //end custom compliance fields check?>
							</div>
						</fieldset>
						<?php }?>
						<fieldset>
							<legend>Notes <small><small>Only advocates and staff can see these notes</small></small></legend>
							<?php echo $this->messages_model->make_notes_section(array('messages' => $messages));?>
						</fieldset>
						
				<div class="ln_solid"></div>					
				<div class="form-group">
					<?php echo $this->website_model->make_edit_buttons(array('url_cancel' => $url_cancel, 'url_redirect' => $url_redirect)); ?>
				</div>
				<?php }?>
				<input type="hidden" name="id_people_encoded" id="id_people_encoded" value="<?php echo $item['id_people_encoded'];?>" />
				<input type="hidden" name="posted" value="people" />
				<input type="hidden" name="r" value="<?php echo $redirect;?>" />
				<input type="hidden" name="count_assignments" id="count_assignments" value="0">
				<input type="hidden" name="role_scope" id="role_scope" value="<?php echo $role_scope;?>">
				<input type="hidden" name="count_messages" id="count_messages" value="<?php echo $count_messages;?>">
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
	instantiate_user_entered_church_lookup();
});
 
$('.form-horizontal').validate();


function ps_gmap_autocomplete_init() {
	var input = document.getElementById('place_address');
	var autocomplete = new google.maps.places.Autocomplete(input);
	google.maps.event.addListener(autocomplete, 'place_changed', function () {
		var place = autocomplete.getPlace();		
		ps_parse_gmap_place_values(place);
		
	});
}


$(document).ready( function() {
	if($('#place_address').is(':visible')){
		google.maps.event.addDomListener(window, 'load', ps_gmap_autocomplete_init);
	}
});

</script>

</body>
</html>