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
                    <li class="active"><a href="#">{{$blog->category_name}} </a></li>
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
                    <div class="section-ttitle">
                        <div class="row-title util-clearfix">
                            <h4 class="main-title pull-left">
                                <a href="#" target="_blank">{{$blog->category_name}} </a>
                            </h4>
                            <div class="sh-line"></div>
                        </div>
                    </div>
                    <div class="main-blog col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                @foreach($blogs as $key => $blog)
                                    <div class="sub-blog ">
                                        <div class="thumb-img">
                                            <a href="{{route('user.blog.detail', $blog->slug)}}" target="_blank">
                                                <img class="img-responsive"
                                                     src="{{asset($blog->image)}}"
                                                     alt="{{$blog->title}}">
                                            </a>
                                        </div>
                                        <a href="{{route('user.blog.detail', $blog->slug)}}">
                                            <h4 class="blog-title pb-10">{{$blog->title}}</h4>
                                        </a>
                                        <span class="blog-description">
                                            {{$blog->short_description}}
                                        </span>
                                        <a href="{{route('user.blog.detail', $blog->slug)}}" target="_blank"
                                           class="view-more">View more <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{ $blogs->links('vendor.pagination.page-user') }}
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
