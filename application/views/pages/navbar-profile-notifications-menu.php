<main class="flex items-center justify-center flex-1 bg-primary-900">
	<div class="flex items-center ml-4 md:ml-6">
		<button class="p-1 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
			<span class="sr-only">View notifications</span>
			<svg class="w-6 h-6" x-description="Heroicon name: bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
			</svg>
		</button>

		<!-- Profile dropdown -->
		<div class="relative ml-3" x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false">
			<div>
				<button @click="open = !open" class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
					<img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
					<span class="hidden ml-3 text-sm font-medium text-gray-700 lg:block"><span class="sr-only">Open user menu for </span>Emilia Birch</span>
					<svg class="flex-shrink-0 hidden w-5 h-5 ml-1 text-gray-400 lg:block" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>
			<div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
			</div>
		</div>
	</div>


	<div class="h-screen bg-gray-100" style="min-height: 500px;">
		<div x-data="{ open: true }" @keydown.window.escape="open = false; setTimeout(() => open = true, 1000);" class="fixed inset-0 overflow-hidden">
			<div class="absolute inset-0 overflow-hidden">
				<div x-show="open" x-description="Background overlay, show/hide based on slide-over state." x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>

				<section @click.away="open = false; setTimeout(() => open = true, 1000);" class="absolute inset-y-0 right-0 flex max-w-full pl-10" aria-labelledby="slide-over-heading">
					<div class="w-screen max-w-md" x-description="Slide-over panel, show/hide based on slide-over state." x-show="open" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
						<div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
							<div class="px-4 sm:px-6">
								<div class="flex items-start justify-between">
									<h2 id="slide-over-heading" class="text-lg font-medium text-gray-900">
										Panel title
									</h2>
									<div class="flex items-center ml-3 h-7">
										<button @click="open = false; setTimeout(() => open = true, 1000);" class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
											<span class="sr-only">Close panel</span>
											<svg class="w-6 h-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
											</svg>
										</button>
									</div>
								</div>
							</div>
							<div class="relative flex-1 px-4 mt-6 sm:px-6">
								<!-- Replace with your content -->
								<div class="absolute inset-0 px-4 sm:px-6">
									<div class="h-full border-2 border-gray-200 border-dashed" aria-hidden="true"></div>
								</div>
								<!-- /End replace -->
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>
