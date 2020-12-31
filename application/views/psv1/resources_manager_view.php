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
				
				<li class="active">Manager Resources</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manager Resources</h1>
			</div>
		</div><!--/.row-->

	<div class="panel panel-container resources-advocate">
		<h2 style="text-align: center;"><span style="">Getting Started</span></h2>
		<p style="text-align: center;"><big><big><strong>Welcome <?= $rnoun;?> Managers!</strong></big></big></p>
	

		<div class="row section-row top40">
			<div class="col-sm-6 col-xs-12 ">
				<h3 class="text-center">How To Refer and Manage Families for Support</h3>
				<div class="col-sm-12 resources-video-container">
					<a href="http://promiseserves.org/resources/view/video-ps-how-to-refer-manage-families-for-support">
						<img src="http://promiseserves.org/img/video_thumbs/ps_how_to_refer_families.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="http://promiseservers.org/resources/view/video-ps-how-to-refer-manage-families-for-support">Refer a Family For Support</a></h4>
				</div>
				<h5>Links</h5>
				<ul>
					<li>
						Refer Family Link<br />
						<?php echo base_url().'refer-family';?><br />
						<small>This link is to be used for people who want to refer a family for support (not the family themselves).</small>
					</li>
					<li class="top20">
						Request Care Community Support Link<br />
						<?php echo base_url().'request-care-community';?><br />
						<small>For privacy reasons, this link is to be used by the family only.</small>
					</li>
				</ul>
			</div>

			<div class="col-sm-6 col-xs-12 ">
				
			</div>

		</div>
		<hr id="line-break" />
		
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