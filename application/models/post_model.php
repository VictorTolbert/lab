<?php defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends MY_Model
{
	// public $_db = 'default';
	// public $_table = 'posts';
	// public $belongs_to = array('category');

	public function __construct()
	{
		$this->has_one['category'] = array('local_key'=>'category_id', 'foreign_key'=> 'id', 'foreign_model'=>'Category_model');

		// $this->load->database();
		parent::__construct();
	}

	public function insert_dummy()
	{
		$insert_data = array(
			array(
				'user_id' => '1',
				'title' => 'First title',
				'content' => 'This is content for first title',
			),
			array(
				'user_id' => '3',
				'title' => 'Another title',
				'content' => 'This is content for another title',
			),
			array(
				'user_id' => '3',
				'title' => 'One more title',
				'content' => 'This is content for one more title',
			),
			array(
				'user_id' => '5',
				'title' => 'This one has a title too',
				'content' => 'This is content for this title too',
			),
			array(
				'user_id' => '5',
				'title' => 'How about this title',
				'content' => 'This is content for how about this title',
			),
		);
		$this->db->insert_batch($this->table, $insert_data);
	}

	public function get_posts($slug = false, $limit = false, $offset = false)
	{
		if ($limit) {
			$this->db->limit($limit, $offset);
		}

		if ($slug === false) {
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'categories.id = posts.category_id');

			$query = $this->db->get('posts');

			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('slug' => $slug));

		return $query->row_array();
	}

	public function create_post($post_image)
	{
		$slug = url_title($this->input->post('title'));

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category_id'),
			'user_id' => $this->session->userdata('user_id'),
			'post_image' => $post_image,
		);

		return $this->db->insert('posts', $data);
	}

	public function delete_post($id)
	{
		$image_file_name = $this->db->select('post_image')->get_where('posts', array('id' => $id))->row()->post_image;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd . "\\assets\\images\\posts\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('id', $id);
		$this->db->delete('posts');

		return true;
	}

	public function update_post()
	{
		$slug = url_title($this->input->post('title'), '-', true);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'body' => $this->input->post('body'),
			'category_id' => $this->input->post('category_id'),
		);

		$this->db->where('id', $this->input->post('id'));

		return $this->db->update('posts', $data);
	}


	public function get_categories()
	{
		$this->db->order_by('name');

		$query = $this->db->get('categories');

		return $query->result_array();
	}

	public function get_posts_by_category($category_id)
	{
		$this->db->order_by('posts.id', 'DESC');
		$this->db->join('categories', 'categories.id = posts.category_id');

		$query = $this->db->get_where('posts', array('category_id' => $category_id));

		return $query->result_array();
	}
}
