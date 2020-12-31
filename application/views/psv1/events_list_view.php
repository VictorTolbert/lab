<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['event_name'])){
		$name	.= ' - '.$item['event_name'];
}
if(empty($item['id_event'])){
	$name .= ' New Event';
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
					<a href="<?php echo base_url();?>events/list">
						Events 
					</a>
				</li>
				<li class="active">List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Events <small><small><a href="<?php echo base_url();?>events/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>events/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
			<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>events/list">
				<?php echo $this->session->flashdata('msg'); ?>
					<?php if($this->security_model->user_has_access(60)){ ?>
						<div class="row top10">
							<?php echo $this->website_model->make_list_limiters(array('view' => 'events_list'));?>
						</div>
					<?php }?>
					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="2%" style="max-width: 100px !important; width: 100px !important;" data-priority="2">Actions</th>
								<th data-priority="1">Event</th>								
								<th>Contact</th>
								<th>Status</th>
								
							</tr>
						</thead>
					  <tbody>
						<?php 
						if(isset($lists)){
							$arr_demo_dont_show	= array('event_meet_greet', 'event_launch');
							foreach($lists AS $list){
								$can_show						= true;
								$cur_link 						= base_url().'event/edit/'.$list['id_event_encoded'];		
								$cur_name						= $this->events_model->get_event_name($list);			
								$cur_attendee_title				= 'Msg Responders';
								if($list['event_type']	== 'event_prospect_kiosk'){
									$cur_attendee_title	= 'Msg Prospects';	
								}
								$cur_ve_launch_link				= 'https://fam.care/e'.$list['id_event'].'?role=moderator';
								if(!empty($list['virtual_event_url_external'])){
									$cur_ve_launch_link		= str_replace('view=attendee', 'view=moderator&role=moderator', $list['virtual_event_url_external']);
								}
								
								if(is_demo_site() && in_array(strtolower($list['event_type']), $arr_demo_dont_show)){
									$can_show = false;
								}
								
								
								
								
								if($can_show){
								?>
									<tr>
										<td class="text-center">
											<div class="col-xs-12 col-sm-12">	
												<span style="display: none;"><?php echo $list['event_date_start'];?></span>
												<?php echo $this->events_model->get_event_date_calendar_avatar($list);?>
												<div class="col-xs-12 col-sm-12 top5 xs-top5">
													<?php echo '<a href="'.$cur_link.'">'.date_offset('D, m/d/Y', $list['event_date_start'], $list['event_time_zone']).' <br />'.date_offset('g:iA', $list['event_date_start'], $list['event_time_zone']).' '.$this->events_model->get_tz_abbrev($list).'</a>';
													
													?>
												</div>
											</div>
											
											<?php if($this->security_model->user_has_access(999)){ echo '<p class="text-center">'. $list['id_event'].'</p>'; }?>
											<div class="col-sm-12 col-xs-12 top5 xs-top5">
												
												<div class="dropdown" style="float: none;">
													<button class="btn btn-default dropdown-toggle btn-block block" type="button" data-toggle="dropdown">
														Actions
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php if(!$this->security_model->can_edit_event($list)){ 
																echo '<li><a href="#">No Access</a></li>';
															}else{
																
														?>
														<li><span class="action_btn_headers">Event</span></li>
														<li><a href="<?php echo $cur_link;?>">Edit</a></li>
														<li><a href="#" data-href="<?php echo base_url();?>events/delete?i=<?php echo $list['id_event_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
														<?php if(!empty($list['is_virtual'])){?>
														<li><span class="action_btn_headers">Virtual Event</span></li>
														<li><a href="<?= $cur_ve_launch_link;?>" target="_blank">Launch Event</a></li>
														<li><a href="#copyvirtual" data-toggle="modal" data-target="#copyvirtual" data-idevent="<?php echo $list['id_event'];?>" data-link="https://fam.care/e<?php echo $list['id_event'];?>" data-header="<?php echo $this->events_model->get_event_name($list);?>" class="btn-modal-copy-virtual">Copy Attendee Link</a></li>
														<?php }?>
														<li><span class="action_btn_headers">RSVPs</span></li>
														<li><a href="<?php echo base_url();?>rsvp/?bypass_login=1&test_mode=1&p=<?php echo url_enc($user['id_people']);?>">Test RSVP</a></li>
														<li><a href="#copyrsvp" data-toggle="modal" data-target="#copyrsvp" data-idevent="<?php echo $list['id_event'];?>" data-link="https://fam.care/r<?php echo $list['id_event'];?>" data-header="<?php echo $this->events_model->get_event_name($list);?>" class="btn-modal-copy-rsvp">Copy RSVP Link</a></li>
														<li><a href="<?php echo base_url();?>event/rsvps/<?php echo $list['id_event_encoded'];?>">View RSVPs</a></li>
														<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="event_rsvps_<?php echo url_enc($list['id_event']);?>">Msg RVPSs</a></li>
														<li><span class="action_btn_headers">Responses</span></li>
														<li><a href="<?php echo base_url();?>serve/?bypass_login=1&test_mode=1&p=<?php echo url_enc($user['id_people']);?>&e=<?php echo $list['id_event_encoded'];?>">Test Response Card</a></li>
														<li><a href="#copyserve" data-toggle="modal" data-target="#copyserve" data-idevent="<?php echo $list['id_event'];?>" data-link="https://fam.care/er<?= $list['id_event'];?>" data-header="<?php echo $this->events_model->get_event_contact_name($list);?>" class="btn-modal-copy-serve">Copy Event Response Link</a></li>
														<li><a href="<?php echo base_url();?>events/nonresponders/<?php echo $list['id_event_encoded'];?>">View Non-Responders</a></li>
														<li><a href="<?php echo base_url();?>event/responders/<?php echo $list['id_event_encoded'];?>">View Responders</a></li>
														
														<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="event_attendees_<?php echo url_enc($list['id_event']);?>"><?php echo $cur_attendee_title;?></a></li>
														
														<!--<li><a href="<?php echo base_url();?>events/listrsvpnoshows/?i=<?php echo $list['id_event_encoded'];?>">View No Shows</a></li>-->
														
														<?php }?>
														
													</ul>
												</div>
												
											</div>
											
										</td>
									  
									  <td style="white-space:normal !important"><?php echo '<a href="'.$cur_link.'">'.$cur_name.'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$this->events_model->get_event_contact_name($list).'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$this->events_model->get_event_status_from_state($list).'</a>';?></td>
									</tr>
								<?php 
										}//End can show if
									}
								}else{
								?>
							<tr>
								<td colspan="20">No events found. <a href="<?php echo base_url();?>events/list?clear_limiters=1">Try broadening your search.</a></td>
							</tr>
						<?php }?>
					</tbody>
				</table>
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

<div class="modal fade" id="copyrsvp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Copy Event RSVP Link <span id="modal-copyrsvp-header-event-name"></span>
			</div>
			<div class="modal-body">
				<p>Below is the RSVP link that that attendees can use to register for your event.</p>
				<p class="text-center"><strong><span id="modal-copyrsvp-link"></span></strong></p>
				<p class="text-center"><button id="modal-copyrsvp-btn-copy" class="btn btn-default btn-copy-to-clipboard" data-clipboard-target="#copytoclipboard"><i class="fa fa-clipboard"></i> Copy Link</button></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="copyserve" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Copy Event Response Link <span id="modal-copyserve-header-event-name"></span>
			</div>
			<div class="modal-body">
				<p class="text-center"><strong><em>This link is not for RSVPs.</em></strong></p>
				<p>Below is the event response link that that attendees can use <em>to respond at the event</em>.</p>
				<p class="text-center"><strong><span id="modal-copyserve-link"></span></strong></p>
				<p class="text-center"><button id="modal-copyserve-btn-copy" class="btn btn-default btn-copy-to-clipboard" data-clipboard-target="#copytoclipboard"><i class="fa fa-clipboard"></i> Copy Link</button></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="copyvirtual" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Copy Virtual Event Attendee Link <span id="modal-copyvirtual-header-event-name"></span>
			</div>
			<div class="modal-body">
				<p class="text-center"><strong><em>This link is not for RSVPs.</em></strong></p>
				<p class="text-center">Below is the link that attendees can use <em>to attend your virtual event</em>.</p>
				<p class="text-center"><strong><span id="modal-copyvirtual-link"></span></strong></p>
				<p class="text-center"><button id="modal-copyvirtual-btn-copy" class="btn btn-default btn-copy-to-clipboard"  data-clipboard-target="#copytoclipboard"><i class="fa fa-clipboard"></i> Copy Link</button></p>
				<p class="">The links below are for backup purposes only. Please use these links if any of your participants has trouble viewing the videos during the event. The links will only be active while the event is in progress. <ul><li><strong>Video Part 1:</strong> https://fam.care/ccvov1?e=<span class="ajax-target-id-event"></span></li><li><strong>Video Part 2:</strong> https://fam.care/ccvov2?e=<span class="ajax-target-id-event"></span></li></ul></p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>

<!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
			  'order': [[ 0, "desc" ]],
			  'iDisplayLength': 50,
              responsive: true,
			  columns: [
				{ "width": "50px" },
				{ "width": "50px" },
				{ "width": "50px" },
				{ "width": "50px" },
				{ "width": "50px" }
				]
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable({'order': [[ 0, "desc" ]], 'iDisplayLength': 50});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'order': [[ 0, "desc" ]], 'iDisplayLength': 50});

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
	  
    </script>
    <!-- /Datatables -->
	<script type="text/javascript">
		$(document).ready(function(){
			$(function() {
				$('.table-row-height').matchHeight({byRow: false});
			});
			
			
			$('.btn-modal-copy-rsvp').on('click', function(e) {
				var link = $(this).data('link');
				$('#modal-copyrsvp-btn-copy').html('<i class="fa fa-clipboard"></i> Copy Link');
				$('#modal-copyrsvp-link').html(link.replace(/(\r\n|\n|\r)/gm, ""));
				$('#modal-copyrsvp-header-event-name').html($(this).data('header'));
				$('#copytoclipboard').html(link);
				$('.ajax-target-id-event').html($(this).data('idevent'));
				instantiate_copy_to_clipboard();
			});
			$('.btn-modal-copy-serve').on('click', function(e) {
				var link = $(this).data('link');
				$('#modal-copyserve-btn-copy').html('<i class="fa fa-clipboard"></i> Copy Link');
				$('#modal-copyserve-link').html(link.replace(/(\r\n|\n|\r)/gm, ""));
				$('#modal-copyserve-header-event-name').html($(this).data('header'));
				$('#copytoclipboard').html(link);
				$('.ajax-target-id-event').html($(this).data('idevent'));
				instantiate_copy_to_clipboard();
			});
			$('.btn-modal-copy-virtual').on('click', function(e) {
				var link = $(this).data('link');
				$('#modal-copyvirtual-btn-copy').html('<i class="fa fa-clipboard"></i> Copy Link');
				$('#modal-copyvirtual-link').html(link.replace(/(\r\n|\n|\r)/gm, ""));
				$('#modal-copyvirtual-header-event-name').html($(this).data('header'));
				$('#copytoclipboard').html(link);
				$('.ajax-target-id-event').html($(this).data('idevent'));
				instantiate_copy_to_clipboard();
			});
		});
		
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		});
		
		
</script>
<!-- /top navigation -->