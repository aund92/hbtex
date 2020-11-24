<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\City;
use App\Models\DinhDuong;
use Illuminate\Http\Request;

class DinhDuongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DinhDuong::select('*')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('dinhduong.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_CITY);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dinhduong.create', [
            'theloais' => BlogCategory::get()
        ])
            ->with('index', Consts::SIDEBAR_CITY);
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
            'ten_mon_an' => 'required|max:100',
            'don_vi' => 'required',
            'Kcalo' => 'required',
            'chat_beo' => 'required',
            'type' => 'required',
        ]);

        $data = [
            'ten_mon_an' => $request->get('ten_mon_an'),
            'don_vi' => $request->get('don_vi'),
            'Kcalo' => $request->get('Kcalo'),
            'chat_beo' => $request->get('chat_beo'),
            'type' => $request->get('type'),
        ];

        DinhDuong::create($data);

        return redirect()->route('dinhduong.index')->with('message', 'Thêm Thành Công');
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
        $item = DinhDuong::find($id);
        return view('dinhduong.edit', [
            'item' => $item,
        ])
            ->with('index', Consts::SIDEBAR_CITY);
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
        $request->validate([
            'ten_mon_an' => 'required|max:100',
            'don_vi' => 'required',
            'Kcalo' => 'required',
            'chat_beo' => 'required',
            'type' => 'required',
        ]);

        $data = [
            'ten_mon_an' => $request->get('ten_mon_an'),
            'don_vi' => $request->get('don_vi'),
            'Kcalo' => $request->get('Kcalo'),
            'chat_beo' => $request->get('chat_beo'),
            'type' => $request->get('type'),
        ];
        DinhDuong::where('id', $id)
            ->update($data);
        return redirect()->route('dinhduong.index')->with('message', 'Cập Nhật Thành Công');
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
        DinhDuong::Where('id', $id)->delete();
        return redirect()->route('dinhduong.index')->with('message', 'Xóa Thành Công');
    }
}
