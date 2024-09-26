<?php require_once '../../config/config.php'; ?>
<?php include_once ROOT_DIR . 'components/header/_header.php'; ?>

<body>
    <?php include_once ROOT_DIR . 'components/navbar/_navbar.php'; ?>
    <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span class="fw-bold">Users</span>
                        <div class="btn-group">
                            <a class="btn btn-sm btn-outline-primary" href="#">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary" href="#">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" value="" placeholder="User Name" autocomplete="off">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" value="" placeholder="User Email" autocomplete="off">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>