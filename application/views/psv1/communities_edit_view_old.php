<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['community_name'])){
		$name	.= ' '.$item['community_name'];
}
if(empty($item['id_community'])){
	$name .= ' New Care Community';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';
?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>communities/list">
						Communities
					</a>
				</li>
				<li class="active"><?php echo $action.' '.ucfirst($people_unit);?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Care Community<?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div id="profile-img-holder">
				<?php if(!empty($item['id_community'])){
								$img									= $this->communities_model->get_avatar_filename($item);
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
							<button class="btn btn-success upload-result hide" id="btn-upload-result" data-url="<?php echo base_url();?>upload/imageprofile?ce=<?php echo $id_community_encoded;?>">Save Profile Picture</button>
							<label for="file-upload" class="custom-file-upload btn btn-primary" id="btn-upload">
								<i class="fa fa-image"></i> <span id="btn-upload-text"><?php echo $upload_btn_text;?>
							</label>
							<input id="file-upload" type="file"  accept="image/*;capture=camera" style="visibility: hidden;"/>
							
						</div>
						<h2 class="text-center" style="margin: 5px;"><?php echo $name;?></h2>
					</div>	
				</div>
				<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
			</div>
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>communities/save" method="post">
					<fieldset>
						<legend>Care Community Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Community Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="community_name" id="community_name" value="<?php echo set_value('community_name', $item['community_name']);?>" placeholder="Community name (e.g. Smith Family)">
									<span class="text-danger"><?php echo form_error('community_name'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('community_state', set_value('community_state', $item['community_state']), 'community_state', 'input-lg', array('view' => 'edit_community'));?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo  $this->website_model->input_menu_churches('id_church', $item['id_church'] , 'id_church', 'input-lg', $item) ;?>
									<span class="text-danger"><?php echo form_error('id_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster Family Address</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="community_address_street_1" id="community_address_street_1" value="<?php echo set_value('community_address_street_1', $item['community_address_street_1']);?>" placeholder="Street address">
									<span class="text-danger"><?php echo form_error('community_address_street_1'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Apt or Unit #</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="community_address_street_2" id="community_address_street_2" value="<?php echo set_value('community_address_street_2', $item['community_address_street_2']);?>" placeholder="Suite, apartment nuber, or unit">
									<span class="text-danger"><?php echo form_error('community_address_street_2'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="community_address_city" id="community_address_city" value="<?php echo set_value('community_address_city', $item['community_address_city']);?>" placeholder="City">
									<span class="text-danger"><?php echo form_error('community_address_city'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="community_address_state" id="community_address_state" value="<?php echo set_value('community_address_state', $item['community_address_state']);?>" placeholder="State Abbreviation (e.g. GA)">
									<span class="text-danger"><?php echo form_error('community_address_state'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="community_address_zip" id="community_address_zip" value="<?php echo set_value('community_address_zip', $item['community_address_zip']);?>" placeholder="Zip code">
									<span class="text-danger"><?php echo form_error('community_address_zip'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Agency</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="agency" id="agency" value="<?php echo set_value('agency', $item['agency']);?>" placeholder="Agency name">
									<span class="text-danger"><?php echo form_error('agency'); ?></span>
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
							<legend>Foster Mom Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster Mom Name</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_name_first" id="foster_mom_name_first" value="<?php echo set_value('foster_mom_name_first', $item['foster_mom']['name_first']);?>" placeholder="First name">
									 <span class="text-danger"><?php echo form_error('foster_mom_name_first'); ?></span>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_name_last" id="foster_mom_name_last" value="<?php echo set_value('foster_mom_name_last', $item['foster_mom']['name_last']);?>" placeholder="Last name">
									 <span class="text-danger"><?php echo form_error('foster_mom_name_last'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_people_email_primary" id="foster_mom_people_email_primary" value="<?php echo set_value('foster_mom_people_email_primary', $item['foster_mom']['people_email_primary']);?>" placeholder="Primary email address">
									<span class="text-danger"><?php echo form_error('foster_mom_people_email_primary'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_people_email_secondary" id="foster_mom_people_email_secondary" value="<?php echo set_value('foster_mom_people_email_secondary', $item['foster_mom']['people_email_secondary']);?>" placeholder="Secondary email address">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_people_phone_mobile" id="foster_mom_people_phone_mobile" value="<?php echo set_value('foster_mom_people_phone_mobile', $item['foster_mom']['people_phone_mobile']);?>" placeholder="Mobile phone number">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_people_phone_home" id="foster_mom_people_phone_home" value="<?php echo set_value('foster_mom_people_phone_home', $item['foster_mom']['people_phone_home']);?>" placeholder="Home phone number (optional)">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Work Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_people_phone_office" id="foster_mom_people_phone_office" value="<?php echo set_value('foster_mom_people_phone_office', $item['foster_mom']['people_phone_office']);?>" placeholder="Office phone number (optional)">
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Foster Dad Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster Dad Name</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_name_first" id="foster_dad_name_first" value="<?php echo set_value('foster_dad_name_first', $item['foster_dad']['name_first']);?>" placeholder="First name">
									 <span class="text-danger"><?php echo form_error('foster_dad_name_first'); ?></span>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_name_last" id="foster_dad_name_last" value="<?php echo set_value('foster_dad_name_last', $item['foster_dad']['name_last']);?>" placeholder="Last name">
									 <span class="text-danger"><?php echo form_error('foster_dad_name_last'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_people_email_primary" id="foster_dad_people_email_primary" value="<?php echo set_value('foster_dad_people_email_primary', $item['foster_dad']['people_email_primary']);?>" placeholder="Primary email address">
									<span class="text-danger"><?php echo form_error('foster_dad_people_email_primary'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_people_email_secondary" id="foster_dad_people_email_secondary" value="<?php echo set_value('foster_dad_people_email_secondary', $item['foster_dad']['people_email_secondary']);?>" placeholder="Secondary email address">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_people_phone_mobile" id="foster_dad_people_phone_mobile" value="<?php echo set_value('foster_dad_people_phone_mobile', $item['foster_dad']['people_phone_mobile']);?>" placeholder="Mobile phone number">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_people_phone_home" id="foster_dad_people_phone_home" value="<?php echo set_value('foster_dad_people_phone_home', $item['foster_dad']['people_phone_home']);?>" placeholder="Home phone number (optional)">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Work Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_people_phone_office" id="foster_dad_people_phone_office" value="<?php echo set_value('foster_dad_people_phone_office', $item['foster_dad']['people_phone_office']);?>" placeholder="Office phone number (optional)">
								</div>
							</div>
								
						</fieldset>
						<fieldset>
							<legend>Meal Information</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Preferred Meal Day</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo  $this->website_model->input_menu_days('community_meal_day_preference', $item['community_meal_day_preference'] , 'community_meal_day_preference','input-lg', $item['community_meal_day_preference']) ;?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Food Preferences</label>
								<div class="col-sm-9 col-xs-12">
									<textarea class="form-control" cols="20" rows="8" placeholder="Food preferences for meals" name="community_food_preferences"><?php echo set_value('community_food_preferences', $item['community_food_preferences']);?></textarea>
									 <span class="text-danger"><?php echo form_error('community_food_preferences'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Food Allergies / Sensitivities</label>
								<div class="col-sm-9 col-xs-12">
									<textarea class="form-control" cols="20" rows="8"  placeholder="Foods to avoid when making meals" name="community_food_allergies"><?php echo set_value('community_food_allergies', $item['community_food_allergies']);?></textarea>
									<span class="text-danger"><?php echo form_error('community_food_allergies'); ?></span>
								</div>
							</div>
						</fieldset>						
						<fieldset>
							<legend>Foster / Adoption Status</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Fostering Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('status_foster', set_value('status_foster', $item['status_foster']), 'status_foster', 'input-lg', array('view' => 'status_foster'));?>
								</div>
							</div>							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Adoption Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('status_adoption', set_value('status_adoption', $item['status_adoption']), 'status_adoption', 'input-lg', array('view' => 'status_adoption'));?>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Additional Info</legend>
							<div class="form-group">
								<label class="control-label col-sm-6 col-xs-12">Has either parent previously served on a Care Community?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="previously_served_on_cc" class="btn-switch" value="1" <?php if(!empty($item['previously_served_on_cc'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<span class="text-danger"><?php echo form_error('previously_served_on_cc'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-6 col-xs-12">Did the church play any part in recruiting this Foster Family?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="recruited_by_church" class="btn-switch" value="1" <?php if(!empty($item['recruited_by_church'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									 <span class="text-danger"><?php echo form_error('recruited_by_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-6 col-xs-12">Has this family previously fostered?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="previously_fostered" class="btn-switch" value="1" <?php if(!empty($item['previously_fostered'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<span class="text-danger"><?php echo form_error('community_food_allergies'); ?></span>
								</div>
							</div>
							
						</fieldset>
						
						<fieldset>
							<legend>Advanced Info (Staff Only)</legend>
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-6">Promise ID</label>
								<div class="col-sm-9 col-xs-6">
									<input type="text" class="form-control" name="id_promise" id="id_promise" value="<?php echo set_value('id_promise', $item['id_promise']);?>" placeholder="Internal Promise ID">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-6">Salesforce ID</label>
								<div class="col-sm-9 col-xs-6">
									<input type="text" class="form-control" name="id_salesforce" id="id_salesforce" value="<?php echo set_value('id_salesforce', $item['id_salesforce']);?>" placeholder="ISalesforce Object ID">
								</div>
							</div>
						</fieldset>
						<?php if(1 == 2){?>
						<fieldset>
							<legend>Care Community Team Members</legend>
							<div class="form-group">
								<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
									<table class="table table-striped table-bordered table-responsive nowrap" id="table-role-assignments">
										<thead>
											<tr>
												<th>Name</th>
												<th>Role</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												foreach($item['team_members'] as $cur_assign){
													$cur_assign['limit_list_scope']		= 'community_volunteer';
											?>
												<tr>
													<td>
														<?php 
																if(!empty($cur_assign['id_people'])){
																	echo $cur_assign['name_first'].' '.$cur_assign['name_last'];
																}else{
																	//echo  $this->website_model->input_menu_people('id_people_'.$i, $cur_assign['id_people'] , 'id_people_'.$i, 'input-lg', $cur_assign) ;	
																}
																
																
														?>
													</td>
													<td>
														<?php echo  $this->website_model->input_menu_roles('id_role_'.$i, $cur_assign['id_role'] , 'id_role_'.$i, 'input-lg', $cur_assign) ;?>
													</td>
													<td>
														<input type="hidden" class="id-assignment" name="id_assignment_<?php echo $i;?>" id="id_assignment_<?php echo $i;?>" value="<?php if(!empty($cur_assign['id_assignment'])){ echo $cur_assign['id_assignment']; }?>">
													</td>
												</tr>
											<?php 
														$i++;
													}?>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="3" class="text-center">
													<div class="top30">
														<a class="btn btn-primary btn-add-role"><i class="fa fa-check"></i> Assign Team Member</a>
														<a class="btn btn-primary btn-add-role"><i class="fa fa-plus"></i> Create New Team Member</a>
													</div>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</fieldset>
						<?php }?>
				<div class="ln_solid top40"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				  
				  <button type="submit" class="btn btn-success btn-lg btn-submit" name="save" value="1">Save</button>
				  <a href="<?php echo base_url().$url_scope.'/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
				</div>
			  </div>
			  <input type="hidden" name="id_community_encoded" value="<?php echo $item['id_community_encoded'];?>" />
			  <input type="hidden" name="id_assignment" value="<?php echo $item['id_assignment'];?>" />
			  <input type="hidden" name="foster_mom_id_people_encoded" value="<?php echo $item['foster_mom']['id_people_encoded'];?>" />
			  <input type="hidden" name="foster_mom_id_assignment" value="<?php echo $item['foster_mom']['id_assignment'];?>" />
			  <input type="hidden" name="foster_dad_id_people_encoded" value="<?php echo $item['foster_dad']['id_people_encoded'];?>" />
			  <input type="hidden" name="foster_dad_id_assignment" value="<?php echo $item['foster_dad']['id_assignment'];?>" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().$url_scope.'/list');?>" />
			  <input type="hidden" name="count_assignments_team" id="count_assignments_team" value="<?php echo $item['count_assignments_team'];?>">
			  <input type="hidden" name="count_assignments_kids" id="count_assignments_kids" value="<?php echo $item['count_assignments_kids'];?>">
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});
</script>
</body>
</html>