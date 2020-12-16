<nav x-data="{ open: false }" class="bg-primary-500" aria-label="Global">
	<div class="px-2 mx-auto max-w-7xl sm:px-4 lg:px-8">
		<div class="flex justify-between h-16">
			<div class="flex items-center px-2 lg:px-0">
				<div class="flex items-center flex-shrink-0 text-white">
					<!-- Logo -->
					<svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16.7198 20.1C16.8531 18.4666 17.3198 16.3 17.9198 14.5333C18.4864 12.9666 18.8531 11.6 18.7864 11.5C18.4531 11.2 15.5864 17.8 15.1864 19.7666L14.7864 21.8L14.0198 20.6333C12.0198 17.7666 12.4531 14.9 15.2531 12.1333C16.7198 10.7 20.5864 8.1333 21.3198 8.1333C21.3864 8.1333 21.4531 9.2333 21.4864 10.5333C21.4864 11.8666 21.6198 14.4666 21.7531 16.3C21.9198 18.5 21.8864 19.9333 21.6531 20.5333C21.1864 21.7666 19.4198 22.8 17.8198 22.8H16.5198L16.7198 20.1Z" fill="currentColor" />
						<path d="M8.01988 21.1665C1.58655 18.9332 0.21988 12.3665 4.35321 3.4665L5.65321 0.666504L6.61988 2.3665C7.18655 3.33317 9.01988 5.3665 10.9199 7.13317L14.2199 10.1998L12.9532 11.8665C11.6199 13.6665 10.9532 15.3665 10.9532 17.1665C10.9199 18.2665 10.9199 18.2665 10.4199 17.6332C9.45321 16.3998 7.71988 12.6665 6.78655 9.8665C6.28655 8.33317 5.78655 7.1665 5.71988 7.2665C5.41988 7.5665 6.98655 14.2665 7.95321 16.7332C8.45321 18.0665 9.28655 19.6665 9.75321 20.2998C11.0865 22.0665 10.8865 22.1665 8.01988 21.1665Z" fill="currentColor" />
					</svg>
				</div>
				<div class="hidden lg:ml-8 lg:flex lg:space-x-4">
					<a href="<?= base_url('dashboard') ?>" class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-primary-400">
						Dashboard
					</a>
					<a href="<?= base_url('affiliates') ?>" class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-primary-400">
						Affiliates
					</a>
					<a href="<?= base_url('organizations') ?>" class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-primary-400">
						Organizations
					</a>
					<a href="<?= base_url('advocates') ?>" class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-primary-400">
						Advocates
					</a>
				</div>
			</div>
			<div class="flex items-center justify-center flex-1 px-2 lg:ml-6 lg:justify-end">
				<div class="w-full max-w-lg lg:max-w-xs">
					<label for="search" class="sr-only">Search</label>
					<div class="relative text-white focus-within:text-gray-400">
						<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
							<svg class="flex-shrink-0 w-5 h-5" x-description="Heroicon name: search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
							</svg>
						</div>
						<input id="search" name="search" class="block w-full py-2 pl-10 pr-3 text-base leading-5 placeholder-white border-transparent rounded-md bg-primary-400 focus:outline-none focus:bg-white focus:ring-0 focus:border-white focus:text-gray-900 focus:placeholder-gray-400 sm:text-sm" placeholder="Search" type="search">
					</div>
				</div>
			</div>
			<div class="flex items-center lg:hidden">
				<!-- Mobile menu button -->
				<button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-primary-200 hover:text-white hover:bg-primary-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" x-bind:aria-expanded="open">
					<span class="sr-only">Open menu</span>
					<!-- Icon when menu is closed. -->
					<svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': open, 'block': !open }" class="block w-6 h-6" x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
					</svg>
					<!-- Icon when menu is open. -->
					<svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': !open, 'block': open }" class="hidden w-6 h-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div class="hidden lg:ml-4 lg:flex lg:items-center">
				<button class="flex-shrink-0 p-1 rounded-full bg-primary-500 text-primary-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-500 focus:ring-white">
					<span class="sr-only">Notificaitons</span>
					<svg class="w-6 h-6" x-description="Heroicon name: bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
					</svg>
				</button>

				<!-- Profile dropdown -->
				<div @click.away="open = false" class="relative flex-shrink-0 ml-4" x-data="{ open: false }">
					<div>
						<button @click="open = !open" class="flex text-sm rounded-full bg-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-500 focus:ring-white" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
							<span class="sr-only">Open user menu</span>
							<img class="w-8 h-8 rounded-full" src="<?= base_url('assets/img/avatars/jeremy.jpg') ?>" alt="">
						</button>
					</div>
					<div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">

						<a href="<?= base_url('my-profile') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Profile</a>

						<a href="<?= base_url('settings') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden">
		<div class="px-2 pt-2 pb-3 space-y-1">
			<a href="<?= base_url('dashboard') ?>" class="block px-3 py-2 text-base font-medium text-white rounded-md hover:text-white hover:bg-primary-400">Dashboard</a>
			<a href="<?= base_url('affiliates') ?>" class="block px-3 py-2 text-base font-medium text-white rounded-md hover:text-white hover:bg-primary-400">Affiliates</a>
			<a href="<?= base_url('organizations') ?>" class="block px-3 py-2 text-base font-medium text-white rounded-md hover:text-white hover:bg-primary-400">Organizations</a>
			<a href="<?= base_url('advocates') ?>" class="block px-3 py-2 text-base font-medium text-white rounded-md hover:text-white hover:bg-primary-400">Advocates</a>
		</div>
		<div class="pt-4 pb-3 border-t border-primary-500">
			<div class="flex items-center px-4">
				<div class="flex-shrink-0">
					<img class="w-10 h-10 rounded-full" src="<?= base_url('assets/img/avatars/jeremy.jpg') ?>" alt="">
				</div>
				<div class="ml-3">
					<div class="text-base font-medium text-white">Jeremy Doublestein</div>
					<div class="text-sm font-medium text-primary-200">jeremy@promise686.org</div>
				</div>
				<button class="flex-shrink-0 p-1 ml-auto rounded-full bg-primary-500 text-primary-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-500 focus:ring-white">
					<span class="sr-only">View notifications</span>
					<svg class="w-6 h-6" x-description="Heroicon name: bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
					</svg>
				</button>
			</div>
			<div class="px-2 mt-3">
				<a href="<?= base_url('my-profile') ?>" class="block px-3 py-2 text-base font-medium rounded-md text-primary-200 hover:text-white hover:bg-primary-400">My Profile</a>
				<a href="<?= base_url('settings') ?>" class="block px-3 py-2 text-base font-medium rounded-md text-primary-200 hover:text-white hover:bg-primary-400">Settings</a>
				<a href="#" class="block px-3 py-2 text-base font-medium rounded-md text-primary-200 hover:text-white hover:bg-primary-400">Sign out</a>
			</div>
		</div>
	</div>
