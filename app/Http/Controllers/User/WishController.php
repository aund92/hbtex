<?php


namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Wish;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WishController extends Controller
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

        return view('user-site.wish.index', [
            'categories2' => $categoires2,
            'wishList' => Wish::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addToWish(Request $request)
    {
        $productId = $request->get('id');
        $wish = Wish::Where('product_id', $productId)
            ->where('user_id', Auth::id())
            ->first();
        if (!$wish) {
            Wish::updateOrCreate([
                'user_id' => Auth::id(),
                'product_id' => $productId,
            ]);
        }

        $response = [
            'message' => 'success',
            'wish_count' => Wish::where('user_id', Auth::id())->count()
        ];
        return response()->json($response);

        return redirect()->route('user.cart.index')->with('success_msg', 'Item is Added to Cart!');
    }

    public function remove($id)
    {
        Wish::find($id)->delete();
        return redirect()->back();
    }
}
