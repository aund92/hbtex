@extends('user-site.layouts.app_user2')

@section('content')
    <!-- ##### Hero Area Start ##### -->
{{--    @foreach($blogCategories as $key => $blogCategory)--}}
{{--        @if(count($blogCategory->blogs) > 0)--}}
            <section class="hero--area section-padding-80">
                <div class="container">

                    <div class="row no-gutters">
                        <div class="col-12 col-md-7 col-lg-8">
                            <div class="tab-content">
                                @foreach($blogs as $key2 => $blog)
                                    <div class="tab-pane fade {{$key2 == 0 ? 'show active' : ''}} " id="post-{{$key2 + 1}}" role="tabpanel" aria-labelledby="post-{{$key2 + 1}}-tab">
                                        <!-- Single Feature Post -->
                                        <div class="single-feature-post video-post bg-img" style="background-image: url({{asset($blog->image)}});">
                                            <!-- Play Button -->
                                        {{--                                        <a href="video-post.html" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>--}}

                                        <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="post-cata">Sports</a>
                                                <a href="{{route('user.blog.detail', $blog->slug)}}" class="post-title">{{$blog->title}}</a>
                                                <div class="post-meta d-flex">
                                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                                </div>
                                            </div>

                                            <!-- Video Duration -->
                                            {{--                                        <span class="video-duration">05.03</span>--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12 col-md-5 col-lg-4">
                            <ul class="nav vizew-nav-tab" role="tablist">
                                @foreach($blogs as $key2 => $blog)
                                    <li class="nav-item">
                                        <a class="nav-link {{$key2 == 0 ? 'active' : ''}}" id="post-{{$key2 + 1}}-tab" data-toggle="pill" href="#post-{{$key2 + 1}}" role="tab" aria-controls="post-{{$key2 + 1}}" aria-selected="true">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post style-2 d-flex align-items-center">
                                                <div class="post-thumbnail">
                                                    <img src="{{asset($blog->image)}}" alt="">
                                                </div>
                                                <div class="post-content">
                                                    <h6 class="post-title">{{$blog->title}}</h6>
                                                    <div class="post-meta d-flex justify-content-between">
                                                        <span><i class="fa fa-comments-o" aria-hidden="true"></i> 25</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 11</span>
                                                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 19</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </section>
{{--        @endif--}}

{{--    @endforeach--}}

    <!-- ##### Hero Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
        @foreach($blogCategories as $key => $blogCategory)
            @if(count($blogCategory->blogs) > 0)
                <section class="vizew-post-area mb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="all-posts-area">
                                    <!-- Section Heading -->
                                    <div class="section-heading style-2">
                                        <h4>{{$blogCategory->category_name}}</h4>
                                        <div class="line"></div>
                                    </div>

                                    <!-- Featured Post Slides -->
                                    <div class="featured-post-slides owl-carousel mb-30">
                                        <!-- Single Feature Post -->
                                        @foreach($blogCategory->blogs as $key2 => $blog)

                                            <div class="single-feature-post video-post bg-img" style="background-image: url({{asset($blog->image)}});">
                                                <!-- Play Button -->
                                                <a href="{{route('user.blog.detail', $blog->slug)}}" class="btn play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>

                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="post-cata">Sports</a>
                                                    <a href="{{route('user.blog.detail', $blog->slug)}}" class="post-title">{{$blog->title}}</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                                    </div>
                                                </div>

                                                <!-- Video Duration -->
{{--                                                <span class="video-duration">05.03</span>--}}
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="row">
                                        <!-- Single Blog Post -->
                                        @foreach($blogCategory->blogs as $key2 => $blog)
                                            @if($key2 <= 3)
                                                <div class="col-12 col-md-3">
                                                    <div class="single-post-area mb-80">
                                                        <!-- Post Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">

                                                            <!-- Video Duration -->
{{--                                                            <span class="video-duration">05.03</span>--}}
                                                        </div>

                                                        <!-- Post Content -->
                                                        <div class="post-content">
{{--                                                            <a href="#" class="post-cata cata-sm cata-danger">Game</a>--}}
                                                            <a href="{{route('user.blog.detail', $blog->slug)}}" class="post-title">{{$blog->title}}</a>
                                                            <div class="post-meta d-flex">
                                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </section>
            @endif
        @endforeach

    <!-- ##### Vizew Psot Area End ##### -->


@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
