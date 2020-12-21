<?php


class Episode extends CI_Model
{
    protected $guarded = [];
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function podcast()
    {
        // return $this->belongsTo(Podcast::class);
    }

    public function scope_recent($query)
    {
        // return $query->orderBy('published_at', 'desc');
    }

    public function is_visible_to($user)
    {
        // return ($this->podcast->is_published() && $this->is_published())
        //     || $this->podcast->is_visible_to($user);
    }

    public function is_editable_by($user)
    {
        // return $this->podcast->is_owned_by($user);
    }

    public function is_published()
    {
        // return $this->published_at !== null;
    }

    public function is_free()
    {
        // return $this->price === null;
    }

    public function duration_for_humans()
    {
        // $hours = (int) floor($this->duration / 60 / 60);
        // $minutes = (int) round(($this->duration / 60) - ($hours * 60));

        // return collect([
        //     [$hours, 'hr'],
        //     [$minutes, 'min'],
        // ])->reject(function ($value) {
        //     return $value[0] === 0;
        // })->flatten(1)->implode(' ');
    }
}
