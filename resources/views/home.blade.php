@extends('layouts.user')

@section('head')

    <title>Главная | YoWa</title>
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
            <div class="slide-item" style="background: white;">
                <div class="image-layer" style="background-image: url(assets/img/hero-img-4.png);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="big_text">
                                    <h2>Покупайте Новинки По <br>Себестоимости</h2>
                                </div>
                                <div class="link-box">
                                    <a href="/projects" class="thm-btn">Проекты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item" style="background: white;">
                <div class="image-layer" style="background-image: url(assets/img/hero-img-2.png);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="big_text">
                                    <h2>Краудфандинг Теперь<br>в Узбекистане <br></h2>
                                </div>
                                <div class="link-box">
                                    <a href="" class="thm-btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="slide-item" style="background: white;">
                <div class="image-layer" style="background-image: url(assets/img/hero-img-3.png);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="big_text">
                                    <h2>Протестируйте ваш <br>MVP</h2>
                                </div>
                                <div class="link-box">
                                    <a href="/create-project" class="thm-btn">Создать Проект</a>
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
                            <img src="storage/assets/img/yowaWhite.png" width="70px" alt="">
                        </div>
                        <div class="create_own_text mr-2">
                            <h2>Давай созададим <br>проект мечты<br>вместе</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="create_own_right_content">
                        <div class="create_own_video_box h-100">
                            <img src="storage/assets/img/video.png" alt="">
                            <div class="create_own_video_btn">
                                <a href="https://www.youtube.com/watch?v=7BPCnUhGKAA" class="video-popup"><i
                                            class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="create_own_text">
                            <p><span>Осуществи мечту</span> создай проект своей мечты, мы тебе поможем</p> <br>
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
                <p>Проекты Которые Вы Можете Поддержать</p>
                <h3>Обзор Проектов</h3>
            </div>
            <div class="row">
                @foreach($projects as $project)
                <div class="col-xl-4 col-lg-6">
                    <div class="projects_one_single projects_two_single">
                        <div class="projects_one_img">
                            <img src="{{asset('/storage/'.$project->main_image)}}" alt="">
                            <div class="project_one_icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="projects_one_content">
                            <div class="porjects_one_text">
                                <?php
                                    $creator = DB::table("users")->where("id","=",$project->creator_id)->get();
                                ?>

                                    @foreach($creator as $val)
                                        <p><a href="/user/profile/{{$val->id}}"><span>Создал:</span> {{$val->name}}</a></p>
                                    @endforeach
                                <h3><a href="/projects/view/{{$project->id}}">{{$project->name}}</a></h3>

                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box counted">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <?php 
                                                    $temp=0;
                                                    if ((int)($project->price)==0){ $temp=1;}
                                                    ?>
                                                    <span class="count-text" data-speed="3000" data-stop="{{((int)$project->pledged*100)/((int)$project->price+$temp)}}">{{((int)$project->pledged*100)/((int)$project->price+$temp)}}</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="{{((int)$project->pledged *100)/((int)$project->price+$temp)}}" style="width: {{((int)$project->pledged *100)/((int)$project->price+$temp)}}%;"></div>
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
                                    <div class="left_text"><p>{{$project->category}}</p></div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_text"><p>{{$project->region}}</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="projects_one_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>${{$project->pledged}}</h5>
                                    <p>Собрано</p>
                                </li>
                                <li>
                                    <h5>${{$project->price}}</h5>
                                    <p>Цель</p>
                                </li>
                                <li>
                                    <h5>{{(int)date('d ',(strtotime($project->deadline)-time()-86400))}} <?php if(((int)date('d ',(strtotime($project->deadline)-time()-86400)))==1){echo "день";} else {echo "дней";} ?></h5>
                                    <p>Осталось</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
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
                            <h2>Подарите Жизнь Своей Идее<br>За Несколько Кликов</h2>
                        </div>
                        <div class="manage_one_btn">
                            <a href="/create-project" class="thm-btn">Создать Проект</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Bx Testimonial Two-->
    <!--<section class="bx-testimonial2">
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
    </section>-->

    <!--Brand two Start-->
    <!--<div class="brand-one brand-two">
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
    </div>-->

    <!--Imaginative Start-->
    <section class="imaginative">
        <div class="imaginative_bg_map"
             style="background-image: url(assets/images/resources/imaginative-bg-map.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="imaginative_left">
                        <div class="block-title text-left">
                            <div class="block_title_icon">
                                <img src="assets/images/icon/sec__title_two_icon.png" alt="">
                            </div>
                            <p>Открывайте Ещё Больше</p>
                            <h3>Технологии Воображения До Того, Как Они Станут Популярными</h3>
                        </div>
                    </div>
                </div>
                <!--<div class="col-xl-6">
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
                </div>-->
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
                        <h3>Наша Миссия</h3>
                        <p>Помогать реализовать желания и идеи людей. Развивать наш мир вместе.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!--Three Icon Boxes single-->
                    <div class="three_icon_boxes_single wow fadeInUp" data-wow-delay="200ms"
                         data-wow-duration="1200ms">
                        <div class="three_icon_box">
                            <span class="icon-team"></span>
                        </div>
                        <h3>Наше Сообщество</h3>
                        <p>Энтузиасты, предприниматели и люди которые стремятся к новому.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!--Three Icon Boxes single-->
                    <div class="three_icon_boxes_single wow fadeInUp" data-wow-delay="400ms"
                         data-wow-duration="1200ms">
                        <div class="three_icon_box">
                            <span class="icon-mission"></span>
                        </div>
                        <h3>Наша История</h3>
                        <p>Наша история только начинается. Всё ещё впереди...</p>
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
                    <p>Лучшее место, чтобы начать охоту за чем-то новым</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="back_the_projects_right">
                        <div class="thm_section_title_two">
                            <div class="sec__title_icon">
                                <img src="assets/img/logo/yowaBlue.png" alt="">
                            </div>
                            <h2>Поддержите проект<br>Подарите Жизнь</h2>
                        </div>
                        <div class="back_the_projects_text">
                            <p>Мы вдохновляем наших клиентов и помогаем им расширять свои рынки, существует множество вариантов доступных проходов, но большинство из них претерпевают изменения в некоторых областях, которые не формируются путем внедрения.</p>
                        </div>
                        <div class="back-the_projects_btn">
                            <a href="#" class="thm-btn">Все Проекты</a>
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
                <p>Начните легко</p>
                <h3>За Несколько Лёгких Шагов</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="steps_list list-unstyled">
                        <li>
                            <div class="steps_circle">01</div>
                            <div class="step_counter">
                                <h6>Шаг 01</h6>
                                <p>Создайте страницу своего проекта и пройдите верификацию.</p>
                            </div>
                        </li>
                        <li>
                            <div class="steps_circle">02</div>
                            <div class="step_counter">
                                <h6>Шаг 02</h6>
                                <p>Начните краудфандинг и получите поддержку от сообщества.</p>
                            </div>
                        </li>
                        <li>
                            <div class="steps_circle">03</div>
                            <div class="step_counter">
                                <h6>Шаг 03</h6>
                                <p>Успех! Получите финансирование и сделайте свой проект успешным.</p>
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
                <p>Последние Новости & Публикации</p>
                <h3>С Нашего Блога</h3>
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
                        <h2>Получите краткое руководство по краудфандингу</h2>
                        <p>Не знаете, с чего начать? Наше удобное руководство проведет вас через каждый этап успешного проекта, от планирования запуска до завершения кампании.</p>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="cta_two_right">
                        <form class="cta_two_form">
                            <div class="input_box">
                                <input type="text" name="name" placeholder="Ваше Имя">
                            </div>
                            <div class="input_box">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <button type="submit" class="thm-btn cta_sign_up">Получить</button>
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