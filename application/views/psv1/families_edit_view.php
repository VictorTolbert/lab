<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['family_name'])){
		$name	.= ' '.$this->website_model->display_format_family_name($item);
}
if(empty($item['id_family'])){
	$name .= ' New Family';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

$parent_count		= 0;
$kid_count			= 0;
$arr_parent_roles 	= $this->families_model->get_family_parent_roles_array();
$arr_kid_roles 		= $this->families_model->get_family_kid_roles_array();
$already_displayed	= array();


?>
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard" class="ps_link_load_ui">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>families/list" class="ps_link_load_ui">
						Families
					</a>
				</li>
				<li class="active"><?php echo $action;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><i class="fas fa-house-user"></i> Edit Family <?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-container" style="min-height: 550px;">
			<div class="row">
				<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
				<div class="col-sm-3 col-xs-12" >
					<ul class="nav nav-pills nav-stacked hidden-xs ps-nav-pills" data-spy="affix">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active btn-pill-basic">Basic Info</a>
						</li>
						<li>
							<a href="#assignments" data-toggle="pill" class="btn-pill-assignments">Assignments</a>
						</li>
						<li>
							<a href="#members" data-toggle="pill" class="btn-pill-members">Members</a>
						</li>
						<li>
							<a href="#notes" data-toggle="pill" class="btn-pill-notes">Notes</a>
						</li>
						<?php if(1 == 2){?>
							<li>
								<a href="#needs" data-toggle="pill" class="btn-pill-needs">Needs</a>
							</li>
						<?php }?>
						<li>
							<a href="#agreements" data-toggle="pill" class="btn-pill-agreements">Agreements</a>
						</li>
						<li>
							<a href="#communities" data-toggle="pill" class="btn-pill-needs">Care Communities</a>
						</li>
						<?php if(1 == 2){?>
							<li>
								<a href="#updates" data-toggle="pill" class="btn-pill-updates">Updates</a>
							</li>
						<?php }?>
						<li>
							<a href="#timeline" data-toggle="pill" class="btn-pill-timelines">History / Timeline</a>
						</li>
						<li>
							<a href="#contactlog" data-toggle="pill" class="btn-pill-contactlog">Contact Log</a>
						</li>
						<li>
							<a href="#avatar" data-toggle="pill" class="btn-pill-avatar">Family Photo</a>
						</li>
					</ul>
					<ul class="nav nav-pills visible-xs hidden-sm hidden-md hidden-lg ps-nav-pills">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active btn-pill-basic">Basic Info</a>
						</li>
						<li>
							<a href="#assignments" data-toggle="pill" class="btn-pill-assignments">Assignments</a>
						</li>
						<li>
							<a href="#members" data-toggle="pill" class="btn-pill-members">Members</a>
						</li>
						
						<li>
							<a href="#notes" data-toggle="pill" class="btn-pill-notes">Notes</a>
						</li>
						<?php if(1 == 2){?>
							<li>
								<a href="#needs" data-toggle="pill" class="btn-pill-needs">Needs</a>
							</li>
						<?php }?>
						<li>
							<a href="#agreements" data-toggle="pill" class="btn-pill-agreements">Agreements</a>
						</li>
						<li>
							<a href="#communities" data-toggle="pill" class="btn-pill-communities">Care Communities</a>
						</li>
						<?php if(1 == 2){?>
							<li>
								<a href="#updates" data-toggle="pill" class="btn-pill-updates">Updates</a>
							</li>
						<?php }?>
						<li>
							<a href="#timeline" data-toggle="pill" class="btn-pill-timeline">History / Timeline</a>
						</li>
						<li>
							<a href="#contactlog" data-toggle="pill" class="btn-pill-contactlog">Contact Log</a>
						</li>
						<li>
							<a href="#avatar" data-toggle="pill" class="btn-pill-avatar">Family Photo</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="tab-pane fade out hide" id="avatar">
		
						<div class="col-md-6 col-md-offset-3 text-center">
							<div id="profile-img-holder">
						<?php if(!empty($item['id_family'])){
										$img							= $this->families_model->get_avatar_filename($item);
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
									<button class="btn btn-success upload-result hide" id="btn-upload-result" data-url="<?php echo base_url();?>upload/imageprofile?fe=<?php echo $id_family_encoded;?>">Save Profile Picture</button>
									<label for="file-upload" class="custom-file-upload btn btn-primary" id="btn-upload">
										<i class="fa fa-image"></i> <span id="btn-upload-text"><?php echo $upload_btn_text;?>
									</label>
									<input id="file-upload" type="file"  accept="image/*;capture=camera" style="visibility: hidden;"/>
									
								</div>
								<h2 class="text-center" style="margin: 5px;"><?php echo $name;?></h2>
							</div>	
						</div>
				
					</div>
					<form id="ps-form-main" class="form-horizontal form-label-left" action="<?php echo base_url();?>families/save_family_page" method="post">
					
					
					
<!-- Basic Tab -->
						<div class="tab-pane fade active in " id="basic">
							<fieldset>
								<legend>Family Info</legend>
								<?php if(!empty($item['id_family']) || !empty($_SESSION['affiliate']['allow_community_name_edit_on_new'])){?>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Name</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" name="family_name" id="family_name" value="<?php echo set_value('family_name', $this->website_model->display_format_family_name($item));?>" placeholder="Family name (e.g. Smith Family)">
											<span class="text-danger"><?php echo form_error('family_name'); ?></span>
										</div>
									</div>
								<?php } ?>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Status</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<?php 
												if($this->families_model->is_family_actively_served($item['id_family'])){
													echo '<div class="top5">Actively being served <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The family status cannot be changed while they are actively being served with a care community. To change this you must first close the active care community."></i>';
													echo '<input type="hidden" name="family_state" value="46"></div>';
												}else{
													//Legacy fix to correct family states that are set to "Being Served" but do not have an active care community
													if(!empty($item['family_state']) && $item['family_state'] == 46){
														$item['family_state'] = 5;
													}
													echo $this->website_model->input_menu_statuses('family_state', set_value('family_state', $item['family_state']), 'family_state', 'input-lg', array('view' => 'edit_family', 'required' => 1, 'bypass_values' => array(46)));
												}
												?>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Type</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<?php echo $this->website_model->input_menu_statuses('family_type', set_value('family_type', $item['family_type']), 'family_type', 'input-lg', array('view' => 'edit_foster_family_home_type', 'required' => 1));?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Structure</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<?php echo $this->website_model->input_menu_statuses('family_structure', set_value('family_structure', $item['family_structure']), 'family_structure', 'input-lg', array('view' => 'edit_family_structure', 'required' => 1));?>
										</div>
									</div>
									<?php if(1==2){ ?>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Church</label>
										<?php if (1 == 2){?>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<?php 
												$item['bypass_security'] = 1;
												echo  $this->website_model->input_menu_churches('id_church_home', $item['id_church_home'] , 'id_church_home', 'input-lg', $item) ;
											?>
											<span class="text-danger"><?php echo form_error('id_church_home'); ?></span>
										</div>
										<?php }?>
										
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church" data-idtarget="id_home_church">
											<input type="hidden" name="id_church_home" id="id_home_church" value="<?php echo $item['id_church_home'];?>">
											<span class="text-danger"><?php echo form_error('home_church'); ?></span>
										</div>
									</div>
									<?php 
										
											if($this->security_model->user_has_access(80) || ($this->security_model->user_has_access(60) && count($this->security_model->get_admin_church_id_array()) > 1)){ 
												$id_church_add = $_SESSION['view_limiter']['id_church'];
												if(!empty($item['id_church_add'])){
													$id_church_add = $item['id_church_add'];
												}elseif(!empty($item['id_church_home'])){
													$id_church_add = $item['id_church_home'];
												}
												
												$assigned_church_required = 1;
												if($this->security_model->user_has_access(80)){
													$assigned_church_required = null;
												}
										
									?>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Assigned Church <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="For families that may not have a home church or are being served by a church other than their home church need to be assigned to the serving church or the advocate cannot see their profile.<br /><br /> This option is required if no home church is selected."></i></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<?php echo  $this->website_model->input_menu_churches('id_church_add', set_value('id_church_add', $id_church_add) , 'id_church_add', 'form-control input-lg', array('required' => $assigned_church_required, 'include_parent_church_ids' => 1)) ;?>
										</div>
									</div>
									<?php }
										} // End 1 == 2
									?>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Agency</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<?php echo $this->website_model->input_menu_agencies('id_agency', set_value('id_agency', $item['id_agency']), 'id_agency', 'input-lg') ;?>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Language <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="" aria-hidden="true" data-original-title="This is used to help match volunteers who might have specific language requirements to interact with the family. Select the option that applies best to the person or people in the home that the volunteers will be interacting with most of the time."></i></label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<?php echo $this->website_model->input_menu_statuses('family_languages', set_value('family_languages', $item['family_languages']), 'family_languages', 'input-lg', array('view' => 'edit_family_languages', 'required' => 0));?>
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
										<input type="text" class="form-control ps-assist-zip" name="family_address_zip" id="family_address_zip" value="<?php echo set_value('family_address_zip', $item['family_address_zip']);?>" placeholder="Zip code">
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
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Address Access Instructions</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea name="access_instructions" id="access_instructions" class="form-control" rows="5" placeholder="Optional instructions for access this address (e.g. gate codes, entrance notes, etc)"><?php echo set_value('access_instructions', $item['access_instructions']);?></textarea>
										<span class="text-danger"><?php echo form_error('access_instructions'); ?></span>
									</div>
								</div>
								<input type="hidden" name="ps_assist_lat" class="ps-assist-lat" value="<?php echo $item['family_place_lat'];?>">
								<input type="hidden" name="ps_assist_lng" class="ps-assist-lng" value="<?php echo $item['family_place_lng'];?>">
								<input type="hidden" name="id_place" value="<?php echo $item['id_place'];?>">
								
							</fieldset>
							<fieldset>
								<legend>Current Family Openness</legend>
								<div class="form-group">
									<label class="control-label col-sm-3 col-xs-12">Open to a foster placement?</label>
									<div class="col-sm-3 col-xs-12">
										<input type="checkbox" name="has_desire_foster" class="btn-switch" value="1" <?php if(!empty($item['has_desire_foster'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="has_desire_foster_prev" value="<?php echo $item['has_desire_foster'];?>">
										<span class="text-danger"><?php echo form_error('has_desire_foster'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3 col-xs-12">Open to adopt?</label>
									<div class="col-sm-3 col-xs-12">
										<input type="checkbox" name="has_desire_adopt" class="btn-switch" value="1" <?php if(!empty($item['has_desire_adopt'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="has_desire_adopt_prev" value="<?php echo $item['has_desire_adopt'];?>">
										<span class="text-danger"><?php echo form_error('has_desire_adopt'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-3 col-xs-12">Open to a kinship placement?</label>
									<div class="col-sm-3 col-xs-12">
										<input type="checkbox" name="has_desire_kinship" class="btn-switch" value="1" <?php if(!empty($item['has_desire_kinship'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="has_desire_kinship_prev" value="<?php echo $item['has_desire_kinship'];?>">
										<span class="text-danger"><?php echo form_error('has_desire_kinship'); ?></span>
									</div>
								</div>
						</fieldset>
						<?php if($this->security_model->user_has_access(99)){?>
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
						</div>


<!-- Assignments Tab -->
<?php $btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add Family Church Assignment</h2>" data-ajaxurl="'.base_url().'families/ajax_edit_family_church_assignment?f='.url_enc($item['id_family']).'&action=add&role_scope=family" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_families_get_family_church_assignments" data-modalaction="close_on_save"';?>
						<div class="tab-pane fade out hide" id="assignments">
							<fieldset>
								<legend class="legend-with-right-btn">Church Assignments <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
								<div class="col-sm-12 col-xs-12" id="ajax-target-family-church-assignment-list">
									<p class="text-center"><i class="fas fa-spin fa-refresh fa-3x"></i></p>
									<h3 class="text-center">Loading... Please wait</h3>
								</div>
								<div class="row text-center">
									<a class="btn btn-secondary btn-modal-with-ajax"<?php echo $btn_guts;?>><i class="fas fa-church"></i> Add Church Assignment</a>
								</div>
							</fieldset>					
						</div>
<!-- /Assignments Tab -->						
						

<!-- Family Members Tab -->
<?php 
	$btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add Family Member</h2>" data-ajaxurl="'.base_url().'people/ajax_edit_person?f='.url_enc($item['id_family']).'&action=add&role_scope=family" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_families_get_list_family_members" data-modalaction="close_on_save"';
	
?>
						<div class="tab-pane fade out hide" id="members">
							<fieldset>
								<legend class="legend-with-right-btn">Family Members <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
								<div class="col-sm-12 col-xs-12" id="ajax-target-family-member-list">
									<p class="text-center"><i class="fas fa-spin fa-refresh fa-3x"></i></p>
									<h3 class="text-center">Loading... Please wait</h3>
								</div>
								<div class="row text-center">
									<a class="btn btn-secondary btn-modal-with-ajax"<?php echo $btn_guts;?>><i class="fas fa-user-plus"></i> Add Family Member</a>
								</div>
							</fieldset>					
						</div>
					
<!-- Updates Tab -->
<?php 
	$cur_update_date 	= strtotime('today 23:59:59');
	$cur_id_community	= $this->communities_model->get_active_care_community_for_family($item['id_family']);
									

	$btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="Family Update" data-modalclass="modal-lg" data-modalhideclose="1" data-ajaxurl="'.base_url().'communities/ajax_make_family_update_form?c='.url_enc($cur_id_community).'&f='.url_enc($item['id_family']).'&d='.url_enc($cur_update_date).'" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_families_get_list_family_members" data-modalaction="close_on_save"';
	
?>

						<div class="tab-pane fade out hide" id="updates">
							<fieldset>
								<legend class="legend-with-right-btn">Family Updates <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
								<div class="col-sm-12 col-xs-12" id="ajax-target-family-member-list">
									<?php echo $this->families_model->make_family_updates_list_table(array( 'role_scope_object' => 'family', 
																									'id_family' => $item['id_family'], 
																									'view' => 'log', 
																									'table_id' => 'datatable-responsive-updates-list'));?>
								</div>
								<div class="row text-center">
									<a class="btn btn-secondary btn-modal-with-ajax" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add Family Update</a></span></a>
								</div>
							</fieldset>					
					</div>
					
					
					
					
					
<!-- Communities Tab -->
					<div class="tab-pane fade out hide" id="communities">
						<fieldset>
							<legend>Care Communities</legend>
							<?php if(!empty($item['id_family']) && !empty($communities)){?>
							<div class="form-group">
								<div class="">
									<table class="table table-striped table-bordered table-responsive nowrap" id="table-role-assignments">
										<thead>
											<tr>
												<th>Iteration</th>
												<th>Name</th>
												<th>Status</th>
												<th>Start Date</th>
												<th>End Date</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												$arr_shown		= array();
												
												foreach($communities AS $cur_com){
													if(!in_array($cur_com['id_community'], $arr_shown)){
														
														if(empty($cur_com['date_start'])){
															$cur_com['date_start']		= $cur_com['date_add'];
														}
														$cur_edit_url						= base_url().'communities/edit/'.url_enc($cur_com['id_community']);
														$arr_shown[]						= $cur_com['id_community'];
														if(empty($cur_com['date_end']) &&!empty($last_date_start) && in_array($cur_com['state'], array(25,24))){
															$cur_com['date_end']			= $last_date_start;
														}
														$last_date_start					= $cur_com['date_start'];
														
														
										?>
											<tr>
												
												<td>
													<a href="<?php echo $cur_edit_url;?>" target="_blank"><?php echo $cur_com['iteration'];	?></a>
												</td>
												<td>
													<a href="<?php echo $cur_edit_url;?>" target="_blank"><?php echo $this->communities_model->get_care_community_name($cur_com);	?></a>
												</td>
												<td>
													<?php echo  $this->communities_model->get_community_status_from_state($cur_com);?>
												</td>
												<td>
													<?php echo date('m/d/Y', $cur_com['date_start']);?>
												</td>
												<td>
													<?php if(!empty($cur_com['date_end'])){ echo date('m/d/Y', $cur_com['date_end']);}?>
												</td>
											</tr>
										<?php 
													$i++;
													} // End in Array
											
												}
												
												
										?>
										</tbody>
										
									</table>
								</div>
							</div>
							<?php 
								}else{
									echo '<h3 class="text-center">No care communities have been setup.</h3>';
								}
							?>
						</fieldset>
					</div>


<!-- History / Timeline Tab -->					
<?php 
	$btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add Family Timeline Event</h2>" data-ajaxurl="'.base_url().'families/ajax_edit_timeline_point?f='.url_enc($item['id_family']).'&action=add" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_families_get_family_timeline" data-modalaction="close_on_save"';
	
?>
					<div class="tab-pane fade out hide" id="timeline">						
						<fieldset>
							<legend class="legend-with-right-btn">Family Timeline <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
							<div class="col-sm-12 col-xs-12">
								<div id="ajax-target-family-timeline">
									<p class="text-center"><i class="fas fa-spin fa-refresh fa-3x"></i></p>
									<h3 class="text-center">Loading... Please wait</h3>
                                </div>
                            </div>
                          </fieldset>
						  
                          <fieldset>
							<legend >Family History</legend>
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-12">Has either parent previously served on a Care Community?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="previously_served_on_cc" class="btn-switch" value="1" <?php if(!empty($item['previously_served_on_cc'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="previously_served_on_cc_prev" value="<?php echo $item['previously_served_on_cc'];?>">
									<span class="text-danger"><?php echo form_error('previously_served_on_cc'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-12">Did the church play any part in recruiting this Foster Family?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="recruited_by_church" class="btn-switch" value="1" <?php if(!empty($item['recruited_by_church'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="recruited_by_church_prev" value="<?php echo $item['recruited_by_church'];?>">
									 <span class="text-danger"><?php echo form_error('recruited_by_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Recruiting Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo  $this->website_model->input_menu_churches('id_church_recruited', $item['id_church_recruited'] , 'id_church_recruited', 'input-lg', $item);?>
									<span class="text-danger"><?php echo form_error('id_church_recruited'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-12">Has this family previously fostered?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="has_past_fostered" class="btn-switch" value="1" <?php if(!empty($item['has_past_fostered'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="has_past_fostered_prev" value="<?php echo $item['has_past_fostered'];?>">
									<span class="text-danger"><?php echo form_error('has_past_fostered'); ?></span>
								</div>
							</div>	
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-12">Has this family previously had a kinship placement?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="has_past_kinship_placement" class="btn-switch" value="1" <?php if(!empty($item['has_past_kinship_placement'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="has_past_kinship_placement_prev" value="<?php echo $item['has_past_kinship_placement'];?>">
									<span class="text-danger"><?php echo form_error('has_past_kinship_placement'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-12">Has this family previously adopted?</label>
								<div class="col-sm-3 col-xs-12">
									<input type="checkbox" name="has_past_adopted" class="btn-switch" value="1" <?php if(!empty($item['has_past_adopted'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="has_past_adopted_prev" value="<?php echo $item['has_past_adopted'];?>">
									<span class="text-danger"><?php echo form_error('has_past_adopted'); ?></span>
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
                       </div>

<!-- Agreement Tab -->					
					<div class="tab-pane fade out hide" id="agreements">						
						<fieldset>
							<legend>Family Agreements</legend>
							
							<?php if(empty($item['agree_family_sign_name'])){?>
								<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
									<h3 class="text-center">No Agreement Signatures Found</h3>
								</div>
							<?php }else{?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Signed FCC Agreement On: <?php echo date_offset('M d, Y', $item['agree_family_sign_date']);?></label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<a class="btn btn-default" href="<?php echo base_url();?>form/familyagreement/<?php echo $item['id_family_encoded'];?>/?show_print=1" target="_blank">View / Print Agreement</a>
									</div>
								</div>
							<?php }?>
							<div class="row text-center top20">
										<!-- <a class="btn btn-secondary btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Request Signature</h2>" data-ajaxurl="<?php echo base_url().'messages/ajax_edit_note?f='.url_enc($item['id_family']);?>" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_reload_notes_list_table" data-modalaction="close_on_save" data-modalrolescope="family"><i class="fa fa-plus"></i> Request Agreement Signature</a> -->
									</div>
						</fieldset>
					</div>
					

<!-- Notes Tab -->	
<?php 
	$btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add Note</h2>" data-ajaxurl="'.base_url().'messages/ajax_edit_note?f='.url_enc($item['id_family']).'" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_reload_notes_list_table" data-modalaction="close_on_save" data-modalrolescope="family"';
?>
					<div class="tab-pane fade out hide" id="notes">
						<fieldset>
							<legend class="legend-with-right-btn">Notes <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
							<div id="ps_families_wrapper_notes" style="display: none;">
								<?php echo $this->messages_model->make_notes_list_table(array('role_scope_object' => 'family', 'id_family' => $item['id_family']));?>
								<div class="row text-center top20">
									<a class="btn btn-secondary btn-modal-with-ajax" <?php echo $btn_guts;?>><i class="fa fa-plus"></i> Add a Note</a>
								</div>
							</div>
						</fieldset>	
					</div>
<!-- Needs Tab -->	
<?php 
	$btn_guts = ' href="#addneedmodal" data-toggle="modal" data-target="#addneedmodal" data-mode="add" data-modalaction="close_on_save"';
?>				
					<div class="tab-pane fade out hide" id="needs">
						<fieldset>
							<legend class="legend-with-right-btn">Needs <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
								<div class="col-sm-12 col-xs-12" id="ajax-target-family-needs-list">
									<p class="text-center"><i class="fas fa-spin fa-refresh fa-3x"></i></p>
									<h3 class="text-center">Loading... Please wait</h3>
								</div>
							<?php if(!empty($item['id_family']) && !empty($needs)){?>
							<div class="form-group">
								<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
									<table class="table table-striped table-bordered table-responsive nowrap" id="table-role-assignments">
										<thead>
											<tr>
												<th>Name</th>
												<th>Status</th>
												<th>Date Due</th>
												<th>Date Completed</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												$arr_shown		= array();
												
												foreach($needs AS $cur_need){
													if(!in_array($cur_need['id_need'], $arr_shown)){
														
														if(empty($cur_need['date_start'])){
															$cur_need['date_start']		= $cur_need['date_add'];
														}
														$cur_edit_url						= base_url().'need/edit/'.url_enc($cur_need['id_need']);
														$arr_shown[]						= $cur_need['id_need'];
										?>
											<tr>
												
												<td>
													<a href="<?php echo $cur_edit_url;?>" target="_blank"><?php echo $this->needs_model->get_need_name($cur_need);	?></a>
												</td>
												<td>
													<?php echo $this->needs_model->get_need_status_from_state($cur_need) ;?>
												</td>
												<td>
													<?php echo date('m/d/Y', $cur_need['date_start']);?>
												</td>
												<td>
													<?php if(!empty($cur_need['date_end'])){ echo date('m/d/Y', $cur_need['date_end']);}?>
												</td>
											</tr>
										<?php 
													$i++;
												} // End in Array
											}
												
												
										?>
										</tbody>
										
									</table>
								</div>
							</div>
							<?php }?>
							<div class="row text-center">
    								<a class="btn-modal-event-add btn btn-secondary" <?php echo $btn_guts;?>>
    									<i class="fa fa-plus"></i> Add a Need
    								</a>
								</div>
						</fieldset>	
					</div>

<!-- Contact Log Block -->					
<?php 
	$btn_guts = 'href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add a Log Entry</h2>" data-ajaxurl="'.base_url().'messages/ajax_edit_note?f='.url_enc($item['id_family']).'&view=log" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_reload_log_list_table" data-modalaction="close_on_save" data-modalrolescope="family"';
?>
					<div class="tab-pane fade out hide" id="contactlog">
						<fieldset>
							<legend class="legend-with-right-btn">Contact Log <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
							<?php echo $this->messages_model->make_notes_list_table(array( 'role_scope_object' => 'family', 'id_family' => $item['id_family'], 'view' => 'log', 'table_id' => 'datatable-responsive-log-list'));?>
							<div class="row text-center">
							<a class="btn btn-secondary btn-modal-with-ajax" <?php echo $btn_guts;?>><i class="fa fa-plus"></i> Add a Log Entry</a>
								</div>
						</fieldset>	
						
					</div>
					
					
<!-- Button Block -->
				<div class="ln_solid"><hr /></div>					
				<div class="form-group">
					<?php echo $this->website_model->make_edit_buttons(array('url_cancel' => $url_cancel, 'url_redirect' => $url_redirect)); ?>
				</div>
				<input type="hidden" name="id_family_encoded" value="<?php echo $item['id_family_encoded'];?>" />
				<input type="hidden" name="posted" value="family" />
				<input type="hidden" name="r" value="<?php echo $url_redirect;?>" />
				<input type="hidden" name="count_assignments_kids" id="count_assignments_kids" value="<?php echo $item['count_assignments_kids'];?>">
				<input type="hidden" name="parent_count" id="parent_count" value="<?php echo $parent_count;?>">
				<input type="hidden" name="kid_count" id="parent_count" value="<?php echo $kid_count;?>">
				<input type="hidden" name="count_messages" id="count_messages" value="<?php echo $count_messages;?>">

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
	$(".btn-switch").on('switchChange.bootstrapSwitch',function(e, state){
		$(this).closest('[type=checkbox]').attr('checked', state);
		
	});

	$(window).keydown(function(event){
		if(event.keyCode == 13) {
		  event.preventDefault();
		  return false;
		}
	});

	ps_instantiate_pill_hides();
	instantiate_notes_list_table('role_scope=family&f=<?php echo $item['id_family_encoded'];?>');
	instantiate_log_list_table('role_scope=family&view=log&f=<?php echo $item['id_family_encoded'];?>');
	instantiate_user_entered_church_lookup();	
	
	$('.btn-pill-notes').on('shown.bs.tab',function(){
		$('#ps_families_wrapper_notes').css( 'display', 'block' );
		ps_dt_notes_list.columns.adjust();
	});

	
	
});



</script>
<?php 
	$this->website_model->make_ajax_call(array('url' => base_url().'families/ajax_make_family_members_list?f='.$item['id_family_encoded'], 
												'target' => 'ajax-target-family-member-list',
												'functionize' => 1,
												'function_name' => 'ps_families_get_list_family_members',
												'js_callbacks' => array('ps_families_get_family_timeline')));
	
	$this->website_model->make_ajax_call(array('url' => base_url().'families/ajax_make_family_timeline?f='.$item['id_family_encoded'], 
												'target' => 'ajax-target-family-timeline',
												'functionize' => 1,
												'function_name' => 'ps_families_get_family_timeline'));

	$this->website_model->make_ajax_call(array('url' => base_url().'families/ajax_make_family_church_assignments?f='.$item['id_family_encoded'], 
												'target' => 'ajax-target-family-church-assignment-list',
												'functionize' => 1,
												'function_name' => 'ps_families_get_family_church_assignments'));
	
	
?>

</body>
</html>