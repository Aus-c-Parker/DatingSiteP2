<?php
/*Author: Austin Parker
Date: 6-20-2020
index.php
Index page that defines F3 functions to produce views and maintain data.*/

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();


//Require the autoload file
require_once('vendor/autoload.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

//Define a default route
$f3 -> route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3 -> route('GET /', function() {
    $view = new Template();
    echo $view->render('views/personalInformation.html');
});

//Run fat free
$f3 -> run();