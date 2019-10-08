<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function zones()
    {
        return $this->hasMany('App\Models\Zone');
    }
}
