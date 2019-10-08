<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use App\Models\Product;


class ProductsController extends Controller
{
    public function index(int $id, string $product)
    {
        $products = Pharmacy::find($id)->products()->search($product)->orderBy('designation')->get();
        $get = response()->json($products);

        return $get;
    }
}
