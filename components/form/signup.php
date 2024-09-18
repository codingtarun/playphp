<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="card shadow-xl rounded-0" style="width: 50%;">
        <div class="card-body">
            <?php if (!empty($_SESSION['alerts'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php print_r($_SESSION['alerts']['success']) ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                unset($_SESSION['alerts']);
            } ?>
            <h5 class="card-title">New Sign Up</h5>
            <form method="POST" action="<?php echo '../app/controller/UserController.php' ?>">
                <div class="mb-3">
                    <label for="userName" class="form-label">User Name</label>
                    <input type="text" class="form-control <?php if (isset($_SESSION['errors']['userName'])) { ?> is-invalid <?php } ?>" id="userName" name="userName">
                    <?php if (isset($_SESSION['errors']['userName'])) { ?>
                        <div class="invalid-feedback"><?php print($_SESSION['errors']['userName']) ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" class="form-control <?php if (isset($_SESSION['errors']['userEmail'])) { ?> is-invalid <?php } ?>" name="userEmail" id="userEmail">
                    <?php if (isset($_SESSION['errors']['userEmail'])) { ?>
                        <div class="invalid-feedback"><?php print($_SESSION['errors']['userEmail']) ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" class="form-control <?php if (isset($_SESSION['errors']['userPassword'])) { ?> is-invalid <?php } ?>" name="userPassword" id="userPassword">
                    <?php if (isset($_SESSION['errors']['userPassword'])) { ?>
                        <div class="invalid-feedback"><?php print($_SESSION['errors']['userPassword']) ?></div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="confirmUserPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control <?php if (isset($_SESSION['errors']['confirmUserPassword'])) { ?> is-invalid <?php } ?>" name="confirmUserPassword" id="confirmUserPassword">
                    <?php if (isset($_SESSION['errors']['confirmUserPassword'])) { ?>
                        <div class="invalid-feedback"><?php print($_SESSION['errors']['confirmUserPassword']) ?></div>
                    <?php } ?>
                </div>
                <button type="submit" name="userSignUp" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php
        unset($_SESSION['errors']);
        ?>
    </div>
</div>