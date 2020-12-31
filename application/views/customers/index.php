<main class="container flex-1 p-8 mr-auto prose">
	<?php foreach ($customers as $customer) : ?>
		<h3><?php echo $customer->first_name ?></h3>

		<div class="flex space-x-8 align-start">
			<div class="w-3/12">
				<img class="post-thumb img-responsive" src="<?= site_url() ?>assets/img/avatars/<?= strtolower($customer->first_name) ?>.jpg">
			</div>

			<div class="w-9/12">
				Posted on: <?= $customer->created_at ?>
			</div>
		</div>
	<?php endforeach; ?>

	<div class="pagination-links">
		<?= $this->pagination->create_links() ?>
	</div>
</main>
