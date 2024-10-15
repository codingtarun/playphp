<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
</head>

<body class="app">
    <header class="header">
        <img src="https://res.cloudinary.com/dx6ecncex/image/upload/v1620757017/Group_13_uyn5ja.svg" alt="logo" class="logo">
        <button class="btn-toggle">File</button>
        <button class="btn-toggle">View</button>
        <button class="btn-toggle">New</button>
        <button class="btn-toggle">
            <i class="fa-solid fa-crown btn-toggle__icon"></i>
        </button>
        <button class="btn-toggle">
            <i class="fa-solid fa-bell btn-toggle__icon"></i>
        </button>
        <button class="btn-toggle">
            <img src="https://imageplaceholder.net/50x50" alt="user" class="btn-toggle__user-image">
            <span class="btn-toggle__user-name">Tarun C.</span>
        </button>
    </header>
    <div class="app__container">
        <div class="sidebar">
            <section class="menu">
                <button class="menu__button">
                    <i class="fa-regular fa-file class menu__button-icon"></i>
                    <span class="menu__button-text">Template</span>
                </button>
                <button class="menu__button menu__button-active">
                    <i class="fa-regular fa-image menu__button-icon"></i>
                    <span class="menu__button-text">Images</span>
                </button>
                <button class="menu__button">
                    <i class="fa-solid fa-text-height menu__button-icon"></i>
                    <span class="menu__button-text">Text</span>
                </button>
                <button class="menu__button">
                    <i class="fa-solid fa-shapes menu__button-icon"></i>
                    <span class="menu__button-text">Shapes</span>
                </button>
            </section>
            <footer class="footer">
                <small class="footer__copyright">&copy; 2024 SocialEditor. All right reserved.</small>
            </footer>
        </div>
        <section class="panel">
            <div class="panel__heading">
                <h1 class="panel__heading--text">Images</h1>
                <i class="fa-solid fa-angles-left panel__heading--icon"></i>
            </div>
            <div class="panel__images">
                <img src="https://placehold.co/140" alt="" class="panel__images--image">
                <img src="https://placehold.co/140" alt="" class="panel__images--image">
                <img src="https://placehold.co/140" alt="" class="panel__images--image">
                <img src="https://placehold.co/140" alt="" class="panel__images--image">
                <img src="https://placehold.co/140" alt="" class="panel__images--image">
                <button class="panel__images--button">
                    <i class="fa-solid fa-plus panel__content--button-icon"></i>
                </button>
            </div>
        </section>
        <main class="main">
            <div class="info-bar">
                <section class="info-bar__breadcrum">
                    <a href="#" class="info-bar__breadcrum--links">Social Media Post</a>
                    <i class="fa-solid fa-angles-right info-bar__breadcrum--icon"></i>
                    <span class="info-bar__breadcrum--text">Funfriday</span>
                </section>
                <button class="info-bar__publish--button">
                    Publish
                </button>
            </div>
            <div class="artboard">
                <section class="canvas">
                    <img src="./images/image1.jpg" alt="" class="canvas__bg-img">
                    <img src="./images/image1.jpg" alt="" class="canvas__fg-img">
                    <div class="canvas__circle"></div>
                    <div class="canvas__circle"></div>
                    <div class="canvas__circle"></div>
                    <div class="canvas__circle"></div>
                </section>
                <section class="tools">
                    <button class="tools__button tools__button--active">
                        <i class="fa-solid fa-crop tools__button--icon"></i>
                    </button>
                    <button class="tools__button">
                        <i class="fa-solid fa-crop-simple tools__button--icon"></i>
                    </button>
                    <button class="tools__button">
                        <i class="fa-solid fa-pencil tools__button--icon"></i>
                    </button>
                    <button class="tools__button">
                        <i class="fa-solid fa-trash tools__button--icon"></i>
                    </button>
                </section>
            </div>
        </main>
    </div>
</body>

</html>