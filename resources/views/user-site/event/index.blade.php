@extends('user-site.layouts.app_user')

@section('content')
    @include('user-site.layouts.vertical-menu')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('user.home.index')}}">﻿Home</a></li>
                    <li class="active"><a href="#">Sự Kiện</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->

    <div class="blog ptb-20  ptb-sm-60 list-event">
        <div class="container">
            <div class="row" id="img-event">
            </div>
            <div class="row">
                <div class="col-md-10 box-list-event">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="upcoming-event text-center">
                            <a data-toggle="tab" href="#tab-1" class="active">Sự kiện sắp diễn ra</a>
                        </li>
                        <li class="old-event text-center"><a data-toggle="tab" href="#tab-2">Passed events</a></li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div id="tab-1" data-reverse-dom="true" class="tab-pane fade show active">
                            @foreach($events as $key => $event)
                                <div class="info-event">
                                    <div class="date-wrapper">
                                        <div class="date">
                                            <span
                                                class="month">{{\Carbon\Carbon::parse($event->start_date)->format('M')}}</span>
                                            <span
                                                class="day">{{\Carbon\Carbon::parse($event->start_date)->format('d')}}</span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <a href="{{route('user.event.detail', $event->slug)}}">
                                            <h4>
                                                {{$event->title}}
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="location">
                                        <span class="city">{{$event->address1}}</span> <i
                                            class="fa fa-map-marker"></i><span
                                            class="text-black">Địa Điểm: </span>{{$event->address2}}
                                    </div>
                                    <div class="date-time">
                                        <p><i class="fa fa-clock-o"></i><span
                                                class="text-black">Thời Gian: </span>{{date('d/m/Y', strtotime($event->start_date))}}
                                            -
                                            {{date('d/m/Y', strtotime($event->end_date))}}</p>
                                    </div>
                                    <div class="content-event d-flex">
                                        <div class="col-md-4 col-sm-4 col-xs-12 img-event">
                                            <a href="../ngay-hoi-khoi-nghiep-doi-moi-sang-tao-quoc-gia-techfest-vietnam-2020.html">
                                                <img class="img-responsive"
                                                     src="../../public/upload/files/tin%20tuc%20-%20su%20kien%202020/techfest-2020.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 description">
                                            {!! $event->short_description !!}
                                            <div class="view-detail">
                                                <a href="{{route('user.event.detail', $event->slug)}}">Chi Tiết <i
                                                        class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    <div class="remind">--}}
                                    {{--                                        <a href="#modal-login" data-pending="event" data-key="641" data-toggle="modal">Remind--}}
                                    {{--                                            me</a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            @endforeach

                            <div class="view-all">
                                {{ $events->links('vendor.pagination.page-user') }}
                            </div>

                        </div>
                        <div id="tab-2" class="tab-pane fade ">
                            @foreach($events2 as $key => $event)
                                <div class="info-event">
                                    <div class="date-wrapper">
                                        <div class="date">
                                            <span
                                                class="month">{{\Carbon\Carbon::parse($event->start_date)->format('M')}}</span>
                                            <span
                                                class="day">{{\Carbon\Carbon::parse($event->start_date)->format('d')}}</span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <a href="{{route('user.event.detail', $event->slug)}}">
                                            <h4>
                                                {{$event->title}}
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="location">
                                        <span class="city">{{$event->address1}}</span> <i
                                            class="fa fa-map-marker"></i><span
                                            class="text-black">Địa Điểm: </span>{{$event->address2}}
                                    </div>
                                    <div class="date-time">
                                        <p><i class="fa fa-clock-o"></i><span
                                                class="text-black">Thời Gian: </span>{{date('d/m/Y', strtotime($event->start_date))}}
                                            -
                                            {{date('d/m/Y', strtotime($event->end_date))}}</p>
                                    </div>
                                    <div class="content-event d-flex">
                                        <div class="col-md-4 col-sm-4 col-xs-12 img-event">
                                            <a href="../ngay-hoi-khoi-nghiep-doi-moi-sang-tao-quoc-gia-techfest-vietnam-2020.html">
                                                <img class="img-responsive"
                                                     src="../../public/upload/files/tin%20tuc%20-%20su%20kien%202020/techfest-2020.jpg"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 description">
                                            {!! $event->short_description !!}
                                            <div class="view-detail">
                                                <a href="{{route('user.event.detail', $event->slug)}}">Chi Tiết <i
                                                        class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    <div class="remind">--}}
                                    {{--                                        <a href="#modal-login" data-pending="event" data-key="641" data-toggle="modal">Remind--}}
                                    {{--                                            me</a>--}}
                                    {{--                                    </div>--}}
                                </div>
                            @endforeach

                            <div class="view-all">
                                {{ $events2->links('vendor.pagination.page-user') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 ads-left mt-40">
                    <div class="weight">
                        <div class="title">
                            <h2>Advertisement</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
