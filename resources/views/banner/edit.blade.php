@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Banner</li>
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
                        <form role="form" id="quickForm" method="POST" action="{{route('banner.update', $item->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="content">Nội Dung</label>
                                    <textarea name="content" class="form-control" id="article-ckeditor" placeholder="Nhập Nội Dung" rows="4">
                                        {{old('content', $item->content)}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        <option value="" disabled selected>Chọn Thể Loại</option>
                                        @foreach($theloais as $key => $theloai)
                                            <option value="{{$theloai->id}}"
                                                    @if($theloai->id == old('category_id', $item->category_id)) selected
                                                    @endif style="font-weight: bold">{{count($theloai->childCategory) == 0 ? '' : '+'}}
                                                <b>{{$theloai->category_name}}</b></option>
                                            @foreach($theloai->childCategory as $child)
                                                <option value="{{$child->id}}"
                                                        @if($child->id == old('category_id', $item->category_id)) selected @endif>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;{{$child->category_name}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image (1 : 825 x 550, 2: 540 x 300, 3 : 450 x 250)</label>
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
                                    <label for="position">Vị Trí</label>
                                    <input type="number" name="position" class="form-control" id="position"
                                           value="{{old('position',$item->position)}}"
                                           placeholder="Nhập Vị Trí">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn btn-info btn-md" href="{{ route("banner.index") }}"><i
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
{{--    <script>CKEDITOR.replace('article-ckeditor');</script>--}}
@endsection
