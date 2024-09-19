<?php
include_once('../../app/config.php');
if (isset($_SESSION['user'])) {
    header("Location: http://127.0.0.1:8000/");
    exit();
}
?>

<!-- Header -->
<?php include_once(ROOT_DIR . 'components/common/header.php'); ?>

<body>
    <!-- Top Navigation-->
    <?php
    include_once(ROOT_DIR . 'components/common/navbar.php');
    ?>
    <?php include_once(ROOT_DIR . 'components/form/signup.php'); ?>
    <!-- Footer Scripts-->
    <?php include_once(ROOT_DIR . 'components/common/footer-scripts.php'); ?>
</body>

</html>