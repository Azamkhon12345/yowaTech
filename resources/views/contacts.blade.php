@extends('layouts.user')
@section('head')

    @endsection
@section('classContactsNav')
    current
@endsection
@section('content')
    <!--Page Header Start-->
    <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">

    <div class="container">
        <h2>Contact</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>Contact</span></li>
        </ul>
    </div>
    </section>

    <!--Google Map-->
    <section class="google_map google_map_two">
        <div class="container">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
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
                            <h3>Crowdfunding Guide</h3>
                            <p><a href="#">Click here to Download</a></p>
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
                            <h3>Available 24/7</h3>
                            <p><a href="tel:123456789">222 000 7777</a></p>
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
                            <h3>Send Email For Inquiry</h3>
                            <p><a href="mailto:needhelp@jitsin.com">needhelp@jitsin.com</a></p>
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

        <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="why-choose-us.html">Why Choose Us</a></li>
            <li><a href="faq.html">FAQs</a></li>
            <li><a href="team.html">Team Members</a></li>
            <li><a href="gallery.html">Gallery</a></li>
        </ul><!-- /.sub-menu -->
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="contact_one_left">
                        <div class="block-title text-left">
                            <div class="block_title_icon">
                                <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                            </div>
                            <p>Contact With Us</p>
                            <h3>We Love to Hear From You</h3>
                        </div>
                        <div class="contact_one_left-text">
                            <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-one__form__wrap">
                        <form action="inc/sendemail.php" class="contact-one__form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="Phone" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group contact__btn">
                                        <button type="submit" class="thm-btn contact-one__btn">Send message</button>
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
    <div class="categories_two">
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
    </div>


@endsection
