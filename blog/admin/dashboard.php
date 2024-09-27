<?php
require_once '../config/config.php';
include_once ROOT_DIR . 'components/header/_header.php';
?>


<body>
    <?php include_once ROOT_DIR . 'components/navbar/_adminNavbar.php'; ?>
    <div class="container-fluid mt-3">

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body m-0">
                                <a href="<?php echo BASE_URL, 'admin/user/index.php'; ?>" class="btn btn-primary w-100">Users</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo BASE_URL, 'admin/category.php'; ?>" class="btn btn-primary w-100">Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo BASE_URL, 'admin/blog.php'; ?>" class="btn btn-primary w-100">Blogs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo BASE_URL, 'admin/carousel.php'; ?>" class="btn btn-primary w-100">Carousels</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>