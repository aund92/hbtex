<?php

namespace App\Http\Controllers;


use App\Consts\Consts;
use App\Models\Supply;

use App\Utils\FileUtils;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Supply::select('*')
            ->orderByDesc('supply_name')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('supplier.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_SUPLLY);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.create', [

        ])
            ->with('index', Consts::SIDEBAR_SUPLLY);
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
            'supply_name' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $hinh_anh = FileUtils::uploadImage($request->image, FileUtils::SUPPLY_PATH);
        $data = [
            'supply_name' => $request->get('supply_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'facebook_url' => $request->get('facebook_url'),
            'address' => $request->get('address'),
            'description' => $request->get('description'),
            'image' => $hinh_anh,
        ];

        Supply::create($data);

        return redirect()->route('supplier.index')->with('message', 'Thêm Thành Công');
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
        $item = Supply::find($id);
        return view('supplier.edit', [
            'item' => $item,
        ])
            ->with('index', Consts::SIDEBAR_SUPLLY);
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
        $imageUrl = $request->get('hidden_image');
        $image = $request->image;
        if ($image != null) {
            //
            $request->validate([
                'supply_name' => 'required|max:50',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        } else {
            $request->validate([
                'supply_name' => 'required|max:50'
            ]);
        }
        if ($image != null) {
            $imageUrl = FileUtils::uploadImage($image, FileUtils::SUPPLY_PATH);
        }


        $data = [
            'supply_name' => $request->get('supply_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'facebook_url' => $request->get('facebook_url'),
            'address' => $request->get('address'),
            'description' => $request->get('description'),
            'image' => $imageUrl,
        ];
        Supply::where('id', $id)
            ->update($data);
        return redirect()->route('supplier.index')->with('message', 'Cập Nhật Thành Công');
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
        Supply::Where('id', $id)->delete();
        return redirect()->route('supplier.index')->with('message', 'Xóa Thành Công');
    }
}
