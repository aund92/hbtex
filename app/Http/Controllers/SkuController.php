<?php

namespace App\Http\Controllers;


use App\Consts\Consts;
use App\Models\ProductSku;
use Illuminate\Http\Request;

class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = ProductSku::select('*')
            ->orderByDesc('sku_name')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('sku.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_SKU);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sku.create', [

        ])
            ->with('index', Consts::SIDEBAR_SKU);
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
            'sku_name' => 'required|max:50',
        ]);
        $data = [
            'sku_name' => $request->get('sku_name'),
            'rgb' => $request->get('rgb'),
        ];

        ProductSku::create($data);

        return redirect()->route('sku.index')->with('message', 'Thêm Thành Công');
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
        $item = ProductSku::find($id);
        return view('sku.edit', [
            'item' => $item,
        ])
            ->with('index', Consts::SIDEBAR_SKU);
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
            'sku_name' => 'required|max:50',
        ]);

        $data = [
            'sku_name' => $request->get('sku_name'),
            'rgb' => $request->get('rgb'),
        ];
        ProductSku::where('sku_name', $request->get('sku_name'))
            ->update($data);
        return redirect()->route('sku.index')->with('message', 'Cập Nhật Thành Công');
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
        ProductSku::Where('id', $id)->delete();
        return redirect()->route('sku.index')->with('message', 'Xóa Thành Công');
    }
}
