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
				
						Resources
				
				</li>
				
				<li class="active">Promise Serves Resources</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Promise Serves Resources</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<h3>Promise Serves How To Videos</h3>
				<div class="col-sm-3 resources-video-container">
					<a href="<?php echo base_url();?>resources/view/video-ps-calendar">
						<img src="<?php echo base_url();?>/img/video_thumbs/ps_how_to_calendar.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-events">Using the Calendar</a></h4>
				</div>
				<div class="col-sm-3 resources-video-container">
					<a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-events">
						<img src="<?php echo base_url();?>/img/video_thumbs/ps_how_to_events.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-events">Handling Events</a></h4>
				</div>
				<div class="col-sm-3 resources-video-container">
					<a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-families">
						<img src="<?php echo base_url();?>/img/video_thumbs/ps_how_to_families.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-families">Manage Families</a></h4>
				</div>
				<div class="col-sm-3 resources-video-container">
					<a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-volunteers">
						<img src="<?php echo base_url();?>/img/video_thumbs/ps_how_to_volunteers.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-volunteers">Manage Volunteers</a></h4>
				</div>
				<div class="col-sm-3 resources-video-container">
					<a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-communities">
						<img src="<?php echo base_url();?>/img/video_thumbs/ps_how_to_communities.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="<?php echo base_url();?>resources/view/video-ps-how-to-managing-communities">Care Communities</a></h4>
				</div>
			</div>
			<div class="row">
				<h3>Promise Serves Overview Videos</h3>
				<div class="col-sm-3 resources-video-container">
					<a href="<?php echo base_url();?>resources/view/video-ps-overview">
						<img src="<?php echo base_url();?>/img/video_thumbs/732764000.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="<?php echo base_url();?>resources/view/video-ps-overview">Promise Serves Overview</a></h4>
				</div>
				<div class="col-sm-3 resources-video-container">
					<a href="<?php echo base_url();?>resources/view/video-ps-advocate-training-spring-2019">
						<img src="<?php echo base_url();?>/img/video_thumbs/335381933.jpg" class="center-block img-responsive video-thumb">
					</a>
					<h4><a href="<?php echo base_url();?>resources/view/video-ps-advocate-training-spring-2019">Advocate Training Spring 2019 Webinar</a></h4>
				</div>
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