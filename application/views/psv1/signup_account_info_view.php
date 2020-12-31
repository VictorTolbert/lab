<?php echo $site_header; ?>
<!-- TODO: Remove once we have FA5 conversion completed -->
<script src="https://kit.fontawesome.com/a650b13d24.js" crossorigin="anonymous"></script>
<?php $step_total = 12;?>
<div class="wrapper small-pad" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>');">
<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5 top10">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="row">
			<h1 class="text-center">Join Promise Serves</h1>
		</div>
</div>
<form class="form form-vertical" action="" method="post" id="form-serve-signup">
<div class="container-full">
	
	
	<div id="carouselsignup" class="carousel slide top20 signup-slider" data-interval="false" >
		<div id="ps-signup-carousel-slide-container" class="carousel-inner">
			
			
			<?php $step = 1;?>
			<div id="position-<?= $step;?>"></div>
			<div class="item active item-step" id="item-step-info" data-signupstep="info" data-position="<?= $step;?>">
				
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-1 step-info">
						<h2 class="text-center">Your Info</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<?php echo $this->session->flashdata('msg'); ?>
						
						<div class="top20">
							<div class="form-group" id="wrapper-name-first">
								<input type="text" class="form-control input-md" id="name_first" name="name_first" placeholder="Enter your first name" value="<?php echo set_value('name_first', $item['name_first'] ? $item['name_first'] : null);?>" required>
								<span  id="signup-error-name_first"  class="text-danger align-center"><?php echo form_error('name_first'); ?></span>
							</div>
							<div class="form-group" id="wrapper-name-last">
								<input type="text" class="form-control input-md" id="name_last" name="name_last" placeholder="Enter your last name" value="<?php echo set_value('name_last', $item['name_last']  ? $this->website_model->display_format_people_name_last($item['name_last']) : null);?>" required>
								<span  id="signup-error-name_last"  class="text-danger align-center"><?php echo form_error('name_last'); ?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-md" id="people_phone_mobile" name="people_phone_mobile" placeholder="Mobile Number" value="<?php echo set_value('people_phone_mobile', $item['people_phone_mobile']  ? format_phone($item['people_phone_mobile']) : null);?>" required autocomplete="new-password">
								<span  id="signup-error-people_phone_mobile" class="text-danger align-center"><?php echo form_error('people_phone_mobile'); ?></span>
							</div>
							<?php 
								if($this->affiliates_model->get_affiliate_param(array('param_name' => 'signup_request_occupation'))){
									$cur_field_req	= '';
									$cur_field_placeholder = '(optional)';
									if($this->affiliates_model->get_affiliate_param(array('param_name' => 'signup_request_occupation_required'))){
										$cur_field_req	= 'required';	
										$cur_field_placeholder 	= '';
									}
								?>
								<div class="form-group">
									<input type="text" class="form-control input-md" id="occupation" name="occupation" placeholder="What is your occupation? <?php echo $cur_field_placeholder;?>" <?php echo $cur_field_req;?> value="<?php echo set_value('occupation', $item['occupation']  ? $item['occupation'] : null);?>" >
									<span  id="signup-error-occupation" class="text-danger align-center"><?php echo form_error('occupation'); ?></span>
								</div>
							<?php }?>
							<?php if(!empty($bypass_password)){ 
										echo '<input type="hidden" name="bypass_password" value="1">';
								}else{
							?>
							<div class="form-group">
								<input type="password" class="form-control input-md" id="password" name="password" placeholder="Create Password" value="<?php echo set_value('password');?>" required autocomplete="new-password">
								<span id="signup-error-password" class="text-danger align-center"><?php echo form_error('password'); ?></span>
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-md" id="password_confirm" name="password_confirm" placeholder="Confirm Password" value="<?php echo set_value('password_confirm');?>" required>
								<span  id="signup-error-password_confirm"  class="text-danger align-center"><?php echo form_error('password_confirm'); ?></span>
							</div>
							<?php } ?>
							<div class="form-group">
								<input type="text" class="form-control autocomplete-church bypass-modal" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church (leave blank if none)" data-idtarget="id_home_church">
									<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>">
									<span  id="signup-error-home_church" class="text-danger"><?php echo form_error('home_church'); ?></span>
							</div>
							
							<div class="row top20 text-center">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-1" name="btn-next-step-1" data-curslide="1">
									<span id="btn-next-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-selectchurch" data-signupstep="selectchurch" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-selectchurch">
						<h2 class="text-center">Did you mean one of these churches?</h2>
						
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<h3 class="text-center strong">This is important</h3>
						<p>It looks like the church you entered might already be in the system. We just want to confirm that you will be associated with the correct church.</p>
						<p><strong>Not being linked to the correct church could make it impossible for a church advocate to find you in the system!</strong></p>
						<p>If your church is not on this list then just select the option that says; "My church is not on this list".</p>
						<div class="top20 ">
							<div id="ajax-target-select-church-html">
							</div>
							<div class="row text-center">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-prev-step-<?= $step;?>" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next-step-<?= $step;?>" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
				
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-psrole" data-signupstep="psrole" data-position="<?= $step;?>">
				
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-2 step-psrole">
						<h2 class="text-center">How will you primarily use Promise Serves?</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<div class="top20">
							<table class="table table-responsive table-striped">
								<tbody>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_30" value="30" required checked>
										</td>
										<td class="col-sm-10 col-xs-10">
											I am interested in serving on a care community
										</td>
									</tr>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_20" value="20" >
										</td>
										<td class="col-sm-10 col-xs-10">
											I am a foster parent seeking support
										</td>
									</tr>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_10" value="10">
										</td>
										<td class="col-sm-10 col-xs-10">
											I am a biological parent seeking support
										</td>
									</tr>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_10" value="10">
										</td>
										<td class="col-sm-10 col-xs-10">
											I am an adoptive parent seeking support
										</td>
									</tr>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_4" value="4" data-pronoun="">
										</td>
										<td class="col-sm-10 col-xs-10">
											I am interested in becoming a foster parent
										</td>
									</tr>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_5" value="5">
										</td>
										<td class="col-sm-10 col-xs-10">
											I am interested in adopting
										</td>
									</tr>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_250" value="250" >
										</td>
										<td class="col-sm-10 col-xs-10">
											I am (or want to become) a Church Advocate
										</td>
									</tr>
							</tbody>
						</table>							
							
							<!-- <div class="row">
								<div class="col-xs-3 col-sm-3 text-center">
									<input name="assign_primary" id="assign_primary" type="radio" class="radio-lg radio-assign assign_primary_100" value="100" required>
								</div>
								<div class="col-xs-9 col-sm-9">
									I am already serving on a care community
								</div>
							</div> -->
							<div class="row top10">
								<div class="col-xs-3 col-sm-3 text-center">
									
								</div>
								<div class="col-xs-9 col-sm-9">
									
								</div>
							</div>

							<div class="row text-center top20">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-prev-step-<?= $step;?>" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next-step-<?= $step;?>" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-address" data-signupstep="address" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-address">
						<h2 class="text-center">Help us connect you</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">Please enter your home address so we can best match you with the <span id="target-user-connected-pronoun" class="target-user-connected-pronoun">families</span> in your area.</p>
						
						<div class="top20">
							<div class="form-group">
								<?php $item['use_proper_address'] = 1;?>
								<input type="text" id="place_address" name="place_address" class="form-control input-md input-select-on-focus" placeholder="Enter your full address" value="<?= set_value('place_address', $item['place_street_number']  ? $this->website_model->get_full_address($item) : null);?>">
								<input type="hidden" name="place_street_number" id="place_street_number" value="<?= set_value('place_street_number', !empty($item['place_street_number']) ? $item['place_street_number'] : null);?>">
								<input type="hidden" name="place_street" id="place_street" value="<?= set_value('place_street', !empty($item['place_street']) ? $item['place_street'] : null);?>">
								<input type="hidden" name="place_city" id="place_city" value="<?= set_value('place_city', !empty($item['place_city']) ? $item['place_city'] : null);?>">
								<input type="hidden" name="place_state" id="place_state" value="<?= set_value('place_state', !empty($item['place_state']) ? $item['place_state'] : null);?>">
								<input type="hidden" name="place_zip" id="place_zip" value="<?= set_value('place_zip', !empty($item['place_zip']) ? $item['place_zip'] : null);?>">
								<input type="hidden" name="place_county" id="place_county" value="<?= set_value('place_county', !empty($item['place_county']) ? $item['place_county'] : null);?>">
								<input type="hidden" name="place_country" id="place_country" value="<?= set_value('place_country', !empty($item['place_country']) ? $item['place_country'] : null);?>">
								<input type="hidden" name="place_lat" id="place_lat" value="<?= set_value('place_lat', !empty($item['place_lat']) ? $item['place_lat'] : null);?>">
								<input type="hidden" name="place_lng" id="place_lng" value="<?= set_value('place_lng', !empty($item['place_lng']) ? $item['place_lng'] : null);?>">
								<span  id="signup-error-place_address"  class="text-danger align-center text-center"><?php echo form_error('place_address'); ?></span>
							</div>

							<div class="row text-center">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-prev-step-<?= $step;?>" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next-step-<?= $step;?>" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-newchurch" data-signupstep="newchurch" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-newchurch">
						<h2 class="text-center">Confirm your church</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p>Before we add your church to Promise Serves please verify that we found the correct location of your church by selecting it from the list below.</p>
						<div class="top20 ">
							<div id="ajax-target-new-church-select-html" class="force-overflow-y height-300">
							</div>
							<div class="row text-center top20">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-prev-step-<?= $step;?>" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next-step-<?= $step;?>" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-event" data-signupstep="event" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-event">
						<h2 class="text-center">Did you attend an event?</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">If you recently attended an event, please select it from the options below.<br /> If not, or if you don't see your event listed then click <em>next</em> to skip and continue.</p>
						<div class="top20">
							<div class="force-overflow-y height-300" id="ajax-target-events-body-html">
							<?php 
								if(!empty($events)){
									$i =0;
									foreach($events as $cur){
										$cur_address	= $cur['event_address_street'].',  '.$cur['event_address_city'].', '.$cur['event_address_state'].' '.$cur['event_address_zip'];
										$cur_church		= $this->churches_model->get_church_name($cur);
										if(!empty($cur['event_location_detail'])){
											$cur_location		= $cur['event_location_detail'];
										}else{
											$cur_location = $cur_address;
										}
										
										if($i == 1){
											$striped = 'row-striped';
										}else{
											$striped = '';
										}
										if($i != 0){
											$striped .= ' top20';
										}
										echo '<div class="row '.$striped.'"><div class="col-xs-12 col-sm-3 col-md-2 text-center"><div class="cal-date-wrapper"><h3 class="display-4"><span class="badge badge-secondary">'.format_date($cur['event_date_start'], 'cal_date_only').'</span></h3><h5>'.strtoupper(format_date($cur['event_date_start'], 'cal_month_abrev', $cur['event_time_zone'])).'</h5></div></div><div class="col-xs-12 col-xs-8 col-md-10"><h5 class="text-center top10">'.$this->events_model->get_event_name($cur).'</h5><div class="top20 col-xs-8 col-xs-offset-2 col-sm-3 col-sm-offset-4"><button type="button" class="btn btn-primary center-bloc btn-slide btn-slide-next" data-slide="next" data-curslide="'.$step.'" data-queryadd="&e='.url_enc($cur['id_event']).'">Select</button></p></div></div></div>'."\r\n\r\n";
										$i = 1 - $i;
									}
								}else{
									echo '<div class="row"><h3 class="text-center">No recent events in your area were found!</h3></div>';
								}
							?>
							</div>
							<hr />
							<div class="row text-center top20">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-prev-step-<?= $step;?>" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" data-slide="next" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-ccroles" data-signupstep="ccroles" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-ccroles" >
						<h2 class="text-center">What areas of service interest you?</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">Please select the ways you would most like to be utilized once you are matched with a family in your area.</p>
						<div class="col-xs-12 col-sm-6  col-sm-offset-3 ltp-care-community-model-interest ps-signup-house-wrapper cursor-pointer">
							<div class="col-xs-6 col-sm-6 btn-ps-house-quadrant" data-ccrolename="family_helper" >
								<div class="ps-signup-house-height-holder" ></div>
								<div class="ps-signup-house-quadrant interest-family-helper">
									<i class="fas fa-check-circle fa-2x hide"  id="ps_house_check_interest_family_helper"></i>
									<input type="hidden" name="interest_family_helper" id="interest_family_helper" value="<?= set_value('interest_family_helper', $item['interest_family_helper']  ? $item['interest_family_helper'] : null);?>">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 btn-ps-house-quadrant"  data-ccrolename="child_mentor">
								<div class="ps-signup-house-height-holder"></div>
								<div class="ps-signup-house-quadrant interest-child-mentor">
									<i class="fas fa-check-circle fa-2x hide" id="ps_house_check_interest_child_mentor"></i> 
									<input type="hidden" name="interest_child_mentor" id="interest_child_mentor" value="<?= set_value('interest_child_mentor', $item['interest_child_mentor']  ? $item['interest_child_mentor'] : null);?>">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 btn-ps-house-quadrant interest-team-leader" data-ccrolename="team_leader">
								<div class="ps-signup-house-height-holder"></div>
								<div class="ps-signup-house-quadrant">
									<i class="fas fa-check-circle fa-2x hide" id="ps_house_check_interest_team_leader"></i>
									<input type="hidden" name="interest_team_leader" id="interest_team_leader" value="<?= set_value('interest_team_leader', $item['interest_team_leader']  ? $item['interest_team_leader'] : null);?>">
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 btn-ps-house-quadrant  interest-interim-caregiver"  data-ccrolename="interim_caregiver" >
								<div class="ps-signup-house-height-holder"></div>
								<div class="ps-signup-house-quadrant">
									<i class="fas fa-check-circle fa-2x hide" id="ps_house_check_interest_interim_caregiver"></i>
									<input type="hidden" name="interest_interim_caregiver" id="interest_interim_caregiver" value="<?= set_value('interest_interim_caregiver', $item['interest_interim_caregiver']  ? $item['interest_interim_caregiver'] : null);?>">
								</div>
							</div>
						</div>
						
						
						<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2 top10">				
							<img src="<?php echo base_url();?>img/care_community_legend.png" class="img-responsive center-block cursor-pointer">
						</div>
						<div class="col-xs-12 col-sm-12 text-center top10">
							<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-next" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
								<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
							</button>
							
							<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next" data-curslide="<?= $step;?>">
								<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
							</button>
						</div>
					</div>
				</div>
			</div>
			
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-servingchurch" data-signupstep="servingchurch" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-servingchurch" >
						
						<h2 class="text-center">With which church will you be serving?</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center"><span id="target-servingchurch-explanation" >It appears that your home church does not have an active care community as part of their FAM.</span><br /> Please select the church below that you will volunteer with.</p>
						<div class="top20">
							<div class="form-group">
								<?php 
									//$church_item							= $item;
									$church_item['required']				= 1;
									$church_item['show_single_church_name']	= 1;
									$church_item['bypass_church']			= 1;
									$church_item['bypass_affiliate']		= 1;
									$church_item['bypass_security']			= 1;
									$church_item['force_limiters']			= 1;
									//$church_item['debug']					= 1;
									echo $this->website_model->input_menu_churches('id_church_add', $item['id_church_add'] , 'id_church_add', 'form-control input-md', $church_item);
								?>
							</div>
							<div class="row text-center top20">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-next" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-interests" data-signupstep="interests" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-interests" id="ajax-target-interests-body">
						
						<h2 class="text-center">Other interest areas?</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">Select other FAM ministry activities that you would like to learn more about.<br /> If not, then click next to continue.</p>
						<div class="top20">
						<div class="" id="ajax-target-interests-fields">
							<div class="col-sm-1"></div>
							<div class="col-sm-11">
								<?php echo $this->people_model->make_interest_checkboxes(!empty($checkboxes) ? $checkboxes : array(), !empty($checked) ? $checked : null, $item, array('extras_only' => 1, 'parent_class' => 'row top10'));?>
							</div>
						</div>
							<div class="row text-center top20">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-next" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-awarenessinterests" data-signupstep="awarenessinterests" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-awarenessinterests" id="ajax-target-awarenessinterests-body">
						
						<h2 class="text-center">I want to learn more about:</h2>
						<p class="text-center">Please select all that apply.</p>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<div class="top20">
							<div class="" id="ajax-target-awarenessinterests-fields">
								<?php echo $interest_checkboxes_awareness;?>
							</div>
						</div>
						<div class="row text-center top20">
							<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-next" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
								<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
							</button>
							
							<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next" data-curslide="<?= $step;?>">
								<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
							</button>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-agreement" data-signupstep="agreement" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-agreement" >
						<h2 class="text-center">Sign agreement</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						
						<div class="top20 force-overflow-y height-300" id="ajax-target-agreement-body-html">
							<?php 
							if(!empty($html['step-finish-body'])){
								echo $this->website_model->format_copy($html['step-finish-body']);
							}elseif(!empty($_SESSION['affiliate']['affiliate_agree_volunteer'])){ 
								echo $this->website_model->format_copy($_SESSION['affiliate']['affiliate_agree_volunteer']); 
							}else{
								?>
							<p>This agreement must be signed by volunteers that desire to serve children in foster care, by 
							supporting a foster family, through participating in a care community.  </p> 

							 <p>Care Community volunteers can offer two basic levels of support:
							 <ul>
								<li>Supervised Assistance: These volunteers are called “Family Helpers” who support the 
							family through bringing meals, doing light yardwork or other small chores that do not 
							involve unsupervised contact with the children. They serve solely at the discretion of the 
							foster parent, under Reasonable and Prudent Parenting Standards (RPPS).</li>
								<li>Unsupervised Assistance: These volunteers can spend unsupervised time with the 
							children in the foster family through roles such as babysitters, transporters and tutors, 
							when the parent may not be directly present. If a volunteer has a prior relationship with 
							the foster family, they may serve up to 3 times at the foster parent’s discretion before 
							they must complete various RPPS background checks required by the family’s 
							placement agency and be officially approved by the agency for service. If the volunteer 
							does not have a prior relationship with the family, he or she must be approved to serve 
							by the family’s placement agency before starting to serve the family.</li>
							</ul>
							</p>

							<p>I understand and agree to the above responsibilities for volunteer. I understand that any 
							volunteer who does not abide by these standards will be reported and dismissed. </p>
							
						<?php }?>
							<p>Volunteers must digitally sign this agreement by entering their full name below and clicking 'I agree'.</p>
							<p>By signing this agreement you are also agreeing to abide by the <a href="<?php echo base_url();?>terms" target="_blank">Terms of Service</a> for this website.</p>
						</div>	
						<div class="top20" id="ajax-target-agreement-signature-fields">
							<?php 	
								if(!empty($item['vol_agree_sign_name'])){
									echo '<strong>'.$item['vol_agree_sign_name'].'</strong>'; 
								}else{
									echo '<input type="text" class="form-control" name="vol_agree_sign_name" id="vol_agree_sign_name" placeholder="Your Full Name As Signature">';
								}
							?>
						</div>

						<div class="row text-center top20">
							<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-next" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
								<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
							</button>
							
							<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next" data-curslide="<?= $step;?>">
								<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
							</button>
						</div>
					</div>
				</div>
			</div>

			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-avatar" data-signupstep="avatar" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-avatar">
						<h2 class="text-center">Smile - add a profile picture</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">Please add a profile pictue to help others using the system recognize you.</p>
						<div class="row text-center">
							<div id="profile-img-holder">
							<?php if(!empty($item['id_people'])){
											$img									= $this->people_model->get_avatar_filename($item);
										}
										if(!empty($img)){
											$upload_btn_text				= 'Change Profile Picture';
								?>
									
										<img src="<?php echo $img;?>" class="center-block img-responsive img-circle" width="200px" height="200px">
							<?php }else{
										$upload_btn_text				= 'Add Profile Picture';
								?>
										<i class="far fa-smile fa-9x"></i>
										<!-- <i class="fa fa-user-circle fa-3x" aria-hidden="true"  class="center-block img-responsive img-circle" style="font-size: 200px;"></i>-->
							<?php }?>
							</div>
							<div id="profile-img-croppie-holder" class="hide">
							</div>
							<div id="profile-img-controls" >
								<div class="row" >
									<button type="button"  class="btn btn-default btn-md hide" id="rotate-left" data-rotate="-90"><i class="fa fa-rotate-left"></i></button>
									<button type="button"  class="btn btn-default btn-md hide" id="rotate-right" data-rotate="90"><i class="fa fa-rotate-right"></i></button>
								</div>
								<div class="row top10">
									<button type="button"  class="btn btn-success upload-result hide" id="btn-upload-result" data-url="<?php echo base_url();?>upload/imageprofile?pe=<?php echo $item['id_people_encoded'];?>">Save Profile Picture</button>
									<label for="file-upload" class="custom-file-upload btn btn-primary" id="btn-upload">
										<i class="fa fa-image"></i> <span id="btn-upload-text"><?php echo $upload_btn_text;?>
									</label>
									<input id="file-upload" type="file"  accept="image/*;capture=camera" style="visibility: hidden;" data-viewport="125" />
									
								</div>
								<div class="image-not-saved-error hide text-error">Please save your image first</div>
							</div>	
						
							<div class="row text-center top20" id="signup-slider-btn-wrapper-avatar">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-prev" id="btn-prev-step-<?= $step;?>" name="btn-next" href="#carouselsignup" data-slide="prev" data-curslide="<?= $step;?>">
									<span id="btn-prev-step-<?= $step;?>-text"><i class="fa fa-chevron-left"></i> Back</span>
								</button>
								
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next-step-<?= $step;?>" data-curslide="<?= $step;?>">
									<span id="btn-next-step-<?= $step;?>-text">Next <i class="fa fa-chevron-right"></i></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<?php $step++;?>	
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-finish" data-signupstep="finish" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-finish" >
						<h2 class="text-center">Finished</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center" id="item-step-finish-icon">
							<i class="fa fa-flag-checkered fa-5x" aria-hidden="true"></i>
						</p>
						<?php 
							if(!empty($html['step-finish-body'])){
								echo $this->website_model->format_copy($html['step-finish-body']);
							}else{
						?>
							<p class="text-center">Thank you for joining Promise Serves!</p>
							<p class="text-center">Please check your email to complete the remaining steps necessary to begin using Promise Serves.</p>
						<?php }?>
						
						
						<div class="form-group text-center top20">
							<a href="<?php echo $url_finish;?>" class="btn btn-primary btn-md btn-slide btn-slide-next btn-finish" id="btn-next" name="btn-next" data-curslide="<?= $step;?>" >
								<span id="btn-next-text">Finish</span>
							</a>
							
						</div>
						
					</div>
				</div>
			</div>

		<input type="hidden" name="r" value="<?php echo $r;?>" />
		<input type="hidden" name="t" value="<?php echo $t;?>" />
		<input type="text" id="username" name="username" value="<?php echo !empty($item['people_email_primary']) ? format_email($item['people_email_primary']) : null;?>" style="position: absolute; top: -99999999px;" autocomplete="off"/>
		<input type="text" class="input-fax-number" name="fax" value="" autocomplete="off" />
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>" >
		<input type="hidden" id="id_people_encoded" name="id_people_encoded" value="<?= $people['id_people_encoded'];?>">
	</form>
