<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityActivity;

class CityActivitiesController extends Controller
{
    public function showActivities($city_id)
    {
        $activities = CityActivity::with('city')->where('city_id', $city_id)->get();
        return view('plan', compact('activities'));
    }
}
