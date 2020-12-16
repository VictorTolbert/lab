<div class="" style="">
	<div style="min-height: 640px;">

		<div class="flex h-screen overflow-hidden bg-white" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
			<div x-show="sidebarOpen" class="lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." style="display: none;">
				<div class="fixed inset-0 z-40 flex">
					<div @click="sidebarOpen = false" x-show="sidebarOpen" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0" aria-hidden="true" style="display: none;">
						<div class="absolute inset-0 bg-gray-600 opacity-75"></div>
					</div>
					<div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state." x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-white" style="display: none;">
						<div class="absolute top-0 right-0 pt-2 -mr-12">
							<button x-show="sidebarOpen" @click="sidebarOpen = false" class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" style="display: none;">
								<span class="sr-only">Close sidebar</span>
								<svg class="w-6 h-6 text-white" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
								</svg>
							</button>
						</div>
						<div class="flex items-center flex-shrink-0 px-4">
							<img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-logo-purple-500-mark-gray-700-text.svg" alt="Workflow">
						</div>
						<div class="flex-1 h-0 mt-5 overflow-y-auto">
							<nav class="px-2">
								<div class="space-y-1">


									<!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:text-gray-900 hover:bg-gray-50" -->
									<a href="#" class="flex items-center px-2 py-2 text-base font-medium leading-5 text-gray-900 bg-gray-100 rounded-md group" aria-current="page">
										<!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
										<svg class="w-6 h-6 mr-3 text-gray-500" x-description="Heroicon name: home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
										</svg>
										Home
									</a>


									<a href="#" class="flex items-center px-2 py-2 text-base font-medium leading-5 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 group">
										<svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: view-list" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
										</svg>
										My tasks
									</a>


									<a href="#" class="flex items-center px-2 py-2 text-base font-medium leading-5 text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 group">
										<svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
										</svg>
										Recent
									</a>

								</div>
								<div class="mt-8">
									<h3 class="px-3 text-xs font-semibold tracking-wider text-gray-500 uppercase" id="teams-headline">
										Teams
									</h3>
									<div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">

										<a href="#" class="flex items-center px-3 py-2 text-base font-medium leading-5 text-gray-600 rounded-md group hover:text-gray-900 hover:bg-gray-50">
											<span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
											<span class="truncate">
												Engineering
											</span>
										</a>

										<a href="#" class="flex items-center px-3 py-2 text-base font-medium leading-5 text-gray-600 rounded-md group hover:text-gray-900 hover:bg-gray-50">
											<span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
											<span class="truncate">
												Human Resources
											</span>
										</a>

										<a href="#" class="flex items-center px-3 py-2 text-base font-medium leading-5 text-gray-600 rounded-md group hover:text-gray-900 hover:bg-gray-50">
											<span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
											<span class="truncate">
												Customer Success
											</span>
										</a>

									</div>
								</div>
							</nav>
						</div>
					</div>
					<div class="flex-shrink-0 w-14" aria-hidden="true">
						<!-- Dummy element to force sidebar to shrink to fit close icon -->
					</div>
				</div>
			</div>

			<!-- Static sidebar for desktop -->
			<div class="hidden lg:flex lg:flex-shrink-0">
				<div class="flex flex-col w-64 pt-5 pb-4 bg-gray-100 border-r border-gray-200">
					<div class="flex items-center flex-shrink-0 px-6">
						<img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-logo-purple-500-mark-gray-700-text.svg" alt="Workflow">
					</div>
					<!-- Sidebar component, swap this element with another sidebar if you like -->
					<div class="flex flex-col flex-1 h-0 overflow-y-auto">
						<!-- User account dropdown -->
						<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative inline-block px-3 mt-6 text-left">
							<div x-description="Dropdown menu toggle, controlling the show/hide state of dropdown menu.">
								<button @click="open = !open" type="button" class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500" id="options-menu" aria-haspopup="true" x-bind:aria-expanded="open">
									<span class="flex items-center justify-between w-full">
										<span class="flex items-center justify-between min-w-0 space-x-3">
											<img class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=256&amp;h=256&amp;q=80" alt="">
											<span class="flex-1 min-w-0">
												<span class="text-sm font-medium text-gray-900 truncate">Jessy Schwarz</span>
												<span class="text-sm text-gray-500 truncate">@jessyschwarz</span>
											</span>
										</span>
										<svg class="flex-shrink-0 w-5 h-5 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: selector" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
										</svg>
									</span>
								</button>
							</div>
							<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 right-0 z-10 mx-3 mt-1 origin-top bg-white divide-y divide-gray-200 rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="options-menu" style="display: none;">
								<div class="py-1">
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View profile</a>
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Settings</a>
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Notifications</a>
								</div>
								<div class="py-1">
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Get desktop app</a>
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Support</a>
								</div>
								<div class="py-1">
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Logout</a>
								</div>
							</div>
						</div>
						<!-- Sidebar Search -->
						<div class="px-3 mt-5">
							<label for="search" class="sr-only">Search</label>
							<div class="relative mt-1 rounded-md shadow-sm">
								<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" aria-hidden="true">
									<svg class="w-4 h-4 mr-3 text-gray-400" x-description="Heroicon name: search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
									</svg>
								</div>
								<input type="text" name="search" id="search" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-9 sm:text-sm" placeholder="Search">
							</div>
						</div>
						<!-- Navigation -->
						<nav class="px-3 mt-6">
							<div class="space-y-1">


								<!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-700 hover:text-gray-900 hover:bg-gray-50" -->
								<a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-900 bg-gray-200 rounded-md group">
									<!-- Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500" -->
									<svg class="w-6 h-6 mr-3 text-gray-500" x-description="Heroicon name: home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
									</svg>
									Home
								</a>


								<a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50 group">
									<svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: view-list" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
									</svg>
									My tasks
								</a>


								<a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50 group">
									<svg class="w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									Recent
								</a>

							</div>
							<div class="mt-8">
								<!-- Secondary navigation -->
								<h3 class="px-3 text-xs font-semibold tracking-wider text-gray-500 uppercase" id="teams-headline">
									Teams
								</h3>
								<div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">

									<a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md group hover:text-gray-900 hover:bg-gray-50">
										<span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
										<span class="truncate">
											Engineering
										</span>
									</a>

									<a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md group hover:text-gray-900 hover:bg-gray-50">
										<span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
										<span class="truncate">
											Human Resources
										</span>
									</a>

									<a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md group hover:text-gray-900 hover:bg-gray-50">
										<span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
										<span class="truncate">
											Customer Success
										</span>
									</a>

								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- Main column -->
			<div class="flex flex-col flex-1 w-0 overflow-hidden">
				<!-- Search header -->
				<div class="relative z-10 flex flex-shrink-0 h-16 bg-white border-b border-gray-200 lg:hidden">
					<button x-description="Sidebar toggle, controls the 'sidebarOpen' sidebar state." @click.stop="sidebarOpen = true" class="px-4 text-gray-500 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
						<span class="sr-only">Open sidebar</span>
						<svg class="w-6 h-6" x-description="Heroicon name: menu-alt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
						</svg>
					</button>
					<div class="flex justify-between flex-1 px-4 sm:px-6 lg:px-8">
						<div class="flex flex-1">
							<form class="flex w-full md:ml-0" action="#" method="GET">
								<label for="search_field" class="sr-only">Search</label>
								<div class="relative w-full text-gray-400 focus-within:text-gray-600">
									<div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
										<svg class="w-5 h-5" x-description="Heroicon name: search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
										</svg>
									</div>
									<input id="search_field" name="search_field" class="block w-full h-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 border-transparent focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:text-sm" placeholder="Search" type="search">
								</div>
							</form>
						</div>
						<div class="flex items-center">
							<!-- Profile dropdown -->
							<div @click.away="open = false" class="relative ml-3" x-data="{ open: false }">
								<div>
									<button @click="open = !open" class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
										<span class="sr-only">Open user menu</span>
										<img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
									</button>
								</div>
								<div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-48 mt-2 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">
									<div class="py-1" role="none">
										<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View profile</a>
										<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Settings</a>
										<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Notifications</a>
									</div>
									<div class="py-1" role="none">
										<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Get desktop app</a>
										<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Support</a>
									</div>
									<div class="py-1" role="none">
										<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Logout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<main class="relative z-0 flex-1 overflow-y-auto focus:outline-none" tabindex="0" x-data="" x-init="$el.focus()">
					<!-- Page title & actions -->
					<div class="px-4 py-4 border-b border-gray-200 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
						<div class="flex-1 min-w-0">
							<h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">
								Home
							</h1>
						</div>
						<div class="flex mt-4 sm:mt-0 sm:ml-4">
							<button type="button" class="inline-flex items-center order-1 px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-0 sm:ml-0">
								Share
							</button>
							<button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-purple-600 border border-transparent rounded-md shadow-sm order-0 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-1 sm:ml-3">
								Create
							</button>
						</div>
					</div>
					<!-- Pinned projects -->
					<div class="px-4 mt-6 sm:px-6 lg:px-8">
						<h2 class="text-xs font-medium tracking-wide text-gray-500 uppercase">Pinned Projects</h2>
						<ul class="grid grid-cols-1 gap-4 mt-3 sm:gap-6 sm:grid-cols-2 xl:grid-cols-4" x-max="1">

							<li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex col-span-1 rounded-md shadow-sm">
								<div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-pink-600 rounded-l-md">
									GA
								</div>
								<div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
									<div class="flex-1 px-4 py-2 text-sm truncate">
										<a href="#" class="font-medium text-gray-900 hover:text-gray-600">
											GraphQL API
										</a>
										<p class="text-gray-500">12 Members</p>
									</div>
									<div class="flex-shrink-0 pr-2">
										<button @click="open = !open" id="pinned-project-options-menu-0" aria-haspopup="true" :aria-expanded="open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
											<span class="sr-only">Open options</span>
											<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
											</svg>
										</button>
										<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-10 top-3 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-0" style="display: none;">
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View</a>
											</div>
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Removed from pinned</a>
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Share</a>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex col-span-1 rounded-md shadow-sm">
								<div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-purple-600 rounded-l-md">
									NB
								</div>
								<div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
									<div class="flex-1 px-4 py-2 text-sm truncate">
										<a href="#" class="font-medium text-gray-900 hover:text-gray-600">
											New Benefits Plan
										</a>
										<p class="text-gray-500">8 Members</p>
									</div>
									<div class="flex-shrink-0 pr-2">
										<button @click="open = !open" id="pinned-project-options-menu-1" aria-haspopup="true" :aria-expanded="open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
											<span class="sr-only">Open options</span>
											<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
											</svg>
										</button>
										<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-10 top-3 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-1" style="display: none;">
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View</a>
											</div>
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Removed from pinned</a>
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Share</a>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex col-span-1 rounded-md shadow-sm">
								<div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">
									OE
								</div>
								<div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
									<div class="flex-1 px-4 py-2 text-sm truncate">
										<a href="#" class="font-medium text-gray-900 hover:text-gray-600">
											Onboarding Emails
										</a>
										<p class="text-gray-500">14 Members</p>
									</div>
									<div class="flex-shrink-0 pr-2">
										<button @click="open = !open" id="pinned-project-options-menu-2" aria-haspopup="true" :aria-expanded="open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
											<span class="sr-only">Open options</span>
											<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
											</svg>
										</button>
										<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-10 top-3 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-2" style="display: none;">
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View</a>
											</div>
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Removed from pinned</a>
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Share</a>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex col-span-1 rounded-md shadow-sm">
								<div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-green-500 rounded-l-md">
									IA
								</div>
								<div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
									<div class="flex-1 px-4 py-2 text-sm truncate">
										<a href="#" class="font-medium text-gray-900 hover:text-gray-600">
											iOS App
										</a>
										<p class="text-gray-500">2 Members</p>
									</div>
									<div class="flex-shrink-0 pr-2">
										<button @click="open = !open" id="pinned-project-options-menu-3" aria-haspopup="true" :aria-expanded="open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
											<span class="sr-only">Open options</span>
											<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
											</svg>
										</button>
										<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-10 top-3 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="pinned-project-options-menu-3" style="display: none;">
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">View</a>
											</div>
											<div class="py-1" role="none">
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Removed from pinned</a>
												<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Share</a>
											</div>
										</div>
									</div>
								</div>
							</li>


							<!-- More project cards... -->
						</ul>
					</div>

					<!-- Projects list (only on smallest breakpoint) -->
					<div class="mt-10 sm:hidden">
						<div class="px-4 sm:px-6">
							<h2 class="text-xs font-medium tracking-wide text-gray-500 uppercase">Projects</h2>
						</div>
						<ul class="mt-3 border-t border-gray-200 divide-y divide-gray-100" x-max="1">

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											GraphQL API
											<span class="font-normal text-gray-500 truncate">in Engineering</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-purple-600" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											New Benefits Plan
											<span class="font-normal text-gray-500 truncate">in Human Resources</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-yellow-500" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Onboarding Emails
											<span class="font-normal text-gray-500 truncate">in Customer Success</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-green-500" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											iOS App
											<span class="font-normal text-gray-500 truncate">in Engineering</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Marketing Site Redesign
											<span class="font-normal text-gray-500 truncate">in Engineering</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-purple-600" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Hire CFO
											<span class="font-normal text-gray-500 truncate">in Human Resources</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-yellow-500" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Android App
											<span class="font-normal text-gray-500 truncate">in Engineering</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-green-500" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											New Customer Portal
											<span class="font-normal text-gray-500 truncate">in Engineering</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Co-op Program
											<span class="font-normal text-gray-500 truncate">in Human Resources</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-purple-600" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Implement NPS
											<span class="font-normal text-gray-500 truncate">in Customer Success</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-yellow-500" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Employee Recognition Program
											<span class="font-normal text-gray-500 truncate">in Human Resources</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>

							<li>
								<a href="#" class="flex items-center justify-between px-4 py-4 group hover:bg-gray-50 sm:px-6">
									<span class="flex items-center space-x-3 truncate">
										<span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-green-500" aria-hidden="true"></span>
										<span class="text-sm font-medium leading-6 truncate">
											Open Source Web Client
											<span class="font-normal text-gray-500 truncate">in Engineering</span>
										</span>
									</span>
									<svg class="w-5 h-5 ml-4 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
									</svg>
								</a>
							</li>


							<!-- More project rows... -->
						</ul>
					</div>

					<!-- Projects table (small breakpoint and up) -->
					<div class="hidden mt-8 sm:block">
						<div class="inline-block min-w-full align-middle border-b border-gray-200">
							<table class="min-w-full">
								<thead>
									<tr class="border-t border-gray-200">
										<th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
											<span class="lg:pl-2">Project</span>
										</th>
										<th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
											Members
										</th>
										<th class="hidden px-6 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase border-b border-gray-200 md:table-cell bg-gray-50">
											Last updated
										</th>
										<th class="py-3 pr-6 text-xs font-medium tracking-wider text-right text-gray-500 uppercase border-b border-gray-200 bg-gray-50"></th>
									</tr>
								</thead>
								<tbody class="bg-white divide-y divide-gray-100" x-max="1">

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														GraphQL API
														<span class="font-normal text-gray-500">in Engineering</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+8</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											March 17, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-0" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-0" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-purple-600" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														New Benefits Plan
														<span class="font-normal text-gray-500">in Human Resources</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+4</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											April 4, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-1" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-1" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-yellow-500" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Onboarding Emails
														<span class="font-normal text-gray-500">in Customer Success</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+10</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											March 30, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-2" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-2" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-green-500" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														iOS App
														<span class="font-normal text-gray-500">in Engineering</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											March 30, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-3" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-3" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Marketing Site Redesign
														<span class="font-normal text-gray-500">in Engineering</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+3</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											June 17, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-4" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-4" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-purple-600" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Hire CFO
														<span class="font-normal text-gray-500">in Human Resources</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+4</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											July 11, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-5" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-5" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-yellow-500" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Android App
														<span class="font-normal text-gray-500">in Engineering</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+8</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											July 17, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-6" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-6" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-green-500" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														New Customer Portal
														<span class="font-normal text-gray-500">in Engineering</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											July 29, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-7" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-7" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-pink-600" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Co-op Program
														<span class="font-normal text-gray-500">in Human Resources</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+8</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											August 3, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-8" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-8" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-purple-600" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Implement NPS
														<span class="font-normal text-gray-500">in Customer Success</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+4</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											August 8, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-9" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-9" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-yellow-500" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Employee Recognition Program
														<span class="font-normal text-gray-500">in Human Resources</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+8</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											August 14, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-10" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-10" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="w-full px-6 py-3 text-sm font-medium text-gray-900 max-w-0 whitespace-nowrap">
											<div class="flex items-center space-x-3 lg:pl-2">
												<div class="flex-shrink-0 w-2.5 h-2.5 rounded-full bg-green-500" aria-hidden="true"></div>
												<a href="#" class="truncate hover:text-gray-600">
													<span>
														Open Source Web Client
														<span class="font-normal text-gray-500">in Engineering</span>
													</span>
												</a>
											</div>
										</td>
										<td class="px-6 py-3 text-sm font-medium text-gray-500">
											<div class="flex items-center space-x-2">
												<div class="flex flex-shrink-0 -space-x-1">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

													<img class="w-6 h-6 rounded-full max-w-none ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">

												</div>

												<span class="flex-shrink-0 text-xs font-medium leading-5">+8</span>
											</div>
										</td>
										<td class="hidden px-6 py-3 text-sm text-right text-gray-500 md:table-cell whitespace-nowrap">
											September 21, 2020
										</td>
										<td class="pr-6">
											<div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false" class="relative flex items-center justify-end">
												<button id="project-options-menu-11" aria-haspopup="true" :aria-expanded="open" type="button" @click="open = !open" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
													<span class="sr-only">Open options</span>
													<svg class="w-5 h-5" x-description="Heroicon name: dots-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
													</svg>
												</button>
												<div x-show="open" x-description="Dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute top-0 z-10 w-48 mx-3 mt-1 origin-top-right bg-white divide-y divide-gray-200 rounded-md shadow-lg right-7 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="project-options-menu-11" style="display: none;">
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
																<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
															</svg>
															Edit
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: duplicate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path>
																<path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path>
															</svg>
															Duplicate
														</a>
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: user-add" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
															</svg>
															Share
														</a>
													</div>
													<div class="py-1" role="none">
														<a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 group hover:bg-gray-100 hover:text-gray-900" role="menuitem">
															<svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
																<path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>


									<!-- More project rows... -->
								</tbody>
							</table>
						</div>
					</div>
				</main>
			</div>
		</div>

	</div>
</div>
