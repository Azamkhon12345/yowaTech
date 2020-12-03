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
                        @foreach($transactions as $item)
                        <div class="good-row">
                            <div class="gl">
                                <div class="good-info">
                                <?php
                                    $otherdata = json_decode($item->other_data,1);
                                    $sender = DB::table("users")->where("id","=",$item->user_id)->get();
                                    if ($item->user_id!=$item->receiver_id or $item->receiver_id!=NULL){
                                        $receiver = DB::table("users")->where("id","=",$item->receiver_id)->get();
                                    }else $receiver = $sender;
                                    ?>


                                    <span>

                                    @foreach($sender as $sender1)
                                        Sender: <a href="{{'/user/profile/'.$sender1->id}}">{{$sender1->name}} </a> ->
                                        @endforeach
                                    </span>
                                    <span>

                                    @foreach($receiver as $receiver1)
                                        Receiver: <a href="{{'/user/profile/'.$receiver1->id}}">{{$receiver1->name}} </a>
                                        @endforeach
                                    </span>
                                    <span>
                                        Purpose: {{$item->purpose}}
                                    </span>
                                </div>
                            </div>

                            <div class="gr">
                               @if($item->validation == 0)
                                   <div class="btn btn-block btn-warning w-100"><a href="/admin/transactions/{{$item->id}}">Не расмотренно !</a></div>
                                @else
                                   @if($item->validation == 1)
                                        <div class="btn btn-block btn-success w-100"><a href="/admin/transactions/{{$item->id}}">Одобрено</a></div>
                                    @else
                                        <div class="btn btn-block btn-danger w-100"><a href="/admin/transactions/{{$item->id}}">Не одобренно !</a></div>
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
