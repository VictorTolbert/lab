<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$this->website_model->display_format_people_name_last($item['name_last']);
}
if(empty($item['id_people'])){
	$name .= ' New Staff Member';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

//print_array($lists);
$can_show_cols['affiliate']	= false;
$header									= 'List Staff';
 if(!empty($_SESSION['view_limiter']['id_affiliate'])){
	$header								= 'List '.$this->affiliates_model->get_affiliate_name_by_id($_SESSION['view_limiter']['id_affiliate']).' Staff';	 
}
if($this->security_model->user_has_access(95)){
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
				<li class="active"><?php echo  'List Staff';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			<h1 class="page-header"><?= $header;?> <small><small><a href="<?php echo base_url();?>staff/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>staff/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-container">
			<div class="row">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>staff/list">
				<?php echo $this->session->flashdata('msg'); ?>
					<div class="row gutter30">
						<div class="col-md-4 text-center">
							<?php 
									if($this->security_model->user_has_access(95)){ 
										echo  $this->website_model->input_menu_affiliates('id_affiliate', $_SESSION['view_limiter']['id_affiliate'] , 'id_affiliate', 'input-sm input-limiter', array('limiter_view' => 1)) ; 
									}
							?>
						</div>
						<div class="col-md-4 text-center">
							<?php echo  $this->website_model->input_menu_roles('id_role', $_SESSION['view_limiter']['id_role'], 'id_role', 'input-sm input-limiter', array('limiter_view' => 1, 'role_scope' => 'staff')) ;?>
						</div>
						<div class="col-md-4  text-center">
							
						</div>
					</div>
					<div class="row top10">
					</div>
					<table id="datatable-responsive" class="table table-striped table-bordered  table-responsive dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th></th>
									<th>Name</th>
									<th>Email</th>
									<th>Status</th>
									<?php if( $can_show_cols['affiliate']){ echo '<th>Affiliate</th>';}?>
									
								</tr>
							</thead>
							<tbody>
							  <?php if(isset($lists)){
										foreach($lists AS $list){
											 $cur_link 		= base_url().'staff/edit/'.$list['id_people_encoded'];
											 $list['scope']	= 'staff';
											 $status			= $this->people_model->get_person_status_from_state($list);
											
											?>
										<tr>
										<td class="text-center">
											<?php $this->people_model->display_people_avatar($list);?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
												<ul class="dropdown-menu">
													<li><a href="<?php echo $cur_link;?>">Edit</a></li>
													<li>
														<?php if($list['people_state'] >=40){?>
															<a href="<?php echo base_url();?>people/save/?resetwelcomecredentials=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'staff/list');?>&send_scope=staff&id_affiliate=<?php echo url_enc($_SESSION['affiliate']['id_affiliate']);?>">
																Reset Login & Send
															</a>
															<a href="<?php echo base_url();?>people/send_emergency_login_link_email?p=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'staff/list');?>&send_scope=advocate&id_affiliate=<?php echo url_enc($_SESSION['affiliate']['id_affiliate']);?>">
																	Send Backup Login
															</a>
														<?php }else{?>
														
															<a href="#" data-title= "Cannot Send Email" data-msg="An email cannot be sent to this advocate because the are not currently marked as Active or Serving.<br />Please change their status first before attemping to send them an email with login credentials." data-toggle="modal" data-target="#modalnotify" class="btn-modal-notify">
																Reset Login & Send
															</a>
														<?php }?>
													</li>
													<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="<?php echo $list['id_people'];?>">Send Message</a></li>
													<?php if($this->security_model->user_has_access(85)){ ?>
													<li><a href="#" data-href="<?php echo base_url();?>volunteers/delete?i=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'volunteers/list');?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
													<?php }?>
												</ul>
											</div>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['name_first'].' '.$this->website_model->display_format_people_name_last($list['name_last']).'</a>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['people_email'].'</a>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
											</td>
											<?php if( $can_show_cols['affiliate']){ echo '<td><div class="table-row-height" data-mh="affiliate-height">'.$this->affiliates_model->get_affiliate_name_by_id($list).'</div></td>'; }?>
										</tr>
									<?php }
									}else{
									?>
								<tr>
									<td colspan="20">No staff found. <a href="<?php echo base_url();?>staff/list?clear_limiters=1">Try broadening your search.</a></td>
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
				Are you sure you want to delete this staff?
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

        $('#datatable').dataTable({'order': [[ 0, "desc" ]], 'iDisplayLength': 50});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({'order': [[ 0, "desc" ]], 'iDisplayLength': 50});

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