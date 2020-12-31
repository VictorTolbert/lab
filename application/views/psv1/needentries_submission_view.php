<?php echo $site_header; ?>
<!-- TODO: Remove once we have FA5 conversion completed -->
<script src="https://kit.fontawesome.com/a650b13d24.js" crossorigin="anonymous"></script>
<?php $step_total = 10;?>
<div class="wrapper small-pad" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>');">
<div class="container">
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5 top10">
			<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
		</div>
	</div>
	<div class="row">
		<h1 class="text-center">Submit a Need</h1>
	</div>
</div>
<form class="form form-vertical" action="" method="post" id="form-serve-signup">
<div class="container-full">
	<div id="carouselsignup" class="carousel slide top20 signup-slider" data-interval="false" >
		<div id="ps-signup-carousel-slide-container" class="carousel-inner">
			<?php $step = 1;?>
			<?php if($incomplete_user){?>
			<div id="position-<?= $step;?>"></div>
			<div class="item active item-step" id="item-step-requestorinfo" data-signupstep="requestorinfo" data-position="<?= $step;?>">
				
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-info">
						<h2 class="text-center">Your Info</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<?php echo $this->session->flashdata('msg'); ?>
						
						<div class="top20">
							<div class="form-group" id="wrapper-name-first">
								<input type="text" class="form-control input-md" id="name_first" name="name_first" placeholder="Enter your first name" value="<?php echo set_value('name_first', !empty($requestor['name_first']) ? $requestor['name_first'] : null);?>" required>
								<span  id="signup-error-name_first"  class="text-danger align-center"><?php echo form_error('name_first'); ?></span>
							</div>
							<div class="form-group" id="wrapper-name-last">
								<input type="text" class="form-control input-md" id="name_last" name="name_last" placeholder="Enter your last name" value="<?php echo set_value('name_last', !empty($requestor['name_last']) ? $this->website_model->display_format_people_name_last($requestor['name_last']) : null);?>" required>
								<span  id="signup-error-name_last"  class="text-danger align-center"><?php echo form_error('name_last'); ?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-md" id="people_phone_mobile" name="people_phone_mobile" placeholder="Mobile Number" value="<?php echo set_value('people_phone_mobile', !empty($requestor['people_phone_mobile']) ? format_phone($requestor['people_phone_mobile']) : null);?>" required autocomplete="new-password">
								<span  id="signup-error-people_phone_mobile" class="text-danger align-center"><?php echo form_error('people_phone_mobile'); ?></span>
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-md" id="password" name="password" placeholder="Create Password" value="<?php echo set_value('password');?>" required autocomplete="new-password">
								<span id="signup-error-password" class="text-danger align-center"><?php echo form_error('password'); ?></span>
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-md" id="password_confirm" name="password_confirm" placeholder="Confirm Password" value="<?php echo set_value('password_confirm');?>" required>
								<span  id="signup-error-password_confirm"  class="text-danger align-center"><?php echo form_error('password_confirm'); ?></span>
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
			<?php }//end incomplete user check?>
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step <?php if(!$incomplete_user){?>active<?php }?>" id="item-step-recipientinfo" data-signupstep="info" data-position="<?= $step;?>">
				
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-parentinfo">
						<h2 class="text-center">Need: Family Info</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">Tell us about the family that you are requesting this need on behalf of.</p>
						<?php echo $this->session->flashdata('msg'); ?>
						
						<div class="top20">
							<div class="form-group" id="wrapper-name-first">
								<input type="text" class="form-control input-md" id="recipient_name_first" name="recipient_name_first" placeholder="Enter a parent's first name" value="<?php echo set_value('recipient_name_first', !empty($recipient['recipient_name_first']) ? $recipient['recipient_name_first'] : null);?>" required>
								<span  id="signup-error-recipient_name_last"  class="text-danger align-center"><?php echo form_error('recipient_name_last'); ?></span>
							</div>
							<div class="form-group" id="wrapper-name-last">
								<input type="text" class="form-control input-md" id="recipient_name_last" name="recipient_name_last" placeholder="Enter a parent's last name" value="<?php echo set_value('recipient_name_last', !empty($recipient['recipient_name_last']) ? $this->website_model->display_format_people_name_last($recipient['recipient_name_last']) : null);?>" required>
								<span  id="signup-error-recipient_name_last"  class="text-danger align-center"><?php echo form_error('recipient_name_last'); ?></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-md" id="recipient_email_primary" name="recipient_email_primary" placeholder="Email address (if known)" value="<?php echo set_value('recipient_phone_mobile', !empty($recipient['recipient_people_email_primary']) ? format_phone($recipient['recipient_people_email_primary']) : null);?>"  autocomplete="new-password">
								<span  id="signup-error-recipient_people_email_primary" class="text-danger align-center"><?php echo form_error('recipient_people_email_primary'); ?></span>
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control input-md" id="recipient_people_phone_mobile" name="recipient_people_phone_mobile" placeholder="Mobile Number" value="<?php echo set_value('recipient_people_phone_mobile', !empty($recipient['recipient_people_phone_mobile']) ? format_phone($recipient['recipient_people_phone_mobile']) : null);?>" required autocomplete="new-password">
								<span  id="signup-error-recipient_people_phone_mobile" class="text-danger align-center"><?php echo form_error('recipient_people_phone_mobile'); ?></span>
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control autocomplete-church bypass-modal" name="recipient_home_church" id="recipient_home_church" value="<?php echo set_value('home_church', !empty($recipient['home_church']) ? $recipient['home_church'] : null);?>" placeholder="Home Church (leave blank if none)" data-idtarget="id_home_church">
									<input type="hidden" name="recipient_id_home_church" id="recipient_id_home_church" value="<?php echo !empty($recipient['id_home_church']) ? $recipient['id_home_church'] : null;?>">
									<span  id="signup-error-recipient_home_church" class="text-danger"><?php echo form_error('recipient_home_church'); ?></span>
							</div>
							
							<div class="row top20 text-center">
								<button type="button"  class="btn btn-primary btn-md btn-slide btn-slide-next" id="btn-next-step-<?= $step;?>" name="btn-next-step-<?= $step;?>" data-curslide="<?= $step;?>">
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
						<p>It looks like the church you entered might already be in the system. We just want to confirm that this need will be associated with the correct church.</p>
						<p><strong>Not being linked to the correct church could slow down the fulfillment of the need!</strong></p>
						<p>If the family's church is not on this list then just select the option that says; "My church is not on this list".</p>
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
			<div class="item item-step" id="item-step-newchurch" data-signupstep="newchurch" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-newchurch">
						<h2 class="text-center">Confirm your church</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p>Before we add the family's church to Promise Serves please verify that we found the correct location of the church by selecting it from the list below.</p>
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
			<div class="item item-step" id="item-step-familymatch" data-signupstep="familymatch" data-position="<?= $step;?>">
				
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-familymatch">
						<h2 class="text-center">Family Match</h2>
						<p>It looks like this family might already be in the system. Please select the family from the list below if they are a match.</p>
						<p>Otherwise select the option that says; "This family is not on this list".</p>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<div class="top20">
							<table class="table table-responsive table-striped">
								<tbody>
									<tr>
										<td class="col-sm-2 col-xs-2" valign="middle" align="center">
											<input name="assign_primary" id="assign_primary" type="radio" class="radio-assign assign_primary_250" value="250" >
										</td>
										<td class="col-sm-10 col-xs-10">
											This family is not on this list above.
										</td>
									</tr>
							</tbody>
						</table>							
							
							
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
			<div class="item item-step" id="item-step-recipientaddress" data-signupstep="recipientaddress" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-recipientaddress">
						<h2 class="text-center">Enter the Family's Address</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">Please enter the family's home address so we can best match the need request with the volunteers in their area.</p>
						<div class="top20">
							<div class="form-group">
								<?php $recipient['use_proper_address'] = 1;?>
								<input type="text" id="place_address" name="recipient_place_address" class="form-control input-md input-select-on-focus" placeholder="Enter your full address" value="<?= set_value('place_address', !empty($recipient['place_street_number']) ? $this->website_model->get_full_address($recipient) : null);?>">
								<input type="hidden" name="recipient_place_street_number" id="place_street_number" value="<?= set_value('place_street_number', !empty($recipient['place_street_number']) ? $recipient['place_street_number'] : null);?>">
								<input type="hidden" name="recipient_place_street" id="place_street" value="<?= set_value('place_street', !empty($recipient['place_street']) ? $recipient['place_street'] : null);?>">
								<input type="hidden" name="recipient_place_city" id="place_city" value="<?= set_value('place_city', !empty($recipient['place_city']) ? $recipient['place_city'] : null);?>">
								<input type="hidden" name="recipient_place_state" id="place_state" value="<?= set_value('place_state', !empty($recipient['place_state']) ? $recipient['place_state'] : null);?>">
								<input type="hidden" name="recipient_place_zip" id="place_zip" value="<?= set_value('place_zip', !empty($recipient['place_zip']) ? $recipient['place_zip'] : null);?>">
								<input type="hidden" name="recipient_place_county" id="place_county" value="<?= set_value('place_county', !empty($recipient['place_county']) ? $recipient['place_county'] : null);?>">
								<input type="hidden" name="recipient_place_country" id="place_country" value="<?= set_value('place_country', !empty($recipient['place_country']) ? $recipient['place_country'] : null);?>">
								<input type="hidden" name="recipient_place_lat" id="place_lat" value="<?= set_value('place_lat', !empty($recipient['place_lat']) ? $recipient['place_lat'] : null);?>">
								<input type="hidden" name="recipient_place_lng" id="place_lng" value="<?= set_value('place_lng', !empty($recipient['place_lng'])? $recipient['place_lng'] : null);?>">
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
			<div class="item item-step" id="item-step-needinfo" data-signupstep="needinfo" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-needinfo">
						<h2 class="text-center">Describe the need</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						
						<div class="top20">
							<div class="form-group" id="wrapper-need-type">
								
								<span id="signup-error-need_type"  class="text-danger align-center"><?php echo form_error('need_type'); ?></span>
							</div>
						</div>

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
			
			
			<?php $step++;?>
			<div id="position-<?= $step;?>"></div>
			<div class="item item-step" id="item-step-agreement" data-signupstep="agreement" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-agreement" >
						<h2 class="text-center">Sign agreement</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						
						<div class="top20 force-overflow-y height-300" id="ajax-target-agreement-body-html">
							<?php 
							if(!empty($_SESSION['affiliate']['affiliate_agree_volunteer'])){ 
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
			<div class="item item-step" id="item-step-finish" data-signupstep="finish" data-position="<?= $step;?>">
				<div class="container">
					<div class="col-sm-8 col-sm-offset-2 well step step-<?= $step;?> step-finish" >
						<h2 class="text-center">Finished</h2>
						<span class="ajax-target-step-indicator"><?=  $this->signup_model->make_signup_step_icons($step_total,$step);?></span>
						<p class="text-center">
							<i class="fa fa-flag-checkered fa-5x" aria-hidden="true"></i>
						</p>
						<p class="text-center">Thank you for submitting this need to Promise Serves!</p>
						<p class="text-center">We will begin matching this need with volunteers in the family's area.</p>
						<p class="text-center">You will recieve email updates as the need progresses towards fulfillment.</p>
						
						
						<div class="form-group text-center top20">
							<a href="<?php echo $url_finish;?>" class="btn btn-primary btn-md btn-slide btn-slide-next btn-finish" id="btn-next" name="btn-next" data-curslide="<?= $step;?>" >
								<span id="btn-next-text">Finish</span>
							</a>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

		<input type="hidden" name="r" value="<?php echo $r;?>" />
		<input type="hidden" name="t" value="<?php echo $t;?>" />
		<input type="text" id="username" name="username" value="<?php echo  $item['people_email_primary'] != null ? $item['people_email_primary'] : null;?>" autocomplete="off" readonly="readonly" style="position:absolute; left: -999999999px;"/>
		<input type="text" class="input-fax-number" name="fax" value="" autocomplete="off" />
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>" >
		<input type="hidden" id="requestor_id_people_encoded" name="requesitor_id_people_encoded" value="<?php !empty($requestor['id_people_encoded']) ? $requestor['id_people_encoded']: null;?>">
		<input type="hidden" id="recipient_id_people_encoded" name="recipient_id_people_encoded" value="<?php !empty($requestor['id_people_encoded']) ? $requestor['id_people_encoded']: null;?>">
		<input type="hidden" id="id_family_encoded" name="id_family_encoded" value="<?php !empty($recipient['id_family_encoded']) ? $recipient['id_family_encoded'] : null;?>">
		<input type="hidden" id="id_need_encoded" name="id_need_encoded" value="<?= !empty($need['id_need_encoded']) ? $need['id_need_encoded'] : null;?>">
		<input type="hidden" name="id_affiliate" value="<?php echo $this->affiliates_model->get_active_affiliate_id();?>">
</div>
</form>
	
<div id="unusedslides"></div>
<!-- footer navigation -->
<?php echo $site_footer;?>
<!-- /footer navigation -->
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>

<script>	

	var clicked_prev = false;
	var clicked_next = false;
	var active_slide = 1;
	
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
			//console.log(place.address_components);
			
			document.getElementById('place_street_number').value = place.address_components[0].long_name;
			document.getElementById('place_street').value = place.address_components[1].long_name;
			document.getElementById('place_city').value = place.address_components[2].long_name;
			document.getElementById('place_state').value = place.address_components[4].short_name;
			document.getElementById('place_county').value = place.address_components[3].long_name;
			document.getElementById('place_country').value = place.address_components[5].short_name;
			document.getElementById('place_zip').value = place.address_components[6].long_name;
			document.getElementById('place_lat').value = place.geometry.location.lat();
			document.getElementById('place_lng').value = place.geometry.location.lng();
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
			//console.log(active_slide);
			//ps_signup_restore_slide('#item-step-selectchurch'); 
			ps_signup_restore_slides();
			clicked_prev = false;
		}
		if(clicked_next){
			//console.log('It just SLID next!! Did you see it????');
			//ps_signup_restore_slide('#item-step-newchurch'); 
			clicked_prev = false;
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
		$.blockUI({  css: { width: '40%', left: '30%', border: 'none',  backgroundColor:'transparent', color: '#fff'}, overlayCSS:  {color: '#fff'}, message: '<p class="text-center"><i class="fas fa-sync fa-spin fa-3x"></i></p><h3 class="text-center">Just a moment...</h3>' });
		//console.log('Signup: Processing This Step - '+slide_id+' '+query_add);
		ps_signup_carousel_state = 'processing';

		$.ajax({
		type: "POST",
		url:  getBaseUrl()+'needentries/save_submission_info?step='+slide_id+query_add,
		data: $('#form-serve-signup').serialize(),
		error: function (request, status, error) {
			$.unblockUI();
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