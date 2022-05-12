<?php
session_start();

include "../app/init.php";
$rootPath = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] ;
$rootPath = str_replace("index.php", "", $rootPath);
define("ROOT", $rootPath);
define("ASSETS", $rootPath. "assets/");


//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

$app = new App();