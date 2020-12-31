<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['region_name'])){
		$name	.= ' - '.$item['region_name'];
}
if(empty($item['id_region'])){
	$name .= ' New Event';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

$can_show_cols['affiliate']	= false;
$header									= 'List Regions';
 if(!empty($_SESSION['view_limiter']['id_affiliate'])){
	$header								= 'List '.$this->affiliates_model->get_affiliate_name_by_id($_SESSION['view_limiter']['id_affiliate']).' Regions';	 
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
				<li>
					<a href="<?php echo base_url();?>regions/list">
						Regions 
					</a>
				</li>
				<li class="active">List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			<h1 class="page-header"><?= $header;?> <small><small><a href="<?php echo base_url();?>regions/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>regions/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>regions/list">
				<?php echo $this->session->flashdata('msg'); ?>
	
				<div class="row gutter30">
					<div class="col-md-5 text-center">
						<?php if($this->security_model->user_has_access(95)){ 
							echo  $this->website_model->input_menu_affiliates('id_affiliate', $_SESSION['view_limiter']['id_affiliate'], 'id_affiliate', 'input-sm input-limiter', array('limiter_view' => 1)); 
						}?>
						
					</div>
					<div class="col-md-3 text-center">
						
					</div>
					<div class="col-md-4 text-center">
						<?php //echo  $this->website_model->input_menu_statuses('status', $_SESSION['view_limiter']['status'] , 'status', 'input-sm input-limiter', array('view' => 'list_limiter_agency')) ;?>
					</div>
				</div>
				
				<div class="row top10">
					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th></th>
								<th>Name</th>
								<th>Manager</th>
								<th>State</th>
								<th>Status</th>
								<?php if( $can_show_cols['affiliate']){?>
									<th>Affiliate</th>
								<?php }?>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
											$cur_link 		= base_url().'regions/edit?i='.$list['id_region_encoded'];		
											$cur_name	= $this->regions_model->get_region_name($list);									 
											if(!empty($list['people_email_primary'])){
												$cur_email_link	= 'mailto:'.$list['people_email_primary'];
											}else{

												$cur_email_link	= '#';
											}
										?>
									<tr>
										<td>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<li><a href="<?php echo $cur_link;?>">Edit</a></li>
													<?php if($this->security_model->user_has_access(95)){ ?>
													<li><a href="#" data-href="<?php echo base_url();?>regions/delete?i=<?php echo $list['id_region_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
													<?php }?>
												</ul>
											</div>
											<br />
										</td>
										<td><?php echo '<a href="'.$cur_link.'">'.$cur_name.'</a>';?></td>
										<td><?php echo '<a href="'.$cur_link.'">'.$list['manager_name_first'].' '.$this->website_model->display_format_people_name_last($list['manager_name_last']).'</a>';?></td>
										<td><?php echo '<a href="'.$cur_link.'">'.$list['region_address_state'].'</a>';?></td>
										<td><?php echo '<a href="'.$cur_link.'">'.$this->regions_model->get_region_status_from_state($list).'</a>';?></td>
									<?php if( $can_show_cols['affiliate']){ echo '<td>'.$this->affiliates_model->get_affiliate_name_by_id($list).'</td>'; }?>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No regions found. <a href="<?php echo base_url();?>regions/list?clear_limiters=1">Try broadening your search.</a></td>
							</tr>
						<?php }?>
					</tbody>
				</table>
				</form>
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
				Are you sure you want to delete this region?
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