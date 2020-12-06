@extends('layouts.user')
@section('content')
<title>Проекты | YoWa</title>
    <!--Page Header Start-->
    <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-projects.jpg);">
        <div class="container">
            <h2>Все Проекты</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Главная</a></li>
                <li><span>Обзор</span></li>
            </ul>
        </div>
    </section>

    <!--Explore Projects One Start-->
    <section class="explorep_projects_one projects_two">
        <div class="container">
            <div class="row text-center">
                <form method="POST" action="" class="col-6">
                    @csrf
                    <div class="form-group row">
                        <label class="col-3">Категория: </label>
                        <select class="form-control col-5 ml-3" name="projectCategory">
                            <option value="all">Все Категории</option>
                      @foreach($categories as $category)
                         <option>{{$category->category}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary mb-2 col-3 ml-3">Выбрать</button>
                  </div>
  
                </form>
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

    <!--Cta Three Start-->
    <section class="cta_one cta_three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta_one_inner cta_three_inner wow fadeInUp animated animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="cta_one_left">
                            <h2>Готовы к сбору денег для проекта?</h2>
                        </div>
                        <div class="cta_one_right">
                            <a href="/create-project" class="thm-btn">Давайте сделаем это</a>
                        </div>
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