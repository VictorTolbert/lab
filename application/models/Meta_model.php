<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Meta_Model extends MY_Model
{
    // Constants that don't have anywhere else to go
    // css files that used to use imprts
    const STYLES_CSS = 'styles.css';
    const MOBILE_CSS = 'mobile.css';

    public $_table = 'meta';

    /*********************************************************************************************************************
        Insert-update.
        Checks a name value pair to see whether it exists and inserts or updates it as needed
    *********************************************************************************************************************/
    public function upsert($nvp)
    {
        $exists = $this->get_by('name', $nvp['name']);

        if (empty($exists)) {
            $this->insert($nvp);
        } else {
            $this->update_by([ 'name' => $nvp['name'] ], [ 'value' => $nvp['value'] ]);
        }
    }

    /*********************************************************************************************************************
        Get a value
    *********************************************************************************************************************/
    public function get($attribute_name)
    {
        return $this->get_by('name', $attribute_name)->value;
    }
}
