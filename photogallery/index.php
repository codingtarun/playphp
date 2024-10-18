<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <!-- Google fonts CDN-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="page">
    <div class="app">
        <header class="header">
            <img src="https://res.cloudinary.com/dx6ecncex/image/upload/v1620757017/Group_13_uyn5ja.svg" alt="logo" class="logo">
            <form action="#" method="post" class="search-form">
                <input type="text" name="search" id="search" class="search-form__input" placeholder="Search photos">
                <button type="submit" class="search-form__button"><i class="fa-solid fa-magnifying-glass search-form__button--icon"></i></button>
            </form>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__list--item">
                        <a href="#" class="nav__list--item-link"><i class="fa-solid fa-compass nav__list--item-link-icon"></i></a>
                    </li>
                    <li class="nav__list--item">
                        <a href="#" class="nav__list--item-link"><i class="fa-solid fa-fire nav__list--item-link-icon"></i></a>
                    </li>
                    <li class="nav__list--item">
                        <a href="#" class="nav__list--item-link"><i class="fa-solid fa-user nav__list--item-link-icon"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="sidebar">
            <section class="intro">
                <h1 class="intro__heading">How good are your <span class="u-color u-italic">photos</span> ? </h1>
                <p class="intro__text">Improve your Photography skills by getting <span class="u-color u-underline">feedback</span> from <span class="u-italic u-bold">a jury and the community.</span></p>
                <section class="social">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Random User" class="social__user-img">
                    <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Random User" class="social__user-img">
                    <img src="https://randomuser.me/api/portraits/women/24.jpg" alt="Random User" class="social__user-img">
                    <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Random User" class="social__user-img">
                    <img src="https://randomuser.me/api/portraits/men/50.jpg" alt="Random User" class="social__user-img">
                    <div class="social__container">
                        <p class="social__number">+180,000</p>
                        <p class="social__text">already joined</p>
                    </div>
                </section>
                <section class="auth">
                    <a href="#" class="auth__register">Sign Me Up <i class="fa-solid fa-angle-right auth__register--icon"></i></a>
                    <p class="auth__text">Already a member ? <a href="#" class="auth__login">Sign in</a></p>
                </section>
            </section>
            <section class="upload">
                <div class="upload__container">
                    <i class="fa-solid fa-upload upload__icon"></i>
                    <p class="upload__text">Drag & drop photo</p>
                    <p class="upload__alternative">or <span class="u-color u-underline">browse folder</span></p>
                </div>
            </section>
            <section class="footer">
                <small class="copyright">&copy; 2024 Photo Gallery</small>
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="#" class="footer__link">Terms & Conditions</a>
                    </li>
                    <li class="footer__item">
                        <a href="#" class="footer__link">Privacy Policy</a>
                    </li>
                </ul>
            </section>
        </div>
        <section class="gallery">
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="gallery__container">
                    <img src="https://loremflickr.com/<?php echo rand(150, 200); ?>/<?php echo rand(150, 200); ?>/paris,town/all" alt="" class="gallery__img">
                    <p class="gallery__comment gallery__comment--<?php echo $i; ?>">
                        <i class="fas fastar gallery__icon"></i>
                        <span class="gallery__number"><?php echo rand(5, 20); ?></span>
                    </p>
                </div>
            <?php } ?>
        </section>
        <section class="steps">
            STEPS
        </section>
    </div>

    <!-- Scritp -->
    <script src="script/script.js"></script>
</body>

</html>