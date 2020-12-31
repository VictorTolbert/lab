<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$people_ids								= array();
$in_active									= array();
$in_potential								= array();
$past_served_possible_count 	= 0;
$name = '<small></small>';

$update_button_showed		= false;

if(!empty($_SESSION['affiliate']['default_search_radius'])){
	$distance = $_SESSION['affiliate']['default_search_radius'];
}else{
	$distance = 10;
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
				<li>
					<a href="<?php echo base_url();?>communities/list">
						Communities
					</a>
				</li>
				<li class="active">Quick check</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quick Check - Find Potential Volunteers</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>communities/savebuild" method="post" id="buildform">
					<fieldset>
						<legend>Find volunteers by address</legend>
						<div class="row top40"></div>
						<div class="col-sm-8 col-sm-offset-2 col-xs-12">
							<div class="form-group">
								<div class="input-group">
									<input type="input" id="address_search" name="address_search" class="input-lg  form-control"  value="<?php echo set_value('address_search', $item['address_search']);?>" placeholder="Address of potential foster family">
									<div class="input-group-btn">
										<button class="btn btn-quickcheck-search" data-url="<?php echo base_url().'communities/ajaxgetquickcheckteammembers?distance='.$distance;?>">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</div>
								</div>
								<span class="text-danger"><?php echo form_error('address_search'); ?></span>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="row top40"></div>
						<div class="form-group">
							<div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" id="potential-list-ajax-target">
								
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Map</legend>
							<div class="col-sm-10 col-sm-offset-1">
								<div id="map" style="min-width: 500px; min-height: 500px; width: 100%; height: 100%;" class="center-block"></div>
							</div>
							
					</fieldset>
				<div class="ln_solid top60"></div>
			  <div id="inputs-wrapper">
			  <input type="hidden" name="posted" value="community" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().$url_scope.'/list');?>" />
			  <?php 
					$i = 0;
					$arr_users_added	= array();
					if(!empty($people) && count($people) > 0){
						foreach($people as $cur_assign){
							if(!in_array($cur_assign['id_people'], $arr_users_added)){
								if(!empty($cur_assign['id_assignment'])){ 
									$cur_id_assign = $cur_assign['id_assignment']; 
								}else{
									$cur_id_assign = '';
								}
								$arr_users_added[] 	= $cur_assign['id_people'];
								//echo '<input type="hidden" id="cbaction-'.$cur_assign['id_people'].'" name="cbaction_'.$cur_assign['id_people'].'" value="">';
								//echo '<input type="hidden" class="id-assignment" name="id_assignment_'.$i.'" id="id_assignment_'.$i.'" value="'.$cur_id_assign.'">';	
								//echo '<input type="hidden" name="id_people_encoded_'.$i.'" value="'.$cur_assign['id_people_encoded'].'">';		
								$i++;
							}
						}
					}
					if(!empty($item['team_members']) && count($item['team_members']) > 0){
						foreach($item['team_members'] as $cur_assign){
							if(!in_array($cur_assign['id_people'], $arr_users_added)){
								
								if(!empty($cur_assign['id_assignment'])){ 
									$cur_id_assign = $cur_assign['id_assignment']; 
								}else{
									$cur_id_assign = '';
								}
								$arr_users_added[] 	= $cur_assign['id_people'];
								echo '<input type="hidden" id="cbaction-'.$cur_assign['id_people'].'" name="cbaction_'.$cur_assign['id_people'].'" value="update">';
								//echo '<input type="hidden" class="id-assignment" name="id_assignment_'.$i.'" id="id_assignment_'.$i.'" value="'.$cur_id_assign.'">';			
								//echo '<input type="hidden" name="id_people_encoded_'.$i.'" value="'.$cur_assign['id_people_encoded'].'">';		
								echo '<input type="hidden" name="people_ids[]" value="'.$cur_assign['id_people_encoded'].'">';		
								$i++;	
							}
						}
					}	
					
			  ?>
			   <input type="hidden" name="count_people" id="count_people" value="<?php echo $i;?>">
			   </div>
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
    var auto_search_run	= false;
	var map;
	
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
			var durl		= $(this).data('url')+'&address_search='+sval+'&id_community_src=<?= $id_community_src;?>';	
			
			ajaxcheckpotential(durl);
		});
		
   }
   
   function instantiatemultiselect(){
	   $('.input-multi-select').multiselect();
   }
   
   function ajaxcheckpotential(durl){
	  
		
		var theight = $('#potential-list-ajax-target').height() - 60;
		
		$('#potential-list-ajax-target').html('<div class="col-sm-12 text-center top60" height="'+theight+'" style="min-height:'+theight+'px;"><h2>Finding potential team members</h2><p class="text-center"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><br />Please be patient, calculating could take up to 2 minutes to complete.</p></div><div class="row top60">&nbsp;</div>');
		
		 $('html,body').animate({scrollTop: $("#potential-list-ajax-target").offset().top}, 'fast');
		$.ajax({
			url: durl,
			dataType: "html",
			success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				//console.log(result.geocoded['communities'][0]);
				if(!!result.geocoded['communities'][0]['lat'] && !!result.geocoded['communities'][0]['lng']){
					map.setCenter({lat: result.geocoded['communities'][0]['lat'], lng: result.geocoded['communities'][0]['lng']});
					add_map_marker(result.geocoded['communities'][0]);
				}
				if(!!result.geocoded['volunteers'][0]['lat']){
					result.geocoded['volunteers'].forEach(add_map_marker);
					
				}
				setTimeout(function(){
					$('#potential-list-ajax-target').html(result.html);
					instantiatebuttons();
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
				var durl = "<?php echo base_url();?>communities/ajaxgetquickcheckteammembers?distance=10&address_search=<?php echo urlencode($item['address_search']);?>&id_community_src=<?= $id_community_src;?>";	
				auto_search_run = true;
				ajaxcheckpotential(durl);
				
			}
	<?php }  ?>
		
   });
   
   
   function add_map_marker(vals) {
		var marker_title = '';
		if(!!vals['title']){
		   marker_title = vals['title'];
		}
		var icon_img = getBaseUrl()+'/img/map_icons/marker_blue_user.png';
		if(!!vals['marker_type']){
			if(vals['marker_type'] == 'community'){
				icon_img = getBaseUrl()+'/img/map_icons/marker_red_home.png'
			}
		}
		
		latilongi	= new google.maps.LatLng(vals['lat'],vals['lng']);
		
    var marker = new google.maps.Marker({
        position: latilongi,
        title: marker_title,
        draggable: false,
        map: map,
		icon: icon_img
    });
    //map.setCenter(marker.getPosition())
}
   
   function initMap() {
	var default_pos_lat = '33.940240';
	var default_pos_lng = '-84.212209';
	<?php if(!empty($user['people_geo_lat']) && !empty($user['people_geo_lng'])){?>
		default_pos_lat = "<?= $user['people_geo_lat'];?>";
		default_pos_lng = "<?= $user['people_geo_lng'];?>";
		
	<?php }?>
	
	map = new google.maps.Map(
		document.getElementById('map'),
		{center: new google.maps.LatLng(default_pos_lat, default_pos_lng), zoom: 13});

	var iconBase =
		'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

  }
  
	
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr4OlEeZhmEIjbJhXwuMHAf64l-yndLk0&callback=initMap"></script>
</body>
</html>