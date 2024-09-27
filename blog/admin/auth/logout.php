<?php
require_once '../../config/config.php';
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    session_unset();
    session_destroy();
    header("location:http://127.0.0.1:8000/blog/index.php");
} else {
    header("location:http://127.0.0.1:8000/blog/index.php");
}
