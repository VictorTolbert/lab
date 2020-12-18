<!DOCTYPE html>
<html lang="<?= $this->config->item('language') or 'en' ?>">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="{{ $page->description }}">
	<link rel="canonical" href="<?= site_url() ?>">
	<title>
		<?= isset($title)
            ? $title . ' -- ' . $this->config->item('site_name')
            : $this->config->item('site_name')
        ?>
	</title>

	<link rel="icon" type="image/png" href="<?= base_url('/assets/img/favicon.png') ?>">

	<!-- OpenGraph -->
	<meta property="og:image" content="/assets/images/og-image.png">
	<meta property="twitter:card" content="summary_large_image">
	<meta property="og:url" content="<?= base_url() ?>"/>
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?= isset($title) ? $title : $this->config->item('site_name') ?>">

	<link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Work+Sans:wght@700&display=swap" rel="stylesheet">
	<style>
		:root {
			--color-primary: #95ba3d;
			--color-codeigniter: #ee4623;
		}
	</style>

	<script type="text/javascript">
		window.__INITIAL_STATE__ = '<?= $title ?>';
	</script>
</head>
<body class="bg-gray-100">
	<div id="app">
		<alert></alert>
	</div>
	<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
