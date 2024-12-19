<?php

namespace App\Core;

class Session
{
    public static function start($user)
    {
        $_SESSION['user']['username'] = $user->username;
        $_SESSION['user']['email'] = $user->email;
        $_SESSION['user']['id'] = $user->id;
        print_r($_SESSION);
        exit;
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
    public static function errors(string $error)
    {
        unset($_SESSION['errors']);
        $_SESSION['errors'][] = $error;
    }
}
