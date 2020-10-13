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
                        <a href="{{route('category.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Thêm
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
                                    <th>Thứ Tự</th>
                                    <th>Category Name</th>
                                    <th>icon</th>
                                    <th>Image</th>
                                    {{--                                    <th>Short Descriptions</th>--}}
                                    {{--                                    <th>Mô Tả 2</th>--}}
                                    <th>Slug</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $key => $item)
                                    <tr class="h-50">
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            {{$item->order}}
                                        </td>
                                        <td>
                                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                                role="menu" data-accordion="false">
                                                <li class="nav-item has-treeview">
                                                    <a href="#" class="nav-link">
                                                        @if(count($item->childCategory) > 0)
                                                            <i class="nav-icon fa fa-plus-square"></i>
                                                        @endif

                                                        <p>
                                                            {{ $item->category_name }}
                                                        </p>
                                                    </a>
                                                    <ul class="nav nav-treeview">
                                                        @foreach($item->childCategory as $key2 => $item2)
                                                            <li class="nav-item">
                                                                <a href="{{ route('category.edit',$item2->id)}}" target="_blank" class="nav-link">
                                                                    <i class="fa fa-minus nav-icon"></i>
                                                                    <p>{{$item2->category_name}}</p>
                                                                </a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            {{$item->icon}}
                                        </td>
                                        <td>
                                            <img src="{{ \Illuminate\Support\Facades\URL::to('/' . $item->image) }}"
                                                 class="img-thumbnail" width="70">
                                        </td>
                                        {{--                                        <td style="">{!! $item->short_description !!}  </td>--}}
                                        {{--                                        <td>{{ $item->mo_ta2 }}</td>--}}
                                        <td>{{$item->slug}}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('category.edit',$item->id)}}"
                                                   class="nav-link border border-light rounded waves-effect btn-sm bg-primary ml-3">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <form action="{{ route('category.destroy', $item->id)}}" method="post">
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
