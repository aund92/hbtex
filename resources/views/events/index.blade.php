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
                        <a href="{{route('event.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm
                            mới</a>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Sự Kiện</li>
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
                                    <th>Hình Ảnh</th>
                                    <th>Tiêu Đề</th>
                                    <th>Địa Điểm 2</th>
                                    <th>Ngày bắt đầu</th>
                                    <th>Ngày kết thúc</th>
                                    <th>Type</th>
                                    <th>Slug</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $key => $item)
                                    <tr class="h-50">
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            <img src="{{ asset($item->image) }}"
                                                 class="img-thumbnail" width="70">
                                        </td>
                                        <td>
                                            {{$item->title}}
                                        </td>
                                        <td>
                                            {{$item->address2}}
                                        </td>
                                        <td>
                                            {{$item->start_date}}
                                        </td>
                                        <td>
                                            {{$item->end_date}}
                                        </td>
                                        <th>
                                            @if($item->type == 0)
                                                <span class="badge badge-primary">Sự Kiện</span>
                                            @else
                                                <span class="badge badge-warning">Thông Báo</span>
                                            @endif
                                        </th>
                                        {{--                                        <td style="">{!! $item->short_description !!}  </td>--}}
                                        {{--                                        <td>{{ $item->mo_ta2 }}</td>--}}
                                        <td>{{$item->slug}}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('event.edit',$item->id)}}"
                                                   class="nav-link border border-light rounded waves-effect btn-sm bg-primary ml-3">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <form action="{{ route('event.destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="nav-link border border-light rounded btn-sm waves-effect bg-danger ml-3"
                                                        type="submit">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
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

        $(function () {

        });

    </script>
@endsection
