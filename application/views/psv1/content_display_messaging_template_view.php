<!-- Header Section -->
<?php echo $site_header; ?>
<div class="container col-sm-12">
	<div class="row">
			<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 top20 text-center">
				<img id="masthead-affiliate-logo" src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_large.png" class="img-responsive center-block" style="max-height: 150px;">
			</div>
		</div>
	<div class="row top10">
		<div class="container">
			<?php if(!empty($content['header'])){ echo '<h1 class="text-center">'.$content['header'].'</h1>'; }else{ echo '<h1 class="text-center">Refer a Family For Care Community Support</h1>';}?>
			<?php echo $this->session->flashdata('msg'); ?>
			<?php 
				if(!empty($content['body'])){ 
					echo $content['body']; 
				}?>
			</div><!--/.row-->
		</div>
		
	</div>
</div>	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
</body>
</html>