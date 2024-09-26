<?php

/**
 * Config file contains all the important configuration of this application
 */

define('ROOT_DIR', dirname(realpath(__DIR__)) . DIRECTORY_SEPARATOR);
define('BASE_URL', 'http://127.0.0.1:8000/blog/');


/**
 * Database configuration
 */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_NAME', 'playphp');
define('DB_PASSWORD', 'bs09Btcs183@');

/**
 * Establishing DB connection using PDO : 
 * 
 * PHP PDO : PHP PDO is a database access layer that provides a uniform interface for working with multiple databases.
 * 
 * 
 * Syntex : new PDO("mysql:host=$host;dbname=$db" , $user ,$password)
 */



try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PASSWORD);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
