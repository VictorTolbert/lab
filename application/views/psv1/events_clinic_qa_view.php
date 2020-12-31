<!-- Header Section -->
<?php echo $site_header; ?>
<style>
	.promise-footer{ display: none;}
	.ps-ve-qa-highlight-question{ font-size: 58px; color: #fff; font-weight: 500; font-style: italic;}
	.ps-ve-qa-highlight-author{ font-size: 38px; color: #fff;}
</style>
<style>body{font-family: 'Gotham-Black', sans-serif !important; overflow: hidden;}</style>
<?php echo $site_sidebar; ?>
	
	<div class="container-full" style="background: url('<?php echo base_url();?>/img/ve_clinic_bg_qa.jpg'); background-size: contain; min-height: 2000px; overflow: hidden;">
		<div class="row top60" style="">
			<div class="col-sm-2 col-xs-2"></div>
			<div class="col-sm-10 col-xs-2 text-center" style="color: #fff; font-size: 36px; margin-top: 10%; ">
				<div class="container">
					<?php echo $content;?>
				</div>
			</div>
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
	

</body>
</html>