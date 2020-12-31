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
					<a href="<?php echo base_url();?>messages/list">
						Messages
					</a>
				</li>
				<li class="active">All Messages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $mailbox_title;?> </h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
			<div class="col-sm-2 col-xs-12" class="msg-mailboxes-list ">
				<div class="col-sm-12 col-xs-4 msg-mailbox <?php echo $selected_box_css['inbox'];?> clickable-row" data-href="<?php echo base_url();?>messages/viewlist/inbox">
						<a href="<?php echo base_url();?>messages/viewlist/inbox"><i class="fa fa-inbox"></i> Inbox</a>
				</div>
				<div class="col-sm-12 col-xs-4 msg-mailbox <?php echo $selected_box_css['sent'];?> clickable-row" data-href="<?php echo base_url();?>messages/viewlist/sent">
						<a href="<?php echo base_url();?>messages/viewlist/sent"><i class="fa fa-paper-plane-o"></i> Sent Messages</a>
				</div>
				<div class="col-sm-12 col-xs-4 msg-mailbox <?php echo $selected_box_css['deleted'];?> clickable-row" data-href="<?php echo base_url();?>messages/viewlist/deleted">
						<a href="<?php echo base_url();?>messages/viewlist/deleted"><i class="fa fa-trash"></i> Deleted Messages</a>
				</div>
				<div class="col-sm-12 col-xs-4 msg-mailbox <?php echo $selected_box_css['unread'];?> clickable-row" data-href="<?php echo base_url();?>messages/viewlist/unread">
						<a href="<?php echo base_url();?>messages/viewlist/unread"><i class="fa fa-eye-slash"></i>Unead Messages</a>
				</div>
				<div class="col-sm-12 col-xs-4 msg-mailbox <?php echo $selected_box_css['read'];?> clickable-row" data-href="<?php echo base_url();?>messages/viewlist/read">
						<a href="<?php echo base_url();?>messages/viewlist/read"><i class="fa fa-eye"></i> Read Messages</a>
				</div>
			</div>
			<div class="col-sm-8 col-xs-12">
				<form class="form-horizontal" id="form-limiter" name="form-limiter" method="post" action="<?php echo base_url();?>messages/list">
					<?php echo $this->session->flashdata('msg'); ?>

							  <?php if(isset($lists)){
										foreach($lists AS $list){
												$cur_link 								= base_url().'messages/edit?i='.$list['id_msg_encoded'];		
												$list['avatar_code_only']		= 1;
												$cur_avatar							= $this->people_model->display_people_avatar($list);
																	 
											?>
											
											<div class="row view-messages-msg-wrapper clickable-row" data-href="<?php echo $cur_link;?>">
												<div class="col-sm-4 col-xs-4 text-center">
													<?php echo $cur_avatar;?><br />
													<strong><?php echo $list['author_name_first'].' '.$this->website_model->display_format_people_name_last($list['author_name_last']);?></strong><br />
													<small class="text-muted"><?php echo get_relative_time($list['date_add']);?></small>
												</div>
												<div class="col-sm-8 col-xs-8 view-messages-msg-body">
												<h4><?php echo $list['msg_title'];?>  <small class="pull-right text-muted"><?php echo date_offset('l, F j, Y h:ia', $list['date_add']);?></small></h4>
													<?php echo $list['msg_title'].' - '.$this->messages_model->get_msg_summary($list);?>
												</div>
											</div>
											
											
									<?php }
									}else{
									?>
										<h3 class="text-center"><i class="fa fa-inbox text-muted fa-3x"></i><br />Sorry, you have no messages.</h3>
							<?php }?>
						
				</form>
				</div>
			</div>
		</div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this message?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>


	<script type="text/javascript">
		$(document).ready(function(){
			$(function() {
				$('.table-row-height').matchHeight({byRow: false});
			});
		});
		
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		});
</script>
<!-- /top navigation -->