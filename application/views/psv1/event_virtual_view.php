<!-- Header Section -->
<?php echo $site_header;

$random 		= rand(1,2);
$event_started	= false;
//dd($event);

//Double check that the event isn't already running
//$redirect = 'google.com';

/*
if(time() > ($event['event_date_start'] - $event['virtual_early_start']) && (empty($event['event_date_end']) || $event['event_date_end'] > time()) && !empty($redirect)){

	$event_started = true;
}elseif(time() > ($event['event_date_start'] - $event['virtual_early_start']) && (!empty($event['event_date_end']) && $event['event_date_end'] < time())){
	redirect(base_url().'events/virtual_event_ended/?e='.$event['id_event']);
}
*/
?>
<link href="<?php echo base_url();?>css/chat.css" rel="stylesheet" type="text/css">

	
<div class="col-sm-12 main container container-<?= $env_scope;?>">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 top5 xs-top5">
			<div class="col-sm-6">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height:75px;">
			</div>
			<div class="col-sm-6">
				<h1 class="text-center"><?php echo $event['event_name'];?></h1>
				<h5 class="text-center"><?php echo date_offset('m/d/Y', $event['event_date_start']).'  '.date_offset('g:i A', $event['event_date_start']).' - '.date_offset('g:i A', $event['event_date_end']);?></h5>
			</div>
		</div>
	</div>
	<div class="column-left col-md-8 col-sm12 col-xs-12 top5 xs-top5">
		<div class="col-sm-12">
			<div class="ltp-video-wrapper border-light-gray" data-step="1" data-intro="Welcome to the event! In this space you'll find all of the video content you will need to view during the event.">
				<div id="meet"></div>
				<div id="video" style="display: none;">
				</div>
				<div id="response" style="display: none;">
					<div class="col-sm-6 col-sm-offset-3 well">
						<p class="text-center"><i class="fa fa-envelope fa-5x"></i></p>
						<h3 class="text-center">Please check your email</h3>
						<p class="">We just sent an email to <strong><em><?php echo $user['people_email_primary'];?></em></strong>. Please click the button in that email to fill out your response card on Promise Serves.</p>
						<p class="">Your email can take up to 2 minutes to be delivered. If you don't see the message after that time then please check your SPAM folder before you ask the event host for next steps.</p>
						<h4>Is Someone With You?</h4>
						<p class="">Did someone else sit through the entire orientation event with you? If so, and they are ready to fill out their digital response card, then please enter their first name and email address in the box below.</p>
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
		<div class="col-sm-6 col-xs-6">
			<h3>Moderator Controls</h3>
		</div>
		<div class="col-sm-6 col-xs-6">
			<div class="well text-center">
				<strong>Presentation Status</strong>&nbsp;&nbsp;<span class="mute-status-audio"><i class="fas fa-microphone-slash fa-2x"></i></span></span>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="mute-status-video"><i class="fas fa-video-slash fa-2x"></i></span>
			</div>
		</div>
		<div class="col-sm-3">
			<a href="#" target="_blank" class="btn btn-default btn-ps-ve-control btn-ps-ve-meet btn-block"><i class="fa fa-camera"></i> <span class="ps-ve-control-meet-action">Show</span> Cameras</a>
		</div>
		<div class="col-sm-3">
			<a href="#" target="_blank" class="btn btn-default btn-ps-ve-control btn-ps-ve-video btn-block" data-id="285148314" data-urlid="285148314/95ac0feb62" id="btn-ps-ve-control-285148314" data-backupurl="https://fam.care/ccvov2?e=<?= $event['id_event_encoded'];?>">
				<span class="ps-ve-control-video-action"><i class="fa fa-play"></i> Play</span> Video 1
			</a>
		</div>
		<div class="col-sm-3">
			<a href="#" target="_blank" class="btn btn-default btn-ps-ve-control btn-ps-ve-video btn-block" data-id="285629528" data-urlid="285629528/9ffc44d255" id="btn-ps-ve-control-285629528" data-backupurl="https://fam.care/ccvov2?e=<?= $event['id_event_encoded'];?>"><span class="ps-ve-control-video-action"><i class="fa fa-play"></i> Play</span> Video 2</a>
		</div>
		<div class="col-sm-3">
			<a href="#" target="_blank" class="btn btn-default btn-ps-ve-control btn-ps-ve-response btn-block"><i class="fa fa-check"></i> <span class="ps-ve-control-response-action">Show</span> Response Card</a>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-8 col-sm-offset-4">
				<h4>Backup Links</h4>
				<ul>
					<li><strong>Video 1 Backup Link:</strong> https://fam.care/ccvov1?e=<?php echo $event['id_event'];?></li>
					<li><strong>Video 2 Backup Link:</strong> https://fam.care/ccvov2?e=<?php echo $event['id_event'];?></li>
					<li><strong>Response / Sign Up Link:</strong> https://fam.care/?er=<?php echo $event['id_event'];?></li>
				</ul>
			</div>
		</div>
		
	</div>
	<?php }else{?>
	<div class="col-sm-12 col-xs-12 top10 xs-top10" data-step="3" data-intro="This is where you will find your controls and the resources you will need for the event.">
		<h3>Controls & Resources - <?php echo $user['name_first'].' '.$this->website_model->display_format_people_name_last($user);?></h3>
		<div class="col-sm-6">
		<div class="well text-center">
				<strong>Your Status</strong>&nbsp;&nbsp;
				<button class="btn btn-default" disabled>
					<span class="mute-status-audio"><i class="fas fa-microphone-slash fa-2x"></i></span>
				</button>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="btn btn-default" onclick="ps_ve_jitsi_toggle_video();">
					<span class="mute-status-video"><i class="fas fa-video-slash fa-2x"></i></span>
				</button>
				&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="btn btn-default" title="Sign Out" href="<?php echo base_url().'events/save_check_out?e='.$event['id_event_encoded'].'&p='.url_enc($user['id_people']).'&r='.url_enc($rsvp['id_rsvp']);?>">
					<i class="fas fa-sign-out-alt fa-2x"></i>
				</a>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well text-center">
				<div class="dropdown" style="float: none;">
					<button class="btn btn-default dropdown-toggle btn-block block" type="button" data-toggle="dropdown">
						Download Resources
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/handout-roles-in-a-care-community.2019.pdf" target="_blank"><i class="fa fa-download"></i> Care Community Roles</a></li>
						<li><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/handout-connecting-when-correcting.2019.pdf" target="_blank"><i class="fa fa-download"></i> Connecting While Correcting</a></li>
						<li><a href="https://www.livethepromise.org/wp-content/uploads/2019/01/handout-connecting-when-correcting.2019.pdf" target="_blank"><i class="fa fa-download"></i> Georgia RPPS Guidelines</a></li>
					</ul>
				</div>
			
			</div>
		</div>
		
		<!-- <div class="col-sm-12 backup-links-video-285148314" style="display:none;">
			<h3>Having trouble watching the video?</h3>
			<p><a href="https://fam.care/ccvov1?e=<?php echo $event['id_event'];?>" class="btn btn-default"><i class="fa fa-play"></i> Play video in new window</a></p>
		</div>
		<div class="col-sm-12 backup-links-video-285629528" style="display:none;">
			<h3>Having trouble watching the video?</h3>
			<p ><a href="https://fam.care/ccvov2?e=<?php echo $event['id_event'];?>" class="btn btn-default"><i class="fa fa-play"></i> Play video in new window</a></p>
		</div>
		<div class="col-sm-12 backup-links-response" style="display:none;">
			<h3>Having trouble responding?</h3>
			<p ><a href="https://fam.care/e<?php echo $event['id_event'];?>" class="btn btn-default"><i class="fa fa-check"></i> Respond in new window</a></p>
		</div>
		-->
		
			
	</div>
	<?php }?>
