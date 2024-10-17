<?php require_once '../config/config.php'; ?>
<?php include_once ROOT_DIR . 'components/header/_header.php'; ?>

<body>
    <?php include_once ROOT_DIR . 'components/navbar/_navbar.php'; ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-8">
                <h1 class="text-center">Blog</h1>
                <div class="row">
                    <?php for ($i = 0; $i < 20; $i++) {
                    ?>
                        <div class="col-6 col-sm-6 col-md-4 mb-3">
                            <div class="card">
                                <img src="https://placehold.co/400x400" class="card-img-top" alt="Placeholder image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="<?php echo BASE_URL . 'blog/post.php'; ?>" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>

        </div>
    </div>
    <?php include_once ROOT_DIR . 'components/footer/_footer-scripts.php'; ?>
</body>

</html>