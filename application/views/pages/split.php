<div class="" style="">

	<div class="relative bg-gray-50">
		<div x-data="{ mobileMenuOpen: false }" class="relative bg-white shadow">
			<div class="px-4 mx-auto max-w-7xl sm:px-6">
				<div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
					<div class="flex justify-start lg:w-0 lg:flex-1">
						<a href="#">
							<span class="sr-only">Workflow</span>
							<img class="w-auto h-8 sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-primary-600.svg" alt="">
						</a>
					</div>
					<div class="-my-2 -mr-2 md:hidden">
						<button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
							<span class="sr-only">Open menu</span>
							<svg class="w-6 h-6" x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
							</svg>
						</button>
					</div>
					<nav class="hidden space-x-10 md:flex">
						<div @click.away="flyoutMenuOpen = false" x-data="{ flyoutMenuOpen: false }" class="relative">
							<button type="button" x-state:on="Item active" x-state:off="Item inactive" @click="flyoutMenuOpen = !flyoutMenuOpen" :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }" class="inline-flex items-center text-base font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
								<span>Solutions</span>
								<svg x-state:on="Item active" x-state:off="Item inactive" class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500" x-bind:class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</button>

							<div x-description="'Solutions' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 w-screen max-w-md px-2 mt-3 -ml-4 transform sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2" style="display: none;">
								<div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
									<div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Analytics
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Get a better understanding of where your traffic is coming from.
												</p>
											</div>
										</a>

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Engagement
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Speak directly to your customers in a more meaningful way.
												</p>
											</div>
										</a>

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Security
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Your customers' data will be safe and secure.
												</p>
											</div>
										</a>

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: view-grid" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Integrations
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Connect with third-party tools that you're already using.
												</p>
											</div>
										</a>

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: refresh" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Automations
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Build strategic funnels that will drive your customers to convert
												</p>
											</div>
										</a>

									</div>
									<div class="px-5 py-5 space-y-6 bg-gray-50 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">

										<div class="flow-root">
											<a href="#" class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100">
												<svg class="flex-shrink-0 w-6 h-6 text-gray-400" x-description="Heroicon name: play" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
												</svg>
												<span class="ml-3">Watch Demo</span>
											</a>
										</div>

										<div class="flow-root">
											<a href="#" class="flex items-center p-3 -m-3 text-base font-medium text-gray-900 rounded-md hover:bg-gray-100">
												<svg class="flex-shrink-0 w-6 h-6 text-gray-400" x-description="Heroicon name: phone" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
												</svg>
												<span class="ml-3">Contact Sales</span>
											</a>
										</div>

									</div>
								</div>
							</div>
						</div>

						<a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
							Pricing
						</a>
						<a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
							Docs
						</a>

						<div x-data="{ flyoutMenuOpen: false }" @click.away="flyoutMenuOpen = false" class="relative">
							<button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }" class="inline-flex items-center text-base font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
								<span>More</span>
								<svg x-state:on="Item active" x-state:off="Item inactive" class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500" x-bind:class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</button>

							<div x-description="'More' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute z-10 w-screen max-w-md px-2 mt-3 transform -translate-x-1/2 left-1/2 sm:px-0" style="display: none;">
								<div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
									<div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: support" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Help Center
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Get all of your questions answered in our forums or contact support.
												</p>
											</div>
										</a>

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: bookmark-alt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Guides
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Learn how to maximize our platform to get the most out of it.
												</p>
											</div>
										</a>

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Events
												</p>
												<p class="mt-1 text-sm text-gray-500">
													See what meet-ups and other events we might be planning near you.
												</p>
											</div>
										</a>

										<a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
											<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
											</svg>
											<div class="ml-4">
												<p class="text-base font-medium text-gray-900">
													Security
												</p>
												<p class="mt-1 text-sm text-gray-500">
													Understand how we take your privacy seriously.
												</p>
											</div>
										</a>

									</div>
									<div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
										<div>
											<h3 class="text-sm font-medium tracking-wide text-gray-500 uppercase">
												Recent Posts
											</h3>
											<ul class="mt-4 space-y-4">

												<li class="text-base truncate">
													<a href="#" class="font-medium text-gray-900 hover:text-gray-700">
														Boost your conversion rate
													</a>
												</li>

												<li class="text-base truncate">
													<a href="#" class="font-medium text-gray-900 hover:text-gray-700">
														How to use search engine optimization to drive traffic to your site
													</a>
												</li>

												<li class="text-base truncate">
													<a href="#" class="font-medium text-gray-900 hover:text-gray-700">
														Improve your customer experience
													</a>
												</li>

											</ul>
										</div>
										<div class="mt-5 text-sm">
											<a href="#" class="font-medium text-primary-600 hover:text-primary-500"> View all posts <span aria-hidden="true">→</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</nav>
					<div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
						<a href="#" class="text-base font-medium text-gray-500 whitespace-nowrap hover:text-gray-900">
							Sign in
						</a>
						<a href="#" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-600 whitespace-nowrap hover:bg-primary-700">
							Sign up
						</a>
					</div>
				</div>
			</div>

			<div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute inset-x-0 top-0 z-10 p-2 transition origin-top-right transform md:hidden" style="display: none;">
				<div class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50">
					<div class="px-5 pt-5 pb-6">
						<div class="flex items-center justify-between">
							<div>
								<img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-primary-600.svg" alt="Workflow">
							</div>
							<div class="-mr-2">
								<button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
									<span class="sr-only">Close menu</span>
									<svg class="w-6 h-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
									</svg>
								</button>
							</div>
						</div>
						<div class="mt-6">
							<nav class="grid gap-y-8">

								<a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
									<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
									</svg>
									<span class="ml-3 text-base font-medium text-gray-900">
										Analytics
									</span>
								</a>

								<a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
									<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
									</svg>
									<span class="ml-3 text-base font-medium text-gray-900">
										Engagement
									</span>
								</a>

								<a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
									<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
									</svg>
									<span class="ml-3 text-base font-medium text-gray-900">
										Security
									</span>
								</a>

								<a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
									<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: view-grid" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
									</svg>
									<span class="ml-3 text-base font-medium text-gray-900">
										Integrations
									</span>
								</a>

								<a href="#" class="flex items-center p-3 -m-3 rounded-md hover:bg-gray-50">
									<svg class="flex-shrink-0 w-6 h-6 text-primary-600" x-description="Heroicon name: refresh" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
									</svg>
									<span class="ml-3 text-base font-medium text-gray-900">
										Automations
									</span>
								</a>

							</nav>
						</div>
					</div>
					<div class="px-5 py-6 space-y-6">
						<div class="grid grid-cols-2 gap-y-4 gap-x-8">

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Pricing
							</a>

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Docs
							</a>

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Enterprise
							</a>

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Blog
							</a>

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Help Center
							</a>

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Guides
							</a>

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Security
							</a>

							<a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
								Events
							</a>

						</div>
						<div>
							<a href="#" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-600 hover:bg-primary-700">
								Sign up
							</a>
							<p class="mt-6 text-base font-medium text-center text-gray-500">
								Existing customer?
								<a href="#" class="text-primary-600 hover:text-primary-500">
									Sign in
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<main class="lg:relative">
			<div class="w-full pt-16 pb-20 mx-auto text-center max-w-7xl lg:py-48 lg:text-left">
				<div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
					<h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
						<span class="block xl:inline">Data to enrich your</span>
						<span class="block text-primary-600 xl:inline">online business</span>
					</h1>
					<p class="max-w-md mx-auto mt-3 text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
						Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
					</p>
					<div class="mt-10 sm:flex sm:justify-center lg:justify-start">
						<div class="rounded-md shadow">
							<a href="#" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white border border-transparent rounded-md bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
								Get started
							</a>
						</div>
						<div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
							<a href="#" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium bg-white border border-transparent rounded-md text-primary-600 hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
								Live demo
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
				<img class="absolute inset-0 object-cover w-full h-full" src="<?= base_url('assets/img/me/so-many-screens.jpg') ?>" alt="">
			</div>
		</main>
	</div>

</div>
