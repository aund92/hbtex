<?php


namespace App\Http\Controllers\User;


use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $categoires2 = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.policy.index', [
            'categories2' => $categoires2
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function baomat()
    {

        $categoires2 = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.policy.baomat', [
            'categories2' => $categoires2
        ]);
    }

    public function doitra()
    {

        $categoires2 = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.policy.doitra', [
            'categories2' => $categoires2
        ]);
    }

    public function thanhtoan()
    {

        $categoires2 = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.policy.thanhtoan', [
            'categories2' => $categoires2
        ]);
    }
}
