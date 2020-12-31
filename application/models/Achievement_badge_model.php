<?php

class Achievement_badge_model extends CI_Model
{
	public string $title;
	public string $description;
	public string $points;

	/**
	 * Achievement_badge_model constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->title = $title;
	}


	public function award_to($user)
	{
	}
}
