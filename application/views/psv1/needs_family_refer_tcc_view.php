<!-- Header Section -->
<?php echo $site_header; ?>
<div class="container col-sm-12">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20 text-center">
			<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		</div>
	</div>
	<div class="row top10">
		<div class="container">
			<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">Refer a Family For Temportary Care Community Support</h1>';}?>
			<?php echo $this->session->flashdata('msg'); ?>
			<?php 
				if(!empty($content['body'])){ 
					echo $content['body']; 
				}else{
			?>
				<div class="top40">
					<div class="col-sm-5 col-xs-12">
						<div class="ltp-video-wrapper border-light-gray">
							<iframe src="https://player.vimeo.com/video/417760971?api=1&player_id=resources-vimeo-player" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="resources-vimeo-player"></iframe>
						</div>
					</div>
					<div class="col-sm-7 col-xs-12">
						<h3>How to Refer a Family</h3>
						<p>Thank you for taking the time to refer a family that is in need of support.</p>
						<p>To protect the privacy of the family we ask that you fill out the form below and we'll send an email to the family you are referring. That email will have the video you see on this page as well as an invitation link for them to request a Temporary Care Community (TCC)  from their home church or a church near to them.</p>
						<p>While we try to support every family possible, please keep in mind that depending on current volunteer capacity and availability we may not be able to support this family at this time.</p>
					</div>
				</div>
				<?php }?>
			</div><!--/.row-->
		</div>
		
		
		<div class="panel panel-container col-sm-10 col-sm-offset-1 top40">
			<div class="row">
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>needs/saverequestcc" method="post" style="padding: 20px;">
					<fieldset>
						<legend>Requester's Info</legend>
						<input type="hidden" name="foster_parent_0_id_role" value="20">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Name</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="requestor_name_first" id="requestor_name_first" value="<?php echo set_value('requestor_name_first');?>" placeholder="First name" required>
								 <span class="text-danger"><?php echo form_error('requestor_name_first'); ?></span>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="requestor_name_last" id="requestor_name_last" value="<?php echo set_value('requestor_name_last');?>" placeholder="Last name" required>
								 <span class="text-danger"><?php echo form_error('name_last'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Email</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="email" class="form-control" name="requestor_email_primary" id="requestor_email_primary" value="<?php echo set_value('requestor_email_primary');?>" placeholder="Your email address" required>
								<span class="text-danger"><?php echo form_error('people_email_primary'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control" name="requestor_phone_mobile" id="requestor_phone_mobile" value="<?php echo format_phone(set_value('requestor_phone_mobile'));?>" placeholder="Mobile phone number" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Your Church (if applicable)</label>
							
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="text" class="form-control autocomplete-church" name="requestor_home_church" id="home_church" value="<?php echo set_value('home_church');?>" placeholder="Home Church" data-idtarget="id_home_church">
								<input type="hidden" name="requestor_id_church_home" id="id_home_church" value="">
								<span class="text-danger"><?php echo form_error('home_church'); ?></span>
							</div>
						</div>
							
					</fieldset>
					<fieldset class="top40">
						<legend>Referred Family Info</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Contact Name</label>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="name_family_first" id="name_family_first" value="<?php echo set_value('name_family_first');?>" placeholder="Family member's first name" required>
								 <span class="text-danger"><?php echo form_error('name_family_first'); ?></span>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" name="name_family_last" id="name_family_last" value="<?php echo set_value('name_family_last');?>" placeholder="Family member's last name" required>
								 <span class="text-danger"><?php echo form_error('name_family_last'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Family Contact Email</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type="email" class="form-control" name="family_email_primary" id="family_email_primary" value="<?php echo set_value('family_email_primary');?>" placeholder="Family member's email address" required>
								<span class="text-danger"><?php echo form_error('family_email_primary'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Current Family Status</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<select name="current_foster_status" class="input-form input-lg">
									<option value="Unknown">Unknown</option>
									<option value="Kinship">Caring for kin</option>
									<option value="Taking classes">Taking Fostering Classes</option>
									<option value="Waiting for placement">Waiting for foster placement</option>
									<option value="Has active placement">Has an active foster placement</option>
									<option value="A family in need">Simply a family in need</option>
								</select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Helpful Info</legend>
						<div class="form-group">
							<label class="control-label col-sm-offset-3"> Please tell us why this family might benefit from support.</label>
							<div class="col-sm-9 col-xs-12 col-sm-offset-3 top10">
								<textarea class="form-control input-lg" cols="10" rows="10" placeholder="(optional)" name="reason_for_support"></textarea>
								<span class="text-danger"><?php echo form_error('reason_for_support'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-offset-3"> How did you hear about <?php echo $_SESSION['affiliate']['affiliate_name'];?> or The Care Community Model?</label>
							<div class="col-sm-9 col-xs-12 col-sm-offset-3 top10">
								<textarea class="form-control input-lg" cols="10" rows="10" placeholder="(optional)" name="how_you_learned_about_us"></textarea>
								<span class="text-danger"><?php echo form_error('how_you_learned_about_us'); ?></span>
							</div>
						</div>
					</fieldset>
				<fieldset class="top40">
					<legend>Privacy & Submit</legend>
					<div class="form-group">
						<div class="col-sm-6 col-xs-12 col-sm-offset-3">
							<p>We are committed to protecting the personal information of families. We will keep no record of the family info unless they explicitly give their permission by submitting their information via the invitation link they will recieve in email sent by this form.</p>
							<p>By submitting this form I understand that my data will be used only for establishing a temporary care community around the family I'm referring and used in accordance with the terms of this website's <a href="<?=base_url();?>privacy-policy" target="_blank">privacy policy</a>.</p>
							
						</div>
					</div>
				  <div class="form-group">
					<div class="col-md-6 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-3 text-center">				  
					  <button type="submit" class="btn btn-success btn-lg btn-submit" name="save" value="1">Save</button>
					</div>
				  </div>
					<input type="hidden" name="source" value="needs" />
					<input type="hidden" name="need_type" value="cc_refer_family_tcc" />
					<input type="hidden" name="r" value="<?php echo url_enc(base_url().'needs/confirmation/ccreferfamily');?>" />
					<input type="hidden" name="t" value="<?php echo $t;?>" />
					<input type="text" name="phone" style="visibility: hidden;" placeholder="Phone Number"/>
					<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
				</fieldset>
			  </form>
			</div><!--/.row-->
		</div>
	</div>
</div>	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script>
$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
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
			}
			
	});
	
	var allstates = [
	<?php 
		$i = 0;
		
		foreach($us_states as $key => $val){
			echo  "{data: '".$key."',	value: '".addslashes($val. ' ('.$key.')')."'},\r\n";
		}?>
    ];
	
	$('#family_address_state').autocomplete({
		lookup: allstates,
		onSelect: function (suggestion) {
			$('#address_state_abbrev').val(suggestion.data);
		}
	});
});
</script>
</body>
</html>