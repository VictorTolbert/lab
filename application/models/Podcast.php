<?php

class Podcast extends CI_Model
{
    protected $guarded = [];
    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function __construct()
    {
        $this->load->database();
    }

    public function scope_published($query)
    {
        // return $query->whereNotNull('published_at');
    }

    public function users()
    {
        // return $this->belongsToMany(User::class, 'subscriptions')->withTimestamps();
    }

    public function subscriptions()
    {
        // return $this->hasMany(Subscription::class);
    }

    public function episodes()
    {
        // return $this->hasMany(Episode::class);
    }

    public function publish()
    {
        // $this->update(['published_at' => $this->freshTimestamp()]);
    }

    public function unpublish()
    {
        // $this->update(['published_at' => null]);
    }

    public function recent_episodes($count = 5)
    {
        // return $this->episodes()->recent()->take($count)->get();
    }

    public function image_url()
    {
        // return Storage::disk('public')->url($this->cover_path);
    }

    public function website_host()
    {
        // return parse_url($this->website, PHP_URL_HOST);
    }

    public function is_visible_to($user)
    {
        // return $this->isPublished() || $this->isOwnedBy($user);
    }

    public function is_published()
    {
        // return $this->published_at !== null;
    }

    public function is_owned_by($user)
    {
        // return $this->user_id == $user->getKey();
    }

    public function toArray()
    {
        // return array_merge(parent::toArray(), [
        //     'cover_url' => $this->image_url(),
        //     'published' => $this->is_published(),
        //     'subscribed' => auth()->user()->subscribes_to($this),
        //     'links' => [
        //         'publish' => url("/podcasts/{$this->id}/publish"),
        //         'unpublish' => url("/podcasts/{$this->id}/unpublish"),
        //         'subscribe' => url("/podcasts/{$this->id}/subscribe"),
        //         'unsubscribe' => url("/podcasts/{$this->id}/unsubscribe"),
        //         'update_cover_image' => url("/podcasts/{$this->id}/cover-image"),
        //     ],
        // ]);
    }

    public function get_podcasts($slug = false, $limit = false, $offset = false)
    {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($slug === false) {
            $this->db->order_by('podcasts.id', 'DESC');
            $this->db->join('categories', 'categories.id = podcasts.category_id');

            $query = $this->db->get('podcasts');

            return $query->result_array();
        }

        $query = $this->db->get_where('podcasts', array('slug' => $slug));

        return $query->row_array();
    }

    public function create_podcast($podcast_image)
    {
        $slug = url_title($this->input->podcast('title'));

        $data = array(
            'title' => $this->input->podcast('title'),
            'slug' => $slug,
            'body' => $this->input->podcast('body'),
            'category_id' => $this->input->podcast('category_id'),
            'user_id' => $this->session->userdata('user_id'),
            'podcast_image' => $podcast_image,
        );

        return $this->db->insert('podcasts', $data);
    }

    public function delete_podcast($id)
    {
        $image_file_name = $this->db->select('podcast_image')->get_where('podcasts', array('id' => $id))->row()->podcast_image;
        $cwd = getcwd(); // save the current working directory
        $image_file_path = $cwd . "\\assets\\images\\podcasts\\";
        chdir($image_file_path);
        unlink($image_file_name);
        chdir($cwd); // Restore the previous working directory
        $this->db->where('id', $id);
        $this->db->delete('podcasts');

        return true;
    }

    public function update_podcast()
    {
        $slug = url_title($this->input->podcast('title'), '-', true);

        $data = array(
            'title' => $this->input->podcast('title'),
            'slug' => $slug,
            'body' => $this->input->podcast('body'),
            'category_id' => $this->input->podcast('category_id'),
        );

        $this->db->where('id', $this->input->podcast('id'));

        return $this->db->update('podcasts', $data);
    }


    public function get_categories()
    {
        $this->db->order_by('name');

        $query = $this->db->get('categories');

        return $query->result_array();
    }

    public function get_podcasts_by_category($category_id)
    {
        $this->db->order_by('podcasts.id', 'DESC');
        $this->db->join('categories', 'categories.id = podcasts.category_id');

        $query = $this->db->get_where('podcasts', array('category_id' => $category_id));

        return $query->result_array();
    }
}
