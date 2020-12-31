<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * CodeIgniter URL Helpers
 *
 * @package     CodeIgniter
 * @subpackage  Helpers
 * @category    Helpers
 * @author      Epic Labs
 * @requires    Form helper
 */

 /*********************************************************************************************************************
     Spit out all the beautiful form markup needed for horizontal forms in Bootstrap
     http://twitter.github.com/bootstrap/base-css.html#forms
 *********************************************************************************************************************/

if (! function_exists('bootstrap_field')) {
    /**
     * Adds the markup needed to create those good looking Bootstrap forms
     */
    function bootstrap_field($field_type, $field_name, $label, $error = null)
    {
        $CI =& get_instance();

        $return_value = '<div class="form-group' . ($error ? ' error' : '') . '">';
        $return_value .= form_label($label, $field_name, [ 'class' => 'control-label' ]);
        $return_value .= '<div class="controls">';
        $return_value .= '<input type="' . $field_type . '" name="' . $field_name . '" value="' . $CI->input->post($field_name) . '" />';
        $return_value .= $error;
        $return_value .= '</div></div><!-- /control-group -->';

        return $return_value;
    }
}

  /*********************************************************************************************************************
    Set up HTML tables
  *********************************************************************************************************************/
if (! function_exists('set_table')) {
    function set_table($data, $header = null, $filtered = false)
    {
        $CI =& get_instance();

        $CI->config->load('table_format');
        $CI->load->library('table');

        if ($filtered) {
            $template               = $CI->config->item('table_format');
            $template['table_open'] = '<table class="table table-striped table-bordered tablesorter">';
            $CI->table->set_template($template);
        } else {
            $CI->table->set_template($CI->config->item('table_format'));
        }

        if ($header) {
            $CI->table->set_heading($header);
        }

        return $CI->table->generate($data);
    }
}


/*********************************************************************************************************************
     Spit out all the beautiful form markup needed for horizontal forms in Bootstrap with field values (good for 'edit')
     http://twitter.github.com/bootstrap/base-css.html#forms
 *********************************************************************************************************************/

if (! function_exists('bootstrap_field_val')) {
    /**
     * Adds the markup needed to create those good looking Bootstrap forms
     */
    function bootstrap_field_val(
        $field_type,
        $field_name,
        $label = null,
        $value = null,
        $error = null,
        $class = 'form-control',
        $help_text = null,
        $add_on = null,
        $extra_attr = null,
        $custom_html = null
    ) {
        $CI            =& get_instance();
        $return_value  = '<div class="form-group' . ($error ? ' error' : '') . '">';
        $return_value .= form_label($label, $field_name);
        if ($add_on) {
            $return_value .= '<div class="input-group"><input type="' . $field_type . '" name="' . $field_name . '" value="' . $value . '" class="form-control ' . $class . '" ' . $extra_attr . '/>' . '<span class="input-group-addon">' . $add_on . '</span></div>';
        } else {
            $return_value .= '<input type="' . $field_type . '" name="' . $field_name . '" value="' . $value . '" class="form-control ' . $class . '" ' . $extra_attr . '/>' . $custom_html;
        }

        if ($help_text) {
            $return_value .= '<span class="help-inline">' . $help_text . '</span>';
        }

        $return_value .= $error;
        $return_value .= '</div>';
        return $return_value;
    }


    function bootstrap_horiz_field_val($field_type, $field_name, $label = null, $value = null, $error = null, $class = null, $help_text = null, $add_on = null, $extra_attr = null, $custom_html = null)
    {
        $CI            =& get_instance();
        $return_value  = '<div class="form-group' . ($error ? ' error' : '') . '">';
        $return_value .= form_label($label, $field_name, [ 'class' => 'col-md-3 control-label' ]);
        $return_value .= '<div class="col-md-9">';
        if ($add_on) {
            $return_value .= '<div class="input-group"><input type="' . $field_type . '" name="' . $field_name . '" value="' . $value . '" class="form-control ' . $class . '" ' . $extra_attr . '/>' . '<span class="input-group-addon">' . $add_on . '</span></div>';
        } else {
            $return_value .= '<input type="' . $field_type . '" name="' . $field_name . '" value="' . $value . '" class="form-control ' . $class . '" ' . $extra_attr . '/>' . $custom_html;
        }

        if ($help_text) {
            $return_value .= '<span class="help-inline">' . $help_text . '</span>';
        }

        $return_value .= $error;
        $return_value .= '</div></div>';
        return $return_value;
    }
}

