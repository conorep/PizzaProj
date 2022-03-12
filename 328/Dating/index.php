<?php
    //turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //require the autoload file before session start
    require_once('vendor/autoload.php');

    //start the sesh after autoload
    session_start();

    //create an instance of the Base class for fat free
    $f3 = Base::instance();
    $con = new Controller($f3);
    $dataLayer = new DataLayer();

    // home. currently clear session upon reaching homepage.
    $f3->route('GET /', function ()
    {
        session_destroy();
        $GLOBALS['con']->home();
    });


    // personal info page
    $f3->route('GET|POST /information', function ()
    {
        $GLOBALS['con']->info();
    });

    // profile page
    $f3->route('GET|POST /profile', function ()
    {
        $GLOBALS['con']->profile();
    });

    // interests page
    $f3->route('GET|POST /interests', function ()
    {
        $GLOBALS['con']->interests();
    });

    // profile summary page
    $f3->route('GET /summary', function ()
    {
        $GLOBALS['con']->summary();
    });

    // privacy policy page
    $f3->route('GET /privacy', function ()
    {
        $GLOBALS['con']->privacy();
    });

    //run fat-free -> invokes
    $f3->run();

    /**
     * Conor O'Brien SDEV328
     * Dating Assignment
     * Winter 2022
     * index.php
     **/