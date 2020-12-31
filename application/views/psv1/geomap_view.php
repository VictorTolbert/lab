<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_ids									= array();
$in_active									= array();
$in_potential								= array();
$past_served_possible_count 				= 0;
$name 										= '<small></small>';
$url_scope									= 'families';
$update_button_showed						= false;

?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active">Geolocation Map</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Geolocation Map</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>geomap" method="post" id="geomapform">
					<div id="geomap-wrapper-address-search" class="row top40">
						<div class="col-sm-8 col-sm-offset-2 col-xs-12">
							<div class="form-group">
								<div class="input-group">
									<input type="input" id="address_search" name="address_search" class="input-lg  form-control"  value="<?php echo set_value('address_search', $address_search);?>" placeholder="Address of potential volunteer or church">
									<div class="input-group-btn">
										<button class="btn btn-quickcheck-search" data-url="<?php echo base_url().'families/ajaxgetquickcheckawaitingfamilies?distance=10';?>">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</div>
								</div>
								<span class="text-danger"><?php echo form_error('address_search'); ?></span>
							</div>
						</div>
					</div>
					<div class="row top40">
						<fieldset>
							
							<div class="col-sm-10 col-sm-offset-1 text-center">
								<div class="row">
									<?php echo $this->places_model->make_geomap_icon_limiter();?>
								</div>
								<div id="ps_gmap" style="width:1000px; height: 600px; margin-left: auto; margin-right: auto;"></div>
							</div>
						</fieldset>
					</div>
					<div class="ln_solid top60"></div>
					<div id="inputs-wrapper">
					</div>
				</form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<div id="script_holder" style="display: none;">
	
</div>
<script>
	var map;
    var auto_search_run	= false;
	$(document).ready(function() {
		ps_geomap_run_update();
	});
	
	function ps_geomap_run_update(){
		$.ajax({
			type: "POST",
			url:  getBaseUrl()+'geomap/ajax_build_geomap?search=<?php echo urlencode($address_search);?>&map_center=address',
			data: $('#geomapform').serialize(),
			success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				$('#script_holder').html(result.html);
			}
		});
	}
</script>

</body>
</html>