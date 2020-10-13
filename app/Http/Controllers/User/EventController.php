<?php


namespace App\Http\Controllers\User;

use App\Consts\Consts;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
//        dd(Blog::orderByDesc('created_at')->paginate(Consts::ITEM_PER_PAGE_USER));
        $events = Event::select('*')
            ->where('start_date', '>', now())
            ->where('type', 0)
            ->orderBy('start_date')
            ->paginate(Consts::ITEM_PER_PAGE_USER);
        $events2 = Event::select('*')
            ->where('start_date', '<', now())
            ->where('type', 0)
            ->orderBy('start_date')
            ->paginate(Consts::ITEM_PER_PAGE_USER);
        return view('user-site.event.index', [
            'categories' => $categories,
            'blogCategories' => BlogCategory::all(),
            'events' => $events,
            'events2' => $events2
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detail(Request $request)
    {

        $categories = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);
        $event = Event::where('slug', $request->slug)->first();
        $events = Event::where('type', 1)->orderByDesc('start_date')->get()->take(9);
        return view('user-site.event.detail', [
            'categories' => $categories,
            'blogCategories' => BlogCategory::all(),
            'event' => $event,
            'events' => $events,
        ]);
    }


}
