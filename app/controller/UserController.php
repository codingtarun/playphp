<?php
include_once('../config.php');

define('REDIRECT_URL', BASE_URL . 'user/signup.php');

/**
 * Check if the request is not empty or not coming for 'signup.php' page
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    /**
     * Request is not empty and is coming from 'signup.php' page
     */
    $errors = []; // Vallidation errors array.
    $alerts = [];
    /**
     * Running validation on post data
     * Validating the User Name field
     */
    if (!empty($_POST['userName'])) {
        $userName = htmlspecialchars(trim($_POST['userName']));
        /**
         * trim() : removing extra spaces before or after the words.
         * htmlspecialchars() : to prevent XSS attacks.
         */
        $userNameLength = strlen($userName);
        /**
         * strlen() : get the length of the string
         */
        if ($userNameLength < 5 || $userNameLength > 20) {
            $errors['userName'] = "User name must between 5 to 20 characters";
        }
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $userName)) {
            /**
             * preg_match() : to make sure string only contains the given parameters
             */
            $errors['userName'] = "User name can only contain letters, numbers and spaces";
        }
        // WHAT IF INPUT HAS BOTH OF THE ABOVE MENTIONED ERROS ?? 
    } else {
        $errors['userName'] = "User name is required";
    }
    /**
     * Validating the User Email field
     */
    if (!empty($_POST['userEmail'])) {
        $userEmail = htmlspecialchars(trim($_POST['userEmail']));
        $userEmailLength = strlen($userEmail);
        if ($userEmailLength < 5 || $userEmailLength > 30) {
            $errors['userEmail'] = "User mail must be between 5 to 30 characters";
        }
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            /**
             * Format check: Use filter_var() with FILTER_VALIDATE_EMAIL to validate the basic email format.
             */
            $errors['userEmail'] = "Invalid email format";
        }
        if (!preg_match("/^[a-zA-Z0-9._]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $userEmail)) {
            $errors['userEmail'] = "Email can only contain letters, numbers, and the special characters _ and . ";
        }
        if (strpos($userEmail, " ") !== false) {
            /**
             * strpos() : used to return the position of a character position in a given string
             */
            $errors[] = "Email cannot contain spaces.";
        }
    } else {
        $errors['userEmail'] = "User email is required";
    }

    /**
     * Validating the User Password & Confirm Password field
     */
    if (!empty($_POST['userPassword']) || !empty($_POST['confirmUserPassword'])) {
        $userPassword = htmlspecialchars(trim($_POST['userPassword']));
        $confirmUserPassword = htmlspecialchars(trim($_POST['confirmUserPassword']));
        if (strlen($userPassword) < 5) {
            $errors['userPassword'] = "Password must be atleast 5 characters long";
        }
        if ($userPassword !== $confirmUserPassword) {
            $errors['confirmUserPassword'] = "Password didn't matched";
            $errors['userPassword'] = "Password didn't matched";
        }
    } else {
        $errors['userPassword'] = "User password is required";
        $errors['confirmUserPassword'] = "User password is required";
    }
    /**
     *  If there is atleast one validation error then the page will redirect back to the signup page
     */
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: http://127.0.0.1:8000/user/signup.php");
        exit();
    }

    /**
     * Validation successfull and storing data to DB.
     */
    $password = password_hash($userPassword, PASSWORD_DEFAULT);
    $query = $conn->prepare('Insert into `users` (`name`,`email`,`password`) VALUES  (?,?,?)');
    $query->bind_param('sss', $userName, $userEmail, $password);

    $result = $query->execute();
    if ($result) {
        $alerts['success'] = "New user created successfully";
    } else {
        $alerts['danger'] = " Error creating new user";
    }
    $_SESSION['alerts'] = $alerts;
    $query->close();
    header("Location:http://127.0.0.1:8000/user/signup.php");
    exit();
} else {
    /**
     * Request is empty or is not coming from 'signup.php' page
     * Redirect to 'signup.php' page
     */
    header("Location:http://127.0.0.1:8000/user/signup.php");
    exit();
}
