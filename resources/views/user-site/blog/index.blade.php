@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">﻿Home</a></li>
                    <li class="active"><a href="#">Tin Công Nghệ</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->

    <div class="blog ptb-20  ptb-sm-60">
        <div class="container">
            @foreach($blogCategories as $key => $blogCategory)
                @if(count($blogCategory->blogs) > 0)
                    <div class="section-ttitle">
                        <div class="row-title util-clearfix">
                            <h4 class="main-title pull-left">
                                <a href="{{route('user.blog.index2', $blogCategory->slug)}}"
                                   target="_blank">{{$blogCategory->category_name}}</a>
                            </h4>
                            <div class="sh-line"></div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="main-blog col-md-12">
                            <div class="row">
                                <div class="first-blog col-md-6">
                                    @foreach($blogCategory->blogs as $key2 => $blog)
                                        @if($key2 == 0)
                                            <div class="thumb-img">
                                                <a href="{{route('user.blog.detail', $blog->slug)}}"
                                                   target="_blank">
                                                    <img class="img-responsive"
                                                         src="{{asset($blog->image)}}"
                                                         alt="{{asset($blog->title)}}">
                                                </a>
                                            </div>
                                            <a href="{{route('user.blog.detail', $blog->slug)}}"
                                               target="_blank">
                                                <h4 class="blog-title">{{$blog->title}}</h4>
                                            </a>
                                            <span class="blog-description">
                                                {!! $blog->short_description !!}
                                            </span>
                                            <a href="{{route('user.blog.detail', $blog->slug)}}"
                                               target="_blank" class="view-more">View more <i
                                                    class="fa fa-angle-double-right"></i></a>

                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    @foreach($blogCategory->blogs as $key2 => $blog)
                                        @if($key2 != 0)
                                            <div class="sub-blog ">
                                                <div class="thumb-img">
                                                    <a href="#"
                                                       target="_blank">
                                                        <img class="img-responsive"
                                                             src="{{asset($blog->image)}}"
                                                             alt="{{$blog->title}}">
                                                    </a>
                                                </div>
                                                <a href="{{route('user.blog.detail', $blog->slug)}}">
                                                    <h4 class="blog-title pb-10">{{$blog->title}}</h4>
                                                </a>
                                                <span class="blog-description">
                                                {!! $blog->short_description !!}
                                            </span>
                                                <a href="{{route('user.blog.detail', $blog->slug)}}"
                                                   target="_blank" class="view-more">View more <i
                                                        class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            @endforeach


        </div>
        <!-- Container End -->
    </div>
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
