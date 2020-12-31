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
?>

<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active"><?php echo  'List Messaging Templates';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Messaging Templates <small><small><a href="<?php echo base_url();?>communities/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>communities/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>communities/list">
				<?php echo $this->session->flashdata('msg'); ?>
					<?php if($this->security_model->user_has_access(95)){ 
					echo  '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">'.$this->website_model->input_menu_affiliates('id_affiliate', $_SESSION['view_limiter']['id_affiliate'], 'id_affiliate', 'input-sm input-limiter', array('limiter_view' => 1)).'</div></div><div class="row top10"></div>';
				}?>
					<div class="row gutter30">
						<div class="col-md-4 text-center">
							<?php echo  $this->website_model->input_menu_churches('id_church', $_SESSION['view_limiter']['id_church'] , 'id_church', 'input-sm input-limiter', array('include_parent_church_ids' => 1, 'limiter_view' => 1)) ;?>
						</div>
						<div class="col-md-4 text-center">
							<?php //echo  $this->website_model->input_menu_roles('id_role', $_SESSION['view_limiter']['id_role'], 'id_role', 'input-sm input-limiter', array('limiter_view' => 1)) ;?>
						</div>
						<div class="col-md-4 text-center">
							<?php echo  $this->website_model->input_menu_statuses('community_status', $_SESSION['view_limiter']['community_status'] , 'community_status', 'input-sm input-limiter', array('view' => 'list_limiter_community')) ;?>
						</div>
					</div>
					<div class="row top10">
					</div>
					<table id="datatable-responsive" class="table table-striped table-bordered  table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Actions</th>
								<th>Family</th>
								<th>Iteration</th>
								<th>Status</th>
								<th>Serving Church</th>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										 $cur_link 							= base_url().'template/edit/'.$list['id_msg_template_encoded'];
										 $status							= $this->communities_model->get_community_status_from_state($list);
										// $cur_com_arr 					= explode(' ',$list['community_name']);
										 $cur_id							= $list['id_msg_template'];
										 $arr_assigned[$cur_id]	= array();
										 $cur_sf_url						= '';
										 if(!empty($list['id_salesforce'])){
											 $cur_sf_url						= 'https://promise686.my.salesforce.com/'.$list['id_salesforce'];
										 }
										 if(empty($item['assign_id_family'])){
											 $item['assign_id_family']	= null;
										 }
										 if(empty($item['assign_id_church'])){
											 $item['assign_id_church']	= null;
										 }
										 /*
										 if(empty($cur_com_arr[1])){
											 $cur_com_arr[1] == '';
										 }
										 $list['cur_com_arr']		= $cur_com_arr;
										 */
										 if(empty($list['iteration'])){
											 $list['iteration'] = 1;
										 }
										 
										?>
									<tr>
										<td class="text-center">
											
												<?php $this->communities_model->display_community_avatar($list);?>
												<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['id_msg_template'].'</p>'; }?>
												<?php //echo '<a href="'.$cur_link.'">'.$list['id_promise'].'</a>';?>
												<?php if($this->security_model->user_has_access(100)){ echo '<p class="text-center">'. $list['id_msg_template'].'</p>'; }?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
													<ul class="dropdown-menu">
														<li><a href="<?php echo $cur_link;?>">Edit</a></li>
														<li><a href="<?php echo base_url();?>communities/build/<?php echo $list['id_msg_template_encoded'];?>" >Build Team</a></li>
														<li><a href="<?php echo base_url();?>communities/one-pager/<?php echo $list['id_msg_template_encoded'];?>" >One Pager</a></li>
														<?php if(!empty($list['community_state']) && $list['community_state'] != 24){?>
														<li><a href="<?php echo base_url();?>communities/close?i=<?php echo $list['id_msg_template_encoded'];?>" >Close</a></li>
														<?php }?>
														<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="community_volunteers_<?php echo $list['id_msg_template_encoded'];?>" data-msgjson="">Send A Team Message</a></li>
														<li><a href="#" data-toggle="modal" data-target="#modalnotify" class="btn-modal-notify" data-ajaxurl="<?php echo base_url();?>communities/ajaxcompileemailaddresses?id=<?php echo url_enc($list['id_msg_template']);?>" data-title="<?php echo $this->website_model->display_format_community_name($list);?> - Email Addresses" >Compile Emails</a></li>
														<li><a href="#" data-href="<?php echo base_url();?>community/delete?i=<?php echo $list['id_msg_template_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
													</ul>
											</div>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['messaging_name'].'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['id_affiliate'].'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['id_church'].'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['messaging_type'].'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<div class="table-row-height" data-mh="church-height">
											<?php 
											/*
											if(!empty($list['assigned'])){
												foreach($list['assigned'] as $cur_assign){
													if($cur_assign['role_scope'] == $role_scope){
														if(!in_array( $cur_assign['id_church'], $arr_assigned[$cur_id])){
															 $arr_assigned[$cur_id][]		= $cur_assign['id_church'];
															echo '<a href="'.$cur_link.'">'.$this->churches_model->get_church_name($cur_assign).'</a><br />';
														}
													}
												}
											}elseif(!empty($list['assign_id_church'])){
												echo '<a href="'.$cur_link.'">'.$this->churches_model->get_church_name(array('id_church' => $list['assign_id_church'])).'</a><br />';
											}
											*/
											if(!empty($list['assign_id_church'])){
												echo '<a href="'.$cur_link.'">'.$this->churches_model->get_list_view_church_name(array('id_churches_assigned' => $list['id_church'])).'</a><br />';
											}
											?>
											</div>
										</td>
										
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No care communities found. <a href="<?php echo base_url();?>communities/list?clear_limiters=1">Try broadening your search.</a></td>
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
				Are you sure you want to delete this community?
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
			  'order': [[ 1, "asc" ]],
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

        $('#datatable').dataTable({'stateSave': true, 'order': [[ 1, "asc" ]], 'iDisplayLength': 100});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'stateSave': true, 'order': [[ 1, "asc" ]], 'iDisplayLength': 100});

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
		
			//Pre-populate Search from URL
			var searchText = getUrlParam("search");
			if(!!searchText){
				var dttable = $('#datatable-responsive').dataTable({ "retrieve": true }).api();
				dttable.search(searchText).draw();
			}

      });
	  
	   $("#datatable").on("init.dt", function (event) {
		   
		   
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