</div>
<div class="right-column col-md-4 col-sm-12 col-xs-12 top5 xs-top5" data-step="2" data-intro="You can ask a question here by typing it into the chat box and pressing enter.">	
	<div class="col-sm-12 col-xs-12 well">
		<h3 class="text-center">Chat</h3>
		<div class="col-sm-10 col-sm-offset-1 well" >
			<div id="ps_ve_chat_wrapper">
				<div id="ps_ve_chat_area" style="min-height: 200px;">
					<h4 class="text-center">Start of chat</h4>
				</div>
			</div>
			
				
			<form id="send-message-area" action="">
				<textarea id="ps_ve_chat_compose" maxlength="100" placeholder="Type your message here" class="form-control"></textarea>
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
#ps_ve_chat_area{
	min-height: 200px;
	max-height: 600px;
	overflow-y:scroll;
	background: #fff;
	border: 1px #ddd;
	border-radius: 8px;
	
}

#ps_ve_chat_sender{
	margin-top: 10px;
}
#ps_ve_chat_area span{
    background-color: #ddd;
    padding: 4px;
    border-radius: 4px;
    line-height: 24px;
    margin: 15px;
}

#ps_ve_chat_area h4{
	color: #ccc;
}
	
#ps_ve_chat_area p{
	margin-top: 10px;
	margin-bottom: 10px;
	padding-top: 5px;
	padding-bottom: 10px;
	border-bottom: 1px solid #eee;
}

