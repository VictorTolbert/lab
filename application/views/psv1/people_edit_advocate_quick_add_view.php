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

if(empty($item['assign_id_affiliate'])){
	$item['assign_id_affiliate']	= $_SESSION['affiliate']['id_affiliate'];
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
					<a href="<?php echo base_url();?>advocates/list">
						Advocates
					</a>
				</li>
				<li class="active">Quick Add Advocates</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quick Add Advocate</h1>
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
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>people/save" method="post" autocomplete="off" role="presentation">
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
									<?php echo $this->website_model->input_menu_statuses('people_state', set_value('people_state', $item['people_state']), 'people_state', 'input-lg', array('view' => 'edit_volunteer', 'required' =>1));?>
								</div>
							</div>						
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_roles('id_role', set_value('id_role', $item['id_role']), 'id_role', 'input-lg', array('role_scope' => 'advocate', 'required' =>1));?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Church</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php if(1==2){?>
										<input type="text" class="form-control" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church">
										<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>">
									<?php }?>
									<?php 
										$church_item				= $item;
										$church_item['required']	= 1;
										echo $this->website_model->input_menu_churches('id_home_church', $item['id_home_church'] , 'id_home_church', 'input-lg', $church_item) ;?>
									<span class="text-danger"><?php echo form_error('home_church'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="email" required class="form-control" name="people_email_primary" id="people_email_primary" value="<?php echo set_value('people_email_primary', $this->website_model->display_format_email($item['people_email_primary']));?>" placeholder="Primary email address"  autocomplete="off" autocomplete="new-password">
									<span id="error-people-email-primary" class="text-danger"><?php echo form_error('people_email_primary'); ?></span>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="people_phone_mobile" id="people_phone_mobile" value="<?php echo  format_phone(set_value('people_phone_mobile', $item['people_phone_mobile']));?>" placeholder="Mobile phone number">
								</div>
							</div>
						</fieldset>
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
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Force User to change password on next login?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" name="pass_reset_force" class="btn-switch" value="1" <?php if(!empty($item['pass_reset_force'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<span class="text-danger"><?php echo form_error('pass_reset_force'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Send User Credentials?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" name="send_user_credentials" id="send_user_credentials" class="btn-switch" value="1" <?php if(!empty($item['send_user_credentials'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<span class="text-danger"><?php echo form_error('send_user_credentials'); ?></span>
								</div>
							</div>
							</fieldset>
							<?php if($this->security_model->user_has_access(85)){?>
							<fieldset>
								<legend>Advocate Resources Access</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Has Advocate Resources Access?</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="has_portal_access" id="has_portal_access" class="btn-switch" value="1" <?php if(!empty($item['has_portal_access'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
											<span class="text-danger"><?php echo form_error('has_portal_access'); ?></span>
									</div>
								</div>
							</fieldset>
							<?php }?>
						
					<div class="ln_solid"></div>
					
			  <div class="form-group">
				<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 top30">

				   <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
				  <a href="<?php echo base_url().$url_scope.'/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
				</div>
			  </div>
			  <input type="hidden" name="id_people_encoded" value="<?php echo $item['id_people_encoded'];?>" /> 
			  <input type="hidden" name="view" value="advocate_quick_add" />
			  <input type="hidden" name="posted" value="people" />
			  <input type="hidden" name="r" value="<?php echo $redirect;?>" />
			  <input type="hidden" name="role_scope" id="role_scope" value="<?php echo $role_scope;?>">
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
	
	<?php if(empty($item['id_people'])){?>
		if($('#send_user_credentials').is(":checked") && !$('#password').val()){
			
		}
	<?php }?>
		
});


</script>
</body>
</html>