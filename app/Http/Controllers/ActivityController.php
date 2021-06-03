<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Activity;

class ActivityController extends Controller
{
    public function showcat(){

        $activity = Activity::all();

        dd($activity);

        return view('home', compact('categories', 'quizzes'));

    }
}
