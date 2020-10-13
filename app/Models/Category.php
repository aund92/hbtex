<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    protected $fillable = ['id', 'category_name', 'image', 'description', 'slug', 'parent_id','icon', 'order'];

    /**
     * Get the comments for the blog post.
     */
    public function childCategory()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    public function products() {
        return $this->hasMany('App\Models\Product', 'category_id', 'id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'category_name'
            ]
        ];
    }
}
