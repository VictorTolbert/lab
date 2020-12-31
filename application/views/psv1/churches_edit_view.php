<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['church_name'])){
	if(!empty($item['campus_name'])){
		$name 	= $item['church_name'].' - '.$item['campus_name'];
	}else{
		$name	= $item['church_name'];
	}	
	$action	= 'Edit';
}elseif(empty($item['id_church']) && empty($id_church)){
	$name .= ' New Church';
	$action	= 'Add';	
}elseif(!empty($id_church)){
	
	$name .= $this->churches_model->get_church_name(array('id_church' => $id_church, 'bypass_church' => 1, 'bypass_affiliate' => 1, 'bypass_security' => 1, 'debug' => 1));
	$action	= 'Edit';	
}
$name .= '</small>';
?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>churches/list">
						Churches 
					</a>
				</li>
				<li class="active"><?php echo $action.' '.$name;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit <?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		

		<div class="panel panel-container" style="min-height: 500px;">
		<?php 
			$item['role_scope']			= 'church';
			$item['id_given_church']	= $id_church;
			$cant_edit_message 		= $this->security_model->make_edit_block_message($item);
			if(!empty($cant_edit_message)){
				echo '<h1 class="text-center">Whoops!</h1>';
				echo '<h2 class="text-center"><i class="fas fa-exclamation-triangle fa-2x"></i></h2>';
				echo $cant_edit_message;
				echo '<div class="row text-center"><a class="btn btn-primary" href="'.base_url().'dashboard">Back</a></div>';
			}else{
		 ?>
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>churches/save" method="post">
				<div class="col-sm-3 col-xs-12" >
					<ul class="nav nav-pills nav-stacked hidden-xs ps-nav-pills" data-spy="affix">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active ">Basic Info</a>
						</li>
						<?php if(1==2){?>
						<li>
							<a href="#church" data-toggle="pill">Church Type</a>
						</li>
						<?php }?>
						<?php if($this->security_model->user_has_access(80)){?>
							<li>
								<a href="#campus_options" data-toggle="pill">Campus Options</a>
							</li>
						<?php }?>
						<li>
							<a href="#fam" data-toggle="pill">FAM Info</a>
						</li>						
						<li>
							<a href="#cal_options" data-toggle="pill">Calendar</a>
						</li>
						<li>
							<a href="#contacts" data-toggle="pill" class="btn-pill-contacts">Contacts</a>
						</li>
						<li>
							<a href="#notes" data-toggle="pill" class="btn-pill-notes">Notes</a>
						</li>
						<!--
						<li>
							<a href="#contactlog" data-toggle="pill" class="btn-pill-families">Families</a>
						</li>
						-->
						<li>
							<a href="#contactlog" data-toggle="pill" class="btn-pill-contactlog">Contact Log</a>
						</li>
						<li>
							<a href="#advanced" data-toggle="pill">Advanced Options</a>
						</li>
					</ul>
					<ul class="nav nav-pills visible-xs hidden-sm hidden-md hidden-lg ps-nav-pills">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active">Basic Info</a>
						</li>
						<?php if(1==2){?>
						<li>
							<a href="#church" data-toggle="pill">Church Type</a>
						</li>
						<?php }?>
						<?php if($this->security_model->user_has_access(80)){?>
							<li>
								<a href="#campus_options" data-toggle="pill">Campus Options</a>
							</li>
						<?php }?>
						<li>
							<a href="#fam" data-toggle="pill">FAM Info</a>
						</li> 
						<li>
							<a href="#cal_options" data-toggle="pill">Calendar</a>
						</li>
						<li>
							<a href="#contacts" data-toggle="pill" class="btn-pill-contacts">Contacts</a>
						</li>
						<!-- 
						<li>
							<a href="#contactlog" data-toggle="pill" class="btn-pill-families">Families</a>
						</li>
						-->
						<li>
							<a href="#notes" data-toggle="pill" class="btn-pill-notes">Notes</a>
						</li>
						<li>
							<a href="#contactlog" data-toggle="pill" class="btn-pill-contactlog">Contact Log</a>
						</li>
						<li>
							<a href="#advanced" data-toggle="pill">Advanced Options</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="tab-pane fade active in" id="basic">
						<div class="top20 xs-top20">
							<fieldset class="">
								<legend>Basic Info</legend>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Name</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" name="church_name" id="church_name" value="<?php echo set_value('church_name', $item['church_name']);?>" placeholder="Church name" required="required">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Nick Name</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" name="church_nick" id="church_nick" value="<?php echo set_value('church_nick', $item['church_nick']);?>" placeholder="Optional Short Name of church">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Campus Name</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" name="campus_name" id="campus_name" value="<?php echo set_value('campus_name', $item['campus_name']);?>" placeholder="Campus name (if applicable)">
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
							<?php 					
							
							if(!empty($_SESSION['affiliate']['enable_regions']) && $this->security_model->user_has_access(80) && isset($region)){?>							
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Region</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_regions('id_region', set_value('id_region', $region['id_region']), 'id_region', 'input-lg', array('view' => 'edit_regions', 'required' =>1, 'show_manager' => 1));?>
									</div>
								</div>
							<?php }?>
							<?php if($this->security_model->user_has_access(80)){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('church_state', set_value('church_state', $item['church_state']), 'church_state', 'input-lg', array('view' => 'edit_churches', 'required' =>1));?>
									</div>
								</div>
							<?php }?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Street Address</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="address_street_1" id="address_street_1" value="<?php echo set_value('address_street_1', $item['address_street_1']);?>" placeholder="Street address">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Suite or Unit</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="address_street_2" id="address_street_2" value="<?php echo set_value('address_street_2', $item['address_street_2']);?>" placeholder="Suite or unit">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="address_city" id="address_city" value="<?php echo set_value('address_city', $item['address_city']);?>" placeholder="City">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="address_state" id="address_state" value="<?php echo set_value('address_state', $item['address_state']);?>" placeholder="State" required="required">
										<input type="hidden" name="address_state_abbrev" id="address_state_abbrev" value="<?php echo $item['address_state'];?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="address_zip" id="address_zip" value="<?php echo set_value('address_zip', $item['address_zip']);?>" placeholder="Zipcode">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Website</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="church_website" id="church_website" value="<?php echo set_value('church_website', $item['church_website']);?>" placeholder="Website URL">
									</div>
								</div>
							</fieldset>
							<?php if(1==2){?>
							<fieldset>
								<legend>Church Contact <small>(not necessarily the advocate)</small></legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Name</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="church_contact_name" id="church_contact_name" value="<?php echo set_value('church_contact_name', $item['church_contact_name']);?>" placeholder="Contact Name">
									</div>
								</div>
							</fieldset>
							<?php }?>
						</div>
					</div>
					<?php if(1==2){?>
					<div id="church" class="tab-pane fade hide">
						<fieldset>
							<legend>Church Types</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Care Community Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_ltp" class="btn-switch" value="1" <?php if(!empty($item['church_type_ltp'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_ltp_prev" value="<?php echo $item['church_type_ltp'];?>">
									<span class="text-danger"><?php echo form_error('disable_volunteer_sharing'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_resource" class="btn-switch" value="1" <?php if(!empty($item['church_type_resource'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_resource_prev" value="<?php echo $item['church_type_resource'];?>">
									<span class="text-danger"><?php echo form_error('church_type_resource'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Anchor Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="is_anchor_church" class="btn-switch" value="1" <?php if(!empty($item['is_anchor_church'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="is_anchor_church_prev" value="<?php echo $item['is_anchor_church'];?>">
									<span class="text-danger"><?php echo form_error('is_anchor_church'); ?></span>
								</div>
							</div>
							<?php if(!empty($_SESSION['affiliate']['allow_interest_care_portal'])){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Care Portal Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_careportal" class="btn-switch" value="1" <?php if(!empty($item['church_type_careportal'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_careportal_prev" value="<?php echo $item['church_type_careportal'];?>">
									<span class="text-danger"><?php echo form_error('church_type_careportal'); ?></span>
								</div>
							</div>
							<?php }?>
						</fieldset>
					</div>
					<?php }?>
					
					<?php if($this->security_model->user_has_access(80)){?>
						<div id="campus_options" class="tab-pane fade hide">
							<fieldset>
								<legend>Campus Options</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Is Campus?</label>
									<div class="col-md- col-sm-3 col-xs-12">
										<input type="checkbox" name="is_campus" id="is_campus" class="btn-switch" value="1" <?php if(!empty($item['is_campus'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="is_campus_prev" value="<?php echo $item['is_campus'];?>">
										<span class="text-danger"><?php echo form_error('is_campus'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent Church</label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										
										<?php echo $this->website_model->input_menu_churches('id_church_parent',$item['id_church_parent'], 'id_church_parent', 'form-control input-lg', array('parents_only' => 1));?>
										<span class="text-danger"><?php echo form_error('id_church_parent'); ?></span>
									</div>
								</div>
							</fieldset>
						</div>
					<?php }?>
					
<!-- FAM Offerings Tab -->
<?php 
	$btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add FAM Offering</h2>" data-ajaxurl="'.base_url().'churches/ajax_edit_fam_offering?c='.url_enc($item['id_church']).'&action=add&role_scope=church&step=0" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_churches_get_list_fam_offerings" data-modalaction="close_on_save"';
?>					
					<div id="fam" class="tab-pane fade hide">
					<?php if(1==2 && $this->security_model->user_has_access(80)){?>
						<fieldset>
							<legend>FAM Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Care Community Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_ltp" class="btn-switch" value="1" <?php if(!empty($item['church_type_ltp'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_ltp_prev" value="<?php echo $item['church_type_ltp'];?>">
									<span class="text-danger"><?php echo form_error('disable_volunteer_sharing'); ?></span>
								</div>
							</div>
							<?php if(1==2){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_resource" class="btn-switch" value="1" <?php if(!empty($item['church_type_resource'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_resource_prev" value="<?php echo $item['church_type_resource'];?>">
									<span class="text-danger"><?php echo form_error('church_type_resource'); ?></span>
								</div>
							</div>
							<?php }?>
							<?php if(!empty($_SESSION['affiliate']['allow_interest_care_portal'])){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Care Portal Church</label>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<input type="checkbox" name="church_type_careportal" class="btn-switch" value="1" <?php if(!empty($item['church_type_careportal'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="church_type_careportal_prev" value="<?php echo $item['church_type_careportal'];?>">
										<span class="text-danger"><?php echo form_error('church_type_careportal'); ?></span>
									</div>
								</div>
							<?php }?>
						</fieldset>	
						<?php }?>
						<fieldset>
							<legend>FAM Offerings <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
							<?php 
								//Legacy fam offerings
								if(!empty($item['fam_offerings'])){ 
									for($i=0; $i < 10; $i++){
							?>
							<div class="row top30 xs-top10">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">FAM Offering <?=$i+1;?> Name</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" class="form-control" name="fam_offering_<?=$i;?>_name" id="fam_offering_<?=$i;?>_name" value="<?php echo set_value('fam_offering_'.$i.'_name', $item['fam_offerings'][$i]['fam_offering_name']);?>" placeholder="Name of Fam Ministry">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<input type="checkbox" name="fam_offering_<?=$i;?>_status" class="btn-switch" value="1" <?php if(!empty($item['fam_offerings'][$i]['fam_offering_status'])){echo 'checked';}?> data-on-text="Active" data-off-text="Inactive" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="fam_offering_<?=$i;?>_status_prev" value="<?php echo $item['fam_offerings'][$i]['fam_offering_status'];?>">
										<span class="text-danger"><?php echo form_error('fam_offering_'.$i.'__status'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">FAM Offering <?=$i+1;?> Contact</label>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<input type="text" class="form-control" name="fam_offering_<?=$i;?>_name_contact" id="fam_offering_<?=$i;?>_name_contact" value="<?php echo set_value('fam_offering_'.$i.'_name',$item['fam_offerings'][$i]['fam_offering_name_contact']);?>" placeholder="Contact Person">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<input type="text" class="form-control" name="fam_offering_<?=$i;?>_email_contact" id="fam_offering_<?=$i;?>_email_contact" value="<?php echo set_value('fam_offering_'.$i.'_email_contact', $item['fam_offerings'][$i]['fam_offering_email_contact']);?>" placeholder="Contact Email">
									</div>
								</div>
							</div>
							<?php 
								}
							}

							?>
							<div class="" id="ajax-target-fam-offerings-list">
								<p class="text-center"><i class="fas fa-spin fa-refresh fa-3x"></i></p>
								<h3 class="text-center">Loading... Please wait</h3>
								<!-- <h3 class="text-center">There are no FAM offerings set for this church</h3> -->
							</div>
							
							<div class="row top30 text-center">
								<a class="btn btn-default btn-modal-with-ajax" <?php echo $btn_guts;?> ><i class="fas fa-plus"></i> Add FAM Offering</a>
							</div>
						</fieldset>
					</div>
					
					
					<div id="cal_options" class="tab-pane fade hide">
						<?php
							$param_selected	= 'default';
							if(!empty($params['calendar_cross_church_event_display'])){
								$param_selected	= $params['calendar_cross_church_event_display'];
							}
							
						?>
									
						<fieldset>
							<legend>Calendar Options</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Outside Events </label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<select id="param_church_outside_events" name="params_church[calendar_cross_church_event_display]" class="form-control input-lg">
										<option value="default" <?php if($param_selected == 'default'){ echo 'selected'; }?>>Show all events in area</option>
										<option value="advocate_only" <?php if($param_selected == 'advocate_only'){ echo 'selected'; }?>>Show all events in area to advocates only</option>
										<option value="church_only" <?php if($param_selected == 'church_only'){ echo 'selected'; }?>>Do not show other area church events</option>
									</select>
									<span class="text-danger"><?php echo form_error('param_church_outside_events'); ?></span>
								</div>
							</div>
						</fieldset>
					</div>
					
<!-- Contacts Tab -->
<?php 
	$btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add Church Contact</h2>" data-ajaxurl="'.base_url().'people/ajax_edit_person?c='.url_enc($item['id_church']).'&a='.url_enc($item['assign_id_affiliate']).'&action=add&role_scope=church" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_churches_get_list_church_contacts" data-modalaction="close_on_save"';
	
?>
						<div class="tab-pane fade out hide" id="contacts">
							<fieldset>
								<legend class="legend-with-right-btn">Church Contacts<span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
								<div class="col-sm-12 col-xs-12" id="ajax-target-church-contact-list">
									<p class="text-center"><i class="fas fa-spin fa-refresh fa-3x"></i></p>
									<h3 class="text-center">Loading... Please wait</h3>
								</div>
								<div class="row text-center">
									<a class="btn btn-secondary btn-modal-with-ajax"<?php echo $btn_guts;?>><i class="fas fa-user-plus"></i> Add Contact</a>
								</div>
							</fieldset>	
						</div>

				
<!-- Notes Tab -->	
<?php 
	$btn_guts = ' href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add Note</h2>" data-ajaxurl="'.base_url().'messages/ajax_edit_note?c='.url_enc($item['id_church']).'" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_reload_notes_list_table" data-modalaction="close_on_save" data-modalrolescope="church"';
?>				
					<div class="tab-pane fade out hide" id="notes">
						<fieldset>
							<legend class="legend-with-right-btn">Notes <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
							<div id="ps_wrapper_notes" style="display: none;">
								<?php echo $this->messages_model->make_notes_list_table(array('role_scope_object' => 'church', 'id_church' => $item['id_church']));?>
								<div class="row text-center top20">
									<a class="btn btn-secondary btn-modal-with-ajax" <?php echo $btn_guts;?>><i class="fa fa-plus"></i> Add a Note</a>
								</div>
							</div>
						</fieldset>	
					</div>
<!-- Needs Tab -->	




<!-- Contact Log Block -->					
<?php 
	$btn_guts = 'href="#modalnotify" data-toggle="modal" data-modalheader="<h2>Add a Log Entry</h2>" data-ajaxurl="'.base_url().'messages/ajax_edit_note?c='.url_enc($item['id_church']).'&view=log" data-modalclass="modal-lg" data-modalhideclose="1" data-modalcallback="ps_reload_log_list_table" data-modalaction="close_on_save" data-modalrolescope="church"';
?>
					<div class="tab-pane fade out hide" id="contactlog">
						<fieldset>
							<legend class="legend-with-right-btn">Contact Log <span class="pull-right"><a class="btn btn-secondary btn-modal-with-ajax btn-sm" <?php echo $btn_guts;?>><i class="fas fa-plus"></i> Add</a></span></legend>
							<?php echo $this->messages_model->make_notes_list_table(array( 'role_scope_object' => 'church', 'id_church' => $item['id_church'], 'view' => 'log', 'table_id' => 'datatable-responsive-log-list'));?>
							<div class="row text-center">
							<a class="btn btn-secondary btn-modal-with-ajax" <?php echo $btn_guts;?>><i class="fa fa-plus"></i> Add a Log Entry</a>
								</div>
						</fieldset>	
					</div>
<!-- Contact Log Tab -->
						
						
						
					
					<div id="advanced" class="tab-pane fade hide">
						<fieldset>
							<legend>Advanced Options</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Disable Volunteer Sharing</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="disable_volunteer_sharing" class="btn-switch" value="1" <?php if(!empty($item['disable_volunteer_sharing'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="disable_volunteer_sharing_prev" value="<?php echo $item['disable_volunteer_sharing'];?>">
									<span class="text-danger"><?php echo form_error('disable_volunteer_sharing'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Requires Volunteer Training</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_requires_training" class="btn-switch" value="1" <?php if(!empty($item['church_requires_training'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_requires_training_prev" value="<?php echo $item['church_requires_training'];?>">
									<span class="text-danger"><?php echo form_error('church_requires_training'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Church is MAP Eligible?</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_map_eligible" class="btn-switch" value="1" <?php if(!empty($item['church_map_eligible'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_map_eligible_prev" value="<?php echo $item['church_map_eligible'];?>">
									<span class="text-danger"><?php echo form_error('church_map_eligible'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Start Date</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="control-group">
										<div class="controls">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
												<input type="text" style="width: 100%" data-placement="right" name="date_start_human" id="datepicker-start" class="form-control date pick-date" value="<?php echo set_value('date_start_human', !empty($item['date_start_human']) ? $item['date_start_human'] : null); ?>">
											</div>
										</div>
									</div>
									<span class="text-danger"><?php echo form_error('date_start_human'); ?></span>
								</div>
							</div>
							<?php if(($this->security_model->user_has_access(95)) || ($this->affiliates_model->get_active_affiliate_id() == 1 && $this->security_model->user_has_access(80))){?>	
						
								<div class="form-group">
									<label class="control-label col-sm-3 col-xs-6">Salesforce ID</label>
									<div class="col-sm-9 col-xs-6">
										<input type="text" class="form-control" name="id_salesforce" id="id_salesforce" value="<?php echo set_value('id_salesforce', $item['id_salesforce']);?>" placeholder="ISalesforce Object ID">
									</div>
								</div>
							
						<?php }?>
							
						</fieldset>
					</div>
					
<!-- Button Block -->
				<div class="ln_solid"><hr /></div>					
				<div class="form-group">
					<div class="col-sm-12 col-xs-12 top30 text-center">
						<div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3 col-sm-offset-3 text-center">
							<a href="<?php echo $url_cancel;?>"class="btn btn-secondary btn-lg btn-block " name="cancel" value="1"><i class="fas fa-times-circle"></i> Cancel</a>
						</div>
						<div class="col-xs-12 visible-xs hidden-sm hidden-md hidden-lg">&nbsp;</div>
						<div class="col-md-3 col-sm-3 col-xs-12 text-center">
							<button type="submit" class="btn btn-success btn-lg btn-block" name="save" value="1"> <i class="fas fa-check-circle"></i> Save</button>
						</div>
					</div>
				</div>
						
			  <input type="hidden" name="id_church_encoded" value="<?php echo $item['id_church_encoded'];?>" />
			  <input type="hidden" name="id_place" value="<?php echo $item['id_place'];?>" />
			  <input type="hidden" name="r" value="<?php echo url_enc($url_redirect);?>" />
			  </form>
			</div><!--/.row-->
		</div>
		<?php }//end can't edit message check?>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>
$(document).ready( function() {
	
    var allaffiliates = [
	<?php 
		$i = 0;
		foreach($affiliates as $cur){
			echo  "{data: '".$cur['id_affiliate']."',	value: '".addslashes($cur['affiliate_name'])."'},\r\n";
		}?>
    ];
 
  $('#affiliate_name').autocomplete({
		lookup: allaffiliates,
		onSelect: function (suggestion) {
			$('#id_affiliate').val(suggestion.data);
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
	
	ps_instantiate_pill_hides();

	$(".btn-switch").bootstrapSwitch();
	
	$('#is_campus').on('switchChange.bootstrapSwitch', function (e, state) {
		if(!state){
			$('#id_church_parent').val('');
		}
		
	});
	
	instantiate_notes_list_table('role_scope=church&c=<?php echo $item['id_church_encoded'];?>');
	instantiate_log_list_table('role_scope=church&view=log&c=<?php echo $item['id_church_encoded'];?>');
	
	$('.btn-pill-notes').on('shown.bs.tab',function(){
		$('#ps_wrapper_notes').css( 'display', 'block' );
		ps_dt_notes_list.columns.adjust();
	});
});
</script>
<?php 
	$this->website_model->make_ajax_call(array('url' => base_url().'churches/ajax_make_church_contacts_list?c='.$item['id_church_encoded'], 
												'target' => 'ajax-target-church-contact-list',
												'functionize' => 1,
												'function_name' => 'ps_churches_get_list_church_contacts'));
												
	$this->website_model->make_ajax_call(array('url' => base_url().'churches/ajax_make_church_fam_offering_list?c='.$item['id_church_encoded'], 
												'target' => 'ajax-target-fam-offerings-list',
												'functionize' => 1,
												'function_name' => 'ps_churches_get_list_fam_offerings'));												
?>
</body>
</html>