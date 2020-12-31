<?php
defined('BASEPATH') or exit('No direct script access allowed');



$route['bootstrap/index']                    = 'bootstrap/show';
$route['bootstrap/(:any)']                   = 'bootstrap/show/$1';

$route['calendar']                           = 'calendar/show';
$route['care-requests']                      = 'care_requests/index';


$route['customers']                          = "customers";
$route['customers/create']                   = 'customers/create';
$route['customers/add_view']                 = 'customers/add_student_view';
$route['customers/edit/(\d+)']               = 'customers/update_student_view/$1';
$route['customers/delete/(\d+)']             = 'customers/delete_student/$1';

$route['dashboard']                          = 'dashboard/show';

$route['episodes']                           = 'episodes/index';
$route['episodes/(\d+)']                     = 'episodes/show/$1';
// $route['episodes/(:id)']['patch']            = 'episodes/update';
// $route['episodes/(:id)/edit']                = 'episodes/edit';

$route['events']                             = 'events/index';
$route['events/(:any)']                      = 'events/show/$1';
$route['events/create']                      = 'events/create';
$route['events/index']                       = 'events/index';
$route['events/update']                      = 'events/update';

$route['organizations']                      = 'organizations/index';
$route['organizations/(:any)']               = 'organizations/show/$1';
$route['organizations/create']               = 'organizations/create';
$route['organizations/update']               = 'organizations/update';
$route['organizations/index']                = 'organizations/index';

$route['podcasts/(:id)/cover-image']['put']  = 'podcast_cover_image/update';

$route['podcasts/(:any)/episodes']           = 'podcast_episodes/index/$1';
$route['podcasts/(:id)/episodes']['post']    = 'podcast_episodes/store';
$route['podcasts/(:id)/episodes/new']        = 'podcast_episodes/create';

$route['podcasts']                           = 'podcasts/index';
$route['podcasts/index']                     = 'podcasts/index';
$route['podcasts/new']                       = 'podcasts/create';
// $route['podcasts']['post']                   = 'podcasts/store';
$route['podcasts/(:any)']                    = 'podcasts/show/$1';
$route['podcasts/(:id)/edit']                = 'podcasts/edit';
$route['podcasts/(:id)']['patch']            = 'podcasts/update';
$route['podcasts/(:id)']['delete']           = 'podcasts/destroy';

$route['posts']                              = 'posts/index';
$route['posts/(:any)']                       = 'posts/show/$1';
$route['posts/create']                       = 'posts/create';
$route['posts/index']                        = 'posts/index';
$route['posts/update']                       = 'posts/update';

$route['profile']                            = 'profile/show';

$route['properties']                         = 'properties/index';
$route['properties/(:any)']                  = 'properties/show/$1';

$route['published-podcasts']['post']         = 'published_podcasts/store';
$route['published-podcasts/(:id)']['delete'] = 'published_podcasts/destroy';

$route['reports']                            = 'reports/index';
$route['reports/(:any)']                     = 'reports/show/$1';
$route['reports/create']                     = 'reports/create';
$route['reports/index']                      = 'reports/index';
$route['reports/update']                     = 'reports/update';

$route['resources']                          = 'resources/index';
$route['resources/create']                   = 'resources/create';

$route['resumes/(:any)']                     = 'resumes/show/$1';

$route['subscriptions']                      = 'subscriptions/store';
$route['subscriptions/(:id)']['delete']      = 'subscriptions/destroy';

$route['dom']                                = 'simple_dom/show';

$route['test']                          = 'test/index';

// $route['site/(:any)']                        = 'site/index';

if (strstr($_SERVER['HTTP_HOST'], 'insiders.')) {
    $route['default_controller'] = 'admin/show';
    $route['(:any)'] = 'admin/show/$1';
} else {
    $route['default_controller'] = 'pages/show';
    $route['(:any)'] = 'pages/show/$1';
}


$route['404_override']                       = '';
$route['translate_uri_dashes']               = false;
