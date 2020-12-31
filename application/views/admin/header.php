<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('global_partials/google_optimize_hider'); ?>
    <meta charset="utf-8">
    <?php
    if (! isset($active)) {
        $active = 'Admin';
    } ?>
    <title>Admin | <?php echo ucwords($active); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K6MGXPQ');</script>
    <!-- End Google Tag Manager -->
    <script>
     var csfrData = {};
     csfrData['<?php echo $csrf['name']; ?>'] = '<?php echo $csrf['hash']; ?>';
   </script>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Language" content="en">

    <!-- Le styles -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
    <link href="<?php echo asset_url(auto_version('bootstrap_3/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo asset_url(auto_version('js/data_tables/css/jquery.dataTables.css')); ?>" rel="stylesheet">
    <link href="<?php echo asset_url(auto_version('css/admin_styles.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('fontawesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset_url('icomoon-font-icons/style.css'); ?>">

    <?php
    if (! empty($extra_css)) {
        foreach ((array)$extra_css as $src) {
            echo '<link rel="stylesheet" href="', asset_url(auto_version('css/' . $src)), '">';
        }
    } ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo site_url('favicon.ico') ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <?php $this->load->view('global_partials/google_analytics'); ?>
    <?php $this->load->view('global_partials/hotjar'); ?>
  </head>

  <body class="admin">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6MGXPQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
    $main_link_header_text = 'Admin';
    $main_link_header_link = '/';

    if (is_org_admin_without_student_participant()) {
        $main_link_header_text = 'Dashboard';
        $main_link_header_link = '/v3';
    }
    ?>
    <div class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#locker-navbar-collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="<?= $main_link_header_link ?>"><?= $main_link_header_text ?></a>
        </div>
        <div class="collapse navbar-collapse nav-collapse-header" id="locker-navbar-collapse">
        <ul class="nav navbar-nav">
        <a class="navbar-brand hidden-xs" href="<?= $main_link_header_link ?>"><?= $main_link_header_text ?></a>
          <?php
          if (is_sys_admin()) {
              $this->load->view('admin/header_sys_admin');
          } elseif (is_org_admin()) {
              $this->load->view('admin/header_org_admin');
          } else {
              $this->load->view('admin/header_generic');
          }
          ?>
          <li class="<?php echo ($active === 'user_profile') ? 'active' : ''; ?>"><a class="clear-session" href="/admin/users/edit">My Profile</a></li>
          <li><a class="clear-session" href="/logout">Logout</a></li>
        </ul>
        </div>
        <?php if ($this->session->userdata('logged_in')): ?>
        <div class="btn-group pull-right">
          <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-user"></i> <?php echo $this->session->userdata('username'); ?>
            <span class="caret"></span>
          </a>
         <ul class="dropdown-menu">
            <!--<li><a href="#">Profile</a></li>-->
            <li class="divider"></li>
            <li><a href="<?php echo site_url('admin/logout'); ?>">Sign Out</a></li>
          </ul>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="container-fluid" id="content-container">
    <?php
    if ($this->session->flashdata('admin_message')) {
        echo "<div class='alert alert-danger'>{$this->session->flashdata('admin_message')}</div>";
    }

    if ($alerts_and_locations) {
        $this->load->view('dashboard/partials/system_alert_unwrapped');
    }
