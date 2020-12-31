<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>

<?php 
	$aff_name	= '';
	
	if(!empty($id_affiliate)){
		$aff_name	= ' - '.$this->affiliates_model->get_affiliate_name(array('id_affiliate' =>$id_affiliate));
	}
	
	//dds($ps);
?>
	
	<div class="col-sm-12 main container reports-container-html">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>dashboard">
					<em class="fa fa-home"></em>
				</a></li>
				<li>Reports</li>
				<li class="active">FAM Offerings</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Report - FAM Offerings <?php echo $aff_name;?></h1>
			</div>
		</div><!--/.row-->
		<!-- <h4>Reported Numbers for <?= $params['title'];?></h4> -->
		
		<?php if(1 == 1){?>
		<div class="row">
			<fieldset>
				<legend>FAM Offering Breakdowns</legend>
				
				<div class="row">
					<div class="col-sm-4">
						<h2 class="text-center">By Strategy</h2>
							
					</div>
					<div class="col-sm-4">
						<h2 class="text-center">By Category</h2>
						
					</div>
					<div class="col-sm-4">
						<h2 class="text-center">By Offering</h2>
						
					</div>
					
				</div>
				<div class="row">
					<div class="col-sm-4">
						
						<canvas id="chart-pie-a" width="400" height="400"></canvas>
					</div>
					<div class="col-sm-4">
						
						<canvas id="chart-pie-b" width="400" height="400"></canvas>
					</div>
					<div class="col-sm-4">
						
						<canvas id="chart-pie-c" width="400" height="400"></canvas>
					</div>
					
				</div>
			</fieldset>
		</div>
		<?php } ?>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>

var chart_pie_a_ctx = document.getElementById("chart-pie-a").getContext('2d');
var pie_a = new Chart(chart_pie_a_ctx, {
    type: 'pie',
    data: {
       labels: ["Prevention", "Intervention", "Connection"],
        datasets: [{
            label: 'By Strategy',
            data: [5,60,35],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
		maintainAspectRatio: false
    }
});

var chart_pie_b_ctx = document.getElementById("chart-pie-b").getContext('2d');
var pie_b = new Chart(chart_pie_b_ctx, {
    type: 'pie',
    data: {
       labels: ["Resource Center", "Special Events", "Support Groups", "Service Projects"],
        datasets: [{
            label: 'By Strategy',
            data: [5,20,40,35],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
		maintainAspectRatio: false
    }
});

var chart_pie_c_ctx = document.getElementById("chart-pie-c").getContext('2d');
var pie_c = new Chart(chart_pie_c_ctx, {
    type: 'pie',
    data: {
       labels: ["FCC", "PCC", "TCC", "Adoption 101", "Loaves & Fishes"],
        datasets: [{
            label: 'By Offering',
            data: [70,2,4,10,14],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
		maintainAspectRatio: false
    }
});

</script>
	<script src="<?php echo base_url();?>js/waypoints.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.counterup.min.js"></script>
	
</body>
</html>