@extends('layouts.user')
@section('content')
    <!--Page Header Start-->
    <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">
        <div class="container">
            <h2>All Projects</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>Explore</span></li>
            </ul>
        </div>
    </section>

    <!--Explore Projects One Start-->
    <section class="explorep_projects_one projects_two">
        <div class="container">
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
                                        <p><a href="/user/profile/{{$val->id}}"><span>by</span> {{$val->name}}</a></p>
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
                                                    <span class="count-text" data-speed="3000" data-stop="86">86</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86" style="width: 86%;"></div>
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
                                    <p>Pledged</p>
                                </li>
                                <li>
                                    <h5>${{$project->price}}</h5>
                                    <p>Goal</p>
                                </li>
                                <li>
                                    <h5>{{date('d ',(time()-strtotime($project->deadline)))}}</h5>
                                    <p>Deadline</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
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
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box counted">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="86">86</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86" style="width: 86%;"></div>
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
                                    <div class="left_text"><p>Health &amp; Fitness</p></div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text"><p>United Kingdom</p></div>
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
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box counted">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="86">86</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86" style="width: 86%;"></div>
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
                                    <div class="left_text"><p>Health &amp; Fitness</p></div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text"><p>United Kingdom</p></div>
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
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box counted">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="86">86</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86" style="width: 86%;"></div>
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
                                    <div class="left_text"><p>Health &amp; Fitness</p></div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text"><p>United Kingdom</p></div>
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
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box counted">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="86">86</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86" style="width: 86%;"></div>
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
                                    <div class="left_text"><p>Health &amp; Fitness</p></div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text"><p>United Kingdom</p></div>
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
                                <h3><a href="project-details.html">Project Hive - Social Network<br>Space in Leicester</a></h3>
                            </div>
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box">
                                    <div class="inner count-box counted">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="86">86</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="86" style="width: 86%;"></div>
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
                                    <div class="left_text"><p>Health &amp; Fitness</p></div>
                                </div>
                                <div class="projects_categories_right">
                                    <div class="right_icon">
                                        <img src="assets/images/project/flag.png" alt="">
                                    </div>
                                    <div class="right_text"><p>United Kingdom</p></div>
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

    <!--Cta Three Start-->
    <section class="cta_one cta_three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta_one_inner cta_three_inner wow fadeInUp animated animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="cta_one_left">
                            <h2>Ready to raise funds for idea?</h2>
                        </div>
                        <div class="cta_one_right">
                            <a href="#" class="thm-btn">Let’s Make It Happen</a>
                        </div>
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