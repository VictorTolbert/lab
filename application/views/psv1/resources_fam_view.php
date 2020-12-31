<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['affiliate_name'])){
		$name	.= ' '.$item['affiliate_name'];
}
if(empty($item['id_affiliate'])){
	$name .= ' New Affiliate';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

switch($this->affiliates_model->get_active_affiliate_id()){
	case 4:
		$rnoun	= 'Welcomed';
	break;
	default:
		$rnoun	= '<?= $rnoun;?>';
	break;
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
					Resources
			</li>
			
			<li class="active">FAM Resources</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">FAM Resources</h1>
		</div>
	</div><!--/.row-->

	<div class="panel panel-container resources-advocate">
		<h2 class="text-center">Search</h2>
		<div class="row">
		<form class="form-horizontal">
			<div class="input-group top20 col-sm-6 col-xs-12 col-sm-offset-3">
				<input type="text" class="input-lg form-control " placeholder="Search FAM Resources" id="search_resources">
				<div class="input-group-addon">
					<a href="#" class="btn-search">
						<i class="fa fa-search"></i>
					</a>
				</div>
			</div>
			<div id="ajax-target-search-result" class="well col-sm-offset-3 col-sm-6" style="display: none;"></div>
		</form>
	</div>
	</div>
	<div class="panel panel-container resources-advocate">
		<div class="row">
			<ul class="nav nav-pills">
			<?php 
				if(!empty($cats)){
					$i 		= 0;
					$shown 	= array();
					foreach($cats as $cur_cat){
						if($i == 0){ $active_class =  'active';	}else{	$active_class =  '';};
						if(empty($cur_cat['id_resource_cat_parent']) && $this->resources_model->can_show_cat($cur_cat) && !in_array($cur_cat['id_resource_cat'], $shown)){
							$shown[]	= $cur_cat['id_resource_cat'];
							echo '<li class="'.$active_class.'"><a href="#'.hash_challenge($cur_cat['resource_cat_name']).$cur_cat['id_resource_cat'].'" data-toggle="pill" data-catid="'.$cur_cat['id_resource_cat'].'">'.$cur_cat['resource_cat_name'].'</a></li>';
							$i++;
						}
					}
				}
			?>
			</ul>
			<div class="tab-content panel panel-container">
				<?php if(!empty($cats)){
					$i = 0;
					foreach($cats as $cur_cat){
						if(empty($cur_cat['id_resource_cat_parent'])){
							if($i == 0){ $active_class =  'in active';	}else{	$active_class =  '';};
				?>
						<div id="<?php echo hash_challenge($cur_cat['resource_cat_name']).$cur_cat['id_resource_cat'];?>" class="tab-pane fade<?php echo $active_class;?>" >
							<div class="row">
								<h2 class="text-center"><?php echo $cur_cat['resource_cat_name'];?></h2>
							</div>
							<div class="row">
								<div id="ajax-target-<?php echo hash_challenge($cur_cat['resource_cat_name']).$cur_cat['id_resource_cat'];?>">
									
								</div>
							</div>
						</div>
						
				<?php 	
						$i++;
						}
					}
				}// End if empty cats
				?>
			</div>
		</div>
	</div>
</div>

<!-- Footer Section -->
<?php echo $site_footer; ?>

<style>
	.video-thumb{ text-align:center; border:solid 1px #ddd; padding:8px;}
	.resources-video-container h4{ text-align:center; }
	.resources-advocate a{font-weight: bold; padding-bottom: 20px;}
	.resources-advocate p{margin-bottom: 20px;}
	.resources-advocate .section-row{margin-top: 20px; margin-bottom: 20px;}
	.resources-advocate hr{ width: 60%;}
	.resources-item-wrapper{
		margin-bottom: 20px;
	}
	.resources-item-wrapper img{
		border: solid 1px #ddd;
	}
	.resources-header-item{
		margin-top: 40px;
		/*display: table-cell;
		vertical-align: bottom;*/
	}
	
	.resources-header-item a{
		margin-bottom: 0;
		padding-bottom: 0;
	}
	.resources-header-subcat{
		padding-top: 50px;
		padding-bottom: 50px;
		/* border-bottom: 1px solid #ddd; */
	}
	.resources-header-category{
		padding-top: 20px;
		padding-bottom: 60px;
		/* border-bottom: 1px solid #ddd; */
	}
	
	.nav-pills li a{
		font-size: 12px;
		color: #aaa !important;
		border: 1px #ddd solid;
		transition: all 0.3s ease;
	}
	
	.nav-pills li a:hover{
		font-size: 12px;
		color: #000 !important;
		border: 1px #ddd solid;
		background: #eee;
	}
	
	.nav-pills li.active a,
	.nav-pills li.active a:hover{
		font-size: 12px;
		background: #aaa !important;
		color: #fff !important;
		border: 1px #ddd solid;
	}
	
	.resources-item-wrapper h4{
		padding-bottom: 0;
		margin-bottom: 0px;
	}	
	.resources-item-wrapper{
		margin-top: 40px;
	}
	
	.resource-img-thumb{
		min-height:236px; 
		font-family: 'Gotham-Black', 'Open Sans', Sans-serif;
		color: #ddd;
		display: flex;
		align-items: center;
		text-align: center;
		justify-content: center;
		text-transform: uppercase;
		font-size: 25px;
	} 
	
	.resources-item-link,
	.resources-item-link:hover,
	.resources-item-link:active,
	.resources-item-link:visited,
	.resources-item-link:focus
	{
		text-decoration: none !important;
	}
	
	.resources-item-link:hover{
		
	}
	
	.resource-img-thumb-text{
		text-decoration: none !important;
		color: #ccc;
	}
	
	.resource-img-thumb-text:hover{
		color: #fff;
	}
	
	

	
</style>
<script>
	
var search_results_state = 'idle';

$(document).ready( function() {
	
	$('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
		var target 	= $(this).attr('href');
		var catid	= $(this).data('catid'); 
		target 		= target.replace('#','');
		
		run_category_resource_grab(catid, target);
	});
	
	
	$('#search_resources').on('keyup', function(){
		run_search();
		/*
		if($('#ajax-target-search-result').is(':visible') && search_results_state == 'idle'){
			search_results_state = 'hiding';
			$('#ajax-target-search-result').slideToggle(600, function(){
				search_results_state = 'idle';
			});
		}
		*/
	});
	
	$('.btn-search').click(function (e) {
		e.preventDefault();
		run_search();
	});
	
	$('#search_resources').on("keypress", function(e) {
		/* ENTER PRESSED*/
		if (e.keyCode == 13) {
			search_results_state = 'running';
			e.preventDefault();
			run_search();
		}
	});
	
	run_category_resource_grab(1, 'featured1');
	
});

function run_category_resource_grab(catid, target){
	$('#ajax-target-'+target).html(ps_loading_html());
	$.ajax({
	  type: "GET",
	  url:  '<?= base_url();?>resources/ajax_get_category_resources/?catids[]='+catid,
	  success: function(ajaxdata) {
			var result = JSON.parse(ajaxdata);
			console.log(result);
			$('#ajax-target-'+target).html(result.html);
		}	
	});
}

function run_search(){
	if($('#search_resources').val().length > 3){
		search_results_state = 'running';
		$.ajax({
		  type: "GET",
		  url:  '<?= base_url();?>/resources/ajax_list_search_resources/?search='+$('#search_resources').val(),
		  success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				$('#ajax-target-search-result').html(result.html);
				if($('#ajax-target-search-result').is(':hidden')){
					$('#ajax-target-search-result').slideToggle(800);
				}
				search_results_state = 'idle';
			}	
		});
	}
	if($('#search_resources').val().length < 1 && $('#ajax-target-search-result').is(':visible')){
		$('#ajax-target-search-result').slideToggle(800);
	}
}

$(window).load(function() { 

	// cache the id
	var navbox = $('.nav-pills');

	// activate tab on click
	navbox.on('click', 'a', function (e) {
	  var $this = $(this);
	  // prevent the Default behavior
	  e.preventDefault();
	  // send the hash to the address bar
	  window.location.hash = $this.attr('href');
	  // activate the clicked tab
	  $this.tab('show');
	});

	// will show tab based on hash
	function refreshHash() {
	  navbox.find('a[href="'+window.location.hash+'"]').tab('show');
	}

	// show tab if hash changes in address bar
	$(window).bind('hashchange', refreshHash);

	// read has from address bar and show it
	if(window.location.hash) {
	  // show tab on load
	  refreshHash();
	}

});

</script>
</body>
</html>