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
				<h1 class="text-center">Supported Family Agreement</h1>
				<?php if(!empty($_GET['show_print'])){ echo '<div class="row"><div class="col-sm-4 col-sm-offset-4 text-center hidden-print"><button class="btn btn-primary btn-block btn-lg" onclick="window.print();"><i class="fa fa-print fa-2x"></i> Print</button></div></div>'; }?>
				<div class="top20">
				<?php 
					if(!empty($_SESSION['affiliate']['affiliate_agree_family'])){ 
						echo $this->website_model->format_copy($_SESSION['affiliate']['affiliate_agree_family']); 
					}else{
				?>
					<p>This agreement must be signed by families that desire the support of a Care Community. </p> 

					 <p>Care Community volunteers can offer two basic levels of support:
					 <ol>
						<li><strong>Supervised Assistance</strong>: These volunteers support your family through bringing meals, doing light yard work or other small chores that do not involve unsupervised contact with the children in your home. They serve solely at your discretion under Reasonable and Prudent Parenting Standards (RPPS).</li>
					<li><strong>Unsupervised Assistance</strong>: These volunteers can have contact with the children in your care through roles such as babysitters or transporters where you as the parent may not be directly present. If you have a prior relationship with them, they must be properly informed about the children in your care, state disciplinary practices, and be discerning caregivers for those particular children. If you do not have a prior relationship with them, it is your responsibility and decision about which role(s) they can fulfill. </li>
					</ol>
					</p>

					<p>I understand my responsibilities as a parent, and I allow for a Care Community to serve my family and the children in my care.  I have read and am familiar with Reasonable and Prudent Parenting Standards.</p>
				<?php }?>
					<p>A representative of the supported family must digitally sign this agreement by entering their full name below and clicking 'I agree'.</p>
					<p>By signing this agreement you are also agreeing to adibe by the <a href="<?php echo base_url();?>terms" target="_blank">Terms of Service</a> for this website.</p>
				</div>
			</div>
		</div>
		<div class="row top20">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="col-sm-9">
				<?php 	
						if(!empty($family['agree_family_sign_name'])){
							echo '<strong>'.$family['agree_family_sign_name'].'</strong>'; 
						}else{
							echo '<input type="text" class="form-control" name="agree_family_sign_name" id="agree_family_sign_name" placeholder="Your Full Name As Signature" required>';
						}
					?>
					<span class="text-danger align-center"><?php echo form_error('agree_family_sign_date'); ?></span>
				</div>
				<div class="col-sm-3">
					<strong class="form-label">
						<?php 
							if(!empty($family['agree_family_sign_date'])){
								echo date('M d, Y', $family['agree_family_sign_date']);
							}else{
								echo date('M d, Y');
							}
								
						?>
					</strong>
				</div>
			</div>
		</div>
		<?php  if(empty($family['agree_family_sign_date'])){?>
		<div class="row top20">
			<div class="col-sm-4 col-sm-offset-4">
				<button type="submit" class="btn btn-primary btn-lg btn-block">I Agree</button>
			</div>
		</div>
		<?php }?>
		<div class="row top40">
		</div>
		<input type="hidden" name="id_family_encoded" value="<?php echo $family['id_family_encoded'];?>">
		<input type="hidden" name="agreement_type" value="family">
		<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>




<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->