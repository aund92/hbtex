<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductRating extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_rating';

    protected $fillable = ['user_id', 'product_id', 'rating', 'message'];

    /**
     * Get the phone record associated with the user.
     */
    public function user()
    {
        return $this->hasOne('App\User','id', 'user_id');
    }
}
