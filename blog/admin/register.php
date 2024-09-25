<?php require_once '../config/config.php'; ?>
<?php include_once ROOT_DIR . 'components/header/_header.php'; ?>

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
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">User Name</label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control" id="login" name="login">Login</button>
                            </div>
                        </form>
                        <p class="text-center small">Not registered ? <a href="<?php BASE_URL . 'admin/register.php'; ?>">Signup</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>