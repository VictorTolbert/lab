<?php echo $site_header; ?>

<?php
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$item['name_last'];
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
				<li class="active"><?php echo  'List Communities';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Care Communities 
					<?php if($this->security_model->user_has_access(60)){ ?>
						<small><small><a href="<?php echo base_url();?>communities/edit/?i=0">Add New</a></small></small>
						<div class="pull-right">
							<a href="<?php echo base_url();?>volunteer-quick-check" class="btn btn-default"><i class="fa fa-search"></i> Quick Check</a>
							<a href="<?php echo base_url();?>communities/edit/?i=0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
						</div>
					<?php }?>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>communities/list">
				<?php echo $this->session->flashdata('msg'); ?>
				<?php if($this->security_model->user_has_access(30)){ ?>
					<div class="row top10">
						<?php echo $this->website_model->make_list_limiters(array('view' => 'communities'));?>
					</div>
				<?php }?>
					<table id="datatable-responsive" class="table table-striped table-bordered  table-responsive dt-responsive nowrap <?php echo $this->website_model->get_table_view_consolidation_class();?>" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th class="text-center">Actions</th>
								<th>Family</th>
								<th>Iteration</th>
								<th>Status</th>
								<th>Serving Church</th>
								
								<?php if($dev){echo '<th>DEV</th>';}?>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
								foreach($lists AS $list){
									 $cur_link 							= base_url().'community/edit/'.$list['id_community_encoded'];
									 $status							= $this->communities_model->get_community_status_from_state($list);
									// $cur_com_arr 					= explode(' ',$list['community_name']);
									 $cur_id							= $list['id_community'];
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
									 
									 if(!empty($list['team_count'])){
										$cur_build_verb = 'Edit / Build Team';
									 }else{
										 $cur_build_verb = 'Build Team';
									 }
									 
									 
									?>
									<tr>
										<td class="text-center">
											<?php echo '<span style="visibility: hidden;">'.str_pad($list['id_promise'], 8, '0', STR_PAD_LEFT).'</span>';?>
												<?php $this->communities_model->display_community_avatar($list);?>
												<?php if($this->security_model->user_has_access(99)){ echo '<p class="text-center">'. $list['id_community'].'</p>'; }?>
												<?php //echo '<a href="'.$cur_link.'">'.$list['id_promise'].'</a>';?>
												<?php if($this->security_model->user_has_access(100)){ echo '<p class="text-center">'. $list['id_community'].'</p>'; }?>
											<div class="dropdown" style="float:none;">
												<button class="btn btn-default dropdown-toggle btn-block" role="button" data-toggle="dropdown">
													<span class="caret"></span> Actions
												</button>
													<ul class="dropdown-menu">
														<li><a href="<?php echo $cur_link;?>">Edit Info</a></li>
														<?php if( $this->security_model->user_has_access(60)){?>
															<li><a href="<?php echo base_url();?>communities/build/<?php echo $list['id_community_encoded'];?>"><?= $cur_build_verb;?></a></li>
														<?php }?>
														<li><a href="<?php echo base_url();?>communities/one-pager/<?php echo $list['id_community_encoded'];?>" >One Pager</a></li>
														<?php if(1==1){?>
															<li><a href="<?php echo base_url();?>communities/redirect_community_vols_to_volunteers/?c=<?= $list['id_community_encoded'];?>">View Volunteers</a></li>
															<li><a href="<?php echo base_url();?>communities/volunteer_map/<?= $list['id_community_encoded'];?>">Volunteer Map</a></li>
														<?php }?>
														<?php if(!empty($list['community_state']) && $list['community_state'] != 24 && $this->security_model->user_has_access(60)){?>
														<li><a href="<?php echo base_url();?>communities/close?i=<?php echo $list['id_community_encoded'];?>" >Close</a></li>
														<?php }?>
														<li><a href="#bannerformmodal" data-toggle="modal" data-target="#composemessagemodal" class="btn-msg-trigger" data-rids="community_volunteers_<?php echo $list['id_community_encoded'];?>" data-msgjson="">Send A Team Message</a></li>
														<li><a href="#" data-toggle="modal" data-target="#modalnotify" class="btn-modal-notify" data-ajaxurl="<?php echo base_url();?>communities/ajaxcompileemailaddresses?id=<?php echo url_enc($list['id_community']);?>" data-title="<?php echo $this->website_model->display_format_community_name($list);?> - Email Addresses" >Compile Emails</a></li>
														
														<?php if($this->security_model->user_has_access(60) && !empty($this->website_model->get_compiled_address($list))){ ?>
															<li><a href="<?php echo base_url();?>volunteer-quick-check?address=<?= urlencode($this->website_model->get_compiled_address($list));?>">View Potential Volunteers</a></li>
														<?php }?>
														<li><a href="<?php echo base_url();?>communities/manage_meal_events/<?= $list['id_community_encoded'];?>">Manage Meal Events</a></li>
														<?php if( $this->security_model->user_has_access(60)){?>
															<li><a href="#" data-href="<?php echo base_url();?>community/delete?i=<?php echo $list['id_community_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>
														<?php }?>
													</ul>
											</div>
										</td>
										<td style="vertical-align: middle;">
											<?php echo '<a href="'.$cur_link.'">'.$this->website_model->display_format_community_name($list).'</a>';?>
										</td>
										<td style="vertical-align: middle;">
											<?php if(!empty($list['iteration'])){ echo '<a href="'.$cur_link.'">'.ordinal($list['iteration']).'</a>';}?>
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
										
										<?php if($dev){echo '<td>PS_ID:'.$list['id_community'].'<br /> SF_ID: <a href="'. $cur_sf_url.'" target="_blank">'.$list['id_salesforce'].'</a><br />Assign Church:'.$item['assign_id_church'].'<br />Assign Family'.$item['assign_id_family'].'</td>';}?>
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
	var btns_added = 0;
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

        $('#datatable-responsive').DataTable({	'stateSave': true, 
												'order': [[ 1, "asc" ]], 
												'iDisplayLength': 100,
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