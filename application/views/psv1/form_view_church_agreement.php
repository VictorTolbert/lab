<?php echo $site_header; ?>
<!-- Print CSS  -->
<link rel="stylesheet" href="<?php echo base_url("css/print.css");?>" rel="stylesheet">
<div class="container">
	<form class="form" action="<?php echo base_url();?>form/saveagreement" method="post">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center"><?= $agreement['agreement_title'];?></h1>
				<?php if(!empty($_GET['show_print'])){ echo '<div class="row"><div class="col-sm-4 col-sm-offset-4 text-center hidden-print"><button class="btn btn-primary btn-block btn-lg" onclick="window.print();"><i class="fa fa-print fa-2x"></i> Print</button></div></div>'; }?>
				<div class="top20">
				<?php 
					if(!empty($agreement['agreement_text'])){
						echo $agreement['agreement_text'];
						echo $agreement['agreement_fields'];
					}elseif(!empty($_SESSION['affiliate']['affiliate_agree_church'])){ 
						echo $this->website_model->format_copy($_SESSION['affiliate']['affiliate_agree_church']); 
					}else{
				?>
					

					<p>I understand and agree to the above responsibilities for a supported church. I understand that any 
					church who does not abide by these standards will be reported and dismissed. </p>
					<p>A representative of the supported church must digitally sign this agreement by entering their full name below and clicking 'I agree'.</p>
					<p>By signing this agreement you are also agreeing to adibe by the <a href="<?php echo base_url();?>terms" target="_blank">Terms of Service</a> for this website.</p>
				<?php }?>
					
				</div>
			</div>
		</div>
		
		<?php  if(empty($agreement['signature']['id_signature']) && empty($hide_agree_button)){?>
		<div class="row top20">
			<div class="col-sm-4 col-sm-offset-4">
				<button type="submit" class="btn btn-primary btn-lg btn-block">I Agree</button>
			</div>
		</div>
		<?php }?>
		<div class="row top40">
		</div>
		<input type="hidden" name="id_church_encoded" value="<?php echo $id_church_encoded;?>">
		<input type="hidden" name="id_agreement_encoded" value="<?php echo $agreement['id_agreement_encoded'];?>">
		<input type="hidden" name="id_people_encoded" value="<?php echo $id_people_encoded;?>">
		<input type="hidden" name="agreement_type" value="<?php echo $agreement_type;?>">		
		<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>




<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->