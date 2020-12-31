<!-- Header Section -->
<?php echo $site_header; ?>
	
<!-- Features Section -->	
<?php if($content['show_hero']){?>
<div id="home" class="section welcome">
  <img class="background" src="<?php echo $img_base;?>hero_bg.jpg" alt="<?php echo $content['film_name'];?> Splash Screen">
	<?php echo $site_hero;?>
</div><!-- /.container -->

<?php }?>

 <!-- Filmmaker Section -->
<?php if($content['show_filmmakers']){ ?>
<div id="filmmakers" class="section">
  <div class="fixed-container">
	<h1><?php echo $content['header_filmmakers'];?></h1>
	<?php if($bios_count < 1){ 
			echo '<h1>No filmmakers to display!</h1><p>Please check to ensure that you are sending a film id.</p>';
		}else{
			$i = 1;
			switch($bios_count){
				case 1:
					$col_span = '12';
				break;
				case 2:
					$col_span = '6';
				break;
				default: 
					$col_span = '4';
				break;
			}
			foreach ($bios AS $cur){
				if($i == 1){
					echo '<div class="row">';
				}
			$cur_target_alias 		= strtolower(str_replace(' ','-',$cur['name_full']));	
			if(isset($content['filmmakers_open_in_modal'])&& $content['filmmakers_open_in_modal'] > 0){			
				$cur_bio_link			= '<a href="#" data-toggle="modal" data-target="#bio-'.$cur_target_alias.'">';
				$cur_bio_button			= '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#bio-'.$cur_target_alias.'">Read Full Bio</button>';
			}else{
				$cur_bio_link			= '<a href="'.base_url('bio/'.$cur['slug']).'">';
				$cur_bio_button			= '<a href="'.base_url('bio/'.$cur['slug']).'" type="button" class="btn btn-primary btn-lg">Read Full Bio</a>';
			}
				
	  ?>
			<div class="col-md-<?php echo $col_span;?> col-sm-<?php echo $col_span;?>  col-xs-12">
			  <h2><?php echo $cur['name_full'];?></h2>
			  <h3 class="italic"><?php echo $cur['title'];?></h3>
			  <div class="portrait">
				<?php echo $cur_bio_link;?>
					<img src="<?php echo correct_img_path($cur['pic_large']);?>" alt="<?php echo $cur['name_full'];?>" width="240" height="240">   
				</a>						
			  </div>
			  <div class="bio-short">
				<?php echo $cur['bio_short'];?>
			  </div>
			  <div class="bio-button">
				<p class="text-center"><?php echo $cur_bio_button;?></p>
			  </div>
			  <div class="social-media">
				<?php if($cur['link_twitter']){;?>
					<a href="<?php echo $cur['link_twitter'];?>" data-toggle="tooltip" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
				<?php } ?>
				<?php if($cur['link_imdb']){;?>
					<a href="<?php echo $cur['link_imdb'];?>" data-toggle="tooltip" title="IMDB" target="_blank"><i class="icon-imdb"></i></a>
				<?php }?>
				<?php if($cur['link_slated']){;?>
					<a href="mailto:<?php echo $cur['link_slated'];?>" data-toggle="tooltip" title="Slated" target="_blank"><i class="fa fa-envelope"></i></a>
				<?php }?>
				<?php if($cur['link_email']){;?>
					<a href="mailto:<?php echo $cur['link_email'];?>" data-toggle="tooltip" title="Email"><i class="fa fa-envelope"></i></a>
				<?php }?>
				
			  </div>
			</div>
		<?php 
				if($i == 3 || $t == $bios_count){
					$i = 1;
					echo '</div>';
				}else{
					$i++;
				}
				$t++;
			}
		?>

	  </div>          
	</div>
<?php	}//End Else ?>
   </div>
  </div>
</div><!-- /.container -->
<?php } ?>