.chatdata{
	display: none;
}
</style>
<!--<script src="https://meet-us-east.promiseserves.org/external_api.js"></script>-->
<script src="https://meet.jit.si/external_api.js"></script>
<script src="<?php echo base_url();?>js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url();?>js/moment-timezone.js"></script>
<script type="text/javascript" src="https://player.vimeo.com/api/player.js"></script>
<script>
var current_view 					= 'meet';
var ps_ve_video_status				= 'paused';
var ps_ve_cmd						= {'ps_ve_control_video': ''};
var ps_ve_urls						= {'ps_ve_control_video': ''};
var ps_ve_ids						= {'ps_ve_control_video': ''};
var ps_ve_cur_vid					= '';
var ps_ve_vid_is_paused				= '';
var ps_ve_video_cur_time			= 0;
var ps_ve_jitsi_status_mute_video	= '';
var ps_ve_jitsi_status_mute_audio	= '';
var ps_ve_chat_last_line			= 0;
var ps_ve_chat_nick 				= '<?php echo addslashes($user['nick']);?>';
var	ps_ve_chat_msg_sent;
var ps_ve_setup_complete			= false;
var ps_ve_response_emails_sent		= false;
var ps_ve_video_in_sync				= false;
<?php 
	if($view == 'moderator'){ 
		echo "var vimeoplayer_options		= {url: 'https://vimeo.com/285629528/9ffc44d255', width: '640'};";
	}else{
		echo "var vimeoplayer_options		= {url: 'https://vimeo.com/285629528/9ffc44d255', width: '640', controls: 'false'};";
	}
?>
var vimeoplayer				= new Vimeo.Player('video', vimeoplayer_options);


