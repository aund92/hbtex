@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">﻿Home</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->
    <section class="detail-event">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 box-detail-notification">
                    <div class="info-notification">
                        <div class="title">
                            <h4>
                                Chính sách bảo vệ thông tin trên Hatex.vn
                            </h4>
                        </div>
                        <ul class="post-meta d-sm-inline-flex">
                            <li><i class="icon-calendar"></i><span> 17/09/2018</span></li>
                            <li><span> 899 Lượt xem</span></li>
                        </ul>
                        <div class="content-notification">
                            <p style="text-align: justify;"><strong>Bảo vệ quyền lợi của người tiêu dùng</strong></p>
                            <p style="text-align: justify;">- Công bố công khai, chi tiết thông tin về hatex.vn và Sàn giao dịch công nghệ và thiết bị Hải Phòng tại trang chủ của&nbsp;hatex.vn; công bố các cách thức liên hệ để khách hàng có thể dễ dàng được hỗ trợ và giải đáp khi sử dụng các dịch vụ được cung cấp bởi&nbsp;hatex.vn.</p>
                            <p style="text-align: justify;">- Ban quản lý Sàn giao dịch TMĐT hatex.vn ràng buộc các tổ chức, cá nhân, thương nhân khi đăng ký là thành viên, phải cung cấp đầy đủ thông tin liên quan đến việc mở gian hàng bán hàng hóa và cung ứng dịch vụ. Ban quản lý kiểm duyệt thông tin của các tổ chức, đơn vị, cá nhân, thương nhân đăng ký mở gian hàng và kiểm duyệt việc đăng hàng hóa và cung cấp thông tin để người tiêu dùng tiến hành giao dịch. Những nội dung, hàng hóa, dịch vụ nào không phù hợp hoặc chưa phù hợp, Ban quản lý sẽ không cho phép đăng lên Sàn giao dịch;</p>
                            <p style="text-align: justify;">- Người tiêu dùng có thể tham khảo các thông tin liên quan đến các tổ chức, thương nhân mở gian hàng bán hàng hóa và cung ứng dịch vụ như: tên tổ chức, tên người liên hệ, điện thoại liên lạc, địa chỉ, nick skype để Người tiêu dùng trực tiếp liên lạc và thực hiện các giao dịch trong quá trình mua hàng hóa, dịch vụ;</p>
                            <p style="text-align: justify;">-&nbsp; Ban quản lý xếp hạng các gian hàng của các tổ chức, thương nhân bằng việc đính logo biểu tượng thành viên (vàng, free) nhằm đánh giá uy tín của Thành viên, việc xếp hạng căn cứ vào: số lượng hàng hóa được đăng trên gian hàng và quá trình xác thực thông tin đối với thành viên vàng và bạc.</p>
                            <p style="text-align: justify;">- Các thông tin giao dịch thực hiện trên Sàn giao dịch TMĐT hatex.vn sẽ được ban quản trị kiểm soát.</p>
                            <p style="text-align: justify;">- Khi người tiêu dùng mua hàng hóa hoặc dịch vụ phát sinh mâu thuẫn với nhà cung cấp hoặc bị tổn hại lợi ích hợp pháp,&nbsp;hatex.vn&nbsp;sẽ&nbsp;cung cấp cho người tiêu dùng thông tin đăng ký của nhà cung cấp ngay sau khi nhận được yêu cầu của người mua, tích cực hỗ trợ người tiêu dùng bảo vệ quyền và lợi ích hợp pháp của bản thân.</p>
                            <p style="text-align: justify;">- Bảo vệ thông tin cá nhân của khách hàng trên&nbsp;hatex.vn</p>
                            <p style="text-align: justify;">Hatex hoàn toàn tôn trọng tính riêng tư và cam kết sẽ bảo mật thông tin cá nhân của thành viên sử dụng dịch vụ của hatex.vn. Chính sách bảo vệ thông tin cá nhân được trình bày dưới đây thể hiện những cam kết của Hatex trong việc thu thập, sử dụng và bảo vệ thông tin cá nhân của người sử dụng.</p>
                            <p style="text-align: justify;"><strong>Việc thu thập và sử dụng thông tin</strong></p>
                            <p style="text-align: justify;">- Đối với thông tin cá nhân của khách hàng</p>
                            <p style="text-align: justify;">Mẫu đăng ký thành viên của Hatex.vn yêu cầu khách hàng điền các thông tin cá nhân của thành viên (họ tên, địa chỉ, số điện thoại, địa chỉ email và một vài thông tin khác...). Chúng tôi cần các thông tin này để hỗ trợ các giao dịch của thành viên, cung cấp các thông tin về chính sách mới hay các kinh nghiệm quản lý sử dụng dịch vụ giúp thành viên hoạt động hiệu quả, … và để liên lạc với thành viên trong các trường hợp cần thiết.</p>
                            <p style="text-align: justify;">Ngoài ra, Hatex cũng sẽ thu thập các thông tin liên quan đến việc thống kê số lượng người truy cập, địa chỉ IP của người truy cập, các trang web được kết nối v.v… nhằm điều chỉnh, nâng cấp chất lượng dịch vụ phù hợp hơn với nhu cầu của khách hàng.</p>
                            <p style="text-align: justify;">Tuy nhiên, chúng tôi cam kết không tiết lộ thông tin cá nhân của khách hàng với bất kỳ một bên thứ ba nào ngoại trừ những trường hợp đặc biệt nêu ra trong vấn đề tiết lộ thông tin ở phía dưới đây.</p>
                            <p style="text-align: justify;">-&nbsp;&nbsp;Đối với thông tin đăng công khai trên Hatex.vn.</p>
                            <p style="text-align: justify;">Tất cả mọi thông tin mà người sử dụng điền trên mẫu đăng ký để trở thành thành viên và các thông tin đăng trên Hatex.vn như: thông tin giới thiệu, thông tin liên hệ và thông tin về sản phẩm dịch vụ của doanh nghiệp … để phục vụ cho hoạt động giao thương sẽ được đăng công khai trên Hatex.vn và có thể sẽ được các thành viên khác hay người sử dụng dịch vụ của chúng tôi tiếp cận đến. Do đó, chúng tôi khuyến cáo quý vị hãy cân nhắc và lựa chọn các thông tin phù hợp để &nbsp;</p>
                            <p style="text-align: justify;"><strong>Vấn đề tiết lộ thông tin</strong></p>
                            <p style="text-align: justify;">Chúng tôi có thể sử dụng hoặc được phép tiết lộ thông tin để giúp giải quyết những bất đồng, điều tra những vấn đề nẩy sinh, để thực thi những điều kiện và sự thoả thuận của các bên trong mối quan hệ với việc sử dụng Hatex.vn và các dịch vụ của mình. Chúng tôi bảo lưu quyền này khi có căn cứ để khẳng định rằng việc sử dụng và tiết lộ các thông tin đó là cần thiết để phòng và chống lại các hành vi bất hợp pháp gây thiệt hại đến quyền và các lợi ích hợp pháp của các bên có liên quan. Trong trường hợp được pháp luật quy định và theo yêu cầu của cơ quan nhà nước có thẩm quyền chúng tôi có thể cung cấp các thông tin mà không cần phải thông báo với quý vị. &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</p>
                            <p style="text-align: justify;"><strong>Vấn đề biên tập thông tin</strong></p>
                            <p style="text-align: justify;">Chúng tôi có thể biên tập là thông tin của khách hàng với mục đích cung cấp những thông tin có giá trị, đúng chính tả, đầy đủ cho người xem. Tuy nhiên, chúng tôi không có quyền biên tập nội dung thông tin của khách hàng, trừ những trường hợp thông tin đó không đúng sự thật, xuyên tác, phản động,....được định nghĩa là thông tin xấu.</p>
                            <p style="text-align: justify;">Địa chỉ liên lạc chính thức của Sàn giao dịch TMĐT hatex.vn là:</p>
                            <p style="text-align: justify;"><strong>Sàn giao dịch Công nghệ và Thiết bị Hải Phòng</strong></p>
                            <p style="text-align: justify;">Địa chỉ: Số 1, Phạm Ngũ Lão, Ngô Quyền, Hải Phòng</p>
                            <p style="text-align: justify;">Điện thoại:&nbsp;0225.3757101, 0913511004 (Ông Nguyễn Đình Vinh),</p>
                            <p style="text-align: justify;">Fax: 0225.3757110</p>
                            <p style="text-align: justify;">E-mail:&nbsp;<a href="mailto:thongtin@hatex.vn">thongtin@hatex.vn</a>&nbsp;hoặc info@hatex.vn</p>
                        </div>
                        <div id="fb-root">
                            <div class="fb-like" data-href="https://hatex.vn/thong-bao/chinh-sach-bao-ve-thong-tin-tren-hatexvn.html" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        </div>
                        <div id="fb-root1">
                            <div class="fb-comments" data-href="https://hatex.vn/thong-bao/chinh-sach-bao-ve-thong-tin-tren-hatexvn.html" data-numposts="5" data-width="100%"></div>
                        </div>
                    </div>
                    <div class="related-notification weight">
                        <div class="title">
                            <h2>Thông báo gần đây</h2>
                        </div>
                        <div class="content-related-notification">
                            <table class="table table-hover table-responsive">
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/thong-bao-thay-doi-ten-don-vi-quan-ly-san-tmdt-hatexvn.html"><i class="icon-event"></i>
                                            Thông báo thay đổi tên đơn vị quản lý sàn TMĐT Hatex.vn

                                            <span>Thông báo thay đổi tên đơn vị quản lý sàn TMĐT Hatex.vn</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/thong-bao-quy-dinh-ve-dang-ban-san-pham-tren-hatexvn.html"><i class="icon-event"></i>
                                            Thông báo: Quy định về đăng bán sản phẩm trên Hatex.vn

                                            <span>Thông báo: Quy định về đăng bán sản phẩm trên Hatex.vn</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/thong-bao-lich-nghi-tet-nguyen-dan-canh-ty-2020.html"><i class="icon-event"></i>
                                            Thông báo lịch nghỉ Tết Nguyên đán Canh Tý 2020

                                            <span>Thông báo lịch nghỉ Tết Nguyên đán Canh Tý 2020</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/thong-bao-lich-nghi-le-304-va-152019.html"><i class="icon-event"></i>
                                            Thông báo lịch nghỉ Lễ 30/4 và 1/5/2019

                                            <span>Thông báo lịch nghỉ Lễ 30/4 và 1/5/2019</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/chuong-trinh-ho-tro-tai-trien-lam-ket-qua-nghien-cuu-khcn-vung-dbsh-va-techfest-haiphong-2018.html"><i class="icon-event"></i>
                                            Chương trình hỗ trợ tại Triển lãm Kết quả nghiên cứu kH&amp;CN vùng ĐBSH và TECHFEST Haiphong 2018

                                            <span>Chương trình hỗ trợ tại Triển lãm Kết quả nghiên cứu kH&amp;CN vùng ĐBSH và TECHFEST Haiphong 2018</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/chinh-thuc-ra-mat-san-giao-dich-cong-nghe-va-thiet-bi-truc-tuyen-hatexvn-phien-ban-nang-cap-2018.html"><i class="icon-event"></i>
                                            Chính thức ra mắt Sàn giao dịch công nghệ và thiết bị trực tuyến Hatex.vn phiên bản nâng cấp 2018

                                            <span>Chính thức ra mắt Sàn giao dịch công nghệ và thiết bị trực tuyến Hatex.vn phiên bản nâng cấp 2018</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/chinh-sach-bao-ve-thong-tin-tren-hatexvn.html"><i class="icon-event"></i>
                                            Chính sách bảo vệ thông tin trên Hatex.vn

                                            <span>Chính sách bảo vệ thông tin trên Hatex.vn</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/thong-bao-lich-nghi-tet-nguyen-dan-2018.html"><i class="icon-event"></i>
                                            Thông báo lịch nghỉ tết nguyên đán 2018

                                            <span>Thông báo lịch nghỉ tết nguyên đán 2018</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/thong-bao-lich-nghi-le-quoc-khanh-29.html"><i class="icon-event"></i>
                                            Thông báo lịch nghỉ lễ Quốc Khánh 2/9

                                            <span>Thông báo lịch nghỉ lễ Quốc Khánh 2/9</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/tri-an-khach-hang---uu-dai-dac-biet-danh-cho-thanh-vien-trong-thang-82017.html"><i class="icon-event"></i>
                                            Tri ân khách hàng - Ưu đãi đặc biệt dành cho THÀNH VIÊN trong tháng 8/2017

                                            <span>Tri ân khách hàng - Ưu đãi đặc biệt dành cho THÀNH VIÊN trong tháng 8/2017</span>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="related-notification weight">
                        <div class="title">
                            <h2>Bài viết khác</h2>
                        </div>
                        <div class="content-related-notification">
                            <table class="table table-hover table-responsive">
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/thong-bao-lich-nghi-le-304-va-152019.html"><i class="icon-event"></i>
                                            Thông báo lịch nghỉ Lễ 30/4 và 1/5/2019

                                            <span>Thông báo lịch nghỉ Lễ 30/4 và 1/5/2019</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/quy-che-hoat-dong-cua-san-thuong-mai-dien-tu-hatexvn.html"><i class="icon-event"></i>
                                            Quy chế hoạt động của Sàn thương mại điện tử Hatex.vn

                                            <span>Quy chế hoạt động của Sàn thương mại điện tử Hatex.vn</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://hatex.vn/thong-bao/cap-nhat-thong-tin-san-pham-chinh-cua-thanh-vien-tren-gian-hang.html"><i class="icon-event"></i>
                                            Cập nhật thông tin sản phẩm chính của thành viên trên gian hàng

                                            <span>Cập nhật thông tin sản phẩm chính của thành viên trên gian hàng</span>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 weight sales-off">
                    <div class="title">
                        <a href="#">
                            <h2>Quảng cáo</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('styles')
    <link href="{{asset('/assets/frontend/css/page_event.css')}}" rel="stylesheet">
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
