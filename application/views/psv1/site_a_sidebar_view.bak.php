<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar hidden-print">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<?php if(!empty($user['url_avatar'])){
				echo '<a href="'.base_url().'advocate/edit/'.url_enc($user['id_people']).'"><img src="'.$this->people_model->get_avatar_filename($user).'" class="img-responsive" alt="" width="50" height="50"></a>';
			}else{
				echo '<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">';
			}
			?>
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name"><?php echo $user['name_first'].' '.$this->website_model->display_format_people_name_last($user['name_last']);?></div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	<form role="search">
		<div class="form-group">
			<!--<input type="text" class="form-control" placeholder="Search"> -->
		</div>
	</form>
	<ul class="nav menu">
		<!-- <li class="<?php echo $nav_active['das'];?>"><a href="<?php base_url();?>dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li> 
		<li class="<?php echo $nav_active['cal'];?>"><a href="<?php echo base_url();?>calendar"><em class="fa fa-calendar">&nbsp;</em> Calendar</a></li>
		<li class="<?php echo $nav_active['aff'];?>"><a href="<?php echo base_url();?>affiliates/view"><em class="fa fa-cubes">&nbsp;</em> Affiliates</a></li>
		<li class="<?php echo $nav_active['reg'];?>"><a href="<?php echo base_url();?>regions/view"><em class="fa fa-globe">&nbsp;</em> Regions</a></li>
		<li class="<?php echo $nav_active['sta'];?>"><a href="<?php echo base_url();?>staff/view"><em class="fa fa-id-card-o">&nbsp;</em> Staff</a></li> -->
		<li class="<?php echo $nav_active['chu'];?>"><a href="<?php echo base_url();?>churches/view"><em class="fa fa-plus">&nbsp;</em> Churches</a></li>
		<li class="<?php echo $nav_active['adv'];?>"><a href="<?php echo base_url();?>advocates/list"><em class="fa fa-user-plus">&nbsp;</em> Advocates</a></li>
		<!-- <li class="<?php echo $nav_active['fam'];?>"><a href="<?php echo base_url();?>families/list"><em class="fa fa-child">&nbsp;</em> Families</a></li> -->
		<li class="<?php echo $nav_active['com'];?>"><a href="<?php echo base_url();?>communities/list"><em class="fa fa-users">&nbsp;</em> Communities</a></li>
		<li class="<?php echo $nav_active['vol'];?>"><a href="<?php echo base_url();?>volunteers/list"><em class="fa fa-handshake-o">&nbsp;</em> Volunteers</a></li>
		<li class="<?php echo $nav_active['eve'];?>"><a href="<?php echo base_url();?>events/list"><em class="fa fa-ticket">&nbsp;</em> Events</a></li>
		
		<!--
		<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
		<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
		<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
			<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
			</a>
			<ul class="children collapse" id="sub-item-1">
				<li><a class="" href="#">
					<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
				</a></li>
				<li><a class="" href="#">
					<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
				</a></li>
				<li><a class="" href="#">
					<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
				</a></li>
			</ul>
		</li>
		-->
		<li><a href="<?php echo base_url();?>logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
	</ul>
</div><!--/.sidebar-->