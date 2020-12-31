<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['region_name'])){
		$name	.= ' '.$item['region_name'];
}
if(empty($item['id_region'])){
	$name .= ' New Region';
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
					<a href="<?php echo base_url();?>regions/list">
						Communities
					</a>
				</li>
				<li class="active"><?php echo $action.' Region';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Region<?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>regions/save" method="post">
					<fieldset>
						<legend>Region Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Region Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="region_name" id="region_name" value="<?php echo set_value('region_name', $item['region_name']);?>" placeholder="Region name (e.g. Gwinnett County)">
									<span class="text-danger"><?php echo form_error('region_name'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('region_state', set_value('region_state', $item['region_state']), 'region_state', 'input-lg', array('view' => 'edit_region', 'required' => 1));?>
								</div>
							</div>	
						<?php if($this->security_model->user_has_access(95)){ 	?>				
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_affiliates('id_affiliate', set_value('id_affiliate', $item['id_affiliate']), 'id_affiliate', 'input-lg', array('view' => 'select_affiliates', 'required' => 1));?>
								</div>
							</div>
						<?php }?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Manager</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_staff('id_region_manager', set_value('id_region_manager', $item['id_region_manager']), 'id_region_manager', 'input-lg', array('view' => 'select_staff'));?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Region State</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="region_address_state" id="region_address_state" value="<?php echo set_value('region_address_state', $item['region_address_state']);?>" placeholder="Region State Abbreviation (e.g. GA)">
									<span class="text-danger"><?php echo form_error('region_address_state'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Region Zipcodes</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="region_zips" id="region_zips" value="<?php echo set_value('region_zips', $item['region_zips']);?>" placeholder="Zipcodes found in region separated by commas">
									<span class="text-danger"><?php echo form_error('region_zips'); ?></span>
								</div>
							</div>
							
							
						</fieldset>
				<div class="ln_solid top40"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				  
				  <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
				  <a href="<?php echo base_url().'regions/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
				</div>
			  </div>
			  <input type="hidden" name="id_region_encoded" value="<?php echo $item['id_region_encoded'];?>" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'regions/list');?>" />
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