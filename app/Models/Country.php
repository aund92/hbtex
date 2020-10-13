<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    protected $fillable = ['country_name', 'icon'];

    public function products() {
        return $this->hasMany('App\Models\Product', 'country_make', 'id');
    }

}
