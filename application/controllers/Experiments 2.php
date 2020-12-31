<?php

// use Sunra\PhpSimple\HtmlDomParser;
use Gumlet\ImageResize;

class Experiments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        include APPPATH . 'third_party/imageResize/ImageResize.php';
        include APPPATH . 'third_party/SimpleXLSX.php';
        // $dom = HtmlDomParser::str_get_html($str);
        // $dom = HtmlDomParser::file_get_html($file_name);

        // $elems = $dom->find($elem_name);
    }

    public function image_resize()
    {
        $image = new ImageResize('image.jpg');
        $image->scale(50);
        $image->save('image2.jpg');

        // $image = new \Eventviva\ImageResize($this->config->item('image_main') . $fname);
        // $image
        //     ->resizeToWidth(500, 300)
        //     ->save($this->config->item('image_large') . $fname)

        // ->crop(100, 100)
        // ->save($this->config->item('image_small') . $fname);
        // ini_set('error_reporting', E_ALL);
        // ini_set('display_errors', true);


        // Ion_auth_model::db()
        // Ion_auth_model::clear_remember_code($identity)
        // Ion_auth_model::get_user_by_forgotten_password_code($user_code)
        // Ion_auth_model::get_user_id_from_identity($identity = '')
        // Ion_auth_model::rehash_password_if_needed($hash, $identity, $password)
        // Ion_auth_model::remember_user($identity)
        // Ion_auth_model::hash_password($password, $identity = NULL)
        // Ion_auth_model::clear_forgotten_password_code($identity)
        // Ion_auth_model::verify_password($password, $hash_password_db, $identity = NULL)


        if ($xlsx = SimpleXLSX::parse('book.xlsx')) {
            echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
            foreach ($xlsx->rows() as $r) {
                echo '<tr><td>' . implode('</td><td>', $r) . '</td></tr>';
            }
            echo '</table>';
        // or $xlsx->toHTML();
        } else {
            echo SimpleXLSX::parseError();
        }
    }
}
