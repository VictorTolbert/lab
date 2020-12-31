<!-- Header Section -->
<?php echo $site_header; ?>
<!-- Print CSS  -->
<link rel="stylesheet" href="<?php echo base_url("css/print.css");?>" rel="stylesheet">
<?php echo $site_sidebar; ?>

<?php 
	$img_family = $this->communities_model->get_avatar_filename($item);
	
	$has_footer_notes		= false;
	$already_displayed		= array();
	$vol_count				= 0;
	foreach($item['team_members'] as $cur){
		if(!in_array($cur['id_people'], $already_displayed)){
			$already_displayed[]	= $cur['id_people'];
			$vol_count++;
		}
	}
	
	if(!empty($item['community_food_preferences'])){
		$has_footer_notes = true;
	}
	if(!empty($item['community_food_allergies'])){
		$has_footer_notes = true;
	}
	
	//Default Params
	$col_size_volunteer		= 3;
	$height_container		= '330px';
	$height_placeholder		= '150px';
	$height_image			= '200px';
	$font_size_email		= '12px';
	$font_size_general		= '14px';
	$font_size_role			= '14px';
	$font_size_phone		= '14px';
	$font_size_meal			= '12px';
	$font_size_name			= '14px';
	
	
	
	switch($vol_count){
		case 6:
		case 7:
			$col_size_volunteer		= 4;
			if(!$has_footer_notes){
				$height_placeholder		= '150px';
				$height_image			= '150px';
				$font_size_general		= '12px';
				$font_size_role			= '11px';
				$font_size_phone		= '11px';
				$font_size_email		= '11px';
				$font_size_meal			= '11px';
			}else{
				$col_size_volunteer		= 4;
				$height_container		= '270px';
				$height_placeholder		= '150px';
				$height_image			= '150px';
				$font_size_general		= '12px';
				$font_size_role			= '11px';
				$font_size_phone		= '11px';
				$font_size_email		= '11px';
				$font_size_meal			= '11px';
			}
		break;
		case 9:
			$col_size_volunteer		= 3;
			$height_container		= '250px';
			$height_placeholder		= '105px';
			$font_size_general		= '10px';
			$font_size_email		= '10px';
			$font_size_role			= '10px';
			$font_size_meal			= '10px';
			$font_size_phone		= '10px';
			$font_size_name			= '12px';
			$height_image			= '150px';
		break;
		default:
			
		break;
	}
	
