<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['affiliate_name'])){
		$name	.= ' '.$item['affiliate_name'];
}
if(empty($item['id_affiliate'])){
	$name .= ' New Affiliate';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';
?>
	
<div class="col-sm-12 main container">
	<div class="row">
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>dashboard">
					<em class="fa fa-home"></em>
				</a>
			</li>
	
			<li>
				<a href="<?php echo base_url();?>resources/advocate-resources">
					Advocate Resources
				</a>
			</li>

			<li class="active">Sample Text Email</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sample Text Email</h1>
		</div>
	</div><!--/.row-->

	<div class="col-sm-10 col-sm-offset-1">
		<div class="panel panel-container resources-advocate resources-advocate-internal">
			<div class="row">
				<p style="text-align: center;"><small>Copy and paste suggested text into email, making sure to edit content in bold/italics.</small></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Offering_a_Care_Community_to_a_New_Foster_Family.pdf" target="_blank">Email - Offering A Care Community To A New Foster Family</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Offering_a_Care_Community_to_an_Existing_Foster_Family.pdf" target="_blank">Email - Offering A Care Community To An Existing Foster Family</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Potential_Volunteers_for_a_Foster_Family_in_Your_Church.pdf" target="_blank">Email - Potential Volunteers For A Foster Family In Your Church</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Care_Community_Launch_for_a_Foster_Family_in_Your_Church.pdf" target="_blank">Email - Care Community Launch For A Foster Family In Your Church</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Potential_Volunteers_for_a_Foster_Family_Outside_Your_Church.pdf" target="_blank">Email - Potential Volunteers For A Foster Family Outside Your Church</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Care_Community_Launch_for_a_Foster_Family_Outside_Your_Church.pdf" target="_blank">Email - Care Community Launch For A Foster Family Outside Your Church</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Volunteer_Joining_an_Existing_Care_Community.pdf" target="_blank">Email - Volunteer Joining an Existing Team</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Volunteer_with_an_Immediate_Assignment.pdf" target="_blank">Email - Volunteer With Immediate Assignment</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Email_Volunteer_Waiting_for_Available_Assignment.pdf" target="_blank">Email - Volunteer Waiting For Available Assignment</a></p>
			</div>
		</div>
	</div>
</div>
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<style>
	.video-thumb{ text-align:center; border:solid 1px #ddd; padding:8px;}
	.resources-video-container h4{ text-align:center; }
	.resources-advocate a{font-weight: bold; padding-bottom: 20px;}
	.resources-advocate p{margin-bottom: 20px;}
	.resources-advocate .section-row{margin-top: 20px; margin-bottom: 20px;}
	.resources-advocate hr{ width: 60%;}
	.resources-advocate-internal{padding-left: 20%; padding-right: 20%;}
</style>
</body>
</html>