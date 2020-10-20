@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <section class="grid-shop list-buy-product">
        <div class="container">
            <ol class="breadcrumb mt-20">
                <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">﻿Home</a></li>
                <li class="breadcrumb-item active">Tất cả danh mục</li>
            </ol>
            <div class="row d-flex">
                @foreach($categories as $key => $category)
                    <div class="col-md-4 weight box-category">
                        <ul>
                            <div class="title">
                                <h2><a href="{{route('user.product.index', $category->slug)}}">{{$category->category_name}} <span>({{count($category->products)}})</span></a>
                                </h2>
                            </div>
                            @foreach($category->childCategory as $key2 => $category2)
                                <li><a href="{{route('user.product.index', $category2->slug)}}">{{$category2->category_name}} ({{count($category2->products)}})</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- /.grid-shop -->
    </section>
    <!-- Blog Page End Here -->
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
