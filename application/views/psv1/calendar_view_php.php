<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php 
 
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
					<a href="<?php echo base_url();?>calendar/viewcalendar">
						Calendar 
					</a>
				</li>
				<li class="active">List</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Calendar <small><small><a href="<?php echo base_url();?>calendar/edit/?i=0">[Add New]</a></small></small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>churches/list">
					<?php echo $this->session->flashdata('msg'); ?>
					
				<div class="row">
					<div class="col-sm-3">
						<h3 class="text-center">Calendar Items</h3>
						<hr />
						<div class="col-sm-12 col-xs-4 msg-mailbox selected clickable-row" data-href="http://ps.localhost/messages/viewlist/inbox">
							<a href="http://ps.localhost/messages/viewlist/inbox">All Items</a>
						</div>
						<div class="col-sm-12 col-xs-4 msg-mailbox clickable-row" data-href="http://ps.localhost/messages/viewlist/inbox">
							<a href="http://ps.localhost/messages/viewlist/inbox">Meals</a>
						</div>
						<div class="col-sm-12 col-xs-4 msg-mailbox clickable-row" data-href="http://ps.localhost/messages/viewlist/inbox">
							<a href="http://ps.localhost/messages/viewlist/inbox">Needs</a>
						</div>
						<div class="col-sm-12 col-xs-4 msg-mailbox clickable-row" data-href="http://ps.localhost/messages/viewlist/inbox">
							<a href="http://ps.localhost/messages/viewlist/inbox">Events</a>
						</div>							
					</div>
					<div class="col-sm-9">
						<h3 class="text-center">Calendar</h3>
						<hr />
						<?php 
							$vars		= array();
							if(!empty($upcoming['data'])){
								foreach($upcoming['data'] as $cur){
									$day_id						= date_offset('j',$cur['event_date_start']);
									$vars['events'][$day_id]	= $day_id;
								}
							}
							echo $this->website_model->build_calendar($vars);
						?>
					</div>
				</div>
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
				Are you sure you want to delete this event?
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