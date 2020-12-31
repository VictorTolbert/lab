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

			<li class="active">Resource File</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Resource File for Care Community Team Leaders</h1>
		</div>
	</div><!--/.row-->
		<div class="panel panel-container resources-advocate resources-advocate-internal">
			<div class="">
				<p style="text-align: left;">Please make hard copies of the following documents to review and give to the Care Community Team Leader in a physical file. &nbsp;In addition to providing hard copies of these documents, please also send these documents to the Team&nbsp;Leader electronically, as a pdf attachment via email. Encourage the Team Leader to keep both a data file and a physical file with all&nbsp;documents in one place.</p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/02/care-calendar-set-up.9-2018.pdf" target="_blank" rel="noopener noreferrer">Care Calendar Set-Up Instructions</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/02/resource-file-for-team-leaders.2019.pdf">Team Leader Resource File</a></p>
				<p style="text-align: center;">Documents found in the Team Leader Resource File pdf:</p>
				<p style="text-align: center;"><small>Care Community Team Leader Role Description<br>
														Care Community Team Leader Takeaway<br>
														Email | Team Leader's First Email To Care Community<br>
														Care Community One-Pager - Sample<br>
														Hosting A Care Community Meet &amp; Greet<br>
														Childcare and Respite Care Information<br>
														When A Foster Placement Ends<br>
														Email | Team Leader Weekly Email to Care Community
												</small>
				</p>
			</div>
			
			<div class="">
					<p style="text-align: left;">IMPORTANT:<br>
					While already emailing electronic files to your newly trained Team Leader, go ahead and&nbsp;include the <strong><a href="https://www.livethepromise.org/wp-content/uploads/2018/01/59.-foster-family-information-request.docx" target="_blank" rel="noopener noreferrer">Foster Family Information Request</a></strong>, filled in&nbsp;with information provided by the foster family. The Team Leader&nbsp;will need this information to set up the online care calendar.</p>
					<p style="text-align: left;">Also, for ease of use, attach this E-form so that it can easily saved and then sent to foster families utilizing childcare or respite care within their Care Community.<br>
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/things-to-know-about-me-respite-care-form.2019.pdf" target="_blank" rel="noopener noreferrer">E-Form: Childcare and Respite Care Info</a><br>
					<small>(This e-form can be saved in "print preview" to retain child's info in pdf format for later distribution.)</small></p>
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