<!-- Header Section -->
<?php echo $site_header; ?>
<link rel="stylesheet" href="<?php echo base_url("css/jquery.multiselect.css");?>" rel="stylesheet">
<?php echo $site_sidebar; ?>
<?php
$people_ids								= array();
$in_active									= array();
$in_potential								= array();
$in_shown									= array();
$past_served_possible_count 	= 0;
$is_active									= false;
if($item['community_state'] != 24){
	$is_active								= true;	
}

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

$email['body_prospect_text']	= "<p>Hi [NAME],</p><br /><p>I wanted to gauge your interest in joining the ".$item['community_name']." care community.</p><br /><p><em>I think it might be a good fit since they are roughly [DIS] from your address</em>.</p><br /><p>If you are interested in joining this care community then please click the link below to complete the volunteer agreement and I will add you to the team.</p><br /><p><a href=\"[VOLAGREELINK]\" target=\"_blank\">[VOLAGREELINK]</a></p><br /><p>Thanks for your interest in serving!</p><br /><p>Sincerely,<br />".$user['name_first']."</p>";

$email['body_prospect_text_signed']	= "<p>Hi [NAME],</p><br /><p>I wanted to gauge your interest in joining the ".$item['community_name']." care community.</p><br /><p><em>I think it might be a good fit since they are roughly [DIS] from your address</em>.</p><br /><p>If you are interested in joining this care community then please let me know at your earliest convenience and I will add you to the team.</p><br /><br /><p>Sincerely,<br />".$user['name_first']."</p>";

