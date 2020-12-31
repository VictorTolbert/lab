<?php

use voku\helper\HtmlDomParser;

// require_once 'composer/autoload.php';

class Simple_dom extends CI_Controller
{
    public function show()
    {
        // $str = '<body><h1>Help</h1></body>';
        // $dom = HtmlDomParser::str_get_html($str);

        $file = 'http://www.google.com/';
        $dom = HtmlDomParser::file_get_html($file);

        // print_r($dom);
        echo $dom;
        // var_dump($dom);
        // d(['asdf']);


        // $element = $dom->findOne('#css-selector'); // "$element" === instance of "SimpleHtmlDomInterface"
        // $elements = $dom->findMulti('.css-selector'); // "$elements" === instance of SimpleHtmlDomNodeInterface<int, SimpleHtmlDomInterface>
        // $elementOrFalse = $dom->findOneOrFalse('#css-selector'); // "$elementOrFalse" === instance of "SimpleHtmlDomInterface" or false
        // $elementsOrFalse = $dom->findMultiOrFalse('.css-selector'); // "$elementsOrFalse" === instance of SimpleHtmlDomNodeInterface<int, SimpleHtmlDomInterface> or false
    }
}
