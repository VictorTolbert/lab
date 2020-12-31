<!DOCTYPE html>
<html lang="en">
  <head>
    <? $this->load->view('global_partials/google_optimize_hider'); ?>
    <meta charset="utf-8">
    <?
    if (!isset($active)) {
      $active = 'Admin';
    } ?>
    <title>TrapperKeeper | <?= ucwords($active); ?></title>
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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="<?= asset_url(auto_version('bootstrap_3/css/bootstrap.min.css')); ?>">
    <link href="<?= asset_url(auto_version('css/admin_styles.css')); ?>" rel="stylesheet">
    <link href="<?= asset_url(auto_version('js/data_tables/css/jquery.dataTables.css')); ?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?= site_url('favicon.ico') ?>">
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
    <div class="container-fluid" id="content-container">