<?php 
	switch($view){
		case 'moderator':
?>
	ps_ve_jitsi_status_mute_audio	= 'unmuted';
	var vimeo_on_time_update = function(data) {
		ps_ve_moderator_check_in();
	};
	
	var vimeo_on_play = function(data) {
		ps_ve_video_status	= 'playing';
		ps_ve_reset_buttons();
		ps_ve_jitsi_mute_video();
		ps_ve_jitsi_mute_audio();
		var id = ps_ve_get_video_id();
		if(!!id){
			$('.btn-ps-ve-video span').html('<i class="fa fa-play"></i> Play');
			$('#btn-ps-ve-control-'+id+' span').html('<i class="fa fa-pause"></i> Pause');
			$('#btn-ps-ve-control-'+id).removeClass('btn-default').addClass('btn-success');
			ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&id='+id+'&url='+ps_ve_urls['ps_ve_control_video']+'&cmd=play&view=video&time='+ps_ve_get_video_cur_time());
			if(!!$('#btn-ps-ve-control-'+id).data('backupurl')){
				if($('#btn-ps-ve-control-'+id).data('backupurl').length > 1){
					ps_ve_chat_send('If you are having trouble watching the video please click this link: '+$('#btn-ps-ve-control-'+id).data('backupurl'));
					ps_ve_chat_msg_sent = $('#btn-ps-ve-control-'+id).data('backupurl');
				}
			}
			
		}
	};
	
	var vimeo_on_pause = function(data) {
		ps_ve_video_status	= 'paused';
		ps_ve_reset_buttons();
		ps_ve_jitsi_unmute_audio();
		var id = ps_ve_get_video_id();
		if(!!id){
			$('.btn-ps-ve-video span').html('<i class="fa fa-play"></i> Play');
			$('#btn-ps-ve-control-'+id).removeClass('btn-default').removeClass('btn-success').addClass('btn-warning');
			ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&id='+id+'&url='+ps_ve_urls['ps_ve_control_video']+'&cmd=pause&view='+current_view+'&time='+ps_ve_get_video_cur_time());
		}
	};

	$(document).ready(function() {
		
		ps_ve_set_active_button();
		
		vimeoplayer.on('play', vimeo_on_play);
		vimeoplayer.on('pause', vimeo_on_pause);
		vimeoplayer.on('timeupdate ', vimeo_on_time_update);
		
		setInterval(function () {
			ps_ve_moderator_check_in();
			ps_ve_chat_update();
		},2000);
		
		$('.btn-ps-ve-control').click(function(e){
			e.preventDefault();
			ps_ve_jitsi_get_mute_status_video();
			ps_ve_jitsi_get_mute_status_audio();
			
			if($(this).hasClass('btn-ps-ve-meet')){
				ps_ve_jitsi_unmute_video();
				ps_ve_switch_view('meet');
				ps_ve_cmd['ps_ve_control_video'] 	= 'pause';
				ps_ve_control_video();
				ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&view=meet&cmd=pause');
			}
			if($(this).hasClass('btn-ps-ve-response')){
				ps_ve_switch_view('response');
				ps_ve_cmd['ps_ve_control_video'] 	= 'pause';
				ps_ve_control_video();
				ps_ve_jitsi_unmute_audio();
				ps_ve_set_event_cmds('e=<?php echo $event['id_event_encoded'];?>&view=response&cmd=pause');
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
		
	});


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
			case 'video':
			/*
				var id = ps_ve_get_video_id();
				
				if(!!id){
					$('.btn-ps-ve-video span').html('<i class="fa fa-play"></i> Play');
					$('#btn-ps-ve-control-'+id).removeClass('btn-default').addClass('btn-success');
					if(ps_ve_get_video_is_paused() == 'paused'){
						$('#btn-ps-ve-control-'+id+' span').html('<i class="fa fa-play"></i> Play');
					}else{
						$('#btn-ps-ve-control-'+id+' span').html('<i class="fa fa-pause"></i> Pause');
					}
				}
			*/
				return;
			break;
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
	
	
	
	startTour();
	
});


<?php 
	break;
	}//end view switch
?>

function ps_ve_update_player(){

	if(!!ps_ve_ids['ps_ve_control_video']){
		//var vimeoplayer			= new Vimeo.Player('video', {url: ps_ve_urls['ps_ve_control_video'], width: '640'});
		if(ps_ve_ids['ps_ve_control_video'] != ps_ve_cur_vid){
			vimeoplayer.unload();
			ps_ve_cur_vid			= ps_ve_ids['ps_ve_control_video'];
			vimeoplayer.loadVideo(ps_ve_ids['ps_ve_control_video']).then(function(){vimeoplayer.play();});
			
			return 'vid_new';
		}
	}
	
	return 'vid_existing';
}

function ps_ve_control_video(){

	
	var vplayer = ps_ve_update_player();
	switch(ps_ve_cmd['ps_ve_control_video']){
		case 'play':
			if(!!ps_ve_ids['ps_ve_control_video']){
				if(vplayer != 'vid_new'){
					vimeoplayer.play();
					$('.backup-links-video-'+ps_ve_ids['ps_ve_control_video']).fadeIn(600);
				}
				ps_ve_video_status	= 'playing';
				ps_ve_jitsi_mute_audio();
			}
		break;
		case 'pause':
		case 'stop':
			vimeoplayer.pause();
			ps_ve_video_status	= 'paused';
			
		break;
	}
}

function ps_ve_check_in(){
	var url = getBaseUrl()+'json/ps_ve_control_<?php echo $event['id_event'];?>.json';
	//var url = getBaseUrl()+'events/ajax_event_checkin?p=<?php echo $user['id_people'];?>&e=<?php echo $event['id_event'];?>';
	
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
					console.log(cur_run+' '+ps_ve_cmd['ps_ve_control_video']+' '+ps_ve_cmd_cur['ps_ve_control_video']);
					if(!!cur_run){
						window[cur_run]();
						if(cur_run == 'ps_ve_control_video' && ps_ve_cmd['ps_ve_control_video'] == 'play' && ps_ve_cmd_cur['ps_ve_control_video'] == 'pause'){
							ps_ve_video_in_sync = false;
						}
					}
				});
			}
			ps_ve_switch_view(result.cur_view);
			//ps_ve_video_sync(result.cur_time, ps_ve_cmd, result.date_mod, result.date_cur);
			if(!ps_ve_video_in_sync){
				ps_ve_video_sync(result.cur_time, ps_ve_cmd);
			}
		}
	});	
}

