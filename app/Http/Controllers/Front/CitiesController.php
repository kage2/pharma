<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Zone;

class CitiesController extends Controller
{
    public function index()
    {
        return view('front.city', [
            'cities' => City::get()
        ]);
    }

    public function zone($id)
    {
        $zones = City::find($id)->with('zones')->get();

        return view('front.city', [
            'zones' => $zones
        ]);
    }


    public function pharmacy($id_zone)
    {
        $pharms = Zone::find($id_zone)->pharmacies()->get();

       

        return view('front.pharmacy', [
            'pharms' => $pharms
        ]);
    }
}
