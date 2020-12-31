<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php

$id_people_encoded			= '';
 
if(!empty($item['id_people_encoded'])){
	$id_people_encoded		= $item['id_people_encoded'];
}

?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>Volunteers/list">
						Volunteers
					</a>
				</li>
				<li class="active">Edit Volunteer Request</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Volunteer Request</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
		<form class="form-horizontal" action="<?php echo base_url();?>people/save_volunteer_request" method="post" id="request_volunteer_form">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 well">
					<div class="row text-center">
						<h2>Would you like to share this volunteer?</h2>
					</div>
					<div class="row top40">
						<div class="col-sm-4 text-center">
							<?php $this->people_model->display_people_avatar($item);?>
							<h2 class="text-center" style="margin: 5px;"><?php echo $item['subject_name_first'].' '.$this->website_model->display_format_people_name_last($item['subject_name_last']);?></h2>
						</div>
						<div class="col-sm-4 text-center">
							<i class="fa fa-arrow-right fa-3x"></i>
						</div>
						<div class="col-sm-4 text-center">
							<?php $this->churches_model->display_church_avatar(array('church_name' => $item['target_church_name']));?>
							<h2 class="text-center" style="margin: 5px;"><?php echo $item['target_church_name'];?></h2>
						</div>	
					</div>
					<div class="row top40 text-center">
						<div class="container-fluid">
							<p>This will allow the advocate team at <?php echo $item['target_church_name'];?> to view and edit the contact information of this volunteer which will make them eligible to be placed on a care community at <?php echo $item['target_church_name'];?> if <?php echo $item['subject_name_first'];?> agrees.</p>
							<p><?php echo $item['subject_name_first'];?> will remain connected to your church but by agreeing to share this volunteer you understand that <?php echo $item['subject_name_first'];?> could be assigned to a team at <?php echo $item['target_church_name'];?>.</p>
							<p>Please be sure to confirm with the other members of your advocate team that <?php echo $item['subject_name_first'];?> is not already being considered for a care community at your church before proceeding.
							
							<p><strong><em>Do you wish to grant the advocate team at <?php echo $item['target_church_name'];?> access to this volunteer?</em></strong></p>
						</div>
					</div> 
					<div class="row top20">
						<div class="container-fluid">
							<textarea name="response_msg" class="form-control" cols="4" rows="10" placeholder="Include an optional message to <?php echo $item['requestor_name_first'].' '.$this->website_model->display_format_people_name_last($item['requestor_name_last']);?> with your response."></textarea>
						</div>
					</div>
					<div class="row top20">
						<div class="ln_solid"></div>
						<div class="col-sm-3 col-sm-offset-3 text-center">
								<button type="button" name="response" value="40" class="btn btn-response btn-success btn-lg col-sm-12">Yes</button>
						</div>
						<div class="col-sm-3 text-center">							
								<button type="button" name="response" value="24" class="btn btn-response  btn-primary btn-lg col-sm-12">No</button>
						</div>
						
					</div>
				</div>
			</div>
	
		  <input type="hidden" name="id_people_request_encoded" value="<?php echo url_enc($item['id_people_request']);?>" />
		  <input type="hidden" name="id_people_requestor_encoded" value="<?php echo url_enc($item['requestor_id_people']);?>" />
		  <input type="hidden" id="response" name="response" value="" />
		  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'people/list_church_volunteer_requests');?>" />
		</form>
		</div><!--/.row-->
</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
$('.btn-response').click(function(){
	$('#response').val($(this).val());
	$('#request_volunteer_form').submit();
});
</script>
</body>
</html>