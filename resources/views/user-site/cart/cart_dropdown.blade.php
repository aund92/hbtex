<a class="nav-link cart_trigger" href="#"
   data-toggle="dropdown"><i
        class="linearicons-cart"></i><span
        class="cart_count">{{Cart::content()->count()}}</span></a>
<div class="cart_box dropdown-menu dropdown-menu-right">
    <ul class="cart_list">
        @foreach(Cart::content() as $key => $item)
            <li>
                <a href="#" class="item_remove"><i class="ion-close"></i></a>
                <a href="#"><img
                        src="{{\Illuminate\Support\Facades\URL::to('/' . $item->options->image)}}"
                        alt="cart_thumb1">{{$item->name}}</a>
                <span class="cart_quantity"> {{$item->qty}} x <span
                        class="cart_amount"> </span>{{number_format($item->price)}} <sup
                        class="price_symbole">VNĐ</sup></span>
            </li>
        @endforeach
    </ul>
    <div class="cart_footer">
        <p class="cart_total"><strong>Tổng:</strong> <span
                class="cart_price"> </span>{{Cart::subTotal()}} <sup
                class="price_symbole">VNĐ</sup></p>
        <p class="cart_buttons"><a href="{{route('user.cart.index')}}"
                                   class="btn btn-fill-line view-cart">Giỏ Hàng</a><a
                href="{{route('user.checkout.index')}}"
                class="btn btn-fill-out checkout">Thanh Toán</a></p>
    </div>
</div>
