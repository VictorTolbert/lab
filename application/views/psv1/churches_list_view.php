<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['church_name'])){
		$name	.= ' - '.$item['church_name'];
}
if(empty($item['id_church'])){
	$name .= ' New Church';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';


$can_show_cols['affiliate']			= false;
$header									= 'List Churches';
 if(!empty($_SESSION['view_limiter']['id_affiliate'])){
	$header					= 'List '.$this->affiliates_model->get_affiliate_name_by_id($_SESSION['view_limiter']['id_affiliate']).' Churches';	 
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
					<a href="<?php echo base_url();?>churches/list">
						Churches 
					</a>
				</li>
				<li class="active">List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><i class="fas fa-church"></i> <?= $header;?> <small><small><a href="<?php echo base_url();?>church/add">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>church/add" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
			<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>churches/list">
				<?php echo $this->session->flashdata('msg'); ?>
				<?php if($this->security_model->user_has_access(60)){ ?>
					<div class="row top10">
						<?php echo $this->website_model->make_list_limiters(array('view' => 'churches'));?>
					</div>
				<?php }?>
					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th></th>
								<th>Name</th>
								<th>City</th>
								<th>State</th>
								<th>Contact</th>
								<th>Status</th>
								<?php if( $can_show_cols['affiliate']){?>
									<th>Affiliate</th>
								<?php }?>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										$cur_link 					= base_url().'churches/edit/'.$list['id_church_encoded'];	
										$cur_name					= $this->churches_model->get_church_name($list);	
										$cur_address				= $this->churches_model->get_compiled_church_address($list);
										$cur_quick_check_link		= base_url().'families/quickcheckawaitingfamilies/?c='.url_enc($list['id_church']).'&r='.url_enc(base_url().'churches/list');											
										if(!empty($list['$cur_address'])){
											$cur_quick_check_link	.='&address='.$list['$cur_address'];
										}	
										if(!empty($list['church_geo_lat'])){
											$cur_quick_check_link	.='&geo_lat='.$list['church_geo_lat'];
										}
										if(!empty($list['church_geo_lng'])){
											$cur_quick_check_link	.='&geo_lng='.$list['church_geo_lng'];
										}
										
										$cur_map_link = base_url().'maps/edit_map_entry?id_church='.url_enc($list['id_church']);
										$cur_agree_link = base_url().'form/churchagreement/?c='.url_enc($list['id_church']);
																		 
										if(!empty($list['people_email_primary'])){
											$cur_email_link			= 'mailto:'.$list['people_email_primary'];
										}else{

											$cur_email_link	= '#';
										}
										
										//$this->churches_model->update_legacy_church_contacts($list['id_church']);
									?>
									<tr>
									<td>
										<?php $this->churches_model->display_church_avatar($list);?>
										<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['id_church'].'</p>'; }?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="<?php echo $cur_link;?>">Edit</a>
													</li>
													<li>
														<a href="<?php echo $cur_quick_check_link;?>">Awaiting Families Near Church</a>
													</li>
													<li>
														<a href="<?php echo $cur_map_link;?>">Edit MAP Report</a>
													</li>
													<li>
														<a href="<?php echo $cur_agree_link;?>" target="_blank">Church Agreement Link</a>
													</li>
													<!--
													<li>
														<a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_people'];?>">Send Message</a>
													</li>
													-->
													<?php if($this->security_model->user_has_access(85)){ ?>
													<li>
														<a href="#" data-href="<?php echo base_url();?>church/delete?i=<?php echo $list['id_church_encoded'];?>&r=<?php echo url_enc(base_url().'church/list');?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
													</li>
													<?php }?>
												</ul>
											</div>
									</td>
									
									  <td><?php echo '<a href="'.$cur_link.'">'.$cur_name.'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$list['address_city'].'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.strtoupper($list['address_state']).'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.str_replace(',', '<br />', $list['church_contact_name']).'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$this->churches_model->get_church_status_from_state($list).'</a>';?></td>
									  <?php if( $can_show_cols['affiliate']){ echo '<td>'.$this->affiliates_model->get_affiliate_name_by_id($list).'</td>'; }?>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No churches found. <a href="<?php echo base_url();?>churches/list?clear_limiters=1">Try broadening your search.</a></td>
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
				Are you sure you want to delete this church?
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

        $('#datatable-responsive').DataTable({'stateSave': true, 'order': [[ 1, "asc" ]], 'iDisplayLength': 50});

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