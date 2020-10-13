<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Country::select('*')
            ->orderByDesc('country_name')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('country.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_COUNTRY);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('country.create', [

        ])
            ->with('index', Consts::SIDEBAR_COUNTRY);
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
            'country_name' => 'required|max:50',
        ]);
        $data = [
            'country_name' => $request->get('country_name'),
            'icon' => $request->get('icon'),
        ];

        Country::create($data);

        return redirect()->route('country.index')->with('message', 'Thêm Thành Công');
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
        $item = Country::find($id);
        return view('country.edit', [
            'item' => $item,
        ])
            ->with('index', Consts::SIDEBAR_COUNTRY);
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
            'country_name' => 'required|max:50',
        ]);

        $data = [
            'country_name' => $request->get('country_name'),
            'icon' => $request->get('icon'),
        ];
        Country::where('id', $id)
            ->update($data);
        return redirect()->route('country.index')->with('message', 'Cập Nhật Thành Công');
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
        Country::Where('id', $id)->delete();
        return redirect()->route('country.index')->with('message', 'Xóa Thành Công');
    }
}
