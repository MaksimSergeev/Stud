<?php
//FRONT CONTROLLER

//GENERAL SETTINGS
ini_set('display_errors', 1);
error_reporting(E_ALL);
//CONNECT FILES
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
//CONNECTED TO DATABASE

//CALL ROUTER
$router = new Router();
$router->run();