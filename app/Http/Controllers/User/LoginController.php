<?php


namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
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
        if(Auth::check()) {
            if(Auth::user()->email_verified_at) {
                return redirect()->route('user.home.index');
            }
            return redirect()->route('verification.notice');
        }
        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.login.index', [
            'categories2' => $categoires
        ]);
    }

    public function authenticated(Request $request) {
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'role' => 'user'])) {
            // Authentication passed...

            return \redirect()->intended('/');
        }
        $errors = new MessageBag(['email' => ['Tên Đăng Nhập Hoặc Mật Khẩu Không Đúng']]);

        return Redirect::back()->withErrors($errors);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function taikhoan()
    {
        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();
        $orders = Order::where('user_id', Auth::id())->get();
        return view('user-site.login.taikhoan', [
            'categories2' => $categoires,
            'orders' => $orders
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function signup()
    {
        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderByDesc('category_name')
            ->get();

        return view('user-site.login.signup', [
            'categories2' => $categoires
        ]);
    }
}
