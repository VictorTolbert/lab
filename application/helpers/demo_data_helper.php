<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}


function transform_affiliate_data_for_api($affiliate, $id_affiliate)
{
    return [
        'id' => $id_affiliate,
        'school_id'   => $affiliate['school_id'],
        'owner_user_id'   => $affiliate['owner_id'],
        'user_group_id'   => $affiliate['team_id'],
        'salesforce_id'   => $affiliate['id_salesforce'],
        'created_at'   => $affiliate['date_add'],
        'updated_at'   => $affiliate['date_mod'],
  ];
}
