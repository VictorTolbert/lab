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
				<li class="active"><?php echo  'List Families';?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Families <small><a href="<?php echo base_url();?>familes/edit/?i=0">Add New</a></small></h1>
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
								<th>Church</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
					  <tbody>
						  <?php if(isset($lists)){
									foreach($lists AS $list){
										 $cur_link 		= base_url().'family/edit/'.$list['id_people_encoded'];
										 switch($list['state']){
											 case '-2':
												$status			= 'Deleted';
											 break;
											 case '1':
												$status			= 'Available';
											 break;
											 case '20':
												$status			= 'Serving';
											 break;
										 }
										
										?>
									<tr>
										<td>
											<?php echo '<a href="'.$cur_link.'">'.$list['name_first'].' '.$this->website_model->display_format_people_name_last($list['name_last']).'</a>';?>
										</td>
										<td>
											<?php echo '<a href="'.$cur_link.'">'.$list['people_email'].'</a>';?>
										</td>
										<td>
											<?php 
												foreach($list['assigned'] as $cur_assign){
													if($cur_assign['role_scope'] == $role_scope){
														echo '<a href="'.$cur_link.'">'.$this->churches_model->get_church_name($cur_assign).'</a><br />';
													}
												}
											?>
										</td>
										<td>
											<?php echo '<a href="'.$cur_link.'">'.$status.'</a>';?>
										</td>
									  <td>
										<a href="<?php echo $cur_link;?>">
											<i class="fa fa-pencil-square-o fa-1x"></i>
										</a>
										&nbsp;&nbsp;
										<a href="#" data-href="<?php echo base_url();?>family/delete?i=<?php echo $list['id_people_encoded'];?>" data-toggle="modal" data-target="#confirm-delete">
											<i class="fa fa-trash fa-1x"></i>
										</a>
									</tr>
								<?php }
								}else{
								?>
							<tr>
								<td colspan="20">No familes found.  <a href="<?php echo base_url();?>familes/list?clear_limiters=1">Try broadening your search.</a></td>
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
				Are you sure you want to delete this family?
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