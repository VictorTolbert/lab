<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_unit		= 'Logs';
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
				<li class="active">Salesforce Sync Logs</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Log Entries </h1>
			</div>
		</div><!--/.row-->
			<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>salesforce/viewloglist">
					<?php echo $this->session->flashdata('msg'); ?>
					<div class="row gutter30">
						<div class="col-md-4 text-center">
							<?php echo  $this->website_model->input_menu_statuses('salesforce_log_status', $_SESSION['view_limiter']['salesforce_log_status'] , 'salesforce_log_status', 'input-sm input-limiter', array('limiter_view' => 1, 'view' => 'salesforce_log_status')) ;?>
						</div>
					</div>
						<div class="row top30">
						</div>
						<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Date</th>
									<th>Result</th>
									<th>Synced</th>
									<th>Skipped</th>
									<th>Summary</th>
								</tr>
							</thead>
						  <tbody>
							  <?php if(isset($lists)){
										foreach($lists AS $list){
											$cur_churches					= array();
											$list['get_home_church']	= 1;
											$list['role_scope']				= $role_scope;
											$list['strip_tags']				= 1;
											$cur_link 							= base_url().'salesforce/viewlogitem/'.url_enc($list['id_sf_log']);
											$cur_result						= $this->salesforce_model->get_sync_result_from_log_result_status($list);
											$cur_summary				= substr(strip_tags($list['log']),0,100).'...';
											
											?>
										<tr class="people-<?php echo $list['id_sf_log'];?>">
											<td>
												<?php echo '<a href="'.$cur_link.'">'.date_offset('Y-m-d H:i:s', $list['date_sync']).'</a>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$cur_result.'</a>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['total_count_synced'].'</a>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['total_count_skipped'].'</a>';?>
											</td>
											<td>
												<div class="table-row-height" data-mh="log-height">
													<?php echo $cur_summary;?>
												</div>
											</td>
										</tr>
									<?php }
									}else{
									?>
								<tr>
									<td colspan="20" class="text-center">No sync log entries found. <a href="<?php echo base_url();?>events/list?clear_limiters=1">Try broadening your search.</a></td>
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
					Are you sure you want to delete this event log entry?
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

        $('#datatable').dataTable({'stateSave': true, 'order': [[ 0, "desc" ]], 'iDisplayLength': 50});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'stateSave': true, 'order': [[ 0, "desc" ]], 'iDisplayLength': 50});

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