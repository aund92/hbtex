<?php


namespace App\Http\Controllers\User;

use App\Consts\Consts;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\ProductRating;
use App\Models\ProductSize;
use App\Models\ProductSku;

use App\Http\Controllers\Controller;
use App\Models\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
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

        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);
        if($request->id) {
            $category_id = Category::where('slug', $request->id)->first()->id;
            $products = Product::where('category_id', $category_id);
        } else {
            $products = Product::select('*');
        }
        $catArr = [];
        $madeArr = [];
        $provinceArr = [];
        $memberTypeArr = [];
        if ($request->has('category_arr')) {
            $catArr = $request->get('category_arr');
            $products = $products->whereIn('category_id', $catArr);
        }
        if ($request->has('made_arr')) {
            $madeArr = $request->get('made_arr');
            $products = $products->whereIn('country_make', $madeArr);
        }
        if ($request->has('province_arr')) {
            $provinceArr = $request->get('province_arr');
            $products = $products->whereIn('brand', $provinceArr);
        }
        if ($request->has('member_type_arr')) {
            $memberTypeArr = $request->get('member_type_arr');
            $products = $products->whereIn('supplier', $memberTypeArr);
        }
        if ($request->has('keyword')) {
            $keyword = $request->get('keyword');
            $products = $products->where('product_name', 'LIKE', '%' . $keyword .'%');
        }
        $countries = Country::all();
        $brands = Brand::all();
        $supplys = Supply::all();
        $products = $products->paginate(Consts::ITEM_PER_PAGE_USER);
//        dd($products);
        return view('user-site.product.index', [
            'categories' => $categoires,
            'countries' => $countries,
            'brands' => $brands,
            'supplys' => $supplys,
            'products' => $products,
            'catArr' => $catArr,
            'madeArr' => $madeArr,
            'provinceArr' => $provinceArr,
            'memberTypeArr' => $memberTypeArr,
        ]);
    }

    public function clearFilter()
    {
        session()->remove('category_id');
        session()->remove('price_from');
        session()->remove('price_to');
        session()->remove('pageSize');
        return redirect()->route('user.product.index');
    }

    public function productDetail($id)
    {
        $categories = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);
        $product = Product::where('slug', $id)->first();

        $productReleted = Product::where('category_id', $product->category_id)
            ->where('id', '<>', $product->id)->get();
//        dd($product->images);
        return view('user-site.product.detail', [
            'categories' => $categories,
            'product' => $product,
            'productReleted' => $productReleted
        ]);
    }

    public function review(Request $request)
    {
        $request->validate([
            'rating' => 'required|numeric',
            'message' => 'required',
            'product_id' => 'required'
        ]);
        $data = [
            'rating' => $request->get('rating'),
            'message' => $request->get('message')
        ];

        ProductRating::updateOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $request->get('product_id')
        ], $data);

        return redirect()->back();

    }

    public function productDetailQuickView($id)
    {
        $product = Product::where('slug', $id)->first();
        return view('user-site.layouts.quick-view', [
            'product' => $product,
        ]);
    }

}
