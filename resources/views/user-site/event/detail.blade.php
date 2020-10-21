@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">﻿Home</a></li>
                    <li><a href="{{route('user.event.index')}}">Sự kiện</a></li>
                    <li class="active"><a href="#">{{$event->title}} </a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->
    <section class="detail-event">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 box-detail-event">
                    <div class="info-event">
                        @if ($event->type == 0)
                            <div class="date-wrapper">
                                <div class="date">
                                    <span
                                        class="month">{{\Carbon\Carbon::parse($event->start_date)->format('M')}}</span>
                                    <span class="day">{{\Carbon\Carbon::parse($event->start_date)->format('d')}}</span>
                                </div>
                            </div>
                        @endif

                        <div class="title">
                            <h1>
                                {{$event->title}}
                            </h1>
                        </div>
                        @if($event->type == 0)
                            <div class="location">
                                <span class="city">{{$event->address1}}</span> <i class="fa fa-map-marker"></i><span
                                    class="text-black">Địa điểm: </span>{{$event->address2}}
                            </div>
                        @endif

                        <div class="date-time">
                            <p><i class="fa fa-clock-o"></i><span
                                    class="text-black">Thời gian: </span>
                                @if($event->type ==0)
                                    {{date('d/m/Y', strtotime($event->start_date))}}

                                    - {{date('d/m/Y', strtotime($event->end_date))}}
                                @else
                                    {{date('d/m/Y', strtotime($event->created_at))}}
                                @endif
                            </p>
                        </div>
                        <div class="content-event">
                            {!! $event->description !!}

                        </div>
                        <div id="fb-root">
                            <div class="fb-like"
                                 data-href="https://hbtex.vn/su-kien/chuong-trinh-ket-noi-cong-nghe-giao-thuong-truc-tuyen-ve-linh-vuc-cong-nghe-va-thuc-pham-voi-doanh-nghiep-chlb-nga.html"
                                 data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"
                                 data-share="true"></div>
                        </div>
                        <div id="fb-root">
                            <div class="fb-comments"
                                 data-href="https://hbtex.vn/su-kien/chuong-trinh-ket-noi-cong-nghe-giao-thuong-truc-tuyen-ve-linh-vuc-cong-nghe-va-thuc-pham-voi-doanh-nghiep-chlb-nga.html"
                                 data-numposts="5" data-width="100%"></div>
                        </div>
                    </div>
                    @if($event -> type == 1)
                        <div class="related-notification weight">
                            <div class="title">
                                <h2>Recent notifications</h2>
                            </div>
                            <div class="content-related-notification">
                                <table class="table table-hover table-responsive">
                                    <tbody>
                                    @foreach($events as $key => $event)
                                        <tr>
                                            <td>
                                                <a href="{{route('user.event.detail', $event->slug)}}"><i
                                                        class="icon-event"></i>
                                                    {{$event->title}}

                                                    <span> {{$event->title}}</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="col-md-3 sales-off">
                    <div class="title mt-20">
                        <a>
                            <h2>Advertisement</h2>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
@section('styles')
    <link href="{{asset('/assets/frontend/css/page_event.css')}}" rel="stylesheet">
@endsection
@section('scripts')
    <script>
        $(function () {

        })


    </script>
@endsection
