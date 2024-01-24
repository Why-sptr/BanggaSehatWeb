<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RumahSakitController extends Controller
{
    public function index(Request $request)
    {
        $rumahSakitTerdekat = RumahSakit::get();

        return view('rs-terdekat', compact('rumahSakitTerdekat'));
    }
    public function cariTerdekat(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $rumahSakitTerdekat = RumahSakit::selectRaw(
            '*,
        (6371 * acos(cos(radians(' . $latitude . ')) * cos(radians(latitude)) * cos(radians(longitude) - radians(' . $longitude . ')) + sin(radians(' . $latitude . ')) * sin(radians(latitude)))) AS distance'
        )->whereRaw('(6371 * acos(cos(radians(' . $latitude . ')) * cos(radians(latitude)) * cos(radians(longitude) - radians(' . $longitude . ')) + sin(radians(' . $latitude . ')) * sin(radians(latitude)))) <= 30')
            ->orderBy('distance')
            ->get();

        return View::make('rs-terdekat', ['rumahSakitTerdekat' => $rumahSakitTerdekat]);
    }
}
