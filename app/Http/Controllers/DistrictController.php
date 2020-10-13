<?php

namespace App\Http\Controllers;


use App\Consts\Consts;

use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = District::select('districts.*', 'citys.city_name')
            ->leftJoin('citys', 'districts.city_id', 'citys.id')
            ->orderBy('citys.city_name', 'asc')
            ->orderBy('district_name', 'asc')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('district.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_DISTRICT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('district.create', [
            'cities' => City::all()
        ])
            ->with('index', Consts::SIDEBAR_DISTRICT);
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
            'district_name' => 'required|max:50',
            'city_id' => 'required'
        ]);

        $data = [
            'district_name' => $request->get('district_name'),
            'city_id' => $request->get('city_id'),
        ];

        District::create($data);

        return redirect()->route('district.index')->with('message', 'Thêm Thành Công');
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
        $item = District::find($id);
        return view('district.edit', [
            'item' => $item,
            'cities' => City::all()
        ])
            ->with('index', Consts::SIDEBAR_DISTRICT);
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
            'district_name' => 'required|max:50',
            'city_id' => 'required'
        ]);

        $data = [
            'district_name' => $request->get('district_name'),
            'city_id' => $request->get('city_id')
        ];
        District::where('id', $id)
            ->update($data);
        return redirect()->route('district.index')->with('message', 'Cập Nhật Thành Công');
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
        District::Where('id', $id)->delete();
        return redirect()->route('district.index')->with('message', 'Xóa Thành Công');
    }
}
