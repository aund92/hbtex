<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact';

    protected $fillable = ['name', 'email', 'phone_number', 'subject', 'message'];
}
