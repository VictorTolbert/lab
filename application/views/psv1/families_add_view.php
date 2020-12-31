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
					<a href="<?php echo base_url();?>families/list">
						Familes
					</a>
				</li>
				<li class="active">Add Family</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><i class="fas fa-house-user"></i> Add Family - Step <?= $display_step;?></h1>
				
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				
					<?php switch($step){
						case 0:
					?>
					<form class="form-horizontal form-label-left" action="<?php echo base_url();?>families/add_family" method="post" id="form-families-add">
						<fieldset>
							<legend>Lookup Family</legend>
							<p>Please enter the last name, state, and zipcode of the family you would like to add.</p>
							<div class="row top20">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Last Name</label>
									<div class="col-sm-4 col-xs-12">
										<input type="text" id="family_search" name="search_name_last" class="form-control input-md input-select-on-focus" placeholder="e.g. Smith" value="<?= set_value('search_name_last', $search_name_last);?>" required>
										<span  id="error-place_address"  class="text-danger align-center text-center"><?php echo form_error('place_address'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family State</label>
									<div class="col-sm-4 col-xs-12">
										<input type="text" id="search_address_state" name="search_address_state" class="form-control input-md input-select-on-focus" placeholder="e.g. GA" value="<?= set_value('search_address_state', $search_address_state);?>" required >
										<span  id="error-place_address"  class="text-danger align-center text-center"><?php echo form_error('search_address_state'); ?></span>
												
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Zipcode</label>
									<div class="col-sm-4 col-xs-12">
										
										<input type="text" id="search_address_zip" name="search_address_zip" class="form-control input-md input-select-on-focus" placeholder="e.g. 30017" value="<?= set_value('search_address_zip', $search_address_zip);?>">
										<span  id="error-place_address"  class="text-danger align-center text-center"><?php echo form_error('search_address_zip'); ?></span>

									</div>
								</div>
							</div>
							<div class="row top20">
								<div class="text-center">
									<button type="submit" class="btn btn-submit btn-primary btn-lg">Next <i class="fas fa-chevron-right"></i></button>
									<input type="hidden" name="step" id="step" value="0">
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
									<legend>Confirm Family</legend>
									<p><strong>This is VERY IMPORTANT! We found at least one potential family match already in the system.</strong></p>
									<p>Adding a duplicate family will cause numerous problems for you and lots of confusion for your volunteers. Please do not add this family unless you are confident that this is not a duplicate family.</p>
									<?php 
										if(!empty($matches)){
											
											foreach($matches as $cur){
									?>
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2 well">
											<p class="text-center">
												<strong><?php echo $this->families_model->get_family_first_name_initial($cur).' '.$this->families_model->get_family_last_name($cur);?></strong><br />
												<?php 
													if(!empty($cur['matched_state']) && !empty($cur['matched_zip'])){ 
														echo $cur['matched_state'].', '.$cur['matched_zip']; 
													}elseif(!empty($cur['matched_state'])){ 
														echo $cur['matched_state']; 
													}elseif(!empty($cur['matched_zip'])){
														echo $cur['matched_zip'];
													}
												?>
											</p>
											<p class="text-center"><em>If this family matches the family you are attempting to add then click the button below</em>.</p>
											<div class="col-sm-6 col-xs-12 text-center col-sm-offset-3"><a href="<?php echo base_url();?>families/add_family?step=4&f=<?php echo url_enc($cur['id_family']);?>" class="btn btn-secondary btn-lg btn-block">Use this Family</a></div>
										</div>
									</div>
									<?php 
											}
										}	
									?>
									<div class="row top20">
										<p class="text-center">If this family does not match one listed above then you can add the family by using the button below.</p>
										<p class="text-center">Are you sure you want to add this potentially duplicate family?</p>
									</div>
									<div class="row">
										<div class="col-sm-6 col-xs-12 text-center col-sm-offset-3">
											<a href="<?php echo base_url();?>families/add_family?step=2&f=0" type="submit" class="btn btn-secondary btn-lg btn-block">Yes, I want to add this family</a>
										</div>
									</div>	
								</fieldset>
							</div>
						</div>
					<?php
						break;
						case 2:
					?>
					<form class="form-horizontal form-label-left" action="<?php echo base_url();?>families/add_family" method="post" id="form-families-add">
						<fieldset>
							<legend>Family Info</legend>
							<div class="row top20">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Type</label>
									<div class="col-md-4 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('family_type', set_value('family_type', $item['family_type']), 'family_type', 'form-control input-lg', array('view' => 'edit_foster_family_home_type', 'required' => 1));?>
									</div>
								</div>
							</div>
							<div class="row top20">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Structure</label>
									<div class="col-md-4 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('family_structure', set_value('family_structure'), 'family_structure', 'form-control input-lg', array('view' => 'edit_family_structure', 'required' => 1));?>
									</div>
								</div>
							</div>
							<div class="row top20">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Status</label>
									<div class="col-md-4 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('family_state', set_value('family_state'), 'family_state', 'form-control input-lg', array('view' => 'edit_family', 'required' => 1, 'bypass_values' => array(46))); ?>
									</div>
								</div>
							</div>
							<div class="row top20">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Family address</label>
									<div class="col-sm-4 col-xs-12">
										<div class="control-group">
											<div class="controls">
												<div class="input-prepend input-group">
													<span class="add-on input-group-addon"><i class="glyphicon glyphicon-map-marker fas fa-map-marker-alt"></i></span>
														<input type="text" id="place_address" name="place_address" class="form-control input-md input-select-on-focus" placeholder="e.g. 123 Anystreet" value="<?= set_value('place_address', $item['place_address']);?>">
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
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent / Caretaker Name</label>
									<div class="col-md-2 col-sm-4 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('parent0_id_role', set_value('parent0_id_role'), 'modal-edit-person-id-role-parent-0', 'form-control input-lg', array('view' => 'edit_family_member_caregiver_roles'));?>
									</div>
									<div class="col-md-2 col-sm-4 col-xs-12">
										<input type="text" class="form-control input-lg" name="name_parent0_first" id="name_parent0_first" required placeholder="First Name" value="<?php echo set_value('name_parent0_first');?>">
									</div>
									<div class="col-md-2 col-sm-4 col-xs-12">
										<input type="text" class="form-control input-lg" name="name_parent0_last" id="name_parent0_last" required placeholder="Last Name" value="<?php echo set_value('name_parent0_last');?>">
									</div>
								</div>
							</div>
							<div class="row top20">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Parent / Caretaker Name <br /><small>Optional</small></label>
									<div class="col-md-2 col-sm-4 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('parent1_id_role', set_value('parent1_id_role'), 'modal-edit-person-id-role-parent-1', 'form-control input-lg', array('view' => 'edit_family_member_caregiver_roles'));?>
									</div>
									<div class="col-md-2 col-sm-4 col-xs-12">
										<input type="text" class="form-control input-lg" name="name_parent1_first" id="name_parent1_first"  placeholder="First Name" value="<?php echo set_value('name_parent1_first');?>">
									</div>
									<div class="col-md-2 col-sm-4 col-xs-12">
										<input type="text" class="form-control input-lg" name="name_parent1_last" id="name_parent1_last"  placeholder="Last Name" value="<?php echo set_value('name_parent1_last');?>">
									</div>
								</div>
							</div>
							
							<div class="row top20">
								<div class="text-center">
									<button type="submit" class="btn btn-submit btn-primary btn-lg">Next <i class="fas fa-chevron-right"></i></button>
									<input type="hidden" name="step" id="step" value="<?php echo $step;?>">
								</div>
							</div>
						</fieldset>
					</form>					
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