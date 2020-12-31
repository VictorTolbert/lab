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
				<li class="active">MAP Report</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Report - MAP Churches <?php echo $aff_name;?></h1>
			</div>
		</div><!--/.row-->
		<!-- <h4>Reported Numbers for <?= $params['title'];?></h4> -->
		
		<div class="row report-callouts">
			<div class="col-xs-12 col-sm-8 well col-sm-offset-2">
				<h4>Active Churches</h4>
				<div class="col-sm-6"><h5 class="text-center">Promise686</h5></div>
				<div class="col-sm-6"><h5 class="text-center">All Affiliates</h5></div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format(count($map['count_churches']));?>
					</h2>
					<p class="text-center"><small>SF - Number of churches who responded</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($ps[1]['active_churches']);?>
					</h2>
					<p class="text-center"><small>PS - Promise686 churches marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($affiliate_totals['actual_active_churches']);?>
					</h2>
					<p class="text-center"><small>SF - All affiliates churches marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($ps['all']['active_churches']);?>
					</h2>
					<p class="text-center"><small>PS - All affiliates churches marked active</small></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 well col-sm-offset-2">
				<h4>Active Volunteers</h4>
				<div class="col-sm-6"><h5 class="text-center">Promise686</h5></div>
				<div class="col-sm-6"><h5 class="text-center">All Affiliates</h5></div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($totals['actual_active_vols']);?>
					</h2>
					<p class="text-center"><small>SF - Number of volunteers MAP reported</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($ps[1]['active_vols']);?>
					</h2>
					<p class="text-center"><small>PS - Promise686 volunteers marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($affiliate_totals['actual_active_vols']);?>
					</h2>
					<p class="text-center"><small>SF - All affiliates volunteers marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($ps['all']['active_vols']);?>
					</h2>
					<p class="text-center"><small>PS - All affiliates volunteers marked active</small></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 well col-sm-offset-2">
				<h4>Families Served (Active CCs)</h4>
				<div class="col-sm-6"><h5 class="text-center">Promise686</h5></div>
				<div class="col-sm-6"><h5 class="text-center">All Affiliates</h5></div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($totals['actual_active_care_communities']);?>
					</h2>
					<p class="text-center"><small>SF - LTP status entered number</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($ps[1]['active_ccs']);?>
					</h2>
					<p class="text-center"><small>PS - Promise686 CCs marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($affiliate_totals['actual_active_ccs']);?>
					</h2>
					<p class="text-center"><small>SF - All affiliates CCs marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format($ps['all']['active_ccs']);?>
					</h2>
					<p class="text-center"><small>PS - All affiliates CCs marked active</small></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8 well col-sm-offset-2">
				<h4>Children Served <small>(1.8 x Active CCs)</small></h4>
				<div class="col-sm-6"><h5 class="text-center">Promise686</h5></div>
				<div class="col-sm-6"><h5 class="text-center">All Affiliates</h5></div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format(ceil($totals['actual_active_care_communities'] * 1.8));?>
					</h2>
					<p class="text-center"><small>SF - LTP status entered number</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format(ceil($ps[1]['active_ccs'] * 1.8));?>
					</h2>
					<p class="text-center"><small>PS - Promise686 CCs marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format(ceil($affiliate_totals['actual_active_ccs']));?>
					</h2>
					<p class="text-center"><small>SF - All affiliates CCs marked active</small></p>
				</div>
				<div class="col-sm-3">
					<h2 class="report-callout-counter">
						<?php echo number_format(ceil($ps['all']['active_ccs'] * 1.8));?>
					</h2>
					<p class="text-center"><small>PS - All affiliates CCs marked active</small></p>
				</div>
			</div>
		</div>
		<?php if(1 ==2){?>
		<div class="row report-callouts">
			<div class="col-xs-12 col-sm-4 well">
				<h4>New Churches Engaged</h4>
				<h2 class="report-callout-counter">
					<?php echo number_format($totals['actual_new_churches_engaged']);?>
				</h2>
			</div>
			<div class="col-xs-12 col-sm-4 well">
				<h4>New Awareness Events</h4>
				<h2 class="report-callout-counter">
					<?php echo number_format($totals['actual_events_awareness']);?>
				</h2>
			</div>
			<div class="col-xs-12 col-sm-4 well">
				<h4>New CCs Launched</h4>
				<h2 class="report-callout-counter">
					<?php echo number_format($totals['actual_new_care_communities']);?>
				</h2>
			</div>
			<div class="col-xs-12 col-sm-4 well">
				<h4>New Trained Volunteers</h4>
				<h2 class="report-callout-counter">
					<?php echo number_format($totals['actual_new_trained_vols']);?>
				</h2>
			</div>
			<div class="col-xs-12 col-sm-4 well">
				<h4>New Approved Foster Families</h4>
				<h2 class="report-callout-counter">
					<?php echo number_format($totals['actual_new_approved_ff']);?>
				</h2>
			</div>
			<div class="col-xs-12 col-sm-4 well">
				<h4>Adoption 101 Events</h4>
				<h2 class="report-callout-counter">
					<?php echo number_format($totals['actual_events_adoption101']);?>
				</h2>
			</div>
		</div>
		<?php }?>
		<?php if($show_main_graph){?>
		<div class="row">
			<fieldset>
				<legend>Foster Family Recruitment Break-Down</legend>
				
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<canvas id="myChart" width="400" height="400"></canvas>
					</div>
				</div>
			</fieldset>
		</div>
		<?php } ?>
		<div class="row">
			<fieldset>
				<legend>Details</legend>
				<div class="col-sm-10 col-sm-offset-1">
					<table class="table table-responsive table-bordered table-striped text-center">
						<thead>
							<tr>
								<th>Church</th>
								<th>Churches Engaged</th>
								<th>Awareness Events</th>
								<th>CCs Launched</th>
								<th>Active Care Communities</th>
								<th>Active Volunteers</th>
								<th>New Trained Volunteers</th>
								<th>Approved Foster Families</th>
								<th>Adoption 101 Event</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if(empty($data_by_churches)){
									echo '<tr><td colspan="20">No church data to list.</td></tr>';
								}else{
									foreach($data_by_churches as $cur){ 
									
							?>
								<tr>
									<td class="text-left">
										<?php echo $this->churches_model->get_church_name($cur);?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_new_churches_engaged'])){ echo number_format($cur['data']['actual_new_churches_engaged']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_events_awareness'])){ echo number_format($cur['data']['actual_events_awareness']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_new_care_communities'])){ echo number_format($cur['data']['actual_new_care_communities']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_active_care_communities'])){  echo '<a target="_blank" href="'.base_url().'communities/viewlist?id_church='.$cur['id_church'].'">'.number_format($cur['data']['actual_active_care_communities']).'</a>';}?>
										
										<?php 
											$ccs = $this->communities_model->get_communities(array('id_church' => $cur['id_church'], 'status' => 'active', 'limit' => 10000, 'debug' => 0));
											if(!empty($ccs)){
												echo '&nbsp; / &nbsp;<a target="_blank" href="'.base_url().'communities/viewlist?id_church='.$cur['id_church'].'">'.count($ccs).'</a>';
											}elseif(!empty($cur['data']['actual_active_care_communities'])){
												echo '&nbsp; / &nbsp; 0';
											}
										?>
									</td>
									<td>
										<?php 
											if(!empty($cur['data']['actual_active_vols'])){ echo '';}
											
											$peeps = $this->people_model->get_people_count(array('vols_by_church' =>  $cur['id_church'], 'state' => 40, 'limit' => 1000000, 'debug' => 0));
											
											if(!empty($peeps)){
												echo '&nbsp; / &nbsp;<a target="_blank" href="'.base_url().'volunteers/list?id_church='.$cur['id_church'].'">'.$peeps.'</a>';
											}elseif(!empty($cur['data']['actual_active_vols'])){
												echo '&nbsp; / &nbsp; 0';
											}
										
										
										?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_new_trained_vols'])){ echo number_format($cur['data']['actual_new_trained_vols']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_new_approved_ff'])){ echo number_format($cur['data']['actual_new_approved_ff']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_events_adoption101'])){  echo number_format($cur['data']['actual_events_adoption101']);}?>
									</td>
									
									
								</tr>
							<?php
									}//End Foreach
									foreach($affiliates as $cur){ 
							?>
								<tr>
									<td class="text-left">
										<?php echo 'Affiliate - '.$cur['affiliate_name'];?>
									</td>
									<td>
										<?php if(!empty($cur['actual_active_churches'])){ echo number_format($cur['actual_active_churches']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_events_awareness'])){ echo number_format($cur['data']['actual_events_awareness']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_new_care_communities'])){ echo number_format($cur['data']['actual_new_care_communities']);}?>
									</td>
									<td>
										<?php if(!empty($cur['actual_active_ccs'])){  echo number_format($cur['actual_active_ccs']);}?>
									</td>
									<td>
										<?php if(!empty($cur['actual_active_vols'])){ echo number_format($cur['actual_active_vols']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_new_approved_ff'])){ echo number_format($cur['data']['actual_new_approved_ff']);}?>
									</td>
									<td>
										<?php if(!empty($cur['data']['actual_events_adoption101'])){  echo number_format($cur['data']['actual_events_adoption101']);}?>
									</td>
									
									
								</tr>
									
							<?php	
									}
								}
							?>
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
	<script src="<?php echo base_url();?>js/waypoints.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.counterup.min.js"></script>
	<script>
        jQuery(document).ready(function($) {
            $('.report-callout-counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>
</html>