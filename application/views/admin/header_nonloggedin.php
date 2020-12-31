<!DOCTYPE html>
<html lang="en">
  <head>
    <? $this->load->view('global_partials/google_optimize_hider'); ?>
    <meta charset="utf-8">
    <?php
    if (!isset($active)) {
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

    <!-- Le styles -->
    <link href="<?php echo asset_url(auto_version('bootstrap_3/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo asset_url(auto_version('css/bootstrap-responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo asset_url(auto_version('css/bootstrap-image-gallery.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo asset_url(auto_version('css/jquery-ui.css')); ?>" rel="stylesheet">
    <link href="<?php echo asset_url(auto_version('css/admin_styles.css')); ?>" rel="stylesheet">
    <link href="<?php echo asset_url(auto_version('js/data_tables/css/jquery.dataTables.css')); ?>" rel="stylesheet">
    <?php
    if (!empty($extra_css)) {
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
    <? $this->load->view('global_partials/google_analytics'); ?>
    <? $this->load->view('global_partials/hotjar'); ?>
  </head>

  <body class="admin">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6MGXPQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-default navbar-btn" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <a class="navbar-brand" href="#">Admin</a>
          <ul class="nav">
              <li class="<?php echo ( $active === 'programs' ) ? 'active' : ''; ?>"><a class="clear-session">Programs</a></li>
              <li class="pull-right"><a href="/logout">Logout</a></li>
          </ul>

        </div>
      </div>
    </div>

      <div class="container-fluid" id="content-container">
