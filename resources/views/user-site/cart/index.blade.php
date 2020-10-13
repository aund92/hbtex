@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Giỏ Hàng</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.product.index')}}">Sản Phẩm</a></li>
                        <li class="breadcrumb-item active">Giỏ Hàng</li>
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
                        <form action="{{route('user.cart.update')}}" method="post">
                            @csrf
                            <div class="table-responsive shop_cart_table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Sản Phẩm - Màu - Size</th>
                                        <th class="product-price">Đơn Giá</th>
                                        <th class="product-quantity">Số Lượng</th>
                                        <th class="product-subtotal">Tổng</th>
                                        <th class="product-remove">Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $key => $item)
                                        <tr>
                                            <input type="hidden" name="product[{{$key}}][rowId]"
                                                   value="{{$item->rowId}}">
                                            <td class="product-thumbnail"><a
                                                    href="{{route('user.product.detail', $item->options->slug ?? "")}}"><img
                                                        src="{{\Illuminate\Support\Facades\URL::to('/' . $item->options->image)}}"
                                                        alt="product1"></a></td>
                                            <td class="product-name" data-title="Product"><a
                                                    href="{{route('user.product.detail', $item->options->slug ?? "")}}">{{$item->name}}   <span class="badge badge-info">{{$item->options->sku_name}}</span>  <span class="badge badge-info">{{$item->options->size_name}}</span></a>
                                            </td>

                                            <td class="product-price"
                                                data-title="Price">{{number_format($item->price)}}</td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text" name="product[{{$key}}][quantity]"
                                                           value="{{$item->qty}}" title="Qty" class="qty"
                                                           size="4">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </td>
                                            <td class="product-subtotal"
                                                data-title="Total">{{number_format($item->subtotal)}}</td>
                                            <td class="product-remove" data-title="Remove"><a
                                                    href="{{route('user.cart.remove', ['id'=> $item->rowId])}}"><i
                                                        class="ti-close"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="6" class="px-0">
                                            <div class="row no-gutters align-items-center">

                                                <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                                    <div class="coupon field_form input-group">
                                                        <input type="text" value="" class="form-control form-control-sm"
                                                               placeholder="Nhập Mã Giảm Giá">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-fill-out btn-sm" type="submit">Áp
                                                                Dụng
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-6 text-left text-md-right">
                                                    <button class="btn btn-line-fill btn-sm" type="submit">Cập Nhật Giỏ
                                                        Hàng
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <div class="border p-3 p-md-4">
                            <div class="heading_s1 mb-3">
                                <h6>Giỏ Hàng</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    {{--                                    <tr>--}}
                                    {{--                                        <td class="cart_total_label">Tổng Đơn Hàng</td>--}}
                                    {{--                                        <td class="cart_total_amount">$349.00</td>--}}
                                    {{--                                    </tr>--}}
                                    <tr>
                                        <td class="cart_total_label">Tổng</td>
                                        <td class="cart_total_amount"><strong>{{Cart::subtotal()}}</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{route('user.checkout.index')}}" class="btn btn-fill-out">Tiến Hành Thanh Toán</a>
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
