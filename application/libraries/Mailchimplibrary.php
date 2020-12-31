<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailchimplibrary

{
    public function __construct()
    {
        require_once APPPATH.'third_party/mailchimp/MailChimp.php';
		require_once APPPATH.'third_party/mailchimp/Batch.php';
		require_once APPPATH.'third_party/mailchimp/Webhook.php';
		
    }
}
