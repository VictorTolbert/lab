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


?>
	
<div class="col-sm-12 main container container-<?= $env_scope;?>">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20 text-center">
			<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		</div>
	</div>
	<div class="row top10">
		<div class="container">
			<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">Update Your Family Info</h1>';}?>
			<?php echo $this->session->flashdata('msg'); ?>
			<?php 
				if(!empty($content['body'])){ 
					echo $content['body']; 
				}else{
			?>
			<div class="top40">
				<div class="col-sm-12 col-xs-12">
					<p class="text-center">Thank you for taking the time to update your family information!</p>
				</div>
			</div>
			<?php }?>
		</div><!--/.row-->
	</div>
</div>
</body>
</html>