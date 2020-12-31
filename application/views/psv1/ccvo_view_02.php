<?php echo $site_header;?>
<div class="container">
	<form class="form form-horizontal form-label-left blockui" action="<?php echo base_url();?>ccvo/?step=2" method="post" id="ps-ccvo-form">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="top10">
		
			<h1 class="text-center">Care Community Volunteer Orientation - Video 1 Quiz</h1>
			<?php echo $this->session->flashdata('msg'); ?>
			<?php 
				$required = '';
				foreach($quiz as $key => $val){ 
					if($key == $question){
			?>
			<div class="well col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
				<fieldset>
					<legend><?php echo $val['header'].' <br /><small>'.$val['sub_header'].'</small>';?></legend>
					<h3><?php echo $val['question'];?></h3>
					<ul class="list-unstyled gutter20">
					<?php 
						foreach($val['responses'] as $response){
							if($mode == 'ask'){
								$required = 'required';
								echo '<div class="row top40 well"><div class="col-sm-1 col-xs-2"><li class=""> <input name="'.$val['input_name'].'" type="'.$response['input_type'].'" value="'.$response['value'].'" '.$required.'></div><div class="col-xs-10 col-sm-11"><strong>'.$response['name'].'</strong></li></div></div>';
							}else{
								$icon = '<i class="fas fa-times fa-2x font-dgray"></i>';
								if($val['answer'] == $response['value']){
									$icon = '<i class="fas fa-check fa-2x "></i>';
								}
								
								echo '<div class="row top40 well"><div class="col-sm-1 col-xs-2"><li class="">'.$icon.'</div><div class="col-xs-10 col-sm-11"> <strong>'.$response['name'].'</strong></li></div></div>';
							}
							
						}
					?>
					</ul>
				</fieldset>	
			</div>
			<?php 
					}
				}
			?>
			<div class="row top30"></div>	
				<fieldset>
					<div class="form-group">
						<div class="col-sm-4 col-xs-4 col-sm-offset-4 col-xs-offset-4">
							<button type="submit" class="btn btn-primary btn-lg btn-block" name="save" value="1">Next <i class="fa fa-chevron-right"></i></button>
						</div>
					</div>
				</fieldset>
	
		</div>
		<input type="hidden" name="id_people_encoded" value="<?php echo !empty($user['id_people_encoded']) ? $user['id_people_encoded'] : null;?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
		<input type="hidden" name="quiz" value="1">
		<input type="hidden" name="q" value="<?php echo $question;?>">
		<input type="hidden" name="mode" value="<?php echo $mode;?>">
	</form>
</div>

<!-- footer navigation -->
<?php echo $site_footer;?>
<script src="<?php echo base_url();?>js/ccvo.js" type="text/javascript"></script>
<!-- /footer navigation -->