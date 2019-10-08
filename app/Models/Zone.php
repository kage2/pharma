<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'name', 'city_id'
    ];

    public $timestamps = false;

    public function pharmacies()
    {
        return $this->hasMany('App\Models\Pharmacy');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
