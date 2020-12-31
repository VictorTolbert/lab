<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Gumlet\ImageResize;

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        include APPPATH . 'third_party/imageResize/ImageResize.php';
    }

    public function image_resize()
    {
        $fname = 'file';
        $image = new ImageResize($this->config->item('image_main') . $fname);
        $image
            ->resizeToWidth(500, 300)
            ->save($this->config->item('image_large') . $fname)

            ->crop(100, 100)
            ->save($this->config->item('image_small') . $fname)
        ;
    }
}
