<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['community_name'])){
		$name	.= ' '.$this->website_model->display_format_community_name($item);
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
							<?php if(empty($item['family_name']) && empty($item['id_community'])){?>
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Name</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="family_name" id="family_name" value="<?php echo set_value('family_name', $this->website_model->display_format_community_name($item));?>" placeholder="Lookup an existing family by typing their name.">
										<span class="form-instructions">This field is used to lookup an existing family in the system. If you are entering a family for the first time please leave this field blank as the system will auto generate a family name.</span>
										<span class="text-danger"><?php echo form_error('family_name'); ?></span>
									</div>
								<?php 
									}
									if(!empty($item['id_community']) || !empty($_SESSION['affiliate']['allow_community_name_edit_on_new'])){?>
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Care Community Name</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" name="community_name" id="community_name" value="<?php echo set_value('community_name', $this->website_model->display_format_community_name($item));?>" placeholder="Care ommunity name (e.g. Smith Family)">
											<span class="text-danger"><?php echo form_error('community_name'); ?></span>
										</div>
							<?php	} ?>
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
									<?php echo $this->website_model->input_menu_statuses('community_state', set_value('community_state', $item['community_state']), 'community_state', 'input-lg', array('view' => 'edit_community', 'required' => 1));?>
									<input type="hidden" name="state_prev" value="<?php echo set_value('community_state', $item['community_state']);?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Iteration <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="This represents the number of care communities this family has had. If this is their first care community then this value should be set to 1." value="<?php echo set_value('iteration', !empty($item['iteration']) ? $item['iteration'] : 1);?>"></i></label>
								<div class="col-md-2 col-sm-2 col-xs-4">
									<input type="number" class="form-control" name="iteration" id="iteration" value="<?php echo set_value('iteration', $item['iteration']);?>" placeholder="Iteration Number" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Agency</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_agencies('id_agency', set_value('id_agency', $item['id_agency']), 'id_agency', 'input-lg') ;?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Serving Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php 
									$item['bypass_security'] 	= 1;
									$item['required'] 			= 1;
									
									echo  $this->website_model->input_menu_churches('id_church', $item['id_church'] , 'id_church', 'input-lg', $item);
										unset($item['bypass_security']);
										unset($item['required']);
									?>
									<span class="text-danger"><?php echo form_error('id_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Supervising Advocate</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_advocates('id_advocate', set_value('id_advocate', $id_advocate), 'id_advocate', 'input-lg', array('view' => 'select_advocate', 'required' => 1));?>
									<span class="text-danger"><?php echo form_error('id_advocate'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Launch Date</label>
									<div class="col-sm-4 col-xs-12">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
											<?php 
													$cur_date_start = '';
													if($item['date_start'] > 0 ){
														$cur_date_start = date('m/d/Y', $item['date_start']);
													}
											?>
											<input type="text" class="form-control date pick-date" name="date_start" id="date_start" value="<?php echo set_value('date_start', $cur_date_start);?>" placeholder="Launch Date">
										</div>
									</div>
									<span class="text-danger"><?php echo form_error('has_cert_cpr'); ?></span>
								</div>	
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
									<div class="col-sm-4 col-xs-12">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
											<?php 
													$cur_date_end = '';
													if($item['date_end'] > 0 ){
														$cur_date_end = date('m/d/Y', $item['date_end']);
													}
											?>
											<input type="text" class="form-control date pick-date" name="date_end" id="date_end" value="<?php echo set_value('date_end', $cur_date_end);?>" placeholder="End Date">
										</div>
									</div>
									<span class="text-danger"><?php echo form_error('has_cert_cpr'); ?></span>
								</div>	
						</fieldset>
						<div id="foster_parent_wrapper" class="">
						<?php if(1 == 2){?>
						<fieldset>
							<legend>Foster Mom Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster Mom Name</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_name_first" id="foster_mom_name_first" value="<?php echo set_value('foster_mom_name_first', $item['foster_mom']['name_first']);?>" placeholder="First name">
									 <span class="text-danger"><?php echo form_error('foster_mom_name_first'); ?></span>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_name_last" id="foster_mom_name_last" value="<?php echo set_value('foster_mom_name_last', $this->website_model->display_format_people_name_last($item['foster_mom']['name_last']));?>" placeholder="Last name">
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
									<input type="text" class="form-control" name="foster_mom_people_phone_mobile" id="foster_mom_people_phone_mobile" value="<?php echo format_phone(set_value('foster_mom_people_phone_mobile', $item['foster_mom']['people_phone_mobile']));?>" placeholder="Mobile phone number">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_people_phone_home" id="foster_mom_people_phone_home" value="<?php echo format_phone(set_value('foster_mom_people_phone_home', $item['foster_mom']['people_phone_home']));?>" placeholder="Home phone number (optional)">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Work Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_mom_people_phone_office" id="foster_mom_people_phone_office" value="<?php echo format_phone(set_value('foster_mom_people_phone_office', $item['foster_mom']['people_phone_office']));?>" placeholder="Office phone number (optional)">
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
									<input type="text" class="form-control" name="foster_dad_name_last" id="foster_dad_name_last" value="<?php echo set_value('foster_dad_name_last', $this->website_model->display_format_people_name_last($item['foster_dad']['name_last']));?>" placeholder="Last name">
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
									<input type="text" class="form-control" name="foster_dad_people_phone_mobile" id="foster_dad_people_phone_mobile" value="<?php echo format_phone(set_value('foster_dad_people_phone_mobile', $item['foster_dad']['people_phone_mobile']));?>" placeholder="Mobile phone number">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_people_phone_home" id="foster_dad_people_phone_home" value="<?php echo format_phone(set_value('foster_dad_people_phone_home', $item['foster_dad']['people_phone_home']));?>" placeholder="Home phone number (optional)">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Work Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="foster_dad_people_phone_office" id="foster_dad_people_phone_office" value="<?php echo format_phone(set_value('foster_dad_people_phone_office', $item['foster_dad']['people_phone_office']));?>" placeholder="Office phone number (optional)">
								</div>
							</div>
								
						</fieldset>
						<?php }?>
						
						<?php 
								$parent_count		= 0;
								$already_displayed	= array();
								if(!empty($item['foster_parents'])){
									$parent_count		= count($item['foster_parents']);
								}
								
								if($parent_count < 2 ){
									$parent_count = 2;
								}
								for($i =0; $i < $parent_count; $i++){
									$cur_parent		= $item['foster_parents'][$i];
									if(empty($cur_parent['id_role'])){$cur_parent['id_role'] = 20;}
									$pronoun =  ucfirst($this->families_model->get_foster_parent_pronoun($cur_parent['id_role']));
									
									if((!empty($cur_parent['id_people']) && !in_array($cur_parent['id_people'], $already_displayed)) || empty($cur_parent['id_people'])){
										if(!empty($cur_parent['id_people'])){
											$already_displayed[] = $cur_parent['id_people'];
										}
										
							?>
							<legend><?php echo $pronoun;?> Info <?php if($this->security_model->user_has_access(99) && !empty($cur_parent['id_people'])){ echo '<small>'. $cur_parent['id_people'].'</small>'; }?></legend>
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
							
						</fieldset>
							<?php 
									} // End Already displayed check
								} //end loop
								?>
						</div>
						<fieldset>
							<legend>Placement Type(s)</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster Placement</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="checkbox" name="placement_foster" class="btn-switch" value="1" <?php if(!empty($item['placement_foster'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="placement_foster_prev"  value="<?php echo $item['placement_foster'];?>">
										<span class="text-danger"><?php echo form_error('placement_foster'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Adoptive Placement</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="checkbox" name="placement_adoptive" class="btn-switch" value="1" <?php if(!empty($item['placement_adoptive'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="placement_adoptive_prev"  value="<?php echo $item['placement_adoptive'];?>">
										<span class="text-danger"><?php echo form_error('placement_adoptive'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Kinship Placement</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="checkbox" name="placement_kinship" class="btn-switch" value="1" <?php if(!empty($item['placement_kinship'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="placement_kinship_prev"  value="<?php echo $item['placement_kinship'];?>">
										<span class="text-danger"><?php echo form_error('placement_kinship'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Bio-Reunification Placement</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="checkbox" name="placement_bio_reunify" class="btn-switch" value="1" <?php if(!empty($item['placement_bio_reunify'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="placement_bio_reunify_prev"  value="<?php echo $item['placement_bio_reunify'];?>">
										<span class="text-danger"><?php echo form_error('placement_bio_reunify'); ?></span>
									</div>
								</div>
						</fieldset>
						<fieldset>
							<legend>Address</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Foster Family Address</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control fam_address_field" name="community_address_street_1" id="community_address_street_1" value="<?php echo set_value('community_address_street_1', $this->website_model->display_format_address_street($item['community_address_street_1']));?>" placeholder="Street address" autocomplete="new-password">
									<span class="text-danger"><?php echo form_error('community_address_street_1'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Apt or Unit #</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control fam_address_field" name="community_address_street_2" id="community_address_street_2" value="<?php echo set_value('community_address_street_2', $item['community_address_street_2']);?>" placeholder="Suite, apartment nuber, or unit" autocomplete="new-password">
									<span class="text-danger"><?php echo form_error('community_address_street_2'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control fam_address_field" name="community_address_city" id="community_address_city" value="<?php echo set_value('community_address_city', $item['community_address_city']);?>" placeholder="City" autocomplete="new-password">
									<span class="text-danger"><?php echo form_error('community_address_city'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control fam_address_field" name="community_address_state" id="community_address_state" value="<?php echo set_value('community_address_state', $item['community_address_state']);?>" placeholder="State Abbreviation (e.g. GA)" autocomplete="new-password">
									<span class="text-danger"><?php echo form_error('community_address_state'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control fam_address_field" name="community_address_zip" id="community_address_zip" value="<?php echo set_value('community_address_zip', $item['community_address_zip']);?>" placeholder="Zip code" autocomplete="new-password">
									<span class="text-danger"><?php echo form_error('community_address_zip'); ?></span>
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
							<legend>Notes</legend>
							<?php echo $this->messages_model->make_notes_section(array('messages' => $messages, 'role_scope_object' => 'family'));?>
						</fieldset>						
					<?php if(1 ==2){?>			
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
									<input type="text" class="form-control" name="id_salesforce" id="id_salesforce" value="<?php echo set_value('id_salesforce', $item['id_salesforce']);?>" placeholder="Salesforce Object ID">
								</div>
							</div>
							<?php if(1 == 2){?>
							<div class="form-group">
								<label class="control-label col-sm-3 col-xs-6">Community Name</label>
								<div class="col-sm-9 col-xs-6">
									<input type="text" class="form-control" name="community_name" id="community_name" value="<?php echo set_value('community_name', $item['community_name']);?>" placeholder="">
								</div>
							</div>
							<?php }?>
						</fieldset>
						
					
						<?php }?>
			  <!-- Button Block -->
				<div class="ln_solid"><hr /></div>					
				<div class="form-group">
					<?php echo $this->website_model->make_edit_buttons(array('url_cancel' => $url_cancel, 'url_redirect' => $url_redirect)); ?>
				</div>
			  <input type="hidden" name="id_community_encoded" value="<?php echo $item['id_community_encoded'];?>" />
			  <input type="hidden" name="posted" value="community" />
			  <input type="hidden" name="id_promise" value="<?php echo $item['id_promise'];?>" />			  
			  <input type="hidden" name="id_assignment" value="<?php echo $item['id_assignment'];?>" />
			  
			  <?php if(1 == 2){?>
				<input type="hidden" name="foster_mom_id_people_encoded" id="foster_mom_id_people_encoded" value="<?php echo $item['foster_mom']['id_people_encoded'];?>" />
				<input type="hidden" name="foster_dad_id_people_encoded" id="foster_dad_id_people_encoded" value="<?php echo $item['foster_dad']['id_people_encoded'];?>" />
				<input type="hidden" name="foster_mom_id_assignment" value="<?php echo $item['foster_mom']['id_assignment'];?>" />
				<input type="hidden" name="foster_dad_id_assignment" value="<?php echo $item['foster_dad']['id_assignment'];?>" />
				<input type="hidden" name="community_name" id="community_name" value="<?php echo $item['community_name'];?>">
			  <?php }?>
			  <input type="hidden" name="r" value="<?php echo $url_redirect;?>" />
			  <input type="hidden" name="count_assignments_team" id="count_assignments_team" value="<?php echo $item['count_assignments_team'];?>">
			  <input type="hidden" name="count_assignments_kids" id="count_assignments_kids" value="<?php echo $item['count_assignments_kids'];?>">
			  <input type="hidden" name="id_family" id="id_family" value="<?php echo $item['id_family'];?>">
			  
			  <input type="hidden" name="parent_count" id="parent_count" value="<?php echo $parent_count;?>">
			  <input type="hidden" name="update_people_address" id="update_people_address" value="-1">
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
$(document).ready(function() {
	$('.pick-date').datetimepicker({
		format: 'MM/DD/YYYY'
	});
	$('.pick-time').datetimepicker({
		format: 'h:mm A'
	});
	
});


var allfamilies = [
<?php 
	$i = 0;
	foreach($families as $cur){
		$cur['show_church_city_state']			= 1;
		$cur_compiled										= $this->families_model->get_family_name($cur);
		if(!empty($cur['family_address_city'])){
			$cur_compiled									.= ' - '.$cur['family_address_city'];
		}
		if(!empty($cur['family_address_state'])){
			$cur_compiled									.= ', '.$cur['family_address_state'];
		}
		echo  "{data: '".$cur['id_family']."',	value: '".addslashes($cur_compiled)."'},\r\n";
	}?>
];


$(document).ready( function() {
	//detect address change
	var address_changed = false;
	var loadhash = ($('#community_address_street_1').val()+$('#community_address_street_2').val()+$('#community_address_state').val()+$('#community_address_zip').val()).replace(/\s+/g, '').toLowerCase();
	$('.fam_address_field').on('blur', function(){
		var chkhash = ($('#community_address_street_1').val()+$('#community_address_street_2').val()+$('#community_address_state').val()+$('#community_address_zip').val()).replace(/\s+/g, '').toLowerCase();
		if(loadhash.length > 0 && chkhash != loadhash && $('#update_people_address').val() == -1){
			console.log(chkhash);
			console.log(loadhash);
			$("#modal-addressshange").modal();
			$('#update_people_address').val(0);
		}
		$('.btn-addresschange-yes').click(function(){
			$('#update_people_address').val(1);
		});
	});
	
   
 
  $('#family_name').on('change', function(){
	  $('#id_family').val('');
  });
 
 instantiate_autocomplete();
 	
	$('#family_name').on( 'focus', function(){
		instantiate_autocomplete();
		 $('#family_name').val(null);
		 $('#id_family').val(null);
		 $('#id_agency option[value="0"]').attr('selected','selected');
		 $('#foster_parent_0_id_role option[value="20"]').attr('selected','selected');
		 $('#foster_parent_1_id_role option[value="20"]').attr('selected','selected');
		 $('#foster_parent_2_id_role option[value="20"]').attr('selected','selected');
		 $('#foster_parent_3_id_role option[value="20"]').attr('selected','selected');
		 $('.form-control').val(null);
	});
	
	$('#family_name').on( 'blur', function(){
		if($('#id_family').val() < 1){
			 //$('#foster_parent_wrapper').toggleClass('hide');
		}
	});
	
	   
});

function instantiate_autocomplete(){
	$('#family_name').autocomplete('destroy');
	$('#family_name').autocomplete({
		lookup: allfamilies,
		onSelect: function (suggestion) {
			$('#id_family').val(suggestion.data);
			$.ajax({
			  url: "<?php echo base_url();?>communities/ajaxgetfamily?id="+suggestion.data,
			  dataType: "html",
			  success: function(ajaxdata) {
				var fam = JSON.parse(ajaxdata);
				//console.log(fam.data.id_family);
				/*
				$('#foster_mom_name_first').val(fam.data.foster_mom.name_first);
				$('#foster_mom_name_last').val(fam.data.foster_mom.name_last);
				$('#foster_mom_people_email_primary').val(fam.data.foster_mom.people_email_primary);
				$('#foster_mom_people_email_secondary').val(fam.data.foster_mom.people_email_secondary);
				$('#foster_mom_people_phone_mobile').val(format_phone_number(fam.data.foster_mom.people_phone_mobile));
				$('#foster_mom_people_phone_home').val(format_phone_number(fam.data.foster_mom.people_phone_home));
				$('#foster_mom_people_phone_work').val(format_phone_number(fam.data.foster_mom.people_phone_work));
				$('#foster_dad_name_first').val(fam.data.foster_dad.name_first);
				$('#foster_dad_name_last').val(fam.data.foster_dad.name_last);
				$('#foster_dad_people_email_primary').val(fam.data.foster_dad.people_email_primary);
				$('#foster_dad_people_email_secondary').val(fam.data.foster_dad.people_email_secondary);
				$('#foster_dad_people_phone_mobile').val(format_phone_number(fam.data.foster_dad.people_phone_mobile));
				$('#foster_dad_people_phone_home').val(format_phone_number(fam.data.foster_dad.people_phone_home));
				$('#foster_dad_people_phone_work').val(format_phone_number(fam.data.foster_dad.people_phone_work));
				$('#foster_mom_id_people_encoded').val(fam.data.foster_mom.id_people_encoded);
				$('#foster_dad_id_people_encoded').val(fam.data.foster_dad.id_people_encoded);
				*/
				<?php for($i=0; $i < 4; $i++){?>
					if(!!(fam.data.foster_parent_<?= $i;?>.name_first)){
						$('#foster_parent_<?= $i;?>_name_first').val(fam.data.foster_parent_<?= $i;?>.name_first);
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.name_last)){
						$('#foster_parent_<?= $i;?>_name_last').val(fam.data.foster_parent_<?= $i;?>.name_last);
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.people_email_primary)){
						$('#foster_parent_<?= $i;?>_people_email_primary').val(fam.data.foster_parent_<?= $i;?>.people_email_primary);
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.people_email_secondary)){						
						$('#foster_parent_<?= $i;?>_people_email_secondary').val(fam.data.foster_parent_<?= $i;?>.people_email_secondary);
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.people_phone_mobile)){
						$('#foster_parent_<?= $i;?>_people_phone_mobile').val(format_phone_number(fam.data.foster_parent_<?= $i;?>.people_phone_mobile));
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.people_phone_home)){
						$('#foster_parent_<?= $i;?>_people_phone_home').val(format_phone_number(fam.data.foster_parent_<?= $i;?>.people_phone_home));
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.people_phone_work)){
						$('#foster_parent_<?= $i;?>_people_phone_work').val(format_phone_number(fam.data.foster_parent_<?= $i;?>.people_phone_work));
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.id_people_encoded)){
						$('#foster_parent_<?= $i;?>_id_people_encoded').val(fam.data.foster_parent_<?= $i;?>.id_people_encoded);
					}
					if(!!(fam.data.foster_parent_<?= $i;?>.id_role)){
						$('#foster_parent_<?= $i;?>_id_role').val(fam.data.foster_parent_<?= $i;?>.id_role);
					}

				<?php }?>
				
				//console.log(fam.data);
				if(!!(fam.data.id_agency)){
					$('#id_agency option[value='+fam.data.id_agency+']').attr('selected','selected');
				}
	
				if(!!(fam.data.family_address_street_1)){
					$('#community_address_street_1').val(fam.data.family_address_street_1);
				}
				if(!!(fam.data.family_address_street_2)){
					$('#community_address_street_2').val(fam.data.family_address_street_2);
				}
				if(!!(fam.data.family_address_city)){
					$('#community_address_city').val(fam.data.family_address_city);
				}
				if(!!(fam.data.family_address_state)){
					$('#community_address_state').val(fam.data.family_address_state);
				}
				if(!!(fam.data.family_address_zip)){
					$('#community_address_zip').val(fam.data.family_address_zip);
				}
			  }
			});
		}
	});  
 }
 
</script>
<div class="modal fade" id="modal-addressshange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"  id="modal-addressshange-header">
				Address Change Detected
			</div>
			<div class="modal-body" id="modal-addressshange-body">
				<p>It looks like you've updated this care community address.</p> <p><strong>When you hit save here would you like to update the foster family's address as well?</strong></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-addresschange-yes" data-dismiss="modal">Yes Please</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">No Thanks</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>