<?php
$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

define("HOME_PATH", dirname($_SERVER["SCRIPT_NAME"]));

$controller = "home";

$controllers = ["home", "about", "portfolio", "contact"];

if(isset($url_parts[1]) && in_array($url_parts[1], $controllers)) {
    $controller = $url_parts[1];
}

require("controllers/" . $controller . ".php");