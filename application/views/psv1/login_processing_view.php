<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logging in - Promise Serves</title>
	<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="ltp-frontend ltp-body" style="padding-top: 0px;">
	<div class="wrapper" style="background-image: linear-gradient(rgba(225, 225, 225, 0.5), rgba(241, 244, 247, 1)), url('<?= $this->website_model->get_random_hero_image_url('general');?>')">
	<div class="container" style="padding-top: 10%;">
		<div class="row height-400" style="min-height: 400px;">
			<div class="col-sm-4 col-sm-offset-4 col-xs-12 text-center">
				<h1 class="text-center">Signing You In</h1>
				<p class="text-center"><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i></p>
				<p class="text-center">One moment please</p>
			</div><!-- /.col-->
		</div><!-- /.row -->	
	</div><!-- /.container -->	
	</div>
</body>
<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</html>