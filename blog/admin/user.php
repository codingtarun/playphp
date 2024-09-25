<?php require_once '../config/config.php'; ?>
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
                            <button class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-plus"></i></button>
                            <button class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 10; $i++) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i + 1; ?></th>
                                        <td>Mark</td>
                                        <td><?php $status = rand(0, 1); ?>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" <?php if ($status) { ?> checked <?php } ?>>
                                                <label class="form-check-label" for="flexSwitchCheckChecked"><?php if ($status) { ?>Acttive <?php } else { ?> Inactive <?php } ?></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-sm">
                                                <button class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye"></i></button>
                                                <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>