<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_unit		= 'Responder';
$event_name		= '';
$collect_emails		=	 array();
$compile_emails	= 1;
if(!empty($event['id_event'])){
	$event['show_date_start'] 	= 1;;
	$event_name 				= ' - '. $this->events_model->get_event_name($event);
}
$name 				= '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$item['name_last'];
}
if(empty($item['id_people'])){
	$name .= ' New '.ucfirst($people_unit);
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
				<li class="active">
					<a href="<?php echo base_url();?>events">
						Events
					</a>
				</li>
				<li class="active"><?php echo  'List Responders';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Responders <small><?php echo $event_name;?></small></h1>
				<p>This view shows the people who attended the event and completed a response card via Promise Serves</p>
			</div>
		</div><!--/.row-->
			<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>events/listeventresponders/?i=<?php echo url_enc($event['id_event']);?>">
					<?php echo $this->session->flashdata('msg'); ?>

						<div class="row">
							<div class="col-sm-3 text-center top20">
							<?php 
								if($this->security_model->user_has_access(95)){ 
								 //echo  $this->website_model->input_menu_churches('id_church', $_SESSION['view_limiter']['id_church'] , 'id_church', 'input-sm input-limiter center-block', array('limiter_view' => 1));
								}
							?>
							
							</div>
							<div class="col-sm-3 text-center top20">
								<?php echo  $this->website_model->input_menu_roles('id_role', $_SESSION['view_limiter']['id_role'], 'id_role', 'input-sm input-limiter center-block', array('limiter_view' => 1, 'role_scope_limiters' => 'list_volunteers')) ;?>
							</div>
							<div class="col-sm-3 text-center top20">
								<?php echo  $this->website_model->input_menu_interests('interests', $_SESSION['view_limiter']['interests'], 'interests', 'input-sm input-limiter center-block', array('limiter_view' => 1, 'role_scope_limiters' => 'list_volunteers')) ;?>
							</div>
							<div class="col-sm-3 text-center top20">
								<?php echo  $this->website_model->input_menu_statuses('status', $_SESSION['view_limiter']['status'], 'status', 'input-sm input-limiter center-block', array('view' => 'list_limiter_volunteer')) ;?>
							</div>
						</div>
						<div class="row top30">
						</div>
						<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th></th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Interests</th>
									<th>Church</th>
									<th>Email</th>
									
									<th>Date</th>
								</tr>
							</thead>
						  <tbody>
							  <?php if(isset($lists)){								 
										$already_displayed			= array();
										foreach($lists AS $list){
											if(!in_array($list['id_people'], $already_displayed)){
												$already_displayed[]		= $list['id_people'];
												$cur_churches				= array();
												$list['get_home_church']	= 1;
												$list['role_scope']			= $role_scope;
												$back_link					= url_enc(base_url().'events/listeventresponders/?i='.url_enc($list['id_event']));
												$cur_link 					= base_url().'volunteers/edit/'.$list['id_people_encoded'].'?r='.$back_link.'&cancel='.$back_link;
												$advocate_access_badge		= '';
												$is_advocate				= false;
												$arr_advocates_matter		= array('event_orientation_cross_affiliate', 'event_orientation', 'event_combined', 'event_training');
												
												//$status							= $this->people_model->get_person_status_from_state($list);
												if(empty($list['people_email'])){
													if(!empty($list['people_email_primary'])){
														$list['people_email']	= $list['people_email_primary'];
													}else{
														$list['people_email']	= '';	
													}
												}
												
												$collect_emails[]			= format_email($list['people_email']);
												
												
												unset($msg_json);
												if(empty($list['vol_agree_sign_name']) && !empty($list['people_email_primary'])){ 
													$msg_json['body']							=  $this->emails_model->get_email_request_volunteer_signature($list);
													$msg_json['subject']						= 'Action Needed: Care Community Volunteer Agreement';
													$msg_json['recipient_ids']					= array($list['id_people']);
													$msg_json									= json_encode($msg_json);
												}
												
												
												
												
												if(in_array($list['event_type'], $arr_advocates_matter)){
													$list['bypass_affiliate']	= 1;
													$is_advocate 				= $this->security_model->user_has_advocate_access($list);
													if($is_advocate){
														$advocate_access_badge	= '<span class="badge badge-light">Has Advocate Access</span>';
													}
												}
											
											
											
											?>
										<tr class="people-<?php echo $list['id_people'];?>">
											<td class="text-center">
												<?php $this->people_model->display_people_avatar($list);?>
												<div class="dropdown center-block" style="float: none;">
													  <button class="btn btn-default btn-block dropdown-toggle" type="button" data-toggle="dropdown">Actions
													  <span class="caret"></span></button>
													<ul class="dropdown-menu">
														<li><a href="<?php echo $cur_link;?>">Edit</a></li>
														<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_people'];?>">Send Message</a></li>
														<?php if(empty($list['vol_agree_sign_name']) && !empty($list['people_email_primary'])){ ?>
															<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_people'];?>" data-msgjson='<?php echo $msg_json;?>'>Request Agreement Signature</a></li>
														<?php }
															if($this->security_model->user_has_access(80) && !$is_advocate){
																echo '<li><a href="#modalnotify" data-toggle="modal" data-target="#modalnotify" class="btn-modal-with-ajax" data-modalheader="Promote to Advocate - '.$list['name_first'].' '.$this->website_model->display_format_people_name_last($list['name_last']).'" data-ajaxurl="'.base_url().'events/ajax_promote_attendee_to_advocate/?p='.url_enc($list['id_people']).'">Promote to Advocate</a></li>';
																
															}?>
													</ul>
												</div>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['name_first'].'</a><br /><span id="ajax-target-badge-'.$list['id_people'].'">'.$advocate_access_badge.'</span>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_people_name_last($list['name_last']).'</a>';?>
											</td>
											<td>
												<div>
													<?php 
													$compiled					= array();
													$interests					= $this->people_model->get_interest_checkboxes();
													$count_total_interests		= 0;
													
													if(!empty($interests)){
														foreach($interests as $key => $val){
															if(!empty($list[$key]) && strtolower($val) == 'helping in a care community'){
																$compiled[] 	= $val;
																$count_total_interests++;
															}elseif(!empty($list[$key])){
																$compiled[]		= str_replace('Care Community', '', $val).'<br />';
																$count_total_interests++;
															}
														} 
													}
													
													//Check for people param interests (newer integration)
													$interests					= $this->people_model->get_people_params(array('id_people' => $list['id_people'], 'param_type' => 'people_interest'));
													if(!empty($interests)){
														foreach($interests as $key => $val){
															$compiled[]			= ucwords(str_replace('_', ' ',$val['param_value']));
															$count_total_interests++;
														}
													}
													
													if($count_total_interests == 0){
														$compiled[]			= 'No interests selected';
													}
													
													$compiled				= array_unique($compiled);
													echo implode('<br />',$compiled);
													?>
													<?php echo $this->website_model->get_volunteer_agreement_signature_badge($list);?>
												</div>
											</td>
											
											<td>
												<div class="table-row-height" data-mh="church-height">
													<?php echo $this->churches_model->get_list_view_church_name($list);?>
												</div>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['people_email'].'</a>';?>
											</td>
											
											<td>
												<?php 
												
													if(!empty($list['date_response'])){
														echo date_offset('m/d/Y g:ia', $list['date_response']);
													}elseif(!empty($list['assign_date_add'])){
														
														echo date_offset('m/d/Y g:ia', $list['assign_date_add']);
													}
												?>
											</td>
										</tr>
									<?php } //End already displayed
										}
									}else{
									?>
								<tr>
									<td colspan="20">No attendees found. <a href="<?php echo base_url();?>events/listeventattendees?clear_limiters=1">Click to broaden your search.</a></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
					<?php if(!empty($_GET['compile_emails']) || $compile_emails){?>
						<div class="row top40"></div>
						<div class="col-sm-8 col-sm-offset-2 well">
							<h3>Compiled Email address</h3>
						<?php 
							$collect_emails = array_unique($collect_emails);
							$collect_emails	= implode('; ',$collect_emails);
							echo $collect_emails;?>
							</div>
						<div class="row top40"></div>
					<?php }?>
					
					</div>
					
				</form>
		</div>
			


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this event RSVP?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>

<?php echo $site_footer;?>

<!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
			  'order': [[ 7, "desc" ]],
			  'iDisplayLength': 50,
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
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

        $('#datatable').dataTable({'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 50});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 50});

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
		});
		
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		});
		
		function instantiate_ajax_urls(){
			var id_p;
			$('#btn-promote-confirm').click(function(){
				$('#modal-notify-body').html('<p class="text-center"><i class="fas fa-sync fa-spin fa-3x"></i></p><h3 class="text-center">Just a moment...</h3>');
				$.ajax({
					type: "POST",
					url: $(this).data('ajaxurl'),
					data: {'p': $(this).data('p')},
					success: function(ajaxdata) {
						hide_block_ui();
						var result = JSON.parse(ajaxdata);
						console.log(result);
						$('#modal-notify-body').html('<h3 class="text-center">'+result.data.people.name_full+' was promoted succesfully!</h3><p class="text-center">An email notification was sent to '+result.data.people.name_first+' which contains login information for Promise Serves as well as some quick start tutorial resources.</p>');
						
						$('#ajax-target-badge-'+result.data.people.id_people).html('<span class="badge badge-light">Has Advocate Access</span>');
					},
					error: function(){
						hide_block_ui();
					}						
				});
			});
		}
		
</script>

<!-- /top navigation -->