<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Banner;
use App\Models\Category;
use App\Utils\FileUtils;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Banner::orderBy('position', 'asc')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('banner.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_BANNER);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('banner.create', [
            'theloais' => Category::whereNull('parent_id')->get()
        ])
            ->with('index', Consts::SIDEBAR_BANNER);
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
            'content' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position' => 'required',
            'category_id' => 'required'
        ]);
        $hinh_anh = FileUtils::uploadImage($request->image, FileUtils::BANNER_PATH);

        $data = [
            'content' => $request->get('content'),
            'position' => $request->get('position'),
            'category_id' => $request->get('category_id'),
            'image' => $hinh_anh,
        ];

        Banner::create($data);

        return redirect()->route('banner.index')->with('message', 'Thêm Thành Công');
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
        return view('banner.edit', [
            'item' => Banner::find($id),
            'theloais' => Category::whereNull('parent_id')->get()
        ])
            ->with('index', Consts::SIDEBAR_BANNER);
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
                'content' => 'required|max:255',
                'position' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'category_id' => 'required'
            ]);
            $imageUrl = FileUtils::uploadImage($image, FileUtils::BANNER_PATH);
        } else {
            //
            $request->validate([
                'content' => 'required|max:255',
                'position' => 'required',
                'category_id' => 'required'
            ]);
        }

        $data = [
            'content' => $request->get('content'),
            'position' => $request->get('position'),
            'category_id' => $request->get('category_id'),
            'image' => $imageUrl,
        ];
        Banner::where('id', $id)
            ->update($data);
        return redirect()->route('banner.index')->with('message', 'Cập Nhật Thành Công');
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
        Banner::find($id)->delete();
        return redirect()->route('banner.index')->with('message', 'Xóa THành Công');
    }
}