?>
	<script> var arr_precise = []; var arr_precise_durl = [];</script>
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
				<li class="active"><?php echo $action.' '.ucfirst($people_unit);?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Build Care Community Team - <?php echo $this->website_model->display_format_community_name($item['community_name']);?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>communities/savebuild" method="post" id="buildform">
					<fieldset>
						<legend><?php echo $this->website_model->display_format_community_name($item['community_name']);?> Care Community Info</legend>
						<p class="text-center">
							<?php if(!is_demo_site()){ echo $this->communities_model->format_foster_parents_name($item); }?><br />
							<?php echo $this->communities_model->format_community_address($item);?><br />
							<?php echo $this->communities_model->format_foster_parents_phones($item);?>
						</p>
						<div class="row top40"></div>
						<?php echo $this->session->flashdata('msg'); ?>
						<?php if(!$is_active){?>
							<div class="col-sm-8 col-sm-offset-2">
								<div class="alert alert-full alert-warning alert-dismissible text-center" role="alert"> 
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
									<strong>This care community is closed.</strong>
									<p>You will not be able to make any changes to this care community.</p>
								</div>
							</div>
						<?php }?>
					</fieldset>					
					<fieldset>
						<legend><?php if($is_active){ echo 'Actively Serving';}?> Team Members</legend>
							<div class="form-group">
								<div class="col-sm-12 col-xs-12">
									<table class="table table-striped table-bordered table-responsive nowrap table-build-team" id="table-active-team">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												<th>Distance <small>(miles)</small></th>
												<th>Travel Time</th>
												<th>Role</th>
												<th>Meal Day</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												
												
												//Find meal days in assignments
												foreach($item['team_members'] as $cur_assign){
													$id_people				= $cur_assign['id_people'];
													$meal_day[$id_people]	= null;
													$meal_week[$id_people]	= null;
												}
												foreach($item['team_members'] as $cur_people){
													$id_people			= $cur_people['id_people'];
													foreach($cur_people['assigned'] as $cur_assign){
														if(!empty($cur_assign['meal_day'])){
															$meal_day[$id_people]	= $cur_assign['meal_day'];
														}
														if(!empty($cur_assign['meal_week'])){
															$meal_week[$id_people]	= $cur_assign['meal_week'];
														}
													}
													
												}
												
												foreach($item['team_members'] as $cur_assign){
													$can_show_row = true;
													
													
													
													if(in_array($cur_assign['id_people'], $in_shown)){
														$can_show_row = false;
													}
													
													if(isset($cur_assign['assign_state']) && $cur_assign['assign_state'] < 1 && $item['community_state'] != 24){
														$can_show_row = false;
													}
													
													if($can_show_row){
														$cur_assign['show_all_roles']			= 1;
														$in_active[]							= $cur_assign['id_people'];
														$in_shown[]								= $cur_assign['id_people'];
														$id_people								= $cur_assign['id_people'];
														$cur_assign['meal_days_list']			= 1;
														$cur_assign['meal_week_list']			= 1;
														//$cur_assign['multiselect']					= 1;
														$cur_church											= array();
														if(!empty($cur_assign['home_church_name'])){
															$cur_church['church_name']			= $cur_assign['home_church_name'];
															$cur_church['campus_name']			= $cur_assign['home_campus_name'];
														}else{
															$cur_church['church_name']			= $cur_assign['church_name'];
															$cur_church['campus_name']			= $cur_assign['campus_name'];
														}
														if(!empty($cur_assign['people_geo_lat']) && !empty($cur_assign['people_geo_lng']) && !empty($item['community_geo_lat']) && !empty($item['community_geo_lng'])){
															$cur_assign['origin_lat']				= $cur_assign['people_geo_lat'];
															$cur_assign['origin_lng']				= $cur_assign['people_geo_lng'];
															$cur_assign['dest_lat']					= $item['community_geo_lat'];
															$cur_assign['dest_lng']					= $item['community_geo_lng'];
														}
																	
														$cur_assign['disabled']						= null;
														if(!$is_active){
															$cur_assign['disabled']					= 1;
														}
														
														
														$cur_distance_id		= 'people_'.$cur_assign['id_people'];
														
														if(!empty($cur_assign['id_distance'])){
															$cur_distance_id		= $cur_assign['id_distance'];
														}
														
														$cur_assign['ajax_target_id']	= numeric_only($cur_assign['id_home_church'].$cur_assign['id_people'].$cur_assign['id_home_church']);

											?>
												<tr id="active-row-<?php echo $cur_assign['id_people'];?>">
													<td class="text-center">
														<?php $this->people_model->display_people_avatar($cur_assign);?>
														<?php if($is_active){?>
															<div class="dropdown" style="float:none;">
																<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
																	<span class="caret"></span> Actions
																</button>
																<ul class="dropdown-menu">
																	<li><a href="#" class="btn-remove-from-team"  data-id="<?php echo $i;?>" data-pid="<?php echo $cur_assign['id_people'];?>">Remove from team</a></li>
																</ul>
															</div>
														<?php }?>
													</td>
													<td>
														<a href="<?php echo base_url();?>volunteers/edit/<?php echo url_enc($cur_assign['id_people']);?>" target="_blank">
															<?php echo  $cur_assign['name_first'].' '.$this->website_model->display_format_people_name_last($cur_assign['name_last']) ;?>
															<?php if(!empty($cur_assign['vol_agree_sign_name'])){ echo '<br /><span class="badge badge-light">Agreement Signed</span>';} ?>
														</a>
													</td>
													<td id="ajax-target-distance-<?=$cur_assign['ajax_target_id'];?>">
														<?php $cur_assign['distance_display_view'] = 'distance_only';?>
														<div id="distance_id_<?= $cur_distance_id;?>"><?php echo $this->communities_model->format_distance_display($cur_assign);?></div>
													</td>
													<td id="ajax-target-time-<?=$cur_assign['ajax_target_id'];?>">
														<?php $cur_assign['distance_display_view'] = 'time_only';?>
														<div id="time_id_<?= $cur_distance_id;?>"><?php echo $this->communities_model->format_distance_display($cur_assign);?></div>
													</td>
													<td>
														<div class="col-xs-12 col-sm-12"><?php echo  $this->website_model->input_menu_roles('id_role_'.$cur_assign['id_people'].'[]', $cur_assign['p_to_c_assigns'] , 'id_role_'.$cur_assign['id_people'], 'input-md col-sm-12', array('multiselect' => 1, 'role_scope_limiters' => 'list_volunteers', 'disabled' =>$cur_assign['disabled'])) ;?><br /></div>
													</td>
													<td class="text-center">
														<?php echo  $this->website_model->input_menu_weeks('meal_week_'.$cur_assign['id_people'], $meal_week[$id_people] , 'meal_week_'.$cur_assign['id_people'], 'input-md', $cur_assign);?>
														<br />
														<?php echo  $this->website_model->input_menu_days('meal_day_'.$cur_assign['id_people'], $meal_day[$id_people] , 'meal_day_'.$cur_assign['id_people'], 'input-md', $cur_assign);?>
													</td>

												</tr>
											<?php 
														$i++;
														$people_ids[]	= $cur_assign['id_people'];
													}//end if can show row
													
												}?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="form-group">
								<?php if($is_active){?>
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">				  
									<button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
									<a href="<?php echo base_url().$url_scope.'/list';?>" class="btn btn-primary btn-lg" >Cancel</a>
								</div>
								<?php }else{?>
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">				  
										<a href="<?php echo base_url().$url_scope.'/list';?>" class="btn btn-primary btn-lg" >Close</a>
									</div>
								<?php }?>
							</div>
						</fieldset>
						<?php 
							if(!empty($people_past_served) && count($people_past_served) > 0){
								
								foreach($people_past_served as $cur_past){
									if(!in_array($cur_past['id_people'], $in_active)){
										$past_served_possible_count++;
									}
								}
							}
							
							if($past_served_possible_count > 0 && $is_active){
							?>
						<fieldset id="fieldset-past-team-members" class="read-more-container">
							<legend>Previously Served This Family</legend>
							<div class="form-group" class="read-more-container">
								<div class="col-sm-12 col-xs-12" id="past-list-ajax-target">
									<table class="table table-striped table-bordered table-responsive nowrap table-build-team" id="table-role-assignments">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												<th>Status</th>
												<th>Distance <small>(miles)</small></th>
												<th>Travel Time</th>
												<th>Church</th>
												<th>Preferences</th>
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												if(empty($people_past_served)){
													echo '<tr><td colspan="20" class="text-center"><h4>No volunteers are available in a 10 mile radius</h4><br /><button class="btn btn-primary potential-update-btn" data-url="'.base_url().'communities/ajaxgetpotentialteammembers?id='.$item['id_community_encoded'].'&calculate=1&retry=2&showunavailable=1&distance=10"><i class="fa fa-refresh"></i> <span id="potential-update-text">Look for Volunteers</span></button></td></tr>';
													$update_button_showed		= true;
												}else{
													
													foreach($people_past_served as $cur_assign){
														if(!in_array($cur_assign['id_people'], $in_shown)){
															$cur_assign['limit_list_scope']						= 'community_volunteer';
															$in_potential[]							 			= $cur_assign['id_people'];
															$in_shown[]											= $cur_assign['id_people'];
															if(!empty($cur_assign['vol_agree_sign_name'])){
																$cur_assign['body_prospect_text']				= $email['body_prospect_text_signed'];
															}else{
																$cur_assign['body_prospect_text']				= $email['body_prospect_text'];
															}
															$cur_church										= array();
															if(!empty($cur_assign['home_church_name'])){
																$cur_church['church_name']		= $cur_assign['home_church_name'];
																$cur_church['campus_name']		= $cur_assign['home_campus_name'];
															}else{
																$cur_church['church_name']		= $cur_assign['church_name'];
																$cur_church['campus_name']		= $cur_assign['campus_name'];
															}
															if(!empty($cur_assign['people_geo_lat']) && !empty($cur_assign['people_geo_lng']) && !empty($item['community_geo_lat']) && !empty($item['community_geo_lng'])){
																$cur_assign['origin_lat']				= $cur_assign['people_geo_lat'];
																$cur_assign['origin_lng']				= $cur_assign['people_geo_lng'];
																$cur_assign['dest_lat']					= $item['community_geo_lat'];
																$cur_assign['dest_lng']					= $item['community_geo_lng'];
															}
															
															
															unset($msg_json);
															$msg_json['body']							=  $this->website_model->merge_email_body($cur_assign);
															$msg_json['subject']						=  'Live The Promise Care Community Placement';
															$msg_json['recpient_ids']				= array($cur_assign['id_people']);
															$msg_json									= htmlspecialchars(json_encode($msg_json));
											?>
												<tr id="potential-row-<?php echo $cur_assign['id_people'];?>">
													<td>
														<?php $this->people_model->display_people_avatar($cur_assign);?>
														<div class="dropdown" style="float:none;">
															<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
																<span class="caret"></span> Actions
															</button>
															<ul class="dropdown-menu">
																<li>
																	<a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-msgjson="<?php echo $msg_json;?>" data-rids="<?php echo $cur_assign['id_people'];?>">Send Email</a>
																</li>
																<li>
																	<a href="#" class="btn-add-to-team" data-id="<?php echo $i;?>" data-pid="<?php echo $cur_assign['id_people'];?>" >
																		Add to team
																	</a>
																</li>
															</ul>
														</div>
													</td>
													<td>
														<?php 
																if(!empty($cur_assign['id_people'])){
																	echo '<a href="'.base_url().'volunteers/edit/'.url_enc($cur_assign['id_people']).'" target="_blank">'.$cur_assign['name_first'].' '.$this->website_model->display_format_people_name_last($cur_assign['name_last']).'</a>';
																}else{
																	//echo  $this->website_model->input_menu_people('id_people_'.$i, $cur_assign['id_people'] , 'id_people_'.$i, 'input-lg', $cur_assign) ;	
																}
																
																
														?>
														<?php if(!empty($cur_assign['vol_agree_sign_name'])){ echo '<br /><span class="badge badge-light">Agreement Signed</span>';} ?>
													</td>
													<td><?php echo $this->people_model->get_person_status_from_state($cur_assign); ?></div>
													<td>
														<?php $cur_assign['distance_display_view'] = 'distance_only';?>
														<div id=""><?php echo $this->communities_model->format_distance_display($cur_assign);?></div>
													</td>
													<td>
														<?php $cur_assign['distance_display_view'] = 'time_only';?>
														<div id=""><?php echo $this->communities_model->format_distance_display($cur_assign);?></div>
													</td>
													
													<td>
														<?php echo $this->churches_model->get_church_name($cur_church);?>
													</td>
													<td>
														<?php 
															foreach($interests as $key => $val){
																if(!empty($cur_assign[$key]) && strtolower($val) == 'helping in a care community'){
																	echo $val;
																}elseif(!empty($cur_assign[$key])){
																	echo str_replace('Care Community', '', $val).'<br />';
																}
															} 
														?>
													</td>
													
													
												</tr>
											<?php 
														$i++;
														$people_ids[]	= $cur_assign['id_people'];
													}//end If
													} //end Loop
												}//end Else?>
												
										</tbody>
										
									</table>
								</div>
							</div>
						</fieldset>
							<?php } // end possible past served count if?>
							 
						<?php if($is_active){ ?>
						
						<fieldset id="fieldset-potential-team-members" class="top40">
							<legend>Potential Team Members</legend>
							<div class="form-group">
								<div class="col-sm-12 col-xs-12" id="potential-list-ajax-target">
									<table class="table table-striped table-bordered table-responsive nowrap table-potential-list dt-responsive table-build-team" id="table-potential-list">
										<thead>
											<tr>
												<th></th>
												<th class="header-name">Name</th>
												<th class="header-distance">Distance <small>(miles)</small></th>
												<th class="header-duration">Travel Time</th>
												<th class="header-church">Church</th>
												<th class="header-preferences">Preferences</th>
												
											</tr>
										</thead>
										<tbody>
											<?php 	
												$i=0;
												if(empty($people)){
													echo '<tr><td colspan="20" class="text-center"><h4>No volunteers are available in a 10 mile radius</h4><br /><button class="btn btn-primary potential-update-btn" data-url="'.base_url().'communities/ajaxgetpotentialteammembers?id='.$item['id_community_encoded'].'&calculate=1&retry=2&showunavailable=1&distance=10"><i class="fa fa-refresh"></i> <span id="potential-update-text">Look for Volunteers</span></button></td></tr>';
													$update_button_showed		= true;
												}else{
													foreach($people as $cur_assign){
														$cur_assign['in_active']		= $in_active;
														$cur_assign['in_potential']		= $in_potential;
														$cur_assign['email']			= $email;
														$cur_assign['interests']		= $interests;
														$cur_assign['i']				= $i;
														$cur_assign['user']				= $user;
														$cur_assign['available_only']	= 1;
														$cur_assign['with_precising']	= 1;
														$cur_assign['community']		= $item;
														echo $this->communities_model->make_potential_team_member_row($cur_assign);
														$i++;
														$people_ids[]				= $cur_assign['id_people'];
														$in_potential[]				= $cur_assign['id_people'];
													} //end Loop
												}//end Else?>
												
										</tbody>
										<tfoot>
											<tr>
												<td colspan="6" class="text-center">
												<?php if($update_button_showed){?>
													<div class="col-sm-6 text-center">
													</div>
												<?php }else{?>
												<div class="col-sm-6 text-center">
														<button class="btn btn-primary potential-update-btn" data-url="<?php echo base_url().'communities/ajaxgetpotentialteammembers?calculate=1&id='.$item['id_community_encoded'].'&showunavailable=1&retry=1';?>">
															<i class="fa fa-refresh"></i> <span id="potential-update-text">Look for More Volunteers</span>
														</button>
												</div>
												<?php }?>
												<div class="col-sm-6 text-center">
													 <div class="input-group">
														<input type="text" class="form-control" placeholder="Search for a volunteer" id="search-potential-volunteer">
													 <div class="input-group-btn">
													   <button class="btn btn-volunteer-search" data-url="<?php echo base_url().'communities/ajaxgetpotentialteammembers?calculate=1&id='.$item['id_community_encoded'].'&showunavailable=1&retry=0';?>">
														<span class="glyphicon glyphicon-search"></span>
													   </button>
												   </div>
												</td>
											</tr>
										
										</tfoot>
									</table>
								</div>
							</div>
						</fieldset>
						
				<div class="ln_solid top60"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 text-center">				  
				  <button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
				  <a href="<?php echo base_url().$url_scope.'/list';?>"><button type="button" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</button></a>
				</div>
			  </div>
						<?php }?>
			  <div id="inputs-wrapper">
			  <input type="hidden" name="id_community_encoded" value="<?php echo $item['id_community_encoded'];?>" />
			  <input type="hidden" name="id_affiliate" value="<?php echo $item['assign_id_affiliate'];?>" />
			  <input type="hidden" name="id_church" value="<?php echo $item['id_church'];?>" />
			  <input type="hidden" name="posted" value="community" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().$url_scope.'/list');?>" />
			  <input type="hidden" name="count_assignments_team" id="count_assignments_team" value="<?php echo $item['count_assignments_team'];?>">
			  <input type="hidden" name="count_assignments_kids" id="count_assignments_kids" value="<?php echo $item['count_assignments_kids'];?>">
			  <?php 
					$i = 0;
					$arr_users_added	= array();
					
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
					
						
					
			  ?>
			   <input type="hidden" name="count_people" id="count_people" value="<?php echo $i;?>">
			   </div>
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
   
    function instantiatebuttons(){
		$('.btn-add-to-team').off('click');
		$('.btn-remove-from-team').off('click');
		$('.potential-update-btn').off('click');
		$('.btn-volunteer-search').off('click');
		
		$('.btn-add-to-team').on('click', function(e){
			e.preventDefault();
			var idp			= $(this).data('pid');
			addpersontoteam(idp);
			$('#potential-row-'+idp).addClass('hide');
		});
		
		$('.btn-remove-from-team').on('click', function(e){
			e.preventDefault();
			var idp			= $(this).data('pid');
			$('#active-row-'+idp).remove();
			$('#potential-row-'+idp).removeClass('hide');
			$('#cbaction-'+idp).val('remove');
			if(!durl){
				var durl = "<?php echo base_url();?>communities/ajaxteammemberbuildrow?idc=<?php echo url_enc($item['id_community_encoded']);?>&idp="+idp;
			}
		
		   $.ajax({
				url: durl,
				dataType: "html",
				success: function(ajaxdata) {
					var result = JSON.parse(ajaxdata);
					//console.log(result.html);
					$('#table-potential-list > tbody:last-child').append(result.html);
					setTimeout(function(){refreshDataTable();}, 3000);
				}
			});	
		});
		
		$('.potential-update-btn').click(function(e){
			e.preventDefault();
			var durl		= $(this).data('url');
			ajaxcheckpotential(durl);
		});
		
		$('.btn-volunteer-search').click(function(e){
			e.preventDefault();
			var sval		= $('#search-potential-volunteer').val();
			var durl		= $(this).data('url')+'&search_people='+sval;
			ajaxcheckpotential(durl);
		});
		
   }
   
   function ajaxcheckpotential(durl){
	   if(!durl){
			var durl = "<?php echo base_url();?>communities/ajaxgetpotentialteammembers?calculate=1&id=<?php echo $item['id_community_encoded'];?>";
		}
		
		var theight = $('#potential-list-ajax-target').height() - 60;
		
		$('#potential-list-ajax-target').html('<div class="col-sm-12 text-center top60" height="'+theight+'" style="min-height:'+theight+'px;"><h2>Finding potential team members</h2><p class="text-center"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><br />Please be patient, calculating could take up to 2 minutes to complete.</p></div><div class="row top60">&nbsp;</div>');
		
		 $('html,body').animate({scrollTop: $("#potential-list-ajax-target").offset().top}, 'fast');
		$.ajax({
			url: durl,
			dataType: "html",
			success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				setTimeout(function(){
					$('#potential-list-ajax-target').html(result.html);
					instantiatebuttons();
					instantiate_btn_compose_modal();
					$('html,body').animate({scrollTop: $("#fieldset-potential-team-members").offset().top -60}, 'fast');
				}, 2000);				 			
				
				
			}
		});
   }
     
   
   function addpersontoteam(idp, durl){

		if(!durl){
			var durl = "<?php echo base_url();?>communities/ajaxteammemberbuildrow?idc=<?php echo url_enc($item['id_community_encoded']);?>&idp="+idp;
		}
	
	   $.ajax({
			url: durl,
			dataType: "html",
			success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				$('#table-active-team > tbody:last-child').append(result.html);
				instantiatemultiselect();
				instantiatebuttons();
				var people_id = result.data.id_people;
				var enc_people_id	= result.data.id_people_encoded;
				//console.log(people_id);
				if($('#cbaction_'+people_id).length > 0){
					$('#cbaction_'+people_id).val('add');
				}else{
					$('#buildform').append('<input type="hidden" name="cbaction_'+people_id+'" id="cbaction_'+people_id+'" value="add" />');
					$('#count_people').val( function(i, oldval) {
						return ++oldval;
					});
				}
				
				$('#buildform').append('<input type="hidden" name="people_ids[]" value="'+enc_people_id+'" />');
							
			}
		});	
   }
   	
	
	function refresh_potential_data_table(div) {
		
		$('#table-potential-list').DataTable().destroy();	
		instantiate_potential_data_tables();
	}
	
	var potential_default_sort_col	= 2
	function instantiate_potential_data_tables(){
		if(!!potentialTable){
			potentialTable.destroy();
		}
		var potentialTable = $('#table-potential-list').DataTable({'stateSave': true, 
																	'rowReorder': true,
																	'responsive': true,
																	 'autoWidth': false,
																	"columnDefs": [
																					 { "type": 'num-fmt', "targets": [potential_default_sort_col] }
																				  ],
																	'order': [[ potential_default_sort_col, "asc" ]], 
																	'iDisplayLength': 100});
		potentialTable.draw();
	}
   
	$(document).ready(function() {
		instantiatemultiselect();
		instantiatebuttons();
		$('.read-more-container').readmore({ speed: 300, 
											collapsedHeight: 400, 
											beforeToggle: function(trigger, element, expanded) {
												element.addClass('transitioning');
												
											  },
											  afterToggle: function(trigger, element, expanded) {
												element.removeClass('transitioning');
											  },
											lessLink: '<div class="row"><div class="col-sm-4 col-sm-offset-4"><a href="#" class="btn btn-default center-block">View less</a></div></div>', 
											moreLink: '<div class="row"><div class="col-sm-4 col-sm-offset-4"><a href="#" class="btn btn-default center-block">View More</a></div></div>' });
   });
   
   
   $(document).on('distancePrecising', function(e, disInfo){			
		if(disInfo == 'ready'){
			run_precising_ajax();
		}
		//console.log('Status Update: '+disInfo);
	});
      
	  
   
	function run_precising_ajax(){
		$(document).trigger('distancePrecising','running');
		var p;
		var prow;
		var durl;
		var ajax_target;
		var ajax_target_distance;
		var ajax_target_time;
		var result;
		var target_id;
		
		if(!!arr_precise[0]){
			arr_precise = js_unique_array(arr_precise);
		}
		if(!!arr_precise[0]){
			
			p 			= arr_precise[0];
			prow 		= $('#notice_precise_'+p);
			
			
			ajax_target_distance	= $('#ajax-target-distance-'+p);
			ajax_target_time		= $('#ajax-target-time-'+p);
			
			if(!!prow.data('url')){
				durl = prow.data('url');
			}else if(!!window['precise_durl_'+p]){
				durl = window['precise_durl_'+p];
			}
			
			if(!!durl){
				 $.ajax({
					url: durl,
					dataType: "html",
					success: function(ajaxdata) {
						result = JSON.parse(ajaxdata);
						ajax_target_distance.html(result.html_distance);					
						ajax_target_time.html(result.html_time);
						$('#ajax-target-distance-'+p).attr('data-sort', result.sort_distance);						
						$('#ajax-target-time-'+p).attr('data-sort', result.sort_time);	
						$('#ajax-target-distance-'+p).closest('tr').attr('data-dis', result.id_distance);
					}
				}).done(function(){
					$('[data-toggle="tooltip"]').tooltip();
					
					 arr_precise.splice(0,1);
					 if(arr_precise.length > 0){
						$(document).trigger('distancePrecising','ready');
					 }else{
						 refresh_potential_data_table();
						 setTimeout(function(){refreshDataTableSortByDistance('table-potential-list');}, 1000);
						$(document).trigger('distancePrecising','stop');
						
					 }
					return;
				});
			}
		}
	}
	
	$(window).load(function() {
		<?php if(!empty($in_potential) && count($in_potential) > 0){?>
			instantiate_potential_data_tables();
		<?php }?>
		if(!!arr_precise[0]){
			if(arr_precise.length > 0){
				arr_precise = js_unique_array(arr_precise);
				$(document).trigger('distancePrecising','ready');
				//console.log(arr_precise);
			}
		}	
			
   });
   
   
   

</script>
</body>
</html>