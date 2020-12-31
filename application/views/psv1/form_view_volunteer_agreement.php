<?php echo $site_header; ?>
<!-- Print CSS  -->
<link rel="stylesheet" href="<?php echo base_url("css/print.css");?>" rel="stylesheet">
<div class="container">
	<form class="form" action="<?php echo base_url();?>form/savevolunteeragreement" method="post">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Volunteer Agreement</h1>
				<?php if(!empty($_GET['show_print'])){ echo '<div class="row"><div class="col-sm-4 col-sm-offset-4 text-center hidden-print"><button class="btn btn-primary btn-block btn-lg" onclick="window.print();"><i class="fa fa-print fa-2x"></i> Print</button></div></div>'; }?>
				<div class="top20">
				<?php 
					if(!empty($_SESSION['affiliate']['affiliate_agree_volunteer'])){ 
						echo $this->website_model->format_copy($_SESSION['affiliate']['affiliate_agree_volunteer']); 
					}else{
				?>
					<p>This agreement must be signed by volunteers that desire to serve children in foster care, by 
					supporting a foster family, through participating in a care community.  </p> 

					 <p>Care Community volunteers can offer two basic levels of support:
					 <ul>
						<li>Supervised Assistance: These volunteers are called “Family Helpers” who support the 
					family through bringing meals, doing light yardwork or other small chores that do not 
					involve unsupervised contact with the children. They serve solely at the discretion of the 
					foster parent, under Reasonable and Prudent Parenting Standards (RPPS).</li>
					<li>Unsupervised Assistance: These volunteers can spend unsupervised time with the 
					children in the foster family through roles such as babysitters, transporters and tutors, 
					when the parent may not be directly present. If a volunteer has a prior relationship with 
					the foster family, they may serve up to 3 times at the foster parent’s discretion before 
					they must complete various RPPS background checks required by the family’s 
					placement agency and be officially approved by the agency for service. If the volunteer 
					does not have a prior relationship with the family, he or she must be approved to serve 
					by the family’s placement agency before starting to serve the family.</li>
					</ul>
					</p>

					<p>I understand and agree to the above responsibilities for volunteer. I understand that any 
					volunteer who does not abide by these standards will be reported and dismissed. </p>
					
				<?php }?>
					<p>Volunteers must digitally sign this agreement by entering their full name below and clicking 'I agree'.</p>
					<p>By signing this agreement you are also agreeing to abide by the <a href="<?php echo base_url();?>terms" target="_blank">Terms of Service</a> for this website.</p>
				</div>
			</div>
		</div>
		<div class="row top20">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="col-sm-9">
				<?php 	
						if(!empty($people['vol_agree_sign_name'])){
							if(is_demo_site()){
								echo '<strong>Volunteer Signature</strong>';
							}else{
								echo '<strong>'.$people['vol_agree_sign_name'].'</strong>'; 
							}
						}else{
							echo '<input type="text" class="form-control" name="vol_agree_sign_name" id="vol_agree_sign_name" placeholder="Your Full Name As Signature">';
						}
					?>
					<span class="text-danger align-center"><?php echo form_error('password'); ?></span>
				</div>
				<div class="col-sm-3">
					<strong class="form-label">
						<?php 
							if(!empty($people['vol_agree_sign_date'])){
								echo date('M d, Y', $people['vol_agree_sign_date']);
							}else{
								echo date('M d, Y');
							}
								
						?>
					</strong>
				</div>
			</div>
		</div>
		<?php  if(empty($people['vol_agree_sign_date'])){?>
		<div class="row top20">
			<div class="col-sm-4 col-sm-offset-4">
				<button type="submit" class="btn btn-primary btn-lg btn-block">I Agree</button>
			</div>
		</div>
		<?php }?>
		<div class="row top40">
		</div>
		<input type="hidden" name="id_people_encoded" value="<?php echo $people['id_people_encoded'];?>">
		<input type="hidden" name="event_type" value="<?php echo $event_type;?>">
		<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
	</form>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this affiliate?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->