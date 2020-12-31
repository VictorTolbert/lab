<?php echo $site_header;?>
<div class="container">
	<form class="form form-horizontal form-label-left blockui" action="<?php echo base_url();?>ccvo" method="post" id="ps-ccvo-form">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<h1 class="text-center">Care Community Volunteer Orientation - Video <?php echo $video_number;?></h1>
			<hr />
			<fieldset>
					<?php echo $instructions;?>
					<div class="ltp-video-wrapper border-light-gray" id="ps-vimeo-player">
						
					</div>
			</fieldset>	
			<div class="row top30"></div>	
			<fieldset>
				<div class="form-group">
					<div class="ps-ccvo-wrapper-btn-video">
						<div class="col-sm-3 col-xs-3 col-sm-offset-3 col-xs-offset-3">
							<button type="button" class="btn btn-primary btn-lg btn-block btn-video-play-toggle "  value="1"> <i class="fas fa-play"></i> Play</button>
						</div>
						<div class="col-sm-3 col-xs-3 ">
							<div class="dropdown" style="float: none; margin: 0px;">
								<button class="btn btn-secondary dropdown-toggle btn-block block btn-lg" type="button" data-toggle="dropdown">
									Download Resources
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="https://famresources.s3.amazonaws.com/Roles_in_a_Care_Community.pdf" target="_blank"><i class="fa fa-download"></i> Care Community Roles</a></li>
									<li><a href="https://famresources.s3.amazonaws.com/Handout_Connecting_When_Correcting.pdf" target="_blank"><i class="fa fa-download"></i> Connecting While Correcting</a></li>
									<!-- <li><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/handout-connecting-when-correcting.2019.pdf" target="_blank"><i class="fa fa-download"></i> Georgia RPPS Guidelines</a></li> -->
								</ul>
							</div>
						</div>
					</div>
					<br /><br /><button type="button" class="btn btn-primary btn-lg center-block" name="" value="1" onclick="ps_ccvo_vimeo_player.setCurrentTime(1363);">Cheat to End <i class="fa fa-chevron-right"></i></button>
				</div>
			</fieldset>
		</div>
		
		<input type="hidden" name="id_people_encoded" value="<?php echo !empty($user['id_people_encoded']) ? $user['id_people_encoded'] : null;?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
		<input type="hidden" name="mode" value="video">
		<input type="hidden" name="step" value="<?php echo $step;?>">
	</form>
</div>

<!-- footer navigation -->
<?php echo $site_footer;?>
<script>
var ps_ccvo_vid = '<?php echo $vimeo_id;?>';

</script>
<script type="text/javascript" src="https://player.vimeo.com/api/player.js"></script>
<script src="<?php echo base_url();?>js/ccvo.js" type="text/javascript"></script>
<!-- /footer navigation -->