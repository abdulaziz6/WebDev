<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'experience', 'add_more_plans', 'additional_feedback', 'subscribe_to_notifications', 'subscribe_to_beta'];
    // or you can use protected $guarded = [];
}
