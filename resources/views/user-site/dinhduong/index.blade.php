@extends('user-site.layouts.app_user2')

@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('user.home.index')}}"><i class="fa fa-home"
                                                                                                  aria-hidden="true"></i>
                                    Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Tinh Kcalo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <div class="container">
        @foreach($theloais as $key => $theloai)
            <div class="section-heading style-2">
                <h4>{{$theloai->category_name}}</h4>
                <div class="line"></div>
            </div>
            <div class="row">
                @foreach($theloai->dinhduongs as $key2 => $item)
                    <div class="col-2">
                        <div class="card border-success mb-3 ml-0 mr-0" style="min-width: 12rem;">
                            <div class="card-header bg-transparent border-success ">
                                {{$item->ten_mon_an}}
                                <input type="hidden" id="temonan{{$item->id}}" value="{{$item->ten_mon_an}}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="change" id="{{$item->id}}"
                                                   aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <input type="number" min="0" id="soluong{{$item->id}}" class="form-control w-25 bg-white border"
                                           style="color: black" aria-label="Text input with checkbox">
                                    <input type="hidden" id="kcalo{{$item->id}}" value="{{$item->Kcalo}}">
                                    <input type="hidden" id="donvi{{$item->id}}" value="{{$item->don_vi}}">
                                </div>
                            </div>
                            <div class="card-body text-success">
                                <p>Đơn Vị: {{$item->don_vi}}. <br/>
                                    Kcalo: {{$item->Kcalo}}. <br/>
                                    Chất Béo: {{$item->chat_beo}}
                                </p>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>


        @endforeach
        <div class="row justify-content-center mb-3">
            <button type="button" class="btn vizew-btn w-100 mt-30" style="background-color: green" onclick="calculate()">Tính Kcalo</button>
            <div class="card mt-3" id="resultContent">
                <div class="card-body" style="background-color: green;color: black">
                    <p style="color: black">
                        Số lượng KCALO bạn sẽ tiêu thụ là: <lable id="total">795</lable> KCALO
                    </p>
                    <p style="color: black">
                        Thực đơn bao gồm:
                    </p>
                    <p>
                    <ul id="listMenu" class="list-group">

                    </ul>

                    </p>
                </div>


            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        var listData = [];
        $('#resultContent').hide();
        $('input[type="checkbox"][name="change"]').change(function () {

            if (this.checked) {
                // do something when checked
                var item = {
                    id: this.id,
                    ten_mon_an: $('#temonan' + this.id).val(),
                    don_vi: $('#donvi' + this.id).val(),
                    Kcalo: $('#kcalo' + this.id).val(),
                    so_luong: $('#soluong' + this.id).val(),
                };
                listData.push(item);
                console.log(listData);
            } else {
                listData = listData.filter(item => item.id !== this.id)
                console.log(listData);
            }
        });

        function calculate() {
            var total = 0;
            for (var data of listData) {
                total += Number.parseInt(data.Kcalo) * Number.parseInt(data.so_luong);
                $("#listMenu").append('<li class="list-group-item">' + data.ten_mon_an + ', ' + data.so_luong + ' ' + data.don_vi + ':' + data.Kcalo * data.so_luong + ' Kcalo</li>');
                console.log(data);
            }
            $('#total').html(total);
            $('#resultContent').show();
        }
    </script>
@endsection
