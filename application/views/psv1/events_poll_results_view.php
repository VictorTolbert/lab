<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<style>body{font-family: 'Gotham-Black', sans-serif !important;}</style>
	
	<div class="container">
		<div class="row top60">
			<div class="col-sm-4 col-xs-4">
				<h1 class="text-left" style="text-transform: uppercase; font-weight: bold; line-height: 125px; font-size: 90px !important; color: #000">Poll<br /> Results</h1>
				<h2 class="text-left" style="  line-height: 50px; font-size: 40px !important; color: #000"><?php echo $poll['name'];?></h2>
				<h3 class="text-left top30" style="text-transform: uppercase; font-weight: bold; line-height: 30px; font-size: 30px !important; color: #713c39; margin-top: 80px !important"><?php echo $total_responses;?> Response<?php if($total_responses > 1){ echo 's';}?></h3>
			</div>
			<div class="col-sm-8 col-xs-8">
				<canvas id="chart-pie-a" width="400" height="400"></canvas>
			</div>
		</div><!--/.row-->
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>

var chart_pie_a_ctx = document.getElementById("chart-pie-a").getContext('2d');
var pie_a = new Chart(chart_pie_a_ctx, {
    type: 'pie',
    data: {
        labels: [<?=$chart_pie_a['labels'];?>],
        datasets: [{
            label: '',
            data: [<?=$chart_pie_a['data'];?>],
            backgroundColor: [
                'rgba(73, 149, 168, 1)',
				'rgba(112, 60, 57, 1)',
                'rgba(191, 191, 190,1)',
                'rgba(185, 203, 209, 1)',
                'rgba(13, 13, 13, 1)',
                'rgba(153, 102, 255,1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 0
        }]
    },
    options: {
		maintainAspectRatio: false
    }
});

</script>
<style>
	.promise-footer{ display: none;}
</style>
</body>
</html>