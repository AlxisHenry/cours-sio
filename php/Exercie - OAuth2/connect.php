<?php
// enable errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'config.php';
require 'vendor/autoload.php';

session_start();
// use GuzzleHttp\Client;

// $client = new Client([
// 	'timeout' => 2.0,
// 	'vertify' => __DIR__ . '/cacert.pem'
// ]);

// try {
// 	$response = $client->request('GET', 'https://accounts.google.com/.well-known/openid-configuration');
// 	$discover = json_decode((string) $response->getBody());
// 	$token_endpoint = $discover->token_endpoint;
// 	$userinfo_endpoint = $discover->userinfo_endpoint;
// 	$response = $client->request('POST', $token_endpoint, [
// 		'form_params' => [
// 			'code' => $_GET["code"],
// 			'client_id' => GOOGLE_ID,
// 			'client_secret' => GOOGLE_SECRET,
// 			'redirect_uri' => 'http://localhost:8000/connect.php',
// 			'grant_type' => 'authorization_code'
// 		]
// 	]);

// 	$access_token = json_decode((string) $response->getBody())->access_token;
// 	$response = $client->request('GET', $userinfo_endpoint, [
// 		'headers' => [
// 			'Authorization' => 'Bearer ' . $access_token
// 		]
// 	]);
// 	// $response = json_decode($response->getBody());
// 	// if ($response->email_verified) {
// 	// 	session_start();
// 	// 	$_SESSION['user'] = $response->email;
// 	// 	header('Location: /secret.php');
// 	// 	exit();
// 	// }

// } catch (\GuzzleHttp\Exception\GuzzleException $e) {
// 	dd($e->getMessage());
// }

//assuming a successful authentication code is return
$authentication_code = $_GET["code"];
$client = new Google\Client();
//.... configure $client object code goes here
$client->authenticate($authentication_code);
$token_data = $client->getAccessToken();

//get user email address
$oauth2 = new Google\Service\Oauth2($client);
$google_account_email = $oauth2->userinfo->get()->email;
//$google_oauth->userinfo->get()->familyName;
//$google_oauth->userinfo->get()->givenName;
//$google_oauth->userinfo->get()->name;
//$google_oauth->userinfo->get()->gender;
//$google_oauth->userinfo->get()->picture; //profile picture


?>

<!-- <a href="/">ee</a> -->