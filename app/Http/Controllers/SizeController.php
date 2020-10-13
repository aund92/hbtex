<?php

namespace App\Http\Controllers;


use App\Consts\Consts;

use App\Models\ProductSize;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = ProductSize::select('*')
            ->orderByDesc('size_name')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('size.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_SIZE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('size.create', [

        ])
            ->with('index', Consts::SIDEBAR_SIZE);
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
            'size_name' => 'required|max:50',
        ]);
        $data = [
            'size_name' => $request->get('size_name'),
        ];

        ProductSize::create($data);

        return redirect()->route('size.index')->with('message', 'Thêm Thành Công');
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
        $item = ProductSize::find($id);
        return view('size.edit', [
            'item' => $item,
        ])
            ->with('index', Consts::SIDEBAR_SIZE);
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
            'size_name' => 'required|max:50',
        ]);

        $data = [
            'size_name' => $request->get('size_name'),
        ];
        ProductSize::where('id', $id)
            ->update($data);
        return redirect()->route('size.index')->with('message', 'Cập Nhật Thành Công');
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
        ProductSize::Where('id', $id)->delete();
        return redirect()->route('size.index')->with('message', 'Xóa Thành Công');
    }
}
