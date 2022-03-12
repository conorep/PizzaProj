<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the Base class for fat free
$f3 = Base::instance();

//define a default route (echo hello world when going to default route - root directory of project)
$f3->route('GET /', function()
{
    $view = new Template();
    echo $view->render('views/home.html');
});

//run fat-free! -> invokes
$f3->run();