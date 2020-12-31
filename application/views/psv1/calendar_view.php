<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<div class="col-sm-12 main container">
	<div class="row hidden-print">
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>dashboard">
					<em class="fa fa-home"></em>
				</a>
			</li>
			<li class="active">
				<a href="<?php echo base_url();?>calendar/viewcalendar">
					Calendar 
				</a>
			</li>
		</ol>
	</div> <!--/.row-->
		
	<div class="row hidden-print">
		<div class="col-lg-12">
			<h1 class="page-header">Calendar <small><small><a href="#modalcalendareventdetails" data-toggle="modal" data-target="#modalcalendareventdetails" data-mode="add" class="btn-modal-event-add btn-modal-event-edit-toggle">[Add New]</a></small></small>
				<div class="pull-right">
					<a href="#modalcalendareventdetails" data-toggle="modal" data-target="#modalcalendareventdetails" class="btn btn-primary btn-modal-event-add" data-mode="add"><i class="fa fa-plus"></i> Add New</a>
					<a href="<?php base_url();?>/resources/view/video-ps-calendar" class="btn btn-default" data-mode="add"><i class="fas fa-play-circle"></i> Watch Tutorial Video</a>
				</div>
			</h1>
		</div>
	</div>
	
	
	<div class="panel panel-container">
		<div class="row">
			<form id="calendar-limiters" action="" method="post">
				<?php echo $this->session->flashdata('msg'); ?>
				<div class="col-sm-2 cal-limiters-column hidden-print">
					<h3 class="text-center top30">Calendar Items</h3>
					<hr />
					<div class="col-md-12 col-sm-12 col-xs-12 top10 text-center hidden-xs">
						<a href="#modalcalendareventdetails" data-toggle="modal" data-target="#modalcalendareventdetails" data-mode="add" class="btn btn-primary btn-block btn-modal-event-add btn-modal-event-edit-toggle""><i class="fa fa-plus"></i> Add New</a>
					</div>
					
					<div class="col-sm-12 col-xs-4 top30">
						<input type="checkbox" name="event_types[]" value="family" class="cal-limiter-type cal-limiter" <?= $calendar['selected']['family'];?>> Family
					</div>
					<div class="col-sm-12 col-xs-4 top20">
						<input type="checkbox" name="event_types[]" value="meals" class="cal-limiter-type cal-limiter" <?= $calendar['selected']['meals'];?>> Meals
					</div>
					<div class="col-sm-12 col-xs-4 top20">
						<input type="checkbox" name="event_types[]" value="needs" class="cal-limiter-type cal-limiter" <?= $calendar['selected']['needs'];?>> Needs
					</div>
					<div class="col-sm-12 col-xs-4 top20">
						<input type="checkbox" name="event_types[]" value="recurring" class="cal-limiter-type cal-limiter" <?= $calendar['selected']['recurring'];?>> Birthdays
					</div>
					<div class="col-sm-12 col-xs-4 top20">
						<input type="checkbox" name="event_types[]" value="learning" class="cal-limiter-type cal-limiter" <?= $calendar['selected']['learning'];?>> Learning
					</div>
					<hr />
					<?php 
						if($this->security_model->user_has_access(95)){ 
							echo  '<div class="col-md-12  col-sm-12 col-xs-12 top20 xs-top10">';
							echo $this->website_model->input_menu_affiliates('id_affiliate', $calendar['selected']['id_affiliate'], 'id_affiliate', 'input-sm input-limiter btn-block cal-limiter cal-limiter-affiliate', array('limiter_view' => 1));
							echo '</div>';
						}?>
					<?php if($this->security_model->user_has_access(60)){ ?>
					<div class="col-md-12 col-sm-12 col-xs-12 top20 xs-top10 ajax-target-id-church">
						<?php echo  $this->website_model->input_menu_churches('id_church', $calendar['selected']['id_church'], 'id_church', 'input-sm input-limiter btn-block cal-limiter-church', array('include_parent_church_ids' => 1, 'limiter_view' => 1, 'no_null_default' => 1, 'use_cal_limiters' => 1, 'debug' => 0)); ?>
					</div>
					<?php }?>
				</div>
				<div class="col-sm-10 col-xs-12 print-col-12 print-top20">
				
					<div id="ps_calendar_loading" style="position: absolute; top: 0;   right: 0;  bottom: 0;  left: 0;  z-index: 1040; background-color: #fff; opacity: 0.7; margin: -20px;">
						<div style=" display: block; width: 40%; left: 30%; top:20%; border: none; color: #000; position: absolute; z-index: 1070; background: transparent;">
							<p class="text-center"><i class="fas fa-sync fa-spin fa-3x"></i></p><h3 class="text-center">Just a moment...</h3>
						</div>
					</div>
					<div id="ltp_calendar" class="calendar-main"></div>
				</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this event?
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

<style> 
.fc-event-container{
	-webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
</style>


<script>
$(document).ready(function() {
	ps_initialize_calendar();
});

<?php if(!empty($id_event)){ ?>
	$('#modalcalendareventdetails').modal();
	calendar_load_modal_event_details('<?php echo $id_event;?>', '<?php echo $event['id_event'];?>', '<?php echo $event['event_date_start'];?>');
<?php }?>
</script>