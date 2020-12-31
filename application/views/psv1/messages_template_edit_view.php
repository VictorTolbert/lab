<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['messaging_name'])){
		$name	.= ' '.$item['messaging_name'].' Template';
}
if(empty($item['id_msg_template_encoded'])){
	$name .= ' New Messaging Template';
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
					<a href="<?php echo base_url();?>templates/list">
						Templates
					</a>
				</li>
				<li class="active"><?php echo $action.' Template';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $action.' '.$name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
			</div>
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>templates/save" method="post">
					<fieldset>
						<legend>Affiliate Info</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Template Name</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="messaging_name" id="messaging_name" value="<?php echo set_value('messaging_name', $item['messaging_name']);?>" placeholder="For admin purposes only - no recipient will see this name" required>
								<span class="text-danger"><?php echo form_error('affiliate_name'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Active</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="checkbox" name="state" class="btn-switch" value="1" <?php if(!empty($item['state'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
								<span class="text-danger"><?php echo form_error('state'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Subject</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="messaging_subject" id="messaging_subject" value="<?php echo set_value('messaging_subject', $item['messaging_subject']);?>" placeholder="Email Subject Line" required>
								<span class="text-danger"><?php echo form_error('messaging_subject'); ?></span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Message Body</label>
							<div class="col-md-9 col-sm-9 col-xs-12" required>
								<div id="messaging_body" class="form-control quill-editor ignorevalidate" style="min-height: 250px;"></div>
								<input type="hidden" name="messaging_body" id="messaging_body_body" class="quill-editor-body ignorevalidate" value="<?php echo set_value('messaging_body', $item['messaging_body']);?>">
								<span class="text-danger"><?php echo form_error('messaging_body'); ?></span>
							</div>
						</div>
					</fieldset>
					
					
					<div class="ln_solid top40"></div>
				  <div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				  
					  <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
						<?php if($this->security_model->user_has_access(95)){?>
							<a href="<?php echo base_url().'templates/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
						<?php }else{?>
							<a href="<?php echo base_url().'dashboard';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
						<?php }?>
					</div>
				  </div>
				  <input type="hidden" name="id_msg_template_encoded" value="<?php echo $item['id_msg_template_encoded'];?>" />
				  <?php if($this->security_model->user_has_access(95)){?>
						<input type="hidden" name="r" value="<?php echo url_enc(base_url().'templates/list');?>" />
				  <?php }else{?>
						<input type="hidden" name="r" value="<?php echo url_enc(base_url().'dashboard');?>" />
				  <?php }?>
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>
$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});

$(document).ready(function() {
		

	//Family Text Editor
	var quillbody = new Quill('#messaging_body', {
		theme: 'snow'
	});

	//Attach quill to data of modal element for retrieval in other functions
	$('#messaging_body').data('quill', quillbody);

	quillbody.on('text-change', function() {
		var justHtml = quillbody.root.innerHTML;
		$('#messaging_body_body').val(justHtml);
	});
	
	quillbody.clipboard.dangerouslyPasteHTML($('#messaging_body_body').val(), String = 'api');
	
});
</script>

</body>
</html>