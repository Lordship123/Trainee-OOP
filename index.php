<?php
require 'vendor/autoload.php';
//
//$test = new \controller\HelloContrl();
//
//echo $test->x;

define('ROOT', dirname(__FILE__));
require_once (ROOT.'/component/Router.php');


$router = new Router();
$router->run();