function ps_ve_update_check_in_status(){
	var url = getBaseUrl()+'events/ps_ve_update_check_in_status/?e=<?php echo $event['id_event_encoded'].'&p='.url_enc($user['id_people']).'&r='.url_enc($rsvp['id_rsvp']);?>';
	
	
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
	if(sel_view == current_view){
		return;
	}
	$('#'+current_view).fadeToggle(600);
	$('#'+sel_view).fadeToggle(600);
	current_view = sel_view;
	
	return;
}

function ps_ve_video_sync(time_master, ps_ve_cmd){
	var diff		= Number(0);
	var mod_diff	= Number(0);
	var time_slave 	= ps_ve_get_video_cur_time();
	time_master		= Number(time_master);
	time_slave		= Number(time_slave);
	//date_mod		= Number(date_mod);
	//date_mod		= Number(date_cur);
	//if(date_cur - date_mod < 8){	
		if(time_master > time_slave){
			diff 		= time_master - time_slave;
		}else{
			diff 		= time_slave - time_master;
		}
		
		if(current_view == 'video'){
		
			if(diff > 10){
				$.blockUI({  
					css: { width: '40%', 
						left: '30%', 
						border: 'none',  
						backgroundColor:'transparent', 
						color: '#fff'
						}, 
					overlayCSS:  {color: '#fff'}, 
					message: '<p class="text-center"><i class="fas fa-sync fa-spin fa-3x"></i></p><h3 class="text-center">One moment, the video is catching up...</h3>' 
				});
				vimeoplayer.setCurrentTime(time_master);
				if(ps_ve_cmd == 'play'){
					vimeoplayer.play();
				}
				//console.log('TIME DIFFERENCE!!!!: '+diff+' '+time_master+' '+time_slave);
			}else{
				//console.log('CLOSE ENOUGH! '+diff+' '+time_master+' '+time_slave);
				ps_ve_video_in_sync	= true;
				$.unblockUI();
			}
		}
	//}
}

