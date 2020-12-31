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
			<!-- One Pager -->
			<div class="panel panel-container">
			<?php 
					$already_displayed	= array();
					$collapse			= '';
					$communities_count	= 0;
					foreach($communities as $cur){
						if(!in_array($cur['id_community'], $already_displayed)){
							$already_displayed[]	= $cur['id_community'];
							$communities_count++;
						}
					}
			?>
			<div class="panel-heading">
				<h2 class="text-center">My Volunteer Status</h2>
			</div>
			<div class="panel-body">
				<div class="row top10"></div>
				
				</div>
			</div>
		</div><!-- End Left Column -->
		<div class="column-right col-xs-12 col-sm-12 col-md-8 ">
			<!-- Calendar -->
			<div class="panel panel-container">
				<div class="panel-heading">
					<h2 class="text-center">Calendar</h2>
				</div>
				<div class="panel-body">
					<div id="ltp_calendar"></div>
				</div>
			</div>
		</div>
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