<!-- Filmmaker Section -->
<!--  Image background parallax -->
<div id="about" class="section secondary">
  <div class="fixed-container">
	<div class="content">
	
	<h1><?php echo $content['header_about_the_film'];?></h1>
	<div class="row">
	<?php if($this->film_website_model->file_is_available($img_base.'poster_small.jpg')){?>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<img src="<?php echo $img_base;?>poster_small.jpg" alt="<?php echo $content['film_name'];?> Movie Poster" class="poster">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 about-content">
	<?php }else{ ?>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-content">
		
	<?php } ?>
		  <?php echo $this->screenings_model->format_copy(correct_img_path($content['film_about_copy']));?>
		  	
			<?php if($content['show_about_opt_in']){ ?>
			<div class="col-md-12 col-sm-12 col-xs-12 well align-center about-opt-in col-centered align-center primary-bg about-opt-in-wrapper"  id="about_mailing_list_opt_in">
				<h2><?php echo $content['header_mailing_list_signup'];?></h2>
				<?php $attributes = array("class" => "form-inline", "name" => "mc_about_form", "id" => "mc_about_form");
									echo form_open(base_url()."mailinglist/save", $attributes);
				?>
					<div id="mc_about_opt_in_controls" class="">
						<div class="form-group">
							<input id="mc-name" name="mc_name" type="text" placeholder="Your Full Name" class="form-control">
						</div>
						<div class="form-group">
							<input id="mc-email" type="email" name="mc_email" placeholder="Your Email" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn" type="submit">Save</button>
						</div>
					</div>
					<div id="mc_about_opt_in_social_icons" class="social-icons invisible">
						<?php if(isset($content['link_twitter']) || isset($content['link_facebook'])){ ?>
							<p>You're all signed up! Stay updated by following us on</p>
							<?php if(isset($content['link_twitter'])){ ?>
							  <a href="<?php echo $content['link_twitter'];?>" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a>
							<?php }?>
							<?php if(isset($content['link_facebook'])){ ?>
							  <a href="<?php echo $content['link_facebook'];?>" target="_blank"  data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a>
							<?php }?>
						<?php }else{?>
						<p>You're all signed up! Please add info@lifeismymovie.com to your address book.</p>
					<?php }?>
					</div>
					<input type="hidden" name="mc_form_source" id="mc_form_source" value="mc_about_opt_in" />
					<input type="hidden" name="ajax" value="1" />
					<input type="hidden" name="t" value="<?php echo $t;?>" />
					<input type="hidden" name="r" value="<?php echo base64_encode(base_url().'#hero_mailing_list_opt_in');?>" />
				<?php echo form_close(); ?>
			</div>			
		</div>
		<div class="empty col-md-2 col-sm-3 col-xs-12"></div>			
	<?php }?>
		</div>
		<div class="empty col-md-2 col-sm-3 col-xs-12"></div>
	</div>
	
	<?php if($content['show_about_contact_form']){ ?>
		<div class="row">
		
			<div class="col-md-5 col-sm-5 col-xs-12 well align-center about-opt-in col-centered align-center">
				<form id="about-email-form" role="form">
					<div class="form-group">
						<label for="about-email-name" class="align-center"><?php echo $content['header_about_contact_form'];?></label>
						<input id="about-email-name" name="contact_name" type="Name" placeholder="Your Name" class="form-control">
					</div>
					<div class="form-group">	
						<label for="about-email-email" class="align-center">Email</label>						
						<input id="about-email-email" name="contact_email" type="email" placeholder="Your Email" class="form-control">
					</div>
					<div class="form-group">					
						<label for="about-email-comment" class="align-center"><?php echo $content['header_about_contact_form_label_comments'];?></label>	
						<textarea class="form-control" rows="5" id="about-email-comment" name="contact_message" ></textarea>
					</div>
					 <p id="about-email-form-response"></p>
					<button class="btn btn-primary btn-lg" type="submit">Submit</button>
					<input type="hidden" id="about-email-id_film" name="id_film" value="<?php echo $content['id_film'];?>">
					<input type="hidden" id="about-email-t" name="t" value="<?php echo time();?>">
					<input type="hidden" id="about-email-ajax" name="ajax" value="1">
				</form>
			</div>
		</div>
		<div class="empty col-md-2 col-sm-3 col-xs-12"></div>			
	<?php }?>
  <?php if($content['show_spotlight'] && $spotlights_count > 0){ ?>
	<div class="row" id="spotlight">
		<div class="col-md-5 col-sm-5 col-xs-12 align-center col-centered align-center">
			<h1><?php echo $content['header_spotlight'];?></h1>
		</div>
	</div>
   <div class="gallery row">
	<ul>
	<?php foreach($spotlights AS $cur_spot){ 
	
			if(isset($content['spotlights_open_in_modal'])&& $content['spotlights_open_in_modal'] > 0){			
				$cur_spot_link		= '<a href="#" data-toggle="modal" data-target="#bio-'.$cur_spot['modal_target'].'" class="mix-cover">';
				$cur_spot_button	= '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#bio-'.$cur_spot['modal_target'].'">Read Full Bio</button>';
			}else{
				$cur_spot_link		= '<a href="'.base_url('spotlight/'.$cur_spot['slug']).'" class="mix-cover">';
				$cur_spot_button	= '<a href="'.base_url('spotlight/'.$cur_spot['slug']).'" type="button" class="btn btn-primary btn-lg">Read Full Bio</a>';
			}
	?>
	  <li class="col-md-4 col-sm-4 col-xs-12 mix category_1" data-cat="1">
		<?php echo $cur_spot_link;?>
		  <img src="<?php echo $img_base.'spotlights/'.$cur_spot['spotlight_img_large'];?>" alt="<?php echo $cur_spot['spotlight_name'];?>">
		  <?php if($id_film != 9999){?>
			<span class="cover"><span><?php echo $cur_spot['spotlight_name'];?></span></span>
		  <?php }?>
		</a>
	  </li>
	<?php } ?>
	</ul>
  </div>
  <?php }?>
		<!-- GALLERY -->
