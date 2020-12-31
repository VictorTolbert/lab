<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (! function_exists('clean_pledge_page_text')) {
    function clean_pledge_page_text($dirty_html)
    {
        require_once APPPATH . 'third_party/htmlpurifier-4.6.0-standalone/HTMLPurifier.standalone.php';

        $config = HTMLPurifier_Config::createDefault();
        $config->set('Core.Encoding', 'utf-8');
        $config->set('HTML.Doctype', 'XHTML 1.0 Strict');
        $config->set('HTML.Allowed', 'p,strong,b,em,i');
        $config->set('HTML.TidyLevel', 'light');
        $config->set('AutoFormat.RemoveEmpty', true);

        $htmlpurifier = new HTMLPurifier($config);

        $clean_html = $htmlpurifier->purify($dirty_html);

        return $clean_html;
    }
}


if (! function_exists('clean_override_text_for_view')) {
    function clean_override_text_for_view($dirty_html)
    {
        require_once APPPATH . 'third_party/htmlpurifier-4.6.0-standalone/HTMLPurifier.standalone.php';

        $config = HTMLPurifier_Config::createDefault();
        $config->set('Core.Encoding', 'utf-8');
        $config->set('HTML.Doctype', 'HTML 4.01 Transitional');
        $config->set('HTML.Allowed', 'p,strong,b,em,i,li,ol,ul,a[href],a[target],br,div,span');
        $config->set('HTML.TidyLevel', 'light');
        $config->set('AutoFormat.RemoveEmpty', true);
        $config->set('Cache.DefinitionImpl', null);
        $config->set('Attr.AllowedFrameTargets', ['_blank', '_self', '_parent', '_top']);

        $htmlpurifier = new HTMLPurifier($config);

        return $htmlpurifier->purify($dirty_html);
    }
}


if (! function_exists('clean_client_text')) {
    function clean_client_text($dirty_html)
    {
        require_once APPPATH . 'third_party/htmlpurifier-4.6.0-standalone/HTMLPurifier.standalone.php';

        $config = HTMLPurifier_Config::createDefault();

        $htmlpurifier = new HTMLPurifier($config);

        return $htmlpurifier->purify($dirty_html);
    }
}