function ps_ve_get_video_id(){
	var val = vimeoplayer.getVideoId().then(function(id){
		ps_ve_cur_vid = id;
	});
	
	return ps_ve_cur_vid;
}

function ps_ve_get_video_is_paused(){
	var val = vimeoplayer.getPaused().then(function(paused){
		ps_ve_vid_is_paused = paused;
		if(paused){
			ps_ve_video_status = 'paused';
			return 'paused';
		}else{
			ps_ve_video_status = 'playing';
			return 'playing';
		}
	});
	return ps_ve_video_status;
}

function ps_ve_get_video_cur_time(){
	var val = vimeoplayer.getCurrentTime().then(function(seconds) {
		ps_ve_video_cur_time	= seconds;
	});
	return ps_ve_video_cur_time;
}

function ps_ve_jitsi_get_mute_status_audio(){
	jitsiapi.isAudioMuted().then(function(muted){
		if(!muted){
			ps_ve_jitsi_status_mute_audio	= 'unmuted';
			ps_ve_update_presenter_icons('audio', 'unmuted');
		}else{
			ps_ve_jitsi_status_mute_audio	= 'muted';
			ps_ve_update_presenter_icons('audio', 'muted');
		}
	});
	return ps_ve_jitsi_status_mute_audio;
}

function ps_ve_jitsi_get_mute_status_video(){
	jitsiapi.isVideoMuted().then(function(muted){
		if(!muted){
			ps_ve_jitsi_status_mute_video	= 'unmuted';
			ps_ve_update_presenter_icons('video', 'unmuted');
		}else{
			ps_ve_jitsi_status_mute_video	= 'muted';
			ps_ve_update_presenter_icons('video', 'muted');
		}
	});
	
	return ps_ve_jitsi_status_mute_video;
}

function ps_ve_jitsi_mute_audio(){
	jitsiapi.isAudioMuted().then(function(muted){
		if(!muted){
			jitsiapi.executeCommand('toggleAudio');
			ps_ve_jitsi_status_mute_audio		= 'muted';
			ps_ve_update_presenter_icons('audio', 'muted');
		}else{
			ps_ve_jitsi_status_mute_audio		= 'unmuted';
		}
	});
}

