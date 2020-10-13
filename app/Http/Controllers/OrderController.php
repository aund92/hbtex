<?php

namespace App\Http\Controllers;


use App\Consts\Consts;

use App\Mail\OrderSuccessMail;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public const ACTION_CONFIRM = 'confirm';
    public const ACTION_SHIPPING = 'shipping';
    public const ACTION_DONE = 'done';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Order::select('orders.*', 'city_name', 'district_name', 'ward_name')
            ->leftJoin('citys', 'orders.city_id', 'citys.id')
            ->leftJoin('districts', 'orders.district_id', 'districts.id')
            ->leftJoin('ward', 'orders.ward_id', 'ward.id')
            ->orderByDesc('id')
            ->paginate(Consts::ITEM_PER_PAGE);
        return view('order.index', [
            'items' => $items
        ])
            ->with('index', Consts::SIDEBAR_ORDER);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $items = OrderItem::select('order_items.*', 'product_name', 'sku_name', 'size_name')
            ->leftJoin('products', 'order_items.product_id', 'products.id')
            ->leftJoin('product_sku', 'order_items.sku_id', 'product_sku.id')
            ->leftJoin('product_size', 'order_items.size_id', 'product_size.id')
            ->where('order_id', $id)
            ->get();
        return view('order.detail', [
            'items' => $items
        ]);
    }

    public function changeStatus(Request $request)
    {
        $ids = $request->get('ids');
        if (!isset($ids)) {
            return back()->with('error_message', 'Phải Chọn ít nhất 1 đơn hàng');
        }
        $action = $request->get('action');
        if ($action == self::ACTION_CONFIRM) {
            Order::whereIn('id', explode(',', $ids))->update([
                'status' => 2
            ]);
        } elseif ($action == self::ACTION_SHIPPING) {
            Order::whereIn('id', explode(',', $ids))->update([
                'status' => 3
            ]);
        } elseif ($action == self::ACTION_DONE) {
            Order::whereIn('id', explode(',', $ids))->update([
                'status' => 4
            ]);
            $orders = Order::whereIn('id', explode(',', $ids))->get();
            foreach ($orders as $order) {
                $this->sendMail($order->email);
            }

        }
        return redirect()->route('order.index');
    }

    public function sendMail($email)
    {

        $details = [
            'title' => 'Được Gửi từ windyfashion.vn',
            'body' => 'Đơn Hàng Của bạn đã được giao thành công'
        ];

        Mail::to($email)->send(new OrderSuccessMail($details));
    }
}
