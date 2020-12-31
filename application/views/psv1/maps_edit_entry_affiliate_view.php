<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$maprow = 1;
$action = 'Edit Affiliate MAP';
$name = '<small>';
if($use_qtrs){
	$name .= $affiliate['affiliate_name'].' - '.$date_params['qtr_name'].' '.$date_params['qtr_year'];
}else{
	$name .= $affiliate['affiliate_name'].' - '.$date_params['qtr_year'];
}
$name .= '</small>';

$headers['goals']		= '<h5>Goals</h5><small>Goals for '.$date_params['qtr_year'].'</small>';
$headers['actuals']	= '<h5>Actuals</h5><small>Goals for '.$date_params['qtr_year'].'</small>';
$headers['cumulative']	= '<h5>Cumulative</h5><small>ALL years-to-date</small>';
if($use_qtrs){
	$duration_text				= 'in '.$date_params['qtr_name'].' '.$date_params['qtr_year'];
	$duration_text_dates		=$duration_text_dates;
	$headers['ps_totals']	= '<h5>PS Totals
									<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="These numbers are based on the data that Promise Serves has collected over '.$date_params['qtr_name'].' '.$date_params['qtr_year'].'. This number does not necessarily reflect the actual numbers that your churches represent as Promise Serves cannot account for inaccurate or incomplete information entered by your advocates."></i>
								</h5>';
}else{
	
	$duration_text						= 'during the '.$date_params['qtr_year'].' calendar year ';
	$duration_text_dates			= $date_params['qtr_year'];
	$headers['ps_totals']			= '<h5>PS Totals
									<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="These numbers are based on the data that Promise Serves has collected throughout the calendar year '.$date_params['qtr_year'].'. This number does not necessarily reflect the actual numbers that your churches represent as Promise Serves cannot account for inaccurate or incomplete information entered by your advocates."></i>
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
						MAPs 
					</a>
				</li>
				<li class="active"><?php echo $action;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Affiliate MAP <?php echo $name;?></h1>
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
							<strong>This MAP Report has been submitted already.</strong>
							<p>You will not be able to make any changes to this MAP because it has been previously submitted.</p>
							<p>The next MAP report can be submitted after <?= date_offset('F jS',$date_params_next_qtr['date_add_start']);?>.</p>
						</div>
					</div>
				</div>
			<?php }?>
			<div class="row">
				<br />
				<?php echo $this->session->flashdata('msg'); ?>
				<form class="form-horizontal form-label-left"  id="form-map-report" name="form-limiter" action="<?php echo base_url();?>maps/<?= $route;?>" method="post">
				<?php if($this->security_model->user_has_access(95)){ ?>
				<fieldset>
						<legend>Select</legend>
						<div class="col-xs-12 col-sm-12">
						
							<div class="col-sm-6 text-center">
								<?php echo  $this->website_model->input_menu_affiliates('id_affiliate', $id_affiliate , 'id_affiliate', 'input-lg form-control select-limiter', array('limiter_view' => 0)) ;?>
							</div>
							<div class="col-sm-6 text-center">
								<?= $this->reports_model->quarter_name_dropdown('qtr', $qtr, 'qtr', 'input-lg form-control select-limiter top10-xs top10-sm', array('show_range_option' => 0, 'limiter_view' => 0));?>
							</div>
						</div>
					</fieldset>
				<?php }else{?>
					<input type="hidden" name="qtr" value = "<?= $qtr;?>">
					<input type="hidden" name="id_affiliate" value = "<?= $id_affiliate;?>">
				<?php }?>
					<fieldset class="entry-area">
						<legend>Stats</legend>
						<div class="col-xs-12 col-sm-12 hidden-xs hidden-sm ">
							<div class="col-sm-4">
								<h3>Category</h3>
							</div>
							<div class="col-sm-2 text-center">
								<h3>
									PS Totals
									<i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="These numbers are based on the data that Promise Serves has collected over <?= $date_params['qtr_name'].' '.$date_params['qtr_year'];?>. This number does not necessarily reflect the actual numbers that your churches represent as Promise Serves cannot account for inaccurate or incomplete information entered by your advocates."></i>
								</h3>
								<small>Best number based on available data</small>
							</div>
							<div class="col-sm-2 text-center <?= $class_show['goals'];?>">
								<h3>Goals</h3><small>Goals for <?= $date_params['qtr_year'];?></small>
							</div>
							<div class="col-sm-2 text-center <?= $class_show['goals'];?>">
								<h3>Actual</h3> <small>Jan 1, <?= $date_params['qtr_year'];?> - Today</small>
							</div>
							<div class="col-sm-2 text-center <?= $class_show['goals'];?>">
								<h3>Cumulative</h3><small>ALL years-to-date</small>
							</div>
						</div>	

						<?php $maprow++;?>						
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12 col-sm-12">
								<strong>New Churches Engaged</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Churches Engaged refers to churches who are active in 1 or 2 areas of ministry as a resource to their community, but are not utilizing care communities taught through the Advocate Clinic. These churches have added some level of FAM volunteerism (e.g. utilize the Adoption 101 videos, have a Loaves and Fishes ministry, hosts training events, utilize CarePortal, etc…)."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['churches_engaged']['count'];?>  <a href="#" data-target="#modalchurchesengaged" data-toggle="modal"><i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a></h5>
								</div>
							</div>
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
									<input type="number" class="form-control" name="id_map_set_val_3" id="id_map_set_val_3" value="<?php echo set_value('id_map_set_val_3', $goals['goal_new_churches_engaged']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_churches_engaged'];?>" name="id_map_set_val_11" id="id_map_set_val_11" value="<?php echo set_value('id_map_set_val_11', $actuals['actual_new_churches_engaged']);?>"  <?= $disabled;?> placeholder="PS Reports <?= $ps['churches_engaged']['count'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['cumulative'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_19" id="id_map_set_val_19" value="<?php echo set_value('id_map_set_val_19', $totals['total_new_churches_engaged']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_churches_engaged'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12">
								<strong>New Churches Equipped</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Churches Equipped refers to churches who have clinic-trained Church Advocates and are creating awareness, launching and sustaining care communities, in addition to any other areas of FAM impact."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['churches_equipped']['count'];?> <a href="#" data-target="#modalchurchesequipped" data-toggle="modal"><i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a></h5>
								</div>
							</div>
								<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
									<input type="number" class="form-control" name="id_map_set_val_4" id="id_map_set_val_4" value="<?php echo set_value('id_map_set_val_4', $goals['goal_new_churches_equipped']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_churches_equipped'];?>" name="id_map_set_val_12" id="id_map_set_val_12" value="<?php echo set_value('id_map_set_val_12', $actuals['actual_new_churches_equipped']);?>" <?= $disabled;?> placeholder="PS Reports <?= $ps['churches_equipped']['count'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_20" id="id_map_set_val_20" value="<?php echo set_value('id_map_set_val_20', $totals['total_new_churches_equipped']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_churches_equipped'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12">
								<strong>New Advocates Trained</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new Advocates trained at the Church Advocate Clinic."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['advocates_trained']['count'];?> <a href="#" data-target="#modaladvocatestrained" data-toggle="modal"><i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a></h5>
								</div>
							</div>
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
										<input type="number" class="form-control" name="id_map_set_val_5" id="id_map_set_val_5" value="<?php echo set_value('id_map_set_val_5', $goals['goal_new_advocates_trained']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
										<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_advocates_trained'];?>" name="id_map_set_val_13" id="id_map_set_val_13" value="<?php echo set_value('id_map_set_val_13', $actuals['actual_new_advocates_trained']);?>" <?= $disabled;?> placeholder="PS Reports <?= $ps['advocates_trained']['count'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_21" id="id_map_set_val_21" value="<?php echo set_value('id_map_set_val_21', $totals['total_new_advocates_trained']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_advocates_trained'];?>">
								</div>
							</div>
						</div>
						
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12">
								<strong>New Recruited Foster Families</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new Foster Families that are recruited via your ministry or one of your partner churches."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>?</h5>
								</div>
							</div>
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
									<input type="number" class="form-control" name="id_map_set_val_6" id="id_map_set_val_6" value="<?php echo set_value('id_map_set_val_6', $goals['goal_new_recruited_ff']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_recruited_ff'];?>" name="id_map_set_val_14" id="id_map_set_val_14" value="<?php echo set_value('id_map_set_val_14', $actuals['actual_new_recruited_ff']);?>" <?= $disabled;?> >
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_22" id="id_map_set_val_22" value="<?php echo set_value('id_map_set_val_22', $totals['total_new_recruited_ff']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_recruited_ff'];?>">
								</div>
							</div>
						</div>
						
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12">
								<strong>New Recruited Adoptive Families</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new adoptive families that are recruited via your ministry or one of your partner churches."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>?</h5>
								</div>
							</div>
							
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
									<input type="number" class="form-control" name="id_map_set_val_7" id="id_map_set_val_7" value="<?php echo set_value('id_map_set_val_7', $goals['goal_new_recruited_af']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_recruited_af'];?>" name="id_map_set_val_15" id="id_map_set_val_15" value="<?php echo set_value('id_map_set_val_15', $actuals['actual_new_recruited_af']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_23" id="id_map_set_val_23" value="<?php echo set_value('id_map_set_val_23', $totals['total_new_recruited_af']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_recruited_af'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12">
								<strong>New Clinics Hosted</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of Church Advocate Clinics that you or your partner churches host."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5>?</h5>
								</div>
							</div>
							
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
									<input type="number" class="form-control" name="id_map_set_val_8" id="id_map_set_val_8" value="<?php echo set_value('id_map_set_val_8', $goals['goal_new_clinics_hosted']);?>" <?= $disabled;?>>
								</div>
							</div>	
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_clinics_hosted'];?>" name="id_map_set_val_16" id="id_map_set_val_16" value="<?php echo set_value('id_map_set_val_16', $actuals['actual_new_clinics_hosted']);?>" <?= $disabled;?>>
								</div>
							</div>
							
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total"  data-origamount="<?= $totals['total_new_clinics_hosted'];?>" name="id_map_set_val_24" id="id_map_set_val_24" value="<?php echo set_value('id_map_set_val_24', $totals['total_new_clinics_hosted']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_clinics_hosted'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12">
								<strong>New Care Communities Launched</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new Care Communities that your partner churches launch."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['cc_launched']['count'];?></h5>
								</div>
							</div>
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
									<input type="number" class="form-control" name="id_map_set_val_9" id="id_map_set_val_9" value="<?php echo set_value('id_map_set_val_9', $goals['goal_new_cc_launched']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_cc_launched'];?>" name="id_map_set_val_17" id="id_map_set_val_17" value="<?php echo set_value('id_map_set_val_17', $actuals['actual_new_cc_launched']);?>" <?= $disabled;?>>
								</div>
							</div>
							
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_25" id="id_map_set_val_25" value="<?php echo set_value('id_map_set_val_25', $totals['total_new_cc_launched']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_cc_launched'];?>">
								</div>
							</div>
						</div>
						
						<?php $maprow++;?>
						<div class="col-xs-12 col-sm-12 top20">
							<div class="col-sm-4 col-xs-12">
								<strong>New Care Community Volunteers</strong> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="The number of new Care Community volunteers that your partner churches deploy."></i>
							</div>
							<!-- PS Totals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm4 visible-xs visible-sm ">
										<?= $headers['ps_totals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center">
									<h5><?= $ps['cc_volunteers']['count'];?> <a href="#" data-target="#modalccvolunteers" data-toggle="modal"><i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Click to view data"></i></a></h5>
								</div>
							</div>
							<!-- Goals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['goals'];?>">
										<?= $headers['goals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['goals'];?>">
									<input type="number" class="form-control" name="id_map_set_val_10" id="id_map_set_val_10" value="<?php echo set_value('id_map_set_val_10', $goals['goal_new_cc_volunteers']);?>" <?= $disabled;?>>
								</div>
							</div>
							<!-- Actuals -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['actuals'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['actual'];?>">
									<input type="number" class="form-control map-actual-<?= $maprow;?> map-actual" data-maprow="<?= $maprow;?>" data-origamount="<?= $actuals['actual_new_cc_volunteers'];?>" name="id_map_set_val_18" id="id_map_set_val_18" value="<?php echo set_value('id_map_set_val_18', $actuals['actual_new_cc_volunteers']);?>" <?= $disabled;?> placeholder="PS Reports <?= $ps['cc_volunteers']['count'];?>">
								</div>
							</div>
							<!-- Culumlative -->
							<div class="col-xs-12 col-sm-12 col-md-2">
								<div class="col-xs-8 col-sm-4 visible-xs visible-sm <?= $class_show['actual'];?>">
										<?= $headers['cumulative'];?>
										<div class="top10 col-xs-12 col-sm-12"></div>
								</div>
								<div class="col-xs-4 col-sm-8 col-md-12 text-center <?= $class_show['cumulative'];?>">
									<input <?= $input_disable['cumulative'];?> type="number" class="form-control map-total-<?= $maprow;?>  map-total" name="id_map_set_val_26" id="id_map_set_val_26" value="<?php echo set_value('id_map_set_val_26', $totals['total_new_cc_volunteers']);?>" <?= $disabled;?> data-origamount="<?= $totals['total_new_cc_volunteers'];?>">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Prayer Requests</legend>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<div class="form-group">
								<textarea cols="20" rows="10" class="form-control" name="id_map_set_val_27" placeholder="Optional Prayer Requests" <?= $disabled;?>><?php echo set_value('id_map_set_val_27', $item['data_assoc']['id_map_set_val_27']);?></textarea>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>God Stories</legend>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<div class="form-group">
								<textarea cols="20" rows="10" class="form-control" name="id_map_set_val_28" placeholder="Optional God Stories" <?= $disabled;?>><?php echo set_value('id_map_set_val_28', $item['data_assoc']['id_map_set_val_28']);?></textarea>
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
					<input type="hidden" name="id_map_set" value="<?= url_enc($id_map_set);?>" />
					<input type="hidden" name="map_type" value="<?= $map_type;?>" />
					<input type="hidden" name="save_submit" id="save-submit" value="" />
					<input type="hidden" name="r" value="<?php echo url_enc(base_url().'maps/'.$route);?>" />
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
							<h2>Your First MAP Entry</h2>
						</div>
						<div class="modal-body" id="modal-firstmap-body">
							<p>Thanks for taking the time to enter your Ministry Action Plan numbers into Promise Serves.</p>
							<p>Not only will this help you set and leverage goals, but it will also help you track prorgress and measure the impact your organization is having in your region.</p>
							<p>Since this is the first time you are entering MAP data on Promise Serves you will be asked to enter your goals for the <?= $date_params['qtr_year'];?> calendar year as well as the cumulative totals for each category that your organization has achieved since it was started.</p>
							<p>These cumulative totals will help us give you accurate data as your organization grows.</p>
							
							<p><strong>Please note that this is your only chance to enter cumulative totals for your organization.</strong></p>
							<p>Once you have submitted this MAP entry you will no longer be able to change the cumulative totals. Instead, Promise Serves will tally them up for you to ensure that your numbers stay as accurate as possible.</p>
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
		if(Number(amount_orig_actual) == Number(amount_new_actual)){
			$('.map-total-'+id).val(amount_orig_total);
			return;
		}
		
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