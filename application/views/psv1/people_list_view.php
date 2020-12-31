<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php
$name = '<small>';
 if (!empty($item['name_first'])){
		$name	.= ' - '.$item['name_first'];
}
 if (!empty($item['name_last'])){
		$name	.= ' '.$this->website_model->display_format_people_name_last($item['name_last']);
}
if(empty($item['id_people'])){
	$name .= ' New '.ucfirst($people_unit);
	$action	= 'Add';
}else{
	$action	= 'Edit';
}
$name .= '</small>';
?>

<div class="col-sm-12 main container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo base_url();?>dashboard">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>volunteers/list">
						Volunteers 
					</a>
				</li>
				<li class="active"><?php echo $action.' '.ucfirst($people_unit);?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Volunteers</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<?php echo $this->session->flashdata('msg'); ?>
	
				<br />
						<p class="text-muted font-13 m-b-30"></p>
					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Organization</th>
								<th>Affiate ID</th>
								<th>Date</th>
								<th>Total Earnings</th>
								<th>Actions</th>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										 $cur_link 		= base_url().'adminaffiliates/edit?id='.base64_encode($list['id_affiliate']);
										 if(is_int($list['affiliate_earnings_total'])){
											 $cur_earnings = number_format($list['affiliate_earnings_total'], 0,2);
										 }else{
											$cur_earnings	= '0.00';  
										 }
										 
										?>
									<tr>
									  <td><?php echo '<a href="'.$cur_link.'">'.$list['affiliate_name_first'].' '.$this->website_model->display_format_people_name_last($list['affiliate_name_last']).'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$list['affiliate_organization'].'</a>';?></td>
									  <td><?php echo '<a href="'.$cur_link.'">'.$list['affiliate_name_id'].'</a>';?></td>
									  <td><?php echo date_create(date('Y-m-d H:i:s', $list['date_add']))->setTimezone(new DateTimeZone($admin['user_time_zone']))->format('m/d/Y g:i A');?></td>
									  <td><?php echo '$'.$cur_earnings;?></td>
									  <td><a href="<?php echo base_url();?>adminaffiliates/edit?id=<?php echo base64_encode($list['id_affiliate']);?>"><i class="fa fa-pencil-square-o fa-1x"></i>&nbsp;&nbsp;<a href="#" data-href="<?php echo base_url();?>adminaffiliates/deleteitem?id=<?php echo base64_encode($list['id_affiliate']);?>" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash fa-1x"></i></a>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No affiliates found</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
	</div>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Confirm Delete
			</div>
			<div class="modal-body">
				Are you sure you want to delete this affiliate?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>


<!-- top navigation -->
<?php echo $site_footer;?>
<!-- /top navigation -->