/*********************************************************************************************************************

     Spit out all the beautiful form markup needed for horizontal forms in Bootstrap with field values (good for 'edit')
     for textarea types only
     http://twitter.github.com/bootstrap/base-css.html#forms

 *********************************************************************************************************************/

if (! function_exists('bootstrap_textarea_val')) {
    /**
     * Adds the markup needed to create those good looking Bootstrap forms
     */


    function bootstrap_textarea_val($field_name, $label, $value = null, $error = null)
    {
        $CI =& get_instance();

        $return_value    = '<div class="form-group' . ($error ? ' error' : '') . '">';
        $return_value   .= form_label($label, $field_name, [ 'class' => 'control-label' ]);
        $return_value .= '<div class="controls">';
        $return_value   .= '<textarea name="' . $field_name . '" rows="8" class="form-control">' . $value . '</textarea>';
        $return_value   .= $error;
        $return_value   .= '</div></div><!-- /control-group -->';

        return $return_value;
    }
}


/*********************************************************************************************************************

     Spit out all the beautiful form markup needed for horizontal forms in Bootstrap. Minimalized.

 *********************************************************************************************************************/

if (! function_exists('bootstrapped_input')) {
    /**
     * Adds the markup needed to create those good looking Bootstrap forms
     */


    function bootstrapped_input($data, $desc = null)
    {
        $CI =& get_instance();
        // icon-warning-sign , btn-danger
        $return_value    = '<div class="form-group">';
        $return_value .= '<div class="controls">';
        $return_value   .= $data;
        if ($desc) {
            $return_value .= '<button class="btn btn-primary btn-sm multi-form-alert" rel="tooltip" data-placement="left" data-original-title="' . $desc . '"><i class="glyphicon glyphicon-question-sign"></i></button>';
        } else {
            $return_value .= '<button class="btn btn-danger btn-sm hide multi-form-alert" rel="tooltip" data-placement="left" data-original-title=""><i class="glyphicon glyphicon-warning-sign"></i></button>';
        }

        $return_value .= '</div></div><!-- /control-group -->';

        return $return_value;
    }
}

if (! function_exists('bootstrapped_mobile_input')) {
    function bootstrapped_mobile_input($element, $name = '', $label = '', $required = false)
    {
        if (preg_match('/select/', $element)) {
            $markup = "<div class='form-group select'>";
        } else {
            $markup = "<div class='form-group'>";
        }

        if ($label) {
            if ($required) {
                $markup .= "<label for='$name'>$label<span class='required'>*</span></label>";
            } else {
                $markup .= "<label for='$name'>$label</label>";
            }
        }

        $markup .= $element;
        $markup .= "</div>";

        return $markup;
    }
}

 /*********************************************************************************************************************
     Build select box populated by application/config/form_list.php
 *********************************************************************************************************************/
