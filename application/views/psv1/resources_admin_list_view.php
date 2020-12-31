<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['resource_name'])){
		$name	.= ' - '.$item['resource_name'];
}
if(empty($item['id_resource'])){
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
					<a href="<?php echo base_url();?>resources/admin/list">
						Admin Resources 
					</a>
				</li>
				<li class="active">List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Resources 
					<div class="pull-right">
						<a href="<?php echo base_url();?>resources/admin/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<?php echo $this->session->flashdata('msg'); ?>
	
				<br />
						<p class="text-muted font-13 m-b-30"></p>
					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Actions</th>
								<th>Title</th>
								<th>Type</th>
								<th>Affiliates</th>
								<th>User Access</th>
								<th>Status</th>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										$cur_link 				= base_url().'resources/admin/edit/'.$list['id_resource_encoded'];		
										$cur_view_link			= base_url().'resources/view/'.$list['resource_slug'];		
										$cur_name				= $this->resources_model->get_ps_resource_name($list);	
										$list['return_all']		= 1;										
										
									?>
									<tr>
										<td>
											<?php $this->resources_model->display_resource_avatar($list);?>
												<div class="dropdown" style="float:none;">
													<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
														<span class="caret"></span> Actions
													</button>
													<ul class="dropdown-menu">
														<li><a href="<?php echo $cur_link;?>">Edit</a></li>
														<li><a href="<?php echo $cur_view_link;?>">View Resource</a></li>
														<?php if($this->security_model->user_has_access(95)){ ?>
															<li>
																<a href="#" data-href="<?php echo base_url();?>resources/admin/delete?i=<?php echo $list['id_resource_encoded'];?>&r=<?php echo url_enc(base_url().'resources/admin/list');?>" data-toggle="modal" data-target="#confirm-delete">
																	Delete
																</a>
															</li>
														<?php }?>
													</ul>
												</div>
											</td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$cur_name.'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$this->resources_model->get_ps_resource_format_name($list).'</a>';?></td>
									  <td><?php echo $this->resources_model->display_list_view_affiliates($list).'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$this->resources_model->display_list_view_access($list).'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$this->resources_model->get_ps_resource_status_from_state($list).'</a>';?></td>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No resources found. <a href="<?php echo base_url();?>resources/list?clear_limiters=1">Try broadening your search.</a></td>
							</tr>
						<?php }?>
					</tbody>
				</table>
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
				Are you sure you want to delete this resource?
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

        $('#datatable').dataTable({'order': [[ 1, "asc" ]], 'iDisplayLength': 50});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'order': [[ 1, "asc" ]], 'iDisplayLength': 50});

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