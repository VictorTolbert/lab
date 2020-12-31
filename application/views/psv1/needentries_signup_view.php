<?php echo $site_header; ?>
		
<div class="wrapper" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>');">
<div class="container">
	<form class="form form-vertical blockui" action="<?php echo base_url();?>signup/check_account" method="post" id="form-serve-signup">
		
		
		<div class="row top20 xs-top40">
			<div class="col-xs-10 col-xs-offset-1 col-sm-10">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 well signup-step-1-box">
					<div class="row">
						<div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 top20">
							<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
						</div>
					</div>
					<div class="row top20 xs-top10">
						<?php 
							
							switch(strtolower($set['set_type'])){
								case 'triage':
								case 'cc_triage':
									$img_church_avatar 		= $this->churches_model->get_church_avatar($set['id_church']);
									$img_church_affiliate 	= $this->affiliates_model->get_affiliate_logo($set['id_affiliate']);
									if(!empty($set['html_signup_start'])){
										echo $set['html_signup_starthtml_signup_start'];
									}else{
										echo '<h1 class="text-center">Meet The Need</h1>';
										if(!empty($img_church_avatar)){
											echo '<div class="col-xs-12 col-sm-12">
													<div class="col-sm-4 col-xs-4 col-sm-offset-2 col-xs-offset-2"><img src="'.$img_church_avatar.'" class="img-responsive block-center"></div>
													<div class="col-sm-4 col-xs-4"><img src="'.$img_church_affiliate.'" class="img-responsive center-block"></div>
												</div>';
										}
										echo '<div class="col-xs-12 col-sm-12"><p>'.$set['church_name'].' has partnered with '.$set['affiliate_name'].' to help meet the needs of vulnerable families during this time of crisis. Click to watch the video below and learn how you can help serve families in need.</p></div>';
										echo '<div class="col-xs-12 col-sm-12 top20 xs-top20"><div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">';
										echo '<a class="modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="How to Help Vulnerable Families" data-ajaxurl="'.base_url().'home/ajax_play_video?vid=113419218"><img src="'.base_url().'img/video_thumbs/signup_cc_triage_video_thumb.jpg" class="img-responsive"></a></div></div>';
										echo '<div class="col-xs-12 col-sm-12 top20 xs-top20"><h2 class="text-center">Ready to Get Started? Sign Up Below</h2></div>';
									}
										
								break;
								default:
									if(!empty($set['html_signup_start'])){
										echo $set['html_signup_starthtml_signup_start'];
									}else{
										echo '<h1 class="text-center">Submit a need</h1>';
										echo '<p class="text-center">You will need a Promise Serves account to submit a need.</p><p class="text-center">If you already have a Promise Serves account then please <a href="'.base_url('login/?r='.$r).'">click here to login</a>.</p> <p class="text-center">Otherwise please fill out the form below to begin the need submission process.</p>';
									}
								break;
							}
						?>
						<?php echo $this->session->flashdata('msg'); ?>
					</div>
					
					<div class="top20 xs-top10">
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="email" name="email" placeholder="Your Email" value="<?php echo set_value('email');?>" required>
							<span class="text-danger align-center"><?php echo form_error('email'); ?></span>
						</div>
						
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-next" name="btn-next"><span id="btn-next-text">Next <i class="fa fa-chevron-right"></i></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="r" value="<?php echo $r;?>" />
		<input type="hidden" name="t" value="<?php echo $t;?>" />
		<input type="text" name="fax" value="" style="display: none;" />
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
		<input type="hidden" name="id_affiliate" value="<?php echo $this->affiliates_model->get_active_affiliate_id();?>">
	</form>
</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>


<!-- /top navigation -->