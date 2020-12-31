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
				<h1 class="page-header">Switch Affiliates</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<?php echo $this->session->flashdata('msg'); ?>
	
				<div class="col-sm-8 col-sm-offset-2 well">
					<h2>Select an affiliate</h2>
					<form class="form-horizontal form-label-left" action="<?php echo base_url();?>affiliates/switchaffiliate" method="post">
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<?php echo $this->website_model->input_menu_affiliates('force_id_affiliate', $_SESSION['affiliate']['id_affiliate'], 'force_id_affiliate', 'input-sm input-limiter center-block', array('limiter_view' => 1, 'role_scope_limiters' => 'list_affiliates')) ;?>
						</div>
					</div>
					<div class="form-group text-center top40">
						<button type="submit" class="btn btn-primary">Switch</button>
					</div>
					</form>
				</div>
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