<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        $feedback = new Feedback();
        $feedback->firstname = request('firstname');
        $feedback->lastname = request('lastname');
        $feedback->email = request('email');
        $feedback->experience = request('experience');
        $feedback->add_more_plans = $request->add_more_plans === 'yes' ? 1 : 0;
        $feedback->additional_feedback = request('additional_feedback');
        $feedback->subscribe_to_notifications = $request->subscribe_to_notifications === 'yes' ? 1 : 0;
        $feedback->subscribe_to_beta = $request->subscribe_to_beta === 'yes' ? 1 : 0;
        
        $feedback->save();

        return redirect('/');
    }
}
