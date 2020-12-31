<?php echo $site_header; ?>

<?php
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$this->website_model->display_format_people_name_last($item['name_last']);
}
if(empty($item['id_people'])){
	$name .= ' New Care Community';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';


$can_show_cols['affiliate']			= false;
$header									= 'List Families';
 if(!empty($_SESSION['view_limiter']['id_affiliate'])){
	$header					= 'List '.$this->affiliates_model->get_affiliate_name_by_id($_SESSION['view_limiter']['id_affiliate']).' Families';	 
 }elseif($this->security_model->user_has_access(95)){
	 $can_show_cols['affiliate']	= true;
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
				<li class="active"><?php echo  $header;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><i class="fas fa-house-user"></i> List Families 
				<?php if( $this->security_model->user_has_access(60)){?>
					<small><small><a href="<?php echo base_url();?>families/add_family"> Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>families/add_family" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				<?php }?>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>families/list">
					<?php echo $this->session->flashdata('msg'); ?>
					<?php if($this->security_model->user_has_access(60)){ ?>
						<div class="row top10">
							<?php echo $this->website_model->make_list_limiters(array('view' => 'families_list'));?>
						</div>
					<?php }?>
					
					<table id="datatable-responsive" class="table table-striped table-bordered  table-responsive dt-responsive nowrap <?php echo $this->website_model->get_table_view_consolidation_class();?>" cellspacing="0" width="100%">
					<?php 
						switch(strtolower(get_limiter_session_value('family_status'))){
							case 30:
					?>
						<thead>
							<tr>
								<th class="text-center" width="5%">Actions</th>
								<th width="20%">Family</th>
								<!-- <th>Status</th> -->
								<th width="8%">Date Requested</th>
								<th width="5%">Zip</th>
								<th>Agency</th>
								<th>Nearby Churches</th>
							</tr>
						</thead>
						<tbody>
							<?php if(isset($lists)){
								
									$arr_already_shown	= array();
									foreach($lists AS $list){
										if(empty($list['family_name']) && empty($list['name_parent0_first']) && empty($name_parent0_last['name_parent0_last'])){
											$arr_already_shown[]				= $list['id_family'];
										}
										if(!in_array($list['id_family'], $arr_already_shown)){
											$arr_already_shown[]				= $list['id_family'];
											

											 $cur_link 							= base_url().'family/edit/'.$list['id_family_encoded'];
											 $status							= $this->families_model->get_family_status_from_state($list);
											// $cur_com_arr 					= explode(' ',$list['family_name']);
											 $cur_id							= $list['id_family'];
											 $arr_assigned[$cur_id]				= array();
											 if(empty($list['id_agency'])){
												 $list['agency_name']			= 'N/A';
											 }
											 if(!empty($list['id_agency']) && $list['id_agency'] == 1){
												 $list['agency_name']			= 'N/A';
											 }
											 //$list['agency_name']			= 'N/A';
											 
											 /*
											 if(empty($cur_com_arr[1])){
												 $cur_com_arr[1] == '';
											 }
											 $list['cur_com_arr']		= $cur_com_arr;
											 */
											  $cur_sf_url						= '';
											 if(!empty($list['id_salesforce'])){
												 $cur_sf_url						= 'https://promise686.my.salesforce.com/'.$list['id_salesforce'];
											 }
											 $msg_json_agree	= array();
											 $msg_json_data		= array('id_email_layout' => null);
											 $id_parents		= $this->families_model->get_foster_parent_ids_from_assigned_list($list);
											 if(empty($list['vol_agree_sign_name']) && !empty($id_parents[0])){ 
												$msg											=  $this->emails_model->get_email_request_family_signature($list);
												if(is_array($msg)){

													if(!empty($msg['messaging_body'])){
														$msg_json_agree['body']						= $msg['messaging_body'];
													}
													if(!empty($msg['id_email_layout'])){
														$msg_json_data['id_email_layout']			= $msg['id_email_layout'];
													}
													if(!empty($msg['email_layout_header'])){
														$msg_json_data['email_layout_header']		= $msg['email_layout_header'];
													}
												}else{
													$msg_json_agree['body']						= $msg;	
													
												}
												
												$msg_json_agree['subject']						= 'Action Needed: Supported Family Agreement';
												$msg_json_agree['recipient_ids']				= $id_parents;
												
												$msg_json_agree									= json_encode($msg_json_agree);
												$msg_json_data									= json_encode($msg_json_data);
											}
											
											$list['force_assigned']		= 1;
											$list						= $this->families_model->legacy_correct_family_address($list);
											
											
											
											
											!is_null($list['id_churches_nearby']) ? $list['id_churches_assigned']	= $list['id_churches_nearby'] :   $list['id_churches_assigned'] = null;
										?>
									<tr>
										<td class="text-center">
											<?php echo '<span style="visibility: hidden;">'.str_pad($list['id_family'], 8, '0', STR_PAD_LEFT).'</span>';?>
											
											<?php $this->families_model->display_family_avatar($list);?>
											<?php //echo '<a href="'.$cur_link.'">'.$list['id_family'].'</a>';?>
											<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['id_family'].'</p>'; }?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<li><a href="<?php echo $cur_link;?>" class="ps_link_load_ui">Edit</a></li>
													<li><a href="<?php echo base_url();?>communities/list/?search=<?php echo rawurlencode(str_replace(' and ', ' ',str_replace('&', ' ',$this->website_model->display_format_family_name($list))));?>">View Care Communities</a></li>
													<?php if(!empty($list['agree_family_sign_name'])){?>
													<li>
														<a href="<?php echo base_url();?>form/familyagreement/<?php echo url_enc($list['id_family']);?>/?show_print=1" target="_blank">View / Print Agreement</a>
													</li>
													<?php }elseif(!empty($id_parents[0])){ ?>
														<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_family'];?>" data-msgjson='<?php echo $msg_json_agree;?>' data-datajson='<?php echo $msg_json_data;?>'>Request Agreement Signature</a></li>
													<?php }?>
													<?php if(!empty($id_parents[0])){ ?>
														<li><a href="#composemessagemodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo implode(',',$id_parents);?>" data-msgslug="email_family_foster_request_update_info" data-msgscope="family_members">Request Info Update</a></li>
													<?php }?>
													
													<?php if(!empty($this->website_model->get_compiled_address($list))){ ?>
														<li><a href="<?php echo base_url();?>volunteer-quick-check?address=<?= urlencode($this->website_model->get_compiled_address($list));?>">View Potential Volunteers</a></li>
													<?php }?>
													<?php if($this->security_model->user_has_access(60)){ ?>
														<li><a href="#" data-href="<?php echo base_url();?>family/delete?i=<?php echo $list['id_family_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
													<?php }?>
												</ul>
											</div>
											<br />
											
										</td>

										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'" class="ps_link_load_ui">'.$this->website_model->display_format_family_name($list).'</a>';
												if(!empty($list['agree_family_sign_name'])){ 
													echo '<br /><span class="badge badge-light">Agreement Signed</span>';
												 }
											?>
										</td>
										<?php if(1==2){?>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
										</td>
										<?php }?>
										<td style="vertical-align: middle;">
											<?php echo date_offset('m/d/Y', $list['date_add']);?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo $list['family_address_zip'];?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['agency_name'].'</a>';?>
										</td>
										<td>
											<div class="table-row-height" data-mh="church-height">
												<?php 
															
															echo $this->churches_model->get_list_view_church_name($list);
													?>
												</div>
										</td>
									</tr>
							<?php 	}
								}
							}
								
							break;
							default:
						?>
						<thead>
							<tr>
								<th class="text-center" width="2%">Actions</th>
								<th width="30%">Family</th>
								<th width="30%">Parent First Name</th>
								<th width="30%">Parent Last Name</th>
								<th width="30%">Parent First Name</th>
								<th width="30%">Parent Last Name</th>
								<th width="10%">Status</th>
								<th width="10%">Zip</th>
								<th width="20%">Agency</th>
							</tr>
						</thead>
						<tbody>
						 
						</tbody>
					<?php break;
					} //end switch
					?>
				</table>
			</form>
		</div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this family?
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

<!-- Datatables -->
    <!-- Datatables -->
<script>
	var btns_added = 0;
      $(document).ready(function() {
       

        $('#datatable-responsive').DataTable({	'stateSave': true, 
												'ajax': "<?= base_url();?>families/ajax_list_families<?= $url_params;?>",
												'deferRender': true,
												'processing': true,
												'dom': 'Bfrtip',
												'colReorder': true,
												'buttons': [ {
																extend: 'csvHtml5',
																exportOptions: {
																	columns: ':visible'
																	}
																},
																'colvis'
															],
												'oLanguage': {
													'sEmptyTable': "<h3>Sorry, there are no matching results!</h3>"
												},
												'language': {
													'loadingRecords': '&nbsp;',
													'processing': '<i class="fas fa-refresh fa-spin fa-3x"></i><br /><p class="text-center top10">Loading...</p>',
													'emptyTable': "<h3>Sorry, there are no matching results!</h3>"
												},
												 'columnDefs': [
													{ 'searchable': false, 'targets': 0 },
													{ 'visible': false, 'targets': [2,3,4,5]}
												],
												'columns': [
															{ "data": "avatar", "width": "5%" },
															{ "data": "family_name", "width": "15%" },
															{ "data": "parent0_first_name", "width": "15%" },
															{ "data": "parent0_last_name", "width": "15%" },
															{ "data": "parent1_first_name", "width": "15%" },
															{ "data": "parent1_last_name", "width": "15%" },
															{ "data": "status" },
															{ "data": "zip" },
															{ "data": "agency" }
														],
												'order': [[ 2, "asc" ]], 
												'iDisplayLength': 50,
												'fnDrawCallback': function (oSettings) {
													$('.dataTables_filter').each(function () {
														if(btns_added == 0){
															btns_added = 1;
															$(this).prepend('<div class="btn-table-consolidate-wrapper"><button class="btn btn-default btn-sm btn-table-view-consolidated" type="button"><i class="fa fa-window-minimize"></i></button> <button class="btn btn-default btn-sm btn-table-view-unconsolidated" type="button"><i class="fa fa-window-maximize"></i></button>');
															instantiate_table_consolidate_buttons();
															
														}
													});
													instantiate_btn_compose_modal();
													instantiate_add_assignment_buttons();
												}   
											});
	
        $('#datatable-scroller').DataTable({
         
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