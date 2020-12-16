<main class="flex items-center justify-center flex-1 bg-primary-700">

	<article class="w-full max-w-xl p-4 bg-white border rounded shadow">
		<div class="flex items-center justify-between">
			<span class="flex flex-col flex-grow" id="toggleLabel">
				<span class="text-sm font-medium text-gray-900">Available to hire</span>
				<span class="text-sm leading-normal text-gray-500">Nulla amet tempus sit accumsan. Aliquet turpis sed sit lacinia.</span>
			</span>
			<button type="button" @click="on = !on" :aria-pressed="on.toString()" aria-pressed="false" aria-labelledby="toggleLabel" x-data="{ on: false }" :class="{ 'bg-gray-200': !on, 'bg-primary-600': on }" class="relative inline-flex flex-shrink-0 h-6 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
				<span class="sr-only">Use setting</span>
				<span aria-hidden="true" :class="{ 'translate-x-5': on, 'translate-x-0': !on }" class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow ring-0"></span>
			</button>
		</div>
	</article>

</main>
