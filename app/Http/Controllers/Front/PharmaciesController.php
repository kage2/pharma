<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use App\Repositories\productRepository;

class PharmaciesController extends Controller
{
    private $stock;

    public function __construct(productRepository $stock)
    {
        $this->stock = $stock;
    }

    public function getStock($id)
    {
        $num_pharma = Pharmacy::find($id);
        //dd($num_pharma->num_pharma);
        $stocks = $this->stock->QueryStock($num_pharma->num_pharma, $num_pharma->login, $num_pharma->password);


    }
}
