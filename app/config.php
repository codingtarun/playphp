<?php

/**
 * Core configuration of the application
 */
session_start();
/**
 * Base url
 */

define('BASE_URL', 'http://127.0.0.1:8000');

/**
 * Root Directory
 */

define('ROOT_DIR', 'C:/laragon/www/playphp/');

/**
 * Database Configurations
 */

define('DB_NAME', 'playphp');
define('DB_USER', 'root');
define('DB_PASSWORD', 'bs09Btcs183@');
define('DB_HOSTNAME', 'localhost');
define('DB_PORT', '3306');

/**
 * Establishing connection usinf mysqli
 */
// Syntex : new mysqli(host, username, password, dbname);
$conn = new mysqli(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Not connected");
}
