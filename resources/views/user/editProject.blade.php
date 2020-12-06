@extends('layouts.user')
@section('head')
    <title>Управление Проектом | YoWa"</title>

    <script src="{{ asset('/js/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
@endsection
@section('content')
@foreach($project as $item)
    <main class="mt-5 height-100vh">
        
    <section class="project_details_tab_box">
        <div class="container mt-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-tab-box tabs-box">
                            <ul class="tab-btns tab-buttons clearfix list-unstyled">
                                <li data-tab="#projects" class="tab-btn active-btn"><span>Изменить данные проекта</span></li>
                                <li data-tab="#pledge" class="tab-btn"><span>Управление подарками</span></li>
                                <li data-tab="#news" class="tab-btn"><span>Управление новостями</span></li>
                                <li data-tab="#comments" class="tab-btn"><span>Управление коментариями</span></li>
                            </ul>
                            <div class="tabs-content">

                                <div class="tab active-tab" id="projects">
                                    <div class="project_idea_details">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="container mb-4">
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <h3 class="h3 text-center">Изменить  Проект</h3>
                                                            <form action="" method="POST" enctype="multipart/form-data" class="border p-3">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label>Название проекта</label>
                                                                    <input type="text" name="projectName" class="form-control" value="{{$item->name}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Картинка</label>
                                                                    <input type="file" name="projectPhoto" class="form-control-file">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Коротко о проекте</label>
                                                                    <input type="text" name="projectShortcut" class="form-control" value="{{$item->shortcut}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Регион реализации</label>
                                                                    <input type="text" name="projectPlace" class="form-control" value="{{$item->region}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Категория</label>
                                                                    <select class="form-control" name="projectCategory" onselect="{{$item->category}}}">
                                                                        @foreach($categories as $category)
                                                                         <option>{{$category->category}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Финансовая цель</label>
                                                                    <input type="text" name="projectPrice" class="form-control" value="{{$item->price}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Срок окончания проекта</label>
                                                                    <input type="date" name="projectDeadline" class="form-control" value="{{$item->deadline}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Полное описание проекта</label>
                                                                    <textarea name="projectDescription" id="summary-ckeditor" class="form-control">
                                                                        {!! htmlspecialchars($item->description) !!}
                                                                    </textarea>
                                                                </div>
                                        
                                                                <div class="row">
                                                                    <div class="col-6"><div class="form-group form-check">
                                                                            <input type="checkbox" class="form-check-input">
                                                                            <label class="form-check-label">Согласен с <a href="/rules">условиями</a></label>
                                                                        </div></div>
                                                                    <div class="col-6 text-right"><button type="submit" class="btn btn-primary">Сохранить</button></div>
                                                                </div>
                                        
                                        
                                                            </form>
                                        
                                                        </div>
                                                    </div>
                                                </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                <div class="tab" id="news">
                                    <div class="project_detail_update">
                                        <div class="row">
                                           <div class="col-xl-12">
                                                
                                                <div class="col-3">
                                                    <a href="/project/{{$item->id}}/create/update" class="btn btn-info"> add update</a>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab" id="pledge">
                                    <div class="project_detail_comment_box">
                                        <div class="row">
                                                <div class="col-xl-12">
                                                    
                                                    <div class="">
                                                        <a href="/project/{{$item->id}}/create/pledge" class="btn btn-info"> add pledge</a>
                                                    </div>
                                                    
                                                            <div class="comment-one">
                                                @foreach($rewards as $reward)
                                                        <div class="comment-one__single">
                                                            <div class="comment-one__image">
                                                                <img src="{{asset("/storage/".$reward->main_image)}}" alt="">
                                                            </div>
                                                            <div class="comment-one__content d-flex justify-content-between w-100">
                                                                <div>
                                                                    <h3>{{$reward->name}} <span>цена : {{$reward->price}}</span></h3>
                                                                    @if($reward->visible == 0)
                                                                        <form action="/pledge/manage/{{$reward->id}}" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="visible" value="1">
                                                                            <input type="submit"  class="btn btn-info text-white" value="Сделать видимым для всех">
                                                                        </form>
                                                                    @else
                                                                    <form action="/pledge/manage/{{$reward->id}}" method="POST">
                                                                    @csrf
                                                                        <input type="hidden" name="visible" value="0">
                                                                        <input type="submit" class="btn btn-warning" value="Сделать невидимым для всех">
                                                                    </form>
                                                                    @endif
                                                                </div>
                                                                <a href="/projects/view/pledges/{{$reward->id}}" class="thm-btn comment-one__btn">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                               </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab" id="comments">
                                    <div class="project_detail_comment_box">
                                        <div class="row">
                                                <div class="col-xl-12">
                                                            <div class="comment-one">
                                                @foreach($comments as $comment)
                                                        <div class="comment-one__single">
                                                            <div class="comment-one__content d-flex justify-content-between w-100">
                                                                <div>
                                                                    <h3>{{$comment->author}} </h3>
                                                                    <p>
                                                                        Comment:
                                                                        {{$comment->body}}
                                                                    </p>
                                                                    
                                                                </div>
                                                                    @if($comment->visible == 0)
                                                                        <form action="/comment/manage/{{$comment->id}}" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="visible" value="1">
                                                                            <input type="submit"  class="btn btn-info text-white" value="Сделать видимым для всех">
                                                                        </form>
                                                                    @else
                                                                        <form action="/comment/manage/{{$comment->id}}" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="visible" value="0">
                                                                            <input type="submit" class="btn btn-warning" value="Сделать невидимым для всех">
                                                                        </form>
                                                                    @endif
                                                            </div>
                                                    </div>
                                                @endforeach
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
            </div>

        </section>
    </main>
@endforeach
    <script type="text/javascript">
        CKEDITOR.replace( 'summary-ckeditor', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection