@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dinh Duong</li>
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
                            <h3 class="card-title">Add New <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="quickForm" method="POST" action="{{route('dinhduong.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="country_name">Tên Món Ăn</label>
                                    <input type="text" name="ten_mon_an" class="form-control" id="ten_mon_an"
                                           value="{{old('ten_mon_an')}}"
                                           placeholder="Nhập Tên Món Ăn">
                                </div>
                                <div class="form-group">
                                    <label for="icon">Đơn Vị</label>
                                    <input type="text" name="don_vi" class="form-control" id="don_vi"
                                           placeholder="Nhập Đơn Vị">
                                </div>
                                <div class="form-group">
                                    <label for="country_name">Kcalo</label>
                                    <input type="text" name="Kcalo" class="form-control" id="Kcalo"
                                           value="{{old('Kcalo')}}"
                                           placeholder="Nhập Kcalo">
                                </div>
                                <div class="form-group">
                                    <label for="country_name">Chất Béo</label>
                                    <input type="text" name="chat_beo" class="form-control" id="chat_beo"
                                           value="{{old('chat_beo')}}"
                                           placeholder="Nhập Chất Béo">
                                </div>
                                <div class="form-group">
                                    <label for="type">Kiểu Đồ Ăn</label>
                                    <select class="form-control" id="type" name="type">
                                        <option value="" disabled selected>Chọn Kiểu Đồ Ăn</option>
                                        @foreach($theloais as $key => $theloai)
                                            <option value="{{$theloai->id}}"
                                                    @if($theloai->id == old('category_id')) selected
                                                    @endif style="font-weight: bold">
                                                {{$theloai->category_name}}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add New</button>
                                <a class="btn btn-info btn-md" href="{{ route("dinhduong.index") }}"><i
                                        class="fa fa-arrow-left"></i> Back </a>
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
    <script>CKEDITOR.replace('article-ckeditor');</script>
    <script>CKEDITOR.replace('article-ckeditor2');</script>

@endsection
