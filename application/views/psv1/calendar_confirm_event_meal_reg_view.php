<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';

 if (!empty($item['event_name'])){
		$name	.= ' '.$item['event_name'];
}
if(empty($item['id_family'])){
	$name .= ' New Family';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

$parent_count		= 0;
$kid_count			= 0;
$arr_parent_roles 	= $this->families_model->get_family_parent_roles_array();
$arr_kid_roles 		= $this->families_model->get_family_kid_roles_array();
$already_displayed	= array();

$random = rand(1,2);
?>
<div class="hero-image" style=" background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/families/hero_families_<?= $random;?>.jpg'); background-position: top center; min-height: 500px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">You Are Confirmed!</h1>';}?>
		<p class="text-center">Thank you for confirming your meal delivery for the <?= $item['family_name'];?> family on <?= $item['meal_date'];?> at <?= $item['meal_time'];?>.</p>
		<p class="text-center">Please help your team and the <?= $item['family_name'];?> family by letting them know what you plan to bring for this meal below.</p>
	 </div>
</div>
	
<div class="col-sm-12 main container container-<?= $env_scope;?>">
	<div class="row top10">
		<div class="container">
			
			<?php echo $this->session->flashdata('msg'); ?>
			<?php 
				if(!empty($content['body'])){ 
					echo $content['body']; 
				}else{
			?>
			<?php }?>
		</div><!--/.row-->
	</div>
	<div class="col-md-12 text-center"><?php echo $this->session->flashdata('msg'); ?></div>
	<div class="panel panel-container">
		<div class="row">
			<form class="form-horizontal form-label-left" action="<?php echo base_url();?>calendar/save_response" method="post">
				<fieldset>
					<legend>Meal Info - <?= $item['family_name'];?> Family <?= $item['meal_date'];?> at <?= $item['meal_time'];?></legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Meal Description</label>
														
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea name="assign_params[calendar][meal_desc]" class="form-control" rows="4" cols="10" placeholder="What are you preparing for this meal?"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Estimated Time <small>(optional)</small> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Please enter the number of estimated volunteer hours it will take to prepare and deliver this meal."></i></label>
														
							<div class="col-md-3 col-sm-4 col-xs-12">
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon"><i class="fa fa-clock-o"></i></span>
											<input type="text" class="form-control autocomplete-church" name="assign_params[calendar][time_estimated]" id="time_estimated" value="<?php echo set_value('time_estimated');?>" placeholder="Example: 1.5">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Estimated Cost <small>(optional)</small> <i class="fa fa-question-circle-o tooltip-wide" data-toggle="tooltip" data-html="true" data-placement="top" title="Please enter the amount you expect this meal will cost you to prepare or purchase for this family."></i></label>
														
							<div class="col-md-3 col-sm-4 col-xs-12">
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon"><i class="fa fa-usd"></i></span>
											<input type="text" class="form-control autocomplete-church" name="assign_params[calendar][cost_estimated]" id="cost_estimated" value="<?php echo set_value('time_estimated');?>" placeholder="Example: 25.50">
										</div>
									</div>
								</div>
							</div>
						</div>
						
				</fieldset>
											
			<div class="ln_solid top40"><hr /></div>
			<div class="col-sm-12 col-xs-12 text-center">				  
			  <button type="submit" class="btn btn-success btn-lg btn-submit" name="save" value="1">Save</button>
			</div>
		  </div>
		  <input type="hidden" name="id_assignment_encoded" value="<?php echo $assign['id_assignment_encoded'];?>" />
		  <input type="hidden" name="id_community_encoded" value="<?php echo url_enc($item['assign_id_community']);?>" />
		  <input type="hidden" name="posted" value="family" />
		  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'calendar/success/confirm');?>" />
		  <input type="hidden" name="ekey" id="ekey" value="<?php echo $ekey;?>">
		  </form>
		</div><!--/.row-->
	</div>
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
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
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