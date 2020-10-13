<?php


namespace App\Http\Controllers\User;

use App\Mail\OrderSuccessMail;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\ProductSku;

use App\Http\Controllers\Controller;
use App\Notifications\OrderSuccessNotification;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
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
    public function index(Request $request)
    {

        $categoires2 = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.cart.index', [
            'categories2' => $categoires2
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addToCart(Request $request)
    {

        $rows = Cart::search(function ($key, $value) use ($request) {
            Log::info('options:' . $key->options);
            return $key->id == $request->get('id')
                && $key->options->sku_id == $request->get('sku_id')
                && $key->options->size_id == $request->get('size_id');
        });
        $item = $rows->first();
        if ($item) {
            $quantity = $request->get('quantity');
            if (!$quantity) {
                $quantity = 1;
            }

            Cart::update($item->rowId, $item->qty + $quantity);
            return redirect()->route('user.cart.index')->with('success_msg', 'Item is Added to Cart!');
        }
        $quantity = $request->get('quantity');
        if (!$quantity) {
            $quantity = 1;
        }
        $product = Product::find($request->get('id'));
        if ($product->discount) {
            $price = $product->price - ($product->price * $product->discountPercent->discount_percent / 100);
        } else {
            $price = $product->price;
        }
        $skuName = ProductSku::find($request->get('sku_id'))->sku_name ?? '';
        $sizeName = ProductSize::find($request->get('size_id'))->size_name ?? '';
        Cart::add([
            'id' => $request->get('id'),
            'name' => $product->product_name,
            'qty' => $quantity,
            'price' => $price,
            'weight' => 0,
            'options' => [
                'image' => $product->image,
                'slug' => $product->slug,
                'sku_id' => $request->get('sku_id'),
                'sku_name' => $skuName,
                'size_id' => $request->get('size_id'),
                'size_name' => $sizeName
            ]
        ]);
        return redirect()->route('user.cart.index')->with('success_msg', 'Item is Added to Cart!');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        Cart::update($request->id, $request->quantity);
        return redirect()->route('user.cart.index')->with('success_msg', 'Cart is Updated!');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function remove(Request $request)
    {
        Cart::remove($request->get('id'));
        return redirect()->route('user.cart.index')->with('success_msg', 'Item is removed!');
    }

    public function clear(Request $request)
    {
        Cart::clear();
        return redirect()->route('user.cart.index')->with('success_msg', 'Car is cleared!');
    }




    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateCart(Request $request)
    {
//        dd($request->all());
        foreach ($request->get('product') as $key => $item) {
            Cart::update($item['rowId'], $item['quantity']);
        }

        return redirect()->route('user.cart.index')->with('success_msg', 'Cart is Updated!');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cartDropDown(Request $request)
    {

        return view('user-site.cart.cart_dropdown', [

        ]);
    }
}
