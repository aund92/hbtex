@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Đăng Ký</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Đăng Ký</li>
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
                                    <h3>Tạo Tài Khoản</h3>
                                </div>
                                <form method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" required id="name"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}"
                                               autofocus placeholder="Nhập Tên Của Bạn">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" required id="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               value="{{ old('email') }}" name="email"
                                               placeholder="Nhập Email Của Bạn">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control @error('password') is-invalid @enderror" required=""
                                               type="password" name="password"
                                               placeholder="Mật Khẩu">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" required="" type="password"
                                               name="password_confirmation"
                                               placeholder="Xác Nhận Mật Khẩu">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                       id="exampleCheckbox2" value="">
                                                <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-fill-out btn-block" name="register">
                                            Register
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
                                <div class="form-note text-center">Bạn đã có tài khoản ? <a href="{{route('user.login.index')}}">Đăng Nhập ngay</a></div>
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
