<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['message_name'])){
		$name	.= ' - '.$item['message_name'];
}
if(empty($item['id_message'])){
	$name .= ' New Church';
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';

$id_affiliate  = $this->affiliates_model->get_active_affiliate_id();
if(!empty($_SESSION['view_limiter']['id_affiliate'])){
	$id_affiliate = $_SESSION['view_limiter']['id_affiliate'];
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
				<a href="<?php echo base_url();?>messages/viewlist">
					Messages
				</a>
			</li>
			<li class="active">Compose Group Message</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Compose Group Message</small></h1>
		</div>
	</div><!--/.row-->
	
	<div class="panel panel-container">
		<?php echo $this->session->flashdata('msg'); ?>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<form class="form-horizontal" id="msg-group-compose-select-group" name="form-limiter" method="post" action="#">
					<fieldset>
						<legend>Select Group</legend>
						<p>First select the group you would like to send a message.</p>
						<div class="form-group">
							<div class="col-xs-2 col-sm-2">
								People who are
							</div>
							<div class="col-xs-10 col-sm-8">
								<select name="group_scope" id="group-limiter-scope" class="form-control input-lg ajax-trigger-group-scope" required>
									<option value="">Select People Group</option>
									<option value="advocates" data-childselect="church">Advocates</option>
									<option value="team_leaders" data-childselect="church">Team Leaders</option>
									<option value="volunteers" data-childselect="church">Volunteers</option>
									<option value="families" data-childselect="church">Families</option>
									<option value="family_members" data-childselect="family">Family Members</option>
									<option value="prospects" data-childselect="church">Prospects</option>
								</select>
							</div>
						</div>
						<?php if($this->security_model->user_has_access(95)){ ?>
							<div class="form-group group-limiter-affiliate">
								<div class="col-xs-2 col-sm-2">
									under the affiliate
								</div>
								<div class="col-xs-10 col-sm-8">
									<?php echo  $this->website_model->input_menu_affiliates('id_affiliate', $id_affiliate, 'id_affiliate', 'input-lg form-control ajax-trigger-affiliate', array('limiter_view' => 1)) ;?>
								</div>
							</div>
						<?php 	}else{
									echo '<input type="hidden" name="id_affiliate" value="'.$id_affiliate.'">';
								}
							if(!empty($_SESSION['affiliate']['enable_regions']) && $this->security_model->user_has_access(80)){ ?>
							<div class="form-group group-limiter-affiliate">
								<div class="col-xs-2 col-sm-2">
									in this region
								</div>
								<div class="col-xs-10 col-sm-8 ajax-target-id-region">
									<?php echo $this->website_model->input_menu_regions('id_region', '', 'id_region', 'input-lg form-control ajax-trigger-region', array('limiter_view' => 1, 'id_affiliate' => $id_affiliate));?>
								</div>
							</div>
						<?php }?>
						<div class="form-group group-limiter-church group-limiter-child">
							<div class="col-xs-2 col-sm-2">
								at this church
							</div>
							<div class="col-xs-10 col-sm-8 ajax-target-id-church">
								<?php echo $this->website_model->input_menu_churches('id_church', '' , 'id_church', 'input-lg form-control', array('force_limiters' => 1, 
																														'debug' => 0,
																														'include_parent_church_ids' => 1, 
																														'limiter_view' => 0, 
																														'id_affiliate' => $id_affiliate,
																														'show_single_church_name' => 1
																													));
								?>
							</div>
						</div>
						
						<div class="form-group group-limiter-family hide group-limiter-child">
							<div class="col-xs-2 col-sm-2">
								in this family
							</div>
							<div class="col-xs-10 col-sm-8 ajax-target-id-family">
								<?php echo  $this->website_model->input_menu_families('id_family', '' , 'id_family', 'input-lg form-control', array('limiter_view' => 1)) ;?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2 col-sm-2">
								with a status of
							</div>
							<div class="col-xs-10 col-sm-8 ajax-target-id-status">
									<?php echo  $this->website_model->input_menu_statuses('state', '' , 'state', 'input-lg form-control', array('limiter_view' => 1, 'view' => 'list_limiter_advocate'));?>
							</div>
						</div>
					</fieldset>
					<div class="row top10 text-center">
						<button class="btn btn-primary btn-lg btn-ajax-trigger btn-find-people">Get People</button>
					</div>
				</form>
				<form class="form-horizontal" id="msg-main-form" name="form-limiter" method="post" action="<?php echo base_url();?>messages/save">
					<fieldset class="hide" id="msg-group-compose-select-recipients">
						<legend>Recipients</legend>
						<div class="form-group">
							<div class="col-xs-12 col-sm-12" id="ajax-target-msg-group-compose-select-recipients">
								
							</div>
						</div>
					</fieldset>
					
					<fieldset class="hide" id="msg-group-compose-msgtype">
						<legend>Message Type</legend>
							<div class="col-xs-2 col-sm-2">
								Message Type
							</div>
							<div class="col-xs-10 col-sm-8">
								<?php echo  $this->website_model->input_menu_messaging_templates('messaging_alias', '' , 'messaging_alias', 'input-lg form-control', array('custom_view' => 1, 'use_alias' => 1, 'id_affiliate' => $this->affiliates_model->get_active_affiliate_id()));?>
							</div>
					</fieldset>
					<fieldset class="hide" id="msg-group-compose-msg">
						<legend>Message</legend>
					
						<div class="form-group">
							<div class="col-xs-2 col-sm-2">
								From: 
							</div>
							<div class="col-xs-10 col-sm-10 ajax-target-id-sender">
								<select name="id_sender" class="form-control input-lg" id="id_sender">
									<option value="<?= $user['id_people'];?>"><?= 'Me - '.$user['name_first'].' '.$this->website_model->display_format_people_name_last($user['name_last']).'('.$user['people_email_primary'].')';?></option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2 col-sm-2">
								Subject:
							</div>
							<div class="col-xs-10 col-sm-8">
								<input type="text" name="msg_title" value="" class="form-control input-lg" id="msg_subject">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2 col-sm-2">
								Body:
							</div>
							<div class="col-xs-10 col-sm-10">
								<span class="text-danger" id="error-compose-message-form-editor"></span>
								<div id="compose-message-form-editor" style="min-height: 250px;"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
							<input type="hidden" name="msg_type" id="msg_type" value="msg_to_people">
							<input type="hidden" name="msg_body" id="compose-message-form-body" value="">
							<input type="hidden" name="r" value="<?php echo url_enc(base_url().'messages/groupcompose');?>">
							<input type="hidden" name="t" value="<?php echo get_submitted_by_human_challenge();?>">
							<a href="<?php echo base_url().'dashboard';?>" class="btn btn-default btn-msg-back" >Cancel</a>
							<a href="#modalconfirmsend" data-toggle="modal" data-target="#modalconfirmsend" class="btn btn-default btn-md btn-danger btn-ok">
								<i class="fa fa-paper-plane-o"></i> Send
							</a>
							
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalconfirmsend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center modal-lg">
			<div class="modal-content" >
				<form method="post" class="form-horizontal" id="confirm-request-action-modal-form" action="<?php base_url();?>family/ajax_request_action">
					<div class="modal-header">
						<h2>Ready to Send?</h2>
					</div>
					<div class="modal-body">
						<p class="text-center">Just checking, you are about to send this email to <em><span class="display-recipient-count"></span> recipients</em>.</p>
						<p class="text-center"><strong>Are you sure you're ready to send this email?</strong></p>
						
						<p class="text-center"><button class="btn btn-primary btn-send-test-msg">Send Me a Test Message</button></p>
						<p class="text-center modal-test-msg-response"></p>
						
					</div>
					<div class="modal-footer" id="delete-assignment-modal-footer text-center">
						<button type="button" class="btn btn-default btn-lg" data-dismiss="modal">No</button>
						&nbsp;&nbsp;
						<a class="btn btn-danger btn-ok btn-modal-send-confirm btn-lg"><i class="fa fa-paper-plane-o"></i> Yes</a>
						
					</div>
					<input type="hidden" name="id_assignment_encoded" id="id_assignment_encoded_for_delete" value="">
					<input type="hidden" name="method" id="modal-delete-assignment-method" value="">
				</form>
			</div>
		</div>
	</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>

<?php 
			$user['avatar_code_only']			= 1;
			$cur_avatar							= $this->people_model->display_people_avatar($user);
	?>


<script>
	function instantiate_bs_switch(){
		$(".btn-switch").bootstrapSwitch();
		
		$('.btn-switch').on('change', function(e){
			
			var num = $('#total-recipient-count').data('count');
			if($(this).checked){
				$('#total-recipient-count').data('count', Number(num) + Number(1));
			}else{
				$('#total-recipient-count').data('count', Number(num) - Number(1));
			}
			$('#total-recipient-count').html($('#total-recipient-count').data('count'));
		});
	}
	$(document).ready(function() {
		instantiate_bs_switch();
		
		var quillcomposemsgmain = new Quill('#compose-message-form-editor', {
			theme: 'snow'
		});
		
		quillcomposemsgmain.on('text-change', function() {
			var justHtml = quillcomposemsgmain.root.innerHTML;
			$('#compose-message-form-body').val(justHtml);
		});
		
		$('#group-limiter-scope').on('change', function(e){
			var child = $(this).find(":selected").data('childselect');
			$('.group-limiter-child').addClass('hide');
			$('.group-limiter-'+child).removeClass('hide');
		});

		$('.btn-find-people').click(function(e){
			e.preventDefault();
			$('#msg-group-compose-select-recipients').removeClass('hide');
			$('#ajax-target-msg-group-compose-select-recipients').html('<div class="col-sm-12 text-center top60" height="'+theight+'" style="min-height:'+theight+'px;"><h2>Finding people</h2><p class="text-center"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><br />Please be patient, larger groups can take up to 2 minutes to compile.</p></div><div class="row top60">&nbsp;</div>');
		
			$('html,body').animate({scrollTop: $("#ajax-target-msg-group-compose-select-recipients").offset().top}, 'slow');
			var theight = $('#ajax-target-msg-group-compose-select-recipients').height() - 120;
			
			$.ajax({
				type: "POST",
				url:  '<?php echo base_url();?>messages/ajax_get_group_recipients',
				data: $('#msg-group-compose-select-group').serialize(),
				success: function(ajaxdata) {
					var result = JSON.parse(ajaxdata);
					setTimeout(function(){
						$('#ajax-target-msg-group-compose-select-recipients').html(result.html);
						$('.display-recipient-count').html(result.count);
						instantiate_bs_switch();				
						$('#msg-group-compose-msg').removeClass('hide');	
						$('#msg-group-compose-msgtype').removeClass('hide');	
						$('html,body').animate({scrollTop: $("#ajax-target-msg-group-compose-select-recipients").offset().top -120}, 'slow');
					}, 2000);					
				}	
			}); 
		});	

		$('.btn-send-test-msg').click(function(e){
			e.preventDefault();
			$('.btn-send-test-msg').html('<i class="fa fa-refresh fa-spin fa-1x fa-fw"></i> Sending...');
			$('.btn-send-test-msg').prop('disabled', true);
			$('.modal-test-msg-response').html('');
			
			$.ajax({
				type: "POST",
				url:  '<?php echo base_url();?>messages/ajax_send_test_message',
				data: $('#msg-main-form').serialize(),
				success: function(ajaxdata) {
					var result = JSON.parse(ajaxdata);
					if(result.st == 1){
						$('.btn-send-test-msg').html('<i class="fa fa-check fa-1x"></i> Test Message Sent!');
						$('.modal-test-msg-response').html(result.html);
					}else{
						$('.btn-send-test-msg').html('<i class="fa fa-check fa-1x"></i> Test Message Failed!');
						$('.modal-test-msg-response').html(result.html);
					}
				}
			});
			
			$('.btn-send-test-msg').prop('disabled', false);
				
		});	
		
		$('.btn-modal-send-confirm').click(function(e){
			e.preventDefault();
			$('#msg-main-form').submit();
		});
		
		$('#messaging_alias').change(function(e){
		
			$.ajax({
				type: "POST",
				url:  '<?php echo base_url();?>messages/ajax_get_msg_template',
				data: $('#msg-main-form').serialize(),
				success: function(ajaxdata) {
					var result = JSON.parse(ajaxdata);
					if(result.st == 1){
						$('#msg_subject').val(result.data.messaging_subject);					
						$('#compose-message-form-body').html(result.html);
						quillcomposemsgmain.clipboard.dangerouslyPasteHTML(result.html, String = 'api');
					}
				}	
			}); 
		});
	
		instantiate_ajax_triggers();
			
	});
	
	function instantiate_ajax_triggers(){
		$('.ajax-trigger-group-scope').off('change');
		$('.ajax-trigger-affiliate').off('change');
		$('.ajax-trigger-region').off('change');
		$('.ajax-trigger-church').off('change');
		$('.ajax-trigger-status').off('change');
		
		$('.ajax-trigger-group-scope').change(function(e){
			run_gm_selector_ajax('status');
			clear_gm_recipients();
		});
		
		$('.ajax-trigger-affiliate').change(function(e){
			run_gm_selector_ajax('region');
			run_gm_selector_ajax('church');
			run_gm_selector_ajax('sender');
			clear_gm_recipients();
		});
		
		
		$('.ajax-trigger-region').change(function(e){
			run_gm_selector_ajax('church');
			run_gm_selector_ajax('sender');
			clear_gm_recipients();
		});
		
		$('.ajax-trigger-church').change(function(e){
			clear_gm_recipients();
		});
	}

	
	function run_gm_selector_ajax(gm_selector){
		$.ajax({
			type: "POST",
			url:  '<?php echo base_url();?>messages/ajax_get_msg_'+gm_selector+'_selector',
			data: $('#msg-group-compose-select-group').serialize(),
			success: function(ajaxdata) {
				var result = JSON.parse(ajaxdata);
				if(!!result.html){
					$('.ajax-target-id-'+gm_selector).html(result.html);
					//console.log('updating .ajax-target-id-'+gm_selector+': '+result.html);
					instantiate_ajax_triggers();
				}
			}	
		}); 
	}
	
	
	function clear_gm_recipients(){
		$('#ajax-target-msg-group-compose-select-recipients').html('<h5 class="text-center">You have changed your search criteria. Please press "Get People" button again to refresh this list.</h5>');
	}
</script>
<!-- /top navigation -->