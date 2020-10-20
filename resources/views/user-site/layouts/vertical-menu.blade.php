<div class="main-page-banner off-white-bg">
    <div class="container">
        <div class="row">
            <!-- Vertical Menu Start Here -->
            <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                <div class="vertical-menu mb-all-30">
                    <nav>
                        <ul class="vertical-menu-list" style="display:none;">
                            @if(isset($categories))
                                @foreach($categories as $key => $category)
                                    <li class="dropdown">
                                        <a href="{{route('user.product.index', $category->slug)}}" target="_blank">
                                        <span>
                                            <img src="{{asset($category->icon)}}" alt="menu-icon">
                                        </span>
                                            {{$category->category_name}}<i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i>
                                        </a>
                                        <ul class="ht-dropdown mega-child">
                                            @foreach($category->childCategory as $key2 => $category2)
                                                <li><a href="{{route('user.product.index', $category2->slug)}}"
                                                       target="_blank">{{$category2->category_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            @endif

                            <li>
                                <a href="{{route('user.categories.index')}}" target="_blank"><strong>Tất cả danh mục</strong><i
                                        class="fa fa-plus" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Vertical Menu End Here -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
