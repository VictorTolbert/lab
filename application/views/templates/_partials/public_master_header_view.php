<?php defined('BASEPATH') or exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="viewport" content="width=device-width, initial-scale=1">
	<title><?= $page_title ?></title>
	<meta name="description" value="<?= $page_description ?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

	<link href="<?= base_url('assets/css/tailwind.css') ?>" rel="stylesheet">
	<style>
		:root {
			--color-primary: #95ba3d;
			--color-codeigniter: #ee4623;
		}
	</style>
	<?= $before_closing_head ?>
</head>
<body>
<div class="flex flex-col h-screen">
