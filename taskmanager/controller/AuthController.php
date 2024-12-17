<?php

namespace Controller;

use Model\User;
use App\Core\Session;

// Check if page is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get the action type from hidden input field
    $action = $_POST['action'];
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Instanciate Auth class 
    $auth = new AuthController;
    // Based on action call the required function
    if ($action === 'register') {
        // Check if input fields are not empty
        if ($username === '' || $email === '' || $password === '') {
            // return errors in session
            echo "FIELDS REQUIRED";
        } else {
            // register user using function
            $auth->register([
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ]);
            // Redirect to login page now
            header("Location: http://127.0.0.1:8000/taskmanager/login.php");
            exit();
        }
    } elseif ($action === 'login') {
        if ($email == '' || $password == '') {
            echo "FIELDS REQUIRED";
        } else {
            $auth->login([
                'email' => $email,
                'password' => $password
            ]);
        }
    } elseif ($action === 'logout') {
        $auth->logout();
    } else {
        echo "SOME ERROR";
        // header("Location: http://127.0.0.1:8000/taskmanager/register.php");
        exit();
    }
}
class AuthController
{
    /**
     * 
     * Auth class to control user register , login & password reset
     * 
     */

    private $user;

    public function __construct()
    {
        $this->user = new User;
    }
    public function register(array $data)
    {
        $this->user->insert($data);
    }
    public function login(array $user)
    {
        Session::start($user);
    }
    public function logout()
    {
        Session::destory();
    }
}
