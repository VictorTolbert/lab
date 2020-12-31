<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['resource_name'])){
		$name	.= ' '.$item['resource_name'];
}
if(empty($item['id_resource'])){
	$name .= ' New Resource';
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
					<a href="<?php echo base_url();?>resources/list">
						Resources
					</a>
				</li>
				<li class="active"><?php echo $action.' Resource';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $action;?> Resource<?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>resources/admin/save" method="post">
					<fieldset>
					<legend>Resource Info</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Name</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="resource_name" id="resource_name" value="<?php echo set_value('resource_name', $item['resource_name']);?>" placeholder="Resource title / name">
								<span class="text-danger"><?php echo form_error('resource_name'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo $this->website_model->input_menu_statuses('resource_status', set_value('state', $item['state']), 'state', 'input-lg', array('view' => 'edit_resource_status', 'required' => 1));?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Categories</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo  $this->website_model->input_menu_multiselect('resource_cats[]', set_value('resource_cats', $item['resource_cats']), 'resource_cats', 'form-control input-lg', array('multiselect' => 1,'required' =>1)) ;?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">File Type</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo  $this->website_model->input_menu_statuses('resource_type', set_value('resource_type', $item['resource_type']), 'resource_type', 'form-control input-lg', array('multiselect' => 1,'required' => 1, 'view' => 'resource_type'));?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Short Description</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="resource_desc_short" id="resource_desc_short" value="<?php echo set_value('resource_desc_short', $item['resource_desc_short']);?>" placeholder="Single sentence summary of resource" required>
								<span class="text-danger"><?php echo form_error('resource_desc_short'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Long Description</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea class="form-control" name="resource_desc_long" id="resource_desc_long" placeholder="Long description of resource" rows="10"><?php echo set_value('resource_desc_long', $item['resource_desc_long']);?></textarea>
								<span class="text-danger"><?php echo form_error('resource_desc_long'); ?></span>
							</div>
						</div>						
					</fieldset>
					<fieldset>
					<legend>Asset Info</legend>								
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Download Asset URI</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="url_download" id="url_download" value="<?php echo set_value('url_download', $item['url_download']);?>" placeholder="Link to actual resource file on AWS S3" required>
								<span class="text-danger"><?php echo form_error('url_download'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Preview Asset URI</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="url_preview" id="url_preview" value="<?php echo set_value('url_preview', $item['url_preview']);?>" placeholder="Link to optional preview file on AWS S3" >
								<span class="text-danger"><?php echo form_error('url_preview'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Thumbnail Filename</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="url_thumbnail" id="url_thumbnail" value="<?php echo set_value('url_thumbnail', $item['url_thumbnail']);?>" placeholder="Thumbnail Filename (do not include the full URL)">
								<span class="text-danger"><?php echo form_error('url_preview'); ?></span>
							</div>
						</div>
						
					</fieldset>

					<fieldset>
					<legend>Security</legend>								
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliates</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo  $this->website_model->input_menu_multiselect('id_affiliates[]', set_value('id_affiliates', $item['id_affiliates']), 'id_affiliates', 'form-control', array('multiselect' => 1,'required' =>1)) ;?>
								<span class="text-danger"><?php echo form_error('id_affiliates'); ?></span>
							</div>
						</div>
						<!--
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">User Access</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo  $this->website_model->input_menu_multiselect('access_roles', set_value('access_roles', $item['access_roles']), 'access_roles', 'form-control', array('multiselect' => 1,'required' =>1));?>
								<span class="text-danger"><?php echo form_error('access_roles'); ?></span>
							</div>
						</div>
						-->
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Minimum User Access</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php echo  $this->website_model->input_menu_statuses('access_level_min', set_value('access_level_min', $item['access_level_min']), 'access_level_min', 'form-control input-lg', array('view' => 'access_level_min','required' =>1));?>
								<span class="text-danger"><?php echo form_error('access_level_min'); ?></span>
							</div>
						</div>
					</fieldset>
					<legend>Advanced</legend>								
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Version</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="resource_version" id="resource_version" value="<?php echo set_value('resource_version', $item['resource_version']);?>" placeholder="Version Number">
								<span class="text-danger"><?php echo form_error('resource_version'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Search Terms</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="resource_keywords" id="resource_keywords" value="<?php echo set_value('resource_keywords', $item['resource_keywords']);?>" placeholder="Comma separated search terms">
								<span class="text-danger"><?php echo form_error('resource_keywords'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Tags</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="resource_tags" id="resource_tags" value="<?php echo set_value('resource_tags', $item['resource_tags']);?>" placeholder="Comma separated tags">
								<span class="text-danger"><?php echo form_error('resource_tags'); ?></span>
							</div>
						</div>
						<!--<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Slug</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="resource_slug" id="resource_slug" value="<?php echo set_value('resource_slug', $item['resource_slug']);?>" placeholder="Permalink URL slug">
								<span class="text-danger"><?php echo form_error('resource_slug'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Short URL</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" name="url_short" id="url_short" value="<?php echo set_value('url_short', $item['url_short']);?>" placeholder="Short link URL for sharing">
								<span class="text-danger"><?php echo form_error('url_short'); ?></span>
							</div>
						</div> -->
					</fieldset>
				<div class="ln_solid top40"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				  
				  <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
				  <a href="<?php echo $url_cancel;?>" class="btn btn-primary btn-lg" name="cancel" >Cancel</a>
				</div>
			  </div>
			  <input type="hidden" name="id_resource_encoded" value="<?php echo $item['id_resource_encoded'];?>" />
			  <input type="hidden" name="r" value="<?php echo url_enc($redirect);?>" />
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