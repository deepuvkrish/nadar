<?php

//config.php
$db_name = "nadar";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);


//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('253575796726-aem821ga920cfkvkkivnedgmf575j3fh.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('lG2YKlNPi79Mwp0bekF2n70I');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/ecom/bege/my-account.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

?>
