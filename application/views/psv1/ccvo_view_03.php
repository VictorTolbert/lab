<?php echo $site_header;?>
<div class="container">
	<form class="form form-horizontal form-label-left blockui" action="<?php echo base_url();?>people/save" method="post">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<h1 class="text-center">Please Update Your Information</h1>
			<fieldset>
				<legend>Watch Video Segment</legend>
					<p>Please continue with the second part of the Care Community Volunteer Orientation Videos.</p>
					<div class="ltp-video-wrapper border-light-gray">
						<iframe src="https://player.vimeo.com/video/285629528?api=1&player_id=ps-ccvo-vimeo-player&controls=0" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="ps-ccvo-vimeo-player"></iframe>
					</div>
			</fieldset>
			<div class="row top30"></div>	
				<fieldset>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg center-block" name="save" value="1">Next <i class="fa fa-chevron-right"></i></button>
					</div>
				</fieldset>
	
		</div>
		<input type="hidden" name="id_people_encoded" value="<?php echo !empty($user['id_people_encoded']) ? $user['id_people_encoded'] : null;?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>

<!-- footer navigation -->
<?php echo $site_footer;?>
<script>
var ps_ccvo_vid = '285629528/9ffc44d255';

</script>
<script type="text/javascript" src="https://player.vimeo.com/api/player.js"></script>
<script src="<?php echo base_url();?>js/ccvo.js" type="text/javascript"></script>
<!-- /footer navigation -->