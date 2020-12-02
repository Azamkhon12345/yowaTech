@extends('layouts.admin')

@section('content')
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
                                width: 100%;
                                justify-content: space-between;
                                border-bottom: 1px solid darkgrey;
                                padding-bottom: 10px;
                                margin-bottom: 10px;
                            }
                            .good-row .gl{
                                display: flex;
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
                                max-height: 150px;
                                margin-right: 15px;
                            }
                            .img-div img{
                                width: 100%;
                            }
                        </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <div>Категории
                    <div class="page-title-subheading">Тут вы сможете добавить, изменить и удалить категории.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown ">
                    <a href="/admin/category/create" class=" mb-2 mr-2 btn-hover-shine btn btn-primary"> Добавить категорию </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
@foreach($categories as $value)
        
         <div class="good-row bg-white p-3">
                            <div class="gl">
                                <div class="good-info">
                                    <span><h5>{{$value->category}}</h5></span>
                                    
                            <?php $a = json_decode($value->subcategory,true) ?>
                                    <span>
                                        @if($a != NULL)
                                    @foreach($a as $subcategory)
                                        {{$subcategory['subcategory']}} |
                                    @endforeach
                                    @endif
                                    </span>
                                </div>
                            </div>

                            <div class="gr">
                                <a href="{{url('/admin/category/edit/'.$value->id)}}"  class="mb-1 btn btn-warning text-capitalize">Изменить</a>

                                <form action="/admin/category/delete/{{$value->id}}" method="POST" class="d-inline">
                        @method('POST') @csrf
                        <input type="submit" name="{{$value->id}}" value="delete" class="btn btn-danger text-capitalize">
                    </form>
                            </div>
                        </div>
        
                @endforeach
        </div>

        <div class="pagination pagination-list flex">
        </div>
    </div>
    @endsection
