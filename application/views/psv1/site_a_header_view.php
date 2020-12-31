<?php
defined('BASEPATH') or exit('No direct script access allowed');

$under_maint					= false;
$i								=	null;
$t								=	1;
$localhost_list 				= array('127.0.0.1', "::1");
$dev_list						= array('dev.promiseserves.org', 'dev');
$demo_list						= array('demo.promiseserves.org', 'demo');
$is_localhost 					= false;
$is_demo		 				= false;
$is_dev		 					= false;
$non_prod_tag					= null;
$environment_front_end			= false;
$iframe							= get_req('iframe');
$cache_bust						= get_cur_cache_bust();

if (! empty($iframe) && ($iframe == 'reset' || $iframe == 'clear')) {
    unset($_SESSION['iframe']);
    $iframe = 0;
} elseif (! empty($iframe) && empty($_SESSION['iframe'])) {
    $_SESSION['iframe']	= 1;
} elseif (empty($iframe) && ! empty($_SESSION['iframe'])) {
    $iframe 			= 1;
}


if (! empty($env_scope) && strtolower($env_scope) == 'frontend') {
    $environment_front_end	= true;
}

if (in_array($_SERVER['REMOTE_ADDR'], $localhost_list)) {
    $is_localhost 		= true;
    $non_prod_tag	= '<strong>LOCAL</strong>';
}


$non_prod_tag		= null;
if (in_array($_SERVER['SERVER_NAME'], $demo_list)) {
    $non_prod_tag	= '<strong>DEMO</strong>';
    $is_demo		 		= true;
}
if (in_array($_SERVER['SERVER_NAME'], $dev_list)) {
    $non_prod_tag	= '<strong>DEVELOPMENT</strong>';
    $is_dev		 		= true;
}


$cur_controller		= null;
$seg_array			= $this->uri->segment_array();
if (! empty($seg_array[1])) {
    $cur_controller	= $seg_array[1];
}

$arr_frontend	= array('forms', 'rsvp', 'serve', 'volunteeragreement', 'form', 'kiosk', 'prospectkios', 'kioskconfirmation', 'prospectkioskconfirmation', 'forgotpassword', 'resetpassword','', 'refer-family');

if ($environment_front_end) {
    $site_body_tag = str_replace('class="', ' class="ltp-frontend ', $site_body_tag);
}

