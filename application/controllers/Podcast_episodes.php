<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Podcast_episodes extends MY_Controller
{
    public function index($id = null)
    {
        $data['id'] = $id;
        $data['podcast']['id'] = $id;
        $data['podcast']['image_url'] = 'assets/img/podcasts/art-of-product.jpeg';
        $data['podcast']['episodes'] = [];

        $this->load->view('layouts/header');
        $this->load->view('layouts/developer_toolbar');
        $this->load->view('layouts/nav');
        $this->load->view('podcast_episodes/index', $data);
        $this->load->view('layouts/footer');
    }


    public function create($id)
    {
        // $podcast = Auth::user()->podcasts()->findOrFail($id);

        // return view('podcast-episodes.create', ['podcast' => $podcast]);
    }

    public function store($id)
    {
        // $podcast = Auth::user()->podcasts()->findOrFail($id);

        // request()->validate([
        //     'title' => ['required', 'max:150'],
        //     'description' => ['max:500'],
        //     'download_url' => ['required', 'url'],
        // ]);

        // $episode = $podcast->episodes()->create(request([
        //     'title',
        //     'description',
        //     'download_url',
        // ]));

        // return redirect("/episodes/{$episode->id}");
    }
}
