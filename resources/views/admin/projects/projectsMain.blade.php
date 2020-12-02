@extends('layouts.admin')

@section('content')
    <style>
        img{
            width: 100px;
            height: 100px;
        }
        .mytable{
            border: 10px dashed;
            width: 100%;
        }
        td{
            border: 3px solid;
        }
    </style>


    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <div>Projects
                    <div class="page-title-subheading">Здесь вы можете смотереть и проверять проекты.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=""> <!-- container -->
        <div class="">
            <div class="">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Проекты на сайте</h5>
                        <br>
                        <style>
                            .fullw {
                                width: 100% !important;
                            }
                            .catalogue-wrap-main{
                                width: 100%;
                            }
                            .catalogue-wrap-main .row{
                                width: 100%;
                            }
                            .good-row {
                                display: flex;
                                flex-wrap: wrap;
                                width: 100%;
                                justify-content: space-between;
                                border-bottom: 1px solid darkgrey;
                                padding-bottom: 10px;
                                margin-bottom: 10px;
                            }
                            .good-row .gl{
                                display: flex;
                                flex-wrap: wrap;
                            }
                            .good-row .gr{
                                margin-top: 15px;
                            }
                            .good-row .gr>*{
                                max-width: 85px;
                            }
                            .good-row .gr *{
                                width: 100%;
                            }
                            .good-row div>span{
                                display: block;
                                margin-bottom: 10px;
                            }
                            .good-info b{
                                font-weight: bold;
                            }
                            .img-div{
                                min-width: 150px;
                                max-width: 150px;
                                height: 150px;
                                margin-right: 15px;
                            }
                            .img-div img{
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }
                        </style>
                        @foreach($projects as $item)
                        <div class="good-row">
                            <div class="gl">
                                <div class="img-div">
                                    <img src="{{asset('/storage/'.$item->main_image)}}" alt="products image">
                                </div>
                                <div class="good-info">
                                    <span><h5><a href="{{'/admin/projects/view/'.$item->id}}">{{$item->name}}</a></h5></span>

                                    <span><b>Создано :</b> {{date('d F (H:i)',strtotime($item->created_at))}}</span>
                                </div>
                            </div>

                            <div class="gr">
                                @if($item->visible == 0)
                                    <a href="/admin/projects/view/{{$item->id}}"  class="mb-1 btn btn-warning text-capitalize">Не проверенно</a>
                                @else
                                    @if($item->visible == 1)
                                        <a href="/admin/projects/view/{{$item->id}}"  class="mb-1 btn btn-success text-capitalize">Опубликовано</a>
                                    @else
                                        @if($item->visible == 2)
                                            <a href="/admin/projects/view/{{$item->id}}"  class="mb-1 btn btn-danger text-capitalize">Отказано</a>
                                        @else
                                            @if($item->visible == 3)
                                                <a href="/admin/projects/view/{{$item->id}}"  class="mb-1 btn btn-warning text-capitalize">Нужны доработки</a>
                                            @endif
                                        @endif
                                    @endif
                                 @endif

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

    </div>
</div>
    @endsection
