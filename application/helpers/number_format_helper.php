<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Formats a Value to Currency
 *
 * @param float $currency_value
 * @param int $decimal_points
 * @return float
 */
if (! function_exists('format_currency')) {
    function format_currency($currency_value, $decimal_points = 2)
    {
        if (empty($currency_value) or is_int($currency_value)) {
            return format_integer($currency_value);
        }

        return number_format(floatval($currency_value), $decimal_points, '.', ',');
    }
}

/**
 * Formats a value to an integer
 *
 * @param integer $integer_value
 * @return integer
 */
if (! function_exists('format_integer')) {
    function format_integer($integer_value)
    {
        return number_format($integer_value);
    }
}

/*
 * Format currency into integers
 * @param String $dollar_value
 * @return int
 */
if (! function_exists('currency_to_int')) {
    function currency_to_int($dollar_value)
    {
        return str_replace(['$', ','], '', $dollar_value);
    }
}
