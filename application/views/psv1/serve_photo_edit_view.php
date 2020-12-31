<?php echo $site_header;

$card_entry_view = false;
 ?>
<div class="container">
	
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg_error'); ?>
			<h1 class="text-center">Smile - Add Your Profile Picture</h1>
			<fieldset>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
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
									<i class="fa fa-user-circle fa-5x" aria-hidden="true"  class="center-block img-responsive img-circle" style="font-size: 200px;"></i>
						<?php }?>
							</div>
							<div id="profile-img-croppie-holder" class="hide">
							</div>
							<div id="profile-img-controls" >
								<div class="row" >
									<button class="btn btn-default btn-sm hide" id="rotate-left" data-rotate="-90"><i class="fa fa-rotate-left"></i></button>
									<button class="btn btn-default btn-sm hide" id="rotate-right" data-rotate="90"><i class="fa fa-rotate-right"></i></button>
								</div>
								<div class="row top10">
									<button class="btn btn-success upload-result hide" id="btn-upload-result" data-url="<?php echo base_url();?>upload/imageprofile?pe=<?php echo $item['id_people_encoded'];?>">Save Profile Picture</button>
									<label for="file-upload" class="custom-file-upload btn btn-primary" id="btn-upload">
										<i class="fa fa-image"></i> <span id="btn-upload-text"><?php echo $upload_btn_text;?>
									</label>
									<input id="file-upload" type="file"  accept="image/*;capture=camera" style="visibility: hidden;"/>
									
								</div>
								<div class="image-not-saved-error hide text-error">Please save your image first</div>
								<h2 class="text-center" style="margin: 5px;"><?php echo $item['name_first'].' '.$item['name_last'];?></h2>
							</div>	
						</div>
					</div>
				</fieldset>
			<form class="form form-horizontal form-label-left form-serve-photo" action="<?php echo base_url();?>people/save" method="post">				
					<div class="top30"></div>	
					<fieldset>
						<div class="form-group">
						<div class="col-xs-4 col-sm-4 col-xs-offset-4 col-sm-offset-4">
							<a href="<?php echo $redirect;?>" id="btn-next" class="btn btn-success btn-lg center-block" name="save" value="1">Next <i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-4 col-sm-4 col-xs-offset-4 col-sm-offset-4">
								<a class="btn btn-default btn-lg center-block " href="<?php echo $redirect;?>">Skip for now</a>
							</div>
						</div>
					</fieldset>

				<input type="hidden" name="id_people_encoded" value="<?php echo $item['id_people_encoded'];?>">
				<input type="hidden" id="unsaved-photo" name="unsaved_photo" value="0">
				<input type="hidden" name="name_first" value="<?php echo $item['name_first'];?>">
				<input type="hidden" name="name_last" value="<?php echo $item['name_last'];?>">
				<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
				<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
				
			</form>
		</div>
</div>



<!-- top navigation -->
<?php echo $site_footer;?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
<script>

$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});



</script>

<!-- /top navigation -->