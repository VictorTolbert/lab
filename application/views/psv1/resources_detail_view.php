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
					<a href="<?php echo base_url();?>resources/newfam">
						Resources
					</a>
				</li>
				<li class="active">View Item</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $item['resource_name'];?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-sm-8">
					
						<?php 
							$type = $this->resources_model->get_ps_resource_format_name($item);
							switch(strtolower(trim($type))){
								case 'video':
									switch($item['video_host']){
										case 's3':
											echo '<div class="ltp-video-wrapper border-light-gray embed-responsive embed-responsive-16by9">';
											echo '<video width="640" height="360" controls id="resources-vimeo-player">
													  <source src="'.$item['url_download'].'" type="video/mp4">
													  Your browser does not support this video.
													</video>
												</div>';
										break;
										default:
											echo '<div class="ltp-video-wrapper border-light-gray">';
											echo '<iframe src="https://player.vimeo.com/video/'.$item['id_video'].'?api=1&player_id=resources-vimeo-player" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" 	id="resources-vimeo-player"></iframe>';
											echo '</div>';
										break;
									}
								break;
								default:
									if(!empty($item['id_video'])){
										
										echo '<div class="ltp-video-wrapper border-light-gray">';
										echo '<iframe src="https://player.vimeo.com/video/'.$item['id_video'].'?api=1&player_id=resources-vimeo-player" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="resources-vimeo-player"></iframe>';
										echo '</div>';
										
									}elseif(!empty($item['resource_content'])){
										echo '<h3>Resource Preview</h3>';
										echo '<div class="force-overflow-y height-500">';
										echo $this->website_model->format_copy($item['resource_content']);
										echo '</div>';
									}else{
										echo '<img src="'.$this->resources_model->get_ps_resource_thumbnail_url($item).'" class="img-responsive block-center">';
									}
								break;
							}
							?>
					
				</div>
				<div class="col-sm-4">
					<div class="col-sm-12">
						<h3>Description</h3>
						<?php echo !empty($item['resource_desc_long']) ? $this->website_model->format_copy(correct_img_path($item['resource_desc_long'])) : 'No description was added for this resource';?>
						<hr />
					</div>
					<div class="col-sm-12 top20">
						<h3><?php echo $this->resources_model->get_resource_download_detial_page_header($item);?></h3>
						<?php if(empty($item['can_download'])){?>
							<p>Sorry, this resource is not available for download.</p>
						<?php }else{?>
							<div class="row"><div class="col-sm-6 col-sm-offset-2 col-xs-12"><?php echo $this->resources_model->make_resource_detail_download_button($item);?></div></div>
						<?php }?>
						<hr />
					</div>
					<?php if(!empty($item['url_shareable']) && $this->security_model->user_has_access(60)){?>
						<div class="col-sm-12 top20">
							<h3>Share</h3>
							<p>This link can be used to share this resource with someone who does not have a Promise Serves account. Please share only with those who are listed in your Promise Serves user agreement.</p>
							<?php if(stripos($item['url_shareable'],'key=') !== false){
								echo '<p><strong>Please note</strong> that this link has a key assigned to it, which means that this link could change in the future. So please reference this page each time to ensure you have the most current link before sharing it.</p>';
							} ?>
							<div class="row">
								<div class="col-sm-6 col-sm-offset-2 col-xs-12">
									<button id="modal-copyrsvp-btn-copy" class="btn btn-default btn-copy-to-clipboard" data-clipboard-text="<?php echo correct_img_path($item['url_shareable']);?>"><i class="fa fa-clipboard"></i> Copy Link</button>
								</div>
							</div>
							
							<hr />
						</div>
					<?php }?>
					<div class="col-sm-12 top20">
						<h3>Resource Information</h3>
						<p>Date Added: <?php echo date_offset('m/d/Y', $item['date_add']);?></p>
						<p>Resource Type: <?php echo $this->resources_model->get_ps_resource_format_name($item);?></p>
						<p>Creator: <?php echo $this->resources_model->get_ps_resource_creator($item);?></p>
					</div>
				</div>
				<?php if(!empty($item['resource_content_extra'])){?>
				<div class="col-xs-12 col-sm-12">
					<a name="extra"></a>
					<?php echo $this->website_model->format_copy($item['resource_content_extra']);?>
				</div>
				<?php }?>
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
				 
			jQuery(".vimeo-play-time-link").click(function () {
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