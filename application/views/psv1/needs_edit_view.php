<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$can_edit 	= false;
$name 		= '<small>';
 if (!empty($item['need_name'])){
	$name	= $item['need_name'];
	$action	= 'Edit';
}elseif(empty($item['id_need'])){
	$name .= ' New Need';
	$action	= 'Add';
	$can_edit 	= true;	
}
$name .= '</small>';

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
					<a href="<?php echo base_url();?>needs/list">
						Needs 
					</a>
				</li>
				<li class="active"><?php echo $action.' '.$name;?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit <?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>needs/save" method="post">
					<fieldset>
						<legend>Need Details</legend>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Need Name</label>
								<div class="col-md-5 col-sm-5 col-xs-12">
									<?php 
										if($can_edit){
											echo '<input type="text" class="form-control" name="need_name" id="need_name" value="'.set_value('need_name', $item['need_name']).'" placeholder="Need name" required="required">';
										}else{
											echo '<p>'.$item['need_name'].'</p>';
										}
									?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Need Type</label>
								<div class="col-md-5 col-sm-5 col-xs-12">
									<?php 
										if($can_edit){?>
											<select class="form-control input-lg" name="id_need_type">
												<optgroup label="New Care Communities">
													<option value="100">Care Community Referral</option>
													<option value="101">Care Community Request</option>
													<option value="102">Care Community Request by Court</option>
												</optgroup>
												<optgroup label="Existing Care Communities">
													<option value="500">Babysitting</option>
													<option value="500">Tutoring</option>
													<option value="510">Transporation</option>
													<option value="520">Scheduled Meal</option>
													<option value="520">Extra Meal</option>
													<option value="520">Laundry</option>
													<option value="520">Yard Work</option>
													<option value="520">House Repairs</option>
													<option value="520">Car Repairs</option>
													<option value="520">Other Service Need</option>
													<option value="520">Other Physical Need</option>
												</optgroup>
												<optgroup label="Bio Families">
													<option value="500">Babysitting</option>
													<option value="500">Tutoring</option>
													<option value="510">Transporation</option>
													<option value="520">Scheduled Meal</option>
													<option value="520">Extra Meal</option>
													<option value="520">Laundry</option>
													<option value="520">Yard Work</option>
													<option value="520">House Repairs</option>
													<option value="520">Car Repairs</option>
													<option value="520">Other Service Need</option>
													<option value="520">Other Physical Need</option>
												</optgroup>
											</select>
										<?php
										}else{
											echo '<p>'.$this->needs_model->get_display_need_type($item).'</p>';
										}
									?>
								</div>
							</div>
							<?php if($this->security_model->user_has_access(95)){?>							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php 
									if($can_edit){
										echo $this->website_model->input_menu_affiliates('id_affiliate', set_value('id_affiliate', $item['assign_id_affiliate']), 'id_affiliate', 'input-lg', array('view' => 'edit_affiliates', 'required' =>1));
									}else{
										echo '<p>'.$this->affiliates_model->get_affiliate_name($item).'</p>';
									}
									?>
								</div>
							</div>
							<?php }?>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
								<div class="col-md-6 col-sm-9 col-xs-12">
									<?php 
									if($can_edit){
										echo $this->website_model->input_menu_statuses('need_state', set_value('need_state', $item['need_state']), 'need_state', 'input-lg', array('view' => 'edit_needs', 'required' =>1));
									}else{
										echo '<p>'.$this->needs_model->get_need_status_from_state($item).'</p>';
									}
									?>
								</div>
							</div>							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Need Description</label>
								<div class="col-md-9 col-sm-9 col-xs-12 need-description">
									<?php 
									if($can_edit){
										echo '<textarea class="form-control" cols="10" rows="10" name="need_desc" id="need_desc" value="'.set_value('need_desc', $item['need_desc']).'" placeholder="Description of the need" required="required"></textarea>';
									}else{
										echo '<p>'.$item['need_desc'].'</p>';
									}
									?>
								</div>
							</div>
					</fieldset>
					<fieldset>
					<legend>Need Participants</legend>
						<?php $item['view'] = 'needs_edit_view'; ?>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Need Recipient(s)</label>
							<div class="col-md-6 col-sm-9 col-xs-12">
								<div class="well well-needs-participant">
									<input type="text" class="form-control" name="need_recipient_lookup" id="need_recipient_lookup" value="" placeholder="Tag people who will receive the fulfillment of this need.">
									<div id="ajax-target-need-recipients" class="col-sm-12 top20">
									<?php 
										$item['display_small_avatars']	= 1;
										//echo $this->needs_model->get_display_need_list_recipients($item);
									?>
									</div>
								</div>
								
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Need Admin(s)</label>
							<div class="col-md-6 col-sm-9 col-xs-12">
								<div class="well well-needs-participant">
									<input type="text" class="form-control" name="need_admin_lookup" id="need_admin_lookup" value="" placeholder="Tag people who will oversee the fulfillment of this need.">
									<div id="ajax-target-need-admins" class="col-sm-12 top20">
									<?php 
										$item['display_small_avatars']	= 1;
										//echo $this->needs_model->get_display_need_list_admins($item);
									?>
									</div>
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Need Fullfiller(s)</label>
							<div class="col-md-6 col-sm-9 col-xs-12">
								<div class="well well-needs-participant">
									<input type="text" class="form-control" name="need_fulfiller_lookup" id="need_fulfiller_lookup" value="" placeholder="Tag people who will be assigned to fulfill this need">
									<div id="ajax-target-need-fulfiller" class="col-sm-12 top20">
									<?php 
										$item['display_small_avatars']	= 0;
										echo $this->needs_model->get_display_need_list_fulfillers($item);
									?>
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset>
					<legend>Tracking</legend>
						<div class="form-group">
							<label class="control-label col-sm-3 col-xs-3">Estimated Volunteers</label>
							<div class="col-sm-4 col-xs-6">
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon">
												<i class="fa fa-users"></i>
											</span>
											<input type="text" class="form-control" name="vols_estimated" id="vols_estimated" value="<?php echo set_value('vols_estimated', $item['vols_estimated']);?>" placeholder="Enter number of volunteers estimated to fulfill this need">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Estimated Service Hours <small>(in hours)</small></label>
							<div class="col-sm-4 col-xs-6">
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon">
												<i class="fa fa-clock-o"></i>
											</span>
											<input type="text" class="form-control" name="time_estimated" id="time_estimated" value="<?php echo set_value('time_estimated', $item['time_estimated']);?>" placeholder="Enter total man-hours estimated to fulfill this need">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Estimated Cost</label>
							<div class="col-sm-4 col-xs-6">
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon">
												<i class="fa fa-dollar"></i>
											</span>
											<input type="text" class="form-control" name="cost_estimated" id="cost_estimated" value="<?php echo set_value('cost_estimated', $item['cost_estimated']);?>" placeholder="Enter total cost estimated to fulfill this need">
								
										</div>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					
					
					<div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
				  <button type="submit" class="btn btn-success" name="save" value="1">Save</button>
				  &nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="<?php echo base_url();?>needs/list"><button type="button" class="btn btn-primary" name="cancel" value="1">Cancel</button></a>
				</div>
			  </div>
			  <input type="hidden" id="id_need_encoded" name="id_need_encoded" value="<?php echo $item['id_need_encoded'];?>" />
			  <input type="hidden" name="r" value="<?php echo url_enc(base_url().'needs/list');?>" />
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>
$(document).ready( function() {
	
    var allvols = [
	<?php 
		$i = 0;
		if(!empty($vols)){
			foreach($vols as $cur){
				$cur['display_small_avatars']	= 1;
				$cur['avatar_code_only']		= 1;
				echo  "{data: '".$cur['id_people']."',	value: '".addslashes($cur['name_first'].' '.$this->website_model->display_format_people_name_last($cur['name_last']))."', img: '".addslashes(correct_img_path($cur['url_avatar']))."'},\r\n";
			}
		}?>
    ];
 
  $('#need_fulfiller_lookup').autocomplete({
		lookup: allvols,
		onSelect: function (suggestion) {
			add_need_fulfiller(suggestion.data);
		},
		html: true
	}).autocomplete( "instance" )._renderItem = function( ul, item ) {
        return $( "<li><div><img src='"+item.img+"'><span>"+item.value+"</span></div></li>" ).appendTo( ul );  
	};
	
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

function add_need_fulfiller(pid){
	var nid = $('#id_need_encoded').val();
	$.ajax({
		url: "<?php echo base_url();?>needs/ajaxgetneedfulfillertable?pid="+pid+'&nid='+nid,
		dataType: "html",
		success: function(ajaxdata) {
			var peep = JSON.parse(ajaxdata);
			$('#ajax-target-need-fulfiller').html(peep.html);
			$('#need_fulfiller_lookup').val('');
		}

	});
	
	
	
}
</script>
<script>
$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});
</script>
</body>
</html>