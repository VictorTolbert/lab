<main class="flex items-center justify-center flex-1 bg-primary-700">
	<!-- Profile dropdown -->
	<div
		class="relative ml-3"
		x-data="{ open: false }"
		@keydown.window.escape="open = false"
		@click.away="open = false"
	>
		<div>
			<button
				@click="open = !open"
				class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50"
				id="user-menu"
				aria-haspopup="true"
				x-bind:aria-expanded="open"
			>
				<img
					class="w-8 h-8 rounded-full"
					src="<?= base_url('assets/img/avatars/jeremy.jpg')?>" alt="Jeremy Doublestein"
				>
				<span class="hidden ml-3 text-sm font-medium text-gray-700 lg:block"><span class="sr-only">Open user menu for </span>Jeremy Doublestein</span>
				<svg class="flex-shrink-0 hidden w-5 h-5 ml-1 text-gray-400 lg:block" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</button>
		</div>
		<div
			x-show="open"
			x-description="Profile dropdown panel, show/hide based on dropdown state."
			x-transition:enter="transition ease-out duration-100"
			x-transition:enter-start="transform opacity-0 scale-95"
			x-transition:enter-end="transform opacity-100 scale-100"
			x-transition:leave="transition ease-in duration-75"
			x-transition:leave-start="transform opacity-100 scale-100"
			x-transition:leave-end="transform opacity-0 scale-95"
			class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5"
			role="menu"
			aria-orientation="vertical"
			aria-labelledby="user-menu"
			style="display: none;"
		>
			<a href="<?= base_url('my-profile') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Profile</a>
			<a href="<?= base_url('settings') ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
			<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Logout</a>
		</div>
	</div>
</main>
