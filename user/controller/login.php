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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * Request is coming from the login page
     */
    $errors = [];
    $alerts = [];
    /**
     * Validating the data 
     */
    if (!empty($_POST['userEmail'])) {
        /**
         * Perform validations
         */
        $userEmail = htmlspecialchars(trim($_POST['userEmail']));
        $userEmailLenght = strlen($userEmail);
        if ($userEmailLenght > 8) {
            if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                if (preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $userEmail)) {
                    /**
                     * All validations are successfull now check DB for given credentials
                     */
                    echo "OK";
                } else {
                    $errors['userEmail'] = "Email can only contain letters, numbers, and the special characters _ and . ";
                }
            } else {
                $errors['userEmail'] = "Incorrect email format";
            }
        } else {
            $errors['userEmail'] = "Email must be atlest 8 character long";
        }
    } else {
        /**
         * Return error of empty email field
         */
        $errors['userEmail'] = "Email field cannot be blank";
    }
    if (!empty($_POST['userPassword'])) {
        /**
         * Perform Validations
         */
    } else {
        /**
         * Return error for empty pasword field
         */
        $errors['userPassword'] = "Password filed cannot be blank";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: http://127.0.0.1:8000/user/view/login.php");
        exit();
    }
} else {
    header("Location:http://127.0.0.1:8000");
    exit;
}
