@extends('user-site.layouts.app_user2')

@section('content')

    <!-- Breadcrumb Start -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('user.home.index')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('user.blog.index2', $blog->blogCategory->slug)}}">{{$blog->blogCategory->category_name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb End -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-details-thumb mb-50">
                        <img src="{{asset($blog->image)}}" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">{{$blog->blogCategory->category_name}}</a>
                                <a href="#" class="post-title mb-2">{{$blog->title}}</a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-author">By Jane</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">{{$blog->created_at}}</a>
                                    </div>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                    </div>
                                </div>
                            </div>

                            {!! $blog->description !!}

                            <!-- Post Tags -->
                            <div class="post-tags mt-30">
                                <ul>
                                    <li><a href="#">HealthFood</a></li>
                                    <li><a href="#">Sport</a></li>
                                    <li><a href="#">Game</a></li>
                                </ul>
                            </div>

                            <!-- Post Author -->


                            <!-- Related Post Area -->
                            <div class="related-post-area mt-5">
                                <!-- Section Title -->
                                <div class="section-heading style-2">
                                    <h4>Related Post</h4>
                                    <div class="line"></div>
                                </div>

                                <div class="row">
                                    @foreach($blogRalates as $key => $blogRelate)
                                        <!-- Single Blog Post -->
                                            <div class="col-12 col-md-6">
                                                <div class="single-post-area mb-50">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{asset($blogRelate->image)}}" alt="">

                                                        <!-- Video Duration -->
                                                        <span class="video-duration">05.03</span>
                                                    </div>

                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="#" class="post-cata cata-sm cata-success">{{$blogRelate->blogCategory->category_name}}</a>
                                                        <a href="{{route('user.blog.detail', $blogRelate->slug)}}" class="post-title">{{$blogRelate->title}}</a>
                                                        <div class="post-meta d-flex">
                                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    @endforeach

                                </div>
                            </div>

                            <!-- Comment Area Start -->


                            <!-- Post A Comment Area -->


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection
