<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['affiliate_name'])){
		$name	.= ' '.$item['affiliate_name'];
}
if(empty($item['id_affiliate'])){
	$name .= ' New Affiliate';
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
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>affiliates/list">
						Communities
					</a>
				</li>
				<li class="active"><?php echo $action.' Affiliate';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Affiliate<?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
		
			<div class="row">
			<?php 
				if(is_file(FCPATH.'/img/affiliates/'.$item['id_affiliate'].'/logo_large.png')){ 
					echo '<div class="col-sm-2 col-sm-offset-5"><img src="'.base_url().'img/affiliates/'.$item['id_affiliate'].'/logo_large.png" class="center-block img-responsive"></div>';
					
				}
				
				if(1 == 2){?>
				<div class="col-md-6 col-md-offset-3 text-center">
					<div id="profile-img-holder">
				<?php if(!empty($item['id_affiliate'])){
								$img									= $this->affiliates_model->get_avatar_filename($item);
							}
							if(!empty($img)){
								$upload_btn_text				= 'Change Logo';
					?>
						
							<img src="<?php echo $img;?>" class="center-block img-responsive img-circle" width="200px" height="200px">
				<?php }else{
							$upload_btn_text				= 'Add Logo';
					?>
							<i class="fa fa-image fa-5x" aria-hidden="true"  class="center-block img-responsive img-circle" style="font-size: 200px;"></i>
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
							<button class="btn btn-success upload-result hide" id="btn-upload-result" data-url="<?php echo base_url();?>upload/imageprofile?ce=<?php echo $id_affiliate_encoded;?>">Save Profile Picture</button>
							<label for="file-upload" class="custom-file-upload btn btn-primary" id="btn-upload">
								<i class="fa fa-image"></i> <span id="btn-upload-text"><?php echo $upload_btn_text;?>
							</label>
							<input id="file-upload" type="file"  accept="image/*;capture=camera" style="visibility: hidden;"/>
							
						</div>
						<h2 class="text-center" style="margin: 5px;"><?php echo $name;?></h2>
					</div>	
				</div>
			<?php }?>
				<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
			</div>
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>affiliates/save" method="post">
					<fieldset>
						<legend>Affiliate Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="affiliate_name" id="affiliate_name" value="<?php echo set_value('affiliate_name', $item['affiliate_name']);?>" placeholder="Affiliate name (e.g. Promise686)">
									<span class="text-danger"><?php echo form_error('affiliate_name'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('affiliate_state', set_value('affiliate_state', $item['affiliate_state']), 'affiliate_state', 'input-lg', array('view' => 'edit_affiliate'));?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate Contact Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="affiliate_contact_name" id="affiliate_contact_name" value="<?php echo set_value('affiliate_contact_name', $item['affiliate_contact_name']);?>" placeholder="Affiliate contact">
									<span class="text-danger"><?php echo form_error('affiliate_contact_name'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate Contact Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="affiliate_contact_email" id="affiliate_contact_email" value="<?php echo set_value('affiliate_contact_email', $item['affiliate_contact_email']);?>" placeholder="Affiliate contact's email address">
									<span class="text-danger"><?php echo form_error('affiliate_contact_email'); ?></span>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate Phone Number</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="afflliate_contact_phone" id="afflliate_contact_phone" value="<?php echo set_value('afflliate_contact_phone', format_phone($item['afflliate_contact_phone']));?>" placeholder="Phone Number">
									<span class="text-danger"><?php echo form_error('afflliate_contact_phone'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate Address</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="affiliate_address_street" id="affiliate_address_street" value="<?php echo set_value('affiliate_address_street', $item['affiliate_address_street']);?>" placeholder="Street address">
									<span class="text-danger"><?php echo form_error('affiliate_address_street_1'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="affiliate_address_city" id="affiliate_address_city" value="<?php echo set_value('affiliate_address_city', $item['affiliate_address_city']);?>" placeholder="City">
									<span class="text-danger"><?php echo form_error('affiliate_address_city'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="affiliate_address_state" id="affiliate_address_state" value="<?php echo set_value('affiliate_address_state', $item['affiliate_address_state']);?>" placeholder="State Abbreviation (e.g. GA)">
									<span class="text-danger"><?php echo form_error('affiliate_address_state'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="affiliate_address_zip" id="affiliate_address_zip" value="<?php echo set_value('affiliate_address_zip', $item['affiliate_address_zip']);?>" placeholder="Zip code">
									<span class="text-danger"><?php echo form_error('affiliate_address_zip'); ?></span>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Website Branding / Info</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Site Title</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="brand[meta_title]" id="meta_title" value="<?php echo set_value('meta_title', $brand['meta_title']);?>" placeholder="Site Title">
										<span class="text-danger"><?php echo form_error('meta_title'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Site Description</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="brand[meta_desc]" id="meta_desc" value="<?php echo set_value('meta_desc', $brand['meta_desc']);?>" placeholder="Site Description (appears on site sharing links)">
										<span class="text-danger"><?php echo form_error('meta_desc'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-6">Primary Color</label>
									<div class="col-md-2 col-sm-2 col-xs-3">
										<input type="text" class="form-control jscolor" name="brand[color_primary]" id="color_primary" value="<?php echo set_value('color_primary', $brand['color_primary']);?>" placeholder="">
										<span class="text-danger"><?php echo form_error('color_primary'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-6">Secondary Color</label>
									<div class="col-md-2 col-sm-2 col-xs-3">
										<input type="text" class="form-control jscolor" name="brand[color_secondary]" id="color_secondary" value="<?php echo set_value('color_secondary', $brand['color_secondary']);?>" placeholder="">
										<span class="text-danger"><?php echo form_error('color_secondary'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-6">Navigation Bar Color Set</label>
									<div class="col-md-2 col-sm-2 col-xs-3">
										<select name="brand[color_set_navbar]" class="form-control input-lg">
											<option value="black-white" <?php if($brand['color_set_navbar'] == "black-white"){ echo 'selected';}?>>Black BG with White Text</option>
											<option value="white-black" <?php if($brand['color_set_navbar'] == "white-black"){ echo 'selected';}?>>White BG with Black Text</option>
											<option value="lgray-black" <?php if($brand['color_set_navbar'] == "lgray-black"){ echo 'selected';}?>>Light Gray BG with Black Text</option>
											<option value="dgray-black" <?php if($brand['color_set_navbar'] == "dgray-black"){ echo 'selected';}?>>Dark Gray BG with White Text</option>
										</select>
									</div>
								</div>
						</fieldset>
						<fieldset>
							<legend>Agreement Text</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Volunteer Agreement Text</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div id="affiliate_agree_volunteer" class="form-control quill-editor" style="min-height: 250px;"></div>
									<input type="hidden" name="affiliate_agree_volunteer" id="affiliate_agree_volunteer_body" class="quill-editor-body" value="<?php echo set_value('affiliate_agree_volunteer', $item['affiliate_agree_volunteer']);?>">
									<span class="text-danger"><?php echo form_error('affiliate_agree_volunteer'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Supported Family Agreement Text</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div id="affiliate_agree_family" class="form-control quill-editor" style="min-height: 250px;"></div>
									<input type="hidden" name="affiliate_agree_family" id="affiliate_agree_family_body" class="quill-editor-body" value="<?php echo set_value('affiliate_agree_family', $item['affiliate_agree_family']);?>">
									<span class="text-danger"><?php echo form_error('affiliate_agree_family'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Advocate Agreement Text</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div id="affiliate_agree_advocate" class="form-control quill-editor" style="min-height: 250px;"></div>
									<input type="hidden" name="affiliate_agree_advocate" id="affiliate_agree_advocate_body" class="quill-editor-body" value="<?php echo set_value('affiliate_agree_advocate', $item['affiliate_agree_advocate']);?>">
									<span class="text-danger"><?php echo form_error('affiliate_agree_advocate'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Staff Agreement Text</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div id="affiliate_agree_staff" class="form-control quill-editor" style="min-height: 250px;"></div>
									<input type="hidden" name="affiliate_agree_staff" id="affiliate_agree_staff_body" class="quill-editor-body" value="<?php echo set_value('affiliate_agree_staff', $item['affiliate_agree_staff']);?>">
									<span class="text-danger"><?php echo form_error('affiliate_agree_staff'); ?></span>
								</div>
							</div>
						</fieldset>
				<div class="ln_solid top40"></div>
					<fieldset>
						<legend>Advanced Options</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Restrict Cross Church Volunteer Lookup</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success" name="restrict_cross_church_volunteers" value="1" <?php if(!empty($item['restrict_cross_church_volunteers'])){ echo 'checked';}?>>
								<input type="hidden" name="restrict_cross_church_volunteers_prev" value="<?php echo $item['restrict_cross_church_volunteers'];?>">
								<span class="text-danger"><?php echo form_error('restrict_cross_church_volunteers'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Allow Care Portal Features</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success" name="allow_interest_care_portal" value="1" <?php if(!empty($item['allow_interest_care_portal'])){ echo 'checked';}?>>
								<input type="hidden" name="allow_interest_care_portal_prev" value="<?php echo $item['allow_interest_care_portal'];?>">
								<span class="text-danger"><?php echo form_error('allow_interest_care_portal'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Enable Regions</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" class="btn-switch"  data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success" name="enable_regions" value="1" <?php if(!empty($item['enable_regions'])){ echo 'checked';}?>>
								<input type="hidden" name="enable_regions_prev" value="<?php echo $item['enable_regions'];?>">
								<span class="text-danger"><?php echo form_error('enable_regions'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Default Search Radius</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="default_search_radius" id="default_search_radius" value="<?php echo set_value('default_search_radius', $item['default_search_radius']);?>" placeholder="Optional - system defaults to 10 miles automatically">
								<span class="text-danger"><?php echo form_error('default_search_radius'); ?></span>
							</div>
						</div>
						
					</fieldset>
				<div class="ln_solid top40"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				  
				  <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
				    <?php if($this->security_model->user_has_access(95)){?>
						<a href="<?php echo base_url().'affiliates/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
					<?php }else{?>
						<a href="<?php echo base_url().'dashboard';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
					<?php }?>
				</div>
			  </div>
			  <input type="hidden" name="id_affiliate_encoded" value="<?php echo $item['id_affiliate_encoded'];?>" />
			  <?php if($this->security_model->user_has_access(95)){?>
				<input type="hidden" name="r" value="<?php echo url_enc(base_url().'affiliates/list');?>" />
			  <?php }else{?>
				<input type="hidden" name="r" value="<?php echo url_enc(base_url().'dashboard');?>" />
			  <?php }?>
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jscolor.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});

$(document).ready(function() {
	
	var quillagreevol = new Quill('#affiliate_agree_volunteer', {
		theme: 'snow'
	});

	//Attach quill to data of modal element for retrieval in other functions
	$('#affiliate_agree_volunteer').data('quill', quillagreevol);

	quillagreevol.on('text-change', function() {
		var justHtml = quillagreevol.root.innerHTML;
		$('#affiliate_agree_volunteer_body').val(justHtml);
	});
	
	quillagreevol.clipboard.dangerouslyPasteHTML($('#affiliate_agree_volunteer_body').val(), String = 'api');
	

	//Family Text Editor
	var quillagreefam = new Quill('#affiliate_agree_family', {
		theme: 'snow'
	});

	//Attach quill to data of modal element for retrieval in other functions
	$('#affiliate_agree_family').data('quill', quillagreefam);

	quillagreefam.on('text-change', function() {
		var justHtml = quillagreefam.root.innerHTML;
		$('#affiliate_agree_family_body').val(justHtml);
	});
	
	quillagreefam.clipboard.dangerouslyPasteHTML($('#affiliate_agree_family_body').val(), String = 'api');
	
	
	//Advocate Text Editor
	var quillagreeadv = new Quill('#affiliate_agree_advocate', {
		theme: 'snow'
	});

	//Attach quill to data of modal element for retrieval in other functions
	$('#affiliate_agree_advocate').data('quill', quillagreeadv);

	quillagreeadv.on('text-change', function() {
		var justHtml = quillagreeadv.root.innerHTML;
		$('#affiliate_agree_advocate_body').val(justHtml);
	});
	
	quillagreeadv.clipboard.dangerouslyPasteHTML($('#affiliate_agree_advocate_body').val(), String = 'api');
	
	
	//Staff Text Editor
	var quillagreestaff = new Quill('#affiliate_agree_staff', {
		theme: 'snow'
	});

	//Attach quill to data of modal element for retrieval in other functions
	$('#affiliate_agree_staff').data('quill', quillagreestaff);

	quillagreestaff.on('text-change', function() {
		var justHtml = quillagreestaff.root.innerHTML;
		$('#affiliate_agree_staff_body').val(justHtml);
	});
	
	quillagreestaff.clipboard.dangerouslyPasteHTML($('#affiliate_agree_staff_body').val(), String = 'api');
	
});
</script>

</body>
</html>