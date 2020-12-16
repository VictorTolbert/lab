<main class="flex-1 p-8">
	<form class="form-horizontal" id="compose-message-modal-form" action="http://promiserves.test/messages/save" method="post">
		<div class="modal-header">
			Send a Message
		</div>
		<div class="modal-body" id="compose-message-modal-body">
			<div class="form-group">
				<div class="col-xs-2">
					To:
				</div>
				<div class="col-xs-10" id="ajax-target-compose-message-recpient">
					<input type="text" class="form-control" name="compose_message_modal_form_recipient" id="compose-message-modal-form-recipient">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-2">
					Subject:
				</div>
				<div class="col-xs-10">
					<input type="text" class="form-control" name="msg_title" id="compose-message-modal-form-subject">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-2">
					Message:
				</div>
				<div class="col-xs-10">
					<div id="compose-message-modal-form-editor" style="min-height: 250px;"></div>
				</div>
			</div>
		</div>
		<div class="modal-footer" id="compose-message-modal-footer">
			<div class="top10">
				<input type="checkbox" name="bcc_me"> Send me a copy of this message (BCC)
			</div>
			<div class="top10">
				<input type="hidden" name="recipient_ids" id="recipient-ids" value="">
				<input type="hidden" name="msg_type" id="msg_type" value="msg_to_people">
				<input type="hidden" name="msg_body" id="compose-message-modal-form-body" value="">
				<input type="hidden" name="t" value="TVRZd056Z3lOalF3Tmc9PSNhISVAIyFAJiMzMjE0MTIzNV4kIyUkISomXiVeJmdmZGFkU0RzYWRIRkApISNAI0ZFRCghJik=">
				<input type="hidden" name="json_data" id="compose-message-modal-form-json-data" value="">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-danger btn-ok btn-msg-send" data-modalid="#compose-message"><i class="fa fa-paper-plane-o"></i> Send</button>
			</div>
		</div>
	</form>
</main>
