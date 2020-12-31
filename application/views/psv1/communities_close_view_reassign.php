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
				<h1 class="page-header">Re-assign Team Members - From <?php echo $item['community_name'];?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>communities/save_close_community_reassign" method="post" id="buildform">
					<fieldset>
						<legend>Care Community Info</legend>
						<div class="col-sm-3 col-sm-offset-2">
							<p class="text-center">
								<?php $item['show_iteration']	= 1;?>
								<?php echo $this->communities_model->get_community_name($item);?><br />
								<?php echo $this->communities_model->format_community_address($item);?><br />
								<?php echo $this->communities_model->format_foster_parents_phones($item);?>
							</p>
						</div>
						<div class="col-sm-1">
							<div class="vertical-alignment-helper">
								<div class="vertical-align-center">
									<i class="fa fa-arrow-right fa-2x"></i>
								</div>
							</div>
						</div>
						<div class="col-sm-3 ">
							<p class="text-center">
								<?php $new['show_iteration']	= 1;?>
								<?php echo $this->communities_model->get_community_name($new);?><br />
								<?php echo $this->communities_model->format_community_address($new);?><br />
								<?php echo $this->communities_model->format_foster_parents_phones($new);?>
							</p>
						</div>
						<div class="row top40"></div>
					</fieldset>					
					<fieldset>
						<legend>Active Team Members</legend>
							<div class="form-group">
								<div class="col-md-11 col-sm-11 col-xs-11 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
									<table class="table table-striped table-bordered table-responsive nowrap" id="table-active-team">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												$in_active	= array();
												foreach($item['team_members'] as $cur_assign){
													if(!in_array($cur_assign['id_people'], $in_active)){
														$cur_assign['show_all_roles']			= 1;
														$in_active[]							= $cur_assign['id_people'];
														$cur_assign['meal_days_list']			= 1;
														$cur_assign['meal_week_list']			= 1;
														//$cur_assign['multiselect']					= 1;
														$cur_church									= array();
														if(!empty($cur_assign['home_church_name'])){
															$cur_church['church_name']			= $cur_assign['home_church_name'];
															$cur_church['campus_name']			= $cur_assign['home_campus_name'];
														}else{
															$cur_church['church_name']			= $cur_assign['church_name'];
															$cur_church['campus_name']			= $cur_assign['campus_name'];
														}

											?>
												<tr id="active-row-<?php echo $cur_assign['id_people'];?>">
													<td>
														<a href="#" data-toggle="tooltip" title="<?php echo $this->churches_model->get_church_name($cur_assign) ;?>"><?php $this->people_model->display_people_avatar($cur_assign);?></a>
														
													</td>
													<td>
														<a href="<?php echo base_url();?>volunteers/edit/<?php echo url_enc($cur_assign['id_people']);?>" target="_blank">
															<?php echo  $cur_assign['name_first'].' '.$this->website_model->display_format_people_name_last($cur_assign['name_last']);?>
															<?php if(!empty($cur_assign['vol_agree_sign_name'])){ echo '<br /><span class="badge badge-light">Agreement Signed</span>';} ?>
														</a>
													</td>
													<td class="text-center">
														<select name="status_<?php echo $cur_assign['id_people_encoded'];?>" id="status-<?php echo $cur_assign['id_people_encoded'];?>" class="form-control input-lg" required>
																<option value="">Select an action</option>
																<option value="40">Add to new care community</option>
																<option value="30">Release & set as Prepared and Waiting</option>
																<option value="22">Release & set as Taking a Break</option>
																<option value="24">Release & set as No Longer Serving</option>
														</select>
													</td>
												</tr>
											<?php 
														$i++;
														$people_ids[]	= $cur_assign['id_people'];
													}
												}
												?>
										</tbody>
									</table>
								</div>
							</div>
						</fieldset>
				<div class="ln_solid top60"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				  
				  <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
				  <a href="<?php echo base_url().$url_scope.'/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
				</div>
			  </div>
			  <div id="inputs-wrapper">
			  <input type="hidden" name="id_community_encoded" value="<?php echo $item['id_community_encoded'];?>" />
			  <input type="hidden" name="id_old" value="<?php echo $item['id_community_encoded'];?>" />
			  <input type="hidden" name="id_new" value="<?php echo $new['id_community_encoded'];?>" />
			  <input type="hidden" name="posted" value="community" />
			   <input type="hidden" name="count_assignments_team" id="count_assignments_team" value="<?php echo $item['count_assignments_team'];?>">
			  <input type="hidden" name="count_assignments_kids" id="count_assignments_kids" value="<?php echo $item['count_assignments_kids'];?>">
			  <?php 
					$i = 0;
					$arr_users_added	= array();
					if(!empty($people) && count($people) > 0){
						foreach($people as $cur_assign){
							if(!in_array($cur_assign['id_people'], $arr_users_added)){
								if(!empty($cur_assign['id_assignment'])){ 
									$cur_id_assign = $cur_assign['id_assignment']; 
								}else{
									$cur_id_assign = '';
								}
								$arr_users_added[] 	= $cur_assign['id_people'];
								//echo '<input type="hidden" id="cbaction-'.$cur_assign['id_people'].'" name="cbaction_'.$cur_assign['id_people'].'" value="">';
								//echo '<input type="hidden" class="id-assignment" name="id_assignment_'.$i.'" id="id_assignment_'.$i.'" value="'.$cur_id_assign.'">';	
								//echo '<input type="hidden" name="id_people_encoded_'.$i.'" value="'.$cur_assign['id_people_encoded'].'">';		
								$i++;
							}
						}
					}
					if(!empty($item['team_members']) && count($item['team_members']) > 0){
						foreach($item['team_members'] as $cur_assign){
							if(!in_array($cur_assign['id_people'], $arr_users_added)){
								
								if(!empty($cur_assign['id_assignment'])){ 
									$cur_id_assign = $cur_assign['id_assignment']; 
								}else{
									$cur_id_assign = '';
								}
								$arr_users_added[] 	= $cur_assign['id_people'];
								echo '<input type="hidden" id="cbaction-'.$cur_assign['id_people'].'" name="cbaction_'.$cur_assign['id_people'].'" value="update">';
								//echo '<input type="hidden" class="id-assignment" name="id_assignment_'.$i.'" id="id_assignment_'.$i.'" value="'.$cur_id_assign.'">';			
								//echo '<input type="hidden" name="id_people_encoded_'.$i.'" value="'.$cur_assign['id_people_encoded'].'">';		
								echo '<input type="hidden" name="people_ids[]" value="'.$cur_assign['id_people_encoded'].'">';		
								$i++;	
							}
						}
					}	
					
			  ?>
			   <input type="hidden" name="count_people" id="count_people" value="<?php echo $i;?>">
			   </div>
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>