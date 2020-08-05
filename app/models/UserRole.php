<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'user_id',
        'role_id',
    ];
    public $timestamps = false;
}
