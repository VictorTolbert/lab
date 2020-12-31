<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>dashboard">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Reports</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Reports</h1>
			</div>
		</div><!--/.row-->
		
		<div class="col-sm-10 col-sm-offset-1">
			<div class="panel panel-container col-sm-6 col-xs-12 col-sm-offset-3">
				<div class="panel-heading">
					<h2 class="text-center">Generate a Report</h2>
				</div>
				<div class="panel-body">
					<p>Report options that are grayed out are currently under development and will be available as they are completed.</p>
					<div class="row top20"></div>
					<form class="form" action="<?php echo base_url();?>reports/" method="post">
					<div class="row text-center">
						<select class="form-contol input-lg" name="report_name" id="report_name" required>
							<option value="">Select Report</option>
							
							
							<?php if($this->security_model->user_has_access(80)){ ?>
							 <optgroup label="KPI">
								<option value="kpi_report" data-outputhtml="1" data-hasmap="1">Key Performance Indicators</option>
							 </optgroup>
							<?php }?>
							
							
							<?php if($this->security_model->user_has_access(80)){ ?>
							 <optgroup label="MAP">
								<option value="map_report" data-outputhtml="1" data-hasmap="1">Church MAP Report</option>
							 </optgroup>
							<?php }?>
							
							
							 <?php if($this->security_model->user_has_access(80)){ ?>
								 <optgroup label="Churches">
										<option value="total_churches_by_state" data-outputcsv="1" data-outputhtml="1" data-hasmap="1">Total Churches By State</option>
								 <?php if($this->security_model->user_has_access(999)){ ?>
										<option value="total_churches_by_affiliate" disabled>Total Churches By Affiliate</option>
										<option value="total_churches_new" disabled>Total New Churches</option>
								 <?php }?>
										<option value="all_churches" data-outputcsv="1" data-outputhtml="0" data-hasmap="0">Export all Churches</option>
								</optgroup>
							
								<optgroup label="Advocates">
									<option value="total_advocates_by_state">Total Advocates By State</option>
									<option value="total_advocates_by_affiliate" disabled>Total Advocates By Affiliate</option>
									<option value="total_advocates_new" disabled >Total New Advocates</option>
									<option value="export_advocates_all" data-outputcsv="1">Export all Advocates</option>
								</optgroup>

								<optgroup label="Care Communities">
									<option value="total_communities_by_state" disabled>Total Care Communities By State</option>
									<option value="total_communities_by_affiliate" disabled>Total Care Communities By Affiliate</option>
									<option value="total_communities_by_advocate" disabled>Total Care Communities By Advocate</option>
									<option value="total_communities_by_church">Total Care Communities By Church</option>
									<option value="total_communities_by_status">Total Care Communities By Status</option>
									<option value="total_communities_new" disabled>Total New Care Communities</option>
									<option value="export_communities_all" data-outputcsv="1">Export all Care Communities</option>
								</optgroup>
								
								<optgroup label="Families">
									<option value="total_families_by_state" disabled>Total Foster Families By State</option>
									<option value="total_families_by_affiliate" disabled>Total Foster Families By Affiliate</option>
									<option value="total_families_by_advocate" disabled>Total Foster Families By Advocate</option>
									<option value="total_families_new" disabled>Total New Foster Families</option>
									<option value="export_families_all" data-outputcsv="1">Export all Families</option>
								</optgroup>
								<optgroup label="People">
									<option value="export_people_all" data-outputcsv="1" data-hasvolrole="1">Export all People</option>
									<option value="export_volunteers_serving" data-outputcsv="1" data-hasvolrole="1">Export Serving Volunteers</option>
									<option value="export_volunteers_active" data-outputcsv="1"  data-hasvolrole="1">Export Active Volunteers</option>
									
								</optgroup>
							<?php }?>
							<?php if($this->security_model->is_access_level_church_staff()  || $this->security_model->is_access_level_advocate()){ ?>
								<optgroup label="Families">
									<option value="export_families_all" data-outputcsv="1">Export all Families</option>
								</optgroup>
								<optgroup label="People">
									<option value="export_people_all" data-outputcsv="1" data-hasvolrole="1">Export all People</option>
									<option value="export_volunteers_active" data-outputcsv="1" data-hasvolrole="1">Export Active Volunteers</option>
								</optgroup>
							<?php }?>
						</select>
					</div>
					<div class="row top20 hide " id="wrapper-limit-roles-vols">
						<div class="col-sm-8 col-xs-12  col-sm-offset-2 text-center">
							<?php echo $this->website_model->input_menu_multiselect('id_permissions[]', set_value('id_permissions'), 'id_permissions', 'form-control input-lg', array('multiselect' => 1, 'required' => 0, 'view' => 'volunteer_roles', 'placeholder' => 'Everyone')); ?>
						</div>
					</div>
					<?php 
						if($this->security_model->user_has_access(95)){ 
							echo '<div class="row top40"><div class="col-sm-8 col-xs-12 col-sm-offset-2 text-center">'.$this->website_model->input_menu_affiliates('id_affiliate', $this->affiliates_model->get_active_affiliate_id(), 'id_affiliate', 'input-lg input-limiter center-block form-control', array('limiter_view' => 1, 'role_scope_limiters' => 'list_affiliates')).'</div></div>';
						}	
						?>
					
					<div class="row top20 hide">
						<div class="col-sm-6 col-xs-12  col-sm-offset-3 text-center">
							<select class="form-control input-lg select-date-limiter">
								<option value="">All Dates</option>
								<option value="wrapper-limit-qtr">Limit by quarter</option>
								<option value="wrapper-limit-range">Limit by date range</option>
							</select>
						</div>
					</div>
					<div class="row top20  select-date-limiters" id="wrapper-limit-qtr">
						<div class="col-sm-8 col-xs-12  col-sm-offset-2 text-center">
							<?= $this->reports_model->quarter_name_dropdown('qtr', $this->reports_model->get_current_quarter_code(), 'qtr', 'input-lg form-control', array('show_range_option' => 1, 'limiter_view' => 1));?>
						</div>
					</div>
					<div class="row top20 hide select-date-limiters" id="wrapper-limit-range">
						<div class="col-sm-5 text-center">
							<div class="input-prepend input-group">
								<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
								<?php 
										$cur_date_start = '';
										if(!empty($item['date_range_start'])){
											$cur_date_start = date('m/d/Y', $item['date_range_start']);
										}
								?>
								<input type="text" class="form-control date pick-date" name="date_range_start" id="date_range_start" value="<?php echo set_value('date_range_start', $cur_date_start);?>" placeholder="From" disabled>
							</div>
						</div>
						<div class="col-sm-1 text-center">
							<i class="fa fa-minus"></i>
						</div>
						<div class="col-sm-5 text-center">
							<div class="input-prepend input-group">
								<span class="add-on input-group-addon"><i class="glyphicon icon-clock fa fa-calendar-o"></i></span>
								<?php 
										$cur_date_end = '';
										if(!empty($item['date_range_end'])){
											$cur_date_end = date('m/d/Y', $item['date_range_end']);
										}
								?>
								<input type="text" class="form-control date pick-date block-center" name="date_range_end" id="date_range_end" value="<?php echo set_value('date_range_start', $cur_date_end);?>" placeholder="To" disabled>
							</div>
						</div>
					</div>
					<div class="row top20 hide" id="wrapper-limit-map">
						<div class="col-sm-8 col-xs-12  col-sm-offset-2 text-center">
							<select class="form-control input-lg select-map-limiter" name="map_data_mode">
								<option value="use-actual">Use actual numbers (No MAP data)</option>
								<option value="use-map">Use MAP data only</option>
								<option value="use-actual-map">Reconcile actual numbers with MAP data</option>
								<option value="use-map-actual">Reconcile MAP numbers with actual data</option>
							</select>
						</div>
					</div>
					
					<div class="row top40">
						<div class="col-sm-4 text-center">
							<button type="submit" value="html" name="output" class="btn btn-primary btn-block btn-submit btn-submit-html"><i class="fa fa-bar-chart-o fa-2x"></i> HTML</button>
						</div>
						<div class="col-sm-4  text-center">
							<button type="submit" value="csv" name="output"  class="btn btn-primary btn-block btn-submit btn-submit-csv"><i class="fa fa-table fa-2x"></i> CSV</button>
						</div>
						<div class="col-sm-4  text-center">
							<button type="submit" value="pdf" name="output"  class="btn btn-primary btn-block btn-submit btn-submit-pdf" disabled><i class="fa fa-file-pdf-o fa-2x"></i> PDF</button>
						</div>
					</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
