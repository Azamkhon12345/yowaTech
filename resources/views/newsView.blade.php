@extends('layouts.user')
@section('content')
<div class="breadcrumb-area pt-205 pb-210" style="background-image: url({{asset('assets/img/bg/breadcrumb.jpg')}}">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>blog details</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> blog details </li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="blog-details pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-details-info">
                    <div class="blog-meta">
                        <ul>
                            <li>Fashion</li>
                            <li>October 26, 2018</li>
                        </ul>
                    </div>
                    <h3>The other day the grass was brown, now it’s green because I ain’t give up, never  surrender. </h3>
                    <img src="{{asset('assets/img/blog/13.jpg')}}" alt="">
                    <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez’s label. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. </p>
                    <div class="blog-feature">
                        <h5>Stanndard Featured</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        <p class="blog-pera-mrg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    </div>
                </div>
                <div class="leave-area">
                    <h4 class="blog-details-title">Leave your thought</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="leave-form mb-20">
                                            <input placeholder="Name *" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="leave-form mb-20">
                                            <input placeholder="Email *" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="leave-form mb-20">
                                            <input placeholder="Website" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-leave">
                                    <textarea placeholder="Comment*"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="leave-btn">
                                    <button class="submit btn-hover" type="submit"><i class="pe-7s-mail"></i> Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="blog-replay-wrapper">
                    <h4 class="blog-details-title2">HAVE 2 COMMENTS</h4>
                    <div class="single-blog-replay">
                        <div class="replay-img">
                            <a href="#"><img src="{{asset('assets/img/blog/14.jpg')}}" alt=""></a>
                        </div>
                        <div class="replay-info-wrapper">
                            <div class="replay-info">
                                <div class="replay-name-date">
                                    <h5><a href="#">Tayeb rayed</a></h5>
                                    <span>July 15, 2016 at 2:39 am</span>
                                </div>
                                <div class="replay-btn">
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                        </div>
                    </div>
                    <div class="single-blog-replay middle-blog-repley">
                        <div class="replay-img">
                            <a href="#"><img src="{{asset('assets/img/blog/15.jpg')}}" alt=""></a>
                        </div>
                        <div class="replay-info-wrapper">
                            <div class="replay-info">
                                <div class="replay-name-date">
                                    <h5><a href="#">JOHN NGUYEN</a></h5>
                                    <span>July 15, 2016 at 2:39 am</span>
                                </div>
                                <div class="replay-btn">
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                        </div>
                    </div>
                    <div class="single-blog-replay">
                        <div class="replay-img">
                            <a href="#"><img src="{{asset('assets/img/blog/16.jpg')}}" alt=""></a>
                        </div>
                        <div class="replay-info-wrapper">
                            <div class="replay-info">
                                <div class="replay-name-date">
                                    <h5><a href="#">JOHN NGUYEN</a></h5>
                                    <span>July 15, 2016 at 2:39 am</span>
                                </div>
                                <div class="replay-btn">
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shopping-cart-area end -->
@endsection
@section('modals')
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <a href="#">Remove <span>x</span></a>
                                        <img src="{{asset('assets/img/cart/4.jpg')}}" alt="">
                                        <p>Blush Sequin Top </p>
                                        <span>$75.99</span>
                                        <a class="compare-btn" href="#">Add to cart</a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="compare-title"><h4>Description </h4></td>
                                    <td class="compare-dec compare-common">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Sku </h4></td>
                                    <td class="product-none compare-common">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Availability  </h4></td>
                                    <td class="compare-stock compare-common">
                                        <p>In stock</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Weight   </h4></td>
                                    <td class="compare-none compare-common">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>Dimensions   </h4></td>
                                    <td class="compare-stock compare-common">
                                        <p>N/A</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>brand   </h4></td>
                                    <td class="compare-brand compare-common">
                                        <p>HasTech</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>color   </h4></td>
                                    <td class="compare-color compare-common">
                                        <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"><h4>size    </h4></td>
                                    <td class="compare-size compare-common">
                                        <p>XS, S, M, L, XL, XXL </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="compare-title"></td>
                                    <td class="compare-price compare-common">
                                        <p>$75.99 </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
