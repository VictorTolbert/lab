<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$maprow = 1;
$action = 'Edit Church MAP Report';
if($first_map){
	$name = ' Blueprint';
}else{
	$name = ' Update';
}
	
$name .= ' <small>';
if($use_qtrs){
	$name .= $this->churches_model->get_church_name($church).' - '.$date_params['qtr_name'].' '.$date_params['qtr_year'];
}else{
	$name .= $this->churches_model->get_church_name($church).' - '.$date_params['qtr_year'];
}
$name .= '</small>';

$headers['goals']		= '<h5>Goals</h5><small>Goals for '.$date_params['qtr_year'].'</small>';
$headers['actuals']	= '<h5>Actuals</h5><small>Goals for '.$date_params['qtr_year'].'</small>';
$headers['cumulative']	= '<h5>Cumulative</h5><small>ALL years-to-date</small>';
if($use_qtrs){
	$duration_text				= 'in '.$date_params['qtr_name'].' '.$date_params['qtr_year'];
	$duration_text_dates	=$duration_text_dates;
	$headers['ps_totals']		= '<h5>PS Totals
									<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="These numbers are based on the data that Promise Serves has collected throughout '.$date_params['qtr_year'].'. This number does not necessarily reflect the actual numbers that your churches represent as Promise Serves cannot account for inaccurate or incomplete information entered by your advocates."></i>
								</h5>';
}else{
	$duration_text				= 'during the  '.$date_params['qtr_year'].' calendar year';
	$duration_text_dates	= $date_params['qtr_year'];
	$headers['ps_totals']	= '<h5>PS Totals
									<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="These numbers are based on the data that Promise Serves has collected over '.$date_params['qtr_name'].' '.$date_params['qtr_year'].'. This number does not necessarily reflect the actual numbers that your churches represent as Promise Serves cannot account for inaccurate or incomplete information entered by your advocates."></i>
								</h5>';
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
					<a href="<?php echo base_url();?>maps/list">
						MAP Reports 
					</a>
				</li>
				<li class="active"><?php echo $action;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Church MAP <?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<?php if($disabled == 'disabled' && !$just_submitted){?>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="alert alert-full alert-warning alert-dismissible text-center" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<strong>This MAP update has been submitted already.</strong>
							<p>You will not be able to make any changes to this MAP because it has been previously submitted.</p>
							<p>The next MAP update can be submitted after <?= date_offset('F jS',$date_params_next_qtr['date_add_start']);?>.</p>
						</div>
					</div>
				</div>
			<?php }?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-6 col-sm-offset-3">
					<div class="ltp-video-wrapper border-light-gray">
						<iframe src="https://player.vimeo.com/video/397520693?api=1&player_id=resources-vimeo-player" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="resources-vimeo-player"></iframe>
					</div>
				</div>
			</div>
			<div class="row">
				<br />
				<?php echo $this->session->flashdata('msg'); ?>
				<form class="form-horizontal form-label-left"  id="form-map-report" name="form-limiter" action="<?php echo base_url();?>maps/<?= $route;?>" method="post">
					<fieldset>
						<legend>Select</legend>
						<div class="col-xs-12 col-sm-12">
							<?php if($use_qtrs){?>
							
								<div class="col-xs-12 col-sm-6 text-center">
									<?php echo  $this->website_model->input_menu_churches('id_church', $id_church , 'id_church', 'input-lg form-control select-limiter', array('include_parent_church_ids' => 0, 'limiter_view' => 0)) ;?>
								</div>
								<div class="col-xs-12 col-sm-6 text-center">
									<?= $this->reports_model->quarter_name_dropdown('qtr', $qtr, 'qtr', 'input-lg form-control select-limiter  top10-xs top10-sm', array('show_range_option' => 0, 'limiter_view' => 0));?>
								</div>
						<?php }else{
										echo '<div class="col-xs-12 col-sm-6 col-sm-offset-3">'.$this->website_model->input_menu_churches('id_church', $id_church , 'id_church', 'input-lg form-control select-limiter', array('include_parent_church_ids' => 0, 'limiter_view' => 0)).'</div>';
										echo '<input type="hidden" name="qtr" value="'.$qtr.'">';
									}?>
						</div>
					</fieldset>
					
					<fieldset class="entry-area">
						<legend>Stats</legend>
						<div class="col-md-12 hidden-xs hidden-sm">
							<div class="col-sm-4">
								<h3>Category</h3>
							</div>
							<div class="col-sm-2 text-center">
								<h3>
									PS Totals
									<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="These numbers are based on the data that Promise Serves has collected <?php $duration_text;?>. This number does not necessarily reflect the actual numbers that your churches represent as Promise Serves cannot account for inaccurate or incomplete information entered by your advocates."></i>
								</h3>
								<small>Best number based on available data</small>
							</div>
							<div class="col-sm-2 text-center <?= $class_show['goals'];?>">
								<h3>Goals</h3><small>Goals for <?= $date_params['qtr_year'];?></small>
							</div>
							<div class="col-sm-2 text-center <?= $class_show['actual'];?>">
								<h3>Actual</h3> <small><?php echo $this->maps_model->get_jan_july($date_params); ?> 1, <?= $date_params['qtr_year'];?> - <?php echo $this->maps_model->get_today_dec($date_params);?></small></h3>
							</div>
							<div class="col-sm-2 text-center <?= $class_show['cumulative'];?>">
								<h3>Cumulative</h3><small>ALL years-to-date</small></h3>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>Awareness & Community Events</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of awareness or awareness / orientation combination events held <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['awareness_events']['count'];?> <a href="#" data-target="#modalawarenessevents" data-toggle="modal"><i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a></h5>
								</div>
							</div>
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control" name="id_map_set_val_29" id="id_map_set_val_29" value="<?php echo set_value('id_map_set_val_29', $goals['goal_events_awareness']);?>" <?= $disabled;?> >
								</div>
							</div>
								<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_37" id="id_map_set_val_37" value="<?php echo set_value('id_map_set_val_37', $actuals['actual_events_awareness']);?>"  <?= $disabled;?>  data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_events_awareness'];?>" placeholder="Approx <?= $ps['awareness_events']['count'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?> map-total" name="id_map_set_val_45" id="id_map_set_val_45" value="<?php echo set_value('id_map_set_val_45', $totals['total_events_awareness']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_events_awareness'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>Adoption 101 Events</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of Aoption 101 events that your church hosted <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
									<?= $headers['ps_totals'];?>
									<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
								<h5>? <i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Sorry, Promise Serves cannot calculate this data for <?=$duration_text_dates;?>."></i></h5>
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm ">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center ">
									<input type="number" class="form-control" name="id_map_set_val_30" id="id_map_set_val_30" value="<?php echo set_value('id_map_set_val_30', $goals['goal_events_adoption101']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_38" id="id_map_set_val_38" value="<?php echo set_value('id_map_set_val_38', $actuals['actual_events_adoption101']);?>" <?= $disabled;?> data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_events_adoption101'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?> map-total" name="id_map_set_val_46" id="id_map_set_val_46" value="<?php echo set_value('id_map_set_val_46', $totals['total_events_adoption101']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_events_adoption101'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>New Care Communities</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new care communities that launched <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
									<?= $headers['ps_totals'];?>
									<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['cc_launched']['count'];?> <a href="#" data-target="#modalcclaunched" data-toggle="modal"><i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a> </h5>
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control" name="id_map_set_val_31" id="id_map_set_val_31" value="<?php echo set_value('id_map_set_val_31', $goals['goal_new_care_communities']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center ">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_39" id="id_map_set_val_39" value="<?php echo set_value('id_map_set_val_39', $actuals['actual_new_care_communities']);?>" <?= $disabled;?> data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_care_communities'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control  map-total-<?= $maprow;?> map-total" name="id_map_set_val_47" id="id_map_set_val_47" value="<?php echo set_value('id_map_set_val_47', $totals['total_new_care_communities']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_care_communities'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>New Approved Foster Families</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new foster families from your church that were approved to foster <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>? <i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Sorry, Promise Serves cannot calculate this data for <?=$duration_text_dates;?>."></i></h5> 
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control" name="id_map_set_val_32" id="id_map_set_val_32" value="<?php echo set_value('id_map_set_val_32', $goals['goal_new_approved_ff']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm ">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_40" id="id_map_set_val_40" value="<?php echo set_value('id_map_set_val_40', $actuals['actual_new_approved_ff']);?>" <?= $disabled;?> data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_approved_ff'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control  map-total-<?= $maprow;?>  map-total" name="id_map_set_val_48" id="id_map_set_val_48" value="<?php echo set_value('id_map_set_val_48', $totals['total_new_approved_ff']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_approved_ff'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>New Adoptive Families</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of families from your church that adopted a child <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>? <i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Sorry, Promise Serves cannot calculate this data for <?=$duration_text_dates;?>."></i></h5> 
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control" name="id_map_set_val_60" id="id_map_set_val_60" value="<?php echo set_value('id_map_set_val_60', $goals['goal_new_adoptive_families']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm ">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_61" id="id_map_set_val_61" value="<?php echo set_value('id_map_set_val_61', $actuals['actual_new_adoptive_families']);?>" <?= $disabled;?> data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_adoptive_families'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
										<input <?= $input_disable['cumulative'];?> type="number" class="form-control  map-total-<?= $maprow;?>  map-total" name="id_map_set_val_62" id="id_map_set_val_62" value="<?php echo set_value('id_map_set_val_62', $totals['total_new_adoptive_families']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_adoptive_families'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>New Equipped Volunteers</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new volunteers that completed an orientation event <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['new_trained_vols']['count'];?> <a href="#" data-target="#modalnewtrainedvols" data-toggle="modal"><i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a></h5>
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control" name="id_map_set_val_33" id="id_map_set_val_33" value="<?php echo set_value('id_map_set_val_33', $goals['goal_new_trained_vols']);?>" <?= $disabled;?>>
								</div>
							</div>
								<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm ">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_41" id="id_map_set_val_41" value="<?php echo set_value('id_map_set_val_41', $actuals['actual_new_trained_vols']);?>" <?= $disabled;?> data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_trained_vols'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?> map-total" name="id_map_set_val_49" id="id_map_set_val_49" value="<?php echo set_value('id_map_set_val_49', $totals['total_new_trained_vols']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_trained_vols'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>New Advocate Team Members</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new leaders playing a role on the advocate team at this church  <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['advocates_trained']['count'];?> <a href="#" data-target="#modaladvocatestrained" data-toggle="modal"><i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a></h5>
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control" name="id_map_set_val_55" id="id_map_set_val_55" value="<?php echo set_value('id_map_set_val_55', $goals['goal_new_advocates']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_56" id="id_map_set_val_56" value="<?php echo set_value('id_map_set_val_56', $actuals['actual_new_advocates']);?>" <?= $disabled;?> data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_advocates'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?> map-total" name="id_map_set_val_57" id="id_map_set_val_57" value="<?php echo set_value('id_map_set_val_57', $totals['total_new_advocates']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_advocates'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>New Churches Engaged</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of churches this church helped recruit  <?= $duration_text;?> to create awareness and provides / offers at least one resource (CarePortal, Adoption 101, Loaves & fishes).  No LTP signed agreement, but possibly a signed web form.  Would not have care communities.  Could have raised up a foster family."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>? <i class="fa fa-question-info-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Sorry, Promise Serves cannot calculate this data for <?=$duration_text_dates;?>."></i></h5>
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control" name="id_map_set_val_34" id="id_map_set_val_34" value="<?php echo set_value('id_map_set_val_34', $goals['goal_new_churches_engaged']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_42" id="id_map_set_val_42" value="<?php echo set_value('id_map_set_val_42', $actuals['actual_new_churches_engaged']);?>" <?= $disabled;?>  data-maprow="<?= $maprow;?>"  data-origamount="<?= $actuals['actual_new_churches_engaged'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_50" id="id_map_set_val_50" value="<?php echo set_value('id_map_set_val_50', $totals['total_new_churches_engaged']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_churches_engaged'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>Internal Ministry Expenses</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The amount of money your FAM has spent towards your minitstry <?= $duration_text;?>."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<strong><?= $headers['ps_totals'];?></strong>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>? <i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Sorry, Promise Serves cannot calculate this data for <?= $duration_text_dates;?>."></i></h5>
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="text"  class="form-control" name="id_map_set_val_35" id="id_map_set_val_35" value="<?php echo set_value('id_map_set_val_35', $goals['goal_ministry_budget_internal']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center ">
									<input type="text" class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_43" id="id_map_set_val_43" value="<?php echo set_value('id_map_set_val_43', $actuals['actual_ministry_budget_internal']);?>" <?= $disabled;?> data-maprow="<?= $maprow;?>"  data-origamount="<?= $actuals['actual_ministry_budget_internal'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="text"  class="form-control map-total-<?= $maprow;?> map-total" name="id_map_set_val_51" id="id_map_set_val_51" value="<?php echo set_value('id_map_set_val_51', $totals['total_ministry_budget_internal']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_ministry_budget_internal'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>External Ministry Giving</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The amount of money your church has given <?= $_SESSION['affiliate']['affiliate_name'];?> to help support the movement <?= $duration_text;?> (formerly called External Ministry Budget). "></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>? <i class="fa fa-info-circle tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Sorry, Promise Serves cannot calculate this data <?= $duration_text;?>."></i></h5>
								</div>
							</div>
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['goals'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="text"  class="form-control" name="id_map_set_val_36" id="id_map_set_val_36" value="<?php echo set_value('id_map_set_val_36', $goals['goal_ministry_budget_external']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2 <?= $class_show['actual'];?>">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<input type="text"  class="form-control map-actual-<?= $maprow;?> map-actual" name="id_map_set_val_44" id="id_map_set_val_44" value="<?php echo set_value('id_map_set_val_44', $actuals['actual_ministry_budget_external']);?>" <?= $disabled;?>  data-maprow="<?= $maprow;?>"  data-origamount="<?= numeric_only($actuals['actual_ministry_budget_external']);?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="text" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_52" id="id_map_set_val_52" value="<?php echo set_value('id_map_set_val_52', $totals['total_ministry_budget_external']);?>" <?= $disabled;?> data-origamount="<?= numeric_only($totals['total_ministry_budget_external']);?>">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Prayer Requests</legend>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<div class="form-group">
								<textarea cols="20" rows="10" class="form-control" name="id_map_set_val_54" placeholder="Optional Prayer Requests" <?= $disabled;?>><?php echo set_value('id_map_set_val_54', $item['data_assoc']['id_map_set_val_54']);?></textarea>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>God Stories or Additional Accomplishments</legend>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<div class="form-group">
								<textarea cols="20" rows="10" class="form-control" name="id_map_set_val_53" placeholder="Optional God Stories" <?= $disabled;?>><?php echo set_value('id_map_set_val_53', $item['data_assoc']['id_map_set_val_53']);?></textarea>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Additional FAM Goals</legend>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<div class="form-group">
								<textarea cols="20" rows="10" class="form-control" name="id_map_set_val_63" placeholder="Optional additional FAM goals" <?= $disabled;?>><?php echo set_value('id_map_set_val_63', $item['data_assoc']['id_map_set_val_63']);?></textarea>
							</div>
						</div>
					</fieldset>
					<div class="ln_solid"></div>
					
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-4 well">
							<p class="text-center">If you have completed your MAP entry then click <em>Save & Submit</em> below. This will lock in your entries and the MAP form will no longer be editable.</p>
							<p class="text-center">To complete the form at a later time click the <em>Save & Continue Later</em> button below to save your work and allow you to finish later.</p>
						</div>
						<div class="col-sm-8 col-sm-offset-2 col-xs-12 text-center">
							<?php if($disabled != 'disabled'){?>
							<button type="button" class="btn btn-default btn-lg btn-save col-xs-12 col-sm-4 top10" name="save_continue" value="1" id="save_and_continue">Save & Continue Later</button>
							
							<button type="button" class="btn btn-primary btn-lg btn-save btn-save-submit col-xs-12 col-sm-4 top10" name="save_submit" value="40" id="save_and_submit">Save & Submit</button>
							<?php }?>
							
							<a href="<?php echo base_url();?>maps/list"  class="btn btn-default btn-lg col-xs-12 col-sm-4 top10"  name="cancel" value="1">Cancel</a>
						</div>
					</div>
					<input type="hidden" name="id_map_encoded" value="<?php echo $item['id_map_encoded'];?>" />
					<input type="hidden" name="id_affiliate" value="<?php echo $id_affiliate;?>" />
					<input type="hidden" name="id_map_set" value="<?= url_enc($id_map_set);?>" />
					<input type="hidden" name="map_type" value="church" />
					<input type="hidden" name="save_submit" id="save-submit" value="" />
					<input type="hidden" name="r" value="<?php echo url_enc(base_url().'maps/'.$route);?>" />
					<?php if($first_map){ echo '<input type="hidden" name="is_first" value="1" />';}?>
					<?php if($initial_map){ echo '<input type="hidden" name="is_initial" value="1" />';}?>
				</form>
			</div><!--/.row-->
		</div>
	</div>
		
	<?php 
		foreach($ps_keys as $cur_key){
	?>
		<div class="modal fade" id="modal<?= hash_challenge($cur_key);?>" tabindex="-1" role="dialog" aria-labelledby="modal<?= hash_challenge($cur_key);?>" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog modal-lg vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<h2><?= $ps[$cur_key]['title'];?></h2>
						</div>
						<div class="modal-body" id="modal<?= hash_challenge($cur_key);?>-body">
							
							<?php 
								if(!empty($ps[$cur_key]['data']) && count($ps[$cur_key]['data']) > 0){
									echo '<ol>';
									foreach($ps[$cur_key]['data'] as $cur){
										echo '<li>'.$cur['text_formatted'].'</li>';
									}
									echo '</ol>';
								}else{
									echo '<h3 class="text-center"> Sorry, there is no data to display.</h3>';
								}
									
							?>
						</div>
						
						<div class="modal-footer" id="modal<?= hash_challenge($cur_key);?>-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<?php
		}
	?>
	
	<div class="modal fade" id="modalfirstmap" tabindex="-1" role="dialog" aria-labelledby="modal<?= hash_challenge($cur_key);?>" aria-hidden="true">
			<div class="vertical-alignment-helper">
				<div class="modal-dialog modal-lg vertical-align-center">
					<div class="modal-content">
						<div class="modal-header">
							<h2>Your MAP Blueprint</h2>
						</div>
						<div class="modal-body" id="modal-firstmap-body">
							<p>Thanks for taking the time to enter your Ministry Action Plan numbers into Promise Serves.</p>
							<p>Not only will this help you set and leverage goals, but it will also help you track prorgress and measure the impact your FAM is having in your community.</p>
							<p>Since this is the first time you are entering MAP data on Promise Serves you will be asked to enter your goals for the <?= $date_params['qtr_year'];?> calendar year as well as the cumulative totals for each category that your FAM has achieved since it was started.</p>
							<p>These cumulative totals will help us give you accurate data as your FAM grows.</p>
							
							<p><strong>Please note that this is your only chance to enter cumulative totals for your FAM.</strong></p>
							<p>Once you have submitted this initial MAP Blueprint you will no longer be able to change the cumulative totals. Instead, Promise Serves will tally them up for you to ensure that your numbers stay as accurate as possible.</p>
						</div>
						
						<div class="modal-footer" id="modal<?= hash_challenge($cur_key);?>-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
$(document).ready(function() {
	$('.select-limiter').on('change', function(){
		$('#form-map-report').valid();
		document.getElementById('form-map-report').submit();
	});
	
	$('.btn-save-submit').click(function(e){
		e.preventDefault();
		$('#save-submit').val('1');		
	});
	
	$('.btn-save').click(function(e){
		e.preventDefault();
		$('#form-map-report').attr('action','<?= base_url();?>maps/save_map_entry/' );
		document.getElementById('form-map-report').submit();
	});
	
	$('.map-actual').on('change', function(){
		var id 						= $(this).data('maprow');
		var amount_orig_actual	 	= ps_to_num($(this).data('origamount'));
		var amount_new_actual 		= ps_to_num($(this).val());
		var amount_new_total		= ps_to_num($('.map-total-'+id).val());
		var amount_orig_total	 	= ps_to_num($('.map-total-'+id).data('origamount'));
		var amount_total			= 0;
		
		if(amount_orig_actual == amount_new_actual){
			$('.map-total-'+id).val(amount_orig_total);
			return;
		}else{
			$('.map-total-'+id).val(parseInt(amount_orig_total + amount_new_actual));
			return;
		}
		/*
		if(Number(amount_orig_actual) < Number(amount_new_actual)){
			var difference		= Number(amount_new_actual) - Number(amount_orig_actual);
			amount_total		= Number(amount_orig_total) + Number(difference);
			$('.map-total-'+id).val(amount_total);
			return;
		}	
		if(Number(amount_orig_actual) > Number(amount_new_actual)){
			var difference		= Number(amount_orig_actual) - Number(amount_new_actual);
			amount_total		= Number(amount_orig_total) - Number(difference);
			$('.map-total-'+id).val(amount_total);
			return;
		}		
		*/
	});
	
	$('.map-total').on('blur', function(){
		if($(this).data('origamount') != $(this).val()){
			//$(this).data('origamount', $(this).val());
		}
	});
	
		<?php if($first_map && !$just_submitted){?>
		$('#modalfirstmap').modal('show');
	<?php } ?>
	
	
	 $("input[type='number']").on('focus',function () {
          $(this).select();
        });
	
});
</script>
</body>
</html>