/*
	$('.select-date-limiter').change(function(){
		var sel_val = $(this).val();
		$('.select-date-limiters').addClass('hide');
		$('.select-date-limiters .form-control').prop('disabled', true);
		if( sel_val != ''){
			$('#'+sel_val).removeClass('hide');
			$('#'+sel_val+' .form-control').prop('disabled', false);
		}
	});
*/	
	$('#qtr').change(function(){
		var sel_val = $(this).val();
		$('#wrapper-limit-range').addClass('hide');
		$('#wrapper-limit-range .form-control').prop('disabled', true);
		if( sel_val == 'date_range'){
			$('#wrapper-limit-range').removeClass('hide');
			$('#wrapper-limit-range .form-control').prop('disabled', false);
		}
	});
	
	$('#report_name').change(function(){
		check_report_output_button_otptions();
		if($('#report_name').find(':selected').data('hasvolrole') == 1){
			$('#wrapper-limit-roles-vols').removeClass('hide');
			$('#wrapper-limit-roles-vols').prop('disabled', hide);
		}else{
			$('#wrapper-limit-roles-vols').addClass('hide');
			$('#wrapper-limit-roles-vols').prop('disabled', true);
		}
	});
		
	function check_report_output_button_otptions(){
		reset_report_output_buttons();
		if($('#report_name').find(':selected').data('outputhtml') == 1){
			change_report_output_button_status('html', 'has');
		}
		if($('#report_name').find(':selected').data('outputcsv') == 1){
			change_report_output_button_status('csv', 'has');
		}
		if($('#report_name').find(':selected').data('outputpdf') == 1){
			change_report_output_button_status('pdf', 'has');
		}
		if($('#report_name').find(':selected').data('hasmap') == 1){
			$('#wrapper-limit-map').removeClass('hide');
			$('#wrapper-limit-map .form-control').prop('disabled', false);
		}
	}
	
	function change_report_output_button_status(btn, mode){
		if(mode == 'has'){
			$('.btn-submit-'+btn).addClass('btn-primary');
			$('.btn-submit-'+btn).removeClass('btn-default');
			$('.btn-submit-'+btn).prop('disabled', false);
		}else{
			$('.btn-submit').addClass('btn-default');
			$('.btn-submit').removeClass('btn-primary');
			$('.btn-submit-'+btn).prop('disabled', true);
		}
		return;
	}
	
	
	
	function reset_report_output_buttons(){
		$('.btn-submit').addClass('btn-default');
		$('.btn-submit').removeClass('btn-primary');
		$('.btn-submit').prop('disabled', true);
		$('#wrapper-limit-map').addClass('hide');
		$('#wrapper-limit-map .form-control').prop('disabled', true);
		return false;
	}
	
	$(document).ready( function() {
		check_report_output_button_otptions();
	});
</script>
<style>
.ms-options-wrap > .ms-options > ul label{
    text-align: left !important;
}
</style>
</body>
</html>