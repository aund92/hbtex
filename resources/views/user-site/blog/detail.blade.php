@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">﻿Home</a></li>
                    <li><a href="{{route('user.blog.index')}}">Tin Tức</a></li>
                    <li><a href="{{route('user.blog.index2', $blog->blogCategory->slug)}}">{{$blog->blogCategory->category_name}} </a></li>
                    <li class="active"><a href="#">{{$blog->title}} </a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Page Start Here -->
    <div class="blog ptb-10  ptb-sm-60">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 order-1 order-lg-1 mt-20">
                    <aside>
                        <div class="single-sidebar latest-pro mb-30">
                            <h3 class="sidebar-title">Danh Mục</h3>
                            <ul class="sidbar-style">
                                @foreach($blogCategories as $key => $blogCategory)
                                    <li><a href="{{route('user.blog.index2', $blogCategory->slug)}}"
                                           target="_blank">{{$blogCategory->category_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="weight top-new mb-40">
                            <div class="title">
                                <h2>Quảng Cáo</h2>
                            </div>
                            <div class="mb-30">
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9 order-2 order-lg-2">
                    <div class="single-sidebar-desc mb-all-40">
                        <div class="hidden sidebar-img">
                            <img
                                src="{{asset($blog->image)}}"
                                alt="{{$blog->title}}">
                        </div>
                        <div class="sidebar-post-content">
                            <h3 class="sidebar-lg-title">{{$blog->title}}</h3>
                            <ul class="post-meta d-sm-inline-flex">
                                <li><span> {{$blog->created_at}}</span></li>
                                <li><span> </span></li>
                            </ul>
                        </div>
                        <div class="sidebar-desc mb-50">
                            {!! $blog->description !!}
                        </div>
{{--                        <div id="fb-root">--}}
{{--                            <div class="fb-like"--}}
{{--                                 data-href="https://hatex.vn/tin-tuc/ap-dung-phuong-phap-san-xuat-tinh-gon-trong-doanh-nghiep-theo-tps.html"--}}
{{--                                 data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"--}}
{{--                                 data-share="true"></div>--}}
{{--                        </div>--}}
{{--                        <div id="fb-root1">--}}
{{--                            <div class="fb-comments"--}}
{{--                                 data-href="https://hatex.vn/tin-tuc/ap-dung-phuong-phap-san-xuat-tinh-gon-trong-doanh-nghiep-theo-tps.html"--}}
{{--                                 data-numposts="5" data-width="100%"></div>--}}
{{--                        </div>--}}
{{--                        <div class="viewed-news">--}}
{{--                            <div class="section-ttitle">--}}
{{--                                <div class="row-title util-clearfix">--}}
{{--                                    <h4 class="main-title pull-left">--}}
{{--                                        Viewed articles--}}
{{--                                    </h4>--}}
{{--                                    <div class="sh-line"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="content-viewed-news">--}}
{{--                                <table class="table table-hover table-responsive">--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <a href="khai-mac-ngay-hoi-khoi-nghiep-sang-tao-hai-phong-lan-thu-4--techfest-haiphong-2020.html">--}}
{{--                                                <i class="icon-book-open"></i>--}}
{{--                                                Khai mạc Ng&agrave;y hội Khởi nghiệp s&aacute;ng tạo Hải Ph&ograve;ng--}}
{{--                                                lần thứ 4- Techfest Haiphong 2020--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            29/09/2020--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <a href="thanh-lap-trung-tam-phat-trien-khoa-hoc--cong-nghe-va-doi-moi-sang-tao.html">--}}
{{--                                                <i class="icon-book-open"></i>--}}
{{--                                                Th&agrave;nh lập Trung t&acirc;m Ph&aacute;t triển khoa học - c&ocirc;ng--}}
{{--                                                nghệ v&agrave; Đổi mới s&aacute;ng tạo--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            06/05/2020--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="viewed-news">
                            <div class="section-ttitle">
                                <div class="row-title util-clearfix">
                                    <h4 class="main-title pull-left">
                                        Tin tức liên quan
                                    </h4>
                                    <div class="sh-line"></div>
                                </div>
                            </div>
                            <div class="content-viewed-news">
                                <table class="table table-hover table-responsive">
                                    <tbody>
                                    @foreach($blogRalates as $key => $blogRelate)
                                        <tr>
                                            <td>
                                                <a href="{{route('user.blog.detail', $blogRelate->slug)}}">
                                                    <i class="icon-book-open"></i>
                                                    {{$blogRelate->title}}
                                                </a>
                                            </td>
                                            <td style="min-width: 100px">
                                                {{\Carbon\Carbon::parse($blogRelate->created_at)->toDateString()}}
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Blog Page End Here -->
        @endsection
        @section('scripts')
            <script>
                $(function () {

                })


            </script>
@endsection
