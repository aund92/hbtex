@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Thanh Toán</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.cart.index')}}">Giỏ Hàng</a></li>
                        <li class="breadcrumb-item active">Thanh Toán</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->
    @if ($errors->any())
        <div class="alert alert-danger text-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br/>
    @endif
    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        @if(!Auth::check())
                            <div class="toggle_info">
                            <span><i class="fas fa-user"></i>Bạn đã có tài khoản? <a href="{{route('user.login.index')}}" >Đăng Nhập Ngay</a></span>
                            </div>

                        @endif

                    </div>
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fas fa-tag"></i>Bạn có Phiếu giảm giá? <a href="#coupon" data-toggle="collapse"
                                                                              class="collapsed" aria-expanded="false">Nhập phiếu giảm giá</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form" id="coupon">
                            <div class="panel-body">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="coupon field_form input-group">
                                    <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                                    <div class="input-group-append">
                                        <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="medium_divider"></div>
                        <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading_s1">
                            <h4>Chi Tiết Hóa Đơn</h4>
                        </div>
                        <form method="post" action="{{route('user.checkout.store')}}" id="orderForm">
                            @csrf
                            <input type="hidden" name="payment_method" id="payment_method" value="1">
                            <div class="form-group">
                                <input type="text" required class="form-control" name="customer_name" value="{{old('customer_name')}}" placeholder="Họ tên *">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required type="text" name="phone_number" placeholder="Số Điện Thoại *">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required type="text" name="email"
                                       placeholder="Email *">
                            </div>


                            <div class="form-group">
                                <select class="form-control select2bs4" id="city_id" name="city_id">
                                    <option></option>
                                    @foreach($cities as $key => $city)
                                        <option value="{{$city->id}}"
                                                @if($city->id == old('city_id')) selected @endif>{{$city->city_name}}</option>
                                    @endforeach
                                </select>
{{--                                <input class="form-control" required type="text" name="city_id"--}}
{{--                                       placeholder="Thành Phố">--}}
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="district_id" name="district_id">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="ward_id" name="ward_id">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address_shipping" required  value="{{old('address_shipping')}}"
                                       placeholder="Địa Chỉ Giao Hàng *">
                            </div>
{{--                            @if(!Auth::check())--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="chek-form">--}}
{{--                                        <div class="custome-checkbox">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="checkbox"--}}
{{--                                                   id="createaccount">--}}
{{--                                            <label class="form-check-label label_info" for="createaccount"><span>Create an account?</span></label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group create-account">--}}
{{--                                    <input class="form-control" required type="password" placeholder="Password"--}}
{{--                                           name="password">--}}
{{--                                </div>--}}
{{--                            @endif--}}

                            <div class="heading_s1">
                                <h4>Thông Tin Thêm</h4>
                            </div>
                            <div class="form-group mb-0">
                                <textarea rows="5" name="note" class="form-control" placeholder="Chú Ý"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="heading_s1">
                                <h4>Đơn Hàng Của Bạn</h4>
                            </div>
                            <div class="table-responsive order_table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <th>Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Cart::content() as $key => $item)
                                        <tr>
                                            <td>{{$item->name}} <span class="product-qty">x {{$item->qty}}</span> <small class="badge badge-info">{{$item->options->sku_name}}</small> <small class="badge badge-secondary">{{$item->options->size_name}}</small></td>
                                            <td>{{number_format($item->price)}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Tổng</th>
                                        <td class="product-subtotal">{{Cart::subTotal()}}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                                <div class="heading_s1">
                                    <h4>Hình Thức Thanh Toán</h4>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                                        <label class="form-check-label" for="exampleRadios3">COD</label>
                                        <p data-method="option3" class="payment-text">Thanh Toán Sau Khi Kiểm Tra Hàng</p>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                        <label class="form-check-label" for="exampleRadios4">Chuyển Khoản</label>
                                        <p data-method="option4" class="payment-text">
                                            Mọi người có chuyển qua STK dưới đây:
                                            </br>
                                            Chủ Tài Khoản : <b>NGUYEN DUC AU</b> </br>
                                            Ngân Hàng : <b>Tien Phong Bank (TP bank)</b> </br>
                                            STK : <b>0030 0090 001</b>
                                        </p>
                                    </div>

{{--                                    <div class="custome-radio">--}}
{{--                                        <input class="form-check-input" type="radio" name="payment_option"--}}
{{--                                               id="exampleRadios5" value="option5">--}}
{{--                                        <label class="form-check-label" for="exampleRadios5">Paypal</label>--}}
{{--                                        <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with--}}
{{--                                            your credit card if you don't have a PayPal account.</p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <a href="#" class="btn btn-fill-out btn-block" onclick="$('#orderForm').submit()">ĐẶT HÀNG</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
@endsection
@section('scripts')
    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    <script>
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#city_id').select2({
            placeholder: 'Thành Phố *',
            allowClear: true
        })
        $('#district_id').select2({
            placeholder: 'Quận/Huyện *',
            allowClear: true
        })
        $('#ward_id').select2({
            placeholder: 'Phường/Xã *',
            allowClear: true
        })
        $('input[type=radio][name=payment_option]').change(function() {

            if(this.value == 'option3') {
                $("#payment_method").val(1)
            } else {
                $("#payment_method").val(2)
            }

        });
        $('#city_id').on('select2:select', function (e) {
            var data = e.params.data;
            console.log(data.id);
            $("#district_id").select2({
                placeholder: 'Quận/Huyện *',
                allowClear: true,
                ajax: {
                    url: "{{route('selectDistrict')}}?city_id=" + data.id,
                    type: "get",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            search: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            })
        });
        $('#district_id').on('select2:select', function (e) {
            var data = e.params.data;

            $("#ward_id").select2({
                placeholder: 'Phường/Xã *',
                allowClear: true,
                ajax: {
                    url: "{{route('selectWard')}}?district_id=" + data.id,
                    type: "get",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            search: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            })
        });
    </script>
@endsection
