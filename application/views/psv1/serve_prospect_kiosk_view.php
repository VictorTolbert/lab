<?php echo $site_header;

$card_entry_view 	= false;
$cur_address		= $event['event_address_street'].',  '.$event['event_address_city'].', '.$event['event_address_state'].' '.$event['event_address_zip'];
$cur_church			= $this->churches_model->get_church_name($event);
if(!empty($event['event_location_detail'])){
	$cur_location		= $event['event_location_detail'];
}else{
	$cur_location = $cur_address;
}

$additional_info		= false;


$event['event_name']	= 'Live The Promise';

?>
<div class="container">
	<form class="form form-horizontal form-label-left" action="<?php echo base_url();?>people/save" method="post">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 top20">
				<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive block-center">
			</div>
		</div>
		<div class="row top10">
		<?php echo $this->session->flashdata('msg'); ?>
			<h1 class="text-center"><?php echo $this->events_model->get_event_name($event);?></h1>
			<hr />
				
			</div>
			<?php if(!empty($event['event_desc'])){ echo '<div class="row top10">'.$this->website_model->format_copy($event['event_desc']).'</div>';}?>
			<fieldset class="top20">
				<legend>Sign Up for More Information</legend>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">First name</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="name_first" id="name_first" value="<?php echo set_value('name_first', $item['name_first']);?>" placeholder="First name" required="true">
							<span class="text-danger"><?php echo form_error('name_first'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Last name</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control input-block" name="name_last" id="name_last" value="<?php echo set_value('name_last', $item['name_last']);?>" placeholder="Last name" required="true">
							<span class="text-danger"><?php echo form_error('name_last'); ?></span>
						</div>
					</div>	
					<!--<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Home church</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="home_church" id="home_church" value="<?php echo set_value('home_church', $item['home_church']);?>" placeholder="Home Church">
							<input type="hidden" name="id_home_church" id="id_home_church" value="<?php echo $item['id_home_church'];?>">
							<span class="text-danger"><?php echo form_error('home_church'); ?></span>
						</div>
					</div>	-->				
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary email</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" class="form-control" name="people_email_primary" id="people_email_primary" value="<?php echo set_value('people_email_primary', $item['people_email_primary']);?>" placeholder="Primary email address" required="true">
						</div>
					</div>
				</fieldset>
				
				<div class="top30"></div>	

					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg center-block" name="save" value="1">Next <i class="fa fa-chevron-right"></i></button>
					</div>
				</fieldset>
		<input type="hidden" name="assignment_type" value="people_to_event">
		<input type="hidden" name="count_assignments" value="1">
		<input type="hidden" name="id_event_encoded" value="<?php echo $event['id_event_encoded'];?>">	
		<input type="hidden" name="id_home_church" value="<?php echo $event['id_church'];?>">	
		<input type="hidden" name="event_type" value="<?php echo $event['event_type'];?>">
		<input type="hidden" name="id_church" value="<?php echo $event['id_church'];?>">
		<input type="hidden" name="r" value="<?php echo url_enc($redirect);?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>



<!-- top navigation -->
<?php echo $site_footer;?>
<script>

$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});

$(document).ready( function() {
	
	
	$("#name_first").focus();
});


</script>

<!-- /top navigation -->