<?php


namespace App\Http\Controllers\User;

use App\Mail\OrderSuccessMail;
use App\Models\Category;
use App\Models\City;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.checkout.index', [
            'categories2' => $categoires,
            'cities' => City::all()
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'customer_name' => 'required|max:100',
            'phone_number' => 'required',
            'email' => 'required',
            'city_id' => 'required',
            'district_id' => 'required',
            'ward_id' => 'required',
            'address_shipping' => 'required',
        ],[
            'customer_name.required' => 'Bạn Chưa Nhập Tên Khách Hàng',
            'phone_number.required' => 'Bạn Chưa Nhập Số Điện Thoại',
            'email.required' => 'Bạn Chưa Nhập Email',
            'city_id.required' => 'Bạn Chưa Chọn Thành Phố',
            'district_id.required' => 'Bạn Chưa Chọn Quận/Huyện',
            'ward.required' => 'Bạn Chưa Chọn Phường/Xã',
            'address_shipping.required' => 'Bạn Chưa Nhập Địa Chỉ Giao Hàng',
        ]);
        DB::transaction(function () use ($request) {
            $customer = Customer::where('phone_number', $request->get('phone_number'))->first();

            if($customer) {
                $customerId = $customer->id;
            } else {
                $customerId = Customer::create([
                    'customer_name' => $request->get('customer_name'),
                    'email' => $request->get('email'),
                    'phone_number' => $request->get('phone_number'),
                    'address' => $request->get('address_shipping'),
                    'gender' => '1',
                    'city_id' => $request->get('city_id'),
                    'district_id' => $request->get('district_id'),
                    'ward_id' => $request->get('ward_id'),
                ])->id;
            }

            $orderId = Order::create([
                'customer_name' => $request->get('customer_name'),
                'gender' => 1,
                'phone_number' => $request->get('phone_number'),
                'email' => $request->get('email'),
                'user_id' => Auth::check() ? Auth::id() : 0,
                'customer_id' => $customerId,
                'city_id' => $request->get('city_id'),
                'district_id' => $request->get('district_id'),
                'ward_id' => $request->get('ward_id'),
                'address_shipping' => $request->get('address_shipping'),
                'note' => $request->get('note'),
                'payment_method' => $request->get('payment_method'),
                'status' => 1
            ])->id;
            foreach (Cart::content() as $item) {
//                dd($item->options->sku_id);
                OrderItem::create([
                    'order_id' => $orderId,
                    'product_id' => $item->id,
                    'price' => $item->price,
                    'quantity' => $item->qty,
                    'sub_total' => $item->price * $item->qty,
                    'sku_id' => $item->options->sku_id,
                    'size_id' => $item->options->size_id
                ]);
            }

        },5);
        $this->sendMail($request->get('email'));
        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();
        Cart::destroy();

        return view('user-site.checkout.success', [
            'categories2' => $categoires,
        ]);
    }

    public function sendMail ($email) {

        $details = [
            'title' => 'Được Gửi từ windyfashion.vn',
            'body' => 'Cảm Ơn bạn đã đặt theo hàng , Chúng tôi sẽ liên hệ với bạn qua số điện thoại '
        ];

        Mail::to($email)->send(new OrderSuccessMail($details));
    }
}
