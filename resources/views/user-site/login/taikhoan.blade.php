@extends('user-site.layouts.app_user2')

@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Thông Tin Tài Khoản</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="{{route('user.home.index')}}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Thông Tin Tài Khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="dashboard_menu">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard"
                                       role="tab" aria-controls="dashboard" aria-selected="false"><i
                                            class="ti-layout-grid2"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab"
                                       aria-controls="orders" aria-selected="false"><i
                                            class="ti-shopping-cart-full"></i>Đơn Hàng</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail"
                                       role="tab" aria-controls="account-detail" aria-selected="true"><i
                                            class="ti-id-badge"></i>Thông Tin Tài Khoản</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="$('#logoutForm').submit()"><i
                                            class="ti-lock"></i>Đăng Xuất</a>
                                    <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                 aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Dashboard</h3>
                                    </div>
                                    <div class="card-body">
                                        {{--                                        <p>From your account dashboard. you can easily check &amp; view your <a href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')">recent orders</a>, manage your <a href="javascript:void(0);" onclick="$('#address-tab').trigger('click')">shipping and billing addresses</a> and <a href="javascript:void(0);" onclick="$('#account-detail-tab').trigger('click')">edit your password and account details.</a></p>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Đơn Hàng</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Mã Đơn Hàng</th>
                                                    <th>Ngày Đặt</th>
                                                    <th>Trạng Thái</th>
                                                    <th>Sản Phẩm</th>
                                                    <th>Tổng</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td>#{{$order->id}}</td>
                                                        <td>{{$order->created_at}}</td>
                                                        <td>
                                                            @if($order->status == \App\Consts\Consts::ORDER_STATUS_REQUEST)
                                                                <span class="badge badge-secondary">Request</span>
                                                            @elseif($order->status == \App\Consts\Consts::ORDER_STATUS_CONFIRM)
                                                                <span class="badge badge-success">Xác Nhận Qua Điện Thoại</span>
                                                            @elseif($order->status == \App\Consts\Consts::ORDER_STATUS_SHIPPING)
                                                                <span class="badge badge-success">Đang Ship</span>
                                                            @elseif($order->status == \App\Consts\Consts::ORDER_STATUS_DONE)
                                                                <span class="badge badge-success">Đã nhận hàng</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$order->orderItem->count()}}</td>
                                                        <td>{{number_format($order->orderItem->sum('sub_total'))}}</td>
                                                        <td><a href="#" class="btn btn-fill-out btn-sm"
                                                               onclick="showDetail({{$order->id}})">View</a></td>
                                                    </tr>
                                                @endforeach
                                                <div class="modal fade" id="modal-xl">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Chi Tiết Đơn Hàng</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-fill-out"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="account-detail" role="tabpanel"
                                 aria-labelledby="account-detail-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Thông Tin Tài Khoản</h3>
                                    </div>
                                    <div class="card-body">

                                        <form method="post" name="enq">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="name" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="phone">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Display Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="dname" type="text">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="email" type="email">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Current Password <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="password"
                                                           type="password">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>New Password <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="npassword"
                                                           type="password">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Confirm Password <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="cpassword"
                                                           type="password">
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out" name="submit"
                                                            value="Submit">Save
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->
        @endsection
        @section('styles')
            <style>

            </style>
        @endsection
        @section('scripts')
            <script>
                $(function () {

                })

                function showDetail(id) {
                    // $('.modal-content').html('OrderId=' + id);
                    // $('#myModal').modal('show')
                    $.ajax({
                        url: "/taikhoan/donhang/" + id,
                        type: "GET",
                        data: {},
                        success: function (response) {
                            $(".modal-body").html(response);
                            $("#modal-xl").modal();
                        },
                    });
                }
            </script>
@endsection
