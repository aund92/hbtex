@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Đổi Trả Hàng</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Đổi Trả Hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- STAT SECTION FAQ -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="term_conditions">
                            <ol>
                                <li>
                                    <h6>CHÍNH SÁCH ÁP DỤNG</h6>
                                    <ul>
                                        <li>WINDY STORE nhận lại sản phẩm trong trường hợp lỗi phát sinh từ nhà sản xuất</li>
                                        <li>Các trường hợp lỗi do nhà sản xuất gồm: ố màu, phai màu, lỗi chất liệu,
                                            lỗi đường may, lỗi kiểu dáng… không theo đúng mô tả và tiêu chuẩn sản phẩm</li>
                                        <li>Hoàn tiền lại sản phẩm gặp lỗi qua tài khoản ngân hàng.</li>
                                        <li>WINDY STORE miễn phí 100% chi phí trả hàng.</li>
                                        <li>WINDY STORE sẽ xử lý trong vòng 10 ngày kể từ ngày nhận được sản phẩm lỗi</li>
                                    </ul>
                                </li>

                                <li>
                                    <h6>ĐiỀU KIỆN TRẢ SẢN PHẨM</h6>
                                    <ul>
                                        <li>Trả sản phẩm trong vòng 15 ngày kể từ ngày bạn nhận sản phẩm.</li>
                                        <li>Sản phẩm còn nguyên tem, mác và chưa qua sử dụng.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h6>THỰC HIỆN TRẢ SẢN PHẨM</h6>
                                    <ul>
                                        <li>Gửi thông tin mã đơn hàng và tình trạng gặp lỗi vào địa chỉ mail windy.fashionstores@gmail.com</li>
                                    </ul>
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION FAQ -->


    </div>
    <!-- END MAIN CONTENT -->
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
