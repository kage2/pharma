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
            $cities =City::get();
            return view('front.city', [
                'cities' => $cities
            ]);

    }

    public function show($id)
    {
        $cities = City::find($id)->zones()->get();

        return view('front.show', [
            'cities' => $cities
        ]);
    }

    public function zone($id)
    {
        $zones = City::find($id)->zones()->get();

        return response()->json($zones);
    }


    public function pharmacy($id_zone)
    {
        $pharms = Zone::find($id_zone)->pharmacies()->get();



        return view('front.pharmacy', [
            'pharms' => $pharms
        ]);
    }
}
