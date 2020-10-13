@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">Trang chủ</a></li>
                    <li><a href="#">Hướng dẫn</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Page Start Here -->
    <section class="guide">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="feature weight">
                        <div class="title">
                            <a href="danh-muc/nguoi-mua.html">
                                <h2>Người mua</h2>
                            </a>
                            <a class="view-all" href="danh-muc/nguoi-mua.html">
                                View all <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="box-feature weight">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 big-feature">
                                    <div class="img-feature">
                                        <a href="huong-dan-tim-kiem-nha-cung-cap.html">
                                            <img class="img-responsive" src="../upload/files/Huong%20Dan/tim-kiem-5.jpg" alt="Search Guides supplier">
                                        </a>
                                    </div>
                                    <div class="title-feature">
                                        <a href="huong-dan-tim-kiem-nha-cung-cap.html">
                                            <h4>Search Guides supplier</h4>
                                        </a>
                                    </div>
                                    <p class="content-feature">To find a provider on Hatex.vn, you can do the following:</p>
                                    <a href="huong-dan-tim-kiem-nha-cung-cap.html" class="view-detail">
                                        View detail <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 list-sub-feature">
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="huong-dan-tim-kiem-san-pham.html">
                                                <img class="img-responsive" src="../upload/files/Huong%20Dan/tim-kiem-1.jpg" alt="Product search guides">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="huong-dan-tim-kiem-san-pham.html">
                                                    <h4>Product search guides</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Product Guide on Hatex.vn</p>
                                            <a href="huong-dan-tim-kiem-san-pham.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="huong-dan-quan-ly-lien-he-trong-gian-hang-thanh-vien-nguoi-mua.html">
                                                <img class="img-responsive" src="../upload/files/Huong%20Dan/lien-he-1.jpg" alt=" Guide to contact management in the PENDING STORE member">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="huong-dan-quan-ly-lien-he-trong-gian-hang-thanh-vien-nguoi-mua.html">
                                                    <h4> Guide to contact management in the PENDING STORE member</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Guide to contact management in the PENDING STORE member</p>
                                            <a href="huong-dan-quan-ly-lien-he-trong-gian-hang-thanh-vien-nguoi-mua.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="huong-dan-dang-thong-tin-san-pham-chao-mua-trong-quan-tri-gian-hang-thanh-vien-nguoi-mua.html">
                                                <img class="img-responsive" src="../upload/files/Huong%20Dan/chao-mua-1.jpg" alt="How to post product information for buying in the store management member PURCHASE">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="huong-dan-dang-thong-tin-san-pham-chao-mua-trong-quan-tri-gian-hang-thanh-vien-nguoi-mua.html">
                                                    <h4>How to post product information for buying in the store management member PURCHASE</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">How to post product information for buying in the store management member PURCHASE</p>
                                            <a href="huong-dan-dang-thong-tin-san-pham-chao-mua-trong-quan-tri-gian-hang-thanh-vien-nguoi-mua.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature weight">
                        <div class="title">
                            <a href="danh-muc/nguoi-ban.html">
                                <h2>For Supplier</h2>
                            </a>
                            <a class="view-all" href="danh-muc/nguoi-ban.html">
                                View all <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="box-feature weight">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 big-feature">
                                    <div class="img-feature">
                                        <a href="huong-dan-them-anh-dai-dien-cho-san-pham.html">
                                            <img class="img-responsive" src="../public/upload/files/Huong%20Dan/chen-anh-san-pham-1.jpg" alt="Hướng dẫn thêm ảnh đại diện cho sản phẩm chào bán">
                                        </a>
                                    </div>
                                    <div class="title-feature">
                                        <a href="huong-dan-them-anh-dai-dien-cho-san-pham.html">
                                            <h4>Hướng dẫn thêm ảnh đại diện cho sản phẩm chào bán</h4>
                                        </a>
                                    </div>
                                    <p class="content-feature">Sản phẩm có hình ảnh và mô tả chính xác, đầy đủ sẽ thu hút Người mua nhiều hơn.</p>
                                    <a href="huong-dan-them-anh-dai-dien-cho-san-pham.html" class="view-detail">
                                        View detail <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 list-sub-feature">
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="huong-dan-them-hinh-anh-va-video-vao-noi-dung-mo-ta-chi-tiet-cho-san-pham.html">
                                                <img class="img-responsive" src="../public/upload/files/Huong%20Dan/chen%20anh%201.jpg" alt="Hướng dẫn thêm hình ảnh và video vào nội dung mô tả chi tiết cho sản phẩm">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="huong-dan-them-hinh-anh-va-video-vao-noi-dung-mo-ta-chi-tiet-cho-san-pham.html">
                                                    <h4>Hướng dẫn thêm hình ảnh và video vào nội dung mô tả chi tiết cho sản phẩm</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Nếu nội dung bài viết về sản phẩm chỉ bao gồm chữ và chữ thì sẽ gây nhàm chán cho người đọc. Vì thế, bạn nên chèn thêm hình ảnh, video để tăng màu sắc và sự sinh động.</p>
                                            <a href="huong-dan-them-hinh-anh-va-video-vao-noi-dung-mo-ta-chi-tiet-cho-san-pham.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="dich-vu-dat-banner-quang-cao-tren-hatexvn.html">
                                                <img class="img-responsive" src="../public/upload/files/Huong%20Dan/trang%20chu.png" alt="Dịch vụ đặt banner quảng cáo trên Hatex.vn">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="dich-vu-dat-banner-quang-cao-tren-hatexvn.html">
                                                    <h4>Dịch vụ đặt banner quảng cáo trên Hatex.vn</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Dịch vụ đặt banner quảng cáo trên Hatex.vn</p>
                                            <a href="dich-vu-dat-banner-quang-cao-tren-hatexvn.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="cach-dang-san-pham-tren-hatexvn-cho-nguoi-moi-bat-dau.html">
                                                <img class="img-responsive" src="../public/upload/files/Huong%20Dan/Hatex.png" alt="Cách đăng sản phẩm trên Hatex.vn cho người mới bắt đầu">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="cach-dang-san-pham-tren-hatexvn-cho-nguoi-moi-bat-dau.html">
                                                    <h4>Cách đăng sản phẩm trên Hatex.vn cho người mới bắt đầu</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Cách đăng sản phẩm trên Hatex.vn là vấn đề mà nhiều người khi bán hàng trên sàn TMĐT này gặp rắc rối. Vậy làm thế nào để đăng sản phẩm lên Hatex.vn dễ dàng, nhanh chóng và mang lại hiệu quả cao nhất?</p>
                                            <a href="cach-dang-san-pham-tren-hatexvn-cho-nguoi-moi-bat-dau.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature weight">
                        <div class="title">
                            <a href="danh-muc/kinh-doanh-truc-tuyen.html">
                                <h2>The secret of successful business</h2>
                            </a>
                            <a class="view-all" href="danh-muc/kinh-doanh-truc-tuyen.html">
                                View all <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                        <div class="box-feature weight">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 big-feature">
                                    <div class="img-feature">
                                        <a href="san-giao-dich-cong-nghe-la-gi.html">
                                            <img class="img-responsive" src="../public/upload/files/Huong%20Dan/s%c3%a0n%20giao%20d%e1%bb%8bch%20c%c3%b4ng%20ngh%e1%bb%87%20l%c3%a0%20g%c3%ac(1).png" alt="Sàn giao dịch công nghệ là gì? ">
                                        </a>
                                    </div>
                                    <div class="title-feature">
                                        <a href="san-giao-dich-cong-nghe-la-gi.html">
                                            <h4>Sàn giao dịch công nghệ là gì? </h4>
                                        </a>
                                    </div>
                                    <p class="content-feature">Sàn giao dịch công nghệ là một loại hình tổ chức trung gian, một trong các yếu tố cấu thành quan trọng của thị trường KH&CN, có khả năng thực hiện tất cả các dịch vụ hỗ trợ các bên có nhu cầu giao dịch công nghệ, tài sản trí tuệ, từ chào mua, chào bán, giới thiệu, đại diện, đại lý, tư vấn, môi giới, hỗ trợ định giá, hỗ trợ kỹ thuật, hỗ trợ đàm phán, ký kết đến thực hiện giao dịch công nghệ, tài sản trí tuệ. </p>
                                    <a href="san-giao-dich-cong-nghe-la-gi.html" class="view-detail">
                                        View detail <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 list-sub-feature">
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="he-thong-lien-ket-cac-san-giao-dich-cong-nghe-va-thiet-bi-truc-tuyen-la-gi-.html">
                                                <img class="img-responsive" src="../public/upload/files/member_upload/h19/files/standee%20san%20vung(1).jpg" alt="Hệ thống liên kết các sàn giao dịch công nghệ và thiết bị trực tuyến là gì ?">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="he-thong-lien-ket-cac-san-giao-dich-cong-nghe-va-thiet-bi-truc-tuyen-la-gi-.html">
                                                    <h4>Hệ thống liên kết các sàn giao dịch công nghệ và thiết bị trực tuyến là gì ?</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Hệ thống liên kết các sàn giao dịch công nghệ và thiết bị trực tuyến là hệ thống bao gồm các sàn giao dịch công nghệ và thiết bị thành viên có quan hệ chặt chẽ, hình thành lên cơ chế phối hợp hoạt động giữa các sàn, tổ chức chuyên môn, tổ chức truyền thông, đồng thời xây dựng hệ thống dữ liệu (big data) đầy đủ.</p>
                                            <a href="he-thong-lien-ket-cac-san-giao-dich-cong-nghe-va-thiet-bi-truc-tuyen-la-gi-.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="san-giao-dich-cong-nghe-va-thiet-bi-truc-tuyen-la-gi-.html">
                                                <img class="img-responsive" src="../public/upload/files/member_upload/h19/files/3f5f6abf29ded3808acf%20-%20Copy.jpg" alt="Sàn giao dịch công nghệ và thiết bị trực tuyến là gì ?">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="san-giao-dich-cong-nghe-va-thiet-bi-truc-tuyen-la-gi-.html">
                                                    <h4>Sàn giao dịch công nghệ và thiết bị trực tuyến là gì ?</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Sàn giao dịch công nghệ và thiết bị trực tuyến là tổ chức trung gian quan trọng, có vai trò cốt lõi trong phát triển thị trường khoa học và công nghệ (KH&CN), đồng thời là nền tảng cho các hoạt động tư vấn, môi giới, xúc tiến chuyển giao, thương mại hóa công nghệ...</p>
                                            <a href="san-giao-dich-cong-nghe-va-thiet-bi-truc-tuyen-la-gi-.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub-feature d-flex">
                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                            <a href="4-ly-do-vi-sao-nen-mo-gian-hang-tren-cac-san-thuong-mai-dien-tu.html">
                                                <img class="img-responsive" src="../public/upload/files/Huong%20Dan/images%20(4).jpg" alt="4 Lý do vì sao nên mở gian hàng trên các sàn thương mại điện tử">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <div class="title-feature">
                                                <a href="4-ly-do-vi-sao-nen-mo-gian-hang-tren-cac-san-thuong-mai-dien-tu.html">
                                                    <h4>4 Lý do vì sao nên mở gian hàng trên các sàn thương mại điện tử</h4>
                                                </a>
                                            </div>
                                            <p class="content-sub-feature">Kinh doanh online đang là hình thức kinh doanh thịnh hành trong thời đại công nghệ 4.0. Với các doanh nghiệp, đặc biệt là doanh nghiệp vừa và nhỏ, việc tiếp cận và tận dụng sức mạnh của thương mại điện tử thông qua các sàn giao dịch lớn và uy tín là cách tốt nhất để vừa quảng bá sản phẩm, vừa thúc đẩy doanh số bán hàng và tạo dựng thương hiệu</p>
                                            <a href="4-ly-do-vi-sao-nen-mo-gian-hang-tren-cac-san-thuong-mai-dien-tu.html" class="view-detail">
                                                View detail <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 weight sales-off">
                    <div class="title">
                        <a href="#">
                            <h2>Advertisement</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Blog Page End Here -->
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
