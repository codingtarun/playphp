<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome 6 CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="main-container">
        <nav class="navbar">
            <div class="navbar__logo">
                <span class="navbar__logo--bracket">{</span><span class="navbar__logo--text">Blog</span>
            </div>
            <div class="navbar__menu">
                <ul class="navbar__list">
                    <li class="navbar__list--item">
                        <a href="#" class="navbar__list--link">Home</a>
                    </li>
                    <li class="navbar__list--item">
                        <a href="#" class="navbar__list--link">Blog</a>
                    </li>
                    <li class="navbar__list--item">
                        <a href="#" class="navbar__list--link">About Us</a>
                    </li>
                    <li class="navbar__list--item">
                        <a href="#" class="navbar__list--link">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="navbar__button">
                <button class="navbar__button--toggle">Subscribe</button>
            </div>
        </nav>
        <div class="content">
            <!--Hero Section-->
            <section class="hero">
                <div class="hero__box">
                    <div class="hero__image">
                        <img src="../blog/assets/images/blog/man-in-black-suit.png" alt="" class="hero__image--bg">
                        <img src="../blog/assets/images/blog/Overlay.png" alt="" class="hero__image--fg">
                    </div>
                    <div class="hero__info">
                        <p class="hero__info--category">Posted on <span class="bold">Startup</span></p>
                        <h1 class="hero__info--heading">Step-by-step guide to choosing great font pairs</h1>
                        <p class="hero__info--author">By <span class="txt-yellow">James West</span> | May 23, 2024</p>
                        <p class="hero__info--excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit.Omnis vel nulla quis corrupti hic ab, id<br> maiores cupiditate necessitatibus, unde,dicta?</p>
                        <button class="button-yellow">Read More > </button>
                    </div>
                </div>
            </section>
            <!--/Hero Section-->
            <!--Feature / All Post Section-->
            <div class="posts">
                <section class="featured-posts">
                    <h1 class="primary-heading">Featured Post</h1>
                    <div class="post">
                        <img src="./assets/images/blog/white-concrete-building.png" alt="" class="post__image">
                        <h3 class="tertiary-heading">By <span class="txt-purple">John Doe</span> | May 23, 2022</h3>
                        <h2 class="secondary-heading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit fugit qui tempora. </h2>
                        <p class="post__excerpt">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quisquam maiores fugiat porro odit omnis nostrum voluptates atque? Voluptate delectus reiciendis ab possimus corrupti consequuntur eligendi ut vel quia veritatis!
                        </p>
                        <button class="button-yellow">Read More ></button>
                    </div>
                </section>
                <section class="all-posts">
                    <div class="all-posts__header">
                        <h1 class="primary-heading">All Posts</h1>
                        <a href="#" class="all-posts__view--all">View All</a>
                    </div>
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <a href="#" class="all-posts__links">
                            <h3 class="tertiary-heading">By <span class="txt-purple">John Doe</span> | May 23, 2022</h3>
                            <h2 class="secondary-heading">Lorem ipsum dolor sit amet conelitdolor sit amet conelit fugit qui tempora. </h2>
                        </a>
                    <?php } ?>
                </section>
            </div>
            <!--/Feature / All Post Section-->
            <!-- About Us / Our mission-->
            <div class="about">
                <div class="about__background">
                    <div class="about__background--white"></div>
                    <div class="about__background--yellow"></div>
                    <div class="about__background--purple"></div>
                </div>
                <div class="about__info">
                    <div class="about__us">
                        <h3 class="about__us--secondary-heading">
                            About Us
                        </h3>
                        <h2 class="about__us--primary-heading">
                            We are a community of content writers who share their learning
                        </h2>
                        <p class="about__us--excerpt">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quisquam maiores fugiat porro odit omnis nostrum voluptates atque? Voluptate delectus reiciendis ab possimus corrupti consequuntur eligendi ut vel quia veritatis!
                        </p>
                        <a href="" class="about__us--link">Read more ></a>
                    </div>
                    <div class="about__our-mission">
                        <h3 class="about__us--secondary-heading">
                            Our Mission
                        </h3>
                        <h2 class="about__our-mission--primary-heading">
                            Creating valuable content for creative all aroud the world
                        </h2>
                        <p class="post__excerpt">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quisquam maiores fugiat porro odit omnis nostrum voluptates atque? Voluptate delectus reiciendis ab possimus corrupti consequuntur eligendi ut vel quia veritatis!
                        </p>
                    </div>
                </div>
            </div>
            <!-- /About Us / Our mission-->
        </div>

    </div>
    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
</body>

</html>