</div>
</div>
<div id="unusedslides">
</div>
<!-- footer navigation -->
<?php echo $site_footer;?>
<!-- /footer navigation -->
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>

<script>	

	var clicked_prev 				= false;
	var clicked_next 				= false;
	var active_slide 				= 1;
	var ps_signup_final_steps_set 	= false;
	
	$(document).ready(function() {
	  $(window).keydown(function(event){
		if(event.keyCode == 13) {
		  event.preventDefault();
		  return false;
		}
	  });
	});

	$(document).ready( function() {
		$(function() {
			//$('.step').matchHeight({byRow: false});
		});
		
		var allchurches = [
		<?php 
			$i = 0;
			$arr_churches_checked	= array();
			foreach($churches as $cur){
				if(!in_array($cur['id_church'], $arr_churches_checked)){
					$arr_churches_checked[]					= $cur['id_church'];
					$cur['show_church_city_state']			= 1;
					echo  "{data: '".$cur['id_church']."',	value: '".addslashes($this->churches_model->get_church_name($cur))."'},\r\n";
				}
			}?>
		];
	 
	  $('#home_church').autocomplete({
				lookup: allchurches,
				autoSelectFirst: true,
				onSelect: function (suggestion) {
					$('#id_home_church').val(suggestion.data);
				}
				
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

	var ps_signup_carousel_state = 'waiting';
	var ps_signup_carousel_slide = 0;
	var ps_signup_next_step;
	
	$(document).ready(function() {
		
		instantiate_signup_carousel_buttons('btn-slide-nex');
		instantiate_bootstrap_switches('btn-switch');
		signup_process_ccroles();
		
		$(".btn-ps-house-quadrant").click(function(){
			console.log('checking quadrant'+$(this).data('ccrolename'));
			var rolename = $(this).data('ccrolename');
			if($('#interest_'+rolename).val() == 1){
				$('#interest_'+rolename).val(0);
			}else{
				$('#interest_'+rolename).val(1);
			}
			signup_process_ccroles();
		});
		
		$('#carouselsignup').on('slid.bs.carousel', function() {
			var target = $('#carouselsignup');
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 500);
		});
		
		$('.input-select-on-focus').on('focus', function(){
				$(this).select();
		});
		
		
	});
	
	
function instantiate_signup_carousel_buttons(){
	$(".btn-slide-next").unbind();
	$(".btn-slide-next").click(function(){
		ps_signup_carousel_state = 'process';
		console.log(ps_signup_carousel_state);
		ps_signup_carousel_slide	= Number($(this).data('curslide'));
		
		$(document).trigger('ps_signup_carousel_state','processing');
		
		var cur_step = $('#carouselsignup .active').data('signupstep');
		var query_add;
		if(!!$(this).data('queryadd')){
			query_add = $(this).data('queryadd');
		}
		if(ps_signup_carousel_state == 'process'){
			ps_signup_next_step = process_signup_carousel_slide(cur_step, query_add);
		}
		
		
	});
	
	
	
	$(".btn-slide-prev").click(function(){
		ps_signup_carousel_slide	= Number($(this).data('curslide')) - 1;
		clicked_prev	= true;
	});
	
	$('#carouselsignup').on('slid.bs.carousel', function() {
		active_slide = ps_signup_get_active_slide_position();
		
		if(clicked_prev){
			
			//ps_signup_restore_slide('#item-step-selectchurch'); 
			ps_signup_restore_slides();
			clicked_prev = false;
		}
		if(clicked_next){
			//console.log('It just SLID next!! Did you see it????');
			//ps_signup_restore_slide('#item-step-newchurch'); 
			clicked_prev = false;
			
			
		}
		if($('div.active').data('signupstep') == 'finish' && !ps_signup_final_steps_set){
			ps_signup_final_steps_set	= true;
			$.ajax({
				type: "POST",
				url:  getBaseUrl()+'signup/set_final_steps',
				data: $('#form-serve-signup').serialize(),
				error: function (request, status, error) {
					ps_signup_final_steps_set	= false;
				},
				success: function(ajaxdata) {
					ps_signup_final_steps_set	= true;
					console.log(JSON.parse(ajaxdata));
				}
			});
		}
	});
}

function signup_process_ccroles(){
	//data-ccrolenamefamily_helper, child_mentor, team_leader, interim_caregiver
	var ccroles = ['family_helper', 'child_mentor', 'team_leader', 'interim_caregiver'];
	$.each(ccroles, function(index, cur_role) {
		$('#ps_house_check_interest_'+cur_role).addClass('hide');
		if($('#interest_'+cur_role).val() == 1){
			$('#ps_house_check_interest_'+cur_role).removeClass('hide');
		}
	});
}

function process_signup_carousel_slide(slide_id, query_add=''){
		$('.ajax-error-response').html('');
		$.blockUI({  css: { width: '40%', left: '30%', border: 'none',  backgroundColor:'transparent', color: '#fff'}, overlayCSS:  {color: '#fff'}, message: '<p class="text-center"><i class="fas fa-sync fa-spin fa-3x"></i></p><h3 class="text-center">Just a moment...</h3>' });
		//console.log('Signup: Processing This Step - '+slide_id+' '+query_add);
		ps_signup_carousel_state = 'processing';

		$.ajax({
		type: "POST",
		url:  getBaseUrl()+'signup/save_account_info?step='+slide_id+query_add,
		data: $('#form-serve-signup').serialize(),
		error: function (request, status, error) {
			$.unblockUI();
			var result = JSON.parse(ajaxdata);
			if(!!(result.msg_human)){
				if(result.msg_human.length > 0){
					$('.ajax-error-response').html(result.msg_human);
				}
			}
		},
		success: function(ajaxdata) {
			//reset form validation for errors that shouldn't be seen.
			$('#form-serve-signup').validate().resetForm();
			
			var result = JSON.parse(ajaxdata);
			console.log(result);
			
			if(result.st == 1){
				if(!!(result.data.url_finish)){
					$('.btn-finish').attr('href', result.data.url_finish);
				}
				
				//Set values of inputs
				if(!!(result.data.set_input_vals)){
					if(result.data.set_input_vals.length > 0){
						$.each(result.data.set_input_vals, function(index, cur_input) {
							if(!!cur_input.value){
								switch(cur_input.type){
									case 'radio':
										$('.'+cur_input.name+'_'+cur_input.value).prop('checked', true);
									break;
									default:
										//console.log('Trying: #'+cur_input.id+' With :'+cur_input.value);
										$('#'+cur_input.id).val(cur_input.value);
									break;
								}
							}
						});
					}
				}
								
				//Add passed Ajax HTML
				if(!!(result.data.ajax_html) && result.data.ajax_html.length > 0){
					$.each(result.data.ajax_html, function(index, cur_ajax) {
						if(!!cur_ajax.html){
							if(!!cur_ajax.id){
								$('#'+cur_ajax.id).html(cur_ajax.html);
							}
							if(!!cur_ajax.class){
								$('.'+cur_ajax.id).html(cur_ajax.html);
							}
						}
					});
				}
				
				var action_actions = ['hide','disable', 'remove', 'show', 'enable'];
				var action_selectors = ['classes','ids'];
				var cur_action;
				var cur_selector;
				var cur_sel_id;
				$.each(action_actions, function(act_index, cur_action) {
					$.each(action_selectors, function(sel_index, cur_selector) {
						if(!!result.data[cur_action][cur_selector]){
							$.each(result.data[cur_action][cur_selector], function(cur_run_index, cur_run){
								cur_sel_id = '';
								switch(cur_selector){
									case 'ids':
									case 'slides':	
										cur_sel_id = '#'+cur_run;
									break;
									case 'classes':							
										cur_sel_id = '.'+cur_run;
									break;
								}
								if(cur_sel_id.length > 1){
									switch(cur_action){
										case 'hide':
											$(cur_sel_id).addClass('hide');
										break;
										case 'disable':
											$(cur_sel_id).attr('disable', true);
										break;
										case 'show':
											$(cur_sel_id).removeClass('hide');
										break;
										case 'enable':
											$(cur_sel_id).attr('disable', false);
										break;
										case 'remove':
											$(cur_sel_id).addClass('hide').detach().appendTo('#unusedslides');
										break;
										case 'unremove':
											ps_signup_restore_slide(cur_sel_id);
										break;
									}
								}
							});	
						}
					});
				});
				
				//Run JS function
				//Add passed Ajax HTML
				if(!!(result.data.run_js) && result.data.run_js.length > 0){
					$.each(result.data.run_js, function(index, cur_run) {
						if(!!cur_run){
							//console.log('Running: '+cur_run);
							window[cur_run]();
						}
					});
				}
		
				switch(slide_id){
					case "info":
						
						$('#carouselsignup').carousel(result.data.signupslidenumber);
						ps_signup_next_step	= 'waiting';
							
					break;
					case "address":
						
						//console.log(result.data);
						
						$('#carouselsignup').carousel(result.data.signupslidenumber);
						ps_signup_next_step	= 'waiting';

					break;
					default:
						
						
						$('#carouselsignup').carousel(result.data.signupslidenumber);
						ps_signup_next_step	= 'waiting';

					break;

				}//End Switch
				
			}else{
				console.log(result.errors);
			
				$.each(result.errors, function(index, cur_error) {
					$('#signup-error-'+index).html(cur_error);
				});
				$.unblockUI();
			}
			$.unblockUI();
		}//End Ajax Success
	});//End Ajax
		
		return false;
	
} //End function

function ps_signup_restore_slide(cur_sel_id){
	var cur_position = $(cur_sel_id).data('position');
	if(cur_position > 0){
		//console.log('trying to restore #position-'+cur_position);
		var slide = $(cur_sel_id);
		$('#position-'+cur_position).after(slide);
		$(cur_sel_id).removeClass('hide');
	}else{
		$(cur_sel_id).detach().appendTo('#unusedslides').removeClass('hide');
	}
	return;
}

function ps_signup_restore_slides(){
	if(Number(active_slide) > 0){
		$('#unusedslides').children('.item-step').each(function(e) {
			var cur_id = $(this).attr('id');
			if(Number($(this).data('position')) > Number(active_slide)){
				ps_signup_restore_slide('#'+cur_id);
				console.log('Restored - '+cur_id);
			}
		});
	}
	return;
}

function ps_signup_get_active_slide_position(){
	return $('.item-step.active').data('position');
}
	
</script>