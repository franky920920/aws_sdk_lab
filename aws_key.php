<?php

require_once 'vendor/autoload.php';

use Aws\Credentials\Credentials;
use Aws\Exception\AwsException;

$AWS_Credentials = new Aws\Credentials\Credentials('access_key', 'secret');
