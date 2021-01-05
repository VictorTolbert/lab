<?php defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('templates/_partials/public_master_header_view'); ?>
<main class="flex-1">
<?= $the_view_content ?>
</main>
<?php $this->load->view('templates/_partials/public_master_footer_view') ?>
