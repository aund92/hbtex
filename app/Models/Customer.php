<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    protected $fillable = ['customer_name', 'email', 'phone_number', 'address', 'gender','city_id', 'district_id', 'ward_id'];
}
