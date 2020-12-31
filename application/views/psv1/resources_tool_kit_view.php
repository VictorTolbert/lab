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

			<li class="active">Tool Kit</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tool Kit</h1>
		</div>
	</div><!--/.row-->

	<div class="panel panel-container resources-advocate">
		<div class="row">
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">GOOD THINGS TO KNOW</h4>
				<hr>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2018/01/common-abbreviations-used-in-foster-care.pdf" target="_blank" rel="noopener noreferrer">Foster Care - Common Abbreviations and Terms</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/certification-for-foster-families.2019.pdf" target="_blank" rel="noopener noreferrer">Certification for Foster Families - Overview</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2014/10/certification-foster-families.pdf" target="_blank" rel="noopener noreferrer">Foster Family Certification Process (GA)</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Working_with_Child_Welfare_Agencies_and_CPAs_Overview.pdf" target="_blank" rel="noopener noreferrer">Working with Child Welfare Agencies and CPAs | Overview</a></p>
				<p style="text-align: center;"><a href="https://famresources.s3.amazonaws.com/Affirming_Foster_Families.pdf" target="_blank" rel="noopener noreferrer">Affirming Foster Families</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/06/support-groups-breakout-handout.pdf">Forming Support Groups</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/bumps-in-the-road-fam-faqs.2019.pdf" target="_blank" rel="noopener noreferrer">FAM FAQs - Bumps In The Road</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/communicating-with-ltp-staff.2019.pdf" target="_blank" rel="noopener noreferrer">Communicating with LTP Staff</a></p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">Recommended Resources</h4>
				<hr>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/essential-online-resources.2019.pdf" target="_blank" rel="noopener noreferrer">Essential Online Resources</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2016/04/ltp-recommended-reading-list.2017.pdf" target="blank" rel="noopener noreferrer">Recommended Reading List</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/01/recommended-viewing-foster-care-resources.2017.pdf" target="_blank" rel="noopener noreferrer">Recommended Viewing - Foster Care Resources</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/01/recommended-links-for-foster-adoptive-parents-1.pdf" target="_blank" rel="noopener noreferrer">Recommended Links</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/02/rpps_2019-georgia.pdf">GA DFCS RPPS Childcare Guidelines</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2017/03/clothing-closets-georgia.pdf" target="_blank" rel="noopener noreferrer">Clothing Closet Resource List (GA)</a></p>
				<p style="text-align: center;"><a href="https://livethepromise.org/wp-content/uploads/2016/02/amerigroup-providers-by-county.xlsx" target="_blank" rel="noopener noreferrer">Xcel: Amerigroup Providers by Georgia County</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">Live The Promise Tutorials</h4>
				<hr>
				<p style="text-align: center;"><a href="https://vimeo.com/251380125/3afe0ba344" target="_blank" rel="noopener noreferrer">Supporting Foster Families In Times of Struggle</a> <small>(13:11)</small></p>
				<p style="text-align: center;"><a href="https://vimeo.com/251386755/42643eb436" target="_blank" rel="noopener noreferrer">Launching A Care Community</a> <small>(09:12)</small></p>
				<p style="text-align: center;"><a href="https://vimeo.com/202401639/4dbcf4d804" target="_blank" rel="noopener noreferrer">Creating Foster Care Awareness In Your Church</a> <small>(13:10)</small></p>
				<p style="text-align: center;"><a href="https://vimeo.com/164203817/c5eeffadf9" target="_blank" rel="noopener noreferrer">Organizing Your Foster Care Ministry</a> &nbsp;<small>(14:12)</small></p>
				<p style="text-align: center;"><a href="https://vimeo.com/139271252/39de6c8e79" target="_blank" rel="noopener noreferrer">Relaunching A Care Community</a>&nbsp;<small>(08:12)</small></p>
				<p style="text-align: center;"><a href="https://vimeo.com/139273399/408604d132" target="_blank" rel="noopener noreferrer">Walking A Foster Family Through A Disruption</a>&nbsp;<small>(12:32)</small></p>
				<p style="text-align: center;">
				</p>
			</div>
			<div class="col-sm-6 col-xs-12 ">
				<h4 style="text-align: center;">Organization For Foster Care Ministry</h4>
				<hr>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/organization-for-foster-care-ministry-promise-serves.2019.pdf" target="_blank" rel="noopener noreferrer">Organization for Foster Care Ministry - Promise Serves</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2018/03/2018-ltp-xcel-volunteer-spreadsheet.xlsx" target="_blank" rel="noopener noreferrer">Xcel Spreadsheet: LTP Volunteers</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2018/03/2018-ltp-care-communities-spreadsheet.xlsm" target="_blank" rel="noopener noreferrer">Xcel Spreadsheet: LTP Care Communities</a></p>
				<p style="text-align: center;"><a href="https://www.livethepromise.org/wp-content/uploads/2018/03/2018-ltp-xcel-foster-families-spreadsheet.xlsm" target="_blank" rel="noopener noreferrer">Xcel Spreadsheet: Foster Families</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12 ">
				<h4 style="text-align: center;"><strong>The FAM FORUM | Back Issues</strong></h4>
				<hr>
			</div>
			<div class="col-sm-5 col-xs-12 col-sm-offset-2">
				<p><a href="https://mailchi.mp/promise686.org/the-virtuous-cycle-more-good-news" target="_blank" rel="noopener noreferrer">September 2019</a>, Vol. 35 - The Virtuous Cycle</p>
				<p><a href="https://mailchi.mp/promise686.org/hot-new-resources" target="_blank" rel="noopener noreferrer">June 2019</a>, Vol. 34 - New Resources</p>
				<p><a href="https://mailchi.mp/promise686/strong-connections-in-2019" target="_blank" rel="noopener noreferrer">January 2019</a>, Vol. 32 - Strong Connections</p>
				<p><a href="https://mailchi.mp/promise686/keeping-count" target="_blank" rel="noopener noreferrer">November/Dec 2018</a>, Vol. 31 - Keeping Count</p>
				<p><a href="https://mailchi.mp/promise686/orphan-sunday-2018" target="_blank" rel="noopener noreferrer">October 2018</a>, Vol. 30 - Orphan Sunday</p>
				<p><a href="https://mailchi.mp/promise686/plan-your-stand" target="_blank" rel="noopener noreferrer">September 2018</a>, Vol. 29 - Plan Your Stand</p>
				<p><a href="https://mailchi.mp/promise686/be-encouraged" target="_blank" rel="noopener noreferrer">July 2018</a>, Vol. 28 - Be Encouraged</p>
				<p><a href="https://mailchi.mp/promise686/summer-reset" target="_blank" rel="noopener noreferrer">June 2018</a>, Vol. 27 - Summer Refreshers</p>
				<p><a href="https://mailchi.mp/promise686/impact-in-foster-care-3233381" target="_blank" rel="noopener noreferrer">May 2018</a>, Vol. 26 - #pyramidofpromise</p>
				<p><a href="https://mailchi.mp/promise686/impact-in-foster-care" target="_blank" rel="noopener noreferrer">April 2018</a>, Vol. 25 - Stronger and Longer!</p>
				<p><a href="https://mailchi.mp/promise686/march-2018-journal" target="_blank" rel="noopener noreferrer">March 2018</a>, Vol. 24 - The Promise is on the move!</p>
				<p><a href="https://mailchi.mp/promise686/ltp-advocate-journal-lets-get-together-3233261" target="_blank" rel="noopener noreferrer">February 2018</a>, Vol. 23 - Wear It To Share It</p>
				<p><a href="https://mailchi.mp/promise686/january-2018" target="_blank" rel="noopener noreferrer">January 2018</a>, Vol. 22 - New Year, Procedures &amp; Resources</p>
				<p><a href="http://mailchi.mp/promise686/more-than-enough" target="_blank" rel="noopener noreferrer">December 2017</a>, Vol. 21 - More Than Enough</p>
				<p><a href="http://mailchi.mp/promise686/orphan-sunday-prayer" target="_blank" rel="noopener noreferrer">November 2017</a>, Vol. 20 - Stand Sunday Prayer Guide</p>
				<p><a href="http://mailchi.mp/promise686/2zkp2bpn56-3233157" target="_blank" rel="noopener noreferrer">October 2017</a>, Vol. 19 - The Promise Blog</p>
				<p><a href="http://mailchi.mp/promise686/2zkp2bpn56" target="_blank" rel="noopener noreferrer">September 2017</a>, Vol. 18 - FAMs, Fans, and more!</p>
				<p><a href="http://mailchi.mp/promise686/ltp-advocate-journal-lets-get-together-3233113" target="_blank" rel="noopener noreferrer">August 2017</a>, Vol. 17 - Introducing CarePortal</p>
				<p><a href="http://mailchi.mp/promise686/ltp-advocate-journal-lets-get-together" target="_blank" rel="noopener noreferrer">June/July 2017</a>, Vol. 16 - Stronger Together!</p>
				<p style="text-align: left;"><a href="http://mailchi.mp/promise686/ltp-advocate-journal-warm-welcomes-and-hard-good-byes" target="_blank" rel="noopener noreferrer">May 2017</a>, Vol. 15 - At Home In Church</p>
			</div>
			<div class="col-sm-5 col-xs-12">
				<p><a href="http://us1.campaign-archive.com/?u=8c08b2634fbcd649365d98017&amp;id=c9a3c73501" target="_blank" rel="noopener noreferrer">April 2017</a>, Vol. 14 - Contagious Enthusiasm</p>
				<p><a href="http://us1.campaign-archive.com/?u=8c08b2634fbcd649365d98017&amp;id=bdacacb45d" target="_blank" rel="noopener noreferrer">March 2017</a>, Vol. 13 - Adopting a New Curriculum</p>
				<p><a href="http://us1.campaign-archive.com/?u=8c08b2634fbcd649365d98017&amp;id=a7b8ef74a1" target="_blank" rel="noopener noreferrer">February 2017</a>, Vol. 12 - Remembering Our Source of Strength</p>
				<p><a href="https://eepurl.com/cwjlf5" target="_blank" rel="noopener noreferrer">January 2017</a>, Vol. 11 - A New Year of FAM</p>
				<p><a href="https://eepurl.com/cq2GBX" target="_blank" rel="noopener noreferrer">December 2016</a>, Vol. 10 - Celebrating Volunteers</p>
				<p><a href="https://eepurl.com/cmP19P" target="_blank" rel="noopener noreferrer">November 2016</a>, Vol. 9 - Orphan Sunday Prayer Guide</p>
				<p><a href="https://eepurl.com/cib1KT" target="_blank" rel="noopener noreferrer">October 2016</a>, Vol. 8 - Childcare Wanted!</p>
				<p><a href="https://eepurl.com/cenVLY" target="_blank" rel="noopener noreferrer">September 2016</a>, Vol. 7 - Stand Sunday | Orphan Sunday</p>
				<p><a href="https://eepurl.com/b_95Lv" target="_blank" rel="noopener noreferrer">August 2016</a>, Vol. 6 - Synergy In Ministry</p>
				<p><a href="https://eepurl.com/b8F3r5" target="_blank" rel="noopener noreferrer">July 2016</a>, Vol. 5 - Live The Promise Web Calendar</p>
				<p><a href="https://eepurl.com/b3uUcf" target="_blank" rel="noopener noreferrer">June 2016</a>, Vol. 4 - BIG FUN! Family Day &amp; Summer Break Survival</p>
				<p><a href="https://eepurl.com/b04Hfz" target="_blank" rel="noopener noreferrer">May 2016</a>, Vol. 3 - May Is Foster Care Awareness Month</p>
				<p><a href="https://eepurl.com/bSXh5n" target="_blank" rel="noopener noreferrer">April 2016</a>, Vol. 2 - Movies: The Ticket To Awareness</p>
				<p style="text-align: left;"><a href="https://eepurl.com/bRJgWD" target="_blank" rel="noopener noreferrer">March 2016</a>, Vo1. 1 - The LTP Advocate Portal</p>
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