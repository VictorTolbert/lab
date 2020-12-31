<?php echo $site_header; ?>
<!-- Print CSS  -->
<link rel="stylesheet" href="<?php echo base_url("css/print.css");?>" rel="stylesheet">
<div class="container">
	<form class="form" action="<?php echo base_url();?>form/saveagreement" method="post">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Staff Agreement</h1>
				<?php if(!empty($_GET['show_print'])){ echo '<div class="row"><div class="col-sm-4 col-sm-offset-4 text-center hidden-print"><button class="btn btn-primary btn-block btn-lg" onclick="window.print();"><i class="fa fa-print fa-2x"></i> Print</button></div></div>'; }?>
				<div class="top20">
					<p>As a staff member of <?php echo $_SESSION['affiliate']['affiliate_name'];?> who uses Promise Serves website, I agree to the following in order to create and sustain a viable ministry: </p>
					<ul>
						<li>When utilizing Promise Serves, I will never use any of the contact information for any purpose outside of growing and sustaining the FAMs at our churches.</li>
						<li>I understand that Live The Promise is a network of churches and will strive to collaborate with local partner churches as often as possible.</li>
						<li>I will communicate with my leadership and Promise686 in a timely manner if I decide I can no longer be on staff at <?php echo $_SESSION['affiliate']['affiliate_name'];?>.</li>
					</ul>

					<p>I understand and agree to the above responsibilities for an affiliate staff member. I understand that any staff members who do not abide by these standards will be reported and dismissed. </p>

					<p>Staff members must digitally sign this agreement by entering their full name below and clicking 'I agree'.</p>
					<p>By signing this agreement you are also agreeing to abide by the <a href="<?php echo base_url();?>terms" target="_blank">Terms of Service</a> for this website.</p>
				</div>
			</div>
		</div>
		<div class="row top20">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="col-sm-9">
				<?php 	
						if(!empty($people['agree_staff_sign_name'])){
							if(is_demo_site()){
								echo '<strong>Staff Member Signature</strong>';
							}else{
								echo '<strong>'.$people['agree_staff_sign_name'].'</strong>'; 
							}
						}else{
							echo '<input type="text" class="form-control" name="agree_staff_sign_name" id="agree_staff_sign_name" placeholder="Your Full Name As Signature">';
						}
					?>
					<span class="text-danger align-center"><?php echo form_error('agree_staff_sign_date'); ?></span>
				</div>
				<div class="col-sm-3">
					<strong class="form-label">
						<?php 
							if(!empty($people['agree_staff_sign_date'])){
								echo date('M d, Y', $people['agree_staff_sign_date']);
							}else{
								echo date('M d, Y');
							}
								
						?>
					</strong>
				</div>
			</div>
		</div>
		<?php  if(empty($people['agree_family_sign_date'])){?>
		<div class="row top20">
			<div class="col-sm-4 col-sm-offset-4">
				<button type="submit" class="btn btn-primary btn-lg btn-block">I Agree</button>
			</div>
		</div>
		<?php }?>
		<div class="row top40">
		</div>
		<input type="hidden" name="id_people_encoded" value="<?php echo $people['id_people_encoded'];?>">
		<input type="hidden" name="agreement_type" value="staff">
		<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>




<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->