<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    Use Sluggable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brands';

    protected $fillable = ['brand_name', 'image', 'description', 'slug'];

    public function products() {
        return $this->hasMany('App\Models\Product', 'brand', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
