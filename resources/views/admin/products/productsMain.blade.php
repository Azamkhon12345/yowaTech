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
                <div>Products
                    <div class="page-title-subheading">Здесь вы можете добавлять, редактировать и удалять товары.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown btn btn-amber">
                        <a href="/admin/products/create" class=" mb-2 mr-2 btn-hover-shine btn btn-primary"> Создать товары</a>
                </div>
            </div>
        </div>
    </div>
    <div class=""> <!-- container -->
        <div class="">
            <div class="">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Продукты на сайте</h5>
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
                        @foreach($pages as $item)
                        <div class="good-row">
                            <div class="gl">
                                <div class="img-div">
                                    <img src="{{asset('/storage/'.$item->main_image)}}" alt="products image">
                                </div>
                                <div class="good-info">
                                    <span><h5><a href="{{'/admin/products/view/'.$item->id}}">{{$item->name}}</a></h5></span>

                                    <span></span>
                                </div>
                            </div>

                            <div class="gr">
                                <a href="/admin/products/edit/{{$item->id}}"  class="mb-1 btn btn-warning text-capitalize">Изменить</a>

                                <form action="/admin/products" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="{{$item->id}}" value="delete">
                                    <input type="submit" name="submit" class="btn btn-danger text-capitalize" value="удалить">
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

    </div>
</div>
    @endsection
