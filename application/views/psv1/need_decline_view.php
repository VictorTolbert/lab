<!-- Header Section -->
<?php echo $site_header; ?>
<?php 
	echo $site_sidebar; 
	$already_displayed	= array();
	$random 			= rand(1,2);
?>
<div class="hero-image" style=" background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/families/hero_families_<?= $random;?>.jpg'); background-position: top center; min-height: 300px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">You have declined this need!</h1>';}?>
	 </div>
</div>
	
<div class="col-sm-12 main container container-<?= $env_scope;?>">
	<div class="row top10">
		<?php 
			if(!empty($content['body'])){ 
				echo $this->website_model->format_copy($content['body']);
			}else{
				echo '<p class="text-center">Thank you for responding about your inability to help fulfill this need.</p>';
				echo '<p class="text-center">Please be on the look out for future need requests.</p>';
			}
		?>
	</div>
	
	<?php if($show_details){?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			<div class="panel-container panel ">
				<fieldset>
					<legend>Need Details</legend>
						<?php 
							$item['output']					= 'web';
							$item['bypass_vols_estimated']	= 1;
							echo $this->needs_model->format_need_details($item);
						?>
				</fieldset>
			</div>
		</div>
	</div>
	<?php }else{?>
		<div class="col-sm-12 col-xs-12 top40"></div>
	<?php }?>
	
</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
	$(".btn-switch").on('switchChange.bootstrapSwitch',function(e, state){
		$(this).closest('[type=checkbox]').attr('checked', state);
		
	});
});

$(document).ready(function() {
  $(window).keydown(function(need){
    if(need.keyCode == 13) {
      need.prneedDefault();
      return false;
    }
  });
});

$(document).ready( function() {
	
    var allchurches = [
	<?php 
		$i = 0;
		foreach($churches as $cur){
			$cur['show_church_city_state']			= 1;
			echo  "{data: '".$cur['id_church']."',	value: '".addslashes($this->churches_model->get_church_name($cur))."'},\r\n";
		}?>
    ];
 
  $('#home_church').autocomplete({
			lookup: allchurches,
			autoSelectFirst: true,
			onSelect: function (suggestion) {
				$('#id_home_church').val(suggestion.data);
				if(!!$('#id_church_add')){
					if($('#id_church_add').val() < 1){
						$('#id_church_add option[value='+suggestion.data+']').attr('selected','selected');
					}
				}
			}
			
	});
	
	 var allstates = [
	<?php 
		$i = 0;
		
		foreach($us_states as $key => $val){
			echo  "{data: '".$key."',	value: '".addslashes($val. ' ('.$key.')')."'},\r\n";
		}?>
    ];
	
	$('#address_state').autocomplete({
		lookup: allstates,
		onSelect: function (suggestion) {
			$('#address_state_abbrev').val(suggestion.data);
		}
	});
});
</script>
</body>
</html>