<?php  if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * State Dropdown
 *
 * Returns HTML for a dropdown filled with state information
 *
 * @access public
 * @param string $name     Value of <select>'s name attribute
 * @param string $selected Value of <option> to be selected
 * @param string $id       Value of <select>'s id attribute (optional)
 * @param string $class    Value of <select>'s class attribute (optional)
 * @return string
 */
if (! function_exists('state_dropdown')) {
    function state_dropdown($name='state', $selected=null, $id=null, $class=null)
    {
        $CI =& get_instance();

        $CI->load->helper('form');

        $state_list = state_array();

        $extra = '';
        if (! is_null($id)) {
            $extra .= 'id="' . $id . '" ';
        }
        if (! is_null($class)) {
            $extra .= 'class="' . $class . '" ';
        }
        $extra = substr($extra, 0, -1);

        return form_dropdown($name, $state_list, $selected, $extra);
    }
}

/**
 * Convert from abbreviation
 *
 * Convert a state abbreviation to the full state name
 *
 * @access public
 * @param string $abbr Two-letter abbreviation
 * @return string
 */
if (! function_exists('abbr_to_name')) {
    function abbr_to_name($abbr)
    {
        $state_list = state_array();
        $abbr = strtoupper($abbr);

        return isset($state_list[$abbr]) ? $state_list[$abbr] : false;
    }
}

if (! function_exists('get_state_abbr')) {
    function get_state_abbr($state=null)
    {
        if (empty($state)) {
            return null;
        }

        $input		= $state;
        $state		= alpha_only(strtoupper($state));



        if (strlen($state) == 2) {
            return strtoupper($state);
        }

        $state_list 	= state_array();

        foreach ($state_list as $key => $val) {
            $val 			=  alpha_only(strtoupper($val));
            $state		=  alpha_only(strtoupper($state));
            if ($state == $val) {
                return strtoupper($key);
            }
        }
        return $input;
    }
}

/**
 * Convert to abbreviation
 *
 * Convert a full state name to the state abbreviation
 *
 * @access public
 * @param  string $name States full name
 * @return string/boolean Returns FALSE when not found
 */
if (! function_exists('name_to_abbr')) {
    function name_to_abbr($name)
    {
        $state_list = state_array();
        $camel_name = ucwords(strtolower($name));

        if (strlen($name) == 2) {
            $chk = strtoupper($name);
            if (!empty($state_list[$chk])) {
                return $chk;
            }
        }

        return array_search($camel_name, $state_list);
    }
}

/**
 * Check for valid state
 *
 * Check to see if a provided state exists
 *
 * @access public
 * @param  string $str Two-letter abbreviation OR full state name
 * @return boolean
 */
if (! function_exists('is_valid_state')) {
    function is_valid_state($str)
    {
        $state_list = state_array();
        $camel_str = ucwords(strtolower($str));

        return array_key_exists($str, $state_list) || in_array($camel_str, $state_list);
    }
}

/**
 * State array
 *
 * Return an array of states with their abbreviation as the key
 *
 * @access public
 * @return string
 */
if (! function_exists('state_array')) {
    function state_array()
    {
        $state_list = array(
            '' => 'Select',
            'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'DC' => 'District Of Columbia',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming'
        );

        return $state_list;
    }
}

if (! function_exists('country_name_to_abbr')) {
    function country_name_to_abbr($name)
    {
        $country_list = countries_array();
        $camel_name = ucwords(strtolower($name));

        if (strlen($name) == 2) {
            $chk = strtoupper($name);
            if (!empty(countries_array[$chk])) {
                return $chk;
            }
        }

        if (hash_challenge($name) == 'usa') {
            return 'US';
        }
        if (hash_challenge($name) == 'unitedstatesofamerica') {
            return 'US';
        }

        return array_search($camel_name, $country_list);
    }
}

/**
 * Countries array
 *
 * Return an array of countries with their abbreviation as the key
 *
 * @access public
 * @return string
 */
