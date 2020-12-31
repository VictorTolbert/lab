<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['event_name'])){
		$name	.= ' '.$item['event_name'];
}
if(empty($item['id_event'])){
	$name .= ' New Event';
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
					<a href="<?php echo base_url();?>events/list">
						Events
					</a>
				</li>
				<li class="active"><?php echo $action.' Event';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Event<?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>events/save" method="post">
				<div class="col-sm-3 col-xs-12" >
					<ul class="nav nav-pills nav-stacked hidden-xs ps-nav-pills" data-spy="affix">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active ">Basic Info</a>
						</li>
						<li>
							<a href="#rsvp" data-toggle="pill">RSVP Options</a>
						</li>
						<li>
							<a href="#response" data-toggle="pill">Response Card</a>
						</li>
						<li>
							<a href="#virtual" data-toggle="pill">Virtual Event</a>
						</li>
						<li>
							<a href="#advanced" data-toggle="pill">Advanced Options</a>
						</li>
						<?php if( !empty($item['id_event'])){?>
							<li>
								<a href="#details" data-toggle="pill">Event Details</a>
							</li>
						<?php }?>
					</ul>
					<ul class="nav nav-pills visible-xs hidden-sm hidden-md hidden-lg ps-nav-pills">
						<li class="active">
							<a href="#basic" data-toggle="pill" class="active ">Basic Info</a>
						</li>
						<li>
							<a href="#rsvp" data-toggle="pill">RSVP Options</a>
						</li>
						<li>
							<a href="#response" data-toggle="pill">Response Card</a>
						</li>
						<li>
							<a href="#virtual" data-toggle="pill">Virtual Options</a>
						</li>
						<li>
							<a href="#advanced" data-toggle="pill">Advanced Options</a>
						</li>
						<?php if( !empty($item['id_event'])){?>
							<li>
								<a href="#details" data-toggle="pill">Event Details</a>
							</li>
						<?php }?>
					</ul>
				</div>
				<div class="col-sm-9 col-xs-12">
					<div class="tab-pane fade active in" id="basic">
						<fieldset class="top20 xs-top20">
							<legend>Event Info</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Name</label>
									<div class="col-md-6 col-sm-4 col-xs-12">
										<input type="text" class="form-control" name="event_name" id="event_name" value="<?php echo set_value('event_name', $item['event_name']);?>" placeholder="Event name (e.g. Spring 2018 Awareness Event)" required="true">
										<span class="text-danger"><?php echo form_error('event_name'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Type</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('event_type', set_value('event_type', $item['event_type']), 'event_type', 'input-lg', array('view' => 'edit_event_type', 'required' => 1, 'debug' => 0));?>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Format</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select name="is_virtual" class="input-lg">
											<option value="">In Person</option>
											<option value="1" <?php if(!empty($item['is_virtual'])){ echo "Selected";}?>>Virtual</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_statuses('event_state', set_value('event_state', $item['event_state']), 'event_state', 'input-lg', array('view' => 'edit_event', 'required' => 1));?>
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
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Contact</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										
										<?php echo $this->website_model->input_tagger('id_event_contact', '', 'id_event_contact', 'form-control ', array('data' => array('role-limit' => '', 'limit-id' => '', 'required' => 1), 'placeholder' => ''));?>
								<input type="hidden" class="modal-add-need-edit-element" name="id_event_contact_prev" id="id_event_contact_prev" value="<?php echo $item['id_event_contact']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Church Hosting Event</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_churches('id_church', set_value('id_church', $item['id_event_church']), 'id_church', 'input-lg', array('view' => 'select_church', 'force_selector' => 1));?>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Timezone</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php echo $this->website_model->input_menu_time_zones('event_time_zone', set_value('event_time_zone', $item['event_time_zone']), 'event_time_zone', 'input-lg', array('view' => 'simple_us_only', 'required' => 1));?>
										<span class="text-danger"><?php echo form_error('event_location_name'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Start Date / Time</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="col-sm-4 col-xs-6">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
														<input type="text" style="width: 100px" data-placement="right" name="event_date_start_human" id="datepicker-start" class="form-control date pick-date" required="required" value="<?php echo set_value('event_date_start_human', $item['event_date_start_human']); ?>">
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-xs-6">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-clock-o"></i></span>
														<input type="text" style="width: 100px" name="event_time_start_human" id="timepicker-start" class="form-control pick-time time" required="required"  value="<?php echo set_value('event_time_start_human', $item['event_time_start_human']); ?>">
													</div>
												</div>
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('event_date_only'); ?> <?php echo form_error('event_time_only'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event End Date / Time</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="col-sm-4 col-xs-6">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
														<input type="text" style="width: 100px" data-placement="right" name="event_date_end_human" id="datepicker-end" class="form-control date pick-date" required="required" value="<?php echo set_value('event_date_end_human', $item['event_date_end_human']); ?>">
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-xs-6">
											<div class="control-group">
												<div class="controls">
													<div class="input-prepend input-group">
														<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-clock-o"></i></span>
														<input type="text" style="width: 100px" name="event_time_end_human" id="timepicker-end" class="form-control pick-time time" required="required"  value="<?php echo set_value('event_time_end_human', $item['event_time_end_human']); ?>">
													</div>
												</div>
											</div>
										</div>
										<span class="text-danger"><?php echo form_error('event_date_only'); ?> <?php echo form_error('event_time_only'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Location</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<?php $item['use_proper_address'] = 1;?>
										<input type="text" id="place_address" name="place_address" class="form-control input-md input-select-on-focus" placeholder="Enter location name or address to search" value="<?= set_value('address_full', $item['place_street_number'] != null ? $this->website_model->get_full_address($item) : null);?>">
										<input type="hidden" name="place_street_number" id="place_street_number" value="<?= set_value('place_street_number', $item['place_street_number'] != null ? $item['place_street_number'] : null);?>">
										<input type="hidden" name="place_street" id="place_street" value="<?= set_value('place_street', $item['place_street'] != null ? $item['place_street'] : null);?>">
										<input type="hidden" name="address_city" id="place_city" value="<?= set_value('place_city', $item['place_city'] != null ? $item['place_city'] : null);?>">
										<input type="hidden" name="place_county" id="place_county" value="<?= set_value('place_county', $item['place_county'] != null ? $item['place_county'] : null);?>">
										<input type="hidden" name="place_country" id="place_country" value="<?= set_value('place_country', $item['place_country'] != null ? $item['place_country'] : null);?>">
										<input type="hidden" name="place_state" id="place_state" value="<?= set_value('place_state', $item['place_state'] != null ? $item['place_state'] : null);?>">
										<input type="hidden" name="place_zip" id="place_zip" value="<?= set_value('place_zip', $item['place_zip'] != null ? $item['place_zip'] : null);?>">
										<input type="hidden" name="place_lat" id="place_lat" value="<?= set_value('place_lat', $item['place_lat'] != null ? $item['place_lat'] : null);?>">
										<input type="hidden" name="place_lng" id="place_lng" value="<?= set_value('place_lng', $item['place_lng'] != null ? $item['place_lng'] : null);?>">
										<input type="hidden" name="place_id_provider" id="place_id_provider" value="<?= set_value('place_id_provider', $item['place_id_provider'] != null ? $item['place_id_provider'] : null);?>">
									</div>
								</div>
								<?php if( 1==2){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Location</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="event_location_name" id="event_location_name" required="required" value="<?php echo set_value('event_location_name', $item['event_location_name']);?>" placeholder="Where will the event take place?">
										<span class="text-danger"><?php echo form_error('event_location_name'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Address</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="event_address_street" id="event_address_street" required="required" value="<?php echo set_value('event_address_street', $item['event_address_street']);?>" placeholder="Event Location's Street Address">
										<span class="text-danger"><?php echo form_error('event_location_name'); ?></span>
									</div>
								</div>							
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event City</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="event_address_city" id="event_address_city" required="required"  value="<?php echo set_value('event_address_city', $item['event_address_city']);?>" placeholder="Event Location's City">
										<span class="text-danger"><?php echo form_error('event_location_name'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event State</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="event_address_state" id="event_address_state" required="required"  value="<?php echo set_value('event_address_state', $item['event_address_state']);?>" placeholder="Event State Abbreviation (e.g. GA)">
										<span class="text-danger"><?php echo form_error('event_address_state'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Zipcode</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="event_address_zip" id="event_address_zip" required="required"  value="<?php echo set_value('event_address_zip', $item['event_address_zip']);?>" placeholder="Event Location Zipcode">
										<span class="text-danger"><?php echo form_error('event_address_zip'); ?></span>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Event Description</label>
									<div class="col-md-9 col-sm-9 col-xs-12"><textarea name="event_desc" id="event_desc" class="form-control" rows="5" placeholder="Enter specifics abput the event. (e.g. room location in building, parking information, childcare location, etc)"><?php echo set_value('event_desc', $item['event_desc']);?></textarea>
										<span class="text-danger"><?php echo form_error('event_desc'); ?></span>
									</div>
								</div>
								<?php }?>
						</fieldset>
					</div>
					<div class="tab-pane fade hide" id="rsvp">
						<fieldset class="top20 xs-top20">
							<legend>RSVP Options</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Maximum Attendees</label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input type="text" class="form-control" name="event_max_size" id="event_max_size" value="<?php echo set_value('event_max_size', $item['event_max_size']);?>" placeholder="Maximum number of attendees">
									<span class="text-danger"><?php echo form_error('event_max_size'); ?></span>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Childcare Provided?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="has_childcare" class="btn-switch" value="1" <?php if(!empty($item['has_childcare'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="has_childcare_prev"  value="<?php echo $item['has_childcare'];?>">
									<span class="text-danger"><?php echo form_error('has_childcare'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Childcare Fee</label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input type="text" class="form-control" name="childcare_fee" id="childcare_fee" value="<?php echo set_value('childcare_fee', $item['childcare_fee']);?>" placeholder="e.g. $2 per child or Free">
									<span class="text-danger"><?php echo form_error('childcare_fee'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ask for home address?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="rsvp_show_address" class="btn-switch" value="1" <?php if(!empty($item['rsvp_show_address'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="rsvp_show_address_prev"  value="<?php echo $item['rsvp_show_address'];?>">
									<span class="text-danger"><?php echo form_error('rsvp_show_address'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ask for guest (adult) count?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="show_count_adults" class="btn-switch" value="1" <?php if(!empty($item['show_count_adults'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="show_count_adults_prev"  value="<?php echo $item['show_count_adults'];?>">
									<span class="text-danger"><?php echo form_error('show_count_adults'); ?></span>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ask for child count?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="show_count_kids" class="btn-switch" value="1" <?php if(!empty($item['show_count_kids'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="show_count_kids_prev"  value="<?php echo $item['show_count_kids'];?>">
									<span class="text-danger"><?php echo form_error('show_count_kids'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ask for child ages?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="show_ages_kids" class="btn-switch" value="1" <?php if(!empty($item['show_ages_kids'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="show_ages_kids_prev"  value="<?php echo $item['show_ages_kids'];?>">
									<span class="text-danger"><?php echo form_error('show_ages_kids'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ask for guest (adult) meal count?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="show_count_meals_adults" class="btn-switch" value="1" <?php if(!empty($item['show_count_meals_adults'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="show_count_meals_adults_prev"  value="<?php echo $item['show_count_meals_adults'];?>">
									<span class="text-danger"><?php echo form_error('show_count_meals_adults'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ask for child meal count?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="show_count_meals_kids" class="btn-switch" value="1" <?php if(!empty($item['show_count_meals_kids'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="show_count_meals_kids_prev"  value="<?php echo $item['show_count_meals_kids'];?>">
									<span class="text-danger"><?php echo form_error('show_count_meals_kids'); ?></span>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Ask for T-Shirt Size?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="show_tshirt_sizes" class="btn-switch" value="1" <?php if(!empty($item['show_tshirt_sizes'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="show_tshirt_sizes_prev"  value="<?php echo $item['show_tshirt_sizes'];?>">
									<span class="text-danger"><?php echo form_error('show_tshirt_sizes'); ?></span>
								</div>
							</div>
						</fieldset>
						<fieldset class="top20 xs-top20">
							<legend>RSVP Confirmation Email</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Subject</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="email_subject_rsvp" id="email_subject_rsvp" value="<?php echo set_value('email_subject_rsvp', $item['email_subject_rsvp']);?>" placeholder="e.g. Thanks for RSVPing">
									<span class="text-danger"><?php echo form_error('email_subject_rsvp'); ?></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Message</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<textarea  rows="10"  class="form-control" name="email_body_rsvp" id="email_body_rsvp" placeholder="Type your RSVP message here. The event details will be automatically added to the bottom of this message."><?php echo set_value('email_body_rsvp', $item['email_body_rsvp']);?></textarea>
									<span class="text-danger"><?php echo form_error('email_body_rsvp'); ?></span>
								</div>
							</div>	
						</fieldset>
					</div>
					<div class="tab-pane fade hide" id="response">
							<fieldset class="top20 xs-top20">
								<legend>Response Card Options</legend>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-6 col-xs-12">Volunteer Status After Completing Event <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="This is the role status that will be assigned to a volunteer after they complete the response card."></i></label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<select name="orientation_event_complete_status" id="orientation_event_complete_status" class="input-lg">
											<option value="30" <?php if($item['orientation_event_complete_status'] == 30){ echo "selected";}?>>Equipped / Prepared & waiting</option>
											<option value="10" <?php if($item['orientation_event_complete_status'] == 10){ echo "selected";}?>>Prospect</option>
											<option value="21" <?php if($item['orientation_event_complete_status'] == 21){ echo "selected";}?>>Needs church orientation</option>
										</select>
										<span class="text-danger"><?php echo form_error('orientation_event_complete_status'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-6 col-xs-12">Use Simple Form <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="This option disables the physical address fields on the response card. Fields like street, city, state, etc will not show up on the form if this option is enabled."></i></label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="checkbox" name="show_simple_form" class="btn-switch" value="1" <?php if(!empty($item['show_simple_form'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="show_simple_form_prev"  value="<?php echo $item['show_simple_form'];?>">
										<span class="text-danger"><?php echo form_error('show_simple_form'); ?></span>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-6 col-xs-12">Hide Change Event Link <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="By default users have the option to return to the page where all events are listed. If you want to prevent your responders from seeing that link then enable this option."></i></label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="checkbox" name="hide_change_event" class="btn-switch" value="1" <?php if(!empty($item['hide_change_event'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="hide_change_event_prev"  value="<?php echo $item['hide_change_event'];?>">
										<span class="text-danger"><?php echo form_error('hide_change_event'); ?></span>
									</div>
								</div>
								
								<?php if(!empty($_SESSION['affiliate']['allow_interest_care_portal'])){?>
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-6 col-xs-12">Ask for interest in CarePortal?</label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="checkbox" name="show_care_portal_option" class="btn-switch" value="1" <?php if(!empty($item['show_care_portal_option'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
										<input type="hidden" name="show_care_portal_option_prev"  value="<?php echo $item['show_care_portal_option'];?>">
										<span class="text-danger"><?php echo form_error('show_care_portal_option'); ?></span>
									</div>
								</div>
								<?php }?>
								
							<fieldset class="top20 xs-top20">
								<legend>Response Card Completion Email</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Subject</label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="email_subject_response" id="email_subject_response" value="<?php echo set_value('email_subject_response', $item['email_subject_response']);?>" placeholder="e.g. Thanks for attending the event">
										<span class="text-danger"><?php echo form_error('email_subject_response'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Message</label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<textarea rows="10" class="form-control" name="email_body_response" id="email_body_response" placeholder="Type your response card message here. If the user creates a Promise Serves account during their response session then their login information will be automatically added to the bottom of the email."><?php echo set_value('email_body_response', $item['email_body_response']);?></textarea>
										<span class="text-danger"><?php echo form_error('email_body_response'); ?></span>
									</div>
								</div>	
							</fieldset>
						</fieldset>
					</div>
					<div class="tab-pane fade hide" id="virtual">
						<fieldset class="top20 xs-top20">
							<legend>Virtual Event Options</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Pre-entry Time <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="How many minutes before the start time of the event do you want to allow attendees to leave the waiting room and join the event?"></i></label>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<input type="text" class="form-control" name="virtual_early_start" id="virtual_early_start" value="<?php echo set_value('virtual_early_start', $item['virtual_early_start']);?>" placeholder="Minutes before event start time">
										<span class="text-danger"><?php echo form_error('virtual_early_start'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Lockout Time <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="How many minutes after the event start time do you want to prevent late coming attendees?"></i></label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="virtual_event_lockout_time" id="virtual_event_lockout_time" value="<?php echo set_value('virtual_event_lockout_time', $item['virtual_event_lockout_time']);?>" placeholder="Minutes before event start time">
										<span class="text-danger"><?php echo form_error('virtual_event_lockout_time'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Password <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="This optional password can be set so that attendees will have to enter it to join the event."></i></label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="virtual_event_password" id="virtual_event_password" value="<?php echo set_value('virtual_event_password', $item['virtual_event_password']);?>" placeholder="optional password for attendees">
										<span class="text-danger"><?php echo form_error('virtual_event_password'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Virtual Event Platform <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="This option allows you to use the standard Jitsi event type (Version 1.0) or the new Promise Serves integrated Version (2.0)"></i></label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<select id="virtual_event_type" name="virtual_event_type" class="form-control input-lg">
											<option value="">Promise Serves V1.0</option>
											<option value="pshosted" <?php if(!empty($item['virtual_event_type']) && $item['virtual_event_type'] == 'pshosted'){echo 'selected';}?>>Promise Serves 2.0</option>
											<option value="zoom" <?php if(!empty($item['virtual_event_type']) && $item['virtual_event_type'] == 'zoom'){echo 'selected';}?>>Zoom</option>
											<option value="hangout" <?php if(!empty($item['virtual_event_type']) && $item['virtual_event_type'] == 'googlemeet'){echo 'selected';}?>>Google Meet</option>
										</select>
										<span class="text-danger"><?php echo form_error('virtual_event_type'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Virtual Event Third Party Platform URL <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="This is the conference link that is provided by your third party conference softwared (e.g. Zoom attendee link)"></i></label>
									<div class="col-md-6 col-sm-9 col-xs-12">
										<input type="url" class="form-control" name="virtual_event_url_external" id="virtual_event_url_external" value="<?php echo set_value('virtual_event_url_external', $item['virtual_event_url_external']);?>" placeholder="Attendee link provided by your conference provider">
										<span class="text-danger"><?php echo form_error('virtual_event_url_external'); ?></span>
									</div>
								</div>
								<?php if(1 == 2){?>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Virtual Event Moderator(s) <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="These is the person (or people) who will be hosting / moderating the virtual event."></i></label>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<?php echo $this->website_model->input_tagger('virtual_event_moderators', set_value('virtual_event_moderators', $item['virtual_event_moderators']), 'virtual_event_moderators', 'form-control', array());?>
											<input type="hidden" name="virtual_event_moderators_prev" id="virtual_event_moderators_prev" value="">
										<span class="text-danger"><?php echo form_error('virtual_event_moderators'); ?></span>
									</div>
								</div>
								<?php }?>
						</fieldset>
					</div>
					<div class="tab-pane fade hide" id="advanced">
						<fieldset class="top20 xs-top20">
							<legend>Advanced Options</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Hide Event From List View</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="hide_event_from_list" class="btn-switch" value="1" <?php if(!empty($item['hide_event_from_list'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="hide_event_from_list_prev"  value="<?php echo $item['hide_event_from_list'];?>">
									<span class="text-danger"><?php echo form_error('hide_event_from_list'); ?></span>
								</div>
							</div>
							<?php if($this->security_model->user_has_access(80)){?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Is Affiliate Hosted Event?</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="checkbox" name="is_affiliate_hosted" class="btn-switch" value="1" <?php if(!empty($item['is_affiliate_hosted'])){echo 'checked';}?> data-on-text="Yes" data-off-text="No" data-off-color="danger" data-on-color="success">
									<input type="hidden" name="is_affiliate_hosted_prev"  value="<?php echo $item['is_affiliate_hosted'];?>">
									<span class="text-danger"><?php echo form_error('is_affiliate_hosted'); ?></span>
								</div>
							</div>
							<?php }?>
						</fieldset>
					</div>
					<div class="tab-pane fade hide" id="details">
						<fieldset class="top20 xs-top20">
							<legend>RSVPs</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">RSVP Link</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<a href="https://fam.care/r<?php echo $item['id_event'];?>" target="_blank">fam.care/r<?php echo $item['id_event'];?></a> 
									<button type="button" class="btn btn-default btn-copy-to-clipboard" data-clipboard-text="https://fam.care/r<?php echo $item['id_event'];?>"><i class="fa fa-clipboard"></i> Copy Link</button>
								</div>
							</div>
							<?php if(!empty($rsvps)){ 
								$already_shown	= array();
								$count_rsvps	= 0;
								foreach($rsvps as $cur){
									if(!in_array($cur['id_people'], $already_shown)){
										$already_shown[]	= $cur['id_people'];
										$count_rsvps++;
									}
								}
						?>
							<div class="form-group ">
								<a href="#event-edit-list-rsvp" data-toggle="collapse" class="collapse-toggle-indicator gutter10">View Details of <?php echo $count_rsvps; ?> RSVPs <i class="fa fa-caret-right"></i></a>
							</div>
						
							
							<div class="form-group collapse" id="event-edit-list-rsvp">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<table class="table table-striped table-bordered table-responsive dt-responsive nowrap" id="table-event-rsvps">
										<thead>
											<th width="10%">Actions</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Attendees</th>
										</thead>
										<tbody>
											<?php 
												if(!empty($rsvps)){
													$already_shown	= array();
													foreach($rsvps as $cur){
														if(!in_array($cur['id_people'], $already_shown)){
															$already_shown[]			= $cur['id_people'];
															$cur['avatar_code_only'] 	= 1;
															echo '<tr>';
															echo '<td class="text-center">'.$this->people_model->display_people_avatar($cur).'<button type="button" class="btn btn-default">Actions</button></td>';
															echo '<td valign="middle">'.$cur['name_first'].'</td>';
															echo '<td valign="middle">'.$this->website_model->display_format_people_name_last($cur['name_last']).'</td>';
															echo '<td valign="middle">'.$cur['count_adults'].'</td>';
															echo '</tr>';
														}
													}
												}else{
													echo '<tr><td colspan="4" class="text-center">No RSVPs found for this event!</td></tr>';
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						<?php }?>
						</fieldset>
						<fieldset class="top20 xs-top20">
							<legend>Attendees</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Attendee Link</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<a href="https://fam.care/e<?php echo $item['id_event'];?>" target="_blank">fam.care/e<?php echo $item['id_event'];?></a> 
									<button type="button" class="btn btn-default btn-copy-to-clipboard" data-clipboard-text="https://fam.care/e<?php echo $item['id_event'];?>"><i class="fa fa-clipboard"></i> Copy Link</button>
								</div>
							</div>
						</fieldset>
						<fieldset class="top20 xs-top20">
							<legend>Responses</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Response Link</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<a href="https://fam.care/er<?php echo $item['id_event'];?>" target="_blank">fam.care/er<?php echo $item['id_event'];?></a> 
									<button type="button" class="btn btn-default btn-copy-to-clipboard" data-clipboard-text="https://fam.care/er<?php echo $item['id_event'];?>"><i class="fa fa-clipboard"></i> Copy Link</button>
								</div>
							</div>
						</fieldset>
					</div>
				<div class="ln_solid top40"></div>
				<div class="form-group">
					<?php echo $this->website_model->make_edit_buttons(array('url_cancel' => $url_cancel, 'url_redirect' => $url_redirect)); ?>
				</div>
			  <input type="hidden" name="id_event_encoded" value="<?php echo $item['id_event_encoded'];?>" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'events/list');?>" />
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
<script>


$(document).ready(function() {
<?php 
if(empty($item['id_event'])){
    $item['id_event_contact'] == $user['id_people'];
}
if(!empty($item['id_event_contact'])){
    $event_contact = $this->people_model->get_person(array('id_people' => $item['id_event_contact']));
    if(!empty($event_contact['id_people'])){
?>
$('#id_event_contact').tokenInput("add", {id: <?php echo $event_contact['id_people'];?>, name: '<?php echo $event_contact['name_first'].' '.$this->website_model->display_format_people_name_last($event_contact);?>'});
<?php 
    }
}
?>

	$(".btn-switch").bootstrapSwitch();
	
	$('#table-event-rsvps').DataTable({	'stateSave': true, 
												'order': [[ 2, "asc" ]], 
												'iDisplayLength': 10,
												'bAutoWidth': false, 
												'fnDrawCallback': function (oSettings) {
													
												}   
											});
	
	$("#id_church").on('change', function(){
		$('#event_location_name').val($(this).find(':selected').data('churchname'));
		$('#event_address_street').val($(this).find(':selected').data('street'));
		$('#event_address_city').val($(this).find(':selected').data('city'));
		$('#event_address_state').val($(this).find(':selected').data('state'));
		$('#event_address_zip').val($(this).find(':selected').data('zip'));
	});
	
	$('#virtual_event_type').on('change', function(){
		$('#virtual_event_url_external').val('');
	});
		
});

function signup_gmap_initialize() {
	var input = document.getElementById('place_address');
	var autocomplete = new google.maps.places.Autocomplete(input);
	google.maps.event.addListener(autocomplete, 'place_changed', function () {
		var place = autocomplete.getPlace();
		ps_parse_gmap_place_values(place);
		
	});
}

google.maps.event.addDomListener(window, 'load', signup_gmap_initialize);

ps_instantiate_pill_hides();
</script>
</body>
</html>