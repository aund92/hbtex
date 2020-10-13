<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\BlogCategory;
use App\Utils\FileUtils;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = BlogCategory::select('*')
            ->paginate(Consts::ITEM_PER_PAGE);
//        dd($items->get(1)->childCategory()->get());
        return view('blog-category.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_BLOG_CATEGORY);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('blog-category.create', [
            'theloais' => BlogCategory::get(),
        ])
            ->with('index', Consts::SIDEBAR_BLOG_CATEGORY);
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

        ]);
        $imagePath = FileUtils::uploadImage($request->image, FileUtils::CATEGORY_PATH);

        $data = [
            'category_name' => $request->get('category_name'),
            'description' => $request->get('description'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(BlogCategory::class, 'slug', $request->get('category_name'))
        ];

        BlogCategory::create($data);

        return redirect()->route('blog-category.index')->with('message', 'Thêm Thành Công');
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
        $item = BlogCategory::find($id);
        return view('blog-category.edit', [
            'item' => $item,
            'theloais' => BlogCategory::get(),
        ])
            ->with('index', Consts::SIDEBAR_BLOG_CATEGORY);
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
            ]);
            $imagePath = FileUtils::uploadImage($image, FileUtils::CATEGORY_PATH);
        } else {
            //
            $request->validate([
                'category_name' => 'required|max:50',
                'description' => 'required',
            ]);
        }

        $data = [
            'category_name' => $request->get('category_name'),
            'description' => $request->get('description'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(BlogCategory::class, 'slug', $request->get('category_name'))
        ];
        BlogCategory::where('id', $id)
            ->update($data);
        return redirect()->route('blog-category.index')->with('message', 'Cập Nhật Thành Công');
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
        BlogCategory::Where('id', $id)->delete();
        return redirect()->route('blog-category.index')->with('message', 'Xóa Thành Công');
    }
}
