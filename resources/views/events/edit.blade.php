@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                            <h3 class="card-title">Cập Nhật <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" method="POST" action="{{route('event.update', $item->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Tiêu Đề</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="{{old('title',$item->title)}}"
                                           placeholder="Nhập Tiêu đề">
                                </div>
                                <div class="form-group">
                                    <label for="address1">Địa Điểm 1</label>
                                    <input type="text" name="address1" class="form-control" id="address1"
                                           value="{{old('address1',$item->address1)}}"
                                           placeholder="Nhập Thứ Tự">
                                </div>
                                <div class="form-group">
                                    <label for="address2">Địa Điểm 2</label>
                                    <input type="text" name="address2" class="form-control" id="address2"
                                           value="{{old('address2',$item->address2)}}"
                                           placeholder="Nhập icon">
                                </div>
                                <div class="form-group">
                                    <label for="start_date">Ngày Bắt Đầu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                        </div>
                                        <input id="start_date" type="text" name="start_date" value="{{old('start_date',$item->start_date)}}" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
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
                                        <input id="end_date" type="text" name="end_date" value="{{old('end_date',$item->end_date)}}" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                                    </div>
                                </div>
                                <select class="form-control" id="type" name="type">
                                    <option value="0" @if(old('type', $item->type) == '0') @endif >Sự Kiện</option>
                                    <option value="1" @if(old('type', $item->type) == '1') @endif >Thông Báo</option>
                                    {{--                                        <option value="manager" @if(old('role') == 'manager') @endif>Manager</option>--}}
                                </select>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                   name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ \Illuminate\Support\Facades\URL::to('/' . $item->image) }}"
                                         class="img-thumbnail" width="100">
                                    <input type="hidden" name="hidden_image" value="{{$item->image}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Mô Tả</label>
                                    <textarea name="description" class="form-control" id="article-ckeditor2"
                                              placeholder="Nhập Mô Tả" rows="4">
                                        {{old('description',$item->description)}}
                                    </textarea>

                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn btn-info btn-md" href="{{ route("event.index") }}"><i
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
        CKEDITOR.replace('article-ckeditor2');
        $(function () {
            $('#start_date').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
            $('#end_date').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
        })
    </script>
@endsection
