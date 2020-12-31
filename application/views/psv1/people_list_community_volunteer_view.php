<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$collect_emails	= array();
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

$headers_added	= array();
if(!empty($_SESSION['view_limiter']['id_role']) && $_SESSION['view_limiter']['id_role'] == 310){
	$headers_added[] = 'Community';
}
$headers_added	= array();

//print_array($lists);
//exit();

if(!empty($sub_header)){
	$sub_header = '- '.$sub_header.' ';
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
				<li class="active"><?php echo  'List Volunteers';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Volunteers<?php echo ' '.$sub_header;?>
				<?php if($this->security_model->user_has_access(60)){ ?>
					<small><small><a href="<?php echo base_url();?>volunteer/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						
							<a href="<?php echo base_url();?>volunteer-quick-check" class="btn btn-default"><i class="fa fa-search"></i> Quick Check</a>
							<a href="<?php echo  base_url().'volunteer/edit/0';?>?view=cardview" class="btn btn-default"><i class="fa fa-paperclip"></i> Quick Entry</a>
							<a href="<?php echo base_url();?>volunteer/edit/0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				<?php }?>
				</h1>
			</div>
		</div><!--/.row-->
			<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>volunteer/list">
					
						<?php if($this->security_model->user_has_access(95)){ 
					echo  '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">'.$this->website_model->input_menu_affiliates('id_affiliate', get_limiter_session_value('id_affiliate'), 'id_affiliate', 'input-sm input-limiter col-xs-12', array('limiter_view' => 1)).'</div></div>';
				}?>
					<div class="row top10">
					
						<?php 
							if(!empty($_SESSION['affiliate']['enable_regions']) && $this->security_model->user_has_access(85)){
								echo '<div class="col-xs-12 col-sm-2 text-center top20">'.$this->website_model->input_menu_regions('id_region', get_limiter_session_value('id_region'), 'id_region', 'input-sm input-limiter center-block', array('limiter_view' => 1)).'</div>';
							}
							
						?>
						<?php if($this->security_model->user_has_access(36)){ ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 text-center top20">
							<?php echo  $this->website_model->input_menu_churches('id_church',get_limiter_session_value('id_church') , 'id_church', 'input-sm input-limiter center-block col-xs-12', array('limiter_view' => 1, 'include_parent_church_ids' => 1)) ;?>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 text-center top20">
							<?php echo  $this->website_model->input_menu_roles('id_role', get_limiter_session_value('id_role'), 'id_role', 'input-sm input-limiter center-block col-xs-12', array('limiter_view' => 1, 'role_scope_limiters' => 'list_volunteers')) ;?>
						</div>	
						<?php if(!empty($_SESSION['affiliate']['allow_volunteer_compliance_fields'])){?>							
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-3 text-center top20">
							<?php echo  $this->website_model->input_menu_statuses('volunteer_compliance', get_limiter_session_value('volunteer_compliance'), 'volunteer_compliance', 'input-sm input-limiter center-block col-xs-12', array('view' => 'list_limiter_volunteer_compliance')) ;?>
						</div>
						<?php }?>
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-3 text-center top20">
							<?php echo  $this->website_model->input_menu_interests('interests', get_limiter_session_value('interests'), 'interests', 'input-sm input-limiter center-block col-xs-12', array('limiter_view' => 1, 'role_scope_limiters' => 'list_volunteers')) ;?>
						</div>
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center top20">
							<?php echo  $this->website_model->input_menu_statuses('status', get_limiter_session_value('status'), 'status', 'input-sm input-limiter center-block col-xs-12', array('view' => 'list_limiter_volunteer')) ;?>
						</div>
					</div>
					<?php }?>
					<div class="row top30">
						<?php echo $this->session->flashdata('msg_people_volunteer_list'); ?>
					</div>
						<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap <?php echo $this->website_model->get_table_view_consolidation_class();?>" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th class="text-center">Actions</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Status</th>
									<th>City</th>
									<th>Zip</th>
									<th>Church</th>
									<?php foreach($headers_added as $cur_header){ echo '<th>'.$cur_header.'</th>';}?>
								<!--<th>Email</th>-->
									<?php if($dev){echo '<th>DEV</th>';}?>
								</tr>
							</thead>
						  <tbody>
							  <?php if(isset($lists)){
								  
										foreach($lists AS $list){

											$cur_churches			= array();
											$can_edit				= false;
											$list['role_scope']		= $role_scope;
											$comm_name				= '';
											if($this->security_model->can_admin_person($list)){
												$can_edit			= true;
											}
											if($can_edit){
												$cur_link 				= base_url().'volunteer/edit/'.$list['id_people_encoded'];
											}else{
												$cur_link 				= '#';
											}
												
											 
											$status						= $this->people_model->get_person_status_from_state($list);
											if(empty($list['people_email'])){
												$list['people_email']	= '';
											}
											
											if(empty($list['id_salesforce'])){
												$list['id_salesforce']	= '';
											}
											
											$msg_json					= null;
											
											unset($msg_json_agree);
											if(empty($list['vol_agree_sign_name']) && !empty($list['people_email_primary'])){ 
												$msg_json_agree['body']							=  $this->emails_model->get_email_request_volunteer_signature($list);
												$msg_json_agree['subject']						= 'Action Needed: Care Community Volunteer Agreement';
												$msg_json_agree['recipient_ids']				= array($list['id_people']);
												$msg_json_agree									= json_encode($msg_json_agree);
											}
											
											if(!empty($list['people_email_primary'])){
												$collect_emails[] = $list['people_email_primary'];
											}
											//$list['show_community_name_only']	 = 1;
											if(!empty($_SESSION['view_limiter']['id_role']) && $_SESSION['view_limiter']['id_role'] == 310){
												$comm 		= $this->communities_model->get_active_care_community_for_volunteer($list);
												$status 	.= '<br /><small>'.$comm['community_name'].'</small>';
											}
											
											
											
											?>
										<tr class="people-<?php echo $list['id_people'];?>">
										  <td class="text-center">
											<?php $this->people_model->display_people_avatar($list);?>
											<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center id-number">'. $list['id_people'].'</p>'; }?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<?php if($can_edit){?>
													<li><a href="<?php echo $cur_link;?>">Edit</a></li>
													
													<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_people'];?>">Send Message</a></li>
													<li>
														<a href="#addassignment" class="btn-assignment-select" id="AddBtnMenu" data-toggle="modal" data-target="#addassignment" aria-haspopup="true" aria-expanded="true" data-idp="<?=$list['id_people'];?>" >Add Assignment</a>
													</li>
													
													<?php if(!empty($list['vol_agree_sign_name'])){?>
													<li>
														<a href="<?php echo base_url();?>form/volunteeragreement/<?php echo url_enc($list['id_people']);?>/?show_print=1" target="_blank">View / Print Agreement</a>
													</li>
													<?php }elseif(!empty($list['people_email_primary'])){ ?>
														<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_people'];?>" data-msgjson='<?php echo $msg_json_agree;?>'>Request Agreement Signature</a></li>
														<?php }?>
													<?php if($this->security_model->user_has_access(60)){ ?>
													<li>
														<a href="#" data-href="<?php echo base_url();?>volunteers/delete?i=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'volunteers/list');?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
													</li>
													<?php }?>
													<?php }else{ ?>
														<li><a href="">No Access</a></li>
													<?php }//end of Can /Edit ?>
													
												</ul>
											</div>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$list['name_first'].'</a>';
													if(!empty($list['vol_agree_sign_name'])){ 
														echo '<br /><span class="badge badge-light">Agreement Signed</span>';
													}
												?>
												<span class="hide">
													<?php
														if(!empty($list['people_email_primary'])){
															echo format_email($list['people_email_primary']);
														}
													?>
												</span>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_people_name_last($list['name_last']).'</a>';?>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$list['address_city'].'</a>';?>
											</td>
											<td style="vertical-align: middle;">
												<?php echo '<a href="'.$cur_link.'">'.$list['address_zip'].'</a>';?>
											</td>
											<td style="vertical-align: middle;">
												<div class="table-row-height" data-mh="church-height">
												<?php 
															echo $this->churches_model->get_list_view_church_name($list);
													?>
												</div>
											</td>
											<!--
											<td style="vertical-align: middle;">
												<?php if($can_edit){ echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_email($list).'</a>';}?>
											</td>
											-->
											<?php 
												foreach($headers_added as $cur_header){ 
													
													echo '<td>'.$comm_name.'</td>';
												}
											?>
											<?php if($dev){echo '<td>PS_ID:'.$list['id_people'].' SF_ID:'.$list['id_salesforce'].'</td>';}?>
										</tr>
									<?php }
									}else{
									?>
								<tr>
									<td colspan="20">No volunteers found. <a href="<?php echo base_url();?>volunteers/list?clear_limiters=1">Try broadening your search.</a></td>
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

<?php 

unset($lists);
unset($list);
unset($item);
unset($collect_emails);
echo $site_footer;
?>

<!-- Datatables -->
    <script>
	var btns_added = 0;
      $(document).ready(function() {
       

        $('#datatable-responsive').DataTable({	'stateSave': true, 
												'order': [[ 2, "asc" ]], 
												'iDisplayLength': 50,
												'bAutoWidth': false, 
												'aoColumns': [{ sWidth: '2%' }, { sWidth: '15%' }, { sWidth: '15%' }, { sWidth: '15%' }, { sWidth: '15%' }, { sWidth: '15%' }, { sWidth: '15%' }],
												'fnDrawCallback': function (oSettings) {
													$('.dataTables_filter').each(function () {
														if(btns_added == 0){
															btns_added = 1;
															$(this).prepend('<div class="btn-table-consolidate-wrapper"><button class="btn btn-default btn-sm btn-table-view-consolidated" type="button"><i class="fa fa-window-minimize"></i></button> <button class="btn btn-default btn-sm btn-table-view-unconsolidated" type="button"><i class="fa fa-window-maximize"></i></button></div>');
															instantiate_table_consolidate_buttons();
														}
													});
												}   
											});
		
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