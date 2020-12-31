<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_unit		= 'RSVP';
$event_name			= '';
$collect_emails		= array();
if(!empty($event['id_event'])){
	$event_name = ' - '. $this->events_model->get_event_name($event);
}
$name 				= '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$this->website_model->display_format_people_name_last($item['name_last']);
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
				<li class="active"><?php echo  'List RSVPs';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List RSVPs <?php echo $event_name;?><?php if(1== 2){?><small><a href="<?php echo base_url();?>volunteer/edit/?i=0">Add New</a></small><?php }?>
			</div>
		</div><!--/.row-->
			<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>volunteer/list">
					<?php echo $this->session->flashdata('msg'); ?>
					<?php if(1==2){?>
						<div class="row">
							<div class="col-sm-4 text-center top20">
								<?php echo  $this->website_model->input_menu_churches('id_church', $_SESSION['view_limiter']['id_church'] , 'id_church', 'input-sm input-limiter center-block', array('limiter_view' => 1)) ;?>
							</div>
							<div class="col-sm-4 text-center top20">
								<?php echo  $this->website_model->input_menu_roles('id_role', $_SESSION['view_limiter']['id_role'], 'id_role', 'input-sm input-limiter center-block', array('limiter_view' => 1, 'role_scope_limiters' => 'list_volunteers')) ;?>
							</div>
							<div class="col-sm-4 text-center top20">
								<?php echo  $this->website_model->input_menu_statuses('status', $_SESSION['view_limiter']['status'], 'status', 'input-sm input-limiter center-block', array('view' => 'list_volunteer')) ;?>
							</div>
						</div>
					<?php }?>
						<div class="row top30">
						</div>
						<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th width="2%"></th>
									<th width="5%">First Name</th>
									<th width="8%">Last Name</th>
									<th width="2%">Attendees</th>
									<?php if(!empty($lists[0]['show_count_kids'])){?>
										<th>Kids</th>
									<?php } ?>
									<th width="5%">RSVP Date</th>
									<th width="5%">Email</th>
									<th width="20%">Details</th>
								</tr>
							</thead>
						  <tbody>
							  <?php if(isset($lists)){
										$already_displayed			= array();
										foreach($lists AS $list){
											if(!in_array($list['id_people'], $already_displayed)){
												$already_displayed[]			= $list['id_people'];
												$cur_churches					= array();
												$list['get_home_church']	= 1;
												$list['role_scope']				= $role_scope;
												$back_link					= url_enc(base_url().'events/viewrsvps/?i='.url_enc($list['id_event']));
												$cur_link 					= base_url().'volunteers/edit/'.$list['id_people_encoded'].'?r='.$back_link.'&cancel='.$back_link;
												 
												//$status							= $this->people_model->get_person_status_from_state($list);
												if(empty($list['people_email'])){
													if(!empty($list['people_email_primary'])){
														$list['people_email']	= $list['people_email_primary'];
													}else{
														$list['people_email']	= '';	
													}
												}
												
												if(!empty($list['people_email_primary'])){
													$collect_emails[] = $list['people_email_primary'];
												}
											
											?>
										<tr class="people-<?php echo $list['id_people'];?>">
										  <td class="text-center">
											<?php $this->people_model->display_people_avatar($list);?>
											<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['id_rsvp'].'</p>'; }?>
											<div class="dropdown center-block" style="float: none;">
												  <button class="btn btn-default btn-block dropdown-toggle" type="button" data-toggle="dropdown">Actions
												  <span class="caret"></span></button>
												<ul class="dropdown-menu">
													<!-- <li><a href="<?php echo $cur_link;?>">Edit</a></li> -->
													<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_people'];?>">Send Message</a></li>
													<li><a href="<?php echo base_url();?>volunteers/edit/<?php echo url_enc($list['id_people']).'&cancel=';?>">Edit Volunteer</a></li>
													<li><a href="#" data-href="<?php echo base_url();?>events/rsvpdelete?r=<?php echo url_enc($list['id_rsvp']);?>&p=<?php echo url_enc($list['id_people']);?>&e=<?php echo url_enc($list['id_event']);?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
													
												</ul>
											</div>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['name_first'].'</a>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_people_name_last($list['name_last']).'</a>';?>
											</td>
											<td>
												<?php if(!empty($list['count_adults'])){ echo $list['count_adults']; }else{ echo 1;}?>
											</td>
											<?php if(!empty($list['show_count_kids'])){?>
											<td>
												<?php if(!empty($list['count_kids'])){ echo $list['count_kids']; }else{ echo 0;}?>
											</td>
											<?php } ?>
											<td>
												<?php echo date_offset('m/d/y g:iA', $list['rsvp_date_add']);?>
											</td>
										  <td><?php echo '<a href="'.$cur_link.'">'.$list['people_email'].'</a>';?></td>
										  <td>
											<div class="table-row-height" data-mh="church-height">
											<?php 
													if(!empty($list['home_church_name'])){
														echo $this->churches_model->get_church_name($list);
													}elseif(!empty($list['home_church']) && !is_numeric($list['home_church_name'])){
														echo $list['home_church'];
													}
													if(!empty($list['ages_kids'])){
														echo '<br />Kids Ages: '.$list['ages_kids'];
													}
													if(!empty($list['count_meals_adults'])){
														echo '<br />Adult Meals: '.$list['count_meals_adults'];
													}

													if(!empty($list['count_meals_kids'])){
														echo '<br />Kids Meals: '.$list['count_meals_kids'];
													}
													
													if(!empty($list['role_name_custom'])){
														echo '<br />Event Role: '.$list['role_name_custom'];
													}
													
												?>
												</div>
										  </td>
										</tr>
									<?php } //End already displayed
										}
									}else{
									?>
								<tr>
									<td colspan="20">No RSVPS found. <a href="<?php echo base_url();?>events/list?clear_limiters=1">Try broadening your search.</a></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</form>
			</div>
			<?php if(!empty($_GET['compile_emails']) || !empty($compile_emails)){?>
				<div class="row top40"></div>
				<div class="col-sm-8 col-sm-offset-2 well">
					<h3>Compiled Email address</h3>
				<?php 
					$collect_emails = array_unique($collect_emails);
					$collect_emails	= implode('; ',$collect_emails);
					echo $collect_emails;
					unset($collect_emails);
				?>
					</div>
				<div class="row top40"></div>
			<?php }?>
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
		
</script>

<!-- /top navigation -->