</div>
</div>
</div><!-- /.container -->


	<?php if($content['show_browse'] > 0){ ?>
	<!-- TBrowseSection -->
	<div id="browse" class="section">
	  <div class="fixed-container">
		<div class="content browse">
		  <h1>Browse Our Films</h1>
		  <?php if(isset($content['copy_browse'])  && strlen($content['copy_browse']) > 0){
					echo $this->screenings_model->format_copy($content['copy_browse']);
				} ?>
			<?php echo $site_browse;?>
		</div>
	  </div>
	</div>

	<?php }?>


<?php if($content['show_screenings']){ ?>
<!-- Watch Section -->
<div id="watch" class="section white">
  <div class="fixed-container">
	
	<div class="content">
	  <h1>Watch The Film</h1>          
	  <div class="pricing">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 watch-film-item">
				<div class="wrapper">
					<h3 class="text-center">Screenings</h3>
					<div class="fluid-container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-centered col-xs-12">
								<a class="btn" href="<?php echo base_url();?>screenings<?php if(!empty($content['link_screenings_params'])){ echo '?'.$content['link_screenings_params']; }?>">
									<span class="glyphicon glyphicon-map-marker"></span> Find a Screening
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
								<a class="btn" href="<?php echo base_url();?>host-a-screening<?php if(!empty($content['link_screenings_params'])){ echo '?'.$content['link_screenings_params']; }?>">
									<span class="glyphicon glyphicon-eye-open"></span>Host a Screening
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
								<a class="btn" href="<?php echo base_url();?>host-a-screening?type_setting=educational<?php if(!empty($content['link_screenings_params'])){ echo '&'.$content['link_screenings_params']; }?>">
									<span class="fa fa-graduation-cap"></span>Educational
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 watch-film-item">
				<div class="wrapper">
				  <h3 class="text-center">Digital & Streaming</h3>
				  <div class="fluid-container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
								<a class="btn" href="<?php echo correct_img_path($content['buy_link_digital_download']);?>">
									<span class="glyphicon glyphicon-cloud-download"></span> Digital Download
								</a>
							</div>
						</div>
						<?php if(isset($content['buy_link_itunes']) && strlen($content['buy_link_itunes']) > 0){?>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
								<a class="btn" href="<?php echo format_affiliate_link($content['buy_link_itunes'], $affiliate_id);?>" target="_blank">
									<span class="fa fa-apple"></span> iTunes
								</a>
							</div>
						</div>
						<?php }?>
						<?php if(isset($content['buy_link_amazon']) && strlen($content['buy_link_amazon']) > 0){?>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
								<a class="btn" href="<?php echo format_affiliate_link($content['buy_link_amazon'], $affiliate_id);?>" target="_blank">
									<span class="fa fa-amazon"></span> Amazon
								</a>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 watch-film-item">
				<div class="wrapper">
				  <h3 class="text-center">DVD<?php if(isset($content['buy_link_shopify_blu_standard']) && strlen($content['buy_link_shopify_blu_standard']) > 0){?> & Blu-ray<?php }?></h3>
					 <div class="fluid-container">
					 <?php if(isset($content['buy_link_shopify_dvd_standard']) && strlen($content['buy_link_shopify_dvd_standard']) > 0){?>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
								<a class="btn" href="<?php echo correct_img_path($content['buy_link_shopify_dvd_standard']);?>" target="_blank">
									<span class="glyphicon glyphicon-record"></span> Standard Edition
								</a>
							</div>
						</div>
						<?php }?>
						<?php if(isset($content['buy_link_shopify_dvd_special']) && strlen($content['buy_link_shopify_dvd_special']) > 0){?>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
								<a class="btn" href="<?php echo correct_img_path($content['buy_link_shopify_dvd_special']);?>" target="_blank">
									<span class="glyphicon glyphicon-record"></span> Special Edition
								</a>
							</div>
						</div>
						<?php }?>
						<?php if(isset($content['buy_link_shopify_blu_standard']) && strlen($content['buy_link_shopify_blu_standard']) > 0){?>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
									<a class="btn" href="<?php echo correct_img_path($content['buy_link_shopify_blu_standard']);?>" target="_blank">
										<span class="glyphicon glyphicon-record"></span> Blu-ray
									</a>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
	  </div>
	</div>
  </div>
</div><!-- /.container -->
<?php }?>
</div>
</div>

<?php if($content['show_take_action'] > 0){ ?>
<!-- Take Action Section -->
<!--  Image background parallax -->
<div id="act" class="section image">
  <div class="background parallax"></div>
  <div class="fixed-container">
	<div class="content services">
	  <h1>Take Action</h1>
	  <?php if(isset($content['film_action_copy'])  && strlen($content['film_action_copy']) > 0){
				echo '<p>'.$content['film_action_copy'].'</p>';
			} ?>
	  <?php if($action_partners_count > 0){?>
		  <div class="row">
			<?php foreach($action_partners as $cur_partner){?>
				<div class="logo col-md-3 col-sm-3 col-xs-12">
					<a class="tab" href="<?php echo $cur_partner['action_partner_url'];?>" data-target="#action_partner_<?php echo $cur_partner['id_action_partner'];?>" data-toggle="tab"><img src="<?php echo $img_base.'partners/'.$cur_partner['action_partner_img_small'];?>" alt="<?php echo $cur_partner['action_partner_name'];?>"></a>
				</div>
			<?php }?>
		  </div>
		  <div class="row">
			<div class="empty col-md-1 col-sm-1 col-xs-12"></div>
			
			<div class="col-md-10 col-sm-10 col-xs-12">
			  <div class="tab-content">
				  <?php foreach($action_partners as $cur_partner){?>
					<div class="tab-pane fade" id="#action_partner_<?php echo $cur_partner['id_action_partner'];?>">
						<h2><?php echo $cur_partner['action_partner_name'];?></h2>
						<p><?php echo $cur_partner['action_partner_desc_short'];?></p>
					</div>
				  <?php }?>
			  </div>
			</div>
			<div class="empty col-md-1 col-sm-1 col-xs-12"></div>
		  </div>
		<?php }?>
	</div>
  </div>
</div>

<?php }?>
<?php if($content['show_donate'] > 0){ ?>
<!-- Take Action Section -->
<!--  Image background parallax -->
<div id="donate" class="section">
  <div class="fixed-container">
	<div class="content donate">
	  <h1>Donate</h1>
	  <?php if(isset($content['film_donate_copy'])  && strlen($content['film_donate_copy']) > 0){
				echo $this->screenings_model->format_copy($content['film_donate_copy']);
			} ?>
	</div>
  </div>
</div>

<?php }?>

<?php if($content['show_contact'] > 0){ ?>
<!-- Contact Section -->
<!--  Image background parallax -->
<div id="contact" class="section secondary">
  <div class="fixed-container">
	<div class="content services">
	  <h1>Contact US</h1>
	  <?php if(isset($content['film_contact_copy'])  && strlen($content['film_contact_copy']) > 0){
				echo '<p>'.$content['film_contact_copy'].'</p>';
			} 
		?>
		<div class="row">
        <div id="contact_form_container" class="col-lg-10 col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 limm-distro-form-box">
            <?php $attributes = array("class" => "form-horizontal", "name" => "contact_form", "id" => "contact_form");
            echo form_open(base_url()."contactform/save", $attributes);?>
            <fieldset>
			<?php echo $this->session->flashdata('msg'); ?>
			<div id="validation-error"></div>
			<div id="contact_form_wrapper">
            <div class="form-group">
                <div class="col-sm-12 col-md-8 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <select class="form-control" id="contact_request_type" name="contact_request_type">
						<option value="">How should we direct your message?</option>
						<option value="Press" <?php echo  set_select('contact_request_type', 'Press', $contact_details['contact_request_type']); ?>>Press: Questions from members of the press</option>
						<option value="Support" <?php echo  set_select('contact_request_type', 'Support', $contact_details['contact_request_type']); ?>>Support: I need help with a product or download</option>
						<option value="Educational" <?php echo  set_select('contact_request_type', 'Educational', $contact_details['contact_request_type']); ?>>Educational: Questions about educational screenings</option>
						<option value="Licensing" <?php echo  set_select('contact_request_type', 'Licensing', $contact_details['contact_request_type']); ?>>Licensing: Questions about licensing</option>
						<option value="Other" <?php echo  set_select('contact_request_type', 'Other', $contact_details['contact_request_type']); ?>>Other: I need help with something else</option>
					</select>
                    <span class="text-danger"><?php echo form_error('contact_request_type'); ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 col-md-8 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <input class="form-control" name="contact_name" placeholder="Enter your full name" type="text" value="<?php echo set_value('contact_name', $contact_details['contact_name']); ?>" />
                    <span class="text-danger"><?php echo form_error('contact_name'); ?></span>
                </div>
            </div>
			<div class="form-group">
                <div class="col-sm-12 col-md-8 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <input class="form-control" name="contact_email" placeholder="Enter your email address" type="text" value="<?php echo set_value('contact_email', $contact_details['contact_email']); ?>" />
                    <span class="text-danger"><?php echo form_error('contact_email'); ?></span>
                </div>
            </div>
			<?php if(1==2){?>
			<div class="form-group">
                <div class="col-sm-12 col-md-8 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <input class="form-control" name="contact_phone" placeholder="Phone number" type="text" value="<?php echo set_value('contact_phone', $contact_details['contact_phone']); ?>" />
                    <span class="text-danger"><?php echo form_error('contact_phone'); ?></span>
                </div>
            </div>
			<?php }?>
			<div class="form-group">
                <div class="col-sm-12 col-md-8 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                    <textarea class="form-control" name="contact_message" id="contact_message" rows="5" placeholder="Type your message here"><?php echo set_value('contact_message', $contact_details['contact_message']); ?></textarea>
                    <span class="text-danger"><?php echo form_error('contact_message'); ?></span>
                </div>
            </div>
			<div class="form-group">
                <div class="col-lg-4 col-md-4 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-2">
					<input type="hidden" name="t" value="<?php echo $t;?>" />
					<input type="hidden" name="r" value="<?php echo base64_encode(base_url().'#contact');?>" />
					<input type="hidden" name="id_film" value="<?php echo $id_film;?>" />
					<input type="hidden" name="ajax" id="contact_form_ajax" value="1">
					<input type="hidden" id="id_contact_request" name="id_contact_request" value="<?php echo base64_encode($id_contact_request);?>" />
                    <input name="submit" type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xsm-12" id="button_form_submit" value="Send"/>
                </div>
            </div>
			</div>
            </fieldset>
            <?php echo form_close(); ?>
	 
			</div>
		</div>
	</div>
</div>
</div>

<?php }?>
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>