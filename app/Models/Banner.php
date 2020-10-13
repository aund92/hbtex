<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banner';

    protected $fillable = ['content', 'image', 'position', 'category_id'];

    /**
     * Get the phone record associated with the user.
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category','id', 'category_id');
    }

}
