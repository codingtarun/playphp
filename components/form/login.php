<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card shadow-xl rounded-0" style="width: 50%;">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form method="POST" action="<?php echo '../controller/login.php' ?>">
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" class="form-control is-invalid" name="userEmail" id="userEmail">
                    <div class="invalid-feedback">Enter correct email address</div>
                </div>
                <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="userPassword">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>