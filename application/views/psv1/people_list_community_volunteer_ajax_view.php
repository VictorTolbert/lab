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

$headers_added	= array();
if(!empty($_SESSION['view_limiter']['id_role']) && $_SESSION['view_limiter']['id_role'] == 310){
	$headers_added[] = 'Community';
}
$headers_added	= array();

//print_array($lists);
//exit();

if(!empty($sub_header)){
	$sub_header = '- '.$sub_header.' ';
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
				<li class="active"><?php echo  'List Volunteers';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Volunteers<?php echo ' '.$sub_header;?>
				<?php if($this->security_model->user_has_access(60)){ ?>
					<small><small><a href="<?php echo base_url();?>volunteer/edit/?i=0">Add New</a></small></small>
					<div class="pull-right">
						<a href="<?php echo base_url();?>volunteer-quick-check" class="btn btn-default"><i class="fa fa-search"></i> Quick Check</a>
						<a href="<?php echo  base_url().'volunteer/edit/0';?>?view=cardview" class="btn btn-default"><i class="fa fa-paperclip"></i> Quick Entry</a>
						<a href="<?php echo base_url();?>volunteer/edit/0" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
					</div>
				<?php }?>
				</h1>
			</div>
		</div><!--/.row-->
			<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>volunteer/list">
				<?php if($this->security_model->user_has_access(36)){ ?>
					<div class="row top10">
						<?php echo $this->website_model->make_list_limiters(array('view' => 'community_volunteers', 'custom_view' => $custom_view));?>
					</div>
				<?php }?>
					<div class="row top10">
						<?php echo $this->session->flashdata('msg_people_volunteer_list'); ?>
					</div>
					<table id="datatable-responsive" class="table table-striped table-bordered table-responsive dt-responsive nowrap <?php echo $this->website_model->get_table_view_consolidation_class();?>" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th class="text-center" width="5%">Actions</th>
									<th width="5%">First Name</th>
									<th width="8%">Last Name</th>
									<th width="5%">Status</th>
									<th width="15%">City</th>
									<th width="5%">Zip</th>
									<th width="10%">Church</th>
									<?php foreach($headers_added as $cur_header){ echo '<th>'.$cur_header.'</th>';}?>
								<!--<th>Email</th>-->
									<?php if($dev){echo '<th>DEV</th>';}?>
								</tr>
							</thead>
						<tbody>
						</tbody>
					</table>
				</form>
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
				<p>Are you sure you want to delete this volunteer?</p>
				<p><strong>This will remove the volunteer from any teams they are currently serving on!</strong></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>

<?php 

unset($lists);
unset($list);
unset($item);
unset($collect_emails);
echo $site_footer;
?>

<!-- Datatables -->
<script>
	var btns_added = 0;
      $(document).ready(function() {
       

        $('#datatable-responsive').DataTable({	'stateSave': true, 
												'ajax': "<?= base_url();?>people/ajax_list_community_volunteer<?= $url_params;?>",
												'deferRender': true,
												'processing': true,
												'buttons': [ 'csvHtml5'],
												'dom': 'Bfrtip',
												'oLanguage': {
													'sEmptyTable': "<h3>Sorry, there are no matching results!</h3>"
												},
												'language': {
													'loadingRecords': '&nbsp;',
													'processing': '<i class="fas fa-refresh fa-spin fa-3x"></i><br /><p class="text-center top10">Loading...</p>',
													'emptyTable': "<h3>Sorry, there are no matching results!</h3>"
												},
												 'columnDefs': [
													{ 'searchable': false, 'targets': 0 }
												],
												'columns': [
															{ "data": "avatar", "width": "5%" },
															{ "data": "first_name", "width": "15%" },
															{ "data": "last_name", "width": "15%"  },
															{ "data": "status" },
															{ "data": "city" },
															{ "data": "zip" },
															{ "data": "churches" }
														],
												'order': [[ 2, "asc" ]], 
												'iDisplayLength': 50,
												'fnDrawCallback': function (oSettings) {
													$('.dataTables_filter').each(function () {
														if(btns_added == 0){
															btns_added = 1;
															$(this).prepend('<div class="btn-table-consolidate-wrapper"><button class="btn btn-default btn-sm btn-table-view-consolidated" type="button"><i class="fa fa-window-minimize"></i></button> <button class="btn btn-default btn-sm btn-table-view-unconsolidated" type="button"><i class="fa fa-window-maximize"></i></button> <button class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="datatable-responsive" type="button"><i class="fas fa-file-csv"></i></button></div>');
															instantiate_table_consolidate_buttons();
															
														}
													});
													instantiate_btn_compose_modal();
													instantiate_add_assignment_buttons();
												}   
											});
		
		/*$('#datatable-responsive').DataTable({ dom: "Bfrtip",	'stateSave': true, 'order': [[ 2, "asc" ]], 'iDisplayLength': 50, buttons: [{extend: "copy", className: "btn-sm"},{extend: "csv", className: "btn-sm"},{extend: "excel",className: "btn-sm"},{extend: "pdfHtml5",className: "btn-sm"},{extend: "print",className: "btn-sm" },]	});*/

        $('#datatable-scroller').DataTable({
         
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        
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