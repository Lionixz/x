<?php
require_once __DIR__ . '/../vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('799045528732-v4mvbk087598ovh1tdlad7dpeilk9sbi.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/x/public/index.php');
$client->addScope('email');
$client->addScope('profile');

return $client;
