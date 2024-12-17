<?php
session_start();
var_dump(basename($_SERVER['PHP_SELF']));
if (!isset($_SESSION['user']) && (basename($_SERVER['PHP_SELF']) !== 'login.php')) {
    // if user not logged in redirect to login page
    header('location:http://127.0.0.1:8000/taskmanager/login.php');
} elseif (isset($_SESSION['user']) && (basename($_SERVER['PHP_SELF']) === 'login.php') || (basename($_SERVER['PHP_SELF']) === 'register.php')) {
    header('location:http://127.0.0.1:8000/taskmanager/index.php');
    exit();
}

//session_destroy();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="http://127.0.0.1:8000/taskmanager/assets/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">

    <!--Fontawesome 5-->
    <link rel="stylesheet" href="http://127.0.0.1:8000/taskmanager/assets/fontawesome-5/css/all.css">
    <title>Blog Login </title>
</head>