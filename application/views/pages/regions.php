<main class="flex-1">
	<header class="p-8 bg-gray-800">
		<div class="">
			<!-- page title and page actions container -->
			<div class="mt-2 md:flex md:items-center md:justify-between">

				<!-- page title container -->
				<div class="flex-1 min-w-0">
					<!-- Page Title -->
					<h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">

						<!-- Gradient Text Effect -->
						<span class="text-transparent bg-gradient-to-r bg-clip-text from-purple-400 to-primary-500">
							<?= $title ?>
						</span>
					</h2>
				</div>

				<!-- page actions container-->
				<div class="flex flex-shrink-0 mt-4 md:mt-0 md:ml-4">

					<!-- Edit Button -->
					<button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-primary-500">
						Edit
					</button>

					<!-- Publish Button -->
					<button type="button" class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-700 hover:bg-primary-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-primary-500">
						Publish
					</button>
				</div>
			</div>
		</div>
	</header>
</main>
