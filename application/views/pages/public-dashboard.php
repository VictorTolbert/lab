<main class="flex-1">
<div x-data="{ open: false }" class="relative pb-32 overflow-hidden bg-light-blue-700">
      <nav :class="{ 'bg-light-blue-900': open, 'bg-transparent': !open }" class="relative z-10 bg-transparent border-b border-teal-500 border-opacity-25 lg:bg-transparent lg:border-none">
        <div class="px-2 mx-auto max-w-7xl sm:px-4 lg:px-8">
          <div class="relative flex items-center justify-between h-16 lg:border-b lg:border-light-blue-800">
            <div class="flex items-center px-2 lg:px-0">
            <div class="flex items-center px-2 lg:px-0">
              <div class="flex-shrink-0">
                <img class="block w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-teal-400.svg" alt="Workflow">
              </div>
              <div class="hidden lg:block lg:ml-6 lg:space-x-4">
                <div class="flex">


                      <!-- Current: "bg-black bg-opacity-25", Default: "hover:bg-light-blue-800" -->
                      <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-black bg-opacity-25 rounded-md" aria-current="page">Dashboard</a>


                      <a href="#" class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-light-blue-800">Jobs</a>


                      <a href="#" class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-light-blue-800">Applicants</a>


                      <a href="#" class="px-3 py-2 text-sm font-medium text-white rounded-md hover:bg-light-blue-800">Company</a>

                </div>
              </div>
            </div>
            <div class="flex justify-center flex-1 px-2 lg:ml-6 lg:justify-end">
              <div class="w-full max-w-lg lg:max-w-xs">
                <label for="search" class="sr-only">Search</label>
                <div class="relative text-light-blue-100 focus-within:text-gray-400">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="flex-shrink-0 w-5 h-5" x-description="Heroicon name: search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
</svg>
                  </div>
                  <input id="search" name="search" class="block w-full py-2 pl-10 pr-3 leading-5 bg-opacity-50 border border-transparent rounded-md bg-light-blue-700 placeholder-light-blue-100 focus:outline-none focus:bg-white focus:ring-white focus:border-white focus:placeholder-gray-500 focus:text-gray-900 sm:text-sm" placeholder="Search" type="search">
                </div>
              </div>
            </div>
            <div class="flex lg:hidden">
              <!-- Mobile menu button -->
              <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-light-blue-200 hover:text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" x-bind:aria-expanded="open">
                <span class="sr-only">Open main menu</span>
                <!-- Icon when menu is closed. -->
                <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': open, 'block': !open }" class="flex-shrink-0 block w-6 h-6" x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
</svg>
                <!-- Icon when menu is open. -->
                <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': !open, 'block': open }" class="flex-shrink-0 hidden w-6 h-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
</svg>
              </button>
            </div>
            <div class="hidden lg:block lg:ml-4">
              <div class="flex items-center">
                <button class="flex-shrink-0 p-1 rounded-full text-light-blue-200 hover:bg-light-blue-800 hover:text-white focus:outline-none focus:bg-light-blue-900 focus:ring-2 focus:ring-offset-2 focus:ring-offset-light-blue-900 focus:ring-white">
                  <span class="sr-only">View notifications</span>
                  <svg class="w-6 h-6" x-description="Heroicon name: bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
</svg>
                </button>

                <!-- Profile dropdown -->
                <div @click.away="open = false" class="relative flex-shrink-0 ml-4" x-data="{ open: false }">
                  <div>
                    <button @click="open = !open" class="flex text-sm text-white rounded-full focus:outline-none focus:bg-light-blue-900 focus:ring-2 focus:ring-offset-2 focus:ring-offset-light-blue-900 focus:ring-white" id="user-menu" aria-haspopup="true" x-bind:aria-expanded="open">
                      <span class="sr-only">Open user menu</span>
                      <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80" alt="">
                    </button>
                  </div>
                  <div x-show="open" x-description="Profile dropdown panel, show/hide based on dropdown state." x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div x-description="Mobile menu, toggle classes based on menu state." x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'block': open, 'hidden': !open }" class="hidden bg-light-blue-900 lg:hidden">
          <div class="px-2 pt-2 pb-3 space-y-1">


                <!-- Current: "bg-black bg-opacity-25", Default: "hover:bg-light-blue-800" -->
                <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-black bg-opacity-25 rounded-md" aria-current="page">Dashboard</a>


                <a href="#" class="block px-3 py-2 text-base font-medium text-white rounded-md hover:bg-light-blue-800">Jobs</a>


                <a href="#" class="block px-3 py-2 text-base font-medium text-white rounded-md hover:bg-light-blue-800">Applicants</a>


                <a href="#" class="block px-3 py-2 text-base font-medium text-white rounded-md hover:bg-light-blue-800">Company</a>

          </div>
          <div class="pt-4 pb-3 border-t border-light-blue-800">
            <div class="flex items-center px-4">
              <div class="flex-shrink-0">
                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80h" alt="">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium text-white">Debbie Lewis</div>
                <div class="text-sm font-medium text-light-blue-200">debbielewis@example.com</div>
              </div>
              <button class="flex-shrink-0 p-1 ml-auto rounded-full text-light-blue-200 hover:bg-light-blue-800 hover:text-white focus:outline-none focus:bg-light-blue-900 focus:ring-2 focus:ring-offset-2 focus:ring-offset-light-blue-900 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <svg class="w-6 h-6" x-description="Heroicon name: bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
</svg>
              </button>
            </div>
            <div class="px-2 mt-3">

                <a href="#" class="block px-3 py-2 text-base font-medium rounded-md text-light-blue-200 hover:text-white hover:bg-light-blue-800">Your Profile</a>

                <a href="#" class="block px-3 py-2 text-base font-medium rounded-md text-light-blue-200 hover:text-white hover:bg-light-blue-800">Settings</a>

                <a href="#" class="block px-3 py-2 text-base font-medium rounded-md text-light-blue-200 hover:text-white hover:bg-light-blue-800">Sign out</a>

            </div>
          </div>
        </div>
      </nav>
      <div :class="{ 'bottom-0': open, 'inset-y-0': !open }" class="absolute inset-x-0 inset-y-0 flex justify-center w-full overflow-hidden transform -translate-x-1/2 left-1/2 lg:inset-y-0" aria-hidden="true">
        <div class="flex-grow bg-opacity-75 bg-light-blue-900"></div>
        <svg class="flex-shrink-0" width="1750" height="308" viewBox="0 0 1750 308" xmlns="http://www.w3.org/2000/svg">
          <path opacity=".75" d="M1465.84 308L16.816 0H1750v308h-284.16z" fill="#075985"></path>
          <path opacity=".75" d="M1733.19 0L284.161 308H0V0h1733.19z" fill="#0c4a6e"></path>
        </svg>
        <div class="flex-grow bg-opacity-75 bg-light-blue-800"></div>
      </div>
      <header class="relative py-10">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold text-white">
            Sope Creek Fun Run
          </h1>
        </div>
      </header>

	  <main class="p-16 -mt-32 bg-white rounded shadow">
			testing
	  </main>
    </div>
</main>
