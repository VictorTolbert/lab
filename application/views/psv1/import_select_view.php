<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>dashboard">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Import Data</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Import Data</h1>
			</div>
		</div><!--/.row-->
		
		<div class="col-sm-10 col-sm-offset-1">
			<div class="panel panel-container col-sm-6 col-xs-12 col-sm-offset-3">
				<div class="panel-heading">
					<h2 class="text-center">Select a data type to upload</h2>
				</div>
				<div class="panel-body">
					<div class="row top20"></div>
					<form class="form" action="<?php echo base_url();?>import/upload_data" method="post" enctype="multipart/form-data">
					<div class="row text-center">
						<select class="form-contol input-lg" name="data_type" required>
								<option value="">Select Data Type</option>
								<option value="staff">Staff</option>
								<option value="agencies">Agencies</option>
								<option value="churches">Churches</option>
								<option value="advocates">Advocates</option>
								<option value="families">Foster Families</option>
								<option value="communities">Care Communities</option>
								<option value="volunteers">Volunteers</option>
								
								
						</select>
					</div>
					<div class="row top40">
						<div class="col-sm-6 col-sm-offset-3 text-center">
							<input class="form-control" name="import_file" type="file" id="fileinput" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required/>
						</div>
					</div>
					<div class="row top40">
						<div class="col-sm-4 col-sm-offset-4 text-center">
							<button type="submit" class="form-control btn btn-primary">Import</button>
						</div>
					</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>