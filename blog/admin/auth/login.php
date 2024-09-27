<?php
require_once '../../config/config.php';
include_once ROOT_DIR . 'components/header/_header.php';

// If user is already logged in then go directly to the dashboard page

if (isset($_SESSION['user'])) {
    header('location:http://127.0.0.1:8000/blog/admin/dashboard.php');
}
/**
 * Check if page is submitted
 */
if (isset($_POST['btnLogin'])) {
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    if ($email === '' && $password === '') {
        echo "EMAIL & PASSWORD IS REQUIRED";
    } else {
        $queryUserLogin = $conn->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $queryUserLogin->execute([
            ':email' => $email
        ]);
        $result = $queryUserLogin->FETCH(PDO::FETCH_ASSOC);
        if ($queryUserLogin->rowCount() > 0) {
            // Check password 
            if (password_verify($password, $result['password'])) {
                // Setting Logged in user details 
                $_SESSION['user']['name'] = $result['name'];
                header("location:http://127.0.0.1:8000/blog/admin/dashboard.php");
            } else {
                header("location:http://127.0.0.1:8000/blog/admin/auth/login.php");
            }
        }
    }
}
?>

<body>
    <?php include_once ROOT_DIR . 'components/navbar/_navbar.php'; ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center" style="height: 70vh;">
            <div class="col-sm-5 col-md-3">
                <div class="card shadow">
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
                                <label for="txtPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control" id="btnLogin" name="btnLogin">Login</button>
                            </div>
                        </form>
                        <p class="text-center small">Not registered ? <a href="<?php echo BASE_URL . 'admin/auth/register.php'; ?>">Signup</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>