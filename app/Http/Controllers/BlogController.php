<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Blog;
use App\Utils\FileUtils;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Blog::select('blogs.*', 'category_name')
            ->leftJoin('blog_category', 'blogs.category_id', 'blog_category.id')
            ->orderByDesc('blogs.id')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('blog.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_BLOG);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create', [
            'theloais' => BlogCategory::get()
        ])
            ->with('index', Consts::SIDEBAR_BLOG);
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
            'title' => 'required|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $hinh_anh = FileUtils::uploadImage($request->image, FileUtils::BLOG_PATH);

        $data = [
            'title' => $request->get('title'),
            'short_description' => $request->get('short_description'),
            'description' => $request->get('description'),
            'image' => $hinh_anh,
            'category_id' => $request->get('category_id'),
            'slug' => SlugService::createSlug(Blog::class, 'slug', $request->get('title'))
        ];

        Blog::create($data);

        return redirect()->route('blog.index')->with('message', 'Thêm Thành Công');
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
        return view('blog.edit', [
            'item' => Blog::find($id),
            'theloais' => BlogCategory::get()
        ])
            ->with('index', Consts::SIDEBAR_BLOG);
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
        $imageUrl = $request->get('hidden_image');
        $image = $request->image;

        if ($image != null) {
            //
            $request->validate([
                'title' => 'required|max:255',
                'short_description' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
            $imageUrl = FileUtils::uploadImage($image, FileUtils::BLOG_PATH);
        } else {
            //
            $request->validate([
                'title' => 'required|max:255',
                'short_description' => 'required',
                'description' => 'required',
                'category_id' => 'required',
            ]);
        }

        $data = [
            'title' => $request->get('title'),
            'short_description' => $request->get('short_description'),
            'description' => $request->get('description'),
            'image' => $imageUrl,
            'category_id' => $request->get('category_id'),
            'slug' => SlugService::createSlug(Blog::class, 'slug', $request->get('title')),
        ];
        Blog::where('id', $id)
            ->update($data);
        return redirect()->route('blog.index')->with('message', 'Cập Nhật Thành Công');
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
        Blog::find($id)->delete();
        return redirect()->route('blog.index')->with('message', 'Xóa THành Công');
    }
}
