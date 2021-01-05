<?php
defined('BASEPATH') or exit('No direct script access allowed');?>

<div class="flex items-center justify-center h-screen border">
	<?= form_open('', ['class' => "w-full max-w-sm p-8 space-y-4 bg-white border rounded shadow"]) ?>

	<?= img("assets/img/logos/promiserves.png") ?>

	<div>
		<?= form_label('Username', 'username', [ 'class' => 'block' ]) ?>
		<?= form_input('username', '', [
            'class' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded',
        ]) ?>
		<?= form_error('username', '<div class="text-xs text-red-500">', '</div>') ?>
	</div>

	<div>
		<?= form_label('Password', 'password', [ 'class' => 'block' ]) ?>
		<?= form_password('password', '', [
            'class' => 'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded',
        ]) ?>
		<?= form_error('password', '<div class="text-xs text-red-500">', '</div>') ?>
	</div>

	<div class="flex items-center justify-between text-xs">
		<a href="<?= base_url('forgot-password') ?>">Forgot Password?</a>
		<span>
			<?= form_checkbox([
				'name' => 'remember',
				'value' => '1',
				'checked' => false,
				'class' => 'rounded',
			]) ?>
			<span>Remember Me</span>
		</span>
	</div>
	<div>
		<?= form_button([
            'content' => 'Login',
            'class' => 'py-1 px-4 border bg-green-500 text-white rounded shadow',
            'name' => 'button',
            'type' => 'submit',
        ]) ?>
	</div>
</div>
