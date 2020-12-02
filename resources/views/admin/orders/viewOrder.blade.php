@extends('layouts.admin')

@section('content')

@foreach($order as $tmp)
    <?php
        $products = json_decode($tmp->products,1);
    ?>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>Order
                        <div class="page-title-subheading">
                            There list of orders.
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                </div>
            </div>
        </div>
            <div class="container border-dark bg-white h-75">
              <div class="catalogue-wrap-main flex">
            <div class="row">

                @foreach($products as $count => $item)
                    <div class="col-lg-12 bg-light">
                        <table>
                            <tr>
                                <td>
                                    <h4 class="">
                                        <a href="/admin/products/view/{{$item["id"]}}"></a> Product {{$count}}
                                    </h4></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="product-wrap-text">
                                        <div class="product-name">
                                            <h6>Name:</h6>
                                            <p>{{$item['name']}}</p>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="product-description">
                                        <h6><b>price:</b> </h6>
                                        <p>{{$item['price']}} </p>
                                    </div>
                                    <hr>
                                    <div class="product-description">
                                        <h6><b>quantity</b> </h6>
                                        <p>{{$item['quantity']}} </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endforeach
@endsection
