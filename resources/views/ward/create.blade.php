@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
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
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card">

                        <!-- form start -->
                        <form role="form" id="quickForm" method="POST" action="{{route('ward.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="city_id">City Name</label>
                                    <select class="form-control select2bs4" id="city_id" name="city_id">
                                        <option value="" disabled selected>Choose City</option>
                                        @foreach($cities as $key => $city)
                                            <option value="{{$city->id}}"
                                                    @if($city->id == old('city_id')) selected @endif>{{$city->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="district_id">District Name</label>
                                    <select class="form-control" id="district_id" name="district_id">
                                        <option value="" disabled selected>Choose District</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ward_name">Ward Name</label>
                                    <input type="text" name="ward_name" class="form-control" id="ward_name"
                                           value="{{old('ward_name')}}"
                                           placeholder="Enter Ward Name">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add New</button>
                                <a class="btn btn-info btn-md" href="{{ route("ward.index") }}"><i
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
    <script>
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#city_id').select2({
            theme: 'bootstrap4'
        })
        $('#city_id').on('select2:select', function (e) {
            var data = e.params.data;
            console.log(data.id);
            $("#district_id").select2({
                theme: 'bootstrap4',
                ajax: {
                    url: "{{route('selectDistrict')}}?city_id=" + data.id,
                    type: "get",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            search: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            })
        });


    </script>

@endsection
