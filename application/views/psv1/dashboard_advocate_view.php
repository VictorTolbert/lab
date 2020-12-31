<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>

	<div class="container col-sm-12 main page-dashboard" >
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-sm-8" >
				<h1 class="page-header">
					Dashboard
				</h1>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="pull-right top30 xs-top30 gutter40">
					<?php echo $this->dashboard_model->make_dash_quick_link_button();?>
				</div>
			</div>
		</div><!--/.row-->

		<div class="col-sm-12" data-scrollTo="tooltip"  >
		<?php echo $this->session->flashdata('msg'); ?>
			<div class="row">
				<div class="column-left col-sm-6 col-xl-4 col-xs-12">
					<div class="panel panel-container" data-scrollTo="tooltip" data-step="3" data-intro="This space will show you meals, upcoming events, and needs that are relevant to you and happening over the next 30 days.">
				<?php if (! empty($use_notifications)) {?>
					<div class="panel-heading">
						<h2 class="text-center">Notifications</h2>
					</div>
					<div class="panel-body">
						<div class="row top20"></div>
						<?php
                            $upcoming = $this->dashboard_model->get_dashboard_notifications();
                            if (! empty($upcoming['html']) && ! empty($upcoming['data'])) {
                                echo $upcoming['html'];
                            } else {
                                echo '<div class="text-center row top30"<h3 class="text-center"><i class="fas fa-check"></i> No notifications!</h3></div>';
                            }

                        ?>

					</div>
				<?php } else {?>
					<!-- Needs & Events -->
					<div class="panel-heading">
						<h2 class="text-center">Upcoming Items</h2>
					</div>
					<div class="panel-body">
						<div class="row top20"></div>
						<?php
                            $upcoming = $this->dashboard_model->get_dashboard_upcoming_items();
                            if (! empty($upcoming['html']) && ! empty($upcoming['data'])) {
                                echo $upcoming['html'];
                            } else {
                                echo '<div class="text-center row top30">No relevant upcoming items in the next 30 days.</div>';
                            }
                        ?>
					</div>
				<?php }?>


					</div>

					<!-- Calendar -->
					<div class="panel panel-container" data-scrollTo="tooltip" data-step="4" data-intro="This is the mini-calendar view which will give you a quick glance of the upcoming events at your church and community events in your area.">
						<div class="top20"></div>
						<div class="panel-heading">
							<h2 class="text-center"><a href="<?php echo base_url();?>calendar" data-scrollTo="tooltip"  data-step="5" data-intro="You can access the full calendar by clicking here, or by visiting the calendar link under the top navigation option Events & Needs. For more information on how to use the calendar please watch the training video below. <a href='<?php base_url();?>/resources/view/video-ps-calendar'><img src='<?php echo base_url();?>img/video_thumbs/ps_how_to_calendar.jpg' width='250' style='border: 1px solid #000'></a>">Calendar</a></h2>
						</div>
						<div class="panel-body">
							<div id="ltp_calendar" class="calendar-mini"></div>
						</div>
					</div>
				</div>

				<!-- Active CCs -->
				<?php $dash_mycc_mode = get_limiter_session_value('dash_mycc_mode');?>
				<div class="column-middle col-sm-6 col-xl-4 col-xs-12">
					<div class="panel panel-container ">
						<div class="panel-heading">
							<div class="text-center form-group top20 xs-top10" id="mycc-list-mode-wrapper">
								<select id="dashboard-mycc-mode" class="form-conrtol input-lg">
									<option value="assigned" <?php if ($dash_mycc_mode == 'assigned') {
                            echo 'selected';
                        }?>>Active Care Communities assigned to me</option>
									<option value="church" <?php if ($dash_mycc_mode == 'church') {
                            echo 'selected';
                        }?>>Active Care Communities assigned to my church(es)</option>
								</select>
							</div>
						</div>

						<div class="panel-body dashboard-advocate-mycc">
							<div class="mycc-list-mode-assigned <?php if (! empty($dash_mycc_mode) && $dash_mycc_mode != 'assigned') {
                            echo 'hide';
                        }?>">
								<div class="row top10">
									<p class="text-center" id="mycc-list-explain">This list contains the active care communities that are assigned to me as the supervising advocate.<br />
									<!-- <a href="#mycc-list-mode-wrapper" data-toggle="collapse">Click here to change</a> -->
								</div>
							<?php
                                if (empty($communities)) {
                                    echo '<div class="text-center row top30">No active care communities. <br /><br /><a href="' . base_url() . 'communities" class="btn btn-default">Add or Assign a Community</a></div>';
                                } else {
                                    $already_displayed	= array();
                                    $count_comms		= 0;
                                    foreach ($communities as $cur) {
                                        if (! empty($cur['id_advocate']) && ! in_array($cur['id_community'], $already_displayed) && $cur['id_advocate'] == $user['id_people']) {
                                            $already_displayed[]	= $cur['id_community'];
                                            if ($count_comms == 3) {
                                                echo '<span id="dashboard-comms-assigned-collapsed" class="collapse">';
                                            }
                                            $team = $this->dashboard_model->get_dashboard_active_community_team_members(array('id_community' => $cur['id_community']));
                                            $msg_json = '';
                                            echo '<div class="row top30"><div id="header-community-' . $cur['id_community'] . '"><div class="col-sm-9 col-lg-6"><h4>' . $this->communities_model->get_community_name($cur) . '</h4></div><div class="col-sm-3 col-lg-3">Started ' . date_offset('m/d/Y', $cur['date_start']) . ' </div>
											<div class="text-center col-sm-12 col-md-3">
												<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#teamcommunity' . $cur['id_community'] . '">Show More</button>
											</div>
											</div>
												<div id="teamcommunity' . $cur['id_community'] . '" class="collapse col-sm-12 top20 well">
													<p class="text-center">
														<small>
															' . $this->communities_model->format_foster_parents_name($team['data']) . '<br />
															' . $this->communities_model->format_community_address($team['data']) . '<br />
															' . $this->communities_model->format_foster_parents_phones($team['data']) . '
														</small>
													</p>';
                                            if (! empty($team['html'])) {
                                                echo $team['html'];
                                                echo '<div class="">';
                                                if (! empty($team['data']['team_member_people_ids'])) {
                                                    echo '<a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn btn-default btn-md btn-msg-trigger center-block" data-rids="community_volunteers_' . $team['data']['id_community_encoded'] . '" data-msgjson=\'' . $msg_json . '\'><i class="fa fa-paper-plane-o"></i> Send A Team Message</a>';
                                                }
                                                echo '</div>';
                                            } else {
                                                echo '<h4 class="text-center">No active team</h4><br /><br /><a href="' . base_url() . 'communities/build/' . $cur['id_community_encoded'] . '" class="btn btn-default">Build Team</a>';
                                            }
                                            echo '</div></div><hr />';
                                            $count_comms++;
                                        }
                                    }
                                    if ($count_comms > 2) {
                                        echo '</span><p class="text-center"><a href="#dashboard-comms-assigned-collapsed" data-toggle="collapse"><small>Show / Hide ' . ($count_comms - 2) . ' more</small></a></p>';
                                    }
                                }

                            ?>
							</div>
							<div class="mycc-list-mode-church <?php if ($dash_mycc_mode != 'church') {
                                echo 'hide';
                            }?>">
								<div class="row top10">
									<p class="text-center" id="mycc-list-church-explain">This list contains the active care communities that are being served by my church(es).<br />
									<!-- <a href="#mycc-list-mode-wrapper" data-toggle="collapse">Click here to change</a> -->
								</div>
							<?php

                                if (empty($church_communities)) {
                                    echo '<div class="text-center row top30">No active care communities. <br /><br /><a href="' . base_url() . 'communities" class="btn btn-default">Add or Assign a Community</a></div>';
                                } else {
                                    $already_displayed	= array();
                                    $count_comms		= 0;
                                    foreach ($church_communities as $cur) {
                                        if (! in_array($cur['id_community'], $already_displayed)) {
                                            $already_displayed[]	= $cur['id_community'];
                                            if ($count_comms == 3) {
                                                echo '<span id="dashboard-comms-church-collapsed" class="collapse">';
                                            }
                                            $team		= $this->dashboard_model->get_dashboard_active_community_team_members(array('id_community' => $cur['id_community']));
                                            $msg_json 	= '';
                                            echo '<div class="row top30"><div id="header-community-' . $cur['id_community'] . '"><div class="col-sm-9 col-lg-6"><h4>' . $this->communities_model->get_community_name($cur) . '</h4></div><div class="col-sm-3 col-lg-3">Started ' . date_offset('m/d/Y', $cur['date_start']) . ' </div>
											<div class="text-center col-sm-12 col-md-3">
												<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#teamcommunity' . $cur['id_community'] . '">Show More</button>
											</div>
											</div>
												<div id="teamcommunity' . $cur['id_community'] . '" class="collapse col-sm-12 top20 well">
													<p class="text-center">
														<small>
															' . $this->communities_model->format_foster_parents_name($team['data']) . '<br />
															' . $this->communities_model->format_community_address($team['data']) . '<br />
															' . $this->communities_model->format_foster_parents_phones($team['data']) . '
														</small>
													</p>';
                                            if (! empty($team['html'])) {
                                                echo $team['html'];
                                                echo '<div class="">';
                                                if (! empty($team['data']['team_member_people_ids'])) {
                                                    echo '<a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn btn-default btn-md btn-msg-trigger center-block" data-rids="community_volunteers_' . $team['data']['id_community_encoded'] . '" data-msgjson=\'' . $msg_json . '\' <i class="fa fa-paper-plane-o"></i> Send A Team Message</a>';
                                                }
                                                echo '</div>';
                                            } else {
                                                echo '<h4 class="text-center">No active team</h4><br /><br /><a href="' . base_url() . 'communities/build/' . $cur['id_community_encoded'] . '" class="btn btn-default">Build Team</a>';
                                            }
                                            echo '</div></div><hr />';
                                            $count_comms++;
                                        }
                                    }
                                    if ($count_comms > 2) {
                                        echo '</span><p class="text-center"><a href="#dashboard-comms-church-collapsed" data-toggle="collapse"><small>Show / Hide ' . ($count_comms - 2) . ' more</small></a></p>';
                                    }
                                }
                            ?>
							</div>
						</div>
					</div>
					<div class="panel panel-container ">
						<div class="panel-heading">
							<h2 class="text-center">Families Awaiting Communities</h2>
						</div>
						<div class="panel-body">
							<div class="row top10"></div>
							<?php
                                $fam_count			= 0;
                                $families				= $this->dashboard_model->get_dashboard_awaiting_families();
                                $cur_quick_check_link	= base_url() . 'families/quickcheckawaitingfamilies/?c=' . url_enc($_SESSION['logged_in']['id_home_church']);
                                if (empty($families)) {
                                    echo '<div class="text-center row top30">No awaiting families are in your area.<br /><br /><a class="btn btn-default" href="' . base_url() . 'needs/?r=' . url_enc(base_url().'dashboard') . '">Add a family</a></div>';
                                    echo '<div class="text-center row top30"><a class="btn btn-default" href="' . $cur_quick_check_link . '">Find Families</a></div>';
                                } else {
                                    foreach ($families as $cur) {
                                        if (! empty($cur['family_name'])) {
                                            $msg_json 	= '';
                                            $claimed	= false;
                                            if ($fam_count == 3) {
                                                echo '<span id="dashboard-awaiting-fams-collapsed" class="collapse">';
                                            }

                                            $fam_count++;

                                            if ($cur['family_state'] == 42 && $this->security_model->can_admin_church_scope(array('id_church' => $cur['id_church_claim']))) {
                                                $claimed = true;
                                            }

                                            if ($claimed) {
                                                $match_type 			= 'Claimed Family - Awaiting Community';
                                                $url_match_type 		= 'church';
                                            } else {
                                                $match_type 				= 'Church Match';
                                                $url_match_type 			= 'church';
                                                if (! empty($cur['distance'])) {
                                                    $match_type 			= 'Location Match - ' . number_format($cur['distance'], 2) . ' miles';
                                                    if (! empty($user['id_church_parent']) && ! empty($cur['match_location_name'])) {
                                                        $match_type .= ' from ' . $cur['match_location_name'] . ' campus';
                                                        $match_type = str_ireplace('campus campus', 'campus', $match_type);
                                                    } elseif (! empty($user['id_church_parent']) && ! empty($cur['campus_name'])) {
                                                        $match_type .= ' from ' . $cur['campus_name'] . ' campus';
                                                        $match_type = str_ireplace('campus campus', 'campus', $match_type);
                                                    }
                                                    $url_match_type = 'location';
                                                }
                                            }

                                            echo '<div id="wrapper-awaiting-family-' . url_enc($cur['id_family']) . '" class="row top30">
    											<div id="header-family-' . url_enc($cur['id_family']) . '">
    												<div class="col-sm-6"><h4>' . $this->families_model->get_family_name($cur) . '</h4><small>' . $match_type . '</small></div>';
                                            if ($claimed) {
                                                echo '<div class="text-center col-sm-2">Claimed</div>';
                                            } else {
                                                echo '<div class="text-center col-sm-2">Added ' . date_offset('m/d/Y', $cur['date_add']) . '</div>';
                                            }

                                            if ($claimed) {
                                                echo '<div class="text-center col-sm-4">
    													<a href="' . base_url() . 'communities/" class="btn btn-default btn-block block-center">
    														Build Team
    													</a>
    												</div>';
                                            } else {
                                                echo '<div class="text-center col-sm-4">
    														<div class="dropdown" style="float:none;">
    															<button class="btn btn-default dropdown-toggle btn-block block-center" role="button" data-toggle="dropdown">
    																<span class="caret"></span> Actions
    															</button>
    															<ul class="dropdown-menu">
    																<li><a class="btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="View Family Info - ' . $this->families_model->get_family_name($cur) . '" data-ajaxurl="' . base_url() . 'families/ajax_claim_ignore_family/?match_type=' . $url_match_type . '&mode=view&f=' . url_enc($cur['id_family']) . '" data-modalclass="modal-lg">View</a></li>

    																<li><a class="btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="Claim Family - ' . $this->families_model->get_family_name($cur) . '" data-ajaxurl="' . base_url() . 'families/ajax_claim_ignore_family/?match_type=' . $url_match_type . '&mode=claim&f=' . url_enc($cur['id_family']) . '" data-modalclass="modal-lg">Claim</a></li>

    																<li><a class="btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="Ignore Family - ' . $this->families_model->get_family_name($cur) . '" data-target="#modalnotify" data-ajaxurl="' . base_url() . 'families/ajax_claim_ignore_family/?match_type=' . $url_match_type . '&mode=ignore&f=' . url_enc($cur['id_family']) . '" data-modalclass="modal-lg">Ignore</a></li>
    															</ul>
    														</div>
    													</div>';
                                            }
                                            echo '
    										</div></div>
    										<hr />';
                                        }//end family name check
                                    }

                                    if ($fam_count > 2) {
                                        echo '</span><p class="text-center"><a href="#dashboard-awaiting-fams-collapsed" data-toggle="collapse"><small>Show / Hide ' . ($fam_count - 2) . ' more</small></a></p>';
                                    }

                                    echo '<div class="text-center row top30"><a class="btn btn-default" href="' . $cur_quick_check_link . '">Find Families</a></div>';
                                }

                                if ($fam_count < 1) {
                                    echo '<div class="text-center row top30">No awaiting families are in your area.</div>';
                                }

                            ?>

						</div>
					</div>
				</div>
				<?php if (1 ==2) {?>
				<div class="column-right col-sm-6 col-xl-4 col-xs-12">
					<div class="panel panel-container panel-dash-tutorials">
						<div class="panel-heading">
							<h2 class="text-center">Tutorials & Help</h2>
						</div>
						<div class="panel-body">
							<div class="row top20"></div>
							<h4 id="dash-video-player-cur-video-header">Promise Serves Overview</h4>
							<div class="ltp-video-wrapper border-light-gray">
								<iframe src="https://player.vimeo.com/video/295505717" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen id="dash-video-player-iframe"></iframe>
							</div>
							<div class="row top20"></div>
							<h4>Other Tutorials</h4>
							<div class="row top10">
								<div class="col-sm-3">
									<a href="#" data-vimeo="335381933" class="video-load-link" data-videotitle="Advocate Training Spring 2019 Webinar">
										<img src="<?php echo base_url();?>img/video_thumbs/335381933.jpg?mw=960&mh=540" class="img-responsive">
									</a>
								</div>
								<div class="col-sm-9">
									<a href="#" data-vimeo="335381933" class="video-load-link" data-videotitle="Advocate Training Spring 2019 Webinar"><span class="badge badge-success">NEW</span> Advocate Training Spring 2019 Webinar</a>
								</div>
							</div>
							<div class="row top5"><hr /></div>
							<div class="row top10">
								<div class="col-sm-3">
									<a href="#" data-vimeo="339651212" class="video-load-link" data-videotitle="Handling Events">
										<img src="<?php echo base_url();?>img/video_thumbs/681923871.jpg?mw=960&mh=540" class="img-responsive">
									</a>
								</div>
								<div class="col-sm-9">
									<a href="#" data-vimeo="339651212" class="video-load-link" data-videotitle="Handling Events">Handling Events</a>
								</div>
							</div>
							<div class="row top5"><hr /></div>
							<div class="row top10">
								<div class="col-sm-3">
									<a href="#" data-vimeo="341002278" class="video-load-link" data-videotitle="Managing Families">
										<img src="<?php echo base_url();?>img/video_thumbs/732764000.jpg?mw=960&mh=540" class="img-responsive">
									</a>
								</div>
								<div class="col-sm-9">
									<a href="#" data-vimeo="341002278" class="video-load-link" data-videotitle="Volunteer Orientation Response Card">Managing Families</a>
								</div>
							</div>
							<div class="row top5"><hr /></div>
							<div class="row top10">
								<div class="col-sm-3">
									<a href="#" data-vimeo="294696183" class="video-load-link" data-videotitle="Volunteer Orientation Response Card">
										<img src="<?php echo base_url();?>img/video_thumbs/731659125.jpg?mw=960&mh=540" class="img-responsive">
									</a>
								</div>
								<div class="col-sm-9">
									<a href="#" data-vimeo="294696183" class="video-load-link" data-videotitle="Volunteer Orientation Response Card">Volunteer Orientation Response Card</a>
								</div>
							</div>
							<div class="row top5"><hr /></div>
							<div class="row top10">
								<div class="col-sm-3">
									<a href="#" data-vimeo="294226449" class="video-load-link" data-videotitle="How to find event participants">
										<img src="<?php echo base_url();?>img/video_thumbs/731068324.jpg?mw=960&mh=540" class="img-responsive">
									</a>
								</div>
								<div class="col-sm-9">
									<a href="#" data-vimeo="294226449" class="video-load-link" data-videotitle="How to find event participants">How to find event participants</a>
								</div>
							</div>
							<div class="row top5"><hr /></div>
							<div class="row top10">
								<div class="col-sm-3">
									<a href="#" data-vimeo="295505717" class="video-load-link" data-videotitle="Promise Serves Overview">
										<img src="<?php echo base_url();?>img/video_thumbs/732764000.jpg?mw=960&mh=540" class="img-responsive">
									</a>
								</div>
								<div class="col-sm-9">
									<a href="#" data-vimeo="295505717" class="video-load-link" data-videotitle="Promise Serves Overview">Promise Serves Overview</a>
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<!-- <a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn btn-default btn-md btn-msg-trigger center-block" data-rids="community_volunteers_'.$team['data']['id_community_encoded'].'" data-msgjson=\''.$msg_json.'\'><i class="fa fa-question-circle"></i> Need help? Ask a Question.</a>' -->
							<a href="mailto:jdoublestein@promise686.org"><i class="fa fa-question-circle"></i> Need help? Ask a Question.</a>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>

<!-- Footer Section -->
<?php echo $site_footer; ?>

<div class="modal fade" id="modalad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center" id="modalad-modal-dialog">
			<div class="modal-content">
				<div class="modal-header" >
					<div class="col-xs-11 col-sm-11">
						<span id="modal-ad-header">Join us for Refuel!</span>
					</div>
					<div class="col-xs-1 col-sm-1">
						<span class="text-center"><a href="#" data-dismiss="modal">X</a></span>
					</div>
				</div>
				<div class="modal-body" id="modal-ad-body">
					<a href="https://promiseserves.org/rsvp/?e=MzEwMA&bypass_login=1&utm_medium=web&utm_campaign=ps_ad_dashboard_advocate" target="_blank">
						<img src="<?php echo base_url();?>img/events/ad_advocate_advance_2020.jpg" class="img-responsive center-block">
					</a>
				</div>
				<div class="modal-footer xs-top10">
					<button type="button" class="btn btn-default btn-modal-close center-block" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
function startTour() {
	var tour = introJs()
	tour.setOption('tooltipPosition', 'auto');
	tour.setOption('positionPrecedence', ['left', 'right', 'top', 'bottom']);
	tour.start();
}



$(document).ready(function() {
	ps_initialize_calendar();
	ps_instantiate_notify_clear();
<?php
    $param = $this->people_model->get_people_param(array('id_people' => $_SESSION['logged_in']['id_people'], 'param_type' => 'intro_shown', 'param_name' => 'intro_advocate_dashboard_202003'));

    if (empty($param)) {
        echo 'startTour();';
        $this->people_model->save_people_param(array('id_people' => $_SESSION['logged_in']['id_people'], 'param_type' => 'intro_shown', 'param_name' => 'intro_advocate_dashboard_202003', 'param_value' => 1, 'state' => 1));
    }

    //$param = $this->people_model->get_people_param(array('id_people' => $_SESSION['logged_in']['id_people'], 'param_type' => 'ad_shown', 'param_name' => 'ad_advocate_advance_202010'));

    if (empty($param)) {

        //echo "$('#modalad').modal('show');";
        //$this->people_model->save_people_param(array('id_people' => $_SESSION['logged_in']['id_people'], 'param_type' => 'ad_shown', 'param_name' => 'ad_advocate_advance_202010', 'param_value' => 1, 'state' => 1));
    }
?>

	$('#dashboard-mycc-mode').on('change', function(e){
		if($(this).val() == 'church'){

			$('.mycc-list-mode-assigned').addClass('hide');
			$('.mycc-list-mode-church').removeClass('hide');
		}else{
			$('.mycc-list-mode-church').addClass('hide');
			$('.mycc-list-mode-assigned').removeClass('hide');

		}
		$.ajax({
			type: "GET",
			url:  getBaseUrl()+'home/ajax_set_limiter_session?key=dash_mycc_mode&val='+$(this).val(),
			success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				//console.log(result);
			}
		});
	});
});


</script>
</body>
</html>
