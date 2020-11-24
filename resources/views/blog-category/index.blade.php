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
                        <a href="{{route('blog-category.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm
                            mới</a>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                                    <th>Tên Thể Loại</th>
{{--                                    <th>Hình Ảnh</th>--}}
{{--                                    <th>Slug</th>--}}
{{--                                    <th>Bài Hướng Dẫn</th>--}}
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $key => $item)
                                    <tr class="h-50">
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            {{ $item->category_name }}
                                        </td>
{{--                                        <td>--}}
{{--                                            <img src="{{ asset($item->image) }}"--}}
{{--                                                 class="img-thumbnail" width="70">--}}
{{--                                        </td>--}}
                                        {{--                                        <td style="">{!! $item->short_description !!}  </td>--}}
                                        {{--                                        <td>{{ $item->mo_ta2 }}</td>--}}
{{--                                        <td>{{$item->slug}}</td>--}}
{{--                                        <td><input type="checkbox" id="hot" name="is_guide" class="form-control"--}}
{{--                                                   {{$item->is_guide ? 'checked' : ''}} disabled>--}}
{{--                                        </td>--}}
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('blog-category.edit',$item->id)}}"
                                                   class="nav-link border border-light rounded waves-effect btn-sm bg-primary ml-3">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <form action="{{ route('blog-category.destroy', $item->id)}}"
                                                      method="post">
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
