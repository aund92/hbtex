@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Sản Phẩm</li>
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
                        <form role="form" id="quickForm" method="POST" action="{{route('product.update', $item->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <!-- Row1 -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="product_code">Mã Sản Phẩm</label>
                                            <input type="text" name="product_code" class="form-control" id="title" maxlength="10"
                                                   value="{{old('product_code', $item->product_code)}}"
                                                   placeholder="Nhập Mã Sản Phẩm">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="product_name">Tên Sản Phẩm</label>
                                            <input type="text" name="product_name" class="form-control" id="title"
                                                   value="{{old('product_name', $item->product_name)}}"
                                                   placeholder="Nhập Tên Sản Phẩm">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="category_id">Thể Loại</label>
                                            <select class="form-control select2Custom" id="category_id" name="category_id">
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
                                    </div>
                                </div>
                                <!-- -->
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="sku_id">Màu sắc</label>--}}
{{--                                            <select class="form-control" id="sku_id" name="sku_id">--}}
{{--                                                <option value="" disabled selected>Chọn Màu</option>--}}
{{--                                                @foreach($skus as $key => $sku)--}}
{{--                                                    <option value="{{$sku->id}}"--}}
{{--                                                            @if($sku->id == old('sku_id',$item->sku_id)) selected @endif>{{$sku->sku_name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="size_id">Size</label>--}}
{{--                                            <select class="form-control" id="size_id" name="size_id">--}}
{{--                                                <option value="" disabled selected>Chọn Size</option>--}}
{{--                                                @foreach($sizes as $key => $size)--}}
{{--                                                    <option value="{{$size->id}}"--}}
{{--                                                            @if($size->id == old('size_id',$item->size_id)) selected @endif>{{$size->size_name}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- Row 2 -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="brand">Thương Hiệu</label>
                                            <select class="form-control select2Custom" id="brand" name="brand">
                                                <option value="" disabled selected>Chọn Thương Hiệu</option>
                                                @foreach($brands as $key => $brand)
                                                    <option value="{{$brand->id}}"
                                                            @if($brand->id == old('brand',$item->brand)) selected @endif>{{$brand->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="supplier">Nhà Cung Cấp</label>
                                            <select class="form-control select2Custom" id="supplier" name="supplier">
                                                <option value="" disabled selected>Chọn Nhà Cung Cấp</option>
                                                @foreach($suppliers as $key => $supply)
                                                    <option value="{{$supply->id}}"
                                                            @if($supply->id == old('supplier',$item->supplier)) selected @endif>{{$supply->supply_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row 3 -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="country_make">Xuất Xứ</label>
                                            <select class="form-control select2Custom" id="country_make" name="country_make">
                                                <option value="" disabled selected>Chọn Xuất Xứ</option>
                                                @foreach($countryMakes as $key => $country)
                                                    <option value="{{$country->id}}"
                                                            @if($country->id == old('country_make',$item->country_make)) selected @endif>{{$country->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="origin_price">Giá Nhập</label>--}}
{{--                                            <input type="number" name="origin_price" class="form-control"--}}
{{--                                                   id="origin_price"--}}
{{--                                                   value="{{old('origin_price',$item->origin_price)}}"--}}
{{--                                                   placeholder="Giá Nhập">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <!-- Row 4 -->
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="price">Giá Bán</label>--}}
{{--                                            <input type="number" name="price" class="form-control" id="price"--}}
{{--                                                   value="{{old('price',$item->price)}}"--}}
{{--                                                   placeholder="Giá Bán">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="discount">Giảm Giá</label>--}}
{{--                                            <select class="form-control select2Custom" id="discount" name="discount">--}}
{{--                                                <option value="" selected>Chọn KM</option>--}}
{{--                                                @foreach($discounts as $key => $discount)--}}
{{--                                                    <option value="{{$discount->id}}"--}}
{{--                                                            @if($discount->id == old('discount', $item->discount)) selected @endif>{{number_format($discount->discount_percent, 2)}}--}}
{{--                                                        %--}}
{{--                                                    </option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- Row 4 -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Hình Ảnh Chính (540x600)</label>
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

                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="images">Hình Ảnh Phụ (150 x 160)</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="images"
                                                           name="images[]" multiple="multiple">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                            @foreach($images as $key => $image)
                                                <img
                                                    src="{{ \Illuminate\Support\Facades\URL::to('/' . $image->image) }}"
                                                    class="img-thumbnail" width="150">
                                                <input type="hidden" name="hidden_images[]" value="{{$image->image}}">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="short_description">Short Description</label>
                                            <textarea name="short_description" class="form-control"
                                                      id="article-ckeditor"
                                                      placeholder="Nhập Mô Tả" rows="4">
                                                {{old('short_description', $item->short_description)}}
                                            </textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control" id="article-ckeditor2"
                                                      placeholder="Nhập Mô Tả" rows="4">
                                                {{old('description', $item->description)}}
                                            </textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn btn-info btn-md" href="{{ route("product.index") }}"><i
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
    <script>CKEDITOR.replace('article-ckeditor2');</script>
    <script>
        var indexSku = {{count($item->skus)}};
        var indexSize = {{count($item->sizes)}};

        function addSku() {
            indexSku++;
            let row = '';
            row += '<tr id="sku' + indexSku + '">';
            row += '    <td>';
            row += '        <input type="text" name="skus[' + indexSku + '][sku_name]" class="form-control" />';
            row += '    </td>';
            row += '    <td>';
            row += '        <input type="text" name="skus[' + indexSku + '][rgb]" class="form-control" />';
            row += '    </td>';
            row += '    <td>';
            row += '         <button class="btn btn-sm btn-danger" onclick="removeSku(' + indexSku + ')"><i class="fa fa-trash"></i></button>';
            row += '    </td>';
            row += '</tr>';
            $('#skuTable tr:last').after(row);
        }

        function removeSku(index) {
            $("#sku" + index).remove();
        }

        function addSize() {
            indexSize++;
            let row = '';
            row += '<tr id="size' + indexSize + '">';
            row += '    <td>';
            row += '        <input type="text" name="sizes[' + indexSize + '].size_name" class="form-control" />';
            row += '    </td>';
            row += '    <td>';
            row += '         <button class="btn btn-sm btn-danger" onclick="removeSize(' + indexSize + ')"><i class="fa fa-trash"></i></button>';
            row += '    </td>';
            row += '</tr>';
            $('#sizeTable tr:last').after(row);
        }

        function removeSize(index) {
            $("#size" + index).remove();
        }
    </script>
@endsection
