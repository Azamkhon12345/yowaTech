@extends('layouts.admin')

@section('content')

@foreach($news as $item)

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <div>Products
                    <div class="page-title-subheading">There you can add, edit or delete any product.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown btn btn-amber">
                    <a href="/admin/news/edit/{{$item->id}}" class="text-dark"> edit news </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container border-dark bg-white h-75">
        <div class="catalogue-wrap-main flex">
            <div class="row">

                <section class="product main-card mb-3 card">
                    <div class="card-body">
                        <h4 class="">
                        </h4>
                        <div class=" flex">
                                <img src="{{'/storage/'.$item->image}}" style="width:100%" alt="">
                      </div>
                        <div class="product-wrap-text">
                                <div class="product-name">
                                    <h6>Заголовок</h6>
                                    <p>{{$item->title}}</p>
                                </div>

                            </div>
                        <div class="product-description">
                                    <h6><b>Текст</b> </h6>
                                    <p>{!! htmlspecialchars_decode(($item->body)) !!} </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

                @endforeach
@endsection
