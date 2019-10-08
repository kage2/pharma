<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Pharmacy extends Model
{
    use Searchable;

    protected $fillable = [
        'num_pharma',
        'name',
        'zone_id',
        'street',
        'tel',
    ];


    public function commands()
    {
        return $this->hasMany('App\Models\Command');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
