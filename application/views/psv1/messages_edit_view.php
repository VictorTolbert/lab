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
				<li class="active">Edit Message</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Message - <small><?php echo $message['msg_title'];?></small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<form class="form-horizontal" id="msg-main-form" name="form-limiter" method="post" action="<?php echo base_url();?>messages/save">
								
								<?php 
									$message['avatar_code_only']		= 1;
									$cur_avatar									= $this->people_model->display_people_avatar($message);
									?>
						<div id="ajax-target-msgs">
							<?php 
								if(!empty($thread[0]['id_msg'])){
									foreach($thread AS $list){
										$cur_link 									= base_url().'messages/edit?i='.$list['id_msg_encoded'];		
										$list['avatar_code_only']				= 1;
										$cur_avatar								= $this->people_model->display_people_avatar($list); 
									
							?>
							
							<div class="row view-messages-msg-wrapper">
								<div class="col-sm-4 col-xs-4 text-center">
									<?php echo $cur_avatar;?><br />
									<strong><?php echo $list['author_name_first'].' '.$this->website_model->display_format_people_name_last($list['author_name_last']);?></strong><br />
									<small class="text-muted"><?php echo get_relative_time($list['date_add']);?></small>
								</div>
								<div class="col-sm-8 col-xs-8 view-messages-msg-body">
								<h4><?php echo $list['msg_title'];?>  <small class="pull-right text-muted"><?php echo date_offset('l, F j, Y h:ia', $list['date_add']);?></small></h4>
									<?php echo $list['msg_body'];?>
								</div>
							</div>
								<?php } }?>
							
							<div class="row view-messages-msg-wrapper">
								<div class="col-sm-4 col-xs-4 text-center">
									<?php echo $cur_avatar;?><br />
									<strong><?php echo $message['author_name_first'].' '.$this->website_model->display_format_people_name_last($message['author_name_last']);?></strong><br />
									<small class="text-muted"><?php echo get_relative_time($message['date_add']);?></small>
								</div>
								<div class="col-sm-8 col-xs-8 view-messages-msg-body">
								<h4><?php echo $message['msg_title'];?>  <small class="pull-right text-muted"><?php echo date_offset('l, F j, Y h:ia', $message['date_add']);?></small></h4>
									<?php echo $message['msg_body'];?>
								</div>
							</div>
						
						</div>
						<div class="row top40 msg-reply-mh" id="view-messages-reply-wrapper">
							<fieldset>
								<legend>Reply</legend>
									<div class="form-group">
										<div class="col-xs-2">
											Message:
										</div>
										<div class="col-xs-10">
											<span class="text-danger" id="error-compose-message-form-editor"></span>
											<div id="compose-message-form-editor" style="min-height: 250px;"></div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
											<input type="hidden" name="recipient_ids" id="recipient-ids" value="<?php echo $message['id_sender'];?>">
											<input type="hidden" name="msg_type" id="msg_type" value="msg_to_people">
											<input type="hidden" name="msg_body" id="compose-message-form-body" value="">
											<input type="hidden" name="r" value="<?php echo url_enc(base_url().'messages/viewlist');?>">
											<input type="hidden" name="id_msg_thread" value="<?php echo $message['id_msg_thread'];?>">
											<input type="hidden" name="t" value="<?php echo get_submitted_by_human_challenge();?>">
											<a href="<?php echo base_url().'messages/viewlist';?>" class="btn btn-default btn-msg-back" >Cancel</a>
											<button type="submit" class="btn btn-danger btn-ok btn-msg-main-send"><i class="fa fa-paper-plane-o"></i> Send</button>
										</div>
								</div>
							</fieldset>
						</div>
						<div class="row top40 hide text-center msg-reply-mh" id="view-messages-msg-send-result-wrapper">
							<span id="view-messages-msg-send-result-html"></span>
							<a href="<?php echo base_url().'messages/viewlist';?>" class="btn btn-default btn-msg-back" >Back to Messages</a>
						</div>
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

<!-- Datatables -->
    <script>
		$(document).ready(function(){
			$(function() {
				$('.msg-reply-mh').matchHeight();
			});
		});
	
      $(document).ready(function() {
			var quillcomposemsgmain = new Quill('#compose-message-form-editor', {
				theme: 'snow'
			});
			
			quillcomposemsgmain.on('text-change', function() {
				var justHtml = quillcomposemsgmain.root.innerHTML;
				$('#compose-message-form-body').val(justHtml);
			});
	  
	  
			$('.btn-msg-main-send').on('click', function(e){
				e.preventDefault();
				var msglength = $('#compose-message-form-body').val().length;
				if(msglength < 1){
					$('#error-compose-message-form-editor').html('<strong>Please type a message before hitting send.</strong>');
				}
				var cur_date		= moment().format('dddd, MMMM Do YYYY, h:mm a');
				var sentmessage ='<div class="row view-messages-msg-wrapper"><div class="col-sm-4 col-xs-4 text-center"><?php echo $cur_avatar;?>"<br /><strong><?php echo $user['name_first'].' '.$user['name_last'];?></strong><br /><small class="text-muted">Just now</small></div><div class="col-sm-8 col-xs-8 view-messages-msg-body"><h4><?php echo $message['msg_title'];?>  <small class="pull-right text-muted">'+cur_date+'</small></h4>'+$('#compose-message-form-body').val()+'</div></div>';
				
				$.ajax({
					type: "POST",
					url:  '<?php echo base_url();?>messages/save',
					data: $('#msg-main-form').serialize(),
					success: function(ajaxdata) {
						var result = JSON.parse(ajaxdata);
						$('#view-messages-reply-wrapper').addClass('hide');
						$('#view-messages-msg-send-result-html').html('<h5 class="text-center">Your message was sent successfully!</h5>');
						$('#view-messages-msg-send-result-wrapper').removeClass('hide');
						$('#ajax-target-msgs').after(sentmessage);
						
					}	
				});
			});
		});
</script>
<!-- /top navigation -->