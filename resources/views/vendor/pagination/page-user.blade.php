@if ($paginator->hasPages())
    <div class="pro-pagination">
        <ul class="pagination">
{{--            <li class="disabled"><span>&laquo;</span></li>--}}
{{--            <li class="active"><span>1</span></li>--}}
{{--            <li><a href="danh-sach4658.html?page=2">2</a></li>--}}
{{--            <li><a href="danh-sach9ba9.html?page=3">3</a></li>--}}
{{--            <li><a href="danh-sachfdb0.html?page=4">4</a></li>--}}
{{--            <li><a href="danh-sachaf4d.html?page=5">5</a></li>--}}
{{--            <li><a href="danh-sachc575.html?page=6">6</a></li>--}}
{{--            <li><a href="danh-sach235c.html?page=7">7</a></li>--}}
{{--            <li><a href="danh-sachfdfa.html?page=8">8</a></li>--}}
{{--            <li class="disabled"><span>...</span></li>--}}
{{--            <li><a href="danh-sach2b44.html?page=797">797</a></li>--}}
{{--            <li><a href="danh-sachc163.html?page=798">798</a></li>--}}
{{--            <li><a href="danh-sach4658.html?page=2" rel="next">&raquo;</a></li>--}}
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="@lang('pagination.next')">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&raquo;</span>
                </li>
            @endif
        </ul>
        <span class="product-pagination">Show {{$paginator->count()}} of {{$paginator->total()}} results</span>
        <ul class="text-right pagination-right">
            <li class="list-inline-item">Go to page</li>
            <li class="list-inline-item"><input class="form-control" name="page"
                                                type="number" min="1" max="798" disabled/></li>
        </ul>
    </div>
    {{--    <nav>--}}
    {{--        <ul class="pagination pagination_style1 justify-content-center">--}}
    {{--            --}}{{-- Previous Page Link --}}
    {{--            @if ($paginator->onFirstPage())--}}
    {{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
    {{--                    <span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
    {{--                </li>--}}
    {{--            @else--}}
    {{--                <li class="page-item"><a class="page-link" aria-label="@lang('pagination.previous')" href="{{ $paginator->previousPageUrl() }}" tabindex="-1"><i--}}
    {{--                            class="linearicons-arrow-left"></i></a></li>--}}
    {{--                <li class="page-item">--}}

    {{--                    <a class="page-link" href="" rel="prev"--}}
    {{--                       >&lsaquo;</a>--}}
    {{--                </li>--}}
    {{--            @endif--}}




    {{--            --}}{{-- Pagination Elements --}}
    {{--            @foreach ($elements as $element)--}}
    {{--                --}}{{-- "Three Dots" Separator --}}
    {{--                @if (is_string($element))--}}
    {{--                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>--}}
    {{--                    </li>--}}
    {{--                @endif--}}

    {{--                --}}{{-- Array Of Links --}}
    {{--                @if (is_array($element))--}}
    {{--                    @foreach ($element as $page => $url)--}}
    {{--                        @if ($page == $paginator->currentPage())--}}
    {{--                            <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>--}}
    {{--                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span>--}}
    {{--                            </li>--}}
    {{--                        @else--}}
    {{--                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
    {{--                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
    {{--                        @endif--}}
    {{--                    @endforeach--}}
    {{--                @endif--}}
    {{--            @endforeach--}}

    {{--            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
    {{--            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}

    {{--            --}}{{-- Next Page Link --}}
    {{--            @if ($paginator->hasMorePages())--}}
    {{--                <li class="page-item">--}}
    {{--                    <a class="page-link" href="" rel="next"--}}
    {{--                       aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
    {{--                </li>--}}
    {{--                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i--}}
    {{--                            class="linearicons-arrow-right" aria-label="@lang('pagination.next')"></i></a></li>--}}
    {{--            @else--}}
    {{--                <li class="page-item disabled"><a class="page-link" href="#"><i--}}
    {{--                            class="linearicons-arrow-right" aria-label="@lang('pagination.next')"></i></a></li>--}}
    {{--                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
    {{--                    <span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
    {{--                </li>--}}
    {{--            @endif--}}
    {{--        </ul>--}}
    {{--        <div class="nav nav-item justify-content-center">--}}
    {{--            Hiển Thị {{$paginator->count()}}/{{$paginator->total()}}--}}
    {{--        </div>--}}
    {{--    </nav>--}}
@else
    <div class="nav nav-item justify-content-center">
        Hiển Thị {{$paginator->count()}}
    </div>

@endif
