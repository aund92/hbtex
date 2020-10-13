<?php


namespace App\Http\Controllers;

use App\Consts\Consts;
use App\Models\Contact;
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

        return view('contact.index', [
            'contacts' => Contact::paginate(Consts::ITEM_PER_PAGE)
        ])
            ->with('index', Consts::SIDEBAR_CONTACT);
    }

}
