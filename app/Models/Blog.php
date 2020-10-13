<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{

    use Sluggable;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    protected $fillable = ['title', 'short_description', 'description', 'image', 'category_id', 'slug'];
    /**
     * Get the phone record associated with the user.
     */
    public function blogCategory()
    {
        return $this->hasOne('App\Models\BlogCategory','id', 'category_id');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
