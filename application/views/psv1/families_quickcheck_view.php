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
				<li>
				<?php if(!empty($church['id_church'])){?>
					<a href="<?php echo base_url();?>churches/list">
						Churches
					</a>
				<?php }else{ ?>
					<a href="<?php echo base_url();?>families/list">
						Families
					</a>
				<?php }?>
				</li>
				<li class="active">Quick check</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quick Check - Find Awaiting Families</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>families/savebuild" method="post" id="buildform">
					<fieldset>
						<?php if(!empty($church['id_church'])){?>
							<legend>Awaiting Families Near <?php echo $this->churches_model->get_church_name($church);?></legend>
							<!--<div class="row top40"></div>
								<div class="col-sm-8 col-sm-offset-2 col-xs-12">
								<div class="form-group">
									<div class="input-group">
										<input type="input" id="address_search" name="address_search" class="input-lg  form-control"  value="<?php echo set_value('address_search', $this->website_model->get_full_address($church));?>" placeholder="Address of potential volunteer or church">
										<div class="input-group-btn">
											<button class="btn btn-quickcheck-search" data-url="<?php echo base_url().'families/ajaxgetquickcheckawaitingfamilies?distance=10';?>">
												<span class="glyphicon glyphicon-search"></span>
											</button>
										</div>
									</div>
									<span class="text-danger"><?php echo form_error('address_search'); ?></span>
									<input type="hidden" id="origin_geo_lat" name="origin_geo_lat" value="<?php echo $church['church_geo_lat'];?>">
									<input type="hidden" id="origin_geo_lng" name="origin_geo_lng" value="<?php echo $church['church_geo_lng'];?>">
									<input type="hidden" id="id_church_encoded" name="id_church_encoded" value="<?php echo $church['id_church_encoded'];?>">
								</div>
							</div> -->
						
						<?php }else{?>
							<legend>Find awaiting families near an address</legend>
							<div class="row top40"></div>
							<div class="col-sm-8 col-sm-offset-2 col-xs-12">
								<div class="form-group">
									<div class="input-group">
										<input type="input" id="address_search" name="address_search" class="input-lg  form-control"  value="<?php echo set_value('address_search', $item['address_search']);?>" placeholder="Address of potential volunteer or church">
										<div class="input-group-btn">
											<button class="btn btn-quickcheck-search" data-url="<?php echo base_url().'families/ajaxgetquickcheckawaitingfamilies?distance=10';?>">
												<span class="glyphicon glyphicon-search"></span>
											</button>
										</div>
									</div>
									<span class="text-danger"><?php echo form_error('address_search'); ?></span>
								</div>
							</div>
						<?php }?>
					</fieldset>
					<fieldset>
						<div class="row top40"></div>
						<div class="form-group">
							<div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" id="potential-list-ajax-target">
								
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Map of Volunteers</legend>
							<div class="col-sm-10 col-sm-offset-1">
								<div id="map" style="width:600px; height: 600px;"></div>
							</div>
							
					</fieldset>
					<div class="ln_solid top60"></div>
					<div id="inputs-wrapper">
						<input type="hidden" name="posted" value="family" />
						<input type="hidden" name="r" value="<?php echo url_enc(base_url().$url_scope.'/list');?>" />
					</div>
				</form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
	var map;
    var auto_search_run	= false;
	
    function instantiatebuttons(){
		$('.btn-add-to-team').off('click');
		$('.btn-remove-from-team').off('click');
		$('.potential-update-btn').off('click');
		$('.btn-volunteer-search').off('click');
		
		$('.btn-add-to-team').on('click', function(e){
			e.preventDefault();
			var idp			= $(this).data('pid');
			addpersontoteam(idp);
			$('#potential-row-'+idp).addClass('hide');
		});
		
		$('.btn-remove-from-team').on('click', function(e){
			e.preventDefault();
			var idp			= $(this).data('pid');
			$('#active-row-'+idp).remove();
			$('#potential-row-'+idp).removeClass('hide');
			$('#cbaction-'+idp).val('remove');
		});
		
		$('.potential-update-btn').click(function(e){
			e.preventDefault();
			var durl		= $(this).data('url');
			ajaxcheckpotential(durl);
		});
		
		$('.btn-quickcheck-search').click(function(e){
			e.preventDefault();
			var sval		= $('#address_search').val();
			var durl		= $(this).data('url')+'&address_search='+sval;	
			if(!!$('#origin_geo_lng').val()){
				durl = durl+'&origin_geo_lng='+$('#origin_geo_lng').val();
			}
			if(!!$('#origin_geo_lat').val()){
				durl = durl+'&origin_geo_lat='+$('#origin_geo_lat').val();
			}
			if(!!$('#id_church_encoded').val()){
				durl = durl+'&c='+$('#id_church_encoded').val();
			}
			
			ajaxcheckpotential(durl);
		});
		
   }
   
   function instantiatemultiselect(){
	   $('.input-multi-select').multiselect();
   }
   
   function ajaxcheckpotential(durl){
	  
		
		var theight = $('#potential-list-ajax-target').height() - 60;
		
		$('#potential-list-ajax-target').html('<div class="col-sm-12 text-center top60" height="'+theight+'" style="min-height:'+theight+'px;"><h2>Finding awaiting families</h2><p class="text-center"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><br />Please be patient, calculating could take up to 2 minutes to complete.</p></div><div class="row top60">&nbsp;</div>');
		
		 $('html,body').animate({scrollTop: $("#potential-list-ajax-target").offset().top}, 'fast');
		$.ajax({
			url: durl,
			dataType: "html",
			success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				setTimeout(function(){
					$('#potential-list-ajax-target').html(result.html);
					instantiatebuttons();
					console.log(result.geocoded);
					$('html,body').animate({scrollTop: $("#fieldset-potential-team-members").offset().top -60}, 'fast');
				}, 2000);				 			
			}
		});
   }
   
   
   
   $(document).ready(function() {
		instantiatemultiselect();
		instantiatebuttons();		
   });
   
   $(window).load(function () {
   	 <?php if(!empty($item['address_search'])){  ?>
			if(!auto_search_run){
				var durl = "<?php echo base_url();?>families/ajaxgetquickcheckawaitingfamilies?distance=10&address_search=<?php echo urlencode($item['address_search']);?>";	
				auto_search_run = true;
				ajaxcheckpotential(durl);
			}
	<?php }  ?>
	<?php if(!empty($church['id_church'])){  ?>
			if(!auto_search_run){
				var durl = "<?php echo base_url();?>families/ajaxgetquickcheckawaitingfamilies?distance=10&c=<?php echo $church['id_church_encoded'];?>&origin_geo_lat=<?php echo $church['church_geo_lat'];?>&origin_geo_lng=<?php echo $church['church_geo_lng'];?>&distance=<?php echo $distance;?>";	
				auto_search_run = true;
				ajaxcheckpotential(durl);
			}
	<?php }  ?>
		
   });
  
	
	
	
  function initMap() {
	map = new google.maps.Map(
		document.getElementById('map'),
		{center: new google.maps.LatLng(-33.91722, 151.23064), zoom: 16});

	var iconBase =
		'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

	var icons = {
	  parking: {
		icon: iconBase + 'parking_lot_maps.png'
	  },
	  library: {
		icon: iconBase + 'library_maps.png'
	  },
	  info: {
		icon: iconBase + 'info-i_maps.png'
	  }
	};

	var features = [
	  {
		position: new google.maps.LatLng(-33.91721, 151.22630),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91539, 151.22820),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91747, 151.22912),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91910, 151.22907),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91725, 151.23011),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91872, 151.23089),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91784, 151.23094),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91682, 151.23149),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91790, 151.23463),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91666, 151.23468),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.916988, 151.233640),
		type: 'info'
	  }, {
		position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
		type: 'parking'
	  }, {
		position: new google.maps.LatLng(-33.916365282092855, 151.22937399734496),
		type: 'parking'
	  }, {
		position: new google.maps.LatLng(-33.91665018901448, 151.2282474695587),
		type: 'parking'
	  }, {
		position: new google.maps.LatLng(-33.919543720969806, 151.23112279762267),
		type: 'parking'
	  }, {
		position: new google.maps.LatLng(-33.91608037421864, 151.23288232673644),
		type: 'parking'
	  }, {
		position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
		type: 'parking'
	  }, {
		position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
		type: 'parking'
	  }, {
		position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
		type: 'library'
	  }
	];

	// Create markers.
	for (var i = 0; i < features.length; i++) {
	  var marker = new google.maps.Marker({
		position: features[i].position,
		icon: icons[features[i].type].icon,
		map: map
	  });
	};
  }
	
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr4OlEeZhmEIjbJhXwuMHAf64l-yndLk0&callback=initMap"></script>
</body>
</html>