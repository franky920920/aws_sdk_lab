<?php
require_once 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

function gets3(
	string $key,
	string $bucket,
	string $expires = '+30 minutes',
	string $region = 'us-east-1',
	$version = 'latest'): string //Pre-sign object and get uri
{
	/**
	 * @var $AWS_Credentials \Aws\Credentials\Credentials
	 */
	require_once 'aws_key.php';
	$s3 = new S3Client(array(
		'version' => $version,
		'region' => $region,
		'credentials' => $AWS_Credentials
	));

	$cmd = $s3->getCommand('GetObject', array(
		'Bucket' => $bucket,
		'Key' => $key
	));

	$request = $s3->createPresignedRequest($cmd, $expires);
	return (string)$request->getUri();
}

