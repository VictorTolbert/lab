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
				<h1 class="page-header">List Needs <small><small><a href="<?php echo base_url();?>needs/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>needs/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>needs/viewlist">
					<?php if($this->security_model->user_has_access(36)){ ?>
    					<div class="row top10">
    						<?php echo $this->website_model->make_list_limiters(array('view' => 'needs', 'custom_view' => ''));?>
    					</div>
					<?php }?>
					<div class="row top10">
					</div>
					<table id="datatable-responsive" class="table table-striped table-bordered  table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="5%">Actions</th>
								<th>Need</th>
								<th>Type</th>
								<th>Status</th>
								<th>Date Added</th>
								<th>Priority</th>
								<th>Fulfillers</th>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
							  
									foreach($lists AS $list){
										 $cur_link 							= base_url().'need/edit/'.$list['id_need_encoded'];
										 $status							= $this->needs_model->get_need_status_from_state($list);
										 $type								= $this->needs_model->get_display_need_type($list);
										 $priority							= $this->needs_model->get_display_need_priority($list);
										 $date_add							= date_offset('m/d/Y h:i a', $list['need_date_add']);
										// $cur_com_arr 					= explode(' ',$list['need_name']);
										 $cur_id							= $list['id_need'];
										 $arr_assigned[$cur_id]				= array();
										 $list['display_small_avatars']		= 1;
										 if(empty($list['id_agency'])){
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
										// $id_parents		= $this->needs_model->get_foster_parent_ids_from_assigned_list($list);
										 if(empty($list['vol_agree_sign_name']) && !empty($id_parents[0])){ 
											$msg_json_agree['body']							=  $this->emails_model->get_email_request_need_signature($list);
											$msg_json_agree['subject']						= 'Action Needed: Supported Need Agreement';
											$msg_json_agree['recipient_ids']				= $id_parents;
											$msg_json_agree									= json_encode($msg_json_agree);
										}
										?>
									<tr>
										<td class="text-center">
											<?php echo '<span style="visibility: hidden;">'.str_pad($list['id_need'], 8, '0', STR_PAD_LEFT).'</span>';?>
											
											<?php $this->needs_model->display_need_avatar($list);?>
											<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['id_need'].'</p>'; }?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<li><a href="<?php echo $cur_link;?>">Edit</a></li>
													<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_need'];?>" data-msgjson='<?php echo $msg_json_agree;?>'>Message Fulfillers</a></li>
													<li><a href="#" data-href="<?php echo base_url();?>need/delete?i=<?php echo $list['id_need_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
												</ul>
											</div>											
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_need_name($list).'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$type.'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$date_add.'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$priority.'</a>';?>
										</td>
										
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$this->needs_model->get_display_need_list_fulfillers($list).'</a>';?>
										</td>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No familes found. <a href="<?php echo base_url();?>needs/list?clear_limiters=1">Try broadening your search.</a></td>
							</tr>
						<?php }?>
					</tbody>
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
				Are you sure you want to delete this need?
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

        $('#datatable').dataTable({	'stateSave': true, 
									'order': [[ 4, "desc" ]], 
									'iDisplayLength': 100,
									'fnDrawCallback': function (oSettings) {
										$('.dataTables_filter').each(function () {
											$(this).prepend('<div class="btn-table-consolidate-wrapper"><button class="btn btn-default btn-sm btn-table-view-consolidated" type="button"><i class="fa fa-window-minimize"></i></button> <button class="btn btn-default btn-sm btn-table-view-unconsolidated" type="button"><i class="fa fa-window-maximize"></i></button></div>');
											instantiate_table_consolidate_buttons();
										});
									}   
								});
								
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'stateSave': true, 'order': [[ 4, "desc" ]], 'iDisplayLength': 100});

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