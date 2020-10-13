@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <div class="breadcrumb-area mt-30 mb-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">Trang chủ</a></li>
                    <li class="active"><a href="danh-sach.html">Sản Phẩm</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="grid-shop grid-supplier">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1">
                    <div class="filter-menu hidden-sm hidden-md hidden-lg">
                        <span>Filter</span>
                    </div>
                    <aside class="filter-product">
                        <form id="frmSearchSidebar" class="form-sidebar col-md-12 col-sm-12 col-xs-12"
                              action="#" method="GET">
                            <input type="hidden" value="" name="keyword"/>
                            <div class="weight col-xs-12 col-md-12 col-sm-12">
                                <div class="title">
                                    <h2>Danh Mục Sản Phẩm</h2>
                                </div>
                                <div class="filter-outer">
                                    <label data-has-sub="[HAS_SUB]" data-count="[COUNT]"
                                           class="country text-semibold template-hidden hidden">[NAME] <span
                                            class="amount">([COUNT_FORMAT])</span>
                                        <input type="checkbox" [CHECKED_RENDER] name="category_arr[]" value="[ID]"/>
                                        <span class="checkmark"></span>
                                        [CHILDREN_RENDER]
                                    </label>
                                    <li class="template-child-hidden hidden">
                                        <label data-count="[COUNT]" class="country">[NAME] <span class="amount">([COUNT_FORMAT])</span>
                                            <input type="checkbox" [CHECKED_RENDER] name="category_arr[]" value="[ID]"/>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <div class="scroll" data-template="tplProductCateFilter">
                                        @foreach($categories as $key => $category)
                                            <label data-has-sub="false" data-count="1020"
                                                   class="country text-semibold template">{{$category->category_name}}
                                                <span
                                                    class="amount">({{count($category->products)}})</span>
                                                <input type="checkbox" name="category_arr[]" value="{{$category->id}}"
                                                       @if(in_array($category->id, $catArr)) checked @endif>
                                                <span class="checkmark"></span>
                                                <ul>
                                                    @foreach($category->childCategory as $key2 => $category2)
                                                        <li class="template-child">
                                                            <label data-count="1020"
                                                                   class="country">{{$category2->category_name}} <span
                                                                    class="amount">({{count($category2->products)}})</span>
                                                                <input type="checkbox" name="category_arr[]"
                                                                       @if(in_array($category2->id, $catArr)) checked
                                                                       @endif
                                                                       value="{{$category2->id}}">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </label>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="weight col-xs-12 col-md-12 col-sm-12">
                                <div class="title">
                                    <h2>Xuất Xứ</h2>
                                </div>
                                <div class="filter-outer">
                                    <label class="template-hidden hidden country">[NAME] <span class="amount">([COUNT_FORMAT])</span>
                                        <input type="checkbox" [CHECKED_RENDER] name="made_arr[]" value="[ID]"/>
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="scroll" data-ajax data-template="tplProductMadeFilter">
                                        @foreach($countries as $key => $country)
                                            <label data-has-sub="false" data-count="1020"
                                                   class="country text-semibold template">{{$country->country_name}}
                                                <span
                                                    class="amount">({{count($country->products)}})</span>
                                                <input type="checkbox" name="made_arr[]" value="{{$country->id}}"
                                                       @if(in_array($country->id, $madeArr)) checked @endif>
                                                <span class="checkmark"></span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="weight col-xs-12 col-md-12 col-sm-12">
                                <div class="title">
                                    <h2>Thương hiệu</h2>
                                </div>
                                <div class="filter-outer">
                                    <label data-has-sub="[HAS_SUB]" data-count="[COUNT]"
                                           class="country text-semibold template-hidden hidden">[NAME] <span
                                            class="amount">([COUNT_FORMAT])</span>
                                        <input type="checkbox" [CHECKED_RENDER] name="province_arr[]" value="[ID]"/>
                                        <span class="checkmark"></span>
                                        [CHILDREN_RENDER]
                                    </label>
                                    <div class="scroll" data-ajax data-template="tplProductRegionFilter">
                                        @foreach($brands as $key => $brand)
                                            <label data-has-sub="false" data-count="1020"
                                                   class="country text-semibold template">{{$brand->brand_name}} <span
                                                    class="amount">({{count($brand->products)}})</span>
                                                <input type="checkbox" name="province_arr[]" value="{{$brand->id}}"
                                                       @if(in_array($brand->id, $provinceArr)) checked @endif>
                                                <span class="checkmark"></span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="weight col-xs-12 col-md-12 col-sm-12">
                                <div class="title">
                                    <h2>Nhà Cung Cấp</h2>
                                </div>
                                <label class="template-hidden hidden country">[NAME] <span class="amount">([COUNT_FORMAT])</span>
                                    <input type="checkbox" [CHECKED_RENDER] name="member_type_arr[]" value="[ID]"/>
                                    <span class="checkmark"></span>
                                </label>
                                <div class="filter-outer" data-ajax data-template="tplProductMemberTypeFilter">
                                    @foreach($supplys as $key => $supply)
                                        <label data-has-sub="false" data-count="1020"
                                               class="country text-semibold template">{{$supply->supply_name}} <span
                                                class="amount">({{count($supply->products)}})</span>
                                            <input type="checkbox" name="member_type_arr[]" value="{{$supply->id}}"
                                                   @if(in_array($supply->id, $memberTypeArr)) checked @endif>
                                            <span class="checkmark"></span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </form>
                        <div class="hidden-xs">
                            <div class="weight">
                                <div class="title">
                                    <h2>Quảng Cáo</h2>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-list main-categorie mb-all-40">

                        <div class="header-content clearfix">
                            <div class="tab col-md-4">
                                <a id="tab-1" class="active" href="#"> Sản phẩm </a>
                                <a id="tab-2" class="" href="#"> Nhà cung cấp </a>
                            </div>
                            <a href="javascript:void(0);" onclick="javascript:scrollToElement($('#rfquotation')[0])"
                               class="btn btn-primary hidden-sm hidden-xs pull-right">Post Buying Request</a>
                            <span class="pull-right"
                                  style="display: inline;margin-right: 5px;margin-top: 10px;font-size: .9em;">
                                                                Found <b>{{$products->total()}}</b> matching products
                                                            </span>
                        </div>


                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                @foreach($products as $key => $product)
                                    <div class="product-item single-product">
                                        <div class="col-xs-12 col-sm-3 col-md-3 col-12">
                                            <div class="pro-img">
                                                <a target="_blank"
                                                   href="{{route('user.product.detail', $product->slug)}}">
                                                    <img class="img-responsive" src="{{asset($product->image)}}"
                                                         data-src="{{asset($product->image)}}"
                                                         alt="Trạm trộn bê tông xi măng 60m3/h">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-9 col-md-6 col-12">
                                            <div class="pro-text-outer list-pro-text">
                                                <a target="_blank" href="{{route('user.product.detail', $product->slug)}}">
                                                    <h4> {{$product->product_name}} </h4>
                                                </a>
                                                <p class="wk-price">
                                                    <span class="text-semibold">Xuất Xứ: </span>
                                                    <i class="{{$product->country->icon}}"></i> {{$product->country->country_name}}
                                                </p>
                                                <p class="description hidden-xs">{{$product->short_description}}</p>
                                                <p><i class="fa fa-clock-o"></i>
                                                    <span>Post date</span>: {{$product->created_at}}
                                                </p>
                                                <p class="description hidden-xs">
                                                    <b>Từ khóa: </b>
                                                    {{$product->category->category_name}}

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-12">
                                            <div>
{{--                                                                                <span class="badge"--}}
{{--                                                                                      style="background-color: #afbcca;padding:2px 5px 2px 0px;cursor:help;"--}}
{{--                                                                                      title="Gold ">--}}
{{--                                            <img src="../upload/image/icon_gold.png">--}}
{{--                                            <span class="numberz">1 year</span>--}}
                                        </span>
                                                <span>
                                                                                        <a href="../gian-hang/cong-ty-co-phan-co-khi-xay-dung-thuan-an-996.html"
                                                                                           target="_blank">{{$product->supply->supply_name}}</a>
                                        </span>
                                            </div>
                                            <label class="mt-10">
                                                <i class="flag-icon flag-icon-vn"></i> {{$product->supply->address}}
                                            </label>
                                            <div class="actions-primary mt-10">
                                                <a class="add-cart"
                                                   href="#"><i class="lnr lnr-envelope"></i>
                                                    <small>{{$product->supply->email}}</small>
                                                </a>
                                            </div>
                                            <div class="actions-primary mt-10">
                                                <a class="add-cart"
                                                   href="#"><i class="lnr lnr-phone-handset"></i>
                                                    {{$product->supply->phone_number}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $products->links('vendor.pagination.page-user') }}
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
        <!-- /.grid-shop -->
    </section>
@endsection
