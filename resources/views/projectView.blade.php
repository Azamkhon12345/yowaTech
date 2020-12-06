@extends('layouts.user')
@section('head')
@foreach($project as $item)
<title>  {{$item->name}}  | YoWa</title>
@endforeach
    @endsection
@section('classExploreNav')
    current
    @endsection
@section('content')
@foreach($project as $item)
    <!--Project Details Top-->
    <section class="project_details_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_details_head">
                        <h3>{{$item->name}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="project_details_image">
                        <img src="{{asset("/storage/".$item->main_image)}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="project_details_right">
                        <div class="project_details_right_top">
                            <ul class="project_details_rate_list list-unstyled">
                                <li><span>${{$item->pledged}}</span>Собрано</li>
                                <li><span>60</span>Помогающих</li>
                            </ul>
                        </div>
                        <div class="progress-levels project_details_progress-levels">
                            <!--Skill Box-->
                            <div class="progress-box">
                                <div class="inner count-box">
                                    <div class="bar">
                                        <div class="bar-innner">
                                                <div class="skill-percent">
                                                    <?php 
                                                    $temp=0;
                                                    if ((int)($item->price)==0){ $temp=1;}
                                                    ?>
                                                    <span class="count-text" data-speed="3000" data-stop="{{((int)$item->pledged*100)/((int)$item->price+$temp)}}">{{((int)$item->pledged*100)/((int)$item->price+$temp)}}</span>
                                                    <span class="percent">%</span>
                                                </div>
                                                <div class="bar-fill" data-percent="{{((int)$item->pledged *100)/((int)$item->price+$temp)}}" style="width: {{((int)$item->pledged *100)/((int)$item->price+$temp)}}%;"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="projects_details_categories list-unstyled">
                            <li>
                                <div class="icon_box">
                                    <img src="{{asset("assets/images/project/folder-icon.png")}}" alt="">
                                </div>
                                <div class="content">
                                    <p>{{$item->category}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon_box">
                                    <img src="{{asset("assets/images/project/flag.png")}}" alt="">
                                </div>
                                <div class="content">
                                    <p>{{$item->region}}</p>
                                </div>
                            </li>
                        </ul>
                        <div class="projects_details_bottom">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>${{$item->pledged}}</h5>
                                    <p>Собрано</p>
                                </li>
                                <li>
                                    <h5>${{$item->price}}</h5>
                                    <p>Цель</p>
                                </li>
                                <li>
                                    <h5>{{(int)date('d ',(strtotime($item->deadline)-time()-86400))}} <?php if(((int)date('d ',(strtotime($item->deadline)-time()-86400)))==1){echo "день";} else {echo "дней";} ?></h5>
                                    <p>Осталось</p>
                                </li>
                            </ul>
                        </div>
                        <div class="project_details_btn_box">
                            <button type="button" class="thm-btn back_this_project_btn" data-toggle="modal" data-target="#pocket">Помочь</button>
                            @if(Auth::check() && Auth::user()->id == $item->creator_id)
                            <a href="/project/{{$item->id}}/edit" class="thm-btn back_this_project_btn">Изменить</a>
                            @endif
                        </div>
                        <div class="project_detail_share_box">
                            <div class="share_box_title">
                                <h2>Поделиться</h2>
                            </div>
                            <div class="project_detail__social">
                                <a href="#" class="tw-clr"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>
                                <a href="#" class="dr-clr"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="project_details_text_box">
                            <p><span>Всё или ничего</span>. Этот проект будет профинансирован, если достигнет цели до: {{date("d.m.Y",strtotime($item->deadline))}}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project_details_tab_box">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-tab-box tabs-box">
                        <ul class="tab-btns tab-buttons clearfix list-unstyled">
                            <li data-tab="#idea" class="tab-btn active-btn"><span>Идея Проекта</span></li>
                            <li data-tab="#faq" class="tab-btn"><span>Подарки</span></li>
                            <li data-tab="#update" class="tab-btn"><span>Новости</span></li>
                            <li data-tab="#comm" class="tab-btn"><span>Отзывы</span></li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="idea">
                                <div class="project_idea_details">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8">
                                            <div class="project_idea_details_content">
                                                {!! htmlspecialchars_decode(($item->description)) !!}
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="project_details_right_content">
                                                <?php
                                                    $user = DB::table('users')->where("id",'=',$item->creator_id)->get();
                                                ?>
                                                @foreach($user as $val)
                                                <div class="project_detail_creator">
                                                    <div class="project_detail_creator_image">
                                                        <img src="{{asset("/storage/".$val->avatar)}}" alt="">
                                                    </div>
                                                    <div class="creator_info">
                                                        <a href="">
                                                            <h4>{{$val->name}}</h4>
                                                        </a>
                                                        <h5>{{$val->motto}}</h5>
                                                    </div>
                                                    <div class="project_detail_creator_text">
                                                        <p>
                                                            {{$val->aboutMe}}
                                                        </p>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                                <div class="project_detail_pledge">
                                                    <div class="title">
                                                        <h3>Pledge Without<br>A Reward</h3>
                                                    </div>
                                                    <div class="field">
                                                        <input type="text" placeholder="$ 10">
                                                    </div>
                                                    <div class="text">
                                                        <h4>Back it because you<br>believe in it.</h4>
                                                        <p>Support the project for no reward, just because it speaks to you.</p>
                                                    </div>
                                                    <div class="project_detail_btn">
                                                        <a href="#" class="thm-btn">Continue</a>
                                                    </div>
                                                </div>
                                                <div class="project_detail_rewards">
                                                    <h3>Pledge $50 or more</h3>
                                                    <p>Reward description goes here. Lorem ipsum dolor sit amet, piscing elit. Vivamus dictum congue nunc, sed interdum massa in.</p>
                                                    <div class="estimated_delivery_date">
                                                        <p>Estimated Delivery</p>
                                                        <h4>December, 2022</h4>
                                                    </div>
                                                    <ul class="project_detail_rewards_list list-unstyled">
                                                        <li><i class="far fa-user-circle"></i>4 Backers</li>
                                                        <li><i class="far fa-user-circle"></i>20 rewards left</li>
                                                    </ul>
                                                    <div class="project_detail_rewards_btn">
                                                        <a href="#" class="thm-btn">Select this Reward</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab" id="faq">
                                <div class="project_detail_faq">
                                    <div class="row">
                                 @foreach($rewards as $reward)
                                <div class="col-xl-6 col-lg-6">
                                    <div class="projects_one_single projects_two_single">
                                        <div class="projects_one_img">
                                            <img src="{{asset('/storage/'.$reward->main_image)}}" alt="">
                                            <div class="project_one_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="projects_one_content">
                                            <div class="porjects_one_text">
                                                <p><span>Название:</span> {{$reward->name}}</p>
                                                <h3><span>Цена:</span> {{$reward->price}}</a></h3>
                
                                            </div>
                                            <div class="projects_categories">
                                                
                                            </div>
                                        </div>
                                        <div class="projects_one_bottom">
                                            {!! htmlspecialchars_decode(($reward->description)) !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab" id="update">
                                <div class="project_detail_update">
                                    <div class="row">
                                        <?php
                                            $user = DB::table("users")->where('id','=',$item->creator_id)->get();
                                        ?>
                                        @foreach($updates as $update)
                                        <div class="col-xl-12">
                                            <div class="project_detail_update_single">
                                                <h4>#{{$update->id}} Новость</h4>
                                                <h3>{{$update->title}}</h3>
                                                @foreach($user as $val)
                                                <div class="person_detail_box">
                                                    <div class="person_detail_left_box">
                                                        <div class="person_detail_left_img">
                                                            <img src="{{asset("/storage/".$val->avatar)}}" alt="">
                                                        </div>
                                                        <div class="person_detail_left_content">
                                                            <h5>by <span>{{$val->name}}</span></h5>
                                                            <p>{{date('d F y ',strtotime($item->created_at))}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="person_detail_right_box">
                                                        <a href="/user/profile/{{$val->id}}" class="thm-btn creator_btn">Creator</a>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <p class="project_detail_update_first_text">{{$update->shortcut}}</p>
                                                <p class="project_detail_update_last_text">{!! htmlspecialchars_decode(($update->body)) !!}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tab" id="comm">
                                <div class="project_detail_comment_box">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="project_detail_comment_box_inner">
                                                <h3 class="project_detail_comment_title">Comments</h3>
                                                
                                                @foreach($comments as $comment)
                                                    <div class="project_detail_comment_single">
                                                        <div class="project_detail_comment_image">
                                                            @if($comment->creator_id==NULL)
                                                            <img src="{{asset("storage/assets/img/comment.png")}}" alt="">
                                                            @else
                                                            <?php 
                                                                $user = DB::table("users")->where('id','=',$comment->creator_id)->get();
                                                            ?>
                                                            @foreach($user as $val)
                                                            <img src="{{asset("storage/".$val->avatar)}}" alt="">
                                                            @endforeach
                                                            @endif
                                                        </div>
                                                        <div class="project_detail_comment_content">
                                                            <h3>{{$comment->author}}<span>{{$comment->created_at}}</span></h3>
                                                            <p>
                                                                {{$comment->body}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="project_detail_leave_comment__box">
                                                <h3 class="leave_comment__box_title">Leave a Comment</h3>
                                                <form class="project_detail_leave_comment__box_form" method="POST" action="/project/add/comment/{{$item->id}}">
                                                    @csrf
                                                    <div class="row">
                                                        @if(!Auth::check())
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <input type="text" name="name"
                                                                       placeholder="Full name" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <input type="email" name="email"
                                                                       placeholder="Email address" required="">
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <input type="text" name="name"
                                                                       value="{{Auth::user()->name}}" >
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-box">
                                                                    <textarea name="review" placeholder="Write review"
                                                                              required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="project_detail_leave_comm_btn">
                                                                <input type="submit" class="thm-btn" value="Коментировать">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <div class="modal fade" id="pocket" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Пожертвование проекту</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="/pocket/pledge/{{$item->id}}">
                    <div class="modal-body">
                        @csrf
                        <p>Вы должны сделать оплату по реквизитам ниже и ввести сумму оплаты и своей контакт для получения награждения в поля ниже.</p>
                        <hr>
                        <p>Реквизиты для оплаты:</p>
                        <p>UZCARD: 8600 0000 0000 0000</p>

                        <hr>
                        <div class="form-group">
                            <label for="donate-name" class="col-form-label">Фамилия и имя владельца карты:</label>
                            <input type="text" class="form-control" name="name" id="donate-name">
                        </div>
                        <div class="form-group">
                            <label for="donate-phone" class="col-form-label">Телефон:</label>
                            <input type="text" class="form-control" name="phone" id="donate-phone">
                        </div>
                        <div class="form-group">
                            <label for="donate-money" class="col-form-label">Сумма:</label>
                            <input type="text" class="form-control" name="cash" id="donate-money">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endforeach
@endsection