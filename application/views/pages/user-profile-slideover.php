<div class="" style="">
	<div class="h-screen bg-gray-100" style="min-height: 800px;">

		<div x-data="{ open: true }" @keydown.window.escape="open = false; setTimeout(() => open = true, 1000);" class="fixed inset-0 overflow-hidden">
			<div class="absolute inset-0 overflow-hidden">
				<section @click.away="open = false; setTimeout(() => open = true, 1000);" class="absolute inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16" aria-labelledby="slide-over-heading">
					<div class="w-screen max-w-md" x-description="Slide-over panel, show/hide based on slide-over state." x-show="open" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
						<div class="flex flex-col h-full overflow-y-scroll bg-white shadow-xl">
							<div class="px-4 py-6 sm:px-6">
								<div class="flex items-start justify-between">
									<h2 id="slide-over-heading" class="text-lg font-medium text-gray-900">
										Profile
									</h2>
									<div class="flex items-center ml-3 h-7">
										<button @click="open = false; setTimeout(() => open = true, 1000);" class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:ring-2 focus:ring-primary-500">
											<span class="sr-only">Close panel</span>
											<svg class="w-6 h-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
											</svg>
										</button>
									</div>
								</div>
							</div>
							<!-- Main -->
							<div>
								<div class="pb-1 sm:pb-6">
									<div>
										<div class="relative h-40 sm:h-56">
											<img class="absolute object-cover w-full h-full" src="<?= base_url('assets/img/avatars/victor.jpg')?>" alt="">
										</div>
										<div class="px-4 mt-6 sm:mt-8 sm:flex sm:items-end sm:px-6">
											<div class="sm:flex-1">
												<div>
													<div class="flex items-center">
														<h3 class="text-xl font-bold text-gray-900 sm:text-2xl">Victor Tolbert</h3>
														<span class="ml-2.5 bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full">
															<span class="sr-only">Online</span>
														</span>
													</div>
													<p class="text-sm text-gray-500">victor@tolbert.design</p>
												</div>
												<div class="flex flex-wrap mt-5 space-y-3 sm:space-y-0 sm:space-x-3">
													<button type="button" class="inline-flex items-center justify-center flex-shrink-0 w-full px-4 py-2 text-sm font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 sm:flex-1">
														Message
													</button>
													<button type="button" class="inline-flex items-center justify-center flex-1 w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
														Call
													</button>
													<span class="inline-flex ml-3 sm:ml-0">
														<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false" class="relative inline-block text-left">
															<button id="options-menu" @click="open = !open" type="button" class="inline-flex items-center p-2 text-sm font-medium text-gray-400 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
																<span class="sr-only">Open options menu</span>
																<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																	<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
																</svg>
															</button>

															<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-48 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" style="display: none;">
																<div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
																	<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View profile</a>
																	<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Copy profile link</a>
																</div>
															</div>
														</div>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="px-4 pt-5 pb-5 sm:px-0 sm:pt-0">
									<dl class="px-4 space-y-8 sm:px-6 sm:space-y-6">
										<div>
											<dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
												Bio
											</dt>
											<dd class="mt-1 space-y-2 text-sm text-gray-900 sm:col-span-2">
												<h2>Hi!</h2>

												<p>I’m Victor. I’m the Enterprise Architect for frontend technology for Promise Serves. I like building things for the web, and sharing what I know with others. I believe that software development is a creative endeavor. I’m passionate about code quality, testing, learning, mentoring, and training.</p>
											</dd>
										</div>
										<div>
											<dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
												Location
											</dt>
											<dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
												Atlanta, GA, USA
											</dd>
										</div>
										<div>
											<dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
												Website
											</dt>
											<dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
												tolbert.design
											</dd>
										</div>
										<div>
											<dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
												Birthday
											</dt>
											<dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
												<time datetime="1988-06-23">
													June 23, 1988
												</time>
											</dd>
										</div>
									</dl>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

	</div>
</div>
