<?php

class Event_model extends MY_Model
{
    public $before_create = array( 'serialize(seat_types)' );
    public $before_update = array( 'serialize(seat_types)' );
    public $after_get = array( 'unserialize(seat_types)' );
}
