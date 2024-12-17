<?php
require_once('./partials/_head.php');
require_once('./app/config/autoloader.php');
require_once('./controller/AuthController.php');
?>

<body>
    <div class="container-fluid bg-grey-100 min-vh-100 d-flex align-items-center justify-content-center">
        <div class="taskmanager-box" style="width:40%">
            <div class="card shadow-sm my-3">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form action="#" method="POST" class="mb-3">
                        <input type="hidden" name="action" value="register">
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="keep-logged-in" name="keep-logged-in">
                            <label class="form-check-label" for="keep-logged-in">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    <hr>
                    <p class="text-center m-0">Already registered ? <a href="http://127.0.0.1:8000/taskmanager/login.php">Login</a></p>
                    <p class="text-center m-0">or</p>
                    <p class="text-center m-0">Forgot Password ? <a href="#">Reset</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('./partials/_footer-script.php') ?>
</body>

</html>