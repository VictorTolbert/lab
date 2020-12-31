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
	$header					= 'List '.$this->affiliates_model->get_affiliate_name_by_id($_SESSION['view_limiter']['id_affiliate']).' Families Requesting Care';	 
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
				<h1 class="page-header">List Families Requesting Care
				<?php if( $this->security_model->user_has_access(60)){?>
					<small><small><a href="<?php echo base_url();?>families/edit/?i=0"> Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>families/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				<?php }?>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>families/view_care_requested_families">
				<?php echo $this->session->flashdata('msg'); ?>					
					<?php if($this->security_model->user_has_access(36)){ ?>
						<div class="row top10">
							<?php echo $this->website_model->make_list_limiters(array('view' => 'families_care_requested'));?>
						</div>
					<?php }?>
					<table id="datatable-responsive" class="table table-striped table-bordered  table-responsive dt-responsive nowrap <?php echo $this->website_model->get_table_view_consolidation_class();?>" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th class="text-center" width="5%">Actions</th>
								<th width="10%">Family</th>
								<!-- <th>Status</th> -->
								<th width="5%">Date Requested</th>
								<th width="8%">City</th>
								<th width="5%">Zip</th>
								<th width="10%">Home Church</th>
								<th width="20%">Nearby Churches</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							if(isset($lists)){
								//dds($lists);
								$arr_already_shown	= array();
								foreach($lists AS $list){
									if(!in_array($list['id_family'], $arr_already_shown)){
										//dds($list);
										$arr_already_shown[]				= $list['id_family'];
										$cur_link 							= base_url().'family/edit/'.$list['id_family_encoded'];
										$status								= $this->families_model->get_family_status_from_state($list);
										$cur_id								= $list['id_family'];
										$arr_assigned[$cur_id]				= array();
										$back_link							= url_enc(base_url().'families/view_care_requested_families');
										$cur_link 							= base_url().'families/edit/'.url_enc($cur_id).'/?r='.$back_link.'&cancel='.$back_link;
										 if(empty($list['id_agency'])){
											 $list['agency_name']			= 'N/A';
										 }
										 if(!empty($list['id_agency']) && $list['id_agency'] == 1){
											 $list['agency_name']			= 'N/A';
										 }

										if(empty($list['family_home_church']) && !empty($list['id_church_home'])){ 
											$list['family_home_church'] = $this->churches_model->get_church_name(array('id_church' => $list['id_church_home']));
										}elseif(empty($list['family_home_church'])){
											$list['family_home_church'] = 'N/A';
										}
										$list['force_assigned']		= 1;
										$list						= $this->families_model->legacy_correct_family_address($list);
										
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

										!is_null($list['id_churches_nearby']) ? $list['id_churches_assigned'] = $list['id_churches_nearby'] : $list['id_churches_assigned'] = null;
										
										$match_type 				= 'Church Match';
										$url_match_type 			= 'church';
										
										if(!empty($list['distance'])){
											$match_type 			= 'Location Match - '.number_format($list['distance'], 2).' Miles';
											$url_match_type 		= 'location';
										}
										
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
													<li><a href="<?php echo $cur_link;?>">Edit Family</a></li>
													<li></li>
													<li>
														<a class="btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="View Family Info - <?php echo $this->families_model->get_family_name($list);?>" data-ajaxurl="<?php echo base_url().'families/ajax_claim_ignore_family/?match_type='.$url_match_type.'&mode=view&f='.url_enc($list['id_family']);?>">View Request</a>
													</li>
																	
													<!--
													<li><a class="btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="Claim Family - <?php echo $this->families_model->get_family_name($list);?>" data-ajaxurl="<?php echo base_url().'families/ajax_claim_ignore_family/?match_type='.$url_match_type.'&mode=claim&f='.url_enc($list['id_family']);?>">Claim Faimily</a></li>
													-->
													<!--
													<li><a class="btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="Ignore Family - <?php echo $this->families_model->get_family_name($list);?>" data-target="#modalnotify" data-ajaxurl="<?php echo base_url().'families/ajax_claim_ignore_family/?match_type='.$url_match_type.'&mode=ignore&f='.url_enc($list['id_family']);?>">Ignore Family</a></li>
													-->
													
													<?php if(!empty($this->website_model->get_compiled_address($list))){ ?>
														<li><a href="<?php echo base_url();?>volunteer-quick-check?address=<?= urlencode($this->website_model->get_compiled_address($list));?>">View Potential Volunteers</a></li>
													<?php }?>
													<?php if($this->security_model->user_has_access(60)){ ?>
														<li><a href="#" data-href="<?php echo base_url();?>family/delete_care_requested?i=<?php echo $list['id_family_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
													<?php }?>
												</ul>
											</div>
											<br />
										</td>

										<td style="vertical-align: middle; ">
											<?php echo '<a href="'.$cur_link.'">'.ellipsify($this->website_model->display_format_family_name($list)).'</a>';
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
											<?php echo $list['family_address_city'];?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo $list['family_address_zip'];?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['family_home_church'].'</a>';?>
										</td>
										<td>
											<div class="table-row-height" data-mh="church-height">
												<?php 
													$list['use_nearby_churches']	= 1;
													echo $this->churches_model->get_list_view_church_name($list);
												?>
												</div>
										</td>
									</tr>
						<?php }
							}
						}
						?>
				</table>
			</form>
		</div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
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
</div>


<!-- top navigation -->
<?php echo $site_footer;?>

<!-- Datatables -->
    <script>
		var btns_added = 0;
		$(document).ready(function() {
			$('#datatable-responsive').DataTable({	'stateSave': true, 
													'order': [[ 2, "desc" ]], 
													'iDisplayLength': 100,
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