<!-- Header Section -->
<?php echo $site_header; ?>
<style>
@media print {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
  .visible-xs {
    display: none !important;
  }
  .hidden-xs {
    display: block !important;
  }
  table.hidden-xs {
    display: table;
  }
  tr.hidden-xs {
    display: table-row !important;
  }
  th.hidden-xs,
  td.hidden-xs {
    display: table-cell !important;
  }
  .hidden-xs.hidden-print {
    display: none !important;
  }
  .hidden-sm {
    display: none !important;
  }
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
  .ltp-body{
		padding-top: 0px;
		page-break-inside: avoid;
	}
	
	h2{
		margin: 0;
	}
	
	.promise-footer{
		display: none !important;
	}
}
</style>
<?php echo $site_sidebar; ?>

<?php $i=0;?>
	<div class="col-sm-12 main container">
		<div class="row hidden-print">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>">
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
			<div class="row">
				<div class="col-sm-4">
					<div class="col-sm-12 text-center">
						<div class="logo">
								<img src="<?php echo base_url();?>img/ltp_logo_black.png" class="center-block img-responsive ">
						</div>
					</div>
					<div class="col-sm-12 text-center top40">
						<h3 class="text-center">Care Community</h3>
						<p class="text-center">
							<?php echo $this->communities_model->format_foster_parents_name($item);?><br />
							<?php echo $this->communities_model->format_community_address($item);?><br />
							<?php echo $this->communities_model->format_foster_parents_phones($item);?>
						</p>
					</div>
				  <?php if(!empty($item['community_food_preferences'])){?>
						<div class="col-sm-12 well top40">
							<h4 style="margin-top: 0px" class="text-center">Food Preferences</h4>
							<p><?php echo  $this->website_model->format_copy($item['community_food_preferences']);?></p>
						</div>
					<?php }?>	
					<?php if(!empty($item['community_food_allergies'])){?>
						<div class="col-sm-12 well top40">
							<h4 style="margin-top: 0px" class="text-center">Food Allergies / Sensitivities</h4>
							<p><?php echo $this->website_model->format_copy($item['community_food_allergies']);?></p>
						</div>
						  <?php }?>
				</div>
				<div class="col-sm-8">
					<?php 
							foreach($item['team_members'] as $cur){
								
									$cur_avatar	= $this->people_model->get_avatar_filename($cur);
						?>

							<div class="col-sm-6 text-center top20" style="min-height: 155px;">
								
								<img src="<?php echo $cur_avatar;?>" class="center-block img-circle" height="75">
								<strong><?php echo $cur['name_first'].' '.$this->website_model->display_format_people_name_last($cur['name_last']);?></strong><br />
								<small><?php echo $this->communities_model->format_role_titles($cur);?></small><br />
								<small><?php echo  format_phone($cur['people_phone_mobile']);?></small><br />
								<small><?php echo $cur['people_email_primary'];?></small><br />
								<small><?php echo $this->communities_model->format_meal_date($cur);?></small>
						</div>
					<?php $i++;}?>
				</div>
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
</script>
<!-- /top navigation -->