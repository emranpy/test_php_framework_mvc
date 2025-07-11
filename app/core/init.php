<?php

/**
 * Autoload function for loading model classes dynamically.
 * @author emran <emranwidad91@gmail.com>
 * This function automatically includes PHP files from the `/models` directory
 * based on the class name used. It assumes model filenames match the class names.
 *
 * Example: new User(); // Loads models/User.php
 *
 * @param string $class The name of the class to load.
 * @return void
 */


spl_autoload_register(function ($class) {
    require_once __DIR__ . "/../models/" . ucfirst($class) . ".php";
});

/**
 * Include core configuration, utility functions, and framework components.
 */
require 'config.php';       // Loads global configuration settings.
require 'functions.php';    // Loads reusable helper functions.
require 'Database.php';     // Loads the Database trait for DB access.
require 'Model.php';        // Loads the Model trait for CRUD operations.
require 'Controller.php';   // Loads the base Controller class.
require_once 'App.php';     // Loads and runs the main App router class.
