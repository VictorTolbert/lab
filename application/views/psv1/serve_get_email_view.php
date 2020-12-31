<?php echo $site_header; ?>
		
<div class="wrapper" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>');">
<div class="container">
	<form class="form" action="<?php echo base_url();?>serve" method="post" id="form-serve-login">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive center-block">
			</div>
		</div>
		
		<div class="row top10">
		

			<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-8 col-sm-offset-2 well">
						
						<h1 class="text-center">Get Started </h1>
						<h2 class="text-center">Enter Your Email Address</h2>
						
						<?php echo $this->session->flashdata('msg'); ?>
						
						<div class="top20">
							<div class="form-group">
								<input type="text" class="form-control input-lg" id="email<?=$has_event_id;?>" name="email" placeholder="Your Email" value="<?php echo set_value('email', $email);?>">
								<span class="text-danger align-center"><?php echo form_error('email'); ?></span>
							</div>
							<div class="form-group hide" id="wrapper-name-first">
								<input type="text" class="form-control input-lg" id="name_first" name="name_first" placeholder="Enter your first name" value="<?php echo set_value('name_first', $name_first);?>">
								<span class="text-danger align-center"><?php echo form_error('name_first'); ?></span>
							</div>
							<div class="form-group hide" id="wrapper-password">
								<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Enter your password" value="<?php echo set_value('password', $password);?>">
								<span class="text-danger align-center"><?php echo form_error('password'); ?></span>
								<br />
								<p class="text-center"><small><a href="<?php echo base_url();?>forgotpassword">Forgot Password? Click here to reset it.</a></small></p>
								<br />
								<?php if($this->security_model->has_gdpr_cookie()){?>
									<p class="text-center"><input name="remember" type="checkbox" value="1"> Remember me for 90 days on this device</p>
									<br />
								<?php }?>
							</div>
							<?php if(!empty($has_event_id)){ ?>
							<div class="form-group">
								<div class="row text-center"><br /><br />
									<button type="submit" class="btn btn-primary btn-lg btn-block" name="btn_bypass_login" id="btn-bypass-login"><span id="btn-next-text">Next</span> <i class="fa fa-chevron-right"></i></button>
								</div>
							</div>
							<?php }else{?>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-next" name="btn-next"><span id="btn-next-text">Next</span> <i class="fa fa-chevron-right"></i></button>
								</div>
								<div class="form-group hide" id="wrapper-bypass">
									<div class="row text-center"><br /><br />
										<button type="submit" class="btn btn-default" name="btn_bypass_login" id="btn-bypass-login">Continue as New Volunteer</button>
									</div>
								</div>
							<?php }?>
					</div>
					<div class="top40 xs-top20">
						<h3 class="text-center">What is Promise Serves?</h3>
						<div class="col-sm-6 col-sm-offset-3 col-xs-12">
							<p class="text-center"><a class="btn btn-default" href="http://promise686.org/promiseserves" target="_blank"><i class="fas fa-info-circle"></i> Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<input type="hidden" name="id_people_encoded" value="<?php echo $user['id_people_encoded'];?>">
		<input type="hidden" name="serveskey" value="<?php echo $this->security_model->make_serves_key();?>">
	</form>
</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>
<script>
	function reveal_login(account_count){
		$('#wrapper-password').removeClass('hide');
		$('#wrapper-bypass').removeClass('hide');
		$('#btn-next-text').html('Login');		
		if(account_count > 1){
			$('#wrapper-name-first').removeClass('hide');
		}
		console.log(account_count);
		$('#form-serve-login').attr('action', '<?php echo base_url();?>login');
	}
	
	function hide_login(){
		$('#wrapper-password').addClass('hide');
		$('#wrapper-bypass').addClass('hide');
		$('#wrapper-name-first').addClass('hide');
		$('#btn-next-text').html('Next');		
		$('#form-serve-login').attr('action', '<?php echo base_url();?>serve');
	}

	 function checkforlogin(){
		var email = $('#email').val();
		
		if(email.indexOf(".") && email.indexOf("@")){
			var durl = "<?php echo base_url();?>home/has_user_login?email="+email;
		   $.ajax({
				url: durl,
				dataType: "html",
				success: function(ajaxdata) {
					var result = JSON.parse(ajaxdata);
					if(result.st > 0){
						reveal_login(result.st);
					}else{
						hide_login();
					}
					return true;
				}
			});	
			return false;
		}
   }
   
   $(document).ready(function() {
	   $('#btn-bypass-login').click(function(e){
		   $('#form-serve-login').attr('action', '<?php echo base_url();?>serve?bypass_login=1');
		    $('#form-serve-login')[0].submit();
	   });
	   
	   $('#form-serve-login').on('submit', function(e){
		   e.preventDefault();
		   var formaction = $('#form-serve-login').attr('action');
		   if(!checkforlogin() || formaction == '<?php echo base_url();?>login'){
			   
			   $('#form-serve-login')[0].submit();
		   } 
	   });
	   
		$('#email').on('input', function() {
			var email = $('#email').val();
			if(email.indexOf("@") > 0 && email.indexOf(".") > 0){
				 checkforlogin();
			}else{
				hide_login();
			}
		});
   });
   
	$(window).load(function () {
		checkforlogin();
	});
</script>

<!-- /top navigation -->