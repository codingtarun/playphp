<?php
include_once('../../app/config.php');

define('REDIRECT_URL', BASE_URL . 'user/signup.php');

/**
 * If user is already logged in then redirect to home page
 */

if (isset($_SESSION['user'])) {
    header("Location: http://127.0.0.1:8000/");
    exit();
}
/**
 * Run validation for input 
 */
