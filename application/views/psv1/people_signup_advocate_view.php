<?php echo $site_header; ?>
		
<div class="wrapper" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>');">
<div class="container">
	<form class="form form-vertical" action="<?php echo base_url();?>advocate/signup" method="post" id="form-serve-signup">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		
		<div class="row top10">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="col-sm-8 col-sm-offset-2 well">
					
					<h1 class="text-center">Advocate Signup</h1>
					<p>If you already have a Promise Serves account then please <a href="<?php echo base_url('login/?r='.$r);?>">click here to login first</a>.</p>
					
					<?php echo $this->session->flashdata('msg'); ?>
					
					<div class="top20">
						<div class="form-group" id="wrapper-name-first">
							<input type="text" class="form-control input-lg" id="name_first" name="name_first" placeholder="Enter your first name" value="<?php echo set_value('name_first');?>" required>
							<span class="text-danger align-center"><?php echo form_error('name_first'); ?></span>
						</div>
						<div class="form-group" id="wrapper-name-last">
							<input type="text" class="form-control input-lg" id="name_last" name="name_last" placeholder="Enter your last name" value="<?php echo set_value('name_last');?>" required>
							<span class="text-danger align-center"><?php echo form_error('name_last'); ?></span>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" id="email" name="email" placeholder="Your Email" value="<?php echo set_value('email');?>" required>
							<span class="text-danger align-center"><?php echo form_error('email'); ?></span>
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Create Password" value="<?php echo set_value('password');?>" required>
							<span class="text-danger align-center"><?php echo form_error('password'); ?></span>
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" id="password_confirm" name="password_confirm" placeholder="Confirm Password" value="<?php echo set_value('password_confirm');?>" required>
							<span class="text-danger align-center"><?php echo form_error('password_confirm'); ?></span>
						</div>
						<div class="form-group">
							<?php 
								$church_item['required']				= 1;
								$church_item['show_single_church_name']	= 1;
								$church_item['bypass_security']			= 1;
								$church_item['force_limiters']			= 1;
								$church_item['status']					= 'active';
								$church_item['bypass_affiliate']		= 1;
								echo $this->website_model->input_menu_churches('id_home_church', '' , 'id_home_church', 'form-control input-lg', $church_item) ;?>
								<span class="text-danger"><?php echo form_error('home_church'); ?></span>
						</div>
						<div class="form-group">
							<select name="id_role" class="form-control input-lg" required>
								<option value="">Select Your Advocate Role</option>
								<option value="720">Campus Advocate</option>
								<option value="730">Lead Advocate</option>
								<option value="710">Member of Advocate Team</option>
							</select>
							<span class="text-danger"><?php echo form_error('id_role'); ?></span>
						</div>
						
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-next" name="btn-next"><span id="btn-next-text">Signup</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="r" value="<?php echo $r;?>" />
		<input type="hidden" name="t" value="<?php echo $t;?>" />
		<input type="text" name="fax" value="" style="display: none;" />
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>


<!-- /top navigation -->