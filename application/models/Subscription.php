<?php

class Subscription extends CI_Model
{
    protected $guarded = [];

    public function user()
    {
        // return $this->belongsTo(User::class);
    }

    public function podcast()
    {
        // return $this->belongsTo(Podcast::class);
    }

    public function set_user_attribute($user)
    {
        // $this->user_id = $user->getKey();
        // $this->setRelation('user', $user);
    }

    public function set_podcast_attribute($podcast)
    {
        // $this->podcast_id = $podcast->getKey();
        // $this->setRelation('podcast', $podcast);
    }
}
