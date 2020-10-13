<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supply extends Model
{

    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'supplys';

    protected $fillable = ['image', 'supply_name', 'email', 'phone_number', 'facebook_url', 'address', 'description'];

    public function products() {
        return $this->hasMany('App\Models\Product', 'supplier', 'id');
    }
}