</nav>

<!-- Breadcrumb -->
<nav class="hidden bg-white border-b border-gray-200 lg:flex" aria-label="Breadcrumb">
	<ol class="flex w-full max-w-screen-xl px-4 mx-auto space-x-4 sm:px-6 lg:px-8">
		<li class="flex">
			<div class="flex items-center">
				<a href="<?= base_url() ?>" class="text-gray-400 hover:text-gray-500">
					<!-- Home Icon -->
					<svg class="flex-shrink-0 w-5 h-5" x-description="Heroicon name: home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
					</svg>
					<!-- Dashboard Icon -->
					<!-- <svg class="flex-shrink-0 w-5 h-5" x-description="Materialicon name: dashboard" viewBox="0 0 24 24">
						<path d="M12.984 3h8.016v6h-8.016v-6zM12.984 21v-9.984h8.016v9.984h-8.016zM3 21v-6h8.016v6h-8.016zM3 12.984v-9.984h8.016v9.984h-8.016z" fill="currentColor"></path>
					</svg> -->
					<span class="sr-only">Home</span>
				</a>
			</div>
		</li>
		<li class="flex">
			<div class="flex items-center">
				<svg class="flex-shrink-0 w-6 h-full text-gray-200" preserveraspectratio="none" viewBox="0 0 24 44" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path>
				</svg>
				<a href="<?= base_url('affiliates') ?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Affiliates</a>
			</div>
		</li>
		<li class="flex">
			<div class="flex items-center">
				<svg class="flex-shrink-0 w-6 h-full text-gray-200" preserveraspectratio="none" viewBox="0 0 24 44" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
					<path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"></path>
				</svg>
				<a href="<?= base_url('ema') ?>" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Every Mother's Advocate</a>
			</div>
		</li>
	</ol>
</nav>

<div class="h-screen bg-gray-100" style="min-height: 500px;">

	<div x-data="{ open: false }" @keydown.window.escape="open = false;" class="fixed inset-0 overflow-hidden">
		<div class="absolute inset-0 overflow-hidden">
			<div x-show="open" x-description="Background overlay, show/hide based on slide-over state." x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>

			<section @click.away="" class="absolute inset-y-0 right-0 flex max-w-full pl-10" aria-labelledby="slide-over-heading">
				<div class="w-screen max-w-md" x-description="Slide-over panel, show/hide based on slide-over state." x-show="open" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
					<div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
						<div class="px-4 sm:px-6">
							<div class="flex items-start justify-between">
								<h2 id="slide-over-heading" class="text-lg font-medium text-gray-900">
									Panel title
								</h2>
								<div class="flex items-center ml-3 h-7">
									<button @click="open = false" class="text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
