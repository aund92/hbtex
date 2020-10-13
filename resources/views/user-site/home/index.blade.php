@extends('user-site.layouts.app_user')
@section('content')
    <div class="main-page-banner off-white-bg">
        <div class="container">
            <div class="row">
                <!-- Vertical Menu Start Here -->
                <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                    <div class="vertical-menu mb-all-30">
                        <nav>
                            <ul class="vertical-menu-list">
                                @foreach($categories as $key => $category)
                                    <li class="dropdown">
                                        <a href="{{route('user.product.index', $category->slug)}}" target="_blank">
                                        <span>
                                            <img src="{{asset($category->icon)}}" alt="menu-icon">
                                        </span>
                                            {{$category->category_name}}<i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>
                                        </a>
                                        <ul class="ht-dropdown mega-child">
                                            @foreach($category->childCategory as $key2 => $category2)
                                                <li><a href="{{route('user.product.index', $category2->slug)}}"
                                                       target="_blank">{{$category2->category_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach

                                <li>
                                    <a href="danh-muc.html" target="_blank"><strong>Tất cả danh mục</strong><i
                                            class="fa fa-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Vertical Menu End Here -->
                <!-- Slider Area Start Here -->
                <div class="col-xl-9 col-lg-8 slider_box">
                    <div class="slider-wrapper theme-default">
                        <!-- Slider Background  Image Start-->
                        <div id="slider" class="nivoSlider">
                            <a class="banner" data-id="788" href="chao-ban/danh-sach.html"><img
                                    src="upload/images/Banner_QC/slide-chao-ban.jpg"
                                    data-thumb="https://hatex.vn/upload/images/Banner_QC/slide-chao-ban.jpg"
                                    alt="Slide 2 - Chào bán" title="#htmlcaption"/></a>
                            <a class="banner" data-id="748" href="index.html"><img
                                    src="upload/images/Banner_QC/QC1-vi.jpg"
                                    data-thumb="https://hatex.vn/upload/images/Banner_QC/QC1-vi.jpg" alt="Slide 4"
                                    title="#htmlcaption"/></a>
                            <a class="banner" data-id="44" href="index.html"><img
                                    src="upload/images/Banner_QC/QC2-vi.jpg"
                                    data-thumb="https://hatex.vn/upload/images/Banner_QC/QC2-vi.jpg"
                                    alt="Slide 5 - Đăng ký" title="#htmlcaption"/></a>
                            <a class="banner" data-id="694" href="index.html"><img
                                    src="upload/images/Banner_QC/SLIDE-5-vi.jpg"
                                    data-thumb="https://hatex.vn/upload/images/Banner_QC/SLIDE-5-vi.jpg"
                                    alt="Slide 3 - Chuyên gia" title="#htmlcaption"/></a>
                            <a class="banner" data-id="787" href="tin-tuc/danh-sach.html"><img
                                    src="upload/images/Banner_QC/SLIDE-4-vi.jpg"
                                    data-thumb="https://hatex.vn/upload/images/Banner_QC/SLIDE-4-vi.jpg"
                                    alt="Slide 1 - Tin tức" title="#htmlcaption"/></a>
                            <a class="banner" data-id="897" href="https://connect5.vn/"><img
                                    src="public/upload/files/Banner%202020/banner-ket-noi.jpg"
                                    data-thumb="https://hatex.vn/public/upload/files/Banner%202020/banner-ket-noi.jpg"
                                    alt="Connect5" title="#htmlcaption"/></a>
                        </div>
                    </div>
                </div>
                <!-- Slider Area End Here -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <div class="big-banner mt-40 pb-30 mt-sm-20 pb-sm-20">
        <div class="container big-banner-box">
            <div class="col-img">
                <a class="banner" data-id="919" href="gian-hang/cong-ty-tnhh-cong-nghiep-bao-tien-5808.html"
                   target="_blank">
                    <img src="public/upload/files/Banner%202020/bao-tien.jpg" alt="Bảo Tiên (24/10)">
                </a>
            </div>
            <div class="col-img">
                <a class="banner" data-id="926" href="gian-hang/cong-ty-tnhh-ky-thuat-ktech-viet-nam-2007.html"
                   target="_blank">
                    <img src="public/upload/files/Banner%202020/banner-ktech.jpg" alt="Ktech (15/9 - 15/12)">
                </a>
            </div>
        </div>
        <div class="container big-banner-box" style="display:none;">
            <div class="col-img">
                <a class="banner" data-id="928" href="gian-hang/cong-ty-tnhh-thuong-mai-an-quan-13173.html"
                   target="_blank">
                    <img src="public/upload/files/Banner%202020/banner-an-quan.jpg" alt="An Quân (30/9- 30/12)">
                </a>
            </div>
            <div class="col-img">
                <a class="banner" data-id="918"
                   href="gian-hang/cong-ty-tnhh-thuong-mai-va-phat-trien-cong-nghe-duc-phap-12522.html" target="_blank">
                    <img src="public/upload/files/Banner%202020/banner-duc-phap.jpg" alt="Đức Pháp (8/10)">
                </a>
            </div>
        </div>
    </div>
    <div class="main-brand-banner pt-40 pb-40 pt-sm-20 pb-sm-20">
        {{--        @foreach($categories as $key => $category)--}}
        {{--            @if($key <= 5)--}}
        <div class="container">
            <div class="section-title">
                <div class="row-title util-clearfix">
                    <a href="tin-tim-mua/danh-sach.html" target="_blank">
                        <h2 class="pull-left">Sản Phẩm
                        </h2>
                    </a>
                    <div class="sh-line"></div>
                </div>
            </div>
            <!--data-ajax data-template="tplBuyProduct"-->
            <div class="buy-product owl-carousel">
                @foreach($products as $key => $product)
                    <div class="single-product">
                        <div class="pro-img">
                            <a href="{{route('user.product.detail',$product->slug)}}" target="_blank">
                                <img class="primary-img" src="{{asset($product->image)}}" height="250">
                            </a>
                        </div>
                        <div class="pro-content" title="Cần mua thùng rác công nghiệp">
                            <div class="pro-info">
                                <h4><a href="{{route('user.product.detail',$product->slug)}}"
                                       target="_blank">{{$product->product_name}}</a></h4>
                                <p><span
                                        class="price">Giá: <small>Liên hệ </small>{{$product->supply->phone_number}}</span>
                                </p>
                                <span>Xuất xứ: <i class="{{$product->country->icon}}"></i> {{$product->country->country_name}}</span>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        {{--            @endif--}}

        {{--        @endforeach--}}

    </div>
    <div class="arrivals-product pt-40 pb-40 bg-blue">
        <div class="container">
            <div class="tab-menu mb-25">
                <div class="section-title">
                    <a href="nha-cung-cap/danh-sach.html" target="_blank">
                        <h2>{{$supplys->total()}} Nhà cung cấp</h2>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1">
                    <div class="banner-site-box h-full mt-10">
                        <div class="col-img h-full">
                            <a class="banner" data-id="791" href="huong-dan/thanh-vien-vang-tren-hatexvn.html"
                               target="_blank"><img src="upload/images/Banner_QC/gold-plan-vi.jpg" alt="Slide 1 - NCC"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2">
                    <div class="suplier owl-carousel owl-loaded owl-drag" data-ajax="" data-template="tplSupplier">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3045px;">
                                <div class="owl-item" style="width: 294.443px; margin-right: 10px;">
                                    <div class="double-product">
                                        @foreach($supplys as $key => $supply)
                                            @if($key == 0 || $key == 1)
                                                <div class="single-product single-booth template">
                                                    <div class="pro-img">
                                                        <div class="gold-tags">GOLD</div>
                                                        <a href="https://hatex.vn/gian-hang/cong-ty-tnhh-wintech-viet-nam-2308.html"
                                                           target="_blank">
                                                            <img class="primary-img boot-image"
                                                                 src="{{asset($supply->image)}}"
                                                                 data-src="https://hatex.vn/upload/images/Logo_NCC/logo_wintech.png"
                                                                 alt="{{$supply->supply_name}}">
                                                        </a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <div class="pro-info">
                                                            <h4 class="booth-title"><a href="[URL_SUPPLIER]"
                                                                                       target="_blank">{{$supply->supply_name}}</a>
                                                            </h4>
                                                        </div>
                                                        <div class="pro-actions">
                                                            <div class="actions-primary">
                                                                <a class="add-cart"
                                                                   href="#"
                                                                   target="_blank" title=""
                                                                   data-original-title="Xem gian hàng">
                                                                    Xem gian hàng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 294.443px; margin-right: 10px;">
                                    <div class="double-product">
                                        @foreach($supplys as $key => $supply)
                                            @if($key == 2 || $key == 3)
                                                <div class="single-product single-booth template">
                                                    <div class="pro-img">
                                                        <div class="gold-tags">GOLD</div>
                                                        <a href="https://hatex.vn/gian-hang/cong-ty-tnhh-wintech-viet-nam-2308.html"
                                                           target="_blank">
                                                            <img class="primary-img boot-image"
                                                                 src="{{asset($supply->image)}}"
                                                                 data-src="https://hatex.vn/upload/images/Logo_NCC/logo_wintech.png"
                                                                 alt="{{$supply->supply_name}}">
                                                        </a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <div class="pro-info">
                                                            <h4 class="booth-title"><a href="[URL_SUPPLIER]"
                                                                                       target="_blank">{{$supply->supply_name}}</a>
                                                            </h4>
                                                        </div>
                                                        <div class="pro-actions">
                                                            <div class="actions-primary">
                                                                <a class="add-cart"
                                                                   href="#"
                                                                   target="_blank" title=""
                                                                   data-original-title="Xem gian hàng">
                                                                    Xem gian hàng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 294.443px; margin-right: 10px;">
                                    <div class="double-product">
                                        @foreach($supplys as $key => $supply)
                                            @if($key == 4 || $key == 5)
                                                <div class="single-product single-booth template">
                                                    <div class="pro-img">
                                                        <div class="gold-tags">GOLD</div>
                                                        <a href="https://hatex.vn/gian-hang/cong-ty-tnhh-wintech-viet-nam-2308.html"
                                                           target="_blank">
                                                            <img class="primary-img boot-image"
                                                                 src="{{asset($supply->image)}}"
                                                                 data-src="https://hatex.vn/upload/images/Logo_NCC/logo_wintech.png"
                                                                 alt="{{$supply->supply_name}}">
                                                        </a>
                                                    </div>
                                                    <div class="pro-content">
                                                        <div class="pro-info">
                                                            <h4 class="booth-title"><a href="[URL_SUPPLIER]"
                                                                                       target="_blank">{{$supply->supply_name}}</a>
                                                            </h4>
                                                        </div>
                                                        <div class="pro-actions">
                                                            <div class="actions-primary">
                                                                <a class="add-cart"
                                                                   href="#"
                                                                   target="_blank" title=""
                                                                   data-original-title="Xem gian hàng">
                                                                    Xem gian hàng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="owl-nav">--}}
{{--                            <div class="owl-prev" style="width: 100px !important;padding-right: 5px !important;"><a--}}
{{--                                    href="tin-tuc/danh-sach.html" target="_blank" class="more">Xem tất cả <i--}}
{{--                                        class="fa fa-caret-right"></i></a></div>--}}
{{--                        </div>--}}
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="news-event">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 box-news-home">
                    <div class="news-and-event-title">
                        <h4 class="section-head">
                            <span class="title"><a href="{{route('user.blog.index')}}" target="_blank">Tin tức</a></span>
                            <a href="{{route('user.blog.index')}}" target="_blank" class="more">Xem tất cả <i
                                    class="fa fa-caret-right"></i></a>
                        </h4>
                    </div>
                    <div class="form-news-home">
                        @foreach($blogs as $key => $blog)
                            <div class="news-detail-home row no-gutters">
                                <div class="img-news-detail-home col-md-4"><img class="img-responsive"
                                                                                src="{{ \Illuminate\Support\Facades\URL::to('/' . $blog->image) }}"
                                                                                alt="{{ $blog->title }}">
                                </div>
                                <div class="content-news-detail-home col-md-8"><a
                                        href="{{route('user.blog.detail', $blog->slug)}}"
                                        target="_blank"><h4 class="news-name">{{ $blog->title }}</h4></a>
                                    <div class="description-news">{!! $blog->short_description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 box-event-home">
                    <div class="news-and-event-title">
                        <h4 class="section-head">
                            <span class="title"><a href="#" target="_blank">Sự kiện sắp diễn ra</a></span>
                            <a href="{{route('user.event.index')}}" target="_blank" class="more">Xem tất cả <i
                                    class="fa fa-caret-right"></i></a>
                        </h4>
                    </div>
                    <div class="form-event-home">
                        @foreach($events as $key => $event)
                            <div class="news-detail-home row no-gutters">
                                <div class="img-news-detail-home col-md-4"><img class="img-responsive"
                                                                                src="{{asset($event->image)}}"
                                                                                alt="{{$event->title}}">
                                </div>
                                <div class="content-news-detail-home col-md-8"><a
                                        href="{{route('user.event.detail', $event->slug)}}"
                                        target="_blank"><h4 class="news-name">{{$event->title}}</h4></a>
                                    <div class="description-news"><p><i class="fa fa-map-marker"></i>&nbsp;&nbsp;{{$event->address2}}</p>
                                        <p><i class="fa fa-clock-o"></i>&nbsp;Từ {{date('d/m/Y', strtotime($event->start_date))}} đến {{date('d/m/Y', strtotime($event->end_date))}}</p></div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
