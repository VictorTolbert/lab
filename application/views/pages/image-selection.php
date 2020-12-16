<main class="flex items-center justify-center flex-1 bg-gray-700">
	<div class="px-4 mx-auto mt-4" x-data="{ image: 'image1' }">
		<div class="max-w-lg">
			<img src="<?= base_url('assets/images/photos/donald-woodruff-1.jpg') ?>" alt="" x-show="image === 'image1'">
			<img src="<?= base_url('assets/images/photos/donald-woodruff-2.jpg') ?>" alt="" x-show="image === 'image2'">
			<img src="<?= base_url('assets/images/photos/donald-woodruff-3.jpg') ?>" alt="" x-show="image === 'image3'">
			<img src="<?= base_url('assets/images/photos/donald-woodruff-4.jpg') ?>" alt="" x-show="image === 'image4'">
			<img src="<?= base_url('assets/images/photos/donald-woodruff-5.jpg') ?>" alt="" x-show="image === 'image5'">
			<img src="<?= base_url('assets/images/photos/donald-woodruff-6.jpg') ?>" alt="" x-show="image === 'image6'">
		</div>

		<div class="flex items-center mt-4">
			<a href="#" class="border border-transparent hover:border-blue-500" :class="{ 'border-blue-500' : image === 'image1'}" @click.prevent="image = 'image1'"><img src="<?= base_url('assets/images/photos/donald-woodruff-1.jpg') ?>" alt="" class="w-12"></a>
			<a href="#" class="ml-2 border border-transparent hover:border-blue-500" :class="{ 'border-blue-500' : image === 'image2' }" @click.prevent="image = 'image2'"><img src="<?= base_url('assets/images/photos/donald-woodruff-2.jpg') ?>" alt="" class="w-12"></a>
			<a href="#" class="ml-2 border border-transparent hover:border-blue-500" :class="{ 'border-blue-500' : image === 'image3' }" @click.prevent="image = 'image3'"><img src="<?= base_url('assets/images/photos/donald-woodruff-3.jpg') ?>" alt="" class="w-12"></a>
			<a href="#" class="ml-2 border border-transparent hover:border-blue-500" :class="{ 'border-blue-500' : image === 'image4' }" @click.prevent="image = 'image4'"><img src="<?= base_url('assets/images/photos/donald-woodruff-4.jpg') ?>" alt="" class="w-12"></a>
			<a href="#" class="ml-2 border border-transparent hover:border-blue-500" :class="{ 'border-blue-500' : image === 'image5' }" @click.prevent="image = 'image5'"><img src="<?= base_url('assets/images/photos/donald-woodruff-5.jpg') ?>" alt="" class="w-12"></a>
			<a href="#" class="ml-2 border border-transparent hover:border-blue-500" :class="{ 'border-blue-500' : image === 'image6' }" @click.prevent="image = 'image6'"><img src="<?= base_url('assets/images/photos/donald-woodruff-6.jpg') ?>" alt="" class="w-12"></a>
		</div>
	</div>
</main>
