<?php
require_once 'vendor/autoload.php';

session_start();


// init configuration
$clientID = '1089552638229-gi95vlabqkb7hes4p87jsqjlotdcmsu6.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/login_google/welcome.php';


// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


// connect to database 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "php-login-google";


$conn = mysqli_connect($hostname,$username,$password,$database);

?>