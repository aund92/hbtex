<aside class="main-sidebar sidebar-dark-dark elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home.admin')}}" class="brand-link">
        <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image elevation-3"
             style="opacity: .8;max-height: 40px">
        <span class="brand-text font-weight-light"> HBTEX</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar taikhoan panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home.admin')}}"
                       class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_DASHBOARD])) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview @if(in_array($index, [\App\Consts\Consts::SIDEBAR_TAI_KHOAN, \App\Consts\Consts::SIDEBAR_BANNER])) menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                            {{--                                <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_TAI_KHOAN])) active @endif">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('banner.index')}}"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_BANNER])) active @endif">--}}
{{--                                <i class="fas fa-circle nav-icon"></i>--}}
{{--                                <p>Banner</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>

{{--                <li class="nav-item has-treeview @if(in_array($index, [\App\Consts\Consts::SIDEBAR_ORDER])) menu-open @endif">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-shopping-cart"></i>--}}
{{--                        <p>--}}
{{--                            Đơn Hàng--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            --}}{{--                                <span class="badge badge-info right">6</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('order.index')}}"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_ORDER])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Đơn Hàng--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-item has-treeview @if(in_array($index, [\App\Consts\Consts::SIDEBAR_REPORT1, \App\Consts\Consts::SIDEBAR_REPORT2])) menu-open @endif">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-file"></i>--}}
{{--                        <p>--}}
{{--                            Báo Cáo--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            --}}{{--                                <span class="badge badge-info right">6</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/gallery.html"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_REPORT1])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Hàng Tồn Kho--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/gallery.html"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_REPORT2])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Tiền Lãi--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="nav-item has-treeview @if(in_array($index, [\App\Consts\Consts::SIDEBAR_SUPLLY, \App\Consts\Consts::SIDEBAR_CUSTOMER, \App\Consts\Consts::SIDEBAR_CONTACT])) menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Khách Hàng
                            <i class="fas fa-angle-left right"></i>
                            {{--                                <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('supplier.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_SUPLLY])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Nhà Cung Cấp
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('customer.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_CUSTOMER])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Khách Hàng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_CONTACT])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Contact
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @if(in_array($index, [\App\Consts\Consts::SIDEBAR_DISCOUNT,\App\Consts\Consts::SIDEBAR_PRODUCT, \App\Consts\Consts::SIDEBAR_CATEGORY, \App\Consts\Consts::SIDEBAR_BRAND,  \App\Consts\Consts::SIDEBAR_CUSTOMER, \App\Consts\Consts::SIDEBAR_BLOG, \App\Consts\Consts::SIDEBAR_SKU, \App\Consts\Consts::SIDEBAR_SIZE, \App\Consts\Consts::SIDEBAR_COUNTRY, \App\Consts\Consts::SIDEBAR_SUPLLY, \App\Consts\Consts::SIDEBAR_BLOG_CATEGORY, \App\Consts\Consts::SIDEBAR_EVENT])) menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Master
                            <i class="fas fa-angle-left right"></i>
                            {{--                                <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_PRODUCT])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Sản Phẩm
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_CATEGORY])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Thể Loại Sản Phẩm
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('country.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_COUNTRY])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Xuất Xứ
                                </p>
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('sku.index')}}"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_SKU])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Màu sắc--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('discount.index')}}"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_DISCOUNT])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Khuyến Mãi--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a href="{{route('brand.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_BRAND])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Hãng
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blog.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_BLOG])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Tin tức
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blog-category.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_BLOG_CATEGORY])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Thể Loại Tin tức
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('event.index')}}"
                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_EVENT])) active @endif">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Sự Kiện
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
{{--                <li class="nav-item has-treeview @if(in_array($index, [\App\Consts\Consts::SIDEBAR_DISTRICT, \App\Consts\Consts::SIDEBAR_CITY, \App\Consts\Consts::SIDEBAR_WARD])) menu-open @endif">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-city"></i>--}}
{{--                        <p>--}}
{{--                            Tỉnh/ Thành Phố--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            --}}{{--                                <span class="badge badge-info right">6</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('city.index')}}"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_CITY])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Thành Phố--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('district.index')}}"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_DISTRICT])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Quận/Huyện--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('ward.index')}}"--}}
{{--                               class="nav-link @if(in_array($index, [\App\Consts\Consts::SIDEBAR_WARD])) active @endif">--}}
{{--                                <i class="nav-icon fas fa-circle"></i>--}}
{{--                                <p>--}}
{{--                                    Phường/Xã--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
