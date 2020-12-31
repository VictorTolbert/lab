<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


function include_mobile_footer_content()
{
    $CI =& get_instance();

    $exclude_footer_routes = [
        'home/register-participant',
        'home/register-getcode',
        'home/profile',
        'home/help',
        'home/help/1',
        'student/help',
        'participant/profile',
        'sponsor/help',
        'help',
    ];

    if (!in_array($CI->uri->uri_string(), $exclude_footer_routes)) {
        $CI->load->view('dashboard/mobile/partials/footer');
    }
}


/**
 * Take the long form DB derived Pledge Type and Replace with Dynamic Unit Data
 * @param  str $pledge_type  The Long Form name of the pledge type derived from the DB
 * @param  int $unit_id      The ID of the unit
 *
 * @return str (In the "Form on Pledge Per {unit name}")
 */
function replace_pledgetype_with_unit_data($pledge_type, $unit_id)
{
    $CI =& get_instance();
    $CI->load->library('booster_api');

    if ($pledge_type != 'Flat Donation') {
        $unit_data   = $CI->booster_api->get_unit_data($unit_id)->data;
        $pledge_type = 'Pledge ' . ucwords($unit_data->modifier . ' ' . $unit_data->name);
    }

    return $pledge_type;
}


/**
 * Get Unit Data for availability from within a view
 * @param  int $unit_id      The ID of the unit
 *
 * @return obj
 */
function get_unit_data_for_view($unit_id)
{
    $CI =& get_instance();
    $CI->load->library('booster_api');

    $unit_data = $CI->booster_api->get_unit_data($unit_id)->data;

    return $unit_data;
}


/**
 * Return the root domain of any program via the program's unit id
 * @param  int $unit_id  -  The Unit ID of a program
 * @return str  the corresponding domain
 */
function get_program_domain($unit_id)
{
    $CI =& get_instance();
    $CI->load->model('Program_model');

    $domain = '';

    switch ($unit_id) {
    case Program_model::UNIT_ID_FUNRUN:
      $domain = 'funrun.com';
      break;

    case Program_model::UNIT_ID_BOOKFIT:
      $domain = 'readathon.com';
      break;

    case Program_model::UNIT_GOLDEN_RULE:
      $domain = 'servathon.com';
      break;

    case Program_model::UNIT_LAPS_PRO:
      $domain = 'funrunpro.com';
      break;

    case Program_model::UNIT_EVENTS_BASH:
      $domain = 'theboosterbash.com';
      break;

    case Program_model::UNIT_ACTIVITY:
      $domain = 'boostergive.com';
      break;

    default:
      $domain = 'funrun.com';
      break;
  }

    return $domain;
}
