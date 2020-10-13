<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Discount;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\ProductSku;
use App\Models\Supply;
use App\Utils\FileUtils;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $items = Product::select('products.*', 'category_name', 'brand_name', 'supply_name')
            ->leftJoin('categories', 'products.category_id', 'categories.id')
            ->leftJoin('brands', 'products.brand', 'brands.id')
            ->leftJoin('supplys', 'products.supplier', 'supplys.id');

//        dd($items->get(0));
//        dd();
        if($request->has('category_id')) {
            $items = $items->where('category_id', $request->get('category_id'));
        }
        $request->session()->put('category_id', $request->get('category_id'));

        $items = $items->withTrashed()->orderBy('deleted_at')->orderByDesc('category_name', 'product_name')
                    ->paginate(Consts::ITEM_PER_PAGE);
        return view('product.index', [
            'items' => $items,
            'theloais' => Category::whereNull('parent_id')->get()
        ])
            ->with('index', Consts::SIDEBAR_PRODUCT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create', [
            'theloais' => Category::whereNull('parent_id')->get(),
            'brands' => Brand::all(),
            'suppliers' => Supply::all(),
            'countryMakes' => Country::all(),
            'sizes' => ProductSize::all(),
            'skus' => ProductSku::all(),
            'discounts' => Discount::orderBy('discount_percent')->get()
        ])
            ->with('index', Consts::SIDEBAR_PRODUCT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            //
            $request->validate([
                'product_code' => 'required|max:10',
                'product_name' => 'required|max:100',
                'category_id' => 'required',
//            'size_id' => 'required',
//            'sku_id' => 'required',
                'brand' => 'required',
                'supplier' => 'required',
                'country_make' => 'required',
//                'origin_price' => 'required|numeric',
//                'price' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'images' => 'required',
                'images.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $hinh_anh = FileUtils::uploadImage($request->image, FileUtils::PRODUCT_PATH);

            $data = [
                'product_code' => $request->get('product_code'),
                'product_name' => $request->get('product_name'),
                'category_id' => $request->get('category_id'),
//            'size_id' => $request->get('size_id'),
//            'sku_id' => $request->get('sku_id'),
                'brand' => $request->get('brand'),
                'supplier' => $request->get('supplier'),
                'country_make' => $request->get('country_make'),
//                'origin_price' => $request->get('origin_price'),
//                'price' => $request->get('price'),
                'origin_price' => 0,
                'price' => 0,
                'discount' => $request->get('discount'),
                'pin' => is_null($request->get('pin')) ? false : true,
                'hot' => is_null($request->get('hot')) ? false : true,
                'image' => $hinh_anh,
                'description' => $request->get('description'),
                'short_description' => $request->get('short_description'),
                'slug' => SlugService::createSlug(Product::class, 'slug', $request->get('product_name'))
            ];

            $productId = Product::create($data)->id;
            if ($request->has('skus')) {
                foreach ($request->get('skus') as $sku) {
                    ProductSku::create([
                        'product_id' => $productId,
                        'sku_name' => $sku['sku_name'],
                        'rgb' => $sku['rgb']
                    ]);
                }
            }
            if ($request->has('sizes')) {
                foreach ($request->get('sizes') as $size) {
                    ProductSize::create([
                        'product_id' => $productId,
                        'size_name' => $size
                    ]);
                }
            }
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $file) {
                    $hinh_anh_phu = FileUtils::uploadImage($file, FileUtils::PRODUCT_PATH);
                    ProductImage::create([
                        'product_id' => $productId,
                        'image' => $hinh_anh_phu
                    ]);
                }
            }
        }, 5);
        return redirect()->route('product.index')->with('message', 'Thêm Thành Công');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd(Product::find($id)->skus);
        return view('product.edit', [
            'item' => Product::find($id),
            'images' => ProductImage::where('product_id', $id)->get(),
            'theloais' => Category::whereNull('parent_id')->get(),
            'brands' => Brand::all(),
            'suppliers' => Supply::all(),
            'countryMakes' => Country::all(),
            'sizes' => ProductSize::all(),
            'skus' => ProductSku::all(),
            'discounts' => Discount::orderBy('discount_percent')->get()
        ])
            ->with('index', Consts::SIDEBAR_PRODUCT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            //
            $validateArr = [
                'product_code' => 'required|max:10',
                'product_name' => 'required|max:100',
                'category_id' => 'required',
                'brand' => 'required',
                'supplier' => 'required',
                'country_make' => 'required',
//                'origin_price' => 'required|numeric',
//                'price' => 'required|numeric'

            ];
            $imageUrl = $request->get('hidden_image');
            $image = $request->image;

            if ($image != null) {
                //
                $validateArr['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            }
            if ($request->hasfile('images')) {
                $validateArr['images.*'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';

            }
            $request->validate($validateArr);
            if ($image != null) {
                $imageUrl = FileUtils::uploadImage($image, FileUtils::PRODUCT_PATH);
            }
            $product = Product::find($id);
            if($product->product_name == $request->get('product_name')) {
                $slug = $product->slug;
            } else {
                $slug = SlugService::createSlug(Product::class, 'slug', $request->get('product_name'));
            }
            $data = [
                'product_code' => $request->get('product_code'),
                'product_name' => $request->get('product_name'),
                'category_id' => $request->get('category_id'),
                'brand' => $request->get('brand'),
                'supplier' => $request->get('supplier'),
                'country_make' => $request->get('country_make'),
//                'origin_price' => $request->get('origin_price'),
//                'price' => $request->get('price'),
                'origin_price' => 0,
                'price' => 0,
                'discount' => $request->get('discount'),
                'pin' => is_null($request->get('pin')) ? false : true,
                'hot' => is_null($request->get('hot')) ? false : true,
                'image' => $imageUrl,
                'description' => $request->get('description'),
                'short_description' => $request->get('short_description'),
                'slug' =>$slug
            ];
            Product::where('id', $id)
                ->update($data);
            ProductSku::where('product_id', $id)->delete();
            ProductSize::where('product_id', $id)->delete();
            if ($request->has('skus')) {
                foreach ($request->get('skus') as $sku) {
                    ProductSku::create([
                        'product_id' => $id,
                        'sku_name' => $sku['sku_name'],
                        'rgb' => $sku['rgb']
                    ]);
                }
            }
            if ($request->has('sizes')) {
                foreach ($request->get('sizes') as $size) {
                    ProductSize::create([
                        'product_id' => $id,
                        'size_name' => $size
                    ]);
                }
            }
            if ($request->hasfile('images')) {

                ProductImage::where('product_id', $id)->delete();
                $validateArr['images.*'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
                foreach ($request->file('images') as $file) {
                    $hinh_anh_phu = FileUtils::uploadImage($file, FileUtils::PRODUCT_PATH);
                    ProductImage::create([
                        'product_id' => $id,
                        'image' => $hinh_anh_phu
                    ]);
                }
            }
        },5);

        return redirect()->route('product.index')->with('message', 'Cập Nhật Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::withTrashed()->find($id);
//        dd($product);
        if($product->deleted_at) {
            $product->restore();
        } else {
            $product->delete();
        }
        return redirect()->route('product.index')->with('message', 'Xóa THành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        //
//        dd(123);
        $product = Product::withTrashed()->find($id);
        if(\File::exists(public_path($product->image))){

            \File::delete(public_path($product->image));
            foreach ($product->images()->get() as $key => $image) {
//                    dd($image);
                \File::delete(public_path($image->image));
            }
        }else{
            return redirect()->route('product.index')->with('message', 'File không tồn tại');

        }
//        dd(1212);
        $product->forceDelete();
        $product->images()->forceDelete();
        return redirect()->route('product.index')->with('message', 'Xóa THành Công');
    }

    public function setPin($productId) {
        $product = Product::find($productId);
        if($product->pin) {
            $pin = 0;
        } else {
            $pin = 1;
        }
        Product::find($productId)->update([
            'pin' => $pin
        ]);
    }

    public function setHot($productId) {
        $product = Product::find($productId);
        if($product->hot) {
            $hot = 0;
        } else {
            $hot = 1;
        }
        Product::find($productId)->update([
            'hot' => $hot
        ]);
    }
}
