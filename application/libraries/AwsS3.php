<?php
defined('BASEPATH') or exit('No direct script access allowed');

include("./vendor/autoload.php");

use Aws\S3\S3Client;

class AwsS3
{
	protected $client;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->config('aws', true);

		$this->client = S3Client::factory([
			'key' => $this->ci->config->item('access_key', 'aws'),
			'secret' => $this->ci->config->item('access_secret', 'aws'),
			'region' => 'us-east-1',
		]);

		$this->bucket = $this->ci->config->item('bucket', 'aws');
	}

	public function add_bucket($bucketName)
	{
		$result = $this->client->createBucket(array(
			'Bucket'=>$bucketName,
			'LocationConstraint'=> 'us-east-1',
		));

		return $result;
	}

	public function send_file($bucketName, $filename)
	{
		$result = $this->client->putObject(array(
			'Bucket' => $bucketName,
			'Key' => $filename['name'],
			'SourceFile' => $filename['tmp_name'],
			'ContentType' => 'image/png',
			'StorageClass' => 'STANDARD',
			'ACL' => 'public-read',
		));

		return $result['ObjectURL'] . "\n";
	}
}