if (! empty($_GET['phpdebug'])) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?= $_SESSION['affiliate']['styles']['meta_title'];?>" />
	<meta name="description" content="<?php echo $this->website_model->get_site_desc($content);?>">
    <meta name="author" content="<?php echo '';?>">
	<?php if (! empty($_GET['force_refresh'])) {?>
		<meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
		<meta HTTP-EQUIV="EXPIRES" CONTENT="Thu, 01 Jan 1970 00:00:01 GMT">
	<?php }?>

	<meta data-body-font-family="Helvetica Neue" data-body-font-type="system">


	<!-- Facebook & G+ -->
	<?php if (1 == 2) {?>
	<meta property="og:image" content="<?php echo $img_base;?>social_facebook_post_large.jpg" />



	<meta property="fb:app_id" content="<?php if (! empty($content['fb_app_id'])) {
    echo $content['fb_app_id'];
}?>" />

	<?php }?>
	<meta property="og:title" content="<?php echo $this->website_model->get_site_og_title($content);?>" />
	<meta property="og:site_name" content="<?= $_SESSION['affiliate']['styles']['meta_title'];?>">
	<meta property="og:url" content="<?php echo base_url() . $_SERVER['REQUEST_URI'];?>" />
	<meta property="og:description" content="<?php echo $this->website_model->get_site_og_desc($content);?>" />
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?php echo $this->website_model->get_site_og_image($content);?>">
	<meta property="fb:app_id" content="2350796161642972" />



	<?php if (isset($content['link_twitter']) && strlen($content['link_twitter']) > 0) {?>
		<!--Twitter -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="<?php echo $this->website_model->get_twitter_handle($content);?>">
		<meta name="twitter:creator" content="<?php echo $this->website_model->get_twitter_handle($content);?>">
		<meta name="twitter:title" content="<?php echo $this->website_model->get_site_og_title($content);?>">
		<meta name="twitter:description" content="<?php echo $this->website_model->get_site_og_desc($content);?>">
		<meta name="twitter:image" content="<?php echo $img_base;?>social_facebook_post_large.jpg">
	<?php }?>


	<link rel="shortcut icon" href="<?php echo $img_base;?>affiliates/<?= $this->affiliates_model->get_active_affiliate_id();?>/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $img_base;?>affiliates/1/logo_apple.png?v=<?php echo $cache_bust;?>"/>
	<title><?= $_SESSION['affiliate']['styles']['meta_title'];?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css">


	<link href="<?php echo base_url();?>css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>css/textext.all.css" rel="stylesheet" type="text/css">

	<!-- LTP Global styles -->
	<!--<link rel="stylesheet" href="<?php echo base_url();?>css/styles.css" type="text/css"> -->
	<?php $this->affiliates_model->replace_affiliate_css_colors(FCPATH . '/css/styles_variabled.css');?>

	<!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css">

	<!-- Datatables -->
	<!-- <link href="<?php echo base_url("js/datatables.net-bs/css/dataTables.bootstrap.min.css");?>" rel="stylesheet"/> -->
	<link href="<?php echo base_url("js/datatables1.10.22/datatables.min.css");?>" rel="stylesheet"/>

	<!-- Boostrap Switch -->
	<link rel="stylesheet" href="<?php echo base_url("css/bootstrap-switch.min.css");?>" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url("css/jquery-ui.min.css");?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("css/jquery-ui.structure.min.css");?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("css/jquery-ui.theme.min.css");?>" rel="stylesheet">

	<!-- Croppie  -->
	<link rel="stylesheet" href="<?php echo base_url("css/croppie.css");?>" rel="stylesheet">

	<!-- Multiselect  -->
	<!--<link rel="stylesheet" href="<?php echo base_url("css/bootstrap-multiselect.css");?>" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo base_url("css/jquery.multiselect.css");?>" rel="stylesheet">

	<link href="<?php echo base_url("js/bootstrap-tags-master/dist/css/bootstrap-tags.css");?>" rel="stylesheet"/>


	<!--[if lt IE 9]>
	<script src="<?php echo base_url();?>js/html5shiv.js"></script>
	<script src="<?php echo base_url();?>js/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="<?php echo base_url("css/quill.snow.css");?>" >
	<link rel="stylesheet" href="<?php echo base_url("css/token-input-facebook.css");?>" >
	<link rel="stylesheet" href="<?php echo base_url("css/introjs.css");?>" >
	<link rel="stylesheet" href="<?php echo base_url("js/trumbowyg/ui/trumbowyg.min.css");?>" >

	<!--<link rel="stylesheet" href="<?php echo base_url();?>css/custom.css" type="text/css"> -->
	<!--<link rel="stylesheet" href="<?php echo BASEPATH ;?>css/custom.css" type="text/css"> -->
	<?php $this->affiliates_model->replace_affiliate_css_colors(FCPATH . 'css/custom_variabled.css'); ?>

	<!--Custom Font-->
	<link href="<?php echo base_url('fonts/font-gotham.css');?>" rel="stylesheet">


	<?php
    $arr_legacy_font	= array(9);
    if (in_array($this->affiliates_model->get_active_affiliate_id(), $arr_legacy_font)) {
        echo '<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">';
        echo '<style>body{font-family: Montserrat, sans-serif !important;}</style>';
    }?>

	<?php if (! empty($iframe)) {
        echo '<style type="text/css">body, .ltp-frontend, .wrapper {background:none transparent !important;} .promise-footer, #masthead-affiliate-logo{display:none;}</style>';
    }
        $font = get_req('font');
        switch (strtolower($font)) {
            case 'muli':
                echo '<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">';
                echo '<style type="text/css"> * { font-size: 100%; font-family: Muli, san-serif;} </style>';
            break;
        }
    ?>


	<!-- <script src="https://kit.fontawesome.com/a650b13d24.js" crossorigin="anonymous"></script> -->
	<script src="<?php echo base_url();?>js/fontawesome5.js"></script>
  </head>


