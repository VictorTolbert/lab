<?php
defined('BASEPATH') or exit('No direct script access allowed');


// $route['episodes']                           = 'episodes/index';
// $route['episodes/(:id)']                     = 'episodes/show';
// $route['episodes/(:id)/edit']                = 'episodes/edit';
// $route['episodes/(:id)']['patch']            = 'episodes/update';
// $route['published-podcasts']['post']         = 'published_podcasts/store';
// $route['published-podcasts/(:id)']['delete'] = 'published_podcasts/destroy';
// $route['subscriptions']                      = 'subscriptions/store';
// $route['subscriptions/(:id)']['delete']      = 'subscriptions/destroy';

// $route['dashboard']                          = 'dashboard/show';
// $route['calendar']                           = 'calendar/show';
// $route['site/(:any)']                        = 'site/index';

// $route['posts/index']                        = 'posts/index';
// $route['posts/create']                       = 'posts/create';
// $route['posts/update']                       = 'posts/update';
// $route['posts/(:any)']                       = 'posts/show/$1';
// $route['posts']                              = 'posts/index';

// $route['properties/(:any)']                  = 'properties/show/$1';
// $route['properties']                         = 'properties/index';

// $route['organizations/index']                = 'organizations/index';
// $route['organizations/create']               = 'organizations/create';
// $route['organizations/update']               = 'organizations/update';
// $route['organizations/(:any)']               = 'organizations/show/$1';
// $route['organizations']                      = 'organizations/index';

// $route['reports/index']                      = 'reports/index';
// $route['reports/create']                     = 'reports/create';
// $route['reports/update']                     = 'reports/update';
// $route['reports/(:any)']                     = 'reports/show/$1';
// $route['reports']                            = 'reports/index';
// $route['resources']                          = 'resources/index';
// $route['resources/create']                   = 'resources/create';

$route['items']                   = "items/index";
$route['items/(:num)']            = "items/show/$1";
$route['items/create']['post']    = "items/store";
$route['items/(:any)/edit']       = "items/edit/$1";
$route['items/(:any)']['put']     = "items/update/$1";
$route['items/(:any)']['delete']  = "items/delete/$1";

$route['default_controller']                 = 'pages/show';
$route['(:any)']                             = 'pages/show/$1';

$route['404_override']                       = '';

$route['translate_uri_dashes']               = false;
