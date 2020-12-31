<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['affiliate_name'])){
		$name	.= ' - '.$item['affiliate_name'];
}
if(empty($item['id_affiliate'])){
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
					<a href="<?php echo base_url();?>affiliates/list">
						Affiliates 
					</a>
				</li>
				<li class="active">List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Affiliates <small><small><a href="<?php echo base_url();?>affiliates/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>affiliates/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
								<th></th>
								<th>Affiliate</th>
								<th>State</th>
								<th>Contact</th>
								<th>Status</th>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										$cur_link 		= base_url().'affiliates/edit?i='.$list['id_affiliate_encoded'];		
										$cur_name		= $this->affiliates_model->get_affiliate_name($list);	
										$cur_map_link 	= base_url().'maps/edit_map_entry?id_affiliate='.url_enc($list['id_affiliate']);										
										if(!empty($list['people_email_primary'])){
											$cur_email_link	= 'mailto:'.$list['people_email_primary'];
										}else{

											$cur_email_link	= '#';
										}
									?>
									<tr>
										<td>
											<?php $this->affiliates_model->display_affiliate_avatar($list);?>
												<div class="dropdown" style="float:none;">
													<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
														<span class="caret"></span> Actions
													</button>
													<ul class="dropdown-menu">
														<li><a href="<?php echo $cur_link;?>">Edit</a></li>
														<?php if($this->security_model->user_has_access(95)){ ?>
														<li><a href="#" data-href="<?php echo base_url();?>affiliate/delete?i=<?php echo $list['id_affiliate_encoded'];?>&r=<?php echo url_enc(base_url().'affiliate/list');?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
														<?php }?>
														<li><a href="<?php echo $cur_map_link;?>">Edit MAP Report</a></li>
													</ul>
												</div>
											</td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$cur_name.'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.strtoupper($list['affiliate_address_state']).'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$list['affiliate_contact_name'].'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$this->affiliates_model->get_affiliate_status_from_state($list).'</a>';?></td>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No affiliates found. <a href="<?php echo base_url();?>affiliates/list?clear_limiters=1">Try broadening your search.</a></td>
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
				Are you sure you want to delete this affiliate?
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