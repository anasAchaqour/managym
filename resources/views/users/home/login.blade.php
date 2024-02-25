<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('images/logo/daklon.svg') }}" type="image/x-icon">

    <!--=============== REMIXICON remixicon.com/ ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/home/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home/login.css') }}" />


    <title>Managym</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/home" class="nav__logo">
                <img src="{{ asset('images/logo/FullFormWhite_and_daklon.svg') }}"
                    class="site-logo" alt="logo" style="width:200px;height:200px;">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.html" class="nav__link active-link"></a>
                    </li>
                    <li class="nav__item">
                        <a href="#program" class="nav__link"></a>
                    </li>
                    <li class="nav__item">
                        <a href="#choose" class="nav__link"></a>
                    </li>
                    <li class="nav__item">
                        <a href="#pricing" class="nav__link"></a>
                    </li>
                    <div class="nav__link">
                        <a href="/home/register" class="button nav__button">
                            Register Now
                        </a>
                    </div>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <section class="calculate section">
        <div class="calculate__container container grid">
            <div class="calculate__content">
                <div class="section__titles">
                    <h1 class="section__title-border">LOGIN</h1>
                    <h1 class="section__title">HERE</h1>
                </div>
                <p class="calculate__description">
                    Sign in. And if you do not have an account. Create it by clicking on the button below
                </p>
                <form action="{{ '/Plogin' }}" class="calculate__form" id="login-form" method="POST">
                    @csrf
                    <div class="calculate__box">
                        <input type="email"  placeholder="email" class="calculate__input" id="username"
                            name="email">
                    </div>
                    <div class="calculate__box">
                        <input type="password" placeholder="password" class="calculate__input" id="password"
                            name="password">
                    </div>
                    {{-- <button type="submit">go</button> --}}
                    <button type="submit" class="button button__flex">
                        Login <i class="ri-arrow-right-line"></i>
                    </button>
                    <a href="/home/register" class="sign__up" class="link">Sign up</a><br>
                    <a href="" class="forgot" class="link">forgot password</a><br>
                </form>
                <p class="calculate__message" id="calculate-messagee"></p>
            </div>
            <img src="{{ asset('images/HomePage/test.png') }}" alt="calculate img" class="calculate__img">
        </div>
    </section>

    <!--==================== FOOTER ====================-->
    <footer class="footer section" id="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="{{ asset('images/logo/daklon.svg') }}" class="site-logo" alt="logo" style="">
                </a>
                <p class="footer__description">
                    Do you want to report something <br> Write a message below.
                </p>

                <form action="" class="footer__form" id="contact-form">
                    <input type="text" name="user_email" placeholder="Write . . ." class="footer__input"
                        id="contact-user">
                    <button type="submit" class="button">
                        Send
                    </button>
                </form>
                <p class="footer__message" id="contact-message"></p>
            </div>
            <div class="footer__content">
                <div>
                    <h3 class="footer__title">SERVICES</h3>
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Flex Muscle</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Cardio Exercise</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Basic Yoga</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Weight Lifting</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">PRICING</h3>
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Basic</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Premium</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Diamond</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">COMPANY</h3>
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Partners</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="footer__group">
                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                </ul>
                <span class="footer__copy">
                    &#169; Copyright samcro. ALL rights reserved
                </span>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>


    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('js/home/scrollreveal.min.js') }}"></script>

    <!--=============== EMAIL JS emailjs.com/===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>


    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/home/login.js') }}"></script>
    <script src="{{ asset('js/home/main.js') }}"></script>

    <!-- script -->
    <script></script>
</body>

</html>