<!-- Nav -->
<?php echo $site_body_tag;?>
  <?php if (! $is_localhost && ! $is_demo && ! $is_dev  && in_array($cur_controller, $arr_frontend)) { ?>
	  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', ' UA-116292921-1', 'auto');
	  ga('send', 'pageview');

	</script>
  <?php }?>

  <?php if ($under_maint) {?>
	<div class="container">
		<h1 class="text-center">Promise Serves is Offline.</h1><h3 class="text-center"> We are undergoing a brief maintenance period - please check back shortly.</h3>
	</div>
  <?php
    die();
  } //End Under Maint?>
  <?php if (! in_array($cur_controller, $arr_frontend) && ! $environment_front_end && ! empty($_SESSION['logged_in'])) { ?>
	<nav class="navbar navbar-custom navbar-fixed-top hidden-print <?php echo 'header-' . $cur_controller . ' ' . $_SESSION['affiliate']['styles']['color_set_navbar'];?>" role="navigation" data-step="2" data-intro="The navigation bar has been consolidated to create a more intuitve user experience and to display more cleanly on mobile devices.">
		<div class="container-fluid">
			<div class="navbar-header" data-step="5" >
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url();?>dashboard"><img src="<?php echo base_url();?>img/affiliates/<?= $_SESSION['affiliate']['id_affiliate'];?>/logo_nav.png" style="max-height: 35px;" data-step="1" data-intro="Welcome to the new Promise Serves Advocate Dashboard! Let's walk through a few of the new key features." ></a>
				<ul class="nav navbar-top-links navbar-right ">
					<li class="dropdown hidden-xs dropdown-black">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" id="header-notify-trigger">
							<em class="fas fa-bell"></em><span class="label label-danger" id="header-notify-counter"></span>
						</a>
						<div class="dropdown-menu dropdown-notifications" id="header-notify-ajax-target">
							<div class="message-body"><h5 class="text-center"><i class="fa fa-check"></i> You have no notifications</h5></div>
							<br />
						</div>
					</li>
					<li class="dropdown hidden-xs">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-danger" id="header-msg-counter"></span>
						</a>
						<ul class="dropdown-menu dropdown-messages" id="header-msg-ajax-target">
							<li>
								<div class="dropdown-messages-box"><br />
									<div class="message-body"><h5 class="text-center">You have no messages</h5></div>
									<br />
								</div>
							</li>
							<!--  <li class="divider"></li> -->

							<li>
								<div class="all-button">
									<!-- <a href="<?php echo base_url() . 'messages/viewlist';?>">
										<em class="fa fa-inbox"></em> <strong>All Messages</strong>
									</a>
									<hr /> -->
									<?php if ($this->security_model->user_has_access(60)) {?>
									<a href="<?php echo base_url() . 'messages/groupcompose';?>">
										<em class="fa fa-users"></em> <strong>Send Group Message</strong>
									</a>
									<?php }?>
								</div>
							</li>
						</ul>
					</li>

					<!--
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>-->
				</ul>

				 <!-- Start Navigation -->
				<div class="collapse navbar-collapse">
				  <ul class="nav navbar-nav"  >
	<?php
                $menu_items_admin	= '';
                $menu_items_shared = '<li>
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">People <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="' . base_url() . 'advocates/list">Advocates</a></li>
										<li><a href="' . base_url() . 'volunteers/list">Volunteers</a></li>
										<li><a href="' . base_url() . 'families/list">Families</a></li>
										<li><a href="' . base_url() . 'communities/list">Communities</a></li>';
                                        if ($this->security_model->user_has_access(90) && $this->affiliates_model->get_active_affiliate_id() == 20) {
                                            $menu_items_shared  .= '<li><a href="' . base_url() . 'volunteers/best-match">Best Match</a></li>';
                                        }
                                        if ($this->security_model->user_has_access(80)) {
                                            $menu_items_shared  .= '<li><a href="' . base_url() . 'geomap">People Map</a></li>';
                                        }
                $menu_items_shared  .='
									</ul>
								</li>';

                $menu_items_shared .= '<li>
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">Events & Needs <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="' . base_url() . 'calendar/" >Calendar</a></li>
										<li><a href="' . base_url() . 'events/list">Events</a></li>
										<li><a href="' . base_url() . 'families/view_care_requested_families">Care Requests</a></li>
										<!-- <li><a href="' . base_url() . 'needs/list">Needs</a></li> -->
									</ul>
								</li>';

                if ($this->security_model->user_has_portal_access()) {
                    $menu_items_shared .= '<li><a href="' . base_url() . 'resources">Resources</a></li>';
                }

/*
                $menu_items_shared .= '<li>
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Resources <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="' . base_url() . 'resources/promise-serves">Promise Serves Help</a></li>';
                                if($this->security_model->user_has_portal_access()){
                                    $menu_items_shared .= '<li><a href="' . base_url() . 'resources/fam">FAM / Advocate Resources</a></li>';
                                }
                                if($this->security_model->user_has_access(85)){
                                    $menu_items_shared .= '<li><a href="' . base_url() . 'resources/manager">Staff Resources</a></li>';
                                }
*/
                //$menu_items_shared .= '</ul></li>';



                if ($this->security_model->user_has_access(95)) {
                    $menu_items_admin .= '<li>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">All Affiliates <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="' . base_url() . 'affiliates/list">List Affiliates</a></li>';
                    if (! empty($_SESSION['affiliate']['enable_regions'])) {
                        $menu_items_admin .= '<li><a href="' . base_url() . 'regions/list">Regions</a></li>';
                    }
                    $menu_items_admin .= '<li><a href="' . base_url() . 'staff/list">Staff</a></li>
							<li><a href="' . base_url() . 'agencies/list">Agencies</a></li>
							<li><a href="' . base_url() . 'churches/list">Churches</a></li>
							<li><a href="' . base_url() . 'reports/selectreports">Reports</a></li>
							<li><a href="' . base_url() . 'import/selectimport">Import Data</a></li>
						</ul>
					</li>';
                }
                if ($this->security_model->user_has_access(80)) {
                    $aff_name = ! empty($_SESSION['affiliate']['affiliate_name_short']) ? $_SESSION['affiliate']['affiliate_name_short'] : $_SESSION['affiliate']['affiliate_name'];
                    $menu_items_admin .= '<li>
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">' . $aff_name . '<span class="caret"></span></a>
						<ul class="dropdown-menu">';
                    if ($this->security_model->user_has_access(90)) {
                        $menu_items_admin .= '<li><a href="' . base_url() . 'affiliate/edit/' . $_SESSION['affiliate']['id_affiliate_encoded'] . '">Edit Organization</a></li>';
                        $menu_items_admin .= '<li><a href="' . base_url() . 'regions/list">Regions</a></li>';
                    }
                    if ($this->security_model->user_has_access(85)) {
                        $menu_items_admin .= '<li><a href="' . base_url() . 'staff/list/?id_affiliate=' . $_SESSION['affiliate']['id_affiliate_encoded'] . '">Staff</a></li>';
                    }
                    $menu_items_admin .= '
							<li><a href="' . base_url() . 'agencies/list?id_affiliate=' . $_SESSION['affiliate']['id_affiliate_encoded'] . '">Agencies</a></li>
							<li><a href="' . base_url() . 'churches/list?id_affiliate=' . $_SESSION['affiliate']['id_affiliate_encoded'] . '">Churches</a></li>
							<li><a href="' . base_url() . 'reports/selectreports?id_affiliate=' . $_SESSION['affiliate']['id_affiliate_encoded'] . '">Reports</a></li>';
                    if ($this->security_model->user_has_access(95)) {
                        $menu_items_admin .= '<li><a href="' . base_url() . 'import/selectimport?id_affiliate=' . $_SESSION['affiliate']['id_affiliate_encoded'] . '">Import Data</a></li>';
                    }
                    $menu_items_admin .= '</ul></li>';
                }
                switch (strtolower($_SESSION['logged_in']['access_levels'][$this->affiliates_model->get_active_affiliate_id()]['scopes']['global']['scope_segment_inherit'])) {
                    case 'community_family':
                    case 'community_family_mom':
                    case 'community_family_dad':
                    case 'community_family_parent':
                    case 'community_family_aunt':
                    case 'community_family_uncle':
                    case 'community_family_grandfather':
                    case 'community_family_grandmother':
                        echo '<li><a href="' . base_url() . 'calendar">Calendar</a></li>';
                        //echo '<li><a href="' . base_url() . 'my-family">My Family</a></li>';
                    break;
                    case 'community_volunteer':
                    case 'community_member_helper':
                    case 'community_member_standby':
                    case 'community_volunteer_encourager':
                    case 'community_volunteer_prayer':
                    case 'community_volunteer_homework':
                    case 'community_member_transporter':
                    case 'community_member_babysitter':
                    case 'community_member_respite':
                    case 'community_member_mentor':
                    case 'community_member_volunteer':
                    case 'prospect':
                        echo '<li><a href="' . base_url() . 'calendar">Calendar</a></li>';
                        //echo '<li><a href="' . base_url() . 'resources">Resources</a></li>';
                        echo '<li><a href="' . base_url() . 'my-profile">My Profile</a></li>';
                    break;
                    case 'community_member_leader':
                        echo '<li><a href="' . base_url() . 'calendar">Calendar</a></li>';
                        echo '<li><a href="' . base_url() . 'volunteers/list">My Volunteers</a></li>';
                        echo '<li><a href="' . base_url() . 'communities/list">My Care Communities</a></li>';
                        echo '<li><a href="' . base_url() . 'families/list">My Families</a></li>';
                        //echo '<li><a href="' . base_url() . 'resources">Resources</a></li>';
                    break;
                    case 'advocate_church':
                    case 'advocate_campus':
                        echo '<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">My Church <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="' . base_url() . 'churches/edit/' . url_enc($_SESSION['logged_in']['id_home_church']) . '">Church Settings</a></li>
										<li><a href="' . base_url() . 'reports">Reports</a></li>
										<li><a href="' . base_url() . 'maps/my_church_map">MAP Report</a></li>
									</ul>
								</li>';

                        echo $menu_items_shared;

                    break;
                    default:
                        echo $menu_items_admin;
                        echo $menu_items_shared;
                    break;
                }
              ?>


			<?php if (! empty($user['id_people'])) {?>
				<li class="align-right hidden-xs visible-sm visible-md visible-lg">
					<a class="dropdown-toggle nav-user" data-toggle="dropdown" href="#">
						<div class="profile-userpic">
							<?php
                            if (! empty($user['url_avatar'])) {
                                echo '<img src="' . $this->people_model->get_avatar_filename($user) . '" class="img-responsive" alt="" width="50" height="50">';
                            } else {
                                echo '<i class="fa fa-user fa-user-circle fa-3x" style=""></i>';
                            }
                            ?>
						</div>
						</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a href="<?php echo base_url('my-profile');?>">
									My Profile
								</a>
							</li>
							<?php if ($this->security_model->user_has_access(60)) {?>
							<li>
								<a href="<?php echo base_url();?>people/list_my_volunteer_requests">
									My Volunteer Requests
								</a>
							</li>
							<?php }?>
							<?php if ($this->security_model->user_has_access(60)) {?>
							<li>
								<a href="<?php echo base_url();?>people/list_church_volunteer_requests">
									Church Volunteer Requests
								</a>
							</li>
							<?php }?>
							<li class="divider"></li>
							<li>
								<a href="<?php echo base_url() . 'logout'; ?>">
									Logout
								</a>
							</li>
					</ul>
				</li>

				<li class="divider visible-xs hidden-sm hidden-md hidden-lg"></li>
				<li class=" visible-xs vhidden-sm hidden-md hidden-lg">
					<a href="<?php echo base_url() . 'advocate/edit/' . url_enc($user['id_people']);?>">
						My Profile
					</a>
				</li>
				<li class=" visible-xs hidden-sm hidden-md hidden-lg">
					<a href="<?php echo base_url() . 'logout';?>">
						Logout
					</a>
				</li>
				<li class="visible-xs vhidden-sm hidden-md hidden-lg">
					<div class="top20">&nbsp;</div>
				</li>
				<?php }?>
			  </ul>
			  <?php echo $non_prod_tag;?>
			 </div>
			</div><!-- /.header -->
		</div><!-- /.container-fluid -->
	</nav>
	<?php }?>
