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
require_once ('model/data-layer.php');

//Instantiate the F3 Base class
$f3 = Base::instance();

//Define a default route
$f3 -> route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define Personal Information route
$f3 -> route('GET|POST /personalInformation', function($f3) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['Fname'] = $_POST['Fname'];
        $_SESSION['Lname'] = $_POST['Lname'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];

        $f3->reroute('profile');
    }

    $view = new Template();
    echo $view->render('views/personalInformation.html');
});

//Define Profile route
$f3 -> route('GET|POST /profile', function($f3) {

    $state = getState();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['seeking'] = $_POST['seeking'];
        $_SESSION['bio'] = $_POST['bio'];


        $f3->reroute('interests');
    }

    $f3->set('state', $state);

    $view = new Template();
    echo $view->render('views/profile.html');
});

$f3 -> route('GET|POST /interests', function($f3) {
    $indoor = getIndoor();
    $outdoor = getOutdoor();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['indoor'] = $_POST['indoor'];
        $_SESSION['outdoor'] = $_POST['outdoor'];

        $f3->reroute('summary');
    }

    $f3->set('indoor', $indoor);
    $f3->set('outdoor', $outdoor);
    $view = new Template();
    echo $view->render('views/interests.html');
});

$f3 -> route('GET|POST /summary', function($f3) {
    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run fat free
$f3 -> run();