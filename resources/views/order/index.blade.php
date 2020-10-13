@extends('layouts.app')
@section('content')
    @if(session()->get('message'))
        <div class="alert alert-success">
            <b>{{ session()->get('message') }}</b>
        </div>
    @endif
    @if(session()->get('error_message'))
        <div class="alert alert-danger">
            <b>{{ session()->get('error_message') }}</b>
        </div>
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="card-title">
{{--                        <a href="{{route('blog.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm--}}
{{--                            mới</a>--}}
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Đơn Hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="form-group row">
                                <div class="col-12 text-right">
                                    <form method="post" action="{{route('order.change-status')}}">
                                        @csrf
                                        <input type="hidden" id="ids" name="ids" value="">
                                        <button type="submit" name="action" value="confirm" class="btn btn-dark">Xác Nhận Đặt Hàng</button>
                                        <button type="submit" name="action" value="shipping" class="btn btn-dark">Shipping</button>
                                        <button type="submit" name="action" value="done" class="btn btn-dark">Done</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th style="min-width: 60px"></th>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Status</th>
                                    <th style="min-width: 150px">Tên Khách Hàng</th>
                                    <th >Email</th>
                                    <th style="min-width: 150px">Số Điện Thoại</th>
{{--                                    <th style="min-width: 100px">Giới Tính</th>--}}
{{--                                    <th style="min-width: 100px">Thành Phố</th>--}}
{{--                                    <th style="min-width: 100px">Quận/Huyện</th>--}}
{{--                                    <th style="min-width: 100px">Phường/Xã</th>--}}
                                    <th style="min-width: 170px">Địa Chỉ Giao Hàng</th>
                                    <th style="min-width: 150px">Payment Method</th>
                                    <th style="min-width: 200px">Ngày Đặt</th>
                                    <th>Chú Ý</th>
                                    <th style="min-width: 80px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $key => $item)
                                    <tr class="h-50">
                                        <td>
                                            <input type="checkbox" class="form-control" name="id" onclick="setId({{$item->id}})">
                                        </td>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            @if($item->status == \App\Consts\Consts::ORDER_STATUS_REQUEST)
                                                <span class="badge badge-secondary">Request</span>
                                            @elseif($item->status == \App\Consts\Consts::ORDER_STATUS_CONFIRM)
                                                <span class="badge badge-info">Xác Nhận</span>
                                            @elseif($item->status == \App\Consts\Consts::ORDER_STATUS_SHIPPING)
                                                <span class="badge badge-warning">Đang Ship</span>
                                            @elseif($item->status == \App\Consts\Consts::ORDER_STATUS_DONE)
                                                <span class="badge badge-success">Đã Thanh Toán</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->customer_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{$item->phone_number}}</td>
{{--                                        <td>{{$item->gender == 1 ? "Male" : "Female"}}</td>--}}
{{--                                        <td>{{$item->city_name}}</td>--}}
{{--                                        <td>{{$item->district_name}}</td>--}}
{{--                                        <td>{{$item->ward_name}}</td>--}}
                                        <td>{{$item->address_shipping}}</td>
                                        <td><span class="badge badge-info">{{$item->payment_method == 1 ? "COD" : "Chuyển Khoản"}}</span></td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->note}}</td>
                                        <td>
                                            <div class="row">
                                                <a href="#" onclick="showDetail({{$item->id}})"
                                                   class="nav-link border border-light rounded waves-effect btn-sm bg-primary ml-3">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <div class="modal fade" id="modal-xl">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Chi Tiết Đơn Hàng</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $items->links() }}
                        </div>

                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        var ids = [];
        $(function () {

        });
        function showDetail(id) {
            // $('.modal-content').html('OrderId=' + id);
            // $('#myModal').modal('show')
            $.ajax({
                url: "/admin/order/" + id,
                type: "GET",
                data: {
                },
                success: function (response) {
                    $(".modal-body").html(response);
                    $("#modal-xl").modal();
                },
            });
        }

        function setId($orderId) {
            const index = ids.indexOf($orderId);
            if (index > -1) {
                ids.splice(index, 1);
            } else {
                ids.push($orderId);
            }
            $("#ids").val(ids.join(','));

        }
    </script>
@endsection
