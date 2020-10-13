<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_items';

    protected $fillable = ['order_id', 'product_id', 'price', 'quantity', 'sub_total', 'sku_id', 'size_id'];
}
