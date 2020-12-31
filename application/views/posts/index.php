<main class="container flex-1 p-8 mr-auto prose">
	<?php foreach ($posts as $post) : ?>
		<h3><?php echo $post->title ?></h3>

		<div class="flex space-x-8 align-start">
			<div class="w-3/12">
				<img class="post-thumb img-responsive" src="<?= site_url() ?>assets/images/posts/<?= $post->post_image ?>">
			</div>

			<div class="w-9/12">
				<small class="post-date">
					Posted on: <?= $post->created_at ?> in <strong><?= $post->category->name ?></strong>
				</small>
				<article class="mb-4">
					<?= word_limiter($post->body, 60) ?>
				</article>
				<p>
					<a class="btn btn-default" href="<?= site_url('/posts/' . $post->slug) ?>">
						Read More
					</a>
				</p>
			</div>
		</div>
	<?php endforeach; ?>

	<div class="pagination-links">
		<?= $this->pagination->create_links() ?>
	</div>
</main>
