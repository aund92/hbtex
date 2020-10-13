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
{{--                        <a href="{{route('blog.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm--}}
{{--                            mới</a>--}}
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
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
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Tiêu Đề</th>
                                    <th>Nội Dung</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone_number}}</td>
                                        <td>{{ $item->subject}}</td>
                                        <td>{{ $item->message}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                {{--                                <tfoot>--}}
                                {{--                                <tr>--}}
                                {{--                                    <th>Mã Blog</th>--}}
                                {{--                                    <th>Tiêu Đề</th>--}}
                                {{--                                    <th>Thể Loại</th>--}}
                                {{--                                    <th>Hình Ảnh</th>--}}
                                {{--                                    <th>Mô Tả</th>--}}
                                {{--                                    <th>Mô Tả 2</th>--}}
                                {{--                                    <th></th>--}}
                                {{--                                </tr>--}}
                                {{--                                </tfoot>--}}
                            </table>
                            {{ $contacts->links() }}
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

    </script>
@endsection
