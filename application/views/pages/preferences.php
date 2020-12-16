<main class="flex-1 overflow-y-auto focus:outline-none" tabindex="0" x-data="" x-init="$el.focus()">
	<div class="relative max-w-4xl mx-auto md:px-8 xl:px-0">
		<div class="pt-10 pb-16">
			<div class="px-4 sm:px-6 md:px-0">
				<h1 class="text-3xl font-extrabold text-gray-900">Settings</h1>
			</div>
			<div class="px-4 sm:px-6 md:px-0">
				<div class="py-6">
					<!-- Tabs -->
					<div class="lg:hidden">
						<label for="selected-tab" class="sr-only">Select a tab</label>
						<select id="selected-tab" name="selected-tab" class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">


							<option selected="">General</option>


							<option>Password</option>


							<option>Notifications</option>


							<option>Plan</option>


							<option>Billing</option>


							<option>Team Members</option>

						</select>
					</div>
					<div class="hidden lg:block">
						<div class="border-b border-gray-200">
							<nav class="flex -mb-px">


								<!-- Current: "border-purple-500 text-purple-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
								<a href="#" class="px-1 py-4 text-sm font-medium text-purple-600 border-b-2 border-purple-500 whitespace-nowrap">
									General
								</a>


								<a href="#" class="px-1 py-4 ml-8 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">
									Password
								</a>


								<a href="#" class="px-1 py-4 ml-8 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">
									Notifications
								</a>


								<a href="#" class="px-1 py-4 ml-8 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">
									Plan
								</a>


								<a href="#" class="px-1 py-4 ml-8 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">
									Billing
								</a>


								<a href="#" class="px-1 py-4 ml-8 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700 whitespace-nowrap">
									Team Members
								</a>

							</nav>
						</div>
					</div>

					<!-- Description list with inline editing -->
					<div class="mt-10 divide-y divide-gray-200">
						<div class="space-y-1">
							<h3 class="text-lg font-medium leading-6 text-gray-900">
								Profile
							</h3>
							<p class="max-w-2xl text-sm text-gray-500">
								This information will be displayed publicly so be careful what you share.
							</p>
						</div>
						<div class="mt-6">
							<dl class="divide-y divide-gray-200">
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
									<dt class="text-sm font-medium text-gray-500">
										Name
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<span class="flex-grow">Chelsea Hagon</span>
										<span class="flex-shrink-0 ml-4">
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Update
											</button>
										</span>
									</dd>
								</div>
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
									<dt class="text-sm font-medium text-gray-500">
										Photo
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<span class="flex-grow">
											<img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
										</span>
										<span class="flex items-start flex-shrink-0 ml-4 space-x-4">
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Update
											</button>
											<span class="text-gray-300" aria-hidden="true">|</span>
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Remove
											</button>
										</span>
									</dd>
								</div>
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
									<dt class="text-sm font-medium text-gray-500">
										Email
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<span class="flex-grow">chelsea.hagon@example.com</span>
										<span class="flex-shrink-0 ml-4">
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Update
											</button>
										</span>
									</dd>
								</div>
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-b sm:border-gray-200">
									<dt class="text-sm font-medium text-gray-500">
										Job title
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<span class="flex-grow">Human Resources Manager</span>
										<span class="flex-shrink-0 ml-4">
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Update
											</button>
										</span>
									</dd>
								</div>
							</dl>
						</div>
					</div>

					<div class="mt-10 divide-y divide-gray-200">
						<div class="space-y-1">
							<h3 class="text-lg font-medium leading-6 text-gray-900">
								Account
							</h3>
							<p class="max-w-2xl text-sm text-gray-500">
								Manage how information is displayed on your account.
							</p>
						</div>
						<div class="mt-6">
							<dl class="divide-y divide-gray-200">
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
									<dt class="text-sm font-medium text-gray-500">
										Language
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<span class="flex-grow">English</span>
										<span class="flex-shrink-0 ml-4">
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Update
											</button>
										</span>
									</dd>
								</div>
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
									<dt class="text-sm font-medium text-gray-500">
										Date format
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<span class="flex-grow">DD-MM-YYYY</span>
										<span class="flex items-start flex-shrink-0 ml-4 space-x-4">
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Update
											</button>
											<span class="text-gray-300" aria-hidden="true">|</span>
											<button type="button" class="font-medium text-purple-600 bg-white rounded-md hover:text-purple-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
												Remove
											</button>
										</span>
									</dd>
								</div>
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
									<dt id="timezone-option-label" class="text-sm font-medium text-gray-500">
										Automatic timezone
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<button type="button" @click="on = !on" :aria-pressed="on.toString()" aria-pressed="true" aria-labelledby="timezone-option-label" x-data="{ on: true }" :class="{ 'bg-gray-200': !on, 'bg-purple-600': on }" class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-purple-600 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-auto">
											<span class="sr-only">Use setting</span>
											<span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-5 bg-white rounded-full shadow ring-0"></span>
										</button>
									</dd>
								</div>
								<div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-b sm:border-gray-200">
									<dt id="auto-update-option-label" class="text-sm font-medium text-gray-500">
										Auto-update applicant data
									</dt>
									<dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
										<button type="button" @click="on = !on" :aria-pressed="on.toString()" aria-pressed="false" aria-labelledby="auto-update-option-label" x-data="{ on: false }" :class="{ 'bg-gray-200': !on, 'bg-purple-600': on }" class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-auto">
											<span class="sr-only">Use setting</span>
											<span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
										</button>
									</dd>
								</div>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