function ps_ve_jitsi_unmute_audio(){
	jitsiapi.isAudioMuted().then(function(muted){
		if(muted){
			jitsiapi.executeCommand('toggleAudio');
			ps_ve_jitsi_status_mute_audio	= 'unmuted';
			ps_ve_update_presenter_icons('audio', 'unmuted');
		}else{
			ps_ve_jitsi_status_mute_audio	= 'muted';
		}
	});
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

function ps_ve_jitsi_mute_video(){
	jitsiapi.isVideoMuted().then(function(muted){
		if(!muted){
			jitsiapi.executeCommand('toggleVideo');
			ps_ve_jitsi_status_mute_video	= 'muted';
			ps_ve_update_presenter_icons('video', 'muted');
		}else{
			ps_ve_jitsi_status_mute_video	= 'unmuted';
			//ps_ve_update_presenter_icons('video', 'unmuted');
		}
	});
}

function ps_ve_jitsi_toggle_video(){
	jitsiapi.executeCommand('toggleVideo');
	ps_ve_jitsi_get_mute_status_video();
}

function ps_ve_jitsi_unmute_video(){
	jitsiapi.isVideoMuted().then(function(muted){
		if(muted){
			jitsiapi.executeCommand('toggleVideo');
			ps_ve_jitsi_status_mute_video	= 'unmuted';
			ps_ve_update_presenter_icons('video', 'unmuted');
		}else{
			ps_ve_jitsi_status_mute_video	= 'muted';
			//ps_ve_update_presenter_icons('video', 'muted');
		}
	});
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

function ps_ve_user_setup(){
	if(!ps_ve_setup_complete){
		<?php if($view == 'moderator'){ ?>
			ps_ve_jitsi_unmute_audio();
		<?php }else{ ?>
			ps_ve_jitsi_status_mute_audio	= 'unmuted';
			ps_ve_jitsi_mute_audio();
			ps_ve_setup_complete = true;
				
		<?php }?>
	}
}

$(document).ready(function() {
	
	$('.btn-submit-secondary-email').click(function(e){
		e.preventDefault();
		ps_ve_submit_secondary_attendee_email();	
	});
	
	ps_ve_chat_update();
	
	
	
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
});

</script>
<script>
	
	//const domain = 'meet-us-east.promiseserves.org';
	const domain = 'meet.jit.si';
	
	<?php if($view == 'moderator'){ ?>
		var interface_options	=	{ 
			filmStripOnly: false,
			DEFAULT_REMOTE_DISPLAY_NAME: 'Moderator',
			SHOW_POWERED_BY: false,
			SHOW_CHROME_EXTENSION_BANNER: false,
			VIDEO_QUALITY_LABEL_DISABLED: true,
			DISABLE_VIDEO_BACKGROUND: false,
			AUTHENTICATION_ENABLE: true,
			TOOLBAR_BUTTONS: [
								'microphone', 'camera', 'desktop', 'fullscreen',
								'fodeviceselection', 'hangup', 'profile',
								 'etherpad',  'settings', 
								 'filmstrip', 'stats', 'shortcuts',
								'tileview',  'download',  'mute-everyone',
								'e2ee'
							]
			
		};
		var config_options = {};
		
	<?php }else{?>
		var interface_options	=	{ 
			filmStripOnly: false,
			DEFAULT_REMOTE_DISPLAY_NAME: 'Attendee',
			SHOW_POWERED_BY: false,
			SHOW_CHROME_EXTENSION_BANNER: false,
			VIDEO_QUALITY_LABEL_DISABLED: true,
			DISABLE_VIDEO_BACKGROUND: false,
			SHOW_JITSI_WATERMARK: false,
			
			TOOLBAR_BUTTONS: ['microphone', 'camera','fodeviceselection']
			
		};
		
		var config_options = {
			enableNoAudioDetection: false,
			enableNoisyMicDetection: false,
			startWithAudioMuted: false,
			startSilent: false
		};
	<?php }?>
		
	
	
	const options = {
		roomName: 'ps_virtual_event_<?php echo $event['id_event_encoded'];?>',
		width: '100%',
		height: '100%',
		onload: function(){
			//ps_ve_user_setup();
		},
		parentNode: document.querySelector('#meet'),
		interfaceConfigOverwrite: interface_options,
		configOverwrite: config_options,
		userInfo: {
			email: '<?php echo $user['people_email_primary'];?>',
			name: '<?php echo $user['name_first'].' '.$this->website_model->display_format_people_name_last($user['name_last']);?>'
		}
	};
	const jitsiapi = new JitsiMeetExternalAPI(domain, options);
	
	
	<?php 
	
	if($view == 'moderator'){
		echo "jitsiapi.executeCommand('subject', '".addslashes($event['event_name']),"');  \r\n";
		//echo "jitsiapi.executeCommand('password','123');";
	}else{
		
	}
	if(!empty($user['name_first']) && !empty($user['name_last'])){
		echo "jitsiapi.executeCommand('displayName', '".$user['name_first']." ".$this->website_model->display_format_people_name_last($user)."');  \r\n";
	}elseif(!empty($user['name_first'])){
		echo "jitsiapi.executeCommand('displayName', '".$user['name_first']."');  \r\n";
	}
	if(!empty($user['url_avatar'])){
		echo "jitsiapi.executeCommand('avatarUrl', '".$user['url_avatar']."');  \r\n";
	} 
	?>
	
	jitsiapi.addEventListener('audioMuteStatusChanged', function(muted){
		ps_ve_jitsi_get_mute_status_audio();
	});
	jitsiapi.addEventListener('videoMuteStatusChanged', function(muted){
		ps_ve_jitsi_get_mute_status_video();
	});
	
	
</script>
</body>
</html>