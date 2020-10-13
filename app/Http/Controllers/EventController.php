<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Category;
use App\Models\Event;
use App\Utils\FileUtils;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Event::orderByDesc('id')
            ->paginate(Consts::ITEM_PER_PAGE);
//        dd($items->get(1)->childCategory()->get());
        return view('events.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_EVENT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create', [

        ])
            ->with('index', Consts::SIDEBAR_EVENT);
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
            'title' => 'required|max:200',
            'address1' => 'required',
            'address2' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $imagePath = FileUtils::uploadImage($request->image, FileUtils::EVENT_PATH);

        $data = [
            'title' => $request->get('title'),
            'address1' => $request->get('address1'),
            'address2' => $request->get('address2'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'type' => $request->get('type'),
            'description' => $request->get('description'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(Category::class, 'slug', $request->get('title'))
        ];

        Event::create($data);

        return redirect()->route('event.index')->with('message', 'Thêm Thành Công');
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
        return view('events.edit', [
            'item' => Event::find($id)
        ])
            ->with('index', Consts::SIDEBAR_EVENT);
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
                'title' => 'required|max:200',
                'address1' => 'required',
                'address2' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required',
            ]);
            $imagePath = FileUtils::uploadImage($image, FileUtils::CATEGORY_PATH);
        } else {
            //
            $request->validate([
                'title' => 'required|max:200',
                'address1' => 'required',
                'address2' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'description' => 'required',
            ]);
        }

        $data = [
            'title' => $request->get('title'),
            'address1' => $request->get('address1'),
            'address2' => $request->get('address2'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'description' => $request->get('description'),
            'type' => $request->get('type'),
            'image' => $imagePath,
            'slug' => SlugService::createSlug(Category::class, 'slug', $request->get('title'))
        ];
        Event::where('id', $id)
            ->update($data);
        return redirect()->route('event.index')->with('message', 'Cập Nhật Thành Công');
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
        Event::Where('id', $id)->delete();
        return redirect()->route('event.index')->with('message', 'Xóa Thành Công');
    }
}
