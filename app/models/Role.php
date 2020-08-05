<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'id',
    ];
    public $timestamps = false;
}
