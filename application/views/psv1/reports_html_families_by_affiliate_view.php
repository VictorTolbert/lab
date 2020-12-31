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
				<li class="active">Total Families By Affiliate</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Report - Total Families By Affiliate</h1>
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
				
					<div class="col-sm-4 ">
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
		<div class="row">
			<fieldset>
				<legend>Details</legend>
				<div class="col-sm-10 col-sm-offset-1">
					<table class="table table-responsive table-striped">
						<thead>
							<tr>
								<th>Add Date</th>
								<th>Family Name</th>
								<th>Status</th>
								<th class="text-center">Recruited by Church?</th>
								<th class="text-center">Served on CC?</th>
								<th>Affiliate</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if(empty($rows)){
									echo '<tr><td colspan="20">No families to list.</td></tr>';
								}else{
									foreach($rows as $cur){ 
									//Temporary check to remove Salesforce entires
									if($cur['id_add'] <> 1 && !empty($cur['family_name']) && strlen($cur['family_name']) > 3){
							?>
								<tr>
									<td>
										<?php echo date('m/d/Y', $cur['date_add']);?>
									</td>
									<td>
										<?php echo '<a href="'.base_url().'family/edit/'.url_enc($cur['id_family']).'?i='.$cur['id_family'].'" target="_blank">'.$cur['family_name'].'</a>';?>
									</td>
									<td>
										<?php echo $this->families_model->get_family_status_from_state($cur);?>
									</td>
									<td class="text-center">
										<?php echo $this->reports_model->get_checked_state(array('value' => $cur['previously_served_on_cc'], 'return' => 'icon', 'null_on_no' => 1));?>
									</td>
									<td class="text-center">
										<?php echo $this->reports_model->get_checked_state(array('value' => $cur['recruited_by_church'], 'return' => 'icon', 'null_on_no' => 1));?>
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
            label: 'Families by affiliate',
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
            label: 'Families by status',
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
            label: 'Families Recruited By Churches',
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
            label: 'Families Who Previously Served',
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