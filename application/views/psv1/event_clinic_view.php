<!-- Header Section -->
<?php echo $site_header;

$random 		= rand(1,2);
$event_started	= false;

?>
<link href="<?php echo base_url();?>css/chat.css" rel="stylesheet" type="text/css">

	
<div class="col-sm-12 main container container-<?= $env_scope;?>">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3 top5 xs-top5">
			<div class="col-sm-4">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height:75px;">
			</div>
			<div class="col-sm-4">
				<h1 class="text-center"><?php echo $event['event_name'];?></h1>
				<h5 class="text-center"><?php echo date_offset('m/d/Y', $event['event_date_start']).'  '.date_offset('g:i A', $event['event_date_start']).' - '.date_offset('g:i A', $event['event_date_end']);?></h5>
			</div>
			<div class="col-sm-4">
				<div class="pull-right">
					<p class="top20 xs-top20">Welcome <?php echo $user['name_formatted'];?>!</p>
					<p><a href="<?= base_url('events/save_check_out?e='.$event['id_event_encoded'].'&p='.url_enc($user['id_people']).'&r='.url_enc($rsvp['id_rsvp']));?>" class="btn btn-default"><i class="fas fa-sign-out-alt"></i> Leave Clinic</a></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="column-left col-md-8 col-sm12 col-xs-12 top5 xs-top5">
		<div class="col-sm-12">
			<div class="ltp-video-wrapper border-light-gray" data-step="1" data-intro="Welcome to the advocate clinic! In this space you'll find all of the video content you will need to view during the event.">
				<div id="meet">
					<?php if(1==2){?>
						<iframe width="960" height="576" src="https://embed.restream.io/player/index.html?token=76bc3ee0087d31e8e1d108b2b1eabac7" frameborder="0"  allowfullscreen style="width: 100%"></iframe>
					<?php }else{?>
						<iframe width="1920" height="1080" src="https://www.youtube.com/embed/FvZ5H7DsYDw?autoplay=1&modestbranding=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?php }?>
				</div>
				<div id="poll" style="display: none;">
					<div class="col-sm-8 col-sm-offset-2 well top60">
						<div id="ajax-target-poll-wrapper">
							
						</div>
					</div>
				</div>
				<div id="response" style="display: none;">
					<div class="col-sm-6 col-sm-offset-3 well">
						<p class="text-center"><i class="fa fa-envelope fa-5x"></i></p>
						<h3 class="text-center">Please check your email</h3>
						<p class="">We just sent an email to <strong><em><?php echo $user['people_email_primary'];?></em></strong>. Please click the button in that email to fill out your response card on Promise Serves.</p>
						<p class="">Your email can take up to 2 minutes to be delivered. If you don't see the message after that time then please check your SPAM folder before you ask the event host for next steps.</p>
						<h4>Is Someone With You?</h4>
						<p class="">Did someone else sit through the entire clinic with you? If so, and they are ready to fill out their digital response card, then please enter their first name and email address in the box below.</p>
						<div class="container-fluid">
							<div class="form-group">
								<input type="text" placeholder="Additional attendee's first name only" class="form-control" name="name_secondary_attendee" id="name_secondary_attendee">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Additional attendee's email address" class="form-control" name="email_secondary_attendee" id="email_secondary_attendee">
								<div id="ajax-target-email-secondary-attendee-response" class="text-center"></div>
							</div>
							<div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
								<div class="form-group text-center ">
									<button class="btn btn-primary btn-submit-secondary-email form-control">Save Attendee Info</button>
								</div>
							</div>
							<div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
								<div class="form-group text-center">
									<button class="btn btn-default btn-switch-view form-control" onclick="ps_ve_switch_view('meet');"> <i class="fa fa-chevron-left"></i> Back to Event</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php if($view == 'moderator'){?>
	<div class="col-sm-12 col-xs-12 top10 xs-top10">
		<div class="col-sm-4 col-xs-6">
			<h3>Attendees <small>(<span id="ajax-target-clinic-attendees-count"></span>)</small></h3>
			<div id="ajax-target-clinic-attendees">
				
			</div>
		</div>
		<div class="col-sm-4 col-xs-6">
			<h3>Presenter Controls</h3>
			<div class="dropdown" style="float: none;">
					<button class="btn btn-default dropdown-toggle btn-block block" type="button" data-toggle="dropdown">
						Show Polls
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php 
							if(empty($polls)){
								echo '<li>No polls found!</li>';
							}else{
								foreach($polls as $cur_poll){
									echo '<li><a href="#" class="btn-open-poll" data-id="'.$cur_poll['id_poll'].'">Poll '.$cur_poll['id_poll'].' - '.ellipsify($cur_poll['name'], 35).'</a></li>';
								}
							}
						?>
					</ul>
				</div>
		</div>
		
	</div>
	<?php }else{?>
	<div class="col-sm-12 col-xs-12 top10 xs-top10" data-step="3" data-intro="This is where you will find your controls and the resources you will need for the event.">
				
			
	</div>
	<?php }?>
</div>
<div class="right-column col-md-4 col-sm-12 col-xs-12 top5 xs-top5" >	
	<div class="col-sm-12 col-xs-12 well" data-step="2" data-intro="You can ask a question here by typing it into the questions box and pressing enter. We'll answer these questions during specific Q&A times throughout the clinic.">
		<h3 class="text-center"><?php if($is_moderator){ echo 'Questions';}else{ echo 'Ask a Question';}?></h3>
		<div class="col-sm-10 col-sm-offset-1 well" >
			<div id="ps_ve_qa_wrapper">
				<div class="ps_ve_chat_area" id="ps_ve_qa_area" style="min-height: 200px;">
					<h4 class="text-center">Start of clinic questions</h4>
				</div>
			</div>
			
				
			<form id="send-message-area-qa" action="">
				<textarea id="ps_ve_qa_compose" maxlength="1000" placeholder="Type your question here" class="form-control"></textarea>
			</form>
			
		</div>
	</div>
	<hr />
	<div class="col-sm-12 col-xs-12 well" data-step="3" data-intro="You can engage in general discussion with other clinic attendees and presenters here.">
		<h3 class="text-center">Chat</h3>
		<div class="col-sm-10 col-sm-offset-1 well" >
			<div id="ps_ve_chat_wrapper">
				<div class="ps_ve_chat_area" id="ps_ve_chat_area" style="min-height: 200px;">
					<h4 class="text-center">Start of chat</h4>
				</div>
			</div>
			
				
			<form id="send-message-area" action="">
				<textarea id="ps_ve_chat_compose" maxlength="200" placeholder="Type your message here" class="form-control"></textarea>
			</form>
			
		</div>
	</div>
</div>


<div class="col-sm-12"></div>

<?php if($view == 'moderator'){?>
<div class="modal fade" id="modalconfirmsend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="vertical-alignment-helper">
		<div class="modal-dialog vertical-align-center">
			<div class="modal-content">
				<div class="modal-header" >
					<div class="col-xs-11 col-sm-11">
						<span id="modal-confirm-send-header"><h3>Confirm Email Send</h3></span>
					</div>
					<div class="col-xs-1 col-sm-1">
						<span class="text-center"><a href="#" data-dismiss="modal">X</a></span>
					</div>
				</div>
				<div class="modal-body" id="modal-confirm-send-body">
					<p class="text-center">Are you sure you wish to send the response email to all active event attendees?</p>
					<p class="text-center"><button class="btn btn-primary btn-send-response-emails">Yes, Send Emails</button>
				</div>
				<div class="modal-footer xs-top10">
					<button type="button" class="btn btn-default btn-modal-close center-block" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>

    
<!-- Footer Section -->

<?php echo $site_footer; ?>

<?php 
	$event_date = date_offset('Y/m/d H:i', ($event['event_date_start'] - $event['virtual_early_start']), $event['event_time_zone']);
	//$event_date = date_offset('Y/m/d H:i:s', time()+20, $event['event_time_zone']);
?>
<style>
.ps_ve_chat_area{
	min-height: 200px;
	max-height: 600px;
	overflow-y:scroll;
	background: #fff;
	border: 1px #ddd;
	border-radius: 8px;
}

#ps_ve_qa_area{
	min-height: 200px;
	max-height: 300px;
}

#ps_ve_chat_sender{
	margin-top: 10px;
}

