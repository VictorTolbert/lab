<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
	
	<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>dashboard">
					<em class="fa fa-home"></em>
				</a></li>
				<li>Reports</li>
				<li class="active">Total Communities By Affiliate</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Report - Total Communities By Affiliate</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<fieldset>
				<legend>Chart</legend>
				<?php if($show_main_graph){?>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<canvas id="myChart" width="400" height="400"></canvas>
					</div>
				</div>
				<div class="row top60">
				<?php }else{?>
					<div class="row">
				<?php }?>
				
					<div class="col-sm-6 ">
						<canvas id="chart-pie-a" width="400" height="400"></canvas>
					</div>
					<div class="col-sm-6">
						<canvas id="chart-pie-b" width="400" height="400"></canvas>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="row">
			<fieldset>
				<legend>Details</legend>
				<div class="col-sm-10 col-sm-offset-1">
					<table class="table table-responsive table-striped">
						<thead>
							<tr>
								<th>Add Date</th>
								<th>Community Name</th>
								<th>Iteration</th>
								<th>Status</th>
								<th>Affiliate</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if(empty($rows)){
									echo '<tr><td colspan="20">No communities to list.</td></tr>';
								}else{
									foreach($rows as $cur){ 
									//Temporary check to remove Salesforce entires
									if($cur['id_add'] <> 1 && !empty($cur['community_name']) && strlen($cur['community_name']) > 3){
										if(empty($cur['iteration'])){
											$cur['iteration'] = 1;
										}
							?>
								<tr>
									<td>
										<?php echo date('m/d/Y', $cur['date_add']);?>
									</td>
									<td>
										<?php echo '<a href="'.base_url().'community/edit/'.url_enc($cur['id_community']).'?i='.$cur['id_community'].'" target="_blank">'.$cur['community_name'].'</a>';?>
									</td>
									<td>
										<?php echo ordinal($cur['iteration']);?>
									</td>
									<td>
										<?php echo $this->communities_model->get_community_status_from_state($cur);?>
									</td>
									<td>
										<?php echo $this->affiliates_model->get_affiliate_name_by_id($cur['assign_id_affiliate']) ;?>
									</td>
								</tr>
							<?php
									}
								}
							}?>
							<tr>
						</tbody>
						</table>
					</div>
				</fieldset>
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>

<script>
<?php if($show_main_graph){?>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?=$chart['labels'];?>],
        datasets: [{
            label: 'Communities by affiliate',
            data: [<?=$chart['data'];?>],
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
		maintainAspectRatio: false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
<?php }?>

var chart_pie_a_ctx = document.getElementById("chart-pie-a").getContext('2d');
var pie_a = new Chart(chart_pie_a_ctx, {
    type: 'pie',
    data: {
        labels: [<?=$chart_pie_a['labels'];?>],
        datasets: [{
            label: 'Communities by status',
            data: [<?=$chart_pie_a['data'];?>],
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
        labels: [<?=$chart_pie_b['labels'];?>],
        datasets: [{
            label: 'Communities Recruited By Churches',
            data: [<?=$chart_pie_b['data'];?>],
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
        labels: [<?=$chart_pie_c['labels'];?>],
        datasets: [{
            label: 'Communities Who Previously Served',
            data: [<?=$chart_pie_c['data'];?>],
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
</body>
</html>