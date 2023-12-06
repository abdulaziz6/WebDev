<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityActivity extends Model
{
    use HasFactory;
    protected $table = 'city_activities';
    protected $fillable = ['city_id', 'destination', 'transportation', 'activity'];

    public function cityActivities()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }
}
