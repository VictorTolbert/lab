<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$collect_emails = array();
$people_unit		= 'Volunteers';
$name = '<small>';
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

//print_array($lists);
//exit();
?>

<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active"><?php echo  'Share Volunteers / Church Requests';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Church Volunteer Requests - <?php echo $this->churches_model->get_church_name($church);?></h1>
				<p>This page shows you the pending requests for volunteers at your church that have been made by advocates at other churches.</p>
			</div>
		</div><!--/.row-->
			<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>volunteer/list">
					<?php echo $this->session->flashdata('msg'); ?>
				<?php if(1 == 2){?>				
				<?php if($this->security_model->user_has_access(95)){ 
					echo  '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">'.$this->website_model->input_menu_affiliates('id_affiliate', $_SESSION['view_limiter']['id_affiliate'], 'id_affiliate', 'input-sm input-limiter', array('limiter_view' => 1)).'</div></div>';
				}?>
				
				
					<div class="row top10">
							<?php if($this->security_model->user_has_access(36)){ ?>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center top20">
								<?php echo  $this->website_model->input_menu_churches('id_church', $_SESSION['view_limiter']['id_church'] , 'id_church', 'input-sm input-limiter center-block', array('limiter_view' => 1, 'include_parent_church_ids' => 1)) ;?>
							</div>
							<?php }?>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 text-center top20">
								<?php echo  $this->website_model->input_menu_roles('id_role', $_SESSION['view_limiter']['id_role'], 'id_role', 'input-sm input-limiter center-block', array('limiter_view' => 1, 'role_scope_limiters' => 'list_volunteers')) ;?>
							</div>	
							<?php if(!empty($_SESSION['affiliate']['allow_volunteer_compliance_fields'])){?>							
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3  text-center top20">
								<?php echo  $this->website_model->input_menu_statuses('volunteer_compliance', $_SESSION['view_limiter']['volunteer_compliance'], 'volunteer_compliance', 'input-sm input-limiter center-block', array('view' => 'list_limiter_volunteer_compliance')) ;?>
							</div>
							<?php }?>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3  text-center top20">
								<?php echo  $this->website_model->input_menu_interests('interests', $_SESSION['view_limiter']['interests'], 'interests', 'input-sm input-limiter center-block', array('limiter_view' => 1, 'role_scope_limiters' => 'list_volunteers')) ;?>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-12 col-lg-3 text-center top20">
								<?php echo  $this->website_model->input_menu_statuses('request_volunteer_status', $_SESSION['view_limiter']['status'], 'status', 'input-sm input-limiter center-block', array('view' => 'list_limiter_volunteer_request')) ;?>
							</div>
						</div>
						<div class="row top30">
						</div>
				<?php }?>
						<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Actions</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Status</th>
									<th>Requestor</th>
								</tr>
							</thead>
						  <tbody>
							  <?php if(isset($lists)){
										$viewer_id_churches					= $this->security_model->get_user_admin_churches();
										foreach($lists AS $list){
											$cur_churches							= array();
											$can_edit									= false;
											
											if(!empty($list['source_id_church']) && in_array($list['source_id_church'], $viewer_id_churches)){
												$can_edit			= true;
											}
											if($can_edit){
												$cur_link 					= base_url().'people/edit_volunteer_request/'.url_enc($list['id_people_request']);	
											}else{
												$cur_link					= '#';
											}
											
											$cur_link 					= base_url().'people/edit_volunteer_request/'.url_enc($list['id_people_request']);	
												
												
											$list['scope']				= 'request_volunteer';
											$status						= $this->people_model->get_person_status_from_state($list);
											if(empty($list['people_email'])){
												$list['people_email']	= '';
											}
											
											if(empty($list['id_salesforce'])){
												$list['id_salesforce']	= '';
											}
										
											if(!empty($list['people_email_primary'])){
												$collect_emails[] = $list['people_email_primary'];
											}
											
											
											?>
										<tr class="people-<?php echo $list['subject_id_people'];?>">
										  <td class="text-center">
											<?php $this->people_model->display_people_avatar($list);?>
											<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['subject_id_people'].'</p>'; }?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<?php if($can_edit){?>
													<li><a href="<?php echo $cur_link;?>">View Request</a></li>
													<?php }?>
												</ul>
											</div>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$list['subject_name_first'].'</a>';?>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_people_name_last($list['subject_name_last']).'</a>';?>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$list['requestor_name_first'].' '.$this->website_model->display_format_people_name_last($list['requestor_name_last']).'</a>';?>
											</td>
											
											<!--
											<td style="vertical-align: middle;">
												<?php if($can_edit){ echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_email($list).'</a>';}?>
											</td>
											-->
											
											
										</tr>
									<?php }
									}else{
									?>
								<tr>
									<td colspan="20"><h4 class="text-center">There are no pending volunteer requests at your church.</h4></td>
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
					echo $collect_emails;?>
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
				<p>Are you sure you want to delete this volunteer?</p>
				<p><strong>This will remove the volunteer from any teams they are currently serving on!</strong></p>
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
       

        $('#datatable-responsive').DataTable({'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 50});
		
		/*$('#datatable-responsive').DataTable({ dom: "Bfrtip",	'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 50, buttons: [{extend: "copy", className: "btn-sm"},{extend: "csv", className: "btn-sm"},{extend: "excel",className: "btn-sm"},{extend: "pdfHtml5",className: "btn-sm"},{extend: "print",className: "btn-sm" },]	});*/

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