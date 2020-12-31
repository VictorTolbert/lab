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
$display_step				= $step;
if(empty($display_step)){
	$display_step		= 1;
}

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
					<a href="<?php echo base_url();?>churches/list">
						Churches
					</a>
				</li>
				<li class="active">Add Church</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> <i class="fas fa-church"></i> Add Church - Step <?= $display_step;?></h1>
				
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				
					<?php switch($step){
						case 0:
					?>
					<form class="form-horizontal form-label-left" action="<?php echo base_url();?>churches/add_church" method="post" id="form-churches-add">
						<fieldset>
							<legend>Lookup Church</legend>
							<p>Please help us locate the church you want to add by searching for it below.</p>
							<div class="row top20">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Search for church by name, city, and state</label>
									<div class="col-sm-4 col-xs-12">
										<div class="control-group">
											<div class="controls">
												<div class="input-prepend input-group">
													<span class="add-on input-group-addon"><i class="glyphicon glyphicon-map-marker fas fa-map-marker-alt"></i></span>
														<input type="text" id="place_address" name="place_address" class="form-control input-md input-select-on-focus" placeholder="Search for church by name and address" value="<?= set_value('place_address', $search);?>">
														<input type="hidden" name="place_street_number" id="place_street_number" value="<?= set_value('place_street_number', !empty($item['place_street_number'])? $item['place_street_number'] : null);?>">
														<input type="hidden" name="place_street" id="place_street" value="<?= set_value('place_street', !empty($item['place_street'])? $item['place_street'] : null);?>">
														<input type="hidden" name="place_city" id="place_city" value="<?= set_value('place_city', !empty($item['place_city'])? $item['place_city'] : null);?>">
														<input type="hidden" name="place_state" id="place_state" value="<?= set_value('place_state', !empty($item['place_state'])? $item['place_state'] : null);?>">
														<input type="hidden" name="place_zip" id="place_zip" value="<?= set_value('place_zip', !empty($item['place_zip'])? $item['place_zip'] : null);?>">
														<input type="hidden" name="place_county" id="place_county" value="<?= set_value('place_county', !empty($item['place_county'])? $item['place_county'] : null);?>">
														<input type="hidden" name="place_country" id="place_country" value="<?= set_value('place_country', !empty($item['place_country'])? $item['place_country'] : null);?>">
														<input type="hidden" name="place_lat" id="place_lat" value="<?= set_value('place_lat', !empty($item['place_lat'])? $item['place_lat'] : null);?>">
														<input type="hidden" name="place_lng" id="place_lng" value="<?= set_value('place_lng', !empty($item['place_lng'])? $item['place_lng'] : null);?>">
														<input type="hidden" name="place_id_provider" id="place_id_provider" value="<?= set_value('place_id_provider', !empty($item['place_id_provider'])? $item['place_id_provider'] : null);?>">
														<input type="hidden" name="place_global_code" id="place_global_code" value="<?= set_value('place_global_code', !empty($item['place_global_code'])? $item['place_global_code'] : null);?>">
														<input type="hidden" name="place_name" id="place_name" value="<?= set_value('place_name', !empty($item['place_name'])? $item['place_name'] : null);?>">
														<span  id="error-place_address"  class="text-danger align-center text-center"><?php echo form_error('place_address'); ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row top20">
								<div class="text-center">
									<button type="submit" class="btn btn-submit btn-primary">Next <i class="fas fa-chevron-right"></i></button>
									<input type="hidden" name="step" id="step" value="<?php echo $step;?>">
								</div>
							</div>
						</fieldset>
					</form>
				<?php 	
						break;
						case 1:
				?>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2 ">
								<fieldset>
									<legend>Confirm Church</legend>
									<p><strong>This is VERY IMPORTANT! We found a potential church match already in the system.</strong></p>
									<p>Adding a duplicate church will cause numerous problems for you and lots of confusion for your volunteers. Please do not add this church unless you are confident that this is not a duplicate church.</p>
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2 well">
											<p class="text-center">
												<strong><?php echo $this->churches_model->get_church_name($church);?></strong><br />
												<?php echo $this->churches_model->get_compiled_church_address($church);?><br />
												<?php echo $church['church_contact_name'];?><br />
												<?php echo format_phone($church['phone']);?>
											</p>
											<p class="text-center"><em>If this church matches the church you are attempting to add then please edit the church information by clicking the 'No' button</em>.</p>
										</div>
									</div>
									<div class="row top20">
										<p class="text-center">Are you sure you want to add this potentially duplicate church?</p>
									</div>
									<div class="row">
										<div class="col-sm-5 col-xs-12 text-center col-sm-offset-1">
											<a href="<?php echo base_url();?>churches/add_church?step=2&c=0" type="submit" class="btn btn-danger btn-lg btn-block">Yes, I want to add this church</a>
										</div>
										<div class="col-sm-5 col-xs-12 text-center">
											<a href="<?php echo base_url();?>churches/edit/<?php echo url_enc($church['id_church']);?>" class="btn btn-primary btn-lg btn-block">No, I want to edit the existing church instead</a>
										</div>
									</div>	
								</fieldset>
							</div>
						</div>
				<?php 	
						break;
						case 2:
				?>
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>churches/save" method="post">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
						<fieldset>
							<legend>Basic Info</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Name</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="church_name" id="church_name" value="<?php echo set_value('church_name', $item['church_name']);?>" placeholder="Church name" required="required">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Nick Name</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="church_nick" id="church_nick" value="<?php echo set_value('church_nick', $item['church_nick']);?>" placeholder="Optional Short Name of church">
									</div>
								</div>	
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Campus Name</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="campus_name" id="campus_name" value="<?php echo set_value('campus_name', $item['campus_name']);?>" placeholder="Campus name (if applicable)">
								</div>
							</div>
							<?php if($this->security_model->user_has_access(95)){?>							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_affiliates('id_affiliate', set_value('id_affiliate', $item['assign_id_affiliate']), 'id_affiliate', 'input-lg', array('view' => 'edit_affiliates', 'required' =>1));?>
								</div>
							</div>
						<?php }?>
						<?php 					
						
						if(!empty($_SESSION['affiliate']['enable_regions']) && $this->security_model->user_has_access(80) && isset($region)){?>							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Region</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_regions('id_region', set_value('id_region', $region['id_region']), 'id_region', 'input-lg', array('view' => 'edit_regions', 'required' =>1, 'show_manager' => 1));?>
								</div>
							</div>
						<?php }?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo $this->website_model->input_menu_statuses('church_state', set_value('church_state', $item['church_state']), 'church_state', 'input-lg', array('view' => 'edit_churches', 'required' =>1));?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Street Address</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_street_1" id="address_street_1" value="<?php echo set_value('address_street_1', $item['address_street_1']);?>" placeholder="Street address">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Suite or Unit</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_street_2" id="address_street_2" value="<?php echo set_value('address_street_2', $item['address_street_2']);?>" placeholder="Suite or unit">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_city" id="address_city" value="<?php echo set_value('address_city', $item['address_city']);?>" placeholder="City">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">State</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_state" id="address_state" value="<?php echo set_value('address_state', $item['address_state']);?>" placeholder="State" required="required">
									<input type="hidden" name="address_state_abbrev" id="address_state_abbrev" value="<?php echo $item['address_state'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Zip</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="address_zip" id="address_zip" value="<?php echo set_value('address_zip', $item['address_zip']);?>" placeholder="Zipcode">
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Church Contact <small>(not necessarily the advocate)</small></legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Name</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="church_contact_name" id="church_contact_name" value="<?php echo set_value('church_contact_name', $item['church_contact_name']);?>" placeholder="Contact Name">
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>FAM Info</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Care Community Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_ltp" class="btn-switch" value="1" <?php if(!empty($item['church_type_ltp'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_ltp_prev" value="<?php echo $item['church_type_ltp'];?>">
									<span class="text-danger"><?php echo form_error('disable_volunteer_sharing'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Resource Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_resource" class="btn-switch" value="1" <?php if(!empty($item['church_type_resource'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_resource_prev" value="<?php echo $item['church_type_resource'];?>">
									<span class="text-danger"><?php echo form_error('church_type_resource'); ?></span>
								</div>
							</div>
							<?php if(!empty($_SESSION['affiliate']['allow_interest_care_portal'])){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Care Portal Church</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_type_careportal" class="btn-switch" value="1" <?php if(!empty($item['church_type_careportal'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_type_careportal_prev" value="<?php echo $item['church_type_careportal'];?>">
									<span class="text-danger"><?php echo form_error('church_type_careportal'); ?></span>
								</div>
							</div>
							<?php }?>
						</fieldset>
						<fieldset>
							<legend>Advanced Options</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Disable Volunteer Sharing</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="disable_volunteer_sharing" class="btn-switch" value="1" <?php if(!empty($item['disable_volunteer_sharing'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="disable_volunteer_sharing_prev" value="<?php echo $item['disable_volunteer_sharing'];?>">
									<span class="text-danger"><?php echo form_error('disable_volunteer_sharing'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Requires Volunteer Training</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_requires_training" class="btn-switch" value="1" <?php if(!empty($item['church_requires_training'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_requires_training_prev" value="<?php echo $item['church_requires_training'];?>">
									<span class="text-danger"><?php echo form_error('church_requires_training'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Church is MAP Eligible?</label>
								<div class="col-md-3 col-sm-3 col-xs-12">
									<input type="checkbox" name="church_map_eligible" class="btn-switch" value="1" <?php if(!empty($item['church_map_eligible'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="church_map_eligible_prev" value="<?php echo $item['church_map_eligible'];?>">
									<span class="text-danger"><?php echo form_error('church_map_eligible'); ?></span>
								</div>
							</div>
						</fieldset>
						<input type="hidden" name="id_church_encoded" value="<?php echo $item['id_church_encoded'];?>">
						<input type="hidden" name="step" id="step" value="<?php echo $step;?>">
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-12 col-xs-12 top30 text-center">
						<button type="submit" class="btn btn-success btn-lg" name="save" value="1">Next <i class="fas fa-chevron-right"></i></button>
					</div>
				</form>
				<?php
						break;
						case 3:
				?>
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
					
				<?php 
					break;
				}//End switch
				?>
					
					

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

<script>
	var cur_meal_position = null;
		
	function ps_gmap_autocomplete_init() {
		var input = document.getElementById('place_address');
		var autocomplete = new google.maps.places.Autocomplete(input);
		google.maps.event.addListener(autocomplete, 'place_changed', function () {
			var place = autocomplete.getPlace();		
			ps_parse_gmap_place_values(place);
			
		});
		<?php if(!empty($search)){ echo "google.maps.event.trigger(autocomplete, 'place_changed');";}?>
	}

	google.maps.event.addDomListener(window, 'load', ps_gmap_autocomplete_init);
	

	$(document).ready(function() {
		$(".btn-switch").bootstrapSwitch();
	});
</script>

<style>
.btn-meal-position-remove-user{
	color: #aaa;	
}


</body>
</html>