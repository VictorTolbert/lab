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
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<h1 class="page-header">Dashboard</h1>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="pull-right top30 xs-top30 gutter40">
				<?php echo $this->dashboard_model->make_dash_quick_link_button();?>
			</div>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="column-left col-xs-12 col-sm-12 col-md-4"> 
			<?php if(!empty($use_notifications)){?>
				<div class="panel-heading">
					<h2 class="text-center">Notifications</h2>
				</div>
				<div class="panel-body">
					<div class="row top20"></div>
					<?php 
						$upcoming		= $this->dashboard_model->get_dashboard_notifications();
						if(!empty($upcoming['html']) && !empty($upcoming['data'])){
							echo $upcoming['html'];
						}else{
							echo '<div class="row top30 text-center"<h3 class="text-center"><i class="fas fa-check"></i> No notifications!</h3></div>';
						}
					
					?>
				</div>
			<?php }else{?>
				<!-- Needs & Events -->
				<div class="panel-heading">
					<h2 class="text-center">Upcoming Items</h2>
				</div>
				<div class="panel-body">
					<div class="row top20"></div>
					<?php 
						$upcoming		= $this->dashboard_model->get_dashboard_upcoming_items();
						if(!empty($upcoming['html']) && !empty($upcoming['data'])){
							echo $upcoming['html'];
						}else{
							echo '<div class="row top30 text-center">No relevant upcoming items in the next 30 days.</div>';
						}
					?>
				</div>
			<?php }?>
			
			
			<!-- One Pager -->
			<div class="panel panel-container">
				<?php 
						$already_displayed	= array();
						$collapse			= '';
						$communities_count	= 0;
						if(!empty($communities)){
							foreach($communities as $cur){
								if(!in_array($cur['id_community'], $already_displayed)){
									$already_displayed[]	= $cur['id_community'];
									$communities_count++;
								}
							}
						}
				?>
				<div class="panel-heading">
					<h2 class="text-center">My Care <?php if($communities_count < 2){ echo 'Community'; }else{ echo 'Communities';}?></h2>
				</div>
				<div class="panel-body">
					<div class="row top10"></div>
					<?php 
						if(empty($communities)){ 
							echo '<div class="row top30 text-center" >No active care communities.';
						}else{
							$already_displayed	= array();
							foreach($communities as $cur){
								if(!in_array($cur['id_community'], $already_displayed)){
									$already_displayed[]	= $cur['id_community'];
									$team		= $this->dashboard_model->get_dashboard_active_community_team_members(array('id_community' => $cur['id_community']));
									$msg_json 	= '';
									
									if($communities_count > 1){
										$collapse = 'collapse';
										echo '<div class="row top30"><div id="header-community-'.$cur['id_community'].'"><div class="col-sm-6"><h4>'.$this->communities_model->get_community_name($cur).'</h4></div><div class="col-sm-3">Started '.date_offset( 'm/d/Y', $cur['date_start']).' </div>
										<div class="col-sm-3">
											<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#teamcommunity'.$cur['id_community'].'">Show More</button>
										</div>
										</div>';

									}
									echo '<div id="teamcommunity'.$cur['id_community'].'" class="'.$collapse.' col-sm-12 top20 well">
											<p class="text-center">
												<small>
													'.$this->communities_model->format_foster_parents_name($team['data']).'<br />
													'.$this->communities_model->format_community_address($team['data']).'<br />
													'.$this->communities_model->format_foster_parents_phones($team['data']).'
												</small>
											</p>';
									if(!empty($team['html'])){
										echo $team['html'];
										echo '<div class="">';
										if(!empty( $team['data']['team_member_people_ids'])){
										echo '<a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn btn-default btn-md btn-msg-trigger center-block" data-rids="community_volunteers_'.$team['data']['id_community_encoded'].'" data-msgjson=\''.$msg_json.'\'><i class="fa fa-paper-plane-o"></i> Send A Team Message</a>';
										}
										echo '</div>';
									}else{
										echo '<h4 class="text-center">No active team</h4><br /><br /><a href="'.base_url().'communities/build/'.cur['id_community_encoded'].'" class="btn btn-default">Build Team</a>';
									}
									if($communities_count > 1){
										echo '</div></div><hr />';
									}
								}
							}
						}
					?>
					</div>
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
	ps_instantiate_notify_clear();
});
</script>
</body>
</html>