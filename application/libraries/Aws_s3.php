<?php
if (! defined('BASEPATH')) {
	exit('No direct script access allowed');
}

require '../vendor/autoload.php';

use Aws\S3\S3Client;

class Aws_S3
{
	protected $client;

	public function __construct()
	{
		$this->ci =& get_instance();

		$this->ci->load->config('aws', true);
		$this->ci->load->library('encryption');

		if (ENVIRONMENT == 'development' || ENVIRONMENT == 'stage') {
			$this->client = S3Client::factory(
				[
					'key'	=> $this->ci->config->item('access_key', 'aws'),
					'secret' => $this->ci->config->item('access_secret', 'aws'),
				]
			);
		} else {
			$this->client = S3Client::factory([]);
		}

		$this->bucket = $this->ci->config->item('bucket', 'aws');
	}

	/*
	 * Upload a file to S3 with public read rights
	 *
	 * @param string $file_name  the actual name of uploaded file
	 * @param string $file_location  the location of uploaded file data
	 *
	 * returns a guzzle resource object
	 */
	public function upload($endpoint, $file_location)
	{
		$stream = $this->get_file_stream($file_location);
		return $this->client->upload($this->bucket, $endpoint, $stream, 'public-read');
	}

	public function upload_to_bucket($bucket, $endpoint, $file_location)
	{
		$stream = $this->get_file_stream($file_location);
		return $this->client->upload($bucket, $endpoint, $stream, 'public-read');
	}

	public function get_object($bucket, $endpoint)
	{
		return $this->client->getObject(
			[
				'Bucket' => $bucket,
				'Key' => $endpoint,
			]
		);
	}

	private function get_file_stream($file_location)
	{
		try {
			return fopen(realpath($file_location), 'r+');
		} catch (Exception $e) {
			log_message('error', "Error opening file for upload to S3 {$e}");
			throw new Exception($e);
		}
	}

	public function validate_path($path)
	{
		try {
			return $this->client->doesObjectExist($this->bucket, $path);
		} catch (Exception $e) {
			return false;
		}
	}

	/*
	 * delete an object from S3
	 *
	 * @param string $path  the path / object key of the object
	 * @return bool true if no exception is thrown | false if exception
	 */
	public function delete_object($path)
	{
		// delete S3 object
		try {
			$result = $this->client->deleteObject(
				[
					'Bucket' => $this->bucket,
					'Key' => $path,
				]
			);
		} catch (Exception $e) {
			log_message(
				'error',
				'Exception caught in aws_s3 delete_object = ' . $e->getMessage() . "\n Addtl Info: path to delete = " . $path
			);
			return false;
		}

		return true;
	}


	public function delete_image($path)
	{
		if ($this->is_image_path($path)) {
			$success = $this->delete_object($path);
		} else {
			$success = false;
		}

		return $success;
	}


	public function is_image_path($path)
	{
		// supported image formats
		$image_formats = ['jpg','jpeg','gif','png'];
		$path_parts = pathinfo($path);
		$extension = strtolower($path_parts['extension']);
		$format_index = array_search($extension, $image_formats);

		$is_image = $format_index === false ? false : true;

		return $is_image;
	}
}
