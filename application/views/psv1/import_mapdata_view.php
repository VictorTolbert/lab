<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>dashboard">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Map Data</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Map Data</h1>
			</div>
		</div><!--/.row-->
		
		<div class="col-sm-12">
			<div class="panel panel-container col-sm-12 col-xs-12">
				<div class="panel-heading">
					<h2 class="text-center">Map Data Fields for <?php echo ucfirst($_SESSION['import_data']['data_type']);?> Import</h2>
				</div>
				<div class="panel-body">
					<div class="row top20"></div>
					<p class="text-center">Below you will see a summary of the CSV file you uploaded. Please map your data columns to the fields by using the selection menu at the top of each column.</p>
					<form class="form" action="<?php echo base_url();?>import/process_data" method="post" >
						<div class="table-containter"  style="overflow-x: scroll; overflow-y: hidden;">
						<table class="table table-responsive table-striped">
							<thead>
								
								<?php 
									echo '<tr>';
									for($i=0; $i < $count_cols; $i++){
										echo '<th>'.$this->website_model->get_import_map_data_select_menu(array('col_count' => $i)).'</th>';
									}
									echo '</tr>';
									for($i=0; $i < 1; $i++){
										echo '<tr>';
										foreach($csv[$i] as $cur){
											echo '<th>'.$cur.'</th>';
										}
										echo '</tr>';
									}
									
								?>
							</thead>
							<tbody>
								<?php 
									for($i=1; $i < 4; $i++){
										echo '<tr>';
										foreach($csv[$i] as $cur){
											echo '<td>'.$cur.'</td>';
										}
										echo '</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
										
					<div class="row top40">
						<div class="col-sm-4 col-sm-offset-4">
							<label>Skip first row?</label>
							<select class="form-control input-lg" name="skip_first_row">
								<option value="1">Yes</option>
								<option value="">No</option>
							</select>
						</div>
					</div>
					<div class="row top20">	
						<div class="col-sm-4 col-sm-offset-4">
							<label>Import Mode</label>
							<select class="form-control input-lg" name="import_new_only">
								<option value="">Import all records, update existing records</option>
								<option value="1">Import only new records, skip existing</option>
							</select>
						</div>
					</div>
					<div class="row top20">	
						<div class="col-sm-4 col-sm-offset-4">
							<label>Overwite Status</label>
							<select class="form-control input-lg" name="import_overwrite_status">
								<option value="">No, use status from CSV</option>
								<option value="exist_then_csv">Use existing status, set others to CSV</option>
								<option value="exist">Use existing status, unset others</option>
								<option value="exist_then_active">Use existing status, set others to Active</option>
								<option value="exist_then_prospect">Use existing status, set others to Prospect</option>
								<option value="10">Set all records to Prospect</option>
								<?php if($_SESSION['import_data']['data_type'] == 'volunteers'){?>
									<option value="30">Set all records to Prepared and Waiting</option>
								<?php }?>
								<option value="40">Set all records to Active</option>
							</select>
						</div>
					</div>
					<?php if($this->security_model->user_has_access(95)){ ?>
					<div class="row top20">
						<div class="col-sm-4 col-sm-offset-4 ">
						<label>Affiliate</label>
						<?php echo  $this->website_model->input_menu_affiliates('id_affiliate', $_SESSION['view_limiter']['id_affiliate'], 'id_affiliate', 'form-control input-lg', array('required' => 1)); ?>
						</div>
					</div>
					<?php }?>
					<div class="row top20">	
						<div class="col-sm-4 col-sm-offset-4">
							<label>Note Author</label>
							<select class="form-control input-lg" name="note_author">
								<option value="self">Set user as author of note</option>
								<option value="importer">Set importer as author of note</option>
							</select>
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