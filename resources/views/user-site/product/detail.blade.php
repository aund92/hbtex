@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <div class="breadcrumb-area mt-30 hidden-xs">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">﻿Home</a></li>
                    <li><a href="{{route('user.product.index')}}">﻿Products</a></li>
                    {{--                    <li><a href="danh-muc/che-bien-giay-in--dong-goi-128.html">Wood, Paper Industry</a></li>--}}
                    {{--                    <li><a href="danh-muc/may-dong-goi-va-in-an-131.html">Packaging and Printing Machinery</a></li>--}}
                    <li class="active">{{$product->product_name}}</li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Product Thumbnail Start -->
    <div class="main-product-thumbnail ptb-30 ptb-sm-20">
        <div class="container">
            <div class="thumb-bg">
                <div class="row">
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-lg-3 mb-all-40">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <a data-fancybox="images"
                                   href="{{asset($product->image)}}"><img
                                        src="{{asset($product->image)}}"
                                        alt="{{asset($product->product_name)}}"></a>
                            </div>
                            @foreach($product->images as $key => $image)
                                <div id="thumb{{$key + 2}}" class="tab-pane fade ">
                                    <a data-fancybox="images"
                                       href="{{asset($image->image)}}"><img
                                            src="{{asset($image->image)}}"
                                            alt="{{asset($product->product_name)}}"></a>
                                </div>

                            @endforeach

                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail mt-15">
                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                <a class="active" data-toggle="tab" href="#thumb1">
                                    <img src="{{asset($product->image)}}"
                                         alt="{{asset($product->product_name)}}">
                                </a>
                                @foreach($product->images as $key => $image)
                                    <a data-toggle="tab" href="#thumb{{$key+2}}">
                                        <img src="{{asset($image->image)}}"
                                             alt="{{asset($product->product_name)}}">
                                    </a>

                                @endforeach

                            </div>
                        </div>
                        <div style="margin-top: 10px;" class="fb-like"
                             data-href="https://hatex.vn/chao-ban/may-cua-go-ripsaw-nhieu-luoi-31467.html"
                             data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>

                        <!-- Thumbnail image end -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-lg-6">
                        <div class="thubnail-desc fix">
                            <span class="saving-price">New</span>
                            <h1 class="product-header">{{$product->product_name}}</h1>
                            <div class="hidden rating-summary fix mtb-10">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="hidden rating-feedback">
                                    <a href="#">(1 review)</a>
                                    <a href="#">add to your review</a>
                                </div>
                            </div>
                            <div class="pro-price mtb-30">
                                <p class="d-flex align-items-center">
                                    <span class="prev-price">Giá: </span>
                                    <span class="price">Liên Hệ {{$product->supply->phone_number}}</span>
                                </p>
                            </div>
                            <!--<p class="mb-20 pro-desc-details">   </p>-->
                            <ul class="review-list">
                                <li>
                                    <span>Xuất Xứ</span>
                                    <label>{{$product->country->country_name}}</label>
                                </li>
                                <li>
                                    <span>Mã Sản Phẩm</span>
                                    <label>{{$product->product_code}}</label>
                                </li>
                                <li>
                                    <span>Thương Hiệu</span>
                                    <label>{{$product->brand2->brand_name}}</label>
                                </li>
                                {{--                                <li>--}}
                                {{--                                    <span>Payment terms</span>--}}
                                {{--                                    <label>Cash or transfer</label>--}}
                                {{--                                </li>--}}
                                {{--                                <li>--}}
                                {{--                                    <span>Delivery terms</span>--}}
                                {{--                                    <label>always & always</label>--}}
                                {{--                                </li>--}}
                                {{--                                <li>--}}
                                {{--                                    <span>Packing information</span>--}}
                                {{--                                    <label>Have</label>--}}
                                {{--                                </li>--}}
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-20 review border-default universal-padding">
                            <div class="group-title">
                                <h2>Thông Tin Nhà Cung Cấp</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="review-list">
                                        <li>
                                            Tên nhà cung cấp : <a class="company-name" target="_blank"
                                               href="#">{{$product->supply->supply_name}}</a>
                                        </li>
                                        <li>
                                            Email: <strong>{{$product->supply->email}}</strong>
                                        </li>
                                        <li>
                                            Số điện thoại: <strong>{{$product->supply->phone_number}}</strong>
                                        </li>
                                        <li>
                                            Địa Chỉ:
                                            <strong>
                                                <i class="flag-icon flag-icon-vn"></i> {{$product->supply->address}}
                                            </strong>
                                        </li>
                                    </ul>
                                </div><!--
                                <div class="col-md-4">
                                    <a target="_blank" href="https://hatex.vn/gian-hang/cong-ty-tnhh-mtv-xnk-trung-thai-2427.html" title="Trung Thai Import Export CO., LTD"><img style="width:150px;" class="img-responsive" src="https://hatex.vn/public/upload/files/member_upload/h2427/files/H%C3%ACnh%20n%E1%BB%81n.jpg" alt="Trung Thai Import Export CO., LTD"></a>
                                </div>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <div class="thumnail-desc pb-50 pb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="main-thumb-desc nav tabs-area" role="tablist">
                        <li><a class="active" data-toggle="tab" href="#dtail">Product detail</a></li>
                    </ul>
                    <div class="mb-20 tab-content thumb-content border-default">
                        <div id="dtail" class="tab-pane fade show active">
                            <div class="entry-content">
                                {!! $product->description !!}
                            </div>
                            <div class="share-post">
                                <ul class="social-network">
                                    <li><span>Share this post</span></li>
                                    <li class="fb">
                                        <a class="fb-btn" onclick="share(this)" title="Facebook"
                                           href="may-dong-dai-nhua-han-nhiet-dung-pin-jd16-28511.html"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="gg">
                                        <a class="google-btn" title="Google +"
                                           href="may-dong-dai-nhua-han-nhiet-dung-pin-jd16-28511.html"> <i
                                                class="fa fa-google-plus"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="fb-root" class="hidden">
                                <div class="fb-like"
                                     data-href="https://hatex.vn/chao-ban/may-dong-dai-nhua-han-nhiet-dung-pin-jd16-28511.html"
                                     data-layout="button_count" data-action="like" data-size="small"
                                     data-show-faces="true" data-share="true"></div>
                            </div>
                            <div id="fb-root">
                                <div class="fb-comments"
                                     data-href="https://hatex.vn/chao-ban/may-dong-dai-nhua-han-nhiet-dung-pin-jd16-28511.html"
                                     data-numposts="5" data-width="100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>

    <!-- Product Thumbnail Description End -->
    <div class="hot-deal-products off-white-bg pt-20 pb-20 pt-sm-20 pb-sm-20">
        <div class="container">
            <!-- Product Title Start -->
            <div class="post-title pb-30">
                <h2>Sản phẩm liên quan</h2>
            </div>
            <!-- Product Title End -->
            <!-- Hot Deal Product Activation Start -->
            <div class="hot-deal-active owl-carousel">
                @foreach($productReleted as $key => $productRelate)
                    <div class="single-product">
                        <div class="pro-img">
                            <a href="{{route('user.product.detail', $productRelate->slug)}}">
                                <img class="primary-img"
                                     src="{{asset($productRelate->image)}}"
                                     alt="{{$productRelate->product_name}}">
                            </a>
                        </div>
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{route('user.product.detail', $productRelate->slug)}}">{{$productRelate->product_name}}</a></h4>
                                <p class="wk-price">
                                    <span class="text-semibold">Xuất Xứ: </span>
                                    <i class="{{$productRelate->country->icon}}"></i> {{$productRelate->country->country_name}}
                                </p>
                            </div>
                            <div class="pro-actions">
{{--                                <div class="actions-primary">--}}
{{--                                    <a class="add-cart" id="add-cart" title="Add to cart" data-id="36592"> Add to cart</a>--}}
{{--                                </div>--}}
                                <div class="actions-secondary">
                                    <a
                                       href="#"><i class="lnr lnr-envelope"></i>
                                        <span>Liên Hệ</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Hot Deal Product Active End -->

        </div>
        <!-- Container End -->
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {

        })

        function addToCart(id) {
            let skuId = $(".detail.product_sku_" + id + ".active").attr('sku-id')
            if (skuId === undefined) {
                skuId = 0;
            }
            let sizeId = $(".detail.product_size_" + id + ".active").attr('size-id')
            if (sizeId === undefined) {
                sizeId = 0;
            }

            window.location.href = '{{route('user.cart.add')}}' + '?id=' + id + '&quantity=' + $("#qty").val() + '&sku_id=' + skuId + '&size_id=' + sizeId
        }

        {{--function addToCartAjax2(productId, quantity, idSection) {--}}
        {{--    let skuId = $("." + idSection + ".product_sku_" + productId + ".active").attr('sku-id')--}}
        {{--    if (skuId === undefined) {--}}
        {{--        skuId = 0;--}}
        {{--    }--}}
        {{--    let sizeId = $("." + idSection + ".product_size_" + productId + ".active").attr('size-id')--}}
        {{--    if (sizeId === undefined) {--}}
        {{--        sizeId = 0;--}}
        {{--    }--}}
        {{--    $.ajax({--}}
        {{--        method: "get",--}}
        {{--        url: "{{route('user.cart.add')}}?id=" + productId + "&quantity=" + quantity + "&sku_id=" + skuId + "&size_id=" + sizeId,--}}
        {{--    })--}}
        {{--        .done(function (msg) {--}}
        {{--            location.reload();--}}
        {{--        });--}}
        {{--}--}}

        function setRating(rating) {
            $("#rating").val(rating)
        }
    </script>
@endsection
