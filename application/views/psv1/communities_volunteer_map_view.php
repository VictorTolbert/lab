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
				<li class="active">Volunteer Map</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Volunteer Map for <?= $community['community_name'];?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<fieldset>
					<legend>Map</legend>
						<div class="col-sm-10 col-sm-offset-1">
							<div id="map" style="min-width: 500px; min-height: 500px; width: 100%; height: 100%;" class="center-block"></div>
						</div>
						
				</fieldset>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
	var map;
	   
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

	var iconBase = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/';
	add_map_markers();

  }
  
  
  
  function add_map_markers(){
		
		<?php if(!empty($community['community_geo_lat']) && !empty($community['community_geo_lng'])){	?>
			add_map_marker({title:"<?= $community['community_name'];?>", marker_type:"community", lat:"<?= $community['community_geo_lat'];?>", lng:"<?= $community['community_geo_lng'];?>"});
			map.setCenter({lat:<?= $community['community_geo_lat'];?>,lng:<?= $community['community_geo_lng'];?>});
			<?php if(!empty($community['team_members'])){ 
				foreach($community['team_members'] as $cur){
					echo "add_map_marker({title:'".$cur['name_first']." ".$this->website_model->display_format_people_name_last($cur['name_last'])."', marker_type:'volunteer', lat:'".$cur['people_geo_lat']."', lng:'".$cur['people_geo_lng']."'});\r\n";
				}
			}
		}	?>
	}
	
	function add_map_marker(vals) {
		//console.log(vals);
		var marker_title = '';
		if(!!vals['title']){
		   marker_title = vals['title'];
		}
		var icon_img = '<?=base_url();?>img/map_icons/marker_blue_user.png';
		if(!!vals['marker_type']){
			if(vals['marker_type'] == 'community'){
				icon_img = '<?=base_url();?>img/map_icons/marker_red_home.png'
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
	
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr4OlEeZhmEIjbJhXwuMHAf64l-yndLk0&callback=initMap"></script>
</body>
</html>