.ps_ve_chat_area span{
    background-color: #ddd;
    padding: 4px;
    border-radius: 4px;
    line-height: 24px;
    margin: 15px;
}

.ps_ve_chat_area h4{
	color: #ccc;
}
	
.ps_ve_chat_area p{
	margin-top: 10px;
	margin-bottom: 10px;
	padding-top: 5px;
	padding-bottom: 10px;
	border-bottom: 1px solid #eee;
}

.chatdata{
	display: none;
}

.poll-active-options-wrapper li{
	padding: 10px;
	font-size: 18px;
	font-weight: 400;
}
.poll-active-options-wrapper li input{
	margin-right: 20px;
}

.ajax-target-poll-wrapper{
	background: url('<?php echo base_url();?>img/ve_clinic_bg_qa.jpg'); 
	background-size: cover;
}


.attendee-active{
	color: #a9ac36;
}

.attendee-inactive{
	color: #aaa;
}

</style>

<!-- <script type="text/javascript" src="https://player.vimeo.com/api/player.js"></script> -->
<script>
var current_view 					= 'meet';
var ps_ve_video_status				= 'paused';
var ps_ve_cmd						= {'ps_ve_control_video': ''};
var ps_ve_urls						= {'ps_ve_control_video': ''};
var ps_ve_ids						= {'ps_ve_control_video': '', 'ps_ve_get_poll_form': ''};
var ps_ve_cur_vid					= '';
var ps_ve_vid_is_paused				= '';
var ps_ve_video_cur_time			= 0;
var ps_ve_polls_completed			= { 1:null, 2:null, 3:null, 4:null, 5:null, 6:null, 7:null, 8:null, 9:null, 10:null};
var ps_ve_qa_last_line				= 0;
var ps_ve_chat_last_line			= 0;
var ps_ve_chat_nick 				= '<?php echo addslashes($user['nick']);?>';
var	ps_ve_chat_msg_sent;
var ps_ve_setup_complete			= false;
var ps_ve_response_emails_sent		= false;
var ps_ve_last_poll_completed		= 0;
var ps_ve_active_poll				= 0;



