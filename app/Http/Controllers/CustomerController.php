<?php

namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Customer::select('customers.*', 'city_name', 'district_name', 'ward_name')
            ->leftJoin('citys', 'customers.city_id', 'citys.id')
            ->leftJoin('districts', 'customers.district_id', 'districts.id')
            ->leftJoin('ward', 'customers.ward_id', 'ward.id')
            ->orderBy('customer_name', 'asc')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('customer.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_CUSTOMER);
    }
}
