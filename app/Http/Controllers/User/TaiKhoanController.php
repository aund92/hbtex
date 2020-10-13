<?php


namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\OrderItem;

use App\Http\Controllers\Controller;

class TaiKhoanController extends Controller
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
    public function donhang()
    {
        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();


//        dd($categoires->get(0)->childCategory->get(2)->products);
        return view('user-site.taikhoan.donhang', [
            'categories' => $categoires
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $items = OrderItem::select('order_items.*', 'product_name', 'sku_name', 'size_name')
            ->leftJoin('products', 'order_items.product_id', 'products.id')
            ->leftJoin('product_sku', 'order_items.sku_id', 'product_sku.id')
            ->leftJoin('product_size', 'order_items.size_id', 'product_size.id')
            ->where('order_id', $id)
            ->get();
        return view('user-site.login.detail', [
            'items' => $items
        ]);
    }

}