<?php 
	switch($view){
		case 'moderator':
?>
	
	$(document).ready(function() {
		
		ps_ve_set_active_button();
		ps_ve_get_attendee_list();
		
		
		setInterval(function () {
			ps_ve_moderator_check_in();
			ps_ve_chat_update();
		},2000);
		
		setInterval(function () {
			ps_ve_get_attendee_list();
		},10000);
		
		$('.btn-ps-ve-control').click(function(e){
			e.preventDefault();
			
			
			
			if($(this).hasClass('btn-ps-ve-meet')){
				ps_ve_jitsi_unmute_video();
				ps_ve_switch_view('meet');
				ps_ve_cmd['ps_ve_control_video'] 	= 'pause';
				ps_ve_control_video();
				ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&view=meet&cmd=pause&no_video=1');
			}
			if($(this).hasClass('btn-ps-ve-response')){
				ps_ve_switch_view('response');
				ps_ve_cmd['ps_ve_control_video'] 	= 'pause';
				ps_ve_control_video();
				ps_ve_jitsi_unmute_audio();
				ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&view=response&cmd=pause&no_video=1');
				if(!ps_ve_response_emails_sent){
					$('#modalconfirmsend').modal('show')
				}
			}
			if($(this).hasClass('btn-ps-ve-video')){
				ps_ve_switch_view('video');
				var vid	= $(this).data('id');
				ps_ve_ids['ps_ve_control_video']		= vid;
				ps_ve_urls['ps_ve_control_video']		= 'https://vimeo.com/'+vid;
				if(ps_ve_video_status == 'paused'){
					ps_ve_jitsi_mute_video();
					ps_ve_jitsi_mute_audio();
					ps_ve_cmd['ps_ve_control_video'] 	= 'play'
					ps_ve_control_video();
				}else{
					ps_ve_jitsi_mute_video();
					ps_ve_jitsi_unmute_audio();
					ps_ve_cmd['ps_ve_control_video'] 	= 'pause'
					ps_ve_control_video();
					
				}
			}else{
				ps_ve_set_active_button();	
			}
		});
		
				
		$('.btn-send-response-emails').click(function(e){
			e.preventDefault();
			ps_ve_response_email_send();
		});
		
		$('.btn-open-poll').click(function(e){
			e.preventDefault();
			ps_ve_open_poll($(this).data('id'));
		});
		
	});
	
	function ps_ve_get_attendee_list(){
		$.ajax({
			type: "GET",
			dataType: "json",
			url:  '<?php echo base_url();?>/events/ajax_ps_ve_get_attendees_list?e=<?php echo $event['id_event_encoded'];?>',
			headers: {
				 'Cache-Control': 'no-cache, no-store, must-revalidate', 
				 'Pragma': 'no-cache', 
				 'Expires': '0'
			   },
			cache: false,
			error: function (request, status, error) {
				console.log('error!!! '+error);
			},
			success: function(result) {
				$('#ajax-target-clinic-attendees').html(result.html);
				$('#ajax-target-clinic-attendees-count').html(result.data.total_active+' / '+result.data.total);
			}
		});
	}
	
	
	
	function instantiate_qa_fs_buttons(){
		$('.btn-qa-highlight').click(function(e){
			e.preventDefault();
			$.ajax({
				type: "POST",
				dataType: "json",
				url:  '<?php echo base_url();?>events/ajax_ps_ve_set_qa_highlight',
				data: {'id_qa': $(this).data('idqa'), 'e': '<?php echo $event['id_event_encoded'];?>'},
				error: function (request, status, error) {
					console.log('ERROR!!!: '+error);
				},
				success: function(result) {				
					console.log(result);
				}
			});
		});
	}

	function ps_ve_open_poll(id_poll){
		if(id_poll.length < 1){
			id_poll = ps_ve_ids['ps_ve_control_video'];
			
		}
		ps_ve_get_poll_form(id_poll);
		ps_ve_ids['ps_ve_control_video']	= id_poll;
		ps_ve_switch_view('poll');
		ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&cmd=show&view=poll&no_video=1&poll='+id_poll);
	}
	
	function ps_ve_close_poll(){
		ps_ve_switch_view('meet');
		ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&cmd=show&no_video=1&view=meet');
	}

	function ps_ve_response_email_send(){
		$('#modal-confirm-send-body').html('<p class="text-center"><i class="fas fa-sync fa-spin fa-3x"></i></p><h3 class="text-center">Just a moment...</h3>');
		$.ajax({
			type: "POST",
			url: document.location.origin+"/events/ajax_ve_send_response_links",
			data: {  
					'e' : '<?php echo $event['id_event_encoded'];?>'
				},
			dataType: "json",
			success: function(ajaxdata) {				
				var result = JSON.parse(JSON.stringify(ajaxdata));
				console.log(result);
				$('#modal-confirm-send-body').html(result.html);
			}
		});
	}

	
	function ps_ve_set_active_button(){
		ps_ve_reset_buttons();
		switch(current_view){

			case 'meet':
				$('.btn-ps-ve-'+current_view).removeClass('btn-default').addClass('btn-success');
				$('.ps-ve-control-meet-action').html('Showing');
				$('.ps-ve-control-response-action').html('Show');
				$('.btn-ps-ve-video span').html('<i class="fa fa-play"></i> Play');
			break;
			case 'response':
				$('.btn-ps-ve-'+current_view).removeClass('btn-default').addClass('btn-success');
				$('.ps-ve-control-meet-action').html('Show');
				$('.ps-ve-control-response-action').html('Showing');
				$('.btn-ps-ve-video span').html('<i class="fa fa-play"></i> Play');
			break;
			
		}
	}
	
	function ps_ve_set_event_cmds(cmd_data){
		$.ajax({
			type: "POST",
			url:  getBaseUrl()+'events/ajax_ps_ve_set_control',
			data: cmd_data,
			error: function (request, status, error) {
				console.log('ERROR!!!: '+error);
			},
			success: function(ajaxdata) {				
				var result = JSON.parse(JSON.stringify(ajaxdata));
				console.log(result);
				if(result.st == 1){
					
				}
			}
		});
	}
	
	function ps_ve_reset_buttons(){
		$('.btn-ps-ve-control').addClass('btn-default').removeClass('btn-success').removeClass('btn-warning');
	}
	
	function ps_ve_moderator_check_in(){
		if(ps_ve_video_status == 'playing'){
			var id = ps_ve_get_video_id();
			var cmd 	= 'pause';
			if(!!id){
				if(ps_ve_video_status == 'playing'){
					cmd = 'play';
				}
				ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&id='+id+'&url='+ps_ve_urls['ps_ve_control_video']+'&cmd='+cmd+'&view=video&time='+ps_ve_get_video_cur_time());
			}
		}
	}

<?php
		
		break;
		default: //attendee view
		
?>
	//For attendees who do not have QA highlight control return false
	function instantiate_qa_fs_buttons(){
		return false;
	}
	
	function startTour() {
		var tour = introJs()
		tour.setOption('tooltipPosition', 'auto');
		tour.setOption('positionPrecedence', ['left', 'right', 'top', 'bottom']);
		tour.start();
	}
		
$(document).ready(function() {
		
	setInterval(function () {
		ps_ve_check_in();
		ps_ve_chat_update();
		//ps_ve_jitsi_get_mute_status_audio();
	},2000);	
	
	setInterval(function () {
		ps_ve_update_check_in_status();
		
	},10000);	
	
	setInterval(function () {
		ps_ve_qa_update();
	},5000);	
	
	
	startTour();
	
});


<?php 
	break;
	}//end view switch
