<!-- Configuration File -->
<?php include_once('app/config.php'); ?>
<!-- Header -->
<?php include_once(ROOT_DIR . 'components/common/header.php'); ?>

<body>
    <!-- Top Navigation-->
    <?php include_once(ROOT_DIR . 'components/common/navbar.php'); ?>
    <div class="container">
        <h2>PHP Playground</h2>
        <h3>Root Files : <?php echo BASE_URL; ?></h3>
        <h3>Root Directory : <?php echo ROOT_DIR; ?></h3>
    </div>
    <!-- Footer Scripts-->
    <?php include_once(ROOT_DIR . 'components/common/footer-scripts.php'); ?>
</body>

</html>