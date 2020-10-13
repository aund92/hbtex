<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;

class Select2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $districts = District::where('city_id', $request->get('city_id'))->get();

        $response = array();
        foreach ($districts as $district) {
            $response[] = array(
                "id" => $district->id,
                "text" => $district->district_name
            );
        }

        return json_encode($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectWard(Request $request)
    {
        //
        $wards = Ward::where('district_id', $request->get('district_id'))->get();

        $response = array();
        foreach ($wards as $ward) {
            $response[] = array(
                "id" => $ward->id,
                "text" => $ward->ward_name
            );
        }

        return json_encode($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
