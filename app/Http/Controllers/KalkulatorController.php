<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function bmi()
    {
        return view('bmi');
    }
    public function kalori()
    {
        return view('kalori');
    }
    public function hpl()
    {
        return view('hpl');
    }

}
