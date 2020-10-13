@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Đăng Nhập</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#{{route('user.home.index')}}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Đăng Nhập</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START LOGIN SECTION -->
        <div class="login_register_wrap section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3>Đăng Nhập</h3>

                                </div>
                                <form method="post" action="{{route('user.login.login')}}">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    {{ $error }}
                                                @endforeach
                                        </div>
                                        <br/>
                                    @endif
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="email"
                                               value="{{old('email')}}"
                                               placeholder="Email/Tài Khoản">

                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required="" type="password" name="password"
                                               placeholder="Mật Khẩu">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                       id="exampleCheckbox1" value="">
                                                <label class="form-check-label"
                                                       for="exampleCheckbox1"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        <a href="{{route('password.request')}}">Quên Mật Khẩu?</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-fill-out btn-block" name="login">Đăng Nhập
                                        </button>
                                    </div>
                                </form>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center">
                                    <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a>
                                    </li>
                                    <li><a href="#" class="btn btn-google"><i
                                                class="ion-social-googleplus"></i>Google</a></li>
                                </ul>
                                <div class="form-note text-center">Bạn Chưa Có Tài Khoản? <a
                                        href="{{route('user.login.signup')}}">Đăng Ký Ngay
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LOGIN SECTION -->
    </div>
@endsection
@section('styles')
    <style>

    </style>
@endsection
@section('scripts')
    <script>
        $(function () {

        })

    </script>
@endsection
