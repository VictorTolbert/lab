<main class="flex-1 p-8">

	<div class="hidden modal fade" id="confirmdeleteassign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="vertical-alignment-helper">
			<div class="modal-dialog vertical-align-center modal-lg">
				<div class="modal-content">
					<form method="post" class="form-horizontal" id="delete-assignment-modal-form" action="people/ajax_delete_assignment">
						<div class="modal-header">
							Confirm Delete
						</div>
						<div class="modal-body">
							<div id="delete-assignment-modal-body">
								<h2 class="text-center" id="confirm-delete-assign-message">Are you sure you want to <span class="modal-assignment-delete-method">remove</span> this role assignment?</h2>
								<div id="modal-assignment-delete-method-warning-delete" class="hide">
									<p class="text-center"><strong>Use this option only if this record is incorrect!</strong></p>
									<p>This role will permenantly be deleted from the system and will no longer show up on this person's role assignment history. Please use this option only if this assignment is incorrect and needs to be permanantly deleted. Otherwise use the remove option instead so that this assignment will continue to be displayed on this person's role assignment history.</p>
								</div>
								<div id="modal-assignment-delete-method-warning-remove" class="hide">
									<p class="text-center"><strong>Use this option if you are removing this person from this role!</strong></p>
									<p>This option is to be used when the role assignment is correct, but the status needs to be changed (e.g. a volunteer stops serving on a care community).</p>
								</div>
								<div class="row top40"><br /></div>
							</div>

							<div class="hide" id="delete-assignment-modal-body-success">
								<div class="row top40"></div>
								<h4 class="text-center"><span id="delete-assignment-modal-body-success-msg"></span></h4>
								<div class="row top40"><br /><br /></div>
								<div class="text-center">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
								<div class="row top40"><br /></div>
							</div>
							<div class="hide" id="delete-assignment-modal-body-error">
								<div class="row top40"></div>
								<h4 class="text-center"><span id="delete-assignment-modal-body-error-msg"></span></p>
									<div class="row top40"><br /><br /></div>
									<div class="text-center">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
									</div>
									<div class="row top40"><br /></div>
							</div>
						</div>
						<div class="modal-footer" id="delete-assignment-modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<a class="btn btn-danger btn-ok btn-modal-assignment-delete"><span class="capitalize modal-assignment-delete-method">Remove</span></a>

						</div>
						<input type="hidden" name="id_assignment_encoded" id="id_assignment_encoded_for_delete" value="">
						<input type="hidden" name="method" id="modal-delete-assignment-method" value="">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="hidden modal fade" id="confirmrequestaction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="vertical-alignment-helper">
			<div class="modal-dialog vertical-align-center modal-lg">
				<div class="modal-content">
					<form method="post" class="form-horizontal" id="confirm-request-action-modal-form" action="family/ajax_request_action">
						<div class="modal-header">
							Confirm <span class="modal-assignment-delete-method">Ignore</span>
						</div>
						<div class="modal-body">
							<div id="delete-assignment-modal-body">
								<h2 class="text-center" id="modal-confirm-request-action-message">Are you sure you want to <span class="modal-confirm-request-action-method">ignore</span> this request?</h2>
								<div id="modal-assignment-delete-method-warning-delete" class="hide">
									<p>This request will be ignored in the future and volunteers / advocates at your church will not have the ability to respond to this need.</p>
								</div>

								<div id="modal-assignment-delete-method-warning-remove" class="hide">
									<p class="">By confirming this request you are agreeing to respond to this need. It will not be available for other churches to claim once you confirm the </p>
								</div>

								<div class="row top40"><br /></div>
							</div>

							<div class="hide" id="delete-assignment-modal-body-success">
								<div class="row top40"></div>
								<h4 class="text-center"><span id="delete-assignment-modal-body-success-msg"></span></h4>
								<div class="row top40"><br /><br /></div>
								<div class="text-center">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
								<div class="row top40"><br /></div>
							</div>
							<div class="hide" id="delete-assignment-modal-body-error">
								<div class="row top40"></div>
								<h4 class="text-center"><span id="delete-assignment-modal-body-error-msg"></span></p>
									<div class="row top40"><br /><br /></div>
									<div class="text-center">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-default btn-msg-rety">Retry</button>
									</div>
									<div class="row top40"><br /></div>
							</div>
						</div>
						<div class="modal-footer" id="delete-assignment-modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<a class="btn btn-danger btn-ok btn-modal-assignment-delete"><span class="capitalize modal-assignment-delete-method">Remove</span></a>

						</div>
						<input type="hidden" name="id_assignment_encoded" id="id_assignment_encoded_for_delete" value="">
						<input type="hidden" name="method" id="modal-delete-assignment-method" value="">
					</form>
				</div>
			</div>
		</div>
	</div>

</main>
