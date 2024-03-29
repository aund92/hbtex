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
                        <a href="{{route('user.create')}}" class="btn btn-info"><i class="fa fa-plus"></i>
                            Thêm mới</a>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tài Khoản</li>
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
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Họ Tên</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Trạng Thái</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>
                                            @if($item->email_verified_at)
                                                <span class="badge badge-success">active</span>
                                            @else
                                                <span class="badge badge-info">disable</span>
                                            @endif

                                        </td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('user.edit',$item->id)}}"
                                                   class="nav-link border border-light rounded waves-effect bg-primary ml-3">
                                                    <i class="fa fa-edit"></i>
                                                </a>

{{--                                                <form action="{{ route('user.destroy', $item->id)}}"--}}
{{--                                                      method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button--}}
{{--                                                        class="nav-link border border-light rounded waves-effect bg-danger ml-3"--}}
{{--                                                        type="submit">--}}
{{--                                                        <i class="fa fa-trash"></i>--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $datas->links() }}
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
