<?php
$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

define("HOME_PATH", dirname($_SERVER["SCRIPT_NAME"]));

$controller = "home";

require("controllers/" . $controller . ".php");