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

$can_show_cols['affiliate']		= false;
$header										= 'List Agencies';
 if(!empty($_SESSION['view_limiter']['id_affiliate'])){
	$header									= 'List '.$this->affiliates_model->get_affiliate_name_by_id($_SESSION['view_limiter']['id_affiliate']).' Agencies';	 
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
				<li class="active"><?php echo  'List Agencies';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?= $header;?> <small><small><a href="<?php echo base_url();?>agencies/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>agencies/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>agencies/list">
				<?php echo $this->session->flashdata('msg'); ?>
				<?php if($this->security_model->user_has_access(95)){ 
					echo  '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">'.$this->website_model->input_menu_affiliates('id_affiliate', $_SESSION['view_limiter']['id_affiliate'], 'id_affiliate', 'input-sm input-limiter', array('limiter_view' => 1)).'</div></div>';
				}?>
					<div class="row top10">
						<div class="col-md-5 text-center">
							
						</div>
						<div class="col-md-3 text-center">
							
						</div>
						<div class="col-md-4 text-center">
							<?php //echo  $this->website_model->input_menu_statuses('status', $_SESSION['view_limiter']['status'] , 'status', 'input-sm input-limiter', array('view' => 'list_limiter_agency')) ;?>
						</div>
					</div>
					<div class="row top10">
					</div>
					<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Agency</th>
								<th>City</th>
								<th>State</th>
								<th>Status</th>
								<?php if( $can_show_cols['affiliate']){?>
									<th>Affiliate</th>
								<?php }?>
								<?php if($dev){echo '<th>DEV</th>';}?>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										 $cur_link 							= base_url().'agency/edit/'.$list['id_agency_encoded'];
										 $status							= $this->agencies_model->get_agency_status_from_state($list);
										// $cur_com_arr 					= explode(' ',$list['agency_name']);
										 $cur_id							= $list['id_agency'];
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
											<?php echo '<span style="visibility: hidden;">'.str_pad($list['id_agency'], 8, '0', STR_PAD_LEFT).'</span>';?>
											
											<?php $this->agencies_model->display_agency_avatar($list);?>
											<?php //echo '<a href="'.$cur_link.'">'.$list['id_agency'].'</a>';?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<li><a href="<?php echo $cur_link;?>">Edit</a></li>
													<?php if($this->security_model->user_has_access(95)){ ?>
													<li><a href="#" data-href="<?php echo base_url();?>agency/delete?i=<?php echo $list['id_agency_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
													<?php }?>
												</ul>
											</div>
											<br />
											
										</td>

										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_agency_name($list).'</a>';?>
										</td>										
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['agency_address_city'].'</a>';?>
										</td>										
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$list['agency_address_state'].'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
										</td>
										<?php if( $can_show_cols['affiliate']){ echo '<td>'.$this->affiliates_model->get_affiliate_name_by_id($list).'</td>'; }?>
										 <?php if($dev){echo '<td>PS_ID:'.$list['id_agency'].'<br /> SF_ID: <a href="'. $cur_sf_url.'" target="_blank">'.$list['id_salesforce'].'</a></td>';}?>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No agencies found.  <a href="<?php echo base_url();?>agencies/list?clear_limiters=1">Try broadening your search.</a></td>
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
				Are you sure you want to delete this agency?
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
			  'order': [[ 1, "desc" ]],
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