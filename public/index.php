<?php

session_start();

require __DIR__ . "/../app/core/init.php";

if (defined('DEBUG') && DEBUG) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}


// Instantiate the main application class
$app = new App;

// Delegate control to the application to handle the incoming HTTP request,
// load the appropriate controller and execute the requested action
$app->loadController();

