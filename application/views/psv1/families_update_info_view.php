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

$random = rand(1,2);
?>
<div class="hero-image" style=" background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/families/hero_families_<?= $random;?>.jpg'); background-position: top center; min-height: 500px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">Update Your Family Info</h1>';}?>
		<p class="text-center">Thank you for allowing us the opportunity to serve your family.</p>
		<p class="text-center">Please take 2-3 minutes to update your info below and ensure that we have the most current information so we can best serve your family.</p>
	 </div>
</div>
	
<div class="col-sm-12 main container container-<?= $env_scope;?>">
	<div class="row top10">
		<div class="container">
			
			<?php echo $this->session->flashdata('msg'); ?>
			<?php 
				if(!empty($content['body'])){ 
					echo $content['body']; 
				}else{
			?>
			<?php }?>
		</div><!--/.row-->
	</div>
	<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
	<div class="panel panel-container">
		<div class="row">
			<form class="form-horizontal form-label-left" action="<?php echo base_url();?>families/save" method="post">
				<fieldset>
					<legend>Family Info - <?php echo $name;?></legend>
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
							
							<div class="col-md-9 col-sm-9 col-xs-12">								<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church" data-idtarget="id_home_church">
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
						
				</fieldset>
				
						<?php 
							
							$parent_count 	= $item['count_assignments_parents'];
							
							for($i =0; $i < $parent_count; $i++){
								$can_show		= false;
								$cur_parent		= $item['foster_parents'][$i];
								if(empty($cur_parent['id_role'])){
									$cur_parent['id_role'] =20;
								}
								
								if((!empty($cur_parent['id_people']) && !in_array($cur_parent['id_people'], $already_displayed)) || empty($cur_parent['id_people'])){
									if(in_array($cur_parent['id_role'], $arr_parent_roles)){
										$can_show = true;
									}
								}
								
								if(empty($cur_parent['id_people'])){
									$can_show = true;
								}
								
								if(!empty($cur_parent['id_people']) && empty($cur_parent['name_first']) && empty($cur_parent['name_last'])){
									$can_show = false;
								}
								
								if($can_show){
									if(!empty($cur_parent['id_people'])){
										$already_displayed[] = $cur_parent['id_people'];
									}
									
									$pronoun =  ucfirst($this->families_model->get_foster_parent_pronoun($cur_parent['id_role']));
									
						?>
						<fieldset>
						<legend>Foster <?php echo $pronoun;?> Info 
							<?php 
								if($this->security_model->user_has_access(99) && !empty($cur_parent['id_people'])){ 
									echo '<small> '. $cur_parent['id_people'].'</small> '; 
								} 
								if(!empty($cur_parent['id_people'])){ 
									echo '<small><a href="'.base_url().'volunteer/edit/'.url_enc($cur_parent['id_people']).'" target="_blank">[Edit]</a></small>';
								} ?>
							</legend>
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
								<?php echo $this->website_model->input_menu_statuses('foster_parent_'.$i.'_id_role', set_value('foster_parent_'.$i.'_id_role', $cur_parent['id_role']), 'foster_parent_'.$i.'_id_role', 'input-lg', array('view' => 'edit_family_parent_role'));?>
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="foster_parent_<?= $i;?>_people_phone_mobile" id="foster_parent_<?= $i;?>_people_phone_mobile" value="<?php echo  format_phone(set_value('foster_parent_'.$i.'_people_phone_mobile', $cur_parent['people_phone_mobile']));?>" placeholder="Mobile phone number">
							</div>
						</div>
						<input type="hidden" name="foster_parent_<?= $i;?>_id_people_encoded" value="<?php echo $cur_parent['id_people_encoded'];?>" />
						
					</fieldset>
						<?php 
								} // End Already displayed check
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
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Address Access Instructions</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<textarea name="family_address_access_instructions" id="family_address_access_instructions" class="form-control" rows="5" placeholder="Optional instructions for access this address (e.g. gate codes, entrance notes, etc)"><?php echo set_value('family_address_access_instructions', $item['family_address_access_instructions']);?></textarea>
								<span class="text-danger"><?php echo form_error('family_address_access_instructions'); ?></span>
							</div>
						</div>
				</fieldset>
				<fieldset>
						<?php 
							
							foreach($item['foster_kids'] as $cur_kid){
									
							}
							
							$kid_count = $item['count_assignments_kids'];
							$i = 0;
							foreach($item['foster_kids'] as $cur_kid){
								
								$can_show		= false;
								
								if((!empty($cur_kid['id_people']) && !in_array($cur_kid['id_people'], $already_displayed)) || empty($cur_kid['id_people'])){
									if(in_array($cur_kid['id_role'], $arr_kid_roles)){
										$can_show = true;
									}
								}
								
								
								if($can_show){
									if(!empty($cur_kid['id_people'])){
										$already_displayed[] = $cur_kid['id_people'];
									}
									$pronoun =  ucfirst($this->families_model->get_foster_parent_pronoun($cur_kid['id_role']));
									
									if(empty($item['foster_kid_'.$i.'_people_dob_human'])){
										$item['foster_kid_'.$i.'_people_dob_human'] = date_offset('m/d/Y', $cur_kid['people_dob']);
									}
									
						?>
						<legend>Child <?php echo $i + 1;?>
							<?php 
								if($this->security_model->user_has_access(99) && !empty($cur_kid['id_people'])){ 
									echo '<small> '. $cur_kid['id_people'].'</small> '; 
								} 
								if(!empty($cur_kid['id_people'])){ 
									echo '<small><a href="'.base_url().'volunteer/edit/'.url_enc($cur_kid['id_people']).'" target="_blank">[Edit]</a></small>';
								} ?>
							</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $pronoun;?> Name</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="foster_kid_<?= $i;?>_name_first" id="foster_kid_<?= $i;?>_name_first" value="<?php echo set_value('foster_kid_'.$i.'_name_first', $cur_kid['name_first']);?>" placeholder="First name">
								 <span class="text-danger"><?php echo form_error('foster_kid_'.$i.'_name_first'); ?></span>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="foster_kid_<?= $i;?>_name_last" id="foster_kid_<?= $i;?>_name_last" value="<?php echo set_value('foster_kid_'.$i.'_name_last',  $this->website_model->display_format_people_name_last($cur_kid['name_last']));?>" placeholder="Last name">
								 <span class="text-danger"><?php echo form_error('foster_kid_'.$i.'_name_last'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Role</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->website_model->input_menu_statuses('foster_kid_'.$i.'_id_role', set_value('foster_kid_'.$i.'_id_role', $cur_kid['id_role']), 'foster_kid_'.$i.'_id_role', 'input-lg', array('view' => 'edit_family_kid_role'));?>
								<span class="text-danger"><?php echo form_error('foster_kid_'.$i.'_id_role'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->website_model->input_menu_statuses('foster_kid_'.$i.'_people_gender', set_value('foster_kid_'.$i.'_people_gender', $cur_kid['people_gender']), 'foster_kid_'.$i.'_people_gender', 'input-lg', array('view' => 'edit_gender'));?>
								<span class="text-danger"><?php echo form_error('foster_kid_'.$i.'_people_gender'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Birthdate</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="control-group">
											<div class="controls">
												<div class="input-prepend input-group">
													<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
													<input type="text" style="width: 150px" data-placement="right" name="foster_kid_<?php echo $i;?>_people_dob_human" id="datepicker-start" class="form-control date pick-date" required="required" value="<?php echo set_value('foster_kid_'.$i.'_people_dob_human', $item['foster_kid_'.$i.'_people_dob_human']); ?>">
											</div>
										</div>
									</div>
								<span class="text-danger"><?php echo form_error('foster_kid_'.$i.'_people_dob_human'); ?></span>
							</div>
						</div>
						<?php if(1 == 2){?>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="email" class="form-control" name="foster_kid_<?= $i;?>_people_email_primary" id="foster_kid_<?= $i;?>_people_email_primary" value="<?php echo set_value('foster_kid_'.$i.'_people_email_primary', $this->website_model->display_format_email($cur_kid['people_email_primary']));?>" placeholder="Primary email address">
								<span class="text-danger"><?php echo form_error('foster_kid_'.$i.'_people_email_primary'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="foster_kid_<?= $i;?>_people_phone_mobile" id="foster_kid_<?= $i;?>_people_phone_mobile" value="<?php echo  format_phone(set_value('foster_kid_'.$i.'_people_phone_mobile', $cur_kid['people_phone_mobile']));?>" placeholder="Mobile phone number">
							</div>
						</div>
						
						<?php }?>
						<input type="hidden" name="foster_kid_<?= $i;?>_id_people_encoded" value="<?php echo $cur_kid['id_people_encoded'];?>" />
				
						<?php 
								$i++;
								} // End Already displayed check
							}
							?>
				</fieldset>
				<fieldset>
						<legend>Family Openness</legend>
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-12">Open to a foster placement?</label>
							<div class="col-sm-3 col-xs-12">
								<input type="checkbox" name="has_desire_foster" class="btn-switch" value="1" <?php if(!empty($item['has_desire_foster'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<input type="hidden" name="has_desire_foster_prev" value="<?php echo $item['has_desire_foster'];?>">
								<span class="text-danger"><?php echo form_error('has_desire_foster'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-12">Open to a adoption?</label>
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
					<fieldset>
						<legend>Family History</legend>
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-12">Has either parent previously served on a Care Community?</label>
							<div class="col-sm-3 col-xs-12">
								<input type="checkbox" name="previously_served_on_cc" class="btn-switch" value="1" <?php if(!empty($item['previously_served_on_cc'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<input type="hidden" name="previously_served_on_cc_prev" value="<?php echo $item['previously_served_on_cc'];?>">
								<span class="text-danger"><?php echo form_error('previously_served_on_cc'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-12">Has you previously fostered?</label>
							<div class="col-sm-3 col-xs-12">
								<input type="checkbox" name="has_past_fostered" class="btn-switch" value="1" <?php if(!empty($item['has_past_fostered'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<input type="hidden" name="has_past_fostered_prev" value="<?php echo $item['has_past_fostered'];?>">
								<span class="text-danger"><?php echo form_error('has_past_fostered'); ?></span>
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-12">Has you previously had a kinship placement?</label>
							<div class="col-sm-3 col-xs-12">
								<input type="checkbox" name="has_past_kinship_placement" class="btn-switch" value="1" <?php if(!empty($item['has_past_kinship_placement'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<input type="hidden" name="has_past_kinship_placement_prev" value="<?php echo $item['has_past_kinship_placement'];?>">
								<span class="text-danger"><?php echo form_error('has_past_kinship_placement'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-12">Has you previously adopted?</label>
							<div class="col-sm-3 col-xs-12">
								<input type="checkbox" name="has_past_adopted" class="btn-switch" value="1" <?php if(!empty($item['has_past_adopted'])){echo 'checked="checked"';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<input type="hidden" name="has_past_adopted_prev" value="<?php echo $item['has_past_adopted'];?>">
								<span class="text-danger"><?php echo form_error('has_past_adopted'); ?></span>
							</div>
						</div>	
						
					</fieldset>	
					<fieldset>
						<legend>Family Photo</legend>
						<div class="col-md-6 col-md-offset-3 text-center">
							<div id="profile-img-holder">
						<?php if(!empty($item['id_family'])){
										$img									= $this->families_model->get_avatar_filename($item);
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
							</div>	
						</div>
					</fieldset>	
					<?php 
						if(empty($item['agree_family_sign_date'])){
					?>
					<fieldset>
						<legend>Supported Family Agreement</legend>
						<div class="top20">
							<?php 
								if(!empty($_SESSION['affiliate']['affiliate_agree_family'])){ 
									echo $this->website_model->format_copy($_SESSION['affiliate']['affiliate_agree_family']); 
								}else{
							?>
								<p>This agreement must be signed by volunteers that desire to serve children in foster care, by 
								supporting a foster family, through participating in a care community.  </p> 

								 <p>Care Community volunteers can offer two basic levels of support:
								 <ul>
									<li>Supervised Assistance: These volunteers are called “Family Helpers” who support the 
								family through bringing meals, doing light yardwork or other small chores that do not 
								involve unsupervised contact with the children. They serve solely at the discretion of the 
								foster parent, under Reasonable and Prudent Parenting Standards (RPPS).</li>
								<li>Unsupervised Assistance: These volunteers can spend unsupervised time with the 
								children in the foster family through roles such as babysitters, transporters and tutors, 
								when the parent may not be directly present. If a volunteer has a prior relationship with 
								the foster family, they may serve up to 3 times at the foster parent’s discretion before 
								they must complete various RPPS background checks required by the family’s 
								placement agency and be officially approved by the agency for service. If the volunteer 
								does not have a prior relationship with the family, he or she must be approved to serve 
								by the family’s placement agency before starting to serve the family.</li>
								</ul>
								</p>

								<p>I understand and agree to the above responsibilities for volunteer. I understand that any 
								volunteer who does not abide by these standards will be reported and dismissed. </p>
							<?php }?>
								<p>A representative of the supported family must digitally sign this agreement by entering their full name below and clicking 'Save'.</p>
								<p>By signing this agreement you are also agreeing to adibe by the <a href="<?php echo base_url();?>terms" target="_blank">Terms of Service</a> for this website.</p>
						</div>
						<div class="col-sm-6 col-xs-12 col-sm-offset-3 top20">
							
							<input type="text" class="form-control" name="agree_family_sign_name" id="agree_family_sign_name" placeholder="Your Full Name As Signature" required>
						</div>
					</fieldset>
					<input type="hidden" name="agreement_type" value="family">
				<?php }?>
					
											
			<div class="ln_solid top40"><hr /></div>
			<div class="col-sm-12 col-xs-12 text-center">				  
			  <button type="submit" class="btn btn-success btn-lg btn-submit" name="save" value="1">Save</button>
			</div>
		  </div>
		  <input type="hidden" name="id_family_encoded" value="<?php echo $item['id_family_encoded'];?>" />
		  <input type="hidden" name="posted" value="family" />
		  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'families/success/update_info');?>" />
		  <input type="hidden" name="count_assignments_kids" id="count_assignments_kids" value="<?php echo $item['count_assignments_kids'];?>">
		  <input type="hidden" name="parent_count" id="parent_count" value="<?php echo $parent_count;?>">
		  <input type="hidden" name="kid_count" id="parent_count" value="<?php echo $kid_count;?>">
		  <input type="hidden" name="family_state" id="family_state" value="<?php echo $edit_state;?>">
		  <input type="hidden" name="ekey" id="ekey" value="<?php echo $ekey;?>">
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
});

$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
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
</script>
</body>
</html>