<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo BASE_URL . '/' ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . '/tasks/view/index.php' ?>">Tasks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto pr-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if (isset($_SESSION['user'])) {
                        print_r($_SESSION['user']['name']);
                    } else {
                        echo "Login";
                    } ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo BASE_URL . '/user/controller/logout.php'; ?>">Logout</a>

                    <?php } else { ?>
                        <a class="dropdown-item" href="<?php echo BASE_URL . '/user/view/signup.php'; ?>">Signup</a>
                        <a class="dropdown-item" href="<?php echo BASE_URL . '/user/view/login.php'; ?>">Login</a>
                    <?php }  ?>
                </div>
            </li>
        </ul>
    </div>
</nav>