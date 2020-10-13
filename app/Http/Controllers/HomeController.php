<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\User;


class HomeController extends Controller
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
        $newOrders = Order::all()->count();
        $newUsers = User::where('role', Consts::USER_ROLE)->get()->count();
        $products = Product::all()->count();
        $categories = Category::all();
        return view('home',[
            'newOrders' => $newOrders,
            'newUsers' => $newUsers,
            'products' => $products,
            'categories' => $categories
        ])
            ->with('index', 0);
    }

}
