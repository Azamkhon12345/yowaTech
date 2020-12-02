<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BNTU in Tashkent</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{asset("./css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("./css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("./css/meanmenu.css")}}">
    <link rel="stylesheet" href="{{asset("./css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("./css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("./css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("./css/et-line-icon.css")}}">
    <link rel="stylesheet" href="{{asset("./css/reset.css")}}">
    <link rel="stylesheet" href="{{asset("./css/meanmenu.css")}}">
    <link rel="stylesheet" href="{{asset("./css/ionicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("./css/material-design-iconic-font.min.css")}}">
    <link rel="stylesheet" href="{{asset("./css/responsive.css")}}">
    <link rel="stylesheet" href="{{asset("./css/style.css")}}">
    <link rel="stylesheet" href="{{asset("./css/mycss.css")}}">
    <link rel="stylesheet" href="{{asset("./css/lightslider.css")}}">
    <script type="text/javascript" src="{{asset("./js/vendor/modernizr-2.8.3.min.js")}}"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->




<!-- Header Area Start -->
<header class="top">
    <div class="header-area header-sticky fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href=""><img src="img/logo_white2.png" class="logoe" alt="belarus" /></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <div class="main-menu one text-right">
                            <nav style="margin-top:15px;">
                                <ul>

                                    <li><a href="index.php">Главная</a>


                                    </li>
                                    <li><a href="{{route('about')}}" @yield('aboutStyle')>Университет</a></li>
                                    <li><a href="{{route('news')}}" @yield('newsStyle')> Новости </a></li>
                                    <li><a href="{{route('enrollee')}}" @yield('enrolleeStyle')>Абитуриентам</a></li>
                                    <li><a href="{{route("contact")}}" @yield('contactStyle')>Контакты</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md one"></div>
                        <!-- Main Menu End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
@yield('content')

<!-- Footer Start -->
<footer class="footer-area">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-widget pr-60">
                        <div class="footer-logo pb-25">
                            <a href="index.html"><img src="img/logo_color_3.png" class="logoe" alt="belarus"></a>
                        </div>
                        <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and give you a coete account of the system. </p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>information</h3>
                        <ul>
                            <li><a href="#">addmission</a></li>
                            <li><a href="#">Academic Calender</a></li>
                            <li><a href="#">Event List</a></li>
                            <li><a href="#">Hostel &amp; Dinning</a></li>
                            <li><a href="#">TimeTable</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>useful links</h3>
                        <ul>
                            <li><a href="#">our courses</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">teachers &amp; faculty</a></li>
                            <li><a href="#">teams &amp; conditions</a></li>
                            <li><a href="#">our events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>get in touch</h3>
                        <p>Республика Узбекистан, Ташкентская область, Кибрайский район, ул. Корамурт, 1</p>
                        <p>+998 95 144 88 01<br>+998 95 144 88 02<br>+998 95 144 88 02</p>
                        <p>info@mipt.uz<br>www.mipt.uz</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright © <a href="https://evosoft.uz/" target="_blank">EVOSOFT</a> 2020. All Right Reserved By EVOSOFT.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->








<!-- all js here -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/ajax-mail.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>

