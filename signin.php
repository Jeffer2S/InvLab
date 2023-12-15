<?php

session_start();
require "vendor/autoload.php";
use myPHPnotes\Microsoft\Auth;
$tenant = "common";
$client_id = "3c93566c-a2ab-48b5-815f-a4b95ccf56ed";
$client_secret = "xeo8Q~nyr6hrF4sWL.2SU4hiFdRuuUvJh.QFHdkK";
$callback = "http://localhost:80/callback.php";
$scopes = ["User.Read"];
$microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);
header("location: " . $microsoft->getAuthUrl());
?>