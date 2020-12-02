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
                <div>Заказы
                    <div class="page-title-subheading">Здесь вы можете добавлять, редактировать и удалять заказы.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
            </div>
        </div>
    </div>
    <div class=""> <!-- container -->
        <div class="">
            <div class="">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Заказы</h5>
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
                        @foreach($orders as $item)
                        <div class="good-row">
                            <div class="gl">
                                <div class="good-info">
                                <?php
                                    $products = json_decode($item->products,1);
                                    $contact = json_decode($item->user_data,1);
                                ?>
                                    @foreach($products as $key=>$temp)
                                        <span>
                                            <h5>
                                                <a href="{{'/admin/orders/view/'.$item->id}}">{{$contact['phone'] }} {{count($products)}} - quantity of products</a>
                                            </h5>
                                        </span>
                                        <span>
                                            {{$key}}. {{$temp['name']}} ( make link to product on market )
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                            <div class="gr">
                               @if($item->complete)
                                   <div class="btn btn-block btn-success w-100">Completed !</div>
                                @else
                                <form action="/admin/order/complete/{{$item->id}}" method="POST">
                                    @csrf
                                    <input type="submit" name="submit" class="btn btn-danger text-capitalize" value="not Completed !">
                                </form>
                               @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

    </div>
</div>
@endsection
