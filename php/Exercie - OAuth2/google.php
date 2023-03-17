<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'vendor/autoload.php';

session_start();
$client = new Google\Client();
$client->setAuthConfigFile('secrets.json');
$client->setRedirectUri('http://localhost:8000/connect.php');
$client->setAccessType('offline'); //optional
$client->setScopes(['profile']); //or email
$auth_url = $client->createAuthUrl();
header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
exit();