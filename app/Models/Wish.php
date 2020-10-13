<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wish extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wish';

    protected $fillable = ['user_id','product_id', 'sku_id', 'size_id'];

    /**
     * Get the phone record associated with the user.
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product','id', 'product_id');
    }
}
