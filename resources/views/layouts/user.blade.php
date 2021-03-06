<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <!-- Css-->
    <link rel="stylesheet" href="{{asset("assets/css/animate.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/swiper.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap-select.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/jquery.mCustomScrollbar.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap-datepicker.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/vegas.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/nouislider.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/nouislider.pips.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/jitsin_iconl.css")}}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}">
    @yield('head')
</head>

<body>

<div class="preloader">
    <img src="assets/images/loader.png" class="preloader__image" alt="">
</div><!-- /.preloader -->

<div class="page-wrapper">


    <div class="site-header__header-one-wrap clearfix">
        
        <div class="site-header__header-one-wrap-left">
            <a href="/" class="main-nav__logo">
                <img src="{{asset('assets/img/main-logo.png')}}" class="main-logo" alt="YoWa" style="height: 6vh;">
            </a>
        </div>

        <header class="main-nav__header-one">

            <div class="main-nav__header-one-top clearfix">
                <div class="border-bottom"></div>
                <div class="button"><a href="/create-project">Создать Проект</a></div>
                <div class="main-nav__header-one-top-left">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <ul>
                            <li><a href="/user/profile/{{\Illuminate\Support\Facades\Auth::user()->id}}">Посмотреть профиль</a></li>
                            <li><a href="/user/profile/edit/{{\Illuminate\Support\Facades\Auth::user()->id}}">Редактировать профиль</a></li>
                            <li><a href="/logout">Выйти из профиля</a></li>
                        </ul>
                        @else
                        <ul>
                            <li><a href="/contacts">Нужна помощь?</a></li>
                            <li><a href="/login">Войти</a></li>
                            <li><a href="/register">Зарегистрироваться</a></li>
                        </ul>
                    @endif
                </div>
                <div class="main-nav__header-one-top-right">
                    <div class="one__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <nav class="header-navigation one stricky">
                <div class="container-box clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__left">
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li class="dropdown @yield('classHomeNav')">
                                <a href="/">Главная</a>
                            </li>
                            <li class="dropdown @yield('classExploreNav')">
                                <a href="/projects">Все Проекты</a>
                                <!--<ul>
                                    <li><a href="/projects">Проекты</a></li>
                                </ul>--><!-- /.sub-menu -->
                            </li>
                            <li class="@yield('classContactsNav')">
                                <a href="/contacts">Контакты</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                    <div class="main-nav__right">
                        <div class="phone-mail-box">
                            <ul>
                                <li><span class="fas fa-envelope"></span><a href="mailto:we@yourway.cf">we@yourway.cf</a></li>
                                <li><span class="fa fa-phone"></span><a href="tel:+998901234567">+998 90 1234567</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </header>
    </div>
    @if(Session::has('warning'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('warning')}}
            </div>
        @endif
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('warning')}}
            </div>
        @endif
        @yield('content')

<!--Site Footer Start-->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__about wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="footer-widget__title">
                            <h3>О Нас</h3>
                        </div>
                        <div class="footer-widget_about_text">
                            <p>Мы команда разработчиков, дизайнеров и генераторов идей, готовые сделать наш мир лучше.</p>
                        </div>
                        <form>
                            <div class="footer_input-box">
                                <input type="Email" placeholder="Email Address">
                                <button type="submit" class="button"><i class="fa fa-envelope"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="footer-widget__column footer-widget__company wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="footer-widget__title">
                            <h3>Проект</h3>
                        </div>
                        <ul class="footer-widget__company-list list-unstyled">
                            <li><a href="#">О Нас</a></li>
                            <li><a href="#">Краудфандинг</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="footer-widget__column footer-widget__explore wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="footer-widget__title">
                            <h3>Направления</h3>
                        </div>
                        <ul class="footer-widget__explore_list list-unstyled">
                            <li><a href="#">Благотворительность</a></li>
                            <li><a href="#">Стартапы</a></li>
                            <li><a href="#">Социальные проекты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4">
                    <div class="footer-widget__column footer-widget__links wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="footer-widget__title">
                            <h3>Полезные ссылки</h3>
                        </div>
                        <ul class="footer-widget_links_list list-unstyled">
                            <li><a href="#">Правила Пользования</a></li>
                            <li><a href="#">Сотрудничество</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-8 col-md-8">
                    <div class="footer-widget__column footer-widget__options wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="footer-widget__title">
                            <h3>Настройки</h3>
                        </div>
                        <div class="footer_Currency">
                            <!--<select name="currency" id="currency" class="selectpicker">
                                <option value="Country">US Dollars (USD) </option>
                                <option value="Aud">Российские рубли (RUB)</option>
                                <option value="Aud">Узбекский сум (UZS)</option>
                            </select>-->
                            <select name="language" id="language" class="selectpicker">
                                <option value="Canada">Русский</option>
                                <option value="Country">English</option>
                                <option value="England">O'zbek</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Site Footer Bottom Start-->
    <div class="site-footer_bottom">
        <div class="container">
            <div class="site-footer_bottom_copyright">
                <div class="site_footer_bottom_icon p-0">
                    <img src="{{asset('assets/img/logo/yowa55.png')}}" alt="">
                </div>
                <p>@ Все Права Защищены 2020, <a href="#">YoWa</a></p>
            </div>
            <div class="site-footer__social">
                <a href="#" class="tw-clr"><i class="fab fa-twitter"></i></a>
                <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="dr-clr"><i class="fab fa-dribbble"></i></a>
                <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>




</div><!-- /.page-wrapper -->


<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">
            <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="assets/images/shapes/close-1-1.png" alt=""></a>
        </div><!-- /.side-menu__top -->

        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>

        <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

        <div class="side-menu__content">
            <p><a href="mailto:needhelp@tripo.com">we@yourway.cf</a> <br> <a href="tel:888-999-0000">888 999
                    0000</a></p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>


<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>



<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/waypoints.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.counterup.min.js")}}"></script>
<script src="{{asset("assets/js/TweenMax.min.js")}}"></script>
<script src="{{asset("assets/js/wow.js")}}"></script>
<script src="{{asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{asset("assets/js/swiper.min.js")}}"></script>
<script src="{{asset("assets/js/typed-2.0.11.js")}}"></script>
<script src="{{asset("assets/js/vegas.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.validate.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap-select.min.js")}}"></script>
<script src="{{asset("assets/js/countdown.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap-datepicker.min.js")}}"></script>
<script src="{{asset("assets/js/nouislider.min.js")}}"></script>
<script src="{{asset("assets/js/isotope.js")}}"></script>
<script src="{{asset("assets/js/jquery.bxslider.min.js")}}"></script>
<script src="{{asset("assets/js/appear.js")}}"></script>


<!-- template scripts -->
<script src="{{asset("assets/js/theme.js")}}"></script>


</body>

</html>
