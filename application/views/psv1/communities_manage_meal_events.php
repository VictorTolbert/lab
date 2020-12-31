<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_ids								= array();
$in_active									= array();
$in_potential								= array();
$past_served_possible_count 	= 0;
$name = '<small></small>';

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
				<li class="active">Manage Meal Calendar Events</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage Meal Calendar Events - Step <?= $step;?></h1>
				
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>communities/manage_meal_events/<?php echo $community['id_community_encoded'];?>" method="post" id="form-communities-manage-meal-events">
					<?php switch($step){
						case 1:
					?>
					<fieldset>
						<legend>Date and times for the <?php echo $this->communities_model->get_community_name($community);?> Care Community</legend>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Set the first meal date</label>
								<div class="col-sm-4 col-xs-12">
									<div class="control-group">
										<div class="controls">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
													<input type="text"  data-placement="right" name="meal_date_start_human" id="communities-ajax-meals-to-calendar-date-start-human" class="form-control date pick-date " required="required" value="<?php echo  set_value('meal_date_start_human', $community['meal_date_start_human']);?>" data-usermod="false">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Set the last meal date</label>
								<div class="col-sm-4 col-xs-12">
									<div class="control-group">
										<div class="controls">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
													<input type="text"  data-placement="right" name="meal_date_end_human" id="communities-ajax-meals-to-calendar-date-start-human" class="form-control date pick-date" required="required" value="<?php echo set_value('meal_date_end_human', $community['meal_date_end_human']);?>" data-usermod="false">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Set the preferred meal time</label>
								<div class="col-sm-4 col-xs-12">
									<div class="control-group">
										<div class="controls">
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-clock-o"></i></span>
													<input type="text"  data-placement="right" name="meal_time_human" id="communities-ajax-meals-to-calendar-date-start-human" class="form-control time pick-time " required="required" value="<?php echo set_value('meal_time_human', '17:00');?>" data-usermod="false">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Verify the time zone</label>
								<div class="col-sm-4 col-xs-12">
									<?php echo $this->website_model->input_menu_time_zones('meal_time_zone', $this->website_model->get_default_php_timezone(), 'meal_time_zone', 'input-lg', array('view' => 'simple_us_only', 'required' => 1));?>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Verify the location</label>
								<div class="col-sm-4 col-xs-12">
										<input type="text" name="place_name" id="manage-meal-events-place-address" class="form-control input-lg modal-calendar-edit-element" value="<?php echo set_value('meal_place_name', $community['place_name'] != null ? $community['place_name'] : null);?>" placeholder="Optional - full name & address of location">
										<input type="hidden" class="manage-meal-events-geocode"  name="id_place" id="manage-meal-events-place-id-place" value="<?= $community['id_place'] != null ? $community['id_place'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_street_number" id="manage-meal-events-place-street-number" value="<?= $community['place_street_number'] != null ? $community['place_street_number'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_street" id="manage-meal-events-place-street" value="<?= $community['place_street'] != null ? $community['place_street'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_city" id="manage-meal-events-place-city" value="<?= $community['place_city'] != null ? $community['place_city'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_state" id="manage-meal-events-place-state" vvalue="<?= $community['place_state'] != null ? $community['place_state'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_zip" id="manage-meal-events-place-zip"value="<?= $community['place_zip'] != null ? $community['place_zip'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_county" id="manage-meal-events-place-county"  value="<?= $community['place_county'] != null ? $community['place_county'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_country" id="manage-meal-events-place-country"  value="<?= $community['place_country'] != null ? $community['place_country'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_lat" id="manage-meal-events-place-lat" value="<?= $community['place_lat'] != null ? $community['place_lat'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_lng" id="manage-meal-events-place-lng" value="<?= $community['place_lng'] != null ? $community['place_lng'] : null;?>">
										<input type="hidden" class="manage-meal-events-geocode"  name="place_id_provider" id="manage-meal-events-place-id-provider" value="<?= $community['place_id_provider'] != null ? $community['place_id_provider'] : null;?>">
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Verify Meal Slots</label>
								<div class="col-sm-12 col-md-4 col-xs-12">
									<table class="table table-responsive table-striped">
										<tbody>
											<?php
												$arr_already_shown = array();
												$i = 0;
												if(!empty($community['team_members'])){
													foreach($community['team_members'] AS $cur_vol){
														if(!in_array($cur_vol['id_people'], $arr_already_shown)){
															$arr_already_shown[]	= $cur_vol['id_people'];
															$cur_assign						= array('id_people' => $cur_vol['id_people'], 'meal_day' => null, 'meal_week' => null);
															if(!empty($cur_vol['assigned'])){
																foreach($cur_vol['assigned'] AS $vol_assign){
																	if($vol_assign['role_scope'] == 'community_volunteer' && $vol_assign['assignment_type'] == 'people_to_community' ){
																		$cur_assign['meal_day']			= $vol_assign['meal_day'];
																		$cur_assign['meal_week']		= $vol_assign['meal_week'];
																		$cur_assign['id_assignment']	= $vol_assign['id_assignment'];
																		
																	}
																}
															}
													?>
														<tr>
															<td>
																<?php echo $this->people_model->display_people_avatar($cur_vol);?>
																<input type="hidden" name="meal_assigns[<?= $i;?>][id_people]	" value="<?= $cur_vol['id_people'];?>">
																<input type="hidden" name="meal_assigns[<?= $i;?>][id_assignment]	" value="<?= $cur_assign['id_assignment'];?>">
															</td>
															<td>
																<?php echo $cur_vol['name_first'].' '.$this->website_model->display_format_people_name_last($cur_vol['name_last']);?>
															</td>
															<td>
																<?php echo $this->website_model->input_menu_weeks('meal_assigns['.$i.'][meal_week]', $cur_assign['meal_week'] , 'meal_week_'.$cur_assign['id_people'], 'input-md', $cur_assign);?>
															</td>
															<td>
																<?php echo $this->website_model->input_menu_days('meal_assigns['.$i.'][meal_day]', $cur_assign['meal_day'] , 'meal_day_'.$cur_assign['id_people'], 'input-md', $cur_assign);?>
															</td>
														</tr>
													<?php
														$i++;
														}
													}
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Food Preferences</label>
								<div class="col-sm-9 col-xs-12">
									<textarea class="form-control" cols="20" rows="8" placeholder="Food preferences for meals" name="community_food_preferences"><?php echo set_value('community_food_allergies', $community['community_food_preferences']);?></textarea>
									 <span class="text-danger"><?php echo form_error('community_food_preferences'); ?></span>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Food Allergies / Sensitivities</label>
								<div class="col-sm-9 col-xs-12">
									<textarea class="form-control" cols="20" rows="8"  placeholder="Foods to avoid when making meals" name="community_food_allergies"><?php echo set_value('community_food_allergies', $community['community_food_allergies']);?></textarea>
									<span class="text-danger"><?php echo form_error('community_food_allergies'); ?></span>
								</div>
							</div>
						</div>
						<div class="row top20">
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Next <i class="fa fa-chevron-right"></i></button>
							</div>
						</div>
						
					</fieldset>
					<?php break;
						case 2:?>
						<div class="row">
							<fieldset>
								<legend>Confirm meal schedule for the <?php echo $this->communities_model->get_community_name($community);?> Care Community</legend>
								<p>Below you will see a preview of the meal slots and assigned volunteers that will be added to the events calendar. These meals can be updated, edited or removed at any time from the calendar.</p>
								<div class="col-sm-10 col-sm-offset-1">
								<?php 
									$action ='Add to';
									if(!empty($meal_positions)){
										foreach($meal_positions as $cur){
											$selected_noadd			= '';
											$selected_add			= '';
											$arr_vols_cur			= array();
											$cur_vol_count			= 0;
											$cur_vol_none_display	= 'display: none;';
											$cur['id_community']	= $community['id_community'];
											
											if(empty($cur['meal_time_zone']) && !empty($meal_time_zone)){
												$cur['meal_time_zone'] = $meal_time_zone;
											}
											if(empty($cur['meal_time_start']) && !empty($meal_time_start)){
												$cur['meal_time_start'] = $meal_time_start;			
											}elseif(empty($cur['meal_time_start'])){
												$cur['meal_time_start'] = '5:00 PM';
											}
											if(empty($cur['id_place']) && !empty($meal_id_place)){
												$cur['id_place']		= $meal_id_place;
											}else{
												$cur['id_place']		= '';
											}
											
											
											
											echo '<div class="col-sm-6 col-md-4 well" style="min-height: 305px; height:auto;" id="meal-pos-wrapper-'.$cur['meal_position'].'">';
											echo '<input type="hidden" name="meal_position['.$cur['meal_position'].'][date]" value="'.$cur['date'].'">';
											echo '<input type="hidden" name="meal_position['.$cur['meal_position'].'][id_event]" value="'.$cur['id_event'].'">';
											echo '<input type="hidden" name="meal_position['.$cur['meal_position'].'][event_key]" value="'.$cur['event_key'].'">';
											echo '<input type="hidden" name="meal_position['.$cur['meal_position'].'][id_place]" value="'.$cur['id_place'].'">';
											echo '<div class="col-sm-4 col-xs-4 text-center">';
											echo $this->calendar_model->make_calendar_date_badge(array('date' =>$cur['date']));
											echo '</div>';
											echo '<div class="col-sm-8 col-xs-8"><h5>'.$cur['date_human'].'<br />';
											if(!empty($cur['numeric_week']) && !empty($cur['dotw'])){ 
												echo '<small> Meal '.$cur['meal_position'].' - '.ordinal($cur['numeric_week']).' '.$cur['dotw'].'</small>';
											}
											echo '</h5>';
												if(empty($cur['volunteers'])){
													$cur_vol_none_display = 'display: block;';
													$selected_noadd = "selected";
												}
												echo '<div id="meal-pos-novols-wrapper-'.$cur['meal_position'].'" style="'.$cur_vol_none_display.'"><div class="col-sm-3 col-xs-4 text-center" ><i class="fas fa-exclamation-circle fa-4x"></i></div><div class="col-sm-9 col-xs-8"><div class="top10"><strong>No volunteer assigned!</strong><br /><a href="#modaladdvol" data-toggle="modal" class="btn btn-default btn-meal-position-add-user" data-mp="'.$cur['meal_position'].'"><i class="fas fa-user-plus"></i> Add Volunteer</a></div></div></div>';
												echo '<div class="meal-pos-volunteers-wrapper" id="meal-pos-volunteers-wrapper-'.$cur['meal_position'].'">';
												if(!empty($cur['volunteers'])){
													foreach($cur['volunteers'] as $cur_vol){
														if(!in_array($cur_vol['id_people'], $arr_vols_cur)){
															if(empty($cur_vol['id_assign_event'])){
																$cur_vol['id_assign_event']	= null;
															}
															$arr_vols_cur[]	= $cur_vol['id_people'];
															echo '<div class="row top10 xs-top10" id="meal-pos-vol-wrapper-'.$cur['meal_position'].'-'.$cur_vol['id_people'].'"><div class="col-sm-3 col-xs-3">';
															echo $this->people_model->display_people_avatar($cur_vol);
															echo '</div>';
															echo '<div class="col-sm-7 col-xs-7"><div class="top10 xs-top10">'.$cur_vol['name_first'].' '.$this->website_model->display_format_people_name_last($cur_vol['name_last']).'</div></div>';
															echo '<div class="col-sm-2 col-xs-1 top10 xs-top10"><a href="#" class="btn-meal-position-remove-user" data-mp="'.$cur['meal_position'].'" data-p="'.$cur_vol['id_people'].'" data-a="'.$cur_vol['id_assign_event'].'"><i class="fas fa-user-minus"></i></a></div>';
															echo '<input type="hidden" id="meal-pos-vol-add-'.$cur['meal_position'].'-'.$cur_vol['id_people'].'" name="meal_position['.$cur['meal_position'].'][volunteers][]" value="'.$cur_vol['id_people'].'">';
															echo '<input type="hidden" id="meal-pos-vol-del-'.$cur['meal_position'].'-'.$cur_vol['id_people'].'" name="meal_position['.$cur['meal_position'].'][volunteers_remove][]" value="">';
															echo '<input type="hidden" id="meal-pos-assign-del-'.$cur['meal_position'].'-'.$cur_vol['id_people'].'" name="meal_position['.$cur['meal_position'].'][assigns_remove][]" value="">';
															
															echo '</div>';
															$cur_vol_count++;
														}
													}
												}
												echo '<input type="hidden" id="meal-pos-vol-count-'.$cur['meal_position'].'" value="'.$cur_vol_count.'">';
											echo '</div></div>';
											echo '<div class="row" >';
												echo '<div class="col-xs-12 col-sm-12 text-center top10 xs-top5"><a href="#modaladdvol" data-toggle="modal" class="btn-meal-position-add-user" data-mp="'.$cur['meal_position'].'"><i class="fas fa-user-plus"></i> Add Volunteer</a></div>';
												echo '<div class="col-sm-5 col-xs-6 top20 xs-top20">';
												echo'<div class="control-group"><div class="controls"><div class="input-prepend input-group"><span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-clock-o"></i></span>';
												echo '<input type="text" style="width: 100px" name="meal_position['.$cur['meal_position'].'][meal_time_start]" id="timepicker-start-'.$cur['meal_position'].'" class="form-control pick-time time" required="required"  value="'.simple_date_offset('g:i A', $cur['meal_time_start'], $cur['meal_time_zone']).'" data-position="'.$cur['meal_position'].'">';
												echo '</div></div></div>';
												echo '</div>';
												echo '<div class="col-sm-7 col-xs-6 top20 xs-top20">';
												
												echo '<select name="meal_position['.$cur['meal_position'].'][action]" class="form-control input-lg center-block cal-action" id="cal-action-'.$cur['meal_position'].'">';
												if(!empty($cur['id_event'])){
													echo '<option value="ignore">Leave unchanged</option>';
													echo '<option value="update">Update on calendar</option>';
													echo '<option value="remove">Remove from calendar</option>';
													$action ='Update';
												}else{
													echo '<option value="add" '.$selected_add.'>Add to calendar</option>';
													echo '<option value="ignore" '.$selected_noadd.'>Do not add to calendar</option>';
												}
												echo '</select>';
											echo '</div>';
											echo '</div>';
											echo '</div>';
										}
									}
								?>
								</div>
								<div class="row top20">
									<div class="col-sm-12 col-xs-12 text-center">
										<button type="submit" class="btn btn-primary"><?= $action;?> Calendar <i class="fa fa-chevron-right"></i></button>
									</div>
								</div>
									<input type="hidden" name="meal_date_start" id="meal_date_start" value="<?php echo $meal_date_start;?>">
									<input type="hidden" name="meal_date_end" id="meal_date_end" value="<?php echo $meal_date_end;?>">
									<input type="hidden" name="meal_time_start" id="meal_time_start" value="<?php echo $meal_time_start;?>">
									<input type="hidden" name="meal_id_place" id="meal_id_place" value="<?php echo $meal_id_place;?>">
									<input type="hidden" name="meal_time_zone" id="meal_time_zone" value="<?php echo $meal_time_zone;?>">
									
						</div>
				<?php break;
							case 3:?>
						<div class="row">
							<fieldset>
								<legend>Completed</legend>
								<p>Your calendar events were succesfully added or updated on the calendar!</p>
								<div class="col-sm-10 col-sm-offset-1">
									
								</div>
							</fieldset>
							<div class="row top20">
								<div class="text-center">
									<a href="<?php echo base_url();?>calendar"  class="btn btn-primary">View Full Calendar</a>
								</div>
							</div>
						</div>
					
					<?php break;
					}//End switch?>
					
					<input type="hidden" name="step" id="step" value="<?php echo $step;?>">
					<input type="hidden" name="id_community_encoded" id="id_community_encoded" value="<?php echo $community['id_community_encoded'];?>">
					<input type="hidden" name="id_church" id="id_church" value="<?php echo $this->communities_model->get_serving_church_id_from_community_id($community);?>">
				</form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<div class="modal fade" id="modaladdvol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-header" >
					<div class="col-xs-11 col-sm-11">
						<span id="modal-addvol-header">Which volunteer would you like to add?</span>
					</div>
					<div class="col-xs-1 col-sm-1">
						<span class="text-center"><a href="#" data-dismiss="modal">X</a></span>
					</div>
				</div>
				<div class="modal-body" id="modal-addvol-body">
					<div class="col-sm-12 col-12-4 col-xs-12">
						<table class="table table-responsive table-striped">
							<tbody>
								<?php 
									$arr_already_shown = array();
									$i = 0;
									if(!empty($community['team_members'])){
										foreach($community['team_members'] AS $cur_vol){
											if(!in_array($cur_vol['id_people'], $arr_already_shown)){
												$arr_already_shown[]	= $cur_vol['id_people'];
								?>
								<tr>
									<td>
										<?php echo $this->people_model->display_people_avatar($cur_vol);?>
									</td>
									<td>
										<div class="top10 xs-top5"><?php echo $cur_vol['name_first'].' '.$this->website_model->display_format_people_name_last($cur_vol['name_last']);?></div>
										
									</td>
									<td width="10%">
										<a class="btn btn-default btn-block modal-addvol-btn-add-user text-left" data-dismiss="modal" data-p="<?php echo $cur_vol['id_people'];?>" style="text-align: left"><i class="fas fa-user-plus"></i> Add <?php echo $cur_vol['name_first'];?></a></a>
									</td>
								</tr>
							<?php
								$i++;
								}
							}
						}
					?>
				</tbody>
			</table>
				</div>
				<div class="modal-footer xs-top10">
					<button type="button" class="btn btn-default btn-modal-close center-block" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="<?php echo base_url();?>css/csshake-little.css">
<script>
	var cur_meal_position = null;
	$(document).ready(function() {
		$('.pick-time').on('change keyup paste dp.change', function(e){
			var pos = $(this).data('position');
			$('#cal-action-'+pos+' option[value=update]').attr('selected', true).trigger('change');
		});
		
		ps_manage_meals_instantiate_vol_buttons();
		
		
		$('.modal-addvol-btn-add-user').click(function(){
			var id_p			= $(this).data('p');
			var id_meal_pos		= cur_meal_position;
			var ps_vol_row		= ps_manage_meal_make_volunteer_meal_pos_row(id_p, id_meal_pos);
			
			//$('.row').removeClass('shake-little-short');
		});
		
		ps_manage_meals_match_boxes();
		
	});
	
	function ps_manage_meals_check_vol_count_display(id_meal_pos){
		if(ps_manage_meals_count_vol_rows(id_meal_pos) < 1){
			if($('#meal-pos-novols-wrapper-'+id_meal_pos).is(':hidden')){
				$('#meal-pos-novols-wrapper-'+id_meal_pos).show(400);
			}
		}else{
			if($('#meal-pos-novols-wrapper-'+id_meal_pos).is(':visible')){
				$('#meal-pos-novols-wrapper-'+id_meal_pos).hide(400);
			}
		}
		return;
	}
	
	function ps_manage_meal_make_volunteer_meal_pos_row(id_p, id_meal_pos){
		if($('#meal-pos-vol-wrapper-'+id_meal_pos+'-'+id_p).is(':visible')){
			//$('#meal-pos-vol-wrapper-'+id_meal_pos+'-'+id_p).effect( "shake", { direction: "up", times: 4, distance: 10}, 1000 );
			 $('#meal-pos-vol-wrapper-'+id_meal_pos+'-'+id_p).addClass('shake-little-short');
		}else{
			$.ajax({
				type: "POST",
				url:  getBaseUrl()+'communities/ajax_make_manage_meals_volunteer_meal_position_row?p='+id_p+'&mp='+id_meal_pos,
				error: function (request, status, error) {
					var result = JSON.parse(ajaxdata);
					if(!!(result.msg_human)){
						if(result.msg_human.length > 0){
							$('.ajax-error-response').html(result.msg_human);
						}
					}
				},
				success: function(ajaxdata) {
					var result = JSON.parse(ajaxdata);
					
					if(result.st == 1){
						
						$('#meal-pos-volunteers-wrapper-'+id_meal_pos).append(result.html);
						$(document).ready(function() {
							ps_manage_meals_instantiate_vol_buttons();
							ps_manage_meals_check_vol_count_display(id_meal_pos);
							ps_manage_meals_match_boxes();
							if($('#cal-action-'+id_meal_pos+' option[value="update"]').length > 0){
								$('#cal-action-'+id_meal_pos).val('update');
							}
							if($('#cal-action-'+id_meal_pos+' option[value="add"]').length > 0){
								$('#cal-action-'+id_meal_pos).val('add');
							}
						});
						return result.html;
					}
				}
			});
		}
		
		return null;
	}
	
	function ps_manage_meals_instantiate_vol_buttons(){
		$('.btn-meal-position-add-user').click(function(){
			var id_meal_pos			= $(this).data('mp');
			cur_meal_position		= id_meal_pos;
			
		});
		
		$('.btn-meal-position-remove-user').click(function(e){
			e.preventDefault();
			var id_meal_pos		= $(this).data('mp');
			var id_p			= $(this).data('p');
			var id_a			= $(this).data('a');
			$('#meal-pos-vol-del-'+id_meal_pos+'-'+id_p).val(id_p);
			$('#meal-pos-vol-add-'+id_meal_pos+'-'+id_p).val('');
			$('#meal-pos-assign-del-'+id_meal_pos+'-'+id_p).val(id_a);
			$('#meal-pos-vol-wrapper-'+id_meal_pos+'-'+id_p).hide(200, function(){ 
				$('#meal-pos-vol-wrapper-'+id_meal_pos+'-'+id_p).remove();
				ps_manage_meals_check_vol_count_display(id_meal_pos);
				$.fn.matchHeight._update();
			});
			
			if($('#cal-action-'+id_meal_pos+' option[value="update"]').length > 0){
				$('#cal-action-'+id_meal_pos).val('update');
			}
			if($('#cal-action-'+id_meal_pos+' option[value="add"]').length > 0){
				$('#cal-action-'+id_meal_pos).val('add');
			}
			
		}); 
	}
	
	function ps_manage_meals_count_vol_rows(id_meal_pos){
		var count_vols = 0;
	
		$('#meal-pos-volunteers-wrapper-'+id_meal_pos+' .row').each(function(){
			if($(this).is(':visible')){
				count_vols++;
			}
			
		});
		
		return count_vols;
	}
	
	function ps_manage_meals_match_boxes(){
		$('.meal-pos-volunteers-wrapper').matchHeight();
	}
</script>

<style>
.btn-meal-position-remove-user{
	color: #aaa;	
}


</body>
</html>