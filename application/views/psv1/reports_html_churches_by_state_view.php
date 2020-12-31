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
				<li class="active">Total Churches By State</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Report - Total Churches By State</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<fieldset>
				<legend>Chart</legend>
				<div class="col-sm-10 col-sm-offset-1">
					<canvas id="myChart" width="400" height="400"></canvas>
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
								<th>Church Name</th>
								<th>State</th>
								<th>Status</th>
								<th>Affiliate</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if(empty($rows)){
									echo '<tr><td colspan="20">No churches to list.</td></tr>';
								}else{
									foreach($rows as $cur){ 
							?>
								<tr>
									<td>
										<?php echo date('m/d/Y', $cur['date_add']);?>
									</td>
									<td>
										<?php echo  $this->churches_model->get_church_name($cur);?>
									</td>
									<td>
										<?php echo  get_state_abbr($cur['address_state']);?>
									</td>
									<td>
										<?php echo $this->churches_model->get_church_status_from_state($cur);?>
									</td>
									<td>
										<?php echo $cur['affiliate_name'];?>
									</td>
								</tr>
							<?php
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
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?=$chart['labels'];?>],
        datasets: [{
            label: 'Churches by State',
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
</script>
</body>
</html>