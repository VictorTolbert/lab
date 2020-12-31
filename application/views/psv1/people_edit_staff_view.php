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
					<a href="<?php echo base_url();?>staff/list">
						Staff 
					</a>
				</li>
				<li class="active"><?php echo $action.' '.ucfirst($people_unit);?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Staff Member<?php echo $name;?></h1>
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
							<i class="fa fa-user-circle fa-5x" aria-hidden="true"  class="center-block img-responsive img-circle" style="font-size: 200px;"></i>
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
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>people/save" method="post">
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
					<?php if($this->security_model->user_has_access(95)){?>							
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->website_model->input_menu_affiliates('id_affiliate', set_value('id_affiliate', $item['assign_id_affiliate']), 'id_affiliate', 'input-lg', array('view' => 'edit_affiliates', 'required' =>1));?>
							</div>
						</div>
					<?php }?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('people_state', set_value('people_state', $item['people_state']), 'people_state', 'input-lg', array('view' => 'edit_staff', 'required' =>1));?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo  $this->website_model->input_menu_roles('staff_role', $item['staff_role'], 'staff_role', 'input-lg', array('view' => 'edit_staff', 'role_scope' => 'staff','required' => 1)) ;?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Is Affiliate Admin</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="is_affiliate_admin" class="btn-switch" <?php if(!empty($item['is_affiliate_admin'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success"  value="1" >
								</div>
								
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church">
									<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>">
									<span class="text-danger"><?php echo form_error('home_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_email_primary" id="people_email_primary" value="<?php echo set_value('people_email_primary', $this->website_model->display_format_email($item['people_email_primary']));?>" placeholder="Primary email address" required>
								</div>
							</div>
							<?php if(!$card_entry_view){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_email_secondary" id="people_email_secondary" value="<?php echo set_value('people_email_secondary', $this->website_model->display_format_email($item['people_email_secondary']));?>" placeholder="Secondary email address">
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
						<?php if(!$card_entry_view){?>
						<fieldset>
							<legend>Password</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								  <input type="password" class="form-control" name="password" id="password" placeholder="leave blank to remain unchanged">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Password Confirm</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="leave blank to remain unchanged">
								</div>
							</div>
							<?php if($this->security_model->user_has_access(85)){?>
							<fieldset>
								<legend>Advocate Resources Access</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Has Advocate Resources Access?</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="has_portal_access" id="has_portal_access" class="btn-switch" value="1" <?php if(!empty($item['has_portal_access'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="has_portal_access_prev"  value="<?php echo $item['has_portal_access'];?>">
									<span class="text-danger"><?php echo form_error('has_portal_access'); ?></span>
									</div>
								</div>
							</fieldset>
							<?php }?>
							<?php if($this->security_model->user_has_access(90)){?>		
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Force User to change password on next login?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" name="pass_reset_force" class="btn-switch" value="1" data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<span class="text-danger"><?php echo form_error('pass_reset_force'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Send User Credentials?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" name="send_user_credentials" id="send_user_credentials" class="btn-switch" value="staff" data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<span class="text-danger"><?php echo form_error('send_user_credentials'); ?></span>
								</div>
							</div>
							<?php }?>
							
						</fieldset>
						<?php }?>
						<?php if($card_entry_view || (!empty($item['id_people_encoded']) && empty($item['vol_agree_sign_name']))){?>
						<fieldset>
							<legend>Volunteer Agreement</legend>
								<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
									<div class="form-group">
										<div class="col-md-3">
											<input type="checkbox" name="quick_entry_vol_agreement" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success"  value="1" >
										</div>
										<div class="col-md-9">
											Signed Volunteer Agreement?
										</div>
									</div>
								</div>
						</fieldset>
						<?php }?>
						<div class="top30"></div>
						
						<?php echo $this->people_model->build_people_edit_assignment_tables(array('id_people' => $item['id_people'])); ?>
						<?php 
								if(empty($item['id_people'])){
									echo '<input type="hidden" name="assign[assignment_type][0]" value="people_to_staff">';
								}elseif(1 == 2){
									
							?>
						<fieldset>
							<legend>Roles, Assignments, & History</legend>
							<div class="form-group">
								<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
									<table class="table table-striped table-bordered table-responsive nowrap" id="table-role-assignments">
										<thead>
											<tr>
												<th>Church</th>
												<th>Community / Event</th>
												<th>Role</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												//print_array($assignments);
		
												if(!empty($assignments) && count($assignments) > 0){
													foreach($assignments as $cur_assign){
														if(empty($cur_assign['id_assignment'])){
															$cur_assign['id_assignment']	= 0;
														}
														if(empty($cur_assign['id_msg'])){
															$cur_assign['show_all_roles']		= 1;										
															if(!empty($cur_assign['assign_state']) && $cur_assign['assign_state'] == -2){
																$has_history = true;
															}
															//$cur_status 	= 'on '.date_create(date('Y-m-d H:i:s', $cur_status['date_add']))->setTimezone(new DateTimeZone($admin['user_time_zone']))->format('Y-m-d H:i');
															if(!empty($cur_assign['assign_state'])){
																switch($cur_assign['assign_state']){
																	case 1:
																		$cur_status 	= 'Added on '.date_offset('m/d/Y', $cur_assign['assign_date_add']);
																	break;
																	case -2:
																		if(!empty($cur_assign['assign_date_removed'])){
																			$cur_status 	= 'Removed on '.date_offset('m/d/Y', $cur_assign['assign_date_removed']);
																		}else{
																			$cur_status 	= 'Removed on '.date_offset('m/d/Y', $cur_assign['assign_date_mod']);
																		}
																		
																	break;
																}
															}else{
																
																$cur_status 	= '';
															}
											?>
												<tr class="assign-id-<?php echo $cur_assign['id_assignment'];?>">
													<td>
														<?php echo  $this->churches_model->get_church_name($cur_assign) ;?>
													</td>
													<td>
														<?php  if(!empty($cur_assign['community_name'])){ echo $cur_assign['community_name']; }?>
													</td>
													<td>
														<?php if(!empty($cur_assign['role_name'])){ echo  $cur_assign['role_name']; }?>
													</td>
													
													
													<td>
														<?php echo $cur_status;?>
													</td>
												</tr>
											<?php 
															$i++;
														}
													}
												}
											?>
											<tr id="add_role_people_to_church" class="hide add-to-church">
												<td>
													<?php echo  $this->website_model->input_menu_churches('assign[id_church][]', '', 'id_church_add_role_to_church', 'input-md', $cur_assign) ;?>
												</td>
												<td>
													N/A
													<input type="hidden" name="assign[id_community][]" value="">
													<input type="hidden" name="assign[id_event][]" value="">
													<input type="hidden" name="assign[id_affiliate][]" value="">
												</td>
												<td>
													<?php echo  $this->website_model->input_menu_roles('assign[id_role][]', $cur_assign['id_role'] , 'id_role_add_role_to_church', 'input-md', array('role_scope_limiters' => 'people_to_church')) ;?>
												</td>
												<td>
													<input type="hidden" name="assign[assignment_type][]" value="people_to_church">
												</td>
											</tr>
											<tr id="add_role_people_to_community" class="hide add-to-care-community">
												<td>
													<?php echo  $this->website_model->input_menu_churches('assign[id_church][]', '' , 'id_church_add_role_people_to_community', 'input-md select-has-limiter-church', array('data' => array('uid' => '1')));?>
												</td>
												<td>
													<?php echo  $this->website_model->input_menu_communities_by_church('assign[id_community][]', '', '', 'input-md add-role-to-community-communities', array('use_post_array' => 1, 'data' => array('uid' => '1'))) ;?>
													<input type="hidden" name="assign[id_event][]" value="">
													<input type="hidden" name="assign[id_affiliate][]" value="">
												</td>
												<td>
													<?php echo  $this->website_model->input_menu_roles('assign[id_role][]', $cur_assign['id_role'] , 'id_role_add_role_people_to_community', 'input-md', array('role_scope_limiters' => 'people_to_community')) ;?>
												</td>
												<td>
													<input type="hidden" name="assign[assignment_type][]" value="people_to_community">
												</td>
											</tr>
											<tr id="add_role_people_to_event" class="hide add-to-event">
												<td>
													<?php echo  $this->website_model->input_menu_churches('assign[id_church][]', '' , 'id_church_add_role_people_to_event', 'input-md', $cur_assign) ;?>
												</td>
												<td>
													<?php echo  $this->website_model->input_menu_events('assign[id_event][]', '', 'id_community_add_role_people_to_event', 'input-md', $cur_assign) ;?>
													<input type="hidden" name="assign[id_community][]" value="">
													<input type="hidden" name="assign[id_affiliate][]" value="">
												</td>
												<td>
													<?php echo  $this->website_model->input_menu_roles('assign[id_role][]', $cur_assign['id_role'] , 'id_role_add_role_people_to_event', 'input-md', array('role_scope_limiters' => 'people_to_event')) ;?>
												</td>
												<td>
													<input type="hidden" name="assign[assignment_type][]" value="people_to_event">
												</td>
											</tr>
											<tr id="add_role_people_to_staff" class="hide add-to-staff">
												<td>
													N/A
													<input type="hidden" name="assign[id_church][]" value="">
												</td>
												<td>
													N/A
													<input type="hidden" name="assign[id_event][]" value="">
													<input type="hidden" name="assign[id_community][]" value="">
													<input type="hidden" name="assign[id_affiliate][]" value="">
												</td>
												<td>
													<?php echo  $this->website_model->input_menu_roles('assign[id_role][]', $cur_assign['id_role'] , 'id_role_0', 'input-md', array('role_scope_limiters' => 'people_to_staff')) ;?>
												</td>
												<td>
													<input type="hidden" name="assign[assignment_type][]" value="people_to_staff">
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="4" class="text-center">
													<div class="top30 text-center">
															<div class="dropdown btn-add-assign-or-role block-center" id="btn-assign-wrapper">
															  <button class="btn btn-primary dropdown-toggle block-center" type="button" id="AddBtnMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																<i class="fa fa-plus"></i> Add Role or Assignment
															  </button>
															<ul class="dropdown-menu" aria-labelledby="AddBtnMenu">
																<li><a href="#" id="btn-add-to-church" data-view="add_role_people_to_church" class="btn-add-role-type">Add to Church</a></li>
																<li><a href="#" id="btn-add-to-team"  data-view="add_role_people_to_community" class="btn-add-role-type">Add Role on Care Community</a></li>
																<!-- <li><a href="#" id="btn-add-to-event"  data-view="add_role_people_to_event" class="btn-add-role-type">Add to Event</a></li>	
																<li><a href="#" id="btn-add-to-staff"  data-view="add_role_people_to_staff" class="btn-add-role-type">Add to Staff</a></li>	-->
															</ul>
														</div>
													</div>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</fieldset>
					<?php }?>

						<?php if($has_history && 1==2){?>
						<fieldset>
							<legend>Past Assignments & Roles</legend>
							<div class="form-group">
								<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
									<table class="table table-striped table-bordered table-responsive nowrap" id="table-role-assignments">
										<thead>
											<tr>
												<th>Church</th>
												<th>Role</th>
												<th>Community</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												foreach($assignments as $cur_assign){
													$cur_assign['show_all_roles']		= 1;
													if($cur_assign['assign_state'] == -2){
											?>
												<tr>
													<td>
														<?php echo  $this->churches_model->get_church_name($cur_assign) ;?>
													</td>
													<td>
														<?php echo $cur_assign['role_name'] ;?>
													</td>
													<td>
														<?php echo  $cur_assign['community_name'] ;?>
													</td>
													
													<td>
														<?php echo 'Removed on '.format_date($cur_assign['date_mod'], 'dateonly');?>
													</td>
												</tr>
											<?php 
														$i++;
													}
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</fieldset>
						<?php }?>
						<?php if( 1==2){?>
						<fieldset>
							<legend>Interests</legend>
							<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
								<?php echo $this->people_model->make_interest_checkboxes($checkboxes, $checked, $item);?>
							</div>
						</fieldset>
		
						<fieldset>
							<legend>Certifications</legend>
							<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
								<div class="form-group">
									<label class="control-label col-sm-5 col-xs-12">Has been CPR certified?</label>
									<div class="col-sm-4 col-xs-12">
										<input type="checkbox" name="has_cert_cpr" class="btn-switch" value="1" <?php if(!empty($item['has_cert_cpr'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<span class="text-danger"><?php echo form_error('has_cert_cpr'); ?></span>
									</div>
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
										<?php echo $this->website_model->input_menu_agencies('cert_mentor_agency_ids', $item['cert_mentor_agency_ids'] , 'cert_mentor_agency_ids', 'input-md', $item) ;?>
										<span class="text-danger"><?php echo form_error('cert_mentor_agency_ids'); ?></span>
									</div>
								</div>
							</div>
						</fieldset>
						<?php }?>
						<fieldset>
							<legend>Notes</legend>
							<div class="form-group">
								<div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
									<table class="table table-striped table-bordered table-responsive nowrap" id="table-role-assignments">
										<thead>
											<tr>
												<th>From</th>
												<th>Note</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												if(count($messages) > 0){
													foreach($messages as $cur_msg){
												?>
													<tr>
														<td class="text-center">
															<?php echo  $this->people_model->display_people_avatar($cur_msg);?>
															<?php echo '<br />'.$cur_msg['author_name_first'].' '.$this->website_model->display_format_people_name_last($cur_msg['author_name_last']).'<br />'.format_date($cur_msg['date_add']);?>
														</td>
														<td>
															<?php if(!empty($cur_msg['msg_body'])){ echo  $cur_msg['msg_body']; }?>
														</td>
														<td>
															<input type="hidden" class="id-msg-assignment" name="id_msg_assignment_<?php echo $i;?>" id="id_msg_assignment_<?php echo $i;?>" value="<?php if(!empty($cur_msg['id_assignment'])){ echo $cur_msg['id_assignment']; }?>">
															<input type="hidden" class="id-msg" name="id_msg_<?php echo $i;?>" id="id_msg_<?php echo $i;?>" value="<?php if(!empty($cur_msg['id_msg'])){ echo $cur_msg['id_msg']; }?>">
														</td>
													</tr>
												<?php 
															$i++;
													} 
												}
												$i=0;
												?>
												<tr>
														<td class="text-center">
															<?php echo  $this->people_model->display_people_avatar($user);?>
															<?php echo '<br />'.$user['name_first'].' '.$this->website_model->display_format_people_name_last($user['name_last']).'<br /><small>'.format_date().'</small>';?>
														</td>
														<td>
															<textarea name="msg_body_<?php echo $i;?>" id="msg_body_<?php echo $i;?>" class="form-control" rows="5" placeholder="Enter a message">
</textarea>
														</td>
														<td>
															<input type="hidden" class="id-msg-assignment" name="id_msg_assignment_<?php echo $i;?>" id="id_msg_<?php echo $i;?>" value="">
															<input type="hidden" class="id-msg" name="id_msg_<?php echo $i;?>" id="id_msg_<?php echo $i;?>" value="">
														</td>
													</tr>
										</tbody>
										<!--
										<tfoot>
											<tr>
												<td colspan="4" class="text-center">
													<div class="top30">
														<a class="btn btn-default btn-add-note"><i class="fa fa-plus"></i> Add Note</a>
													</div>
												</td>
											</tr>
										</tfoot>
										-->
									</table>
								</div>
							</div>
						</fieldset>
						<?php if($this->security_model->user_has_access(95)){?>	
						<fieldset>
							<legend>Salesforce</legend>
								<div class="form-group">
									<label class="control-label col-sm-3 col-xs-6">Salesforce ID</label>
									<div class="col-sm-9 col-xs-6">
										<input type="text" class="form-control" name="id_salesforce" id="id_salesforce" value="<?php echo set_value('id_salesforce', $item['id_salesforce']);?>" placeholder="ISalesforce Object ID">
									</div>
								</div>
							</fieldset>
						<?php }?>
					<div class="ln_solid"></div>
					
			  <div class="form-group">
				<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 top30">

				   <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
				  <a href="<?php echo base_url().$url_scope.'/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button>
				</div>
			  </div>
			  <input type="hidden" name="id_people_encoded" value="<?php echo $item['id_people_encoded'];?>" />
			  <input type="hidden" name="posted" value="people" />
			  <input type="hidden" name="r" value="<?php echo $redirect;?>" />
			  <input type="hidden" name="count_assignments" id="count_assignments" value="0">
			  <input type="hidden" name="role_scope" id="role_scope" value="<?php echo $role_scope;?>">
			  <input type="hidden" name="count_messages" id="count_messages" value="<?php echo $count_messages;?>">
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