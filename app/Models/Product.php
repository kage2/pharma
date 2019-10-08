<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;
    protected $fillable = [
        'codeCIP',
        'designation',
        'stock',
        'price',
        'pharmacy_id',
        "modified_at"
    ];
    public $timestamps = false;

    public function commands()
    {
        return $this->belongsToMany('App\Models\Command');
    }

    public function pharmacy()
    {
        return $this->belongsTo('App\Models\Pharmacy');
    }
}
