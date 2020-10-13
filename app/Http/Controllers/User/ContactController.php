<?php


namespace App\Http\Controllers\User;


use App\Models\Category;
use App\Models\Contact;
use App\Sach;
use App\TheLoaiSach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
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

        $categories = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);

        return view('user-site.contact.index', [
            'categories2' => $categories
        ]);
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
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'phone_number' => 'required|max:100',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ];

        Contact::create($data);

        return redirect()->route('user.home.index')->with('message', 'Thêm Thành Công');
    }
}
