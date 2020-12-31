<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<footer>
<div class="container">
	<p class="footer">
		Page rendered in <b>{{elapsed_time}}</b> seconds.
		<?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>
</div>
</footer>
<?php echo $before_closing_body; ?>
</body>
</html>
