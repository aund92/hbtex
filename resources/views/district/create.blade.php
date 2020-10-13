@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">District</li>
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
                        <!-- form start -->
                        <form role="form" id="quickForm" method="POST" action="{{route('district.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="city_id">City Name</label>
                                    <select class="form-control" id="city_id" name="city_id">
                                        <option value="" disabled selected>Choose City</option>
                                        @foreach($cities as $key => $city)
                                            <option value="{{$city->id}}"
                                                    @if($city->id == old('city_id')) selected @endif>{{$city->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="district_name">District Name</label>
                                    <input type="text" name="district_name" class="form-control" id="district_name"
                                           value="{{old('district_name')}}"
                                           placeholder="Enter District Name">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add New</button>
                                <a class="btn btn-info btn-md" href="{{ route("district.index") }}"><i
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
    $('#city_id').select2({
        theme: 'bootstrap4'
    })
</script>
@endsection