?>
<?php $i=0;?>
	<div class="col-sm-12 main container">
		<div class="row hidden-print">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>communities/list">
						Communities
					</a>
				</li>
				<li class="active">One Pager</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row hidden-print">
				<div class="col-sm-2 text-center">
					<div class="logo">
						<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" style="max-width: 175px;" class="img-responsive center-block text-center">
					</div>
				</div>
				<div class="col-sm-2 text-center hidden-print">
					<button class="btn btn-primary btn-block btn-lg" onclick="window.print();"><i class="fa fa-print fa-2x"></i> Print</button>
				</div>
				<!--
				<div class="col-sm-2 text-center hidden-print">
					<button class="btn btn-primary btn-block btn-lg"><i class="fa fa-file-pdf-o fa-2x"></i> Save PDF</button>
				</div>
				-->
				<?php if(!empty($img_family)){?>
				<div class="col-sm-2 text-center">
					<img src="<?php echo $img_family;?>" class="img-responsive center-block">
				</div>
				<?php }?>
				<div class="col-sm-6 text-center">
					<!--<h3 class="text-center"><?php echo $this->website_model->display_format_community_name($item['community_name']);?> Care Community</h3> -->
					<p class="text-center">
						<strong><?php echo $this->communities_model->format_foster_parents_name($item);?></strong><br />
						<?php echo $this->communities_model->format_community_address($item);?><br />
						<?php echo $this->communities_model->format_foster_parents_phones($item);?>
					</p>
				</div>
			</div>
			<div class="row visible-print">
				<?php if(!empty($img_family)){?>
					<div class="col-sm-3 text-center">
						<img src="<?php echo $img_family;?>" class="img-responsive center-block" style="max-height: 125px;">
					</div>
				<?php }else{?>
					<div class="col-sm-3 text-center">
						<div class="logo">
							<img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" style="max-height: 175px;" class="img-responsive center-block text-center">
						</div>
					</div>
				<?php }?>
				<div class="col-sm-9 text-center">
					<!--<h3 class="text-center"><?php echo $this->website_model->display_format_community_name($item['community_name']);?> Care Community</h3> -->
					<p class="text-center">
						<strong><?php echo $this->communities_model->format_foster_parents_name($item);?></strong><br />
						<?php echo $this->communities_model->format_community_address($item);?><br />
						<?php echo $this->communities_model->format_foster_parents_phones($item);?>
					</p>
				</div>
			</div>
			<div class="row top10"></div>
			<?php 
					$already_displayed		= array();
					
					foreach($item['team_members'] as $cur){
						if(!in_array($cur['id_people'], $already_displayed)){
							$already_displayed[]	= $cur['id_people'];
							$cur_avatar	= $this->people_model->get_avatar_filename($cur);
							$cur['omit_roles']		= array('need fulfiller', 'event host');
				?>
				<div class="col-sm-<?php echo $col_size_volunteer;?> text-center col-volunteer" style="min-height: <?php echo $height_container;?>;">
					<?php if(does_file_exist($cur_avatar)){?>
						<img src="<?php echo $cur_avatar;?>" class="img-responsive center-block" style="width: <?php echo $height_image;?>">
					<?php }else{?>
						<img src="<?php echo base_url();?>img/avatars/img_people_placeholder.jpg" class="img-responsive center-block" style="width: <?php echo $height_image;?>">
						<!-- <i class="fa fa-user-circle fa-4x" aria-hidden="true"  class="center-block img-responsive img-circle" style="font-size: <?php echo $height_placeholder;?>;"></i><br /> -->
					<?php }?>
	
					<strong style="font-size: <?php echo $font_size_name;?>;"><?php echo $cur['name_first'].' '.$this->website_model->display_format_people_name_last($cur['name_last']);?></strong><br />
					<span style="font-size: <?php echo $font_size_role;?>;"><?php echo $this->communities_model->format_role_titles($cur);?></span><br />
					<span style="font-size: <?php echo $font_size_phone;?>;"><?php echo  format_phone($cur['people_phone_mobile']);?></span><br />
					<small style="font-size: <?php echo $font_size_email;?>;"><?php echo $this->website_model->display_format_email($cur['people_email_primary']);?></small><br />
					<span style="font-size: <?php echo $font_size_meal;?>;"><?php echo $this->communities_model->format_meal_date($cur);?></span>
				</div>	
					<?php $i++;
						} // End If
					}?>
			
		  <div class="row">
			  <?php if(!empty($item['community_food_preferences'])){?>
					<div class="col-sm-5 col-sm-offset-1 well">
						<h4 style="margin-top: 0px" class="text-center">Food Preferences</h4>
						<p><?php echo  $this->website_model->format_copy($item['community_food_preferences']);?></p>
					</div>
				<?php }?>	
				<?php if(!empty($item['community_food_allergies'])){?>
					<div class="col-sm-5 col-sm-offset-1 well">
						<h4 style="margin-top: 0px" class="text-center">Food Allergies / Sensitivities</h4>
						<p><?php echo $this->website_model->format_copy($item['community_food_allergies']);?></p>
					</div>
					  <?php }?>
			</div>
		</div>
	</div>

<!-- top navigation -->
<?php echo $site_footer;?>
<script>
	$('.printer-button').on('click', function() {  
	  window.print();  
	  return false;
	});
	
	$(document).ready(function(){
		$(function() {
			$('.col-volunteer').matchHeight({byRow: false});
		});
	});
</script>

<style>
	.col-volunteer{
		margin-bottom: 10px;
	}
<!-- /top navigation -->