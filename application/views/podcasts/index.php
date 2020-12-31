<main class="flex-1">

	<header class="p-8 bg-primary-900 text-primary-50">
			<div class="container">
				<div class="py-9">
					<h1 class="text-5xl font-black">Podcasts for Programmers</h1>
					<p class="text-2xl text-thin text-dark-soft">The best place to discover and publish podcasts about building software.</p>
				</div>
			</div>
	</header>

	<div class="container">
        <div>
            <h1 class="mb-4 text-bold">Popular Shows</h1>
            <div class="row pull-x-4 pull-b-6">
                <?php foreach ($podcasts as $podcast): ?>
                <div class="px-4 mb-6 col-2">
                    <div class="hover-grow">
                        <a href="<?= base_url('podcasts/' . $podcast['id']) ?>" class="block mb-2 box-shadow">
                            <img src="<?= $podcast['cover_path'] ?>" class="img-fit">
                        </a>
                        <p class="text-ellipsis">
                            <a href="<?= base_url('podcasts/' . $podcast['id']) ?>" class="text-sm text-medium">
                                <?= $podcast['title'] ?>
                            </a>
                        </p>
                        <p class="text-xs text-uppercase text-spaced text-ellipsis">
                            <a href="<?= $podcast['website'] ?>" class="link-softer">
                                <?= $podcast['website'] ?>
                            </a>
                        </p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <ul>
        <?php if (isset($period)) : ?>
            <li>period: <?= $period ?></li>
        <?php endif ?>

        <?php if (isset($start_date)) : ?>
            <li>start_date: <?= $start_date ?></li>
        <?php endif ?>

        <?php if (isset($end_date)) : ?>
            <li>end_date: <?= $end_date ?></li>
        <?php endif ?>

        <?php if (isset($invite_emails)): ?>
            <li>
                invite_emails:
                <ul>
                    <?php foreach ($invite_emails as $invited) : ?>
                        <li><?= $invited ?></li>
                    <?php endforeach ?>
                </ul>
            </li>
        <?php endif ?>

        <?php  if (isset($status_ids) && is_array($status_ids)): ?>
            <li>
                status_ids:
                <ul>
                    <?php foreach ($status_ids as $status) : ?>
                        <li><?= $status ?></li>
                    <?php endforeach ?>
                </ul>
            </li>
        <?php endif ?>
    </ul>
</main>
