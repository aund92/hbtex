<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Brand;
use App\Models\Category;
use App\Utils\FileUtils;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Brand::select('*')
            ->orderByDesc('brand_name')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('brand.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_BRAND);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brand.create', [

        ])
            ->with('index', Consts::SIDEBAR_BRAND);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'brand_name' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $imagePath = FileUtils::uploadImage($request->image, FileUtils::BRAND_PATH);

        $data = [
            'brand_name' => $request->get('brand_name'),
            'description' => $request->get('description'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(Brand::class, 'slug', $request->get('brand_name'))
        ];

        Brand::create($data);

        return redirect()->route('brand.index')->with('message', 'Thêm Thành Công');
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
        $item = Brand::find($id);
        return view('brand.edit', [
            'item' => $item,
        ])
            ->with('index', Consts::SIDEBAR_BRAND);
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
        //
        $imagePath = $request->get('hidden_image');
        $image = $request->image;

        if ($image != null) {
            //
            $request->validate([
                'brand_name' => 'required|max:50',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required',
            ]);
            $imagePath = FileUtils::uploadImage($image, FileUtils::BRAND_PATH);
        } else {
            //
            $request->validate([
                'brand_name' => 'required|max:50',
                'description' => 'required',
            ]);
        }

        $data = [
            'brand_name' => $request->get('brand_name'),
            'description' => $request->get('description'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(Category::class, 'slug', $request->get('brand_name'))
        ];
        Brand::where('id', $id)
            ->update($data);
        return redirect()->route('brand.index')->with('message', 'Cập Nhật Thành Công');
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
        Brand::Where('id', $id)->delete();
        return redirect()->route('brand.index')->with('message', 'Xóa Thành Công');
    }
}
