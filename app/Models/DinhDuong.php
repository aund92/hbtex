<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DinhDuong extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dinhduong';

    protected $fillable = ['ten_mon_an','don_vi', 'so_luong','Kcalo','chat_beo','type'];

    /**
     * Get the phone record associated with the user.
     */
    public function category()
    {
        return $this->hasOne('App\Models\BlogCategory','id', 'type');
    }
}
