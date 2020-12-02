@extends('layouts.user')
@section('content')
@foreach($user_data as $user)
    <div class="page-wrapper">
    <!--Crowdfunding Detail Two Start-->
    <div class="crowdfunding_detail crowdfunding_detail_two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="crowdfunding_text">
                        <h2 class="">{{$user->name}}<br><span>There  should be Motto</span></h2>
                        <p class="middle_text">About me : Many entrepreneurs are turning to crowdfunding to connect with the community and raise money for new ventures.</p>
                        <p class="bottom-text">profile created : {{date("d/m/Y",strtotime($user->created_at))}} // are many variations of passages of available, but the majority have suffered alteration in some form, by injected or randomised words which don't look even slightly. If you are going to use a passage of you need to be sure there isn't hidden in the middle of text. </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="crowdfunding_image wow slideInRight" data-wow-delay="100ms">
                        <img src="{{asset("assets/images/resources/crowdfunding_img-1.jpg")}}" alt="">
                        <div class="crowdfunding_image_shape"></div>
                        <div class="crowdfunding_bottom">
                            <h4>{{substr($user->name, 0, 1)}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crowdfunding_detail_two_border_bottom"></div>
        </div>
    </div>


        <section class="project_details_tab_box">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-tab-box tabs-box">
                            <ul class="tab-btns tab-buttons clearfix list-unstyled">
                                <li data-tab="#projects" class="tab-btn active-btn"><span>Проекты</span></li>
                                <li data-tab="#news" class="tab-btn"><span>Новости</span></li>
                                <li data-tab="#products" class="tab-btn"><span>Изделия</span></li>
                            </ul>
                            <div class="tabs-content">

                                <div class="tab active-tab" id="projects">
                                    <div class="project_idea_details">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="project_idea_details_content">
{{--                                                    {!! htmlspecialchars_decode(($item->description)) !!}--}}

                                        <section class="news_detail">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="news_detail_left">
                                                            <div class="comment-one">
                                                                <h3 class="comment-one__title"> USER PROJECTS</h3>
                                                @foreach($user_projects as $project)
                                                        <div class="comment-one__single">
                                                            <div class="comment-one__image">
                                                                <img src="{{asset("/storage/".$project->main_image)}}" alt="">
                                                            </div>
                                                            <div class="comment-one__content d-flex justify-content-between w-100">
                                                                <div>
                                                                    <h3>{{$user->name}} <span>deadline : {{date('d M',strtotime($project->deadline))}}</span></h3>
                                                                    <p>{{$project->shortcut}}</p>
                                                                </div>
                                                                <a href="/projects/view/{{$project->id}}" class="thm-btn comment-one__btn">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                                <div class="tab" id="news">
                                    <div class="project_detail_update">
                                        <div class="row">
{{--                                            <div class="col-xl-12">--}}
{{--                                                <div class="project_detail_update_single">--}}
{{--                                                    <h4>#1 Update</h4>--}}
{{--                                                    <h3>Wow! What an incredible first day!</h3>--}}
{{--                                                    <div class="person_detail_box">--}}
{{--                                                        <div class="person_detail_left_box">--}}
{{--                                                            <div class="person_detail_left_img">--}}
{{--                                                                <img src="{{asset("assets/images/project/project_detail_person-img-1.png")}}" alt="">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="person_detail_left_content">--}}
{{--                                                                <h5>by <span>Kevin Martin</span></h5>--}}
{{--                                                                <p>Jan 16, 2020</p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="person_detail_right_box">--}}
{{--                                                            <a href="#" class="thm-btn creator_btn">Creator</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <p class="project_detail_update_first_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate sed mauris vitae pellentesque. Nunc ut ullamcorper libero. Aenean fringilla mauris quis risus laoreet interdum. Quisque imperdiet orci in metus aliquam egestas. Fusce elit libero, imperdiet nec orci quis, convallis hendrerit nisl. Cras auctor nec purus at placerat.</p>--}}
{{--                                                    <p class="project_detail_update_last_text">Quisque consectetur, lectus in ullamcorper tempus, dolor arcu suscipit elit, id laoreet tortor justo nec arcu. Nam eu dictum ipsum. Morbi in mi eu urna placerat finibus a vel neque. Nulla in ex at mi viverra sagittis ut non erat. Praesent nec congue elit. Nunc arcu odio, convallis a lacinia ut, tristique id eros. Suspendisse leo erat, pellentesque et commodo vel, varius in felis. Nulla mollis turpis porta justo eleifend volutpat.</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="tab" id="products">
                                    <div class="project_detail_comment_box">
                                        <div class="row">
{{--                                            <div class="col-xl-12">--}}
{{--                                                <div class="project_detail_comment_box_inner">--}}
{{--                                                    <h3 class="project_detail_comment_title">2 Comments</h3>--}}
{{--                                                    <div class="project_detail_comment_single">--}}
{{--                                                        <div class="project_detail_comment_image">--}}
{{--                                                            <img src="{{asset("assets/images/project/comment-img-1.png")}}" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="project_detail_comment_content">--}}
{{--                                                            <h3>Kevin Martins<span>26 January, 2020</span></h3>--}}
{{--                                                            <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis. Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="project_detail_comment_single">--}}
{{--                                                        <div class="project_detail_comment_image">--}}
{{--                                                            <img src="{{asset("assets/images/project/comment-img-1.png")}}" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="project_detail_comment_content">--}}
{{--                                                            <h3>Kevin Martins<span>26 January, 2020</span></h3>--}}
{{--                                                            <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis. Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endforeach
@endsection