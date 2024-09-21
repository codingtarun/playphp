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
    if (!empty($_POST['userEmail']) && !empty($_POST['userPassword'])) {
        /**
         * Perform Email validations
         */
        $userEmail = htmlspecialchars(trim($_POST['userEmail']));
        $userPassword = htmlspecialchars(trim($_POST['userPassword']));
        $userEmailLength = strlen($userEmail);
        $userPasswordLength = strlen($userPassword);
        $userPasswordHash = password_hash($userPassword, PASSWORD_DEFAULT);
        if ($userEmailLength < 8) {
            $errors['userEmail'] = "Email must be atlest 8 character long";
        }
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['userEmail'] = "Incorrect email format";
        }
        if (!preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $userEmail)) {
            $errors['userEmail'] = "Email can only contain letters, numbers, and the special characters _ and . ";
        }

        /**
         * Perform Password validation
         */
        if ($userPasswordLength < 5) {
            $errors['userPassword'] = "Password must be atleast 6 character long";
        }

        /**
         * All validations are passed check the user credentials in DB
         */
        $query = 'SELECT * FROM `users` WHERE `email` = ' . $userEmail . ' AND `password` = ' . $userPasswordHash . '';
        //$query->bind_param('ss', $userEmail, $userPasswordHash);
        // $query->execute();
        print_r($query);
        exit;
        $result = $query->get_result();
        if ($result->num_rows > 0) {
        }
    } else {
        /**
         * Return error of empty email field
         */
        $errors['userEmail'] = "Email & Password fields cannot be blank";
        $errors['userPassword'] = "Email & Password fields cannot be blank";
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
