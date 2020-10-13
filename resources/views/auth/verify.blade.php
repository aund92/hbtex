@extends('user-site.layouts.app_user2', ['categories2' => \App\Models\Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get()])
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Xác Thực Tài Khoản</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Xác Thực Tài Khoản</li>
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
                    <div class="card">
                        <div class="card-header">{{ __('Xác Thực Địa Chỉ Email') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Kiểm tra đường dẫn xác thực trong email của bạn') }}
                            {{ __('Nếu bạn chưa nhận được') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit"
                                        class="btn btn-link p-0 m-0 align-baseline">{{ __('Nhấn vào đây để gửi lại đường dẫn xác thực') }}</button>
                                .
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

            </div>
        </div>
    </div>
@endsection
