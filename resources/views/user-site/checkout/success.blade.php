@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Đặt Hàng Thành Công</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Home</a></li>
                        {{--                        <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
                        <li class="breadcrumb-item active">Đặt Hàng Thành Công</li>
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
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="text-center order_complete">
                            <i class="fas fa-check-circle"></i>
                            <div class="heading_s1">
                                <h3>Đặt Hàng Thành Công</h3>
                            </div>
                            <p>Cảm Ơn bạn đã tin tưởng! Đơn Hàng Của bạn đang trong quá trình xử lý , Chúng tôi Sẽ
                                liên hệ với bạn qua điện thoại để xác thực lại đơn hàng.</p>
                            <a href="{{route('user.product.index', ['all' => 'all'])}}" class="btn btn-fill-out">Tiếp Tục Mua Sắm</a>
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
