<div class="panel panel-container">
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div class="col-sm-3 col-xs-12">
				<ul class="nav nav-pills nav-stacked hidden-xs ps-nav-pills affix" data-spy="affix">
					<li class="active">
						<a href="#basic" data-toggle="pill" class="active ">Basic Info</a>
					</li>
					<li>
						<a href="#members" data-toggle="pill">Members</a>
					</li>
					<li>
						<a href="#notes" data-toggle="pill">Notes</a>
					</li>
					<li>
						<a href="#needs" data-toggle="pill">Needs</a>
					</li>
					<li>
						<a href="#agreement" data-toggle="pill">Agreement</a>
					</li>
					<li>
						<a href="#communities" data-toggle="pill">Care Communities</a>
					</li>
					<li>
						<a href="#updates" data-toggle="pill">Updates</a>
					</li>
					<li>
						<a href="#timeline" data-toggle="pill">Timeline</a>
					</li>
					<li>
						<a href="contactlog" data-toggle="pill">Contact Log</a>
					</li>
					<li>
						<a href="#avatar" data-toggle="pill">Family Photo</a>
					</li>
				</ul>
				<ul class="nav nav-pills visible-xs hidden-sm hidden-md hidden-lg ps-nav-pills">
					<li class="active">
						<a href="#basic" data-toggle="pill" class="active ">Basic Info</a>
					</li>
					<li>
						<a href="#members" data-toggle="pill">Members</a>
					</li>
					<li>
						<a href="#notes" data-toggle="pill">Notes</a>
					</li>
					<li>
						<a href="#needs" data-toggle="pill">Needs</a>
					</li>
					<li>
						<a href="#agreement" data-toggle="pill">Agreement</a>
					</li>
					<li>
						<a href="#communities" data-toggle="pill">Care Communities</a>
					</li>
					<li>
						<a href="#updates" data-toggle="pill">Updates</a>
					</li>
					<li>
						<a href="#timeline" data-toggle="pill">Timeline</a>
					</li>
					<li>
						<a href="contactlog" data-toggle="pill">Contact Log</a>
					</li>
					<li>
						<a href="#avatar" data-toggle="pill">Family Photo</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-9 col-xs-12">
				<div class="text-center col-md-12"></div>
				<div class="tab-pane fade hide" id="avatar">
					<div id="profile-img-holder">

						<img src="http://promiserves.test/img/avatars/10df1a1b5a8f8b40cfb15f1877ff75a7.jpg" class="center-block img-responsive img-circle" width="200px" height="200px">
					</div>
					<div id="profile-img-croppie-holder" class="hide">
					</div>
					<div id="profile-img-controls">
						<div class="row">
							<button class="btn btn-default btn-sm hide" id="rotate-left" data-rotate="-90"><i class="fa fa-rotate-left" aria-hidden="true"></i></button>
							<button class="btn btn-default btn-sm hide" id="rotate-right" data-rotate="90"><i class="fa fa-rotate-right" aria-hidden="true"></i></button>
						</div>
						<div class="row top10">
							<button class="btn btn-success upload-result hide" id="btn-upload-result" data-url="http://promiserves.test/upload/imageprofile?pe=MTAx">Save Profile Picture</button>
							<label for="file-upload" class="custom-file-upload btn btn-primary" id="btn-upload">
								<i class="fa fa-image" aria-hidden="true"></i> <span id="btn-upload-text">Change Profile Picture </span></label>
							<input id="file-upload" type="file" accept="image/*;capture=camera" style="visibility: hidden;">

						</div>
						<h2 class="text-center" style="margin: 5px;">Jeremy Doublestein</h2>
					</div>
				</div>
				<div class="tab-pane fade active in" id="contact">
					<div class="row">
						<form class="form-horizontal form-label-left" action="http://promiserves.test/save-my-profile" method="post" autocomplete="off" novalidate="novalidate">
							<fieldset>
								<legend>Contact Info</legend>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="name_first" id="name_first" value="Jeremy" placeholder="First name" required="required">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="name_last" id="name_last" value="Doublestein" placeholder="Last name" required="required">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Church</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control autocomplete-church" name="home_church" id="home_church" value="12Stone - Snellville (Snellville, GA)" placeholder="Home Church">
										<input type="hidden" name="id_home_church" id="id_home_church" value="1202">
										<span class="text-danger"></span>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Primary Email</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="people_email_primary" id="people_email_primary" value="jdoublestein@promise686.org" placeholder="Primary email address" autocomplete="new-password" required="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Secondary Email</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="people_email_secondary" id="people_email_secondary" value="" placeholder="Secondary email address" autocomplete="new-password">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile Phone</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="people_phone_mobile" id="people_phone_mobile" value="678-467-6195" placeholder="Mobile phone number">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Home Phone</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="people_phone_home" id="people_phone_home" value="770-555-1212" placeholder="Home phone number (optional)">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Work Phone</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" name="people_phone_office" id="people_phone_office" value="470-555-1212" placeholder="Office phone number (optional)">
									</div>
								</div>

								<fieldset>
									<legend>Password</legend>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="password" class="form-control" name="password" id="password" placeholder="leave blank to remain unchanged" autocomplete="new-password">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Password Confirm</label>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="leave blank to remain unchanged" autocomplete="new-password">
										</div>
									</div>
								</fieldset>

								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="text-center col-sm-12 col-xs-12 top30">
										<button type="submit" class="btn btn-success btn-lg" name="save" value="1">Save</button>
										<a href="http://promiserves.test/dashboard" class="btn btn-primary btn-lg" name="cancel" value="1">Cancel</a>
									</div>
								</div>
								<input type="hidden" name="id_people_encoded" id="id_people_encoded" value="MTAx">
								<input type="hidden" name="posted" value="people">
								<input type="hidden" name="r" value="aHR0cDovL3Byb21pc2VydmVzLnRlc3QvZGFzaGJvYXJk">

							</fieldset>
						</form>
					</div>
					<!--/.row-->
				</div>
			</div>
		</div>


		<!-- Footer Section -->

	</div>
	<!--/.row-->

	<div class="text-center promise-footer top30">
		<p>Copyright 2017-2020 <a href="http://promise686.org" target="_blank">Promise686</a></p>
		<div class="hidden-print">
			<p class="top20"><a href="http://promiserves.test/terms-of-service">Terms</a> | <a href="http://promiserves.test/privacy-policy">Privacy</a></p>
		</div>
	</div>
	<div id="copytoclipboard" value="" style="position: absolute; left: -9999999px;"></div>
</div>
