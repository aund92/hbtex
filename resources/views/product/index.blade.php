@extends('layouts.app')
@section('content')
    @if(session()->get('message'))
        <div class="alert alert-success">
            <b>{{ session()->get('message') }}</b>
        </div>
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="card-title">
                        <a href="{{route('product.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm
                            mới</a>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                        <!-- /.card-header -->
                        <div class="card-header">
                            <form action="{{route('product.index')}}" method="get">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="category_id">Thể Loại</label>
                                        <select class="form-control select2Custom" id="category_id"
                                                name="category_id">
                                            <option value="" selected></option>
                                            @foreach($theloais as $key => $theloai)
                                                <option value="{{$theloai->id}}"
                                                        @if($theloai->id == session('category_id')) selected
                                                        @endif style="font-weight: bold">{{count($theloai->childCategory) == 0 ? '' : '+'}}
                                                    <b>{{$theloai->category_name}}</b></option>
                                                @foreach($theloai->childCategory as $child)
                                                    <option value="{{$child->id}}"
                                                            @if($child->id == session('category_id')) selected @endif>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;{{$child->category_name}}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
                                </div>

                            </form>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                <tr class="position-sticky">
                                    <th>#</th>
                                    <th style="min-width: 150px">Thể Loại</th>
                                    <th style="min-width: 150px">Mã Sản Phẩm</th>
                                    <th style="min-width: 150px">Tên Sản Phẩm</th>
                                    <th>Image</th>
                                    <th style="min-width: 150px">NCC</th>
{{--                                    <th style="min-width: 100px">Giá Nhập</th>--}}
{{--                                    <th style="min-width: 100px">Giá Bán</th>--}}
{{--                                    <th style="min-width: 100px">Giảm Giá</th>--}}
{{--                                    <th>Pin</th>--}}
{{--                                    <th>Hot</th>--}}
{{--                                    <th style="min-width: 120px;">Màu</th>--}}
{{--                                    <th style="min-width: 120px">Size</th>--}}
                                    <th style="min-width: 300px"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $key => $item)
                                    <tr class="h-50 @if($item->deleted_at) bg-gradient-gray @endif">
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $item->category_name }}</td>
                                        <td>{{ $item->product_code }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>
                                            <img src="/{{$item->image}}"
                                                 class="img-thumbnail" width="70">
                                        </td>
                                        <td>{{ $item->supply_name }}</td>
{{--                                        <td>{{ number_format($item->origin_price) }}</td>--}}
{{--                                        <td>{{ number_format($item->price) }}</td>--}}
{{--                                        <td>{{ $item->discountPercent->discount_percent ?? 0 }} %</td>--}}
{{--                                        <td><input type="checkbox" class="form-control"--}}
{{--                                                   {{$item->pin ? 'checked' : ''}} onclick="setPin({{$item->id}})"></td>--}}
{{--                                        <td><input type="checkbox" id="hot" name="hot" class="form-control"--}}
{{--                                                   {{$item->hot ? 'checked' : ''}} onclick="setHot({{$item->id}})"></td>--}}
{{--                                        <td>--}}
{{--                                            @foreach($item->skus as $sku)--}}
{{--                                                <span class="badge badge-info">{{$sku->sku_name}}</span>--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @foreach($item->sizes as $size)--}}
{{--                                                <span class="badge badge-info">{{$size->size_name}}</span>--}}
{{--                                            @endforeach</td>--}}
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('product.edit',$item->id)}}"
                                                   class="nav-link border border-light rounded waves-effect btn-sm bg-primary ml-3">
                                                    <i class="fa fa-edit"></i>
                                                    Sửa
                                                </a>

                                                <form action="{{ route('product.destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    @if($item->deleted_at)
                                                        <button
                                                            class="nav-link border border-light rounded btn-sm waves-effect bg-success ml-3"
                                                            type="submit">
                                                            <i class="fa fa-check-circle"></i>
                                                            Enable
                                                        </button>
                                                    @else
                                                        <button
                                                            class="nav-link border border-light rounded btn-sm waves-effect bg-gray ml-3"
                                                            type="submit">
                                                            <i class="fa fa-times-circle"></i>
                                                            Disable
                                                        </button>
                                                    @endif

                                                </form>
                                                @if($item->deleted_at)
                                                    <form action="{{ route('product.remove', $item->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            class="nav-link border border-light rounded btn-sm waves-effect bg-danger ml-3"
                                                            type="submit">
                                                            <i class="fa fa-trash"></i>
                                                            Xóa
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="form-group">
                                {{ $items->links() }}
                            </div>
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

        $(function () {

        });
        function setPin(productId) {
            $.ajax({
                url: "/admin/product/set-pin/" + productId,
                type: "PUT",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Thông Báo',
                        body: 'Set Pin Thành Công',
                        autohide: true,
                        delay: 1200

                    })
                },
            });
        }

        function setHot(productId) {
            $.ajax({
                url: "/admin/product/set-hot/" + productId,
                type: "PUT",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Thông Báo',
                        body: 'Set Hot Thành Công',
                        autohide: true,
                        delay: 1200

                    })
                },
            });
        }
    </script>
@endsection
