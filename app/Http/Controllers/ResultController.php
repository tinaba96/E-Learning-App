<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use App\Category;
use App\Lesson;
use App\Result;
use App\Quiz;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function store(Request $requests, Lesson $lesson){

        $quiz_id = $requests->quiz_id;

        $answer = Quiz::find($quiz_id)->answer;
        $ur_answer = $requests->ur_answer;

        if($answer == $ur_answer){
            $status = "Correct";
        }else{
            $status = "Wrong";
        }

        $result = Result::create([
            'user_id' => Auth::user()->id,
            'lesson_id' => $lesson->id,
            'quiz_id' => $quiz_id,
            'ur_answer' => $ur_answer,
            'status' => $status,
        ]);


        $results = Result::where('lesson_id', $lesson->id)->get();
        $category = $lesson->category;

        if($requests->nextPageUrl == "end"){
            return view('result', compact('results','category', 'quizzes'));
        }else{
            return redirect($requests->nextPageUrl);
        }
        // return view('take_quiz', compact('lessons'));
        // return view('take_quiz', compact('quizzes', 'lessons'));
    }


    public function show(Quiz $quizzes, Lesson $lesson)
    {
        // $results = Result::all();
        $results = Result::where('lesson_id', $lesson->id)->get();

        // dd($results);

        $category = $lesson->category;


        // $quiz_topic = Lesson::find($results)

        // dd($category);

        return view('result', compact('results','category', 'quizzes'));
    }

}
