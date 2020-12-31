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
				<li class="active">No Access</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">No Access</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container" style="min-height: 600px;">
			<div class="col-md-8 col-md-offset-2 well" style="min-height: 400px;">
				
				<h1 class="text-center"><?php echo $content['header'];?></h1>
				<p class="text-center"><i class="fa fa-exclamation-triangle fa-4x"></i></p>
				<h3 class="text-center"><?php echo $content['subhead'];?></h3>
				<p class="text-center"><?php echo $content['msg'];?></p>
				<?php if(!empty($redirect)){
					echo '<p class="text-center top40"><a href="'.url_dec($redirect).'" class="btn btn-primary">Return to what I was doing</a></p>';
				}
				?>
				
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