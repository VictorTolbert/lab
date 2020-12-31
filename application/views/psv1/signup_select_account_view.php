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
					<div class="row top20 xs-top10 container-fluid">
						<h1 class="text-center">Which Account?</h1>
						<p>We found more than one account associated with that email address.</p>
						<p>Please select the account you wish to use for the signup process on Promise Serves.</p>
					</div>
					
					<div class="top20 xs-top10">
						<div class="form-group">
							<?php foreach($people as $peep){
								echo '<div class="well">
										<h3>'.$peep['name_first'].' '.$this->website_model->display_format_people_name_last($peep).'</h3>
										<p><strong> Email: </strong>'.format_email($peep['people_email_primary']).'</p>';
										
								if(!empty($peep['people_phone_mobile'])){
									echo '<p><strong> Mobile: </strong>xxx-xxx-'.substr($peep['people_phone_mobile'], -4,4).'</p>';
								}
								echo '<a class="btn btn-primary btn-lg btn-block" href="'.base_url().'signup/check_account/?fp='.url_enc($peep['id_people']).'&email='.$peep['people_email_primary'].'"><span id="btn-next-text">Use this Account <i class="fa fa-chevron-right"></i></span></a>
									</div>';
									
								}	
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="text" name="fax" value="" style="display: none;" />
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>


<!-- /top navigation -->