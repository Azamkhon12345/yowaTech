@extends('layouts.user')

@section('head')

    <title>VeloCITY | YoWa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{asset("assets/img/favicon.png")}}" rel="icon">
    <link href="{{asset("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
@endsection
@section('classHomeNav')
    current
@endsection
@section('content')
    <!-- Banner Section -->
    <section class="banner-section banner-two">

        <div class="banner-carousel-two owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/slide_v2_1.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="big_text">
                                    <h2>Raise Money to <br>Bring a Local <br>Place to Life</h2>
                                </div>
                                <div class="link-box">
                                    <a href="" class="thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/slide_v2_2.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="big_text">
                                    <h2>Raise Money to <br>Bring a Local <br>Place to Life</h2>
                                </div>
                                <div class="link-box">
                                    <a href="" class="thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/slide_v2_1.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="big_text">
                                    <h2>Raise Money to <br>Bring a Local <br>Place to Life</h2>
                                </div>
                                <div class="link-box">
                                    <a href="" class="thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Create Own Start-->
    <section class="create_own">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="create-own_left">
                        <div class="create_own_icon_box">
                            <img src="assets/images/shapes/create_own_icon.png" alt="">
                        </div>
                        <div class="create_own_text">
                            <h2>Let’s Create<br>On Your Own<br>Terms</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="create_own_right_content">
                        <div class="create_own_video_box">
                            <img src="assets/images/resources/create_own_video-img.jpg" alt="">
                            <div class="create_own_video_btn">
                                <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="video-popup"><i
                                            class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="create_own_text">
                            <p><span>Start a Business</span> to develop a direct relationship with your biggest fans
                                and generate predictable, recurring revenue from your creative work.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Explore Projects One Start-->
    <section class="explorep_projects_one projects_two">
        <div class="projects_two_shape" style="background-image: url(assets/images/shapes/projects_tow_shape.png)">
        </div>
        <div class="container">
            <div class="block-title text-center">
                <div class="block_title_icon">
                    <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                </div>
                <p>Businesses You Can Back</p>
                <h3>Explore Projects</h3>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="projects_one_single projects_two_single">
                        <div class="projects_one_img">
                            <img src="assets/images/project/projects_one-img-1.jpg" alt="">
                            <div class="project_one_icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="projects_one_content">
                            <div class="porjects_one_text">
                                <p><span>by</span> Kevin Martin</p>
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in
                                        Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                              data-stop="86">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="projects_categories">
                                <div class="projects_categories_left">
                                    <div class="left_icon">
                                        <img src="assets/images/project/folder-icon.png" alt="">
                                    </div>
                                    <div class="left_text">
                                        <p>Health & Fitness</p>
                                    </div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text">
                                        <p>United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="projects_one_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>$22,600</h5>
                                    <p>Pledged</p>
                                </li>
                                <li>
                                    <h5>$47,300</h5>
                                    <p>Goal</p>
                                </li>
                                <li>
                                    <h5>32</h5>
                                    <p>Days Left</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="projects_one_single projects_two_single">
                        <div class="projects_one_img">
                            <img src="assets/images/project/projects_one-img-2.jpg" alt="">
                            <div class="project_one_icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="projects_one_content">
                            <div class="porjects_one_text">
                                <p><span>by</span> Kevin Martin</p>
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in
                                        Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                              data-stop="86">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="projects_categories">
                                <div class="projects_categories_left">
                                    <div class="left_icon">
                                        <img src="assets/images/project/folder-icon.png" alt="">
                                    </div>
                                    <div class="left_text">
                                        <p>Health & Fitness</p>
                                    </div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text">
                                        <p>United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="projects_one_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>$22,600</h5>
                                    <p>Pledged</p>
                                </li>
                                <li>
                                    <h5>$47,300</h5>
                                    <p>Goal</p>
                                </li>
                                <li>
                                    <h5>32</h5>
                                    <p>Days Left</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="projects_one_single projects_two_single">
                        <div class="projects_one_img">
                            <img src="assets/images/project/projects_one-img-3.jpg" alt="">
                            <div class="project_one_icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="projects_one_content">
                            <div class="porjects_one_text">
                                <p><span>by</span> Kevin Martin</p>
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in
                                        Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                              data-stop="86">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="projects_categories">
                                <div class="projects_categories_left">
                                    <div class="left_icon">
                                        <img src="assets/images/project/folder-icon.png" alt="">
                                    </div>
                                    <div class="left_text">
                                        <p>Health & Fitness</p>
                                    </div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text">
                                        <p>United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="projects_one_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>$22,600</h5>
                                    <p>Pledged</p>
                                </li>
                                <li>
                                    <h5>$47,300</h5>
                                    <p>Goal</p>
                                </li>
                                <li>
                                    <h5>32</h5>
                                    <p>Days Left</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="projects_one_single projects_two_single">
                        <div class="projects_one_img">
                            <img src="assets/images/project/projects_2-img-1.jpg" alt="">
                            <div class="project_one_icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="projects_one_content">
                            <div class="porjects_one_text">
                                <p><span>by</span> Kevin Martin</p>
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in
                                        Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                              data-stop="86">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="projects_categories">
                                <div class="projects_categories_left">
                                    <div class="left_icon">
                                        <img src="assets/images/project/folder-icon.png" alt="">
                                    </div>
                                    <div class="left_text">
                                        <p>Health & Fitness</p>
                                    </div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text">
                                        <p>United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="projects_one_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>$22,600</h5>
                                    <p>Pledged</p>
                                </li>
                                <li>
                                    <h5>$47,300</h5>
                                    <p>Goal</p>
                                </li>
                                <li>
                                    <h5>32</h5>
                                    <p>Days Left</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="projects_one_single projects_two_single">
                        <div class="projects_one_img">
                            <img src="assets/images/project/projects_2-img-2.jpg" alt="">
                            <div class="project_one_icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="projects_one_content">
                            <div class="porjects_one_text">
                                <p><span>by</span> Kevin Martin</p>
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in
                                        Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                              data-stop="86">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="projects_categories">
                                <div class="projects_categories_left">
                                    <div class="left_icon">
                                        <img src="assets/images/project/folder-icon.png" alt="">
                                    </div>
                                    <div class="left_text">
                                        <p>Health & Fitness</p>
                                    </div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text">
                                        <p>United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="projects_one_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>$22,600</h5>
                                    <p>Pledged</p>
                                </li>
                                <li>
                                    <h5>$47,300</h5>
                                    <p>Goal</p>
                                </li>
                                <li>
                                    <h5>32</h5>
                                    <p>Days Left</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="projects_one_single projects_two_single">
                        <div class="projects_one_img">
                            <img src="assets/images/project/projects_2-img-3.jpg" alt="">
                            <div class="project_one_icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="projects_one_content">
                            <div class="porjects_one_text">
                                <p><span>by</span> Kevin Martin</p>
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in
                                        Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                              data-stop="86">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="projects_categories">
                                <div class="projects_categories_left">
                                    <div class="left_icon">
                                        <img src="assets/images/project/folder-icon.png" alt="">
                                    </div>
                                    <div class="left_text">
                                        <p>Health & Fitness</p>
                                    </div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text">
                                        <p>United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="projects_one_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>$22,600</h5>
                                    <p>Pledged</p>
                                </li>
                                <li>
                                    <h5>$47,300</h5>
                                    <p>Goal</p>
                                </li>
                                <li>
                                    <h5>32</h5>
                                    <p>Days Left</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--manage One Start-->
    <section class="manage_one" style="background-image: url(assets/images/resources/manage-one-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="manage_one_content">
                        <div class="manage_one_text">
                            <h2>Manage And Diversify Your<br>Portfolio In Few Clicks</h2>
                        </div>
                        <div class="manage_one_btn">
                            <a href="#" class="thm-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Bx Testimonial Two-->
    <section class="bx-testimonial2">
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="bx_testimonial_slider">
                        <div class="row">
                            <div class="col-xl-2">
                                <div class="slider-pager">
                                    <ul class="thumb-box list-unstyled text-center">
                                        <li>
                                            <a class="active" data-slide-index="0" href="#">
                                                <div class="img-holder">
                                                    <img src="assets/images/testimonials/bx-testi-1.png" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="1" href="#">
                                                <div class="img-holder">
                                                    <img src="assets/images/testimonials/bx-testi-2.png" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="2" href="#">
                                                <div class="img-holder">
                                                    <img src="assets/images/testimonials/bx-testi-3.png" alt="">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xl-10">
                                <ul class="slider-content clearfix bxslider list-unstyled">
                                    <li>
                                        <div class="bx_testimonial_single clearfix">
                                            <div class="bx_img_box">
                                                <img src="assets/images/testimonials/bx-testimonial-2.jpg" alt="">
                                                <div class="bx_quote_icon"><i class="fas fa-quote-left"></i></div>
                                            </div>
                                            <div class="bx_text_box">
                                                <p>This is due to their excellent service, competitive pricing and
                                                    customer support. It’s throughly refresing get such a personal
                                                    touch. Duis aute irure dolor in repreh enderit in voluptate
                                                    velit esse cillum eu fugiat nulla pariatur.</p>
                                                <h4>Mike Hardson . <span>Customer</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bx_testimonial_single clearfix">
                                            <div class="bx_img_box">
                                                <img src="assets/images/testimonials/bx-testimonial-1.jpg" alt="">
                                                <div class="bx_quote_icon"><i class="fas fa-quote-left"></i></div>
                                            </div>
                                            <div class="bx_text_box">
                                                <p>This is due to their excellent service, competitive pricing and
                                                    customer support. It’s throughly refresing get such a personal
                                                    touch. Duis aute irure dolor in repreh enderit in voluptate
                                                    velit esse cillum eu fugiat nulla pariatur.</p>
                                                <h4>Mike Hardson . <span>Customer</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bx_testimonial_single clearfix">
                                            <div class="bx_img_box">
                                                <img src="assets/images/testimonials/bx-testimonial-3.jpg" alt="">
                                                <div class="bx_quote_icon"><i class="fas fa-quote-left"></i></div>
                                            </div>
                                            <div class="bx_text_box">
                                                <p>This is due to their excellent service, competitive pricing and
                                                    customer support. It’s throughly refresing get such a personal
                                                    touch. Duis aute irure dolor in repreh enderit in voluptate
                                                    velit esse cillum eu fugiat nulla pariatur.</p>
                                                <h4>Mike Hardson . <span>Customer</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Brand two Start-->
    <div class="brand-one brand-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-one-carousel owl-carousel">
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-1.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-2.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-3.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-4.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-5.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-1.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-2.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-3.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-4.png" alt="brand"></a>
                        </div>
                        <div class="single_brand_item">
                            <a href="#"><img src="assets/images/brand/brand-2-img-5.png" alt="brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Imaginative Start-->
    <section class="imaginative">
        <div class="imaginative_bg_map"
             style="background-image: url(assets/images/resources/imaginative-bg-map.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="imaginative_left">
                        <div class="block-title text-left">
                            <div class="block_title_icon">
                                <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                            </div>
                            <p>Discover More Now</p>
                            <h3>Imaginative Tech<br>Before it Hits the<br>Mainstream</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="imaginative_right">
                        <div class="imaginative_text">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour. or randomised words which
                                don't look even slightly believable.</p>
                        </div>
                        <div class="imaginative_img_box">
                            <div class="imaginative_image">
                                <img src="assets/images/resources/imaginative-img.jpg" alt="">
                            </div>
                            <div class="imaginative_content">
                                <h4>Discover the best and brightest<br>projects on Jitsin.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Three Icon Boxes Start-->
    <section class="three_icon_boxes">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <!--Three Icon Boxes single-->
                    <div class="three_icon_boxes_single wow fadeInUp" data-wow-delay="0ms"
                         data-wow-duration="1200ms">
                        <div class="three_icon_box">
                            <span class="icon-target"></span>
                        </div>
                        <h3>Our Mission</h3>
                        <p>There are many variations of passages of lorem ipsum but the majority.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!--Three Icon Boxes single-->
                    <div class="three_icon_boxes_single wow fadeInUp" data-wow-delay="200ms"
                         data-wow-duration="1200ms">
                        <div class="three_icon_box">
                            <span class="icon-team"></span>
                        </div>
                        <h3>Our Community</h3>
                        <p>There are many variations of passages of lorem ipsum but the majority.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!--Three Icon Boxes single-->
                    <div class="three_icon_boxes_single wow fadeInUp" data-wow-delay="400ms"
                         data-wow-duration="1200ms">
                        <div class="three_icon_box">
                            <span class="icon-mission"></span>
                        </div>
                        <h3>Our History</h3>
                        <p>There are many variations of passages of lorem ipsum but the majority.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Back The Project Start-->
    <section class="back_the_project">
        <div class="back_the_project_shape-1"><img src="assets/images/shapes/back-the-project-shape-1.png" alt="">
        </div>
        <div class="back_the_project_left"
             style="background-image: url(assets/images/resources/back_the_project-img.jpg)">
            <div class="back_the_project_left_content">
                <div class="back_the_project_left_icon">
                    <img src="assets/images/resources/back_the_project_icon.png" alt="">
                </div>
                <div class="back_the_project_left_text">
                    <p>Best Place to Start the Hunt for Something New</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="back_the_projects_right">
                        <div class="thm_section_title_two">
                            <div class="sec__title_icon">
                                <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                            </div>
                            <h2>Back the Project<br>Take the Ride</h2>
                        </div>
                        <div class="back_the_projects_text">
                            <p>We inspire and help our customers expand their markets there are many variations of
                                passages of available but majority have suffer alteration in some area that is not
                                form by injected.</p>
                        </div>
                        <div class="back-the_projects_btn">
                            <a href="#" class="thm-btn">Explore Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--How We Work Start-->
    <section class="how_we_works">
        <div class="container">
            <div class="block-title text-center">
                <div class="block_title_icon">
                    <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                </div>
                <p>Getting Started is Easy</p>
                <h3>Few Easy Steps</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="steps_list list-unstyled">
                        <li>
                            <div class="steps_circle">01</div>
                            <div class="step_counter">
                                <h6>Step 01</h6>
                                <p>Create Your Project Page and Get Instantly Verified.</p>
                            </div>
                        </li>
                        <li>
                            <div class="steps_circle">02</div>
                            <div class="step_counter">
                                <h6>Step 02</h6>
                                <p>Begin Crowdfunding and Get Pledges from the Community.</p>
                            </div>
                        </li>
                        <li>
                            <div class="steps_circle">03</div>
                            <div class="step_counter">
                                <h6>Step 03</h6>
                                <p>Success! Get Funded and Make your Project Happen.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Blog Two Start-->
    <section class="blog_two">
        <div class="container">
            <div class="block-title text-center">
                <div class="block_title_icon">
                    <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                </div>
                <p>Latest News & Articles</p>
                <h3>From the Blog</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog_two_carousel owl-theme owl-carousel">
                        <!--Blog Two single-->
                        <div class="blog_tow_single wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="blog_two_img">
                                <img src="assets/images/blog/blog-2-img-1.jpg" alt="">
                            </div>
                            <div class="blog_two_content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_two_title">
                                    <h3><a href="news-detail.html">7 Days Itinerary Discovering<br>Elba Island</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two single-->
                        <div class="blog_tow_single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="blog_two_img">
                                <img src="assets/images/blog/blog-2-img-2.jpg" alt="">
                            </div>
                            <div class="blog_two_content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_two_title">
                                    <h3><a href="news-detail.html">7 Days Itinerary Discovering<br>Elba Island</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two single-->
                        <div class="blog_tow_single">
                            <div class="blog_two_img">
                                <img src="assets/images/blog/blog-2-img-1.jpg" alt="">
                            </div>
                            <div class="blog_two_content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_two_title">
                                    <h3><a href="news-detail.html">7 Days Itinerary Discovering<br>Elba Island</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two single-->
                        <div class="blog_tow_single">
                            <div class="blog_two_img">
                                <img src="assets/images/blog/blog-2-img-2.jpg" alt="">
                            </div>
                            <div class="blog_two_content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_two_title">
                                    <h3><a href="news-detail.html">7 Days Itinerary Discovering<br>Elba Island</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two single-->
                        <div class="blog_tow_single">
                            <div class="blog_two_img">
                                <img src="assets/images/blog/blog-2-img-1.jpg" alt="">
                            </div>
                            <div class="blog_two_content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_two_title">
                                    <h3><a href="news-detail.html">7 Days Itinerary Discovering<br>Elba Island</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!--Blog Two single-->
                        <div class="blog_tow_single">
                            <div class="blog_two_img">
                                <img src="assets/images/blog/blog-2-img-2.jpg" alt="">
                            </div>
                            <div class="blog_two_content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_two_title">
                                    <h3><a href="news-detail.html">7 Days Itinerary Discovering<br>Elba Island</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--CTA Two Start-->
    <section class="cta_two" style="background-image: url(assets/images/resources/cta_two_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="cta-two_left">
                        <h2>Get the Crowdfunding Field Guide</h2>
                        <p>Not sure how to begin? Our handy guide walks you through every step of a successful
                            project, from planning your launch to post-campaign.</p>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="cta_two_right">
                        <form class="cta_two_form">
                            <div class="input_box">
                                <input type="text" name="name" placeholder="Your name">
                            </div>
                            <div class="input_box">
                                <input type="email" name="email" placeholder="Email address">
                            </div>
                            <button type="submit" class="thm-btn cta_sign_up">Sign Up Now</button>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">


        <div class="container-fluid">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner text-md-center">
                    <div class="carousel-item active">


                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                                    <h1 data-aos="fade-up">Покупайте новинки по себестоимости</h1>
                                    <h2 data-aos="fade-up" data-aos-delay="400">на предпродажах</h2>
                                    <div data-aos="fade-up" data-aos-delay="800">
                                        <a href="#features" class="btn-get-started scrollto">Наш Магазин</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                                    <img src="assets/img/hero-img-4.png" class="img-fluid animated" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="carousel-item">


                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                                    <h1 data-aos="fade-up">Краудфандинг</h1>
                                    <h2 data-aos="fade-up" data-aos-delay="400">теперь в Узбекистане</h2>
                                    <div data-aos="fade-up" data-aos-delay="800">
                                        <a href="#features" class="btn-get-started scrollto">Проекты</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                                    <img src="assets/img/hero-img-2.png" class="img-fluid animated" alt="">
                                </div>
                            </div>
                        </div>







                    </div>
                    <div class="carousel-item">



                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                                    <h1 data-aos="fade-up">Протестируйте ваш</h1>
                                    <h2 data-aos="fade-up" data-aos-delay="400">MVP</h2>
                                    <div data-aos="fade-up" data-aos-delay="800">
                                        <a href="#features" class="btn-get-started scrollto">Добавить Проект</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                                    <img src="assets/img/hero-img-3.png" class="img-fluid animated" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
                    <span class="sr-only">Предыдущий</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
                    <span class="sr-only">Следующий</span>
                </a>
            </div>

        </div>





    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-9.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-9.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-9.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Категории</h2>
                    <p>Какие сферы доступны сейчас?</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="bx bx-shape-polygon" style="color: #ffbb2c;"></i>
                            <h3><a href="">Наука и технологии</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bx bxs-florist" style="color: #5578ff;"></i>
                            <h3><a href="">Сельское хозяйство</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bx bx-camera-movie" style="color: #e80368;"></i>
                            <h3><a href="">Театр, Анимация и Кино</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Мода и дизайн</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bx-book-alt" style="color: #47aeff;"></i>
                            <h3><a href="">Образование</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bxl-blogger" style="color: #ffa76e;"></i>
                            <h3><a href="">СМИ и Блогинг</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bx-money" style="color: #11dbcf;"></i>
                            <h3><a href="">Стартап</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bxs-binoculars" style="color: #4233ff;"></i>
                            <h3><a href="">Туризм и Развлечения</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bx-pen" style="color: #b2904f;"></i>
                            <h3><a href="">Литература</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bxs-basketball" style="color: #b20969;"></i>
                            <h3><a href="">Здоровье и фармакология</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bx-laptop" style="color: #ff5828;"></i>
                            <h3><a href="">Информационные технологии</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="bx bx-game" style="color: #29cc61;"></i>
                            <h3><a href="">Игровая индустрия</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Проекты</h2>
                    <p>Реализуйте ваши идеи и поддержите других.</p>
                </div>

                <!--  <div class="row">
                   <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                       <div class="icon"><i class="bx bxl-dribbble"></i></div>
                       <h4 class="title"><a href="">КРЕАТИВНАЯ ИДЕЯ</a></h4>
                       <p class="description">У вас есть отличная идея, которую вы знаете как осуществить?</p>
                     </div>
                   </div>

                   <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                       <div class="icon"><i class="bx bx-file"></i></div>
                       <h4 class="title"><a href="">ИННОВАЦИОННАЯ РАЗРАБОТКА</a></h4>
                       <p class="description">Вы создали новую технику, которая может облегчить жизнь людям?</p>
                     </div>
                   </div>

                   <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                       <div class="icon"><i class="bx bx-tachometer"></i></div>
                       <h4 class="title"><a href="">ТВОРЧЕСТВО</a></h4>
                       <p class="description">Создаёте шедевры искусства или литературы?</p>
                     </div>
                   </div>

                   <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                     <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                       <div class="icon"><i class="bx bx-world"></i></div>
                       <h4 class="title"><a href="">ПРЕДПРОДАЖИ</a></h4>
                       <p class="description">Хотите провести маркетинговое исследование на рынке?</p>
                     </div>
                   </div>

                 </div> -->

            </div>
        </section><!-- End Services Section -->

        <!-- ======= More Services Section ======= -->
        <section id="more-services" class="more-services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card" style='background-image: url("assets/img/more-services-5.png");' data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">VeloCITY</a></h5>
                                <p class="card-text">Инновационная арт-студия велосипедов, самокатов и скейтбордов.</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Подробнее</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="card" style='background-image: url("assets/img/more-services-6.png");' data-aos="fade-up" data-aos-delay="200">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Rendez-Vous</a></h5>
                                <p class="card-text">Полит-экономический клуб "Рандеву" - это социальный проект направленный на улучшение знаний людей по экономике и политике.</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Подробнее</a></div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="col-md-6 d-flex align-items-stretch mt-4">
                      <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                          <h5 class="card-title"><a href="">Nive Lodo</a></h5>
                          <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                          <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                      <div class="card" style='background-image: url("assets/img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body">
                          <h5 class="card-title"><a href="">Pale Treda</a></h5>
                          <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                          <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                        </div>
                      </div>
                    </div> -->
                    <a href="all-projects.php" class="btn-learn-more mx-auto">Все проекты</a>
                </div>

            </div>
        </section><!-- End More Services Section -->


        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials section-bg">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Отзывы</h2>
              <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

            </div>

          </div>
        </section> --><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="portfolio" class="portfolio">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Portfolio</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">App</li>
                  <li data-filter=".filter-card">Card</li>
                  <li data-filter=".filter-web">Web</li>
                </ul>
              </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                      <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section> --><!-- End Portfolio Section -->


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about text-center">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>О Нас</h2>
                </div>

                <div class="row content">
                    <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                      <p>
                        Мы, краудфандинговая платформа YOWA, которая одним из первых в Узбекистане предоставляет услуги народного финансирования.
                      </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                      </ul>
                    </div> -->
                    <div class="col-lg-12 mx-auto pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            Мы, краудфандинговая платформа YOWA, которая одним из первых в Узбекистане предоставляет услуги народного финансирования.
                        </p>
                        <a href="#" class="btn-learn-more mx-auto">Узнать Больше</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
          <div class="container">

            <div class="row">
              <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
              </div>

              <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                <div class="content d-flex flex-column justify-content-center">
                  <div class="row">
                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="icofont-simple-smile"></i>
                        <span data-toggle="counter-up">65</span>
                        <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                      </div>
                    </div>

                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="icofont-document-folder"></i>
                        <span data-toggle="counter-up">85</span>
                        <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                      </div>
                    </div>

                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="icofont-clock-time"></i>
                        <span data-toggle="counter-up">12</span>
                        <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                      </div>
                    </div>

                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box">
                        <i class="icofont-award"></i>
                        <span data-toggle="counter-up">15</span>
                        <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!- End .content->
              </div>
            </div>

          </div>
        </section> --><!-- End Counts Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Команда</h2>
                    <p>Если вам нравится то, что мы делаем и хотите внести свой вклад, то присоединяйтесь в нашу команду.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mx-auto">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/team-7.png" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Хусниддинхужа Абдурахимов</h4>
                                <span>CEO and IT Director</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mx-auto">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Элдор Рузиев</h4>
                                <span>CEO and Good Boy</span>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                      <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                          <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                          <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                          </div>
                        </div>
                        <div class="member-info">
                          <h4>William Anderson</h4>
                          <span>CTO</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                      <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                          <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                          <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                          </div>
                        </div>
                        <div class="member-info">
                          <h4>Amanda Jepson</h4>
                          <span>Accountant</span>
                        </div>
                      </div>
                    </div> -->

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing">
          <div class="container">

            <div class="section-title">
              <h2>Pricing</h2>
              <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
            </div>

            <div class="row">

              <div class="col-lg-4 col-md-6">
                <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                  <h3>Free</h3>
                  <h4><sup>$</sup>0<span> / month</span></h4>
                  <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li class="na">Pharetra massa</li>
                    <li class="na">Massa ultricies mi</li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Buy Now</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                  <h3>Business</h3>
                  <h4><sup>$</sup>19<span> / month</span></h4>
                  <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li>Pharetra massa</li>
                    <li class="na">Massa ultricies mi</li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Buy Now</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                  <h3>Developer</h3>
                  <h4><sup>$</sup>29<span> / month</span></h4>
                  <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li>Pharetra massa</li>
                    <li>Massa ultricies mi</li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="#" class="btn-buy">Buy Now</a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section> --><!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Часто Задаваемые Вопросы</h2>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Что такое краудфандинг?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Краудфандинг - это народное финансирование идей и проектов.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Чем отличается краудфандинг от традиционной благотворительности?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Краудфандинг отличается от традиционного пожертвования денег тем, что в краудфандинге предусмотрены вознаграждения за поддержку проекта от авторов.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Зачем YoWa стартапам?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            YoWa может послужить отличным инструментом для проведения анализа рынка, выявления проблем, сплочения членов команды и для того, чтобы объявить о себе миру. Все сферы подробно расписаны в КАТЕГОРИЯХ.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Зачем YoWa инвесторам(населению)?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Все пользователи YoWa смогут первыми узнавать об инновационных идеях, новинках рынка и самое главное своей активностью поддержать их и получить креативные подарки.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Как создать свой проект на YoWa?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            О том, как подготовить свой проект к публикации на платформе YoWa можете прочитать в разделе КРАУДФАНДЕР.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Связаться С Нами</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>YoWa</h3>
                            <p>Мы предоставим индивидуальный подход к каждому проекту и поможем со всеми возникающими в процессе вопросами. Пишите, но лучше звоните.</p>
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>Tashkent<br>Republic of Uzbekistan</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>we@yourway.cf</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+998 90 351 20 14</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ваше Имя" data-rule="minlen:4" data-msg="Пожалуйста, введите не менее 4 символов." />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Ваш Email" data-rule="email" data-msg="Пожалуйста, введите действительный адрес электронной почты." />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема" data-rule="minlen:4" data-msg="Пожалуйста, введите не менее 8 символов темы." />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Ваше Сообщение" placeholder="Сообщение"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Загрузка...</div>
                                <div class="error-message">Ошибка.</div>
                                <div class="sent-message">Ваше сообщение отправлено. Спасибо!</div>
                            </div>
                            <div class="text-center"><button type="submit">Отправить Сообщение</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

@endsection