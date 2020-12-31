<?php echo $site_header; 
$bypass_event_types	= array('event_prospect_kiosk');
?>
<div class="container">
	<form class="form" action="<?php echo base_url();?>serve" method="post">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>

			<div class="col-sm-10 col-sm-offset-1">
				<h1 class="text-center">Which Event Did You Attend?</h1>
				<div class="top20">
					<table class="table table-responsive table-striped">
						<thead>
							<tr>
								<th>Event Name</th>
								<th class="hidden-xs">Event Type</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if(count($events) > 0){
									foreach($events as $cur){
										if(!in_array($cur['event_type'], $bypass_event_types)){
											
											echo '<tr><td>'.$this->events_model->get_event_name($cur).'</td><td class="hidden-xs">'.$this->events_model->get_event_type($cur).'</td><td>'.format_date($cur['event_date_start']).'</td><td><a href="'.base_url().'serve/?e='.url_enc($cur['id_event']).'" class="btn btn-primary">Select</a></td></tr>';
										}
									}
								}else{
									echo '<tr><td colspan="6"><h3 class="text-center">No recent events found!</h3></td></tr>';
								}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<input type="hidden" name="id_people_encoded" value="<?php echo $user['id_people_encoded'];?>">
	</form>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this affiliate?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>
<script>

</script>

<!-- /top navigation -->