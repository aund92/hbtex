<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use Sluggable;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    protected $fillable = ['product_code','product_name', 'image', 'image_2', 'category_id', 'brand', 'country_make', 'origin_price', 'price', 'discount', 'pin', 'hot', 'short_description', 'description', 'slug', 'size_id', 'sku_id','supplier'];

    /**
     * Get the phone record associated with the user.
     */
    public function discountPercent()
    {
        return $this->hasOne('App\Models\Discount','id', 'discount');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function country()
    {
        return $this->hasOne('App\Models\Country','id', 'country_make');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category','id', 'category_id');
    }
    /**
     * Get the phone record associated with the user.
     */
    public function supply()
    {
        return $this->hasOne('App\Models\Supply','id', 'supplier');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function brand2()
    {
        return $this->hasOne('App\Models\Brand','id', 'brand');
    }
    /**
     * Get the phone record associated with the user.
     */
    public function images()
    {
        return $this->hasMany('App\Models\ProductImage','product_id', 'id');
    }

    public function skus()
    {
        return $this->hasMany('App\Models\ProductSku','product_id', 'id');
    }

    public function sizes()
    {
        return $this->hasMany('App\Models\ProductSize','product_id', 'id');
    }

    public function rating()
    {
        return $this->hasMany('App\Models\ProductRating','product_id', 'id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }
}
