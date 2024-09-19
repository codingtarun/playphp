<?php
include_once('../../app/config.php');

/**
 * Destroy the session and logout of the account
 */
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    header("Location: http://127.0.0.1:8000/");
    exit();
} else {
    header("Location: http://127.0.0.1:8000/");
    exit();
}
