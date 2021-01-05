<?php

require '/path/to/aws-autoloader.php';

use Aws\Exception\AwsException;
use Aws\S3\S3Client;


//Create a S3Client
$s3 = new S3Client([
    'version' => 'latest',
    'region' => 'us-east-1',
]);



// The sample code below demonstrates how Resource APIs work
$aws = new Aws($config);

// Get references to resource objects
$bucket = $aws->s3->bucket('my-bucket');
$object = $bucket->object('image/bird.jpg');

// Access resource attributes
echo $object['LastModified'];

// Call resource methods to take action
$object->delete();
$bucket->delete();
