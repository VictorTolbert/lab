<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Podcasts extends MY_Controller
{
	public function __construct() {
		parent::__construct();

		$this->load->model('podcast_model');
	}


	public function index($offset = 0)
	{
		$data['podcasts'] = $this->podcast_model->as_array()->get_all();

		// d($data['podcasts']);

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
		//	 'title' => ['required', 'max:150'],
		//	 'description' => ['max:500'],
		//	 'website' => ['url'],
		// ]);

		// $podcast = Auth::user()->podcasts()->create(request([
		//	 'title',
		//	 'description',
		//	 'website',
		// ]));

		// return redirect("/podcasts/{$podcast->id}");
	}

	public function show($id)
	{
		// $podcast = Podcast::findOrFail($id);

		// abort_unless($podcast->isVisibleTo(Auth::user()), 404);

		// return view('podcasts.show', [
		//	 'podcast' => $podcast,
		//	 'episodes' => $podcast->recentEpisodes(5),
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
		//	 'podcast' => $podcast,
		// ]);
	}

	public function update($id)
	{
		// $podcast = Auth::user()->podcasts()->findOrFail($id);

		// request()->validate([
		//	 'title' => ['required', 'max:150'],
		//	 'description' => ['max:500'],
		//	 'website' => ['url'],
		// ]);

		// $podcast->update(request([
		//	 'title',
		//	 'description',
		//	 'website',
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
