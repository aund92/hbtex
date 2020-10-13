@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Yêu Thích</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Yêu Thích</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive wishlist_table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Sản Phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th>Màu</th>
                                    <th>Size</th>
                                    <th class="product-stock-status">Trạng Thái</th>
                                    <th class="product-add-to-cart"></th>
                                    <th class="product-remove">Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wishList as $wish)
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img
                                                    src="{{asset($wish->product->image ?? '')}}"
                                                    alt="product1"></a></td>
                                        <td class="product-name" data-title="Product"><a
                                                href="{{route('user.product.detail', $wish->product->slug)}}">{{$wish->product->product_name ?? ''}}</a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            @if($wish->product->discount)
                                                {{number_format($wish->product->price - $wish->product->price*$wish->product->discount/100)}}
                                            @else
                                                {{number_format($wish->product->price)}}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="pr_switch_wrap">
                                                <div class="product_color_switch">
                                                    @foreach($wish->product->skus  as $key => $sku)
                                                        <span class="detail product_sku_{{$wish->product->id}}"  sku-id="{{$sku->id}}"
                                                              data-color="{{$sku->rgb}}"></span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pr_switch_wrap">
                                                <div class="product_size_switch">
                                                    @foreach($wish->product->sizes  as $key => $size)
                                                        <span class="detail product_size_{{$wish->product->id}}" size-id="{{$size->id}}">{{$size->size_name}}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>

                                        <td class="product-stock-status" data-title="Stock Status"><span
                                                class="badge badge-pill badge-success">Có Sẵn</span></td>
                                        <td class="product-add-to-cart"><a href="#" class="btn btn-fill-out"><i
                                                    class="icon-basket-loaded"></i> Thêm Vào Giỏ</a></td>
                                        <td class="product-remove" data-title="Remove"><a href="{{route('user.wish.remove', $wish->id)}}"><i
                                                    class="ti-close"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
