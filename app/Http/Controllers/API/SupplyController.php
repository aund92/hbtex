<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Supply;
use App\Models\Ward;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $supplys = Supply::all();

        $response = array();
        foreach ($supplys as $supply) {
            $response[] = array(
                "gold_render" => 'GOLD',
                "company_name" => $supply->supply_name,
                "company_logo" => $supply->image
            );
        }

        return json_encode($response);
    }
}