if (! function_exists('countries_array')) {
    function countries_array()
    {
        $countries = array(
        'AF' => 'Afghanistan',
        'AX' => 'Aland Islands',
        'AL' => 'Albania',
        'DZ' => 'Algeria',
        'AS' => 'American Samoa',
        'AD' => 'Andorra',
        'AO' => 'Angola',
        'AI' => 'Anguilla',
        'AQ' => 'Antarctica',
        'AG' => 'Antigua And Barbuda',
        'AR' => 'Argentina',
        'AM' => 'Armenia',
        'AW' => 'Aruba',
        'AU' => 'Australia',
        'AT' => 'Austria',
        'AZ' => 'Azerbaijan',
        'BS' => 'Bahamas',
        'BH' => 'Bahrain',
        'BD' => 'Bangladesh',
        'BB' => 'Barbados',
        'BY' => 'Belarus',
        'BE' => 'Belgium',
        'BZ' => 'Belize',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BT' => 'Bhutan',
        'BO' => 'Bolivia',
        'BA' => 'Bosnia And Herzegovina',
        'BW' => 'Botswana',
        'BV' => 'Bouvet Island',
        'BR' => 'Brazil',
        'IO' => 'British Indian Ocean Territory',
        'BN' => 'Brunei Darussalam',
        'BG' => 'Bulgaria',
        'BF' => 'Burkina Faso',
        'BI' => 'Burundi',
        'KH' => 'Cambodia',
        'CM' => 'Cameroon',
        'CA' => 'Canada',
        'CV' => 'Cape Verde',
        'KY' => 'Cayman Islands',
        'CF' => 'Central African Republic',
        'TD' => 'Chad',
        'CL' => 'Chile',
        'CN' => 'China',
        'CX' => 'Christmas Island',
        'CC' => 'Cocos (Keeling) Islands',
        'CO' => 'Colombia',
        'KM' => 'Comoros',
        'CG' => 'Congo',
        'CD' => 'Congo, Democratic Republic',
        'CK' => 'Cook Islands',
        'CR' => 'Costa Rica',
        'CI' => 'Cote D\'Ivoire',
        'HR' => 'Croatia',
        'CU' => 'Cuba',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DK' => 'Denmark',
        'DJ' => 'Djibouti',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'EC' => 'Ecuador',
        'EG' => 'Egypt',
        'SV' => 'El Salvador',
        'GQ' => 'Equatorial Guinea',
        'ER' => 'Eritrea',
        'EE' => 'Estonia',
        'ET' => 'Ethiopia',
        'FK' => 'Falkland Islands (Malvinas)',
        'FO' => 'Faroe Islands',
        'FJ' => 'Fiji',
        'FI' => 'Finland',
        'FR' => 'France',
        'GF' => 'French Guiana',
        'PF' => 'French Polynesia',
        'TF' => 'French Southern Territories',
        'GA' => 'Gabon',
        'GM' => 'Gambia',
        'GE' => 'Georgia',
        'DE' => 'Germany',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GR' => 'Greece',
        'GL' => 'Greenland',
        'GD' => 'Grenada',
        'GP' => 'Guadeloupe',
        'GU' => 'Guam',
        'GT' => 'Guatemala',
        'GG' => 'Guernsey',
        'GN' => 'Guinea',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HT' => 'Haiti',
        'HM' => 'Heard Island & Mcdonald Islands',
        'VA' => 'Holy See (Vatican City State)',
        'HN' => 'Honduras',
        'HK' => 'Hong Kong',
        'HU' => 'Hungary',
        'IS' => 'Iceland',
        'IN' => 'India',
        'ID' => 'Indonesia',
        'IR' => 'Iran, Islamic Republic Of',
        'IQ' => 'Iraq',
        'IE' => 'Ireland',
        'IM' => 'Isle Of Man',
        'IL' => 'Israel',
        'IT' => 'Italy',
        'JM' => 'Jamaica',
        'JP' => 'Japan',
        'JE' => 'Jersey',
        'JO' => 'Jordan',
        'KZ' => 'Kazakhstan',
        'KE' => 'Kenya',
        'KI' => 'Kiribati',
        'KR' => 'Korea',
        'KW' => 'Kuwait',
        'KG' => 'Kyrgyzstan',
        'LA' => 'Lao People\'s Democratic Republic',
        'LV' => 'Latvia',
        'LB' => 'Lebanon',
        'LS' => 'Lesotho',
        'LR' => 'Liberia',
        'LY' => 'Libyan Arab Jamahiriya',
        'LI' => 'Liechtenstein',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'MO' => 'Macao',
        'MK' => 'Macedonia',
        'MG' => 'Madagascar',
        'MW' => 'Malawi',
        'MY' => 'Malaysia',
        'MV' => 'Maldives',
        'ML' => 'Mali',
        'MT' => 'Malta',
        'MH' => 'Marshall Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MU' => 'Mauritius',
        'YT' => 'Mayotte',
        'MX' => 'Mexico',
        'FM' => 'Micronesia, Federated States Of',
        'MD' => 'Moldova',
        'MC' => 'Monaco',
        'MN' => 'Mongolia',
        'ME' => 'Montenegro',
        'MS' => 'Montserrat',
        'MA' => 'Morocco',
        'MZ' => 'Mozambique',
        'MM' => 'Myanmar',
        'NA' => 'Namibia',
        'NR' => 'Nauru',
        'NP' => 'Nepal',
        'NL' => 'Netherlands',
        'AN' => 'Netherlands Antilles',
        'NC' => 'New Caledonia',
        'NZ' => 'New Zealand',
        'NI' => 'Nicaragua',
        'NE' => 'Niger',
        'NG' => 'Nigeria',
        'NU' => 'Niue',
        'NF' => 'Norfolk Island',
        'MP' => 'Northern Mariana Islands',
        'NO' => 'Norway',
        'OM' => 'Oman',
        'PK' => 'Pakistan',
        'PW' => 'Palau',
        'PS' => 'Palestinian Territory, Occupied',
        'PA' => 'Panama',
        'PG' => 'Papua New Guinea',
        'PY' => 'Paraguay',
        'PE' => 'Peru',
        'PH' => 'Philippines',
        'PN' => 'Pitcairn',
        'PL' => 'Poland',
        'PT' => 'Portugal',
        'PR' => 'Puerto Rico',
        'QA' => 'Qatar',
        'RE' => 'Reunion',
        'RO' => 'Romania',
        'RU' => 'Russian Federation',
        'RW' => 'Rwanda',
        'BL' => 'Saint Barthelemy',
        'SH' => 'Saint Helena',
        'KN' => 'Saint Kitts And Nevis',
        'LC' => 'Saint Lucia',
        'MF' => 'Saint Martin',
        'PM' => 'Saint Pierre And Miquelon',
        'VC' => 'Saint Vincent And Grenadines',
        'WS' => 'Samoa',
        'SM' => 'San Marino',
        'ST' => 'Sao Tome And Principe',
        'SA' => 'Saudi Arabia',
        'SN' => 'Senegal',
        'RS' => 'Serbia',
        'SC' => 'Seychelles',
        'SL' => 'Sierra Leone',
        'SG' => 'Singapore',
        'SK' => 'Slovakia',
        'SI' => 'Slovenia',
        'SB' => 'Solomon Islands',
        'SO' => 'Somalia',
        'ZA' => 'South Africa',
        'GS' => 'South Georgia And Sandwich Isl.',
        'ES' => 'Spain',
        'LK' => 'Sri Lanka',
        'SD' => 'Sudan',
        'SR' => 'Suriname',
        'SJ' => 'Svalbard And Jan Mayen',
        'SZ' => 'Swaziland',
        'SE' => 'Sweden',
        'CH' => 'Switzerland',
        'SY' => 'Syrian Arab Republic',
        'TW' => 'Taiwan',
        'TJ' => 'Tajikistan',
        'TZ' => 'Tanzania',
        'TH' => 'Thailand',
        'TL' => 'Timor-Leste',
        'TG' => 'Togo',
        'TK' => 'Tokelau',
        'TO' => 'Tonga',
        'TT' => 'Trinidad And Tobago',
        'TN' => 'Tunisia',
        'TR' => 'Turkey',
        'TM' => 'Turkmenistan',
        'TC' => 'Turks And Caicos Islands',
        'TV' => 'Tuvalu',
        'UG' => 'Uganda',
        'UA' => 'Ukraine',
        'AE' => 'United Arab Emirates',
        'GB' => 'United Kingdom',
        'US' => 'United States',
        'UM' => 'United States Outlying Islands',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VU' => 'Vanuatu',
        'VE' => 'Venezuela',
        'VN' => 'Viet Nam',
        'VG' => 'Virgin Islands, British',
        'VI' => 'Virgin Islands, U.S.',
        'WF' => 'Wallis And Futuna',
        'EH' => 'Western Sahara',
        'YE' => 'Yemen',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe',
        );

        return $countries;
    }
}

function ps_get_country_abbreviations_array()
{
    $arr 	= countries_array();
    $r 		= array();

    foreach ($arr as $key => $val) {
        $r[]	= $key;
    }

    return $r;
}

function ps_get_states_abbreviations_array()
{
    $arr 	= state_array();
    $r 		= array();

    foreach ($arr as $key => $val) {
        $r[]	= $key;
    }

    return $r;
}

function ps_get_state_abbrev_from_name($name)
{
    $state_list 	= state_array();
    foreach ($state_list as $key => $val) {
        if (hash_challenge($val) == hash_challenge($name)) {
            return $key;
        }
    }

    return $name;
}
