<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function showCities()
    {
    $cities = City::get();
    return view('create-plan', compact('cities'));
    }
}
