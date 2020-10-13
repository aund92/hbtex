<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Mã Đơn Hàng</th>
        <th>Tên Sản Phẩm</th>
        <th>Màu</th>
        <th>Size</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Subtotal</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->order_id}}</td>
            <td>{{$item->product_name}}</td>
            <td>{{$item->sku_name}}</td>
            <td>{{$item->size_name}}</td>
            <td>{{number_format($item->price)}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{number_format($item->sub_total)}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
