	<main class="flex-1 p-8 prose">
		<form class="form-horizontal" id="add-assignment-modal-form" action="http://promiserves.test/people/ajax_save_assignment" method="post">
			<div class="modal-header" id="modal-addassignment-title">
				What would you like to add to this person's profile?
			</div>
			<div class="modal-body">
				<div id="add-assignment-modal-body">
					<div class="well modal-add-assignment-view" id="modal-assignment-view-select">
						<div class="text-center row top20">
							<a class="btn btn-primary btn-assignment-select btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-community" href="#">Add to care community</a>
						</div>
						<div class="row top20">
							<a class="btn btn-primary btn-assignment-select btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-event" href="#">Add to event</a>
						</div>
						<div class="row top20">
							<a class="btn btn-primary btn-assignment-select btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-church" href="#">Add to church <small>(advocate, volunteer, church staff)</small></a>
						</div>
						<div class="row top20">
							<a class="btn btn-primary btn-assignment-select btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-staff" href="#">Add to affiliate staff</a>
						</div>
						<div class="row top20">
							<a class="btn btn-primary btn-assignment-select btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-family" href="#">Add to an existing family</a>
						</div>
						<div class="row top20">
							<a class="btn btn-primary btn-assignment-select btn-lg col-sm-6 col-sm-offset-3" data-view="modal-assignment-view-family-new" href="#" data-hideactionbtns="1">Add to a new family</a>
						</div>
					</div>
					<div class="well modal-add-assignment-view hide" id="modal-assignment-view-staff">
						<h2 class="text-center">Add as a staff member</h2>

						<div class="form-group">
							<div class="col-xs-2">
								Affiliate
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-staff-0">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
								Role
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-staff-1">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="well modal-add-assignment-view hide" id="modal-assignment-view-family">
						<h2 class="text-center">Add to an existing family</h2>
						<div class="form-group">
							<div class="col-xs-2">
								Family
							</div>
							<div class="col-xs-10" id="ajax-target-modal-assign-family-id-family">
								<div class="ajax-target-modal-assignment-view-family-0">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-2">
								Family Role
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-family-1">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>

					</div>
					<div class="well modal-add-assignment-view hide" id="modal-assignment-view-family-new">
						<h2 class="text-center">Add to a new family</h2>
						<div class="form-group">
							<div class="col-xs-12">
								<p class="text-center">Are you sure you want to create a new family with this person?</p>
							</div>
						</div>
						<div class="form-group">
							<p class="text-center">
								<a class="btn btn-primary" href="#" id="modal-assignment-view-family-new-url">Yes, create a new family</a>
								&nbsp;&nbsp;
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							</p>
						</div>
					</div>
					<div class="well modal-add-assignment-view hide" id="modal-assignment-view-event">
						<h2 class="text-center">Add to event</h2>
						<div class="form-group">
							<div class="col-xs-2">
								Event
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-event-0">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
								Action
							</div>
							<div class="col-xs-10">
								<select id="event_attendee_status" name="event_attendee_status" class="input-lg form-control is-required" required>
									<option value="rsvp_only">RSVP to event</option>
									<option value="attended_event">Attended event</option>
									<option value="responded_event">Attended event & completed response card</option>
								</select>
							</div>
						</div>
					</div>
					<div class="well modal-add-assignment-view hide" id="modal-assignment-view-community">
						<h2 class="text-center">Add to care community</h2>
						<div class="form-group">
							<div class="col-xs-4">
								Care Community *
							</div>
							<div class="col-xs-8">
								<div class="ajax-target-modal-assignment-view-community-0">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-4">
								Role *
							</div>
							<div class="col-xs-8">
								<div class="ajax-target-modal-assignment-view-community-1">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-4">
								Meal Week
							</div>
							<div class="col-xs-8">
								<div class="ajax-target-modal-assignment-view-community-2">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-4">
								Meal Day
							</div>
							<div class="col-xs-8">
								<div class="ajax-target-modal-assignment-view-community-3">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-4">
								Team Start Date *
							</div>
							<div class="col-xs-8">
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
											<input type="text" style="width: 100px" data-placement="right" name="date_start_human_community" id="modal-add-assignment-view-datepicker-start" class="form-control date pick-date" required="required" value="12/13/2020">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							(*) Required
						</div>
					</div>
					<div class="well modal-add-assignment-view hide" id="modal-assignment-view-church">
						<h2 class="text-center">Add to church</h2>
						<div class="form-group">
							<div class="col-xs-2">
								Church
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-church-0">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
								Role
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-church-1">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
								Role Start Date
							</div>
							<div class="col-xs-10">
								<div class="control-group">
									<div class="controls">
										<div class="input-prepend input-group">
											<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
											<input type="text" style="width: 100px" data-placement="right" name="date_start_human_church" id="modal-add-assignment-view-church-datepicker-start" class="form-control date pick-date" required="required" value="12/13/2020">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="well modal-add-assignment-view hide" id="modal-assignment-view-group">
						<h2 class="text-center">Add to group</h2>
						<div class="form-group">
							<div class="col-xs-2">
								Group Name
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-group-0">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-2">
								Role
							</div>
							<div class="col-xs-10">
								<div class="ajax-target-modal-assignment-view-group-1">
									<span class="light-gray"><i class="fas fa-spin fa-refresh fa-1x"></i> Loading...</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="add-assignment-modal-footer" class="modal-footer">
				<input type="hidden" name="id_assignment" id="modal-add-assignment-id-assignment" value="">
				<input type="hidden" name="id_people" id="modal-add-assignment-id-people" value="101">
				<input type="hidden" name="assignment_view" id="modal_addassignment_view" value="">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary hide btn-ok btn-modal-assignment-save"> Save</button>
			</div>


		</form>
	</main>
