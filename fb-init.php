<?php

// start session
session_start();

// inclide autoload file from vendor folder
require './vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '2589859281073849',
    'app_secret' => '3b0cb265308ad33ff9e86fcd7e211c75',
    'default_graph_version' => 'v2.7'
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("http://localhost/fatimah/latihan/fb-login/");

try {
    
    $accessToken = $helper->getAccessToken();
    if(isset($accessToken)){
        $_SESSION['access_token'] = (string)$accessToken; //convert to string

        // if session is set we can redirect to the user to any page
        header("Location:index.php");
    }

} catch (\Throwable $th) {
    //throw $th;
}

