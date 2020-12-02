@extends('layouts.admin')

@section('content')

@foreach($product as $item)

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
                    <a href="/admin/products/edit/{{$item->id}}" class="text-dark"> edit products </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container border-dark bg-white h-75">
        <div class="catalogue-wrap-main flex">
            <div class="row">
                    <div class="col-lg-12 bg-light">
                        <h4 class="">
                        </h4>
                        <div class=" flex">
                                <img src="{{'/storage/'.$item->main_image}}" style="width:100%" alt="">
                      </div>
                        <div class="product-wrap-text">
                            <div class="product-name">
                                <h6>Name:</h6>
                                <p>{{$item->name}}</p>
                            </div>
                            <hr>
                            </div>
                        <div class="product-description">
                            <h6><b>prime status</b> </h6>
                            <p>{{$item->prime_status}} </p>
                        </div>
                        <hr>
                        <div class="product-description">
                            <h6><b>price</b> </h6>
                            <p>{{$item->price}} </p>
                        </div>
                        <hr>
                        <div class="product-description">
                            <h6><b>Description </b> </h6>
                            <p>{{$item->description}} </p>
                        </div>
                        <hr>
                    </div>
            </div>
        </div>
    </div>

                @endforeach
@endsection