?>

function ps_ve_submit_poll_response(id_poll){
	$.ajax({
		type: "POST",
		cache: 'false',
		url:  '<?php echo base_url();?>events/ajax_ve_save_poll_response',
		data: {p: '<?php echo url_enc($user['id_people']);?>',
				poll: id_poll,
				val: $('input[name=poll_val_'+id_poll+']:checked').val(),
				e: '<?php echo $event['id_event_encoded'];?>'
		},	
		error: function (request, status, error) {
			console.log('error!!! '+error);
		},
		success: function(ajaxdata) {
			var result 	= JSON.parse(ajaxdata);		
			$.unblockUI();
			if(result.st < 1){
				//$('#ajax-target-email-secondary-attendee-response').html('<span class="danger text-center">'+result.msg_html+'</span>');
			}else{
				ps_ve_last_poll_completed 		= id_poll;
				ps_ve_polls_completed[id_poll]	= 1;
				ps_ve_last_poll_completed		= id_poll;
				ps_ve_switch_view('meet');
			}
		}
	});	
}

function ps_ve_check_in(){
	var url = getBaseUrl()+'json/ps_ve_control_<?php echo $event['id_event'];?>.json';
	//var url = getBaseUrl()+'events/ajax_event_checkin?p=<?php echo $user['id_people'];?>&e=<?php echo $event['id_event'];?>';
	//console.log(url);
	$.ajax({
		type: "GET",
		url:  url,
		headers: {
			 'Cache-Control': 'no-cache, no-store, must-revalidate', 
			 'Pragma': 'no-cache', 
			 'Expires': '0'
		   },
		cache: false,
		error: function (request, status, error) {
			console.log('error!!! '+error);
		},
		success: function(ajaxdata) {
			var result 		= JSON.parse(JSON.stringify(ajaxdata));		
			ps_ve_cmd_cur	= ps_ve_cmd;
			ps_ve_cmd		= result.cmd;
			ps_ve_urls		= result.urls;
			ps_ve_ids		= result.ids;
			if(!!(result.run_js) && result.run_js.length > 0){
				$.each(result.run_js, function(index, cur_run) {
					if(!!cur_run){
						window[cur_run]();
					}
				});
			}
			//Bypass polls because other checks need to happen to see if user has completed the poll first. The RUN_JS for polls will execute the view switch if it applies
			if(result.cur_view != 'poll'){
				ps_ve_switch_view(result.cur_view);
			}
		}
	});	
}

