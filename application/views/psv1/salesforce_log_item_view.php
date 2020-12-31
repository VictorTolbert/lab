<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_unit		= 'Logs';
?>

<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active">Salesforce Sync Logs</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Read Log Entry</h1>
			</div>
		</div><!--/.row-->
			<div class="panel panel-container">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>salesforce/viewloglist">
					<?php echo $this->session->flashdata('msg'); ?>
						<div class="row top30">
						</div>
						<fieldset>
							<legend>Overview</legend>
							<ul class="list-unstyled">
								<li>Date Run: <?php echo date_offset('Y-m-d H:i:s', $item['date_sync']);?></li>
								<li>Status: <?php echo $this->salesforce_model->get_sync_result_from_log_result_status($item);?></li>
							</ul>
						</fieldset>
						<fieldset>
							<legend>Summary</legend>
								<div class="col-sm-10 col-sm-offset-1">
									<?php echo $item['log'];?>
								</div>
						</fieldset>
						<fieldset>
							<legend>Records Updated</legend>
								<div class="col-sm-10 col-sm-offset-1">
									<table class="table table-responsive table-striped">
										<thead>
											<tr>
												<th>Object Type</th>
												<th>Name</th>
												<th>Promise Serves Id</th>
												<th>Salesforce Object Id</th>
											</tr>
										</thead>
										<tbody>
										<?php 
										if(!empty($records_displayed)){
											foreach($records_displayed as $cur){
												echo $cur;
											}
										}?>
										</tbody>
									</table>
								</div>
						</fieldset>
						
				</form>
		</div>
	</div>

<?php echo $site_footer;?>



<!-- /top navigation -->