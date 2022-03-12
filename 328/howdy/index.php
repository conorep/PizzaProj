<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class for fat free
$f3 = Base::instance();

$f3->route('GET /', function()
{
    $views = new Template();
    echo $views->render('views/home.html');
});

//run fat-free -> invokes
$f3->run();