<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Podcasts extends CI_Controller
{
    // public $data = array();

    // public function __construct()
    // {
    // }

    public function index($slug = null)
    {
        // $podcasts = Podcast::published()->paginate(24);

        // return view('podcasts.index', [
        //     'podcasts' => $podcasts,
        // ]);
        // d($this->input->get('status_ids', true));
        // parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);

        $data['period'] = $this->input->get('period', true);
        $data['status_ids'] = $this->input->get('status_ids', true);
        $data['start_date'] = $this->input->get('start_date', true);
        $data['end_date'] = $this->input->get('end_date', true);
        $data['invite_emails'] = $this->input->get('invite_emails', true);

        $data['podcasts'] = [];


        $this->load->view('layouts/header');
        $this->load->view('layouts/developer_toolbar');
        $this->load->view('layouts/nav');
        $this->load->view('podcasts/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        // return view('podcasts.create');
    }

    public function store()
    {
        // request()->validate([
        //     'title' => ['required', 'max:150'],
        //     'description' => ['max:500'],
        //     'website' => ['url'],
        // ]);

        // $podcast = Auth::user()->podcasts()->create(request([
        //     'title',
        //     'description',
        //     'website',
        // ]));

        // return redirect("/podcasts/{$podcast->id}");
    }

    public function show($id)
    {
        // $podcast = Podcast::findOrFail($id);

        // abort_unless($podcast->isVisibleTo(Auth::user()), 404);

        // return view('podcasts.show', [
        //     'podcast' => $podcast,
        //     'episodes' => $podcast->recentEpisodes(5),
        // ]);

        $data['id'] = $id;
        $data['podcast']['id'] = $id;
        $data['podcast']['image_url'] = 'assets/img/podcasts/art-of-product.jpeg';

        $this->load->view('layouts/header');
        $this->load->view('layouts/developer_toolbar');
        $this->load->view('layouts/nav');
        $this->load->view('podcasts/show', $data);
        $this->load->view('layouts/footer');
    }

    public function edit($id)
    {
        // $podcast = Auth::user()->podcasts()->findOrFail($id);

        // return view('podcasts.edit', [
        //     'podcast' => $podcast,
        // ]);
    }

    public function update($id)
    {
        // $podcast = Auth::user()->podcasts()->findOrFail($id);

        // request()->validate([
        //     'title' => ['required', 'max:150'],
        //     'description' => ['max:500'],
        //     'website' => ['url'],
        // ]);

        // $podcast->update(request([
        //     'title',
        //     'description',
        //     'website',
        // ]));

        // return redirect("/podcasts/{$podcast->id}");
    }

    public function destroy($id)
    {
        // $podcast = Auth::user()->podcasts()->findOrFail($id);

        // $podcast->delete();

        // return redirect("/podcasts");
    }
}
