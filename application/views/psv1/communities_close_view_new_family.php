<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_ids								= array();
$in_active									= array();
$in_potential								= array();
$past_served_possible_count 	= 0;
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$item['name_last'];
}
if(empty($item['id_people'])){
	$name .= ' New Care Community';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

$update_button_showed		= false;

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
					<a href="<?php echo base_url();?>communities/list">
						Communities
					</a>
				</li>
				<li class="active">Re-assign</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Move team members to new family</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>communities/save_close_community_and_new_family" method="post" id="buildform">
					<fieldset>
						<legend>Move Temambers From <?php echo $this->communities_model->get_community_name($item);?></legend>
						<p class="text-center">
							<?php echo $this->communities_model->format_foster_parents_name($item);?><br />
							<?php echo $this->communities_model->format_community_address($item);?><br />
							<?php echo $this->communities_model->format_foster_parents_phones($item);?>
						</p>
						<div class="row top40"></div>
						<div cass="col-sm-12 col-xs-12 text-center">
							<h4 class="text-center">Select a New Family</h4>
						</div>
						<div class="col-sm-12 col-xs-12 text-center">
							<?php echo $this->website_model->input_menu_families('id_family_new', '', 'id_family_new', 'form-contol input-lg center-block', array('required' => 1));?>
						</div>
					</fieldset>	
				<div class="ln_solid top60"></div>
			  <div class="form-group">
				<div class="col-sm-12">				  
				  <button type="submit" class="btn btn-success btn-lg center-block" name="next" value="1">Next</button>
				</div>
			  </div>
			  <div id="inputs-wrapper">
				  <input type="hidden" name="id_community_encoded" value="<?php echo $item['id_community_encoded'];?>" />
				  <input type="hidden" name="posted" value="community" />
			  </div>
			</form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>