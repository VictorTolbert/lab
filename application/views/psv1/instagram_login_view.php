<!-- Header Section -->
<?php echo $site_header; ?>

<div class="container section-internal container-login-view" id="login">
	<?php echo $this->session->flashdata('msg'); ?>
	<div class="container">
		<div class="row login">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
				<form role="form" action="<?php echo base_url();?>login" method="post" id="login-form"> 
				  <div class="form-group text-center">
					<div class="logo">
						<i class="fa fa-3x fa-instagram"></i>
					</div>
				  </div>
				  <div class="form-group">
					<p class="align-center">Log In With Instagram</p>
				  </div>
				  <div class="form-group">
					<a href="<?php echo $login_url;?>" class="btn btn-primary btn-lg center-block">Login</a>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Footer Section -->
<?php echo $site_footer; ?>

</body>
</html>