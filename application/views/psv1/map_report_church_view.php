<?php echo $site_header; ?>

<div id="element-to-print" class="container top20">
	<div id="page1">
		<div class="row">
			<div class="">
				<img src="<?php echo base_url();?>img/affiliates/1/logo_promise686.png" class="center-block img-responsive" style="max-height: 100px;">
			</div>
		</div>
		<div class="row top40">
			<p><?php echo date('F d, Y');?></p>
			<p>RE: <?php echo $map['church_name'];?> FAM Update 2020</p>
			<p>Dear <?php echo $name_recipient_full;?>
			<p>Attached you’ll find your Ministry Action Plan Statement for <?php echo $map['church_name'];?>. As always, thank you for partnering with us to benefit vulnerable children! We cannot help children without you! You have the people—the families and volunteers—and we have the systems, guidance, and relationships you need for accelerated impact. </p>
			
			<p>Church giving is essential to this thriving movement aiding vulnerable children—whether they are in local families, foster care, or an adoption process.  Each church we serve costs Promise686 approximately $1,800 annually. Some churches will prayerfully choose to give more than this amount and some will need to give less or even nothing at all. We have created an <a href="<?php echo $url_giving;?>" target="_blank">online giving link</a> where your church can make contributions and even automate them to recur at custom intervals. </p>
			
			<p>Please contact us if we can support you more or if you have any questions. I pray that the Family Advocacy Ministry (“FAM”) within your church is growing and impacting more and more children in need.</p>

			<p>Sincerely, <br />
				<img src="<?php echo base_url();?>img/signature_andy_cook.png" class="img-responsive" style="max-height: 70px;"><br />
				CEO, Promise686, Inc.
			</p>
		</div>
		<div class="text-center visible-print">
				<hr /><strong>
				Promise686, Inc., 19 Holcomb Bridge Road, Norcross, Georgia 30071 <br />
				Phone: 770. 274.6560  |  donations@promise686.org </strong>
		</div>
	</div>
	
	<div id="page2" class="top20 ps-page-break" style="page-break-before:always;">
		<div class="text-center">
			<img src="<?php echo base_url();?>img/affiliates/1/logo_promise686.png" class="center-block img-responsive visible-print" style="max-height: 100px;">
			<h1 class="text-center">FAM Update</h1>
			<h2 class="text-center"><?php echo date('F d, Y');?></h2>
		</div>
		<div class="ps_map_callout">
			<div class="row">
				<div class="col-sm-8 text-right">
					Statewide Economic Impact of CarePortal:
				</div>
				<div class="col-sm-3 text-left">
					$618,096
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 text-right">
					Total CarePortal Children Served by your church:
				</div>
				<div class="col-sm-3 text-left">
					33
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 text-right">
					Families In Church Awarded Promise686 Adoption Grants:  
				</div>
				<div class="col-sm-3 text-left">
					41
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 text-right">
					Total Adoption Grant Dollars Committed To Families In Church:   
				</div>
				<div class="col-sm-3 text-left">
					$434,369
				</div>
			</div>
			<div class="row top20 text-center">
				<em>Thank you for your church’s partnership in helping vulnerable children.</em>
			</div>
		</div>
		<div class="row top40">
			<div class="col-xs-12 col-sm-6">
				<h3 class="text-center">Benefits/Deliverables of Church Partnership:</h4>
				<ul>
					<li>Ongoing consulting and goal-setting from a Promise686 Regional Manager</li>
					<li>Access to Advocate FAM Resources</li>
					<li>Resources for recruitment and support: awareness videos, volunteer equipping materials and Advocate Ministry Handbook</li>
					<li>Preferred access to Adoption Grant funds</li>
					<li>Streamlined access to Child Placing Agencies and specific requirements for engagement</li>
					<li>Connection to a coalition of churches serving together for greater impact</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6">
				<h3 class="text-center">Other Significant Benefits of Church Partnership: </h4>
				<ul>
					<li>Helping vulnerable children discover the love of a family, connecting them to the love of God</li>
					<li>Providing financial resources and heightened awareness to families adopting orphans</li>
					<li>Building awareness for the plight of children in foster care locally and nationwide</li>
					<li>Enhancing child welfare efforts through the addition of new foster families</li>
					<li>Assisting families to foster longer via volunteer support</li>
					<li>Creating a network of support and accountability for vulnerable children</li>
				</ul>
			</div>
		</div>
		<div class="text-center visible-print">
			<hr /><strong>
			Promise686, Inc., 19 Holcomb Bridge Road, Norcross, Georgia 30071 <br />
			Phone: 770. 274.6560  |  donations@promise686.org </strong>
		</div>
	</div>
	
	<hr class="hidden-print">
	
	<div id="page3" class="top20 ps-page-break" style="page-break-before:always;">
		<div class="row">
			<div class="">
				<img src="<?php echo base_url();?>img/affiliates/1/logo_promise686.png" class="center-block img-responsive visible-print" style="max-height: 100px;">
				<h1 class="text-center">Ministry Action Plan Statement</h1>
				<h2 class="text-center"><Important Note about MAPs:</h2>
			</div>
		</div>
		<div class="row">
			<p>MAPs are highly customized to your church’s specific ministry goals.  Not all goals listed below will be relevant to your church, and many churches may choose to focus on only one or a couple goals listed below (or additional goals not listed below).  Additionally, new churches may not have any MAP goals listed while they prayerfully plan the direction of their ministry.  The MAP is our way of helping to determine how we, at Promise686, can best encourage and support your efforts throughout the year. MAPs also help us to celebrate overall ministry efforts as we work together to fulfill God’s Promise to “place the lonely in families.” If you would like to create or update your MAP goals, please contact your Regional Manager.</p>
		</div>
		<div class="row top40">
			<table class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>Description</th>
						<th>Goal</th>
						<th>Actual<br /><small>reported to date</th>
					</tr>
				</thead>
				<tbody>
				<?php if(!empty($map_church_data['goal_events_awareness']) || !empty($map_church_data['actual_events_awareness'])){?>
					<tr>
						<td>Awareness Events</td>
						<td><?php echo $map_church_data['goal_events_awareness'];?></td>
						<td><?php echo $map_church_data['actual_events_awareness'];?></td>
					</tr>
				<?php }?>
				
				<?php if(!empty($map_church_data['goal_new_care_communities']) || !empty($map_church_data['actual_new_care_communities'])){?>
					<tr>
						<td>New Care Communities</td>
						<td><?php echo $map_church_data['goal_new_care_communities'];?></td>
						<td><?php echo $map_church_data['actual_new_care_communities'];?></td>
					</tr>
				<?php }?>
					
				<?php if(!empty($map_church_data['goal_new_approved_ff']) || !empty($map_church_data['actual_new_approved_ff'])){?>
					<tr>
						<td>New Approved Foster Families</td>
						<td><?php echo $map_church_data['goal_new_approved_ff'];?></td>
						<td><?php echo $map_church_data['actual_new_approved_ff'];?></td>
					</tr>
				<?php }?>
					
				<?php if(!empty($map_church_data['goal_new_trained_vols']) || !empty($map_church_data['actual_new_trained_vols'])){?>
					<tr>
						<td>New Equipped Volunteers</td>
						<td><?php echo $map_church_data['goal_new_trained_vols'];?></td>
						<td><?php echo $map_church_data['actual_new_trained_vols'];?></td>
					</tr>
				<?php }?>
					
				<?php if(1==2 && !empty($map_church_data['goal_events_awareness']) || !empty($map_church_data['actual_events_awareness'])){?>
					<tr>
						<td>New Advocate Team Volunteers</td>
						<td><?php echo $map_church_data['goal_new_approved_ff'];?></td>
						<td><?php echo $map_church_data['goal_new_approved_ff'];?></td>
					</tr>
				<?php }?>					
				
				<?php if(!empty($map_church_data['goal_ministry_budget_external']) || !empty($map_church_data['actual_ministry_budget_external'])){?>
					<tr>
						<td>External Ministry Budget<br /><small>(what you would like to contribute to Promise686)</small></td>
						<td>$<?php echo number_format($map_church_data['goal_ministry_budget_external'], 2);?></td>
						<td>$<?php echo number_format($map_church_data['actual_ministry_budget_external'], 2);?></td>
					</tr>
				<?php }?>
				
				<?php if(!empty($map_church_data['goal_ministry_budget_internal']) || !empty($map_church_data['actual_ministry_budget_internal'])){?>
					<tr>
						<td>Internal Ministry Budget<br /><small>(what you will need to support your ministry internally)</small></td>
						<td>$<?php echo number_format($map_church_data['goal_ministry_budget_internal'], 2);?></td>
						<td>$<?php echo number_format($map_church_data['actual_ministry_budget_internal'], 2);?></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
		<div class="text-center">
			<hr /><strong>
			Promise686, Inc., 19 Holcomb Bridge Road, Norcross, Georgia 30071 <br />
			Phone: 770. 274.6560  |  donations@promise686.org </strong>
		</div>
	</div>
</div>

<button id="saveaspdf" class="btn btn-primary">PDF</button>

<style>
body{
	font-size: 14px;
}

p{
	padding: 10px;
}
.ps_map_callout .row{
	padding-top: 20px;
}
	
.ps_map_callout{
	font-size: 1.1em;
	font-weight: 600;
}

li{ padding-top: 15px;}

th, td{ text-align: center;}
td{ padding: 30px;}

@media print{
	.promise-footer{
		display:none;
	}
}
</style>


<?php echo $site_footer;?>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.1.1/jspdf.umd.min.js"></script>
<script src="<?php echo base_url();?>js/html2canvas.min.js"></script>
<script src="<?php echo base_url();?>js/html2pdf.bundle.min.js"></script>
<script>
var element = document.getElementById('element-to-print');
var opt = {
	margin:       0,
	filename:     '<?php echo $this->reports_model->make_report_filename(array('report' => 'map_church_report', 'format' => 'pdf', 'data' => $map));?>',
	image:        	{ type: 'jpeg', quality: 0.98 },
	html2canvas: 	{ 	scale: 1,
						width: document.getElementById("element-to-print").offsetWidth, 
					},
	jsPDF:			{ 	
						unit: 'in', 
						format: 'letter', 
						orientation: 'portrait', 
					 
					},
	pagebreak: 		{ mode: 'css', after: ['#page1', '#page2']}
};

$('#saveaspdf').click(function() {
	
	html2pdf().set(opt).from(element).save();
	
});



</script>
