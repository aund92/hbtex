<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Discount::orderByDesc('discount_percent')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('discount.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_DISCOUNT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('discount.create', [

        ])
            ->with('index', Consts::SIDEBAR_DISCOUNT);
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
            'discount_percent' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $data = [
            'discount_percent' => $request->get('discount_percent'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date')
        ];

        Discount::create($data);

        return redirect()->route('discount.index')->with('message', 'Thêm Thành Công');
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
        return view('discount.edit', [
            'item' => Discount::find($id)
        ])
            ->with('index', Consts::SIDEBAR_DISCOUNT);
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
        $request->validate([
            'discount_percent' => 'required|numeric',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $data = [
            'discount_percent' => $request->get('discount_percent'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date')
        ];
        Discount::where('id', $id)
            ->update($data);
        return redirect()->route('discount.index')->with('message', 'Cập Nhật Thành Công');
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
        Discount::find($id)->delete();
        return redirect()->route('discount.index')->with('message', 'Xóa THành Công');
    }
}
