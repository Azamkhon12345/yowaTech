@extends('layouts.user')
@section('head')

    @endsection
@section('classContactsNav')
    current
@endsection
@section('content')
<title>Контакты | YoWa</title>
    <!--Page Header Start-->
    <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">

    <div class="container">
        <h2>Контакты</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="/">Главная</a></li>
            <li><span>Контакты</span></li>
        </ul>
    </div>
    </section>

    <!--Google Map-->
    <section class="google_map google_map_two">
        <div class="container">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60407.47263276001!2d69.23159949013605!3d41.317774745695424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b2930779209%3A0xd22a0d12e799d915!2z0J_QsNC80Y_RgtC90LjQuiDQkNC80LjRgNCwINCi0LjQvNGD0YDQsA!5e0!3m2!1sru!2s!4v1607195537865!5m2!1sru!2s"
                    class="google-map__contact" allowfullscreen>
            </iframe>
        </div>
    </section>

    <!--Three Boxes Two Start-->
    <section class="three_boxes three_boxes_two">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Three Boxes single-->
                    <div class="three_boxes_single">
                        <div class="three_boxes_content">
                            <h3>Наша Инструкция</h3>
                            <p><a href="#">Нажмите Чтобы Скачать</a></p>
                        </div>
                        <div class="three_boxes_icon">
                            <img src="assets/images/shop/three-boxes-2-icon-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Three Boxes single-->
                    <div class="three_boxes_single">
                        <div class="three_boxes_content">
                            <h3>Доступно 24/7</h3>
                            <p><a href="tel:+123456789">+99890 1234567</a></p>
                        </div>
                        <div class="three_boxes_icon">
                            <img src="assets/images/shop/three-boxes-2-icon-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Three Boxes single-->
                    <div class="three_boxes_single">
                        <div class="three_boxes_content">
                            <h3>Email</h3>
                            <p><a href="mailto:we@yourway.cf">we@yourway.cf</a></p>
                        </div>
                        <div class="three_boxes_icon">
                            <img src="assets/images/shop/three-boxes-2-icon-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact One single-->
    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="contact_one_left">
                        <div class="block-title text-left">
                            <div class="block_title_icon">
                                <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                            </div>
                            <p>Свяжитесь С Нами</p>
                            <h3>Мы Будем Рады Вашим Сообщениям</h3>
                        </div>
                        <!--<div class="contact_one_left-text">
                            <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
                        </div>-->
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-one__form__wrap">
                        <form action="inc/sendemail.php" class="contact-one__form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Имя">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Фамилия">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="Phone" placeholder="Телефон">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="message" placeholder="Сообщение"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group contact__btn">
                                        <button type="submit" class="thm-btn contact-one__btn">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Categories Two Start-->
    <!--<div class="categories_two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="categories_two_menu list-unstyled">
                        <li><a href="#">Fashion</a></li>
                        <li class="active"><a href="#">Design</a></li>
                        <li><a href="#">Film & Video</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Health & Fitness</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Education</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>-->


@endsection
