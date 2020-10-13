<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $path = storage_path() . "/json/tree.json"; // ie: /var/www/laravel/app/storage/json/filename.json
//
//        $json = json_decode(file_get_contents($path), true);
//
//        foreach ($json as $key => $item) {
//
//            $cityId = City::insertGetId([
//                'city_name' => $item['name_with_type'],
//                'code' => $item['code']
//            ]);
//
//            foreach ($item['quan-huyen'] as $key2 => $item2) {
//                $districtId = District::insertGetId([
//                    'city_id' => $cityId,
//                    'district_name' => $item2['name_with_type'],
//                    'code' => $item2['code'],
//                    'parent_code' => $item2['parent_code']
//                ]);
//                foreach ($item2['xa-phuong'] as $key3 => $item3) {
//                    Ward::insertGetId([
//                        'city_id' => $cityId,
//                        'district_id' => $districtId,
//                        'ward_name' => $item3['name_with_type'],
//                        'code' => $item3['code'],
//                        'parent_code' => $item3['parent_code']
//                    ]);
//                }
//            }
//        }
        $items = City::select('*')
            ->orderByDesc('city_name')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('city.index', [
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
        return view('city.create', [

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
            'city_name' => 'required|max:50',
        ]);

        $data = [
            'city_name' => $request->get('city_name'),
        ];

        City::create($data);

        return redirect()->route('city.index')->with('message', 'Thêm Thành Công');
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
        $item = City::find($id);
        return view('city.edit', [
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
            'city_name' => 'required|max:50',
        ]);

        $data = [
            'city_name' => $request->get('city_name'),
        ];
        City::where('id', $id)
            ->update($data);
        return redirect()->route('city.index')->with('message', 'Cập Nhật Thành Công');
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
        City::Where('id', $id)->delete();
        return redirect()->route('city.index')->with('message', 'Xóa Thành Công');
    }
}
