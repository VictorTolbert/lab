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
				<li>
					Reports
				</li>
				<li class="active"><?php echo  'Recruited Families';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row ">
			<div class="col-lg-12">
				<h1 class="page-header">Recruited Families <small></h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<?php echo $totals['html_hero_stats'];?>
		</div>
		
		<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="">
				<?php echo $this->session->flashdata('msg'); ?>
					<div class="row gutter30">
						<div class="col-md-4 text-center">
							
							
						</div>
						<div class="col-md-4 text-center">
							<?php echo  $this->website_model->input_menu_churches('id_church', $_SESSION['view_limiter']['id_church'] , 'id_church', 'input-sm input-limiter', array('include_parent_church_ids' => 1, 'limiter_view' => 1)) ;?>
						</div>
						<div class="col-md-4 text-center">
							<?php echo  $this->website_model->input_menu_statuses('status', $_SESSION['view_limiter']['status'] , 'status', 'input-sm input-limiter', array('view' => 'list_limiter_family')) ;?>
						</div>
					</div>
					<div class="row top10">
					</div>
					<table id="datatable-responsive" class="table table-striped table-bordered  table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Family</th>
								<th>Status</th>
								<?php if($dev){echo '<th>DEV</th>';}?>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										 $cur_link 							= base_url().'family/edit/'.$list['id_family_encoded'];
										 $status							= $this->families_model->get_family_status_from_state($list);
										// $cur_com_arr 					= explode(' ',$list['family_name']);
										 $cur_id							= $list['id_family'];
										 $arr_assigned[$cur_id]	= array();
										 
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
										 
										?>
									<tr>
										<td class="text-center">
											<?php echo '<span style="visibility: hidden;">'.str_pad($list['id_family'], 8, '0', STR_PAD_LEFT).'</span>';?>
											
											<?php $this->families_model->display_family_avatar($list);?>
											<?php echo '<a href="'.$cur_link.'">'.$list['id_family'].'</a>';?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<li><a href="<?php echo $cur_link;?>">Edit</a></li>
													<li><a href="#" data-href="<?php echo base_url();?>family/delete?i=<?php echo $list['id_family_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
												</ul>
											</div>
											<br />
											
										</td>

										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_family_name($list).'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
										</td>
										 <?php if($dev){echo '<td>PS_ID:'.$list['id_family'].'<br /> SF_ID: <a href="'. $cur_sf_url.'" target="_blank">'.$list['id_salesforce'].'</a></td>';}?>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No familes found.  <a href="<?php echo base_url();?>familes/list?clear_limiters=1">Try broadening your search.</a></td>
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

        $('#datatable').dataTable({'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 100});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 100});

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