function ps_ve_update_check_in_status(){
	var url = getBaseUrl()+'events/ps_ve_update_check_in_status/?e=<?php echo $event['id_event_encoded'].'&p='.url_enc($user['id_people']).'&r='.url_enc($rsvp['id_rsvp']);?>';
	//console.log(url);
	
	$.ajax({
		type: "GET",
		url:  url,
		headers: {
			 'Cache-Control': 'no-cache, no-store, must-revalidate', 
			 'Pragma': 'no-cache', 
			 'Expires': '0'
		   },
		cache: false,
		error: function (request, status, error) {
			console.log('error!!! '+error);
		},
		success: function(ajaxdata) {
			var result 	= JSON.parse(JSON.stringify(ajaxdata));		
		}
	});	
}

function ps_ve_switch_view(sel_view){
	if(sel_view == null){
		return;
	}
	if(sel_view == current_view){
		return;
	}
	$('#'+current_view).fadeToggle(600);
	$('#'+sel_view).fadeToggle(600);
	current_view = sel_view;
	return;
}



function ps_ve_update_presenter_icons(type, mode){
	switch(type){
		case 'audio':		
			if(mode == 'muted'){
				$('.mute-status-audio').html('<i class="fas fa-microphone-slash fa-2x"></i>');
			}
			if(mode == 'unmuted'){
				$('.mute-status-audio').html('<i class="fas fa-microphone fa-2x"></i>');
			}
		break;
		case 'video':		
			if(mode == 'muted'){
				$('.mute-status-video').html('<i class="fas fa-video-slash fa-2x"></i>');
			}
			if(mode == 'unmuted'){
				$('.mute-status-video').html('<i class="fas fa-video fa-2x"></i>');
			}
		break;
	}
}


