<?php

namespace App\Http\Controllers;


use App\Consts\Consts;

use App\Models\City;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Ward::select('ward.*', 'district_name', 'city_name')
            ->leftJoin('districts', 'ward.district_id', 'districts.id')
            ->leftJoin('citys', 'ward.city_id', 'citys.id')
            ->orderBy('city_name', 'asc')
            ->orderBy('district_name', 'asc')
            ->orderBy('ward_name', 'asc')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('ward.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_WARD);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ward.create', [
            'districts' => District::all(),
            'cities' => City::all()
        ])
            ->with('index', Consts::SIDEBAR_WARD);
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
            'ward_name' => 'required|max:50',
            'district_id' => 'required',
            'city_id' => 'required'
        ]);

        $data = [
            'ward_name' => $request->get('ward_name'),
            'district_id' => $request->get('district_id'),
            'city_id' => $request->get('city_id'),
        ];

        Ward::create($data);

        return redirect()->route('ward.index')->with('message', 'Thêm Thành Công');
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
        $item = Ward::find($id);
        return view('ward.edit', [
            'item' => $item,
            'districts' => District::all(),
            'cities' => City::all()
        ])
            ->with('index', Consts::SIDEBAR_WARD);
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
            'ward_name' => 'required|max:50',
            'district_id' => 'required',
            'city_id' => 'required'
        ]);

        $data = [
            'ward_name' => $request->get('ward_name'),
            'district_id' => $request->get('district_id'),
            'city_id' => $request->get('city_id')
        ];
        Ward::where('id', $id)
            ->update($data);
        return redirect()->route('ward.index')->with('message', 'Cập Nhật Thành Công');
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
        Ward::Where('id', $id)->delete();
        return redirect()->route('ward.index')->with('message', 'Xóa Thành Công');
    }
}
