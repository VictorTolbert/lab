<!-- Header Section -->
<?php echo $site_header; ?>
<?php echo $site_sidebar; ?>
<?php 

$name = '';
if (!empty($item['community_name'])){
	$name = $item['community_name'];
}
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
					<a href="<?php echo base_url();?>communities/viewlist">
						Communities
					</a>
				</li>
				<li class="active"><small>Close Communiy</small></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Close Community Wizard - <?php echo $name;?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<br />
				<?php echo $this->session->flashdata('msg'); ?>
				<form class="form-horizontal form-label-left" action="<?php echo base_url();?>events/save" method="post">
					
					<div class="col-sm-6 col-sm-offset-3 well">
						<fieldset>
							<legend>What would you like to do?</legend>
							<p>To close the <?php echo $item['community_name'];?> care community please select an option from below.</p>
								<div class="form-group top40">
									<label class="col-md-9 col-sm- col-xs-12 text-left">1) Close this care community and create a new care community for this same family.</label>
									<div class="col-md-3 col-sm-3 col-xs-12 text-center">
										<a href="<?php echo base_url().'communities/save_close_community_and_new/'.$item['id_community_encoded'];?>" class="btn btn-primary btn-block">Close & New</a>
									</div>
								</div>
								<div class="ln_solid top40"><hr /></div>
								<div class="form-group ">
									<label class="col-md-9 col-sm-9 col-xs-12 text-left">2) Close this care community and set all volunteers to "Prepared & Waiting".</label>
									<div class="col-md-3 col-sm-3 col-xs-12 text-center">
										<a href="<?php echo base_url().'communities/save_close_community_release/'.$item['id_community_encoded'];?>" class="btn btn-primary btn-block">Close & Release</a>
									</div>
								</div>
								<?php if(1 ==2){?>
								<div class="ln_solid top40"><hr /></div>
								<div class="form-group">
									<label class="text-leftcol-md-9 col-sm-9 col-xs-12">3) Close this team and re-assign volunteers.</label>
									<div class="col-md-3 col-sm-3 col-xs-12 text-center">
										<a href="<?php echo base_url().'communities/close/';?>" class="btn btn-primary btn-block">Close & Re-assign</a>
									</div>
								</div>
								<?php }?>
								<div class="ln_solid top40"><hr /></div>
								<div class="form-group top40">
									<label class="col-md-9 col-sm- col-xs-12 text-left">3) Close this care community and create a new care community for a new family.</label>
									<div class="col-md-3 col-sm-3 col-xs-12 text-center">
										<a href="<?php echo base_url().'communities/save_close_community_and_new_family/'.$item['id_community_encoded'];?>" class="btn btn-primary btn-block">Close & New</a>
									</div>
								</div>
								<div class="ln_solid top40"><hr /></div>
								
								<div class="form-group">
									<label class="text-left col-md-9 col-sm-9 col-xs-12">4) Nevermind, don't close this care community.</label>
									<div class="col-md-3 col-sm-3 col-xs-12 text-center">
										<a href="<?php echo base_url().'communities/viewlist';?>" class="btn btn-primary btn-block">Cancel</a>
									</div>
								</div>
							</div>
						</fieldset>
						<div class="ln_solid top40"><hr /></div>
						
					</div>
				  <input type="hidden" name="id_community_encoded" value="<?php echo $item['id_community_encoded'];?>" />
			  </form>
			</div><!--/.row-->
		</div>
	</div>
	
    
<!-- Footer Section -->
<?php echo $site_footer; ?>
<script src="<?php echo base_url();?>js/avatar.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	$(".btn-switch").bootstrapSwitch();
});

</script>
</body>
</html>