<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    protected $fillable = ['customer_name', 'gender', 'phone_number', 'email', 'user_id','customer_id', 'city_id', 'district_id', 'address_shipping', 'note','ward_id', 'payment_method', 'status'];

    public function orderItem() {
        return $this->hasMany('App\Models\OrderItem', 'order_id', 'id');
    }
}
