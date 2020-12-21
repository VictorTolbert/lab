<?php


 interface Newsletter
 {
     public function subscribe($email);
 }

class CampaignMonitor implements Newsletter
{
    protected $apiKey;

    /**
     *
     * @param mixed $apiKey
     * @return void
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function subscribe($email)
    {
        // Maybe a CURL request to campaign monitor's api to add the
        die('subscribing with CampaignMonitor');
    }
}

class Drip implements Newsletter
{
    protected $apiKey;

    /**
     * CampaignMonitor constructor
     *
     * @param mixed $email
     * @return void
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class Newsletter_subscriptions extends CI_Controller
{
    // public function store()
    // {
    //     // Delegate to add the user's email list, like Campaign monitor

    //     $newsletter =  new CampaignMonitor(config('services.cm.key'));

    //     $newsletter->subscribe(auth()->user()->email);
    // }

    public function store(Newsletter $newsletter)
    {
        $email = 'joe@example.com';
        $newsletter->subscribe($email);
    }
}
