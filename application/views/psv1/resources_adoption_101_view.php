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

			<li class="active">Adoption 101</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Adoption 101</h1>
		</div>
	</div><!--/.row-->

	<div class="panel panel-container resources-advocate">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<h3 style="text-align: center;"><span style=""><strong>Facilitating Adoption 101</strong></span></h3>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">Adoption 101 | Materials and Prep</h4>
				<hr>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/01.-adoption-101-facilitators-guide.pdf" target="_blank">Facilitators Guide</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-handout-adoption-vocabulary.pdf" target="_blank">Handout to Print | Adoption Vocabulary</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-handout-next-steps.2017.pdf" target="_blank">Handout to Print | Next Steps</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption101-response-card.2017.pdf" target="_blank">Form to Print | Adoption 101 Response Card</a><br><small>4.25 x 11 half-sheet, card stock</small></p>
				<p style="text-align: center;">&nbsp;</p>

				<h4 style="text-align: center;">Email | Prep for Adoption 101</h4>
				<hr>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-email-speaker-communication.docx" target="_blank">Adoption 101 Speaker Invite</a><br><small>Download in .doc format - copy &amp; paste into email, edit appropriately</small></p>
				<p style="text-align: center;">
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">Adoption 101 | Video Curriculum</h4>
				<hr>
				<p style="text-align: center;"><a href="https://vimeo.com/220083965/176064a797" target="_blank">Adoption 101 | Part 1 - Overview of Adoption</a></p>
				<p style="text-align: center;"><a href="https://vimeo.com/217497514/38d18127f9" target="_blank">Adoption 101 | Part 2 - International Adoption</a></p>
				<p style="text-align: center;"><a href="https://vimeo.com/217483308/cd1ae50734" target="_blank">Adoption 101 | Part 3 - Domestic Adoption</a></p>
				<p style="text-align: center;"><a href="https://vimeo.com/217486854/cf1f8652f3" target="_blank">Adoption 101 | The Smith's Story - Domestic Infant Adoption</a></p>
				<p style="text-align: center;"><a href="https://vimeo.com/220085245/8d41d2b24f" target="_blank">Adoption 101 | The Ryan's Story - Adoption from Foster Care</a></p>
				<p style="text-align: center;"><a href="https://vimeo.com/306377836?fbclid=IwAR115Lz62_naJTQOFf9HRDkHrI5hunM-FVXWO1ySwxcDWD0B01qhOECueRA" rel="noopener" target="_blank">The Zezulka's Story - Adoption from Foster Care</a><br><small>(Special thanks to Chosen For Life and Watkinsville FBC)</small></p>
				<p style="text-align: center;">&nbsp;</p>
				
				
				<h4 style="text-align: center;">Adoption 101 | "Next Steps" PowerPoint</h4>
				<hr>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/02.-adoption-101-16x9-next-steps-ppt.2017.pptx">Adoption 101 PPT | "Next Steps"</a></p>
				<p style="text-align: center;">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12 ">
				<hr id="line-break">
				
				<h3 style="text-align: center;"><span style=""><strong>Follow-up After Adoption 101</strong></span></h3>
				<p style="text-align: center;"></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/06.-adoption-101-attendees-spreadsheet.xlsx" target="_blank">Attendee Follow-Up Spreadsheet - Excel </a></p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">E-Mail Communication for Follow-Up</h4>
				<hr>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-email-general-response.docx" target="_blank">General Response</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-email-ready-or-not-study.docx" target="_blank">Offering a "Ready or Not" Study</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-email-adoption-grants.docx" target="_blank">Interest in an Adoption Grant</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-email-mentor-match.docx" target="_blank">Offering an Adoption Mentor</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/adoption-101-email-adoption-from-foster-care.docx" target="_blank">Adoption from Foster Care</a></p>
				<p style="text-align: center;"><small>Downloads in .doc format - copy &amp; paste into email, edit appropriately</small></p>
				<p style="text-align: center;">
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">E-Mail Attachments for Follow-Up</h4>
				<hr>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/2.-exploring-adoption-and-foster-care.pdf" target="_blank">Exploring Adoption and Foster Care</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2018/08/cpa-fact-sheet-8.2018.pdf" target="_blank">Adoption 101 | CPA Fact Sheet</a></p>
				<h4 style="text-align: center;">"Ready or Not" Study Guides</h4>
				<hr>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/rorn-6-week-study-guide.pdf" target="_blank">"Ready or Not" Study | 6 Weeks</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/05/rorn-8-week-study-guide.pdf" target="_blank">"Ready or Not" Study | 8 Weeks</a></p>
				<p style="text-align: center;">
				</p>
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
</style>
</body>
</html>