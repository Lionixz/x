<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Google Client Configuration
$client = new Google_Client();
$client->setClientId('799045528732-v4mvbk087598ovh1tdlad7dpeilk9sbi.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/x/public/index.php');
$client->addScope('email');
$client->addScope('profile');

// PayMongo Configuration
define('PAYMONGO_SECRET', 'sk_test_Fuab1L4qbLKpsdURs7BsA8J3');
define('PAYMONGO_RETURN_URL', 'http://localhost/x/users/payment_success.php');
define('PAYMONGO_CANCEL_URL', 'http://localhost/x/users/index.php');

return $client;
