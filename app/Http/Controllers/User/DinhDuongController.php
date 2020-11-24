<?php

namespace App\Http\Controllers\User;

use App\Consts\Consts;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\DinhDuong;


class DinhDuongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);
        $theloais = BlogCategory::all();
        return view('user-site.dinhduong.index', [
            'theloais' => $theloais,
            'categories' => $categories,
        ]);
    }


}
