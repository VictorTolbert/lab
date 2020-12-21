<main class="flex-1">
	<header class="p-8 bg-primary-900 text-primary-50">
    	<h2 class="text-5xl font-black">Podcast <?= $podcast['id'] ?></h2>
	</header>

    <div class="container mt-6">
        <div class="row pull-x-4">
            <div class="px-4 col-3">
                <div class="block mb-4 box-shadow">
                    <a href="<?= base_url('podcasts/' . $podcast['id']) ?>">
                        <img src="<?= base_url($podcast['image_url']) ?>" class="img-fit">
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>
