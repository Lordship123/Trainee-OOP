<?php
require 'vendor/autoload.php';

//$string = '5-31-2020';
//$pattern = '/([0-9]{1})-([0-9]{2})-([0-9]{4})/';
//$replacement = 'Месяц: $1, День: $2, Год: $3';
//echo preg_replace($pattern, $replacement, $string);







define('ROOT', dirname(__FILE__));
require_once (ROOT.'/component/Router.php');


$router = new Router();
$router->run();