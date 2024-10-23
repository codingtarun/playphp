<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Register </title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Font Awesome 6 CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="register-container">
        <div class="login-image">
            <img src="../assets/images/user_register_bg.png" alt="" class="login-image__bg">
            <img src="../assets/images/user_register_fg.png" alt="" class="login-image__fg">
        </div>
        <div class="login-form">
            <h2 class="login-form__heading">Please Fill out form to Register !</h2>
            <form action="#" class="register-form">
                <div class="register-form__group">
                    <label for="fullname" class="register-form__label">Full name:</label>
                    <input type="text" class="register-form__input" id="fullname">
                </div>
                <div class="register-form__group">
                    <label for="username" class="register-form__label">Username:</label>
                    <input type="text" class="register-form__input" id="username">
                </div>
                <div class="register-form__group">
                    <label for="email" class="register-form__label">Email:</label>
                    <input type="text" class="register-form__input" id="email">
                </div>
                <div class="register-form__group">
                    <label for="password" class="register-form__label">Password:</label>
                    <input type="text" class="register-form__input" id="password">
                </div>
                <div class="register-form__group">
                    <label for="confirm-password" class="register-form__label">Confirm Password:</label>
                    <input type="text" class="register-form__input" id="confirm-password">
                </div>
                <div class="register-form__group">
                    <button class="register-form__button">Register</button>
                </div>
            </form>
            <p class="login-form__login-link">Already have account? <a href="#">Login</a></p>
            <ul class="login-form__social-link">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
</body>

</html>