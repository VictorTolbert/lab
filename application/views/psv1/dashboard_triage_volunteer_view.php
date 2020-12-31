<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
	
<div class="col-sm-12 main container page-dashboard">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
	<?php echo $this->session->flashdata('msg'); ?>
		<div class="column-left col-xs-12 col-sm-12 col-md-4"> 
			<!-- One Time Needs -->
			<div class="panel panel-container">
				<div class="panel-heading">
					<h2 class="text-center">Needs Near You</h2>
					
				</div>
				<div class="panel-body">
				
					<div class="col-xs-12 col-sm-12 top10 well">
						<?php if(!empty($volunteer_awaiting_team)){
							echo '<div class="col-xs-12 col-sm-12 top20 xs-top20"><div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">';
							echo '<a class="modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="How to Help While You Wait" data-ajaxurl="'.base_url().'home/ajax_play_video?vid=113419218"><img src="'.base_url().'img/video_thumbs/dashboard_help_while_wait_video_thumb.jpg" class="img-responsive"></a></div></div></div>';
						 }else{
							echo '<p class="">Below is a list of one time needs that you can help fill.</p>';
						}?>
					</div>
					<div class="row top20">
						<?php echo $this->dashboard_model->widget_one_time_needs(); ?>
					</div>
				</div>
			</div>
			
			
			<!-- Volunteer Status -->
			<div class="panel panel-container">

				<div class="panel-heading">
					<h2 class="text-center">My Volunteer Status</h2>
				</div>
				<div class="panel-body">
					<div class="row top20"></div>
					<?php echo $this->dashboard_model->widget_my_volunteer_status(); ?>
				</div>
			</div>
		</div><!-- End Left Column -->
		<div class="column-right col-xs-12 col-sm-12 col-md-8">
			<!-- Calendar -->
			<div class="panel panel-container">
				<div class="panel-heading">
					<h2 class="text-center">Calendar</h2>
				</div>
				<div class="panel-body">
					<div id="ltp_calendar"></div>
				</div>
			</div>
		</div><!-- End Right Column -->
	</div><!--/.row-->
</div><!--/.container-->
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
$(document).ready(function() {
	ps_initialize_calendar();
});
</script>
</body>
</html>