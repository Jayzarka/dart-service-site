<?php
    session_start();
    include('php/connectDB.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/07aabd1ec0.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7422a09160.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="css/style.css">
    <title>Dart service</title>
</head>

<body>
    <header class="header" id="header">
        <!-- header.fixed.active -->
        <div class="container">

            <nav class="navbar">
                <div class="logo">
                    <div class="logo__img">
                        <i class="fa-solid fa-bullseye fa-2x"></i>
                    </div>
                    <div class="logo__title">
                        dart <br>
                        <b> service manager </b>
                    </div>
                </div>

                <div class="menu" id="menu">
                    <a class="menu__item" href="#" data-scroll="#intro">Home</a>
                    <a class="menu__item" href="#" data-scroll="#tools">Tools</a>
                    <a class="menu__item" href="#" data-scroll="#services">Services</a>
                    <a class="menu__item" href="#" data-scroll="#team">Team</a>
                    <a class="menu__item" href="#" data-scroll="#contact">Contact us</a>
                    <a class="menu__item" href="/php/outh.php">
                        <?php 
                            if ($_SESSION['logged']) {
                                echo "Welcome, ".$_SESSION['login'];
                            } else {
                                echo "sign up";
                            }
                        ?>
                    </a>   

                </div>
            </nav><!-- /.navbar -->

            <button class="nav__toggle" id="nav__toggle" type="button"> <!-- active -->
                <span class="toggle__item">Menu</span>
            </button>

        </div>
    </header>

    <div class="intro" id="intro">
        <div class="container">


            <div class="intro__items">
                <div class="intro__item">
                    <div class="item__title">
                        lorem Ipsum <br> Dolor sit amet
                    </div>
                    <div class="item__subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc
                    </div>

                    <div class="item__buttons">
                        <button class="item__btn">by now</button>
                        <button class="item__btn">try for free</button>
                    </div>
                </div>

                <div class="intro__item">
                    <div class="intro__video">
                        <img src="/images/video.jpg" alt="">
                        <div class="watch__btn">
                            <i class="fa-solid fa-play fa-3x"></i>
                            <div class="btn__text">watch video</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- intro__items -->

        </div>
    </div>

    <!-- Tools -->
    <section class="section" id="tools">
        <div class="container">

            <div class="section__header">
                <h1 class="section__title">Easy & Useful</h1>
                <!-- 45 semibold #061e37-->
                <h3 class="section__description">Project Management Tool</h3>
                <!-- 25 semibold #b0bec5  -->
                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                <!-- 15 #b0bec5 -->
            </div>

            <div class="tools">

                <div class="tool__item">
                    <div class="tools__icon">
                        <i class="fa-solid fa-calendar-days fa-5x" style="color: #b388ff"></i>
                    </div>

                    <div class="tools__title">
                        Title Goes Here
                    </div>

                    <div class="tools__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>

                <div class="tool__item">
                    <div class="tools__icon">
                        <i class="fa-solid fa-calendar-days fa-5x" style="color: #80d8ff"></i>
                    </div>

                    <div class="tools__title">
                        Title Goes Here
                    </div>

                    <div class="tools__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>

                <div class="tool__item">
                    <div class="tools__icon">
                        <i class="fa-solid fa-calendar-days fa-5x" style="color: #ea80fc"></i>
                    </div>

                    <div class="tools__title">
                        Title Goes Here
                    </div>

                    <div class="tools__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                </div>

            </div>
            <!-- /.tools -->

            <button class="tools__btn">get started</button>
        </div>
    </section>

    <!-- Statistics -->
    <div class="counts">

        <div class="count__item first">
            <div class="count__icon">
                <i class="fa-solid fa-building"></i>
            </div>

            <div class="count__text">
                12000+ <br> Business
            </div>
        </div>

        <div class="count__item second">
            <div class="count__icon">
                <i class="fa-solid fa-download"></i>
            </div>

            <div class="count__text">
                60000+ <br> Downloads
            </div>
        </div>

        <div class="count__item third">
            <div class="count__icon">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="count__text">
                30000+ <br> Free Instals
            </div>
        </div>

        <div class="count__item fourth">
            <div class="count__icon">
                <i class="fa-solid fa-user-group"></i>
            </div>

            <div class="count__text">
                40000+ <br> Pro User
            </div>
        </div>

    </div>
    <!-- counts -->

    <!-- Services -->
    <section class="section" id="services">
        <div class="container">

            <div class="section__header">
                <h1 class="section__title">Services</h1>
                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            </div>

            <div class="accordion">

                <div class="accordion__item" data-collapse="#ac1">
                    <div class="accordion__header">
                        <i class="fa-solid fa-arrow-trend-up accordion__icon" style="color: #061e37"></i>
                        <div class="accordion__title">Statistics</div>
                    </div>
                    <div class="accordion__content">
                        <img class="content__img" src="/images/accordion/1.jpg" alt="">
                        <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br><br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in
                        </p>
                    </div>
                </div>

                <div class="accordion__item" data-collapse="#ac2">
                    <div class="accordion__header">
                        <i class="fa-solid fa-envelope accordion__icon" style="color: #061e37"></i>
                        <div class="accordion__title">Inbox</div>
                    </div>
                    <div class="accordion__content">
                        <img class="content__img" src="/images/accordion/1.jpg" alt="">
                        <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br><br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in
                        </p>
                    </div>
                </div>

                <div class="accordion__item" data-collapse="#ac3">
                    <div class="accordion__header">
                        <i class="fa-solid fa-people-group accordion__icon" style="color: #061e37"></i>
                        <div class="accordion__title">Team</div>
                    </div>
                    <div class="accordion__content">
                        <img class="content__img" src="/images/accordion/1.jpg" alt="">
                        <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br><br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in
                        </p>
                    </div>
                </div>

                <div class="accordion__item" data-collapse="#ac4">
                    <div class="accordion__header">
                        <i class="fa-solid fa-gear accordion__icon" style="color: #061e37"></i>
                        <div class="accordion__title">Setting</div>
                    </div>
                    <div class="accordion__content">
                        <img class="content__img" src="/images/accordion/1.jpg" alt="">
                        <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br><br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in
                        </p>
                    </div>
                </div>

                <div class="accordion__item" data-collapse="#ac5">
                    <div class="accordion__header">
                        <i class="fa-solid fa-rss accordion__icon" style="color: #061e37"></i>
                        <div class="accordion__title">Feed</div>
                    </div>
                    <div class="accordion__content">
                        <img class="content__img" src="/images/accordion/1.jpg" alt="">
                        <p class="content__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br><br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.accordion -->

        </div>
    </section>

    <!-- reviews -->
    <section class="section bg--testimonials">
        <div class="container">

            <div class="testimonials">
                <div class="testimonials__text">
                    <div class="testimonials__title">
                        What our customers <br> have to say about us.
                    </div>
                    <div class="testimonials__subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    </div>

                    <div class="testimonials__buttons">
                        <button class="item__btn">get started</button>
                    </div>
                </div>

                <div class="testimonials__slider ">

                    <div data-slider>
                        <div>
                            <div class="slider__item">
                                <div class="slider__photo">
                                    <img src="/images/avatars/1.png" alt="">
                                </div>

                                <div class="slider__info">
                                    <div class="slider__title">John Doe</div>
                                    <div class="slider__text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="slider__item">
                                <div class="slider__photo">
                                    <img src="/images/avatars/2.png" alt="">
                                </div>

                                <div class="slider__info">
                                    <div class="slider__title">John Doe</div>
                                    <div class="slider__text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.testimonials__slider -->
            </div>

        </div>
    </section>

    <!-- team -->
    <section class="section" id="team">
        <div class="container">

            <div class="section__header">
                <h1 class="section__title">Our Team</h1>
                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            </div>

            <div class="team">
                <div class="team__photos">
                    <img class="team__avatar active" data-avatar src="/images/avatars/1.1.png" alt="" srcset="">
                    <img class="team__avatar" data-avatar src="/images/avatars/2.1.png" alt="" srcset="">
                    <img class="team__avatar" data-avatar src="/images/avatars/3.1.png" alt="" srcset="">
                </div>

                <div class="team__about" id="#t1">
                    <div class="team__name">Sophie Turner</div>
                    <div class="team__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </div>
                    <div class="team__socials">
                        <a href="#" class="social__link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-dribbble"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>

                <div class="team__about" id="#t2">
                    <div class="team__name">Sophie</div>
                    <div class="team__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </div>
                    <div class="team__socials">
                        <a href="#" class="social__link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-dribbble"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>

                <div class="team__about" id="#t3">
                    <div class="team__name">Turner</div>
                    <div class="team__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </div>
                    <div class="team__socials">
                        <a href="#" class="social__link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-dribbble"></i></a>
                        <a href="#" class="social__link"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.team -->

        </div>
    </section>

    <!-- Contact -->
    <section class="section section--gray" id="contact">
        <div class="container">

            <div class="section__header">
                <h1 class="section__title">Contact Us</h1>
                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            </div>

            <div class="contact">
                <div class="contact__items">

                    <form id="contactForm" method="POST">
                        <div class="txt__form">
                            <input class="text" type="text" name="name" placeholder="First Name..." required>
                            <input class="text" type="text" name="surname" placeholder="Surname..." required>
                        </div>

                        <div class="txt__form">
                            <input class="text" type="email" name="email" placeholder="Email..." required>
                            <input class="text" type="tel" name="phone" placeholder="Phone..." required>
                        </div>

                        <textarea class="txt__area" name="message" id="" placeholder="Message..."></textarea>

                        <div class="contact__buttons">
                            <div class="checkbox">
                                <input type="checkbox" name="subscribe" id="subscribeNews" value="newsletter">
                                <label for="subscribeNews">subscribe to the newsletter</label>
                            </div>

                            <input type="submit" class="send__btn" value="send" name="enter"></input>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="container">

            <div class="footer__nav">
                <div class="logo">
                    <div class="logo__img">
                        <i class="fa-solid fa-bullseye fa-2x"></i>
                    </div>
                    <div class="logo__title">
                        dart <br>
                        <b> service manager </b>
                    </div>
                </div>

                <div class="footer__menu">
                    <a class="footer__item" href="#" data-scroll="#intro">Home</a>
                    <a class="footer__item" href="#" data-scroll="#tools">Tools</a>
                    <a class="footer__item" href="#" data-scroll="#services">Services</a>
                    <a class="footer__item" href="#" data-scroll="#team">Team</a>
                    <a class="footer__item" href="#" data-scroll="#contact">Contact us</a>
                </div>
            </div>
            <!-- navbar -->

            <div class="footer__socials">
                <div class="other__links">
                    <a href="#" class="footer__social">Privecy Policy</i> </a><span>|</span>
                    <a href="#" class="footer__social">About Us</i></a> <span>|</span>
                    <a href="#" class="footer__social">About Us</i></a>
                </div>

                <div class="socials">
                    <a href="#" class="footer__social"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="footer__social"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="footer__social"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="footer__social"><i class="fa-brands fa-dribbble"></i></a>
                    <a href="#" class="footer__social"><i class="fa-brands fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>