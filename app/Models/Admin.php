<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        "user_id",
        "phone",
        "address",
        "image",
        "birth_date",
        "nid",
        "gender",
        "is_active"
    ];

    protected $casts = [
    'birth_date' => 'date',
    'is_active' => 'boolean'
   ];
}
