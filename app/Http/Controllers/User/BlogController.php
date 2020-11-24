<?php


namespace App\Http\Controllers\User;

use App\Consts\Consts;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        $blogs = Blog::select('*')
            ->orderByDesc('created_at')
            ->get()
            ->take(15);
        $categories = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);


//        dd(Blog::orderByDesc('created_at')->paginate(Consts::ITEM_PER_PAGE_USER));
        return view('user-site.blog.index', [
            'categories' => $categories,
            'blogs' => $blogs,
            'blogCategories' => Category::whereNull('parent_id')->get()
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detail(Request $request)
    {

        $blog = Blog::where('slug', $request->slug)->first();

        $categories = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);
        $blogRalates = Blog::where('category_id', $blog->category_id)->orderByDesc('created_at')->take(2)->get();
//        dd(Blog::orderByDesc('created_at')->paginate(Consts::ITEM_PER_PAGE_USER));
        return view('user-site.blog.detail', [
            'categories' => $categories,
            'blogCategories' => BlogCategory::all(),
            'blog' => $blog,
            'blogRalates' => $blogRalates
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index2(Request $request)
    {
        $slug = $request->slug;
        $blog = Category::where('slug', $slug)->first();
        $categories = Category::select('*')
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get()
            ->take(9);
        $blogs = Blog::where('category_id', $blog->id)->paginate(Consts::ITEM_PER_PAGE_USER);
//        dd(Blog::orderByDesc('created_at')->paginate(Consts::ITEM_PER_PAGE_USER));
        return view('user-site.blog.index2', [
            'categories' => $categories,
            'blogCategories' => BlogCategory::all(),
            'blog' => $blog,
            'blogs' => $blogs
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