function ps_ve_submit_secondary_attendee_email(){
	$('#ajax-target-email-secondary-attendee-response').html('');
	show_block_ui();
	$.ajax({
		type: "POST",
		cache: 'false',
		url:  '<?php echo base_url();?>/events/ajax_ve_add_secondary_attendee',
		data: 'p=<?php echo url_enc($user['id_people']);?>&name_first='+$('#name_secondary_attendee').val()+'&email='+$('#email_secondary_attendee').val()+'&e=<?php echo $event['id_event_encoded'];?>',
		error: function (request, status, error) {
			console.log('error!!! '+error);
		},
		success: function(ajaxdata) {
			var result 	= JSON.parse(ajaxdata);		
			$.unblockUI();
			if(result.st < 1){
				$('#ajax-target-email-secondary-attendee-response').html('<span class="danger text-center">'+result.msg_html+'</span>');
			}else{
				$('#ajax-target-email-secondary-attendee-response').html('<span class=""><strong>'+result.msg_html+'</strong></span><br />If you have additional attendees present, you may enter their name and email address as well.');	
				$('#email_secondary_attendee').val('');
				$('#name_secondary_attendee').val('');
			}
		}
	});
}


function ps_ve_chat_update(){
	
	$.ajax({
        type: "GET",
        url: document.location.origin+"/chat/ajax_update_chat_window",
        data: {  
            'state': ps_ve_chat_last_line,
            'e' : '<?php echo $event['id_event_encoded'];?>',
            },
        dataType: "json",
        cache: false,
        success: function(data) {
        
            if (data.text != null) {
				$('.ps_ve_chat_my_last_message').remove();
                for (var i = 0; i < data.text.length; i++) { 
					$('#ps_ve_chat_area').append($("<p>"+ data.text[i] +"</p>"));
					document.getElementById('ps_ve_chat_area').scrollTop = document.getElementById('ps_ve_chat_area').scrollHeight;
				}
            
				
			}  
        
			ps_ve_chat_last_line = data.state;
        
        },
    });
}

function ps_ve_qa_update(){
	
	$.ajax({
        type: "GET",
        url: document.location.origin+"/chat/ajax_update_qa_window",
        data: {  
            'state': ps_ve_qa_last_line,
            'e' : '<?php echo $event['id_event_encoded'];?>',
			'moderator' : '<?php if($is_moderator){ echo 1; }else{ echo '';}?>'
            },
        dataType: "json",
        cache: false,
        success: function(data) {
        
            if (data.text != null) {
				$('.ps_ve_qa_my_last_message').remove();
                for (var i = 0; i < data.text.length; i++) {
					$('#ps_ve_qa_area').append($("<p>"+ data.text[i] +"</p>"));
					document.getElementById('ps_ve_qa_area').scrollTop = document.getElementById('ps_ve_qa_area').scrollHeight;
					instantiate_qa_fs_buttons();
				}
            
				
			}  
        
			ps_ve_qa_last_line = data.state;
        
        },
    });
}

function ps_ve_chat_send(message){
	$('#ps_ve_chat_area').append($("<p class='ps_ve_chat_my_last_message'><span>"+ps_ve_chat_nick+"</span> "+message+"</p>"));
	document.getElementById('ps_ve_chat_area').scrollTop = document.getElementById('ps_ve_chat_area').scrollHeight
	$.ajax({
	   type: "POST",
	   url: document.location.origin+"/chat/ajax_send_chat",
	   data: {  
				'function': 'send',
				'message': message,
				'nickname': ps_ve_chat_nick,
				'p': '<?php echo url_enc($user['id_people']);?>',
				'e' : '<?php echo $event['id_event_encoded'];?>'
				},
	   dataType: "json",
	   success: function(ajaxdata) {
			var result 	= JSON.parse(ajaxdata);	
			
	   },
	});
}

