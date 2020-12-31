<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php


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
				<li class="active">
					<a href="<?php echo base_url();?>my-profile">
						My Profile 
					</a>
				</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">My Profile</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="col-sm-3 col-xs-12" >
					<ul class="nav nav-pills nav-stacked hidden-xs ps-nav-pills" data-spy="affix">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active ">Basic Info</a>
						</li>
						<li>
							<a href="#members" data-toggle="pill">Members</a>
						</li>
						<li>
							<a href="#notes" data-toggle="pill">Notes</a>
						</li>
						<li>
							<a href="#needs" data-toggle="pill">Needs</a>
						</li>
						<li>
							<a href="#agreement" data-toggle="pill">Agreement</a>
						</li>
						<li>
							<a href="#communities" data-toggle="pill">Care Communities</a>
						</li>
						<li>
							<a href="#updates" data-toggle="pill">Updates</a>
						</li>
						<li>
							<a href="#timeline" data-toggle="pill">Timeline</a>
						</li>
						<li>
							<a href="contactlog" data-toggle="pill">Contact Log</a>
						</li>
						<li>
							<a href="#avatar" data-toggle="pill">Family Photo</a>
						</li>
					</ul>
					<ul class="nav nav-pills visible-xs hidden-sm hidden-md hidden-lg ps-nav-pills">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active ">Basic Info</a>
						</li>
						<li>
							<a href="#members" data-toggle="pill">Members</a>
						</li>
						<li>
							<a href="#notes" data-toggle="pill">Notes</a>
						</li>
						<li>
							<a href="#needs" data-toggle="pill">Needs</a>
						</li>
						<li>
							<a href="#agreement" data-toggle="pill">Agreement</a>
						</li>
						<li>
							<a href="#communities" data-toggle="pill">Care Communities</a>
						</li>
						<li>
							<a href="#updates" data-toggle="pill">Updates</a>
						</li>
						<li>
							<a href="#timeline" data-toggle="pill">Timeline</a>
						</li>
						<li>
							<a href="contactlog" data-toggle="pill">Contact Log</a>
						</li>
						<li>
							<a href="#avatar" data-toggle="pill">Family Photo</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
					<div class="tab-pane fade hide" id="avatar">
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
				<div class="tab-pane fade active in" id="contact">
				<div class="row">
					<form class="form-horizontal form-label-left" action="<?php echo base_url();?>save-my-profile" method="post" autocomplete="off">
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
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Email</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="people_email_secondary" id="people_email_secondary" value="<?php echo set_value('people_email_secondary', $this->website_model->display_format_email($item['people_email_secondary']));?>" placeholder="Secondary email address" autocomplete="new-password">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="people_phone_mobile" id="people_phone_mobile" value="<?php echo  format_phone(set_value('people_phone_mobile', $item['people_phone_mobile']));?>" placeholder="Mobile phone number">
									</div>
								</div>
								
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
								
								<?php if(1 == 2){?>
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
							<?php }?>
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
							
					<div class="ln_solid"></div>					
					<div class="form-group">
						<div class="col-sm-12 col-xs-12 top30 text-center">
							<button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
							<a href="<?php echo base_url('dashboard');?>"class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</a>
						</div>
					</div>
					<input type="hidden" name="id_people_encoded" id="id_people_encoded" value="<?php echo $item['id_people_encoded'];?>" />
					<input type="hidden" name="posted" value="people" />
					<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>" />
				  </form>
				</div><!--/.row-->
			</div>
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
		$arr_churches_shown	= array();
		foreach($churches as $cur){
			$cur['show_church_city_state']			= 1;
			//if(!in_array($cur['id_church'], $arr_churches_shown)){
				$arr_churches_shown[]	= $cur['id_church'];
				echo  "{data: '".$cur['id_church']."',	value: '".addslashes($this->churches_model->get_church_name($cur))."'},\r\n";
			//}
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
ps_instantiate_pill_hides();
</script>
</body>
</html>