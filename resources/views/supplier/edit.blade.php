@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Nhà Cung Cấp</li>
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
                        <form role="form" id="quickForm" method="POST" action="{{route('supplier.update', $item->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="supply_name">Tên nhà Cung Cấp</label>
                                    <input type="text" name="supply_name" class="form-control" id="supply_name"
                                           value="{{old('supply_name', $item->supply_name)}}"
                                           placeholder="Nhập nhà Cung Cấp">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                           value="{{old('email', $item->email)}}"
                                           placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Số Điện Thoại</label>
                                    <input type="text" name="phone_number" class="form-control" id="phone_number"
                                           value="{{old('phone_number', $item->phone_number)}}"
                                           placeholder="Số Điện Thoại">
                                </div>
                                <div class="form-group">
                                    <label for="facebook_url">facebook</label>
                                    <input type="text" name="facebook_url" class="form-control" id="facebook_url"
                                           value="{{old('facebook_url', $item->facebook_url)}}"
                                           placeholder="facebook">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa Chỉ</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                           value="{{old('address', $item->address)}}"
                                           placeholder="Địa Chỉ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình Ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                   name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ \Illuminate\Support\Facades\URL::to('/' . $item->image) }}"
                                         class="img-thumbnail" width="150">
                                    <input type="hidden" name="hidden_image" value="{{$item->image}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Mô Tả</label>
                                    <textarea rows="4" class="form-control" name="description">
                                        {{old('description', $item->description)}}
                                    </textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-info btn-md" href="{{ route("supplier.index") }}"><i
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
    <script>CKEDITOR.replace('article-ckeditor2');</script>
@endsection
