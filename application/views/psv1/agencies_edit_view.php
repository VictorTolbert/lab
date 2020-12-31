<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['agency_name'])){
	$action	= 'Edit';
}elseif(empty($item['id_agency'])){
	$name .= ' New Agency';
	$action	= 'Add';	
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
					<a href="<?php echo base_url();?>agencies/list">
						Agencies 
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
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>agencies/save" method="post">
					<fieldset>
						<legend>Basic Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Agency Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="agency_name" id="agency_name" value="<?php echo set_value('agency_name', $item['agency_name']);?>" placeholder="Agency name" required="required">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Agency Nick Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="agency_nick" id="agency_nick" value="<?php echo set_value('agency_nick', $item['agency_nick']);?>" placeholder="Optional Short Name of agency">
								</div>
							</div>
					<?php if($this->security_model->user_has_access(95)){?>							
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->website_model->input_menu_affiliates('id_affiliate', set_value('id_affiliate', $item['id_affiliate']), 'id_affiliate', 'input-lg', array('view' => 'edit_affiliates', 'required' =>1));?>
							</div>
						</div>
					<?php }?>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<?php echo $this->website_model->input_menu_statuses('agency_state', set_value('agency_state', $item['agency_state']), 'agency_state', 'input-lg', array('view' => 'edit_agencies', 'required' =>1));?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Street Address</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="agency_address_1" id="agency_address_1" value="<?php echo set_value('agency_address_1', $item['agency_address_1']);?>" placeholder="Street address">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Suite or Unit</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="agency_address_2" id="agency_address_2" value="<?php echo set_value('agency_address_2', $item['agency_address_2']);?>" placeholder="Suite or unit">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="agency_address_city" id="agency_address_city" value="<?php echo set_value('agency_address_city', $item['agency_address_city']);?>" placeholder="City">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="agency_address_state" id="agency_address_state" value="<?php echo set_value('agency_address_state', $item['agency_address_state']);?>" placeholder="State" required="required">
								<input type="hidden" name="agency_state_abbrev" id="agency_state_abbrev" value="<?php echo $item['agency_address_state'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="agency_address_zip" id="agency_address_zip" value="<?php echo set_value('agency_address_zip', $item['agency_address_zip']);?>" placeholder="ZIpcode">
							</div>
						</div>
						</fieldset>
						<fieldset>
							<legend>Agency Contact </legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="agency_contact_name" id="agency_contact_name" value="<?php echo set_value('agency_contact_name', $item['agency_contact_name']);?>" placeholder="Contact Name">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Email</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="agency_contact_email" id="agency_contact_email" value="<?php echo set_value('agency_contact_email', $item['agency_contact_email']);?>" placeholder="Contact email address">
								</div>
							</div>
						</fieldset>
						<?php if($this->affiliates_model->get_active_affiliate_id() == 43){?>
						<fieldset>
							<legend>Babysitting Partner </legend>
							<div class="form-group">
									<label class="control-label col-md-4 col-sm-6 col-xs-12">Has Partnership?</label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="checkbox" name="has_affiliate_partnership" class="btn-switch" value="1" <?php if(!empty($item['has_affiliate_partnership'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="has_affiliate_partnership_prev"  value="<?php echo $item['has_affiliate_partnership'];?>">
										<span class="text-danger"><?php echo form_error('has_affiliate_partnership'); ?></span>
									</div>
								</div>
						</fieldset>
						<?php }?>
						<?php if($this->security_model->user_has_access(99)){?>
						<fieldset>
							<legend>Salesforce</legend>
								<div class="form-group">
									<label class="control-label col-sm-3 col-xs-6">Salesforce ID</label>
									<div class="col-sm-9 col-xs-6">
										<input type="text" class="form-control" name="id_salesforce" id="id_salesforce" value="<?php echo set_value('id_salesforce', $item['id_salesforce']);?>" placeholder="Salesforce Object ID">
									</div>
								</div>
							</fieldset>
						<?php }?>
					<div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
				  <button type="submit" class="btn btn-success" name="save" value="1">Save</button>
				  &nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="<?php echo base_url();?>agencies/list"><button type="button" class="btn btn-primary" name="cancel" value="1">Cancel</button></a>
				</div>
			  </div>
			  <input type="hidden" name="id_agency_encoded" value="<?php echo $item['id_agency_encoded'];?>" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'agencies/list');?>" />
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>
$(document).ready( function() {
	
	$(document).ready(function() {
		$(".btn-switch").bootstrapSwitch();
	});
	
    var allagencys = [
	<?php 
		$i = 0;
		foreach($agencys as $cur){
			echo  "{data: '".$cur['id_agency']."',	value: '".addslashes($cur['agency_name'])."'},\r\n";
		}?>
    ];
 
  $('#agency_name').autocomplete({
		lookup: allagencys,
		onSelect: function (suggestion) {
			$('#id_agency').val(suggestion.data);
		}
	});  
	
	 var allstates = [
	<?php 
		$i = 0;
		
		foreach($us_states as $key => $val){
			echo  "{data: '".$key."',	value: '".addslashes($val. ' ('.$key.')')."'},\r\n";
		}?>
    ];
	
	$('#agency_state').autocomplete({
		lookup: allstates,
		onSelect: function (suggestion) {
			$('#agency_state_abbrev').val(suggestion.data);
		}
	});
});
</script>
</body>
</html>