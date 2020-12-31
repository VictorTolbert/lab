<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
	
	<div class="col-sm-12 main container">
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
		
		<div class="col-sm-10 col-sm-offset-1">
			<div class="row">
			
				<div class="panel panel-container col-sm-5 col-xs-12">
					<div class="panel-heading">
						<h2 class="text-center">Calendar</h2>
					</div>
					<div class="panel-body">
						<div class="row top20"></div>
							<?php echo $this->website_model->build_calendar();?>
					</div>
				</div>
				
				<div class="col-sm-1"></div>
				
				<div class="panel panel-container col-sm-5 col-xs-12">
					<div class="panel-heading">
						<h2 class="text-center">Needs</h2>
					</div>
					<div class="panel-body">
						<div class="row top20"></div>
							<?php 
								if(!empty($dash['needs'])){
									foreach($dash['needs'] as $cur){
											
									}
								}else{
									//echo '<h4 class="text-center">No active needs, click to add</h4>';
									echo '<table class="table table-responsive table-striped"><thead><tr><th>Need</th><th>Date</th><th>Assigned</th><th></th></tr></thead>';
									echo '<tbody><tr><td>Diapers</td><td>ASAP</td><td><div class="avatar-circle center-block"><img src="https://secure.gravatar.com/avatar/55940c828307966aa81ba79e3643951b" class="img-responsive" alt="" width="50" height="50"></div></td><td>Jeremy Doublestein</td></tr>';
									echo '<tbody><tr><td>Cut Grass</td><td>10/3</td><td><div class="avatar-circle center-block"><img src="https://secure.gravatar.com/avatar/55940c828307966aa81ba79e3643951b" class="img-responsive" alt="" width="50" height="50"></div></td><td>Jeremy Doublestein</td></tr>';
									echo '<tbody><tr><td>Wash Clothes</td><td>10/7</td><td></td><td>Unassigned</td></tr>';
									echo '</tbody></table>';
								}
							?>
					</div>
					<div class="panel-footer">
						<a href="#needmodal" data-toggle="modal" data-target="#needmodal" class="btn btn-default center-block"><i class="fa fa-plus"></i> Add a Need</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="panel panel-container col-sm-5 col-xs-12">
					<div class="panel-heading">
						<h2 class="text-center">My Care Community Team</h2>
					</div>
					<div class="panel-body">
						<div class="row top10">
							<p class="text-center">
								<small>
									<?php echo $this->communities_model->format_foster_parents_name($dash['team']['data']);?><br />
									<?php echo $this->communities_model->format_community_address($dash['team']['data']);?><br />
									<?php echo $this->communities_model->format_foster_parents_phones($dash['team']['data']);?>
								</small>
							</p>
						</div>
						<div class="row top20"></div>
							<?php 
								if(!empty($dash['team']['html'])){
									echo $dash['team']['html'];
								}else{
									echo '<h4 class="text-center">No active team</h4>';
								}
							?>
							<?php $msg_json = '';?>
					</div>
					<div class="panel-footer">
						<?php if(!empty( $dash['team']['data']['team_member_people_ids'])){?>
						<a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn btn-default btn-md btn-msg-trigger center-block" data-rids="community_volunteers_<?php echo $dash['team']['data']['id_community_encoded'];?>" data-msgjson='<?php echo $msg_json;?>'><i class="fa fa-paper-plane-o"></i> Send A Team Message</a>
						<?php  } ?>
					</div>
				</div>
				
				<div class="col-sm-1"></div>
				
			</div>
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>