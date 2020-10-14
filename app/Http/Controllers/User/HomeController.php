<?php


namespace App\Http\Controllers\User;

use App\Consts\Consts;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Event;
use App\Models\OrderItem;
use App\Models\Product;

use App\Http\Controllers\Controller;
use App\Models\Supply;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
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
    public function index()
    {
        $categoires = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);
        // section 1
        $blogs = Blog::select('*')
            ->orderByDesc('created_at')
            ->get()
            ->take(5);
        $events = Event::select('*')
            ->where('start_date', '>' , now())
            ->where('type' , 0)
            ->orderBy('start_date')
            ->get()
            ->take(5);

        $products = Product::orderBy('created_at')->get();
        return view('user-site.home.index', [
            'categories' => $categoires,
            'blogs' => $blogs,
            'events' => $events,
//            'notifications' => $notifications,
            'supplys' => Supply::orderByDesc('created_at')->paginate(6),
            'products' => $products
        ]);
    }

    public function about(){
        return view('user-site.home.about');
    }
    public function guide(){
        return view('user-site.home.huongdan', [
            'blogCategories' => BlogCategory::where('is_guide', true)->get()
        ]);
    }


}
