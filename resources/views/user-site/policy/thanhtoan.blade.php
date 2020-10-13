@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>CHÍNH SÁCH HOÀN TIỀN</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">CHÍNH SÁCH HOÀN TIỀN</li>
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
                                    <h6>THANH TOÁN TRẢ TRƯỚC</h6>
                                </li>
                                <p>CHUYỂN KHOẢN </p>
                                <p>Chủ Tài Khoản : <b>NGUYEN DUC AU</b></p>
                                <p>Ngân Hàng : <b>Tien Phong Bank (TP bank)</b></p>
                                <p> STK : <b>0030 0090 001 </b></p>

                                <li>
                                    <h6>THANH TOÁN TRẢ SAU (COD)</h6>
                                </li>
                                <p>
                                    Là hình thức khách hàng thanh toán tiền mặt trực tiếp cho nhân viên vận chuyển khi nhận hàng.
                                    Khi hàng được chuyển giao đến bạn có thể kiểm tra tình trang gói hàng còn nguyên vẹn và mở gói hàng kiểm tra
                                    sản phẩm trước khi thanh toán. Nếu sản phẩm có bất kỳ lỗi hay khiếm khuyết nào không đúng ý muốn, bạn có thể
                                    trả lại nhân viên vận chuyển ngay tại thời điểm đó.
                                </p>
                                <li>
                                    <h6>HOÀN TIỀN</h6>
                                    <p>Đối với thanh toán trước, WINDY STORE sẽ hoàn tiền cho bạn trong những trường hợp sau:</p>
                                    <ul>
                                        <li>Bạn hủy đơn hàng khi WINDY STORE chưa đến bước vận chuyển và muốn nhận lại tiền đã thanh toán qua thẻ</li>
                                        <li>Bạn muốn trả lại hàng do lỗi sản xuất và không muốn đổi sang sản phẩm khác</li>
                                        <li>WINDY STORE sẽ hoàn tiền lại vào tài khoản cá nhân của bạn. WINDY STORE sẽ cố gắng hoàn tiền nhanh nhất có thể và thời gian hoàn tiền không quá 15 ngày tính từ khi xác nhận hoàn tiền</li>
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