if (! function_exists('populated_dropdown')) {
    function populated_dropdown($name="country", $attributes=null, $top_values=[], $selection=null, $show_all=true)
    {
        // You may want to pull this from an array within the helper
        $CI =& get_instance();
        $CI->config->load('form_list');
        $list = $CI->config->item($name . '_list');

        if (empty($top_values)) {
            $top_values = $CI->config->item('top_values');
            if (empty($top_values)) {
                $top_values = [];
            }
        }

        if (empty($attributes)) {
            $html = "<select class='form-control' name='{$name}'>";
        } else {
            $select_attributes = '';
            foreach ($attributes as $key => $val) {
                $select_attributes .= "{$key}='{$val}' ";
            }

            $html = "<select class='form-control' {$select_attributes}>";
        }

        $selected = null;
        if (in_array($selection, $top_values)) {
            $top_selection = $selection;
            $all_selection = null;
        } else {
            $top_selection = null;
            $all_selection = $selection;
        }

        if (! empty($top_values)) {
            foreach ($top_values as $value) {
                if (array_key_exists($value, $list)) {
                    if ($value === $top_selection) {
                        $selected = "SELECTED";
                    }

                    $html    .= "<option value='{$value}' {$selected}>{$list[$value]}</option>";
                    $selected = null;
                }
            }

            $html .= "<option>----------</option>";
        }

        if ($show_all) {
            foreach ($list as $key => $value) {
                if ($key === $all_selection) {
                    $selected = "SELECTED";
                }

                $html    .= "<option value='{$key}' {$selected}>{$value}</option>";
                $selected = null;
            }
        }

        $html .= "</select>";
        return $html;
    }
}

if (! function_exists('year_dropdown')) {
    function year_dropdown($attributes, $selected='', $year_start = '', $number_of_years = 20)
    {
        $year_start = empty($year_start) ? date('Y') + 3 : $year_start;
        $select_attributes = '';
        foreach ($attributes as $key => $val) {
            $select_attributes .= "{$key}='{$val}' ";
        }

        $html  = "<select {$select_attributes} class='form-control'>";
        $year  = intval($year_start);
        $html .= "<option " . (empty($selected) ? 'selected' : '') . " disabled>Year</option>";
        for ($i = 0; $i < $number_of_years; $i++) {
            $html .= "<option " . ($selected == $year ? 'selected ' : '') . "value='{$year}'>{$year}</option>";
            $year--;
        }

        $html .= "</select>";

        return $html;
    }
}

if (! function_exists('month_dropdown')) {
    function month_dropdown($attributes, $selected='', $numeric_month = false)
    {
        $months = [
            1 => 'Jan',
            2 => 'Feb',
            3 => 'Mar',
            4 => 'Apr',
            5 => 'May',
            6 => 'Jun',
            7 => 'Jul',
            8 => 'Aug',
            9 => 'Sep',
            10 => 'Oct',
            11 => 'Nov',
            12 => 'Dec',
        ];
        $select_attributes = '';

        foreach ($attributes as $key => $val) {
            $select_attributes .= "{$key}='{$val}' ";
        }

        $html  = "<select {$select_attributes} class='form-control'>";
        $html .= "<option " . (empty($selected) ? 'selected' : '') . " disabled>Month</option>";
        if (empty($numeric_month)) {
            foreach ($months as $i => $month) {
                $i     = sprintf("%02s", $i);
                $html .= "<option " . ($selected == $i ? 'selected ' : '') . "value='{$i}'>{$month}</option>";
            }
        } else {
            $month = 1;
            for ($i = 0; $i < 12; $i++) {
                $month = sprintf("%02s", $month);
                $html .= "<option " . ($selected == $month ? 'selected ' : '') . "value='{$month}'>{$month}</option>";
                $month++;
            }
        }

        $html .= "</select>";

        return $html;
    }
}

if (! function_exists('day_dropdown')) {
    function day_dropdown($attributes, $selected='')
    {
        $select_attributes = '';
        foreach ($attributes as $key => $val) {
            $select_attributes .= "{$key}='{$val}' ";
        }

        $html  = "<select {$select_attributes} class='form-control'>";
        $day   = 1;
        $html .= "<option " . (empty($selected) ? 'selected' : '') . " disabled>Day</option>";
        for ($i = 0; $i < 31; $i++) {
            $day   = sprintf("%02s", $day);
            $html .= "<option " . ($selected == $day ? 'selected ' : '') . "value='{$day}'>{$day}</option>";
            $day++;
        }

        $html .= "</select>";

        return $html;
    }
}
