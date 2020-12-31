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
					<a href="<?php echo base_url();?>resources">
						Resources
					</a>
				</li>
				<li class="active">View Item</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $item['item_title'];?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-sm-8">
					<div class="ltp-video-wrapper border-light-gray">
						<iframe src="https://player.vimeo.com/video/<?php echo $item['id_video'];?>?api=1&player_id=resources-vimeo-player" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="resources-vimeo-player"></iframe>
					</div>
				</div>
				<div class="col-sm-4">
					<?php echo $item['desc'];?>
				</div>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script type="text/javascript" src="https://f.vimeocdn.com/js/froogaloop2.min.js"></script>
<script>
	$(document).ready(function() {

		// Message displayed when link is playing
		var playNotice = ' - <strong><i>Now playing...</i></strong>';

		// Function to hide all status messages
		hidePlayNoticeAll = function() {
			jQuery(".vimeo-play-time-link-status").html("");
		}

		// Load Vimeo API for the embedded video
		var vimeoplayer = $f(jQuery('#resources-vimeo-player')[0]);

		// Function to control what happens when each lesson link is clicked
		function setup_vimeo_time_links() {
				 
			jQuery(".vimeo-play-time-link").click(function (e) {
				e.preventDefault();
				vimeoplayer.api('play');
				vimeoplayer.api('seekTo', $(this).data('time')); 
				hidePlayNoticeAll(); 
				$(this).closest('span').html(playNotice);
			});
			 
		}
		setup_vimeo_time_links();
	});
</script>
</body>
</html>