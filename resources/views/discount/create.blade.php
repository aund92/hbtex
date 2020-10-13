@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Giảm Giá</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Giảm Giá</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br/>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thêm Mới <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" method="POST" action="{{route('discount.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="discount_percent">Tỉ Lệ Giảm Giá</label>
                                    <input type="number" name="discount_percent" class="form-control" id="discount_percent"
                                           value="{{old('discount_percent')}}"
                                           placeholder="Nhập Tỉ Lệ">
                                </div>
                                <div class="form-group">
                                    <label for="start_date">Ngày Bắt Đầu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                        </div>
                                        <input id="start_date" type="text" name="start_date" value="{{old('start_date')}}" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                                    </div>
{{--                                    <input type="text"  class="form-control" id="start_date"--}}

{{--                                           placeholder="Nhập Ngày Bắt Đầu">--}}
                                </div>
                                <div class="form-group">
                                    <label for="end_date">Ngày  Kết Thúc</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                        </div>
                                        <input id="end_date" type="text" name="end_date" value="{{old('end_date')}}" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn btn-info btn-md" href="{{ route("discount.index") }}"><i
                                        class="fa fa-arrow-left"></i> Quay Lại </a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


@endsection
@section('scripts')
    <script>
        $(function () {
            $('#start_date').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
            $('#end_date').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
        })
    </script>
@endsection
