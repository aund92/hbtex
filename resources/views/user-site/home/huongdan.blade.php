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
                    @foreach($blogCategories as $key => $blogCategory)
                        @if(count($blogCategory->blogs) > 0)
                            <div class="feature weight">
                                <div class="title">
                                    <a href="{{route('user.blog.index2', $blogCategory->slug)}}">
                                        <h2>{{$blogCategory->category_name}}</h2>
                                    </a>
                                    <a class="view-all" href="#">
                                        View all <i class="fa fa-caret-right"></i>
                                    </a>
                                </div>
                                <div class="box-feature weight">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 big-feature">
                                            @foreach($blogCategory->blogs as $key2 => $blog)
                                                @if($key2 == 0)

                                                    <div class="img-feature">
                                                        <a href="{{route('user.blog.detail', $blog->slug)}}">
                                                            <img class="img-responsive" src="{{asset($blog->image)}}"
                                                                 alt="{{asset($blog->title)}}">
                                                        </a>
                                                    </div>
                                                    <div class="title-feature">
                                                        <a href="{{route('user.blog.detail', $blog->slug)}}">
                                                            <h4>{{$blog->title}}</h4>
                                                        </a>
                                                    </div>
                                                    <p class="content-feature">{{$blog->short_description}}  </p>
                                                    <a href="{{route('user.blog.detail', $blog->slug)}}"
                                                       class="view-detail">
                                                        View detail <i class="fa fa-angle-double-right"></i>
                                                    </a>

                                                @endif
                                            @endforeach
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 list-sub-feature">
                                            @foreach($blogCategory->blogs as $key2 => $blog)
                                                @if($key2 != 0)
                                                    <div class="sub-feature d-flex">
                                                        <div class="img-feature col-md-4 col-sm-4 col-xs-4">
                                                            <a href="{{route('user.blog.detail', $blog->slug)}}">
                                                                <img class="img-responsive"
                                                                     src="{{asset($blog->image)}}"
                                                                     alt="Product search guides">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                                            <div class="title-feature">
                                                                <a href="{{route('user.blog.detail', $blog->slug)}}">
                                                                    <h4>{{$blog->title}}</h4>
                                                                </a>
                                                            </div>
                                                            <p class="content-sub-feature">{{$blog->short_description}} </p>
                                                            <a href="{{route('user.blog.detail', $blog->slug)}}" class="view-detail">
                                                                View detail <i class="fa fa-angle-double-right"></i>
                                                            </a>
                                                        </div>
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
