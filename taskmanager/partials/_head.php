<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
$page = basename($_SERVER['PHP_SELF']);
if (!isset($_SESSION['user'])) {
    // if user not logged in redirect to login page
    header('location:http://127.0.0.1:8000/taskmanager/login.php');
    exit;
}
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
    <title>Blog | <?php echo $page; ?> </title>
</head>