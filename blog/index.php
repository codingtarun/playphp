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
            <!--Choose A category section -->
            <div class="catagory">
                <h2 class="catagory__heading">
                    Choose A Catagory
                </h2>
                <div class="catagory__list">
                    <div class="catagory__details">
                        <img src="./assets/images/blog/business.png" alt="" class="catagory__icon">
                        <h3 class="catagory__title">Business</h3>
                        <p class="catagory__excerpt">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam voluptatem temporibus a quae dolor
                        </p>
                    </div>
                    <div class="catagory__details">
                        <img src="./assets/images/blog/startup.png" alt="" class="catagory__icon catagory__icon--startup">
                        <h3 class="catagory__title">Startup</h3>
                        <p class="catagory__excerpt">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam voluptatem temporibus a quae dolor
                        </p>
                    </div>
                    <div class="catagory__details">
                        <img src="./assets/images/blog/economy.png" alt="" class="catagory__icon">
                        <h3 class="catagory__title">Economy</h3>
                        <p class="catagory__excerpt">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam voluptatem temporibus a quae dolor
                        </p>
                    </div>
                    <div class="catagory__details">
                        <img src="./assets/images/blog/tech.png" alt="" class="catagory__icon">
                        <h3 class="catagory__title">Technology</h3>
                        <p class="catagory__excerpt">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam voluptatem temporibus a quae dolor
                        </p>
                    </div>
                </div>
            </div>
            <!--/Choose A category section -->
            <!--Why we started-->
            <div class="started">
                <div class="started__bg-image">
                    <img src="./assets/images/blog/close-up.png" alt="" class="started__image">
                </div>
                <div class="started__info">
                    <p class="started__caption">Why we started</p>
                    <h1 class="started__heading">It started out as a simple idea and evolved into our passion</h1>

                    <button class="button-yellow">Discover out story > </button>
                </div>
            </div>
            <!--/Why we started-->
            <!--Author List-->
            <div class="authors">
                <h2 class="authors__heading">
                    List of Authors
                </h2>
                <div class="authors__list">
                    <div class="authors__details">
                        <img src="./assets/images/blog/man-in-yellow.png" alt="" class="authors__image">
                        <h3 class="authors__name">Floyd Miles</h3>
                        <p class="authors__profile">Content Writer @company</p>
                        <ul class="authors__social">
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-facebook" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-twitter" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-instagram" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-linkedin" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="authors__details">
                        <img src="./assets/images/blog/woman-in-white.png" alt="" class="authors__image">
                        <h3 class="authors__name">Dianne Russelll</h3>
                        <p class="authors__profile">Content Writer @company</p>
                        <ul class="authors__social">
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-facebook" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-twitter" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-instagram" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-linkedin" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="authors__details">
                        <img src="./assets/images/blog/fashion-woman.png" alt="" class="authors__image">
                        <h3 class="authors__name">Jenny Wilson</h3>
                        <p class="authors__profile">Content Writer @company</p>
                        <ul class="authors__social">
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-facebook" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-twitter" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-instagram" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-linkedin" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="authors__details">
                        <img src="./assets/images/blog/content-baker.png" alt="" class="authors__image">
                        <h3 class="authors__name">Leslie Alexander</h3>
                        <p class="authors__profile">Content Writer @company</p>
                        <ul class="authors__social">
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-facebook" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-twitter" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-instagram" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                            <li class="authors__social--profile">
                                <a href="#" class="authors__social--profile-links">
                                    <i class="fa-brands fa-linkedin" class="authors__social--profile-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/Author List-->
            <!--Featured In-->
            <div class="featured">
                <img src="./assets/images/blog/Featured_in.png" alt="" class="featured__image">
                <img src="./assets/images/blog/Logo_1.png" alt="" class="featured__image">
                <img src="./assets/images/blog/Logo_2.png" alt="" class="featured__image">
                <img src="./assets/images/blog/Logo_3.png" alt="" class="featured__image">
                <img src="./assets/images/blog/Logo_4.png" alt="" class="featured__image">
                <img src="./assets/images/blog/Logo_5.png" alt="" class="featured__image">
            </div>
            <!--/Featured In-->
            <!--Testimonials-->
            <div class="testimonials">
                <div class="testimonials__info">
                    <p class="testimonials__title">
                        Testimonials
                    </p>
                    <h2 class="testimonials__heading">
                        What people say about our blog
                    </h2>
                    <p class="testimonials__text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo deleniti, fuga tempore numquam voluptas aliquid quibusdam excepturi voluptatibus molestiae incidunt.
                    </p>
                </div>
                <div class="testimonials__box">
                    <div class="testimonials__list">
                        <h4 class="testimonials__excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus obcaecati beatae facere, inventore maxime quasi vitae neque nemo facilis,
                        </h4>
                    </div>
                    <div class="testimonials__footer">
                        <div class="testimonials__user">
                            <img src="./assets/images/blog/Profile_picture.png" class="testimonials__user--image">
                            <div class="testimonials__user--details">
                                <h4 class="testimonials__user--name">
                                    Jonathan Vallem
                                </h4>
                                <p class="testimonials__user--city">
                                    New york, USA
                                </p>
                            </div>
                        </div>
                        <div class="testimonials__controls">
                            <button class="testimonials__controls--left"><i class="fa-solid fa-arrow-left"></i></button>
                            <button class="testimonials__controls--right"><i class="fa-solid fa-arrow-right"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Testimonials-->
            <!--Join our team-->
            <div class="join-team">
                <div class="join-team__box">
                    <h2 class="join-team__heading">
                        Join our team to be a part of out story
                    </h2>
                    <p class="join-team__excerpt">
                        Lorem luptates aut omnis et reprehenderit reiciendis quae maxime dolor excepturi deleniti enim veniam doloremque at. Nisi reiciendis nulla minima a.
                    </p>
                    <button class="button-yellow">Join now</button>
                </div>
            </div>
            <!--/Join our team-->
            <div class="footer">
                <div class="footer__links">
                    <h2 class="footer__logo">
                        <span class="footer__logo--bracket">{</span><span class="footer__logo--text">Blog</span>
                    </h2>
                    <ul class="footer__list">
                        <li><a href="#" class="footer__link">Home</a></li>
                        <li><a href="#" class="footer__link">Blog</a></li>
                        <li><a href="#" class="footer__link">About Us</a></li>
                        <li><a href="#" class="footer__link">Contact Us</a></li>
                        <li><a href="#" class="footer__link">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer__subscribe">
                    <h2 class="footer__heading">
                        Subscribe to our news letter to get latest updates and news
                    </h2>
                    <div class="footer__input-group">
                        <input type="text" name="" id="" class="footer__input-group--email" placeholder="Enter Your Email">
                        <button class="button-yellow">Subscribe</button>
                    </div>
                </div>
                <div class="footer__social">
                    <p class="footer__social--contact">
                        Finstreet 118 2561 Fintown <br>
                        Hello@blog.com 020 7993 2905
                    </p>
                    <ul class="footer__social--list">
                        <li><a href="#" class="footer__social--links"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#" class="footer__social--links"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#" class="footer__social--links"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="footer__social--links"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
</body>

</html>