@extends('user-site.layouts.app_user')

@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">﻿Home</a></li>
                    <li class="active"><a href="#">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->

    <div class="blog ptb-20  ptb-sm-60">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <div class="col-img h-full">
                        <a class="banner" data-id="790" href="huong-dan/huong-dan-dang-thong-tin-san-pham-chao-mua-trong-quan-tri-gian-hang-thanh-vien-nguoi-mua.html" target="_blank"><img class="h-full" src="upload/image/banner-tim-mua-vi.jpg" alt="Slide 1 - Tìm mua"></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="well">
                        <h3 class="mb-10 custom-title">Gửi yêu cầu báo giá</h3>
                        <form method="post" action="{{route('user.contact.store')}}" >
                            @csrf
                            <input name="is_consent" value="1" type="hidden"/>
                            <input name="buy_product_id"  type="hidden"/>
                            <input name="member_type_id" value="4" type="hidden"/>

                            <div class="form-group">
                                <input class="form-control" name="email" data-error="Địa chỉ email không đúng định dạng" type="email" pattern=".{1,}" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="number" name="phone_number" data-error="Yêu cầu nhập tối thiểu 10 ký tự" pattern=".{10,}" placeholder="Số điện thoại di động"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" data-error="Yêu cầu nhập tối thiểu 6 ký tự" pattern=".{6,}" placeholder="Họ tên"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="subject" placeholder="Tiêu đề"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" placeholder="Mô tả"></textarea>
                            </div>
                            <footer class="text-sm-center mt-10">
                                <button class="btn btn-primary" type="submit">
                                    Gửi
                                </button>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <br/>
                                @endif
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container End -->
    </div>
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
