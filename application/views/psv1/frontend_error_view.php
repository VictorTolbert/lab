<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>

<?php 
$random = rand(1,4);
?>

<div class="hero-image" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= base_url();?>/img/hero_random/error/hero_error_<?= $random;?>.jpg'); background-position: center; min-height: 700px;">
	<div class="hero-text col-xs-12 col-sm-12">
		<img src="<?php echo base_url();?>img/affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
		<?php if(!empty($content['header'])){ echo '<h1 class="text-center top40">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center top40">Whoops, there was an error!</h1>';}?>
		<p class="text-center"><?= $message;?></p>
	 </div>
</div>
<div class="col-sm-12 main container container-<?= $env_scope;?>">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20 text-center">
			
		</div>
	</div>
	
	
	
	<div class="row top10">
		<div class="container">
			
			<?php echo $this->session->flashdata('msg'); ?>
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