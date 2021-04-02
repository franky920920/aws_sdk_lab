# Franky's lab for AWS SDK

Add `aws_key.php` under the root directory manually after clone.
Replace Access key!
```php
<?php

require_once 'vendor/autoload.php';

use Aws\Credentials\Credentials;
use Aws\Exception\AwsException;

$AWS_Credentials = new Aws\Credentials\Credentials(
	'Access Key Id', //REPLACE THIS!!!
	'Secret access key' //REPLACE THIS!!!
);
```