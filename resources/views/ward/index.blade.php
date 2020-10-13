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
                        <a href="{{route('ward.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> New</a>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Ward</li>
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
                                    <th>City Name</th>
                                    <th>District Name</th>
                                    <th>Ward Name</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $key => $item)
                                    <tr class="h-50">
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->city_name }}</td>
                                        <td>{{ $item->district_name }}</td>
                                        <td>{{ $item->ward_name }}</td>

                                        <td>
                                            <div class="row">
                                                <a href="{{ route('ward.edit',$item->id)}}"
                                                   class="nav-link border border-light rounded waves-effect btn-sm bg-primary ml-3">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <form action="{{ route('ward.destroy', $item->id)}}" method="post">
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
