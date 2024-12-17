<?php

namespace App\Core;

class Session
{
    public static function start($user)
    {
        $_SESSION['user'] = $user;
        header('location:http://127.0.0.1:8000/taskmanager/index.php');
        exit;
    }
    public static function destory()
    {
        unset($_SESSION['user']);
        session_unset();
        session_destroy();
        header('location:http://127.0.0.1:8000/taskmanager/login.php');
        exit();
    }
}
