<?php

/*
 * authors: Connor O'Brien, Pavel Krokhalev, Colton Marty
 * date: 1/25/2022
 * description: Controller for the Pets Pair Programming assignment.
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {
//    echo "<h1>Pet Home</h1>";

    $view = new Template();
    echo $view->render('views/home.html');
});

// Run fat-free
$f3->run();