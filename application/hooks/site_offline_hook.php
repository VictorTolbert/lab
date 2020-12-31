<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class site_offline_hook
{
    public function __construct()
    {
        log_message('debug', 'Accessing site_offline hook!');
    }

    public function is_offline()
    {
        if (file_exists(APPPATH . 'config/config.php')) {
            include(APPPATH . 'config/config.php');

            if (isset($config['is_offline']) && $config['is_offline'] === true) {
                $this->show_site_offline();
                exit;
            }
        }
    }

    private function show_site_offline()
    {
        echo '<htm><body><h2>The site is currently offline</h2><p>The site is offline due to maintenance. Please check back shortly.</p></body></html>';
    }
}
