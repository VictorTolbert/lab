<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$collect_emails	= array();
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$this->website_model->display_format_people_name_last($item['name_last']);
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
				<li class="active"><?php echo  'List Advocates';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Advocates <small><small><a href="<?php echo base_url();?>advocates/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>advocate/quickadd" class="btn btn-default"><i class="fa fa-plus"></i> Quick Add</a>
						<a href="<?php echo base_url();?>advocates/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				</h1>
			</div>
		</div><!--/.row-->
		<div class="panel panel-container">
			<div class="row">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>advocates/list">
				<?php echo $this->session->flashdata('msg'); ?>
				<?php if($this->security_model->user_has_access(60)){ ?>
					<div class="row top10">
						<?php echo $this->website_model->make_list_limiters(array('view' => 'advocates'));?>
					</div>
				<?php }?>
					<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap <?php echo $this->website_model->get_table_view_consolidation_class();?>" cellspacing="0">
							<thead>
								<tr>
									<th class="text-center">Actions</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Status</th>
									<th>Church</th>
									<th>Has Login</th>
									<!--<th>Email</th>-->
								</tr>
							</thead>
						  <tbody>
							  <?php if(isset($lists)){
										foreach($lists AS $list){
											 $cur_link 						= base_url().'advocate/edit/'.$list['id_people_encoded'];
											 $cur_churches					= array();
											 $list['scope']					= 'advocate';
											 $status						= $this->people_model->get_person_status_from_state($list);
											 	
											
											if(empty($list['people_email'])){
												$list['people_email'] = null;
											}
											
											if(!empty($list['people_email_primary'])){
												$collect_emails[] = $list['people_email_primary'];
											}
											?>
										<tr>
											<td class="text-center">
												<?php $this->people_model->display_people_avatar($list);?>
												<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['id_people'].'</p>'; }?>
												<div class="dropdown" style="float:none;">
													<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
														<span class="caret"></span> Actions
													</button>
													<ul class="dropdown-menu">
														<li><a href="<?php echo $cur_link;?>">Edit</a></li>
														<li>
															<?php if($list['people_state'] >=40){
																	 $status = 'Active';
																?>
																<a href="<?php echo base_url();?>people/save/?resetwelcomecredentials=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'advocate/list');?>&send_scope=advocate&id_affiliate=<?php echo url_enc($_SESSION['affiliate']['id_affiliate']);?>">
																	Reset Login & Send
																</a>
																<a href="<?php echo base_url();?>people/send_emergency_login_link_email?p=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'advocate/list');?>&send_scope=advocate&id_affiliate=<?php echo url_enc($_SESSION['affiliate']['id_affiliate']);?>">
																	Send Backup Login
																</a>
															<?php }else{?>
															
																<a href="#" data-title= "Cannot Send Email" data-msg="An email cannot be sent to this advocate because the are not currently marked as Active or Serving.<br />Please change their status first before attemping to send them an email with login credentials." data-toggle="modal" data-target="#modalnotify" class="btn-modal-notify">
																	Reset Login & Send
																</a>
															<?php }?>
														</li>
														<li>
															<a class="btn-modal-with-ajax" href="#modalnotify" data-toggle="modal" data-modalheader="Care Communities Assigned to <?php echo $list['name_formatted'];?>" data-ajaxurl="<?= base_url();?>communities/ajax_view_advocate_communities?p=<?php echo url_enc($list['id_people']);?>">Supervising Communities</a>
														</li>
														<li>
															<a href="#" data-href="<?php echo base_url();?>advocate/delete?i=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'advocate/list');?>" data-toggle="modal" data-target="#confirm-delete">
																Delete
															</a>
														</li>
													</ul>
												</div>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['name_first'].'</a>';?>
											</td>
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_people_name_last($list['name_last']).'</a>';?>
											</td>
																					
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
											</td>
											
											<td>
												<div class="table-row-height" data-mh="church-height">
												<?php 
												/*
													foreach($list['assigned'] as $cur_assign){
														if($cur_assign['role_scope'] == $role_scope){
															echo '<a href="'.$cur_link.'">'.$this->churches_model->get_church_name($cur_assign).'</a><br />';
														}
													}
													*/
													if(!empty($list['id_home_church']) && !in_array($list['id_home_church'], $cur_churches)){
														$cur_church_id			= $list['id_home_church'];
														if(!empty($churches_associated[$cur_church_id])){
															echo '<a href="'.$cur_link.'">'.$this->churches_model->get_church_name($churches_associated[$cur_church_id]).'</a><br />';
														}
														$cur_churches[] 	= $list['id_home_church'];
													}
													/*
													if(!empty($list['id_churches_assigned'])){
														$church_ids			= explode(',',$list['id_churches_assigned']);
														foreach($church_ids as $cur_church_id){
															if(!in_array($cur_church_id, $cur_churches) && !empty($churches_associated[$cur_church_id])){
																echo '<a href="'.$cur_link.'">'.$this->churches_model->get_church_name($churches_associated[$cur_church_id]).'</a><br />';
																$cur_churches[] 	= $cur_church_id;
															}
														}
													}
													*/
													?>
												</div>
											</td>

										<td class="text-center">
											<?php 
												if(!empty($list['password'])){ 
													echo '<i class="fa fa-check fa-2x"></i>';
													echo '<br /><small>Last login: ';
													if(empty($list['date_last_login'])){
														echo 'never';
													}else{
														echo date_offset('m/d/y g:iA', $list['date_last_login']);
													}
													echo '</small>';
												}else{
													if($list['people_state'] >=40){?>
														<a class="btn btn-default" href="<?php echo base_url();?>people/save/?resetwelcomecredentials=<?php echo $list['id_people_encoded'];?>&r=<?php echo url_enc(base_url().'advocate/list');?>&send_scope=advocate&id_affiliate=<?php echo url_enc($_SESSION['affiliate']['id_affiliate']);?>">
															<i class="fa fa-envelope"></i> Send Login Info
														</a>
												
											<?php 
													}
												}
											?>
											</td>
											<!--
											<td>
												<?php echo '<a href="'.$cur_link.'">'.$list['people_email'].'</a>';?>
											</td> -->
										</tr>
									<?php }
									}else{
									?>
								<tr>
									<td colspan="20">No advocates found. <a href="<?php echo base_url();?>advocates/list?clear_limiters=1">Try broadening your search.</a></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</form>
			</div>
		</div>
		<?php if(!empty($_GET['compile_emails']) || !empty($compile_emails)){?>
				<div class="row top40"></div>
				<div class="col-sm-8 col-sm-offset-2 well">
					<h3>Compiled Email address</h3>
				<?php 
					$collect_emails = array_unique($collect_emails);
					$collect_emails	= implode('; ',$collect_emails);
					echo $collect_emails;?>
					</div>
				<div class="row top40"></div>
			<?php }?>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this advocate?
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
		var btns_added = 0;
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

        $('#datatable').dataTable({'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 50});
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({	'stateSave': true, 
												'order': [[ 2, "asc" ]], 
												'iDisplayLength': 50,
												'fnDrawCallback': function (oSettings) {
													$('.dataTables_filter').each(function () {
														if(btns_added == 0){
															btns_added = 1;
															$(this).prepend('<div class="btn-table-consolidate-wrapper"><button class="btn btn-default btn-sm btn-table-view-consolidated" type="button"><i class="fa fa-window-minimize"></i></button> <button class="btn btn-default btn-sm btn-table-view-unconsolidated" type="button"><i class="fa fa-window-maximize"></i></button></div>');
															instantiate_table_consolidate_buttons();
														}
													});
												}   
											});

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
<style>
.toolbar {
    float:right;
}</style>
<!-- /top navigation -->