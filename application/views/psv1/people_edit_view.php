<?php echo $site_header; ?>
	<!-- menu profile quick info -->
	<?php echo $site_menu_quick_info;?>
	<!-- /menu profile quick info -->

	<br />

	<!-- sidebar menu -->
	<?php echo $site_menu_sidebar;?>

	<!-- /sidebar menu -->

	<!-- /menu footer buttons -->
	<?php echo $site_menu_sidebar_footer;?>
	<!-- /menu footer buttons -->
  </div>
</div>

<!-- top navigation -->
<?php echo $site_menu_top_nav;?>
<!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main" style="height: auto; !important">
	<?php echo $this->session->flashdata('msg'); ?>
	<div class="col-md-6 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Edit User Profile <small><a href="<?php echo base_url();?>adminusers/viewlist/">[Back to list]</a></small></h2>
			
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br />
			<form class="form-horizontal form-label-left" action="<?php echo base_url();?>adminusers/save" method="post">
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name', $user['name']);?>" placeholder="Full Name">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
				  <input type="text" class="form-control" name="username" id="username" value="<?php echo set_value('username', $user['username']);?>" placeholder="email address">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
				  <input type="password" class="form-control" name="password" id="password" placeholder="leave blank to remain unchanged">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Password Confirm</label>
				<div class="col-md-9 col-sm-9 col-xs-12">
				  <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="leave blank to remain unchanged">
				</div>
			  </div>
			  
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

				  <a href="<?php echo base_url();?>adminusers/viewlist"><button type="button" class="btn btn-primary" name="cancel" value="1">Cancel</button></a>
				  <button type="submit" class="btn btn-success" name="save" value="1">Save</button>
				</div>
			  </div>
			  <input type="hidden" name="posted" value="1" />
			  <input type="hidden" name="id_user" value="<?php echo $user['id'];?>" />
			  </form>
		  </div>
		</div>
	</div>
</div>

<!-- top navigation -->
<?php echo $site_footer;?>
<!-- /top navigation -->