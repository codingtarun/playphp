<?php require_once '../../config/config.php'; ?>
<?php include_once ROOT_DIR . 'components/header/_header.php'; ?>
<?php
/**
 * Register new user logic 
 */

/**
 * Check if submit button is clicked
 */

if (isset($_POST['btnRegister'])) {
    /**
     * Form Submitted
     * 
     * 1. Perform Input validation.
     * 2. If validation pass then save to DB or return Errors.
     * 3. Store DB , create session and redirect to Admin Dashboard.
     * 
     */

    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $confirmPassword = $_POST['txtConfirmPassword'];

    if ($name === '' || $email === '' || $password === '' || $confirmPassword === '') {
        // Return Error
        echo "EMPTY FIELDS";
    } else {
        // Store to DB
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertUserQuery = $conn->prepare("INSERT INTO `users` (`name`, `email`, `password`,`created_at`) VALUES (:name, :email, :password,:created_at)");
        $insertUserQuery->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => $hashPassword,
            ':created_at' => date('Y-m-d H:i:s')
        ]);
        // redirect to the dashboard
        header("location:http://127.0.0.1:8000/blog/admin/dashboard.php");
    }
};

?>

<body>
    <?php include_once ROOT_DIR . 'components/navbar/_navbar.php'; ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-5 col-md-3">
                <div class="card shadow mt-3">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="txtEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="txtName" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="User Name">
                            </div>
                            <div class="mb-3">
                                <label for="txtPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                            </div>
                            <div class="mb-3">
                                <label for="txtConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="txtConfirmPassword" name="txtConfirmPassword">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="btnRegister" class="form-control" id="btnRegister" name="btnRegister">Register</button>
                            </div>
                        </form>
                        <p class="text-center small">Already registered ? <a href="<?php echo BASE_URL . 'admin/auth/login.php'; ?>">Login</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>