function ps_ve_qa_send(message){
	$('#ps_ve_qa_area').append($("<p class='ps_ve_qa_my_last_message'><span>"+ps_ve_chat_nick+"</span> "+message+"</p>"));
	document.getElementById('ps_ve_qa_area').scrollTop = document.getElementById('ps_ve_qa_area').scrollHeight
	$.ajax({
	   type: "POST",
	   url: document.location.origin+"/chat/ajax_send_chat",
	   data: {  
				'function': 'send',
				'message': message,
				'nickname': ps_ve_chat_nick,
				'p': '<?php echo url_enc($user['id_people']);?>',
				'e' : '<?php echo $event['id_event_encoded'];?>',
				'mode' : 'qa'
				},
	   dataType: "json",
	   success: function(ajaxdata) {
			var result 	= JSON.parse(ajaxdata);	
			
	   },
	});
}

function ps_ve_user_setup(){
	if(!ps_ve_setup_complete){
		
	}
}

function ps_ve_get_poll_form(id_poll){
	var can_run = false;
	if(id_poll == null){
		id_poll = ps_ve_ids['ps_ve_get_poll_form'];
	}
	
	if(current_view != 'poll'){
		can_run = true;
	}
	
	if(!can_run && current_view == 'poll' && id_poll != ps_ve_active_poll){
		can_run = true;
	}

	if(ps_ve_polls_completed[id_poll] == 1){
		can_run = false;
	}
	
	console.log(ps_ve_polls_completed[id_poll]);
	
	//console.log(current_view+' '+id_poll+' '+ps_ve_active_poll+' '+ps_ve_polls_completed[id_poll]);
	
	if(can_run){
			//console.log('Uupdating');
		$.ajax({
			type: "GET",
			url: "<?php echo base_url();?>events/ajax_ve_make_poll_form",
			data: {  
				'poll': id_poll,
				'e' : '<?php echo $event['id_event_encoded'];?>',
				'moderator' : '<?php if($is_moderator){ echo 1; }else{ echo '';}?>'
				},
			dataType: "json",
			cache: false,
			success: function(data) {
			
				if (data.html != null) {
					$('#ajax-target-poll-wrapper').html(data.html);
					ps_ve_switch_view('poll');
					ps_ve_active_poll	= id_poll;
				}  
			
			},
		});
	}else{
		//console.log('not updating');
	}
	
	return;
	
}



function ps_ve_close_session(){
	$.ajax({
	  type: 'POST',
	  async: false,
	  url: '<?php echo base_url();?>events/ajax_ve_end_user_session',
	  data: {	'p': '<?php echo url_enc($user['id_people']);?>',
				'e' : '<?php echo $event['id_event_encoded'];?>',
				'r' : '<?php echo url_enc($rsvp['id_rsvp']);?>'
			}
	});
}

$(document).ready(function() {
	
	$('.btn-submit-secondary-email').click(function(e){
		e.preventDefault();
		ps_ve_submit_secondary_attendee_email();	
	});
	
	ps_ve_chat_update();
	ps_ve_qa_update();
	
	$("#ps_ve_chat_compose").keydown(function(event) {  
    
        var key = event.which;  
   
         // all keys including return 
         if (key >= 33) {  
         
             var maxLength = $(this).attr("maxlength");  
             var length = this.value.length;  
             
             if (length >= maxLength) {  
                 event.preventDefault();  
             }  
         }  
	});
			 
	$('#ps_ve_chat_compose').keyup(function(e) {	
						 
		if (e.keyCode == 13) { 
		
			var text = $(this).val();
			var maxLength = $(this).attr("maxlength");  
			var length = text.length; 
			 
			if (length <= maxLength + 1) {  
				ps_ve_chat_send(text);	
				$(this).val("");
			} else {
				$(this).val(text.substring(0, maxLength));
			}	
		
		}
		
	});
	
	$("#ps_ve_qa_compose").keydown(function(event) {  
    
        var key = event.which;  
   
         // all keys including return 
         if (key >= 33) {  
         
             var maxLength = $(this).attr("maxlength");  
             var length = this.value.length;  
             
             if (length >= maxLength) {  
                 event.preventDefault();  
             }  
         }  
	});
			 
	$('#ps_ve_qa_compose').keyup(function(e) {	
						 
		if (e.keyCode == 13) { 
		
			var text = $(this).val();
			var maxLength = $(this).attr("maxlength");  
			var length = text.length; 
			 
			if (length <= maxLength + 1) {  
				ps_ve_qa_send(text);	
				$(this).val("");
			} else {
				$(this).val(text.substring(0, maxLength));
			}	
		
		}
		
	});
});



</script>

</body>
</html>