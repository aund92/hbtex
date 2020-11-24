@extends('user-site.layouts.app_user2')

@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('user.home.index')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">{{$blog->category_name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <!-- ##### Archive List Posts Area Start ##### -->
    <div class="vizew-archive-list-posts-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <!-- Archive Catagory & View Options -->
                    <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                        <!-- Catagory -->
                        <div class="archive-catagory">
                            <h4><i class="fa fa-music" aria-hidden="true"></i> {{$blog->category_name}} </h4>
                        </div>
                        <!-- View Options -->
                        <div class="view-options">
                            <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="#" class="active"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @foreach($blogs as $key => $blog)

                        <div class="single-post-area style-2">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">

                                        <!-- Video Duration -->
{{--                                        <span class="video-duration">05.03</span>--}}
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
{{--                                        <a href="#" class="post-cata cata-sm cata-success">Sports</a>--}}
                                        <a href="{{route('user.blog.detail', $blog->slug)}}" class="post-title mb-2">{{$blog->title}}</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By Jane</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">{{$blog->created_at}}</a>
                                        </div>
                                        <p class="mb-2">
                                            {!! $blog->short_description !!}
                                        </p>
                                        <div class="post-meta d-flex">
{{--                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>--}}
{{--                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>--}}
{{--                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Single Post Area -->

                    {{ $blogs->links('vendor.pagination.page-user') }}
                    <!-- Pagination -->
                    <nav class="mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
    <!-- ##### Archive List Posts Area End ##### -->


    <!-- Blog Page Start Here -->

    <!-- Blog Page End Here -->
@endsection
@section('scripts')

@endsection
