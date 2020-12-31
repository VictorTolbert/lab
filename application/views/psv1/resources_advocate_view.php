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

switch($this->affiliates_model->get_active_affiliate_id()){
	case 4:
		$rnoun	= 'Welcomed';
	break;
	default:
		$rnoun	= '<?= $rnoun;?>';
	break;
}
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
						Resources
				</li>
				
				<li class="active">Advocate Resources</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Advocate Resources</h1>
			</div>
		</div><!--/.row-->

	<div class="panel panel-container resources-advocate">
		<h3>Advocate Resources</h3>
		<h2 style="text-align: center;"><span style="">Getting Started</span></h2>
		<p style="text-align: center;"><big><big><strong>Welcome <?= $rnoun;?> Church Advocates!</strong></big></big></p>
		<?php switch($this->affiliates_model->get_active_affiliate_id()){
			case 1:?>
			<div class="well col-sm-6 col-sm-offset-3">
				<p style="text-align: center;"><big><strong>→  Below are additional documents specific to Alabama Advocates ←</strong></big></p>
				<section class="col-sm-12">
					<h4 style="text-align: center;">For Alabama Only - Montgomery County</h4>
					<hr>
					<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/07/montgomery-dhs-paperwork-instructions.pdf" target="_blank" rel="noopener noreferrer">Instructions: Montgomery County Paperwork</a></p>
					<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/02/ltp-vol-app-2.2017-2.pdf" target="_blank" rel="noopener noreferrer">LTP Volunteer Application</a></p>
					<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/07/montgomery-county-dhr-volunteer-paperwork.pdf" target="_blank" rel="noopener noreferrer">Montgomery: Child Mentor Forms</a></p>
				</section>
			</div>
				
	<?php 	break;
			case 12:?>
			<div class="well col-sm-6 col-sm-offset-3">
				<p style="text-align: center;"><big><strong>→  Below are additional documents specific to Fostering The Family ←</strong></big></p>
				<section class="col-sm-12">
					<img src="<?= base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="center-block img-responsive" style="max-height: 100px;">
					<hr>
					<p style="text-align: center;">
						<a href="https://www.livethepromise.org/wp-content/uploads/2019/03/ftf-ltp-sc-church-partnership-agreement.docx" target="_blank" rel="noopener noreferrer">FtF | LTP SC Church Partnership Agreement</a>
					</p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/03/ftf-advocate-agreement.pdf" target="_blank" rel="noopener noreferrer">FtF | Advocate Agreement</a></p>
					<p>&nbsp;<br>
					</p><h4 style="text-align: center;"><b>FtF Advocates</b></h4>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/11/ftf-sc-childcare-policy-1.docx" target="_blank" rel="noopener noreferrer">FtF | SC Childcare Policy</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/03/ftf-cc-volunteer-information-form.pdf" target="_blank" rel="noopener noreferrer">FtF | Care Community Volunteer Information</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/11/ftf-volunteer-agreement-1-2.docx" target="_blank" rel="noopener noreferrer">FtF | Volunteer Agreement</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/11/59.-foster-family-information-request-ftf.docx">FtF | Foster Family Information Request</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/11/3.-map-ministry-action-plan.2019ftf.docx">FtF | Ministry Action Plan (MAP)</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/11/sledcatchformfillable-1.pdf">FtF | SC Criminal Record Check</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/11/basics-of-foster-care-ftf.docx">FtF | Basics of Foster Care</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/11/next-stepsftf-1.docx">FtF | Next Steps</a></p>
				</section>
			</div>
		<?php break;
			case 14:?>
			<div class="well col-sm-6 col-sm-offset-3">
				<p style="text-align: center;"><big><strong>→  Below are additional documents specific to Olive Crest ←</strong></big></p>
				<section class="col-sm-12">
					<img src="<?= base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="center-block img-responsive" style="max-height: 100px;">
					<hr>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/03/olive-crest-ce-volunteer-discipline-guidelines-2019.pdf" target="_blank" rel="noopener noreferrer">Olive Crest | CE Volunteer Discipline Guidelines</a></p>
					<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/04/olive-crest-supported-family-agreement-2019.docx" target="_blank" rel="noopener noreferrer">Olive Crest | Supported Family Agreement</a></p>
				</section>
			</div>
		<?php break;		
			case 18:?>
			<div class="well col-sm-6 col-sm-offset-3">
				<p style="text-align: center;"><big><strong>→  Below are additional documents specific to Fostering Joy ←</strong></big></p>
				<section class="col-sm-12">
					<img src="<?= base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="center-block img-responsive" style="max-height: 100px;">
					<hr>

					<p style="text-align:center"><a rel="noreferrer noopener" aria-label="KVC Levels of Care (LOC) and Rates (opens in a new tab)" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-rates-and-level-of-care-loc-8.17.18.docx" target="_blank">KVC Levels of Care (LOC) and Rates</a> </p>



					<p style="text-align:center"> <a rel="noreferrer noopener" aria-label="KVS Driver Volunteer Agreement (opens in a new tab)" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-kvc-driver-volunteer-agreement-09.11.2017.docx" target="_blank">KVS Driver Volunteer Agreement</a></p>



					<h4 style="text-align:center"><strong>Fostering Joy Advocates</strong></h4>



					<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-next-steps-following-the-advocate-clinic.pdf" target="_blank" rel="noreferrer noopener" aria-label="Next Steps Following the Advocate Clinic (opens in a new tab)">Next Steps Following the Advocate Clinic</a></p>



					<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-fjmap.pdf" target="_blank" rel="noreferrer noopener" aria-label="Fostering Joy - Ministry Action Plan (MAP) (opens in a new tab)">Fostering Joy - Ministry Action Plan (MAP)</a></p>



					<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-3-church-comparison.pdf" target="_blank" rel="noreferrer noopener" aria-label="3 Church Comparison (opens in a new tab)">3 Church Comparison</a></p>



					<h4 style="text-align:center"><strong>Care Community Volunteers</strong></h4>



					<p style="text-align:center"><a rel="noreferrer noopener" aria-label="Care Community Model - Handout (opens in a new tab)" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-ccmodel.pdf" target="_blank">Care Community Model</a></p>



					<p style="text-align:center"><a rel="noreferrer noopener" aria-label="Roles In A Care Community (opens in a new tab)" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-roles-in-a-care-community.pdf" target="_blank">Roles In A Care Community</a></p>



					<p style="text-align:center"> <a rel="noreferrer noopener" aria-label="Connecting When Correcting - Handout (opens in a new tab)" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-connecting-when-correcting.pdf" target="_blank">Connecting When Correcting</a></p>



					<p style="text-align:center"><a rel="noreferrer noopener" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-volunteer-agreement.pdf" target="_blank">Fostering Joy Volunteer Agreement</a></p>



					<h4 style="text-align:center"><strong>Supported Foster Families</strong></h4>



					<p style="text-align:center"><a rel="noreferrer noopener" aria-label="Fostering Joy Supported Family Agreement (opens in a new tab)" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-supported-family-agreement.pdf" target="_blank">Fostering Joy Supported Family Agreement</a> </p>



					<p style="text-align:center"><a rel="noreferrer noopener" aria-label="Foster Family Information Request (opens in a new tab)" href="https://www.livethepromise.org/wp-content/uploads/2019/02/fj_2019-foster-family-information-request.pdf" target="_blank">Foster Family Information Request</a></p>


				</section>
				
				
			</div>
		<?php break;		
			case 4:?>
			<div class="well col-sm-6 col-sm-offset-3">
				<p style="text-align: center;"><big><strong>→  Below are additional documents specific to Welcomed ←</strong></big></p>
				<section class="col-sm-12">
					<img src="<?= base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="center-block img-responsive" style="max-height: 100px;">
					<hr>

						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/08/wi-addendum-to-new-orientation-videos.pdf" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Addendum to Volunteer Orientation Videos</a></p>

						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/12/welcomed-volunteer-application.pdf" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Welcomed Volunteer Application</a></p>


						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/08/welcomed-volunteer-agreement.pdf" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Welcomed Volunteer Agreement</a></p>


						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/12/welcomed-care-community-roles.pdf" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Welcomed Care Community Roles</a></p>

						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/08/welcomed-care-community-basics.docx" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Welcomed Care Community Basics</a></p>

						<p style="text-align:center"><a href="https://vimeo.com/355556437/90af1067d6" target="_blank" rel="noreferrer noopener" aria-label="Welcomed Video (opens in a new tab)">Welcomed Video</a></p>

						<p style="text-align:center"><a href="https://vimeo.com/355550275/7d6cc171fa" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">The Jump Story - Andrew Schneidler - Foster Movement Video</a></p>

						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/08/volunteer-response-card.docx" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)"> Volunteer Response Card</a></p>

						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/08/care-community-sign-up.docx" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Care Community Sign-Up</a></p>

						<p style="text-align:center"><a href="https://www.livethepromise.org/wp-content/uploads/2019/08/family-contact-information-sheet-fillable.docx" target="_blank" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Family Contact Information Sheet - fillable</a></p>

						<p style="text-align:center"><a href="<?php echo base_url();?>resources/view/?id_vimeo=355550854/46f36d4b87" target="_self" rel="noreferrer noopener" aria-label=" (opens in a new tab)">Welcomed CC Testimony Video<br></a><br><br><br><br></p>
				</section>
			</div>
				
		<?php break;
				case 7:?>
			<div class="well col-sm-6 col-sm-offset-3">
				<p style="text-align: center;"><big><strong>→  Below are additional documents specific to Florida 1.27 ←</strong></big></p>
				<section class="col-sm-12">
					<img src="<?= base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="center-block img-responsive" style="max-height: 100px;">
					<hr>
					<p style="text-align: center;">
						<a href="http://livethepromise.org/wp-content/uploads/2020/02/care-community-roles.pdf" target="_blank" rel="noopener noreferrer">Florida 1.27 Care Community Model</a>
					</p>
					<p style="text-align: center;">
						<a href="https://www.livethepromise.org/wp-content/uploads/2019/02/fl_connecting-when-correcting-handout.pdf" target="_blank" rel="noopener noreferrer">Florida 1.27 Connecting When Correcting Handout</a>
					</p>
				</section>
			</div>	
	
				
		<?php break;
			case 20:?>
			<div class="well col-sm-6 col-sm-offset-3">
				<p style="text-align: center;"><big><strong>→  Below are additional documents specific to Comission 1.27 ←</strong></big></p>
				<section class="col-sm-12">
					<img src="<?= base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="center-block img-responsive" style="max-height: 100px;">
					<hr>
					<p style="text-align: center;">
						<a href="http://livethepromise.org/wp-content/uploads/2020/02/awareness-cheat-sheet.docx" target="_blank" rel="noopener noreferrer">Awareness Cheat Sheet</a>
					</p>
					<p style="text-align: center;">
						<a href="http://livethepromise.org/wp-content/uploads/2020/02/foster-parent-guide-2019.pdf" target="_blank" rel="noopener noreferrer">Foster Parent Guide 2019</a>
					</p>
					<p style="text-align: center;">
						<a href="http://livethepromise.org/wp-content/uploads/2020/02/orientation-cheat-sheet.c127.2019.pdf" target="_blank" rel="noopener noreferrer">Orientation Cheat Sheet</a>
					</p>
					<p style="text-align: center;">
						<a href="http://livethepromise.org/wp-content/uploads/2020/02/orientation-required-handout.pdf">Orientation - Required Handout</a>
					</p>
					<p style="text-align: center;">
						<a href="http://livethepromise.org/wp-content/uploads/2020/02/roles-modelc127.pdf">Care Community Model - Roles</a>
					</p>
				</section>
			</div>	
	
		<?php break;?>
		<?php } //end switch?>
		<div class="row top40">
		</div>

		<div class="row section-row top40">
			<div class="col-sm-6 col-xs-12 ">
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/next-steps-following-the-advocate-clinic_2019.pdf" target="_blank" rel="noopener noreferrer">Next Steps Following The Advocate Clinic</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/determining-the-focus-of-your-fam.2019.pdf" target="_blank" rel="noopener noreferrer">Determining The Focus Of Your FAM</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Prayer_Guide_for_Church_Advocates.pdf" target="_blank" rel="noopener noreferrer">Prayer Guide for Church Advocates</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Spiritual_Preparation_for_Ministry.pdf" target="_blank" rel="noopener noreferrer">Spiritual Preparation for Ministry</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Setting_Goals.pdf" target="_blank" rel="noopener noreferrer">Setting Goals</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Setting_Goals.pdf" target="_blank" rel="noopener noreferrer">Setting Goals</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Establishing_Your_FAM.pdf" target="_blank" rel="noopener noreferrer">Establishing Your FAM</a>
				</p>
			</div>

			<div class="col-sm-6 col-xs-12 ">
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/The_Role_of_Lead_Advocate.pdf" target="_blank" rel="noopener noreferrer">The Role Of Lead Advocate</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Growing_a_Strong_Advocate_Team.pdf" target="_blank" rel="noopener noreferrer">Growing A Strong Advocate Team</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Roles_within_a_Church_Advocate_Team.pdf" target="_blank" rel="noopener noreferrer">Roles Within A Church Advocate Team</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Creating_a_Ministry_Action_Plan_(MAP).pdf" target="_blank" rel="noopener noreferrer">Creating a MAP (Ministry Action Plan)</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Launching_a_Care_Community_beginning_with_Awareness.pdf" target="_blank" rel="noopener noreferrer">Launching a Care Community beginning with Awareness</a>
				</p>
			</div>

		</div>
		<hr id="line-break" />
		<div class="row section-row">
			<div class="col-sm-12 col-xs-12 ">
				<h2 style="text-align: center;"><span style="">Creating Awareness</span></h2>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Creating_Awareness_Overview.pdf" target="_blank" rel="noopener noreferrer">Creating Awareness Overview</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Engaging_Volunteers_in_a_FAM-_flowchart.pdf" target="_blank" rel="noopener noreferrer">Engaging Volunteers in a FAM - flowchart</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Promoting_Awareness_in_Your_Church.pdf" target="_blank" rel="noopener noreferrer">Creating Foster Care Awareness - Event Promotion </a>
					<br />
					<small>(Scripture texts supporting orphan ministry and sample promo text)</small>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Hosting_a_FAM_Awareness_Event.pdf" target="_blank" rel="noopener noreferrer">Hosting a FAM Awareness Event</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2018/01/common-abbreviations-used-in-foster-care.pdf" target="_blank" rel="noopener noreferrer">Foster Care - Common Abbreviations and Terms</a>
				</p>
			</div>
		</div>
		<div class="row section-row">
			<div class="col-sm-6 col-xs-12 ">
				<h2 style="text-align: center;">Awareness Events | LTP Video Resources</h2>
				<hr />
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=238990713" rel="noopener noreferrer">Promise686 Animation: <strong>Bringing Them Home</strong></a> <small>(3:50)</small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=113419218" rel="noopener noreferrer">Video Animation: <strong><?= $rnoun;?></strong></a> <small>(2:22)</small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=303786920" rel="noopener noreferrer">Video Clip: <strong>Care Communities | Why Support A Foster Family?</strong></a> <small>(1:20)</small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=341030944" rel="noopener noreferrer">Video Clip: <strong>How Care Communities Support Families</strong></a> <small>(2:05)</small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=107001349" rel="noopener noreferrer">Video Testimony: <strong>LTP Care Communities - The Peters Family</strong></a> <small>(3:58)</small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=221928895" rel="noopener noreferrer">Video Testimony: <strong>A Promise Story - The Masters Family</strong></a> <small>(4:50)</small>
				</p>
				<p style="text-align: center;">
					<a href="https://www.youtube.com/watch?v=-2ScCFKi_5A&amp;feature=youtu.be" target="_blank" rel="noopener noreferrer">Video Testimony: <strong>Care Communities - Fostering Joy Network</strong></a> <small>(4:30)</small>
				</p>
				<p style="text-align: center;">
					<em><strong>NEW! </strong></em><a href="<?php echo base_url();?>resources/view/?id_vimeo=306377836&fbclid=IwAR115Lz62_naJTQOFf9HRDkHrI5hunM-FVXWO1ySwxcDWD0B01qhOECueRA" rel="noopener noreferrer"><strong>The Zezulka Adoption Story</strong></a> <small>(16:03)</small><br />
					<small>(A family served by a CC! As seen on ABC News, "Ellen," and other news outlets...)</small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=192183606" rel="noopener noreferrer">Video Testimony: <strong>Growing Up In Foster Care</strong></a> <small>(3:46)</small><br /> <small>Password: livethepromise | <strong>note:</strong> <em>sensitive material, discretion advised</em></small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=141287371" rel="noopener noreferrer">Awareness Video: <strong>Foster Care Montage</strong> </a> <small>(4:15)</small>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=144518109" target="_self" rel="noopener noreferrer">Foster Care Allegory: <strong>Out From The Mire | An Allegory</strong></a> <small>(4:47)</small><br /><small>Password: sailboat</small>
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h2 style="text-align: center;">Awareness Events | LTP Awareness Resources</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/05/2019_ltp-foster-care-awareness.pptx" target="_blank" rel="noopener noreferrer">LTP PPT: <strong>Foster Care Awareness Event PPT Presentation–2019</strong></a>
				</p>
				<hr />
				<p style="text-align: center;">
						<a href="https://livethepromise.org/wp-content/uploads/2017/01/ltp-vol-response-card.2017.pdf" target="_blank" rel="noopener noreferrer">Printable: LTP Volunteer Response Card</a><br /><small>Print on white 8" x 11" card stock, cut in half lengthwise</small>
				</p>
				<p style="text-align: center;">
						<a href="https://www.livethepromise.org/wp-content/uploads/2019/07/2019-handout-the-basics-of-foster-care.docx" target="_blank" rel="noopener noreferrer">Printable: The Basics of Foster Care - Awareness Event Handout</a><br /><small>Add "Next Steps" and "Upcoming Events" in fields provided</small>
				</p>
				<p style="text-align: center;">
						<a href="https://www.livethepromise.org/wp-content/uploads/2019/07/2019_ltp-full-sheet-cc-model.pdf" target="_blank" rel="noopener noreferrer">Printable: Care Community Model 8" x 11"</a>
				</p>
				<p style="text-align: center;">
						<a href="https://www.livethepromise.org/wp-content/uploads/2019/07/2019-cc-model-halfsheet-creating-awareness.pdf" target="_blank" rel="noopener noreferrer">Printable: Care Community Model and Awareness Half-Sheet</a><br /><small>Print as double-sided document on "Statement" sized card stock (5.5" x 8.5")</small>
				</p>
				<p style="text-align: center;">
						<a href="https://www.livethepromise.org/wp-content/uploads/2018/10/orphan_sunday_prayer_guide_2018.doc">Printable: Orphan Sunday Prayer Guide</a><br /><small>Edit if desired and print double-sided on "Statement" sized card stock (5.5" x 8.5").</small>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Facilitating_an_Effective_Panel_Discussion.pdf" target="_blank" rel="noopener noreferrer">Facilitating an Effective Panel Discussion</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/08/possible-panelist-questions.pdf" target="_blank" rel="noopener noreferrer">Possible Panelist Questions</a>
				</p>
			</div>
		</div>

		<div class="row section-row">
			<div class="col-sm-4 col-xs-12 ">
				<h2 style="text-align: center;">Awareness Events | Movie Events</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Hosting_a_Movie_Awareness_Event_ReMoved_and_Remember_My_Story.pdf" target="_blank" rel="noopener noreferrer">Hosting a Movie Awareness Event | “ReMoved” and “Remember My Story”</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Hosting_a_Movie_Awareness_Event_Mully_.pdf" target="_blank" rel="noopener noreferrer">Hosting a Movie Awareness Event - “Mully”</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Hosting_a_Movie_Awareness_Event_Dropbox.pdf" target="_blank" rel="noopener noreferrer">Hosting a Movie Awareness Event - “The Dropbox”</a>
				</p>
				<p style="text-align: center;">
						<a href="https://famresources.s3.amazonaws.com/Hosting_A_Movie_Awareness_Event_From_The_Mire.pdf" target="_blank" rel="noopener noreferrer">Hosting A Movie Awareness Event | “From The Mire”</a>
				</p>

			</div>

			<div class="col-sm-4 col-xs-12 ">
				<h2 style="text-align: center;">Awareness Events | Ready Or Not</h2>
				<hr />
				<p style="text-align: center;">
						<a href="https://famresources.s3.amazonaws.com/Hosting_a_Ready_or_Not_Small_Group_Study.pdf" target="_blank" rel="noopener noreferrer">Hosting a “Ready or Not” Small Group Study</a>
				</p>
				<p style="text-align: center;">
						<a href="https://livethepromise.org/wp-content/uploads/2016/08/ready-or-not-guide.6.pdf" target="_blank" rel="noopener noreferrer"><small>Ready or Not | Leader's Guide (6-Week Study)</small></a>
				</p>
				<p style="text-align: center;">
						<a href="https://livethepromise.org/wp-content/uploads/2016/08/ready-or-not-guide.8.pdf" target="_blank" rel="noopener noreferrer"><small>Ready or Not | Leader's Guide (8-Week Study)</small></a>
				</p>
				<p style="text-align: center;">
						<a href="https://www.amazon.com/Ready-Not-Discovery-Adoptive-Parents/dp/0692217940" target="_blank" rel="noopener noreferrer">To Order: "Ready or Not"</a>
				</p>
				<p style="text-align: center;"><small>Email pparish@connectionshomes.org for quantities of 10+.<br />Discount available for LTP Advocates, shipping not included<br />3-4 weeks for delivery</small></p>

			</div>

			<div class="col-sm-4 col-xs-12 ">
				<h2 style="text-align: center;">Awareness Events | Other Ideas</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Hosting_a_Service_Project.pdf" target="_blank" rel="noopener noreferrer">Hosting A Service Project</a>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/adoption101" target="_blank" rel="noopener noreferrer">Adoption 101</a>
				</p>
				<h2 style="text-align: center;">Awareness Event | Email Follow-Up</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/follow-up-to-awareness-event-attendees.2019.pdf" target="_blank" rel="noopener noreferrer">Awareness Event Follow-Up Email</a>
				</p>
				
			</div>
		</div>
		
		<hr id="line-break" />
	
		<div class="row section-row">
			<div class="col-xs-12 ">
				<h2 style="text-align: center;"><span style="">Adoption 101</span></h2>
				<p style="text-align: center;"><em>NEW!</em> Click <a href="<?php echo base_url();?>resources/adoption101" rel="noopener noreferrer">HERE</a> for video curriculum, print materials, and a step-by-step guide to facilitating "Adoption 101" at your church!</p>
			</div>
		</div>
		
		<hr id="line-break" />
		<div class="row section-row">
			<h2 style="text-align: center;"><span style="">Equipping <?= $rnoun;?> Volunteers</span></h2>
		</div>
		<div class="row section-row">
			<div class="col-sm-4 col-xs-12 ">
				<h2 style="text-align: center;">Developing Volunteers</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Recruiting_Volunteers.pdf" target="_blank" rel="noopener noreferrer">Recruiting Volunteers</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Equipping_Volunteers.pdf" target="_blank" rel="noopener noreferrer">Equipping Volunteers</a><br /><small>Hosting a Care Community Volunteer Orientation</small>
				</p>
				<p style="text-align: center;">
						<a href="https://famresources.s3.amazonaws.com/Counseling_and_Releasing_Volunteers.pdf" target="_blank" rel="noopener noreferrer">Counseling and Releasing Volunteers</a>
				</p>
			</div>
			<div class="col-sm-4 col-xs-12 ">

				<h2 style="text-align: center;">Volunteer Orientation</h2>
				<hr />
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=285148314" target="_self" rel="noopener noreferrer">Video: Care Community Vol. Orientation | Part 1</a>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=285629528" target="_self" rel="noopener noreferrer">Video: Care Community Vol. Orientation | Part 2</a>
				</p>
				<p style="text-align: center;"><small><strong>Password for volunteer videos: <mark>*LTP2019*</mark></strong></small><br /><small>If "Download" button is not visible, please clear browser history, re-enter video password, and the download option should reappear.</small> <small><a href="https://www.computerhope.com/issues/ch000510.htm" target="_blank" rel="noopener noreferrer">How to clear browser history?</a></small>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/ccvo-videos-advocates-guide.2019.pdf" target="_blank" rel="noopener noreferrer">CC Volunteer Orientation - Advocate's Guide</a>
				</p>
			</div>
			<div class="col-sm-4 col-xs-12 ">
				<h2 style="text-align: center;">Vol. Orientation | LTP Resources</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2018/08/ltp-volunteer-information-2018.pdf" target="_blank" rel="noopener noreferrer">CC Volunteer Info Form</a><br /><small>Applicable Agency Volunteer Forms found below</small>
				</p>
				<p style="text-align: center;">
					<em><strong><small>REQUIRED!</small></strong></em><a href="https://www.livethepromise.org/wp-content/uploads/2019/07/2019_ltp-volunteer-agreement-sample.pdf" target="_blank" rel="noopener noreferrer">LTP Volunteer Agreement–SAMPLE</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/handout-roles-in-a-care-community.2019.pdf" target="_blank" rel="noopener noreferrer">Handout: Roles In A Care Community</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/handout-connecting-when-correcting.2019.pdf" target="_blank" rel="noopener noreferrer">Handout: Connecting When Correcting</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/02/rpps_2019-georgia.pdf" target="_blank" rel="noopener noreferrer">Handout: 2019 Georgia RPPS Guidelines</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/GA_Life_After_Fostering_NYTD19_Infographic.pdf" target="_blank" rel="noopener noreferrer">Georgia: Life after Foster Care Info Graphic</a>
				</p>
			</div>
		</div><!--/row-->
		
		<div class="row section-row">
			<hr id="line-break" />
			<h2 style="text-align: center;"><span style="">CARE COMMUNITIES</span></h2>
			<p style="text-align: center;">
				<a href="https://famresources.s3.amazonaws.com/Launching_a_Care_Community_Overview.pdf" target="_blank" rel="noopener noreferrer">Launching A Care Community - Overview</a>
			</p>
			<p style="text-align: center;">
				<a href="https://famresources.s3.amazonaws.com/Launching_Multiple_Care_Communities_Simultaneously.pdf" target="_blank" rel="noopener noreferrer">Launching Multiple Care Communities Simultaneously</a>
			</p>
			<p style="text-align: center;">
				<a href="https://promiseserves.org/families/what-is-a-care-community-longer" target="_blank" rel="noopener noreferrer">Maintaining Strong Care Communities</a>
			</p>
		</div>

		<div class="row section-row">
			<div class="col-sm-6 col-xs-12 ">
				<h2 style="text-align: center;">Care Community Formation | LTP Advocate Resources</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Care_Community_Formation.pdf" target="_blank" rel="noopener noreferrer">Care Community Formation</a>
				</p>
				<p style="text-align: center;"><small><em><strong>NEW in 2019! </strong></em></small>
					<a href="<?php echo base_url();?>families/what-is-a-care-community-longer" target="_blank" rel="noopener noreferrer">Link to Send: What Is A Care Community?</a> <small>(05:13)</small>
				</p>
				<p style="text-align: center;"><small><strong><em>REQUIRED! </em></strong></small>
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/supported-family-agreement.2019.pdf" target="_blank" rel="noopener noreferrer">Supported Family Agreement</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Phone_Call_to_Supported_Family.pdf" target="_blank" rel="noopener noreferrer">Phone Call to Supported Family</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2018/01/59.-foster-family-information-request.docx" target="_blank" rel="noopener noreferrer">Copy &amp; Paste: Foster Family Information Request</a><br /><small>Copy and paste list into follow-up email (see below)</small>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Launching_a_Care_Community_for_Adoptive_Families.pdf" target="_blank" rel="noopener noreferrer">Launching a Care Community for Adoptive Families</a>
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h2 style="text-align: center;">Care Community Launch | LTP Advocate Resources</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Hosting_a_Care_Community_Launch.pdf" target="_blank" rel="noopener noreferrer">Hosting a Care Community Launch</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/care-community-launch-checklist.2019.pdf" target="_blank" rel="noopener noreferrer">Care Community Launch - Checklist</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2018/01/foster-family-contact-information-form.pdf" target="_blank" rel="noopener noreferrer">Foster Family Contact Information - Form</a><br /><small>Be sure to "save as" to retain foster family info on form, then print.</small>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/08/2019_ltp-care-community-sign-up-form.pdf" target="_blank" rel="noopener noreferrer">Care Community Sign-Up - Form</a><br /><small>Print as form to fill out or input data into fields. "Save as" to retain info on form.</small></p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/sample-cc-one-pager.2019.pdf" target="_blank" rel="noopener noreferrer">Sample: Care Community One-Pager</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Relaunching_a_Care_Community.pdf" target="_blank" rel="noopener noreferrer">Relaunching a Care Community</a>
				</p>
			</div>
		</div><!--/row-->

		<div class="row section-row">
			<div class="col-sm-12 col-xs-12 ">
				<h2 style="text-align: center;">Care Community Formation and Launch | Email Examples</h2>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/01/follow-up-emails-to-foster-family.2019.pdf" target="_blank" rel="noopener noreferrer">Emails To Foster Family - Offering A Care Community</a>
				</p>
				<p style="text-align: center;">
					<a href="<?= base_url();?>resources/emailexamples">Email Examples</a> (6)<br /><small>Examples of communication when contacting foster families and potential volunteers</small>
				</p>
			</div>
		</div><!--/row-->

		<div class="row section-row">
			<div class="col-sm-6 col-xs-12 ">
				<h2 style="text-align: center;">CC Team Leader Training</h2>
				<hr />
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Care_Community_Team_Leader_Training_Overview.pdf" target="_blank" rel="noopener noreferrer">Care Community Team Leader Training - Overview</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Ten_Simple_Steps_Training_Care_Community_Team_Leaders.pdf" target="_blank" rel="noopener noreferrer">Ten Simple Steps – Training Care Community Team Leaders</a>
				</p>
				<p style="text-align: center;">
					<a href="https://famresources.s3.amazonaws.com/Coaching_Care_Community_Team_Leaders.pdf" target="_blank" rel="noopener noreferrer">Coaching Care Community Team Leaders</a>
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h2 style="text-align: center;">CC Team Leader | LTP ADVOCATE Resources</h2>
				<hr />
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=153037786" target="_self" rel="noopener noreferrer">Video: Team Leader Training (Part 1)</a>
				</p>
				<p style="text-align: center;">
					<a href="<?php echo base_url();?>resources/view/?id_vimeo=152783983" target="_self" rel="noopener noreferrer">Video: Team Leader Training (Part 2)</a><br /><small>All cc leader videos - password: <strong>ccteamleader</strong></small>
				</p>
				<p style="text-align: center;">
					<a href="<?= base_url();?>resources/resourcefile" target="_self" rel="noopener noreferrer">Resource File for Care Community Team Leaders</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/02/care-calendar-set-up.9-2018.pdf" target="_blank" rel="noopener noreferrer">Care Calendar Set-Up Instructions</a>
				</p>
			</div>
		</div><!--/row-->
		<div class="row section-row">
			<hr id="line-break" />
			<h2 style="text-align: center;"><span style="">TOOLS FOR ADVOCATES</span></h2>
			<p style="text-align: center;">Click <a href="<?= base_url();?>resources/toolkit/"  rel="noopener noreferrer"><strong>HERE</strong></a> to find these articles and resources!</p>
			<div class="col-sm-6 col-xs-12 ">
				<p style="text-align: center;">Good Things To Know</p>
				<p style="text-align: center;">Recommended For Advocates</p>
				<p style="text-align: center;">Resources for Foster Parents</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<p style="text-align: center;"><?= $rnoun;?> Tutorials</p>
				<p style="text-align: center;">Organization For Foster Care Ministry</p>
				<p style="text-align: center;">The Advocate Journal | Back Issues</p>
			</div>
		</div><!--/row-->

		<hr id="line-break" />
		<div class="row section-row">
			<h2 style="text-align: center;"><span style="">Georgia DFCS RPPS Guidelines</span></h2>
			<div class="col-sm-6 col-xs-12 ">
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/05/how-to-implement-rpps-in-ga-5.2019.pdf" target="_blank" rel="noopener noreferrer">Implementing RPPS in Georgia</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/05/2019-ga-rpps-substitute-caregivers_babysitter-and-overnight-guidelines.pdf" target="_blank" rel="noopener noreferrer">GA DFCS Substitute Caregivers:<br />
				Babysitting and Overnight Guidelines</a>
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/05/required-forms_rpps-routine-caregivers-2019.pdf" target="_blank" rel="noopener noreferrer"><span style="color: #000000;"><small><em><strong>REQUIRED FORMS – </strong></em></small></span>RPPS <span style="text-decoration: underline;">Routine</span> Caregivers</a>
				</p>
				<p style="text-align: center;">
					<a href="https://www.livethepromise.org/wp-content/uploads/2019/05/2019-ga-rpps-full-overview.pdf" target="_blank" rel="noopener noreferrer">GA DFCS RPPS Full Overview</a>
				</p>
			</div>
		</div><!--/row-->
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