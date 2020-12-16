<main class="container flex-1 p-8 mr-auto prose">
	<?php foreach ($organizations as $organization) : ?>
		<h3><?= $organization['title']; ?></h3>

		<div class="flex space-x-8 align-start">
			<div class="w-3/12">
				<img class="organization-thumb img-responsive" src="<?= site_url(); ?>assets/images/organizations/<?= $organization['organization_image']; ?>">
			</div>

			<div class="w-9/12">
				<small class="organization-date">
					posted on: <?= $organization['created_at']; ?> in <strong><?= $organization['name']; ?></strong>
				</small>
				<article class="mb-4">
					<?= word_limiter($organization['body'], 60); ?>
				</article>
				<p>
					<a class="btn btn-default" href="<?= site_url('/organizations/' . $organization['slug']); ?>">
						Detail
					</a>
				</p>
			</div>
		</div>
	<?php endforeach; ?>

	<div class="pagination-links">
		<?= $this->pagination->create_links(); ?>
	</div>
</main>
