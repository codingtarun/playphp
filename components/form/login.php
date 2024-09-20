<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card shadow-xl rounded-0" style="width: 50%;">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form method="POST" action="<?php echo '../controller/login.php' ?>">
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="text" class="form-control <?php if (isset($_SESSION['errors']['userEmail'])) { ?> is-invalid <?php } ?>" name="userEmail" id="userEmail">
                    <?php if (isset($_SESSION['errors']['userEmail'])) { ?>
                        <div class="invalid-feedback"><?php echo $_SESSION['errors']['userEmail']; ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" class="form-control <?php if (isset($_SESSION['errors']['userPassword'])) { ?>is-invalid <?php } ?>" name="userPassword" id="userPassword">
                    <?php if (isset($_SESSION['errors']['userPassword'])) { ?>
                        <div class="invalid-feedback"><?php echo $_SESSION['errors']['userPassword']; ?></div>
                    <?php } ?>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <?php unset($_SESSION['errors']); ?>
        </div>
    </div>
</div>