<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>

<?php 
if(!empty($content['body'])){ 
	$min_height 		= "500px";
	$container_style	= 'margin-top: -180px;';
}else{
	$min_height 		= "700px";
	$container_style 	= '';
	
}
?>
	
	

<?php 
$random = rand(1,4);
?>

<div class="hero-image" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/success/hero_success_1.jpg'); background-position: center; min-height: <?= $min_height;?>;" div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center top40">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center top40">Success!</h1>';}?>
		<div class="col-sm-4 col-sm-offset-4"><?php echo $this->session->flashdata('msg'); ?></div>
		<div class=" col-sm-12 col-xs-12"><p class="text-center"><?= $message;?></p></div>
		
	 </div>
</div>
<div class="col-sm-12 main container container-<?= $env_scope;?>" style="<?= $container_style;?>">
	<div class="row ">
		<div class="container">
			
			<?php 
				if(!empty($content['body'])){ 
					echo $content['body']; 
				}else{
			?>
			
			<div class="top40">
				<div class="col-sm-12 col-xs-12">
					
				</div>
			</div>
			<?php }?>
		</div><!--/.row-->
	</div>
</div>
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>