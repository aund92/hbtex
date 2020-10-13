<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Category;
use App\Utils\FileUtils;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->paginate(Consts::ITEM_PER_PAGE);
//        dd($items->get(1)->childCategory()->get());
        return view('category.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_CATEGORY);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create', [
            'theloais' => Category::whereNull('parent_id')->get(),
        ])
            ->with('index', Consts::SIDEBAR_CATEGORY);
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
            'category_name' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'order' => 'required',
        ]);
        $imagePath = FileUtils::uploadImage($request->image, FileUtils::CATEGORY_PATH);

        $data = [
            'category_name' => $request->get('category_name'),
            'order' => $request->get('order'),
            'description' => $request->get('description'),
            'parent_id' => $request->get('parent_id'),
            'icon' => $request->get('icon'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(Category::class, 'slug', $request->get('category_name'))
        ];

        Category::create($data);

        return redirect()->route('category.index')->with('message', 'Thêm Thành Công');
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
        $item = Category::find($id);
        return view('category.edit', [
            'item' => $item,
            'theloais' => Category::whereNull('parent_id')->get(),
        ])
            ->with('index', Consts::SIDEBAR_CATEGORY);
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
                'category_name' => 'required|max:50',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required',
                'order' => 'required',
            ]);
            $imagePath = FileUtils::uploadImage($image, FileUtils::CATEGORY_PATH);
        } else {
            //
            $request->validate([
                'category_name' => 'required|max:50',
                'description' => 'required',
                'order' => 'required',
            ]);
        }

        $data = [
            'category_name' => $request->get('category_name'),
            'description' => $request->get('description'),
            'order' => $request->get('order'),
            'parent_id' => $request->get('parent_id'),
            'icon' => $request->get('icon'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(Category::class, 'slug', $request->get('category_name'))
        ];
        Category::where('id', $id)
            ->update($data);
        return redirect()->route('category.index')->with('message', 'Cập Nhật Thành Công');
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
        Category::Where('id', $id)->delete();
        return redirect()->route('category.index')->with('message', 'Xóa Thành Công');
    }
}
